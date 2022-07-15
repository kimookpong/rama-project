var width = 88,
    height = 88,
    timePassed = 0,
    timeLimit = 3;
var fields = [{
  value: timeLimit,
  size: timeLimit,
  update: function() {
    return timePassed = timePassed + 1;
  }
}];

var nilArc = d3.svg.arc()
  .innerRadius(width / 2 - 5)
  .outerRadius(width / 2 - 5)
  .startAngle(0)
  .endAngle(2 * Math.PI);

var arc= d3.svg.arc()
  .innerRadius(width / 2 - 15)
  .outerRadius(width / 2 - 10)
  .startAngle(0)
  .endAngle(function(d) {
    return ((d.value / d.size) * 2 * Math.PI);
});

var svg = d3.select(".countdowntime").append("svg")
  .attr('width', width)
  .attr('height', height);

var field = svg.selectAll('.field')
  .data(fields)
  .enter().append('g')
  .attr("transform", "translate(" + width / 2 + "," + height / 2 + ")")
  .attr('class', "field");

var back = field.append("path")
  .attr("class", "path path--background")
  .attr("d", arc);

var path = field.append("path")
  .attr("class", "path path--foreground");

var label = field.append("text")
  .attr("class", "label")
  .attr("dy", ".35em");

(function update() {
  
  field
    .each(function(d) {
    d.previous = d.value, d.value = d.update(timePassed);
  });
  
  path.transition()
    .ease("elastic")
    .duration(500)
    .attrTween("d", arcTween);
  
  if ((timeLimit - timePassed) <= 10)
    pulseText();
  else
     label
     .text(function(d) {
       return d.size - d.value;
     });
  if (timePassed <= timeLimit)
    setTimeout(update, 1000 - (timePassed % 1000));
  else
    destroyTimer();
})();

function pulseText() {
  back.classed("pulse", true);
  label.classed("pulse", true);
  
  if ((timeLimit - timePassed) >= 0) {
    label.style("font-size", "32px")
      .attr("transform", "translate(0,"+ +4 +")")
      .text(function(d) {
      return d.size - d.value;
    });
  }
  
  label.transition()
    .ease("elastic")
    .duration(900)
    .style("font-size", "28px")
    .attr("transform", "translate(0," + -5 +")");
}

function destroyTimer() {
  label.transition()
    .ease("back")
    .duration(700)
    .style("opacity", "0")
    .style("font-size", "24px")
    .attr("transform", "translate(0," + -5 +")")
    .each("end", function() {
      field.selectAll("text").remove()
  });
  
  path.transition()
    .ease("back")
    .duration(700)
    .attr("d", nilArc);
  
  back.transition()
    .ease("back")
    .duration(700)
    .attr("d", nilArc)
    .each("end", function() {
      field.selectAll("path").remove()
  });
}

function arcTween(b) {
  var i = d3.interpolate({
    value: b.previous
  }, b);
  return function(t) {
    return arc(i(t));
  };
}
