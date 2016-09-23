/********* Javascript Generated with phpChart **********/ 
var _chart1_plot_properties;
$(document).ready(function(){ 
_chart1_plot_properties = {
  "axes":{
    "xaxis":{
      "ticks":[
        "a","b","c","d"
      ],"renderer":$.jqplot.CategoryAxisRenderer,"properties":"xaxis"
    }
  },"animate":true,"animateReplot":true,"seriesDefaults":{
    "renderer":$.jqplot.BarRenderer,"pointLabels":{
      "show":true
    }
  },"highlighter":{
    "show":false
  }
}



$.jqplot.config.enablePlugins = true;
$.jqplot.config.defaultHeight = 300;
$.jqplot.config.defaultWidth  = 400;
 _chart1= $.jqplot("chart1", [[2,6,7,10]], _chart1_plot_properties);


});