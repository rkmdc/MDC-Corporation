            
      function  drawLineArt9CorpLine()
{          
  var svg = d3.select("#LineArtConcepts_seperate");

      svg.append("path")
            .style("stroke", "#fff")
            .style("fill", "none")
            .style("stroke-width", "1.8px")
            .attr("d", "M297.506,121.949  c1.361,0,2.465-1.102,2.465-2.465c0-1.357-1.104-2.461-2.465-2.461c-1.357,0-2.467,1.104-2.467,2.461  C295.039,120.848,296.148,121.949,297.506,121.949L297.506,121.949z")
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
    drawLineArt9CorpLine();
}, 9000);
