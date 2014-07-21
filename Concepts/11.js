            
      function  drawLineArt11CorpLine()
{          
  var svg = d3.select("#LineArtConcepts_seperate");

      svg.append("path")
            .style("stroke", "#fff")
            .style("fill", "none")
            .style("stroke-width", "1.8px")
            .attr("d", "M429.885,148.74  c3.121,0,5.668-2.539,5.668-5.656c0-3.127-2.547-5.666-5.668-5.666c-3.117,0-5.658,2.539-5.658,5.666  C424.227,146.201,426.768,148.74,429.885,148.74L429.885,148.74z")
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
    drawLineArt11CorpLine();
}, 13000);
