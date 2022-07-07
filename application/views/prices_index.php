<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Rice Market Prices</title>
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
        <div id="prices" class="jumbotron text-center">
            <div class="jumbotron-content">
                <h2>State of the Rice Sector in the Philippines</h2>
                <h1>Rice Market Prices</h1>
                <p class="lead"><i>How does the price of un-hulled and de-hulled rice fare in the marketplace?</i><br/>Know the current and historical prices of rice. </p>
            </div>
        </div>
        
        <!-- Body -->
        <div class="sublevel">
            <div class="row">
                <div class="col">
                    <div class="card-deck mb-2 text-center">
                        <div class="card primary mb-4 bg-primary text-white">
                            <div class="card-body">
                                <h5 class="card-title mt-1">Dry Palay Price (2021)</h5>
                                <h1 class="card-text mt-4 font-weight-bold smaller"><?php echo $farmgate['value']; ?><i class="<?php echo $farm_caret; ?>"></i></h1>
                                <div class="card-note bg-warning w-50 mt-3 mx-auto rounded-pill">
                                    <p class="text-white">Pesos Per Kilogram</p>
                                </div>
                            </div>
                        </div>
                        <div class="card primary mb-4 bg-primary text-white">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title">Wholesale Prices (2021)</h5>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-6 border-right">
                                        <p class="card-title-note">Regular-Milled</p>
                                        <h1 class="card-text font-weight-bold smaller"><?php echo $wholesale['value']; ?><i class="<?php echo $whr_caret; ?>"></i></h1>
                                    </div>
                                    <div class="col-6">
                                        <p class="card-title-note">Well-Milled</p>
                                        <h1 class="card-text font-weight-bold smaller"><?php echo $wholesale_sp['value']; ?><i class="<?php echo $whw_caret; ?>"></i></h1>
                                    </div>
                                    <div class="bg-warning w-50 mt-3  mx-auto pb-0 rounded-pill">
                                        <p class="text-white text-uppercase mb-0">Pesos Per Kilogram</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card primary mb-4 bg-primary text-white">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title">Retail Prices (2021)</h5>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-6 border-right">
                                        <p class="card-title-note">Regular-Milled</p>
                                        <h1 class="card-text font-weight-bold smaller"><?php echo $retail['value']; ?><i class="<?php echo $rhw_caret; ?>"></i></h1>
                                    </div>
                                    <div class="col-6">
                                        <p class="card-title-note">Well-Milled</p>
                                        <h1 class="card-text font-weight-bold smaller"><?php echo $retail_sp['value']; ?><i class="<?php echo $rhr_caret; ?>"></i></h1>
                                    </div>
                                    <div class="bg-warning w-50 mt-3  mx-auto pb-0 rounded-pill">
                                        <p class="text-white text-uppercase mb-0">Pesos Per Kilogram</p>
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
<h5 class="my-0 pt-2 pb-2">Nominal and Real Prices of Dry Palay (2001-2021)</h5>
                        <p class="my-0 font-weight-normal text-muted">in Peso (PSA, 2021)</p>
                      </div>
                      <div class="card-body">
                           <div><canvas id="ctxFarmPrices"></canvas></div>
                      </div>
                        <div class="card-footer text-muted">
	Data Source: <a href="https://palaystat.philrice.gov.ph/statistics/retrieve/table/15" target="_blank">Annual and semestral average farmgate, wholesale and retail prices, ordinary palay/rice - PalayStat System</a>
</div>
                   </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card mb-4">
                      <div class="card-header text-left">
                          <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a>
<h5 class="my-0 pt-2 pb-2">Wholesale Prices of Regular and Well-milled Rice (2001-2021)</h5>
                        <p class="my-0 font-weight-normal text-muted">in Peso (PSA, 2021)</p>
                      </div>
                      <div class="card-body">
                           <div><canvas id="ctxWholesalePrices"></canvas></div>
                      </div>
                        <div class="card-footer text-muted">
	Data Source: <a href="https://palaystat.philrice.gov.ph/statistics/retrieve/table/15" target="_blank">Annual and semestral average farmgate, wholesale and retail prices, ordinary palay/rice - PalayStat System</a>
</div>
                   </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card mb-4">
                      <div class="card-header text-left">
                          <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a>
<h5 class="my-0 pt-2 pb-2">Retail Prices of Regular and Well-milled Rice (2001-2021)</h5>
                        <p class="my-0 font-weight-normal text-muted">in Peso (PSA, 2021)</p>
                      </div>
                      <div class="card-body">
                           <div><canvas id="ctxRetailPrices"></canvas></div>
                      </div>
                        <div class="card-footer text-muted">
	Data Source: <a href="https://palaystat.philrice.gov.ph/statistics/retrieve/table/15" target="_blank">Annual and semestral average farmgate, wholesale and retail prices, ordinary palay/rice - PalayStat System</a>
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
                    
            // CHART 1
            
            var dbFarmPrices = JSON.parse('<?php echo $farmgate_prices; ?>');
            var dbFarmPricesR = JSON.parse('<?php echo $farmgate_prices_real; ?>');
                        
            let years = [];
            let values_n_prices = [];
            let values_r_prices = [];

            try {
              dbFarmPrices.map((item) => {
                years.push(item.year);
                values_n_prices.push(item.value);
              });
              dbFarmPricesR.map((item) => {
                values_r_prices.push(item.value);
              });
            } catch (error) {
              console.log(error);
            }
            
            var farmPrices = document.getElementById('ctxFarmPrices').getContext('2d');
            var tempFarmLabels = [...years];
            var farmPriceData = [...values_n_prices];
            var farmPriceReal = [...values_r_prices];
            var farmPricesChart = new Chart(farmPrices, {
            // The type of chart we want to create
            type: 'line',

            // The data for our dataset
            data: {
                labels: tempFarmLabels,
                datasets: [{
                    label: 'Nominal Price',
                    backgroundColor: '#A6CEE3',   // COLOR 1
                    borderColor: '#A6CEE3',       // COLOR 1
                    lineTension: 0,
                    fill: false,
                    data: farmPriceData
                },{
                    label: 'Real Price (2012=100)',
                    backgroundColor: '#68b3fe',   // COLOR 2
                    borderColor: '#68b3fe',       // COLOR 2
                    lineTension: 0,
                    fill: false,
                    data: farmPriceReal
                }]
            },

            // Configuration options go here
            options: {
                    aspectRatio: 2.2,
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
                            ctx.fillStyle = '#000000';
                            data = parseInt(data).toLocaleString();
                            ctx.fillText(data, bar._model.x + 0 , bar._model.y + 1);
                            });
                        });
                      }
                  }    
                }
            });
            
            // CHART 2
            
            var dbWPrice = JSON.parse('<?php echo $wholesale_prices; ?>');
            var dbWPricesS = JSON.parse('<?php echo $wholesale_sp_prices; ?>');
                        
            let years_w = [];
            let values_rm_prices = [];
            let values_w_prices = [];

            try {
              dbWPrice.map((item) => {
                years_w.push(item.year);
                values_rm_prices.push(item.value);
              });
              dbWPricesS.map((item) => {
                values_w_prices.push(item.value);
              });
            } catch (error) {
              console.log(error);
            }
            
            var wholesalePrices = document.getElementById('ctxWholesalePrices').getContext('2d');
            var tempWLabels = [...years_w];
            var wPriceData = [...values_rm_prices];
            var wPriceSp = [...values_w_prices];
            var wholesalePricesChart = new Chart(wholesalePrices, {
            // The type of chart we want to create
            type: 'line',

            // The data for our dataset
            data: {
                labels: tempWLabels,
                datasets: [{
                    label: 'Regular-milled',
                    backgroundColor: '#007FFE',   // COLOR 1
                    borderColor: '#007FFE',       // COLOR 1
                    lineTension: 0,
                    fill: false,
                    data: wPriceData
                },{
                    label: 'Well-milled',
                    backgroundColor: '#A6CEE3',    // COLOR 2
                    borderColor: '#A6CEE3',        // COLOR 2
                    lineTension: 0,
                    fill: false,
                    data: wPriceSp
                }]
            },

            // Configuration options go here
            options: {
                    aspectRatio: 2.2,
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
                            ctx.fillStyle = '#000000';
                            data = parseInt(data).toLocaleString();
                            ctx.fillText(data, bar._model.x + 0 , bar._model.y + 1);
                            });
                        });
                      }
                  }    
                }
            });
            
            // CHART 3
            
            var dbRTPrice = JSON.parse('<?php echo $retail_prices; ?>');
            var dbRTPricesS = JSON.parse('<?php echo $retail_sp_prices; ?>');
                        
            let years_r = [];
            let values_rr_prices = [];
            let values_wr_prices = [];

            try {
              dbRTPrice.map((item) => {
                years_r.push(item.year);
                values_rr_prices.push(item.value);
              });
              dbRTPricesS.map((item) => {
                values_wr_prices.push(item.value);
              });
            } catch (error) {
              console.log(error);
            }
            
            var retailPrices = document.getElementById('ctxRetailPrices').getContext('2d');
            var tempRLabels = [...years_r];
            var rPriceData = [...values_rr_prices];
            var rPriceSp = [...values_wr_prices];
            var retailPricesChart = new Chart(retailPrices, {
            // The type of chart we want to create
            type: 'line',

            // The data for our dataset
            data: {
                labels: tempWLabels,
                datasets: [{
                    label: 'Regular-milled',
                    backgroundColor: '#007FFE',   // COLOR 1
                    borderColor: '#007FFE',       // COLOR 1
                    lineTension: 0,
                    fill: false,
                    data: rPriceData
                },{
                    label: 'Well-milled',
                    backgroundColor: '#A6CEE3',    // COLOR 2
                    borderColor: '#A6CEE3',        // COLOR 2
                    lineTension: 0,
                    fill: false,
                    data: rPriceSp
                }]
            },

            // Configuration options go here
            options: {
                    aspectRatio: 2.2,
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
                            ctx.fillStyle = '#000000';
                            data = parseInt(data).toLocaleString();
                            ctx.fillText(data, bar._model.x + 0 , bar._model.y + 1);
                            });
                        });
                      }
                  }    
                }
            });

        </script>
    </body>
</html>