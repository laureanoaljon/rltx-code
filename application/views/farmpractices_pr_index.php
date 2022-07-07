<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Rice Farming Practices in the Philippines</title>

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

        function gtag() {
            dataLayer.push(arguments);
        }
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
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="btn btn-warning text-white" href="<?php echo base_url(); ?>farmpractices" role="button"><i class="bi bi-house-door-fill"></i> All Provinces</a>
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
                                echo '<a class="pl-5 dropdown-item" href="'.base_url().'farmpractices/province/'.$provinces[$i]["province_id"].'">'.$provinces[$i]["province"].'</a>';
                                $temp_region = $provinces[$i]['region_name'];
                            }
                            ?>
                        </div>
                    </div>
                </nav>

                <!-- Header --->
                <div id="main" class="jumbotron text-center">
                    <div class="jumbotron-content">
                        <h2>Rice Farming Practices in</h2>
                        <h1><?php echo $trans_all['location_name']?></h1>
                        <p class="lead"><i>How do our Filipino farmers cultivate rice in <?php echo $trans_all['location_name']?>? What practices do they usually use?</i> <br/> Learn and study the different farming methods of the Filipino rice farmers.</p>
                    </div>
                </div>

                <!-- Body -->
                <div class="farming dashboard">
                    <div class="row">
                        <div class="col-6">
                            <div class="card primary mb-2 bg-warning-2">
                                <h6 class="card-title text-left text-white pt-3 pl-3">Seeding Rate (2016 WS-2017 DS)</h6>
                                <div class="card-body pr-5">
                                    <div class="row text-center text-white">
                                        <div class="col-4 border-right">
                                            <p class="card-title-note"><a href="<?php echo base_url(); ?>seedingrate/province/<?php echo $id; ?>" class="text-white stretched-link text-decoration-none card-sec">Average</a></p>
                                            <h1 class="card-text font-weight-bold"><?php echo number_format($average_rate['value'], 0); ?><i class="bi bi-caret-up-fill text-primary"></i></h1>
                                        </div>
                                        <div class="col-4 border-right">
                                            <p class="card-title-note"><a href="<?php echo base_url(); ?>seedingrate/province/<?php echo $id; ?>" class="text-white stretched-link text-decoration-none card-sec">Transplanting</a></p>
                                            <h1 class="card-text font-weight-bold"><?php echo number_format($trans_rate['value'], 0); ?><i class="bi bi-caret-down-fill text-primary"></i></h1>
                                        </div>
                                        <div class="col-4">
                                            <p class="card-title-note"><a href="<?php echo base_url(); ?>seedingrate/province/<?php echo $id; ?>" class="text-white stretched-link text-decoration-none card-sec">Direct Seeding</a></p>
                                            <h1 class="card-text font-weight-bold"><?php echo number_format($direct_rate['value'], 0); ?><i class="bi bi-caret-up-fill text-primary"></i></h1>
                                        </div>
                                    </div>
                                    <div class="w-50 mt-3 mx-auto pb-0 rounded-pill text-center">
                                        <p class="text-black text-uppercase mb-0">Kilograms Per Hectare</p>
                                    </div>
                                </div>
                                <div class="caret-select"><i class="bi bi-caret-right-alt pr-2"></i></div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card primary mb-2 bg-warning-2">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="<?php echo base_url(); ?>cropest/province/<?php echo $id; ?>" class="text-white stretched-link text-decoration-none card-main">Crop Establishment (2017 DS)</a></h5>
                                    <div class="row text-center">
                                        <div class="col">
                                            <div class="w-75 mx-auto mb-2 rounded-pill text-center">
                                                <p class="text-black text-uppercase mb-0">Transplanting</p>
                                            </div>
                                            <div><canvas id="ctxTransDS"></canvas></div>
                                        </div>
                                        <div class="col">
                                            <div class="w-75 mx-auto mb-2 rounded-pill text-center">
                                                <p class="text-black text-uppercase mb-0">Direct Seeding</p>
                                            </div>
                                            <div><canvas id="ctxDirectDS"></canvas></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="caret-select"><i class="bi bi-caret-right-alt pr-2"></i></div>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="card primary mb-2 bg-warning-2 text-white">
                                <div class="card-body pr-2">
                                    <h6 class="card-title mb-0"><a href="<?php echo base_url(); ?>labor/province/<?php echo $id; ?>" class="text-white stretched-link text-decoration-none card-main">Labor (2016-2017)</a></h6>
                                    <h1 class="card-text text-center mt-4"><?php echo number_format($labor_all['value']); ?><i class="bi bi-caret-up-fill text-primary"></i></h1>
                                    <div class="w-100 mx-auto mt-4 rounded-pill text-center" style="margin-bottom: 11px;">
                                        <p class="text-black text-uppercase mb-0">Person-Days/Ha</p>
                                    </div>
                                </div>
                                <div class="caret-select"><i class="bi bi-caret-right-alt pr-2"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="card primary mb-2">
                                <h6 class="card-title text-left pt-3 pl-3">Seed Class Usage (2017 DS)</h6>
                                <div class="card-body pr-5">
                                    <div class="row text-center mt-2" style="margin-bottom: 20px;">
                                        <div class="col-4 border-right">
                                            <p class="card-title-note"><a href="<?php echo base_url(); ?>seedclass/province/<?php echo $id; ?>" class="text-black stretched-link text-decoration-none card-sec">Hybrid</a></p>
                                            <h1 class="smaller card-text"><?php echo number_format($hy_all['value']); ?>%<i class="bi bi-caret-up-fill text-primary"></i></h1>
                                        </div>
                                        <div class="col-4 border-right">
                                            <p class="card-title-note"><a href="<?php echo base_url(); ?>seedclass/province/<?php echo $id; ?>" class="text-black stretched-link text-decoration-none card-sec">High Quality Inbred</a></p>
                                            <h1 class="smaller card-text"><?php echo number_format($hq_all['value']); ?>%<i class="bi bi-caret-down-fill text-primary"></i></h1>
                                        </div>
                                        <div class="col-4">
                                            <p class="card-title-note"><a href="<?php echo base_url(); ?>seedclass/province/<?php echo $id; ?>" class="text-black stretched-link text-decoration-none card-sec">Farmer's Seeds</a></p>
                                            <h1 class="smaller card-text"><?php echo number_format($gs_all['value'] + $fs_all['value']); ?>%<i class="bi bi-caret-down-fill text-primary"></i></h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="caret-select"><i class="bi bi-caret-right-alt pr-2"></i></div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card primary mb-2">
                                <h6 class="card-title text-left pt-3 pl-3">Fertilizer Rate (2017 DS)</h6>
                                <div class="card-body pr-5">
                                    <div class="row text-center text-black">
                                        <div class="col-4 border-right">
                                            <p class="card-title-note"><a href="<?php echo base_url(); ?>fertusage/province/<?php echo $id; ?>" class="text-black stretched-link text-decoration-none card-sec">Nitrogen (N)</a></p>
                                            <h1 class="card-text smaller"><?php echo number_format($n_ds['value'], 0); ?><i class="bi bi-caret-down-fill text-primary"></i></h1>
                                        </div>
                                        <div class="col-4 border-right">
                                            <p class="card-title-note"><a href="<?php echo base_url(); ?>fertusage/province/<?php echo $id; ?>" class="text-black stretched-link text-decoration-none card-sec">Phosphorus (P)</a></p>
                                            <h1 class="card-text smaller"><?php echo number_format($p_ds['value'], 0); ?><i class="bi bi-caret-down-fill text-primary"></i></h1>
                                        </div>
                                        <div class="col-4">
                                            <p class="card-title-note"><a href="<?php echo base_url(); ?>fertusage/province/<?php echo $id; ?>" class="text-black stretched-link text-decoration-none card-sec">Potassium (K)</a></p>
                                            <h1 class="card-text smaller"><?php echo number_format($k_ds['value'], 0); ?><i class="bi bi-dash text-primary"></i></h1>
                                        </div>
                                    </div>
                                    <div class="row text-center">
                                        <div class="w-50 mt mx-auto mt-2 pb-0 rounded-pill bg-warning-2">
                                            <p class="text-white text-uppercase mb-0">Kilogram Per Hectare</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="caret-select"><i class="bi bi-caret-right-alt pr-2"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div>
                                <div class="card primary text-center">
                                    <div class="card-body text-black pr-4">
                                        <h6 class="my-0"><a href="<?php echo base_url(); ?>varieties/province/<?php echo $id; ?>" class="card-main">Top 10 Rice Variety Planted (2017 DS)</a></h6>
                                        <p class="my-0 font-weight-normal text-lowercase text-muted">in percent of farmers (%)</p>
                                    </div>
                                    <div class="caret-select"><i class="bi bi-caret-right-alt pr-2" style="top: 34%;"></i></div>
                                </div>
                                <div class="p-2 border border-light"><canvas id="ctxChart1-v"></canvas></div>
                            </div>
                            <div class="mt-2">
                                <div class="card primary text-center">
                                    <div class="card-body text-black pr-4">
                                        <h6 class="my-0"><a href="<?php echo base_url(); ?>pesticides/province/<?php echo $id; ?>" class="card-main">Top Active Ingredients by Pesticide Type (2017 DS)</a></h6>
                                        <p class="my-0 font-weight-normal text-lowercase text-muted">in percent of farmers (%)</p>
                                    </div>
                                    <div class="caret-select"><i class="bi bi-caret-right-alt pr-2" style="top: 34%;"></i></div>
                                </div>
                                <div class="p-2 border border-light">
                                    <div class="card-body pt-2">
                                        <?php 
                                            for ($i = 0; $i < count($pest_all); $i++) { 
                                                $header = "Herbicide";
                                                switch ($i) {
                                                    case 1: $header = "Insectide"; break;
                                                    case 2: $header = "Fungicide"; break;
                                                    case 3: $header = "Other Pesticide"; break;
                                                }
                                                echo '
                                                <div class="text-center w-50 mt mx-auto mb-2 pb-0 rounded-pill bg-warning-2">
                                                <p class="text-white text-uppercase mb-0">'.$header.'</p>
                                                </div>';
                                                echo '<p class="h6 text-black text-center">' .$pest_all[$i]['label'].'</p>';
                                            }
                                            ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div>
                                <div class="card primary text-center">
                                    <div class="card-body text-black pr-4">
                                        <h6 class="my-0 text-center"><a href="<?php echo base_url(); ?>adoptionrate/province/<?php echo $id; ?>" class="card-main">Top Rice Farming Technologies and Practices (2016 WS-2017 DS)</a></h6>
                                        <p class="my-0 font-weight-normal text-lowercase text-muted">in percent of farmers (%)</p>
                                    </div>
                                    <div class="caret-select"><i class="bi bi-caret-right-alt pr-2" style="top: 34%;"></i></div>
                                </div>
                                <div class="border border-light" style="padding: 33px 20px;">
                                    <?php for ($i = 0; $i < count($adopt_all); $i++) {
                                        $tech = preg_replace("/\\\\n/", "<br />", $adopt_all[$i]['tech']);
                                        echo '<div class="text-center w-100 mt mx-auto mb-2 pb-0 rounded-pill bg-warning-2">
                                                <p class="text-white text-uppercase mb-0">'.$adopt_all[$i]['category'].'</p>
                                              </div>';
                                        echo '<div class="row pl-3 pr-3 mb-2 d-flex justify-content-between">';
                                        echo '    <h6>'.$tech.'</h6>';
                                        echo '    <h6 class="font-weight-bold">'.number_format($adopt_all[$i]['value'], 0).'%</h6>';
                                        echo '</div>';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div>
                                <div class="card primary text-center">
                                    <div class="card-body text-black pr-4">
                                        <h6 class="my-0"><a href="<?php echo base_url(); ?>fertilizerapp/province/<?php echo $id; ?>" class="card-main">Rank of Fertilizer-type by Usage (2017 DS)</a></h6>
                                        <p class="my-0 font-weight-normal text-lowercase text-muted">in percent of farmers (%)</p>
                                    </div>
                                    <div class="caret-select"><i class="bi bi-caret-right-alt pr-2" style="top: 34%;"></i></div>
                                </div>
                                <div class="p-2 border border-light"><canvas id="ctxChart1"></canvas></div>
                            </div>
                            <div class="mt-2">
                                <div class="card primary text-center">
                                    <div class="card-body text-black pr-4">
                                        <h6 class="my-0"><a href="<?php echo base_url(); ?>machinesource/province/<?php echo $id; ?>" class="card-main">Rank of Machines by Usage (2017 DS)</a></h6>
                                        <p class="my-0 font-weight-normal text-lowercase text-muted">in percent of farmers (%)</p>
                                    </div>
                                    <div class="caret-select"><i class="bi bi-caret-right-alt pr-2" style="top: 34%;"></i></div>
                                </div>
                                <div class="border border-light" style="padding: 25px 0;"><canvas id="ctxChart2"></canvas></div>
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

        var directDS = JSON.parse('<?php echo $direct_ds['value']; ?>');
        var transDS = JSON.parse('<?php echo $trans_ds['value']; ?>');

        var ctx2 = document.getElementById("ctxDirectDS");
        var myChart2 = new Chart(ctx2, {
            type: 'pie',
            data: {
                datasets: [{
                    data: [directDS, transDS],
                    backgroundColor: [
                        '#2138B7', // COLOR 1
                        '#bcf7ca' // COLOR 2
                    ],
                    borderColor: [
                        '#2138B7', // COLOR 1
                        '#bcf7ca' // COLOR 2
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
                        '#2138B7', // COLOR 1
                        '#bcf7ca' // COLOR 2
                    ],
                    borderColor: [
                        '#2138B7', // COLOR 1
                        '#bcf7ca' // COLOR 2
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

        // Top Varieties

        var dbpestAll = JSON.parse('<?php echo $var_all; ?>');

        let years = [];
        let var_all = [];
        let var_all_labels = [];

        try {
            dbpestAll.map((item) => {
                var_all_labels.push(item.label);
                var_all.push(item.value);
            });
        } catch (error) {
            console.log(error);
        }

        var laborChart = document.getElementById('ctxChart1-v').getContext('2d');
        var tempPLabels = [...years];
        var dvar_all = [...var_all];
        var dvar_all_labels = [...var_all_labels];

        var laborChartGroup = new Chart(laborChart, {

            type: 'horizontalBar',

            data: {
                labels: dvar_all_labels,
                datasets: [{
                    label: 'Percent',
                    backgroundColor: '#2138B7', // COLOR 1
                    borderColor: '#2138B7', // COLOR 1
                    data: dvar_all,
                    stack: 'All'
                }]
            },

            options: {
                aspectRatio: 1.5,
                scales: {
                    xAxes: [{
                        display: false,
                        ticks: {
                            suggestedMin: 0,
                            suggestedMax: 40
                        }
                    }],
                    yAxes: [{
                        display: true,
                        gridLines: {
                            color: "rgba(0, 0, 0, 0)"
                        },
                        position: 'left'
                    }]
                },
                legend: {
                    display: false,
                },
                tooltips: false,
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
                        this.data.datasets.forEach(function(dataset, i) {
                            let meta = chartInstance.controller.getDatasetMeta(i);
                            meta.data.forEach(function(bar, index) {
                                let data = parseFloat(dataset.data[index]).toFixed(0) + "%";
                                ctx.fillText(data, bar._model.x + 20, bar._model.y + 8);
                            });
                        });
                    }
                }
            }
        });
        
        // Top Fertilizer
        
        var dbpestAll = JSON.parse('<?php echo $fert_all; ?>');

        let fert_all = [];
        let fert_all_labels = [];

        try {
            dbpestAll.map((item) => {
                fert_all_labels.push(item.label);
                fert_all.push(item.value);
            });
        } catch (error) {
            console.log(error);
        }

        var laborChart2 = document.getElementById('ctxChart1').getContext('2d');
        var tempPLabels = [...years];
        var dfert_all = [...fert_all];
        var dfert_all_labels = [...fert_all_labels];

        var laborChartGroup2 = new Chart(laborChart2, {

            type: 'horizontalBar',

            data: {
                labels: dfert_all_labels,
                datasets: [{
                    label: 'Percent',
                    backgroundColor: '#2138B7', // COLOR 1
                    borderColor: '#2138B7', // COLOR 1
                    data: dfert_all,
                    stack: 'All'
                }]
            },

            options: {
                layout: {
                    padding: {
                        left: 28,
                        right: 25
                    }
                },
                aspectRatio: 1.5,
                scales: {
                    xAxes: [{
                        display: false,
                        ticks: {
                            suggestedMin: 0,
                            suggestedMax: 100
                        }
                    }],
                    yAxes: [{
                        display: true,
                        gridLines: {
                            color: "rgba(0, 0, 0, 0)"
                        },
                        position: 'left'
                    }]
                },
                legend: {
                    display: false,
                },
                tooltips: false,
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
                        this.data.datasets.forEach(function(dataset, i) {
                            let meta = chartInstance.controller.getDatasetMeta(i);
                            meta.data.forEach(function(bar, index) {
                                let data = parseFloat(dataset.data[index]).toFixed(0) + "%";
                                ctx.fillText(data, bar._model.x + 20, bar._model.y + 8);
                            });
                        });
                    }
                }
            }
        });
        
        // Top Machine
            var dbmachAll = JSON.parse('<?php echo $machine_all; ?>');
        
            let mach_all = [];
            let mach_all_labels = [];

            try {
              dbmachAll.map((item) => {
                mach_all_labels.push(item.label);
                mach_all.push(item.value);
              });
            } catch (error) {
              console.log(error);
            }
                        
            var laborChart3 = document.getElementById('ctxChart2').getContext('2d');
            var tempMLabels = [...years];
            var mfert_all = [...mach_all];
            var mfert_all_labels = [...mach_all_labels];
            
            var laborChartGroup3 = new Chart(laborChart3, {

                    type: 'horizontalBar',

                    data: {
                        labels: mfert_all_labels,
                        datasets: [{
                            label: 'Percent',
                            backgroundColor: '#2138B7',    // COLOR 1
                            borderColor: '#2138B7',        // COLOR 1
                            data: mfert_all,
                            stack: 'All'
                        }]
                    },

                    options: {
                        aspectRatio: 1.5,
                        scales: {
                            xAxes: [{
                                display: false,
                                ticks: {
                                    suggestedMin: 0,
                                    suggestedMax: 100
                                }
                            }],
                            yAxes: [{
                                display: true,
                                gridLines: {
                                    color: "rgba(0, 0, 0, 0)"
                                },
                                position: 'left'
                            }]
                        },
                    legend: {
                    display: false,
                    },
                    tooltips: false,
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
                          this.data.datasets.forEach(function(dataset, i)
                                                    {
                            let meta = chartInstance.controller.getDatasetMeta(i);
                            meta.data.forEach(function(bar, index) {
                              let data = parseFloat(dataset.data[index]).toFixed(0) + "%";
                              ctx.fillText(data, bar._model.x + 20 , bar._model.y + 8);
                            });
                          });
                        }
                    }
                    }
                });

    </script>
</body>

</html>
