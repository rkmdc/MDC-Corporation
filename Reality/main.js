/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var svg = d3.select("#LineArtReality");
svg.append("path")
        .style("stroke", "white")
        .style("fill", "none")
        .style("stroke-width", "1.8px")
        .attr("d", "m 8.3408082,155.063 32.6179998,0.052 v -42.418 h 54.5 c 10.511002,0 10.417002,6.313 10.417002,6.313 v 63.394 c 0,4.402 5.416,4.119 5.416,4.119 l 21.71,-0.036 v -11.502 c 10.753,-2.51 21.505,-5.027 32.244,-7.545 11.52,2.979 23.022,5.964 34.548,8.936 v 3.979 c -9.718,-0.993 -19.452,-1.988 -29.175,-2.982 v 3.181 c 8.873,1.65 17.759,3.309 26.624,4.965 8.776,-4.837 17.574,-9.672 26.351,-14.499 0,0 9.468,-3.578 7.165,5.357 -10.069,7.088 -20.128,14.168 -30.202,21.254 -9.115,-1.988 -18.243,-3.977 -27.382,-5.96 -8.367,-1.639 -14.685,0.874 -20.725,3.972 -3.911,1.856 -7.842,3.709 -11.777,5.567 0.684,1.384 1.385,2.774 2.064,4.16 5.457,-2.443 10.905,-4.892 16.366,-7.343 5.375,-2.463 10.894,-3.185 17.918,-1.987 6.799,1.161 13.308,3.183 19.964,4.767 3.961,0.469 7.551,0.044 11.01,-1.984 8.1,-5.627 15.924,-11.498 24.296,-16.88 3.103,-1.992 5.024,-5.967 5.891,-11.32 2.553,-14.874 26.717,-30.392 46.116,-30.577 V 65.68 l 17.099,-6.034 6.964,3.733 v -29.93 l 18.377,-5.261 30.532,6.907 v 97.197 l 11.091,2.303 V 17.714 c 9.716,-3.007 19.457,-6.003 29.189,-9.007 l 23.246,8.033 v 132.103 c 8.116,0.624 16.213,2.036 24.328,4.606 0.275,-3.981 -0.272,-7.965 0,-11.942 -3.521,0.216 -7.025,0.425 -10.551,0.63 8.017,-4.265 16.032,-8.527 24.05,-12.801 7.317,6.104 14.652,12.204 21.979,18.303 l -9.846,-0.21 v 14.951 c 10.422,4.114 13.664,9.042 29.335,13.709 10.962,1.562 15.608,4.841 26.372,-9.44 7.87,-11.862 25.375,-21.788 25.375,-21.788 V 82.652 h 26.197 c 10.777,0 18.486,9.901 18.486,19.539 0,9.024 -5.607,16.998 -13.93,18.662 l 15.332,24.007 h -6.922 l -14.719,-22.956 h -18.4 v 22.956 l -0.043,10.353 h 66.25 v -9.828 0.004 c -11.173,-1.951 -18.898,-11.875 -18.898,-23.484 0,-12.791 9.639,-23.48 22.869,-23.48 13.316,0 22.516,10.864 22.604,23.394 0,0.876 -0.088,2.015 -0.174,2.366 h -38.99 c 0.701,9.813 8.061,16.997 16.822,16.997 6.045,0 11.916,-3.329 14.02,-8.236 l 4.682,1.271 c -2.803,6.659 -8.809,10.561 -14.182,11.007 l 34.256,-0.042 -0.026,-0.002 c -6.77,-1.713 -11.065,-7.155 -11.065,-13.372 0,-8.499 7.885,-14.019 19.275,-14.019 4.555,0 9.637,0.876 13.404,2.365 v -4.117 c 0,-8.061 -4.994,-13.143 -12.791,-13.143 -4.818,0 -9.727,1.928 -14.721,5.432 l -2.102,-3.942 c 5.869,-3.942 11.391,-5.958 17.436,-5.958 11.039,0 18.137,6.834 18.137,18.137 v 20.59 c 0,1.664 0.613,2.453 2.102,2.453 v 5.257 c -0.963,0.087 -1.752,0.175 -2.365,0.175 -2.365,0 -4.643,-1.401 -4.818,-4.205 l -0.176,-3.592 c -3.943,5.344 -11.127,8.498 -17.697,8.498 l 0.046,4.36 h 36.136 V 136.539 80.9 h 5.957 v 53.621 c 0,3.417 2.016,5.433 5.344,5.433 1.314,0 3.242,-0.351 4.732,-0.964 v 4.348 h 8.374 l 0.036,-39.395 h -6.309 v -4.73 h 6.309 V 83.792 h 5.957 v 15.421 h 10.514 v 4.73 h -10.514 v 31.017 c 0.264,3.329 2.629,4.906 5.52,4.906 3.33,0 6.221,-1.577 6.922,-2.015 l -0.061,21.115 h 11.186 c 0.525,0.088 4.469,-0.088 5.082,-0.351 1.227,-0.526 2.277,-2.19 6.922,-13.756 l -19.889,-45.647 h 6.221 l 16.91,40.127 15.596,-40.127 h 5.695 l -23.744,58.877 c -1.752,4.294 -4.82,6.248 -10.166,6.248 l 622.87499,1")
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
