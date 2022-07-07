<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Farm Size and Ownership</title>
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
        <div id="farmdetails" class="jumbotron text-center">
            <div class="jumbotron-content">
                <h2>Profile of the Filipino Rice Farmer</h2>
                <h1>Farm Size and Ownership</h1>
            </div>
        </div>
        <?php
            $tsHighest = max($owner_all['value'], $amort_all['value'], $lessee_all['value'], $tenant_all['value'], $others_all['value']);
            $tsHighestLabel = "";
            if($owner_all['value'] == $tsHighest) {
                $tsHighestLabel = "Land Owners";
            }
            if($amort_all['value'] == $tsHighest) {
                $tsHighestLabel = "Amortizing";
            }
            if($lessee_all['value'] == $tsHighest) {
                $tsHighestLabel = "Lessee";
            }
            if($tenant_all['value'] == $tsHighest) {
                $tsHighestLabel = "Tenants";
            }
            if($others_all['value'] == $tsHighest) {
                $tsHighestLabel = "Other Ownership";
            } 
        ?>
        <!-- Body -->
        <div class="sublevel">
            <div class="row">
                <div class="col">
                    <div class="card-deck mb-2 text-center">
                        <div class="card primary mb-4 bg-primary-2 text-white">
                          <div class="card-body">
                            <h5 class="card-title pb-2">Average Farm Size (2016)</h5>
                            <h1 class="card-text font-weight-bold"><?php echo $avefarm_all['value']; ?><i class="bi bi-caret-up-fill"></i></h1>
                            <div class="card-note w-25 mx-auto rounded-pill bg-primary"><p class="text-white">Hectares</p></div>
                          </div>
                        </div>
                        <div class="card primary mb-4 bg-primary-2 text-white">
                          <div class="card-body">
                            <div class="row d-flex align-items-center h-100">
                                <div class="col-4"><h5 class="card-title m-0 p-0">Farm Ownership (2016)</h5></div>
                                <div class="col-4"><canvas id="ctxTenStat"></canvas></div>
                                <div class="col-4"><div class="card-note w-100 m-0 rounded-pill bg-primary"><p class="text-white"><?php echo $tsHighestLabel; ?></p></div></div>
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
                            <h5 class="my-0 pt-2 pb-2">Distribution by Farm Size by Survey Year (1996-2016)</h5>
                            <p class="my-0 font-weight-normal text-muted">in percent (RBFHS, PhilRice-SED, 2019)</p>
                          </div>
                          <div class="card-body">
                               <div><canvas id="ctxFarmSize"></canvas></div>
                          </div>
                        <div class="card-footer text-muted">
	Data Source: <a href="https://palaystat.philrice.gov.ph/profile/retrieve/table/8" target="_blank">Farm size, number of parcels and farm location - PalayStat System</a>
</div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-4">
                          <div class="card-header text-left">
<a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a>
                            <h5 class="my-0 pt-2 pb-2">Farm Ownership Status by Survey Year (1996-2016)</h5>
                            <p class="my-0 font-weight-normal text-muted">in percent (RBFHS, PhilRice-SED, 2019)</p>
                          </div>
                          <div class="card-body">
                               <div><canvas id="ctxTenStatYear"></canvas></div>
                          </div>
                          <div class="card-footer text-muted">Note: Others include mortgage, borrowed land, among others <br/>
	Data Source: <a href="https://palaystat.philrice.gov.ph/profile/retrieve/table/8" target="_blank">Farm size, number of parcels and farm location - PalayStat System</a>
</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card mb-4">
                        <div class="card-header text-left">
<a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Table</a>
                            <h5 class="my-0 pt-2 pb-2">Average Farm Size and Farm Ownership by Province (2016)</h5>
                            <p class="my-0 font-weight-normal text-muted">(RBFHS, PhilRice-SED, 2019)</p>
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
                                  <th class="align-middle" scope="col" rowspan="2">Region/Province</th>
                                  <th class="align-middle" scope="col" rowspan="2">Average Farm Size (ha)</th>
                                  <th class="text-center" scope="col" colspan="5">Farm Ownership Status</th>
                                </tr>
                                <tr>
                                  <th scope="col">Owner</th>
                                  <th scope="col">Amortizing</th>
                                  <th scope="col">Lessee</th>
                                  <th scope="col">Tenant</th>
                                  <th scope="col">Others</th>
                                </tr>
                              </thead>
                              <tbody>
                                  <?php
                                        $temp_region = $temp_prov = $cell_color = "";
                                        for ($i = 0; $i < count($avefarm_provincial); $i++) {
                                            
                                            if($avefarm_provincial[$i]['region'] != $temp_region){
                                                echo "<tr>";
                                                echo '<td colspan="8"><span class="font-weight-bold">'. $avefarm_provincial[$i]['region'] . '</td>';
                                                echo "</tr>";
                                            }
                                            
                                            $temp_region = $avefarm_provincial[$i]['region'];
                                            
                                            if($avefarm_provincial[$i]['location_name'] != $temp_prov){
                                                echo "<tr>";
                                                echo "<td>" . $avefarm_provincial[$i]['location_name'] . "</td>";
                                                
                                                if ($avefarm_all['value'] == $avefarm_provincial[$i]['value']){
                                                    $cell_color = "table-warning";
                                                } elseif ($avefarm_provincial[$i]['value'] == 0){
                                                    $cell_color = "table-default";
                                                } elseif ($avefarm_all['value'] > $avefarm_provincial[$i]['value']){
                                                    $cell_color = "table-danger";
                                                } else {
                                                    $cell_color = "table-success";
                                                }
                                                echo '<td class="text-center '. $cell_color .'">'. number_format($avefarm_provincial[$i]['value'], 2) .'</td>';
                                                echo '<td class="text-center">'. number_format($owner_provincial[$i]['value']) .'%</td>';
                                                echo '<td class="text-center">'. number_format($amort_provincial[$i]['value']) .'%</td>';
                                                echo '<td class="text-center">'. number_format($lessee_provincial[$i]['value']) .'%</td>';
                                                echo '<td class="text-center">'. number_format($tenant_provincial[$i]['value']) .'%</td>';
                                                echo '<td class="text-center">'. number_format($others_provincial[$i]['value']) .'%</td>';
                                                echo "</tr>";
                                                    
                                            }
                                            
                                            $temp_prov = $avefarm_provincial[$i]['location_name'];
                                            
                                        }
                                    ?>
                              </tbody>
                            </table>
                        </div>
                        <div class="card-footer text-muted">Note: Others include mortgage, borrowed land, among others; [blank] = no samples in indicated ecosystem <br/>
	Data Source: <a href="https://palaystat.philrice.gov.ph/profile/retrieve/table/8" target="_blank">Farm size, number of parcels and farm location - PalayStat System</a>
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
            
            var tsOwners = JSON.parse('<?php echo $owner_all['value']; ?>');
            var tsAmort = JSON.parse('<?php echo $amort_all['value']; ?>');
            var tsLessee = JSON.parse('<?php echo $lessee_all['value']; ?>');
            var tsTenant = JSON.parse('<?php echo $tenant_all['value']; ?>');
            var tsOthers = JSON.parse('<?php echo $others_all['value']; ?>');
            var tsHigh = JSON.parse('<?php echo $tsHighest; ?>');
            
            // CHART 1

            var ctx = document.getElementById("ctxTenStat");
            var myChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    datasets: [{
                        data: [tsOwners, tsAmort, tsLessee, tsTenant, tsOthers],
                        backgroundColor: [
                            '#17256b', // COLOR 1
                            '#2138B7', // COLOR 2
                            '#FEB043', // COLOR 3
                            '#7FFE00', // COLOR 4
                            '#FE7E00' // COLOR 4
                        ],
                        borderColor: [
                            '#17256b', // COLOR 1
                            '#2138B7', // COLOR 2
                            '#FEB043', // COLOR 3
                            '#7FFE00', // COLOR 4
                            '#FE7E00' // COLOR 4
                        ]
                    }]
                },
                options: {
                    cutoutPercentage: 60,
                    aspectRatio: 1.5,
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
                            text: tsHigh + '%',
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
            
            var dbFarmOne = JSON.parse('<?php echo $one_all_yearly; ?>');
            var dbFarmTwo = JSON.parse('<?php echo $two_all_yearly; ?>');
            var dbFarmThree = JSON.parse('<?php echo $three_all_yearly; ?>');
            var dbFarmFour = JSON.parse('<?php echo $four_all_yearly; ?>');
                        
            let years = [];
            let values_one = [];
            let values_two = [];
            let values_three = [];
            let values_four = [];

            try {
              dbFarmOne.map((item) => {
                years.push(item.year);
                values_one.push(item.value);
              });
              dbFarmTwo.map((item) => {
                values_two.push(item.value);
              });
              dbFarmThree.map((item) => {
                values_three.push(item.value);
              });
              dbFarmFour.map((item) => {
                values_four.push(item.value);
              });
            } catch (error) {
              console.log(error);
            }
            
            var farmSize = document.getElementById('ctxFarmSize').getContext('2d');
            var tempPLabels = [...years];
            var prodOne = [...values_one];
            var prodTwo = [...values_two];
            var prodThree = [...values_three];
            var prodFour = [...values_four];
            var farmSizeChart = new Chart(farmSize, {

                    type: 'bar',

                    data: {
                        labels: tempPLabels,
                        datasets: [{
                            label: '1.00 ha or less',
                            backgroundColor: '#2138B7',    // COLOR 1
                            borderColor: '#2138B7',        // COLOR 1
                            data: prodOne
                        },{
                            label: '1.01 - 2.00 ha',
                            backgroundColor: '#FEB043',    // COLOR 1
                            borderColor: '#FEB043',        // COLOR 1
                            data: prodTwo
                        },{
                            label: '2.01 - 3.00 ha',
                            backgroundColor: '#7FFE00',    // COLOR 1
                            borderColor: '#7FFE00',        // COLOR 1
                            data: prodThree
                        },{
                            label: '3.01 ha or more',
                            backgroundColor: '#006CD7',    // COLOR 1
                            borderColor: '#006CD7',        // COLOR 1
                            data: prodFour
                        }]
                    },

                    options: {
                        aspectRatio: 1.23,
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
                            position: 'top',
                            labels: {
                                fontSize: 9 //change the size of the labels
                            }
                        }
                    }
                });
            
            // CHART 6
            
            var dbOwner = JSON.parse('<?php echo $owner_yearly; ?>');
            var dbAmort = JSON.parse('<?php echo $amort_yearly; ?>');
            var dbLessee = JSON.parse('<?php echo $lessee_yearly; ?>');
            var dbTenant = JSON.parse('<?php echo $tenant_yearly; ?>');
            var dbOthers = JSON.parse('<?php echo $others_yearly; ?>');
                        
            let years_c = [];
            let values_owner = [];
            let values_amort = [];
            let values_lessee = [];
            let values_tenant = [];
            let values_others = [];

            try {
              dbOwner.map((item) => {
                years_c.push(item.year);
                values_owner.push(item.value);
              });
              dbAmort.map((item) => {
                values_amort.push(item.value);
              });
              dbLessee.map((item) => {
                values_lessee.push(item.value);
              });
              dbTenant.map((item) => {
                values_tenant.push(item.value);
              });
              dbOthers.map((item) => {
                values_others.push(item.value);
              });
            } catch (error) {
              console.log(error);
            }
            
            var tenStatYear = document.getElementById('ctxTenStatYear').getContext('2d');
            var tempPcLabels = [...years];
            var prodOwner = [...values_owner];
            var prodAmort = [...values_amort];
            var prodLessee = [...values_lessee];
            var prodTenant = [...values_tenant];
            var prodOthers = [...values_others];
            var tenStatYearChart = new Chart(tenStatYear, {

                    type: 'bar',
                    data: {
                        labels: tempPcLabels,
                        datasets: [{
                            label: 'Owner',
                            backgroundColor: '#17256b',    // COLOR 1
                            borderColor: '#17256b',        // COLOR 1
                            data: prodOwner
                        },{
                            label: 'Amortizing',
                            backgroundColor: '#2138B7',    // COLOR 1
                            borderColor: '#2138B7',        // COLOR 1
                            data: prodAmort
                        },{
                            label: 'Lessee',
                            backgroundColor: '#FEB043',    // COLOR 1
                            borderColor: '#FEB043',        // COLOR 1
                            data: prodLessee
                        },{
                            label: 'Tenant',
                            backgroundColor: '#7FFE00',    // COLOR 1
                            borderColor: '#7FFE00',        // COLOR 1
                            data: prodTenant
                        },{
                            label: 'Others',
                            backgroundColor: '#FE7E00',    // COLOR 1
                            borderColor: '#FE7E00',        // COLOR 1
                            data: prodOthers
                        }]
                    },

                    options: {
                        aspectRatio: 1.3,
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
                            position: 'top',
                            labels: {
                                fontSize: 9 //change the size of the labels
                            }
                        }
                    }
                });
        </script>
    </body>
</html>