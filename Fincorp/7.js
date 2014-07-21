  function  drawLineArtcircle5CorpLine()
{          
  var svg = d3.select("#LineArtBoxSVG2");

      svg.append("path")
            .style("stroke", "#fff")
            .style("fill", "none")
            .style("stroke-width", "1.5px")
            .attr("d", "M271.085,116c3.873,0,7.033-3.162,7.033-7.035c0-3.857-3.16-7.02-7.033-7.02c-3.872,0-7.024,3.162-7.024,7.02  C264.061,112.838,267.213,116,271.085,116z")
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
    drawLineArtcircle5CorpLine();
}, 8500);
