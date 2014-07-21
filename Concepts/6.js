            
      function  drawLineArt6CorpLine()
{          
  var svg = d3.select("#LineArtConcepts_seperate");

      svg.append("path")
            .style("stroke", "#fff")
            .style("fill", "none")
            .style("stroke-width", "1.8px")
            .attr("d", "M461.534,53.572  c3.651,0,6.622-2.973,6.622-6.619c0-3.645-2.971-6.623-6.622-6.623c-3.642,0-6.614,2.979-6.614,6.623  C454.92,50.6,457.893,53.572,461.534,53.572L461.534,53.572z")
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
    drawLineArt6CorpLine();
}, 15500);
