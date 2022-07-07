<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>State of the Rice Sector in <?php echo $production_all['location_name'];?></title>
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
                        <a class="active w-100 mr-2 text-white text-center d-block" href="<?php echo base_url(); ?>" role="button">Rice Industry</a>
                        <a class="w-100 mr-2 text-white text-center d-block" href="<?php echo base_url(); ?>profilemain" role="button">Rice Farmer</a>
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
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="btn btn-warning text-white" href="<?php echo base_url(); ?>" role="button"><i class="bi bi-house-door-fill"></i> National</a>
                    <div class="dropdown">
                        <button class="btn btn-light border dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Select Region
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <?php for ($i = 0; $i < count($regions); $i++) {
                                    echo '<a class="dropdown-item" href="'.base_url().'main/region/'.$regions[$i]["id"].'">'.$regions[$i]["location_name"].'</a>';
                                } ?>
                        </div>
                    </div>
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
                                echo '<a class="pl-5 dropdown-item" href="'.base_url().'main/province/'.$provinces[$i]["province_id"].'">'.$provinces[$i]["province"].'</a>';
                                $temp_region = $provinces[$i]['region_name'];
                            }
                            ?>
                        </div>
                    </div>
                </nav>

                <!-- Header --->
                <div id="main" class="jumbotron text-center">
                    <div class="jumbotron-content">
                        <h2>State of the Rice Sector in the</h2>
                        <h1><?php echo $production_all['location_name'];?></h1>
                        <p class="lead"><i>What is the status of the rice industry in the region?</i> Explore and get insights about the trend<br /> of the key performance indicators of rice production, valuation, and market. </p>
                    </div>
                </div>

                <!-- Body -->
                <div class="dashboard">
                    <div class="row">
                        <div class="col-4">
                            <div class="card primary mb-2 bg-primary text-center text-white">
                                <div class="card-body">
                                    <h5 class="card-title text-left"><a href="<?php echo base_url(); ?>productions/region/<?php echo $id; ?>" class="text-white stretched-link text-decoration-none card-main">Palay Production (2021)</a></h5>
                                    <h1 class="card-text font-weight-bold"><?php echo $production_all['value']; ?><i class="<?php echo $prod_caret; ?>"></i></h1>
                                    <div class="card-note w-50 mx-auto rounded-pill bg-warning">
                                        <p class="text-white">metric tons</p>
                                    </div>
                                </div>
                                <div class="caret-select"><i class="bi bi-caret-right-alt pr-2"></i></div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card primary mb-2 bg-primary text-center text-white">
                                <div class="card-body">
                                    <h5 class="card-title text-left"><a href="<?php echo base_url(); ?>harvestareas/region/<?php echo $id; ?>" class="text-white stretched-link text-decoration-none card-main">Area Harvested (2021)</a></h5>
                                    <h1 class="card-text font-weight-bold"><?php echo $harvestarea_all['value']; ?> <i class="<?php echo $area_caret; ?>"></i></h1>
                                    <div class="card-note w-50 mx-auto rounded-pill bg-warning">
                                        <p class="text-white">hectares</p>
                                    </div>
                                </div>
                                <div class="caret-select"><i class="bi bi-caret-right-alt pr-2"></i></div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card primary mb-2 bg-primary text-center text-white">
                                <div class="card-body">
                                    <h5 class="card-title text-left"><a href="<?php echo base_url(); ?>estyields/region/<?php echo $id; ?>" class="text-white stretched-link text-decoration-none card-main">Yield per Hectare (2021)</a></h5>
                                    <h1 class="card-text font-weight-bold"><?php echo $estyield_all['value']; ?> <i class="<?php echo $yield_caret; ?>"></i></h1>
                                    <div class="card-note w-75 mx-auto rounded-pill bg-warning">
                                        <p class="text-white">metric tons per hectare</p>
                                    </div>
                                </div>
                                <div class="caret-select"><i class="bi bi-caret-right-alt pr-2"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-md-8 col-lg-8 mt-2">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 p-0">
                                        <div class="card secondary text-center">
                                            <div class="row p-3">
                                                <div class="col border-right">
                                                    <div class="card-body pt-0 pl-2 pr-2">
                                                        <h6 class="card-title text-left"><a href="<?php echo base_url(); ?>valuations/region/<?php echo $id; ?>" class="text-black stretched-link text-decoration-none card-sec">Value of Rice Production (2020)</a></h6>
                                                        <h1 style="font-size: 60px !important" class="card-text mt-4">P <?php echo number_format($latest_palay_valuation['value'] / 1000, 2); ?><i class="<?php echo $valuation_caret; ?>"></i></h1>
                                                        <p>Billion</p>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="card-body pl-3 pt-0 pr-3">
                                                        <h6 class="card-title text-left"><a href="<?php echo base_url(); ?>valuations/region/<?php echo $id; ?>" class="text-black stretched-link text-decoration-none card-sec">Percent Share to Value of Agricultural Production (2020)</a></h6>
                                                        <div><canvas id="ctxAgriShare"></canvas></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="caret-select"><i class="bi bi-caret-right-alt pr-2"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mt-2 pl-0">
                                    <div class="card primary bg-primary text-center">
                                        <div class="card-body text-white">
                                            <h6 class="card-title text-center align-middle"><a href="<?php echo base_url(); ?>yieldcost/region/<?php echo $id; ?>" class="text-white stretched-link text-decoration-none card-main">Productivity Indicators</a></h6>
                                            <a href="<?php echo base_url(); ?>yieldcost/region/<?php echo $id; ?>" class="text-white stretched-link text-decoration-none card-main"><img class="d-block img-fluid mx-auto" style="height: 137px" src="<?php echo base_url(); ?>assets/ani_at_kita_logo.png"></a>
                                        </div>
                                        <div class="caret-select"><i class="bi bi-caret-right-alt pr-2"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-deck mt-3 mb-2 text-center">
                                <div class="card secondary text-center">
                                    <div class="card-body pl-3 pr-3">
                                        <div class="row mt-2">
                                            <div class="col">
                                                <h6 class="d-block card-title text-left"><a href="<?php echo base_url(); ?>incomes/region/<?php echo $id; ?>" class="text-black stretched-link text-decoration-none card-sec">Net Returns (2020)</a></h6>
                                                <h2 class="d-block card-text">P <?php echo $net_returns['value']; ?><i class="<?php echo $net_caret; ?>"></i></h2>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col">
                                                <h6 class="d-block card-title text-left"><a href="<?php echo base_url(); ?>incomes/region/<?php echo $id; ?>" class="text-black stretched-link text-decoration-none card-sec">Gross Returns</a></h6>
                                                <h2 class="d-block card-text mb-2">P <?php echo $gross_returns['value']; ?><i class="<?php echo $gross_caret; ?>"></i></h2>
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col">
                                                <h6 class="card-title text-left"><a href="<?php echo base_url(); ?>incomes/region/<?php echo $id; ?>" class="text-black stretched-link text-decoration-none card-sec">Total Cost</a></h6>
                                                <h2 class="card-text">P <?php echo $total_costs; ?><i class="<?php echo $cost_caret; ?>"></i></h2>
                                            </div>
                                        </div>
                                        <p class="mt-4">per hectare per cropping season</p>
                                    </div>
                                    <div class="caret-select"><i class="bi bi-caret-right-alt pr-2"></i></div>
                                </div>
                                <div class="card secondary text-center">
                                    <div class="card-body pl-3 pr-3">
                                        <div class="row">
                                            <div class="col border-right">
                                                <h6 class="card-title text-left"><a href="<?php echo base_url(); ?>prices/region/<?php echo $id; ?>" class="text-black text-decoration-none card-sec">Dry Palay Price (2021)</a></h6>
                                                <h2 class="card-text">P <?php echo $farmgate['value']; ?><i class="<?php echo $fg_caret; ?>"></i></h2>
                                            </div>
                                            <div class="col">
                                                <h6 class="card-title text-left"><a href="<?php echo base_url(); ?>prices/region/<?php echo $id; ?>" class="text-black text-decoration-none card-sec">Production Cost (2020)</a></h6>
                                                <h2 class="card-text">P <?php echo $total_costs_int; ?><i class="<?php echo $unit_caret; ?>"></i></h2>
                                            </div>
                                        </div>
                                        <h6 class="card-title text-left mt-2"><a href="<?php echo base_url(); ?>prices/region/<?php echo $id; ?>" class="text-black text-decoration-none card-main">Rice Wholesale Prices (2021)</a></h6>
                                        <div class="row">
                                            <div class="col border-right">
                                                <p>Regular-milled</p>
                                                <h2 class="card-text">P <?php echo $wholesale['value']; ?><i class="<?php echo $wg_caret; ?>"></i></h2>
                                            </div>
                                            <div class="col">
                                                <p>Well-willed</p>
                                                <h2 class="card-text mb-2">P <?php echo $wholesale_sp['value']; ?><i class="<?php echo $ws_caret; ?>"></i></h2>
                                            </div>
                                        </div>
                                        <h6 class="card-title text-left mt-2"><a href="<?php echo base_url(); ?>prices/region/<?php echo $id; ?>" class="text-black text-decoration-none card-main">Rice Retail Prices (2021)</a></h6>
                                        <div class="row">
                                            <div class="col border-right">
                                                <p>Regular-milled</p>
                                                <h2 class="card-text">P <?php echo $retail['value']; ?><i class="<?php echo $rg_caret; ?>"></i></h2>
                                            </div>
                                            <div class="col">
                                                <p>Well-milled</p>
                                                <h2 class="card-text mb-2">P <?php echo $retail_sp['value']; ?><i class="<?php echo $rs_caret; ?>"></i></h2>
                                            </div>
                                        </div>
                                        <p class="mt-1">per kilogram</p>
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

        // CHART 2

        var AgriShare = JSON.parse('<?php echo $latest_palay_agri_share['value']; ?>');
        var NonAgriShare = JSON.parse('<?php echo 100-intval($latest_palay_agri_share['value']); ?>');

        var ctx = document.getElementById("ctxAgriShare");
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                datasets: [{
                    data: [NonAgriShare, AgriShare],
                    backgroundColor: [
                        '#A6CEE3', // COLOR 1
                        '#2138B7' // COLOR 2
                    ],
                    borderColor: [
                        '#A6CEE3', // COLOR 1
                        '#2138B7' // COLOR 2
                    ]
                }]
            },
            options: {
                cutoutPercentage: 60,
                aspectRatio: 3,
                legend: {
                    display: false
                },
                layout: {
                    padding: 0
                },
                responsive: true,
                maintainAspectRatio: true,
                plugins: {
                    labels: false
                },
                elements: {
                    center: {
                        text: AgriShare + '%',
                        color: '#212529', // Default is #000000
                        fontStyle: 'Poppins', // Default is Arial
                        sidePadding: 20, // Default is 20 (as a percentage)
                        minFontSize: 12, // Default is 20 (in px), set to false and text will not wrap.
                        lineHeight: 25 // Default is 25 (in px), used for when text wraps
                    }
                }
            }
        });

    </script>
</body>

</html>
