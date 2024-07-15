$(document).ready(function() {

    /* $("button").click(function() {
         $("p").hide();
     });*/

    /*$("#buttonhide").click(function() {
        $(".paragraph").hide();
    });*/

    /*$("p").dblclick(function() {
        $(this).hide();
    });*/

    /*$("p").mouseenter(function() {
        $(this).hide();
    });*/

    /*$("p").mouseleave(function() {
        $(this).hide();
    });*/

    /*$("p").mousedown(function() {
        $(this).hide();
    });*/

    /*$("p").mouseup(function() {
        $(this).hide();
    });*/

    //mouseenter ve mouseup fonksiyonlarinin birlesimi
    /*$("p").hover(function() {
            $(this).hide();
        },
        function() {
            $(this).show();
        });*/


    /*$("p").on({
        mouseenter: function() {
            $(this).css("background-color", "lightgray");
        },
        mouseleave: function() {
            $(this).css("background-color", "lightblue");
        },
        click: function() {
            $(this).css("background-color", "red");
        }
    });


    $("input").focus(function() {
        $(this).css("background-color", "lightyellow");
    });


    $("input").blur(function() {
        $(this).css("background-color", "gray");
    });*/


    /*$("#hide").click(function() {
        $("p").hide(1000, function() {
            alert("Gizlendi");
        });
    });

    $("#show").click(function() {
        $("p").show("slow", function() {
            alert("Gösterildi");
        });
    });

    $("#toggle").click(function() {
        $("p").toggle("fast", function() {
            alert("Durum Değiştirildi");
        });
    });*/



    $("#fadeIn").click(function() {
        $("box-red").fadeIn();
        $("box-blue").fadeIn("slow");
        $("box-yellow").fadeIn(3000);
    });

    $("#fadeOut").click(function() {
        $("box-red").fadeIn();
        $("box-blue").fadeIn("slow");
        $("box-yellow").fadeIn(3000);
    });

    $("#fadeToggle").click(function() {
        $("box-red").fadeIn();
        $("box-blue").fadeIn("slow");
        $("box-yellow").fadeIn(3000);
    });

    $("#fadeTo").click(function() {
        $("box-red").fadeIn();
        $("box-blue").fadeIn("slow");
        $("box-yellow").fadeIn(3000);
    });

});