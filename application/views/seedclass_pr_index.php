<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Seed Class Usage</title>
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
          <a class="btn btn-warning mr-2 text-white" href="<?php echo base_url(); ?>farmpractices/province/<?php echo $id; ?>" role="button"><i class="bi bi-caret-left"></i> Back to Main</a>
        </nav>
        
        <!-- Header --->
        <div id="seedclass" class="jumbotron text-center">
            <div class="jumbotron-content">
                <h2>Rice Farming Practices in <?php echo $hy_all['location_name']?></h2>
                <h1>Seed Class Usage</h1>
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
                                        <p class="card-title-note">Hybrid</p>
                                        <h1 class="card-text font-weight-bold smaller"><?php echo $hy_all_ws['value']; ?>%<i class="<?php echo $hy_caret; ?>"></i></h1>
                                    </div>
                                    <div class="col border-right">
                                        <p class="card-title-note">High Quality Inbred</p>
                                        <h1 class="card-text font-weight-bold smaller"><?php echo $hq_all_ws['value']; ?>%<i class="<?php echo $hq_caret; ?>"></i></h1>
                                    </div>
                                    <div class="col">
                                        <p class="card-title-note">Farmer's Seeds</p>
                                        <h1 class="card-text font-weight-bold smaller"><?php echo $gs_all_ws['value'] + $fs_all_ws['value']; ?>%<i class="<?php echo $ls_caret; ?>"></i></h1>
                                    </div>
                                </div>
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
                                        <p class="card-title-note">Hybrid</p>
                                        <h1 class="card-text font-weight-bold smaller"><?php echo $hy_all['value']; ?>%<i class="<?php echo $hy_ds_caret; ?>"></i></h1>
                                    </div>
                                    <div class="col border-right">
                                        <p class="card-title-note">High Quality Inbred</p>
                                        <h1 class="card-text font-weight-bold smaller"><?php echo $hq_all['value']; ?>%<i class="<?php echo $hq_ds_caret; ?>"></i></h1>
                                    </div>
                                    <div class="col">
                                        <p class="card-title-note">Farmer's Seeds</p>
                                        <h1 class="card-text font-weight-bold smaller"><?php echo $gs_all['value'] + $fs_all['value']; ?>%<i class="<?php echo $ls_ds_caret; ?>"></i></h1>
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
                            <h5 class="my-0 pt-2 pb-2">Distribution of Farmers per Seed Class During Dry Season (1996 WS-2016 WS)</h5>
                            <p class="my-0 font-weight-normal text-muted">in percent (RBFHS, PhilRice-SED, 2019)</p>
                          </div>
                          <div class="card-body">
                               <div><canvas id="ctxChart1"></canvas></div>
                          </div>
                        <div class="card-footer text-muted">
	Data Source: <a href="https://palaystat.philrice.gov.ph/profile/retrieve/table/70" target="_blank">Seeding rate by seed classification - PalayStat System</a>
</div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-4">
                          <div class="card-header text-left">
<a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a>
                            <h5 class="my-0 pt-2 pb-2">Distribution of Farmers per Seed Class During Dry Season (1997 DS-2017 DS)</h5>
                            <p class="my-0 font-weight-normal text-muted">in percent (RBFHS, PhilRice-SED, 2019)</p>
                          </div>
                          <div class="card-body">
                               <div><canvas id="ctxChart2"></canvas></div>
                          </div>
                        <div class="card-footer text-muted">
	Data Source: <a href="https://palaystat.philrice.gov.ph/profile/retrieve/table/70" target="_blank">Seeding rate by seed classification - PalayStat System</a>
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
            
            var dbHy = JSON.parse('<?php echo $hy_yearly; ?>');
            var dbHq = JSON.parse('<?php echo $hq_yearly; ?>');
            var dbGs = JSON.parse('<?php echo $gs_yearly; ?>');
            var dbFs = JSON.parse('<?php echo $gf_yearly; ?>');
                        
            let years = [];
            let values_hy = [];
            let values_hy_ds = [];
            let values_hq = [];
            let values_hq_ds = [];
            let values_gs = [];
            let values_fs_ds = [];
            let values_fs = [];

            
            try {
              for (let i = 0; i < dbHy.length; i++){
                  years.push(dbHy[i].year);
                  if(i % 2 == 0) {
                    values_hy.push(dbHy[i].value);
                  }
                  else{
                    values_hy_ds.push(dbHy[i].value);
                  }
              }
              for (let i = 0; i < dbHq.length; i++){
                  if(i % 2 == 0) {
                    values_hq.push(dbHq[i].value);
                  }
                  else{
                    values_hq_ds.push(dbHq[i].value);
                  }
              }
              for (let i = 0; i < dbFs.length; i++){
                  if(i % 2 == 0) {
                    values_fs.push(dbFs[i].value);
                  }
                  else{
                    values_fs_ds.push(dbFs[i].value);
                  }
              };
            } catch (error) {
              console.log(error);
            }
            
            var sclassGroup = document.getElementById('ctxChart1').getContext('2d');
            var tempPLabels = [...years];
            var prodOne = [...values_hy];
            var prodOne_DS = [...values_hy_ds];
            var prodTwo = [...values_hq];
            var prodTwo_DS = [...values_hq_ds];
            var prodFour = [...values_fs];
            var prodFour_DS = [...values_fs_ds];
            var sclassChart = new Chart(sclassGroup, {

                    type: 'bar',

                    data: {
                        labels: ["1996 WS", "2001 WS", "2006 WS", "2011 WS", "2016 WS"],
                        datasets: [{
                            label: 'Hybrid',
                            backgroundColor: '#2138B7',    // COLOR 1
                            borderColor: '#2138B7',        // COLOR 1
                            data: prodOne
                        },{
                            label: 'High Quality Inbred',
                            backgroundColor: '#FEB043',    // COLOR 1
                            borderColor: '#FEB043',        // COLOR 1
                            data: prodTwo
                        },{
                            label: 'Farmers Seeds',
                            backgroundColor: '#7FFE00',    // COLOR 1
                            borderColor: '#7FFE00',        // COLOR 1
                            data: prodFour
                        }]
                    },

                    options: {
                        aspectRatio: 1.75,
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
                            position: 'top'
                        },
                        tooltips: {
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
                var sclassGroup1 = document.getElementById('ctxChart2').getContext('2d');
                var sclassChart1 = new Chart(sclassGroup1, {

                            type: 'bar',

                            data: {
                                labels: ["1997 DS", "2002 DS", "2007 DS", "2012 DS", "2017 DS"],
                                datasets: [{
                                    label: 'Hybrid',
                                    backgroundColor: '#2138B7',    // COLOR 1
                                    borderColor: '#2138B7',        // COLOR 1
                                    data: prodOne_DS
                                },{
                                    label: 'High Quality Inbred',
                                    backgroundColor: '#FEB043',    // COLOR 1
                                    borderColor: '#FEB043',        // COLOR 1
                                    data: prodTwo_DS
                                },{
                                    label: 'Farmers Seeds',
                                    backgroundColor: '#7FFE00',    // COLOR 1
                                    borderColor: '#7FFE00',        // COLOR 1
                                    data: prodFour_DS
                                }]
                            },

                            options: {
                                aspectRatio: 1.75,
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
                                    position: 'top'
                                },
                                tooltips: {
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
        </script>
    </body>
</html>