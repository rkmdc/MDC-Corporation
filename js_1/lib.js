
// Listen for orientation changes
window.addEventListener("orientationchange", function() {
    // Announce the new orientation number
    location.reload();
}, false);
function drawBand()
{
    var c = document.getElementById("myCanvas");
    c.width = $('.Band_Content').width();
    c.height = $('.Band_Content').height();

    var ctx = c.getContext("2d");
    ctx.width = $('.Band_Content').width();

    var responsive_height = ($('.Band_Content').height()) / 21;
    var responsive_height_Offset = responsive_height / 2;


    ctx.beginPath();
    ctx.moveTo(0, responsive_height);
    ctx.lineTo(ctx.width, responsive_height);
    ctx.lineWidth = responsive_height;
    ctx.strokeStyle = '#575756';
    ctx.stroke();


    ctx.beginPath();
    ctx.moveTo(0, (responsive_height) * 2 + responsive_height_Offset);
    ctx.lineTo(ctx.width, (responsive_height) * 2 + responsive_height_Offset);
    console.log($('.Band_Content').height());
    ctx.lineWidth = responsive_height;
    ctx.strokeStyle = '#84250d';
    ctx.stroke();


    ctx.beginPath();
    ctx.moveTo(0, (responsive_height) * 3 + responsive_height_Offset * 2);
    ctx.lineTo(ctx.width, (responsive_height) * 3 + responsive_height_Offset * 2);
    console.log($('.Band_Content').height());
    ctx.lineWidth = responsive_height;
    ctx.strokeStyle = '#1e4998';
    ctx.stroke();


    ctx.beginPath();
    ctx.moveTo(0, (responsive_height) * 4 + responsive_height_Offset * 3);
    ctx.lineTo(ctx.width, (responsive_height) * 4 + responsive_height_Offset * 3);
    console.log($('.Band_Content').height());
    ctx.lineWidth = responsive_height;
    ctx.strokeStyle = '#6c3c1b';
    ctx.stroke();


    ctx.beginPath();
    ctx.moveTo(0, (responsive_height) * 5 + responsive_height_Offset * 4);
    ctx.lineTo(ctx.width, (responsive_height) * 5 + responsive_height_Offset * 4);
    console.log($('.Band_Content').height());
    ctx.lineWidth = responsive_height;
    ctx.strokeStyle = '#5c167d';
    ctx.stroke();

    ctx.beginPath();
    ctx.moveTo(0, (responsive_height) * 6 + responsive_height_Offset * 5);
    ctx.lineTo(ctx.width, (responsive_height) * 6 + responsive_height_Offset * 5);
    console.log($('.Band_Content').height());
    ctx.lineWidth = responsive_height;
    ctx.strokeStyle = '#e47d28';
    ctx.stroke();

    ctx.beginPath();
    ctx.moveTo(0, (responsive_height) * 7 + responsive_height_Offset * 6);
    ctx.lineTo(ctx.width, (responsive_height) * 7 + responsive_height_Offset * 6);
    console.log($('.Band_Content').height());
    ctx.lineWidth = responsive_height;
    ctx.strokeStyle = '#ad873e';
    ctx.stroke();
}
$(window).resize(function() {
    drawBand();
});
drawBand();
$('.Line_band').animate({
    'left': "100%", 'width': "0px"
}, 5000, function() {


    //        $('.Line_band').animate({
    //            'width': "0px"
    //        }, 5000);

    //        Fincorp Jquery
    $("#header_Fincorp").hover(
            function() {
                $("#Content_Fincorp").css("opacity", "1");
            },
            function() {
                $("#Content_Fincorp").css("opacity", "0");
            }
    );

    //        Fincorp Jquery
    $("#header_Concepts").hover(
            function() {
                $("#Content_Concepts").css("opacity", "1");
            },
            function() {
                $("#Content_Concepts").css("opacity", "0");
            }
    );

    //        Realty Jquery
    $("#header_Realty").hover(
            function() {
                $("#Content_Realty").css("opacity", "1");
            },
            function() {
                $("#Content_Realty").css("opacity", "0");
            }
    );

    //        LifeStyle Jquery
    $("#header_LifeStyle").hover(
            function() {
                $("#Content_LifeStyle").css("opacity", "1");
            },
            function() {
                $("#Content_LifeStyle").css("opacity", "0");
            }
    );

    //        Fitness Jquery
    $("#header_Fitness").hover(
            function() {
                $("#Content_Fitness").css("opacity", "1");
            },
            function() {
                $("#Content_Fitness").css("opacity", "0");
            }
    );

    //        Foundation Jquery
    $("#header_Foundation").hover(
            function() {
                $("#Content_Foundation").css("opacity", "1");
            },
            function() {
                $("#Content_Foundation").css("opacity", "0");
            }
    );

    //        Logo Jquery
    $(".logo").hover(
            function() {
                $("#Content_Fincorp").css("opacity", "1");
                $("#Content_Concepts").css("opacity", "1");
                $("#Content_Realty").css("opacity", "1");
                $("#Content_LifeStyle").css("opacity", "1");
                $("#Content_Fitness").css("opacity", "1");
                $("#Content_Foundation").css("opacity", "1");
            },
            function() {
                $("#Content_Fincorp").css("opacity", "0");
                $("#Content_Concepts").css("opacity", "0");
                $("#Content_Realty").css("opacity", "0");
                $("#Content_LifeStyle").css("opacity", "0");
                $("#Content_Fitness").css("opacity", "0");
                $("#Content_Foundation").css("opacity", "0");
            }

    );
});

setTimeout(function() {
    drawLineArtVerticalLineFincorp();
}, 1300);
function drawLineArtVerticalLineFincorp() {
    var c = document.getElementById("Vertical_Line_Fincorp");
    c.width = $('#VerticalLineFincorp').width();
    c.height = $('#VerticalLineFincorp').height();
    var ctx = c.getContext("2d");
    ctx.width = $('#VerticalLineFincorp').width();

    var pointto = $('#VerticalLineFincorp').height();
    setInterval(function() {
        if (pointto !== 15)
        {
            pointto = pointto - 1;
            console.log(pointto);
            ctx.beginPath();
            ctx.moveTo(0, $('#VerticalLineFincorp').height());
            ctx.lineTo(0, pointto);
            ctx.lineWidth = ($('.Band_Content_wrapper').height()) / 12;
            ctx.strokeStyle = '#84250d';
            ctx.stroke();
        } else {
            $("#header_Fincorp").fadeIn('slow');
        }
    }, 10);
}
setTimeout(function() {
    drawLineArtVerticalLineConcept();
}, 1800);

function  drawLineArtVerticalLineConcept() {
    var c = document.getElementById("Vertical_Line_Concept");
    c.width = $('#VerticalLineConcept').width();
    c.height = $('#VerticalLineConcept').height();
    var ctx = c.getContext("2d");
    ctx.width = $('#VerticalLineConcept').width();

    var pointto = $('#VerticalLineConcept').height();
    setInterval(function() {
        if (pointto !== 15)
        {
            pointto = pointto - 1;
            console.log(pointto);
            ctx.beginPath();
            ctx.moveTo(0, $('#VerticalLineFincorp').height());
            ctx.lineTo(0, pointto);
            ctx.lineWidth = ($('.Band_Content_wrapper').height()) / 12;
            ctx.strokeStyle = '#1e4998';
            ctx.stroke();
        } else {
            $("#header_Concepts").fadeIn('slow');
        }
    }, 10);
}
setTimeout(function() {
    drawLineArtVerticalLineReality();
}, 2400);

function drawLineArtVerticalLineReality() {
    var c = document.getElementById("Vertical_Line_Reality");
    c.width = $('#VerticalLineReality').width();
    c.height = $('#VerticalLineReality').height();
    var ctx = c.getContext("2d");
    ctx.width = $('#VerticalLineReality').width();

    var pointto = $('#VerticalLineReality').height();
    setInterval(function() {
        if (pointto !== 15)
        {
            pointto = pointto - 1;
            console.log(pointto);
            ctx.beginPath();
            ctx.moveTo(0, $('#VerticalLineReality').height());
            ctx.lineTo(0, pointto);
            ctx.lineWidth = ($('.Band_Content_wrapper').height()) / 12;
            ctx.strokeStyle = '#6c3c1b';
            ctx.stroke();
        } else {
            $("#header_Realty").fadeIn('slow');
        }
    }, 10);
}
setTimeout(function() {
    drawLineArtVerticalLineVerticalLineLifestyle();
}, 2800);

function drawLineArtVerticalLineVerticalLineLifestyle() {
    var c = document.getElementById("Vertical_Line_Lifestyle");
    c.width = $('#VerticalLineLifestyle').width();
    c.height = $('#VerticalLineLifestyle').height();
    var ctx = c.getContext("2d");
    ctx.width = $('#VerticalLineLifestyle').width();

    var pointto = $('#VerticalLineLifestyle').height();
    setInterval(function() {
        if (pointto !== 15)
        {
            pointto = pointto - 1;
            console.log(pointto);
            ctx.beginPath();
            ctx.moveTo(0, $('#VerticalLineLifestyle').height());
            ctx.lineTo(0, pointto);
            ctx.lineWidth = ($('.Band_Content_wrapper').height()) / 12;
            ctx.strokeStyle = '#5c167d';
            ctx.stroke();
        } else {
            $("#header_LifeStyle").fadeIn('slow');
        }
    }, 10);
}
setTimeout(function() {
    drawLineArtVerticalLineVerticalLineFitness();
}, 3200);

function  drawLineArtVerticalLineVerticalLineFitness() {
    var c = document.getElementById("Vertical_Line_Fitness");
    c.width = $('#VerticalLineFitness').width();
    c.height = $('#VerticalLineFitness').height();
    var ctx = c.getContext("2d");
    ctx.width = $('#VerticalLineFitness').width();

    var pointto = $('#VerticalLineFitness').height();
    setInterval(function() {
        if (pointto !== 15)
        {
            pointto = pointto - 1;
            console.log(pointto);
            ctx.beginPath();
            ctx.moveTo(0, $('#VerticalLineFitness').height());
            ctx.lineTo(0, pointto);
            ctx.lineWidth = ($('.Band_Content_wrapper').height()) / 12;
            ctx.strokeStyle = '#e47d28';
            ctx.stroke();
        } else {
            $("#header_Fitness").fadeIn('slow');
        }
    }, 10);
}
setTimeout(function() {
    drawLineArtVerticalLineVerticalLineFoundation();
}, 3600);

function drawLineArtVerticalLineVerticalLineFoundation() {
    var c = document.getElementById("Vertical_Line_Foundation");
    c.width = $('#VerticalLineFoundation').width();
    c.height = $('#VerticalLineFoundation').height();
    var ctx = c.getContext("2d");
    ctx.width = $('#VerticalLineFoundation').width();

    var pointto = $('#VerticalLineFoundation').height();
    setInterval(function() {
        if (pointto !== 15)
        {
            pointto = pointto - 1;
            console.log(pointto);
            ctx.beginPath();
            ctx.moveTo(0, $('#VerticalLineFoundation').height());
            ctx.lineTo(0, pointto);
            ctx.lineWidth = ($('.Band_Content_wrapper').height()) / 12;
            ctx.strokeStyle = '#ad873e';
            ctx.stroke();
        } else {
            $("#header_Foundation").fadeIn('slow');
        }
    }, 10);
}