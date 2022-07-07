<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Farmland Ownership</title>
        <meta name="description" content="Production Charts">
        <?php 
            echo link_tag('css/bootstrap-reboot.min.css');
            echo link_tag('css/bootstrap.min.css');
            echo link_tag('css/bootstrap-grid.min.css');
            echo link_tag('css/bootstrap-icons.css');
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
        <!-- Navigation --->
        <nav class="navbar navbar-expand-lg navbar-dark">
          <a class="btn btn-secondary mr-2 text-white" href="<?php echo base_url(); ?>profilemain" role="button"><i class="bi bi-list"></i></a>
          <a class="btn btn-warning mr-2 text-white" href="<?php echo base_url(); ?>profilemain" role="button"><i class="bi bi-caret-left"></i> Back to Main</a>
        </nav>
        
        <!-- Header --->
        <div class="jumbotron text-center">
            <div class="jumbotron-content">
                <h2>Profile of the Filipino Rice Farmer</h2>
                <h1>Farmland Ownership</h1>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor<br/>incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>
        
        <!-- Body -->
        <div class="sublevel container">
            <div class="row">
                <div class="col">
                    <div class="card-deck mb-2 text-center">
                        <div class="card primary mb-4 bg-alternate-2">
                          <div class="card-body">
                            <h5 class="card-title pb-2">Irrigated Areas (2017)</h5>
                            <h1 class="card-text font-weight-bold"><?php echo $owned_irrigated['value']; ?>%<i class="bi bi-dash"></i></h1>
                            <div class="card-note w-50 mx-auto rounded-pill bg-primary"><p class="text-white">As Owners</p></div>
                          </div>
                        </div>
                        <div class="card primary mb-4 bg-primary-2 text-white">
                          <div class="card-body">
                            <h5 class="card-title pb-2">Tenurial Status (2017)</h5>
                            <h1 class="card-text font-weight-bold"><?php echo $owned_all['value']; ?>%<i class="bi bi-caret-up-fill"></i></h1>
                            <div class="card-note w-50 mx-auto rounded-pill"><p class="text-white">As Owners</p></div>
                          </div>
                        </div>
                        <div class="card primary mb-4 bg-alternate-2">
                          <div class="card-body">
                            <h5 class="card-title pb-2">Non-Irrigated Areas (2017)</h5>
                            <h1 class="card-text font-weight-bold"><?php echo $owned_rainfed['value']; ?>%<i class="bi bi-caret-up-fill"></i></h1>
                            <div class="card-note w-50 mx-auto rounded-pill bg-primary"><p class="text-white">As Owners</p></div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card mb-4">
                          <div class="card-header text-left">
                            <h5 class="my-0 pt-2 pb-2">Distribution of rice farmers, by tenurial status (1997-2017)</h5>
                            <p class="my-0 font-weight-normal text-muted">in percentage (RBFHS, PhilRice-SED, 2019)</p>
                          </div>
                          <div class="card-body">
                               <div><canvas id="ctxTenStat"></canvas></div>
                          </div>
                          <div class="card-footer text-muted">Legend (Arrangement): All Ecosystems - Irrigated - Rainfed<br/>Notes: Respondents provided multiple answers so the percentage exceeded 100.<br/>
                        All rice-based farm parcels reported by farmers are considered.</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card mb-4">
                        <div class="card-header text-left">
                            <h5 class="my-0 pt-2 pb-2">Distribution of rice farmers by tenurial status, by province (2017)</h5>
                            <p class="my-0 font-weight-normal text-muted">in percentage (RBFHS, PhilRice-SED, 2019)</p>
                        </div>
                        <div class="card-body">
                            <div><canvas id="ctxTenStatProv"></canvas></div>
                        </div>
                        <div class="card-footer text-muted">Notes: Respondents provided multiple answers so the percentage exceeded 100.<br/>
                        All rice-based farm parcels reported by farmers are considered.</div>
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
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-3.6.0.min.js" ></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap.bundle.min.js" ></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/chart.js" ></script>
        <script>
            Chart.defaults.global.responsive = true;
            Chart.defaults.global.tooltips.mode = 'index';
            Chart.defaults.global.tooltips.intersect = false;
            Chart.defaults.global.defaultFontFamily = 'Poppins';
            Chart.defaults.global.defaultFontSize = 13;
            Chart.defaults.global.animation.duration = 3000;
            
            // CHART 1
            
            var dbOTotal = JSON.parse('<?php echo $owned_all_yearly; ?>');
            var dbATotal = JSON.parse('<?php echo $amort_all_yearly; ?>');
            var dbLTotal = JSON.parse('<?php echo $lessee_all_yearly; ?>');
            var dbTTotal = JSON.parse('<?php echo $ten_all_yearly; ?>');
            var dbOtTotal = JSON.parse('<?php echo $other_all_yearly; ?>');
            var dbOIrrigated = JSON.parse('<?php echo $owned_irrigated_yearly; ?>');
            var dbAIrrigated = JSON.parse('<?php echo $amort_irrigated_yearly; ?>');
            var dbLIrrigated = JSON.parse('<?php echo $lessee_irrigated_yearly; ?>');
            var dbTIrrigated = JSON.parse('<?php echo $ten_irrigated_yearly; ?>');
            var dbOtIrrigated = JSON.parse('<?php echo $other_irrigated_yearly; ?>');
            var dbORainfed = JSON.parse('<?php echo $owned_rainfed_yearly; ?>');
            var dbARainfed = JSON.parse('<?php echo $amort_rainfed_yearly; ?>');
            var dbLRainfed = JSON.parse('<?php echo $lessee_rainfed_yearly; ?>');
            var dbTRainfed = JSON.parse('<?php echo $ten_rainfed_yearly; ?>');
            var dbOtRainfed = JSON.parse('<?php echo $other_rainfed_yearly; ?>');
                        
            let years = [];
            let values_ototal = [];
            let values_atotal = [];
            let values_ltotal = [];
            let values_ttotal = [];
            let values_ottotal = [];
            let values_oirrig = [];
            let values_airrig = [];
            let values_lirrig = [];
            let values_tirrig = [];
            let values_otirrig = [];
            let values_orain = [];
            let values_arain = [];
            let values_lrain = [];
            let values_train = [];
            let values_otrain = [];

            try {
              dbOTotal.map((item) => {
                years.push(item.year);
                values_ototal.push(item.value);
              });
              dbATotal.map((item) => {
                values_atotal.push(item.value);
              });
              dbLTotal.map((item) => {
                values_ltotal.push(item.value);
              });
              dbTTotal.map((item) => {
                values_ttotal.push(item.value);
              });
              dbOtTotal.map((item) => {
                values_ottotal.push(item.value);
              });
                
              dbOIrrigated.map((item) => {
                values_oirrig.push(item.value);
              });
              dbAIrrigated.map((item) => {
                values_airrig.push(item.value);
              });
              dbLIrrigated.map((item) => {
                values_lirrig.push(item.value);
              });
              dbTIrrigated.map((item) => {
                values_tirrig.push(item.value);
              });
              dbOtIrrigated.map((item) => {
                values_otirrig.push(item.value);
              });
                
            dbORainfed.map((item) => {
                values_orain.push(item.value);
            });
            dbARainfed.map((item) => {
                values_arain.push(item.value);
            });
            dbLRainfed.map((item) => {
                values_lrain.push(item.value);
            });
            dbTRainfed.map((item) => {
                values_train.push(item.value);
            });
            dbOtRainfed.map((item) => {
                values_otrain.push(item.value);
            });
            } catch (error) {
              console.log(error);
            }
            
            var tenStat = document.getElementById('ctxTenStat').getContext('2d');
            var tempPLabels = [...years];
            var oAllData = [...values_ototal];
            var aAllData = [...values_atotal];
            var lAllData = [...values_ltotal];
            var tAllData = [...values_ttotal];
            var otAllData = [...values_ottotal];
            var oIrrigData = [...values_oirrig];
            var aIrrigData = [...values_airrig];
            var lIrrigData = [...values_lirrig];
            var tIrrigData = [...values_tirrig];
            var otIrrigData = [...values_otirrig];
            var oRainData = [...values_orain];
            var aRainData = [...values_arain];
            var lRainData = [...values_lrain];
            var tRainData = [...values_train];
            var otRainData = [...values_otrain];
            var tenStatChart = new Chart(tenStat, {

                type: 'bar',

                data: {
                    labels: tempPLabels,
                    datasets: [{
                        label: 'Overall - Owner (%)',
                        backgroundColor: '#8794DF',    // COLOR 1
                        borderColor: '#8794DF',        // COLOR 1
                        data: oAllData,
                        stack: 'All'
                    },
                    {
                        label: 'Overall - Amortizing (%)',
                        backgroundColor: '#DBF968',    // COLOR 1
                        borderColor: '#DBF968',        // COLOR 1
                        data: aAllData,
                        stack: 'All'
                    },
                    {
                        label: 'Overall - Lessee (%)',
                        backgroundColor: '#FFD46A',    // COLOR 1
                        borderColor: '#FFD46A',        // COLOR 1
                        data: lAllData,
                        stack: 'All'
                    },
                    {
                        label: 'Overall - Tenant (%)',
                        backgroundColor: '#CF56C0',    // COLOR 1
                        borderColor: '#CF56C0',        // COLOR 1
                        data: tAllData,
                        stack: 'All'
                    },
                    {
                        label: 'Overall - Others (%)',
                        backgroundColor: '#4FCEB9',    // COLOR 1
                        borderColor: '#4FCEB9',        // COLOR 1
                        data: otAllData,
                        stack: 'All'
                    },                        
                    {
                        label: 'Irrigated - Owner (%)',   
                        backgroundColor: '#4255BF',      // COLOR 2
                        borderColor: '#4255BF',          // COLOR 2
                        data: oIrrigData,
                        stack: 'Irrigated'
                    },                        
                    {
                        label: 'Irrigated - Amortizing (%)',   
                        backgroundColor: '#D1F73E',      // COLOR 2
                        borderColor: '#D1F73E',          // COLOR 2
                        data: aIrrigData,
                        stack: 'Irrigated'
                    },                        
                    {
                        label: 'Irrigated - Lessee (%)',   
                        backgroundColor: '#FFC840',      // COLOR 2
                        borderColor: '#FFC840',          // COLOR 2
                        data: lIrrigData,
                        stack: 'Irrigated'
                    },
                    {
                        label: 'Irrigated - Tenant (%)',   
                        backgroundColor: '#C130AF',      // COLOR 2
                        borderColor: '#C130AF',          // COLOR 2
                        data: tIrrigData,
                        stack: 'Irrigated'
                    },
                    {
                        label: 'Irrigated - Others (%)',   
                        backgroundColor: '#28C3A9',      // COLOR 2
                        borderColor: '#28C3A9',          // COLOR 2
                        data: otIrrigData,
                        stack: 'Irrigated'
                    },
                    {
                        label: 'Rainfed - Owner (%)',
                        backgroundColor: '#1E35B2',   // COLOR 3
                        borderColor: '#1E35B2',       // COLOR 3
                        data: oRainData,
                        stack: 'Rainfed'
                    },
                    {
                        label: 'Rainfed - Amortizing (%)',
                        backgroundColor: '#A7D100',   // COLOR 3
                        borderColor: '#A7D100',       // COLOR 3
                        data: aRainData,
                        stack: 'Rainfed'
                    },
                    {
                        label: 'Rainfed - Lessee (%)',
                        backgroundColor: '#DA9B00',   // COLOR 3
                        borderColor: '#DA9B00',       // COLOR 3
                        data: lRainData,
                        stack: 'Rainfed'
                    },
                    {
                        label: 'Rainfed - Tenant (%)',
                        backgroundColor: '#970085',   // COLOR 3
                        borderColor: '#970085',       // COLOR 3
                        data: tRainData,
                        stack: 'Rainfed'
                    },
                    {
                        label: 'Rainfed - Others (%)',
                        backgroundColor: '#00937A',   // COLOR 3
                        borderColor: '#00937A',       // COLOR 3
                        data: otRainData,
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
            
            var dbOTotalP = JSON.parse('<?php echo $owned_all_provincial; ?>');
            var dbATotalP = JSON.parse('<?php echo $amort_all_provincial; ?>');
            var dbLTotalP = JSON.parse('<?php echo $lessee_all_provincial; ?>');
            var dbTTotalP = JSON.parse('<?php echo $ten_all_provincial; ?>');
            var dbOtTotalP = JSON.parse('<?php echo $other_all_provincial; ?>');
                        
            let provinces = [];
            let valuesp_ototal = [];
            let valuesp_atotal = [];
            let valuesp_ltotal = [];
            let valuesp_ttotal = [];
            let valuesp_ottotal = [];

            try {
              dbOTotalP.map((item) => {
                provinces.push(item.location_name);
                valuesp_ototal.push(item.value);
              });
              dbATotalP.map((item) => {
                valuesp_atotal.push(item.value);
              });
              dbLTotalP.map((item) => {
                valuesp_ltotal.push(item.value);
              });
              dbTTotalP.map((item) => {
                valuesp_ttotal.push(item.value);
              });
              dbOtTotalP.map((item) => {
                valuesp_ottotal.push(item.value);
              });
            } catch (error) {
              console.log(error);
            }
            
            var tenStatProv = document.getElementById('ctxTenStatProv').getContext('2d');
            var tempPrLabels = [...provinces];
            var oAllDataP = [...valuesp_ototal];
            var aAllDataP = [...valuesp_atotal];
            var lAllDataP = [...valuesp_ltotal];
            var tAllDataP = [...valuesp_ttotal];
            var otAllDataP = [...valuesp_ottotal];
            var tenStatProvChart = new Chart(tenStatProv, {

                type: 'horizontalBar',

                data: {
                    labels: tempPrLabels,
                    datasets: [{
                        label: 'Owner (%)',
                        backgroundColor: '#007FFE',    // COLOR 1
                        borderColor: '#007FFE',        // COLOR 1
                        data: oAllDataP,
                        stack: 'All'
                    },
                    {
                        label: 'Amortizing (%)',
                        backgroundColor: '#2138B7',    // COLOR 1
                        borderColor: '#2138B7',        // COLOR 1
                        data: aAllDataP,
                        stack: 'All'
                    },
                    {
                        label: 'Lessee (%)',
                        backgroundColor: '#A6CEE3',    // COLOR 1
                        borderColor: '#A6CEE3',        // COLOR 1
                        data: lAllDataP,
                        stack: 'All'
                    },
                    {
                        label: 'Tenant (%)',
                        backgroundColor: '#4698EA',    // COLOR 1
                        borderColor: '#4698EA',        // COLOR 1
                        data: tAllDataP,
                        stack: 'All'
                    },
                    {
                        label: 'Others (%)',
                        backgroundColor: '#0059B3',    // COLOR 1
                        borderColor: '#0059B3',        // COLOR 1
                        data: otAllDataP,
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
                            },
                            ticks: {
                                max: 120
                            }
                        }],
                        yAxes: [{
                            stacked: true,
                            display: true,
                            ticks: {
                                suggestedMin: 0,
                                stepSize: 20,
                                suggestedMax: 120
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