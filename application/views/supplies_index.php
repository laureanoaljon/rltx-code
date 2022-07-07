<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Supply and Utilization</title>
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
                    <div id="supply" class="jumbotron text-center">
                        <div class="jumbotron-content">
                            <h2>State of the Rice Sector in the Philippines</h2>
                            <h1>Supply and Utilization</h1>
                            <p class="lead"><i>How much rice supply do we attain and utilize?</i> Know the total supply versus <br />utilization per year, as well as the rice supply sources and utilization accounts.</p>
                        </div>
                    </div>

                    <!-- Body -->
                    <div class="sublevel">
                        <div class="row">
                            <div class="col">
                                <div class="card-deck mb-2 text-center">
                                    <div class="card primary mb-4 bg-primary text-white">
                                        <div class="card-body">
                                            <h5 class="card-title pb-2">Total Supply (2020)</h5>
                                            <h1 class="card-text font-weight-bold"><?php echo number_format($supply['value'] / 1000, 2); ?><i class="<?php echo $sup_caret; ?>"></i></h1>
                                            <div class="card-note w-50 mx-auto rounded-pill bg-warning">
                                                <p class="text-white">million metric tons</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card primary mb-4 bg-primary text-white">
                                        <div class="card-body">
                                            <h5 class="card-title pb-2">Total Utilization (2020)</h5>
                                            <h1 class="card-text font-weight-bold"><?php echo number_format($util['value'] / 1000, 2);?><i class="<?php echo $util_caret; ?>"></i></h1>
                                            <div class="card-note w-50 mx-auto rounded-pill bg-warning">
                                                <p class="text-white">million metric tons</p>
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
                                        <h5 class="my-0 pt-2 pb-2">Total Supply and Utilization (2000-2020)</h5>
                                        <p class="my-0 font-weight-normal text-muted">in million metric tons (PSA, 2021)</p>
                                    </div>
                                    <div class="card-body">
                                        <div><canvas id="ctxSupply"></canvas></div>
                                    </div>
                                    <div class="card-footer text-muted">
	Data Source: <a href="https://openstat.psa.gov.ph/PXWeb/pxweb/en/DB/DB__2B__AA__SU/0012B5FSUA0.px/?rxid=6c040b24-38b8-42c7-84a6-881d5b00f633" target="_blank">Rice and Corn: Supply Utilization Accounts  - Philippine Statistics Authority</a>
</div>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="card mb-4">
                                    <div class="card-header text-left">
<a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a>
                                        <h5 class="my-0 pt-2 pb-2">Distribution of Total Supply (2000-2020)</h5>
                                        <p class="my-0 font-weight-normal text-muted">in million metric tons (PSA, 2021)</p>
                                    </div>
                                    <div class="card-body">
                                        <div><canvas id="ctxSupplyStack"></canvas></div>
                                    </div>
                                    <div class="card-footer text-muted">
	Data Source: <a href="https://openstat.psa.gov.ph/PXWeb/pxweb/en/DB/DB__2B__AA__SU/0012B5FSUA0.px/?rxid=6c040b24-38b8-42c7-84a6-881d5b00f633" target="_blank">Rice and Corn: Supply Utilization Accounts  - Philippine Statistics Authority</a>
</div>

                                </div>
                            </div>
			</div>
			<div class="row">
                            <div class="col">
                                <div class="card mb-4">
                                    <div class="card-header text-left">
<a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a>
                                        <h5 class="my-0 pt-2 pb-2">Distribution of Total Utilization (2000-2020)</h5>
                                        <p class="my-0 font-weight-normal text-muted">in million metric tons (PSA, 2021)</p>
                                    </div>
                                    <div class="card-body">
                                        <div><canvas id="ctxUtilStack"></canvas></div>
                                    </div>
                                    <div class="card-footer text-muted"></div>
                                    <div class="card-footer text-muted">Note: Excluding exports in utilization accounts <br/>
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
            Chart.defaults.global.defaultFontSize = 12;
            Chart.defaults.global.animation.duration = 3000;
            Chart.defaults.global.defaultFontColor = "#000000";
                    
            var dbTotalSupply = JSON.parse('<?php echo $total_supply; ?>');
            var dbTotalUtil = JSON.parse('<?php echo $total_utilization; ?>');
            var dbSupplySources = JSON.parse('<?php echo $supply_sources_yearly; ?>');
            var dbUseAccounts = JSON.parse('<?php echo $util_accounts_yearly; ?>');
            
            var curStocks = '<?php echo $supply_sources_values['SUBeginningStocks']; ?>';
            var curProduce = '<?php echo $supply_sources_values['SUProduction']; ?>';
            var curImports = '<?php echo $supply_sources_values['SUImports']; ?>';
            var curExports = '<?php echo $util_accounts_values['UTExports']; ?>';
            var curSeeds = '<?php echo $util_accounts_values['UTSeeds']; ?>';
            var curFeedWastes = '<?php echo $util_accounts_values['UTFeedsWaste']; ?>';
            var curProcessing = '<?php echo $util_accounts_values['UTProcessing']; ?>';
            var curEndStocks = '<?php echo $util_accounts_values['UTEndingStocks']; ?>';
            var curFood = '<?php echo $util_accounts_values['uttotalnet']; ?>';

            let years = [];
            let years_act = [];
            let supplies = [];
            let utils = [];
            let stocks = [];
            let locals = [];
            let imports = [];
            let exports = [];
            let seeds = [];
            let feedswastes = [];
            let processing = [];
            let endstocks = [];
            let food = [];

            try {
              dbTotalSupply.map((item) => {
                years.push(item.year);
                supplies.push(item.value);
              });
              dbTotalUtil.map((item) => {
                utils.push(item.value);
              });
              dbSupplySources.map((item) => {
                stocks.push(item.SUBeginningStocks);
                locals.push(item.SUProduction);
                imports.push(item.SUImports);
              });
              dbUseAccounts.map((item) => {
                exports.push(item.UTExports);
                seeds.push(item.UTSeeds);
                feedswastes.push(item.UTFeedsWaste);
                processing.push(item.UTProcessing);
                endstocks.push(item.UTEndingStocks);
                food.push(item.uttotalnet);
              });
            } catch (error) {
              console.log(error);
            }
            
            var yearsLab = [...years];
            var yearsLabAct = [...years_act];
            var totalSupply = [...supplies];
            var totalUse = [...utils];
            var totalStocks = [...stocks];
            var totalProduce = [...locals];
            var totalImports = [...imports];
            var totalExports = [...exports];
            var totalSeeds = [...seeds];
            var totalFeedsWastes = [...feedswastes];
            var totalProcessing = [...processing];
            var totalEndStocks = [...endstocks];
            var totalFood = [...food];          

            /**
            ctxSupply
            ctxUtil 
            */
            
            var SupplyUse = document.getElementById('ctxSupply').getContext('2d');
                    
            var SupplyUseChart = new Chart(SupplyUse, {
            // The type of chart we want to create
            type: 'line',

            // The data for our dataset
            data: {
                labels: yearsLab,
                datasets: [{
                    label: 'Total Supply',
                    backgroundColor: '#A6CEE3',   // COLOR 1
                    borderColor: '#A6CEE3',       // COLOR 1
                    lineTension: 0,
                    fill: false,
                    data: totalSupply
                },{
                    label: 'Total Utilization',
                    backgroundColor: '#007FFE',    // COLOR 2
                    borderColor: '#007FFE',        // COLOR 2
                    lineTension: 0,
                    fill: false,
                    data: totalUse
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
                            display: true,
                            gridLines: {
                                color: "rgba(0, 0, 0, 0)"
                            }  
                        }],
                        yAxes: [{
                            display: true,
                            ticks: {
                                suggestedMin: 0,
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
                          ctx.fillStyle = '#1e1e1e';

                          this.data.datasets.forEach(function(dataset, i)
                                                     {
                            let meta = chartInstance.controller.getDatasetMeta(i);
                            meta.data.forEach(function(bar, index) {
                              let data = dataset.data[index];
                              ctx.fillText(data, bar._model.x + 0 , bar._model.y + -5);
                            });
                          });
                        }
                         }   
                }
            });
                
            var SupplyStack = document.getElementById('ctxSupplyStack').getContext('2d');

            var SupplyStackChart = new Chart(SupplyStack, {

                type: 'bar',

                data: {
                    labels: yearsLab,
                    datasets: [                        
                    {
                        label: 'Local Production',   
                        backgroundColor: '#2037B4',      // COLOR 2
                        borderColor: '#2037B4',          // COLOR 2
                        data: totalProduce
                    },
                    {
                        label: 'Beginning Stocks',
                        backgroundColor: '#FE8100',    // COLOR 1
                        borderColor: '#FE8100',        // COLOR 1
                        data: totalStocks
                    },
                    {
                        label: 'Imports',
                        backgroundColor: '#A2C5AC',   // COLOR 3
                        borderColor: '#A2C5AC',       // COLOR 3
                        data: totalImports
                    }]
                },

                options: {
                    aspectRatio: 2.5,
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
                            display: true
                        }]
                    },
                    legend: {
                        position: 'top'
                    },
                    datalabels: {
                        display: false
                    },
                    plugins: {
                       labels: false
                    }
                }
            });
                    
            var UtilStack = document.getElementById('ctxUtilStack').getContext('2d');

            var ctxUtilStackChart = new Chart(UtilStack, {

                type: 'bar',

                data: {
                    labels: yearsLab,
                    datasets: [                        
                    {
                        label: 'Seeds',   
                        backgroundColor: '#00FE7F',      // COLOR 2
                        borderColor: '#00FE7F',          // COLOR 2
                        data: totalSeeds
                    },
                    {
                        label: 'Feeds/Wastes',   
                        backgroundColor: '#FE0000',      // COLOR 2
                        borderColor: '#FE0000',          // COLOR 2
                        data: totalFeedsWastes
                    },
                    {
                        label: 'Processing',   
                        backgroundColor: '#04C5AC',      // COLOR 2
                        borderColor: '#04C5AC',          // COLOR 2
                        data: totalProcessing
                    },
                    {
                        label: 'Net Food Disposable',
                        backgroundColor: '#2037B4',   // COLOR 3
                        borderColor: '#2037B4',       // COLOR 3
                        data: totalFood
                    }]
                },

                options: {
                    aspectRatio: 2.5,
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
                            display: true
                        }]
                    },
                    legend: {
                        position: 'top'
                    },
                    plugins: {
                       labels: false
                    }
                }
            });
        </script>
    </body>
</html>