 var width = window.innerWidth;

 var search, sideBar;


 $(window).load(function () {



     search = new searchPage();
     sideBar = new topRestBar();


     $("#menuButton").click(function () {
         mobileMenu();
     });


     $(".leftResult, .swipeIndicator, .rightResult").click(function () {

         if ($(this).parent(".resultsOverflow").hasClass("resultSwiped")) {
             if ($(this).hasClass("rightResult")) {} else {
                 $(this).parent(".resultsOverflow").removeClass("resultSwiped");
             }
         } else {
             if ($(this).hasClass("leftResult")) {

             } else {
                 $(this).parent(".resultsOverflow").addClass("resultSwiped");
             }
         }

     });



     $(".resultsOverflow").swipe({
         //Generic swipe handler for all directions
         swipeStatus: function (event, direction, distance, duration, fingerCount) {
             console.log(distance);
             if (distance == "left") {
                 $(this).addClass("resultSwiped");

             } else if (distance == "right") {
                 $(this).removeClass("resultSwiped");

             }
         },
         //Default is 75px, set to 0 for demo so any distance triggers swipe
         threshold: 5,
         allowPageScroll: "vertical"
     });




     $(".topCell").mouseenter(function () {

         var filterNumber = $(this).attr("number");
         dimItDown($(".topRestImg"), filterNumber, .35);
     });

     $(".topCell").mouseleave(function () {
         var filterNumber = $(this).attr("number");
         dimItDown($(".topRestImg"), filterNumber, .86);

     });




 });









 $(window).resize(function () {

     search.resizer();
     sideBar.resizer();

 });






 //start of top restaurant sidebar object
 function topRestBar() {

     this.view = "topRest";




     this.width = window.innerWidth;
     this.resizeTopRestaraunts = function () {
         if (this.width > 1024) {

             $("img.topRestImg").each(function () {
                 $(this).parent(".topCell").removeAttr('style');
                 var h = $(this).height();
                 console.log($(this).height());
                 $(this).parent(".topCell").css("height", h);
                 $(this).parent(".topCell").css("left", "0px");
             });
         } else {
             var xPos = 0;
             $("img.topRestImg").each(function () {
                 $(this).parent(".topCell").removeAttr('style');
                 var w = $(this).width();
                 console.log($(this).width());
                 $(this).parent(".topCell").css("width", w);
                 $(this).parent(".topCell").css("left", xPos);
                 xPos += $(this).parent(".topCell").width() + 10;

             });

         }


     };



     this.resizer = function () {
         this.width = window.innerWidth;
         this.resizeTopRestaraunts();
     };

     this.resizer();

     this.destroy = function () {


     }

 }

 function searchPage() {


    $("#search").submit(function () {
        //alert("search");
        var data = {
            "action": "search"
        };
        data = $(this).serialize() + "&" + $.param(data);
        $.ajax({
            type: "POST",
            dataType: "json",
            url: "response.php", //Relative or absolute path to response.php file
            data: data,
            success: function (data) {
                // $(".the-return").html(
                //   "user_name: " + data["user_name"] + "<br />user_email: " + data["user_email"] + "<br />user_pwd: " + data["user_pwd"] + "<br />JSON: " + data["json"] + "<br />auth: " + data["auth"]
                // );

                // alert("Form submitted successfully.\nReturned json: " + data["response"]);
                if (data["response"] == "Authenticated") {
                    window.location.replace("search.php");
                }else if (data["response"] == "Registered") {
                    window.location.replace("settings.php");
                } else {
                    alert(data["response"]);
                    $(".the-return").html(data["response"]);
                }
            }
        });
        return false;
    });



     $("#cameraUpload").show();
     jQuery(".addText").fitText(.45);
     this.resizer = function () {

     };

     this.destroy = function () {


     };


 }






 function dimItDown(theClass, filterNumber, opac) {
     if (width > 1024) {
         theClass.each(function () {
             if ($(this).parent().attr("number") == filterNumber) {
                 //do Nothing   
             } else {
                 $(this).css("opacity", opac);
             }

         });
     }

 }


 function mobileMenu() {
     if (width <= 1024) {
         var cont = $("#topNav");
         if (cont.hasClass("menuShown")) {
             cont.removeClass("menuShown");
             $("#container").removeAttr("style");
             $("#cameraUpload").removeClass("displayOn");
         } else {
             cont.addClass("menuShown");
             $("#container").css("opacity", ".6");
             $("#cameraUpload").addClass("displayOn");
         }

     }

 }

