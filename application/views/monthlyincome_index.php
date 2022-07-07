<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Estimated Gross Income</title>
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
        <div id="netincome" class="jumbotron text-center">
            <div class="jumbotron-content">
                <h2>Profile of the Filipino Rice Farmer</h2>
                <h1>Estimated Monthly Income</h1>
            </div>
        </div>
        
        <!-- Body -->
        <div class="sublevel">
            <div class="row">
                <div class="col">
                    <div class="card-deck mb-2 text-center">
                        <div class="card primary mb-4 bg-primary-2 text-white">
                          <div class="card-body">
                            <h5 class="card-title pb-2">Estimated Monthly Income (2016)</h5>
                            <h1 class="card-text font-weight-bold">P <?php echo number_format($monthly_income_all['value']); ?><i class="bi bi-caret-up-fill"></i></h1>
                            <div class="card-note w-50 mx-auto rounded-pill bg-primary"><p class="text-white">per household</p></div>
                          </div>
                        </div>
                        <div class="card primary mb-4 bg-gold text-white">
                          <div class="card-body">
                            <h5 class="card-title pb-2">Above Poverty Threshold (2016)</h5>
                            <h1 class="card-text font-weight-bold"><?php echo number_format($poverty_all['value']); ?>%<i class="bi bi-caret-up-fill"></i></h1>
                            <div class="card-note w-75 mx-auto rounded-pill"><p class="text-white">of farming households</p></div>
                          </div>
                        </div>
                        <div class="card primary mb-4 bg-gold text-white">
                          <div class="card-body">
                            <h5 class="card-title pb-2">Monthly Poverty Threshold (2015)</h5>
                            <h1 class="card-text font-weight-bold">P <?php echo number_format($poverty_threshold_all['value']); ?><i class="bi bi-caret-up-fill"></i></h1>
                            <div class="card-note w-75 mx-auto rounded-pill"><p class="text-white">Per Household of 5</p></div>
                          </div>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="row">
                <div class="col">
                    <div class="card mb-4">
                          <div class="card-header text-left">
<a class="btn btn-white download-chart text-white" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt ml-0"></i></a>
                            <h5 class="my-0 pt-2 pb-2">Estimated Monthly Income by Survey Year (1996-2016)</h5>
                            <p class="my-0 font-weight-normal text-muted">per household, in pesos (RBFHS, PhilRice-SED, 2019)</p>
                          </div>
                          <div class="card-body">
                               <div><canvas id="ctxChart1"></canvas></div>
                          </div>
                        <div class="card-footer text-muted">
	Data Source: <a href="https://palaystat.philrice.gov.ph/profile/retrieve/table/6" target="_blank">Estimated monthly per capita income and percentage distribution of income - PalayStat System</a>
</div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-4">
                          <div class="card-header text-left">
<a class="btn btn-white download-chart text-white" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt ml-0"></i></a>
                            <h5 class="my-0 pt-2 pb-2">Above Poverty Threshold by Survey Year (1996-2016)</h5>
                            <p class="my-0 font-weight-normal text-muted">in percent (RBFHS, PhilRice-SED, 2019)</p>
                          </div>
                          <div class="card-body">
                               <div><canvas id="ctxChart2"></canvas></div>
                          </div>
                        <div class="card-footer text-muted">
	Data Source: <a href="https://palaystat.philrice.gov.ph/profile/retrieve/table/6" target="_blank">Estimated monthly per capita income and percentage distribution of income - PalayStat System</a>
</div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-4">
                          <div class="card-header text-left">
<a class="btn btn-white download-chart text-white" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt ml-0"></i></a>
                            <h5 class="my-0 pt-2 pb-2">Monthly Poverty Threshold by Survey Year (1997-2015)</h5>
                            <p class="my-0 font-weight-normal text-muted">in pesos (PSA, 2015)</p>
                          </div>
                          <div class="card-body">
                               <div><canvas id="ctxChart3"></canvas></div>
                          </div>
                        <div class="card-footer text-muted">
	Data Source: <a href="https://palaystat.philrice.gov.ph/profile/retrieve/table/6" target="_blank">Estimated monthly per capita income and percentage distribution of income - PalayStat System</a>
</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card mb-4">
                        <div class="card-header text-left">
                            <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Table</a>
                            <h5 class="my-0 pt-2 pb-2">Estimated Monthly Income and Above Poverty Threshold by Province (2016)</h5>
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
                                  <th scope="col">Region/Province</th>
                                  <th class="text-center" scope="col">Estimated Monthly Income (P)</th>
                                  <th class="text-center" scope="col">Above Poverty Threshold (%)</th>
                                  <th class="text-center" scope="col">Monthly Poverty Threshold (P)</th>
                                </tr>
                              </thead>
                              <tbody>
                                  <?php
                                        $temp_region = $temp_prov = $cell_color = "";
                                        for ($i = 0; $i < count($monthly_income_provincial); $i++) {
                                            
                                            if($monthly_income_provincial[$i]['region'] != $temp_region){
                                                echo "<tr>";
                                                echo '<td colspan="4"><span class="font-weight-bold">'. $monthly_income_provincial[$i]['region'] . '</td>';
                                                echo "</tr>";
                                            }
                                            
                                            $temp_region = $monthly_income_provincial[$i]['region'];
                                            
                                            if($monthly_income_provincial[$i]['location_name'] != $temp_prov){
                                                echo "<tr>";
                                                echo "<td>" . $monthly_income_provincial[$i]['location_name'] . "</td>";
                                                
                                                if ($monthly_income_all['value'] == $monthly_income_provincial[$i]['value']){
                                                    $cell_color = "table-warning";
                                                } elseif ($monthly_income_provincial[$i]['value'] == 0){
                                                    $cell_color = "table-default";
                                                } elseif ($monthly_income_all['value'] > $monthly_income_provincial[$i]['value']){
                                                    $cell_color = "table-danger";
                                                } else {
                                                    $cell_color = "table-success";
                                                }
                                                echo '<td class="text-center '. $cell_color .'"> P '. number_format($monthly_income_provincial[$i]['value']) .'</td>';
                                                    
                                                if ($poverty_all['value'] == $poverty_provincial[$i]['value']){
                                                    $cell_color = "table-warning";
                                                } elseif ($poverty_provincial[$i]['value'] == 0){
                                                    $cell_color = "table-default";
                                                } elseif ($poverty_all['value'] > $poverty_provincial[$i]['value']){
                                                    $cell_color = "table-danger";
                                                } else {
                                                    $cell_color = "table-success";
                                                }
                                                echo '<td class="text-center '. $cell_color .'">'. number_format($poverty_provincial[$i]['value']) .'%</td>';
                                                echo '<td class="text-center">P '. number_format($poverty_threshold_provincial[$i]['value']) .'</td>';
                                                echo "</tr>";
                                            }
                                            
                                            $temp_prov = $monthly_income_provincial[$i]['location_name'];
                                            
                                        }
                                    ?>
                              </tbody>
                            </table>
                        </div>
                        <div class="card-footer text-muted">Note: [0] = no samples in indicated ecosystem <br/>
	Data Source: <a href="https://palaystat.philrice.gov.ph/profile/retrieve/table/6" target="_blank">Estimated monthly per capita income and percentage distribution of income - PalayStat System</a>
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
            
            var dbIncome = JSON.parse('<?php echo $monthly_income_yearly; ?>');
            var dbPoverty = JSON.parse('<?php echo $poverty_yearly; ?>');
            var dbPovertyTh = JSON.parse('<?php echo $poverty_threshold_yearly; ?>');
                        
            let years = [];
            let years_pt = [];
            let values_income = [];
            let values_poverty = [];
            let values_povertyth = [];

            try {
              dbIncome.map((item) => {
                years.push(item.year);
                values_income.push(item.value);
              });
              dbPoverty.map((item) => {
                values_poverty.push(item.value);
              });
              dbPovertyTh.map((item) => {
                years_pt.push(item.year);
                values_povertyth.push(item.value);
              });
            } catch (error) {
              console.log(error);
            }
            
            var meanAge = document.getElementById('ctxChart1').getContext('2d');
            var tempPLabels = [...years];
            var tempPTLabels = [...years_pt];
            var prodMonthly = [...values_income];
            var prodPoverty = [...values_poverty];
            var prodPovertyTh = [...values_povertyth];
            var meanAgeChart = new Chart(meanAge, {

                    type: 'bar',

                    data: {
                        labels: tempPLabels,
                        datasets: [{
                            label: 'Estimated Monthly Income',
                            backgroundColor: '#007FFE',    // COLOR 1
                            borderColor: '#007FFE',        // COLOR 1
                            data: prodMonthly
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
                                    suggestedMin: 0,
                                    userCallback: function(value, index, values) {
                                    value = value.toString();
                                    value = value.split(/(?=(?:...)*$)/);
                                    value = value.join(',');
                                    return value;
                                }

                                }
                            }]
                        },
                        legend: {
                            display: false
                        },
                        tooltips: {
                            callbacks: {
                              label: function (tooltipItem, data) {
                                var tooltipValue = data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index];
                                return data.datasets[tooltipItem.datasetIndex].label + ": " + parseInt(tooltipValue).toLocaleString();
                              }
                            }
                        }
                    }
                });
            
                var Chart2 = document.getElementById('ctxChart2').getContext('2d');
                var Chart2Chart = new Chart(Chart2, {

                        type: 'bar',

                        data: {
                            labels: tempPLabels,
                            datasets: [{
                                label: 'Above Poverty Threshold',
                                backgroundColor: '#007FFE',    // COLOR 1
                                borderColor: '#007FFE',        // COLOR 1
                                data: prodPoverty
                            }]
                        },

                        options: {
                            aspectRatio: 1.38,
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
                                        userCallback: function(value, index, values) {
                                    value = value.toString();
                                    value = value.split(/(?=(?:...)*$)/);
                                    value = value.join(',');
                                    return value;
                                }
                                            
                                    }
                                }]
                            },
                            legend: {
                                display: false
                            },
                            tooltips: {
                                callbacks: {
                                  label: function (tooltipItem, data) {
                                    var tooltipValue = data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index];
                                    return data.datasets[tooltipItem.datasetIndex].label + ": " + parseInt(tooltipValue).toLocaleString();
                                  }
                                }
                            }
                        }
                    });
        
                var Chart3 = document.getElementById('ctxChart3').getContext('2d');
                var Chart3Chart = new Chart(Chart3, {

                        type: 'bar',

                        data: {
                            labels: tempPTLabels,
                            datasets: [{
                                label: 'Monthly Poverty Threshold',
                                backgroundColor: '#007FFE',    // COLOR 1
                                borderColor: '#007FFE',        // COLOR 1
                                data: prodPovertyTh
                            }]
                        },

                        options: {
                            aspectRatio: 1.38,
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
                                        userCallback: function(value, index, values) {
                                    value = value.toString();
                                    value = value.split(/(?=(?:...)*$)/);
                                    value = value.join(',');
                                    return value;
                                }

                                    }
                                }]
                            },
                            legend: {
                                display: false
                            },
                            tooltips: {
                                callbacks: {
                                  label: function (tooltipItem, data) {
                                    var tooltipValue = data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index];
                                    return data.datasets[tooltipItem.datasetIndex].label + ": " + parseInt(Math.round(tooltipValue)).toLocaleString();
                                  }
                                }
                            }
                        }
                    });
        </script>
    </body>
</html>