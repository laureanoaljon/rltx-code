<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Value of Production</title>
    <meta name="description" content="Production Charts">
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
  function gtag(){dataLayer.push(arguments);}
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
          <a class="btn btn-warning mr-2 text-white" href="<?php echo base_url(); ?>main/region/<?php echo $id; ?>" role="button"><i class="bi bi-caret-left"></i> Back to Main</a>
    </nav>

    <!-- Header --->
    <div id="valuation" class="jumbotron text-center">
        <div class="jumbotron-content">
            <h2>State of the Rice Sector in <?php echo $latest_palay_valuation['location_name'];?></h2>
            <h1>Value of Production</h1>
            <p class="lead"><i>How much does the rice farming sector contribute to recgional agricultural account?</i> <br />Learn the value of rice production, and its share in the overall value of rice production,<br /> its share in the GVA of agriculture, forestry, and fishing, and its portion in the National Gross Domestic Product.</p>
        </div>
    </div>


    <!-- Body -->
    <div class="sublevel">
        <div class="row">
                        <div class="col-5 pl-1">
                            <div class="card primary mb-4 bg-primary text-white">
                                <div class="card-body">
                                    <h5 class="card-title pb-2" style="margin-bottom: 10px;">Regional Value of Rice Production (2020)</h5>
                                    <h1 class="card-text font-weight-bold text-center">P <?php echo number_format($latest_palay_valuation['value'] / 1000, 2); ?><i class="<?php echo $pv_caret; ?>"></i></h1>
                                    <div class="card-note w-25 mx-auto rounded-pill bg-warning text-center">
                                        <p class="text-white">billion pesos</p>
                                    </div>
                                    <div style="margin-top: 10px; margin-bottom: 10px;">
                                        <p class="text-white text-center">at 2018 constant prices</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-7 pr-1">
                            <div class="card primary mb-4 bg-alternate">
                                <div class="card-body">
                                    <div class="row text-center">
                                        <div class="col-6 border-right">
                                            <h5 class="card-title">Regional Value of Agricultural Production (2020)</h5>
                                            <h1 class="card-text font-weight-bold mt-3">P <?php echo number_format($latest_agri_valuation['value'] / 1000, 2); ?><i class="<?php echo $agri_caret; ?>"></i></h1>
                                            <div class="card-note w-50 mx-auto rounded-pill bg-primary">
                                                <p class="text-white">billion</p>
                                            </div>
                                            <div>
                                                <p class="text-white">at 2018 constant prices</p>
                                            </div>
                                        </div>
                                        <div class="col-6 pl-4">
                                            <div class="row d-flex align-items-center h-100">
                                                <div class="col-5">
                                                    <h5 class="card-title m-0 p-0">Percent Share of Regional Rice Production (2020)</h5>
                                                </div>
                                                <div class="col-7"><canvas id="ctxPercentShare"></canvas></div>
                                            </div>
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
                        <h5 class="my-0 pt-2 pb-2">Regional Value of Rice and Agricultural Production in <?php echo $latest_palay_valuation['location_name'];?> (<?php echo $year_start; ?>-2020)</h5>
                        <p class="my-0 font-weight-normal text-muted">In Billion Pesos, At Constant 2018 Prices (PSA, 2021)</p>
                    </div>
                    <div class="card-body mt-4">
                        <div><canvas id="ctxAgriSector"></canvas></div>
                    </div>
                    <div class="card-footer text-muted">
	Data Source: <a href="https://openstat.psa.gov.ph/PXWeb/pxweb/en/DB/DB__2B__AA__VP__NA/0012B5FVOP1.px/?rxid=2533f456-0336-41c3-a072-945813ce4ac4" target="_blank">Palay and Agriculture and Fisheries: Value of Production in Philippine Agriculture and Fisheries, Philippines and Regions - Philippine Statistics Authority</a>
</div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card mb-4">
                    <div class="card-header text-left">
<a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a>
                        <h5 class="my-0 pt-2 pb-2">Share of Regional Rice Production Value to Regional Agricultural Production Value in <?php echo $latest_palay_valuation['location_name'];?> (<?php echo $year_start; ?>-2020)</h5>
                        <p class="my-0 font-weight-normal text-muted">At Constant 2018 Prices (PSA, 2021)</p>
                    </div>
                    <div class="card-body">
                        <div><canvas id="ctxAgriShare"></canvas></div>
                    </div>
                    <div class="card-footer text-muted">
	Data Source: <a href="https://openstat.psa.gov.ph/PXWeb/pxweb/en/DB/DB__2B__AA__VP__NA/0012B5FVOP1.px/?rxid=2533f456-0336-41c3-a072-945813ce4ac4" target="_blank">Palay and Agriculture and Fisheries: Value of Production in Philippine Agriculture and Fisheries, Philippines and Regions - Philippine Statistics Authority</a>
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
	<script type="text/javascript" src="<?php echo base_url(); ?>js/custom.js"></script>
    <script>
        var sidebarjs = new SidebarJS.SidebarElement();
    Chart.pluginService.register({
            beforeDraw: function(chart) {
                if (chart.config.options.elements.center) {
                    // Get ctx from string
                    var ctx = chart.chart.ctx;

                    // Get options from the center object in options
                    var centerConfig = chart.config.options.elements.center;
                    var fontStyle = centerConfig.fontStyle || 'Arial';
                    var txt = centerConfig.text;
                    var color = centerConfig.color || '#000';
                    var maxFontSize = centerConfig.maxFontSize || 75;
                    var sidePadding = centerConfig.sidePadding || 20;
                    var sidePaddingCalculated = (sidePadding / 100) * (chart.innerRadius * 2)
                    // Start with a base font of 30px
                    ctx.font = "30px " + fontStyle;

                    // Get the width of the string and also the width of the element minus 10 to give it 5px side padding
                    var stringWidth = ctx.measureText(txt).width;
                    var elementWidth = (chart.innerRadius * 2) - sidePaddingCalculated;

                    // Find out how much the font can grow in width.
                    var widthRatio = elementWidth / stringWidth;
                    var newFontSize = Math.floor(30 * widthRatio);
                    var elementHeight = (chart.innerRadius * 2);

                    // Pick a new font size so it will not be larger than the height of label.
                    var fontSizeToUse = Math.min(newFontSize, elementHeight, maxFontSize);
                    var minFontSize = centerConfig.minFontSize;
                    var lineHeight = centerConfig.lineHeight || 25;
                    var wrapText = false;

                    if (minFontSize === undefined) {
                        minFontSize = 20;
                    }

                    if (minFontSize && fontSizeToUse < minFontSize) {
                        fontSizeToUse = minFontSize;
                        wrapText = true;
                    }

                    // Set font settings to draw it correctly.
                    ctx.textAlign = 'center';
                    ctx.textBaseline = 'middle';
                    var centerX = ((chart.chartArea.left + chart.chartArea.right) / 2);
                    var centerY = ((chart.chartArea.top + chart.chartArea.bottom) / 2);
                    ctx.font = fontSizeToUse + "px " + fontStyle;
                    ctx.fillStyle = color;

                    if (!wrapText) {
                        ctx.fillText(txt, centerX, centerY);
                        return;
                    }

                    var words = txt.split(' ');
                    var line = '';
                    var lines = [];

                    // Break words up into multiple lines if necessary
                    for (var n = 0; n < words.length; n++) {
                        var testLine = line + words[n] + ' ';
                        var metrics = ctx.measureText(testLine);
                        var testWidth = metrics.width;
                        if (testWidth > elementWidth && n > 0) {
                            lines.push(line);
                            line = words[n] + ' ';
                        } else {
                            line = testLine;
                        }
                    }

                    // Move the center up depending on line height and number of lines
                    centerY -= (lines.length / 2) * lineHeight;

                    for (var n = 0; n < lines.length; n++) {
                        ctx.fillText(lines[n], centerX, centerY);
                        centerY += lineHeight;
                    }
                    //Draw text in center
                    ctx.fillText(line, centerX, centerY);
                }
            }
        });
        Chart.defaults.global.responsive = true;
        Chart.defaults.global.tooltips.mode = 'index';
        Chart.defaults.global.tooltips.intersect = false;
        Chart.defaults.global.defaultFontFamily = 'Poppins';
        Chart.defaults.global.defaultFontSize = 13;
        Chart.defaults.global.animation.duration = 3000;
        Chart.defaults.global.defaultFontColor = "#000000";
        // CHART 1

        var dbPalay = JSON.parse('<?php echo $palay_valuation_yearly; ?>');
        var dbAgri = JSON.parse('<?php echo $agri_valuation_yearly; ?>');

        let years = [];
        let values_palay = [];
        let values_agri = [];

        try {
            dbPalay.map((item) => {
                years.push(item.year);
                values_palay.push(item.value);
            });
            dbAgri.map((item) => {
                values_agri.push(item.value);
            });
        } catch (error) {
            console.log(error);
        }

        var agriSector = document.getElementById('ctxAgriSector').getContext('2d');
        var tempAgriLabels = [...years];
        var agriSecData = [...values_agri];
        var riceSecData = [...values_palay];
        var agriSectorChart = new Chart(agriSector, {
            // The type of chart we want to create
            type: 'line',

            // The data for our dataset
            data: {
                labels: tempAgriLabels,
                datasets: [{
                        label: 'Rice Production',
                        backgroundColor: '#2138B7', // COLOR 1
                        borderColor: '#2138B7', // COLOR 1
                        lineTension: 0,
                        data: riceSecData
                    },
                    {
                        label: 'Agricultural Production',
                        backgroundColor: '#007FFE', // COLOR 2
                        borderColor: '#007FFE', // COLOR 2
                        lineTension: 0,
                        data: agriSecData
                    },
                ]
            },

            // Configuration options go here
            options: {
                aspectRatio: 2.5,
                elements: {
                    point: {
                        radius: 2
                    }
                },
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
                            callback: function(value) {
                                return value.toLocaleString(); 
                            }
                        }
                    }]
                },
                legend: {
                    position: 'top'
                },
                tooltips: {
                    callbacks: {
                      label: function (tooltipItem, data) {
                        var tooltipValue = data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index];
                        return data.datasets[tooltipItem.datasetIndex].label + ": " + parseInt(tooltipValue).toLocaleString();
                      }
                    }
                }
            }
        });

        // CHART 2

        var dbAgriSh = JSON.parse('<?php echo $agri_valuation_share; ?>');
        var dbTotalSh = JSON.parse('<?php echo $total_valuation_share; ?>');

        let shares_years = [];
        let shares_agri = [];
        let shares_total = [];

        try {
            dbAgriSh.map((item) => {
                shares_years.push(item.year);
                shares_agri.push(item.value);
            });
            dbTotalSh.map((item) => {
                shares_total.push(item.value);
            });
        } catch (error) {
            console.log(error);
        }

        var agriShare = document.getElementById('ctxAgriShare').getContext('2d');
        var tempShareLabels = [...shares_years];
        var agriShareData = [...shares_agri];
        var totalShareData = [...shares_total];
        var agriShareChart = new Chart(agriShare, {
            // The type of chart we want to create
            type: 'bar',

            // The data for our dataset
            data: {
                labels: tempShareLabels,
                datasets: [{
                    label: 'Agriculture value share',
                    backgroundColor: '#007FFE', // COLOR 2
                    borderColor: '#007FFE', // COLOR 2
                    data: agriShareData
                }]
            },

            // Configuration options go here
            options: {
                aspectRatio: 2.5,
                elements: {
                    point: {
                        radius: 2
                    }
                },
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
                            suggestedMax: 60
                        }
                    }]
                },
                tooltips: false,
                legend: {
                    display: false,
                    onClick: (e) => e.stopPropagation(),
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
                        this.data.datasets.forEach(function(dataset, i){
                            let meta = chartInstance.controller.getDatasetMeta(i);
                            meta.data.forEach(function(bar, index) {
                            let data = dataset.data[index];
                            ctx.fillStyle = '#ffffff';
                            data = parseInt(data).toLocaleString() + '%';
                            ctx.fillText(data, bar._model.x + 0 , bar._model.y + 20);
                            });
                        });
                      }
                  }
            }
        });
        
        var Org = JSON.parse('<?php echo $latest_palay_agri_share['value']; ?>');
        var NonOrg = JSON.parse('<?php echo $latest_nonpalay_agri_share; ?>');

        // CHART 1

        var ctx = document.getElementById("ctxPercentShare");
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                datasets: [{
                    data: [Org, NonOrg],
                    backgroundColor: [
                        '#2138b7', // COLOR 1
                        '#f8f8f8' // COLOR 2
                    ],
                    borderColor: [
                        '#2138b7', // COLOR 1
                        '#f8f8f8' // COLOR 2
                    ]
                }]
            },
            options: {
                cutoutPercentage: 60,
                aspectRatio: 1.2,
                legend: {
                    display: false
                },
                layout: {
                    padding: {
                        bottom: 2
                    }
                },
                responsive: true,
                maintainAspectRatio: true,
                plugins: {
                    labels: false
                },
                elements: {
                    center: {
                        text: Org + '%',
                        color: '#2138b7',
                        fontStyle: 'Poppins',
                        sidePadding: 20,
                        minFontSize: 12,
                        lineHeight: 25
                    }
                },
                tooltips: {
                    enabled: false
                }
            }
        });

    </script>
</body>

</html>
