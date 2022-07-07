<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Fertilizer Rate</title>
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
                        <a class="w-100 mr-2 text-white text-center d-block" href="<?php echo base_url(); ?>" role="button">Rice Industry</a>
                        <a class="w-100 mr-2 text-white text-center d-block" href="<?php echo base_url(); ?>profilemain" role="button">Rice Farmer</a>
                        <a class="active w-100 mr-2 text-white text-center d-block" href="<?php echo base_url(); ?>farmpractices" role="button">Farming Practices</a>
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
          <a class="btn btn-warning mr-2 text-white" href="<?php echo base_url(); ?>farmpractices" role="button"><i class="bi bi-caret-left"></i> Back to Main</a>
        </nav>
        
        <!-- Header --->
        <div id="fertuse" class="jumbotron text-center">
            <div class="jumbotron-content">
                <h2>Rice Farming Practices in the Philippines</h2>
                <h1>Fertilizer Rate</h1>
            </div>
        </div>
        
        <!-- Body -->
        <div class="sublevel">
            <div class="row">
                <div class="col">
                    <div class="card-deck mb-2 text-center">
                        <div class="card primary mb-2 bg-primary-3 text-white">
                          <div class="card-body">
                               <div class="row">
                                    <div class="col">
                                        <h5 class="card-title pb-2 text-center">Wet Season (2016)</h5>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col border-right">
                                        <p class="card-title-note">Nitrogen (N)</p>
                                        <h1 class="card-text font-weight-bold smaller"><?php echo number_format($n_all['value'], 0); ?><i class="bi bi-caret-up-fill"></i></h1>
                                    </div>
                                    <div class="col border-right">
                                        <p class="card-title-note">Phosphorus (P)</p>
                                        <h1 class="card-text font-weight-bold smaller"><?php echo number_format($p_all['value'], 0); ?><i class="bi bi-caret-down-fill"></i></h1>
                                    </div>
                                    <div class="col">
                                        <p class="card-title-note">Potassium (K)</p>
                                        <h1 class="card-text font-weight-bold smaller"><?php echo number_format($k_all['value'], 0); ?><i class="bi bi-caret-up-fill"></i></h1>
                                    </div>
                                </div>
                                <div class="card-note w-50 mx-auto mt-2 rounded-pill bg-alternate"><p class="text-white">kilograms per hectare</p></div>
                            </div>
                        </div>
                        <div class="card primary mb-2 bg-warning-2 text-white">
                          <div class="card-body">
                               <div class="row">
                                    <div class="col">
                                        <h5 class="card-title pb-2 text-center">Dry Season (2017)</h5>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col border-right">
                                        <p class="card-title-note">Nitrogen (N)</p>
                                        <h1 class="card-text font-weight-bold smaller"><?php echo number_format($n_ds['value'], 0); ?><i class="bi bi-caret-down-fill"></i></h1>
                                    </div>
                                    <div class="col border-right">
                                        <p class="card-title-note">Phosphorus (P)</p>
                                        <h1 class="card-text font-weight-bold smaller"><?php echo number_format($p_ds['value'], 0); ?><i class="bi bi-caret-down-fill"></i></h1>
                                    </div>
                                    <div class="col">
                                        <p class="card-title-note">Potassium (K)</p>
                                        <h1 class="card-text font-weight-bold smaller"><?php echo number_format($k_ds['value'], 0); ?><i class="bi bi-dash"></i></h1>
                                    </div>
                                </div>
                                <div class="card-note w-50 mx-auto mt-2 rounded-pill bg-alternate"><p class="text-white">kilograms per hectare</p></div>
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
                            <h5 class="my-0 pt-2 pb-2">Amount of NPK Applied by Hectare During Wet Season (1996 WS-2016 WS)</h5>
                            <p class="my-0 font-weight-normal text-muted">in kilograms per hectare (RBFHS, PhilRice-SED, 2019)</p>
                          </div>
                          <div class="card-body">
                               <div><canvas id="ctxChart1"></canvas></div>
                          </div>
                        <div class="card-footer text-muted">
	Data Source: <a href="https://palaystat.philrice.gov.ph/profile/retrieve/table/65" target="_blank">Average N-P-K component per fertilizer use, by cropping season - PalayStat System</a>
</div>
                    </div>
                </div>
                 <div class="col">
                    <div class="card mb-4">
                          <div class="card-header text-left">
<a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a>
                            <h5 class="my-0 pt-2 pb-2">Amount of NPK Applied by Hectare During Wet Season (1997 WS-2017 DS)</h5>
                            <p class="my-0 font-weight-normal text-muted">in kilograms per hectare (RBFHS, PhilRice-SED, 2019)</p>
                          </div>
                          <div class="card-body">
                               <div><canvas id="ctxChart2"></canvas></div>
                          </div>
                        <div class="card-footer text-muted">
	Data Source: <a href="https://palaystat.philrice.gov.ph/profile/retrieve/table/65" target="_blank">Average N-P-K component per fertilizer use, by cropping season - PalayStat System</a>
</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card mb-4">
                        <div class="card-header text-left">
<a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Table</a>
                            <h5 class="my-0 pt-2 pb-2">Average amount of NPK rate per province (2016 WS-2017 DS)</h5>
                            <p class="my-0 font-weight-normal text-muted">in kilogram per hectare (RBFHS, PhilRice-SED, 2019)</p>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-center">
                                <div class="legend-box bg-above-light"></div><p class="d-inline-block text-capitalize">Value Above Average</p>
                                <div class="legend-box bg-same-light"></div><p class="d-inline-block text-capitalize">Same Value</p>
                                <div class="legend-box bg-below-light"></div><p class="d-inline-block text-capitalize">Value Below Average</p>
                            </div>
                            <table class="table table-hover">
                              <thead>
                                <tr>
                                  <th class="text-center align-middle" scope="col" rowspan="2">Region/Province</th>
                                  <th class="text-center" scope="col" colspan="3">2016 Wet Season</th>
                                  <th class="text-center" scope="col" colspan="3">2017 Dry Season</th>
                                </tr>
                                <tr>
                                  <th class="text-center" scope="col">N</th>
                                  <th class="text-center" scope="col">P</th>
                                  <th class="text-center" scope="col">K</th>
                                  <th class="text-center" scope="col">N</th>
                                  <th class="text-center" scope="col">P</th>
                                  <th class="text-center" scope="col">K</th>
                                </tr>
                              </thead>
                              <tbody>
                                  <?php
                                        $temp_region = $temp_prov = $cell_color = "";
                                        for ($i = 0; $i < count($average_provincial); $i++) {
                                            
                                            if($average_provincial[$i]['region'] != $temp_region){
                                                echo "<tr>";
                                                echo '<td colspan="5"><span class="font-weight-bold">'. $average_provincial[$i]['region'] . '</td>';
                                                echo "</tr>";
                                            }
                                            
                                            $temp_region = $average_provincial[$i]['region'];
                                            
                                            if($average_provincial[$i]['location_name'] != $temp_prov){
                                                echo "<tr>";
                                                echo "<td>" . $average_provincial[$i]['location_name'] . "</td>";
                                                                                                    
                                                if ($n_all['value'] == $n_provincial[$i]['value']){
                                                    $cell_color = "table-warning";
                                                } elseif ($n_provincial[$i]['value'] == 0){
                                                    $cell_color = "table-default";
                                                } elseif ($n_all['value'] > $n_provincial[$i]['value']){
                                                    $cell_color = "table-danger";
                                                } else {
                                                    $cell_color = "table-success";
                                                }
                                                 echo '<td class="text-center '. $cell_color .'">'. number_format($n_provincial[$i]['value'], 0) .'</td>';
                                                
                                                if ($p_all['value'] == $p_provincial[$i]['value']){
                                                    $cell_color = "table-warning";
                                                } elseif ($p_provincial[$i]['value'] == 0){
                                                    $cell_color = "table-default";
                                                } elseif ($p_all['value'] > $p_provincial[$i]['value']){
                                                    $cell_color = "table-danger";
                                                } else {
                                                    $cell_color = "table-success";
                                                }
                                                 echo '<td class="text-center '. $cell_color .'">'. number_format($p_provincial[$i]['value'], 0) .'</td>';
                                                
                                                if ($k_all['value'] == $k_provincial[$i]['value']){
                                                    $cell_color = "table-warning";
                                                } elseif ($k_provincial[$i]['value'] == 0){
                                                    $cell_color = "table-default";
                                                } elseif ($k_all['value'] > $k_provincial[$i]['value']){
                                                    $cell_color = "table-danger";
                                                } else {
                                                    $cell_color = "table-success";
                                                }
                                                echo '<td class="text-center '. $cell_color .'">'. number_format($k_provincial[$i]['value'], 0) .'</td>';
                                                
                                                if ($n_ds['value'] == $n_ds_provincial[$i]['value']){
                                                    $cell_color = "table-warning";
                                                } elseif ($n_ds_provincial[$i]['value'] == 0){
                                                    $cell_color = "table-default";
                                                } elseif ($n_ds['value'] > $n_ds_provincial[$i]['value']){
                                                    $cell_color = "table-danger";
                                                } else {
                                                    $cell_color = "table-success";
                                                }
                                                 echo '<td class="text-center '. $cell_color .'">'. number_format($n_ds_provincial[$i]['value'], 0) .'</td>';
                                                
                                                if ($p_ds['value'] == $p_ds_provincial[$i]['value']){
                                                    $cell_color = "table-warning";
                                                } elseif ($p_ds_provincial[$i]['value'] == 0){
                                                    $cell_color = "table-default";
                                                } elseif ($p_ds['value'] > $p_ds_provincial[$i]['value']){
                                                    $cell_color = "table-danger";
                                                } else {
                                                    $cell_color = "table-success";
                                                }
                                                 echo '<td class="text-center '. $cell_color .'">'. number_format($p_ds_provincial[$i]['value'], 0) .'</td>';
                                                
                                                if ($k_ds['value'] == $k_ds_provincial[$i]['value']){
                                                    $cell_color = "table-warning";
                                                } elseif ($k_provincial[$i]['value'] == 0){
                                                    $cell_color = "table-default";
                                                } elseif ($k_ds['value'] > $k_ds_provincial[$i]['value']){
                                                    $cell_color = "table-danger";
                                                } else {
                                                    $cell_color = "table-success";
                                                }
                                                echo '<td class="text-center '. $cell_color .'">'. number_format($k_ds_provincial[$i]['value'], 0) .'</td>';
                                                echo "</tr>";
                                            }
                                            
                                            $temp_prov = $average_provincial[$i]['location_name'];
                                            
                                        }
                                    ?>
                              </tbody>
                            </table>
                        </div>
                        <div class="card-footer text-muted">Note: [blank] = no samples in indicated ecosystem <br/>
	Data Source: <a href="https://palaystat.philrice.gov.ph/profile/retrieve/table/65" target="_blank">Average N-P-K component per fertilizer use, by cropping season - PalayStat System</a>
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
            
            // CHART 1
            
            var dbN = JSON.parse('<?php echo $n_yearly; ?>');
            var dbP = JSON.parse('<?php echo $p_yearly; ?>');
            var dbK = JSON.parse('<?php echo $k_yearly; ?>');
                        
            let years = [];
            let values_n = [];
            let values_n_ds = [];
            let values_p = [];
            let values_p_ds = [];
            let values_k = [];
            let values_k_ds = [];
        
            try {
              for (let i = 0; i < dbN.length; i++){
                  years.push(dbN[i].year);
                  if(i % 2 == 0) {
                    values_n.push(dbN[i].value);
                  }
                  else{
                    values_n_ds.push(dbN[i].value);
                  }
              }
              for (let i = 0; i < dbP.length; i++){
                  years.push(dbP[i].year);
                  if(i % 2 == 0) {
                    values_p.push(dbP[i].value);
                  }
                  else{
                    values_p_ds.push(dbP[i].value);
                  }
              }
              for (let i = 0; i < dbK.length; i++){
                  years.push(dbK[i].year);
                  if(i % 2 == 0) {
                    values_k.push(dbK[i].value);
                  }
                  else{
                    values_k_ds.push(dbK[i].value);
                  }
              }
            } catch (error) {
              console.log(error);
            }

            var fertGroup = document.getElementById('ctxChart1').getContext('2d');
            var tempPLabels = [...years];
            var prodOne = [...values_n];
            var prodOne_DS = [...values_n_ds];
            var prodTwo = [...values_p];
            var prodTwo_DS = [...values_p_ds];
            var prodThree = [...values_k];
            var prodThree_DS = [...values_k_ds];
            var fertGroupChart = new Chart(fertGroup, {

                    type: 'bar',

                    data: {
                        labels: ["1996 WS", "2001 WS", "2006 WS", "2011 WS", "2016 WS"],
                        datasets: [{
                            label: 'Nitrogen',
                            backgroundColor: '#2138B7',    // COLOR 1
                            borderColor: '#2138B7',        // COLOR 1
                            data: prodOne
                        },{
                            label: 'Phosphorus',
                            backgroundColor: '#FEB043',    // COLOR 1
                            borderColor: '#FEB043',        // COLOR 1
                            data: prodTwo
                        },{
                            label: 'Potassium',
                            backgroundColor: '#7FFE00',    // COLOR 1
                            borderColor: '#7FFE00',        // COLOR 1
                            data: prodThree
                        }]
                    },

                    options: {
                        aspectRatio: 1.75,
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
                                    stepSize: 20
                                }
                            }]
                        },
                        tooltips: false,
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
                            data = parseFloat(data).toFixed(0).toLocaleString();
                            ctx.fillText(data, bar._model.x + 0 , bar._model.y + -5);
                            });
                        });
                      }
                  } 
                    }
                });
        
            var fertGroup1 = document.getElementById('ctxChart2').getContext('2d');
            var fertGroupChart1 = new Chart(fertGroup1, {

                    type: 'bar',

                    data: {
                        labels: ["1997 DS", "2002 DS", "2007 DS", "2012 DS", "2017 DS"],
                        datasets: [{
                            label: 'Nitrogen',
                            backgroundColor: '#2138B7',    // COLOR 1
                            borderColor: '#2138B7',        // COLOR 1
                            data: prodOne_DS
                        },{
                            label: 'Phosphorus',
                            backgroundColor: '#FEB043',    // COLOR 1
                            borderColor: '#FEB043',        // COLOR 1
                            data: prodTwo_DS
                        },{
                            label: 'Potassium',
                            backgroundColor: '#7FFE00',    // COLOR 1
                            borderColor: '#7FFE00',        // COLOR 1
                            data: prodThree_DS
                        }]
                    },

                    options: {
                        aspectRatio: 1.75,
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
                                    stepSize: 20
                                }
                            }]
                        },
                        tooltips: false,
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
                            data = parseFloat(data).toFixed(0).toLocaleString();
                            ctx.fillText(data, bar._model.x + 0 , bar._model.y + -5);
                            });
                        });
                      }
                  } 
                    }
                });
        </script>
    </body>
</html>