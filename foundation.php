<?php include './util.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <?php include './head-data.php'; ?>
        <style>
            body{
                background-color:#ad873e;             
            }
        </style>
        <script src="js/d3.v3.min.js"></script>
        <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
    </head>
    <body>
        <div class="menu2">
            <div class="flagdiv">
                Welcome India FDIS
            </div>
            <div class="flagimage">
                <img src="images/Flag_of_India.svg" style="width: 88%;">
            </div>
            <?php include './menu.php'; ?>
        </div>
        <div class="lineart">
            <div class="svgline">
                <svg id="Foundation_Core_Line_Art" viewbox="0 0 1200 170" preserveAspectRatio="xMinYMin meet" >

                </svg>
            </div>
            <div class="Small_Parts_hover" style="display: none;">
                <svg viewbox="0 0 1200 170" preserveAspectRatio="xMinYMin meet">
                <rect xmlns="http://www.w3.org/2000/svg" x="821.592" y="15.209" fill="none" stroke="#FFFFFF" stroke-linejoin="round" stroke-miterlimit="2.6131" width="5.959" height="8.762" style="
                      stroke-width: 1.8px;
                      "/>
                </svg>
            </div>

        </div>
        <div class="Text_Wrapper">
            <p>
                Let’s see beyond ourselves, so others can see hope......<br />
                India is on the upward spiral when it comes to economic development but it lags behind in social development. MDC Corporation has always aimed to help the disadvantaged and usher in a positive change for the welfare of people from all sections of society. Charity begins at home and so, MDC Foundation is incorporated with an aim to provide help and support to those that do not have the resources to take care of themselves. It aims to reach out to the disabled, pilgrims, the impoverished, particularly those widowed or orphaned, the ailing or injured and the aged.<br/>

                MDC Foundation also allows benefactors to choose which cause they would like to pledge support to and is the first foundation in the world which has the unique facility of tracking how and where their contribution is being utilized.


            </p>
        </div>

        <a href="index.php"><img class="Home_MDCCoorpLogo" src="images/MDCFoundation_Logo.png"></a>

        <?php include './footer.php'; ?>
        <script type="text/javascript" >
            var svg = d3.select("#Foundation_Core_Line_Art");

            svg.append("path")
                    .style("stroke", "white")
                    .style("fill", "none")
                    .style("stroke-width", "1.8px")
                    .attr("d", "M0,96.535c0,0,0-0.176,11.803-0.176  C65,94.25,46.5,64.964,43.407,62.009C35.5,56,26.034,67.925,26.034,67.925s2.596-10.622,16.978-11.989  c7.328-0.697,18.873-3.079,23.242-14.674c0,0,7.81-22.826-9.733-26.562c-3.863-0.824-13.875-0.093-11.383,11.719  c0,0-15.366-6.933-15.548,4.34c-0.229,14.039,26.457,11.116,35.822,14.647c3.67,1.382,15.364,4.649,9.247,15.082  c-4.115,7.02-12.542,5.677-23.776,0.249c0,0,19.92,17.521,26.65,6.41c3.805-6.282,7.365-14.704,14.703-6.029  c0,0-6.889,1.838-5.93,4.398c1.768,4.721,5.375,15.811-11.025,15.811c0,0,2.219,10.766,27.219,7.843v-0.013  c0,0-6.483-42.656,20.174-55.656h-0.01c-0.794-1-1.239-2.455-1.239-3.826c0-3.531,3.121-6.465,6.941-6.465  c3.817,0,6.963,2.828,6.963,6.358c0,3.53-2.854,6.376-6.67,6.376c-0.517,0-1.158-0.068-1.158-0.168v-0.006l-2.398,10.2  c0,0,2.987,3.698,5.655,5.072c0,0,0.96-17.138,18.2-23.351l-0.026,0.002c-0.166-0.547-0.266-1.125-0.266-1.723  c0-3.53,3.092-6.393,6.91-6.393c3.818,0,6.911,2.864,6.911,6.393c0,3.531-3.096,6.394-6.914,6.394c-1.133,0-2.204-0.251-3.151-0.698  l0.004,0.008c-0.373,0.686-3.494,7.434,11.824,18.962c3.11,2.343,6.052,4.263,6.052,4.263l3.907,2.627  c-0.255-0.135,8.274,3.88,18.817-10.744l2.609,18.787l19.004,0.094l6.335,14.206c14.967-9.201,22.209-32.003,22.49-32.796  c0.547-1.541,1.099-11.531-6.72-12.401c5.278,3.413,3.049,9.892,3.049,9.892c-1.48,3.458-10.294,4.812-10.294,4.812  c4.006,1.415,9.928-0.547,9.928-0.547c-6.189,13.561-16.564-0.174-16.564-0.174c3.076,0.442,5.149-1.668,5.149-1.668  c2.976-2.569,6.166-1.767,6.166-1.767c-5.974-3.626-2.378-11.328-2.378-11.328c2.619-4.373,0.882-7.811,0.882-7.811  c16.937,6.995,12.048,20.107,12.048,20.107L243.252,52c0,0,2.499-6.52,7.546-9.145c4.833-2.75,10.961-4.195,20.677-0.832  c0,0-3.924,1.113-5.686,5.836c0,0-3.779,7.625-10.689,5.949c0,0,2.778,1.658,2.709,5.42c0,0-0.309,2.838,2.107,4.653  c0,0-18.057,4.034-12.935-11.632c0,0,1.334,8.23,7.913,7.556c0,0-4.055-7.558-2.475-10.399c0,0,2.301-4.43,9.435-4.422  c0,0-7.35-3.613-13.495,2.434c-5.241,5.953-5.008,10.874-5.008,10.874l-0.095,1.866c0,14.838,13.266,26.753,29.315,26.753  c16.049,0,29.057-12.032,29.057-26.874l0.123-0.027l4.536,3.876l-0.45-5.696l6.107-0.865l-5.098-3.226l3.076-4.952l-5.902,1.674  l-2.27-5.313l-2.269,5.313l-5.907-1.674l3.08,4.952l-5.097,3.226l6.105,0.865c0,0-1.504,3.822,0.189,6.467  c6.623,10.344,19.117,4.725,19.117,4.725c2.204-0.88,4.672-2.963,6.655-5.271c-2.406,2.955-1.758,7.15,1.435,9.378  c3.195,2.224,7.74,1.633,10.148-1.321c0,0,2.847-2.48,12.064,5.37c4.44,3.78,17.861,11.521,29.672-0.376  c0,0-8.344,8.967-7.764,16.868l16.322,0.315V83.5h9v13.51l8.637,0.012l-2.329,1.889l3.684,3.992l9.37-8.573l-7.437-7.351  c0,0,3.14-3.02,7.539-0.248l-3.29,3.06l-4.687,4.354l8.898,8.433l3.588-3.673l-4.62-4.581c3.627-3.702,4.373-3.822,5.771-3.822  s7.322,0,7.322,0s9.502-15.457,32.926-4.092c23.427,11.364,29.431-4.729,29.527-5.265l0.103-64.645H530.5v6h-35v23h30v5h-30v28.669  l52.27-0.394l-0.086,0.008c-9.17-3.215-15.069-12.176-15.069-22.307c0-12.792,9.677-23.744,22.73-23.744  c13.055,0,22.731,10.952,22.731,23.744c0,10.647-6.651,20-16.56,22.752l35.354,0.043c-6.229-2.107-9.371-8.512-9.371-18.939V33.5h6  v25.78c0,10.427,3.463,15.508,10.561,15.508c7.099,0,14.437-4.906,16.437-12.528V33.5h6v37.959c0,1.664,1,2.453,2,2.453v5.257  c-1,0.175-1.66,0.263-2.273,0.263c-2.717,0-4.727-1.84-4.727-4.293V68.83c-4,7.098-11.48,11.174-19.453,11.174l-0.131,4.496h38.104  l0.479-5.331V33.5h5v10.359c4-6.658,11.331-11.127,19.392-11.127c10.252,0,13.608,7.711,13.608,19.714V79.5h-6V53.672  c0-10.777-2.836-15.509-9.494-15.509c-7.098,0-14.506,5.521-16.506,13.055v27.95l0.075,9.641l40.974-0.269l0.102-32.064  c0-12.88,9.037-23.744,21.128-23.744c7.711,0,13.723,4.644,17.723,10.339V15.5h6v55.957c0,1.664,0,2.453,2,2.453v5.257  c-1,0.175-2.074,0.263-2.688,0.263c-2.89,0-5.313-1.928-5.313-4.293v-4.818c-3,5.957-10.56,10.181-17.22,10.181h0.174  c-3.07,0-12.485-0.228-16.735-11.231l-0.071,14.971l49.092-0.404l-0.122-17.72c0-8.499,7.938-14.02,19.329-14.02  c4.557,0,9.555,0.876,13.555,2.365v-4.117c0-8.061-5.122-13.143-12.919-13.143c-4.818,0-9.876,1.928-14.87,5.432l-2.04-3.942  c5.869-3.942,11.47-5.958,17.515-5.958c11.039,0,18.314,6.834,18.314,18.137v20.59c0,1.664,1,2.453,2,2.453v5.257  c-1,0.087-1.873,0.175-2.486,0.175c-2.365,0-4.802-1.4-4.979-4.205l-0.155-3.592c-3.942,5.344-11.117,8.498-17.688,8.498  c-3.433,0-6.449-0.878-8.9-2.335l-0.581,10.79h46.791V70.934V38.5h-6v-5h7v-15h5v15h11v5h-11v30.77c1,3.328,2.664,4.905,5.553,4.905  c3.332,0,6.141-1.577,6.841-2.015l1.636,4.721c-1.4,0.613-5.375,2.619-10.28,2.619H821.5v-46h6v44.458l22.743-0.104l0.021,0.004  c-7.893-3.797-12.896-12.098-12.896-21.38c0-12.792,9.644-23.744,22.699-23.744c13.055,0,22.704,10.952,22.704,23.744  c0,10.671-6.715,20.046-16.664,22.772l-0.054,0.048l26.327-0.08l0.119-0.048V33.5h6v10.359c3-6.658,11.33-11.127,19.393-11.127  c10.25,0,13.607,7.711,13.607,19.714V79.5h-6V53.674c0-10.777-3.337-15.509-9.995-15.509c-7.097,0-14.005,5.521-17.005,13.055v27.95  l-0.084,5.205L1375,84.427")
                    .call(transition);
            function transition(path) {
                path.transition()
                        .ease("in-out")
                        .duration(30000)
                        .attrTween("stroke-dasharray", tweenDash)
                        .each("end", function() {
                        });

            }
            function tweenDash() {
                var l = this.getTotalLength(),
                        i = d3.interpolateString("0," + l, l + "," + l);
                return function(t) {
                    return i(t);
                };
            }
            setTimeout(function() {
                svg.append("path")
                        .style("stroke", "white")
                        .style("fill", "none")
                        .style("stroke-width", "1.8px")
                        .attr("d", "M46.038,48.528c-0.285,2.22-1.9,4.008-3.609,3.999  c-1.713-0.011-2.866-1.816-2.584-4.032c0.284-2.219,1.899-4.008,3.611-3.997C45.167,44.508,46.319,46.313,46.038,48.528z")
                        .call(transition_1);
                function transition_1(path) {
                    path.transition()
                            .ease("in-out")
                            .duration(1000)
                            .attrTween("stroke-dasharray", tweenDash)
                            .each("end", function() {
                            });

                }

                svg.append("path")
                        .style("stroke", "white")
                        .style("fill", "none")
                        .style("stroke-width", "1.8px")
                        .attr("d", "M48.834,20.021  c0,0,15.084-8.17,15.63,16.462C64.464,36.482,62.56,17.004,48.834,20.021z")
                        .call(transition_2);
                function transition_2(path) {
                    path.transition()
                            .ease("in-out")
                            .duration(1000)
                            .attrTween("stroke-dasharray", tweenDash)
                            .each("end", function() {
                            });

                }
//
//                svg.append("path")
//                        .style("stroke", "white")
//                        .style("fill", "none")
//                        .style("stroke-width", "1.8px")
//                        .attr("d", "M54.67,46.958  c0,0,38.942-18.932,51.17-17.823l-1.798,23.545c0,0-29.356-0.622-43.815,3.269l-4.417-7.522L54.67,46.958z")
//                        .call(transition_3);
//                function transition_3(path) {
//                    path.transition()
//                            .ease("in-out")
//                            .duration(3000)
//                            .attrTween("stroke-dasharray", tweenDash)
//                            .each("end", function() {
//                            });
//
//                }
            }, 1000);
            setTimeout(function() {
                //            Small Circles
                svg.append("path")
                        .style("stroke", "white")
                        .style("fill", "none")
                        .style("stroke-width", "1.8px")
                        .attr("d", "M120.759,51.177  c0,0,5.629,3.698,9.629,3.561c0,0-0.889,3.152,1.037,7.125c0,0,2.074,5.478,0.889,13.972l-1.037,9.59h-7.852  c0,0-2.072-4.248-2.666-9.041h1.927C122.686,76.383,115.573,63.367,120.759,51.177z")
                        .call(transition_4);
                function transition_4(path) {
                    path.transition()
                            .ease("in-out")
                            .duration(3000)
                            .attrTween("stroke-dasharray", tweenDash)
                            .each("end", function() {
                            });

                }
            }, 3000);
            setTimeout(function() {
                svg.append("path")
                        .style("stroke", "white")
                        .style("fill", "none")
                        .style("stroke-width", "1.8px")
                        .attr("d", "M161.617,92.486  l6.474-32.337l-3.979-3.604v2.19c-3.969-0.312-2.54-4.543-2.54-4.543l-12.224-10.55c-6.518,7.123-6.072,12.877-6.072,12.877  l4.741,31.644c6.813,0.959,4.592,2.741,4.592,2.741h-9.778v-2.741h-7.258v7.068h25.949L161.617,92.486z")
                        .call(transition_5);
                function transition_5(path) {
                    path.transition()
                            .ease("in-out")
                            .duration(3000)
                            .attrTween("stroke-dasharray", tweenDash)
                            .each("end", function() {
                            });

                }
            }, 3100);
            setTimeout(function() {
                svg.append("path")
                        .style("stroke", "white")
                        .style("fill", "none")
                        .style("stroke-width", "1.8px")
                        .attr("d", "M181.55,68.658  c-7.657-6.643-10.067-6.98-10.067-6.98l-5.892,29.457")
                        .call(transition_6);
                function transition_6(path) {
                    path.transition()
                            .ease("in-out")
                            .duration(3000)
                            .attrTween("stroke-dasharray", tweenDash)
                            .each("end", function() {
                            });

                }
            }, 4300);
            setTimeout(function() {
                svg.append("path")
                        .style("stroke", "white")
                        .style("fill", "none")
                        .style("stroke-width", "1.8px")
                        .attr("d", "M181.726,68.569  l3.117-3.308c0.385-4.569,3.738-9.419,8.996-11.019")
                        .call(transition_7);
                function transition_7(path) {
                    path.transition()
                            .ease("in-out")
                            .duration(3000)
                            .attrTween("stroke-dasharray", tweenDash)
                            .each("end", function() {
                            });

                }
            }, 5400);
//
            setTimeout(function() {
                svg.append("path")
                        .style("stroke", "white")
                        .style("fill", "none")
                        .style("stroke-width", "1.8px")
                        .attr("d", "M209.829,72.145  c-0.596-0.199-3.981,6.086-11.43,6.125c-6.085,0-11.205-3.817-12.718-9.002l-0.004-0.016")
                        .call(transition_8);
                function transition_8(path) {
                    path.transition()
                            .ease("in-out")
                            .duration(1000)
                            .attrTween("stroke-dasharray", tweenDash)
                            .each("end", function() {
                            });

                }
            }, 4400);

            setTimeout(function() {
                svg.append("path")
                        .style("stroke", "white")
                        .style("fill", "none")
                        .style("stroke-width", "1.8px")
                        .attr("d", "M193.025,46.781  l-1.051-7.316c0-2.743,2.409-4.969,5.374-4.969c2.963,0,5.371,2.226,5.371,4.969c0,2.741-2.408,4.969-5.371,4.969l1.384,8.407  h13.208v5.698h-9.305")
                        .call(transition_9);
                function transition_9(path) {
                    path.transition()
                            .ease("in-out")
                            .duration(1000)
                            .attrTween("stroke-dasharray", tweenDash)
                            .each("end", function() {
                            });

                }
            }, 4700);
            setTimeout(function() {
                svg.append("path")
                        .style("stroke", "white")
                        .style("fill", "none")
                        .style("stroke-width", "1.8px")
                        .attr("d", "M258.546,35.945   c0.012,0.661-0.561,1.206-1.273,1.218c-0.715,0.012-1.303-0.516-1.316-1.175c-0.015-0.66,0.559-1.205,1.271-1.219   C257.941,34.757,258.532,35.284,258.546,35.945z")
                        .call(transition_10);
                function transition_10(path) {
                    path.transition()
                            .ease("in-out")
                            .duration(1000)
                            .attrTween("stroke-dasharray", tweenDash)
                            .each("end", function() {
                            });

                }
            }, 6500);
            setTimeout(function() {
                svg.append("path")
                        .style("stroke", "white")
                        .style("fill", "none")
                        .style("stroke-width", "1.8px")
                        .attr("d", "M250.551,39.591   c0,0,1.829-5.275,6.795-4.848")
                        .call(transition_10);
                function transition_10(path) {
                    path.transition()
                            .ease("in-out")
                            .duration(1000)
                            .attrTween("stroke-dasharray", tweenDash)
                            .each("end", function() {
                            });

                }
            }, 6500);
            setTimeout(function() {
                svg.append("path")
                        .style("stroke", "white")
                        .style("fill", "none")
                        .style("stroke-width", "1.8px")
                        .attr("d", "M246.718,30.12   c-0.604,0.354-0.784,1.091-0.406,1.649c0.383,0.561,1.184,0.728,1.786,0.376c0.604-0.354,0.789-1.092,0.405-1.65   C248.122,29.935,247.323,29.767,246.718,30.12z")
                        .call(transition_10);
                function transition_10(path) {
                    path.transition()
                            .ease("in-out")
                            .duration(1000)
                            .attrTween("stroke-dasharray", tweenDash)
                            .each("end", function() {
                            });
                }
            }, 6500);
            setTimeout(function() {
                svg.append("path")
                        .style("stroke", "white")
                        .style("fill", "none")
                        .style("stroke-width", "1.8px")
                        .attr("d", "M247.804,38.301   c0,0,3.769-4.307,0.658-7.911")
                        .call(transition_10);
                function transition_10(path) {
                    path.transition()
                            .ease("in-out")
                            .duration(1000)
                            .attrTween("stroke-dasharray", tweenDash)
                            .each("end", function() {
                            });

                }
            }, 6500);


            setTimeout(function() {
                svg.append("path")
                        .style("stroke", "white")
                        .style("fill", "none")
                        .style("stroke-width", "1.8px")
                        .attr("d", "M280.086,75.437c0,4.61-3.064,8.343-6.847,8.343  c-3.779,0-6.843-3.732-6.843-8.343c0-4.604,3.063-8.338,6.843-8.338C277.021,67.099,280.086,70.832,280.086,75.437z")
                        .call(transition_11);
                function transition_11(path) {
                    path.transition()
                            .ease("in-out")
                            .duration(1000)
                            .attrTween("stroke-dasharray", tweenDash)
                            .each("end", function() {
                            });

                }
            }, 7700);
            setTimeout(function() {
                svg.append("path")
                        .style("stroke", "white")
                        .style("fill", "none")
                        .style("stroke-width", "1.8px")
                        .attr("d", "M338.975,74.811  c-3.981,4.892-11.501,5.869-16.79,2.184c-5.291-3.682-6.35-10.636-2.361-15.525c3.984-4.893,11.502-5.873,16.79-2.185  C341.901,62.968,342.962,69.92,338.975,74.811z")
                        .call(transition_12);
                function transition_12(path) {
                    path.transition()
                            .ease("in-out")
                            .duration(1000)
                            .attrTween("stroke-dasharray", tweenDash)
                            .each("end", function() {
                            });

                }
            }, 8000);
            setTimeout(function() {
                svg.append("path")
                        .style("stroke", "white")
                        .style("fill", "none")
                        .style("stroke-width", "1.8px")
                        .attr("d", "M330.647,64.641c-0.727,0.895-2.109,1.074-3.08,0.399  c-0.969-0.677-1.162-1.95-0.432-2.849c0.73-0.897,2.11-1.078,3.08-0.401C331.183,62.465,331.379,63.74,330.647,64.641z")
                        .call(transition_12);
                function transition_12(path) {
                    path.transition()
                            .ease("in-out")
                            .duration(800)
                            .attrTween("stroke-dasharray", tweenDash)
                            .each("end", function() {
                            });

                }
            }, 8000);
            setTimeout(function() {
                svg.append("path")
                        .style("stroke", "white")
                        .style("fill", "none")
                        .style("stroke-width", "1.8px")
                        .attr("d", "M335.921,68.309c-0.73,0.899-2.113,1.078-3.083,0.403  c-0.97-0.677-1.165-1.953-0.433-2.851c0.732-0.896,2.11-1.077,3.082-0.399C336.458,66.139,336.649,67.41,335.921,68.309z")
                        .call(transition_12);
                function transition_12(path) {
                    path.transition()
                            .ease("in-out")
                            .duration(800)
                            .attrTween("stroke-dasharray", tweenDash)
                            .each("end", function() {
                            });

                }
            }, 8000);
            setTimeout(function() {
                svg.append("path")
                        .style("stroke", "white")
                        .style("fill", "none")
                        .style("stroke-width", "1.8px")
                        .attr("d", "M366.335,77.749c0,1.787-1.25,3.236-2.793,3.236  c-1.537,0-2.789-1.449-2.789-3.236c0-1.788,1.252-3.237,2.789-3.237C365.085,74.512,366.335,75.961,366.335,77.749z")
                        .call(transition_12);
                function transition_12(path) {
                    path.transition()
                            .ease("in-out")
                            .duration(800)
                            .attrTween("stroke-dasharray", tweenDash)
                            .each("end", function() {
                            });

                }
            }, 8500);
            setTimeout(function() {
                svg.append("path")
                        .style("stroke", "white")
                        .style("fill", "none")
                        .style("stroke-width", "1.8px")
                        .attr("d", "M354.602,90.05  c0,0,4.755,7.364,12.099-0.038c0,0-5.313,5.58-4.955,10.495")
                        .call(transition_12);
                function transition_12(path) {
                    path.transition()
                            .ease("in-out")
                            .duration(800)
                            .attrTween("stroke-dasharray", tweenDash)
                            .each("end", function() {
                            });

                }
            }, 8500);
//
            setTimeout(function() {
                svg.append("path")
                        .style("stroke", "white")
                        .style("fill", "none")
                        .style("stroke-width", "1.8px")
                        .attr("d", "M402.896,97.021   l3.09-2.876l-2.78-2.537c-1.344-2.016-0.852-3.701-0.602-4.701s1.688-2.656,1.688-2.656c1.906-1.938,5.219-1.844,5.219-1.844   c3.599-0.067,5.479,1.646,5.719,1.906c0.719,0.781,1.281,2.319,1.281,2.319l0.625,2.274c0,0,14.123-20.071,31.601-9.772   c0,0,13.433,7.107,29.06,3.12")
                        .call(transition_13);
                function transition_13(path) {
                    path.transition()
                            .ease("in-out")
                            .duration(3000)
                            .attrTween("stroke-dasharray", tweenDash)
                            .each("end", function() {
                            });

                }
            }, 9000);
            setTimeout(function() {
                svg.append("path")
                        .style("stroke", "white")
                        .style("fill", "none")
                        .style("stroke-width", "1.8px")
                        .attr("d", "M555.26,74.788  c9.113,0,16.648-8.235,16.648-18.399c0-10.163-7.535-18.399-16.561-18.399c-9.111,0-16.559,8.323-16.559,18.575  C538.789,66.728,546.148,74.788,555.26,74.788z")
                        .call(transition_14);
                function transition_14(path) {
                    path.transition()
                            .ease("in-out")
                            .duration(3000)
                            .attrTween("stroke-dasharray", tweenDash)
                            .each("end", function() {
                            });

                }
            }, 12500);
            setTimeout(function() {
                svg.append("path")
                        .style("stroke", "white")
                        .style("fill", "none")
                        .style("stroke-width", "1.8px")
                        .attr("d", "M725.75,63.486V49.379  c-2.365-6.308-9.549-11.39-15.769-11.39c-9.813,0-16.298,9.112-16.298,18.487c0,9.9,7.447,18.312,16.998,18.312  C716.727,74.788,724.786,69.707,725.75,63.486z")
                        .call(transition_14);
                function transition_14(path) {
                    path.transition()
                            .ease("in-out")
                            .duration(3000)
                            .attrTween("stroke-dasharray", tweenDash)
                            .each("end", function() {
                            });

                }
            }, 18500);

            setTimeout(function() {
                svg.append("path")
                        .style("stroke", "white")
                        .style("fill", "none")
                        .style("stroke-width", "1.8px")
                        .attr("d", "M772.709,69.094  c0.787-1.053,1.488-2.366,1.488-3.418v-7.447c-3.942-1.489-8.411-2.365-12.529-2.365c-8.498,0-14.369,3.68-14.369,9.725  c0,4.819,3.768,9.901,11.392,9.901C763.947,75.489,769.729,73.035,772.709,69.094z")
                        .call(transition_15);
                function transition_15(path) {
                    path.transition()
                            .ease("in-out")
                            .duration(3000)
                            .attrTween("stroke-dasharray", tweenDash)
                            .each("end", function() {
                            });

                }
            }, 19000);
            setTimeout(function() {
                svg.append("path")
                        .style("stroke", "white")
                        .style("fill", "none")
                        .style("stroke-width", "1.8px")
                        .attr("d", "M859.967,74.788  c9.111,0,16.646-8.235,16.646-18.399c0-10.163-7.535-18.399-16.559-18.399c-9.114,0-16.561,8.323-16.561,18.575  C843.494,66.728,850.856,74.788,859.967,74.788z")
                        .call(transition_15);
                function transition_15(path) {
                    path.transition()
                            .ease("in-out")
                            .duration(3000)
                            .attrTween("stroke-dasharray", tweenDash)
                            .each("end", function() {
                            });

                }
            }, 24500);


            setTimeout(function() {
                $('.Small_Parts_hover').fadeIn(500);
            }, 23500);

            setTimeout(function() {
                svg.append("path")
                        .style("stroke", "white")
                        .style("fill", "none")
                        .style("stroke-width", "1.8px")
                        .attr("d", "m 355.481,81.999 0,-10.455 -7.658,0 15.98,-12.188 0.008,0 15.979,12.188 -7.659,0 0,8.194")
                        .call(transition_16);
                function transition_16(path) {
                    path.transition()
                            .ease("in-out")
                            .duration(3000)
                            .attrTween("stroke-dasharray", tweenDash)
                            .each("end", function() {
                            });

                }
            }, 8500);

            setTimeout(function() {
                svg.append("path")
                        .style("stroke", "white")
                        .style("fill", "none")
                        .style("stroke-width", "1.8px")
                        .attr("d", "m 385.003,83.175 4.148,-8.591 4.92,8.591 z")
                        .call(transition_17);
                function transition_17(path) {
                    path.transition()
                            .ease("in-out")
                            .duration(3000)
                            .attrTween("stroke-dasharray", tweenDash)
                            .each("end", function() {
                            });

                }
            }, 8700);
            setTimeout(function() {
                svg.append("path")
                        .style("stroke", "white")
                        .style("fill", "none")
                        .style("stroke-width", "1.8px")
                        .attr("d", "m 387.88199,86.240997 0,10.635002")
                        .call(transition_17);
                function transition_17(path) {
                    path.transition()
                            .ease("in-out")
                            .duration(3000)
                            .attrTween("stroke-dasharray", tweenDash)
                            .each("end", function() {
                            });

                }
            }, 8700);
            setTimeout(function() {
                svg.append("path")
                        .style("stroke", "white")
                        .style("fill", "none")
                        .style("stroke-width", "1.8px")
                        .attr("d", "m 390.97699,86.240997 0,10.635002")
                        .call(transition_17);
                function transition_17(path) {
                    path.transition()
                            .ease("in-out")
                            .duration(3000)
                            .attrTween("stroke-dasharray", tweenDash)
                            .each("end", function() {
                            });

                }
            }, 8700);
//            setTimeout(function() {
//                svg.append("path")
//                        .style("stroke", "white")
//                        .style("fill", "none")
//                        .style("stroke-width", "1.8px")
//                        .attr("d", "M416.176,130.529  c1.621,6.846,11.154,12.114,28.127-0.656c3.049-2.294,9.197-15.136-2.9-13.828c-2.575,0.276-12.502,5.964,0.061,10.638  c0,0-7.625,3.899-13.479,0.358")
//                        .call(transition_18);
//                function transition_18(path) {
//                    path.transition()
//                            .ease("in-out")
//                            .duration(3000)
//                            .attrTween("stroke-dasharray", tweenDash)
//                            .each("end", function() {
//                            });
//
//                }
//            }, 11000);
        </script>
    </body>
</html>
