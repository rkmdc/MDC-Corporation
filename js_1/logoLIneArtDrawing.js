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
function drawLineArtVerticalLineFincorp()
{
    var svg = d3.select("#VerticalLineFincorp");

    svg.append("path")
            .style("stroke", "#84250d")
            .style("fill", "none")
            .style("stroke-width", "5px")
            .attr("d", "M308.947,77.352c0,0,0-89.439,0-75.97F")
            .call(transition);

    /**
     * This function is used for setting transiotion of line art.
     * @param {type} path
     * @returns {undefined}
     */
    function transition(path) {
        path.transition()
                .duration(500)
                .ease("in-out")
                .attrTween("stroke-dasharray", tweenDash)
                .each("end", function() {
                    $("#header_Fincorp").fadeIn('slow');
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


}

function drawLineArtVerticalLineConcept()
{
    var svg = d3.select("#VerticalLineConcept");

    svg.append("path")
            .style("stroke", "#1e4998")
            .style("fill", "none")
            .style("stroke-width", "5px")
            .attr("d", "M569.043,85.008c0,0,0-92.95,0-84.46")
            .call(transition);

    /**
     * This function is used for setting transiotion of line art.
     * @param {type} path
     * @returns {undefined}
     */
    function transition(path) {
        path.transition()
                .duration(500)
                .ease("in-out")
                .attrTween("stroke-dasharray", tweenDash)
                .each("end", function() {
                    $("#header_Concepts").fadeIn('slow');
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


}

function drawLineArtVerticalLineReality()
{
    var svg = d3.select("#VerticalLineReality");

    svg.append("path")
            .style("stroke", "#6c3c1b")
            .style("fill", "none")
            .style("stroke-width", "5px")
            .attr("d", "M830.782,94.645c0,0,0-103.581,0-94.021")
            .call(transition);

    /**
     * This function is used for setting transiotion of line art.
     * @param {type} path
     * @returns {undefined}
     */
    function transition(path) {
        path.transition()
                .duration(500)
                .ease("in-out")
                .attrTween("stroke-dasharray", tweenDash)
                .each("end", function() {
                    $("#header_Realty").fadeIn('slow');
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


}
function drawLineArtVerticalLineVerticalLineLifestyle()
{
    var svg = d3.select("#VerticalLineLifestyle");

    svg.append("path")
            .style("stroke", "#5c167d")
            .style("fill", "none")
            .style("stroke-width", "5px")
            .attr("d", "M1091.864,104.828c0,0,0-118.162,0-103.581")
            .call(transition);

    /**
     * This function is used for setting transiotion of line art.
     * @param {type} path
     * @returns {undefined}
     */
    function transition(path) {
        path.transition()
                .duration(500)
                .ease("in-out")
                .attrTween("stroke-dasharray", tweenDash)
                .each("end", function() {
                    $("#header_LifeStyle").fadeIn('slow');
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


}
function drawLineArtVerticalLineVerticalLineFitness()
{
    var svg = d3.select("#VerticalLineFitness");

    svg.append("path")
            .style("stroke", "#e47d28")
            .style("fill", "none")
            .style("stroke-width", "5px")
            .attr("d", "M1351.491,115.488c0,0,0-133.047,0-113.534")
            .call(transition);

    /**
     * This function is used for setting transiotion of line art.
     * @param {type} path
     * @returns {undefined}
     */
    function transition(path) {
        path.transition()
                .duration(500)
                .ease("in-out")
                .attrTween("stroke-dasharray", tweenDash)
                .each("end", function() {
                    $("#header_Fitness").fadeIn('slow');
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


}

function drawLineArtVerticalLineVerticalLineFoundation()
{
    var svg = d3.select("#VerticalLineFoundation");

    svg.append("path")
            .style("stroke", "#ad873e")
            .style("fill", "none")
            .style("stroke-width", "5px")
            .attr("d", "M1611.116,124.017c0,0,0-138.904,0-122.702")
            .call(transition);

    /**
     * This function is used for setting transiotion of line art.
     * @param {type} path
     * @returns {undefined}
     */
    function transition(path) {
        path.transition()
                .duration(500)
                .ease("in-out")
                .attrTween("stroke-dasharray", tweenDash)
                .each("end", function() {
                    $("#header_Foundation").fadeIn('slow');
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


}



