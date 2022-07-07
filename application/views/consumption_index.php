<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Rice Consumption</title>
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
                <nav class="navbar navbar-expand-lg navbar-dark">
                    <a class="btn btn-warning mr-2 text-white" href="<?php echo base_url(); ?>" role="button"><i class="bi bi-caret-left"></i> Back to Main</a>
                </nav>

                <!-- Header --->
                <div id="consumption" class="jumbotron text-center">
                    <div class="jumbotron-content">
                        <h2>State of the Rice Sector in the Philippines</h2>
                        <h1>Rice Consumption</h1>
                        <p class="lead"><i>How much rice do Filipinos consume each day and year?</i> Explore the information of per capita consumption <br />and the comparison of our local consumption and local food consumption</p>
                    </div>
                </div>

                <!-- Body -->

                <div class="sublevel">
                    <div class="row">
                        <div class="col">
                            <div class="card-deck mb-2 text-center">
                                <div class="card primary mb-4 bg-primary text-white">
                                    <div class="card-body">
                                        <h5 class="card-title pb-2">Average Annual Per Capita Consumption (2016)</h5>
                                        <h1 class="card-text font-weight-bold"><?php echo $actual_per_capita_values['KgPerYear']; ?><i class="bi bi-caret-down-fill"></i></h1>
                                        <div class="card-note bg-warning w-25 mx-auto rounded-pill">
                                            <p class="text-white">kilograms</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card primary mb-4 bg-primary text-white">
                                    <div class="card-body">
                                        <h5 class="card-title pb-2">Average Daily Per Capita Consumption (2016)</h5>
                                        <h1 class="card-text font-weight-bold"><?php echo $actual_per_capita_values['GmPerDay']; ?><i class="bi bi-caret-down-fill"></i></h1>
                                        <div class="card-note bg-warning w-25 mx-auto rounded-pill">
                                            <p class="text-white">grams</p>
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
                                    <h5 class="my-0 pt-2 pb-2">Average Annual per Capita Consumption by Survey Year (2000-2016)</h5>
                                    <p class="my-0 font-weight-normal text-muted">in kilograms (kg) (FNRI and PSA, 2019)</p>
                                </div>
                                <div class="card-body">
                                    <div><canvas id="ctxKgCapita"></canvas></div>
                                </div>
                                <div class="card-footer text-muted">
	Data Source: Annual Per Capita Consumption of Rice, 1999-2016, Philippines - Philippine Statistics Authority
</div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card mb-4">
                                <div class="card-header text-left">
<a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a>
                                    <h5 class="my-0 pt-2 pb-2">Average Daily per Capita Consumption by Survey Year (2000-2016)</h5>
                                    <p class="my-0 font-weight-normal text-muted">in grams (g) (FNRI and PSA, 2019)</p>
                                </div>
                                <div class="card-body">
                                    <div><canvas id="ctxGramCapita"></canvas></div>
                                </div>
                                <div class="card-footer text-muted">
	Data Source: Annual Per Capita Consumption of Rice, 1999-2016, Philippines - Philippine Statistics Authority
</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="card mb-4">
                                <div class="card-header text-left">
<a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a>
                                    <h5 class="my-0 pt-2 pb-2">Local Production and Net Food Disposable (2000-2020)</h5>
                                    <p class="my-0 font-weight-normal text-muted">in million metric tons (PSA, 2021)</p>
                                </div>
                                <div class="card-body">
                                    <div><canvas id="ctxProdFood"></canvas></div>
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

        var dbTotalSupply = JSON.parse('<?php echo $total_supply; ?>');
        var dbTotalUtil = JSON.parse('<?php echo $total_utilization; ?>');
        var dbSupplySources = JSON.parse('<?php echo $supply_sources_yearly; ?>');
        var dbUseAccounts = JSON.parse('<?php echo $util_accounts_yearly; ?>');
        var dbPerCapitas = JSON.parse('<?php echo $per_capita_yearly; ?>');
        var dbPerCapitasFNRI = JSON.parse('<?php echo $actual_per_capita_yearly; ?>');

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
        let kgpercapita = [];
        let gmpercapita = [];
        let kgpercapita_act = [];
        let gmpercapita_act = [];
        let population = [];

        try {
            dbTotalSupply.map((item) => {
                years.push(item.year);
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
            dbPerCapitas.map((item) => {
                kgpercapita.push(item.KgPerYear);
                gmpercapita.push(item.GmPerDay);
            });
            dbPerCapitasFNRI.map((item) => {
                years_act.push(item.year);
                kgpercapita_act.push(item.KgPerYear);
                gmpercapita_act.push(item.GmPerDay);
            });
        } catch (error) {
            console.log(error);
        }

        var yearsLab = [...years];
        var yearsLabAct = [...years_act];
        var totalProduce = [...locals];
        var totalFood = [...food];
        var totalKgCapita = [...kgpercapita];
        var totalGmCapita = [...gmpercapita];
        var totalKgCapitaAct = [...kgpercapita_act];
        var totalGmCapitaAct = [...gmpercapita_act];

        var ProdFood = document.getElementById('ctxProdFood').getContext('2d');

        var ProdFoodChart = new Chart(ProdFood, {
            // The type of chart we want to create
            type: 'bar',

            // The data for our dataset
            data: {
                labels: yearsLab,
                datasets: [{
                    type: 'line',
                    label: 'Local Production',
                    backgroundColor: '#A6CEE3', // COLOR 1
                    borderColor: '#A6CEE3', // COLOR 1
                    lineTension: 0,
                    fill: false,
                    data: totalProduce,
                }, {
                    type: 'line',
                    label: 'Net Food Disposable',
                    backgroundColor: '#007FFE', // COLOR 2
                    borderColor: '#007FFE', // COLOR 2
                    lineTension: 0,
                    fill: false,
                    data: totalFood,
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
                        type: 'linear',
                        position: 'left',
                    }]
                },
                legend: {
                    display: 'false'
                },
                plugins: {
                    labels: false
                }
            }
        });

        var KgCapita = document.getElementById('ctxKgCapita').getContext('2d');

        var KgCapitaChart = new Chart(KgCapita, {
            // The type of chart we want to create
            type: 'bar',

            // The data for our dataset
            data: {
                labels: yearsLabAct,
                datasets: [{
                    label: 'Per Capita (kg/year)',
                    backgroundColor: '#007FFE', // COLOR 2
                    borderColor: '#007FFE', // COLOR 2
                    lineTension: 0,
                    fill: false,
                    data: totalKgCapitaAct
                }]
            },

            // Configuration options go here
            options: {
                aspectRatio: 1.75,
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
                        display: true,
                        ticks: {
                            min: 95,
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
                            data = parseInt(data).toLocaleString();
                            ctx.fillText(data, bar._model.x + 0 , bar._model.y + 20);
                            });
                        });
                      }
                  }
            }
        });

        var GramCapita = document.getElementById('ctxGramCapita').getContext('2d');

        var GramCapitaChart = new Chart(GramCapita, {
            // The type of chart we want to create
            type: 'bar',

            // The data for our dataset
            data: {
                labels: yearsLabAct,
                datasets: [{
                    label: 'Per Capita (g/day)',
                    backgroundColor: '#007FFE', // COLOR 2
                    borderColor: '#007FFE', // COLOR 2
                    lineTension: 0,
                    fill: false,
                    data: totalGmCapitaAct
                }]
            },

            // Configuration options go here
            options: {
                aspectRatio: 1.75,
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
                        display: true,
                        ticks: {
                            min: 200,
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
                            data = parseInt(data).toLocaleString();
                            ctx.fillText(data, bar._model.x + 0 , bar._model.y + 20);
                            });
                        });
                      }
                  }
            }
        });

    </script>
</body>

</html>
