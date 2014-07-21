            
      function  drawLineArt4CorpLine()
{          
  var svg = d3.select("#LineArtConcepts_seperate");

      svg.append("path")
            .style("stroke", "#fff")
            .style("fill", "none")
            .style("stroke-width", "1.8px")
            .attr("d", "M173.076,122.635h22.719  c0.5,0,0.92,0.418,0.92,0.92v4.135c0,0.502-0.42,0.918-0.92,0.918h-22.719c-0.504,0-0.92-0.416-0.92-0.918v-4.135  C172.156,123.053,172.572,122.635,173.076,122.635L173.076,122.635z")
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
    drawLineArt4CorpLine();
}, 6900);
