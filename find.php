<?php

function search(){
	include_once("check_session.php");

	$return = $_POST;

	$keyword = strip_tags($_POST['searchBox']);
	$cuisine = strip_tags($_POST['searchBox']);
	$health = strip_tags($_POST['health']);
	$price = strip_tags($_POST['price']);
	$distance = strip_tags($_POST['distance']);
	$syncid = $_SESSION['syncid'];

     try{

        $stmt = $db->prepare("INSERT INTO search_history (health_rating, price_range, distance, search_tag, cuisine_tag,  syncid, time) 
        VALUES ( :health, :price, :distance, :keyword, :cuisine, :syncid , now())");
        $stmt->bindParam(':health',$health,PDO::PARAM_STR);
        $stmt->bindParam(':price',$price,PDO::PARAM_STR);
        $stmt->bindParam(':distance',$distance,PDO::PARAM_STR);
        $stmt->bindParam(':keyword',$keyword,PDO::PARAM_STR);
        $stmt->bindParam(':cuisine',$cuisine,PDO::PARAM_STR);
        $stmt->bindParam(':syncid',$syncid,PDO::PARAM_STR);
        $stmt->execute();

        // $return["response"] = "Success";
        // echo json_encode($return);
        // exit();

        $cuisine = '%'.$cuisine.'%';
		$stmt1 = $db->query("SELECT * FROM restaurants WHERE LOWER(cuisine) like LOWER(:cuisine) having max(gradedate) order by gradedate desc");
		$stmt1->bindValue(':cuisine',$cuisine,PDO::PARAM_STR);
		if ($stmt1) {

		    /* Check the number of rows that match the SELECT statement */
		  if ($res->fetchColumn() > 0) {

		        /* Issue the real SELECT statement and work with the results */
		         $sql = "SELECT name FROM fruit WHERE calories > 100";
		       foreach ($conn->query($sql) as $row) {
		           print "Name: " .  $row['NAME'] . "\n";
		         }
		    }
		    /* No rows matched -- do something else */
		  else {
		      print "No rows matched the query.";
		    }
		}

		$stmt1 = $db->query("SELECT * FROM restaurants WHERE LOWER(cuisine) like LOWER(:cuisine) having max(gradedate) order by gradedate desc");
		$stmt1->bindValue(':cuisine',$cuisine,PDO::PARAM_STR);
		try{
			$stmt1->execute();
			$count = $stmt1->rowCount();
			if($count > 0){
				while($row = $stmt1->fetch(PDO::FETCH_ASSOC)){
					$name = $count;
				}
			}else{
				$return["response"] = "Unable to find any restaurants matching the criteria";
				echo json_encode($return);
				$db = null;
	    		exit();
			}
			$return["response"] = $name;
			echo json_encode($return);
			$db = null;
    		exit();
			}
		catch(PDOException $e){
		$return["response"] = $e->getMessage();
		echo json_encode($return);
		$db = null;
		exit();
		}

      }
      catch(PDOException $e){
        $return["response"] = $e->getMessage();
        echo json_encode($return);
        $db = null;
      exit();
      }

}

?>