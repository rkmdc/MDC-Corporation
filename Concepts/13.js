        
      function  drawLineArt13CorpLine()
{          
  var svg = d3.select("#LineArtConcepts_seperate");

      svg.append("path")
            .style("stroke", "#fff")
            .style("fill", "none")
            .style("stroke-width", "1.8px")
            .attr("d", "M292.168,110.338h7.691  c3.846,0,7.15,3.17,7.539,7.002c0.568,5.607,1.604,9.775-6.277,9.775c-3.85,0-7.001,3.146-7.001,6.998v17.896h-5.829  c-1.715,0-3.115-1.402-3.115-3.115v-30.957C285.176,114.086,288.324,110.338,292.168,110.338L292.168,110.338z")
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
    drawLineArt13CorpLine();
}, 9000);
