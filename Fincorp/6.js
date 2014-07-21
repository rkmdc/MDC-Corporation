 function  drawLineArtcircle4CorpLine()
{          
  var svg = d3.select("#LineArtBoxSVG2");

      svg.append("path")
            .style("stroke", "#fff")
            .style("fill", "none")
            .style("stroke-width", "1.5px")
            .attr("d", " M130.61,40.111c6.229,0,11.306-5.077,11.306-11.313c0-6.23-5.077-11.316-11.306-11.316s-11.301,5.086-11.301,11.316  C119.31,35.034,124.382,40.111,130.61,40.111z")
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
    drawLineArtcircle4CorpLine();
}, 3000);

