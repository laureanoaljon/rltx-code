<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>State of the Rice Sector in the Philippines</title>
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
    <?php
            $monthyear = "";
            switch ((int)$household[0]['month']) {
                case 1:
                    $monthyear = "Jan " . $household[0]['year'];
                    break;
                case 2:
                    $monthyear = "Feb " . $household[0]['year'];
                    break;
                case 3:
                    $monthyear = "Mar " . $household[0]['year'];
                    break;
                case 4:
                    $monthyear = "Apr " . $household[0]['year'];
                    break;
                case 5:
                    $monthyear = "May " . $household[0]['year'];
                    break;
                case 6:
                    $monthyear = "Jun " . $household[0]['year'];
                    break;
                case 7:
                    $monthyear = "Jul " . $household[0]['year'];
                    break;
                case 8:
                    $monthyear = "Aug " . $household[0]['year'];
                    break;
                case 9:
                    $monthyear = "Sep " . $household[0]['year'];
                    break;
                case 10:
                    $monthyear = "Oct " . $household[0]['year'];
                    break;
                case 11:
                    $monthyear = "Nov " . $household[0]['year'];
                    break;
                case 12:
                    $monthyear = "Dec " . $household[0]['year'];
                    break;
            }
    ?>
    <!-- Navigation --->
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
                <div id="main" class="jumbotron text-center">
                    <div class="jumbotron-content">
                        <h2>State of the Rice Sector in the</h2>
                        <h1>Philippines</h1>
                        <p class="lead"><i>What is the status of the rice industry?</i> Explore and get insights about the trend of the <br />key performance indicators of rice production, consumption, and market.</p>
                        <div class="card-note mx-auto rounded-pill bg-light">
                            <h6 class="text-dark p-1">Population: <strong>110.2 MILLION</strong> (PSA, 2021)</h6>
                        </div>
                    </div>
                </div>

                <!-- Body -->
                <div class="dashboard">
                    <div class="row">
                        <div class="col-4">
                            <div class="card primary mb-2 bg-primary text-center text-white">
                                <div class="card-body">
                                    <h5 class="card-title text-left"><a href="<?php echo base_url(); ?>productions" class="text-white stretched-link text-decoration-none card-main">Palay Production (2021)</a></h5>
                                    <h1 class="card-text font-weight-bold"><?php echo $production_all['value']; ?><i class="<?php echo $prod_caret; ?>"></i></h1>
                                    <div class="card-note w-50 mx-auto rounded-pill bg-warning">
                                        <p class="text-white">million metric tons</p>
                                    </div>
                                </div>
                                <div class="caret-select"><i class="bi bi-caret-right-alt pr-2"></i></div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card primary mb-2 bg-primary text-center text-white">
                                <div class="card-body">
                                    <h5 class="card-title text-left"><a href="<?php echo base_url(); ?>harvestareas" class="text-white stretched-link text-decoration-none card-main">Area Harvested (2021)</a></h5>
                                    <h1 class="card-text font-weight-bold"><?php echo $harvestarea_all['value']; ?> <i class="<?php echo $area_caret; ?>"></i></h1>
                                    <div class="card-note w-50 mx-auto rounded-pill bg-warning">
                                        <p class="text-white">million hectares</p>
                                    </div>
                                </div>
                                <div class="caret-select"><i class="bi bi-caret-right-alt pr-2"></i></div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card primary mb-2 bg-primary text-center text-white">
                                <div class="card-body">
                                    <h5 class="card-title text-left"><a href="<?php echo base_url(); ?>estyields" class="text-white stretched-link text-decoration-none card-main">Yield per Hectare (2021)</a></h5>
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
                        <div class="col-4">
                            <div class="card secondary text-center">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col border-right">
                                            <h6 class="card-title text-left"><a href="<?php echo base_url(); ?>supplies" class="text-black stretched-link text-decoration-none card-sec">Supply (2020)</a></h6>
                                            <h1 class="card-text"><?php echo number_format($supply['value'] / 1000, 2); ?><i class="<?php echo $supply_caret; ?>"></i></h1>
                                            <div class="card-note w-100 mx-auto rounded-pill">
                                                <p class="text-white">million metric tons</p>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <h6 class="card-title text-left"><a href="<?php echo base_url(); ?>supplies" class="text-black stretched-link text-decoration-none card-sec">Utilization (2020)</a></h6>
                                            <h1 class="card-text"><?php echo number_format($util['value'] / 1000, 2); ?><i class="<?php echo $util_caret; ?>"></i></h1>
                                            <div class="card-note w-100 mx-auto rounded-pill">
                                                <p class="text-white">million metric tons</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="caret-select"><i class="bi bi-caret-right-alt pr-2"></i></div>
                            </div>
                            <div class="card secondary text-center mt-2">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col border-right">
                                            <h6 class="card-title text-left"><a href="<?php echo base_url(); ?>consumption" class="text-black stretched-link text-decoration-none card-sec">Annual Per Capita Consumption (2016)</a></h6>
                                            <h1 class="card-text"><?php echo $actual_per_capita_values['KgPerYear']; ?><i class="<?php echo $kg_caret; ?>"></i></h1>
                                            <div class="card-note w-75 mx-auto rounded-pill">
                                                <p class="text-white">kilograms</p>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <h6 class="card-title text-left"><a href="<?php echo base_url(); ?>consumption" class="text-black stretched-link text-decoration-none card-sec">Daily Per Capita Consumption (2016)</a></h6>
                                            <h1 class="card-text"><?php echo $actual_per_capita_values['GmPerDay']; ?><i class="<?php echo $gram_caret; ?>"></i></h1>
                                            <div class="card-note w-75 mx-auto rounded-pill">
                                                <p class="text-white">grams</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="caret-select"><i class="bi bi-caret-right-alt pr-2"></i></div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card secondary text-center">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col border-right">
                                            <h6 class="card-title text-left mb-5"><a href="<?php echo base_url(); ?>valuations" class="text-black stretched-link text-decoration-none card-sec">Value of Rice Production (2021)</a></h6>
                                            <h1 class="card-text"><?php echo number_format($latest_palay_valuation['value'] / 1000, 2); ?><i class="<?php echo $valuation_caret; ?>"></i></h1>
                                            <div class="card-note w-100 mx-auto rounded-pill">
                                                <p class="text-white">Billion Pesos</p>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <p class="card-title text-center"><a href="<?php echo base_url(); ?>valuations" class="text-black stretched-link text-decoration-none card-sec text-uppercase">Percent Share to Value of Agricultural Production (2021)</a></p>
                                            <div><canvas id="ctxAgriShare"></canvas></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="caret-select"><i class="bi bi-caret-right-alt pr-2"></i></div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card secondary text-center">
                                <div class="card-body">
                                    <h6 class="card-title text-left">Profitability Indicator (2020)</h6>
                                    <div class="row mt-3">
                                        <div class="col border-right">
                                            <h6 class="card-title text-left ml-1"><a href="<?php echo base_url(); ?>incomes" class="text-black stretched-link text-decoration-none card-sec">Net Returns </a></h6>
                                            <h2 class="card-text mt-5">P <?php echo $net_returns['value']; ?><i class="<?php echo $net_caret; ?>"></i></h2>
                                        </div>
                                        <div class="col">
                                            <h6 class="card-title text-left"><a href="<?php echo base_url(); ?>incomes" class="text-black stretched-link text-decoration-none card-sec">Gross Returns</a></h6>
                                            <h2 class="card-text mb-2">P <?php echo $gross_returns['value']; ?><i class="<?php echo $gross_caret; ?>"></i></h2>
                                            <h6 class="card-title text-left mt-5"><a href="<?php echo base_url(); ?>incomes" class="text-black stretched-link text-decoration-none card-sec">Total Cost</a></h6>
                                            <h2 class="card-text mb-2">P <?php echo $total_costs; ?><i class="<?php echo $cost_caret; ?>"></i></h2>
                                        </div>
                                    </div>
                                    <div class="card-note w-100 mx-auto rounded-pill" style="margin: 23px 0;">
                                        <p class="text-white">per hectare per cropping season</p>
                                    </div>
                                </div>
                                <div class="caret-select"><i class="bi bi-caret-right-alt pr-2"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-4">
                            <div class="card secondary text-center">
                                <div class="card-body">
                                    <div class="row"  style="margin-bottom: 16px;">
                                        <div class="col border-right">
                                            <h6 class="card-title text-left"><a href="<?php echo base_url(); ?>impexports" class="text-black stretched-link text-decoration-none card-sec">Imports (2020)</a></h6>
                                            <h1 class="card-text" style="margin-top: 16px;"><?php echo number_format($supply_sources_values['SUImports'] / 1000, 2); ?><i class="<?php echo $imports_caret; ?>"></i></h1>
                                            <div class="card-note w-100 mx-auto rounded-pill">
                                                <p class="text-white">million metric tons</p>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <h6 class="card-title text-left"><a href="<?php echo base_url(); ?>impexports" class="text-black stretched-link text-decoration-none card-sec">Exports (2020)</a></h6>
                                            <h1 class="card-text" style="margin-top: 16px;">&lt; 1<i class="bi bi-dash"></i></h1>
                                            <div class="card-note w-100 mx-auto rounded-pill">
                                                <p class="text-white">thousand m. tons</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="caret-select"><i class="bi bi-caret-right-alt pr-2"></i></div>
                            </div>
                            <div class="card secondary text-center mt-2">
                                <div class="card-body">
                                    <h6 class="card-title text-left">Rice Stock (<?php echo $monthyear; ?>)</h6>
                                    <div class="row">
                                        <div class="col border-right text-center">
                                            <h6 class="card-title"><a href="<?php echo base_url(); ?>stocks" class="text-black stretched-link text-decoration-none card-sec">Household</a></h6>
                                            <h1 class="card-text smaller"><?php echo $household[0]['value']; ?><i class="<?php echo $h_caret; ?>"></i></h1>
                                        </div>
                                        <div class="col border-right">
                                            <h6 class="card-title" style="font-size: 13.5px;"><a href="<?php echo base_url(); ?>stocks" class="text-black stretched-link text-decoration-none card-sec">Commercial </a></h6>
                                             <h1 class="card-text smaller"><?php echo $commercial[0]['value']; ?><i class="<?php echo $c_caret; ?>"></i></h1>
                                        </div>
                                        <div class="col">
                                            <h6 class="card-title"><a href="<?php echo base_url(); ?>stocks" class="text-black stretched-link text-decoration-none card-sec">NFA</a></h6>
                                            <h1 class="card-text smaller"><?php echo $nfa[0]['value']; ?><i class="<?php echo $n_caret; ?>"></i></h1>
                                        </div>
                                    </div>
                                    <div class="card-note w-50 mx-auto rounded-pill mt-1">
                                        <p class="text-white">million metric tons</p>
                                    </div>
                                </div>
                                <div class="caret-select"><i class="bi bi-caret-right-alt pr-2"></i></div>
                            </div>
                            <div class="card primary bg-primary text-center mt-2">
                                <div class="card-body text-white">
                                    <h6 class="card-title text-center align-middle"><a href="<?php echo base_url(); ?>yieldcost/" class="text-white stretched-link text-decoration-none card-main-alt">Productivity Indicators</a></h6>
                                    <a href="<?php echo base_url(); ?>yieldcost/" class="text-white stretched-link text-decoration-none card-main-alt"><img class="d-block img-fluid mx-auto" style="height: 96px" src="<?php echo base_url(); ?>assets/ani_at_kita_logo.png"></a>
                                </div>
                                <div class="caret-select"><i class="bi bi-caret-right-alt pr-2"></i></div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card primary bg-primary text-center text-white">
                                <div class="card-body">
                                    <h5 style="margin-top:10px;" class="card-title text-center"><a target="_blank" href="ttps://prism.philrice.gov.ph/dataproducts/" class="text-white stretched-link text-decoration-none card-main">Rice Area Map</a></h5>
                                </div>
                                <div class="caret-select"><i class="bi bi-caret-right-alt pr-2" style="top: 34%;"></i></div>
                            </div>
                            <a target="_blank" href="https://prism.philrice.gov.ph/dataproducts/">
                                <div class="card mb-0">
                                    <img class="card-img-top" src="<?php echo base_url(); ?>assets/prism_smaller.jpg" alt="Card image cap">
                                </div>
                            </a>
                        </div>
                        <div class="col-4">
                            <div class="card secondary text-center">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col border-right">
                                            <h6 class="card-title text-left"><a href="<?php echo base_url(); ?>prices" class="text-black stretched-link text-decoration-none card-sec">Dry Palay Price (2021)</a></h6>
                                            <h1 class="card-text">P <?php echo $farmgate['value']; ?><i class="<?php echo $fg_caret; ?>"></i></h1>
                                        </div>
                                        <div class="col">
                                            <h6 class="card-title text-left"><a href="<?php echo base_url(); ?>incomes" class="text-black stretched-link text-decoration-none card-sec">Production Cost (2020)</a></h6>
                                            <h1 class="card-text mb-2">P <?php echo $total_costs_int; ?><i class="<?php echo $unit_caret; ?>"></i></h1>
                                        </div>
                                    </div>
                                    <div class="card-note w-50 mx-auto rounded-pill">
                                        <p class="text-white">per kilogram</p>
                                    </div>
                                </div>
                                <div class="caret-select"><i class="bi bi-caret-right-alt pr-2"></i></div>
                            </div>
                            <div class="card secondary text-center mt-2">
                                <div class="card-body">
                                    <h6 class="card-title text-left">Rice Wholesale Prices (2021)</h6>
                                    <div class="row">
                                        <div class="col border-right">
                                            <h6 class="card-title text-left ml-1"><a href="<?php echo base_url(); ?>prices" class="text-black stretched-link text-decoration-none card-sec">Well-Milled</a></h6>
                                            <h1 class="card-text">P <?php echo $wholesale_sp['value']; ?><i class="<?php echo $ws_caret; ?>"></i></h1>
                                        </div>
                                        <div class="col">
                                            <h6 class="card-title text-left"><a href="<?php echo base_url(); ?>prices" class="text-black stretched-link text-decoration-none card-sec">Regular-Milled</a></h6>
                                            <h1 class="card-text">P <?php echo $wholesale['value']; ?><i class="<?php echo $wg_caret; ?>"></i></h1>
                                        </div>
                                    </div>
                                    <div class="card-note w-50 mx-auto rounded-pill">
                                        <p class="text-white">per kilogram</p>
                                    </div>
                                </div>
                                <div class="caret-select"><i class="bi bi-caret-right-alt pr-2"></i></div>
                            </div>
                            <div class="card secondary text-center mt-2">
                                <div class="card-body">
                                    <h6 class="card-title text-left">Rice Retail Prices (2021)</h6>
                                    <div class="row">
                                        <div class="col border-right">
                                            <h6 class="card-title text-left ml-1"><a href="<?php echo base_url(); ?>prices" class="text-black stretched-link text-decoration-none card-sec">Well-Milled</a></h6>
                                            <h1 class="card-text">P <?php echo $retail_sp['value']; ?><i class="<?php echo $rs_caret; ?>"></i></h1>
                                        </div>
                                        <div class="col">
                                            <h6 class="card-title text-left"><a href="<?php echo base_url(); ?>prices" class="text-black stretched-link text-decoration-none card-sec">Regular-Milled</a></h6>
                                            <h1 class="card-text">P <?php echo $retail['value']; ?><i class="<?php echo $rg_caret; ?>"></i></h1>
                                        </div>
                                    </div>
                                    <div class="card-note w-50 mx-auto rounded-pill">
                                        <p class="text-white">per kilogram</p>
                                    </div>
                                </div>
                                <div class="caret-select"><i class="bi bi-caret-right-alt pr-2"></i></div>
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

        var ctx = document.getElementById("ctxAgriShare");
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                datasets: [{
                    data: [20.7, 79.3],
                    backgroundColor: [
                        '#2138B7', // COLOR 1
                        '#A6CEE3' // COLOR 2
                    ],
                    borderColor: [
                        '#2138B7', // COLOR 1
                        '#A6CEE3' // COLOR 2
                    ]
                }]
            },
            options: {
                cutoutPercentage: 60,
                aspectRatio: 0.75,
                legend: {
                    display: false
                },
                layout: {
                    padding: 15
                },
                responsive: true,
                maintainAspectRatio: true,
                plugins: {
                    labels: false
                },
                elements: {
                    center: {
                        text: '<?php echo $latest_palay_agri_share['value']; ?>%',
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
