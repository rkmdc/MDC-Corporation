/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

     
      function  drawLineArt23CorpLine()
{          
  var svg = d3.select("#LineArtConcepts_seperate");

      svg.append("path")
            .style("stroke", "#fff")
            .style("fill", "none")
            .style("stroke-width", "1.8px")
            .attr("d", "M210.902,80.381  c1.454-0.672,13.885-6.422,13.885-6.422")
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
    drawLineArt23CorpLine();
}, 6000);


