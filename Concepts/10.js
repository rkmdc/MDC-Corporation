            
      function  drawLineArt10CorpLine()
{          
  var svg = d3.select("#LineArtConcepts_seperate");

      svg.append("path")
            .style("stroke", "#fff")
            .style("fill", "none")
            .style("stroke-width", "1.8px")
            .attr("d", "M134.598,86.492  c1.107,0,2.012-0.902,2.012-2.014c0-1.102-0.904-2.004-2.012-2.004c-1.104,0-2.009,0.902-2.009,2.004  C132.589,85.59,133.494,86.492,134.598,86.492L134.598,86.492z")
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
    drawLineArt10CorpLine();
}, 3300);
