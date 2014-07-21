      function  drawLineArtcircle17CorpLine()
{          
  var svg = d3.select("#LineArtBoxSVG2");

      svg.append("path")
            .style("stroke", "#fff")
            .style("fill", "none")
            .style("stroke-width", "1.5px")
            .attr("d", "M839.26,60.881  c0-9.813-7.447-18.399-16.998-18.399c-5.959,0-14.02,5.169-14.982,11.303v14.018c2.717,6.484,8.938,11.479,15.771,11.479  C832.863,79.282,839.26,70.169,839.26,60.881z")
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
    drawLineArtcircle17CorpLine();
}, 26000);
