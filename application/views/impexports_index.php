<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Imports and Exports</title>
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
                        <a class="btn btn-warning mr-2 text-white" href="<?php echo base_url(); ?>" role="button"><i class="bi bi-caret-left"></i> Back to Main</a>
                    </nav>

                    <!-- Header --->
                    <div id="imports" class="jumbotron text-center">
                        <div class="jumbotron-content">
                            <h2>State of the Rice Sector in the Philippines</h2>
                            <h1>Imports and Exports</h1>
                            <p class="lead"><i>How much rice do import and export?</i> Find out the country’s yearly rice importation and exportation<br /> information, as well as the percentage share of imported and locally produced rice to the total supply.</p>
                        </div>
                    </div>

                    <!-- Body -->
                    <div class="sublevel">
                        <div class="row">
                            <div class="col">
                                <div class="card-deck mb-2 text-center">
                                    <div class="card primary mb-4 bg-primary text-white">
                                        <div class="card-body">
                                            <h5 class="card-title pb-2">Total Imports (2020)</h5>
                                            <h1 class="card-text font-weight-bold"><?php echo number_format($supply_sources_values['SUImports'] / 1000, 2); ?><i class="bi bi-caret-down-fill"></i></h1>
                                            <div class="card-note bg-warning w-50 mx-auto rounded-pill">
                                                <p class="text-white">million metric tons</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card primary mb-4 bg-primary text-white">
                                        <div class="card-body">
                                            <h5 class="card-title pb-2">Total Exports (2020)</h5>
                                            <h1 class="card-text font-weight-bold">&lt; 1,000 <i class="bi bi-dash"></i></h1>
                                            <div class="card-note bg-warning w-25 mx-auto rounded-pill">
                                                <p class="text-white">metric tons</p>
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
                                        <h5 class="my-0 pt-2 pb-2">Rice Imports and Exports (2000-2020)</h5>
                                        <p class="my-0 font-weight-normal text-muted">in thousand metric tons ('000) (PSA, 2021)</p>
                                    </div>
                                    <div class="card-body mt-4 mb-4">
                                        <div><canvas id="ctxImports"></canvas></div>
                                    </div>
                                    <div class="card-footer text-muted">Note: Exports is at &lt; 1,000 metric tons except for 2008 at 1,000 tons and 2013 at 2,000 tons.<br/>
	Data Source: <a href="https://openstat.psa.gov.ph/PXWeb/pxweb/en/DB/DB__2B__AA__SU/0012B5FSUA0.px/?rxid=6c040b24-38b8-42c7-84a6-881d5b00f633" target="_blank">Rice and Corn: Supply Utilization Accounts  - Philippine Statistics Authority</a>
</div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card mb-4">
                                    <div class="card-header text-left">
                                        
<a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a>
                                        <h5 class="my-0 pt-2 pb-2">Sources of Rice Imports by Country of Origin (2020)</h5>
                                        <p class="my-0 font-weight-normal text-muted">in percent (PSA, 2021) </p>
                                    </div>
                                    <div class="card-body">
                                        <div><canvas id="ctxImportSources"></canvas></div>
                                    </div>
                                    <div class="card-footer text-muted">Note: Other countries include Pakistan, Korea, Taiwan, Cambodia, Japan, Italy, Bangladesh, and Spain.<br/>
	Data Source: <a href="https://palaystat.philrice.gov.ph/statistics/retrieve/table/16" target="_blank">Quantity and value of imports, by country of origin - PalayStat System</a>
</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="card mb-4">
                                    <div class="card-header text-left">
                                        
<a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a>
                                        <h5 class="my-0 pt-2 pb-2">Percentage Share of Rice Imports and Local Production to Total Supply (2000-2020)</h5>
                                        <p class="my-0 font-weight-normal text-muted">Excluding beginning stocks (PSA, 2021)</p>
                                    </div>
                                    <div class="card-body">
                                        <div><canvas id="ctxImportLocal"></canvas></div>
                                    </div>
                                    <div class="card-footer text-muted">
	Data Source: <a href="https://openstat.psa.gov.ph/PXWeb/pxweb/en/DB/DB__2B__AA__SU/0012B5FSUA0.px/?rxid=6c040b24-38b8-42c7-84a6-881d5b00f633" target="_blank">Rice and Corn: Supply Utilization Accounts  - Philippine Statistics Authority</a>
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
            Chart.defaults.global.responsive = true;
            Chart.defaults.global.tooltips.mode = 'index';
            Chart.defaults.global.tooltips.intersect = false;
            Chart.defaults.global.defaultFontFamily = 'Poppins';
            Chart.defaults.global.defaultFontSize = 13;
            Chart.defaults.global.animation.duration = 3000;
            Chart.defaults.global.defaultFontColor = "#000000";
                    
            var dbSupplySources = JSON.parse('<?php echo $supply_sources_yearly; ?>');
            var dbUseAccounts = JSON.parse('<?php echo $util_accounts_yearly; ?>');
            
            var curProduce = '<?php echo $supply_sources_values['SUProduction']; ?>';
            var curImports = '<?php echo $supply_sources_values['SUImports']; ?>';
            var curExports = '<?php echo $util_accounts_values['UTExports']; ?>';

            let years = [];
            let locals = [];
            let imports = [];
            let exports = [];
            let localsp = [];
            let importsp = [];

            try {
              dbSupplySources.map((item) => {
                years.push(item.year);
                locals.push(item.SUProduction);
                imports.push(item.SUImports);
                total = parseInt(item.SUProduction) + parseInt(item.SUImports);
                localpc = ((item.SUProduction / total) * 100);
                importspc = ((item.SUImports / total) * 100);
                localsp.push(localpc.toFixed(0));
                importsp.push(importspc.toFixed(0));
              });
              dbUseAccounts.map((item) => {
                exports.push(item.UTExports);
              });
            } catch (error) {
              console.log(error);
            }
            
            var yearsLab = [...years];
            var totalProduce = [...locals];
            var totalImports = [...imports];
            var totalExports = [...exports];
            var totalProduceP = [...localsp];
            var totalImportsP = [...importsp];
            
            var importsC = document.getElementById('ctxImports').getContext('2d');
            
            var importsChart = new Chart(importsC, {
            // The type of chart we want to create
            type: 'line',

            // The data for our dataset
            data: {
                labels: yearsLab,
                datasets: [{
                        label: 'Rice Imports',
                        backgroundColor: '#007FFE',    // COLOR 1
                        borderColor: '#007FFE',        // COLOR 1
                        lineTension: 0,
                        fill: false,
                        data: totalImports
                    },{
                        label: 'Rice Exports',
                        backgroundColor: '#A6CEE3',    // COLOR 2
                        borderColor: '#A6CEE3',        // COLOR 2
                        lineTension: 0,
                        fill: false,
                        data: totalExports
                    }
                ]
            },

            // Configuration options go here
            options: {
                    aspectRatio: 2.02,
                    elements: {
                        point:{
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
                                userCallback: function(value, index, values) {
                                    value = value.toString();
                                    value = value.split(/(?=(?:...)*$)/);
                                    value = value.join(',');
                                    return value;
                                }
                            }
                        }]
                    },
                    legend: {
                        position: 'top'
                    }
                }
            });
            
            // CHART 2

            var tsVietnam = 85;
            var tsMyanmar = 7;
            var tsThailand = 4;
            var tsChina = 2;
            var tsIndia = 1;
            var tsOthers = 1;

            var ctx = document.getElementById("ctxImportSources");
            var myChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: ['Vietnam', 'Myanmar', 'Thailand', 'China', 'India', 'Other Countries'],
                    datasets: [{
                        data: [tsVietnam, tsMyanmar, tsThailand, tsChina, tsIndia, tsOthers],
                        backgroundColor: [
                            '#d3241c', // COLOR 1
                            '#34b233', // COLOR 2
                            '#2d2a4a', // COLOR 3
                            '#f7f700', // COLOR 4
                            '#ff9933', // COLOR 4
                            '#007ffe' // COLOR 4
                        ],
                        borderColor: [
                            '#d3241c', // COLOR 1
                            '#34b233', // COLOR 2
                            '#2d2a4a', // COLOR 3
                            '#f7f700', // COLOR 4
                            '#ff9933', // COLOR 4
                            '#007ffe' // COLOR 4
                        ]
                    }]
                },
                options: {
                    aspectRatio: 1.7,
                    legend: {
                        position: 'right',
                         onClick: (e) => e.stopPropagation(),
                    },
                    layout: {
                        padding: 10
                    },
                    tooltips: {
                      callbacks: {
                        label: function(tooltipItem, data) {
                          return data['labels'][tooltipItem['index']] + ': ' + data['datasets'][0]['data'][tooltipItem['index']] + '%';
                        }
                      }
                    }
                }
            })
            
            var ImportLocal = document.getElementById('ctxImportLocal').getContext('2d');
            
            var ImportLocalChart = new Chart(ImportLocal, {
            // The type of chart we want to create
            type: 'bar',

            // The data for our dataset
            data: {
                labels: yearsLab,
                datasets: [{
                    label: 'Locally Produced Rice',
                    backgroundColor: '#007FFE',   // COLOR 1
                    borderColor: '#007FFE',       // COLOR 1
                    lineTension: 0,
                    fill: true,
                    data: totalProduceP
                },{
                    label: 'Imported Rice',
                    backgroundColor: '#A6CEE3',    // COLOR 2
                    borderColor: '#A6CEE3',        // COLOR 2
                    lineTension: 0,
                    fill: true,
                    data: totalImportsP
                }]
            },

            // Configuration options go here
            options: {
                    aspectRatio: 2.5,
                    elements: {
                        point:{
                            radius: 2
                        }
                    },
                    scales: {
                        xAxes: [{
                            stacked: true,
                            display: true,
                            gridLines: {
                                color: "rgba(0, 0, 0, 0)"
                            }  
                        }],
                        yAxes: [{
                            stacked: true,
                            display: false,
                            ticks: {
                                suggestedMin: 0,
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
                            if(dataset.label == 'Imported Rice' ){
                                let meta = chartInstance.controller.getDatasetMeta(i);
                                meta.data.forEach(function(bar, index) {
                                let data = dataset.data[index];
                                ctx.fillStyle = '#000000';
                                data = parseInt(data).toLocaleString() + "%";
                                ctx.fillText(data, bar._model.x + 0 , bar._model.y + 16);
                                });
                          }
                            else {
                              let meta = chartInstance.controller.getDatasetMeta(i);
                              meta.data.forEach(function(bar, index) {
                              let data = dataset.data[index];
                              ctx.fillStyle = '#ffffff';
                              data = parseInt(data).toLocaleString() + "%";
                              ctx.fillText(data, bar._model.x + 0 , bar._model.y + 16);
                              });
                          }
                            
                        });
                      }
                  }   
                }
            });

        </script>
    </body>
</html>