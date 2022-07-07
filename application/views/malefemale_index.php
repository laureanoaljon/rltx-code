<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Sex</title>
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
                <h1>Sex</h1>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor<br/>incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>
        
        <!-- Body -->
        <div class="sublevel farmer container">
            <div class="row">
                <div class="col">
                    <div class="card-deck mb-2 text-center">
                        <div class="card primary mb-4 bg-alternate-2">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title">Irrigated Areas</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 border-right">
                                        <h1 class="card-text font-weight-bold"><?php echo $male_irrigated['value']; ?>%<i class="bi bi-caret-down-fill"></i></h1>
                                        <div class="card-note w-50 mx-auto rounded-pill bg-primary">
                                            <p class="text-white">Male</p>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <h1 class="card-text font-weight-bold"><?php echo $female_irrigated['value']; ?>%<i class="bi bi-caret-up-fill"></i></h1>
                                        <div class="card-note w-50 mx-auto rounded-pill bg-primary">
                                            <p class="text-white">Female</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card primary mb-4 bg-primary-2 text-white">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title">Overall (2017)</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 border-right">
                                        <h1 class="card-text font-weight-bold"><?php echo $male_all['value']; ?>%<i class="bi bi-caret-down-fill"></i></h1>
                                        <div class="card-note w-50 mx-auto rounded-pill">
                                            <p class="text-white">Male</p>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <h1 class="card-text font-weight-bold"><?php echo $female_all['value']; ?>%<i class="bi bi-caret-up-fill"></i></h1>
                                        <div class="card-note w-50 mx-auto rounded-pill">
                                            <p class="text-white">Female</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card primary mb-4 bg-alternate-2">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title">Non-Irrigated Areas</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 border-right">
                                        <h1 class="card-text font-weight-bold"><?php echo $male_rainfed['value']; ?>%<i class="bi bi-caret-down-fill"></i></h1>
                                        <div class="card-note w-50 mx-auto rounded-pill bg-primary">
                                            <p class="text-white">Male</p>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <h1 class="card-text font-weight-bold"><?php echo $female_rainfed['value']; ?>%<i class="bi bi-caret-up-fill"></i></h1>
                                        <div class="card-note w-50 mx-auto rounded-pill bg-primary">
                                            <p class="text-white">Female</p>
                                        </div>
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
                            <h5 class="my-0 pt-2 pb-2">Distribution of rice farmers, by sex (1997-2017)</h5>
                            <p class="my-0 font-weight-normal text-muted">in percentage (RBFHS, PhilRice-SED, 2019)</p>
                          </div>
                          <div class="card-body">
                               <div><canvas id="ctxMaleFemale"></canvas></div>
                          </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card mb-4">
                        <div class="card-header text-left">
                            <h5 class="my-0 pt-2 pb-2">Distribution of rice farmers by sex, by province (2017)</h5>
                            <p class="my-0 font-weight-normal text-muted">in percentage (RBFHS, PhilRice-SED, 2019)</p>
                        </div>
                        <div class="card-body">
                            <table class="table table-hover">
                              <thead>
                                <tr>
                                  <th class="align-middle" scope="col" rowspan="2">Region/Province</th>
                                  <th class="text-center" scope="col" colspan="2">Overall</th>
                                  <th class="text-center" scope="col" colspan="2">Irrigated</th>
                                  <th class="text-center" scope="col" colspan="2">Rainfed</th>
                                </tr>
                                <tr>
                                  <th scope="col">Male (%)</th>
                                  <th scope="col">Female (%)</th>
                                  <th scope="col">Male (%)</th>
                                  <th scope="col">Female (%)</th>
                                  <th scope="col">Male (%)</th>
                                  <th scope="col">Female (%)</th>
                                </tr>
                              </thead>
                              <tbody>
                                  <?php
                                        $temp_region = $temp_prov = $cell_color = "";
                                        for ($i = 0; $i < count($male_provincial); $i++) {
                                            
                                            if($male_provincial[$i]['region'] != $temp_region){
                                                echo "<tr>";
                                                echo '<td colspan="7"><span class="font-weight-bold">'. $male_provincial[$i]['region'] . '</td>';
                                                echo "</tr>";
                                            }
                                            
                                            $temp_region = $male_provincial[$i]['region'];
                                            
                                            if($male_provincial[$i]['location_name'] != $temp_prov){
                                                echo "<tr>";
                                                echo "<td>" . $male_provincial[$i]['location_name'] . "</td>";
                                                
                                                for ($j=0; $j < 3; $j++){

                                                    echo '<td>'. $male_provincial[$i+$j]['value'] .'</td>';
                                                    echo '<td>'. $female_provincial[$i+$j]['value'] .'</td>';
                                    
                                                }

                                                echo "</tr>";  
                                            }
                                            
                                            $temp_prov = $male_provincial[$i]['location_name'];
                                            
                                        }
                                    ?>
                              </tbody>
                            </table>
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
            
            var dbTotal = JSON.parse('<?php echo $male_all_yearly; ?>');
            var dbIrrigated = JSON.parse('<?php echo $male_irrigated_yearly; ?>');
            var dbRainfed = JSON.parse('<?php echo $male_rainfed_yearly; ?>');
            var dbFTotal = JSON.parse('<?php echo $female_all_yearly; ?>');
            var dbFIrrigated = JSON.parse('<?php echo $female_irrigated_yearly; ?>');
            var dbFRainfed = JSON.parse('<?php echo $female_rainfed_yearly; ?>');
                        
            let years = [];
            let values_total = [];
            let values_irrig = [];
            let values_rain = [];
            let values_ftotal = [];
            let values_firrig = [];
            let values_frain = [];

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
              dbFTotal.map((item) => {
                values_ftotal.push(item.value);
              });
              dbFIrrigated.map((item) => {
                values_firrig.push(item.value);
              });
              dbFRainfed.map((item) => {
                values_frain.push(item.value);
              });
            } catch (error) {
              console.log(error);
            }
            
            var maleFemale = document.getElementById('ctxMaleFemale').getContext('2d');
            var tempPLabels = [...years];
            var prodAllData = [...values_total];
            var prodIrrigData = [...values_irrig];
            var prodRainData = [...values_rain];
            var prodfAllData = [...values_ftotal];
            var prodfIrrigData = [...values_firrig];
            var prodfRainData = [...values_frain];
            var maleFemaleChart = new Chart(maleFemale, {

                type: 'bar',

                data: {
                    labels: tempPLabels,
                    datasets: [{
                        label: 'Male - Overall (%)',
                        backgroundColor: '#007FFE',    // COLOR 1
                        borderColor: '#007FFE',        // COLOR 1
                        data: prodAllData,
                        stack: 'All'
                    },
                    {
                        label: 'Female - Overall (%)',
                        backgroundColor: '#FE00A5',    // COLOR 1
                        borderColor: '#FE00A5',        // COLOR 1
                        data: prodfAllData,
                        stack: 'All'
                    },                        
                    {
                        label: 'Male - Irrigated (%)',   
                        backgroundColor: '#2138B7',      // COLOR 2
                        borderColor: '#2138B7',          // COLOR 2
                        data: prodIrrigData,
                        stack: 'Irrigated'
                    },{
                        label: 'Female - Irrigated (%)',   
                        backgroundColor: '#B72165',      // COLOR 2
                        borderColor: '#B72165',          // COLOR 2
                        data: prodfIrrigData,
                        stack: 'Irrigated'
                    },
                    {
                        label: 'Male - Rainfed (%)',
                        backgroundColor: '#A6CEE3',   // COLOR 3
                        borderColor: '#A6CEE3',       // COLOR 3
                        data: prodRainData,
                        stack: 'Rainfed'
                    },
                    {
                        label: 'Female - Rainfed (%)',
                        backgroundColor: '#B5A6E3',   // COLOR 3
                        borderColor: '#B5A6E3',       // COLOR 3
                        data: prodfRainData,
                        stack: 'Rainfed'
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
                            display: true,
                            ticks: {
                                suggestedMin: 0,
                                stepSize: 20

                            }
                        }]
                    },
                    legend: {
                        position: 'bottom'
                    },
                    tooltips: {
                        mode: 'x',
                    }
                }
            });
        </script>
    </body>
</html>