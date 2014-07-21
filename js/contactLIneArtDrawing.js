/*  
 Document   : contactLIneArtDrawing.js
 Created on : 17 Jan, 2014, 12:05:23 PM
 Last Update: 17 Jan, 2014, 12:05:23 PM
 Author     : CodeLord
 Description: This JS is used for line art drawing for contact page.
 */


/**
 * This function is used for drawing line around canvase
 * @returns {undefined}
 */
function drawLineArtAroundCanvasInContact()
{
    var svg = d3.select("#ContactLineArtBoxSVG");

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
            .style("stroke-width", "3px")
            .attr("d", "M0,252.935c0,0,162.001,0,170.251,0" +
                    "s19.75-3.2,19.706-15.45V76.286c0-40.751,34.894-73.786,77.935-73.786h421.54l394.671,0.502c43.041,0,77.935,33.035,77.935,73.786" +
                    "v161.198c-0.044,12.25,11.456,15.45,19.706,15.45s98.383,0,98.383,0")
            .call(transition);


    svg.append("path")
            .style("stroke", "#fff")
            .style("fill", "none")
            .style("stroke-width", "3px")
            .attr("d", "M0.622,253.072c0,0,162.001,0,170.251,0" +
                    "s19.75,3.2,19.706,15.45v123.24c0,40.751,34.894,73.786,77.935,73.786h421.54h394.542c43.041,0,78.063-33.537,78.063-74.288" +
                    "v-123.24c-0.044-12.25,11.456-15.45,19.706-15.45s98.383,0,98.383,0")
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
                .duration(30000)
                .attrTween("stroke-dasharray", tweenDash)
                .each("end", function() {
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

/**
 * this function is used to call a drawLineArtAroundCanvasInContact method after some time
 * @returns {undefined}
 */
setTimeout(function() {
    drawLineArtAroundCanvasInContact();
}, 53400);
//drawArtMobilePart();
//drawLineArtAroundCanvasInContact();