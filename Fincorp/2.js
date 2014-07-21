            
      function  drawLineArtsquareCorpLine()
{          
  var svg = d3.select("#LineArtBoxSVG2");

      svg.append("path")
            .style("stroke", "#fff")
            .style("fill", "none")
            .style("stroke-width", "1.5px")
            .attr("d", "M263.477,95.401h41.072c3.781,0,6.873,3.385,6.873,7.502v42.854c0,4.125-3.092,7.504-6.873,7.504h-41.072 c-3.775,0-6.875-3.379-6.875-7.504v-42.854C256.602,98.786,259.701,95.401,263.477,95.401z")
            .call(transition);
                
                 function transition(path) {
                path.transition()
                        .duration(2000)
			.ease("in-out")
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
            

}
                setTimeout(function() {
    drawLineArtsquareCorpLine();
}, 8500);


