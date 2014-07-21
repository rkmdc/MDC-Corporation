<?php include './util.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <?php include './head-data.php'; ?>
        <style>
            body{
                background-color:#e47d28;             
            }
        </style>
        <script src="js/d3.v3.min.js"></script>
        <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
        <?php
        $Menu_Active = -1;
        ?>
        <style>
            @media all and (max-width: 650px){
                .lineart{
                    top: 18%;
                    
                }}
        </style>
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
                <svg id="Fitness_Core_Line_Art" viewbox="0 0 1100 190" preserveAspectRatio="xMinYMin meet" >

                </svg>
            </div>
            <div class="Small_Parts_hover" style="display: none;">
                <svg viewbox="0 0 1100 190" preserveAspectRatio="xMinYMin meet">
                <rect xmlns="http://www.w3.org/2000/svg" x="647.26" y="77.063" fill="none" stroke="#FFFFFF" stroke-linejoin="round" stroke-miterlimit="2.6131" width="5.959" height="8.762"style="
                      stroke-width: 1.8px;
                      "/>
                </svg>
            </div>

        </div>
        <div class="Text_Wrapper">
            <p>Competitive sports have acquired a new status on popularity charts in
                various countries. They have set new standards in the world of fitness that
                encourages competition of the highest level. This is witnessed live by the
                world around through dedicated sports channels. The TRPs of these
                channels have swelled as a result of ever-growing viewership.<br/>
                MDC has been actively organizing and promoting Super Fight League in
                the same genre of competitive sport. This has immediately clicked with the
                Indian viewers who are now asking for more.<br/>
                Super Fight League which features fights between world-renowned Mixed
                Martial Arts superstars is certainly amongst the most popular sporting
                events of the year, surpassing pay-per-view records of boxing and profes-
                sional wrestling. MDC FITNESS is proud to be the driving force behind the
                fighters of this league.
            </p>
        </div>

        <a href="index.php"><img class="Home_MDCCoorpLogo" src="images/MDCFitness_Logo.png"></a>

        <?php include './footer.php'; ?>
        <script type="text/javascript">
            
            var svg = d3.select("#Fitness_Core_Line_Art");

            svg.append("path")
                    .style("stroke", "white")
                    .style("fill", "none")
                    .style("stroke-width", "1.8px")
                    .attr("d", "M-0.5,152.342l8.938,0.333  c65.812,3.377,62.401-60.083,62.401-60.083c-0.452-10.046-2.321-21.974-7.979-28.306l0.841-2.265l-1.445-1.138l-4.879,1.444  l-7.603-18.813c0,0,37.052-19.224,62.126-19.942l-4.518,39.616c0,0-3.874-2.723-7.024-2.723l-0.286,1.432l1.573,0.436  c0,0-10.184,16.764-7.457,42.122c0,0,1.418,5.162,10.731,4.008c0,0-11.341-10.742-1.167-15.906c0,0,3.82,7.312,7.398,0.295  c0,0,5.35,0.854,5.35,6.868v5.778h3.205c0,0-4.299-17.906,2.436-19.773c0,0,3.15,6.01,7.733-0.583c0,0,4.673-1.644,3.251,18.356  h2.375V96.53c0,0-0.376-4.491,4.351-6.151c0,0,0.569,2.598,6.249-0.472c0,0,4.4-0.713,5.4,13.479v12.112h13.317  c0,0-2.604-9,8.747-10h13.479c0,0-16.318-4.718-17.499-15.836l-3.785-8.27l-4.021-0.704l0.95-16.559c0,0-7.336-2.603-9.696-6.856  l1.654,11.114c0,0,5.91,4.029,1.656,9.688c-1.291,1.718-4.496,4.022-7.336,4.502c0,0-2.829-0.238,2.137-6.857  c0,0,0.008-8.487-5.451-16.494c-1.971-2.889-5.145-16.165,6.548-13.951c2.695,0.51,5.287,2.304,9.071,6.8  c0,0,4.119,1.951,7.902-3.952c-2.22-1.705-4.506-4.914-5.305-10.824c0,0-1.774-3.913-6.382-5.685c0,0-6.384-7.796,4.251-8.867  c0,0,3.902-0.35,4.613,9.226c0,0,1.619,6.462,7.082,7.658c0,0,5.756-10.068,14.199-3.401c0,0,6.384,4.967,0.712,10.999l-8.159,9.221  c0,0-3.196,4.962-2.845,10.636l0.707,12.418l-3.557,1.419c0,0,0.316,13.71,11.614,16.081l0.096,0.013  c2.164-11.676,11.301-20.825,23.301-22.621V70.5h-6v-6.659l19-0.045V70.5h-5v3.892c12,1.847,21.675,11.414,23.509,23.515  c1.977,19.218-11.509,30.184-23.509,32.031v4.562h27.48c0,0,4.52,0.456,3.52-5.57V99.487c0,0,0-5.916,5-6.5V112.5h11.577  c0,0,0.474-36.236-2.362-48.531c0,0-56.99-3.469-65.035-34.469h4.263c0,0,12.532,25.947,59.116,19.33c0,0,6.152-45.468,30.27-10.471  c0,0,21.605-2.209,14.661,17.262c-2.347,6.563-6.462,7.902-25.777,10.65c0,0-9.693,12.767-8.745,38.078  c0,0-2.838,28.628,25.302,2.139l-0.714-17.238c0,0-10.576-4.75-10.881-20.75h2.84c0,0,9.222,42,29.326-3h3.312  c0,0-1.659,9.064-13.723,25.374c0,0-6.752,32.697,9.798,20.635c0,0,8.138-6.01,15.512-2.01h1.65c0,0-4.723-18.307,8.987-20.442  c0,0,5.439-15.463-9.227-33.916c0,0-13.942-3.452-8.192-14.193c0,0,3.573-7.729,6.298,4.271c0.223,0.979,2.361,5.195,3.542-1.893  c0,0,2.837-1.889,3.072,3.781c0,0,2.554,31.67,24.718,27.106c5.533-1.143,12.177-2.604,14.493-27.58c0,0-6.754,0.414-1.221-2.668  c0,0-7.132-0.861-0.61-3.073c6.518-2.227-0.746,0.122-0.746,0.122s-6.506-2.836,0.494-4.674v-5.416c0,0-9.33,2.334-9.082-8.367  c0,0,1.485-7.875,12.807-6.393c0,0,5.807,0.866,5.682,9.587c0,0,0.594,4.433-2.406,6.529v3.809c0,0,6.263,0.498,7.002,8.12  c0,0,4.363,22.853,12.906,25.223c8.584,2.378,30.092,6.146,31.092,17.102v16.856c0,0-13.27-4.8-13.754,7.628  c0,0-1.246,6.152,8.754,5.785v2.456c0,0-14.764-2.318-16.723,12.438c-1.791,16.993,16.231,23.009,16.231,23.009  c26.491,5.444,17.98,34.763,17.98,34.763l7.322-3.55c0.947-30.26-12.607-39.874-12.607-39.874  c12.068-1.243,14.908-10.995,14.908-10.995c-1.071,5.676,4.792,4.918,6.533,4.09c4.336-2.057,3.617-4.863,2.928-6.512  c-2.407-5.781-6.334-4.868-9.458-2.707l-6.006-18.97c0,0-1.78-4.838,5.591-6.848l-6.146-18.684l4.353-1.937l6.269,19.071  c0,0,6.643-3.658,9.247,1.783l6.387,21.282l7.32-2.605l-5.43-12.77l1.18-9.93c0,0-13.348-11.769-16.787-16.555  c-2.224-3.087-5.205-10.64,4.017-14.662c0,0,2.842-1.423,0.948-10.88c0,0-2.299-13.707,10.644-10.879  c2.692,0.589,7.565,3.313,7.804,7.802c0,0-4.262,16.331-8.279,12.064c0,0,2.122,9.7,12.305,1.657c0,0,4.955-4.5,3.779-15.139  c0,0,0.761-14.608,8.041-9.22c1.185,0.878,3.536,4.726,3.536,4.726s-5.228,3.438-6.656,1.544c0,0,3.828,15.961-9.183,24.946  c0,0,0.452,5.222,4.73,1.414c2.342-2.085,6.622-8.979,12.539-0.468c0,0-2.136,7.323-7.816,2.6c0,0-1.863,3.808-5.048,7.186  l2.93,8.661c0,0,35.002-21.054,36.179-2.604l-3.781,24.83c0,0,1.173,11.11,13.232,10.88c0,0-18.912,7.327-19.86-13.953  c0,0,3.062-8.75-2.376-10.88l-7.345,1.895l-0.743,5.906l-5.027,1.418l-1.543,6.628l-7.117,1.42V141.5h5.001H597.5v-63h41v6h-35v23  h29v5h-29v29h44v-46h6v46h15.109l0.004-8.129l-0.002-32.871H661.5v-5h7v-16h6v16h10v5h-10v30.623c0,3.329,2.662,5.025,5.555,5.025  c3.328,0,6.256-1.458,6.957-1.896L687,141.5h8.498v-46h5v10.213c4-6.658,11.331-11.127,19.392-11.127  c10.252,0,13.608,7.711,13.608,19.714v27.2h-6v-25.975c0-10.777-2.836-15.51-9.494-15.51c-7.098,0-14.506,5.521-16.506,13.056  v34.428h58v-5.602c-10-2.399-16.533-14.188-16.533-23.813c0-12.791,10.012-23.461,23.242-23.461  c13.318,0,22.517,10.903,22.604,23.432c0,0.876-0.088,1.443-0.176,2.443h-38.988c0.701,10,8.061,16.92,16.822,16.92  c6.045,0,11.916-3.406,14.019-8.313l5.17,1.401c-1.283,3.046-3.61,5.688-6.596,7.658c-0.676,0.446-1.824,0.958-2.564,1.333h25  c-2.584-1.104-5.615-2.622-7.607-4.436l2.715-4.03c5.082,4.206,10.341,6.309,16.386,6.309c7.271,0,12.092-3.153,12.092-8.587  c0-5.082-4.558-6.484-13.756-8.674c-10.603-2.629-15.334-4.468-15.334-11.652c0-9.2,7.711-13.844,17.086-13.844  c7.01,0,12.967,2.541,16.471,6.221l-2.891,3.505c-3.416-3.505-8.586-5.257-13.756-5.257c-6.222,0-11.216,2.541-11.216,8.498  c0,4.82,3.243,5.871,11.392,7.799c11.739,2.804,17.785,5.081,17.785,12.879c0,2.462-1.099,4.954-2.24,6.832l7.934,0.003l2.718-4.03  c5.082,4.206,10.338,6.309,16.385,6.309c7.271,0,12.09-3.153,12.09-8.587c0-5.082-4.557-6.483-13.756-8.674  c-10.603-2.629-15.332-4.468-15.332-11.652c0-9.2,7.709-13.844,17.084-13.844c7.01,0,12.969,2.541,16.473,6.221l-2.891,3.505  c-3.418-3.505-8.588-5.257-13.756-5.257c-6.221,0-11.215,2.541-11.215,8.498c0,4.82,3.24,5.871,11.389,7.799  c11.742,2.804,17.787,4.883,17.787,12.681c0,8.324-7.01,13.469-17.787,13.469H1366.5")
            
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
                        .attr("d", "M67.364,59.279  c0,0,4.451,26.682,15.843,26.127c0,0,6.115,2.227,13.902-28.077C97.109,57.329,76.811,57.609,67.364,59.279L67.364,59.279z")
                        .call(transition_1);
                function transition_1(path) {
                    path.transition()
                            .ease("in-out")
                            .duration(3000)
                            .attrTween("stroke-dasharray", tweenDash)
                            .each("end", function() {
                            });

                }

                svg.append("path")
                        .style("stroke", "white")
                        .style("fill", "none")
                        .style("stroke-width", "1.8px")
                        .attr("d", "M87.508,71.674  c0,3.998-2.555,7.231-5.7,7.231c-3.147,0-5.698-3.233-5.698-7.231c0-3.989,2.551-7.222,5.698-7.222  C84.953,64.452,87.508,67.685,87.508,71.674L87.508,71.674z")
                        .call(transition_2);
                function transition_2(path) {
                    path.transition()
                            .ease("in-out")
                            .duration(3000)
                            .attrTween("stroke-dasharray", tweenDash)
                            .each("end", function() {
                            });

                }

                svg.append("path")
                        .style("stroke", "white")
                        .style("fill", "none")
                        .style("stroke-width", "1.8px")
                        .attr("d", "M54.67,46.958  c0,0,38.942-18.932,51.17-17.823l-1.798,23.545c0,0-29.356-0.622-43.815,3.269l-4.417-7.522L54.67,46.958z")
                        .call(transition_3);
                function transition_3(path) {
                    path.transition()
                            .ease("in-out")
                            .duration(3000)
                            .attrTween("stroke-dasharray", tweenDash)
                            .each("end", function() {
                            });

                }
            }, 1000);
            setTimeout(function() {
                //            Small Circles
                svg.append("path")
                        .style("stroke", "white")
                        .style("fill", "none")
                        .style("stroke-width", "1.8px")
                        .attr("d", "M110.993,83.425  c0,3.688-2.365,6.675-5.269,6.675c-2.905,0-5.261-2.986-5.261-6.675c0-3.672,2.355-6.658,5.261-6.658  C108.628,76.767,110.993,79.753,110.993,83.425L110.993,83.425z")
                        .call(transition_4);
                function transition_4(path) {
                    path.transition()
                            .ease("in-out")
                            .duration(3000)
                            .attrTween("stroke-dasharray", tweenDash)
                            .each("end", function() {
                            });

                }
            }, 2000);
            setTimeout(function() {
                svg.append("path")
                        .style("stroke", "white")
                        .style("fill", "none")
                        .style("stroke-width", "1.8px")
                        .attr("d", "M130.165,77.623  c0,3.681-2.353,6.67-5.259,6.67c-2.905,0-5.256-2.989-5.256-6.67c0-3.685,2.351-6.668,5.256-6.668  C127.813,70.955,130.165,73.938,130.165,77.623L130.165,77.623z")
                        .call(transition_5);
                function transition_5(path) {
                    path.transition()
                            .ease("in-out")
                            .duration(3000)
                            .attrTween("stroke-dasharray", tweenDash)
                            .each("end", function() {
                            });

                }
            }, 2100);
            setTimeout(function() {
                svg.append("path")
                        .style("stroke", "white")
                        .style("fill", "none")
                        .style("stroke-width", "1.8px")
                        .attr("d", "M146.035,81.288  c0,3.691-2.352,6.677-5.263,6.677c-2.899,0-5.261-2.985-5.261-6.677c0-3.68,2.361-6.667,5.261-6.667  C143.684,74.621,146.035,77.608,146.035,81.288L146.035,81.288z")
                        .call(transition_6);
                function transition_6(path) {
                    path.transition()
                            .ease("in-out")
                            .duration(3000)
                            .attrTween("stroke-dasharray", tweenDash)
                            .each("end", function() {
                            });

                }
            }, 2300);
            setTimeout(function() {
                svg.append("path")
                        .style("stroke", "white")
                        .style("fill", "none")
                        .style("stroke-width", "1.8px")
                        .attr("d", "M163.807,92.63  c0,3.689-2.36,6.674-5.262,6.674s-5.263-2.984-5.263-6.674c0-3.683,2.361-6.669,5.263-6.669S163.807,88.947,163.807,92.63  L163.807,92.63z")
                        .call(transition_7);
                function transition_7(path) {
                    path.transition()
                            .ease("in-out")
                            .duration(3000)
                            .attrTween("stroke-dasharray", tweenDash)
                            .each("end", function() {
                            });

                }
            }, 2400);

            setTimeout(function() {
                svg.append("path")
                        .style("stroke", "white")
                        .style("fill", "none")
                        .style("stroke-width", "1.8px")
                        .attr("d", "M185.137,23.134  c0,4.614-2.949,8.341-6.579,8.341c-3.631,0-6.577-3.727-6.577-8.341c0-4.607,2.946-8.34,6.577-8.34  C182.188,14.794,185.137,18.526,185.137,23.134L185.137,23.134z")
                        .call(transition_8);
                function transition_8(path) {
                    path.transition()
                            .ease("in-out")
                            .duration(3000)
                            .attrTween("stroke-dasharray", tweenDash)
                            .each("end", function() {
                            });

                }
            }, 4600);

            setTimeout(function() {
                svg.append("path")
                        .style("stroke", "white")
                        .style("fill", "none")
                        .style("stroke-width", "1.8px")
                        .attr("d", "M281.95,40.372  c0,3.68-2.357,6.676-5.26,6.676c-2.903,0-5.265-2.996-5.265-6.676c0-3.686,2.361-6.668,5.265-6.668  C279.593,33.704,281.95,36.687,281.95,40.372L281.95,40.372z")
                        .call(transition_9);
                function transition_9(path) {
                    path.transition()
                            .ease("in-out")
                            .duration(3000)
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
                        .attr("d", "M306.413,75.955  c0,3.689-2.352,6.668-5.257,6.668c-2.908,0-5.266-2.979-5.266-6.668c0-3.683,2.357-6.67,5.266-6.67  C304.062,69.285,306.413,72.272,306.413,75.955L306.413,75.955z")
                        .call(transition_10);
                function transition_10(path) {
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
                        .attr("d", "M312.507,35.202  c-3.579,2.895-8.34,2.953-10.617,0.118c-2.279-2.822-1.223-7.458,2.364-10.349c3.582-2.893,8.338-2.942,10.618-0.12  C317.158,27.676,316.093,32.31,312.507,35.202L312.507,35.202z")
                        .call(transition_11);
                function transition_11(path) {
                    path.transition()
                            .ease("in-out")
                            .duration(3000)
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
                        .attr("d", "M366.175,59.551  c0,5.241-3.349,9.495-7.48,9.495c-4.133,0-7.481-4.254-7.481-9.495c0-5.236,3.349-9.49,7.481-9.49  C362.826,50.061,366.175,54.314,366.175,59.551L366.175,59.551z")
                        .call(transition_12);
                function transition_12(path) {
                    path.transition()
                            .ease("in-out")
                            .duration(3000)
                            .attrTween("stroke-dasharray", tweenDash)
                            .each("end", function() {
                            });

                }
            }, 10000);

            setTimeout(function() {
                svg.append("path")
                        .style("stroke", "white")
                        .style("fill", "none")
                        .style("stroke-width", "1.8px")
                        .attr("d", "M382.513,45.687  c0,0,0.116,21.357-7.383,32.973c-4.568,7.063-8.61,16.735-4.435,33.342h32.729c0,0,2.262-24.186-5.907-31.619  c-4.487-4.089-9.175-7.248-9.965-22.147C387.373,54.86,387.06,45.687,382.513,45.687L382.513,45.687z")
                        .call(transition_13);
                function transition_13(path) {
                    path.transition()
                            .ease("in-out")
                            .duration(3000)
                            .attrTween("stroke-dasharray", tweenDash)
                            .each("end", function() {
                            });

                }
            }, 11000);
            setTimeout(function() {
                svg.append("path")
                        .style("stroke", "white")
                        .style("fill", "none")
                        .style("stroke-width", "1.8px")
                        .attr("d", "M424.28,60.943  c0,5.238-3.349,9.488-7.483,9.488c-4.131,0-7.483-4.25-7.483-9.488c0-5.239,3.353-9.495,7.483-9.495  C420.932,51.448,424.28,55.704,424.28,60.943L424.28,60.943z")
                        .call(transition_14);
                function transition_14(path) {
                    path.transition()
                            .ease("in-out")
                            .duration(3000)
                            .attrTween("stroke-dasharray", tweenDash)
                            .each("end", function() {
                            });

                }
            }, 11000);

            setTimeout(function() {
                svg.append("path")
                        .style("stroke", "white")
                        .style("fill", "none")
                        .style("stroke-width", "1.8px")
                        .attr("d", "M411.291,131.694  H260.353v-4.521h74.585v-5.732h-66.585")
                        .call(transition_15);
                function transition_15(path) {
                    path.transition()
                            .ease("in-out")
                            .duration(3000)
                            .attrTween("stroke-dasharray", tweenDash)
                            .each("end", function() {
                            });

                }
            }, 11000);


            setTimeout(function() {
                $('.Small_Parts_hover').fadeIn(500);
            }, 19500);

            setTimeout(function() {
                svg.append("path")
                        .style("stroke", "white")
                        .style("fill", "none")
                        .style("stroke-width", "1.8px")
                        .attr("d", "M782.619,115.789  c-0.789-9.726-7.973-16.56-16.91-16.56s-16.121,6.922-16.734,16.56H782.619z")
                        .call(transition_16);
                function transition_16(path) {
                    path.transition()
                            .ease("in-out")
                            .duration(3000)
                            .attrTween("stroke-dasharray", tweenDash)
                            .each("end", function() {
                            });

                }
            }, 23000);

            setTimeout(function() {
                svg.append("path")
                        .style("stroke", "white")
                        .style("fill", "none")
                        .style("stroke-width", "1.8px")
                        .attr("d", "M185.606,106.426  c1.843,12.105,11.415,20.978,23.518,22.824")
                        .call(transition_17);
                function transition_17(path) {
                    path.transition()
                            .ease("in-out")
                            .duration(3000)
                            .attrTween("stroke-dasharray", tweenDash)
                            .each("end", function() {
                            });

                }
            }, 4600);
            setTimeout(function() {
                svg.append("path")
                        .style("stroke", "white")
                        .style("fill", "none")
                        .style("stroke-width", "1.8px")
                        .attr("d", "M416.176,130.529  c1.621,6.846,11.154,12.114,28.127-0.656c3.049-2.294,9.197-15.136-2.9-13.828c-2.575,0.276-12.502,5.964,0.061,10.638  c0,0-7.625,3.899-13.479,0.358")
                        .call(transition_18);
                function transition_18(path) {
                    path.transition()
                            .ease("in-out")
                            .duration(3000)
                            .attrTween("stroke-dasharray", tweenDash)
                            .each("end", function() {
                            });

                }
            }, 11000);
//            setTimeout(function() {
//                svg.append("path")
//                        .style("stroke", "white")
//                        .style("fill", "none")
//                        .style("stroke-width", "1.8px")
//                        .attr("d", "M411.291,131.694  H260.353v-4.521h74.585v-5.732h-66.585")
//                        .call(transition_19);
//                function transition_19(path) {
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
