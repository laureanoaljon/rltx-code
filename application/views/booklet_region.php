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
            echo link_tag('css/booklet-style.css');     
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

    <script type="text/javascript">
        function Print(){
            var css = '@page { size: A4 landscape; }',
            head = document.head || document.getElementsByTagName('head')[0],
            style = document.createElement('style');

            style.type = 'text/css';
            style.media = 'print';

            if (style.styleSheet){
            style.styleSheet.cssText = css;
            } else {
            style.appendChild(document.createTextNode(css));
            }

            head.appendChild(style);
            window.print()
        };
    </script>

    <style>
        @media print and (max-height: 1100px) {
            .pagebreak { page-break-before: always; } /* page-break-after works, as well */

            body {
                background-color: white !important;
            }

            @page {
                margin: 0 0 0 0 !important;
            }

            #sidebarView, #sidebarMenu, #feedbackModal, .footer, br.pagebreak{
                display: none !important;
            }

            main.col {
                padding: 0;
                margin-left: 0;
            }

            /* lahat ng h1 sa card */
            .card.primary h1{
                font-size: 40px;
                margin-top: -5px;
            }

            /* Size ng p-tag font */
            .card-note p{
                font-size: 12px !important;
            }

            /* lahat ng card */
            .card.primary{
                height: 120px;
            }

            /* SVG DATA MAP */
            svg.datamap{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: auto !important;
                width: 100% !important;
                /* scale(w, h) */
                transform: scale(.8, .6);
                margin-bottom: 120px;
                background-color: #a6d8e1;
            }

            .legend-box {
                width: 20px;
                height: 10px;
                margin: 0 10px;
                display: inline-block;
            }

            p#series-1{
                font-size: 9px;
            }

            p#series-2{
                font-size: 9px;
            }

            p#series-3{
                font-size: 9px;
            }

            p#series-4{
                font-size: 9px;
            }

            /* /////////////////////////////////////////// RICE SECTOR MAIN //////////////////////////////////////////////////////////////////////////////// */
            /* Pagresize ng page for printing */
            div.dashboard{
                height: 625px;
                width: 1150px;
            }

            #dashboard-main-reg{
                min-height: 100%;
                max-height: 100%;
                max-width: 100%;
                height: 790px !important;
                width: 100% !important;
                background-size:cover !important;
                background-repeat:no-repeat !important;
                background-position:center center !important;
            }

            /* Resize ng banner */
            div#main.jumbotron{
                height: 150px;
            }

            /* resize ng ibang card */
            .rs-secondary{
                height: 140px !important;
            }

            /* ani kita image */
            img.d-block.img-fluid.mx-auto{
                width: 170px;
                height: 95px !important;
            }

            /* Pie chart rice sector */
            canvas#ctxAgriShare{
                margin-top: -5px;
                margin-left: 10px;
                height: 80px !important;
                width: 270px !important;
            }

            /* ////////////////////////////////////////////// PRODUCTION 1 //////////////////////////////////////////////////////////////////////////////// */
            /* Pagresize ng page for printing */
            div.sublevel#production1-reg{
                min-height: 100%;
                max-height: 100%;
                max-width: 100%;
                height: 790px !important;
                width: 100% !important;
                background-size:cover !important;
                background-repeat:no-repeat !important;
                background-position:center center !important;
            }

            /* Resize ng banner */
            /* div#production.jumbotron{
                height: 150px;
            } */

            /* Resize ng chart div */
            div#production1-chart1.card.mb-4{
                height: 450px;
            }

            /* Resize production bar chart*/
            canvas#ctxProdStack{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 305px !important;
                width: 100% !important;
            }

            /* ///////////////////////////////////////////////// PRODUCTION 2 ////////////////////////////////////////////////////////////////////////////////// */
            /* Pagresize ng page for printing */
            div.sublevel#production2-reg{
                min-height: 100%;
                max-height: 100%;
                max-width: 100%;
                height: 790px !important;
                width: 100% !important;
                background-size:cover !important;
                background-repeat:no-repeat !important;
                background-position:center center !important;
            }

            /* Resize ng chart div */
            div#production2-chartall.card.mb-4{
                height: 700px;
            }

            /* Resize production bar chart*/
            canvas#production_ctxTopRegAll{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 565px !important;
                width: auto!important;
            }

            /* Prod map chart */
            /* svg.datamap{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: auto !important;
                width: 100% !important;
                transform: scale(.82, .61);
                margin-bottom: 120px;
            } */

            div#phl-reg-all-production{
                height: 100% !important;
                width: 100% !important;
                margin-top: -180px;
            }

            div#series-prod{
                margin-top: -25px;
            }

            /* ////////////////////////////////////////////////////////////// AREA 1 ////////////////////////// */
            /* Pagresize ng page for printing */
            div.sublevel#area1-reg{
                min-height: 100%;
                max-height: 100%;
                max-width: 100%;
                height: 790px !important;
                width: 100% !important;
                background-size:cover !important;
                background-repeat:no-repeat !important;
                background-position:center center !important;
            }

            /* Resize ng banner */
            /* div#area.jumbotron{
                height: 150px;
            } */

            /* Resize ng chart div */
            div#area1-chart.card.mb-4{
                height: 450px;
            }

            /* Resize area 1 bar chart*/
            canvas#ctxAreaStack{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 310px !important;
                width: 100% !important;
            }

            /*/////////////////////////////////////////////////////// AREA 2 ///////////////////////////////////////////*/
            /* Pagresize ng page for printing */
            div.sublevel#area2-reg{
                min-height: 100%;
                max-height: 100%;
                max-width: 100%;
                height: 790px !important;
                width: 100% !important;
                background-size:cover !important;
                background-repeat:no-repeat !important;
                background-position:center center !important;
            }

            /* Resize ng chart div */
            div#area2-chartall.card.mb-4{
                height: 700px;
            }

            /* Resize area 2 bar chart*/
            canvas#area_ctxTopRegAll{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 565px !important;
                width: auto!important;
            }

            /* area map chart */
            /* svg.datamap{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: auto !important;
                width: 100% !important;
                transform: scale(.82, .61);
                margin-bottom: 120px;
            } */

            div#phl-reg-all-area{
                height: auto !important;
                width: 100% !important; 
                margin-top: -180px;
            }

            div#series-area{
                margin-top: -25px;
            }

            /* ///////////////////////////////////////////////////////// YIELD 1 /////////////////////////////////// */
            /* Pagresize ng page for printing */
            div.sublevel#yield1-reg{
                min-height: 100%;
                max-height: 100%;
                max-width: 100%;
                height: 790px !important;
                width: 100% !important;
                background-size:cover !important;
                background-repeat:no-repeat !important;
                background-position:center center !important;
            }

            /* Resize ng banner */
            /* div#yield.jumbotron{
                height: 150px;
            } */

            /* Resize ng chart div */
            div#yield1-chart.card.mb-4{
                height: 450px;
            }

            /* Resize yield 1 line chart*/
            canvas#ctxYieldStack{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 310px !important;
                width: 100% !important;
            }

            /* ////////////////////////////////////////////////// YIELD 2 /////////////////////////////////////////////////////*/
            /* Pagresize ng page for printing */
            div.sublevel#yield2-reg{
                min-height: 100%;
                max-height: 100%;
                max-width: 100%;
                height: 790px !important;
                width: 100% !important;
                background-size:cover !important;
                background-repeat:no-repeat !important;
                background-position:center center !important;
            }

            /* Resize ng chart div */
            div#yield2-chartall.card.mb-4{
                height: 700px;
            }

            /* Resize yield 2 bar chart*/
            canvas#yield_ctxTopRegAll{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 560px !important;
                width: auto!important;
            }

            /* Yield map chart */
            /* svg.datamap{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: auto !important;
                width: 100% !important;
                transform: scale(.82, .61);
                margin-bottom: 120px;
            } */

            div#phl-reg-all-yield{
                height: auto !important;
                width: 100% !important; 
                margin-top: -180px;
            }

            div#series-yield{
                margin-top: -25px;
            }

            /* ////////////////////////////////////// VALUATION 1 //////////////////////////////////////////*/
            /* Pagresize ng page for printing */
            div.sublevel#valuation1-reg{
                min-height: 100%;
                max-height: 100%;
                max-width: 100%;
                height: 790px !important;
                width: 100% !important;
                background-size:cover !important;
                background-repeat:no-repeat !important;
                background-position:center center !important;
            }

            /* Resize ng banner */
            /* div#valuation.jumbotron{
                height: 150px;
            } */

            /* Resize ng chart div */
            div#valuation1-chart.card.mb-4{
                height: 400px;
            }

            /* resize ng card sa valuation */
            .val-secondary{
                height: 155px !important;
            }

            /* Resize valuation 1 line chart*/
            canvas#ctxAgriSector{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 220px !important;
                width: 100% !important;
                margin-top: -10px;
            }

            /* /////////////////////////////////// VALUATION 2 /////////////////////////////////////////////*/
            /* Pagresize ng page for printing */
            div.sublevel#valuation2-reg{
                min-height: 100%;
                max-height: 100%;
                max-width: 100%;
                height: 790px !important;
                width: 100% !important;
                background-size:cover !important;
                background-repeat:no-repeat !important;
                background-position:center center !important;
            }

            /* Resize ng chart div */
            div#valuation2-chart.card.mb-4{
                height: 600px;
            }

            /* Resize valuation 2 bar chart*/
            canvas#valuation_ctxAgriShare{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 400px !important;
                width: auto!important;
            }

            /* ///////////////////////////////////////////// YIELDCOST 1 //////////////////////////////////*/
            /* Pagresize ng page for printing */
            div.sublevel#yieldcost1-reg{
                min-height: 100%;
                max-height: 100%;
                max-width: 100%;
                height: 790px !important;
                width: 100% !important;
                background-size:cover !important;
                background-repeat:no-repeat !important;
                background-position:center center !important;
            }

            /* Resize ng banner */
            /* div#yieldcost.jumbotron{
                height: 150px;
            } */

            /* Resize ng chart div */
            div#yieldcost1-chart.card.mb-4{
                height: 450px;
            }

            /* Resize yieldcost 1 line chart*/
            canvas#ctxBreakdownPh{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 305px !important;
                width: 100% !important;
            }

            /*///////////////////////////////////////// YIELDCOST 2 //////////////////////////////////////////////////*/
            /* Pagresize ng page for printing */
            div.sublevel#yieldcost2-reg{
                min-height: 100%;
                max-height: 100%;
                max-width: 100%;
                height: 790px !important;
                width: 100% !important;
                background-size:cover !important;
                background-repeat:no-repeat !important;
                background-position:center center !important;
            }

            /* Resize ng chart div */
            div#yieldcost2-chart.card.mb-4{
                height: 570px;
            }

            /* Resize yieldcost 2 bar chart*/
            canvas#ctxNPKUse{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 400px !important;
                width: 100% !important;
                margin-top: 20px;
            }

            /*////////////////////////////////////// INCOME /////////////////////////////////////*/
            /* Pagresize ng page for printing */
            div.sublevel#income-reg{
                min-height: 100%;
                max-height: 100%;
                max-width: 100%;
                height: 790px !important;
                width: 100% !important;
                background-size:cover !important;
                background-repeat:no-repeat !important;
                background-position:center center !important;
            }

            /* Resize ng banner */
            /* div#incomes.jumbotron{
                height: 150px;
            } */

            /* Resize ng chart div */
            div#income-chart.card.mb-4{
                height: 450px;
            }

            /* Resize income line chart*/
            canvas#ctxGrossReturns{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 325px !important;
                width: 100% !important;
            }

            /*/////////////////////////////////////////// PRICES 1 ///////////////////////////////////////////*/
            /* Pagresize ng page for printing */
            div.sublevel#price1-reg{
                min-height: 100%;
                max-height: 100%;
                max-width: 100%;
                height: 790px !important;
                width: 100% !important;
                background-size:cover !important;
                background-repeat:no-repeat !important;
                background-position:center center !important;
            }

            /* Resize ng banner */
            div#prices.jumbotron{
                height: 150px;
            }

            /* Resize ng chart div */
            div#price1-chart.card.mb-4{
                height: 415px;
            }

            /* resize ng card sa valuation */
            .prices-card{
                height: 155px !important;
            }

            /* Resize valuation 1 line chart*/
            canvas#ctxFarmPrices{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 270px !important;
                width: 100% !important;
            }

            /*///////////////////////////////////// PRICES 2 /////////////////////////////////////////////////////*/
            /* Pagresize ng page for printing */
            div.sublevel#price2-reg{
                min-height: 100%;
                max-height: 100%;
                max-width: 100%;
                height: 790px !important;
                width: 100% !important;
                background-size:cover !important;
                background-repeat:no-repeat !important;
                background-position:center center !important;
            }

            /* Resize ng price2 chart1 div */
            div#price2-chart1.card.mb-4{
                height: 355px;
            }

            /* Resize ng price2 chart2 div */
            div#price2-chart2.card.mb-4{
                height: 355px;
            }

            /* Resize price2 line chart 1*/
            canvas#ctxWholesalePrices{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 215px !important;
                width: 100% !important;
            }

            /* Resize price2 line chart 2*/
            canvas#ctxRetailPrices{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 215px !important;
                width: 100% !important;
            }
        }
    </style>

</head>

<body>
    <!-- Navigation --->
    <nav class="navbar navbar-expand-lg navbar-light">
        <!-- <a class="btn btn-warning text-white" href="<?php echo base_url(); ?>" role="button"><i class="bi bi-house-door-fill"></i> National</a> -->
        <a class="btn btn-warning mr-2 text-white" href="<?php echo base_url(); ?>booklet/" role="button"><i class="bi bi-caret-left"></i> Back to Main Booklet</a>
        <div class="dropdown">
            <button class="btn btn-light border dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Select Region
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <?php for ($i = 0; $i < count($regions); $i++) {
                        echo '<a class="dropdown-item" href="'.base_url().'booklet/region/'.$regions[$i]["id"].'">'.$regions[$i]["location_name"].'</a>';
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
                    echo '<a class="pl-5 dropdown-item" href="'.base_url().'booklet/province/'.$provinces[$i]["province_id"].'">'.$provinces[$i]["province"].'</a>';
                    $temp_region = $provinces[$i]['region_name'];
                }
                ?>
            </div>
        </div>
        <div>
            <button onclick="Print()" class="btn btn-primary">
               Print
            </button>
        </div>
    </nav>

    <!-- Start of div -->
    <div id="capture">
        <br class="pagebreak">
        <div class="container-fluid" id="rice-sector">
            <div class="row">
                <main role="main" class="col">
                    <!-- Header --->
                    <!-- <div id="main" class="jumbotron text-center">
                        <div class="jumbotron-content">
                            <h2>State of the Rice Sector in the</h2>
                            <h1><?php echo $production_all['location_name'];?></h1>
                            <p class="lead"><i>What is the status of the rice industry in the region?</i> Explore and get insights about the trend<br /> of the key performance indicators of rice production, valuation, and market. </p>
                        </div>
                    </div> -->

                    <!-- Body -->
                    <div class="dashboard" id="dashboard-main-reg">

                        <!-- FOR VERTICAL PRINT IN BLACK EDGING RIGHT SIDE -->
                        <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; float: right; margin-right: -17px; margin-top: 35px;">DASHBOARD - <?php echo strtoupper($production_all['location_name']);?></p>


                        <div style="margin-left: 45px; margin-top: 7px;">
                            <h2>State of the Rice Sector in the</h2>
                            <?php if($production_all['location_name'] == "Cordillera Administrative Region") : ?>
                                <h1 style="font-size: 59px;"><?php echo $production_all['location_name'];?></h1>
                            <?php  else : ?>
                                <h1 style="font-size: 67px;"><?php echo $production_all['location_name'];?></h1>
                            <?php endif; ?>
                            <p class="lead"><i>What is the status of the rice industry in the region?</i> Explore and get insights about the trend<br /> of the key performance indicators of rice production, valuation, and market. </p>
                            <br>
                        </div>

                        <div class="row" style="margin-left: 35px; margin-right: 20px; margin-top: -10px;">
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
                        <div class="row" style="margin-left: 40px; margin-right: 25px; margin-top: -5px;">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-md-8 col-lg-8 mt-2">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 p-0">
                                            <div class="card secondary text-center rs-secondary">
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
                                        <div class="card primary bg-primary text-center rs-secondary">
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
                                                    <h2 class="card-text">P <?php echo $total_costs_regional; ?><i class="<?php echo $cost_caret; ?>"></i></h2>
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
                                                    <h6 class="card-title text-left"><a href="<?php echo base_url(); ?>farmgate/region/<?php echo $id; ?>" class="text-black text-decoration-none card-sec">Dry Palay Price (2021)</a></h6>
                                                    <h2 class="card-text">P <?php echo $farmgate['value']; ?><i class="<?php echo $fg_caret; ?>"></i></h2>
                                                </div>
                                                <div class="col">
                                                    <h6 class="card-title text-left"><a href="<?php echo base_url(); ?>incomes/region/<?php echo $id; ?>" class="text-black text-decoration-none card-sec">Production Cost (2020)</a></h6>
                                                    <h2 class="card-text">P <?php echo $total_costs_int; ?><i class="<?php echo $unit_caret; ?>"></i></h2>
                                                </div>
                                            </div>
                                            <h6 class="card-title text-left mt-2"><a href="<?php echo base_url(); ?>wholesale/region/<?php echo $id; ?>" class="text-black text-decoration-none card-main">Rice Wholesale Prices (2021)</a></h6>
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
                                            <h6 class="card-title text-left mt-2"><a href="<?php echo base_url(); ?>retail/region/<?php echo $id; ?>" class="text-black text-decoration-none card-main">Rice Retail Prices (2021)</a></h6>
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

                        <!-- PAGE NUMBER -->
                        <div class="row" style="margin-right: 24px; margin-top: 5px;">
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important; float: right;">2 | STATE OF THE RICE SECTOR IN <?php echo strtoupper($production_all['location_name']);?></p>
                            </div>
                        </div>

                    </div>
                </main>
            </div>
        </div>

        <!-- for page break from html2pdf -->
        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br class="pagebreak">

        <!-- PRODUCTIONS 1 -->

        <div class="container-fluid" id="productions1">
            <div class="row">
                <main role="main" class="col">
                    <!-- Header --->
                    <!-- <div id="production" class="jumbotron text-center">
                        <div class="jumbotron-content">
                            <h2>State of the Rice Sector in <?php echo $total_production_all['location_name'];?></h2>
                            <h1>Palay Production</h1>
                            <p class="lead"><i>What is the total volume of palay produced in the region?</i><br /> Know the latest and historical rice production information.</p>
                        </div>
                    </div> -->

                    <!-- Body -->
                    <div class="sublevel" id="production1-reg">

                        <!-- FOR VERTICAL PRINT IN BLACK EDGING LEFT SIDE -->
                        <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; transform:scale(-1); float: left; margin-left: -17px; margin-top: 35px;">PALAY PRODUCTION</p>

                        <div style="margin-left: 35px; margin-top: 7px;">
                            <h1 style="font-size: 67px;">Palay Production</h1>
                            <br>
                            <p class="lead"><i>What is the total volume of palay produced in the region?</i><br /> Know the latest and historical rice production information.</p>
                        </div>
                        
                        <div class="row">
                            <div class="col">
                                <div class="card-deck mb-2 text-center" style="margin-left: 5px; margin-top: 10px; margin-right: 30px;">
                                    <div class="card primary mb-4 bg-primary-2 text-white">
                                        <div class="card-body">
                                            <h5 class="card-title pb-2">Irrigated Area</h5>
                                            <h1 class="card-text font-weight-bold"><?php echo $total_production_irrigated['value']; ?><i class="<?php echo $prod_caret_irrig; ?>"></i></h1>
                                            <div class="card-note w-50 mx-auto rounded-pill bg-primary">
                                                <p class="text-white">metric tons</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card primary mb-4 bg-primary text-white">
                                        <div class="card-body">
                                            <h5 class="card-title pb-2">Regional (2021)</h5>
                                            <h1 class="card-text font-weight-bold"><?php echo $total_production_all['value']; ?><i class="<?php echo $prod_caret; ?>"></i></h1>
                                            <div class="card-note bg-warning w-50 mx-auto rounded-pill">
                                                <p class="text-white">metric tons</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card primary mb-4 bg-alternate-3">
                                        <div class="card-body">
                                            <h5 class="card-title pb-2">Non-Irrigated Area</h5>
                                            <h1 class="card-text font-weight-bold"><?php echo $total_production_rainfed['value']; ?><i class="<?php echo $prod_caret_rain; ?>"></i></h1>
                                            <div class="card-note w-50 mx-auto rounded-pill bg-primary">
                                                <p class="text-white">metric tons</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="card mb-4" id="production1-chart1" style="margin-left: 40px; margin-top: -20px; margin-right: 55px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a> -->
                                        <h5 class="my-0 pt-2 pb-2">Palay Production in <?php echo $total_production_all['location_name'];?> (2001-2021)</h5>
                                        <p class="my-0 font-weight-normal text-muted">in metric tons (PSA, 2022)</p>

                                    </div>
                                    <div class="card-body">
                                        <div><canvas id="ctxProdStack"></canvas></div>
                                    </div>
                                    <div class="card-footer text-muted">
                                        Data Source: <a href="https://palaystat.philrice.gov.ph/statistics/retrieve/table/1" target="_blank">Estimated production, area harvested and yield per hectare (PAY) - PalayStat System</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- PAGE NUMBER -->
                        <div class="row" style="margin-left: 35px; margin-top: -10px;>
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important;">3 | STATE OF THE RICE SECTOR IN <?php echo strtoupper($production_all['location_name']);?></p>
                            </div>
                        </div>

                    </div>
                </main>
            </div>
        </div>

        <!-- for page break from html2pdf -->
        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br class="pagebreak">

        <!-- PRODUCTIONS 2 -->

        <div class="container-fluid" id="productions2">
            <div class="row">
                <main role="main" class="col">
                    <div class="sublevel" id="production2-reg">
                        <div class="row">
                            <div class="col">

                                <!-- FOR VERTICAL PRINT IN BLACK EDGING RIGHT SIDE -->
                                <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; float: right; margin-right: -13px; margin-top: 35px;">PALAY PRODUCTION</p>


                                <div class="card mb-4" id="production2-chartall" style="margin: 40px 40px 0px 55px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Map</a> -->
                                        <h5 class="my-0 pt-2 pb-2">Palay Production in <?php echo $total_production_all['location_name'];?> by Province (2021)</h5>
                                        <p class="my-0 font-weight-normal text-muted">in metric tons (PSA, 2022)</p>
                                    </div>
                                    <div class="card-body chart-all">
                                        <div class="row">
                                            <div class="col-6">
                                                <div id="ctxTopProvTop"><canvas id="production_ctxTopRegAll"></canvas></div>
                                            </div>
                                            <div class="col-6" id="series-prod">
                                                <div class="text-center mt-4">
                                                    <div class="legend-box" style="background:rgba(198,250,30,1);"></div>
                                                    <p id="series-1" class="d-inline-block text-capitalize">< 100,000</p>
                                                    <div class="legend-box" style="background:rgba(148,213,38,1);"></div>
                                                    <p id="series-2" class="d-inline-block text-capitalize">100,000-500,000</p>
                                                    <div class="legend-box" style="background:rgba(91,140,34,1);"></div>
                                                    <p id="series-3" class="d-inline-block text-capitalize">500,000-1,000,000</p>
                                                    <div class="legend-box" style="background:rgba(33,55,18,1);"></div>
                                                    <p id="series-4" class="d-inline-block text-capitalize">> 1,000,000</p>
                                                </div>
                                                <div id="phl-reg-all-production" style="height: 850px;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer text-muted">
                                        Data Source: <a href="https://palaystat.philrice.gov.ph/statistics/retrieve/table/1" target="_blank">Estimated production, area harvested and yield per hectare (PAY) - PalayStat System</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- PAGE NUMBER -->
                        <div class="row" style="margin-right: 25px; margin-top: -10px;">
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important; float: right;">4 | STATE OF THE RICE SECTOR IN <?php echo strtoupper($production_all['location_name']);?></p>
                            </div>
                        </div>

                    </div>    
                </main>
            </div>
        </div>


        <!-- for page break from html2pdf -->
        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br class="pagebreak">

        <!-- AREA HARVESTED 1 -->

        <div class="container-fluid" id="areas1">
            <div class="row">
                <main role="main" class="col">
                    <!-- Header --->
                    <!-- <div id="area" class="jumbotron text-center">
                        <div class="jumbotron-content">
                            <h2>State of the Rice Sector in <?php echo $total_area_irrigated['location_name'];?></h2>
                            <h1>Area Harvested</h1>
                            <p class="lead"><i>How wide was the accumulated area of the total harvested palay?</i> Explore the estimated overall <br />harvested area, the apportionment of irrigated and non-irrigated farms, and the size of extents in the provinces.</p>
                        </div>
                    </div> -->

                    <!-- Body -->
                    <div class="sublevel" id="area1-reg">

                        <!-- FOR VERTICAL PRINT IN BLACK EDGING LEFT SIDE -->
                        <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; transform:scale(-1); float: left; margin-left: -17px; margin-top: 35px;">AREA HARVESTED</p>

                        <div style="margin-left: 35px; margin-top: 7px;">
                            <h1 style="font-size: 67px;">Area Harvested</h1>
                            <br>
                            <p class="lead"><i>How wide was the accumulated area of the total harvested palay?</i> Explore the estimated overall <br />harvested area, the apportionment of irrigated and non-irrigated farms, and the size of extents in the provinces.</p>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="card-deck mb-2 text-center" style="margin-left: 3px; margin-top: 10px; margin-right: 30px;">
                                    <div class="card primary mb-4 bg-primary-2 text-white">
                                        <div class="card-body">
                                            <h5 class="card-title pb-2">Irrigated Area</h5>
                                            <h1 class="card-text font-weight-bold"><?php echo $total_area_irrigated['value']; ?><i class="<?php echo $area_caret_irrig; ?>"></i></h1>
                                            <div class="card-note w-50 mx-auto rounded-pill bg-primary">
                                                <p class="text-white">hectares</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card primary mb-4 bg-primary text-white">
                                        <div class="card-body">
                                            <h5 class="card-title pb-2">Regional (2021)</h5>
                                            <h1 class="card-text font-weight-bold"><?php echo $total_area_all['value']; ?><i class="<?php echo $area_caret; ?>"></i></h1>
                                            <div class="card-note bg-warning w-50 mx-auto rounded-pill">
                                                <p class="text-white">hectares</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card primary mb-4 bg-alternate-3">
                                        <div class="card-body">
                                            <h5 class="card-title pb-2">Non-Irrigated Area</h5>
                                            <h1 class="card-text font-weight-bold"><?php echo $total_area_rainfed['value']; ?><i class="<?php echo $area_caret_rain; ?>"></i></h1>
                                            <div class="card-note w-50 mx-auto rounded-pill bg-primary">
                                                <p class="text-white">hectares</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="card mb-4" id="area1-chart" style="margin-left: 40px; margin-top: -20px; margin-right: 55px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a> -->
                                        <h5 class="my-0 pt-2 pb-2">Total Rice Area Harvested in <?php echo $total_area_irrigated['location_name'];?> (2001-2021)</h5>
                                        <p class="my-0 font-weight-normal text-muted">in hectares (PSA, 2022)</p>
                                    </div>
                                    <div class="card-body">
                                        <div><canvas id="ctxAreaStack"></canvas></div>
                                    </div>
                                    <div class="card-footer text-muted">
                                        Data Source: <a href="https://palaystat.philrice.gov.ph/statistics/retrieve/table/1" target="_blank">Estimated production, area harvested and yield per hectare (PAY) - PalayStat System</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- PAGE NUMBER -->
                        <div class="row" style="margin-left: 38px; margin-top: -10px;>
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important;">5 | STATE OF THE RICE SECTOR IN <?php echo strtoupper($production_all['location_name']);?></p>
                            </div>
                        </div>

                    </div>
                </main>
            </div>
        </div>

        <!-- for page break from html2pdf -->
        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br class="pagebreak">

        <!-- AREA HARVESTED 2 -->

        <div class="container-fluid" id="areas2">
            <div class="row">
                <main role="main" class="col">
                    <div class="sublevel" id="area2-reg">
                        <div class="row">
                            <div class="col">

                                <!-- FOR VERTICAL PRINT IN BLACK EDGING RIGHT SIDE -->
                                <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; float: right; margin-right: -13px; margin-top: 35px;">AREA HARVESTED</p>

                                <div class="card mb-4" id="area2-chartall" style="margin: 40px 40px 0px 55px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Map</a> -->
                                        <h5 class="my-0 pt-2 pb-2">Rice Area Harvested in <?php echo $total_area_irrigated['location_name'];?> by Province (2021)</h5>
                                        <p class="my-0 font-weight-normal text-muted">in hectares (PSA, 2022)</p>
                                    </div>
                                    <div class="card-body chart-all">
                                        <div class="row">
                                            <div class="col-6">
                                                <div id="ctxTopProvTop"><canvas id="area_ctxTopRegAll"></canvas></div>
                                            </div>
                                            <div class="col-6" id="series-area">
                                                <div class="text-center mt-4">
                                                    <div class="legend-box" style="background:rgba(254,213,111,1);"></div>
                                                    <p id="series-1" class="d-inline-block text-capitalize">
                                                        < 10,000</p>
                                                            <div class="legend-box" style="background:rgba(220,149,85,1);"></div>
                                                            <p id="series-2" class="d-inline-block text-capitalize">10,000-50,000</p>
                                                            <div class="legend-box" style="background:rgba(200,107,37,1);"></div>
                                                            <p id="series-3" class="d-inline-block text-capitalize">50,000-100,000</p>
                                                            <div class="legend-box" style="background:rgba(112,55,40,1);"></div>
                                                            <p id="series-4" class="d-inline-block text-capitalize"> > 100,000</p>
                                                </div>
                                                <div id="phl-reg-all-area" style="height: 850px;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer text-muted">
                                        Data Source: <a href="https://palaystat.philrice.gov.ph/statistics/retrieve/table/1" target="_blank">Estimated production, area harvested and yield per hectare (PAY) - PalayStat System</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- PAGE NUMBER -->
                        <div class="row" style="margin-right: 24px; margin-top: -10px;">
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important; float: right;">6 | STATE OF THE RICE SECTOR IN <?php echo strtoupper($production_all['location_name']);?></p>
                            </div>
                        </div>

                    </div>
                </main>
            </div>
        </div>

        <!-- for page break from html2pdf -->
        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br class="pagebreak">

        <!-- EST YIELD 1 -->

        <div class="container-fluid" id="yields1">
            <div class="row">
                <main role="main" class="col">
                    <!-- Header --->
                    <!-- <div id="yield" class="jumbotron text-center">
                        <div class="jumbotron-content">
                            <h2>State of the Rice Sector in <?php echo $yield_all['location_name'];?></h2>
                            <h1>Yield per Hectare</h1>
                            <p class="lead"><i>How do our farmers perform in terms of yield per hectare?</i> Check out the average metric tons <br />of palay produced per hectare, the attainment in irrigated and non-irrigated areas.</p>
                        </div>
                    </div> -->

                    <!-- Body -->
                    <div class="sublevel" id="yield1-reg">

                        <!-- FOR VERTICAL PRINT IN BLACK EDGING LEFT SIDE -->
                        <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; transform:scale(-1); float: left; margin-left: -17px; margin-top: 35px;">YIELD PER HECTARE</p>

                        <div style="margin-left: 35px; margin-top: 7px;">
                            <h1 style="font-size: 67px;">Yield per Hectare</h1>
                            <br>
                            <p class="lead"><i>How do our farmers perform in terms of yield per hectare?</i> Check out the average metric tons <br />of palay produced per hectare, the attainment in irrigated and non-irrigated areas.</p>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="card-deck mb-2 text-center" style="margin-left: 3px; margin-top: 10px; margin-right: 30px;">
                                    <div class="card primary mb-4 bg-primary-2 text-white">
                                        <div class="card-body">
                                            <h5 class="card-title pb-2">Irrigated Area</h5>
                                            <h1 class="card-text font-weight-bold"><?php echo $yield_irrigated['value']; ?><i class="<?php echo $yield_caret_irrig; ?>"></i></h1>
                                            <div class="card-note w-75 mx-auto rounded-pill bg-primary">
                                                <p class="text-white">metric tons per hectare</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card primary mb-4 bg-primary text-white">
                                        <div class="card-body">
                                            <h5 class="card-title pb-2">Regional Average (2021)</h5>
                                            <h1 class="card-text font-weight-bold"><?php echo $yield_all['value']; ?><i class="<?php echo $yield_caret; ?>"></i></h1>
                                            <div class="card-note bg-warning w-75 mx-auto rounded-pill">
                                                <p class="text-white">metric tons per hectare</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card primary mb-4 bg-alternate-3">
                                        <div class="card-body">
                                            <h5 class="card-title pb-2">Non-Irrigated Area</h5>
                                            <h1 class="card-text font-weight-bold"><?php echo $yield_rainfed['value']; ?><i class="<?php echo $yield_caret_rain; ?>"></i></h1>
                                            <div class="card-note w-75 mx-auto rounded-pill bg-primary">
                                                <p class="text-white">metric tons per hectare</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="card mb-4" id="yield1-chart" style="margin-left: 40px; margin-top: -20px; margin-right: 55px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a> -->
                                        <h5 class="my-0 pt-2 pb-2">Average Yield per Hectare in <?php echo $yield_all['location_name'];?> per Cropping Season (2001-2021)</h5>
                                        <p class="my-0 font-weight-normal text-muted">in metric tons per hectare (PSA, 2022)</p>
                                    </div>
                                    <div class="card-body">
                                        <div><canvas id="ctxYieldStack"></canvas></div>
                                    </div>
                                    <div class="card-footer text-muted">
                                        Data Source: <a href="https://palaystat.philrice.gov.ph/statistics/retrieve/table/1" target="_blank">Estimated production, area harvested and yield per hectare (PAY) - PalayStat System</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- PAGE NUMBER -->
                        <div class="row" style="margin-left: 38px; margin-top: -10px;>
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important;">7 | STATE OF THE RICE SECTOR IN <?php echo strtoupper($production_all['location_name']);?></p>
                            </div>
                        </div>

                    </div>
                </main>
            </div>
        </div>

        <!-- for page break from html2pdf -->
        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br class="pagebreak">

        <!-- EST YIELD 2 -->

        <div class="container-fluid" id="yields2">
            <div class="row">
                <main role="main" class="col">
                    <div class="sublevel" id="yield2-reg">

                        <!-- FOR VERTICAL PRINT IN BLACK EDGING RIGHT SIDE -->
                        <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; float: right; margin-right: -17px; margin-top: 35px;">YIELD PER HECTARE</p>

                        <div class="row">
                            <div class="col">
                                <div class="card mb-4" id="yield2-chartall" style="margin: 40px 0px 0px 55px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Map</a> -->
                                        <h5 class="my-0 pt-2 pb-2">Average Yield per Hectare per Cropping Season in <?php echo $yield_all['location_name'];?> by Province (2021)</h5>
                                        <p class="my-0 font-weight-normal text-muted">in metric tons per hectare (PSA, 2022)</p>
                                    </div>
                                    <div class="card-body chart-all">
                                        <div class="row">
                                            <div class="col-6">
                                                <div id="ctxTopProvTop"><canvas id="yield_ctxTopRegAll"></canvas></div>
                                            </div>
                                            <div class="col-6" id="series-yield">                                        
                                                <div class="text-center mt-4">
                                                    <div class="legend-box" style="background:rgba(41,107,54,1);"></div>
                                                    <p id="series-1" class="d-inline-block text-capitalize">> 4.15 Yield per Hectare</p>
                                                    <div class="legend-box" style="background:rgba(42,140,184,1);"></div>
                                                    <p id="series-2" class="d-inline-block text-capitalize">< 4.15 Yield per Hectare</p>                                        
                                                </div>
                                                <div id="phl-reg-all-yield" style="height: 850px;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer text-muted">
                                        Data Source: <a href="https://palaystat.philrice.gov.ph/statistics/retrieve/table/1" target="_blank">Estimated production, area harvested and yield per hectare (PAY) - PalayStat System</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- PAGE NUMBER -->
                        <div class="row" style="margin-right: 26px; margin-top: -10px;">
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important; float: right;">8 | STATE OF THE RICE SECTOR IN <?php echo strtoupper($production_all['location_name']);?></p>
                            </div>
                        </div>

                    </div>
                </main>
            </div>
        </div>

        <!-- for page break from html2pdf -->
        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br class="pagebreak">

        <!-- VALUATIONS 1 -->

        <div class="container-fluid" id="valudations1">
            <div class="row">
                <main role="main" class="col">
                    <!-- Header --->
                    <!-- <div id="valuation" class="jumbotron text-center">
                        <div class="jumbotron-content">
                            <h2>State of the Rice Sector in <?php echo $latest_palay_valuation['location_name'];?></h2>
                            <h1>Value of Production</h1>
                            <p class="lead"><i>How much does the rice farming sector contribute to regional agricultural account?</i> <br />Learn the value of rice production, and its share in the overall value of rice production,<br /> its share in the GVA of agriculture, forestry, and fishing, and its portion in the National Gross Domestic Product.</p>
                        </div>
                    </div> -->

                    <!-- Body -->
                    <div class="sublevel" id="valuation1-reg">

                        <!-- FOR VERTICAL PRINT IN BLACK EDGING LEFT SIDE -->
                        <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; transform:scale(-1); float: left; margin-left: -17px; margin-top: 35px;">VALUE OF PRODUCTION</p>

                        <div style="margin-left: 35px; margin-top: 7px;">
                            <h1 style="font-size: 67px;">Value of Production</h1>
                            <br>
                            <p class="lead"><i>How much does the rice farming sector contribute to regional agricultural account?</i> <br />Learn the value of rice production, and its share in the overall value of rice production,<br /> its share in the GVA of agriculture, forestry, and fishing, and its portion in the National Gross Domestic Product.</p>
                        </div>

                        <div class="row">
                            <div class="col-5 pl-1">
                                <div class="card primary mb-4 bg-primary text-white val-secondary" style="margin-left: 20px; margin-top: 10px; margin-right: 0px;">
                                    <div class="card-body">
                                        <h5 class="card-title pb-2" style="margin-bottom: 10px;">Regional Value of Rice Production (2020)</h5>
                                        <h1 class="card-text font-weight-bold text-center">P <?php echo number_format($latest_palay_valuation['value'] / 1000, 2); ?><i class="<?php echo $pv_caret; ?>"></i></h1>
                                        <div class="card-note w-25 mx-auto rounded-pill bg-warning text-center">
                                            <p class="text-white">billion pesos</p>
                                        </div>
                                        <div style="margin-top: 10px; margin-bottom: 10px;">
                                            <p class="text-white text-center">at 2018 constant prices</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-7 pr-1">
                                <div class="card primary mb-4 bg-alternate val-secondary" style="margin-left: 0px; margin-top: 10px; margin-right: 45px;">
                                    <div class="card-body">
                                        <div class="row text-center">
                                            <div class="col-6 border-right">
                                                <h5 class="card-title">Regional Value of Agricultural Production (2020)</h5>
                                                <h1 class="card-text font-weight-bold mt-3">P <?php echo number_format($latest_agri_valuation['value'] / 1000, 2); ?><i class="<?php echo $agri_caret; ?>"></i></h1>
                                                <div class="card-note w-50 mx-auto rounded-pill bg-primary">
                                                    <p class="text-white">billion</p>
                                                </div>
                                                <div>
                                                    <p class="text-white">at 2018 constant prices</p>
                                                </div>
                                            </div>
                                            <div class="col-6 pl-4">
                                                <div class="row d-flex align-items-center h-100">
                                                    <div class="col-5">
                                                        <h5 class="card-title m-0 p-0">Percent Share of Regional Rice Production (2020)</h5>
                                                    </div>
                                                    <div class="col-7"><canvas id="ctxPercentShare"></canvas></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="card mb-4" id="valuation1-chart" style="margin-left: 40px; margin-top: -15px; margin-right: 55px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a> -->
                                        <h5 class="my-0 pt-2 pb-2">Regional Value of Rice and Agricultural Production in <?php echo $latest_palay_valuation['location_name'];?> (<?php echo $year_start; ?>-2020)</h5>
                                        <p class="my-0 font-weight-normal text-muted">In Billion Pesos, At Constant 2018 Prices (PSA, 2021)</p>
                                    </div>
                                    <div class="card-body mt-4">
                                        <div><canvas id="ctxAgriSector"></canvas></div>
                                    </div>
                                    <div class="card-footer text-muted">
                                        Data Source: <a href="https://openstat.psa.gov.ph/PXWeb/pxweb/en/DB/DB__2B__AA__VP__NA/0012B5FVOP1.px/?rxid=2533f456-0336-41c3-a072-945813ce4ac4" target="_blank">Palay and Agriculture and Fisheries: Value of Production in Philippine Agriculture and Fisheries, Philippines and Regions - Philippine Statistics Authority</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- PAGE NUMBER -->
                        <div class="row" style="margin-left: 38px; margin-top: -10px;>
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important;">9 | STATE OF THE RICE SECTOR IN <?php echo strtoupper($production_all['location_name']);?></p>
                            </div>
                        </div>

                    </div>
                </main>
            </div>
        </div>

        <!-- for page break from html2pdf -->
        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br class="pagebreak">

        <!-- VALUATIONS 2 -->

        <div class="container-fluid" id="valuations2">
            <div class="row">
                <main role="main" class="col">
                    <div class="sublevel" id="valuation2-reg">

                        <!-- FOR VERTICAL PRINT IN BLACK EDGING RIGHT SIDE -->
                        <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; float: right; margin-right: -17px; margin-top: 35px;">VALUE OF PRODUCTION</p>

                        <div class="row">
                            <div class="col">
                                <div class="card mb-4" id="valuation2-chart" style="margin: 40px 0px 0px 55px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a> -->
                                        <h5 class="my-0 pt-2 pb-2">Share of Regional Rice Production Value to Regional Agricultural Production Value in <?php echo $latest_palay_valuation['location_name'];?> (<?php echo $year_start; ?>-2020)</h5>
                                        <p class="my-0 font-weight-normal text-muted">At Constant 2018 Prices (PSA, 2021)</p>
                                    </div>
                                    <div class="card-body">
                                        <div><canvas id="valuation_ctxAgriShare"></canvas></div>
                                    </div>
                                    <div class="card-footer text-muted">
                                        Data Source: <a href="https://openstat.psa.gov.ph/PXWeb/pxweb/en/DB/DB__2B__AA__VP__NA/0012B5FVOP1.px/?rxid=2533f456-0336-41c3-a072-945813ce4ac4" target="_blank">Palay and Agriculture and Fisheries: Value of Production in Philippine Agriculture and Fisheries, Philippines and Regions - Philippine Statistics Authority</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- PAGE NUMBER -->
                        <div class="row" style="margin-right: 27px; margin-top: 85px;">
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important; float: right;">10 | STATE OF THE RICE SECTOR IN <?php echo strtoupper($production_all['location_name']);?></p>
                            </div>
                        </div>

                    </div>
                </main>
            </div>
        </div>

        <!-- for page break from html2pdf -->
        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br class="pagebreak">

        <!-- YIELD COST 1 -->

        <div class="container-fluid" id="yieldcosts1">
            <div class="row">
                <main role="main" class="col">
                    <!-- Header --->
                    <!-- <div id="yieldcost" class="jumbotron text-center">
                        <div class="jumbotron-content">
                            <h2>State of the Rice Sector in <?php echo $yield_all['location_name'];?></h2>
                            <h1>Productivity Indicators</h1>
                            <p class="lead"><i>How competitive are our farmers in terms of having high yield with less cost?</i> Explore the comparison of NPK utilization, <br />distribution of cost items per hectare, and yield and cost analysis of the provinces in the region.</p>
                        </div>
                    </div> -->

                    <!-- Body -->
                    <div class="sublevel" id="yieldcost1-reg">

                        <!-- FOR VERTICAL PRINT IN BLACK EDGING LEFT SIDE -->
                        <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; transform:scale(-1); float: left; margin-left: -17px; margin-top: 35px;">PRODUCTIVITY INDICATORS</p>

                        <div style="margin-left: 35px; margin-top: 7px;">
                            <h1 style="font-size: 67px;">Productivity Indicators</h1>
                            <br>
                            <p class="lead"><i>How competitive are our farmers in terms of having high yield with less cost?</i> Explore the comparison of NPK utilization, <br />distribution of cost items per hectare, and yield and cost analysis of the provinces in the region.</p>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="card-deck mb-2 text-center" style="margin-left: 3px; margin-top: 10px; margin-right: 30px;">
                                    <div class="card primary mb-4 bg-primary text-white">
                                        <div class="card-body">
                                            <h5 class="card-title pb-2">Yield per Hectare (2019)</h5>
                                            <h1 class="card-text font-weight-bold"><?php echo $yield_all['value']; ?><i class="<?php echo $yield_caret; ?>"></i></h1>
                                            <div class="card-note bg-warning w-75 mx-auto rounded-pill">
                                                <p class="text-white">metric tons per hectare</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card primary mb-4 bg-primary text-white">
                                        <div class="card-body">
                                            <h5 class="card-title pb-2">Production Cost (2019)</h5>
                                            <h1 class="card-text font-weight-bold">P <?php echo $total_costs_int; ?><i class="<?php echo $unit_caret; ?>"></i></h1>
                                            <div class="card-note bg-warning w-25 mx-auto rounded-pill">
                                                <p class="text-white">per kilogram</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="card mb-4" id="yieldcost1-chart" style="margin-left: 40px; margin-top: -20px; margin-right: 55px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a> -->
                                        <h5 class="my-0 pt-2 pb-2">Cost Shares in Rice Production in <?php echo $yield_all['location_name'];?> (2000-2019)</h5>
                                        <p class="my-0 font-weight-normal text-muted">in Percent (%) (PSA, 2020)</p>
                                    </div>
                                    <div class="card-body">
                                        <div><canvas id="ctxBreakdownPh"></canvas></div>
                                    </div>
                                    <div class="card-footer text-muted">
                                        Data Source: <a href="https://openstat.psa.gov.ph/PXWeb/pxweb/en/DB/DB__2B__AA__CR/0012B5FCOP0.px/?rxid=c3ed94b5-7d95-41e8-b25b-01494c2d1e1e" target="_blank">Palay and Corn: Updated Average Production Costs and Returns - Philippine Statistics Authority</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- PAGE NUMBER -->
                        <div class="row" style="margin-left: 38px; margin-top: -10px;>
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important;">11 | STATE OF THE RICE SECTOR IN <?php echo strtoupper($production_all['location_name']);?></p>
                            </div>
                        </div>

                    </div>
                </main>
            </div>
        </div>

        <!-- for page break from html2pdf -->
        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br class="pagebreak">

        <!-- YIELD COST 2 -->

        <div class="container-fluid" id="yieldcosts2">
            <div class="row">
                <main role="main" class="col">
                    <div class="sublevel" id="yieldcost2-reg">

                        <!-- FOR VERTICAL PRINT IN BLACK EDGING RIGHT SIDE -->
                        <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; float: right; margin-right: -17px; margin-top: 35px;">PRODUCTIVITY INDICATORS</p>

                        <div class="row">
                            <div class="col">
                                <div class="card mb-4" id="yieldcost2-chart" style="margin: 40px 0px 0px 55px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a> -->
                                        <h5 class="my-0 pt-2 pb-2">Average N-P-K Rate in <?php echo $yield_all['location_name'];?> by Province (2019)</h5>
                                        <p class="my-0 font-weight-normal text-muted">in kilograms per hectare (kg/ha), from most common fertilizer grades (PSA, 2020)</p>
                                    </div>
                                    <div class="card-body">
                                        <div><canvas id="ctxNPKUse"></canvas></div>
                                    </div>
                                    <div class="card-footer text-muted">
                                        Data Source: Estimated total and per hectare inorganic fertilizer usage - Philippine Statistics Authority
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- PAGE NUMBER -->
                        <div class="row" style="margin-right: 27px; margin-top: 120px;">
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important; float: right;">12 | STATE OF THE RICE SECTOR IN <?php echo strtoupper($production_all['location_name']);?></p>
                            </div>
                        </div>

                    </div>
                </main>
            </div>
        </div>

        <!-- for page break from html2pdf -->
        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br class="pagebreak">

        <!-- INCOMES -->

        <div class="container-fluid" id="incomes">
            <div class="row">
                <main role="main" class="col">
                    <!-- Header --->
                    <!-- <div id="incomes" class="jumbotron text-center">
                        <div class="jumbotron-content">
                            <h2>State of the Rice Sector in <?php echo $gross_returns['location_name'];?></h2>
                            <h1>Rice Profitability Indicator</h1>
                            <p class="lead"><i>How much do our farmers earn per season?</i> Find out their net income through the years<br/> derived from the gross return minus the total cost of production.</p>
                        </div>
                    </div> -->
            
                    <!-- Body -->
                    <div class="sublevel" id="income-reg">

                        <!-- FOR VERTICAL PRINT IN BLACK EDGING LEFT SIDE -->
                        <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; transform:scale(-1); float: left; margin-left: -17px; margin-top: 35px;">PROFITABILITY INDICATOR</p>

                        <div style="margin-left: 35px; margin-top: 7px;">
                            <h1 style="font-size: 67px;">Rice Profitability Indicator</h1>
                            <br>
                            <p class="lead"><i>How much do our farmers earn per season?</i> Find out their net income through the years<br/> derived from the gross return minus the total cost of production.</p>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="card-deck mb-2 text-center" style="margin-left: 3px; margin-top: 10px; margin-right: 30px;">
                                    <div class="card primary mb-4 bg-alternate">
                                        <div class="card-body">
                                            <h5 class="card-title pb-2">Gross Returns</h5>
                                            <h1 class="card-text font-weight-bold">P <?php echo $gross_returns['value']; ?><i class="<?php echo $gross_caret; ?>"></i></h2>
                                            <div class="card-note w-100 mx-auto rounded-pill bg-primary"><p class="text-white">per hectare per cropping season</p></div>
                                        </div>
                                    </div>
                                    <div class="card primary mb-4 bg-primary text-white">
                                        <div class="card-body">
                                            <h5 class="card-title pb-2">Net Returns (2020)</h5>
                                            <h1 class="card-text font-weight-bold">P <?php echo $net_returns['value']; ?><i class="<?php echo $net_caret; ?>"></i></h2>
                                            <div class="card-note w-100 mx-auto rounded-pill bg-warning"><p class="text-white">per hectare per cropping season</p></div>
                                        </div>
                                    </div>
                                    <div class="card primary mb-4 bg-alternate">
                                        <div class="card-body">
                                            <h5 class="card-title pb-2">Total Cost</h5>
                                            <h1 class="card-text font-weight-bold">P <?php echo $total_costs['value']; ?><i class="<?php echo $cost_caret; ?>"></i></h2>
                                            <div class="card-note w-100 mx-auto rounded-pill bg-primary"><p class="text-white">per hectare per cropping season</p></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="row">
                            <div class="col">
                                <div class="card mb-4" id="income-chart" style="margin-left: 40px; margin-top: -20px; margin-right: 55px;">
                                <div class="card-header text-left">
                                    <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a> -->
                                    <h5 class="my-0 pt-2 pb-2">Net Returns, Gross Returns, and Total Cost per Hectare per Cropping Season in <?php echo $gross_returns['location_name'];?> (<?php echo $year_start; ?>-2020)</h5>
                                    <p class="my-0 font-weight-normal text-muted">in Philippine Peso (PhP) (PSA, 2021)</p>
                                </div>
                                <div class="card-body">
                                    <div><canvas id="ctxGrossReturns"></canvas></div>
                                </div>
                            </div>
                            </div>
                        </div>

                        <!-- PAGE NUMBER -->
                        <div class="row" style="margin-left: 38px; margin-top: -10px;>
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important;">13 | STATE OF THE RICE SECTOR IN <?php echo strtoupper($production_all['location_name']);?></p>
                            </div>
                        </div>

                    </div>
                </main>
            </div>
        </div>

        <!-- for page break from html2pdf -->
        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br class="pagebreak">

        <!-- PRICES 1 -->

        <div class="container-fluid" id="prices1">
            <div class="row">
                <main role="main" class="col">
                    <!-- Header --->
                    <!-- <div id="prices" class="jumbotron text-center">
                        <div class="jumbotron-content">
                            <h2>State of the Rice Sector in <?php echo $farmgate['location_name'];?></h2>
                            <h1>Rice Market Prices</h1>
                            <p class="lead"><i>How does the price of un-hulled and de-hulled rice fare in the marketplace?</i> <br /> Know the current and historical prices of rice in the region. </p>
                        </div>
                    </div> -->

                    <!-- Body -->
                    <div class="sublevel" id="price1-reg">

                        <!-- FOR VERTICAL PRINT IN BLACK EDGING RIGHT SIDE -->
                        <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; float: right; margin-right: -17px; margin-top: 35px;">RICE MARKET PRICES</p>

                        <div style="margin-left: 50px; margin-top: 7px;">
                            <h1 style="font-size: 67px;">Rice Market Prices</h1>
                            <br>
                            <p class="lead"><i>How does the price of un-hulled and de-hulled rice fare in the marketplace?</i> <br /> Know the current and historical prices of rice in the region. </p>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="card-deck mb-2 text-center" style="margin-left: 45px; margin-top: 10px; margin-right: -15px;">
                                    <div class="card primary mb-4 bg-primary text-white prices-card">
                                        <div class="card-body">
                                            <h5 class="card-title mt-1">Dry Palay Price (2021)</h5>
                                            <h1 class="card-text mt-4 font-weight-bold smaller"><?php echo $farmgate['value']; ?><i class="<?php echo $farm_caret; ?>"></i></h1>
                                            <div class="card-note bg-warning w-50 mt-3 mx-auto rounded-pill">
                                                <p class="text-white">Pesos Per Kilogram</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card primary mb-4 bg-primary text-white prices-card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col">
                                                    <h5 class="card-title">Wholesale Prices (2021)</h5>
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col-6 border-right">
                                                    <p class="card-title-note">Regular-Milled</p>
                                                    <h1 class="card-text font-weight-bold smaller"><?php echo $wholesale['value']; ?><i class="<?php echo $whr_caret; ?>"></i></h1>
                                                </div>
                                                <div class="col-6">
                                                    <p class="card-title-note">Well-Milled</p>
                                                    <h1 class="card-text font-weight-bold smaller"><?php echo $wholesale_sp['value']; ?><i class="<?php echo $whw_caret; ?>"></i></h1>
                                                </div>
                                                <div class="bg-warning w-50 mt-3  mx-auto pb-0 rounded-pill">
                                                    <p class="text-white text-uppercase mb-0">Pesos Per Kilogram</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card primary mb-4 bg-primary text-white prices-card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col">
                                                    <h5 class="card-title">Retail Prices (2021)</h5>
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col-6 border-right">
                                                    <p class="card-title-note">Regular-Milled</p>
                                                    <h1 class="card-text font-weight-bold smaller"><?php echo $retail['value']; ?><i class="<?php echo $rhw_caret; ?>"></i></h1>
                                                </div>
                                                <div class="col-6">
                                                    <p class="card-title-note">Well-Milled</p>
                                                    <h1 class="card-text font-weight-bold smaller"><?php echo $retail_sp['value']; ?><i class="<?php echo $rhr_caret; ?>"></i></h1>
                                                </div>
                                                <div class="bg-warning w-50 mt-3  mx-auto pb-0 rounded-pill">
                                                    <p class="text-white text-uppercase mb-0">Pesos Per Kilogram</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="card mb-4" id="price1-chart" style="margin-left: 55px; margin-top: -20px; margin-right: 35px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a> -->
                                        <h5 class="my-0 pt-2 pb-2">Nominal Prices of Dry Palay in <?php echo $farmgate['location_name'];?> (2001-2021)</h5>
                                        <p class="my-0 font-weight-normal text-muted">in Peso (PSA, 2022)</p>
                                    </div>
                                    <div class="card-body">
                                        <div><canvas id="ctxFarmPrices"></canvas></div>
                                    </div>
                                    <div class="card-footer text-muted">
                                        Data Source: <a href="https://palaystat.philrice.gov.ph/statistics/retrieve/table/15" target="_blank">Annual and semestral average farmgate, wholesale and retail prices, ordinary palay/rice</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- PAGE NUMBER -->
                        <div class="row" style="margin-right: 27px; margin-top: -10px;">
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important; float: right;">14 | STATE OF THE RICE SECTOR IN <?php echo strtoupper($production_all['location_name']);?></p>
                            </div>
                        </div>

                    </div>
                </main>
            </div>
        </div>

        <!-- for page break from html2pdf -->
        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br class="pagebreak">

        <!-- PRICES 2 -->

        <div class="container-fluid" id="prices2">
            <div class="row">
                <main role="main" class="col">
                    <div class="sublevel" id="price2-reg">

                        <!-- FOR VERTICAL PRINT IN BLACK EDGING LEFT SIDE -->
                        <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; transform:scale(-1); float: left; margin-left: -17px; margin-top: 35px;">RICE MARKET PRICES</p>

                        <div class="row">
                            <div class="col">
                                <div class="card mb-4" id="price2-chart1" style="margin-left: 8px; margin-top: 20px; margin-right: 42px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a> -->
                                        <h5 class="my-0 pt-2 pb-2">Wholesale Prices of Regular and Well-milled Rice in <?php echo $farmgate['location_name'];?> (2001-2021)</h5>
                                        <p class="my-0 font-weight-normal text-muted">in Peso (PSA, 2022)</p>
                                    </div>
                                    <div class="card-body">
                                        <div><canvas id="ctxWholesalePrices"></canvas></div>
                                    </div>
                                    <div class="card-footer text-muted">
                                        Data Source: <a href="https://palaystat.philrice.gov.ph/statistics/retrieve/table/15" target="_blank">Annual and semestral average farmgate, wholesale and retail prices, ordinary palay/rice</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="card mb-4" id="price2-chart2" style="margin-left: 38px; margin-top: -15px; margin-right: 55px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a> -->
                                        <h5 class="my-0 pt-2 pb-2">Retail Prices of Regular and Well-milled Rice in <?php echo $farmgate['location_name'];?> (2001-2021)</h5>
                                        <p class="my-0 font-weight-normal text-muted">in Peso (PSA, 2021)</p>
                                    </div>
                                    <div class="card-body">
                                        <div><canvas id="ctxRetailPrices"></canvas></div>
                                    </div>
                                    <div class="card-footer text-muted">
                                        Data Source: <a href="https://palaystat.philrice.gov.ph/statistics/retrieve/table/15" target="_blank">Annual and semestral average farmgate, wholesale and retail prices, ordinary palay/rice</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- PAGE NUMBER -->
                        <div class="row" style="margin-left: 38px; margin-top: -12px;>
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important;">15 | STATE OF THE RICE SECTOR IN <?php echo strtoupper($production_all['location_name']);?></p>
                            </div>
                        </div>

                    </div>
                </main>
            </div>
        </div>
    
    <!-- END OF CAPTURE DIV -->
    </div>

    <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/sidebarjs.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/chart.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/chartjs-plugin-labels.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/html2canvas.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/d3.v3.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/topojson.v1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/datamaps.none.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/custom.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/chartjs-plugin-annotation.min.js"></script>

    <!-- MAIN CHARTS -->

    <script>
        // var sidebarjs = new SidebarJS.SidebarElement();
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
                devicePixelRatio: 3,
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

    <!-- PRODUCTIONS CHARTS -->

    <script>
        // var sidebarjs = new SidebarJS.SidebarElement();
        Chart.defaults.global.responsive = true;
        Chart.defaults.global.tooltips.mode = 'index';
        Chart.defaults.global.tooltips.intersect = false;
        Chart.defaults.global.defaultFontFamily = 'Poppins';
        Chart.defaults.global.defaultFontSize = 13;
        Chart.defaults.global.defaultFontColor = "#000000";
        Chart.defaults.global.animation.duration = 3000;

        // CHART 1

        var dbTotal = JSON.parse('<?php echo $ph_production_all; ?>');
        var dbIrrigated = JSON.parse('<?php echo $ph_production_irrigated; ?>');
        var dbRainfed = JSON.parse('<?php echo $ph_production_rainfed; ?>');

        let production_years = [];
        let production_values_total = [];
        let production_values_irrig = [];
        let production_values_rain = [];

        try {
            dbTotal.map((item) => {
                production_years.push(item.year);
                production_values_total.push(item.value);
            });
            dbIrrigated.map((item) => {
                production_values_irrig.push(item.value);
            });
            dbRainfed.map((item) => {
                production_values_rain.push(item.value);
            });
        } catch (error) {
            console.log(error);
        }

        var prodStack = document.getElementById('ctxProdStack').getContext('2d');
        var tempPLabels = [...production_years];
        var prodAllData = [...production_values_total];
        var prodIrrigData = [...production_values_irrig];
        var prodRainData = [...production_values_rain];
        var prodStackChart = new Chart(prodStack, {

            type: 'bar',

            data: {
                labels: tempPLabels,
                datasets: [{
                        label: 'Regional',
                        backgroundColor: '#2138B7', // COLOR 1
                        borderColor: '#2138B7', // COLOR 1
                        lineTension: 0,
                        type: 'line',
                        fill: false,
                        data: prodAllData,
                        pointStyle: 'line'
                    },
                    {
                        label: 'Irrigated Area',
                        backgroundColor: '#FE7F00', // COLOR 2
                        borderColor: '#FE7F00', // COLOR 2
                        data: prodIrrigData
                    },
                    {
                        label: 'Non-Irrigated Area',
                        backgroundColor: '#FFB043', // COLOR 3
                        borderColor: '#FFB043', // COLOR 3
                        data: prodRainData
                    }
                ]
            },

            options: {
                devicePixelRatio: 3,
                aspectRatio: 2.5,
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
                    position: 'top',
                    onClick: (e) => e.stopPropagation(),
                    labels: {
                        fontSize: 12,
                    }
                }
            }
        });
        
        // DEFAULT FOR CHART 2
        
        var scalesC = [{
                "range": 0,
                "minValue": "0.00",
                "maxValue": "100000.00"
            },
            {
                "range": 1,
                "minValue": "100000.00",
                "maxValue": "500000.00"
            },
            {
                "range": 2,
                "minValue": "500000.00",
                "maxValue": "1000000.00"
            },
            {
                "range": 3,
                "minValue": "1000000.00",
                "maxValue": "10000000.00"
            },
        ];

        // CHART 2 - CHART AND MAP ALL
        
        var dbProvsMap = JSON.parse('<?php echo $provincial_production_geocoded; ?>');

        let production_mapData = [];

        for (i = 0; i < dbProvsMap.length; i++) {
            var gc = dbProvsMap[i].map_ID;
            var value = parseFloat(dbProvsMap[i].value);

            var fill_color = "";
            if (value > scalesC[3].minValue) {
                fill_color = "fourQ";
            } else if (value > scalesC[2].minValue) {
                fill_color = "thirQ";
            } else if (value > scalesC[1].minValue) {
                fill_color = "secoQ";
            } else if (value > scalesC[0].minValue) {
                fill_color = "firsQ";
            }

            production_mapData[gc] = {
                Location_name: dbProvsMap[i].location_name,
                Year: dbProvsMap[i].year,
                Value: parseInt(dbProvsMap[i].value).toLocaleString(),
                fillKey: fill_color
            };
        }

        var map = new Datamap({
            element: document.getElementById('phl-reg-all-production'),
            geographyConfig: {
                popupOnHover: true,
                highlightOnHover: true,
                dataUrl: '<?php echo base_url(); ?>js/phl.topo.json',
                borderColor: '#000000',
                highlightFillColor: '#92cddc',
                highlightBorderColor: 'rgba(37, 42, 45, 0.8)',
                popupTemplate: function(geography, data) {
                    return '<div class="hoverinfo"><strong>' + geography.properties.name +
                        ': ' + numberWithCommas(data.Value) + ' mt (' + data.Year + ')</strong></div>';
                },
            },
            scope: 'phl',
            fills: {
                firsQ: 'rgba(198,250,30,0.8)',
                secoQ: 'rgba(148,213,38,0.8)',
                thirQ: 'rgba(91,140,34,0.8)',
                fourQ: 'rgba(33,55,18,0.8)',
                defaultFill: 'rgba(166,216,225,1)'
            },
            data: production_mapData,
            setProjection: function(element) {
                var projection = d3.geo.mercator()
                    .center([121.7740, 12.8797])
                    .scale(2800)
                    .translate([element.offsetWidth / 2, element.offsetHeight / 2]);

                var path = d3.geo.path().projection(projection);
                return {
                    path: path,
                    projection: projection
                };
            }
        });

        var dbProvs = JSON.parse('<?php echo $provincial_production_all; ?>');

        let production_provinces = [];
        let production_values = [];
        let production_bgColors = [];

        try {
            dbProvs.map((item) => {
                production_provinces.push(item.location_name);
                production_values.push(item.value);
                var val = parseFloat(item.value);
                if (val > scalesC[3].minValue) {
                    fill_color = "rgba(33,55,18,1)";
                } else if (val > scalesC[2].minValue) {
                    fill_color = "rgba(91,140,34,1)";
                } else if (val > scalesC[1].minValue) {
                    fill_color = "rgba(148,213,38,1)";
                } else if (val > scalesC[0].minValue) {
                    fill_color = "rgba(198,250,30,1)";
                }
                production_bgColors.push(fill_color);
            });
        } catch (error) {
            console.log(error);
        }

        var tempPrLabels = [...production_provinces];
        var topProvData = [...production_values];
        var topProvColor = [...production_bgColors];

        var topProv = document.getElementById('production_ctxTopRegAll').getContext('2d');
        var topProvChart = new Chart(topProv, {
            // The type of chart we want to create
            type: 'horizontalBar',

            data: {
                labels: tempPrLabels,
                datasets: [{
                    label: 'Total palay produced',
                    backgroundColor: topProvColor, // COLOR 4
                    borderColor: topProvColor, // COLOR 4
                    data: topProvData
                }]
            },

            options: {
                devicePixelRatio: 3,
                layout: {
                padding: {
                        right: 75
                    }
                },
                aspectRatio: 0.55,
                scales: {
                    xAxes: [{
                        display: true,
                        ticks: {
                            userCallback: function(value, index, values) {
                                value = value.toString();
                                value = value.split(/(?=(?:...)*$)/);
                                value = value.join(',');
                                return value;
                            }
                        }
                    }],
                    yAxes: [{
                        display: true,
                        ticks: {
                            suggestedMin: 0
                        },
                        gridLines: {
                            color: "rgba(0, 0, 0, 0)"
                        }
                    }]
                },
                tooltips: false,
                legend: {
                    display: false,
                    labels: {
                        fontSize: 12
                    }
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
                        this.data.datasets.forEach(function(dataset, i) {
                            let meta = chartInstance.controller.getDatasetMeta(i);
                            meta.data.forEach(function(bar, index) {
                                let data = dataset.data[index];
                                data = parseInt(data).toLocaleString();
                                ctx.fillText(data, bar._model.x + 40, bar._model.y + 8);
                            });
                        });
                    }
                }
            }
        });
    </script>

    <!-- AREA HARVESTED CHARTS -->

    <script>
        // var sidebarjs = new SidebarJS.SidebarElement();
        Chart.defaults.global.responsive = true;
        Chart.defaults.global.tooltips.mode = 'index';
        Chart.defaults.global.tooltips.intersect = false;
        Chart.defaults.global.defaultFontFamily = 'Poppins';
        Chart.defaults.global.defaultFontSize = 13;
        Chart.defaults.global.animation.duration = 3000;
        Chart.defaults.global.defaultFontColor = "#000000"

        // CHART 1

        var dbTotal = JSON.parse('<?php echo $ph_area_all; ?>');
        var dbIrrigated = JSON.parse('<?php echo $ph_area_irrigated; ?>');
        var dbRainfed = JSON.parse('<?php echo $ph_area_rainfed; ?>');

        let years = [];
        let values_total = [];
        let values_irrig = [];
        let values_rain = [];

        try {
            dbTotal.map((item) => {
                years.push(item.year);
                values_total.push(item.value);
            });
            dbIrrigated.map((item) => {
                values_irrig.push(item.value);
            });
            dbRainfed.map((item) => {
                values_rain.push(item.value);
            });
        } catch (error) {
            console.log(error);
        }

        var areaStack = document.getElementById('ctxAreaStack').getContext('2d');
        var tempALabels = [...years];
        var areaAllData = [...values_total];
        var areaIrrigData = [...values_irrig];
        var areaRainData = [...values_rain];
        var areaStackChart = new Chart(areaStack, {

            type: 'bar',

            data: {
                labels: tempALabels,
                datasets: [{
                        label: 'Regional',
                        backgroundColor: '#2138B7', // COLOR 1
                        borderColor: '#2138B7', // COLOR 1
                        lineTension: 0,
                        type: 'line',
                        fill: false,
                        data: areaAllData,
                        pointStyle: 'line'
                    },
                    {
                        label: 'Irrigated Area',
                        backgroundColor: '#FE7F00', // COLOR 2
                        borderColor: '#FE7F00', // COLOR 2
                        data: areaIrrigData
                    },
                    {
                        label: 'Non-Irrigated Area',
                        backgroundColor: '#FEB043', // COLOR 3
                        borderColor: '#FEB043', // COLOR 3
                        data: areaRainData
                    }
                ]
            },

            options: {
                devicePixelRatio: 3,
                aspectRatio: 2.5,
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
                    position: 'top',
                    onClick: (e) => e.stopPropagation(),
                }
            }
        });

        // DEFAULT FOR CHART 2
        
        var scalesC = [{
                "range": 0,
                "minValue": "0.00",
                "maxValue": "100000.00"
            },
            {
                "range": 1,
                "minValue": "10000.00",
                "maxValue": "50000.00"
            },
            {
                "range": 2,
                "minValue": "50000.00",
                "maxValue": "100000.00"
            },
            {
                "range": 3,
                "minValue": "100000.00",
                "maxValue": "1000000.00"
            },
        ];

        // CHART 2 - CHART AND MAP ALL
        
        var dbProvsMap = JSON.parse('<?php echo $provincial_area_geocoded; ?>');

        let mapData = [];

        for (i = 0; i < dbProvsMap.length; i++) {
            var gc = dbProvsMap[i].map_ID;
            var value = parseFloat(dbProvsMap[i].value);

            var fill_color = "";
            if (value > scalesC[3].minValue) {
                fill_color = "fourQ";
            } else if (value > scalesC[2].minValue) {
                fill_color = "thirQ";
            } else if (value > scalesC[1].minValue) {
                fill_color = "secoQ";
            } else if (value > scalesC[0].minValue) {
                fill_color = "firsQ";
            }

            mapData[gc] = {
                Location_name: dbProvsMap[i].location_name,
                Year: dbProvsMap[i].year,
                Value: parseInt(dbProvsMap[i].value).toLocaleString(),
                fillKey: fill_color
            };
        }

        var map = new Datamap({
            element: document.getElementById('phl-reg-all-area'),
            geographyConfig: {
                popupOnHover: true,
                highlightOnHover: true,
                dataUrl: '<?php echo base_url(); ?>js/phl.topo.json',
                borderColor: '#000000',
                highlightFillColor: '#92cddc',
                highlightBorderColor: 'rgba(37, 42, 45, 0.8)',
                popupTemplate: function(geography, data) {
                    return '<div class="hoverinfo"><strong>' + geography.properties.name +
                        ': ' + numberWithCommas(data.Value) + ' mt (' + data.Year + ')</strong></div>';
                },
            },
            scope: 'phl',
            fills: {
                firsQ: 'rgba(254,213,111,0.8)',
                secoQ: 'rgba(220,149,85,0.8)',
                thirQ: 'rgba(200,107,37,0.8)',
                fourQ: 'rgba(112,55,40,0.8)',
                defaultFill: 'rgba(0, 0, 0, 0.5)'
            },
            data: mapData,
            setProjection: function(element) {
                var projection = d3.geo.mercator()
                    .center([121.7740, 12.8797])
                    .scale(2800)
                    .translate([element.offsetWidth / 2, element.offsetHeight / 2]);

                var path = d3.geo.path().projection(projection);
                return {
                    path: path,
                    projection: projection
                };
            }
        });

        var dbProvs = JSON.parse('<?php echo $provincial_area_all; ?>');

        let provinces = [];
        let values = [];
        let bgColors = [];

        try {
            dbProvs.map((item) => {
                provinces.push(item.location_name);
                values.push(item.value);
                var val = parseFloat(item.value);
                if (val > scalesC[3].minValue) {
                    fill_color = "rgba(112,55,40,1)";
                } else if (val > scalesC[2].minValue) {
                    fill_color = "rgba(200,107,37,1)";
                } else if (val > scalesC[1].minValue) {
                    fill_color = "rgba(220,149,85,1)";
                } else if (val > scalesC[0].minValue) {
                    fill_color = "rgba(254,213,111,1)";
                }
                bgColors.push(fill_color);
            });
        } catch (error) {
            console.log(error);
        }

        var tempPrLabels = [...provinces];
        var topProvData = [...values];
        var topProvColor = [...bgColors];

        var topProv = document.getElementById('area_ctxTopRegAll').getContext('2d');
        var topProvChart = new Chart(topProv, {
            // The type of chart we want to create
            type: 'horizontalBar',

            data: {
                labels: tempPrLabels,
                datasets: [{
                    label: 'Total palay produced',
                    backgroundColor: topProvColor, // COLOR 4
                    borderColor: topProvColor, // COLOR 4
                    data: topProvData
                }]
            },

            options: {
                devicePixelRatio: 3,
                layout: {
                padding: {
                        right: 75
                    }
                },
                aspectRatio: 0.55,
                scales: {
                    xAxes: [{
                        display: true,
                        ticks: {
                            userCallback: function(value, index, values) {
                                value = value.toString();
                                value = value.split(/(?=(?:...)*$)/);
                                value = value.join(',');
                                return value;
                            }
                        }
                    }],
                    yAxes: [{
                        display: true,
                        ticks: {
                            suggestedMin: 0
                        },
                        gridLines: {
                            color: "rgba(0, 0, 0, 0)"
                        }
                    }]
                },
                tooltips: false,
                legend: {
                    display: false,
                    labels: {
                        fontSize: 12
                    }
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
                        this.data.datasets.forEach(function(dataset, i) {
                            let meta = chartInstance.controller.getDatasetMeta(i);
                            meta.data.forEach(function(bar, index) {
                                let data = dataset.data[index];
                                data = parseInt(data).toLocaleString();
                                ctx.fillText(data, bar._model.x + 40, bar._model.y + 8);
                            });
                        });
                    }
                }
            }
        });

    </script>

    <!-- EST YIELD CHARTS -->

    <script>
        // var sidebarjs = new SidebarJS.SidebarElement();
        Chart.defaults.global.responsive = true;
        Chart.defaults.global.tooltips.mode = 'index';
        Chart.defaults.global.tooltips.intersect = false;
        Chart.defaults.global.defaultFontFamily = 'Poppins';
        Chart.defaults.global.defaultFontSize = 12;
        Chart.defaults.global.animation.duration = 3000;
        Chart.defaults.global.defaultFontColor = "#000000";

        // CHART 1

        var dbTotal = JSON.parse('<?php echo $ph_yield_all; ?>');
        var dbIrrigated = JSON.parse('<?php echo $ph_yield_irrigated; ?>');
        var dbRainfed = JSON.parse('<?php echo $ph_yield_rainfed; ?>');

        let estyield_years = [];
        let estyield_values_total = [];
        let estyield_values_irrig = [];
        let estyield_values_rain = [];

        try {
            dbTotal.map((item) => {
                estyield_years.push(item.year);
                estyield_values_total.push(item.value);
            });
            dbIrrigated.map((item) => {
                estyield_values_irrig.push(item.value);
            });
            dbRainfed.map((item) => {
                estyield_values_rain.push(item.value);
            });
        } catch (error) {
            console.log(error);
        }

        var yieldStack = document.getElementById('ctxYieldStack').getContext('2d');
        var tempYLabels = [...estyield_years];
        var yieldAllData = [...estyield_values_total];
        var yieldIrrigData = [...estyield_values_irrig];
        var yieldRainData = [...estyield_values_rain];
        var yieldStackChart = new Chart(yieldStack, {

            type: 'bar',

            data: {
                labels: tempYLabels,
                datasets: [{
                        label: 'Regional Average',
                        backgroundColor: '#2138B7', // COLOR 1
                        borderColor: '#2138B7', // COLOR 1
                        lineTension: 0,
                        type: 'line',
                        fill: false,
                        data: yieldAllData,
                    },
                    {
                        label: 'Irrigated Area',
                        backgroundColor: '#FE7F00', // COLOR 2
                        borderColor: '#FE7F00', // COLOR 2
                        lineTension: 0,
                        type: 'line',
                        fill: false,
                        data: yieldIrrigData
                    },
                    {
                        label: 'Non-irrigated Area',
                        backgroundColor: '#FFB043', // COLOR 3
                        borderColor: '#FFB043', // COLOR 3
                        lineTension: 0,
                        type: 'line',
                        fill: false,
                        data: yieldRainData
                    }
                ]
            },

            options: {
                devicePixelRatio: 3,
                aspectRatio: 2.5,
                scales: {
                    xAxes: [{
                        display: true,
                        gridLines: {
                            color: "rgba(0, 0, 0, 0)"
                        }
                    }],
                    yAxes: [{
                        display: true,
                        ticks: {
                            suggestedMin: 1,
                            suggestedMax: 5.5
                        }
                    }]
                },
                legend: {
                    position: 'top',
                    onClick: (e) => e.stopPropagation(),
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
                        ctx.fillStyle = '#000000';

                        this.data.datasets.forEach(function(dataset, i) {
                            if (dataset.label == 'Irrigated Area') {
                                let meta = chartInstance.controller.getDatasetMeta(i);
                                meta.data.forEach(function(bar, index) {
                                    let data = dataset.data[index];
                                    ctx.fillText(data, bar._model.x + 0, bar._model.y + -5);
                                });
                            } else {
                                let meta = chartInstance.controller.getDatasetMeta(i);
                                meta.data.forEach(function(bar, index) {
                                    let data = dataset.data[index];
                                    ctx.fillText(data, bar._model.x + 0, bar._model.y + 17);
                                });
                            }
                        });
                    }
                }
            }
        });

        // DEFAULT FOR CHART 2
        
        var scalesC = [{
                "range": 0,
                "minValue": "0.00",
                "maxValue": "4.15"
            },
            {
                "range": 1,
                "minValue": "4.15",
                "maxValue": "20.00"
            }
        ];

        // CHART 2 - CHART AND MAP ALL
        
        var dbProvsMap = JSON.parse('<?php echo $provincial_yield_geo; ?>');

        let estyield_mapData = [];

        for (i = 0; i < dbProvsMap.length; i++) {
            var gc = dbProvsMap[i].map_ID;
            var value = parseFloat(dbProvsMap[i].value);

            var fill_color = "";
            if (value > scalesC[1].minValue) {
                fill_color = "secoQ";
            } else if (value > scalesC[0].minValue) {
                fill_color = "firsQ";
            }

            estyield_mapData[gc] = {
                Location_name: dbProvsMap[i].location_name,
                Year: dbProvsMap[i].year,
                Value: parseFloat(dbProvsMap[i].value).toLocaleString(),
                fillKey: fill_color
            };
        }

        var map = new Datamap({
            element: document.getElementById('phl-reg-all-yield'),
            geographyConfig: {
                popupOnHover: true,
                highlightOnHover: true,
                dataUrl: '<?php echo base_url(); ?>js/phl.topo.json',
                borderColor: '#000000',
                highlightFillColor: '#92cddc',
                highlightBorderColor: 'rgba(37, 42, 45, 0.8)',
                popupTemplate: function(geography, data) {
                    return '<div class="hoverinfo"><strong>' + geography.properties.name +
                        ': ' + numberWithCommas(data.Value) + ' mt/ha (' + data.Year + ')</strong></div>';
                },
            },
            scope: 'phl',
            fills: {
                firsQ: 'rgba(42,140,184,0.8)',
                secoQ: 'rgba(41,107,54,0.8)',
                thirQ: 'rgba(15,40,184,0.8)',
                fourQ: 'rgba(24,132,184,0.8)',
                defaultFill: 'rgba(166,216,225,1)'
            },
            data: estyield_mapData,
            setProjection: function(element) {
                var projection = d3.geo.mercator()
                    .center([121.7740, 12.8797])
                    .scale(2800)
                    .translate([element.offsetWidth / 2, element.offsetHeight / 2]);

                var path = d3.geo.path().projection(projection);
                return {
                    path: path,
                    projection: projection
                };
            }
        });

        var dbProvs = JSON.parse('<?php echo $provincial_yield_all; ?>');

        let estyield_provinces = [];
        let estyield_values = [];
        let estyield_bgColors = [];

        try {
            dbProvs.map((item) => {
                estyield_provinces.push(item.location_name);
                estyield_values.push(item.value);
                var val = parseFloat(item.value);
                if (val > scalesC[1].minValue) {
                    fill_color = "rgba(41,107,54,1)";
                } else if (val > scalesC[0].minValue) {
                    fill_color = "rgba(42,140,184,1)";
                }
                estyield_bgColors.push(fill_color);
            });
        } catch (error) {
            console.log(error);
        }

        var tempPrLabels = [...estyield_provinces];
        var topProvData = [...estyield_values];
        var topProvColor = [...estyield_bgColors];

        var topProv = document.getElementById('yield_ctxTopRegAll').getContext('2d');
        var topProvChart = new Chart(topProv, {
            // The type of chart we want to create
            type: 'horizontalBar',

            data: {
                labels: tempPrLabels,
                datasets: [{
                    label: 'Total palay produced',
                    backgroundColor: topProvColor, // COLOR 4
                    borderColor: topProvColor, // COLOR 4
                    data: topProvData
                }]
            },

            options: {
                devicePixelRatio: 3,
                layout: {
                padding: {
                        right: 75
                    }
                },
                aspectRatio: 0.55,
                scales: {
                    xAxes: [{
                        display: true,
                        ticks: {
                            userCallback: function(value, index, values) {
                                value = value.toString();
                                value = value.split(/(?=(?:...)*$)/);
                                value = value.join(',');
                                return value;
                            }
                        }
                    }],
                    yAxes: [{
                        display: true,
                        ticks: {
                            suggestedMin: 0
                        },
                        gridLines: {
                            color: "rgba(0, 0, 0, 0)"
                        }
                    }]
                },
                tooltips: false,
                legend: {
                    display: false,
                    labels: {
                        fontSize: 12
                    }
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
                        this.data.datasets.forEach(function(dataset, i) {
                            let meta = chartInstance.controller.getDatasetMeta(i);
                            meta.data.forEach(function(bar, index) {
                                let data = dataset.data[index];
                                data = parseFloat(data).toLocaleString();
                                ctx.fillText(data, bar._model.x + 20, bar._model.y + 8);
                            });
                        });
                    }
                }
            }
        });
    </script>

    <!-- VALUATIONS CHARTS -->

    <script>
        // var sidebarjs = new SidebarJS.SidebarElement();
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

        var dbPalay = JSON.parse('<?php echo $palay_valuation_yearly; ?>');
        var dbAgri = JSON.parse('<?php echo $agri_valuation_yearly; ?>');

        let valuation_years = [];
        let values_palay = [];
        let values_agri = [];

        try {
            dbPalay.map((item) => {
                valuation_years.push(item.year);
                values_palay.push(item.value);
            });
            dbAgri.map((item) => {
                values_agri.push(item.value);
            });
        } catch (error) {
            console.log(error);
        }

        var agriSector = document.getElementById('ctxAgriSector').getContext('2d');
        var tempAgriLabels = [...valuation_years];
        var agriSecData = [...values_agri];
        var riceSecData = [...values_palay];
        var agriSectorChart = new Chart(agriSector, {
            // The type of chart we want to create
            type: 'line',

            // The data for our dataset
            data: {
                labels: tempAgriLabels,
                datasets: [{
                        label: 'Rice Production',
                        backgroundColor: '#2138B7', // COLOR 1
                        borderColor: '#2138B7', // COLOR 1
                        lineTension: 0,
                        data: riceSecData
                    },
                    {
                        label: 'Agricultural Production',
                        backgroundColor: '#007FFE', // COLOR 2
                        borderColor: '#007FFE', // COLOR 2
                        lineTension: 0,
                        data: agriSecData
                    },
                ]
            },

            // Configuration options go here
            options: {
                devicePixelRatio: 3,
                aspectRatio: 2.5,
                elements: {
                    point: {
                        radius: 2
                    }
                },
                scales: {
                    xAxes: [{
                        display: true,
                        gridLines: {
                            color: "rgba(0, 0, 0, 0)"
                        }
                    }],
                    yAxes: [{
                        display: true,
                        ticks: {
                            suggestedMin: 0,
                            callback: function(value) {
                                return value.toLocaleString(); 
                            }
                        }
                    }]
                },
                legend: {
                    position: 'top'
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

        // CHART 2

        var dbAgriSh = JSON.parse('<?php echo $agri_valuation_share; ?>');
        var dbTotalSh = JSON.parse('<?php echo $total_valuation_share; ?>');

        let shares_years = [];
        let shares_agri = [];
        let shares_total = [];

        try {
            dbAgriSh.map((item) => {
                shares_years.push(item.year);
                shares_agri.push(item.value);
            });
            dbTotalSh.map((item) => {
                shares_total.push(item.value);
            });
        } catch (error) {
            console.log(error);
        }

        var agriShare = document.getElementById('valuation_ctxAgriShare').getContext('2d');
        var tempShareLabels = [...shares_years];
        var agriShareData = [...shares_agri];
        var totalShareData = [...shares_total];
        var agriShareChart = new Chart(agriShare, {
            // The type of chart we want to create
            type: 'bar',

            // The data for our dataset
            data: {
                labels: tempShareLabels,
                datasets: [{
                    label: 'Agriculture value share',
                    backgroundColor: '#007FFE', // COLOR 2
                    borderColor: '#007FFE', // COLOR 2
                    data: agriShareData
                }]
            },

            // Configuration options go here
            options: {
                devicePixelRatio: 3,
                aspectRatio: 2.5,
                elements: {
                    point: {
                        radius: 2
                    }
                },
                scales: {
                    xAxes: [{
                        display: true,
                        gridLines: {
                            color: "rgba(0, 0, 0, 0)"
                        }
                    }],
                    yAxes: [{
                        display: true,
                        ticks: {
                            suggestedMin: 0,
                            suggestedMax: 60
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
                            data = parseInt(data).toLocaleString() + '%';
                            ctx.fillText(data, bar._model.x + 0 , bar._model.y + 20);
                            });
                        });
                      }
                  }
            }
        });
        
        var Org = JSON.parse('<?php echo $latest_palay_agri_share['value']; ?>');
        var NonOrg = JSON.parse('<?php echo $latest_nonpalay_agri_share; ?>');

        // CHART 1

        var ctx = document.getElementById("ctxPercentShare");
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                datasets: [{
                    data: [Org, NonOrg],
                    backgroundColor: [
                        '#2138b7', // COLOR 1
                        '#f8f8f8' // COLOR 2
                    ],
                    borderColor: [
                        '#2138b7', // COLOR 1
                        '#f8f8f8' // COLOR 2
                    ]
                }]
            },
            options: {
                devicePixelRatio: 3,
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
                        color: '#2138b7',
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

    <!-- YIELD COST CHARTS -->

    <script>
        // var sidebarjs = new SidebarJS.SidebarElement();
        Chart.defaults.global.responsive = true;
        Chart.defaults.global.tooltips.mode = 'index';
        Chart.defaults.global.tooltips.intersect = false;
        Chart.defaults.global.defaultFontFamily = 'Poppins';
        Chart.defaults.global.defaultFontSize = 12;
        Chart.defaults.global.animation.duration = 3000;
        Chart.defaults.global.defaultFontColor = "#000000";

        // Chart 1

        var dbNPK = JSON.parse('<?php echo $npk_provinces_all; ?>');

        let yieldcost_provinces = [];
        let nUse = [];
        let pUse = [];
        let kUse = [];

        try {
            dbNPK.map((item) => {
                yieldcost_provinces.push(item.location_name);
                nUse.push(item.n_value);
                pUse.push(item.p_value);
                kUse.push(item.k_value);
            });
        } catch (error) {
            console.log(error);
        }

        var npkLabels = [...yieldcost_provinces];
        var nUseData = [...nUse];
        var pUseData = [...pUse];
        var kUseData = [...kUse];

        var NPKUse = document.getElementById('ctxNPKUse').getContext('2d');

        var NPKUseChart = new Chart(NPKUse, {

            type: 'bar',

            data: {
                labels: npkLabels,
                datasets: [{
                        label: 'Nitrogen (N)',
                        backgroundColor: '#2037B4', // COLOR 1
                        borderColor: '#2037B4', // COLOR 1
                        data: nUseData
                    },
                    {
                        label: 'Phosphorus (P)',
                        backgroundColor: '#FF6800', // COLOR 2
                        borderColor: '#FF6800', // COLOR 2
                        data: pUseData
                    },
                    {
                        label: 'Potassium (K)',
                        backgroundColor: '#FFC900', // COLOR 2
                        borderColor: '#FFC900', // COLOR 2
                        data: kUseData
                    }
                ]
            },

            options: {
                devicePixelRatio: 3,
                aspectRatio: 1.75,
                scales: {
                    xAxes: [{
                        stacked: true,
                        display: true,
                        barPercentage: 0.4,
                        gridLines: {
                            color: "rgba(0, 0, 0, 0)"
                        }
                    }],
                    yAxes: [{
                        stacked: true,
                        display: true
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
                        this.data.datasets.forEach(function(dataset, i) {
                            let meta = chartInstance.controller.getDatasetMeta(i);
                            meta.data.forEach(function(bar, index) {
                                let data = dataset.data[index];
                                ctx.fillStyle = '#ffffff';
                                data = parseInt(data).toLocaleString();
                                ctx.fillText(data, bar._model.x + 0, bar._model.y + 20);
                            });
                        });
                    }
                }
            }
        });

        // Chart 1

        var dbCostItems = JSON.parse('<?php echo $yearly_ph_cost_breakdown; ?>');

        let yearsPH = [];
        let materialInputsPH = [];
        let hiredLaborPH = [];
        let OFELaborPH = [];
        let machinePH = [];
        let irrigationPH = [];
        let landRentPH = [];
        let interestCapitalPH = [];
        let otherInputsPH = [];

        try {
            dbCostItems.map((item) => {
                yearsPH.push(item.year);
                materialInputsPH.push(item.materialInputs);
                hiredLaborPH.push(item.hiredLabor);
                OFELaborPH.push(item.OFELabor);
                machinePH.push(item.machine);
                irrigationPH.push(item.irrigation);
                landRentPH.push(item.landRent);
                interestCapitalPH.push(item.interestCapital);
                otherInputsPH.push(item.otherInputs);
            });
        } catch (error) {
            console.log(error);
        }

        var costLabels = [...yearsPH];
        var materialInputsPHData = [...materialInputsPH];
        var hiredLaborPHData = [...hiredLaborPH];
        var OFELaborPHData = [...OFELaborPH];
        var machinePHData = [...machinePH];
        var irrigationPHData = [...irrigationPH];
        var landRentPHData = [...landRentPH];
        var interestCapitalPHData = [...interestCapitalPH];
        var otherInputsPHData = [...otherInputsPH];

        var BreakdownPh = document.getElementById('ctxBreakdownPh').getContext('2d');

        var ctxBreakdownPhChart = new Chart(BreakdownPh, {

            type: 'bar',

            data: {
                labels: costLabels,
                datasets: [{
                        label: 'Material Inputs',
                        backgroundColor: '#2037B4', // COLOR 1
                        borderColor: '#2037B4', // COLOR 1
                        data: materialInputsPHData
                    },
                    {
                        label: 'Hired Labor',
                        backgroundColor: '#FF6800', // COLOR 2
                        borderColor: '#FF6800', // COLOR 2
                        data: hiredLaborPHData
                    },
                    {
                        label: 'Operator, Family, and Exchange Labor',
                        backgroundColor: '#939393', // COLOR 2
                        borderColor: '#939393', // COLOR 2
                        data: OFELaborPHData
                    },
                    {
                        label: 'Animal, Machine, Fuel and Oil',
                        backgroundColor: '#FFC900', // COLOR 2
                        borderColor: '#FFC900', // COLOR 2
                        data: machinePHData
                    },
                    {
                        label: 'Irrigation',
                        backgroundColor: '#205ECD', // COLOR 2
                        borderColor: '#205ECD', // COLOR 2
                        data: irrigationPHData
                    },
                    {
                        label: 'Machine and Land Rent',
                        backgroundColor: '#60B328', // COLOR 2
                        borderColor: '#60B328', // COLOR 2
                        data: landRentPHData
                    },
                    {
                        label: 'Interest on Capital',
                        backgroundColor: '#08549B', // COLOR 2
                        borderColor: '#08549B', // COLOR 2
                        data: interestCapitalPHData
                    },
                    {
                        label: 'Others',
                        backgroundColor: '#AD3A00', // COLOR 3
                        borderColor: '#AD3A00', // COLOR 3
                        data: otherInputsPHData
                    }
                ]
            },

            options: {
                devicePixelRatio: 3,
                aspectRatio: 2,
                scales: {
                    xAxes: [{
                        stacked: true,
                        display: true,
                        barPercentage: 0.6,
                        gridLines: {
                            color: "rgba(0, 0, 0, 0)"
                        }
                    }],
                    yAxes: [{
                        stacked: true,
                        display: true,
                        ticks: {
                            max: 100
                        }
                    }]
                },
                legend: {
                    position: 'top'
                },
                plugins: {
                    labels: false
                }
            }
        });


        // // CHART 2

        // var yieldCost = document.getElementById('ctxYieldCost').getContext('2d');

        // var dbYCostNames = JSON.parse('<?php echo $yieldcost_names; ?>');

        // let yieldcost_names = [];

        // try {
        //     dbYCostNames.map((item) => {
        //         yieldcost_names.push(item.location_name);
        //     });
        // } catch (error) {
        //     console.log(error);
        // }

        // var tempCategLabels = [...yieldcost_names];

        // var yieldCostData = <?php print_r($yieldcost); ?>;

        // var yieldCostScat = new Chart(yieldCost, {
        //     // The type of chart we want to create
        //     type: 'scatter',

        //     // The data for our dataset
        //     data: {
        //         labels: tempCategLabels,
        //         datasets: [{
        //             data: yieldCostData,
        //             backgroundColor: '#2037B2',
        //             borderColor: '#2037B2',
        //             pointRadius: 3,
        //             pointHoverRadius: 3
        //         }]
        //     },
        //     // Configuration options go here
        //     options: {
        //         aspectRatio: 2,
        //         tooltips: {
        //             callbacks: {
        //                 label: function(tooltipItem, data) {
        //                     var label = data.labels[tooltipItem.index];
        //                     return label + ': (Yield: ' + tooltipItem.xLabel + ' mt/ha, Cost/kg: PhP ' + tooltipItem.yLabel + ')';
        //                 }
        //             }
        //         },
        //         legend: {
        //             display: false
        //         },
        //         scales: {
        //             yAxes: [{
        //                 ticks: {
        //                     min: 10
        //                 }
        //             }],
        //             xAxes: [{
        //                 ticks: {
        //                     min: 1,
        //                     max: 7
        //                 }
        //             }]
        //         },
        //         annotation: {
        //             annotations: [{
        //                 id: 'hline',
        //                 type: 'line',
        //                 mode: 'horizontal',
        //                 scaleID: 'y-axis-1',
        //                 value: 13.04,
        //                 borderColor: 'tomato',
        //                 borderWidth: 1,
        //                 fontName: 'Poppins',
        //                 label: {
        //                     content: 'PhP 13.04/kg',
        //                     position: 'right',
        //                     enabled: true
        //                 }
        //             }, {
        //                 id: 'vline',
        //                 type: 'line',
        //                 mode: 'vertical',
        //                 scaleID: 'x-axis-1',
        //                 value: 4.12,
        //                 borderColor: 'tomato',
        //                 borderWidth: 1,
        //                 fontName: 'Poppins',
        //                 label: {
        //                     content: '4.12 mt/ha',
        //                     position: 'bottom',
        //                     enabled: true
        //                 }
        //             }],
        //             drawTime: "afterDraw" // (default)
        //         }
        //     }
        // });
    </script>

    <!-- INCOMES CHARTS -->

    <script>
        // var sidebarjs = new SidebarJS.SidebarElement();
        Chart.defaults.global.responsive = true;
        Chart.defaults.global.tooltips.mode = 'index';
        Chart.defaults.global.tooltips.intersect = false;
        Chart.defaults.global.defaultFontFamily = 'Poppins';
        Chart.defaults.global.defaultFontSize = 12;
        Chart.defaults.global.animation.duration = 3000;
        Chart.defaults.global.defaultFontColor = "#000000";
        
        var dbNetReturns = JSON.parse('<?php echo $yearly_net_returns; ?>');
                    
        let years_net = [];
        let values_net = [];

        try {
            dbNetReturns.map((item) => {
            years_net.push(item.year);
            values_net.push(item.value);
            });
        } catch (error) {
            console.log(error);
        }
        
        var dbGrossReturns = JSON.parse('<?php echo $yearly_gross_returns; ?>');
                    
        let years_gross = [];
        let values_gross = [];

        try {
            dbGrossReturns.map((item) => {
            years_gross.push(item.year);
            values_gross.push(item.value);
            });
        } catch (error) {
            console.log(error);
        }
        
        var dbCosts = JSON.parse('<?php echo $yearly_total_costs; ?>');
                    
        let years_costs = [];
        let values_costs = [];

        try {
            dbCosts.map((item) => {
            years_costs.push(item.year);
            values_costs.push(item.value);
            });
        } catch (error) {
            console.log(error);
        }
        
        var grossReturns = document.getElementById('ctxGrossReturns').getContext('2d');
        var tempGrossReturns = [...years_gross];
        var grossNetData = [...values_net];
        var grossReturnsData = [...values_gross];
        var costsData = [...values_costs];
        var grossReturnsChart = new Chart(grossReturns, {
        // The type of chart we want to create
        type: 'bar',

        // The data for our dataset
        data: {
            labels: tempGrossReturns,
            datasets: [{
                label: 'Net Returns',
                backgroundColor: '#2138B7',   // COLOR 2
                borderColor: '#2138B7',      // COLOR 2
                type: 'line',
                lineTension: 0,
                fill: false,
                data: grossNetData
            },{
                label: 'Gross Returns',
                backgroundColor: '#FE7F00',   // COLOR 1
                borderColor: '#FE7F00',       // COLOR 1                    
                fill: false,
                data: grossReturnsData
            },{
                label: 'Total Cost',
                backgroundColor: '#A6CEE3',   // COLOR 2
                borderColor: '#A6CEE3',      // COLOR 2
                fill: false,
                data: costsData
            }]
        },

        // Configuration options go here
        options: {
                devicePixelRatio: 3,
                aspectRatio: 2,
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
                            suggestedMax: 90000,
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
                    position: 'top'
                },
                plugins: {
                    labels: false
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
    </script>

    <!-- PRICES CHARTS -->

    <script>
        // var sidebarjs = new SidebarJS.SidebarElement();
        Chart.defaults.global.responsive = true;
        Chart.defaults.global.tooltips.mode = 'index';
        Chart.defaults.global.tooltips.intersect = false;
        Chart.defaults.global.defaultFontFamily = 'Poppins';
        Chart.defaults.global.defaultFontSize = 12;
        Chart.defaults.global.animation.duration = 3000;
        Chart.defaults.global.defaultFontColor = "#000000";

        // CHART 1

        var dbFarmPrices = JSON.parse('<?php echo $farmgate_prices; ?>');
        var dbFarmPricesR = JSON.parse('<?php echo $farmgate_prices_real; ?>');

        let prices_years = [];
        let values_n_prices = [];
        let values_r_prices = [];

        try {
            dbFarmPrices.map((item) => {
                prices_years.push(item.year);
                values_n_prices.push(item.value);
            });
            dbFarmPricesR.map((item) => {
                values_r_prices.push(item.value);
            });
        } catch (error) {
            console.log(error);
        }

        var farmPrices = document.getElementById('ctxFarmPrices').getContext('2d');
        var tempFarmLabels = [...prices_years];
        var farmPriceData = [...values_n_prices];
        var farmPricesChart = new Chart(farmPrices, {
            // The type of chart we want to create
            type: 'line',

            // The data for our dataset
            data: {
                labels: tempFarmLabels,
                datasets: [{
                    label: 'Nominal price',
                    backgroundColor: '#A6CEE3', // COLOR 1
                    borderColor: '#A6CEE3', // COLOR 1
                    lineTension: 0,
                    fill: false,
                    data: farmPriceData
                }]
            },

            // Configuration options go here
            options: {
                devicePixelRatio: 3,
                aspectRatio: 2.2,
                elements: {
                    point: {
                        radius: 2
                    }
                },
                scales: {
                    xAxes: [{
                        display: true,
                        gridLines: {
                            color: "rgba(0, 0, 0, 0)"
                        }
                    }],
                    yAxes: [{
                        display: true,
                        ticks: {
                            suggestedMin: 0,
                        }
                    }]
                },
                tooltips: false,
                legend: {
                    display: false
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
                        this.data.datasets.forEach(function(dataset, i) {
                            let meta = chartInstance.controller.getDatasetMeta(i);
                            meta.data.forEach(function(bar, index) {
                                let data = dataset.data[index];
                                ctx.fillStyle = '#000000';
                                data = parseInt(data).toLocaleString();
                                ctx.fillText(data, bar._model.x + 0, bar._model.y + -10);
                            });
                        });
                    }
                }
            }
        });

        // CHART 2

        var dbWPrice = JSON.parse('<?php echo $wholesale_prices; ?>');
        var dbWPricesS = JSON.parse('<?php echo $wholesale_sp_prices; ?>');

        let years_w = [];
        let values_rm_prices = [];
        let values_w_prices = [];

        try {
            dbWPrice.map((item) => {
                years_w.push(item.year);
                values_rm_prices.push(item.value);
            });
            dbWPricesS.map((item) => {
                values_w_prices.push(item.value);
            });
        } catch (error) {
            console.log(error);
        }

        var wholesalePrices = document.getElementById('ctxWholesalePrices').getContext('2d');
        var tempWLabels = [...years_w];
        var wPriceData = [...values_rm_prices];
        var wPriceSp = [...values_w_prices];
        var wholesalePricesChart = new Chart(wholesalePrices, {
            // The type of chart we want to create
            type: 'line',

            // The data for our dataset
            data: {
                labels: tempWLabels,
                datasets: [{
                    label: 'Regular-milled',
                    backgroundColor: '#007FFE', // COLOR 1
                    borderColor: '#007FFE', // COLOR 1
                    lineTension: 0,
                    fill: false,
                    data: wPriceData
                }, {
                    label: 'Well-milled',
                    backgroundColor: '#A6CEE3', // COLOR 2
                    borderColor: '#A6CEE3', // COLOR 2
                    lineTension: 0,
                    fill: false,
                    data: wPriceSp
                }]
            },

            // Configuration options go here
            options: {
                devicePixelRatio: 3,
                aspectRatio: 2.2,
                elements: {
                    point: {
                        radius: 2
                    }
                },
                scales: {
                    xAxes: [{
                        display: true,
                        gridLines: {
                            color: "rgba(0, 0, 0, 0)"
                        }
                    }],
                    yAxes: [{
                        display: true,
                        ticks: {
                            suggestedMin: 0,
                        }
                    }]
                },
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
                        this.data.datasets.forEach(function(dataset, i) {
                            let meta = chartInstance.controller.getDatasetMeta(i);
                            meta.data.forEach(function(bar, index) {
                                let data = dataset.data[index];
                                ctx.fillStyle = '#000000';
                                data = parseInt(data).toLocaleString();
                                ctx.fillText(data, bar._model.x + 0, bar._model.y + 0);
                            });
                        });
                    }
                }
            }
        });

        // CHART 3

        var dbRTPrice = JSON.parse('<?php echo $retail_prices; ?>');
        var dbRTPricesS = JSON.parse('<?php echo $retail_sp_prices; ?>');

        let years_r = [];
        let values_rr_prices = [];
        let values_wr_prices = [];

        try {
            dbRTPrice.map((item) => {
                years_r.push(item.year);
                values_rr_prices.push(item.value);
            });
            dbRTPricesS.map((item) => {
                values_wr_prices.push(item.value);
            });
        } catch (error) {
            console.log(error);
        }

        var retailPrices = document.getElementById('ctxRetailPrices').getContext('2d');
        var tempRLabels = [...years_r];
        var rPriceData = [...values_rr_prices];
        var rPriceSp = [...values_wr_prices];
        var retailPricesChart = new Chart(retailPrices, {
            // The type of chart we want to create
            type: 'line',

            // The data for our dataset
            data: {
                labels: tempWLabels,
                datasets: [{
                    label: 'Regular-milled',
                    backgroundColor: '#007FFE', // COLOR 1
                    borderColor: '#007FFE', // COLOR 1
                    lineTension: 0,
                    fill: false,
                    data: rPriceData
                }, {
                    label: 'Well-milled',
                    backgroundColor: '#A6CEE3', // COLOR 2
                    borderColor: '#A6CEE3', // COLOR 2
                    lineTension: 0,
                    fill: false,
                    data: rPriceSp
                }]
            },

            // Configuration options go here
            options: {
                devicePixelRatio: 3,
                aspectRatio: 2.2,
                elements: {
                    point: {
                        radius: 2
                    }
                },
                scales: {
                    xAxes: [{
                        display: true,
                        gridLines: {
                            color: "rgba(0, 0, 0, 0)"
                        }
                    }],
                    yAxes: [{
                        display: true,
                        ticks: {
                            suggestedMin: 0,
                        }
                    }]
                },
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
                        this.data.datasets.forEach(function(dataset, i) {
                            let meta = chartInstance.controller.getDatasetMeta(i);
                            meta.data.forEach(function(bar, index) {
                                let data = dataset.data[index];
                                ctx.fillStyle = '#000000';
                                data = parseInt(data).toLocaleString();
                                ctx.fillText(data, bar._model.x + 0, bar._model.y + 0);
                            });
                        });
                    }
                }
            }
        });
    </script>
</body>

</html>
