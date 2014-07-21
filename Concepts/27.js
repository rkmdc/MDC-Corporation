/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
  function  drawLineArt27CorpLine()
{          
  var svg = d3.select("#LineArtConcepts_seperate");

      svg.append("path")
            .style("stroke", "#fff")
            .style("fill", "none")
            .style("stroke-width", "1.5px")
            .attr("d", 
"M659.27,128.976  c9.111,0,16.646-8.235,16.646-18.399c0-10.163-7.535-18.399-16.559-18.399c-9.113,0-16.561,8.323-16.561,18.575  C642.797,120.915,650.158,128.976,659.27,128.976z")
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
    drawLineArt27CorpLine();
}, 19000);




"M659.27,128.976  c9.111,0,16.646-8.235,16.646-18.399c0-10.163-7.535-18.399-16.559-18.399c-9.113,0-16.561,8.323-16.561,18.575  C642.797,120.915,650.158,128.976,659.27,128.976z"