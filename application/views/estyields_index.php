<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Yield per Hectare</title>
    <meta name="description" content="Yield Charts">
    <?php 
            echo link_tag('css/bootstrap-reboot.min.css');
            echo link_tag('css/bootstrap.min.css');
            echo link_tag('css/bootstrap-grid.min.css');
            echo link_tag('css/bootstrap-icons.css');
            echo link_tag('css/sidebarjs.min.css');
            echo link_tag('css/styles.css');       
        ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-E2XBB2166Q"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-E2XBB2166Q');

    </script>

</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div id="sidebarView" sidebarjs>
                <div class="content">
                    <div id="sidebarToggle" class="text-white" sidebarjs-toggle><i class="bi bi-chevron-left"></i></div>
                    <img id="riceLyticsLogo" class="mx-auto d-block" src="<?php echo base_url(); ?>assets/ricelytics_logo.png" alt="RiceLytics logo">
                    <p class="text-center text-white">Supported by:</p>
                    <img id="riceLyticsLogo" class="mx-auto d-block mb-4 mt-4" style="height: 80px;" src="<?php echo base_url(); ?>assets/dost-pcieerd.png" alt="DOST PCIEERD logo">
                    <nav class="navbar flex-column">
                        <a class="active w-100 mr-2 text-white text-center d-block" href="<?php echo base_url(); ?>" role="button">Rice Industry</a>
                        <a class="w-100 mr-2 text-white text-center d-block" href="<?php echo base_url(); ?>profilemain" role="button">Rice Farmer</a>
                        <a class="w-100 mr-2 text-white text-center d-block" href="<?php echo base_url(); ?>farmpractices" role="button">Farming Practices</a>
                        <a id="feedback-button" class="btn btn-lg btn-primary" href="https://docs.google.com/forms/d/e/1FAIpQLSfEF9gSkpH6BlzT7n2pfckBlUNY0HKQJxn8RIOoKUt69B1jdg/viewform" role="button">Feedback</a>
                    </nav>
                </div>
            </div>
            <nav id="sidebarMenu" class="col d-md-block sidebar collapse">
                <div class="sidebar-sticky pt-1">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <div id="sidebarToggle" class="text-white" sidebarjs-toggle><i class="bi bi-list"></i></div>
                            <img id="riceLyticsLogo" src="<?php echo base_url(); ?>assets/ricelytics_logo_vertical.png" alt="RiceLytics logo">
                        </li>
                    </ul>
                </div>
            </nav>
            <main role="main" class="col">
                <!-- Navigation --->
                <nav class="navbar navbar-expand-lg navbar-dark">
                    <a class="btn btn-warning mr-2 text-white" href="<?php echo base_url(); ?>" role="button"><i class="bi bi-caret-left"></i> Back to Main</a>
                </nav>

                <!-- Header --->
                <div id="yield" class="jumbotron text-center">
                    <div class="jumbotron-content">
                        <h2>State of the Rice Sector in the Philippines</h2>
                        <h1>Yield per Hectare</h1>
                        <p class="lead"><i>How do our farmers perform in terms of yield per hectare?</i> Check out the average metric tons <br />of palay produced per hectare, the attainment in irrigated and non-irrigated areas, and the performance in each province.</p>
                    </div>
                </div>

                <!-- Body -->
                <div class="sublevel">
                    <div class="row">
                        <div class="col">
                            <div class="card-deck mb-2 text-center">
                                <div class="card primary mb-4 bg-primary-2 text-white">
                                    <div class="card-body">
                                        <h5 class="card-title pb-2">Irrigated Area</h5>
                                        <h1 class="card-text font-weight-bold"><?php echo $yield_irrigated['value']; ?><i class="<?php echo $yield_caret_irrig; ?>"></i></h1>
                                        <div class="card-note w-75 mx-auto rounded-pill bg-primary">
                                            <p class="text-white">metric tons per hectare</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card primary mb-4 bg-primary text-white">
                                    <div class="card-body">
                                        <h5 class="card-title pb-2">National Average (2021)</h5>
                                        <h1 class="card-text font-weight-bold"><?php echo $yield_all['value']; ?><i class="<?php echo $yield_caret; ?>"></i></h1>
                                        <div class="card-note bg-warning w-75 mx-auto rounded-pill">
                                            <p class="text-white">metric tons per hectare</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card primary mb-4 bg-alternate-3">
                                    <div class="card-body">
                                        <h5 class="card-title pb-2">Non-Irrigated Area</h5>
                                        <h1 class="card-text font-weight-bold"><?php echo $yield_rainfed['value']; ?><i class="<?php echo $yield_caret_rain; ?>"></i></h1>
                                        <div class="card-note w-75 mx-auto rounded-pill bg-primary">
                                            <p class="text-white">metric tons per hectare</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="card mb-4">
                                <div class="card-header text-left">
                                    <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a>
                                    <h5 class="my-0 pt-2 pb-2">Average Yield per Hectare per Cropping Season (2001-2021)</h5>
                                    <p class="my-0 font-weight-normal text-muted">in metric tons per hectare (PSA, 2022)</p>
                                </div>
                                <div class="card-body">
                                    <div><canvas id="ctxYieldStack"></canvas></div>
                                </div>
                                <div class="card-footer text-muted">
                                    Data Source: <a href="https://palaystat.philrice.gov.ph/statistics/retrieve/table/1" target="_blank">Estimated production, area harvested and yield per hectare (PAY) - PalayStat System</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="card mb-4">
                                <div class="card-header text-left">
                                    <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Map</a>
                                    <div class="chart-toggles" data-html2canvas-ignore="true">
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                            <label class="btn btn-secondary">
                                                <input id="showTop" type="radio" name="toggle_list"> Top 20
                                            </label>
                                            <label class="btn btn-secondary">
                                                <input id="showAll" type="radio" name="toggle_list"> Show All
                                            </label>
                                        </div>
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                            <label class="btn btn-secondary">
                                                <input type="radio" name="toggle_type" id="showreg" checked> Regional
                                            </label>
                                            <label class="btn btn-secondary">
                                                <input type="radio" name="toggle_type" id="showprov"> Provincial
                                            </label>
                                        </div>
                                    </div>
                                    <h5 id="chart2-yield" class="my-0 pt-2 pb-2">Average Yield per Hectare per Cropping Season by Province by Region (2021)</h5>
                                    <p class="my-0 font-weight-normal text-muted">in metric tons per hectare (PSA, 2022)</p>
                                </div>
                                <div class="card-body chart-all">
                                    <div class="row">
                                        <div class="col-6">
                                            <div id="ctxTopProvTopContainer"><canvas id="ctxTopProvTop"></canvas></div>
                                            <div id="ctxTopProvContainer" class="scrollable-chart"><canvas id="ctxTopProv"></canvas></div>     
                                            <div id="ctxRegionalContainer"><canvas id="ctxRegional"></canvas></div>
                                        </div>
                                        <div class="col-6">                                            
                                            <div class="text-center mt-4">
                                                <div class="legend-box" style="background:rgba(41,107,54,1);"></div>
                                                <p id="series-1" class="d-inline-block text-capitalize">> 4.15 Yield per Hectare</p>
                                                <div class="legend-box" style="background:rgba(42,140,184,1);"></div>
                                                <p id="series-2" class="d-inline-block text-capitalize">< 4.15 Yield per Hectare</p>                                        
                                            </div>
                                            <div id="phl-top" style="height: 850px;"></div>
                                            <div id="phl" style="height: 850px;"></div>
                                            <div id="phl-reg" style="height: 850px;"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-muted">
                                    Data Source: <a href="https://palaystat.philrice.gov.ph/statistics/retrieve/table/1" target="_blank">Estimated production, area harvested and yield per hectare (PAY) - PalayStat System</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php echo $footer; ?>
                </div>
            </main>
        </div>
    </div>

    <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/sidebarjs.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/chart.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/chartjs-plugin-labels.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/html2canvas.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/d3.v3.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/topojson.v1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/datamaps.none.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/custom.js"></script>

    <script>
        var sidebarjs = new SidebarJS.SidebarElement();
        Chart.defaults.global.responsive = true;
        Chart.defaults.global.tooltips.mode = 'index';
        Chart.defaults.global.tooltips.intersect = false;
        Chart.defaults.global.defaultFontFamily = 'Poppins';
        Chart.defaults.global.defaultFontSize = 12;
        Chart.defaults.global.animation.duration = 3000;
        Chart.defaults.global.defaultFontColor = "#000000";

        // CHART 1

        var dbTotal = JSON.parse('<?php echo $ph_yield_all; ?>');
        var dbIrrigated = JSON.parse('<?php echo $ph_yield_irrigated; ?>');
        var dbRainfed = JSON.parse('<?php echo $ph_yield_rainfed; ?>');

        let years = [];
        let values_total = [];
        let values_irrig = [];
        let values_rain = [];

        try {
            dbTotal.map((item) => {
                years.push(item.year);
                values_total.push(item.value);
            });
            dbIrrigated.map((item) => {
                values_irrig.push(item.value);
            });
            dbRainfed.map((item) => {
                values_rain.push(item.value);
            });
        } catch (error) {
            console.log(error);
        }

        var yieldStack = document.getElementById('ctxYieldStack').getContext('2d');
        var tempYLabels = [...years];
        var yieldAllData = [...values_total];
        var yieldIrrigData = [...values_irrig];
        var yieldRainData = [...values_rain];
        var yieldStackChart = new Chart(yieldStack, {

            type: 'bar',

            data: {
                labels: tempYLabels,
                datasets: [{
                        label: 'National Average',
                        backgroundColor: '#2138B7', // COLOR 1
                        borderColor: '#2138B7', // COLOR 1
                        lineTension: 0,
                        type: 'line',
                        fill: false,
                        data: yieldAllData,
                    },
                    {
                        label: 'Irrigated Area',
                        backgroundColor: '#FE7F00', // COLOR 2
                        borderColor: '#FE7F00', // COLOR 2
                        lineTension: 0,
                        type: 'line',
                        fill: false,
                        data: yieldIrrigData
                    },
                    {
                        label: 'Non-Irrigated Area',
                        backgroundColor: '#FFB043', // COLOR 3
                        borderColor: '#FFB043', // COLOR 3
                        lineTension: 0,
                        type: 'line',
                        fill: false,
                        data: yieldRainData
                    }
                ]
            },

            options: {
                aspectRatio: 2.5,
                scales: {
                    xAxes: [{
                        display: true,
                        gridLines: {
                            color: "rgba(0, 0, 0, 0)"
                        }
                    }],
                    yAxes: [{
                        display: true,
                        ticks: {
                            suggestedMin: 0,
                            suggestedMax: 5
                        }
                    }]
                },
                legend: {
                    position: 'top',
                    onClick: (e) => e.stopPropagation(),
                },
                tooltips: false,
                hover: {
                    animationDuration: 0
                },
                animation: {
                    duration: 0,
                    onComplete: function() {
                        let chartInstance = this.chart,
                            ctx = chartInstance.ctx;

                        ctx.textAlign = 'center';
                        ctx.textBaseline = 'bottom';
                        ctx.fillStyle = '#000000';

                        this.data.datasets.forEach(function(dataset, i) {
                            let meta = chartInstance.controller.getDatasetMeta(i);
                            meta.data.forEach(function(bar, index) {
                                let data = dataset.data[index];
                                ctx.fillText(data, bar._model.x + 0, bar._model.y + -5);
                            });
                        });
                    }
                }
            }
        });
        
        // DEFAULT FOR CHART 2, 3, AND 4
        
        var scalesC = [{
                "range": 0,
                "minValue": "0.00",
                "maxValue": "4.15"
            },
            {
                "range": 1,
                "minValue": "4.15",
                "maxValue": "20.00"
            }
        ];
        
        // CHART 2 - CHART AND MAP TOP
        
        var dbProvsMapTop = JSON.parse('<?php echo $provincial_yield_geo; ?>');
        dbProvsMapTop = dbProvsMapTop.slice(0, 20);
        
        let mapDataTop = [];
        
        for (i = 0; i < dbProvsMapTop.length; i++) {
            var gc = dbProvsMapTop[i].map_ID;
            var value = parseFloat(dbProvsMapTop[i].value);

            var fill_color = "";
            if (value > scalesC[1].minValue) {
                fill_color = "secoQ";
            } else if (value > scalesC[0].minValue) {
                fill_color = "firsQ";
            }

            mapDataTop[gc] = {
                Location_name: dbProvsMapTop[i].location_name,
                Year: dbProvsMapTop[i].year,
                Value: parseFloat(dbProvsMapTop[i].value).toLocaleString(),
                fillKey: fill_color
            };
        }

        var map = new Datamap({
            element: document.getElementById('phl-top'),
            geographyConfig: {
                popupOnHover: true,
                highlightOnHover: true,
                dataUrl: '<?php echo base_url(); ?>js/phl.topo.json',
                borderColor: '#000000',
                highlightFillColor: '#92cddc',
                highlightBorderColor: 'rgba(37, 42, 45, 0.8)',
                popupTemplate: function(geography, data) {
                    return '<div class="hoverinfo"><strong>' + geography.properties.name +
                        ': ' + numberWithCommas(data.Value) + ' mt/ha (' + data.Year + ')</strong></div>';
                },
            },
            scope: 'phl',
            fills: {
                firsQ: 'rgba(42,140,184,0.8)',
                secoQ: 'rgba(41,107,54,0.8)',
                thirQ: 'rgba(15,40,184,0.8)',
                fourQ: 'rgba(24,132,184,0.8)',
                defaultFill: 'rgba(166,216,225,1)'
            },
            data: mapDataTop,
            setProjection: function(element) {
                var projection = d3.geo.mercator()
                    .center([121.7740, 12.8797])
                    .scale(2800)
                    .translate([element.offsetWidth / 2, element.offsetHeight / 2]);

                var path = d3.geo.path().projection(projection);
                return {
                    path: path,
                    projection: projection
                };
            }
        });
        
        var dbProvsTop = JSON.parse('<?php echo $provincial_yield_all; ?>');
        dbProvsTop = dbProvsTop.slice(0, 20);

        let provincesT = [];
        let valuesT = [];
        let bgColorsT = [];

        try {
            dbProvsTop.map((item) => {
                provincesT.push(item.location_name);
                valuesT.push(item.value);
                var val = parseFloat(item.value);
                if (val > scalesC[1].minValue) {
                    fill_color = "rgba(41,107,54,1)";
                } else if (val > scalesC[0].minValue) {
                    fill_color = "rgba(42,140,184,1)";
                }
                bgColorsT.push(fill_color);
            });
        } catch (error) {
            console.log(error);
        }

        var tempPrLabelsT = [...provincesT];
        var topProvDataT = [...valuesT];
        var topProvColorT = [...bgColorsT];

        var topProvT = document.getElementById('ctxTopProvTop').getContext('2d');
        var topProvChartT = new Chart(topProvT, {
            // The type of chart we want to create
            type: 'horizontalBar',

            data: {
                labels: tempPrLabelsT,
                datasets: [{
                    label: 'Total palay produced',
                    backgroundColor: topProvColorT, // COLOR 4
                    borderColor: topProvColorT, // COLOR 4
                    data: topProvDataT
                }]
            },

            options: {
                layout: {
                padding: {
                        right: 75
                    }
                },
                aspectRatio: 0.55,
                scales: {
                    xAxes: [{
                        display: true,
                        ticks: {
                            userCallback: function(value, index, values) {
                                value = value.toString();
                                value = value.split(/(?=(?:...)*$)/);
                                value = value.join(',');
                                return value;
                            }
                        }
                    }],
                    yAxes: [{
                        display: true,
                        ticks: {
                            suggestedMin: 0
                        },
                        gridLines: {
                            color: "rgba(0, 0, 0, 0)"
                        }
                    }]
                },
                tooltips: false,
                legend: {
                    display: false,
                    labels: {
                        fontSize: 12
                    }
                },
                hover: {
                    animationDuration: 0
                },
                animation: {
                    duration: 0,
                    onComplete: function() {
                        let chartInstance = this.chart,
                            ctx = chartInstance.ctx;
                        ctx.textAlign = 'center';
                        ctx.textBaseline = 'bottom';
                        // ctx.font = ctx.font.replace(/\d+px/, "7px");
                        this.data.datasets.forEach(function(dataset, i) {
                            let meta = chartInstance.controller.getDatasetMeta(i);
                            meta.data.forEach(function(bar, index) {
                                let data = dataset.data[index];
                                data = parseFloat(data).toLocaleString();
                                ctx.fillText(data, bar._model.x + 20, bar._model.y + 8);
                            });
                        });
                    }
                }
            }
        });
        
        // CHART 3 - CHART AND MAP ALL

        var dbProvsMap = JSON.parse('<?php echo $provincial_yield_geo; ?>');

        let mapData = [];

        for (i = 0; i < dbProvsMap.length; i++) {
            var gc = dbProvsMap[i].map_ID;
            var value = parseFloat(dbProvsMap[i].value);

            var fill_color = "";
            if (value > scalesC[1].minValue) {
                fill_color = "secoQ";
            } else if (value > scalesC[0].minValue) {
                fill_color = "firsQ";
            }

            mapData[gc] = {
                Location_name: dbProvsMap[i].location_name,
                Year: dbProvsMap[i].year,
                Value: parseFloat(dbProvsMap[i].value).toLocaleString(),
                fillKey: fill_color
            };
        }

        var map = new Datamap({
            element: document.getElementById('phl'),
            geographyConfig: {
                popupOnHover: true,
                highlightOnHover: true,
                dataUrl: '<?php echo base_url(); ?>js/phl.topo.json',
                borderColor: '#000000',
                highlightFillColor: '#92cddc',
                highlightBorderColor: 'rgba(37, 42, 45, 0.8)',
                popupTemplate: function(geography, data) {
                    return '<div class="hoverinfo"><strong>' + geography.properties.name +
                        ': ' + numberWithCommas(data.Value) + ' mt/ha (' + data.Year + ')</strong></div>';
                },
            },
            scope: 'phl',
            fills: {
                firsQ: 'rgba(42,140,184,0.8)',
                secoQ: 'rgba(41,107,54,0.8)',
                thirQ: 'rgba(15,40,184,0.8)',
                fourQ: 'rgba(24,132,184,0.8)',
                defaultFill: 'rgba(0, 0, 0, 0.5)'
            },
            data: mapData,
            setProjection: function(element) {
                var projection = d3.geo.mercator()
                    .center([121.7740, 12.8797])
                    .scale(2800)
                    .translate([element.offsetWidth / 2, element.offsetHeight / 2]);

                var path = d3.geo.path().projection(projection);
                return {
                    path: path,
                    projection: projection
                };
            }
        });

        var dbProvs = JSON.parse('<?php echo $provincial_yield_all; ?>');

        let provinces = [];
        let values = [];
        let bgColors = [];

        try {
            dbProvs.map((item) => {
                provinces.push(item.location_name);
                values.push(item.value);
                var val = parseFloat(item.value);
                if (val > scalesC[1].minValue) {
                    fill_color = "rgba(41,107,54,1)";
                } else if (val > scalesC[0].minValue) {
                    fill_color = "rgba(42,140,184,1)";
                }
                bgColors.push(fill_color);
            });
        } catch (error) {
            console.log(error);
        }

        var tempPrLabels = [...provinces];
        var topProvData = [...values];
        var topProvColor = [...bgColors];

        var topProv = document.getElementById('ctxTopProv').getContext('2d');
        var topProvChart = new Chart(topProv, {
            // The type of chart we want to create
            type: 'horizontalBar',

            data: {
                labels: tempPrLabels,
                datasets: [{
                    label: 'Total palay produced',
                    backgroundColor: topProvColor, // COLOR 4
                    borderColor: topProvColor, // COLOR 4
                    data: topProvData
                }]
            },

            options: {
                layout: {
                padding: {
                        right: 75
                    }
                },
                aspectRatio: 0.15,
                scales: {
                    xAxes: [{
                        display: true,
                        ticks: {
                            userCallback: function(value, index, values) {
                                value = value.toString();
                                value = value.split(/(?=(?:...)*$)/);
                                value = value.join(',');
                                return value;
                            }
                        }
                    }],
                    yAxes: [{
                        display: true,
                        ticks: {
                            suggestedMin: 0
                        },
                        gridLines: {
                            color: "rgba(0, 0, 0, 0)"
                        }
                    }]
                },
                tooltips: false,
                legend: {
                    display: false,
                    labels: {
                        fontSize: 12
                    }
                },
                hover: {
                    animationDuration: 0
                },
                animation: {
                    duration: 0,
                    onComplete: function() {
                        let chartInstance = this.chart,
                            ctx = chartInstance.ctx;
                        ctx.textAlign = 'center';
                        ctx.textBaseline = 'bottom';
                        // ctx.font = ctx.font.replace(/\d+px/, "7px");
                        this.data.datasets.forEach(function(dataset, i) {
                            let meta = chartInstance.controller.getDatasetMeta(i);
                            meta.data.forEach(function(bar, index) {
                                let data = dataset.data[index];
                                data = parseFloat(data).toLocaleString();
                                ctx.fillText(data, bar._model.x + 20, bar._model.y + 8);
                            });
                        });
                    }
                }
            }
        });
        
        // CHART 4 REGIONAL
        
        var dbRegsMap = JSON.parse('<?php echo $regional_yield_geocoded; ?>');

        let mapDataR = [];
        
        for (i = 0; i < dbRegsMap.length; i++) {
            var gc = dbRegsMap[i].map_ID;
            var value = parseFloat(dbRegsMap[i].value);

            var fill_color = "";
            if (value > scalesC[1].minValue) {
                fill_color = "secoQ";
            } else if (value > scalesC[0].minValue) {
                fill_color = "firsQ";
            }

            mapDataR[gc] = {
                Location_name: dbRegsMap[i].location_name,
                Year: dbRegsMap[i].year,
                Value: parseFloat(dbRegsMap[i].value).toLocaleString(),
                fillKey: fill_color
            };
        }

        var map = new Datamap({
            element: document.getElementById('phl-reg'),
            geographyConfig: {
                popupOnHover: true,
                highlightOnHover: true,
                dataUrl: '<?php echo base_url(); ?>js/phl.topo.json',
                borderColor: '#000000',
                highlightFillColor: '#92cddc',
                highlightBorderColor: 'rgba(37, 42, 45, 0.8)',
                popupTemplate: function(geography, data) {
                    return '<div class="hoverinfo"><strong>' + data.Location_name +
                        ': ' + numberWithCommas(data.Value) + ' mt (' + data.Year + ')</strong></div>';
                },
            },
            scope: 'phl',
            fills: {
                firsQ: 'rgba(42,140,184,0.8)',
                secoQ: 'rgba(41,107,54,0.8)',
                thirQ: 'rgba(15,40,184,0.8)',
                fourQ: 'rgba(24,132,184,0.8)',
                defaultFill: 'rgba(0, 0, 0, 0.5)'
            },
            data: mapDataR,
            setProjection: function(element) {
                var projection = d3.geo.mercator()
                    .center([121.7740, 12.8797])
                    .scale(2800)
                    .translate([element.offsetWidth / 2, element.offsetHeight / 2]);

                var path = d3.geo.path().projection(projection);
                return {
                    path: path,
                    projection: projection
                };
            }
        });
        
        var dbRegs = JSON.parse('<?php echo $regional_yield_all; ?>');

        let regions = [];
        let valuesR = [];
        let bgColorsR = [];

        try {
            dbRegs.map((item) => {
                regions.push(item.location_name);
                valuesR.push(item.value);
                var val = parseFloat(item.value);
                if (val > scalesC[1].minValue) {
                    fill_color = "rgba(41,107,54,1)";
                } else if (val > scalesC[0].minValue) {
                    fill_color = "rgba(42,140,184,1)";
                }
                bgColorsR.push(fill_color);
            });
        } catch (error) {
            console.log(error);
        }

        var tempPrLabelsR = [...regions];
        var topRegData = [...valuesR];
        var topRegColor = [...bgColorsR];

        var topReg = document.getElementById('ctxRegional').getContext('2d');
        var topRegChart = new Chart(topReg, {
            // The type of chart we want to create
            type: 'horizontalBar',

            data: {
                labels: tempPrLabelsR,
                datasets: [{
                    label: 'Total palay produced',
                    backgroundColor: topRegColor, // COLOR 4
                    borderColor: topRegColor, // COLOR 4
                    data: topRegData
                }]
            },

            options: {
                layout: {
                padding: {
                        right: 80
                    }
                },
                aspectRatio: 0.55,
                scales: {
                    xAxes: [{
                        display: true,
                        ticks: {
                            userCallback: function(value, index, values) {
                                value = value.toString();
                                value = value.split(/(?=(?:...)*$)/);
                                value = value.join(',');
                                return value;
                            }
                        }
                    }],
                    yAxes: [{
                        display: true,
                        ticks: {
                            suggestedMin: 0
                        },
                        gridLines: {
                            color: "rgba(0, 0, 0, 0)"
                        }
                    }]
                },
                tooltips: false,
                legend: {
                    display: false,
                    labels: {
                        fontSize: 12
                    }
                },
                hover: {
                    animationDuration: 0
                },
                animation: {
                    duration: 0,
                    onComplete: function() {
                        let chartInstance = this.chart,
                            ctx = chartInstance.ctx;
                        ctx.textAlign = 'center';
                        ctx.textBaseline = 'bottom';
                        // ctx.font = ctx.font.replace(/\d+px/, "7px");
                        this.data.datasets.forEach(function(dataset, i) {
                            let meta = chartInstance.controller.getDatasetMeta(i);
                            meta.data.forEach(function(bar, index) {
                                let data = dataset.data[index];
                                data = parseFloat(data).toLocaleString();
                                ctx.fillText(data, bar._model.x + 20, bar._model.y + 8);
                            });
                        });
                    }
                }
            }
        });
    </script>
</body>

</html>
