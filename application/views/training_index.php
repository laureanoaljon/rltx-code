<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Training Attendance</title>
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
                <h1>Training Attendance</h1>
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
                            <h1 class="card-text font-weight-bold"><?php echo $mean_age_irrigated['value']; ?>%<i class="bi bi-caret-up-fill"></i></h1>
                            <div class="card-note w-75 mx-auto rounded-pill bg-primary"><p class="text-white">Attended Trainings</p></div>
                          </div>
                        </div>
                        <div class="card primary mb-4 bg-primary-2 text-white">
                          <div class="card-body">
                            <h5 class="card-title pb-2">Overall (2017)</h5>
                            <h1 class="card-text font-weight-bold"><?php echo $mean_age_all['value']; ?>%<i class="bi bi-caret-up-fill"></i></h1>
                            <div class="card-note w-75 mx-auto rounded-pill"><p class="text-white">Attended Trainings</p></div>
                          </div>
                        </div>
                        <div class="card primary mb-4 bg-alternate-2">
                          <div class="card-body">
                            <h5 class="card-title pb-2">Non-Irrigated Areas (2017)</h5>
                            <h1 class="card-text font-weight-bold"><?php echo $mean_age_rainfed['value']; ?>%<i class="bi bi-caret-up-fill"></i></h1>
                            <div class="card-note w-75 mx-auto rounded-pill bg-primary"><p class="text-white">Attended Trainings</p></div>
                          </div>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="row">
                <div class="col">
                    <div class="card mb-4">
                          <div class="card-header text-left">
                            <h5 class="my-0 pt-2 pb-2">Distribution of rice farmers that attended trainings (1997-2017)</h5>
                            <p class="my-0 font-weight-normal text-muted">in percentage (RBFHS, PhilRice-SED, 2019)</p>
                          </div>
                          <div class="card-body">
                               <div><canvas id="ctxMeanAge"></canvas></div>
                          </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card mb-4">
                        <div class="card-header text-left">
                            <h5 class="my-0 pt-2 pb-2">Distribution of rice farmers that attended trainings, by province (2017)</h5>
                            <p class="my-0 font-weight-normal text-muted">in percentage (RBFHS, PhilRice-SED, 2019)</p>
                        </div>
                        <div class="card-body">
                            <div><canvas id="ctxHouseholdMembers"></canvas></div>
                        </div>
                        <div class="card-footer text-muted">Note: [blank] = no samples in indicated ecosystem </div>
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
            
            var dbTotal = JSON.parse('<?php echo $mean_age_all_yearly; ?>');
            var dbIrrigated = JSON.parse('<?php echo $mean_age_irrigated_yearly; ?>');
            var dbRainfed = JSON.parse('<?php echo $mean_age_rainfed_yearly; ?>');
                        
            let years = [];
            let values_total = [];
            let values_irrig = [];
            let values_rain = [];

            try {
              dbTotal.map((item) => {
                years.push(item.year);
                values_total.push(item.value);
              });
              dbIrrigated.map((item) => {
                values_irrig.push(item.value);
              });
              dbRainfed.map((item) => {
                values_rain.push(item.value);
              });
            } catch (error) {
              console.log(error);
            }
            
            var meanAge = document.getElementById('ctxMeanAge').getContext('2d');
            var tempPLabels = [...years];
            var prodAllData = [...values_total];
            var prodIrrigData = [...values_irrig];
            var prodRainData = [...values_rain];
            var meanAgeChart = new Chart(meanAge, {

                type: 'bar',

                data: {
                    labels: tempPLabels,
                    datasets: [{
                        label: 'All ecosystems',
                        backgroundColor: '#007FFE',    // COLOR 1
                        borderColor: '#007FFE',        // COLOR 1
                        data: prodAllData
                    },                        
                    {
                        label: 'Irrigated',   
                        backgroundColor: '#2138B7',      // COLOR 2
                        borderColor: '#2138B7',          // COLOR 2
                        data: prodIrrigData
                    },
                    {
                        label: 'Rainfed',
                        backgroundColor: '#A6CEE3',   // COLOR 3
                        borderColor: '#A6CEE3',       // COLOR 3
                        data: prodRainData
                    }]
                },

                options: {
                    aspectRatio: 2.5,
                    scales: {
                        xAxes: [{
                            stacked: false,
                            display: true,
                            gridLines: {
                                color: "rgba(0, 0, 0, 0)"
                            }  
                        }],
                        yAxes: [{
                            stacked: false,
                            display: true,
                            ticks: {
                                suggestedMin: 0,
                                stepSize: 10,
                                max: 100
                            }
                        }]
                    },
                    legend: {
                        position: 'bottom'
                    }
                }
            });
            
            // CHART 2
            
            var dbRSTotal = JSON.parse('<?php echo $mean_age_provincial; ?>');
                        
            let provinces = [];
            let valuesp_stotal = [];
            
            try {
              dbRSTotal.map((item) => {
                provinces.push(item.location_name);
                valuesp_stotal.push(item.value);
              });
            } catch (error) {
              console.log(error);
            }
            
            var householdMembers = document.getElementById('ctxHouseholdMembers').getContext('2d');
            var tempPrLabels = [...provinces];
            var sAllDataP = [...valuesp_stotal];
            var householdMembersChart = new Chart(householdMembers, {

                type: 'horizontalBar',

                data: {
                    labels: tempPrLabels,
                    datasets: [{
                        label: 'Training Attendees (%)',
                        backgroundColor: '#007FFE',    // COLOR 1
                        borderColor: '#007FFE',        // COLOR 1
                        data: sAllDataP,
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
                                max: 100
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