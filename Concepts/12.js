            
      function  drawLineArt12CorpLine()
{          
  var svg = d3.select("#LineArtConcepts_seperate");

      svg.append("path")
            .style("stroke", "#fff")
            .style("fill", "none")
            .style("stroke-width", "1.8px")
            .attr("d", "M470.512,149.188  c3.115,0,5.664-2.547,5.664-5.666s-2.549-5.664-5.664-5.664c-3.125,0-5.666,2.545-5.666,5.664S467.387,149.188,470.512,149.188  L470.512,149.188z")
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
    drawLineArt12CorpLine();
}, 13400);
