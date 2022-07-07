<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Rice Profitability Indicator</title>
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
        <nav class="navbar navbar-expand-lg navbar-dark">
          <a class="btn btn-warning mr-2 text-white" href="<?php echo base_url(); ?>main/province/<?php echo $id; ?>" role="button"><i class="bi bi-caret-left"></i> Back to Main</a>
        </nav>
        
        <!-- Header --->
        <div class="jumbotron text-center">
            <div class="jumbotron-content">
                <h2>State of the Rice Sector in <?php echo $gross_returns['location_name'];?></h2>
                <h1>Rice Profitability Indicator</h1>
                <p class="lead"><i>How much do our farmers earn per season?</i> Find out their net income through the years<br/> derived from the gross return minus the total cost of production.</p>
            </div>
        </div>
        
        <!-- Body -->
        <div class="sublevel">
            <div class="row">
                <div class="col">
                    <div class="card-deck mb-2 text-center">
                        <div class="card primary mb-4 bg-alternate">
                          <div class="card-body">
                            <h5 class="card-title pb-2">Gross Returns</h5>
                            <h2 class="card-text font-weight-bold">PhP <?php echo $gross_returns['value']; ?><i class="<?php echo $gross_caret; ?>"></i></h2>
                            <div class="card-note w-100 mx-auto rounded-pill bg-primary"><p class="text-white">per hectare per cropping season</p></div>
                            <p class="mb-0">YIELD (kg) X FARMGATE PRICE (pesos/kg)</p>
                          </div>
                        </div>
                        <div class="card primary mb-4 bg-primary text-white">
                          <div class="card-body">
                            <h5 class="card-title pb-2">Farmer's Net Returns (2019)</h5>
                            <h2 class="card-text font-weight-bold">PhP <?php echo $net_returns['value']; ?><i class="<?php echo $net_caret; ?>"></i></h2>
                            <div class="card-note w-100 mx-auto rounded-pill bg-warning"><p class="text-white">per hectare per cropping season</p></div>
                            <p class="mb-0">Gross returns - Production Costs</p>
                          </div>
                        </div>
                        <div class="card primary mb-4 bg-alternate">
                          <div class="card-body">
                            <h5 class="card-title pb-2">Total Cost</h5>
                            <h2 class="card-text font-weight-bold">PhP <?php echo $total_costs['value']; ?><i class="<?php echo $cost_caret; ?>"></i></h2>
                            <div class="card-note w-100 mx-auto rounded-pill bg-primary"><p class="text-white">per hectare per cropping season</p></div>
                            <p class="mb-0">Average Costs in <?php echo $region_details['location_name'];?></p>
                          </div>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="row">
                <div class="col">
                    <div class="card mb-4">
                      <div class="card-header text-left">
                        <h5 class="my-0 pt-2 pb-2">Average gross return per hectare of rice production in <?php echo $gross_returns['location_name'];?> (2000-2019)</h5>
                        <p class="my-0 font-weight-normal text-muted">in Philippine Peso (PhP) (PSA, 2020)</p>
                      </div>
                      <div class="card-body">
                           <div><canvas id="ctxGrossReturns"></canvas></div>
                      </div>
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
            Chart.defaults.global.responsive = true;
            Chart.defaults.global.tooltips.mode = 'index';
            Chart.defaults.global.tooltips.intersect = false;
            Chart.defaults.global.defaultFontFamily = 'Poppins';
            Chart.defaults.global.defaultFontSize = 13;
            Chart.defaults.global.animation.duration = 3000;
            
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
                    label: 'Gross Returns',
                    backgroundColor: '#FE7F00',   // COLOR 1
                    borderColor: '#FE7F00',       // COLOR 1
                    type: 'line',
                    lineTension: 0,
                    fill: false,
                    data: grossReturnsData
                },{
                    label: 'Total Cost',
                    backgroundColor: '#A6CEE3',   // COLOR 2
                    borderColor: '#A6CEE3',      // COLOR 2
                    fill: false,
                    data: costsData
                },{
                    label: 'Net Returns',
                    backgroundColor: '#2138B7',   // COLOR 2
                    borderColor: '#2138B7',      // COLOR 2
                    fill: false,
                    data: grossNetData
                }]
            },

            // Configuration options go here
            options: {
                    aspectRatio: 2,
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
                                suggestedMax: 90000
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
    </body>
</html>