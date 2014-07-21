/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 function  drawLineArt28CorpLine()
{          
  var svg = d3.select("#LineArtConcepts_seperate");

      svg.append("path")
            .style("stroke", "#fff")
            .style("fill", "none")
            .style("stroke-width", "1.8px")
            .attr("d", "M172.518,133.293h22.719  c0.5,0,0.92,0.416,0.92,0.922v4.129c0,0.504-0.42,0.914-0.92,0.914h-22.719c-0.504,0-0.92-0.41-0.92-0.914v-4.129  C171.598,133.709,172.014,133.293,172.518,133.293L172.518,133.293z")
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
    drawLineArt28CorpLine();
}, 8000);

