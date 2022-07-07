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
            <p class="lead"><i>What is the status of the rice industry in the province?</i><br/>Explore and get insights about the trend of the key performance indicators of rice production and economics.</p>
        </div>
    </div>

    <!-- Body -->
    <div class="dashboard">
        <div class="row">
                        <div class="col-4">
                            <div class="card primary mb-2 bg-primary text-center text-white">
                                <div class="card-body">
                                    <h5 class="card-title text-left"><a href="<?php echo base_url(); ?>productions/province/<?php echo $id; ?>" class="text-white stretched-link text-decoration-none card-main">Palay Production (2021)</a></h5>
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
                                    <h5 class="card-title text-left"><a href="<?php echo base_url(); ?>harvestareas/province/<?php echo $id; ?>" class="text-white stretched-link text-decoration-none card-main">Area Harvested (2021)</a></h5>
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
                                    <h5 class="card-title text-left"><a href="<?php echo base_url(); ?>estyields/province/<?php echo $id; ?>" class="text-white stretched-link text-decoration-none card-main">Yield per Hectare (2021)</a></h5>
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
            <div class="col">
                <div class="card-deck text-center mt-1">
                    <div class="card secondary text-center">
                       <div class="row pl-3 pr-3 pt-2 pb-2">
                           <div class="col border-right">
                                <div class="card-body p-2">
                                    <h6 class="card-title text-left mb-5"><a href="<?php echo base_url(); ?>prices/province/<?php echo $id; ?>" class="text-black stretched-link text-decoration-none card-sec">Dry Palay Price (2021)</a></h6>
                                    <h1 style="font-size: 60px !important" class="card-text">P <?php echo (!intval($farmgate['value']) == 0) ? $farmgate['value'] : "-"; ?><i class="<?php echo $fg_caret; ?>"></i></h1>
                                </div>
                            </div>
                            <div class="col border-right">
                                <div class="card-body p-2">
                                    <h6 class="card-title text-left"><a href="<?php echo base_url(); ?>prices/province/<?php echo $id; ?>" class="text-black stretched-link text-decoration-none card-sec">Rice Wholesale Prices (2021)</a></h6>
                                    <p>Regular-milled</p>
                                    <h1 class="card-text mb-2">P <?php echo (!intval($wholesale['value']) == 0) ? $wholesale['value'] : "-"; ?><i class="<?php echo $wg_caret; ?>"></i></h1>
                                    <p>Well-milled</p>
                                    <h1 class="card-text mb-2">P <?php echo (!intval($wholesale_sp['value']) == 0) ? $wholesale_sp['value'] : "-"; ?><i class="<?php echo $ws_caret; ?>"></i></h1>
                                </div>
                            </div>
                           <div class="col">
                                <div class="card-body p-2">
                                    <h6 class="card-title text-left"><a href="<?php echo base_url(); ?>prices/province/<?php echo $id; ?>" class="text-black stretched-link text-decoration-none card-sec">Rice Retail Prices (2021)</a></h6>
                                    <p>Regular-milled</p>
                                    <h1 class="card-text mb-2">P <?php echo (!intval($retail['value']) == 0) ? $retail['value'] : "-"; ?><i class="<?php echo $rg_caret; ?>"></i></h1>
                                    <p>Well-milled</p>
                                    <h1 class="card-text mb-2">P <?php echo (!intval($retail_sp['value']) == 0) ? $retail_sp['value'] : "-"; ?><i class="<?php echo $rs_caret; ?>"></i></h1>
                                </div>
                            </div>
                        </div>
                         <p>per kilogram</p>
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
    </script>
</body>

</html>
