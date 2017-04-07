<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!-- Styles -->
<style>
#pump_1_set_temp {
  width: 100%;
  height: 400px;
}
#pump_1_inlet_temp {
  width: 100%;
  height: 400px;
}
#pump_2_set_temp {
  width: 100%;
  height: 400px;
}
#pump_2_inlet_temp {
  width: 100%;
  height: 400px;
}
#pump_3_set_temp {
  width: 100%;
  height: 400px;
}
#pump_3_inlet_temp {
  width: 100%;
  height: 400px;
}
#pump_4_set_temp {
  width: 100%;
  height: 400px;
}
#pump_4_inlet_temp {
  width: 100%;
  height: 400px;
}
#pump_5_set_temp {
  width: 100%;
  height: 400px;
}
#pump_5_inlet_temp {
  width: 100%;
  height: 400px;
}
#pump_6_set_temp {
  width: 100%;
  height: 400px;
}
#pump_6_inlet_temp {
  width: 100%;
  height: 400px;
}
#pump_7_set_temp {
  width: 100%;
  height: 400px;
}
#pump_7_inlet_temp {
  width: 100%;
  height: 400px;
}
#pump_8_set_temp {
  width: 100%;
  height: 400px;
}
#pump_8_inlet_temp {
  width: 100%;
  height: 400px;
}
#pump_9_set_temp {
  width: 100%;
  height: 400px;
}
#pump_9_inlet_temp {
  width: 100%;
  height: 400px;
}
#pump_10_set_temp {
  width: 100%;
  height: 400px;
}
#pump_10_inlet_temp {
  width: 100%;
  height: 400px;
}
#pump_11_set_temp {
  width: 100%;
  height: 400px;
}
#pump_11_inlet_temp {
  width: 100%;
  height: 400px;
}
#pump_12_set_temp {
  width: 100%;
  height: 400px;
}
#pump_12_inlet_temp {
  width: 100%;
  height: 400px;
}
</style>

<!-- Resources -->
<script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
<script src="https://www.amcharts.com/lib/3/gauge.js"></script>
<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
<script src="https://www.amcharts.com/lib/3/themes/light.js"></script>

<!-- Chart code -->
<script>
var pump_1_set_temp = AmCharts.makeChart("pump_1_set_temp", {
  "theme": "light",
  "type": "gauge",
  "axes": [{
    "topTextFontSize": 20,
    "topTextYOffset": 70,
    "axisColor": "#cc3300",
    "axisThickness": 1,
    "endValue": 50,
    "gridInside": true,
    "inside": true,
    "radius": "50%",
    "valueInterval": 10,
    "tickColor": "#67b7dc",
    "startAngle": -90,
    "endAngle": 90,
    "unit": "",
    "bandOutlineAlpha": 0,
    "bands": [{
      "color": "#ff0000",
      "endValue": 50,
      "innerRadius": "105%",
      "radius": "170%",
      "gradientRatio": [0.5, 0, -0.5],
      "startValue": 0
    }, {
      "color": "#0000ff",
      "endValue": 0,
      "innerRadius": "105%",
      "radius": "170%",
      "gradientRatio": [0.5, 0, -0.5],
      "startValue": 0
    }]
  }],
  "arrows": [{
    "alpha": 1,
    "innerRadius": "35%",
    "nailRadius": 0,
    "radius": "170%"
  }]
});

var pump_1_inlet_temp = AmCharts.makeChart("pump_1_inlet_temp", {
  "theme": "light",
  "type": "gauge",
  "axes": [{
    "topTextFontSize": 20,
    "topTextYOffset": 70,
    "axisColor": "#cc3300",
    "axisThickness": 1,
    "endValue": 50,
    "gridInside": true,
    "inside": true,
    "radius": "50%",
    "valueInterval": 10,
    "tickColor": "#67b7dc",
    "startAngle": -90,
    "endAngle": 90,
    "unit": "",
    "bandOutlineAlpha": 0,
    "bands": [{
      "color": "#ff0000",
      "endValue": 50,
      "innerRadius": "105%",
      "radius": "170%",
      "gradientRatio": [0.5, 0, -0.5],
      "startValue": 0
    }, {
      "color": "#0000ff",
      "endValue": 0,
      "innerRadius": "105%",
      "radius": "170%",
      "gradientRatio": [0.5, 0, -0.5],
      "startValue": 0
    }]
  }],
  "arrows": [{
    "alpha": 1,
    "innerRadius": "35%",
    "nailRadius": 0,
    "radius": "170%"
  }]
});

var pump_2_set_temp = AmCharts.makeChart("pump_2_set_temp", {
  "theme": "light",
  "type": "gauge",
  "axes": [{
    "topTextFontSize": 20,
    "topTextYOffset": 70,
    "axisColor": "#cc3300",
    "axisThickness": 1,
    "endValue": 50,
    "gridInside": true,
    "inside": true,
    "radius": "50%",
    "valueInterval": 10,
    "tickColor": "#67b7dc",
    "startAngle": -90,
    "endAngle": 90,
    "unit": "",
    "bandOutlineAlpha": 0,
    "bands": [{
      "color": "#ff0000",
      "endValue": 50,
      "innerRadius": "105%",
      "radius": "170%",
      "gradientRatio": [0.5, 0, -0.5],
      "startValue": 0
    }, {
      "color": "#0000ff",
      "endValue": 0,
      "innerRadius": "105%",
      "radius": "170%",
      "gradientRatio": [0.5, 0, -0.5],
      "startValue": 0
    }]
  }],
  "arrows": [{
    "alpha": 1,
    "innerRadius": "35%",
    "nailRadius": 0,
    "radius": "170%"
  }]
});

var pump_2_inlet_temp = AmCharts.makeChart("pump_2_inlet_temp", {
  "theme": "light",
  "type": "gauge",
  "axes": [{
    "topTextFontSize": 20,
    "topTextYOffset": 70,
    "axisColor": "#cc3300",
    "axisThickness": 1,
    "endValue": 50,
    "gridInside": true,
    "inside": true,
    "radius": "50%",
    "valueInterval": 10,
    "tickColor": "#67b7dc",
    "startAngle": -90,
    "endAngle": 90,
    "unit": "",
    "bandOutlineAlpha": 0,
    "bands": [{
      "color": "#ff0000",
      "endValue": 50,
      "innerRadius": "105%",
      "radius": "170%",
      "gradientRatio": [0.5, 0, -0.5],
      "startValue": 0
    }, {
      "color": "#0000ff",
      "endValue": 0,
      "innerRadius": "105%",
      "radius": "170%",
      "gradientRatio": [0.5, 0, -0.5],
      "startValue": 0
    }]
  }],
  "arrows": [{
    "alpha": 1,
    "innerRadius": "35%",
    "nailRadius": 0,
    "radius": "170%"
  }]
});

var pump_3_set_temp = AmCharts.makeChart("pump_3_set_temp", {
  "theme": "light",
  "type": "gauge",
  "axes": [{
    "topTextFontSize": 20,
    "topTextYOffset": 70,
    "axisColor": "#cc3300",
    "axisThickness": 1,
    "endValue": 50,
    "gridInside": true,
    "inside": true,
    "radius": "50%",
    "valueInterval": 10,
    "tickColor": "#67b7dc",
    "startAngle": -90,
    "endAngle": 90,
    "unit": "",
    "bandOutlineAlpha": 0,
    "bands": [{
      "color": "#ff0000",
      "endValue": 50,
      "innerRadius": "105%",
      "radius": "170%",
      "gradientRatio": [0.5, 0, -0.5],
      "startValue": 0
    }, {
      "color": "#0000ff",
      "endValue": 0,
      "innerRadius": "105%",
      "radius": "170%",
      "gradientRatio": [0.5, 0, -0.5],
      "startValue": 0
    }]
  }],
  "arrows": [{
    "alpha": 1,
    "innerRadius": "35%",
    "nailRadius": 0,
    "radius": "170%"
  }]
});

var pump_3_inlet_temp = AmCharts.makeChart("pump_3_inlet_temp", {
  "theme": "light",
  "type": "gauge",
  "axes": [{
    "topTextFontSize": 20,
    "topTextYOffset": 70,
    "axisColor": "#cc3300",
    "axisThickness": 1,
    "endValue": 50,
    "gridInside": true,
    "inside": true,
    "radius": "50%",
    "valueInterval": 10,
    "tickColor": "#67b7dc",
    "startAngle": -90,
    "endAngle": 90,
    "unit": "",
    "bandOutlineAlpha": 0,
    "bands": [{
      "color": "#ff0000",
      "endValue": 50,
      "innerRadius": "105%",
      "radius": "170%",
      "gradientRatio": [0.5, 0, -0.5],
      "startValue": 0
    }, {
      "color": "#0000ff",
      "endValue": 0,
      "innerRadius": "105%",
      "radius": "170%",
      "gradientRatio": [0.5, 0, -0.5],
      "startValue": 0
    }]
  }],
  "arrows": [{
    "alpha": 1,
    "innerRadius": "35%",
    "nailRadius": 0,
    "radius": "170%"
  }]
});

var pump_4_set_temp = AmCharts.makeChart("pump_4_set_temp", {
  "theme": "light",
  "type": "gauge",
  "axes": [{
    "topTextFontSize": 20,
    "topTextYOffset": 70,
    "axisColor": "#cc3300",
    "axisThickness": 1,
    "endValue": 50,
    "gridInside": true,
    "inside": true,
    "radius": "50%",
    "valueInterval": 10,
    "tickColor": "#67b7dc",
    "startAngle": -90,
    "endAngle": 90,
    "unit": "",
    "bandOutlineAlpha": 0,
    "bands": [{
      "color": "#ff0000",
      "endValue": 50,
      "innerRadius": "105%",
      "radius": "170%",
      "gradientRatio": [0.5, 0, -0.5],
      "startValue": 0
    }, {
      "color": "#0000ff",
      "endValue": 0,
      "innerRadius": "105%",
      "radius": "170%",
      "gradientRatio": [0.5, 0, -0.5],
      "startValue": 0
    }]
  }],
  "arrows": [{
    "alpha": 1,
    "innerRadius": "35%",
    "nailRadius": 0,
    "radius": "170%"
  }]
});

var pump_4_inlet_temp = AmCharts.makeChart("pump_4_inlet_temp", {
  "theme": "light",
  "type": "gauge",
  "axes": [{
    "topTextFontSize": 20,
    "topTextYOffset": 70,
    "axisColor": "#cc3300",
    "axisThickness": 1,
    "endValue": 50,
    "gridInside": true,
    "inside": true,
    "radius": "50%",
    "valueInterval": 10,
    "tickColor": "#67b7dc",
    "startAngle": -90,
    "endAngle": 90,
    "unit": "",
    "bandOutlineAlpha": 0,
    "bands": [{
      "color": "#ff0000",
      "endValue": 50,
      "innerRadius": "105%",
      "radius": "170%",
      "gradientRatio": [0.5, 0, -0.5],
      "startValue": 0
    }, {
      "color": "#0000ff",
      "endValue": 0,
      "innerRadius": "105%",
      "radius": "170%",
      "gradientRatio": [0.5, 0, -0.5],
      "startValue": 0
    }]
  }],
  "arrows": [{
    "alpha": 1,
    "innerRadius": "35%",
    "nailRadius": 0,
    "radius": "170%"
  }]
});

var pump_5_set_temp = AmCharts.makeChart("pump_5_set_temp", {
  "theme": "light",
  "type": "gauge",
  "axes": [{
    "topTextFontSize": 20,
    "topTextYOffset": 70,
    "axisColor": "#cc3300",
    "axisThickness": 1,
    "endValue": 50,
    "gridInside": true,
    "inside": true,
    "radius": "50%",
    "valueInterval": 10,
    "tickColor": "#67b7dc",
    "startAngle": -90,
    "endAngle": 90,
    "unit": "",
    "bandOutlineAlpha": 0,
    "bands": [{
      "color": "#ff0000",
      "endValue": 50,
      "innerRadius": "105%",
      "radius": "170%",
      "gradientRatio": [0.5, 0, -0.5],
      "startValue": 0
    }, {
      "color": "#0000ff",
      "endValue": 0,
      "innerRadius": "105%",
      "radius": "170%",
      "gradientRatio": [0.5, 0, -0.5],
      "startValue": 0
    }]
  }],
  "arrows": [{
    "alpha": 1,
    "innerRadius": "35%",
    "nailRadius": 0,
    "radius": "170%"
  }]
});

var pump_5_inlet_temp = AmCharts.makeChart("pump_5_inlet_temp", {
  "theme": "light",
  "type": "gauge",
  "axes": [{
    "topTextFontSize": 20,
    "topTextYOffset": 70,
    "axisColor": "#cc3300",
    "axisThickness": 1,
    "endValue": 50,
    "gridInside": true,
    "inside": true,
    "radius": "50%",
    "valueInterval": 10,
    "tickColor": "#67b7dc",
    "startAngle": -90,
    "endAngle": 90,
    "unit": "",
    "bandOutlineAlpha": 0,
    "bands": [{
      "color": "#ff0000",
      "endValue": 50,
      "innerRadius": "105%",
      "radius": "170%",
      "gradientRatio": [0.5, 0, -0.5],
      "startValue": 0
    }, {
      "color": "#0000ff",
      "endValue": 0,
      "innerRadius": "105%",
      "radius": "170%",
      "gradientRatio": [0.5, 0, -0.5],
      "startValue": 0
    }]
  }],
  "arrows": [{
    "alpha": 1,
    "innerRadius": "35%",
    "nailRadius": 0,
    "radius": "170%"
  }]
});

var pump_6_set_temp = AmCharts.makeChart("pump_6_set_temp", {
  "theme": "light",
  "type": "gauge",
  "axes": [{
    "topTextFontSize": 20,
    "topTextYOffset": 70,
    "axisColor": "#cc3300",
    "axisThickness": 1,
    "endValue": 50,
    "gridInside": true,
    "inside": true,
    "radius": "50%",
    "valueInterval": 10,
    "tickColor": "#67b7dc",
    "startAngle": -90,
    "endAngle": 90,
    "unit": "",
    "bandOutlineAlpha": 0,
    "bands": [{
      "color": "#ff0000",
      "endValue": 50,
      "innerRadius": "105%",
      "radius": "170%",
      "gradientRatio": [0.5, 0, -0.5],
      "startValue": 0
    }, {
      "color": "#0000ff",
      "endValue": 0,
      "innerRadius": "105%",
      "radius": "170%",
      "gradientRatio": [0.5, 0, -0.5],
      "startValue": 0
    }]
  }],
  "arrows": [{
    "alpha": 1,
    "innerRadius": "35%",
    "nailRadius": 0,
    "radius": "170%"
  }]
});

var pump_6_inlet_temp = AmCharts.makeChart("pump_6_inlet_temp", {
  "theme": "light",
  "type": "gauge",
  "axes": [{
    "topTextFontSize": 20,
    "topTextYOffset": 70,
    "axisColor": "#cc3300",
    "axisThickness": 1,
    "endValue": 50,
    "gridInside": true,
    "inside": true,
    "radius": "50%",
    "valueInterval": 10,
    "tickColor": "#67b7dc",
    "startAngle": -90,
    "endAngle": 90,
    "unit": "",
    "bandOutlineAlpha": 0,
    "bands": [{
      "color": "#ff0000",
      "endValue": 50,
      "innerRadius": "105%",
      "radius": "170%",
      "gradientRatio": [0.5, 0, -0.5],
      "startValue": 0
    }, {
      "color": "#0000ff",
      "endValue": 0,
      "innerRadius": "105%",
      "radius": "170%",
      "gradientRatio": [0.5, 0, -0.5],
      "startValue": 0
    }]
  }],
  "arrows": [{
    "alpha": 1,
    "innerRadius": "35%",
    "nailRadius": 0,
    "radius": "170%"
  }]
});

var pump_7_set_temp = AmCharts.makeChart("pump_7_set_temp", {
  "theme": "light",
  "type": "gauge",
  "axes": [{
    "topTextFontSize": 20,
    "topTextYOffset": 70,
    "axisColor": "#cc3300",
    "axisThickness": 1,
    "endValue": 50,
    "gridInside": true,
    "inside": true,
    "radius": "50%",
    "valueInterval": 10,
    "tickColor": "#67b7dc",
    "startAngle": -90,
    "endAngle": 90,
    "unit": "",
    "bandOutlineAlpha": 0,
    "bands": [{
      "color": "#ff0000",
      "endValue": 50,
      "innerRadius": "105%",
      "radius": "170%",
      "gradientRatio": [0.5, 0, -0.5],
      "startValue": 0
    }, {
      "color": "#0000ff",
      "endValue": 0,
      "innerRadius": "105%",
      "radius": "170%",
      "gradientRatio": [0.5, 0, -0.5],
      "startValue": 0
    }]
  }],
  "arrows": [{
    "alpha": 1,
    "innerRadius": "35%",
    "nailRadius": 0,
    "radius": "170%"
  }]
});

var pump_7_inlet_temp = AmCharts.makeChart("pump_7_inlet_temp", {
  "theme": "light",
  "type": "gauge",
  "axes": [{
    "topTextFontSize": 20,
    "topTextYOffset": 70,
    "axisColor": "#cc3300",
    "axisThickness": 1,
    "endValue": 50,
    "gridInside": true,
    "inside": true,
    "radius": "50%",
    "valueInterval": 10,
    "tickColor": "#67b7dc",
    "startAngle": -90,
    "endAngle": 90,
    "unit": "",
    "bandOutlineAlpha": 0,
    "bands": [{
      "color": "#ff0000",
      "endValue": 50,
      "innerRadius": "105%",
      "radius": "170%",
      "gradientRatio": [0.5, 0, -0.5],
      "startValue": 0
    }, {
      "color": "#0000ff",
      "endValue": 0,
      "innerRadius": "105%",
      "radius": "170%",
      "gradientRatio": [0.5, 0, -0.5],
      "startValue": 0
    }]
  }],
  "arrows": [{
    "alpha": 1,
    "innerRadius": "35%",
    "nailRadius": 0,
    "radius": "170%"
  }]
});

var pump_8_set_temp = AmCharts.makeChart("pump_8_set_temp", {
  "theme": "light",
  "type": "gauge",
  "axes": [{
    "topTextFontSize": 20,
    "topTextYOffset": 70,
    "axisColor": "#cc3300",
    "axisThickness": 1,
    "endValue": 50,
    "gridInside": true,
    "inside": true,
    "radius": "50%",
    "valueInterval": 10,
    "tickColor": "#67b7dc",
    "startAngle": -90,
    "endAngle": 90,
    "unit": "",
    "bandOutlineAlpha": 0,
    "bands": [{
      "color": "#ff0000",
      "endValue": 50,
      "innerRadius": "105%",
      "radius": "170%",
      "gradientRatio": [0.5, 0, -0.5],
      "startValue": 0
    }, {
      "color": "#0000ff",
      "endValue": 0,
      "innerRadius": "105%",
      "radius": "170%",
      "gradientRatio": [0.5, 0, -0.5],
      "startValue": 0
    }]
  }],
  "arrows": [{
    "alpha": 1,
    "innerRadius": "35%",
    "nailRadius": 0,
    "radius": "170%"
  }]
});

var pump_8_inlet_temp = AmCharts.makeChart("pump_8_inlet_temp", {
  "theme": "light",
  "type": "gauge",
  "axes": [{
    "topTextFontSize": 20,
    "topTextYOffset": 70,
    "axisColor": "#cc3300",
    "axisThickness": 1,
    "endValue": 50,
    "gridInside": true,
    "inside": true,
    "radius": "50%",
    "valueInterval": 10,
    "tickColor": "#67b7dc",
    "startAngle": -90,
    "endAngle": 90,
    "unit": "",
    "bandOutlineAlpha": 0,
    "bands": [{
      "color": "#ff0000",
      "endValue": 50,
      "innerRadius": "105%",
      "radius": "170%",
      "gradientRatio": [0.5, 0, -0.5],
      "startValue": 0
    }, {
      "color": "#0000ff",
      "endValue": 0,
      "innerRadius": "105%",
      "radius": "170%",
      "gradientRatio": [0.5, 0, -0.5],
      "startValue": 0
    }]
  }],
  "arrows": [{
    "alpha": 1,
    "innerRadius": "35%",
    "nailRadius": 0,
    "radius": "170%"
  }]
});

var pump_9_set_temp = AmCharts.makeChart("pump_9_set_temp", {
  "theme": "light",
  "type": "gauge",
  "axes": [{
    "topTextFontSize": 20,
    "topTextYOffset": 70,
    "axisColor": "#cc3300",
    "axisThickness": 1,
    "endValue": 50,
    "gridInside": true,
    "inside": true,
    "radius": "50%",
    "valueInterval": 10,
    "tickColor": "#67b7dc",
    "startAngle": -90,
    "endAngle": 90,
    "unit": "",
    "bandOutlineAlpha": 0,
    "bands": [{
      "color": "#ff0000",
      "endValue": 50,
      "innerRadius": "105%",
      "radius": "170%",
      "gradientRatio": [0.5, 0, -0.5],
      "startValue": 0
    }, {
      "color": "#0000ff",
      "endValue": 0,
      "innerRadius": "105%",
      "radius": "170%",
      "gradientRatio": [0.5, 0, -0.5],
      "startValue": 0
    }]
  }],
  "arrows": [{
    "alpha": 1,
    "innerRadius": "35%",
    "nailRadius": 0,
    "radius": "170%"
  }]
});

var pump_9_inlet_temp = AmCharts.makeChart("pump_9_inlet_temp", {
  "theme": "light",
  "type": "gauge",
  "axes": [{
    "topTextFontSize": 20,
    "topTextYOffset": 70,
    "axisColor": "#cc3300",
    "axisThickness": 1,
    "endValue": 50,
    "gridInside": true,
    "inside": true,
    "radius": "50%",
    "valueInterval": 10,
    "tickColor": "#67b7dc",
    "startAngle": -90,
    "endAngle": 90,
    "unit": "",
    "bandOutlineAlpha": 0,
    "bands": [{
      "color": "#ff0000",
      "endValue": 50,
      "innerRadius": "105%",
      "radius": "170%",
      "gradientRatio": [0.5, 0, -0.5],
      "startValue": 0
    }, {
      "color": "#0000ff",
      "endValue": 0,
      "innerRadius": "105%",
      "radius": "170%",
      "gradientRatio": [0.5, 0, -0.5],
      "startValue": 0
    }]
  }],
  "arrows": [{
    "alpha": 1,
    "innerRadius": "35%",
    "nailRadius": 0,
    "radius": "170%"
  }]
});

var pump_10_set_temp = AmCharts.makeChart("pump_10_set_temp", {
  "theme": "light",
  "type": "gauge",
  "axes": [{
    "topTextFontSize": 20,
    "topTextYOffset": 70,
    "axisColor": "#cc3300",
    "axisThickness": 1,
    "endValue": 50,
    "gridInside": true,
    "inside": true,
    "radius": "50%",
    "valueInterval": 10,
    "tickColor": "#67b7dc",
    "startAngle": -90,
    "endAngle": 90,
    "unit": "",
    "bandOutlineAlpha": 0,
    "bands": [{
      "color": "#ff0000",
      "endValue": 50,
      "innerRadius": "105%",
      "radius": "170%",
      "gradientRatio": [0.5, 0, -0.5],
      "startValue": 0
    }, {
      "color": "#0000ff",
      "endValue": 0,
      "innerRadius": "105%",
      "radius": "170%",
      "gradientRatio": [0.5, 0, -0.5],
      "startValue": 0
    }]
  }],
  "arrows": [{
    "alpha": 1,
    "innerRadius": "35%",
    "nailRadius": 0,
    "radius": "170%"
  }]
});

var pump_10_inlet_temp = AmCharts.makeChart("pump_10_inlet_temp", {
  "theme": "light",
  "type": "gauge",
  "axes": [{
    "topTextFontSize": 20,
    "topTextYOffset": 70,
    "axisColor": "#cc3300",
    "axisThickness": 1,
    "endValue": 50,
    "gridInside": true,
    "inside": true,
    "radius": "50%",
    "valueInterval": 10,
    "tickColor": "#67b7dc",
    "startAngle": -90,
    "endAngle": 90,
    "unit": "",
    "bandOutlineAlpha": 0,
    "bands": [{
      "color": "#ff0000",
      "endValue": 50,
      "innerRadius": "105%",
      "radius": "170%",
      "gradientRatio": [0.5, 0, -0.5],
      "startValue": 0
    }, {
      "color": "#0000ff",
      "endValue": 0,
      "innerRadius": "105%",
      "radius": "170%",
      "gradientRatio": [0.5, 0, -0.5],
      "startValue": 0
    }]
  }],
  "arrows": [{
    "alpha": 1,
    "innerRadius": "35%",
    "nailRadius": 0,
    "radius": "170%"
  }]
});

var pump_11_set_temp = AmCharts.makeChart("pump_11_set_temp", {
  "theme": "light",
  "type": "gauge",
  "axes": [{
    "topTextFontSize": 20,
    "topTextYOffset": 70,
    "axisColor": "#cc3300",
    "axisThickness": 1,
    "endValue": 50,
    "gridInside": true,
    "inside": true,
    "radius": "50%",
    "valueInterval": 10,
    "tickColor": "#67b7dc",
    "startAngle": -90,
    "endAngle": 90,
    "unit": "",
    "bandOutlineAlpha": 0,
    "bands": [{
      "color": "#ff0000",
      "endValue": 50,
      "innerRadius": "105%",
      "radius": "170%",
      "gradientRatio": [0.5, 0, -0.5],
      "startValue": 0
    }, {
      "color": "#0000ff",
      "endValue": 0,
      "innerRadius": "105%",
      "radius": "170%",
      "gradientRatio": [0.5, 0, -0.5],
      "startValue": 0
    }]
  }],
  "arrows": [{
    "alpha": 1,
    "innerRadius": "35%",
    "nailRadius": 0,
    "radius": "170%"
  }]
});

var pump_11_inlet_temp = AmCharts.makeChart("pump_11_inlet_temp", {
  "theme": "light",
  "type": "gauge",
  "axes": [{
    "topTextFontSize": 20,
    "topTextYOffset": 70,
    "axisColor": "#cc3300",
    "axisThickness": 1,
    "endValue": 50,
    "gridInside": true,
    "inside": true,
    "radius": "50%",
    "valueInterval": 10,
    "tickColor": "#67b7dc",
    "startAngle": -90,
    "endAngle": 90,
    "unit": "",
    "bandOutlineAlpha": 0,
    "bands": [{
      "color": "#ff0000",
      "endValue": 50,
      "innerRadius": "105%",
      "radius": "170%",
      "gradientRatio": [0.5, 0, -0.5],
      "startValue": 0
    }, {
      "color": "#0000ff",
      "endValue": 0,
      "innerRadius": "105%",
      "radius": "170%",
      "gradientRatio": [0.5, 0, -0.5],
      "startValue": 0
    }]
  }],
  "arrows": [{
    "alpha": 1,
    "innerRadius": "35%",
    "nailRadius": 0,
    "radius": "170%"
  }]
});

var pump_12_set_temp = AmCharts.makeChart("pump_12_set_temp", {
  "theme": "light",
  "type": "gauge",
  "axes": [{
    "topTextFontSize": 20,
    "topTextYOffset": 70,
    "axisColor": "#cc3300",
    "axisThickness": 1,
    "endValue": 50,
    "gridInside": true,
    "inside": true,
    "radius": "50%",
    "valueInterval": 10,
    "tickColor": "#67b7dc",
    "startAngle": -90,
    "endAngle": 90,
    "unit": "",
    "bandOutlineAlpha": 0,
    "bands": [{
      "color": "#ff0000",
      "endValue": 50,
      "innerRadius": "105%",
      "radius": "170%",
      "gradientRatio": [0.5, 0, -0.5],
      "startValue": 0
    }, {
      "color": "#0000ff",
      "endValue": 0,
      "innerRadius": "105%",
      "radius": "170%",
      "gradientRatio": [0.5, 0, -0.5],
      "startValue": 0
    }]
  }],
  "arrows": [{
    "alpha": 1,
    "innerRadius": "35%",
    "nailRadius": 0,
    "radius": "170%"
  }]
});

var pump_12_inlet_temp = AmCharts.makeChart("pump_12_inlet_temp", {
  "theme": "light",
  "type": "gauge",
  "axes": [{
    "topTextFontSize": 20,
    "topTextYOffset": 70,
    "axisColor": "#cc3300",
    "axisThickness": 1,
    "endValue": 50,
    "gridInside": true,
    "inside": true,
    "radius": "50%",
    "valueInterval": 10,
    "tickColor": "#67b7dc",
    "startAngle": -90,
    "endAngle": 90,
    "unit": "",
    "bandOutlineAlpha": 0,
    "bands": [{
      "color": "#ff0000",
      "endValue": 50,
      "innerRadius": "105%",
      "radius": "170%",
      "gradientRatio": [0.5, 0, -0.5],
      "startValue": 0
    }, {
      "color": "#0000ff",
      "endValue": 0,
      "innerRadius": "105%",
      "radius": "170%",
      "gradientRatio": [0.5, 0, -0.5],
      "startValue": 0
    }]
  }],
  "arrows": [{
    "alpha": 1,
    "innerRadius": "35%",
    "nailRadius": 0,
    "radius": "170%"
  }]
});
</script>

<div class="main-content" >
    <div class="wrap-content container" id="container">
        <!-- start: BREADCRUMB -->
        <div class="breadcrumb-wrapper">
            <h4 class="mainTitle no-margin">Heat Pump Status</h4>
            <ul class="pull-right breadcrumb">
                <li>
                    <a href="index.html"><i class="fa fa-home margin-right-5 text-large text-dark"></i>Home</a>
                </li>
                <li>
                    Heat Pumps
                </li>
                <li>
                    Status
                </li>
            </ul>
        </div>
        <!-- end: BREADCRUMB -->



        <div class="container-fluid container-fullw">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-white">
                        <div class="panel-body">
                        	<div class="row">
                                <div class="col-lg-12">
                                	<table class="table table-hover" id="sample-table-1">
				                        <thead>
				                            <tr>
				                                <th class="center">Pump-1</th>
				                                <th class="center">Pump-2</th>
				                                <th class="center">Pump-3</th>
				                                <th class="center">Pump-4</th>
				                                <th class="center">Pump-5</th>
				                                <th class="center">Pump-6</th>
				                                <th class="center">Pump-7</th>
				                                <th class="center">Pump-8</th>
				                                <th class="center">Pump-9</th>
				                                <th class="center">Pump-10</th>
				                                <th class="center">Pump-11</th>
				                                <th class="center">Pump-12</th>
				                            </tr>
				                        </thead>
				                        <tbody>
				                            <tr>
				                                <td class="center">
				                                	<img id="status_1" style="height: 30px; width: 30px" src="<?php echo base_url(); ?>assets/images/Warning.png" />
				                                </td>
				                                <td class="center">
				                                	<img id="status_2" style="height: 30px; width: 30px" src="<?php echo base_url(); ?>assets/images/Warning.png" />
				                                </td>
				                                <td class="center">
				                                	<img id="status_3" style="height: 30px; width: 30px" src="<?php echo base_url(); ?>assets/images/Warning.png" />
				                                </td>
				                                <td class="center">
				                                	<img id="status_4" style="height: 30px; width: 30px" src="<?php echo base_url(); ?>assets/images/Warning.png" />
				                                </td>
				                                <td class="center">
				                                	<img id="status_5" style="height: 30px; width: 30px" src="<?php echo base_url(); ?>assets/images/Warning.png" />
				                                </td>
				                                <td class="center">
				                                	<img id="status_6" style="height: 30px; width: 30px" src="<?php echo base_url(); ?>assets/images/Warning.png" />
				                                </td>
				                                <td class="center">
				                                	<img id="status_7" style="height: 30px; width: 30px" src="<?php echo base_url(); ?>assets/images/Warning.png" />
				                                </td>
				                                <td class="center">
				                                	<img id="status_8" style="height: 30px; width: 30px" src="<?php echo base_url(); ?>assets/images/Warning.png" />
				                                </td>
				                                <td class="center">
				                                	<img id="status_9" style="height: 30px; width: 30px" src="<?php echo base_url(); ?>assets/images/Warning.png" />
				                                </td>
				                                <td class="center">
				                                	<img id="status_10" style="height: 30px; width: 30px" src="<?php echo base_url(); ?>assets/images/Warning.png" />
				                                </td>
				                                <td class="center">
				                                	<img id="status_11" style="height: 30px; width: 30px" src="<?php echo base_url(); ?>assets/images/Warning.png" />
				                                </td>
				                                <td class="center">
				                                	<img id="status_12" style="height: 30px; width: 30px" src="<?php echo base_url(); ?>assets/images/Warning.png" />
				                                </td>
				                            </tr>
				                            <tr>
				                                <td class="center">
				                                	<p id="pump_status_off_1" class="label label-warning">OFF</p>
				                                	<p id="pump_status_heating_1" class="label label-danger" style="display:none;">HEATING</p>
				                                	<p id="pump_status_cooling_1" class="label label-info" style="display:none;">COOLING</p>
				                                	<p id="pump_status_error_1" class="label label-inverse" style="display:none;">ERROR</p>
				                                </td>
				                                <td class="center">
				                                	<p id="pump_status_off_2" class="label label-warning">OFF</p>
				                                	<p id="pump_status_heating_2" class="label label-danger" style="display:none;">HEATING</p>
				                                	<p id="pump_status_cooling_2" class="label label-info" style="display:none;">COOLING</p>
				                                	<p id="pump_status_error_2" class="label label-inverse" style="display:none;">ERROR</p>
				                                </td>
				                                <td class="center">
				                                	<p id="pump_status_off_3" class="label label-warning">OFF</p>
				                                	<p id="pump_status_heating_3" class="label label-danger" style="display:none;">HEATING</p>
				                                	<p id="pump_status_cooling_3" class="label label-info" style="display:none;">COOLING</p>
				                                	<p id="pump_status_error_3" class="label label-inverse" style="display:none;">ERROR</p>
				                                </td>
				                                <td class="center">
				                                	<p id="pump_status_off_4" class="label label-warning">OFF</p>
				                                	<p id="pump_status_heating_4" class="label label-danger" style="display:none;">HEATING</p>
				                                	<p id="pump_status_cooling_4" class="label label-info" style="display:none;">COOLING</p>
				                                	<p id="pump_status_error_4" class="label label-inverse" style="display:none;">ERROR</p>
				                                </td>
				                                <td class="center">
				                                	<p id="pump_status_off_5" class="label label-warning">OFF</p>
				                                	<p id="pump_status_heating_5" class="label label-danger" style="display:none;">HEATING</p>
				                                	<p id="pump_status_cooling_5" class="label label-info" style="display:none;">COOLING</p>
				                                	<p id="pump_status_error_5" class="label label-inverse" style="display:none;">ERROR</p>
				                                </td>
				                                <td class="center">
				                                	<p id="pump_status_off_6" class="label label-warning">OFF</p>
				                                	<p id="pump_status_heating_6" class="label label-danger" style="display:none;">HEATING</p>
				                                	<p id="pump_status_cooling_6" class="label label-info" style="display:none;">COOLING</p>
				                                	<p id="pump_status_error_6" class="label label-inverse" style="display:none;">ERROR</p>
				                                </td>
				                                <td class="center">
				                                	<p id="pump_status_off_7" class="label label-warning">OFF</p>
				                                	<p id="pump_status_heating_7" class="label label-danger" style="display:none;">HEATING</p>
				                                	<p id="pump_status_cooling_7" class="label label-info" style="display:none;">COOLING</p>
				                                	<p id="pump_status_error_7" class="label label-inverse" style="display:none;">ERROR</p>
				                                </td>
				                                <td class="center">
				                                	<p id="pump_status_off_8" class="label label-warning">OFF</p>
				                                	<p id="pump_status_heating_8" class="label label-danger" style="display:none;">HEATING</p>
				                                	<p id="pump_status_cooling_8" class="label label-info" style="display:none;">COOLING</p>
				                                	<p id="pump_status_error_8" class="label label-inverse" style="display:none;">ERROR</p>
				                                </td>
				                                <td class="center">
				                                	<p id="pump_status_off_9" class="label label-warning">OFF</p>
				                                	<p id="pump_status_heating_9" class="label label-danger" style="display:none;">HEATING</p>
				                                	<p id="pump_status_cooling_9" class="label label-info" style="display:none;">COOLING</p>
				                                	<p id="pump_status_error_9" class="label label-inverse" style="display:none;">ERROR</p>
				                                </td>
				                                <td class="center">
				                                	<p id="pump_status_off_10" class="label label-warning">OFF</p>
				                                	<p id="pump_status_heating_10" class="label label-danger" style="display:none;">HEATING</p>
				                                	<p id="pump_status_cooling_10" class="label label-info" style="display:none;">COOLING</p>
				                                	<p id="pump_status_error_10" class="label label-inverse" style="display:none;">ERROR</p>
				                                </td>
				                                <td class="center">
				                                	<p id="pump_status_off_11" class="label label-warning">OFF</p>
				                                	<p id="pump_status_heating_11" class="label label-danger" style="display:none;">HEATING</p>
				                                	<p id="pump_status_cooling_11" class="label label-info" style="display:none;">COOLING</p>
				                                	<p id="pump_status_error_11" class="label label-inverse" style="display:none;">ERROR</p>
				                                </td>
				                                <td class="center">
				                                	<p id="pump_status_off_12" class="label label-warning">OFF</p>
				                                	<p id="pump_status_heating_12" class="label label-danger" style="display:none;">HEATING</p>
				                                	<p id="pump_status_cooling_12" class="label label-info" style="display:none;">COOLING</p>
				                                	<p id="pump_status_error_12" class="label label-inverse" style="display:none;">ERROR</p>
				                                </td>
				                            </tr>
				                        </tbody>
				                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="tabbable tabs-left">
                                        <ul id="myTab4" class="nav nav-tabs">
                                            <li class="active">
                                                <a href="#pump-tab-1" data-toggle="tab"> Pump 1 </a>
                                            </li>
                                            <li class="">
                                                <a href="#pump-tab-2" data-toggle="tab"> Pump 2 </a>
                                            </li>
                                            <li class="">
                                                <a href="#pump-tab-3" data-toggle="tab"> Pump 3 </a>
                                            </li>
                                            <li class="">
                                                <a href="#pump-tab-4" data-toggle="tab"> Pump 4 </a>
                                            </li>
                                            <li class="">
                                                <a href="#pump-tab-5" data-toggle="tab"> Pump 5 </a>
                                            </li>
                                            <li class="">
                                                <a href="#pump-tab-6" data-toggle="tab"> Pump 6 </a>
                                            </li>
                                            <li class="">
                                                <a href="#pump-tab-7" data-toggle="tab"> Pump 7 </a>
                                            </li>
                                            <li class="">
                                                <a href="#pump-tab-8" data-toggle="tab"> Pump 8 </a>
                                            </li>
                                            <li class="">
                                                <a href="#pump-tab-9" data-toggle="tab"> Pump 9 </a>
                                            </li>
                                            <li class="">
                                                <a href="#pump-tab-10" data-toggle="tab"> Pump 10 </a>
                                            </li>
                                            <li class="">
                                                <a href="#pump-tab-11" data-toggle="tab"> Pump 11 </a>
                                            </li>
                                            <li class="">
                                                <a href="#pump-tab-12" data-toggle="tab"> Pump 12 </a>
                                            </li>
                                        </ul>
                                        <div class="tab-content" style="min-height: 550px">
                                            <div class="tab-pane fade in active" id="pump-tab-1">
                                            	<div class="col-lg-6 center">
                                            		<h3 style="padding-top: 50px">Pump #1 Set Temperature</h3>
                                            		<div id="pump_1_set_temp"></div>
                                            		
                                            	</div>
                                            	<div class="col-lg-6 center">
                                            		<h3 style="padding-top: 50px">Pump #1 Inlet Water Temperature</h3>
                                            		<div id="pump_1_inlet_temp"></div>
                                            	</div>
                                            </div>
                                            <div class="tab-pane fade in" id="pump-tab-2">
                                                <div class="col-lg-6 center">
                                            		<h3 style="padding-top: 50px">Pump #2 Set Temperature</h3>
                                            		<div id="pump_2_set_temp"></div>
                                            		
                                            	</div>
                                            	<div class="col-lg-6 center">
                                            		<h3 style="padding-top: 50px">Pump #2 Inlet Water Temperature</h3>
                                            		<div id="pump_2_inlet_temp"></div>
                                            	</div>
                                            </div>
                                            <div class="tab-pane fade in" id="pump-tab-3">
                                                <div class="col-lg-6 center">
                                            		<h3 style="padding-top: 50px">Pump #3 Set Temperature</h3>
                                            		<div id="pump_3_set_temp"></div>
                                            		
                                            	</div>
                                            	<div class="col-lg-6 center">
                                            		<h3 style="padding-top: 50px">Pump #3 Inlet Water Temperature</h3>
                                            		<div id="pump_3_inlet_temp"></div>
                                            	</div>
                                            </div>
                                            <div class="tab-pane fade in" id="pump-tab-4">
                                                <div class="col-lg-6 center">
                                            		<h3 style="padding-top: 50px">Pump #4 Set Temperature</h3>
                                            		<div id="pump_4_set_temp"></div>
                                            		
                                            	</div>
                                            	<div class="col-lg-6 center">
                                            		<h3 style="padding-top: 50px">Pump #4 Inlet Water Temperature</h3>
                                            		<div id="pump_4_inlet_temp"></div>
                                            	</div>
                                            </div>
                                            <div class="tab-pane fade in" id="pump-tab-5">
                                                <div class="col-lg-6 center">
                                            		<h3 style="padding-top: 50px">Pump #5 Set Temperature</h3>
                                            		<div id="pump_5_set_temp"></div>
                                            	</div>
                                            	<div class="col-lg-6 center">
                                            		<h3 style="padding-top: 50px">Pump #5 Inlet Water Temperature</h3>
                                            		<div id="pump_5_inlet_temp"></div>
                                            	</div>
                                            </div>
                                            <div class="tab-pane fade in" id="pump-tab-6">
                                                <div class="col-lg-6 center">
                                            		<h3 style="padding-top: 50px">Pump #6 Set Temperature</h3>
                                            		<div id="pump_6_set_temp"></div>
                                            	</div>
                                            	<div class="col-lg-6 center">
                                            		<h3 style="padding-top: 50px">Pump #6 Inlet Water Temperature</h3>
                                            		<div id="pump_6_inlet_temp"></div>
                                            	</div>
                                            </div>
                                            <div class="tab-pane fade in" id="pump-tab-7">
                                                <div class="col-lg-6 center">
                                            		<h3 style="padding-top: 50px">Pump #7 Set Temperature</h3>
                                            		<div id="pump_7_set_temp"></div>
                                            	</div>
                                            	<div class="col-lg-6 center">
                                            		<h3 style="padding-top: 50px">Pump #7 Inlet Water Temperature</h3>
                                            		<div id="pump_7_inlet_temp"></div>
                                            	</div>
                                            </div>
                                            <div class="tab-pane fade in" id="pump-tab-8">
                                                <div class="col-lg-6 center">
                                            		<h3 style="padding-top: 50px">Pump #8 Set Temperature</h3>
                                            		<div id="pump_8_set_temp"></div>
                                            	</div>
                                            	<div class="col-lg-6 center">
                                            		<h3 style="padding-top: 50px">Pump #8 Inlet Water Temperature</h3>
                                            		<div id="pump_8_inlet_temp"></div>
                                            	</div>
                                            </div>
                                            <div class="tab-pane fade in" id="pump-tab-9">
                                                <div class="col-lg-6 center">
                                            		<h3 style="padding-top: 50px">Pump #9 Set Temperature</h3>
                                            		<div id="pump_9_set_temp"></div>
                                            	</div>
                                            	<div class="col-lg-6 center">
                                            		<h3 style="padding-top: 50px">Pump #9 Inlet Water Temperature</h3>
                                            		<div id="pump_9_inlet_temp"></div>
                                            	</div>
                                            </div>
                                            <div class="tab-pane fade in" id="pump-tab-10">
                                                <div class="col-lg-6 center">
                                            		<h3 style="padding-top: 50px">Pump #10 Set Temperature</h3>
                                            		<div id="pump_10_set_temp"></div>
                                            	</div>
                                            	<div class="col-lg-6 center">
                                            		<h3 style="padding-top: 50px">Pump #10 Inlet Water Temperature</h3>
                                            		<div id="pump_10_inlet_temp"></div>
                                            	</div>
                                            </div>
                                            <div class="tab-pane fade in" id="pump-tab-11">
                                                <div class="col-lg-6 center">
                                            		<h3 style="padding-top: 50px">Pump #11 Set Temperature</h3>
                                            		<div id="pump_11_set_temp"></div>
                                            	</div>
                                            	<div class="col-lg-6 center">
                                            		<h3 style="padding-top: 50px">Pump #11 Inlet Water Temperature</h3>
                                            		<div id="pump_11_inlet_temp"></div>
                                            	</div>
                                            </div>
                                            <div class="tab-pane fade in" id="pump-tab-12">
                                                <div class="col-lg-6 center">
                                            		<h3 style="padding-top: 50px">Pump #12 Set Temperature</h3>
                                            		<div id="pump_12_set_temp"></div>
                                            	</div>
                                            	<div class="col-lg-6 center">
                                            		<h3 style="padding-top: 50px">Pump #12 Inlet Water Temperature</h3>
                                            		<div id="pump_12_inlet_temp"></div>
                                            	</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
$('document').ready(function(){
	setInterval(check_gauges, 10000);
	check_gauges();
});

function set_status(modbus_id, value) {
	console.log('set status: '+modbus_id+' '+value);
	switch(value) {
		case '0':
			$("#status_"+modbus_id).attr("src","<?php echo base_url(); ?>assets/images/Warning.png");
			$("#pump_status_off_"+modbus_id).show();
			$("#pump_status_heating_"+modbus_id).hide();
			$("#pump_status_cooling_"+modbus_id).hide();
			$("#pump_status_error_"+modbus_id).hide();
			break;
		case '1':
			$("#status_"+modbus_id).attr("src","<?php echo base_url(); ?>assets/images/Cooling.png");
			$("#pump_status_off_"+modbus_id).hide();
			$("#pump_status_heating_"+modbus_id).hide();
			$("#pump_status_cooling_"+modbus_id).show();
			$("#pump_status_error_"+modbus_id).hide();
			break;
		case '2':
			$("#status_"+modbus_id).attr("src","<?php echo base_url(); ?>assets/images/Heating.png");
			$("#pump_status_off_"+modbus_id).hide();
			$("#pump_status_heating_"+modbus_id).show();
			$("#pump_status_cooling_"+modbus_id).hide();
			$("#pump_status_error_"+modbus_id).hide();
			break;
		case '3':
			$("#status_"+modbus_id).attr("src","<?php echo base_url(); ?>assets/images/Warning.png");
			$("#pump_status_off_"+modbus_id).hide();
			$("#pump_status_heating_"+modbus_id).hide();
			$("#pump_status_cooling_"+modbus_id).hide();
			$("#pump_status_error_"+modbus_id).show();
			break;
		default:
			$("#status_"+modbus_id).attr("src","<?php echo base_url(); ?>assets/images/Warning.png");
			$("#status_"+modbus_id).attr("src","<?php echo base_url(); ?>assets/images/Warning.png");
			$("#pump_status_off_"+modbus_id).show();
			$("#pump_status_heating_"+modbus_id).hide();
			$("#pump_status_cooling_"+modbus_id).hide();
			$("#pump_status_error_"+modbus_id).hide();
	}
}

function set_temp_gauge(modbus_id, value) {
	gauge_object = 'pump_'+modbus_id+'_set_temp';
	window[gauge_object].arrows[0].setValue(value);
	window[gauge_object].axes[0].setTopText(value + " C");
    // adjust darker band to new value
    window[gauge_object].axes[0].bands[1].setEndValue(value);
}

function set_input_temp_gauge(modbus_id, value) {
	gauge_object = 'pump_'+modbus_id+'_inlet_temp';
	window[gauge_object].arrows[0].setValue(value);
	window[gauge_object].axes[0].setTopText(value + " C");
    // adjust darker band to new value
    window[gauge_object].axes[0].bands[1].setEndValue(value);
}

function check_gauges() {

  modbus_id = 1;
  
  $.ajax({
    type: "GET",
    datatype: 'json',
    url: "<?php echo base_url() ?>index.php/heat_pumps/Heat_pump_home/ajax_get_pump_status/"+modbus_id,
    success: function (data) {
        var pump_statuses = JSON.parse(data);
        for (var i = 0; i < pump_statuses.length; i++) {
        	var modbus_id = pump_statuses[i].pump_modbus_id;
			var status_value = pump_statuses[i].indicator_status;
			var set_temp = pump_statuses[i].set_temperature;
			var input_temp = pump_statuses[i].input_temperature;
			set_status(modbus_id, status_value);
			set_temp_gauge(modbus_id, set_temp);
			set_input_temp_gauge(modbus_id, input_temp);
        }
    }
  });
}
</script>
