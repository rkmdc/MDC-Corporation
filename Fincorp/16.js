      function  drawLineArtcircle16CorpLine()
{          
  var svg = d3.select("#LineArtBoxSVG2");

      svg.append("path")
            .style("stroke", "#fff")
            .style("fill", "none")
            .style("stroke-width", "1.5px")
            .attr("d", "M418.149,92.952l-0.575-2.445  l7.718-1.805l0.569,2.451C423.984,91.708,418.149,92.952,418.149,92.952z")
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
    drawLineArtcircle16CorpLine();
}, 14000);
