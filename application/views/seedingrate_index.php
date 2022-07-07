<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Seeding Rate</title>
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
        <div id="seedrate" class="jumbotron text-center">
            <div class="jumbotron-content">
                <h2>Rice Farming Practices in the Philippines</h2>
                <h1>Seeding Rate</h1>
            </div>
        </div>
        
        <!-- Body -->
        <div class="sublevel">
            <div class="row">
                <div class="col">
                    <div class="card-deck mb-2 text-center text-white">
                        <div class="card primary mb-4 bg-primary-3">
                          <div class="card-body">
                            <h5 class="card-title pb-2">Transplanted</h5>
                            <h1 class="card-text font-weight-bold"><?php echo number_format($trans_all['value'], 0); ?><i class="bi bi-caret-down-fill"></i></h1>
                            <div class="card-note w-75 mx-auto rounded-pill bg-alternate"><p class="text-white">kilograms per hectare</p></div>
                          </div>
                        </div>
                        <div class="card primary mb-4 bg-warning-2 text-white">
                          <div class="card-body">
                            <h5 class="card-title pb-2">Average (2016 WS-2017 DS)</h5>
                            <h1 class="card-text font-weight-bold"><?php echo number_format($average_all['value'], 0); ?><i class="bi bi-caret-up-fill"></i></h1>
                            <div class="card-note w-75 mx-auto rounded-pill bg-alternate"><p class="text-black">kilograms per hectare</p></div>
                          </div>
                        </div>
                        <div class="card primary mb-4 bg-primary-3">
                          <div class="card-body">
                            <h5 class="card-title pb-2">Direct Seeded</h5>
                            <h1 class="card-text font-weight-bold"><?php echo number_format($direct_all['value'], 0); ?><i class="bi bi-caret-up-fill"></i></h1>
                            <div class="card-note w-75 mx-auto rounded-pill bg-alternate"><p class="text-white">kilograms per hectare</p></div>
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
                            <h5 class="my-0 pt-2 pb-2">Seeding rate per crop establishment method (1996 WS-2017 DS)</h5>
                            <p class="my-0 font-weight-normal text-muted">in kilograms per hectare (RBFHS, PhilRice-SED, 2019)</p>
                          </div>
                          <div class="card-body">
                               <div><canvas id="ctxChart1"></canvas></div>
                          </div>
                        <div class="card-footer text-muted">
	Data Source: <a href="https://palaystat.philrice.gov.ph/profile/retrieve/table/62" target="_blank">Seeding rate by cropping season - PalayStat System</a>
</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card mb-4">
                        <div class="card-header text-left">
<a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Table</a>
                            <h5 class="my-0 pt-2 pb-2">Seeding rate per crop establishment method per province (2016 WS-2017 DS)</h5>
                            <p class="my-0 font-weight-normal text-muted">in kilograms per hectare (RBFHS, PhilRice-SED, 2019)</p>
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
                                  <th class="align-middle" scope="col">Region/Province</th>
                                  <th class="align-middle" scope="col">Average</th>
                                  <th class="align-middle" scope="col">Transplanting</th>
                                  <th class="align-middle" scope="col">Direct Seeding</th>
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
                                                
                                                if ($average_all['value'] == $average_provincial[$i]['value']){
                                                    $cell_color = "table-warning";
                                                } elseif ($average_provincial[$i]['value'] == 0){
                                                    $cell_color = "table-default";
                                                } elseif ($average_all['value'] > $average_provincial[$i]['value']){
                                                    $cell_color = "table-danger";
                                                } else {
                                                    $cell_color = "table-success";
                                                }
                                                echo '<td class="text-center '. $cell_color .'">'. number_format($average_provincial[$i]['value'], 0) .'</td>';
                                                    
                                                if ($trans_all['value'] == $trans_provincial[$i]['value']){
                                                    $cell_color = "table-warning";
                                                } elseif ($trans_provincial[$i]['value'] == 0){
                                                    $cell_color = "table-default";
                                                } elseif ($trans_all['value'] > $trans_provincial[$i]['value']){
                                                    $cell_color = "table-danger";
                                                } else {
                                                    $cell_color = "table-success";
                                                }
                                                echo '<td class="text-center '. $cell_color .'">'. number_format($trans_provincial[$i]['value'], 0) .'</td>';
                                                
                                                if ($direct_all['value'] == $direct_provincial[$i]['value']){
                                                    $cell_color = "table-warning";
                                                } elseif ($direct_provincial[$i]['value'] == 0){
                                                    $cell_color = "table-default";
                                                } elseif ($direct_all['value'] > $direct_provincial[$i]['value']){
                                                    $cell_color = "table-danger";
                                                } else {
                                                    $cell_color = "table-success";
                                                }
                                                echo '<td class="text-center '. $cell_color .'">'. number_format($direct_provincial[$i]['value'], 0) .'</td>';
                                                echo "</tr>";
                                            }
                                            
                                            $temp_prov = $average_provincial[$i]['location_name'];
                                            
                                        }
                                    ?>
                              </tbody>
                            </table>
                        </div>
                        <div class="card-footer text-muted">Note: [0.00] = no samples in indicated ecosystem <br/>
	Data Source: <a href="https://palaystat.philrice.gov.ph/profile/retrieve/table/62" target="_blank">Seeding rate by cropping season - PalayStat System</a>
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
            
            var dbTrans = JSON.parse('<?php echo $trans_yearly; ?>');
            var dbDirect = JSON.parse('<?php echo $direct_yearly; ?>');
                        
            let years = [];
            let values_trans = [];
            let values_direct = [];
            let values_both = [];

            try {
              dbTrans.map((item) => {
                years.push(item.year);
                values_trans.push(item.value);
              });
              dbDirect.map((item) => {
                values_direct.push(item.value);
              });
              dbBoth.map((item) => {
                values_both.push(item.value);
              });
            } catch (error) {
              console.log(error);
            }
            
            var cropestGroup = document.getElementById('ctxChart1').getContext('2d');
            var tempPLabels = [...years];
            var prodOne = [...values_trans];
            var prodTwo = [...values_direct];
            var cropestGroupChart = new Chart(cropestGroup, {

                    type: 'line',

                    data: {
                        labels: ["1996 WS-1997 DS", "2001 WS-2002 DS", "2006 WS-2007 DS", "2011 WS-2012 DS","2016 WS-2017 DS"],
                        datasets: [{
                            label: 'Transplanting',
                            backgroundColor: '#2138B7',    // COLOR 1
                            borderColor: '#2138B7',        // COLOR 1
                            data: prodOne,
                            fill: false
                        },{
                            label: 'Direct Seeding',
                            backgroundColor: '#FEB043',    // COLOR 1
                            borderColor: '#FEB043',        // COLOR 1
                            data: prodTwo,
                            fill: false
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
                            data = parseInt(data).toLocaleString();
                            ctx.fillText(data, bar._model.x + 0 , bar._model.y + -10);
                            });
                        });
                      }
                  } 
                    }
                });
        </script>
    </body>
</html>