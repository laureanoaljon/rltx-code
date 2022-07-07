<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Crop Establishment Method</title>
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
        <div id="cropest" class="jumbotron text-center">
            <div class="jumbotron-content">
                <h2>Rice Farming Practices in the Philippines</h2>
                <h1>Crop Establishment Method</h1>
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
                                    <div class="col-6 border-right">
                                        <div class="card-note w-50 mx-auto rounded-pill bg-alternate mb-3"><p class="text-white">Transplanting</p></div>
                                        <div><canvas id="ctxTransWS"></canvas></div>
                                    </div>
                                    <div class="col-6">
                                        <div class="card-note w-50 mx-auto rounded-pill bg-alternate mb-3"><p class="text-white">Direct Seeding</p></div>
                                        <div><canvas id="ctxDirectWS"></canvas></div>
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
                                    <div class="col-6 border-right">
                                        <div class="card-note w-50 mx-auto rounded-pill bg-alternate mb-3"><p class="text-white">Transplanting</p></div>
                                        <div><canvas id="ctxTransDS"></canvas></div>
                                    </div>
                                    <div class="col-6">
                                        <div class="card-note w-50 mx-auto rounded-pill bg-alternate mb-3"><p class="text-white">Direct Seeding</p></div>
                                        <div><canvas id="ctxDirectDS"></canvas></div>
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
                            <h5 class="my-0 pt-2 pb-2">Crop Establishment Method During Wet Season (1996 WS-2016 WS)</h5>
                            <p class="my-0 font-weight-normal text-muted">in percent of farmers (RBFHS, PhilRice-SED, 2019)</p>
                          </div>
                          <div class="card-body">
                               <div><canvas id="ctxChart1"></canvas></div>
                          </div>
                        <div class="card-footer text-muted">
	Data Source: <a href="https://palaystat.philrice.gov.ph/profile/retrieve/table/15" target="_blank">Distribution of farmers (%) by method of crop establishment - PalayStat System</a>
</div>
                    </div>
                </div>
                 <div class="col">
                    <div class="card mb-4">
                          <div class="card-header text-left">
<a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a>
                           <h5 class="my-0 pt-2 pb-2">Crop Establishment Method During Dry Season (1997 DS-2017 DS)</h5>
                            <p class="my-0 font-weight-normal text-muted">in percent of farmers (RBFHS, PhilRice-SED, 2019)</p>
                          </div>
                          <div class="card-body">
                               <div><canvas id="ctxChart2"></canvas></div>
                          </div>
                        <div class="card-footer text-muted">
	Data Source: <a href="https://palaystat.philrice.gov.ph/profile/retrieve/table/15" target="_blank">Distribution of farmers (%) by method of crop establishment - PalayStat System</a>
</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card mb-4">
                        <div class="card-header text-left">
<a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Table</a>
                            <h5 class="my-0 pt-2 pb-2">Percent of adoption per crop establishment method per province (2016 WS-2017 DS)</h5>
                            <p class="my-0 font-weight-normal text-muted">(RBFHS, PhilRice-SED, 2019)</p>
                        </div>
                        <div class="card-body">
                            <table class="table table-hover">
                              <thead>
                                <tr>
                                  <th class="align-middle" rowspan="2" scope="col">Region/Province</th>
                                  <th class="text-center" colspan="2" scope="col">2016 Wet Season</th>
                                  <th class="text-center" colspan="2" scope="col">2017 Dry Season</th>
                                </tr>
                                <tr>
                                  <th class="text-center" scope="col">Transplanting</th>
                                  <th class="text-center" scope="col">Direct Seeding</th>
                                  <th class="text-center" scope="col">Transplanting</th>
                                  <th class="text-center" scope="col">Direct Seeding</th>
                                </tr>
                              </thead>
                              <tbody>
                                  <?php
                                        $temp_region = $temp_prov = $cell_color = "";
                                        for ($i = 0; $i < count($trans_provincial); $i++) {
                                            
                                            if($trans_provincial[$i]['region'] != $temp_region){
                                                echo "<tr>";
                                                echo '<td colspan="5"><span class="font-weight-bold">'. $trans_provincial[$i]['region'] . '</td>';
                                                echo "</tr>";
                                            }
                                            
                                            $temp_region = $trans_provincial[$i]['region'];
                                            
                                            if($trans_provincial[$i]['location_name'] != $temp_prov){
                                                echo "<tr>";
                                                echo "<td>" . $trans_provincial[$i]['location_name'] . "</td>";
                                                echo '<td class="text-center">'. number_format($trans_provincial[$i]['value']) .'</td>';
                                                echo '<td class="text-center">'. number_format($direct_provincial[$i]['value']) .'</td>';
                                                echo '<td class="text-center">'. number_format($trans_ds_provincial[$i]['value']) .'</td>';
                                                echo '<td class="text-center">'. number_format($direct_ds_provincial[$i]['value']) .'</td>';
                                                echo "</tr>";
                                            }
                                            
                                            $temp_prov = $trans_provincial[$i]['location_name'];
                                            
                                        }
                                    ?>
                              </tbody>
                            </table>
                        </div>
                        <div class="card-footer text-muted">Note: [blank] = no samples in indicated ecosystem <br/>
	Data Source: <a href="https://palaystat.philrice.gov.ph/profile/retrieve/table/15" target="_blank">Distribution of farmers (%) by method of crop establishment - PalayStat System</a>
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
        Chart.pluginService.register({
            beforeDraw: function(chart) {
                if (chart.config.options.elements.center) {
                    // Get ctx from string
                    var ctx = chart.chart.ctx;

                    // Get options from the center object in options
                    var centerConfig = chart.config.options.elements.center;
                    var fontStyle = centerConfig.fontStyle || 'Arial';
                    var txt = centerConfig.text;
                    var color = centerConfig.color || '#000';
                    var maxFontSize = centerConfig.maxFontSize || 75;
                    var sidePadding = centerConfig.sidePadding || 20;
                    var sidePaddingCalculated = (sidePadding / 100) * (chart.innerRadius * 2)
                    // Start with a base font of 30px
                    ctx.font = "30px " + fontStyle;

                    // Get the width of the string and also the width of the element minus 10 to give it 5px side padding
                    var stringWidth = ctx.measureText(txt).width;
                    var elementWidth = (chart.innerRadius * 2) - sidePaddingCalculated;

                    // Find out how much the font can grow in width.
                    var widthRatio = elementWidth / stringWidth;
                    var newFontSize = Math.floor(30 * widthRatio);
                    var elementHeight = (chart.innerRadius * 2);

                    // Pick a new font size so it will not be larger than the height of label.
                    var fontSizeToUse = Math.min(newFontSize, elementHeight, maxFontSize);
                    var minFontSize = centerConfig.minFontSize;
                    var lineHeight = centerConfig.lineHeight || 25;
                    var wrapText = false;

                    if (minFontSize === undefined) {
                        minFontSize = 20;
                    }

                    if (minFontSize && fontSizeToUse < minFontSize) {
                        fontSizeToUse = minFontSize;
                        wrapText = true;
                    }

                    // Set font settings to draw it correctly.
                    ctx.textAlign = 'center';
                    ctx.textBaseline = 'middle';
                    var centerX = ((chart.chartArea.left + chart.chartArea.right) / 2);
                    var centerY = ((chart.chartArea.top + chart.chartArea.bottom) / 2);
                    ctx.font = fontSizeToUse + "px " + fontStyle;
                    ctx.fillStyle = color;

                    if (!wrapText) {
                        ctx.fillText(txt, centerX, centerY);
                        return;
                    }

                    var words = txt.split(' ');
                    var line = '';
                    var lines = [];

                    // Break words up into multiple lines if necessary
                    for (var n = 0; n < words.length; n++) {
                        var testLine = line + words[n] + ' ';
                        var metrics = ctx.measureText(testLine);
                        var testWidth = metrics.width;
                        if (testWidth > elementWidth && n > 0) {
                            lines.push(line);
                            line = words[n] + ' ';
                        } else {
                            line = testLine;
                        }
                    }

                    // Move the center up depending on line height and number of lines
                    centerY -= (lines.length / 2) * lineHeight;

                    for (var n = 0; n < lines.length; n++) {
                        ctx.fillText(lines[n], centerX, centerY);
                        centerY += lineHeight;
                    }
                    //Draw text in center
                    ctx.fillText(line, centerX, centerY);
                }
            }
        });
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
            let values_trans_ds = [];
            let values_direct = [];
            let values_direct_ds = [];
            let values_both = [];

            try {
              for (let i = 0; i < dbTrans.length; i++){
                  years.push(dbTrans[i].year);
                  if(i % 2 == 0) {
                    values_trans.push(dbTrans[i].value);
                  }
                  else{
                    values_trans_ds.push(dbTrans[i].value);
                  }
              }
              for (let i = 0; i < dbDirect.length; i++){
                  years.push(dbDirect[i].year);
                  if(i % 2 == 0) {
                    values_direct.push(dbDirect[i].value);
                  }
                  else{
                    values_direct_ds.push(dbDirect[i].value);
                  }
              }
            } catch (error) {
              console.log(error);
            }
            
    
            var cropestGroup = document.getElementById('ctxChart1').getContext('2d');
            var tempPLabels = [...years];
            var prodOne = [...values_trans];
            var prodOne_DS = [...values_trans_ds];
            var prodTwo = [...values_direct];
            var prodTwo_DS = [...values_direct_ds];
            var prodThree = [...values_both];
            
            var cropestGroupChart = new Chart(cropestGroup, {

                    type: 'bar',

                    data: {
                        labels: ["1996 WS", "2001 WS", "2006 WS", "2011 WS", "2016 WS"],
                        datasets: [{
                            label: 'Transplanting',
                            backgroundColor: '#2138B7',    // COLOR 1
                            borderColor: '#2138B7',        // COLOR 1
                            data: prodOne
                        },{
                            label: 'Direct Seeding',
                            backgroundColor: '#FEB043',    // COLOR 1
                            borderColor: '#FEB043',        // COLOR 1
                            data: prodTwo
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
                            ctx.fillStyle = '#ffffff';
                            data = parseInt(data).toLocaleString();
                            ctx.fillText(data, bar._model.x + 0 , bar._model.y + 20);
                            });
                        });
                      }
                  }
                    }
                });
            
            var cropestGroup1 = document.getElementById('ctxChart2').getContext('2d');
            var cropestGroupChart1 = new Chart(cropestGroup1, {

                    type: 'bar',

                    data: {
                        labels: ["1997 DS", "2002 DS", "2007 DS", "2012 DS", "2017 DS"],
                        datasets: [{
                            label: 'Transplanting',
                            backgroundColor: '#2138B7',    // COLOR 1
                            borderColor: '#2138B7',        // COLOR 1
                            data: prodOne_DS
                        },{
                            label: 'Direct Seeding',
                            backgroundColor: '#FEB043',    // COLOR 1
                            borderColor: '#FEB043',        // COLOR 1
                            data: prodTwo_DS
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
                            ctx.fillStyle = '#ffffff';
                            data = parseInt(data).toLocaleString();
                            ctx.fillText(data, bar._model.x + 0 , bar._model.y + 20);
                            });
                        });
                      }
                  }
                    }
                });
       
        // CHART 1
        
        var directWS = JSON.parse('<?php echo $direct_all['value']; ?>');
        var transWS = JSON.parse('<?php echo $trans_all['value']; ?>');
        var directDS = JSON.parse('<?php echo $direct_ds['value']; ?>');
        var transDS = JSON.parse('<?php echo $trans_ds['value']; ?>');

        var ctx = document.getElementById("ctxDirectWS");
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                datasets: [{
                    data: [directWS, transWS],
                    backgroundColor: [
                        '#33521d', // COLOR 1
                        '#bcf7ca' // COLOR 2
                    ],
                    borderColor: [
                        '#33521d', // COLOR 1
                        '#bcf7ca' // COLOR 2
                    ]
                }]
            },
            options: {
                cutoutPercentage: 60,
                aspectRatio: 2,
                legend: {
                    display: false
                },
                layout: {
                    padding: {
                      bottom: 2
                    }
                },
                responsive: true,
                maintainAspectRatio: true,
                plugins: {
                    labels: false
                },
                elements: {
                    center: {
                        text: directWS + '%',
                        color: '#fff',
                        fontStyle: 'Poppins',
                        sidePadding: 20,
                        minFontSize: 12,
                        lineHeight: 25
                    }
                },
                tooltips: {
                     enabled: false
                }
            }
        }); 
        
         var ctx1 = document.getElementById("ctxTransWS");
         var myChart1 = new Chart(ctx1, {
            type: 'pie',
            data: {
                datasets: [{
                    data: [transWS, directWS],
                    backgroundColor: [
                        '#33521d', // COLOR 1
                        '#bcf7ca' // COLOR 2
                    ],
                    borderColor: [
                        '#33521d', // COLOR 1
                        '#bcf7ca' // COLOR 2
                    ]
                }]
            },
            options: {
                cutoutPercentage: 60,
                aspectRatio: 2,
                legend: {
                    display: false
                },
                layout: {
                    padding: {
                      bottom: 2
                    }
                },
                responsive: true,
                maintainAspectRatio: true,
                plugins: {
                    labels: false
                },
                elements: {
                    center: {
                        text: transWS + '%',
                        color: '#fff',
                        fontStyle: 'Poppins',
                        sidePadding: 20,
                        minFontSize: 12,
                        lineHeight: 25
                    }
                },
                tooltips: {
                     enabled: false
                }
            }
        }); 
        
        var ctx2 = document.getElementById("ctxDirectDS");
        var myChart2 = new Chart(ctx2, {
            type: 'pie',
            data: {
                datasets: [{
                    data: [directDS, transDS],
                    backgroundColor: [
                        '#33521d', // COLOR 1
                        '#bcf7ca' // COLOR 2
                    ],
                    borderColor: [
                        '#33521d', // COLOR 1
                        '#bcf7ca' // COLOR 2
                    ]
                }]
            },
            options: {
                cutoutPercentage: 60,
                aspectRatio: 2,
                legend: {
                    display: false
                },
                layout: {
                    padding: {
                      bottom: 2
                    }
                },
                responsive: true,
                maintainAspectRatio: true,
                plugins: {
                    labels: false
                },
                elements: {
                    center: {
                        text: directDS + '%',
                        color: '#fff',
                        fontStyle: 'Poppins',
                        sidePadding: 20,
                        minFontSize: 12,
                        lineHeight: 25
                    }
                },
                tooltips: {
                     enabled: false
                }
            }
        }); 
        
        var ctx3 = document.getElementById("ctxTransDS");
         var myChart3 = new Chart(ctx3, {
            type: 'pie',
            data: {
                datasets: [{
                    data: [transDS, directDS],
                    backgroundColor: [
                        '#33521d', // COLOR 1
                        '#bcf7ca' // COLOR 2
                    ],
                    borderColor: [
                        '#33521d', // COLOR 1
                        '#bcf7ca' // COLOR 2
                    ]
                }]
            },
            options: {
                cutoutPercentage: 60,
                aspectRatio: 2,
                legend: {
                    display: false
                },
                layout: {
                    padding: {
                      bottom: 2
                    }
                },
                responsive: true,
                maintainAspectRatio: true,
                plugins: {
                    labels: false
                },
                elements: {
                    center: {
                        text: transDS + '%',
                        color: '#fff',
                        fontStyle: 'Poppins',
                        sidePadding: 20,
                        minFontSize: 12,
                        lineHeight: 25
                    }
                },
                tooltips: {
                     enabled: false
                }
            }
        });
        </script>
    </body>
</html>