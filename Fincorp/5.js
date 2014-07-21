function  drawLineArtcircle3CorpLine()
{          
  var svg = d3.select("#LineArtBoxSVG2");

      svg.append("path")
            .style("stroke", "#fff")
            .style("fill", "none")
            .style("stroke-width", "1.5px")
            .attr("d", "M113.217,60.006c2.608,0,4.736-2.12,4.736-4.731c0-2.609-2.128-4.729-4.736-4.729c-2.614,0-4.734,2.12-4.734,4.729  C108.482,57.887,110.603,60.006,113.217,60.006z")
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
    drawLineArtcircle3CorpLine();
}, 3000);

