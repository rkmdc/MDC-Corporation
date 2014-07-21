            
      function  drawLineArtsquareCorpLine()
{          
  var svg = d3.select("#LineArtConcepts_seperate");

      svg.append("path")
            .style("stroke", "#fff")
            .style("fill", "none")
            .style("stroke-width", "1.5px")
            .attr("d", "M880.047,110.576  c0-9.813-7.447-18.399-16.998-18.399c-5.957,0-14.018,5.169-14.982,11.303v14.019c2.717,6.483,8.938,11.478,15.771,11.478  C873.65,128.976,880.047,119.863,880.047,110.576z")
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
    drawLineArtsquareCorpLine();
}, 24500);


