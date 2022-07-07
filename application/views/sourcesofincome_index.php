<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Major Source of Income</title>
        <meta name="description" content="Production Charts">
        <?php 
            echo link_tag('css/bootstrap-reboot.min.css');
            echo link_tag('css/bootstrap.min.css');
            echo link_tag('css/bootstrap-grid.min.css');
            echo link_tag('css/bootstrap-icons.css');
            echo link_tag('css/styles.css');  
        ?>
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
                <h1>Major Source of Income</h1>
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
                            <h1 class="card-text font-weight-bold"><?php echo $rice_irrigated['value']; ?>%<i class="bi bi-caret-down-fill"></i></h1>
                            <div class="card-note w-50 mx-auto rounded-pill bg-primary"><p class="text-white">Rice Farming</p></div>
                          </div>
                        </div>
                        <div class="card primary mb-4 bg-primary-2 text-white">
                          <div class="card-body">
                            <h5 class="card-title pb-2">Overall (2017)</h5>
                            <h1 class="card-text font-weight-bold"><?php echo $rice_all['value']; ?>%<i class="bi bi-caret-down-fill"></i></h1>
                            <div class="card-note w-50 mx-auto rounded-pill"><p class="text-white">Rice Farming</p></div>
                          </div>
                        </div>
                        <div class="card primary mb-4 bg-alternate-2">
                          <div class="card-body">
                            <h5 class="card-title pb-2">Non-Irrigated Areas (2017)</h5>
                            <h1 class="card-text font-weight-bold"><?php echo $rice_rainfed['value']; ?>%<i class="bi bi-caret-down-fill"></i></h1>
                            <div class="card-note w-50 mx-auto rounded-pill bg-primary"><p class="text-white">Rice Farming</p></div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card mb-4">
                          <div class="card-header text-left">
                            <h5 class="my-0 pt-2 pb-2">Distribution of rice farmers, by major source of income (1997-2017)</h5>
                            <p class="my-0 font-weight-normal text-muted">in percentage (RBFHS, PhilRice-SED, 2019)</p>
                          </div>
                          <div class="card-body">
                               <div><canvas id="ctxMajorSource"></canvas></div>
                          </div>
                          <div class="card-footer text-muted">Legend (Arrangement): All Ecosystems - Irrigated - Rainfed<br/>Note: Only rice farming and other sources categories are applicable for 1997 and 2002 survey period.</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card mb-4">
                        <div class="card-header text-left">
                            <h5 class="my-0 pt-2 pb-2">Distribution of rice farmers by major source of income, by province (2017)</h5>
                            <p class="my-0 font-weight-normal text-muted">in percentage (RBFHS, PhilRice-SED, 2019)</p>
                        </div>
                        <div class="card-body">
                            <div><canvas id="ctxMajorSourceProv"></canvas></div>
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
            
            var dbRTotal = JSON.parse('<?php echo $rice_all_yearly; ?>');
            var dbVTotal = JSON.parse('<?php echo $veg_all_yearly; ?>');
            var dbSTotal = JSON.parse('<?php echo $self_all_yearly; ?>');
            var dbLTotal = JSON.parse('<?php echo $live_all_yearly; ?>');
            var dbSATotal = JSON.parse('<?php echo $salary_all_yearly; ?>');
            var dbOTotal = JSON.parse('<?php echo $other_all_yearly; ?>');
            var dbRIrrigated = JSON.parse('<?php echo $rice_irrigated_yearly; ?>');
            var dbVIrrigated = JSON.parse('<?php echo $veg_irrigated_yearly; ?>');
            var dbSIrrigated = JSON.parse('<?php echo $self_irrigated_yearly; ?>');
            var dbLIrrigated = JSON.parse('<?php echo $live_irrigated_yearly; ?>');
            var dbSAIrrigated = JSON.parse('<?php echo $salary_irrigated_yearly; ?>');
            var dbOIrrigated = JSON.parse('<?php echo $other_irrigated_yearly; ?>');
            var dbRRainfed = JSON.parse('<?php echo $rice_rainfed_yearly; ?>');
            var dbVRainfed = JSON.parse('<?php echo $veg_rainfed_yearly; ?>');
            var dbSRainfed = JSON.parse('<?php echo $self_rainfed_yearly; ?>');
            var dbLRainfed = JSON.parse('<?php echo $live_rainfed_yearly; ?>');
            var dbSARainfed = JSON.parse('<?php echo $salary_rainfed_yearly; ?>');
            var dbORainfed = JSON.parse('<?php echo $other_rainfed_yearly; ?>');
                        
            let years = [];
            let values_rtotal = [];
            let values_vtotal = [];
            let values_stotal = [];
            let values_ltotal = [];
            let values_satotal = [];
            let values_ototal = [];
            let values_rirrig = [];
            let values_virrig = [];
            let values_sirrig = [];
            let values_lirrig = [];
            let values_sairrig = [];
            let values_oirrig = [];
            let values_rrain = [];
            let values_vrain = [];
            let values_srain = [];
            let values_lrain = [];
            let values_sarain = [];
            let values_orain = [];

            try {
              dbRTotal.map((item) => {
                years.push(item.year);
                values_rtotal.push(item.value);
              });
              dbVTotal.map((item) => {
                values_vtotal.push(item.value);
              });
              dbSTotal.map((item) => {
                values_stotal.push(item.value);
              });
              dbLTotal.map((item) => {
                values_ltotal.push(item.value);
              });
              dbSATotal.map((item) => {
                values_satotal.push(item.value);
              });
              dbOTotal.map((item) => {
                values_ototal.push(item.value);
              });
                
              dbRIrrigated.map((item) => {
                values_rirrig.push(item.value);
              });
              dbVIrrigated.map((item) => {
                values_virrig.push(item.value);
              });
              dbSIrrigated.map((item) => {
                values_sirrig.push(item.value);
              });
              dbLIrrigated.map((item) => {
                values_lirrig.push(item.value);
              });
              dbSAIrrigated.map((item) => {
                values_sairrig.push(item.value);
              });
              dbOIrrigated.map((item) => {
                values_oirrig.push(item.value);
              });
                
            dbRRainfed.map((item) => {
                values_rrain.push(item.value);
            });
            dbVRainfed.map((item) => {
                values_vrain.push(item.value);
            });
            dbSRainfed.map((item) => {
                values_srain.push(item.value);
            });
            dbLRainfed.map((item) => {
                values_lrain.push(item.value);
            });
            dbSARainfed.map((item) => {
                values_sarain.push(item.value);
            });
            dbORainfed.map((item) => {
                values_orain.push(item.value);
            });
            } catch (error) {
              console.log(error);
            }
            
            var majorSource = document.getElementById('ctxMajorSource').getContext('2d');
            var tempPLabels = [...years];
            var rAllData = [...values_rtotal];
            var vAllData = [...values_vtotal];
            var sAllData = [...values_stotal];
            var lAllData = [...values_ltotal];
            var saAllData = [...values_satotal];
            var oAllData = [...values_ototal];
            var rIrrigData = [...values_rirrig];
            var vIrrigData = [...values_virrig];
            var sIrrigData = [...values_sirrig];
            var lIrrigData = [...values_lirrig];
            var saIrrigData = [...values_sairrig];
            var oIrrigData = [...values_oirrig];
            var rRainData = [...values_rrain];
            var vRainData = [...values_vrain];
            var sRainData = [...values_srain];
            var lRainData = [...values_lrain];
            var saRainData = [...values_sarain];
            var oRainData = [...values_orain];
            var majorSourceChart = new Chart(majorSource, {

                type: 'bar',

                data: {
                    labels: tempPLabels,
                    datasets: [{
                        label: 'Overall - Rice Farming (%)',
                        backgroundColor: '#8794DF',    // COLOR 1
                        borderColor: '#8794DF',        // COLOR 1
                        data: rAllData,
                        stack: 'All'
                    },
                    {
                        label: 'Overall - Vegetable Farming (%)',
                        backgroundColor: '#DBF968',    // COLOR 1
                        borderColor: '#DBF968',        // COLOR 1
                        data: vAllData,
                        stack: 'All'
                    },
                    {
                        label: 'Overall - Self-Employment (%)',
                        backgroundColor: '#FFD46A',    // COLOR 1
                        borderColor: '#FFD46A',        // COLOR 1
                        data: sAllData,
                        stack: 'All'
                    },
                    {
                        label: 'Overall - Livestock (%)',
                        backgroundColor: '#CF56C0',    // COLOR 1
                        borderColor: '#CF56C0',        // COLOR 1
                        data: lAllData,
                        stack: 'All'
                    },
                    {
                        label: 'Overall - Salary Employment (%)',
                        backgroundColor: '#4FCEB9',    // COLOR 1
                        borderColor: '#4FCEB9',        // COLOR 1
                        data: saAllData,
                        stack: 'All'
                    },
                    {
                        label: 'Overall - Other Sources (%)',
                        backgroundColor: '#794486',    // COLOR 1
                        borderColor: '#794486',        // COLOR 1
                        data: oAllData,
                        stack: 'All'
                    },                        
                    {
                        label: 'Irrigated - Rice Farming (%)',   
                        backgroundColor: '#4255BF',      // COLOR 2
                        borderColor: '#4255BF',          // COLOR 2
                        data: rIrrigData,
                        stack: 'Irrigated'
                    },                        
                    {
                        label: 'Irrigated - Vegetable Farming (%)',   
                        backgroundColor: '#D1F73E',      // COLOR 2
                        borderColor: '#D1F73E',          // COLOR 2
                        data: vIrrigData,
                        stack: 'Irrigated'
                    },                        
                    {
                        label: 'Irrigated - Self-Employed (%)',   
                        backgroundColor: '#FFC840',      // COLOR 2
                        borderColor: '#FFC840',          // COLOR 2
                        data: sIrrigData,
                        stack: 'Irrigated'
                    },
                    {
                        label: 'Irrigated - Livestock (%)',   
                        backgroundColor: '#C130AF',      // COLOR 2
                        borderColor: '#C130AF',          // COLOR 2
                        data: lIrrigData,
                        stack: 'Irrigated'
                    },
                    {
                        label: 'Irrigated - Salary Employment (%)',   
                        backgroundColor: '#28C3A9',      // COLOR 2
                        borderColor: '#28C3A9',          // COLOR 2
                        data: saIrrigData,
                        stack: 'Irrigated'
                    },
                    {
                        label: 'Irrigated - Other Sources (%)',   
                        backgroundColor: '#5E266C',      // COLOR 2
                        borderColor: '#5E266C',          // COLOR 2
                        data: oIrrigData,
                        stack: 'Irrigated'
                    },
                    {
                        label: 'Rainfed - Rice Farming (%)',
                        backgroundColor: '#1E35B2',   // COLOR 3
                        borderColor: '#1E35B2',       // COLOR 3
                        data: rRainData,
                        stack: 'Rainfed'
                    },
                    {
                        label: 'Rainfed - Vegetable Farming (%)',
                        backgroundColor: '#A7D100',   // COLOR 3
                        borderColor: '#A7D100',       // COLOR 3
                        data: vRainData,
                        stack: 'Rainfed'
                    },
                    {
                        label: 'Rainfed - Self-Employed (%)',
                        backgroundColor: '#DA9B00',   // COLOR 3
                        borderColor: '#DA9B00',       // COLOR 3
                        data: sRainData,
                        stack: 'Rainfed'
                    },
                    {
                        label: 'Rainfed - Livestock (%)',
                        backgroundColor: '#970085',   // COLOR 3
                        borderColor: '#970085',       // COLOR 3
                        data: lRainData,
                        stack: 'Rainfed'
                    },
                    {
                        label: 'Rainfed - Salary Employment (%)',
                        backgroundColor: '#00937A',   // COLOR 3
                        borderColor: '#00937A',       // COLOR 3
                        data: saRainData,
                        stack: 'Rainfed'
                    },
                    {
                        label: 'Rainfed - Other Sources (%)',
                        backgroundColor: '#2D0337',   // COLOR 3
                        borderColor: '#2D0337',       // COLOR 3
                        data: oRainData,
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
            
            var dbRTotalP = JSON.parse('<?php echo $rice_all_provincial; ?>');
            var dbVTotalP = JSON.parse('<?php echo $veg_all_provincial; ?>');
            var dbSTotalP = JSON.parse('<?php echo $self_all_provincial; ?>');
            var dbLTotalP = JSON.parse('<?php echo $live_all_provincial; ?>');
            var dbSATotalP = JSON.parse('<?php echo $salary_all_provincial; ?>');
            var dbOTotalP = JSON.parse('<?php echo $other_all_provincial; ?>');
                        
            let provinces = [];
            let valuesp_rtotal = [];
            let valuesp_vtotal = [];
            let valuesp_stotal = [];
            let valuesp_ltotal = [];
            let valuesp_satotal = [];
            let valuesp_ototal = [];

            try {
              dbRTotalP.map((item) => {
                provinces.push(item.location_name);
                valuesp_rtotal.push(item.value);
              });
              dbVTotalP.map((item) => {
                valuesp_vtotal.push(item.value);
              });
              dbSTotalP.map((item) => {
                valuesp_stotal.push(item.value);
              });
              dbLTotalP.map((item) => {
                valuesp_ltotal.push(item.value);
              });
              dbSATotalP.map((item) => {
                valuesp_satotal.push(item.value);
              });
              dbOTotalP.map((item) => {
                valuesp_ototal.push(item.value);
              });
            } catch (error) {
              console.log(error);
            }
            
            var majorSourceProv = document.getElementById('ctxMajorSourceProv').getContext('2d');
            var tempPrLabels = [...provinces];
            var rAllDataP = [...valuesp_rtotal];
            var vAllDataP = [...valuesp_vtotal];
            var sAllDataP = [...valuesp_stotal];
            var lAllDataP = [...valuesp_ltotal];
            var saAllDataP = [...valuesp_satotal];
            var oAllDataP = [...valuesp_ototal];
            var majorSourceProvChart = new Chart(majorSourceProv, {

                type: 'horizontalBar',

                data: {
                    labels: tempPrLabels,
                    datasets: [{
                        label: 'Rice Farming (%)',
                        backgroundColor: '#0059B3',    // COLOR 1
                        borderColor: '#0059B3',        // COLOR 1
                        data: rAllDataP,
                        stack: 'All'
                    },
                    {
                        label: 'Vegetable Farming (%)',
                        backgroundColor: '#2138B7',    // COLOR 1
                        borderColor: '#2138B7',        // COLOR 1
                        data: vAllDataP,
                        stack: 'All'
                    },
                    {
                        label: 'Self-Employment (%)',
                        backgroundColor: '#A6CEE3',    // COLOR 1
                        borderColor: '#A6CEE3',        // COLOR 1
                        data: sAllDataP,
                        stack: 'All'
                    },
                    {
                        label: 'Livestock (%)',
                        backgroundColor: '#007FFE',    // COLOR 1
                        borderColor: '#007FFE',        // COLOR 1
                        data: lAllDataP,
                        stack: 'All'
                    },
                    {
                        label: 'Salary Employment (%)',
                        backgroundColor: '#4698EA',    // COLOR 1
                        borderColor: '#4698EA',        // COLOR 1
                        data: saAllDataP,
                        stack: 'All'
                    },
                    {
                        label: 'Other Sources (%)',
                        backgroundColor: '#0059B3',    // COLOR 1
                        borderColor: '#0059B3',        // COLOR 1
                        data: oAllDataP,
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