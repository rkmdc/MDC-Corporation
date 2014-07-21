            
      function  drawLineArt8CorpLine()
{          
  var svg = d3.select("#LineArtConcepts_seperate");

      svg.append("path")
            .style("stroke", "#fff")
            .style("fill", "none")
            .style("stroke-width", "1.8px")
            .attr("d", "M268.653,126.539  c2.905,0,5.28-2.369,5.28-5.275c0-2.908-2.375-5.287-5.28-5.287c-2.907,0-5.28,2.379-5.28,5.287  C263.373,124.17,265.746,126.539,268.653,126.539L268.653,126.539z")
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
    drawLineArt8CorpLine();
}, 8000);
