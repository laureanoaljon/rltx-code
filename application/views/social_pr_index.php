<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Age, Sex and Civil Status</title>
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
          <a class="btn btn-warning mr-2 text-white" href="<?php echo base_url(); ?>profilemain/province/<?php echo $id; ?>" role="button"><i class="bi bi-caret-left"></i> Back to Main</a>
        </nav>
        
        <!-- Header --->
         <div id="social" class="jumbotron text-center">
            <div class="jumbotron-content">
                <h2>Profile of the Filipino Rice Farmer in <?php echo $mean_age_all['location_name']?></h2>
                <h1>Age, Sex and Civil Status</h1>
            </div>
        </div>
        
        <!-- Body -->
        <div class="sublevel">
            <div class="row">
                <div class="col">
                    <div class="card-deck mb-2 text-center">
                        <div class="card primary mb-4 bg-primary-2 text-white">
                          <div class="card-body">
                            <h5 class="card-title pb-2">Average Age (2016)</h5>
                            <h1 class="card-text font-weight-bold"><?php echo $mean_age_all['value']; ?><i class="<?php echo $age_caret; ?>"></i></h1>
                            <div class="card-note w-50 mx-auto rounded-pill bg-primary"><p class="text-white">years old</p></div>
                          </div>
                        </div>
                        <div class="card primary mb-4 bg-primary-2 text-white">
                          <div class="card-body">
                            <div class="row d-flex align-items-center h-100">
                                <div class="col-3"><h5 class="card-title m-0 p-0">Sex (2016)</h5></div>
                                <div class="col-5"><canvas id="ctxSex"></canvas></div>
                                <div class="col-4"><div class="card-note w-100 m-0 rounded-pill bg-primary"><p class="text-white">Male</p></div></div>
                            </div>    
                          </div>
                        </div>
                        <div class="card primary mb-4 bg-primary-2 text-white">
                          <div class="card-body">
                            <div class="row d-flex align-items-center h-100">
                                <div class="col-3"><h5 class="card-title m-0 p-0">Civil Status (2016)</h5></div>
                                <div class="col-5"><canvas id="ctxCivil"></canvas></div>
                                <div class="col-4"><div class="card-note w-100 m-0 rounded-pill bg-primary"><p class="text-white">Married</p></div></div>
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
                              <a class="btn btn-white download-chart text-white" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt ml-0"></i></a>
                            <h5 class="my-0 pt-2 pb-2">Distribution of Age by Survey Year (<span class='case'>2016</span>)</h5>
                            <p class="my-0 font-weight-normal text-muted">in percent (RBFHS, PhilRice-SED, 2019)</p>
                          </div>
                          <div class="card-body">
                               <div><canvas id="ctxAgeGroup"></canvas></div>
                          </div>
                        <div class="card-footer text-muted">
	Data Source: <a href="https://palaystat.philrice.gov.ph/profile/retrieve/table/1" target="_blank">Socioeconomic characteristics of farmer-respondents - PalayStat System</a>
</div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-4">
                          <div class="card-header text-left">
                              <a class="btn btn-white download-chart text-white" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt ml-0"></i></a>
                            <h5 class="my-0 pt-2 pb-2">Distribution of Sex by Survey Year (<span class='case'>2016</span>)</h5>
                            <p class="my-0 font-weight-normal text-muted">in percent (RBFHS, PhilRice-SED, 2019)</p>
                          </div>
                          <div class="card-body">
                               <div><canvas id="ctxSexGroup"></canvas></div>
                          </div>
                        <div class="card-footer text-muted">
	Data Source: <a href="https://palaystat.philrice.gov.ph/profile/retrieve/table/1" target="_blank">Socioeconomic characteristics of farmer-respondents - PalayStat System</a>
</div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-4">
                          <div class="card-header text-left">
                             <a class="btn btn-white download-chart text-white" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt ml-0"></i></a>
                            <h5 class="my-0 pt-2 pb-2">Distribution of Civil Status by Survey Year (<span class='case'>2016</span>)</h5>
                            <p class="my-0 font-weight-normal text-muted">in percent (RBFHS, PhilRice-SED, 2019)</p>
                          </div>
                          <div class="card-body">
                               <div><canvas id="ctxCivilGroup"></canvas></div>
                          </div>
                        <div class="card-footer text-muted">
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
            Chart.defaults.global.defaultFontColor = "#000000";
            
            var sexMale = JSON.parse('<?php echo $male_all['value']; ?>');
            var sexFemale = JSON.parse('<?php echo $female_all['value']; ?>');
            
            // CHART 1

            var ctx = document.getElementById("ctxSex");
            var myChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    datasets: [{
                        data: [sexMale, sexFemale],
                        backgroundColor: [
                            '#17256b', // COLOR 1
                            '#FEB043' // COLOR 2
                        ],
                        borderColor: [
                            '#17256b', // COLOR 1
                            '#FEB043' // COLOR 2
                        ]
                    }]
                },
                options: {
                    cutoutPercentage: 60,
                    aspectRatio: 1,
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
                            text: sexMale + '%',
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
            
            var csSingle = JSON.parse('<?php echo $s_all['value']; ?>');
            var csMarried = JSON.parse('<?php echo $m_all['value']; ?>');
            var csWidow = JSON.parse('<?php echo $w_all['value']; ?>');
            var csSeparated = JSON.parse('<?php echo $se_all['value']; ?>');

            var ctx2 = document.getElementById("ctxCivil");
            var myChart2 = new Chart(ctx2, {
                type: 'pie',
                data: {
                    datasets: [{
                        data: [csSingle, csMarried, csWidow, csSeparated],
                        backgroundColor: [
                            '#006CD7', // COLOR 1
                            '#17256b', // COLOR 2
                            '#FEB043', // COLOR 3
                            '#7FFE00' // COLOR 4
                        ],
                        borderColor: [
                            '#006CD7', // COLOR 1
                            '#17256b', // COLOR 2
                            '#FEB043', // COLOR 3
                            '#7FFE00' // COLOR 4
                        ]
                    }]
                },
                options: {
                    cutoutPercentage: 60,
                    aspectRatio: 1,
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
                            text: csMarried + '%',
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
            
            // CHART 3
            
            var dbAgeOne = clean(JSON.parse('<?php echo $aon_yearly; ?>'));
            var dbAgeTwo = clean(JSON.parse('<?php echo $atw_yearly; ?>'));
            var dbAgeThree = clean(JSON.parse('<?php echo $ath_yearly; ?>'));
            var dbAgeFour = clean(JSON.parse('<?php echo $afo_yearly; ?>'));
            if (dbAgeOne[0]["year"] !=  dbAgeOne[dbAgeOne.length-1]["year"]){
                $("span.case").text(dbAgeOne[0]["year"] + "-" + dbAgeOne[dbAgeOne.length-1]["year"]); 
            }
                        
            let years = [];
            let values_one = [];
            let values_two = [];
            let values_three = [];
            let values_four = [];

            try {
              dbAgeOne.map((item) => {
                years.push(item.year);
                values_one.push(item.value);
              });
              dbAgeTwo.map((item) => {
                values_two.push(item.value);
              });
              dbAgeThree.map((item) => {
                values_three.push(item.value);
              });
              dbAgeFour.map((item) => {
                values_four.push(item.value);
              });
            } catch (error) {
              console.log(error);
            }
            
            var ageGroup = document.getElementById('ctxAgeGroup').getContext('2d');
            var tempPLabels = [...years];
            var prodOne = [...values_one];
            var prodTwo = [...values_two];
            var prodThree = [...values_three];
            var prodFour = [...values_four];
            var ageGroupChart = new Chart(ageGroup, {

                    type: 'bar',

                    data: {
                        labels: tempPLabels,
                        datasets: [{
                            label: '15-24',
                            backgroundColor: '#FEB043',    // COLOR 1
                            borderColor: '#FEB043',        // COLOR 1
                            data: prodOne
                        },{
                            label: '25-54',
                            backgroundColor: '#2138B7',    // COLOR 1
                            borderColor: '#2138B7',        // COLOR 1
                            data: prodTwo
                        },{
                            label: '55-64',
                            backgroundColor: '#7FFE00',    // COLOR 1
                            borderColor: '#7FFE00',        // COLOR 1
                            data: prodThree
                        },{
                            label: '> 65',
                            backgroundColor: '#006CD7',    // COLOR 1
                            borderColor: '#006CD7',        // COLOR 1
                            data: prodFour
                        }]
                    },

                    options: {
                        aspectRatio: 1,
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
                        }
                    }
                });
            
            // CHART 5
            
            var dbMale = clean(JSON.parse('<?php echo $male_yearly; ?>'));
            var dbFemale = clean(JSON.parse('<?php echo $female_yearly; ?>'));
                        
            let years_s = [];
            let values_male = [];
            let values_female = [];

            try {
              dbMale.map((item) => {
                years_s.push(item.year);
                values_male.push(item.value);
              });
              dbFemale.map((item) => {
                values_female.push(item.value);
              });
            } catch (error) {
              console.log(error);
            }
            
            var sexGroup = document.getElementById('ctxSexGroup').getContext('2d');
            var tempPsLabels = [...years_s];
            var vMale = [...values_male];
            var vFemale = [...values_female];
            var sexGroupChart = new Chart(sexGroup, {

                    type: 'bar',

                    data: {
                        labels: tempPsLabels,
                        datasets: [{
                            label: 'Male',
                            backgroundColor: '#17256b',    // COLOR 1
                            borderColor: '#17256b',        // COLOR 1
                            data: vMale
                        },{
                            label: 'Female',
                            backgroundColor: '#FEB043',    // COLOR 1
                            borderColor: '#FEB043',        // COLOR 1
                            data: vFemale
                        }]
                    },

                    options: {
                        aspectRatio: 1,
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
                        }
                    }
                });
            
            // CHART 6
            
            var dbSingle = clean(JSON.parse('<?php echo $s_yearly; ?>'));
            var dbMarried = clean(JSON.parse('<?php echo $m_yearly; ?>'));
            var dbWidow = clean(JSON.parse('<?php echo $w_yearly; ?>'));
            var dbSeparated = clean(JSON.parse('<?php echo $se_yearly; ?>'));
                        
            let years_c = [];
            let values_single = [];
            let values_married = [];
            let values_widow = [];
            let values_separated = [];

            try {
              dbSingle.map((item) => {
                years_c.push(item.year);
                values_single.push(item.value);
              });
              dbMarried.map((item) => {
                values_married.push(item.value);
              });
              dbWidow.map((item) => {
                values_widow.push(item.value);
              });
              dbSeparated.map((item) => {
                values_separated.push(item.value);
              });
            } catch (error) {
              console.log(error);
            }
            
            var civilGroup = document.getElementById('ctxCivilGroup').getContext('2d');
            var tempPcLabels = [...years];
            var prodSingle = [...values_single];
            var prodMarried = [...values_married];
            var prodWidow = [...values_widow];
            var prodSeparated = [...values_separated];
            var civilGroupChart = new Chart(civilGroup, {

                    type: 'bar',

                    data: {
                        labels: tempPcLabels,
                        datasets: [{
                            label: 'Single',
                            backgroundColor: '#006CD7',    // COLOR 1
                            borderColor: '#006CD7',        // COLOR 1
                            data: prodSingle
                        },{
                            label: 'Married',
                            backgroundColor: '#17256b',    // COLOR 1
                            borderColor: '#17256b',        // COLOR 1
                            data: prodMarried
                        },{
                            label: 'Widow',
                            backgroundColor: '#FEB043',    // COLOR 1
                            borderColor: '#FEB043',        // COLOR 1
                            data: prodWidow
                        },{
                            label: 'Separated',
                            backgroundColor: '#7FFE00',    // COLOR 1
                            borderColor: '#7FFE00',        // COLOR 1
                            data: prodSeparated
                        }]
                    },

                    options: {
                        aspectRatio: 1,
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
                        }
                    }
                });
            
        </script>
    </body>
</html>