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
    });

----------------------------------------------------------------------------------------------------*/

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
});

------------------------------------------------------------------------------------------------------*/


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

/*-----------------------------------------------------------------------------------------------------------

$("#fadeIn").click(function() {
    $(".box-red").fadeIn();
    $(".box-blue").fadeIn(3000);
    $(".box-yellow").fadeIn("slow", function() {
        alert("Gosterildi");
    });
});

$("#fadeOut").click(function() {
    $(".box-red").fadeOut();
    $(".box-blue").fadeOut("slow");
    $(".box-yellow").fadeOut(3000);
});

$("#fadeToggle").click(function() {
    $(".ox-red").fadeToggle();
    $(".box-blue").fadeToggle("slow");
    $(".box-yellow").fadeToggle(3000);
});

$("#fadeTo").click(function() {
    $(".box-red").fadeTo("fast", 0.2);
    $(".box-blue").fadeTo("fast", 0.4);
    $(".box-yellow").fadeTo("fast", 0.8);
});

---------------------------------------------------------------------------------------------------------------*/

/*$(function() {

    $("#btnPanel").click(function() {
        $("#panel").fadeToggle(1500, function() {
            alert("panel durumu değişti");
        })
    })
})
    
---------------------------------------------------------------------------------------------------------------*/


$(document).ready(function() {

    $("#SlideDown").click(function() {
        $(".panel").slideDown(1000, function() {
            alert("Panel Acildi");
        });
    })

    $("#SlideUp").click(function() {
        $(".panel").slideUp(1000, function() {
            alert("Panel Kapandi");
        });
    })

    $("#SlideToggle").click(function() {
        $(".panel").slideToggle(1000, function() {
            alert("Panel durumu degisti");
        });
    })
})