           
      function  drawLineArtcircleCorpLine()
{          
  var svg = d3.select("#LineArtBoxSVG2");

      svg.append("path")
            .style("stroke", "#fff")
            .style("fill", "none")
            .style("stroke-width", "1.5px")
            .attr("d", "M404.935,25.469  c-1.634-0.693-3.3-0.564-4.993,0.371c-1.691,0.947-3.345,3.301-4.973,7.088c-1.48,3.434-1.973,6.08-1.496,7.953  c0.497,1.881,1.554,3.162,3.16,3.86c1.646,0.704,3.327,0.589,5.02-0.364c1.693-0.932,3.35-3.277,4.969-7.034  c1.489-3.464,1.993-6.125,1.494-7.987C407.626,27.465,406.555,26.17,404.935,25.469z")
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
    drawLineArtcircleCorpLine();
}, 13500);



           
