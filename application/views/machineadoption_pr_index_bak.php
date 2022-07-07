<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Top Adopted Technologies</title>
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
        <div id="farmexp" class="jumbotron text-center">
            <div class="jumbotron-content">
                <h2>Rice Farming Practices in <?php echo $adopt_seeds_ar[0]['location_name'];?></h2>
                <h1>Top Adopted Technologies</h1>
            </div>
        </div>
        
        <!-- Body -->
        <div class="sublevel"> 
            <div class="row">
                <div class="col">
                    <div class="card mb-4">
                          <div class="card-header text-left">
                            <h5 class="my-0 pt-2 pb-2">Adoption rate of selected technologies under Seeds and Varieties category in <?php echo $adopt_seeds_ar[0]['location_name'];?> (2016)</h5>
                            <p class="my-0 font-weight-normal text-muted">in percent, within the last 5 years (RBFHS, PhilRice-SED, 2019)</p>
                          </div>
                          <div class="card-body">
                               <div><canvas id="ctxChart1"></canvas></div>
                          </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card mb-4">
                          <div class="card-header text-left">
                            <h5 class="my-0 pt-2 pb-2">Adoption rate of selected technologies under Land Preparation category in <?php echo $adopt_seeds_ar[0]['location_name'];?> (2016)</h5>
                            <p class="my-0 font-weight-normal text-muted">in percent, within the last 5 years (RBFHS, PhilRice-SED, 2019)</p>
                          </div>
                          <div class="card-body">
                               <div><canvas id="ctxChart2"></canvas></div>
                          </div>
                    </div>
                </div>
            </div> 
            <div class="row">
                <div class="col">
                    <div class="card mb-4">
                          <div class="card-header text-left">
                            <h5 class="my-0 pt-2 pb-2">Adoption rate of selected technologies under in Crop Establishment category in <?php echo $adopt_seeds_ar[0]['location_name'];?> (2016)</h5>
                            <p class="my-0 font-weight-normal text-muted">in percent, within the last 5 years (RBFHS, PhilRice-SED, 2019)</p>
                          </div>
                          <div class="card-body">
                               <div><canvas id="ctxChart3"></canvas></div>
                          </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card mb-4">
                          <div class="card-header text-left">
                            <h5 class="my-0 pt-2 pb-2">Adoption rate of selected technologies under in Harvest Management category in <?php echo $adopt_seeds_ar[0]['location_name'];?> (2016)</h5>
                            <p class="my-0 font-weight-normal text-muted">in percent, within the last 5 years (RBFHS, PhilRice-SED, 2019)</p>
                          </div>
                          <div class="card-body">
                               <div><canvas id="ctxChart4"></canvas></div>
                          </div>
                    </div>
                </div>
            </div>
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
                    
            var dbpestAll = JSON.parse('<?php echo $adopt_seeds; ?>');
            
            let years = [];
            let pest_all = [];
            let pest_all_labels = [];

            try {
              dbpestAll.map((item) => {
                pest_all_labels.push(item.tech);
                pest_all.push(item.value);
              });
            } catch (error) {
              console.log(error);
            }
                        
            var laborChart = document.getElementById('ctxChart1').getContext('2d');
            var tempPLabels = [...years];
            var dpest_all = [...pest_all];
            var dpest_all_labels = [...pest_all_labels];
            
            var laborChartGroup = new Chart(laborChart, {

                    type: 'horizontalBar',

                    data: {
                        labels: dpest_all_labels,
                        datasets: [{
                            label: 'Percent',
                            backgroundColor: "#2138b7",
                            borderColor: "#2138b7",
                            data: dpest_all,
                            stack: 'All'
                        }]
                    },

                    options: {
                        aspectRatio: 2.5,
                        scales: {
                            xAxes: [{
                                display: true,
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
                    },
                
                plugins: [{
                   beforeInit: function(chart) {
                      chart.data.labels.forEach(function(e, i, a) {
                         if (/\n/.test(e)) {
                            a[i] = e.split(/\n/);
                         }
                      });
                   }
                }]
                
                });
         
            var dbLAll = JSON.parse('<?php echo $adopt_landprep; ?>');
            
            let lyears = [];
            let l_all = [];
            let l_all_labels = [];

            try {
              dbLAll.map((item) => {
                l_all_labels.push(item.tech);
                l_all.push(item.value);
              });
            } catch (error) {
              console.log(error);
            }
                        
            var lChart = document.getElementById('ctxChart2').getContext('2d');
            var tempLPLabels = [...years];
            var lpest_all = [...l_all];
            var lpest_all_labels = [...l_all_labels];
            
            var lChartGroup = new Chart(lChart, {

                    type: 'horizontalBar',

                    data: {
                        labels: lpest_all_labels,
                        datasets: [{
                            label: 'Percent',
                            backgroundColor: "#2138b7",
                            borderColor: "#2138b7",
                            data: lpest_all,
                            stack: 'All'
                        }]
                    },

                    options: {
                        aspectRatio: 2.5,
                        scales: {
                            xAxes: [{
                                display: true,
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
                    }, 
                
                    plugins: [{
                       beforeInit: function(chart) {
                          chart.data.labels.forEach(function(e, i, a) {
                             if (/\n/.test(e)) {
                                a[i] = e.split(/\n/);
                             }
                          });
                       }
                    }]
                
                
                });
         
            var dbCAll = JSON.parse('<?php echo $adopt_cropest; ?>');
            
            let cyears = [];
            let c_all = [];
            let c_all_labels = [];

            try {
              dbCAll.map((item) => {
                c_all_labels.push(item.tech);
                c_all.push(item.value);
              });
            } catch (error) {
              console.log(error);
            }
                        
            var cChart = document.getElementById('ctxChart3').getContext('2d');
            var tempCELabels = [...years];
            var cpest_all = [...c_all];
            var cpest_all_labels = [...c_all_labels];
            
            var cChartGroup = new Chart(cChart, {

                    type: 'horizontalBar',

                    data: {
                        labels: cpest_all_labels,
                        datasets: [{
                            label: 'Percent',
                            backgroundColor: "#2138b7",
                            borderColor: "#2138b7",
                            data: cpest_all,
                            stack: 'All'
                        }]
                    },

                    options: {
                        aspectRatio: 2.5,
                        scales: {
                            xAxes: [{
                                display: true,
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
                    }, 
                
                    plugins: [{
                       beforeInit: function(chart) {
                          chart.data.labels.forEach(function(e, i, a) {
                             if (/\n/.test(e)) {
                                a[i] = e.split(/\n/);
                             }
                          });
                       }
                    }]
                
                
                });
         
            var dbHAll = JSON.parse('<?php echo $adopt_harvest; ?>');
            
            let hyears = [];
            let h_all = [];
            let h_all_labels = [];

            try {
              dbHAll.map((item) => {
                h_all_labels.push(item.tech);
                h_all.push(item.value);
              });
            } catch (error) {
              console.log(error);
            }
                        
            var hChart = document.getElementById('ctxChart4').getContext('2d');
            var tempHLabels = [...years];
            var hpest_all = [...h_all];
            var hpest_all_labels = [...h_all_labels];
            
            var hChartGroup = new Chart(hChart, {

                    type: 'horizontalBar',

                    data: {
                        labels: hpest_all_labels,
                        datasets: [{
                            label: 'Percent',
                            backgroundColor: "#2138b7",
                            borderColor: "#2138b7",
                            data: hpest_all,
                            stack: 'All'
                        }]
                    },

                    options: {
                        aspectRatio: 2.5,
                        scales: {
                            xAxes: [{
                                display: true,
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
                    }, 
                
                    plugins: [{
                       beforeInit: function(chart) {
                          chart.data.labels.forEach(function(e, i, a) {
                             if (/\n/.test(e)) {
                                a[i] = e.split(/\n/);
                             }
                          });
                       }
                    }]
                
                
                });
        </script>
    </body>
</html>