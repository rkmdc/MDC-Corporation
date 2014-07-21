           
      function  drawLineArtcircle2CorpLine()
{          
  var svg = d3.select("#LineArtBoxSVG2");

      svg.append("path")
            .style("stroke", "#fff")
            .style("fill", "none")
            .style("stroke-width", "1.5px")
            .attr("d", "M421.366,61.815  c-1.632-0.705-3.3-0.582-4.995,0.357c-1.69,0.945-3.349,3.311-4.975,7.09c-1.482,3.428-1.973,6.078-1.495,7.961  c0.493,1.873,1.554,3.158,3.158,3.842c1.646,0.713,3.327,0.588,5.02-0.352c1.695-0.93,3.36-3.279,4.974-7.033  c1.484-3.457,1.985-6.131,1.488-7.996C424.053,63.805,422.984,62.516,421.366,61.815z")
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
    drawLineArtcircle2CorpLine();
}, 14000);

