<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Profile of the Filipino Farmer</title>
    <meta name="description" content="Main Page">
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
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="btn btn-warning text-white" href="<?php echo base_url(); ?>profilemain" role="button"><i class="bi bi-house-door-fill"></i> All Provinces</a>
                    <div class="dropdown">
                        <button class="btn btn-light border dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Select Province
                        </button>
                        <div class="provinces-dropdown dropdown-menu" aria-labelledby="dropdownMenu2">
                            <?php
                            $temp_region = "";
                            for ($i = 0; $i < count($provinces); $i++) {                            
                                if($provinces[$i]['region_name'] != $temp_region){
                                    echo '<a class="dropdown-item disabled font-weight-bold">'. $provinces[$i]['region_name'] . '</a>';
                                }
                                echo '<a class="pl-5 dropdown-item" href="'.base_url().'profilemain/province/'.$provinces[$i]["province_id"].'">'.$provinces[$i]["province"].'</a>';
                                $temp_region = $provinces[$i]['region_name'];
                            }
                            ?>
                        </div>
                    </div>
                </nav>

    <!-- Header --->
    <div id="main" class="jumbotron text-center">
        <div class="jumbotron-content">
            <h2>Profile of the </h2>
            <h1>Filipino Rice Farmer</h1>
            <p class="lead"><i>How do we characterize the rice farmers in the Philippines?</i> Understand the important attributes<br/>that contributes to their overall being as our producers of rice.</p>
            <div class="card-note w-25 mx-auto rounded-pill bg-light">
                <h6 class="text-dark p-1">Rice Farmers: <strong>2.4 MILLION</strong> (PSA, 2020)</h6>
            </div>
        </div>
    </div>

    <!-- Body -->
    <div class="farmer dashboard">
        <div class="row">
            <div class="col">
                <div class="card-deck text-center mb-0 text-white">
                    <div class="card primary mb-2 bg-warning">
                        <div class="card-body">
                            <div class="row">
                                <div class="col border-right">
                                     <h5 class="card-title text-left"><a href="<?php echo base_url(); ?>monthlyincome" class="text-white stretched-link text-decoration-none card-sec">Estimated Monthly Income (2016)</a></h5>
                                    <h1 class="card-text font-weight-bold">P <?php echo number_format($monthly_income_all['value']); ?><i class="bi bi-caret-up-fill text-primary"></i></h1>
                                    <div class="card-note w-50 mx-auto rounded-pill bg-primary">
                                        <p class="text-white">per household</p>
                                    </div>
                                </div>
                                <div class="col border-right">
                                     <h5 class="card-title text-left"><a href="<?php echo base_url(); ?>monthlyincome" class="text-white stretched-link text-decoration-none card-sec">Above Poverty Threshold (2016)</a></h5>
                                    <h1 class="card-text font-weight-bold"><?php echo number_format($poverty_all['value']); ?>%<i class="bi bi-caret-up-fill text-primary"></i></h1>
                                    <div class="card-note w-50 mx-auto rounded-pill bg-primary">
                                        <p class="text-white">of farming households</p>
                                    </div>
                                </div>
                                 <div class="col">
                                     <h5 class="card-title text-left"><a href="<?php echo base_url(); ?>monthlyincome" class="text-white stretched-link text-decoration-none card-sec">Monthly Poverty Threshold (2015)</a></h5>
                                    <h1 class="card-text font-weight-bold">P <?php echo number_format($poverty_threshold_all['value']); ?><i class="bi bi-caret-up-fill text-primary"></i></h1>
                                    <div class="card-note w-50 mx-auto rounded-pill bg-primary">
                                        <p class="text-white">per household of 5</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="caret-select"><i class="bi bi-caret-right-alt pr-2"></i></div>
                    </div>
                </div>
		        <div class="card-deck mt-0 text-center text-white">
                    <div class="card primary mb-4 col-12 text-dark">
                        <div class="card-body">
                            <div class="row">
                                <div class="col border-right">
                                    <h6 class="card-title text-left"><a href="<?php echo base_url(); ?>social" class="text-dark stretched-link text-decoration-none farmer-sec">Average Age (2016)</a></h6>
                                    <h2 class="card-text"><?php echo $mean_age_all['value']; ?><i class="bi bi-caret-up-fill text-primary"></i></h2>
                                    <div class="card-note w-75 mx-auto rounded-pill bg-warning">
                                        <p class="text-white">years old</p>
                                    </div>
                                </div>
                                <div class="col border-right">
                                    <h6 class="card-title text-left mb-2"><a href="<?php echo base_url(); ?>social" class="text-dark stretched-link text-decoration-none farmer-sec">Sex (2016)</a></h6>
                                    <div><canvas id="ctxSex"></canvas></div>
                                    <div class="card-note w-75 mx-auto rounded-pill bg-warning mt-2">
                                        <p class="text-white">male</p>
                                    </div>
                                </div>
                                <div class="col">
                                    <h6 class="card-title text-left mb-2"><a href="<?php echo base_url(); ?>social" class="text-dark stretched-link text-decoration-none farmer-sec">Civil Status (2016)</a></h6>
                                    <div><canvas id="ctxCivil"></canvas></div>
                                    <div class="card-note w-75 mx-auto rounded-pill bg-warning mt-2">
                                        <p class="text-white">Married</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="caret-select"><i class="bi bi-caret-right-alt pr-2"></i></div>
                    </div>
				</div>
				<div class="card-deck mt-0 text-center text-white">
                    <div class="card primary mb-4 col-6 text-dark">
                        <div class="card-body pl-3 pr-3 pb-0">
                            <div class="row">
                                <div class="col border-right">
                                    <h6 class="card-title text-left"><a href="<?php echo base_url(); ?>farmdetails" class="text-dark stretched-link text-decoration-none card-sec">Average Farm Size (2016)</a></h6>
                                    <h2 class="card-text"><?php echo $avefarm_all['value']; ?><i class="bi bi-caret-up-fill text-primary"></i></h2>
                                    <div class="card-note w-50 mx-auto rounded-pill bg-warning">
                                        <p class="text-white">hectares</p>
                                    </div>
                                </div>
                                <div class="col">
                                    <h6 class="card-title text-left mb-2"><a href="<?php echo base_url(); ?>farmdetails" class="text-dark stretched-link text-decoration-none card-sec">Farm Ownership (2016)</a></h6>
                                    <div><canvas id="ctxTenStat"></canvas></div>
                                    <div class="card-note w-75 mx-auto rounded-pill bg-warning mt-2">
                                        <p class="text-white"><?php echo $tsHighestLabel; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="caret-select"><i class="bi bi-caret-right-alt pr-2"></i></div>
                    </div>
					<div class="card primary mb-4 col-6 text-dark">
                        <div class="card-body">
                            <div class="row">
                                <div class="col border-right">
                                    <h6 class="card-title text-left"><a href="<?php echo base_url(); ?>hhsizeincome" class="text-dark stretched-link text-decoration-none card-sec">Household Size (2016)</a></h6>
                                    <h2 class="card-text"><?php echo $hhsize_all['value']; ?><i class="bi bi-dash text-primary"></i></h2>
                                    <div class="card-note w-75 mx-auto rounded-pill bg-warning">
                                        <p class="text-white">members</p>
                                    </div>
                                </div>
                                <div class="col">
                                    <h6 class="card-title text-left mb-2"><a href="<?php echo base_url(); ?>hhsizeincome" class="text-dark stretched-link text-decoration-none card-sec">Rice as Major Income (2016)</a></h6>
                                    <div><canvas id="ctxSource"></canvas></div>
                                    <div class="card-note w-75 mx-auto rounded-pill bg-warning mt-2">
                                        <p class="text-white">Of Farming Households</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="caret-select"><i class="bi bi-caret-right-alt pr-2"></i></div>
                    </div>
                </div>
                <div class="card-deck mt-0 text-center text-white">
                    <div class="card primary mb-4 col-6 text-dark">
                        <div class="card-body">
                            <div class="row">
                                <div class="col border-right">
                                    <h6 class="card-title text-left"><a href="<?php echo base_url(); ?>educfarmexp" class="text-dark stretched-link text-decoration-none card-sec">Formal Education (2016)</a></h6>
                                    <h2 class="card-text"><?php echo number_format($educ_all['value']); ?><i class="bi bi-caret-up-fill text-primary"></i></h2>
                                    <div class="card-note w-50 mx-auto rounded-pill bg-warning">
                                        <p class="text-white">years</p>
                                    </div>
                                </div>
                                <div class="col">
                                    <h6 class="card-title text-left mb-2"><a href="<?php echo base_url(); ?>educfarmexp" class="text-dark stretched-link text-decoration-none card-sec">Farming Experience (2016)</a></h6>
                                    <h2 class="card-text"><?php echo number_format($fexp_all['value']); ?><i class="bi bi-caret-up-fill text-primary"></i></h2>
                                    <div class="card-note w-50 mx-auto rounded-pill bg-warning mt-1">
                                        <p class="text-white">years</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="caret-select"><i class="bi bi-caret-right-alt pr-2"></i></div>
                    </div>
                    <div class="card primary mb-4 col-6 text-dark">
                        <div class="card-body">
                            <div class="row">
                                <div class="col border-right">
                                    <h6 class="card-title text-left mb-2"><a href="<?php echo base_url(); ?>orgtraining" class="text-dark stretched-link text-decoration-none card-sec">Organization (2016)</a></h6>
                                    <div><canvas id="ctxOrg"></canvas></div>
                                    <div class="card-note w-75 mx-auto rounded-pill bg-warning mt-2">
                                        <p class="text-white">Members</p>
                                    </div>
                                </div>
                                <div class="col">
                                    <h6 class="card-title text-left mb-2"><a href="<?php echo base_url(); ?>orgtraining" class="text-dark stretched-link text-decoration-none card-sec">Trainings (2016)</a></h6>
                                    <div><canvas id="ctxTrain"></canvas></div>
                                    <div class="card-note w-100 mx-auto rounded-pill bg-warning mt-2">
                                        <p class="text-white">Attendees</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="caret-select"><i class="bi bi-caret-right-alt pr-2"></i></div>
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
        Chart.defaults.global.defaultFontSize = 12;
        Chart.defaults.global.animation.duration = 3000;

            // CHART 1
        
            var sexMale = JSON.parse('<?php echo $male_all['value']; ?>');
            var sexFemale = JSON.parse('<?php echo $female_all['value']; ?>');

            var ctx = document.getElementById("ctxSex");
            var myChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    datasets: [{
                        data: [sexMale, sexFemale],
                        backgroundColor: [
                            '#b85533', // COLOR 1
                            '#FEB043' // COLOR 2
                        ],
                        borderColor: [
                            '#b85533', // COLOR 1
                            '#FEB043' // COLOR 2
                        ]
                    }]
                },
                options: {
                    cutoutPercentage: 60,
                    aspectRatio: 5.5,
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
                            color: '#212529',
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
                            '#b85533', // COLOR 2
                            '#FEB043', // COLOR 3
                            '#7FFE00' // COLOR 4
                        ],
                        borderColor: [
                            '#006CD7', // COLOR 1
                            '#b85533', // COLOR 2
                            '#FEB043', // COLOR 3
                            '#7FFE00' // COLOR 4
                        ]
                    }]
                },
                options: {
                    cutoutPercentage: 60,
                    aspectRatio: 5.5,
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
                            color: '#212529',
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
        
            var tsOwners = JSON.parse('<?php echo $owner_all['value']; ?>');
            var tsAmort = JSON.parse('<?php echo $amort_all['value']; ?>');
            var tsLessee = JSON.parse('<?php echo $lessee_all['value']; ?>');
            var tsTenant = JSON.parse('<?php echo $tenant_all['value']; ?>');
            var tsOthers = JSON.parse('<?php echo $others_all['value']; ?>');
            var tsHigh = JSON.parse('<?php echo $tsHighest; ?>');

            var ctx = document.getElementById("ctxTenStat");
            var myChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    datasets: [{
                        data: [tsOwners, tsAmort, tsLessee, tsTenant, tsOthers],
                        backgroundColor: [
                            '#b85533', // COLOR 1
                            '#006CD7', // COLOR 2
                            '#FEB043', // COLOR 3
                            '#7FFE00', // COLOR 4
                            '#FE7E00' // COLOR 4
                        ],
                        borderColor: [
                            '#b85533', // COLOR 1
                            '#006CD7', // COLOR 2
                            '#FEB043', // COLOR 3
                            '#7FFE00', // COLOR 4
                            '#FE7E00' // COLOR 4
                        ]
                    }]
                },
                options: {
                    cutoutPercentage: 60,
                    aspectRatio: 4,
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
                            color: '#212529',
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
        
            var sRice = JSON.parse('<?php echo $rice_inc_all['value']; ?>');
            var sNonRice = JSON.parse('<?php echo $non_inc_all['value']; ?>');
            
            // CHART 4

            var ctx = document.getElementById("ctxSource");
            var myChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    datasets: [{
                        data: [sRice, sNonRice],
                        backgroundColor: [
                            '#b85533', // COLOR 1
                            '#FEB043' // COLOR 2
                        ],
                        borderColor: [
                            '#b85533', // COLOR 1
                            '#FEB043' // COLOR 2
                        ]
                    }]
                },
                options: {
                    cutoutPercentage: 60,
                    aspectRatio: 4,
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
                            text: sRice + '%',
                            color: '#212529',
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
        
            var Org = JSON.parse('<?php echo $org_all['value']; ?>');
            var NonOrg = JSON.parse('<?php echo $non_all['value']; ?>');
            
            // CHART 5

            var ctx = document.getElementById("ctxOrg");
            var myChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    datasets: [{
                        data: [Org, NonOrg],
                        backgroundColor: [
                            '#b85533', // COLOR 1
                            '#FEB043' // COLOR 2
                        ],
                        borderColor: [
                            '#b85533', // COLOR 1
                            '#FEB043' // COLOR 2
                        ]
                    }]
                },
                options: {
                    cutoutPercentage: 60,
                    aspectRatio: 4,
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
                            color: '#212529',
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
        
            // CHART 6
            
            var Tra = JSON.parse('<?php echo $tra_all['value']; ?>');
            var NonTra = JSON.parse('<?php echo $trn_all['value']; ?>');

            var ctx2 = document.getElementById("ctxTrain");
            var myChart2 = new Chart(ctx2, {
                type: 'pie',
                data: {
                    datasets: [{
                        data: [Tra, NonTra],
                        backgroundColor: [
                            '#b85533', // COLOR 1
                            '#FEB043' // COLOR 2
                        ],
                        borderColor: [
                            '#b85533', // COLOR 1
                            '#FEB043' // COLOR 2
                        ]
                    }]
                },
                options: {
                    cutoutPercentage: 60,
                    aspectRatio: 4,
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
                            color: '#212529',
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
