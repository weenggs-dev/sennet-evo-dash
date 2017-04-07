<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="main-content" >
    <div class="wrap-content container" id="container">
        <!-- start: BREADCRUMB -->
        <div class="breadcrumb-wrapper">
            <h4 class="mainTitle no-margin">Power Consumption</h4>
            <ul class="pull-right breadcrumb">
                <li>
                    <a href="index.html"><i class="fa fa-home margin-right-5 text-large text-dark"></i>Home</a>
                </li>
                <li>
                    Monitoring
                </li>
                <li>
                    Consumption
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
                                    <div class="alert alert-warning">
                                        <button data-ct-dismiss="alert" class="close">
                                            ×
                                        </button>
                                        <strong>Warning!</strong>
                                        This graph is a place holder only and does not display real data. This part of the site is under development.
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">

                                    <!-- Styles -->
                                    <style>
                                        #chartdiv {
                                            width: 100%;
                                            height: 600px;
                                        }
                                    </style>

                                    <!-- Resources -->
                                    <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
                                    <script src="https://www.amcharts.com/lib/3/serial.js"></script>
                                    <script src="https://www.amcharts.com/lib/3/amstock.js"></script>
                                    <script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
                                    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
                                    <script src="https://www.amcharts.com/lib/3/themes/light.js"></script>

                                    <!-- Chart code -->
                                    <script>
                                        var chartData1 = [];
                                        var chartData2 = [];
                                        var chartData3 = [];
                                        var chartData4 = [];

                                        generateChartData();

                                        function generateChartData() {
                                            var firstDate = new Date();
                                            firstDate.setDate(firstDate.getDate() - 500);
                                            firstDate.setHours(0, 0, 0, 0);

                                            for (var i = 0; i < 500; i++) {
                                                var newDate = new Date(firstDate);
                                                newDate.setDate(newDate.getDate() + i);

                                                var a1 = Math.round(Math.random() * (40 + i)) + 100 + i;
                                                var b1 = Math.round(Math.random() * (1000 + i)) + 500 + i * 2;

                                                var a2 = Math.round(Math.random() * (100 + i)) + 200 + i;
                                                var b2 = Math.round(Math.random() * (1000 + i)) + 600 + i * 2;

                                                var a3 = Math.round(Math.random() * (100 + i)) + 200;
                                                var b3 = Math.round(Math.random() * (1000 + i)) + 600 + i * 2;

                                                var a4 = Math.round(Math.random() * (100 + i)) + 200 + i;
                                                var b4 = Math.round(Math.random() * (100 + i)) + 600 + i;

                                                chartData1.push({
                                                    "date": newDate,
                                                    "value": a1,
                                                    "volume": b1
                                                });
                                                chartData2.push({
                                                    "date": newDate,
                                                    "value": a2,
                                                    "volume": b2
                                                });
                                                chartData3.push({
                                                    "date": newDate,
                                                    "value": a3,
                                                    "volume": b3
                                                });
                                                chartData4.push({
                                                    "date": newDate,
                                                    "value": a4,
                                                    "volume": b4
                                                });
                                            }
                                        }

                                        var chart = AmCharts.makeChart("chartdiv", {
                                            "type": "stock",
                                            "theme": "light",
                                            "dataSets": [{
                                                    "title": "first data set",
                                                    "fieldMappings": [{
                                                            "fromField": "value",
                                                            "toField": "value"
                                                        }, {
                                                            "fromField": "volume",
                                                            "toField": "volume"
                                                        }],
                                                    "dataProvider": chartData1,
                                                    "categoryField": "date"
                                                }, {
                                                    "title": "second data set",
                                                    "fieldMappings": [{
                                                            "fromField": "value",
                                                            "toField": "value"
                                                        }, {
                                                            "fromField": "volume",
                                                            "toField": "volume"
                                                        }],
                                                    "dataProvider": chartData2,
                                                    "categoryField": "date"
                                                }, {
                                                    "title": "third data set",
                                                    "fieldMappings": [{
                                                            "fromField": "value",
                                                            "toField": "value"
                                                        }, {
                                                            "fromField": "volume",
                                                            "toField": "volume"
                                                        }],
                                                    "dataProvider": chartData3,
                                                    "categoryField": "date"
                                                }, {
                                                    "title": "fourth data set",
                                                    "fieldMappings": [{
                                                            "fromField": "value",
                                                            "toField": "value"
                                                        }, {
                                                            "fromField": "volume",
                                                            "toField": "volume"
                                                        }],
                                                    "dataProvider": chartData4,
                                                    "categoryField": "date"
                                                }
                                            ],

                                            "panels": [{
                                                    "showCategoryAxis": false,
                                                    "title": "Value",
                                                    "percentHeight": 70,
                                                    "stockGraphs": [{
                                                            "id": "g1",
                                                            "valueField": "value",
                                                            "comparable": true,
                                                            "compareField": "value",
                                                            "balloonText": "[[title]]:<b>[[value]]</b>",
                                                            "compareGraphBalloonText": "[[title]]:<b>[[value]]</b>"
                                                        }],
                                                    "stockLegend": {
                                                        "periodValueTextComparing": "[[percents.value.close]]%",
                                                        "periodValueTextRegular": "[[value.close]]"
                                                    }
                                                }, {
                                                    "title": "Volume",
                                                    "percentHeight": 30,
                                                    "stockGraphs": [{
                                                            "valueField": "volume",
                                                            "type": "column",
                                                            "showBalloon": false,
                                                            "fillAlphas": 1
                                                        }],
                                                    "stockLegend": {
                                                        "periodValueTextRegular": "[[value.close]]"
                                                    }
                                                }],

                                            "chartScrollbarSettings": {
                                                "graph": "g1"
                                            },

                                            "chartCursorSettings": {
                                                "valueBalloonsEnabled": true,
                                                "fullWidth": true,
                                                "cursorAlpha": 0.1,
                                                "valueLineBalloonEnabled": true,
                                                "valueLineEnabled": true,
                                                "valueLineAlpha": 0.5
                                            },

                                            "periodSelector": {
                                                "position": "left",
                                                "periods": [{
                                                        "period": "MM",
                                                        "selected": true,
                                                        "count": 1,
                                                        "label": "1 month"
                                                    }, {
                                                        "period": "YYYY",
                                                        "count": 1,
                                                        "label": "1 year"
                                                    }, {
                                                        "period": "YTD",
                                                        "label": "YTD"
                                                    }, {
                                                        "period": "MAX",
                                                        "label": "MAX"
                                                    }]
                                            },

                                            "dataSetSelector": {
                                                "position": "left"
                                            },

                                            "export": {
                                                "enabled": true
                                            }
                                        });
                                    </script>

                                    <!-- HTML -->
                                    <div id="chartdiv"></div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
