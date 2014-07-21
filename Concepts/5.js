            
      function  drawLineArt5CorpLine()
{          
  var svg = d3.select("#LineArtConcepts_seperate");

      svg.append("path")
            .style("stroke", "#fff")
            .style("fill", "none")
            .style("stroke-width", "1.8px")
            .attr("d", "M461.534,30.451  c9.108,0,16.501,7.395,16.501,16.502c0,1.604-0.23,3.15-0.658,4.621l18.01,7.18l-1.531,3.832l-18.127-7.221  c-2.877,4.84-8.153,8.086-14.194,8.086c-9.099,0-16.496-7.395-16.496-16.498C445.038,37.846,452.436,30.451,461.534,30.451  L461.534,30.451z")
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
    drawLineArt5CorpLine();
}, 15500);
