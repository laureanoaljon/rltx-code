<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Civil Status</title>
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
        <!-- Navigation --->
        <nav class="navbar navbar-expand-lg navbar-dark">
          <a class="btn btn-secondary mr-2 text-white" href="<?php echo base_url(); ?>profilemain" role="button"><i class="bi bi-list"></i></a>
          <a class="btn btn-warning mr-2 text-white" href="<?php echo base_url(); ?>profilemain" role="button"><i class="bi bi-caret-left"></i> Back to Main</a>
        </nav>
        
        <!-- Header --->
        <div class="jumbotron text-center">
            <div class="jumbotron-content">
                <h2>Profile of the Filipino Rice Farmer</h2>
                <h1>Civil Status</h1>
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
                            <h1 class="card-text font-weight-bold"><?php echo $married_irrigated['value']; ?>%<i class="bi bi-caret-down-fill"></i></h1>
                            <div class="card-note w-50 mx-auto rounded-pill bg-primary"><p class="text-white">are married</p></div>
                          </div>
                        </div>
                        <div class="card primary mb-4 bg-primary-2 text-white">
                          <div class="card-body">
                            <h5 class="card-title pb-2">Overall (2017)</h5>
                            <h1 class="card-text font-weight-bold"><?php echo $married_all['value']; ?>%<i class="bi bi-caret-down-fill"></i></h1>
                            <div class="card-note w-50 mx-auto rounded-pill"><p class="text-white">are married</p></div>
                          </div>
                        </div>
                        <div class="card primary mb-4 bg-alternate-2">
                          <div class="card-body">
                            <h5 class="card-title pb-2">Non-Irrigated Areas (2017)</h5>
                            <h1 class="card-text font-weight-bold"><?php echo $married_rainfed['value']; ?>%<i class="bi bi-caret-down-fill"></i></h1>
                            <div class="card-note w-50 mx-auto rounded-pill bg-primary"><p class="text-white">are married</p></div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card mb-4">
                          <div class="card-header text-left">
                            <h5 class="my-0 pt-2 pb-2">Distribution of rice farmers, by civil status (1997-2017)</h5>
                            <p class="my-0 font-weight-normal text-muted">in percentage (RBFHS, PhilRice-SED, 2019)</p>
                          </div>
                          <div class="card-body">
                               <div><canvas id="ctxCivilStatus"></canvas></div>
                          </div>
                          <div class="card-footer text-muted">Legend (Arrangement): All Ecosystems - Irrigated - Rainfed</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card mb-4">
                        <div class="card-header text-left">
                            <h5 class="my-0 pt-2 pb-2">Distribution of rice farmers by civil status, by province (2017)</h5>
                            <p class="my-0 font-weight-normal text-muted">in percentage (RBFHS, PhilRice-SED, 2019)</p>
                        </div>
                        <div class="card-body">
                            <div><canvas id="ctxCivilStatusProv"></canvas></div>
                        </div>
                        <div class="card-footer text-muted">Note: May not total to 100% due to missing data</div>
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
            
            var dbSTotal = JSON.parse('<?php echo $single_all_yearly; ?>');
            var dbMTotal = JSON.parse('<?php echo $married_all_yearly; ?>');
            var dbWTotal = JSON.parse('<?php echo $widow_all_yearly; ?>');
            var dbSETotal = JSON.parse('<?php echo $separated_all_yearly; ?>');
            var dbSIrrigated = JSON.parse('<?php echo $single_irrigated_yearly; ?>');
            var dbMIrrigated = JSON.parse('<?php echo $married_irrigated_yearly; ?>');
            var dbWIrrigated = JSON.parse('<?php echo $widow_irrigated_yearly; ?>');
            var dbSEIrrigated = JSON.parse('<?php echo $separated_irrigated_yearly; ?>');
            var dbSRainfed = JSON.parse('<?php echo $single_rainfed_yearly; ?>');
            var dbMRainfed = JSON.parse('<?php echo $married_rainfed_yearly; ?>');
            var dbWRainfed = JSON.parse('<?php echo $widow_rainfed_yearly; ?>');
            var dbSERainfed = JSON.parse('<?php echo $separated_rainfed_yearly; ?>');
                        
            let years = [];
            let values_stotal = [];
            let values_mtotal = [];
            let values_wtotal = [];
            let values_setotal = [];
            let values_sirrig = [];
            let values_mirrig = [];
            let values_wirrig = [];
            let values_seirrig = [];
            let values_srain = [];
            let values_mrain = [];
            let values_wrain = [];
            let values_serain = [];

            try {
              dbSTotal.map((item) => {
                years.push(item.year);
                values_stotal.push(item.value);
              });
              dbMTotal.map((item) => {
                values_mtotal.push(item.value);
              });
              dbWTotal.map((item) => {
                values_wtotal.push(item.value);
              });
              dbSETotal.map((item) => {
                values_setotal.push(item.value);
              });
              dbSIrrigated.map((item) => {
                values_sirrig.push(item.value);
              });
              dbMIrrigated.map((item) => {
                values_mirrig.push(item.value);
              });
              dbWIrrigated.map((item) => {
                values_wirrig.push(item.value);
              });
              dbSEIrrigated.map((item) => {
                values_seirrig.push(item.value);
              });
              dbSRainfed.map((item) => {
                values_srain.push(item.value);
              });
             dbMRainfed.map((item) => {
                values_mrain.push(item.value);
              });
             dbWRainfed.map((item) => {
                values_wrain.push(item.value);
              });
             dbSERainfed.map((item) => {
                values_serain.push(item.value);
              });
            } catch (error) {
              console.log(error);
            }
            
            var civilStatus = document.getElementById('ctxCivilStatus').getContext('2d');
            var tempPLabels = [...years];
            var sAllData = [...values_stotal];
            var mAllData = [...values_mtotal];
            var wAllData = [...values_wtotal];
            var seAllData = [...values_setotal];
            var sIrrigData = [...values_sirrig];
            var mIrrigData = [...values_mirrig];
            var wIrrigData = [...values_wirrig];
            var seIrrigData = [...values_seirrig];
            var sRainData = [...values_srain];
            var mRainData = [...values_mrain];
            var wRainData = [...values_wrain];
            var seRainData = [...values_serain];
            var civilStatusChart = new Chart(civilStatus, {

                type: 'bar',

                data: {
                    labels: tempPLabels,
                    datasets: [{
                        label: 'Overall - Single (%)',
                        backgroundColor: '#8794DF',    // COLOR 1
                        borderColor: '#5C72ED',        // COLOR 1
                        data: sAllData,
                        stack: 'All'
                    },
                    {
                        label: 'Overall - Married (%)',
                        backgroundColor: '#DBF968',    // COLOR 1
                        borderColor: '#DBF968',        // COLOR 1
                        data: mAllData,
                        stack: 'All'
                    },
                    {
                        label: 'Overall - Widow/Widower (%)',
                        backgroundColor: '#FFD46A',    // COLOR 1
                        borderColor: '#FFD46A',        // COLOR 1
                        data: wAllData,
                        stack: 'All'
                    },
                    {
                        label: 'Overall - Separated (%)',
                        backgroundColor: '#CF56C0',    // COLOR 1
                        borderColor: '#CF56C0',        // COLOR 1
                        data: seAllData,
                        stack: 'All'
                    },                        
                    {
                        label: 'Irrigated - Single (%)',   
                        backgroundColor: '#4255BF',      // COLOR 2
                        borderColor: '#4255BF',          // COLOR 2
                        data: sIrrigData,
                        stack: 'Irrigated'
                    },                        
                    {
                        label: 'Irrigated - Married (%)',   
                        backgroundColor: '#D1F73E',      // COLOR 2
                        borderColor: '#D1F73E',          // COLOR 2
                        data: mIrrigData,
                        stack: 'Irrigated'
                    },                        
                    {
                        label: 'Irrigated - Widow/Widower (%)',   
                        backgroundColor: '#FFC840',      // COLOR 2
                        borderColor: '#FFC840',          // COLOR 2
                        data: wIrrigData,
                        stack: 'Irrigated'
                    },
                    {
                        label: 'Irrigated - Separated (%)',   
                        backgroundColor: '#C130AF',      // COLOR 2
                        borderColor: '#C130AF',          // COLOR 2
                        data: seIrrigData,
                        stack: 'Irrigated'
                    },
                    {
                        label: 'Rainfed - Single (%)',
                        backgroundColor: '#1E35B2',   // COLOR 3
                        borderColor: '#1E35B2',       // COLOR 3
                        data: sRainData,
                        stack: 'Rainfed'
                    },
                    {
                        label: 'Rainfed - Married (%)',
                        backgroundColor: '#A7D100',   // COLOR 3
                        borderColor: '#A7D100',       // COLOR 3
                        data: mRainData,
                        stack: 'Rainfed'
                    },
                    {
                        label: 'Rainfed - Widow/Widower (%)',
                        backgroundColor: '#DA9B00',   // COLOR 3
                        borderColor: '#DA9B00',       // COLOR 3
                        data: wRainData,
                        stack: 'Rainfed'
                    },
                    {
                        label: 'Rainfed - Separated (%)',
                        backgroundColor: '#970085',   // COLOR 3
                        borderColor: '#970085',       // COLOR 3
                        data: seRainData,
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
                        mode: 'x'
                    }
                }
            });
            
            
            // CHART 2
            
            var dbRSTotal = JSON.parse('<?php echo $single_all_provincial; ?>');
            var dbRMTotal = JSON.parse('<?php echo $married_all_provincial; ?>');
            var dbRWTotal = JSON.parse('<?php echo $widow_all_provincial; ?>');
            var dbRSETotal = JSON.parse('<?php echo $separated_all_provincial; ?>');
                        
            let provinces = [];
            let valuesp_stotal = [];
            let valuesp_mtotal = [];
            let valuesp_wtotal = [];
            let valuesp_setotal = [];

            try {
              dbRSTotal.map((item) => {
                provinces.push(item.location_name);
                valuesp_stotal.push(item.value);
              });
              dbRMTotal.map((item) => {
                valuesp_mtotal.push(item.value);
              });
              dbRWTotal.map((item) => {
                valuesp_wtotal.push(item.value);
              });
              dbRSETotal.map((item) => {
                valuesp_setotal.push(item.value);
              });
            } catch (error) {
              console.log(error);
            }
            
            var CivilStatusProv = document.getElementById('ctxCivilStatusProv').getContext('2d');
            var tempPrLabels = [...provinces];
            var sAllDataP = [...valuesp_stotal];
            var mAllDataP = [...valuesp_mtotal];
            var wAllDataP = [...valuesp_wtotal];
            var seAllDataP = [...valuesp_setotal];
            var CivilStatusProvChart = new Chart(CivilStatusProv, {

                type: 'horizontalBar',

                data: {
                    labels: tempPrLabels,
                    datasets: [{
                        label: 'Single (%)',
                        backgroundColor: '#007FFE',    // COLOR 1
                        borderColor: '#007FFE',        // COLOR 1
                        data: sAllDataP,
                        stack: 'All'
                    },
                    {
                        label: 'Married (%)',
                        backgroundColor: '#2138B7',    // COLOR 1
                        borderColor: '#2138B7',        // COLOR 1
                        data: mAllDataP,
                        stack: 'All'
                    },
                    {
                        label: 'Widow/Widower (%)',
                        backgroundColor: '#A6CEE3',    // COLOR 1
                        borderColor: '#A6CEE3',        // COLOR 1
                        data: wAllDataP,
                        stack: 'All'
                    },
                    {
                        label: 'Separated (%)',
                        backgroundColor: '#B72165',    // COLOR 1
                        borderColor: '#B72165',        // COLOR 1
                        data: seAllDataP,
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