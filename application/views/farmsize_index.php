<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Farm Size</title>
        <meta name="description" content="Production Charts">
        <?php 
            echo link_tag('css/bootstrap-reboot.min.css');
            echo link_tag('css/bootstrap.min.css');
            echo link_tag('css/bootstrap-grid.min.css');
            echo link_tag('css/bootstrap-icons.css');
            echo link_tag('css/sidebarjs.min.css');
            echo link_tag('css/styles.css');  
        ?>
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
                <!-- Navigation --->
        <nav class="navbar navbar-expand-lg navbar-dark">
          <a class="btn btn-warning mr-2 text-white" href="<?php echo base_url(); ?>profilemain" role="button"><i class="bi bi-caret-left"></i> Back to Main</a>
        </nav>
        
        <!-- Header --->
        <div class="jumbotron text-center">
            <div class="jumbotron-content">
                <h2>Profile of the Filipino Rice Farmer</h2>
                <h1>Farm Size</h1>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor<br/>incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>
        
        <!-- Body -->
        <div class="sublevel">
            <div class="row">
                <div class="col">
                    <div class="card-deck mb-2 text-center">
                        <div class="card primary mb-4 bg-alternate-2">
                          <div class="card-body">
                            <h5 class="card-title pb-2">Irrigated Ecosystems (2017)</h5>
                            <h1 class="card-text font-weight-bold"><?php echo $avefarm_irrigated['value']; ?><i class="bi bi-caret-up-fill"></i></h1>
                            <div class="card-note w-50 mx-auto rounded-pill bg-primary"><p class="text-white">Hectare</p></div>
                          </div>
                        </div>
                        <div class="card primary mb-4 bg-primary-2 text-white">
                          <div class="card-body">
                            <h5 class="card-title pb-2">Average Farm Size (2017)</h5>
                            <h1 class="card-text font-weight-bold"><?php echo $avefarm_all['value']; ?><i class="bi bi-caret-up-fill"></i></h1>
                            <div class="card-note w-50 mx-auto rounded-pill"><p class="text-white">Hectare</p></div>
                          </div>
                        </div>
                        <div class="card primary mb-4 bg-alternate-2">
                          <div class="card-body">
                            <h5 class="card-title pb-2">Rainfed Ecosystems (2017)</h5>
                            <h1 class="card-text font-weight-bold"><?php echo $avefarm_rainfed['value']; ?><i class="bi bi-caret-down-fill"></i></h1>
                            <div class="card-note w-50 mx-auto rounded-pill bg-primary"><p class="text-white">Hectare</p></div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card mb-4">
                          <div class="card-header text-left">
                            <h5 class="my-0 pt-2 pb-2">Distribution of rice farmers, by farm size (1997-2017)</h5>
                            <p class="my-0 font-weight-normal text-muted">in percentage (RBFHS, PhilRice-SED, 2019)</p>
                          </div>
                          <div class="card-body">
                               <div><canvas id="ctxFarmSize"></canvas></div>
                          </div>
                          <div class="card-footer text-muted">Legend (Arrangement): All Ecosystems - Irrigated - Rainfed</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card mb-4">
                        <div class="card-header text-left">
                            <h5 class="my-0 pt-2 pb-2">Distribution of rice farmers by farm size, by province (2017)</h5>
                            <p class="my-0 font-weight-normal text-muted">in percentage (RBFHS, PhilRice-SED, 2019)</p>
                        </div>
                        <div class="card-body">
                            <div><canvas id="ctxFarmSizeProv"></canvas></div>
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
        var sidebarjs = new SidebarJS.SidebarElement();
            Chart.defaults.global.responsive = true;
            Chart.defaults.global.tooltips.mode = 'index';
            Chart.defaults.global.tooltips.intersect = false;
            Chart.defaults.global.defaultFontFamily = 'Poppins';
            Chart.defaults.global.defaultFontSize = 13;
            Chart.defaults.global.animation.duration = 3000;
            
            // CHART 1
            
            var dbOTotal = JSON.parse('<?php echo $one_all_yearly; ?>');
            var dbTTotal = JSON.parse('<?php echo $two_all_yearly; ?>');
            var dbThTotal = JSON.parse('<?php echo $three_all_yearly; ?>');
            var dbMTotal = JSON.parse('<?php echo $more_all_yearly; ?>');
            var dbOIrrigated = JSON.parse('<?php echo $one_irrigated_yearly; ?>');
            var dbTIrrigated = JSON.parse('<?php echo $two_irrigated_yearly; ?>');
            var dbThIrrigated = JSON.parse('<?php echo $three_irrigated_yearly; ?>');
            var dbMIrrigated = JSON.parse('<?php echo $more_irrigated_yearly; ?>');
            var dbORainfed = JSON.parse('<?php echo $one_rainfed_yearly; ?>');
            var dbTRainfed = JSON.parse('<?php echo $two_rainfed_yearly; ?>');
            var dbThRainfed = JSON.parse('<?php echo $three_rainfed_yearly; ?>');
            var dbMRainfed = JSON.parse('<?php echo $more_rainfed_yearly; ?>');
                        
            let years = [];
            let values_ototal = [];
            let values_ttotal = [];
            let values_thtotal = [];
            let values_mtotal = [];
            let values_oirrig = [];
            let values_tirrig = [];
            let values_thirrig = [];
            let values_mirrig = [];
            let values_orain = [];
            let values_train = [];
            let values_thrain = [];
            let values_mrain = [];

            try {
              dbOTotal.map((item) => {
                years.push(item.year);
                values_ototal.push(item.value);
              });
              dbTTotal.map((item) => {
                values_ttotal.push(item.value);
              });
              dbThTotal.map((item) => {
                values_thtotal.push(item.value);
              });
              dbMTotal.map((item) => {
                values_mtotal.push(item.value);
              });
                
              dbOIrrigated.map((item) => {
                values_oirrig.push(item.value);
              });
              dbTIrrigated.map((item) => {
                values_tirrig.push(item.value);
              });
              dbThIrrigated.map((item) => {
                values_thirrig.push(item.value);
              });
              dbMIrrigated.map((item) => {
                values_mirrig.push(item.value);
              });
                
            dbORainfed.map((item) => {
                values_orain.push(item.value);
            });
            dbTRainfed.map((item) => {
                values_train.push(item.value);
            });
            dbThRainfed.map((item) => {
                values_thrain.push(item.value);
            });
            dbMRainfed.map((item) => {
                values_mrain.push(item.value);
            });
            } catch (error) {
              console.log(error);
            }
            
            var farmSize = document.getElementById('ctxFarmSize').getContext('2d');
            var tempPLabels = [...years];
            var oAllData = [...values_ototal];
            var tAllData = [...values_ttotal];
            var thAllData = [...values_thtotal];
            var mAllData = [...values_mtotal];
            var oIrrigData = [...values_oirrig];
            var tIrrigData = [...values_tirrig];
            var thIrrigData = [...values_thirrig];
            var mIrrigData = [...values_mirrig];
            var oRainData = [...values_orain];
            var tRainData = [...values_train];
            var thRainData = [...values_thrain];
            var mRainData = [...values_mrain];
            var farmSizeChart = new Chart(farmSize, {

                type: 'bar',

                data: {
                    labels: tempPLabels,
                    datasets: [{
                        label: 'Overall - 1.00 ha or less (%)',
                        backgroundColor: '#8794DF',    // COLOR 1
                        borderColor: '#8794DF',        // COLOR 1
                        data: oAllData,
                        stack: 'All'
                    },
                    {
                        label: 'Overall - 1.01 - 2.00 ha (%)',
                        backgroundColor: '#DBF968',    // COLOR 1
                        borderColor: '#DBF968',        // COLOR 1
                        data: tAllData,
                        stack: 'All'
                    },
                    {
                        label: 'Overall - 2.01 - 3.00 ha (%)',
                        backgroundColor: '#FFD46A',    // COLOR 1
                        borderColor: '#FFD46A',        // COLOR 1
                        data: thAllData,
                        stack: 'All'
                    },
                    {
                        label: 'Overall - 3.01 ha or more (%)',
                        backgroundColor: '#CF56C0',    // COLOR 1
                        borderColor: '#CF56C0',        // COLOR 1
                        data: mAllData,
                        stack: 'All'
                    },                        
                    {
                        label: 'Irrigated - 1.00 ha or less (%)',
                        backgroundColor: '#4255BF',      // COLOR 2
                        borderColor: '#4255BF',          // COLOR 2
                        data: oIrrigData,
                        stack: 'Irrigated'
                    },                        
                    {
                        label: 'Irrigated - 1.01 - 2.00 ha (%)',
                        backgroundColor: '#D1F73E',      // COLOR 2
                        borderColor: '#D1F73E',          // COLOR 2
                        data: tIrrigData,
                        stack: 'Irrigated'
                    },                        
                    {
                        label: 'Irrigated - 2.01 - 3.00 ha (%)',
                        backgroundColor: '#FFC840',      // COLOR 2
                        borderColor: '#FFC840',          // COLOR 2
                        data: thIrrigData,
                        stack: 'Irrigated'
                    },
                    {
                        label: 'Irrigated - 3.01 ha or more (%)',
                        backgroundColor: '#C130AF',      // COLOR 2
                        borderColor: '#C130AF',          // COLOR 2
                        data: mIrrigData,
                        stack: 'Irrigated'
                    },
                    {
                        label: 'Rainfed - 1.00 ha or less (%)',
                        backgroundColor: '#1E35B2',   // COLOR 3
                        borderColor: '#1E35B2',       // COLOR 3
                        data: oRainData,
                        stack: 'Rainfed'
                    },
                    {
                        label: 'Rainfed - 1.01 - 2.00 ha (%)',
                        backgroundColor: '#A7D100',   // COLOR 3
                        borderColor: '#A7D100',       // COLOR 3
                        data: tRainData,
                        stack: 'Rainfed'
                    },
                    {
                        label: 'Rainfed - 2.01 - 3.00 ha (%)',
                        backgroundColor: '#DA9B00',   // COLOR 3
                        borderColor: '#DA9B00',       // COLOR 3
                        data: thRainData,
                        stack: 'Rainfed'
                    },
                    {
                        label: 'Rainfed - 3.01 ha or more (%)',
                        backgroundColor: '#970085',   // COLOR 3
                        borderColor: '#970085',       // COLOR 3
                        data: mRainData,
                        stack: 'Rainfed'
                    }]
                },

                options: {
                    aspectRatio: 2,
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
                                stepSize: 20

                            }
                        }]
                    },
                    legend: {
                        display: false
                    },
                    tooltips: {
                        mode: 'x',
                        callbacks: {
                            label: function(tooltipItem, data) {
                                var label = data.datasets[tooltipItem.datasetIndex].label || '';

                                if (label) {
                                    label += ': ';
                                }
                                label += isNaN(tooltipItem.yLabel) ? '0' : tooltipItem.yLabel;
                                return label;
                            }
                        }
                    }
                }
            });
            
            // CHART 2
            
            var dbOTotalP = JSON.parse('<?php echo $one_all_provincial; ?>');
            var dbTTotalP = JSON.parse('<?php echo $two_all_provincial; ?>');
            var dbThTotalP = JSON.parse('<?php echo $three_all_provincial; ?>');
            var dbMTotalP = JSON.parse('<?php echo $more_all_provincial; ?>');
                        
            let provinces = [];
            let valuesp_ototal = [];
            let valuesp_ttotal = [];
            let valuesp_thtotal = [];
            let valuesp_mtotal = [];

            try {
              dbOTotalP.map((item) => {
                provinces.push(item.location_name);
                valuesp_ototal.push(item.value);
              });
              dbTTotalP.map((item) => {
                valuesp_ttotal.push(item.value);
              });
              dbThTotalP.map((item) => {
                valuesp_thtotal.push(item.value);
              });
              dbMTotalP.map((item) => {
                valuesp_mtotal.push(item.value);
              });
            } catch (error) {
              console.log(error);
            }
            
            var farmSizeProv = document.getElementById('ctxFarmSizeProv').getContext('2d');
            var tempPrLabels = [...provinces];
            var oAllDataP = [...valuesp_ototal];
            var tAllDataP = [...valuesp_ttotal];
            var thAllDataP = [...valuesp_thtotal];
            var mAllDataP = [...valuesp_mtotal];
            var farmSizeProvChart = new Chart(farmSizeProv, {

                type: 'horizontalBar',
                
                data: {
                    labels: tempPrLabels,
                    datasets: [{
                        label: '1.00 ha or less (%)',
                        backgroundColor: '#007FFE',    // COLOR 1
                        borderColor: '#007FFE',        // COLOR 1
                        data: oAllDataP,
                        stack: 'All'
                    },
                    {
                        label: '1.01 - 2.00 ha (%)',
                        backgroundColor: '#2138B7',    // COLOR 1
                        borderColor: '#2138B7',        // COLOR 1
                        data: tAllDataP,
                        stack: 'All'
                    },
                    {
                        label: '2.01 - 3.00 ha (%)',
                        backgroundColor: '#A6CEE3',    // COLOR 1
                        borderColor: '#A6CEE3',        // COLOR 1
                        data: thAllDataP,
                        stack: 'All'
                    },
                    {
                        label: '3.01 ha or more (%)',
                        backgroundColor: '#4698EA',    // COLOR 1
                        borderColor: '#4698EA',        // COLOR 1
                        data: mAllDataP,
                        stack: 'All'
                    }]
                },

                options: {
                    aspectRatio: 0.7,
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
                                stepSize: 20

                            }
                        }]
                    },
                    legend: {
                        display: false
                    }
                }
            });
        </script>
    </body>
</html>