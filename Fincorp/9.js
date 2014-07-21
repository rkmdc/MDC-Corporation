 function  drawLineArtcircle7CorpLine()
{          
  var svg = d3.select("#LineArtBoxSVG2");

      svg.append("path")
            .style("stroke", "#fff")
            .style("fill", "none")
            .style("stroke-width", "1.5px")
            .attr("d", "M738.068,79.282  c9.113,0,16.648-8.236,16.648-18.4c0-10.163-7.535-18.399-16.561-18.399c-9.111,0-16.559,8.324-16.559,18.575  C721.598,71.221,728.957,79.282,738.068,79.282z")
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
    drawLineArtcircle7CorpLine();
}, 24500);
