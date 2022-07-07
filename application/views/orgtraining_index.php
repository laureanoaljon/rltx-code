<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Organization and Training Engagements</title>
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
                        <a class="active w-100 mr-2 text-white text-center d-block" href="<?php echo base_url(); ?>profilemain" role="button">Rice Farmer</a>
                        <a class="w-100 mr-2 text-white text-center d-block" href="<?php echo base_url(); ?>farmpractices" role="button">Farming Practices</a>
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
          <a class="btn btn-warning mr-2 text-white" href="<?php echo base_url(); ?>profilemain" role="button"><i class="bi bi-caret-left"></i> Back to Main</a>
        </nav>
        
        <!-- Header --->
        <div id="orgtrain" class="jumbotron text-center">
            <div class="jumbotron-content">
                <h2>Profile of the Filipino Rice Farmer</h2>
                <h1>Organization and Training Engagement</h1>
            </div>
        </div>
        
        <!-- Body -->
        <div class="sublevel">
            <div class="row">
                <div class="col">
                    <div class="card-deck mb-2 text-center">
                        <div class="card primary mb-2 bg-primary-2 text-white">
                          <div class="card-body">
                            <div class="row d-flex align-items-center h-100">
                                <div class="col-4"><h5 class="card-title m-0 p-0">Organization Membership (2016)</h5></div>
                                <div class="col-4"><canvas id="ctxOrg"></canvas></div>
                                <div class="col-4"><div class="card-note w-100 m-0 rounded-pill bg-primary"><p class="text-white">Members</p></div></div>
                            </div>    
                          </div>
                        </div>
                        <div class="card primary mb-2 bg-primary-2 text-white">
                          <div class="card-body">
                            <div class="row d-flex align-items-center h-100">
                                <div class="col-3"><h5 class="card-title m-0 p-0">Training Attendance (2016)</h5></div>
                                <div class="col-4"><canvas id="ctxTrain"></canvas></div>
                                <div class="col-5"><div class="card-note w-100 m-0 rounded-pill bg-primary"><p class="text-white">Attended Training</p></div></div>
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
                            <h5 class="my-0 pt-2 pb-2">Percent of Farmers Who are Members of Organizations by Survey Year (1996-2016)</h5>
                            <p class="my-0 font-weight-normal text-muted">(RBFHS, PhilRice-SED, 2019)</p>
                          </div>
                          <div class="card-body">
                               <div><canvas id="ctxOrgY"></canvas></div>
                          </div>
                        <div class="card-footer text-muted">
	Data Source: <a href="https://palaystat.philrice.gov.ph/profile/retrieve/table/1" target="_blank">Socioeconomic characteristics of farmer-respondents - PalayStat System</a>
</div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-4">
                          <div class="card-header text-left">
<a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a>
                            <h5 class="my-0 pt-2 pb-2">Percent of Farmers Who Have Attended at Least One Training by Survey Year (1996-2016)</h5>
                            <p class="my-0 font-weight-normal text-muted">(RBFHS, PhilRice-SED, 2019)</p>
                          </div>
                          <div class="card-body">
                               <div><canvas id="ctxTrainY"></canvas></div>
                          </div>
                        <div class="card-footer text-muted">
	Data Source: <a href="https://palaystat.philrice.gov.ph/profile/retrieve/table/1" target="_blank">Socioeconomic characteristics of farmer-respondents - PalayStat System</a>
</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card mb-4">
                        <div class="card-header text-left">
<a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Table</a>
                            <h5 class="my-0 pt-2 pb-2">Organization Membership and Training Attendance by Province (2016)</h5>
                            <p class="my-0 font-weight-normal text-muted">in percent (RBFHS, PhilRice-SED, 2019)</p>
                        </div>
                        <div class="card-body">
                            <table class="table table-hover">
                              <thead>
                                <tr>
                                  <th scope="col">Region/Province</th>
                                  <th class="text-center" scope="col">Organization Members</th>
                                  <th class="text-center" scope="col">Training Attendees</th>
                                </tr>
                              </thead>
                              <tbody>
                                  <?php
                                        $temp_region = $temp_prov = $cell_color = "";
                                        for ($i = 0; $i < count($org_provincial); $i++) {
                                            
                                            if($org_provincial[$i]['region'] != $temp_region){
                                                echo "<tr>";
                                                echo '<td colspan="4"><span class="font-weight-bold">'. $org_provincial[$i]['region'] . '</td>';
                                                echo "</tr>";
                                            }
                                            
                                            $temp_region = $org_provincial[$i]['region'];
                                            
                                            if($org_provincial[$i]['location_name'] != $temp_prov){
                                                echo "<tr>";
                                                echo "<td>" . $org_provincial[$i]['location_name'] . "</td>";
                                                
                                                echo '<td class="text-center">'. number_format($org_provincial[$i]['value']) .'%</td>';
                                                echo '<td class="text-center">'. number_format($tra_provincial[$i]['value']) .'%</td>';
                                                echo "</tr>";
                                            }
                                            
                                            $temp_prov = $org_provincial[$i]['location_name'];
                                            
                                        }
                                    ?>
                              </tbody>
                            </table>
                        </div>
                        <div class="card-footer text-muted">Note: [blank] = no samples in indicated ecosystem <br/>
	Data Source: <a href="https://palaystat.philrice.gov.ph/profile/retrieve/table/1" target="_blank">Socioeconomic characteristics of farmer-respondents - PalayStat System</a>
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
            
            var Org = JSON.parse('<?php echo $org_all['value']; ?>');
            var NonOrg = JSON.parse('<?php echo $non_all['value']; ?>');
            
            // CHART 1

            var ctx = document.getElementById("ctxOrg");
            var myChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    datasets: [{
                        data: [Org, NonOrg],
                        backgroundColor: [
                            '#17256b', // COLOR 1
                            '#eb9228' // COLOR 2
                        ],
                        borderColor: [
                            '#17256b', // COLOR 1
                            '#eb9228' // COLOR 2
                        ]
                    }]
                },
                options: {
                    cutoutPercentage: 60,
                    aspectRatio: 1.2,
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
                            text: Org + '%',
                            color: '#ffffff',
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
                    
            // CHART 2
            
            var Tra = JSON.parse('<?php echo $tra_all['value']; ?>');
            var NonTra = JSON.parse('<?php echo $trn_all['value']; ?>');

            var ctx2 = document.getElementById("ctxTrain");
            var myChart2 = new Chart(ctx2, {
                type: 'pie',
                data: {
                    datasets: [{
                        data: [Tra, NonTra],
                        backgroundColor: [
                            '#17256b', // COLOR 1
                            '#eb9228' // COLOR 2
                        ],
                        borderColor: [
                            '#17256b', // COLOR 1
                            '#eb9228' // COLOR 2
                        ]
                    }]
                },
                options: {
                    cutoutPercentage: 60,
                    aspectRatio: 1.2,
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
                            text: Tra + '%',
                            color: '#ffffff',
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
            
            // CHART 1
            
            var dbOrg = JSON.parse('<?php echo $org_yearly; ?>');
            var dbTrain = JSON.parse('<?php echo $tra_yearly; ?>');
                        
            let years = [];
            let values_org = [];
            let values_trn = [];

            try {
              dbOrg.map((item) => {
                years.push(item.year);
                values_org.push(item.value);
              });
              dbTrain.map((item) => {
                values_trn.push(item.value);
              });
            } catch (error) {
              console.log(error);
            }
            
            var orgY = document.getElementById('ctxOrgY').getContext('2d');
            var tempPLabels = [...years];
            var orgMem = [...values_org];
            var trnOrg = [...values_trn];
            var orgYChart = new Chart(orgY, {

                    type: 'bar',

                    data: {
                        labels: tempPLabels,
                        datasets: [{
                            label: 'Organization Members',
                            backgroundColor: '#17256b',    // COLOR 1
                            borderColor: '#17256b',        // COLOR 1
                            data: orgMem
                        }]
                    },

                    options: {
                        aspectRatio: 1.5,
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
                                    suggestedMin: 0

                                }
                            }]
                        },
                tooltips: false,
                legend: {
                    display: false,
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
            
                var trainY = document.getElementById('ctxTrainY').getContext('2d');
                var trainYChart = new Chart(trainY, {

                        type: 'bar',

                        data: {
                            labels: tempPLabels,
                            datasets: [{
                                label: 'Attended Training',
                                backgroundColor: '#17256b',    // COLOR 1
                                borderColor: '#17256b',        // COLOR 1
                                data: values_trn
                            }]
                        },

                        options: {
                            aspectRatio: 1.5,
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
                                        suggestedMin: 0

                                    }
                                }]
                            },
                tooltips: false,
                legend: {
                    display: false,
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
                  
        </script>
    </body>
</html>