/*  
 Document   : aboutLIneArtDrawing.js
 Created on : 17 Jan, 2014, 12:05:23 PM
 Last Update: 17 Jan, 2014, 12:05:23 PM
 Author     : CodeLord
 Description: This JS is used for line art drawing for Logo page.
 */


/**
 * This function is used for drawing line around canvase
 * @returns {undefined}
 */
function drawLineArtAroundCanvasInLogo()
{
    var svg = d3.select("#LogoLineArtBoxSVG");

//    svg.append("path")
//            .style("stroke", "#8196bd")
//            .style("stroke-width", "3px")
//            .style("fill", "none")
//            .attr("d", "M0,231.46c0,0,162.001,0,170.251,0" +
//                    "s19.75-3.2,19.706-15.45V76.286c0-40.751,34.894-73.786,77.935-73.786h421.54v0.502h394.671c43.041,0,77.935,33.035,77.935,73.786" +
//                    "v139.724c-0.044,12.25,11.456,15.45,19.706,15.45s98.383,0,98.383,0");
//    svg.append("path")
//            .style("stroke", "#8196bd")
//            .style("stroke-width", "3px")
//            .style("fill", "none")
//            .attr("d", "M0,231.963c0,0,162.001,0,170.251,0" +
//                    "s19.75,3.2,19.706,15.45v96.525c0,40.751,34.894,73.786,77.935,73.786h421.54v-0.502h394.671c43.041,0,77.935-33.035,77.935-73.786" +
//                    "v-96.525c-0.044-12.25,11.456-15.45,19.706-15.45s98.383,0,98.383,0");


    svg.append("path")
            .style("stroke", "#fff")
            .style("fill", "none")
            .style("stroke-width", "1.5px")
            .attr("d", "M8.281,135.779c-4.093-4.918-6.563-11.231-6.563-18.097V44.337" +
                    "c0-15.606,12.755-28.365,28.359-28.365l0,0H87.23V6.36L99.412,18.51l12.518,12.499")
            .call(transition);


    svg.append("path")
            .style("stroke", "#fff")
            .style("fill", "none")
            .style("stroke-width", "1.5px")
            .attr("d", "M33.204,114.268c1.388,1.463,3.347,2.379,5.511,2.379h56.073" +
                    "c4.181,0,7.608-3.419,7.608-7.604V60.563h-9.617l12.154-12.181l12.543-12.482")
            .call(transition);
    svg.append("path")
            .style("stroke", "#fff")
            .style("fill", "none")
            .style("stroke-width", "1.5px")
            .attr("d", "M33.242,114.274c-1.333-1.073-2.175-3.459-2.164-5.198l0.019-56.093" +
                    "c0.016-4.195,3.432-7.62,7.618-7.62h48.518v9.611l12.181-12.153l12.512-12.489")
            .call(transition);


    svg.append("path")
            .style("stroke", "#fff")
            .style("fill", "none")
            .style("stroke-width", "1.5px")
            .attr("d", "M8.162,135.679c1.971,2.752,9.96,10.367,21.877,10.367h73.386" +
                    "c15.604,0,28.372-12.76,28.372-28.362V60.563h9.604L129.248,48.38l-12.474-12.497")
            .call(transition);
//                setTimeout(function() {
//                    drawArtMobilePart();
//                }, 4800);
//                drawArtMobilePart();


    /**
     * This function is used for setting transiotion of line art.
     * @param {type} path
     * @returns {undefined}
     */
    function transition(path) {
        path.transition()
                .duration(2000)
                .ease("in-out")
                .attrTween("stroke-dasharray", tweenDash)
                .each("end", function() {
//                     d3.select(this).call();
                });
    }

    /**
     * This function is used for line art for drawing line increasing one px at a pt
     * @returns {unresolved}
     */
    function tweenDash() {
        var l = this.getTotalLength(),
                i = d3.interpolateString("0," + l, l + "," + l);
        return function(t) {
            return i(t);
        };
    }

//    setTimeout(function() {
//        jQuery('#Home').addClass('show').removeClass('hide');
//    }, 14550);

}


drawLineArtAroundCanvasInLogo();