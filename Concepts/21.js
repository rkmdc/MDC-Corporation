/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
        
      function  drawLineArt21CorpLine()
{          
  var svg = d3.select("#LineArtConcepts_seperate");

      svg.append("path")
            .style("stroke", "#fff")
            .style("fill", "none")
            .style("stroke-width", "1.8px")
            .attr("d", "M55.925,115.105h30.671  c2.65,0,4.828,2.172,4.828,4.816v11.545c0,2.654-2.178,4.826-4.828,4.826h-3.393c-6.289,0.496-10.17,4.107-11.127,11.465  c-3.27-4.57-8.399-3.982-16.151-2.863c-2.622,0.379-4.822-2.168-4.822-4.822v-20.15C51.103,117.277,53.27,115.105,55.925,115.105  L55.925,115.105z")
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
    drawLineArt21CorpLine();
}, 500);


