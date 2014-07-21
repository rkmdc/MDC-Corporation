<?php include './util.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <?php include './head-data.php'; ?>
        <?php
        $Menu_Active = -1;
        ?>
        <style>
            body{
                background-color:#6c3c1b;             
            }
        </style>
        <script src="js/d3.v3.min.js"></script>
        <!--<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>-->
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
        <div class="lineart" style="height:280px">
            <div class="svgline">


                <svg id="LineArtReality" viewbox="0 0 1250 220" preserveAspectRatio="xMinYMin meet" ></svg>


            </div>
            <!--            <div class="Small_Parts_hover">
                            <svg id="LineArtReality_seperate" viewbox="0 0 1250 70" preserveAspectRatio="xMinYMin meet" ></svg>
            
                        </div>-->

        </div>
        <div class="Text_Wrapper">
            <p>MDC Realities endeavors to change the skyline of the region in the coming
                years. Collaborating with some of the renowned architects and designers
                around the world MDC offers communities that can virtually change your
                world of living!</p><br/>
            <p><strong>MDC REALTIES builds and develops:</strong></p>
            <ul>
                <li>Contemporary Residential Apartments which are environment-friendly</li>
                <li>State of the art Commercial Properties.</li>
                <li>Malls</li>
                <li>Farmhouse Plots</li>
                <li>Theme Parks</li>
                <li>SEZ</li>
            </ul><br/>

            <p>And the list is endless.</p>
        </div>
        <div style="clear:both"></div>




        <a href="index.php"><img class="Home_MDCCoorpLogo" src="images/MDCRealites_Logo-2.png"></a>

        <?php include './footer.php'; ?> 

        <script type="text/javascript">

            var svg = d3.select("#LineArtReality");
            svg.append("path")
                    .style("stroke", "white")
                    .style("fill", "none")
                    .style("stroke-width", "1.8px")
                    .attr("d","M-3.002,155.063  l32.618,0.053v-42.418h54.5c10.511,0,10.417,6.313,10.417,6.313v63.395c0,4.402,5.416,4.119,5.416,4.119l21.71-0.037v-11.502  c10.753-2.51,21.505-5.026,32.244-7.545c11.52,2.979,23.022,5.965,34.548,8.937v3.979c-9.718-0.993-19.452-1.988-29.175-2.982v3.182  c8.873,1.649,17.759,3.309,26.624,4.965c8.776-4.838,17.574-9.672,26.351-14.5c0,0,9.468-3.578,7.165,5.357  c-10.069,7.088-20.128,14.168-30.202,21.254c-9.115-1.988-18.243-3.977-27.382-5.96c-8.367-1.639-14.685,0.874-20.725,3.972  c-3.911,1.856-7.842,3.709-11.777,5.567c0.684,1.384,1.385,2.774,2.064,4.16c5.457-2.443,10.905-4.892,16.366-7.343  c5.375-2.463,10.894-3.186,17.918-1.987c6.799,1.161,13.308,3.183,19.964,4.767c3.961,0.469,7.551,0.045,11.01-1.983  c8.1-5.627,15.924-11.498,24.296-16.88c3.103-1.992,5.024-5.967,5.891-11.32c2.553-14.874,26.717-30.393,46.116-30.577V65.68  l17.099-6.034l6.964,3.733v-29.93l18.377-5.261l30.531,6.907v97.197l11.092,2.303V17.714c9.716-3.007,19.457-6.003,29.188-9.007  l23.246,8.033v132.103c8.116,0.624,16.213,2.036,24.328,4.606c0.275-3.981-0.272-7.965,0-11.942  c-3.521,0.216-7.025,0.425-10.551,0.63c8.017-4.265,16.032-8.527,24.05-12.801c7.317,6.104,14.652,12.204,21.979,18.303  l-9.846-0.209v14.95c10.422,4.114,13.664,9.042,29.335,13.709c10.962,1.562,15.608,4.841,26.372-9.44  c7.87-11.861,25.375-21.787,25.375-21.787V82.652h26.197c10.776,0,18.486,9.901,18.486,19.539c0,9.024-5.607,16.999-13.931,18.663  l15.332,24.006h-6.922l-14.719-22.955h-18.4v22.955l-0.043,10.354h66.25v-9.828v0.004c-11.173-1.951-18.897-11.875-18.897-23.484  c0-12.79,9.639-23.479,22.868-23.479c13.316,0,22.517,10.864,22.604,23.394c0,0.877-0.088,2.016-0.174,2.367h-38.99  c0.701,9.813,8.061,16.996,16.822,16.996c6.045,0,11.916-3.328,14.02-8.236l4.683,1.271c-2.804,6.659-8.81,10.561-14.183,11.008  l34.256-0.043l-0.025-0.002c-6.771-1.713-11.065-7.154-11.065-13.371c0-8.5,7.885-14.02,19.276-14.02  c4.555,0,9.637,0.876,13.402,2.365v-4.117c0-8.061-4.992-13.143-12.791-13.143c-4.816,0-9.727,1.928-14.721,5.432l-2.102-3.942  c5.869-3.942,11.391-5.958,17.436-5.958c11.039,0,18.137,6.834,18.137,18.137v20.59c0,1.664,0.613,2.453,2.104,2.453v5.258  c-0.963,0.087-1.752,0.175-2.365,0.175c-2.365,0-4.643-1.401-4.818-4.205l-0.176-3.592c-3.943,5.344-11.127,8.498-17.697,8.498  l0.047,4.36h36.135v-13.561V80.9h5.957v53.622c0,3.416,2.016,5.433,5.344,5.433c1.314,0,3.242-0.351,4.732-0.964v4.348h8.375  l0.035-39.395h-6.309v-4.73h6.309V83.792h5.957v15.421h10.514v4.73h-10.514v31.017c0.264,3.329,2.629,4.906,5.52,4.906  c3.33,0,6.221-1.577,6.922-2.015l-0.061,21.114h11.186c0.525,0.089,4.469-0.088,5.082-0.351c1.227-0.526,2.277-2.19,6.922-13.756  l-19.889-45.647h6.221l16.91,40.127l15.596-40.127h5.695l-23.744,58.877c-1.752,4.294-4.82,6.248-10.166,6.248l693.874,1")
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



            setTimeout(function()
            {
                var svg = d3.select("#LineArtReality");
                svg.append("path")
                        .style("stroke", "white")
                        .style("fill", "none")
                        .style("stroke-width", "1.8px")
                        .attr("d", "M68.919,130.057   c0,0.816-0.853,1.478-1.905,1.478H44.439c-1.055,0-1.905-0.661-1.905-1.478v-6.54c0-0.815,0.851-1.479,1.905-1.479h22.574   c1.053,0,1.905,0.663,1.905,1.479V130.057z")
                        .call(transition);
                function transition(path) {
                    path.transition()
                            .ease("in-out")
                            .duration(2000)
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

            }, 100);


            setTimeout(function()
            {
                var svg = d3.select("#LineArtReality");
                svg.append("path")
                        .style("stroke", "white")
                        .style("fill", "none")
                        .style("stroke-width", "1.8px")
                        .attr("d", "M80.622,130.057   c0,0.816-0.854,1.478-1.906,1.478h-2.587c-1.049,0-1.902-0.661-1.902-1.478v-6.54c0-0.815,0.854-1.479,1.902-1.479h2.587   c1.052,0,1.906,0.663,1.906,1.479V130.057z")
                        .call(transition);
                function transition(path) {
                    path.transition()
                            .ease("in-out")
                            .duration(2000)
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

            }, 100);


            setTimeout(function()
            {
                var svg = d3.select("#LineArtReality");
                svg.append("path")
                        .style("stroke", "white")
                        .style("fill", "none")
                        .style("stroke-width", "1.8px")
                        .attr("d", "M68.919,145.243   c0,0.815-0.853,1.477-1.905,1.477H44.439c-1.055,0-1.905-0.661-1.905-1.477v-6.539c0-0.816,0.851-1.479,1.905-1.479h22.574   c1.053,0,1.905,0.663,1.905,1.479V145.243z")
                        .call(transition);
                function transition(path) {
                    path.transition()
                            .ease("in-out")
                            .duration(2000)
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

            }, 100);


            setTimeout(function()
            {
                var svg = d3.select("#LineArtReality");
                svg.append("path")
                        .style("stroke", "white")
                        .style("fill", "none")
                        .style("stroke-width", "1.8px")
                        .attr("d", "M80.622,145.243   c0,0.815-0.854,1.477-1.906,1.477h-2.587c-1.049,0-1.902-0.661-1.902-1.477v-6.539c0-0.816,0.854-1.479,1.902-1.479h2.587   c1.052,0,1.906,0.663,1.906,1.479V145.243z")
                        .call(transition);
                function transition(path) {
                    path.transition()
                            .ease("in-out")
                            .duration(2000)
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

            }, 100);


            setTimeout(function()
            {
                var svg = d3.select("#LineArtReality");
                svg.append("path")
                        .style("stroke", "white")
                        .style("fill", "none")
                        .style("stroke-width", "1.8px")
                        .attr("d", "M68.919,160.428   c0,0.817-0.853,1.478-1.905,1.478H44.439c-1.055,0-1.905-0.66-1.905-1.478v-6.539c0-0.814,0.851-1.477,1.905-1.477h22.574   c1.053,0,1.905,0.662,1.905,1.477V160.428z")
                        .call(transition);
                function transition(path) {
                    path.transition()
                            .ease("in-out")
                            .duration(2000)
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

            }, 100);


            setTimeout(function()
            {
                var svg = d3.select("#LineArtReality");
                svg.append("path")
                        .style("stroke", "white")
                        .style("fill", "none")
                        .style("stroke-width", "1.8px")
                        .attr("d", "M80.622,160.428   c0,0.817-0.854,1.478-1.906,1.478h-2.587c-1.049,0-1.902-0.66-1.902-1.478v-6.539c0-0.814,0.854-1.477,1.902-1.477h2.587   c1.052,0,1.906,0.662,1.906,1.477V160.428z")
                        .call(transition);
                function transition(path) {
                    path.transition()
                            .ease("in-out")
                            .duration(2000)
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

            }, 100);




            setTimeout(function()
            {
                var svg = d3.select("#LineArtReality");
                svg.append("path")
                        .style("stroke", "white")
                        .style("fill", "none")
                        .style("stroke-width", "1.8px")
                        .attr("d", "m 134.299,172.111 0.086,-39.412 -17.8,11.4 -2.791,-3.046 51.685,-34.093 17.931,9.618 0,-6.062 -3.917,0 9.989,-7.528 9.859,7.429 -4.989,-0.108 -0.136,10.664 26.034,16.21 -1.225,2.196 -10.925,-4.392 0.139,38.476")
                        .call(transition);
                function transition(path) {
                    path.transition()
                            .ease("in-out")
                            .duration(2000)
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

            }, 2000);


            setTimeout(function()
            {
                var svg = d3.select("#LineArtReality");
                svg.append("path")
                        .style("stroke", "white")
                        .style("fill", "none")
                        .style("stroke-width", "1.8px")
                        .attr("d", "m 151.66,131.63499 12.027,0 0,9.312 -12.027,0 z")
                        .call(transition);
                function transition(path) {
                    path.transition()
                            .ease("in-out")
                            .duration(2000)
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

            }, 2000);


            setTimeout(function()
            {
                var svg = d3.select("#LineArtReality");
                svg.append("path")
                        .style("stroke", "white")
                        .style("fill", "none")
                        .style("stroke-width", "1.8px")
                        .attr("d", "m 171.631,131.63499 12.021,0 0,9.312 -12.021,0 z")
                        .call(transition);
                function transition(path) {
                    path.transition()
                            .ease("in-out")
                            .duration(2000)
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

            }, 2000);

            setTimeout(function()
            {
                var svg = d3.select("#LineArtReality");
                svg.append("path")
                        .style("stroke", "white")
                        .style("fill", "none")
                        .style("stroke-width", "1.8px")
                        .attr("d", "m 151.66,147.84399 12.027,0 0,9.31 -12.027,0 z")
                        .call(transition);
                function transition(path) {
                    path.transition()
                            .ease("in-out")
                            .duration(2000)
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

            }, 2000);


            setTimeout(function()
            {
                var svg = d3.select("#LineArtReality");
                svg.append("path")
                        .style("stroke", "white")
                        .style("fill", "none")
                        .style("stroke-width", "1.8px")
                        .attr("d", "m 171.631,147.84399 12.021,0 0,9.31 -12.021,0 z")
                        .call(transition);
                function transition(path) {
                    path.transition()
                            .ease("in-out")
                            .duration(2000)
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

            }, 2000);

            setTimeout(function()
            {
                var svg = d3.select("#LineArtReality");
                svg.append("path")
                        .style("stroke", "white")
                        .style("fill", "none")
                        .style("stroke-width", "1.8px")
                        .attr("d", "M231.728,161.553  c0,0,0.071-5.501-5.104-5.692c-3.968-0.148-6.884,0.7-9.26-2.901c0,0,3.63,0.969,6.172,0.238c1.449-0.418,3.848-1.23,6.109-0.805  c2.247,0.43-0.681-4.973-6.553-4.877c0,0-7.692-0.049-8.668-4.355c0,0,3.495,2.842,8.431,1.041c0,0,4.837-1.562,7.83,0.189  c0,0,0.113-2.555,1.7-4.114c0,0-3.246-0.753-4.345-0.856c-1.032-0.095-7.623-0.712-7.329-8.566c0,0,4.168,4.189,7.893,4.545  c3.706,0.355,4.632-0.57,6.705,1.752c0,0,0-1.517,1.293-2.27c0,0-10.206-2.553-8.304-12.31c0,0,0.853,4.642,5.125,4.919  c0,0,5.184,0.619,7.996,3.459c0,0,1.466-1.326,2.57-1.613c0,0-4.93-5.855-2.769-8.233c2.153-2.376,3.758-5.011,4.162-7.101  c0.343-1.718,2.283,3.946,0.941,6.396c0,0-2.829,3.736,4.813,6.006c0,0,1.992-0.792,4.032-0.663c0,0-2.617-5.838-1.552-7.806  c1.097-2.019,6.344-3.919,6.766-6.094c0,0,1.55,4.191-0.33,8.174c-0.611,1.295-1.152,4.866,2.504,5.158  c0.822,0.064,2.508-0.159,3.005,0.027c0,0-2.487-5.482,1.966-7.324c1.247-0.516,3.811-1.251,3.742-3.104c0,0,0.576,5.195-1.021,7.42  c-1.585,2.224-0.939,4.194,3.517,4.238")
                        .call(transition);
                function transition(path) {
                    path.transition()
                            .ease("in-out")
                            .duration(2000)
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

            }, 5500);

            setTimeout(function()
            {
                var svg = d3.select("#LineArtReality");
                svg.append("path")
                        .style("stroke", "white")
                        .style("fill", "none")
                        .style("stroke-width", "1.8px")
                        .attr("d", "M224.063,180.742  c0.188,3.622,3.201,7.676,5.907,11.024c0.715-17.986,9.883-28.859,27.516-32.623c-9.889,13.193-13.272,25.947-2.299,37.744  c0.749-23.592,15.383-41.995,53.162-48.099c37.792-6.103,88.265-0.287,131.284,13.67c14.687,4.883,35.437,8.74,50.117,13.63")
                        .call(transition);
                function transition(path) {
                    path.transition()
                            .ease("in-out")
                            .duration(7000)
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

            }, 5500);





  setTimeout(function()
            {
                var svg = d3.select("#LineArtReality");
                svg.append("path")
                        .style("stroke", "white")
                        .style("fill", "none")
                        .style("stroke-width", "1.8px")
                        .attr("d", "m 280.077,70.19 5.652,-1.71 0,4.379 -5.652,1.704 0,-4.373 z")
                        .call(transition);
                function transition(path) {
                    path.transition()
                            .ease("in-out")
                            .duration(2000)
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

            }, 6500);
            
              setTimeout(function()
            {
                var svg = d3.select("#LineArtReality");
                svg.append("path")
                        .style("stroke", "white")
                        .style("fill", "none")
                        .style("stroke-width", "1.8px")
                        .attr("d", "m 280.077,95.842 5.652,-1.709 0,4.378 -5.652,1.706 0,-4.375 z")
                        .call(transition);
                function transition(path) {
                    path.transition()
                            .ease("in-out")
                            .duration(2000)
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

            }, 6500);
            
              setTimeout(function()
            {
                var svg = d3.select("#LineArtReality");
                svg.append("path")
                        .style("stroke", "white")
                        .style("fill", "none")
                        .style("stroke-width", "1.8px")
                        .attr("d", "m 280.077,122.444 5.652,-1.281 0,4.378 -5.652,1.276 0,-4.373 z")
                        .call(transition);
                function transition(path) {
                    path.transition()
                            .ease("in-out")
                            .duration(2000)
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

            }, 6500);
            
            
             setTimeout(function()
            {
                var svg = d3.select("#LineArtReality");
                svg.append("path")
                        .style("stroke", "white")
                        .style("fill", "none")
                        .style("stroke-width", "1.8px")
                        .attr("d", "m 304.643,43.965 5.647,-1.366 0,4.371 -5.647,1.373 0,-4.378 z")
                        .call(transition);
                function transition(path) {
                    path.transition()
                            .ease("in-out")
                            .duration(2000)
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

            }, 7500);
            
                  setTimeout(function()
            {
                var svg = d3.select("#LineArtReality");
                svg.append("path")
                        .style("stroke", "white")
                        .style("fill", "none")
                        .style("stroke-width", "1.8px")
                        .attr("d", "m 304.643,53.88 5.647,-1.368 0,4.373 -5.647,1.373 0,-4.378 z")
                        .call(transition);
                function transition(path) {
                    path.transition()
                            .ease("in-out")
                            .duration(2000)
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

            }, 7500);
            
                   setTimeout(function()
            {
                var svg = d3.select("#LineArtReality");
                svg.append("path")
                        .style("stroke", "white")
                        .style("fill", "none")
                        .style("stroke-width", "1.8px")
                        .attr("d", "m 304.643,63.794 5.647,-1.369 0,4.377 -5.647,1.372 0,-4.38 z")
                        .call(transition);
                function transition(path) {
                    path.transition()
                            .ease("in-out")
                            .duration(2000)
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

            }, 7500);
            
                  setTimeout(function()
            {
                var svg = d3.select("#LineArtReality");
                svg.append("path")
                        .style("stroke", "white")
                        .style("fill", "none")
                        .style("stroke-width", "1.8px")
                        .attr("d", "m 304.643,73.711 5.647,-1.368 0,4.372 -5.647,1.374 0,-4.378 z")
                        .call(transition);
                function transition(path) {
                    path.transition()
                            .ease("in-out")
                            .duration(2000)
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

            }, 7500);
            
                  setTimeout(function()
            {
                var svg = d3.select("#LineArtReality");
                svg.append("path")
                        .style("stroke", "white")
                        .style("fill", "none")
                        .style("stroke-width", "1.8px")
                        .attr("d", "m 304.643,83.625 5.647,-1.365 0,4.372 -5.647,1.373 0,-4.38 z")
                        .call(transition);
                function transition(path) {
                    path.transition()
                            .ease("in-out")
                            .duration(2000)
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

            }, 7500);
            
                     setTimeout(function()
            {
                var svg = d3.select("#LineArtReality");
                svg.append("path")
                        .style("stroke", "white")
                        .style("fill", "none")
                        .style("stroke-width", "1.8px")
                        .attr("d", "m 304.643,93.54 5.647,-1.367 0,4.372 -5.647,1.373 0,-4.378 z")
                        .call(transition);
                function transition(path) {
                    path.transition()
                            .ease("in-out")
                            .duration(2000)
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

            }, 7500);
                     setTimeout(function()
            {
                var svg = d3.select("#LineArtReality");
                svg.append("path")
                        .style("stroke", "white")
                        .style("fill", "none")
                        .style("stroke-width", "1.8px")
                        .attr("d", "m 304.643,103.455 5.647,-1.367 0,4.371 -5.647,1.375 0,-4.379 z")
                        .call(transition);
                function transition(path) {
                    path.transition()
                            .ease("in-out")
                            .duration(2000)
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

            }, 7500);
            
                     setTimeout(function()
            {
                var svg = d3.select("#LineArtReality");
                svg.append("path")
                        .style("stroke", "white")
                        .style("fill", "none")
                        .style("stroke-width", "1.8px")
                        .attr("d", "m 304.643,113.37 5.647,-1.367 0,4.371 -5.647,1.374 0,-4.378 z")
                        .call(transition);
                function transition(path) {
                    path.transition()
                            .ease("in-out")
                            .duration(2000)
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

            }, 7500);
            
                    setTimeout(function()
            {
                var svg = d3.select("#LineArtReality");
                svg.append("path")
                        .style("stroke", "white")
                        .style("fill", "none")
                        .style("stroke-width", "1.8px")
                        .attr("d", "m 304.643,123.284 5.647,-1.366 0,4.372 -5.647,1.374 0,-4.38 z")
                        .call(transition);
                function transition(path) {
                    path.transition()
                            .ease("in-out")
                            .duration(2000)
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

            }, 7500);




            setTimeout(function()
            {
                var svg = d3.select("#LineArtReality");
                svg.append("path")
                        .style("stroke", "white")
                        .style("fill", "none")
                        .style("stroke-width", "1.8px")
                        .attr("d", "M391.476,16.862  l14.429,4.982 M391.476,24.318l14.429,4.982 M391.476,31.776l14.429,4.983 M391.476,39.233l14.429,4.983 M391.476,46.689  l14.429,4.984 M391.476,54.146l14.429,4.986 M391.476,61.604l14.429,4.983 M405.904,74.046l-14.429-4.984 M391.476,76.519  l14.429,4.981 M391.476,83.976l14.429,4.983 M405.904,96.414l-14.429-4.98 M391.476,98.891l14.429,4.983 M391.476,106.35  l14.429,4.979 M391.476,113.806l14.429,4.982 M391.476,121.264l14.429,4.98 M391.476,128.72l14.429,4.981 M391.476,136.178  l14.429,4.981 M405.904,148.616l-14.429-4.982")
                        .call(transition);
                function transition(path) {
                    path.transition()
                            .ease("in-out")
                            .duration(12000)
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

            }, 10000);

            setTimeout(function()
            {
                var svg = d3.select("#LineArtReality");
                svg.append("path")
                        .style("stroke", "white")
                        .style("fill", "none")
                        .style("stroke-width", "1.8px")
                        .attr("d", "M322.103,36.279  l19.905,3.703 M342.008,47.797l-19.905-3.703 M342.008,55.614l-19.905-3.702 M322.103,59.729l19.905,3.7 M322.103,67.545  l19.905,3.701 M322.103,75.36l19.905,3.701 M322.103,83.175l19.905,3.701 M322.103,90.99l19.905,3.703 M322.103,98.807l19.905,3.703   M322.103,106.624l19.905,3.7 M322.103,114.438l19.905,3.703 M322.103,121.845l19.905,3.702 M322.103,129.249l19.905,3.702")
                        .call(transition);
                function transition(path) {
                    path.transition()
                            .ease("in-out")
                            .duration(8000)
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

            }, 8000);

            setTimeout(function()
            {
                var svg = d3.select("#LineArtReality");
                svg.append("path")
                        .style("stroke", "white")
                        .style("fill", "none")
                        .style("stroke-width", "1.8px")
                        .attr("d", "M387.373,14.327  l0.278,127.046 M316.67,41.336l0.271,40.636 M298.566,83.994l0.265,40.634 M291.135,67.538l0.269,40.636 M316.989,106.107  l0.277,15.084")
                        .call(transition);
                function transition(path) {
                    path.transition()
                            .ease("in-out")
                            .duration(1000)
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

            }, 9000);

            setTimeout(function()
            {
                var svg = d3.select("#LineArtReality");
                svg.append("path")
                        .style("stroke", "white")
                        .style("fill", "none")
                        .style("stroke-width", "1.8px")
                        .attr("d", " m 443.786,148.086 5.647,1.319 0,8.733 -5.647,-1.318 0,-8.734 z  ")
                        .call(transition);
                function transition(path) {
                    path.transition()
                            .ease("in-out")
                            .duration(1000)
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

            }, 11000);

            setTimeout(function()
            {
                var svg = d3.select("#LineArtReality");
                svg.append("path")
                        .style("stroke", "white")
                        .style("fill", "none")
                        .style("stroke-width", "1.8px")
                        .attr("d", "m 475.059,154.484 4.375,0.563 0,5.681 -4.375,-0.569 0,-5.675 z")
                        .call(transition);
                function transition(path) {
                    path.transition()
                            .ease("in-out")
                            .duration(1000)
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

            }, 11000);

            setTimeout(function()
            {
                var svg = d3.select("#LineArtReality");
                svg.append("path")
                        .style("stroke", "white")
                        .style("fill", "none")
                        .style("stroke-width", "1.8px")
                        .attr("d", "M547.543,116.473h20.416  c7.359,0,12.09-6.922,12.09-14.281c0-7.535-5.783-14.106-12.617-14.106h-19.889V116.473z")
                        .call(transition);
                function transition(path) {
                    path.transition()
                            .ease("in-out")
                            .duration(1000)
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

            }, 13700);

            setTimeout(function()
            {
                var svg = d3.select("#LineArtReality");
                svg.append("path")
                        .style("stroke", "white")
                        .style("fill", "none")
                        .style("stroke-width", "1.8px")
                        .attr("d", "M634.629,119.627  c-0.787-9.726-7.973-16.56-16.908-16.56c-8.938,0-16.123,6.922-16.736,16.56H634.629z")
                        .call(transition);
                function transition(path) {
                    path.transition()
                            .ease("in-out")
                            .duration(1000)
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

            }, 15500);


            setTimeout(function()
            {
                var svg = d3.select("#LineArtReality");
                svg.append("path")
                        .style("stroke", "white")
                        .style("fill", "none")
                        .style("stroke-width", "1.8px")
                        .attr("d", "M676.857,134.785  c0.787-1.053,1.488-2.366,1.488-3.418v-7.447c-3.941-1.489-8.41-2.365-12.529-2.365c-8.498,0-14.369,3.68-14.369,9.725  c0,4.819,3.768,9.901,11.391,9.901C668.096,141.181,673.877,138.727,676.857,134.785z")
                        .call(transition);
                function transition(path) {
                    path.transition()
                            .ease("in-out")
                            .duration(1000)
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

            }, 18500);


     setTimeout(function()
            {
                var svg = d3.select("#LineArtReality");
                svg.append("path")
                        .style("stroke", "white")
                        .style("fill", "none")
                        .style("stroke-width", "1.8px")
                        .attr("d", "m 368.516,20.845 8.311,-2.591 0,6.443 -10.138,3.118 0,-6.438 z")
                        .call(transition);
                function transition(path) {
                    path.transition()
                            .ease("in-out")
                            .duration(1000)
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

            }, 9500);
            
            
            
            
                 setTimeout(function()
            {
                var svg = d3.select("#LineArtReality");
                svg.append("path")
                        .style("stroke", "white")
                        .style("fill", "none")
                        .style("stroke-width", "1.8px")
                        .attr("d", "m 368.516,42.648 8.311,-2.59 0,6.44 -10.138,3.119 0,-6.438 z")
                        .call(transition);
                function transition(path) {
                    path.transition()
                            .ease("in-out")
                            .duration(1000)
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

            }, 9500);
            
              setTimeout(function()
            {
                var svg = d3.select("#LineArtReality");
                svg.append("path")
                        .style("stroke", "white")
                        .style("fill", "none")
                        .style("stroke-width", "1.8px")
                        .attr("d", "m 368.516,64.45 8.311,-2.591 0,6.444 -10.138,3.116 0,-6.438 z")
                        .call(transition);
                function transition(path) {
                    path.transition()
                            .ease("in-out")
                            .duration(1000)
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

            }, 9500);
            
                     setTimeout(function()
            {
                var svg = d3.select("#LineArtReality");
                svg.append("path")
                        .style("stroke", "white")
                        .style("fill", "none")
                        .style("stroke-width", "1.8px")
                        .attr("d", "m 368.516,86.252 8.311,-2.591 0,6.443 -10.138,3.118 0,-6.438 z")
                        .call(transition);
                function transition(path) {
                    path.transition()
                            .ease("in-out")
                            .duration(1000)
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

            }, 9500);
            
                      setTimeout(function()
            {
                var svg = d3.select("#LineArtReality");
                svg.append("path")
                        .style("stroke", "white")
                        .style("fill", "none")
                        .style("stroke-width", "1.8px")
                        .attr("d", "m 368.516,108.056 8.311,-2.591 0,6.441 -10.138,3.117 0,-6.437 z")
                        .call(transition);
                function transition(path) {
                    path.transition()
                            .ease("in-out")
                            .duration(1000)
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

            }, 9500);


          setTimeout(function()
            {
                var svg = d3.select("#LineArtReality");
                svg.append("path")
                        .style("stroke", "white")
                        .style("fill", "none")
                        .style("stroke-width", "1.8px")
                        .attr("d", "m 368.516,129.857 8.311,-2.589 0,6.442 -10.138,3.116 0,-6.438 z")
                        .call(transition);
                function transition(path) {
                    path.transition()
                            .ease("in-out")
                            .duration(1000)
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

            }, 9500);

            setTimeout(function()
            {
                var svg = d3.select("#LineArtReality");
                svg.append("path")
                        .style("stroke", "white")
                        .style("fill", "none")
                        .style("stroke-width", "1.8px")
                        .attr("d", "M460.547,157.125  c0,0,5.241,0.107,10.547,1.516v-6.881l-2.551-0.256l9.886-5.735l9.075,7.815l-4.104-0.57l0.153,11.656")
                        .call(transition);
                function transition(path) {
                    path.transition()
                            .ease("in-out")
                            .duration(1000)
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

            }, 10500);
     

        </script>
    </body>
</html>

