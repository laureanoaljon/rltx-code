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
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="btn btn-warning mr-2 text-white" href="<?php echo base_url(); ?>" role="button"><i class="bi bi-tags-fill"></i> Industry</a>
                         <a class="btn btn-warning mr-2 text-white" href="<?php echo base_url(); ?>profilemain" role="button"><i class="bi bi-person-fill"></i> Farmer</a>
                        <a class="btn btn-warning mr-2 text-white" href="<?php echo base_url(); ?>farmpractices" role="button"><i class="bi bi-info-square"></i> Practices</a>
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
        <div class="jumbotron text-left text-light">
            <div class="row">
                <div class="chart-header col col-md-8 p-4">
                    <h2>State of the Rice Sector in the Philippines</h2>
                    <h1>Supply and Utilization</h1>
                    <p class="lead">Accounts on gross supplies available before disposal and total utilization for food, seeds, processing, and feeds and wastes, 2000-2019</p>
                </div>
                <div class="background col col-md-4"></div>
            </div>
        </div>
        
        <!-- Body -->
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card mb-4">
                      <div class="card-header text-left">
                        <h5 class="my-0 pt-2 pb-2">Total supply and utilization (2000-2019)</h5>
                        <p class="my-0 font-weight-normal text-muted">in thousand tons ('000) (PSA, 2020)</p>
                      </div>
                      <div class="card-body">
                           <div><canvas id="ctxSupply"></canvas></div>
                      </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-4">
                      <div class="card-header text-left">
                        <h5 class="my-0 pt-2 pb-2">Local production and net food disposable (2000-2019)</h5>
                        <p class="my-0 font-weight-normal text-muted">in thousand tons ('000) (PSA, 2020)</p>
                      </div>
                      <div class="card-body">
                           <div><canvas id="ctxProdFood"></canvas></div>
                      </div>
                   </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 p-0">
                       <div class="card mb-4">
                      <div class="card-header text-left">
                        <h5 class="my-0 pt-2 pb-2">Supply Sources (2019)</h5>
                      </div>
                      <div class="card-body">
                           <div><canvas id="ctxCurSupply"></canvas></div>
                      </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 p-0">
                        <div class="card-deck mb-2 text-center">
                            <div class="card mb-2 bg-warning">
                              <div class="card-body">
                                <h6 class="card-title p-2">Total Supply (2019)</h6>
                                <h3 class="card-text"><?php echo $supply['value']; ?><i class="bi bi-caret-up-fill"></i></h3>
                                <p>'000 tons</p>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 p-0">
                        <div class="card-deck mb-2">
                            <div class="card mb-2">
                              <div class="card-body">
                                <h6 class="card-title p-2 text-center">Supply Sources (2019)</h6>
                                <p class="text-capitalize">Beginning Stock: <?php echo number_format($supply_sources_values['SUBeginningStocks']); ?></p>
                                <p class="text-capitalize">Local Production: <?php echo number_format($supply_sources_values['SUProduction']); ?></p>
                                <p class="text-capitalize">Imports: <?php echo number_format($supply_sources_values['SUImports']); ?></p>
                                <p class="text-muted text-center m-0">in '000 tons</p>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 p-0">
                        <div class="card-deck mb-2 text-center">
                            <div class="card mb-2 bg-warning">
                              <div class="card-body">
                                <h6 class="card-title p-2">Total Use (2019)</h6>
                                <h3 class="card-text"><?php echo $util['value']; ?><i class="bi bi-caret-up-fill"></i></h3>
                                <p>'000 tons</p>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 p-0">
                        <div class="card-deck mb-2">
                            <div class="card mb-2">
                              <div class="card-body">
                                <h6 class="card-title p-2 text-center">Utilization Sources (2019)</h6>
                                <p class="text-capitalize">Exports: <?php echo number_format($util_accounts_values['UTExports']); ?></p>
                                <p class="text-capitalize">Seeds: <?php echo number_format($util_accounts_values['UTSeeds']); ?></p>
                                <p class="text-capitalize">Feeds/Wastes: <?php echo number_format($util_accounts_values['UTFeedsWaste']); ?></p>
                                <p class="text-capitalize">Processing: <?php echo number_format($util_accounts_values['UTProcessing']); ?></p>
                                <p class="text-capitalize">Net Food Disposable: <?php echo number_format($util_accounts_values['uttotalnet']); ?></p>
                                <p class="text-muted text-center m-0">in '000 tons</p>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 p-0">
                       <div class="card mb-4">
                          <div class="card-header text-left">
                            <h5 class="my-0 pt-2 pb-2">Use Accounts (2019)</h5>
                          </div>
                          <div class="card-body">
                               <div><canvas id="ctxCurUtil"></canvas></div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card mb-4">
                      <div class="card-header text-left">
                        <h5 class="my-0 pt-2 pb-2">Yearly supply sources (2000-2019)</h5>
                        <p class="my-0 font-weight-normal text-muted">in thousand tons ('000) (PSA, 2020)</p>
                      </div>
                      <div class="card-body">
                           <div><canvas id="ctxSupplyStack"></canvas></div>
                      </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-4">
                      <div class="card-header text-left">
                        <h5 class="my-0 pt-2 pb-2">Yearly use accounts (2000-2019)</h5>
                        <p class="my-0 font-weight-normal text-muted">in thousand tons ('000) (PSA, 2020)</p>
                      </div>
                      <div class="card-body">
                           <div><canvas id="ctxUtilStack"></canvas></div>
                      </div>
                   </div>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="card-deck mb-2 text-center row justify-content-end">
                        <div class="card mb-2 bg-warning">
                          <div class="card-body">
                            <h6 class="card-title p-2">Per Capita Rice Consumption (2016)</h6>
                            <h2 class="card-text"><?php echo $actual_per_capita_values['KgPerYear']; ?><i class="bi bi-caret-down-fill"></i></h2>
                            <p>kilograms (kgs)</p>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="col-8">
                    <div class="card mb-4">
                      <div class="card-header text-left">
                        <h5 class="my-0 pt-2 pb-2">Yearly per capita rice consumption (1999-2016)</h5>
                        <p class="my-0 font-weight-normal text-muted">in kilograms (kg) (FNRI and PSA, 2019)</p>
                      </div>
                      <div class="card-body">
                           <div><canvas id="ctxKgCapita"></canvas></div>
                      </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="card-deck mb-2 text-center row justify-content-end">
                        <div class="card mb-2 bg-warning">
                          <div class="card-body">
                            <h6 class="card-title p-2">Daily Per Capita Rice Consumption (2016)</h6>
                            <h2 class="card-text"><?php echo $actual_per_capita_values['GmPerDay']; ?><i class="bi bi-caret-down-fill"></i></h2>
                            <p>grams (gms)</p>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="col-8">
                    <div class="card mb-4">
                      <div class="card-header text-left">
                        <h5 class="my-0 pt-2 pb-2">Daily per capita rice consumption (1999-2016)</h5>
                        <p class="my-0 font-weight-normal text-muted">in grams (gms) (FNRI and PSA, 2019)</p>
                      </div>
                      <div class="card-body">
                           <div><canvas id="ctxGramCapita"></canvas></div>
                      </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="card-group">
                        <div class="card mb-4 text-center bg-warning">
                          <div class="card-body">
                            <h6 class="card-title p-2">Imported Rice (2019)</h6>
                            <h2 class="card-text"><?php echo number_format($supply_sources_values['SUImports']); ?><i class="bi bi-caret-up-fill"></i></h2>
                            <p>thousand tons ('000)</p>
                          </div>
                        </div>
                        <div class="card mb-4 text-center bg-warning">
                          <div class="card-body">
                            <h6 class="card-title p-2">Locally Produced Rice (2019)</h6>
                            <h2 class="card-text"><?php echo number_format($supply_sources_values['SUProduction']); ?><i class="bi bi-caret-up-fill"></i></h2>
                            <p>thousand tons ('000)</p>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card-group">
                        <div class="card mb-4 text-center bg-warning">
                          <div class="card-body">
                            <h6 class="card-title p-2">Net Food Disposable (2019)</h6>
                            <h2 class="card-text"><?php echo number_format($util_accounts_values['uttotalnet']); ?><i class="bi bi-caret-up-fill"></i></h2>
                            <p>in thousand tons ('000)</p>
                          </div>
                        </div>
                        <div class="card mb-4 text-center bg-warning">
                          <div class="card-body">
                            <h6 class="card-title p-2">Per Capita Net Food (2019)</h6>
                            <h2 class="card-text"><?php echo $per_capita_values['KgPerYear']; ?><i class="bi bi-caret-up-fill"></i></h2>
                            <p>kilograms (kgs)</p>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card mb-4">
                      <div class="card-header text-left">
                        <h5 class="my-0 pt-2 pb-2">Yearly imported and locally produced rice (2000-2019)</h5>
                        <p class="my-0 font-weight-normal text-muted">in thousand tons ('000) (PSA, 2020)</p>
                      </div>
                      <div class="card-body">
                           <div><canvas id="ctxImportLocal"></canvas></div>
                      </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-4">
                      <div class="card-header text-left">
                        <h5 class="my-0 pt-2 pb-2">Yearly total utilization and local production (2000-2019)</h5>
                        <p class="my-0 font-weight-normal text-muted">in thousand tons ('000) (PSA, 2020)</p>
                      </div>
                      <div class="card-body">
                           <div><canvas id="ctxUtilProd"></canvas></div>
                      </div>
                   </div>
                </div>
            </div>
            
            <!-- Footer --->
            <footer class="pt-4 my-md-5 pt-md-5 border-top">
                <div class="row">
                  <div class="col-12 col-md">
                    <small class="d-block mb-3 text-muted">2021. RiceLytics Data Initative.</small>
                    <small class="text-muted">Philippine Rice Research Institute.</small>
                  </div>
                  <div class="col-6 col-md">
                    <h5>State of the Rice Sector</h5>
                    <ul class="list-unstyled text-small">
                      <li><a class="text-muted" href="#">Rice Production</a></li>
                      <li><a class="text-muted" href="#">Area Harvested</a></li>
                      <li><a class="text-muted" href="#">Yield per Hectare</a></li>
                      <li><a class="text-muted" href="#">Supply and Utilization</a></li>
                      <li><a class="text-muted" href="#">Gross Value Added</a></li>
                      <li><a class="text-muted" href="#">Farmer’s Income</a></li>
                      <li><a class="text-muted" href="#">Palay & Rice Prices</a></li>
                    </ul>
                  </div>
                  <div class="col-6 col-md">
                    <h5>Rice Farmer Characteristics</h5>
                    <ul class="list-unstyled text-small">
                      <li><a class="text-muted" href="#">Sociodemographics</a></li>
                      <li><a class="text-muted" href="#">Farm Details</a></li>
                      <li><a class="text-muted" href="#">Technology Awareness</a></li>
                    </ul>
                  </div>
                  <div class="col-6 col-md">
                    <h5>RCEF Updates</h5>
                    <ul class="list-unstyled text-small">
                      <li><a class="text-muted" href="#">Inbred Seeds</a></li>
                      <li><a class="text-muted" href="#">Machineries</a></li>
                      <li><a class="text-muted" href="#">Extension</a></li>
                      <li><a class="text-muted" href="#">Credit</a></li>
                    </ul>
                  </div>
                </div>
            </footer>
        </div>
            </main>
        </div>
    </div>

    <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/sidebarjs.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/chart.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/chartjs-plugin-labels.min.js"></script>
        <script>
            Chart.defaults.global.responsive = true;
            Chart.defaults.global.tooltips.mode = 'index';
            Chart.defaults.global.tooltips.intersect = false;
            Chart.defaults.global.defaultFontFamily = 'Poppins';
            Chart.defaults.global.defaultFontSize = 13;
            Chart.defaults.global.animation.duration = 3000;
                    
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
            var totalKgCapita = [...kgpercapita];
            var totalGmCapita = [...gmpercapita];
            var totalKgCapitaAct = [...kgpercapita_act];
            var totalGmCapitaAct = [...gmpercapita_act];
            

            
            /**
            ctxSupply
            ctxUtil 
            */
            
            var ProdFood = document.getElementById('ctxProdFood').getContext('2d');
            
            var SupplyUse = document.getElementById('ctxSupply').getContext('2d');
            
            var ProdFoodChart = new Chart(ProdFood, {
            // The type of chart we want to create
            type: 'line',

            // The data for our dataset
            data: {
                labels: yearsLab,
                datasets: [{
                    label: 'Local Production',
                    backgroundColor: '#A6CEE3',   // COLOR 1
                    borderColor: '#A6CEE3',       // COLOR 1
                    lineTension: 0,
                    fill: false,
                    data: totalProduce
                },{
                    label: 'Net Food Disposable',
                    backgroundColor: '#007FFE',    // COLOR 2
                    borderColor: '#007FFE',        // COLOR 2
                    lineTension: 0,
                    fill: false,
                    data: totalFood
                }]
            },

            // Configuration options go here
            options: {
                    aspectRatio: 1.6,
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
                        position: 'bottom'
                    }    
                }
            });
            
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
                    aspectRatio: 1.6,
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
                        position: 'bottom'
                    }    
                }
            });
                
            var CurSupply = document.getElementById('ctxCurSupply').getContext('2d');
            var supplySources =  ['Beginning Stocks', 'Production', 'Imports'];
            var supplySourcesP = [curStocks, curProduce, curImports];
            var CurSupplyPie = new Chart(CurSupply, {
                // The type of chart we want to create
                type: 'doughnut',

                // The data for our dataset
                data: {
                    labels: supplySources,
                    datasets: [{
                        data: supplySourcesP,
                        backgroundColor: [
                            'rgba(254,129,0)',              // COLOR 1
                            'rgba(33,56,183)',              // COLOR 2
                            'rgba(162,197,172)',            // COLOR 3
                        ],
                        borderColor: [
                            'rgba(254,129,0)',              // COLOR 1
                            'rgba(33,56,183)',              // COLOR 2
                            'rgba(162,197,172)',            // COLOR 3
                        ]
                    }]
                },
                // Configuration options go here
                options: {
                    aspectRatio: 0.9,
                    cutoutPercentage: 50, 
                    legend: {
                        position: 'bottom',
                        onClick: (e) => e.stopPropagation()
                    },
                    tooltips: {
                        enabled: false
                    },
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                      labels: {
                        render: 'percentage',
                        fontColor: 'black',
                        precision: 0,
                          textMargin: 10,
                        fontFamily: 'Poppins',
                        position: 'outside'
                      }
                    }
                }

            });
            
            var CurUtil = document.getElementById('ctxCurUtil').getContext('2d');
            var utilAccounts =  ['Exports', 'Seeds', 'Feeds/Wastes', 'Processing', 'Net Food Disposable'];
            var utilAccountsP =  [curExports, curSeeds, curFeedWastes, curProcessing, curFood];

            var CurUtilPie = new Chart(CurUtil, {
                // The type of chart we want to create
                type: 'doughnut',

                // The data for our dataset
                data: {
                    labels: utilAccounts,
                    datasets: [{
                        data: utilAccountsP,
                        backgroundColor: [
                            '#FE8100',              // COLOR 1
                            '#00FE7F',              // COLOR 2
                            '#FE0000',            // COLOR 3
                            'rgba(4,197,172)',            // COLOR 3
                            'rgba(4,4,172)'           // COLOR 3
                        ],
                        borderColor: [
                            '#FE8100',              // COLOR 1
                            '#00FE7F',              // COLOR 2
                            '#FE0000',            // COLOR 3
                            'rgba(4,197,172)',            // COLOR 3
                            'rgba(4,4,172)'            // COLOR 3
                        ]
                    }]
                },
                // Configuration options go here
                options: {
                    aspectRatio: 0.8,
                    cutoutPercentage: 50, 
                    legend: {
                        position: 'bottom',
                        onClick: (e) => e.stopPropagation()
                    },
                    tooltips: {
                        enabled: false
                    },
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                      labels: {
                        render: 'percentage',
                        fontColor: 'black',
                        precision: 1,
                        showZero: true,
                        showActualPercentages: true,
                        padding: 1,
                        textMargin: 10,
                        fontFamily: 'Poppins',
                        position: 'outside'
                      }
                    }
                }

            });
                
            var SupplyStack = document.getElementById('ctxSupplyStack').getContext('2d');

            var SupplyStackChart = new Chart(SupplyStack, {

                type: 'bar',

                data: {
                    labels: yearsLab,
                    datasets: [{
                        label: 'Beginning Stocks',
                        backgroundColor: '#FE8100',    // COLOR 1
                        borderColor: '#FE8100',        // COLOR 1
                        data: totalStocks
                    },                        
                    {
                        label: 'Local Production',   
                        backgroundColor: '#2037B4',      // COLOR 2
                        borderColor: '#2037B4',          // COLOR 2
                        data: totalProduce
                    },
                    {
                        label: 'Imports',
                        backgroundColor: '#A2C5AC',   // COLOR 3
                        borderColor: '#A2C5AC',       // COLOR 3
                        data: totalImports
                    }]
                },

                options: {
                    aspectRatio: 1.3,
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
                        position: 'bottom'
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
                    datasets: [{
                        label: 'Exports',
                        backgroundColor: '#FE8100',    // COLOR 1
                        borderColor: '#FE8100',        // COLOR 1
                        data: totalExports
                    },                        
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
                    aspectRatio: 1.3,
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
                        position: 'bottom'
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
                    backgroundColor: '#007FFE',    // COLOR 2
                    borderColor: '#007FFE',        // COLOR 2
                    lineTension: 0,
                    fill: false,
                    data: totalKgCapitaAct
                }]
            },

            // Configuration options go here
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
                            display: true,
                            ticks: {
                                min: 95,
                            }
                        }]
                    },
                    legend: {
                        position: 'bottom'
                    },
                    datalabels: {
                        display: false
                    },
                    plugins: {
                       labels: false
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
                    label: 'Per Capita (gram/day)',
                    backgroundColor: '#007FFE',    // COLOR 2
                    borderColor: '#007FFE',        // COLOR 2
                    lineTension: 0,
                    fill: false,
                    data: totalGmCapitaAct
                }]
            },

            // Configuration options go here
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
                            display: true,
                            ticks: {
                                min: 200,
                            }
                        }]
                    },
                    legend: {
                        position: 'bottom'
                    },
                    datalabels: {
                        display: false
                    },
                    plugins: {
                       labels: false
                    }
                }
            });
            
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
                    data: totalProduce
                },{
                    label: 'Imported Rice',
                    backgroundColor: '#A6CEE3',    // COLOR 2
                    borderColor: '#A6CEE3',        // COLOR 2
                    lineTension: 0,
                    fill: true,
                    data: totalImports
                }]
            },

            // Configuration options go here
            options: {
                    aspectRatio: 1.6,
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
                            display: true,
                            ticks: {
                                suggestedMin: 0,
                            }
                        }]
                    },
                    legend: {
                        position: 'bottom'
                    },
                    plugins: {
                       labels: false
                    }   
                }
            });
            
            var UtilProd = document.getElementById('ctxUtilProd').getContext('2d');
            
            var UtilProdChart = new Chart(UtilProd, {
            // The type of chart we want to create
            type: 'line',

            // The data for our dataset
            data: {
                labels: yearsLab,
                datasets: [{
                    label: 'Local Production',
                    backgroundColor: '#A6CEE3',   // COLOR 1
                    borderColor: '#A6CEE3',       // COLOR 1
                    lineTension: 0,
                    fill: false,
                    data: totalProduce
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
                    aspectRatio: 1.6,
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
                        position: 'bottom'
                    }    
                }
            });

        </script>
    </body>
</html>