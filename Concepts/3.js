            
      function  drawLineArt3CorpLine()
{          
  var svg = d3.select("#LineArtConcepts_seperate");

      svg.append("path")
            .style("stroke", "#fff")
            .style("fill", "none")
            .style("stroke-width", "1.8px")
            .attr("d", "M172.731,85.58h23.409  c1.455,0,2.639,1.186,2.639,2.641v23.402c0,1.457-1.184,2.646-2.639,2.646h-23.409c-1.446,0-2.635-1.189-2.635-2.646V88.221  C170.097,86.766,171.285,85.58,172.731,85.58L172.731,85.58z")
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
    drawLineArt3CorpLine();
}, 6000);
