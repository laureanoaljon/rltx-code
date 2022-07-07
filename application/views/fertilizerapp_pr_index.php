<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Fertilizer Type</title>
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
        <nav class="navbar navbar-expand-lg navbar-dark">
          <a class="btn btn-warning mr-2 text-white" href="<?php echo base_url(); ?>farmpractices/province/<?php echo $id; ?>" role="button"><i class="bi bi-caret-left"></i> Back to Main</a>
        </nav>
        
        <!-- Header --->
        <div id="fertuse" class="jumbotron text-center">
            <div class="jumbotron-content">
                <h2>Rice Farming Practices in <?php echo $fert['location_name'];?></h2>
                <h1>Fertilizer Type</h1>
            </div>
        </div>
        
        <!-- Body -->
        <div class="sublevel ==">
            <div class="row">
                <div class="col">
                    <div class="card mb-4">
                          <div class="card-header text-left">
<a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a>
                            <h5 class="my-0 pt-2 pb-2">Types of fertilizer applied (2017 DS)</h5>
                            <p class="my-0 font-weight-normal text-muted">in percent (RBFHS, PhilRice-SED, 2019)</p>
                          </div>
                          <div class="card-body">
                               <div><canvas id="ctxChart1"></canvas></div>
                          </div>
                        <div class="card-footer text-muted">
	Data Source: <a href="https://palaystat.philrice.gov.ph/profile/retrieve/table/25" target="_blank">Distribution of farmers (%) by type of fertilizer - PalayStat System</a>
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
                    
            var dbpestAll = JSON.parse('<?php echo $fert_all; ?>');
            
            let years = [];
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
                        
            var laborChart = document.getElementById('ctxChart1').getContext('2d');
            var tempPLabels = [...years];
            var dfert_all = [...fert_all];
            var dfert_all_labels = [...fert_all_labels];
            
            var laborChartGroup = new Chart(laborChart, {

                    type: 'horizontalBar',

                    data: {
                        labels: dfert_all_labels,
                        datasets: [{
                            label: 'Percent',
                            backgroundColor: '#2138B7',    // COLOR 1
                            borderColor: '#2138B7',        // COLOR 1
                            data: dfert_all,
                            stack: 'All'
                        }]
                    },

                    options: {
                        aspectRatio: 2.5,
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