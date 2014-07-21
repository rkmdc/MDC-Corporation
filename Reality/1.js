/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

 function  drawLineArt10CorpLine()
{          
  var svg = d3.select("#LineArtReality_seperate");

      svg.append("path")
            .style("stroke", "#fff")
            .style("fill", "none")
            .style("stroke-width", "1.8px")
            .attr("d", "M547.543,116.473h20.416  c7.359,0,12.09-6.922,12.09-14.281c0-7.535-5.783-14.106-12.617-14.106h-19.889V116.473z")
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
    drawLineArt10CorpLine();
}, 9000);

