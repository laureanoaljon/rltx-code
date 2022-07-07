<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Cropping Calendar</title>
        <meta name="description" content="Production Charts">
        <?php 
            echo link_tag('css/bootstrap-reboot.min.css');
            echo link_tag('css/bootstrap.min.css');
            echo link_tag('css/bootstrap-grid.min.css');
            echo link_tag('css/bootstrap-icons.css');
            echo link_tag('css/sidebarjs.min.css');
            echo link_tag('css/styles.css');   
        ?>
    </head>
    
    <body>
        	<div class="container-fluid">
        <div class="row">
             <div id="sidebarView" sidebarjs>
                <div class="content">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="btn btn-warning mr-2 text-white" href="<?php echo base_url(); ?>" role="button"><i class="bi bi-tags-fill"></i> Industry</a>
                         <a class="btn btn-warning mr-2 text-white" href="<?php echo base_url(); ?>profilemain" role="button"><i class="bi bi-person-fill"></i> Farmer</a>
                        <a class="btn btn-warning mr-2 text-white" href="<?php echo base_url(); ?>farmpractices" role="button"><i class="bi bi-info-square"></i> Practices</a>
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
          <a class="btn btn-warning mr-2 text-white" href="<?php echo base_url(); ?>farmpractices/province/<?php echo $id; ?>" role="button"><i class="bi bi-caret-left"></i> Back to Main</a>
        </nav>
        
        <!-- Header --->
        <div class="jumbotron text-center">
            <div class="jumbotron-content">
                <h2>Rice Farming Practices in <?php echo $plt1_all['location_name']?></h2>
                <h1>Cropping Calendar</h1>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor<br/>incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>
        
        <!-- Body -->
        <div class="sublevel">
            <div class="row">
                <div class="col">
                    <div class="card-deck mb-2 text-center">
                        <div class="card primary mb-2 bg-warning text-white">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-center">Major Planting and Harvesting Month for Dry Season</h5>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-6 border-right">
                                        <h1 class="card-text font-weight-bold"><?php echo substr($plt1_all['month'], 0, 3); ?></h1>
                                        <div class="card-note w-75 mx-auto rounded-pill bg-primary"><p class="text-white">Planting Month</p></div>
                                    </div>
                                    <div class="col-6">
                                        <h1 class="card-text font-weight-bold"><?php echo substr($hlt1_all['month'], 0, 3); ?></h1>
                                        <div class="card-note w-75 mx-auto rounded-pill bg-primary"><p class="text-white">Harvesting Month</p></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card primary mb-2 bg-warning text-white">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-center">Major Planting and Harvesting Month for Wet Season</h5>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-6 border-right">
                                        <h1 class="card-text font-weight-bold"><?php echo substr($plt3_all['month'], 0, 3); ?></h1>
                                        <div class="card-note w-75 mx-auto rounded-pill bg-primary"><p class="text-white">Planting Month</p></div>
                                    </div>
                                    <div class="col-6">
                                        <h1 class="card-text font-weight-bold"><?php echo substr($hlt3_all['month'], 0, 3); ?></h1>
                                        <div class="card-note w-75 mx-auto rounded-pill bg-primary"><p class="text-white">Harvesting Month</p></div>
                                    </div>
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
                            <h5 class="my-0 pt-2 pb-2">Cropping Schedule, All Months, Percentage (First, Second and Third Crop), All Ecosystems, in <?php echo $plt1_all['location_name']?> (2016)</h5>
                            <p class="my-0 font-weight-normal text-muted">in percent (RBFHS, PhilRice-SED, 2019)</p>
                        </div>
                        <div class="card-body">
                            <table class="table table-hover">
                              <thead>
                                <tr>
                                  <th class="align-middle" scope="col" rowspan="2">Month</th>
                                  <th class="text-center" scope="col" colspan="2">First Crop</th>
                                  <th class="text-center" scope="col" colspan="2">Second Crop</th>
                                  <th class="text-center" scope="col" colspan="2">Third Crop</th>
                                </tr>
                                <tr>
                                  <th scope="col text-center">Planting</th>
                                  <th scope="col text-center">Harvesting</th>
                                  <th scope="col text-center">Planting</th>
                                  <th scope="col text-center">Harvesting</th>
                                  <th scope="col text-center">Planting</th>
                                  <th scope="col text-center">Harvesting</th>
                                </tr>
                              </thead>
                              <tbody>
                                  <?php
                                    for ($i = 0; $i < count($plt1_yearly); $i++) {                                    
                                            echo "<tr>";
                                            echo "<td>" . $plt1_yearly[$i]['month'] . "</td>";
                                            echo '<td>'. number_format($plt1_yearly[$i]['value']) .'</td>';
                                            echo '<td>'. number_format($hlt1_yearly[$i]['value']) .'</td>';
                                            echo '<td>'. number_format($plt2_yearly[$i]['value']) .'</td>';
                                            echo '<td>'. number_format($hlt2_yearly[$i]['value']) .'</td>';
                                            echo '<td>'. number_format($plt3_yearly[$i]['value']) .'</td>';
                                            echo '<td>'. number_format($hlt3_yearly[$i]['value']) .'</td>';
                                            echo "</tr>";
                                    }
                                    ?>
                              </tbody>
                            </table>
                        </div>
                        <div class="card-footer text-muted">Note: For the largest parcel only</div>
                    </div>
                </div>
            </div>
            
            <!-- Footer --->
            <footer class="pt-4 my-md-5 pt-md-5 border-top">
                <div class="row">
                  <div class="col-12 col-md">
                    <small class="d-block mb-3 text-muted">2021. RiceLytics Data Initative.</small>
                    <small class="text-muted">Philippine Rice Research Institute.</small>
                  </div>
                  <div class="col-6 col-md">
                    <h5>State of the Rice Sector</h5>
                    <ul class="list-unstyled text-small">
                      <li><a class="text-muted" href="#">Rice Production</a></li>
                      <li><a class="text-muted" href="#">Area Harvested</a></li>
                      <li><a class="text-muted" href="#">Yield per Hectare</a></li>
                      <li><a class="text-muted" href="#">Supply and Utilization</a></li>
                      <li><a class="text-muted" href="#">Gross Value Added</a></li>
                      <li><a class="text-muted" href="#">Farmer’s Income</a></li>
                      <li><a class="text-muted" href="#">Palay & Rice Prices</a></li>
                    </ul>
                  </div>
                  <div class="col-6 col-md">
                    <h5>Rice Farmer Characteristics</h5>
                    <ul class="list-unstyled text-small">
                      <li><a class="text-muted" href="#">Sociodemographics</a></li>
                      <li><a class="text-muted" href="#">Farm Details</a></li>
                      <li><a class="text-muted" href="#">Technology Awareness</a></li>
                    </ul>
                  </div>
                  <div class="col-6 col-md">
                    <h5>RCEF Updates</h5>
                    <ul class="list-unstyled text-small">
                      <li><a class="text-muted" href="#">Inbred Seeds</a></li>
                      <li><a class="text-muted" href="#">Machineries</a></li>
                      <li><a class="text-muted" href="#">Extension</a></li>
                      <li><a class="text-muted" href="#">Credit</a></li>
                    </ul>
                  </div>
                </div>
            </footer>
        </div>
            </main>
        </div>
    </div>

    <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/sidebarjs.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/chart.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/chartjs-plugin-labels.min.js"></script>
    <script>
        var sidebarjs = new SidebarJS.SidebarElement();
        </script>
    </body>
</html>