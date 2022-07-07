<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Formal Education and Farming Experience</title>
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
                        <a class="active w-100 mr-2 text-white text-center d-block" href="<?php echo base_url(); ?>profilemain" role="button">Rice Farmer</a>
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
          <a class="btn btn-warning mr-2 text-white" href="<?php echo base_url(); ?>profilemain/province/<?php echo $id; ?>" role="button"><i class="bi bi-caret-left"></i> Back to Main</a>
        </nav>
        
        <!-- Header --->
        <div id="farmexp" class="jumbotron text-center">
            <div class="jumbotron-content">
                <h2>Profile of the Filipino Rice Farmer in <?php echo $educ_all['location_name']?></h2>
                <h1>Formal Education and Farming Experience</h1>
            </div>
        </div>
        
        <!-- Body -->
        <div class="sublevel">
            <div class="row">
                <div class="col">
                    <div class="card-deck mb-2 text-center">
                        <div class="card primary mb-4 bg-primary-2 text-white">
                          <div class="card-body">
                            <h5 class="card-title pb-2">Formal Education (2016)</h5>
                            <h1 class="card-text font-weight-bold"><?php echo number_format($educ_all['value']); ?><i class="<?php echo $fexp_caret; ?>"></i></h1>
                            <div class="card-note w-25 mx-auto rounded-pill bg-primary"><p class="text-white">years</p></div>
                          </div>
                        </div>
                        <div class="card primary mb-4 bg-primary-2 text-white">
                          <div class="card-body">
                            <h5 class="card-title pb-2">Farming Experience (2016)</h5>
                            <h1 class="card-text font-weight-bold"><?php echo number_format($fexp_all['value']); ?><i class="<?php echo $fexp_caret; ?>"></i></h1>
                            <div class="card-note w-25 mx-auto rounded-pill"><p class="text-white">years</p></div>
                          </div>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="row">
                <div class="col">
                    <div class="card mb-4">
                          <div class="card-header text-left">
<a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a>
                            <h5 class="my-0 pt-2 pb-2">Distribution of Farmers per Formal Education Level by Survey Year (<span class='case'>2016</span>)</h5>
                            <p class="my-0 font-weight-normal text-muted">in percent (RBFHS, PhilRice-SED, 2019)</p>
                          </div>
                          <div class="card-body">
                               <div><canvas id="ctxChart1"></canvas></div>
                          </div>
                        <div class="card-footer text-muted">
	Data Source: <a href="https://palaystat.philrice.gov.ph/profile/retrieve/table/1" target="_blank">Socioeconomic characteristics of farmer-respondents - PalayStat System</a>
</div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-4">
                          <div class="card-header text-left">
<a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a>
                            <h5 class="my-0 pt-2 pb-2">Average Years of Farming Experience Per Survey Year (<span class='case'>2016</span>)</h5>
                            <p class="my-0 font-weight-normal text-muted">(RBFHS, PhilRice-SED, 2019)</p>
                          </div>
                          <div class="card-body">
                               <div><canvas id="ctxChart2"></canvas></div>
                          </div>
                        <div class="card-footer text-muted">
	Data Source: <a href="https://palaystat.philrice.gov.ph/profile/retrieve/table/1" target="_blank">Socioeconomic characteristics of farmer-respondents - PalayStat System</a>
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
            
            // CHART 1
            
            var dbOne = clean(JSON.parse('<?php echo $educ_noed; ?>'));
            var dbTwo = clean(JSON.parse('<?php echo $educ_elem; ?>'));
            var dbThree = clean(JSON.parse('<?php echo $educ_hs; ?>'));
            var dbFour = clean(JSON.parse('<?php echo $educ_col; ?>'));
            if (dbOne[0]["year"] !=  dbOne[dbOne.length-1]["year"]){
                $("span.case").text(dbOne[0]["year"] + "-" + dbOne[dbOne.length-1]["year"]); 
            }
                        
            let years = [];
            let values_one = [];
            let values_two = [];
            let values_three = [];
            let values_four = [];

            try {
              dbOne.map((item) => {
                years.push(item.year);
                values_one.push(item.value);
              });
              dbTwo.map((item) => {
                values_two.push(item.value);
              });
              dbThree.map((item) => {
                values_three.push(item.value);
              });
              dbFour.map((item) => {
                values_four.push(item.value);
              });
            } catch (error) {
              console.log(error);
            }
            
            var chart1 = document.getElementById('ctxChart1').getContext('2d');
            var tempPLabels = [...years];
            var prodOne = [...values_one];
            var prodTwo = [...values_two];
            var prodThree = [...values_three];
            var prodFour = [...values_four];
            var chart1Chart = new Chart(chart1, {

                    type: 'bar',

                    data: {
                        labels: tempPLabels,
                        datasets: [{
                            label: 'No formal education',
                            backgroundColor: '#FEB043',    // COLOR 1
                            borderColor: '#FEB043',        // COLOR 1
                            data: prodOne
                        },{
                            label: 'Elementary',
                            backgroundColor: '#2138B7',    // COLOR 1
                            borderColor: '#2138B7',        // COLOR 1
                            data: prodTwo
                        },{
                            label: 'High School',
                            backgroundColor: '#7FFE00',    // COLOR 1
                            borderColor: '#7FFE00',        // COLOR 1
                            data: prodThree
                        },{
                            label: 'College',
                            backgroundColor: '#006CD7',    // COLOR 1
                            borderColor: '#006CD7',        // COLOR 1
                            data: prodFour
                        }]
                    },

                    options: {
                        aspectRatio: 1.5,
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
                                    stepSize: 20
                                }
                            }]
                        },
                        legend: {
                            position: 'top'
                        }
                    }
                });
            
                // CHART 2

                var dbFarmExp = clean(JSON.parse('<?php echo $fexp_yearly; ?>'));

                let years_f = [];
                let values_fexp = [];
                
                try {
                  dbFarmExp.map((item) => {
                    years_f.push(item.year);
                    values_fexp.push(item.value);
                  });
                } catch (error) {
                  console.log(error);
                }

                var tempFLabels = [...years];
                var prodFExp = [...values_fexp];
            
                var Chart2 = document.getElementById('ctxChart2').getContext('2d');
                var Chart2Chart = new Chart(Chart2, {

                        type: 'bar',

                        data: {
                            labels: tempFLabels,
                            datasets: [{
                                label: 'Average Farm Experience',
                                backgroundColor: '#007FFE',    // COLOR 1
                                borderColor: '#007FFE',        // COLOR 1
                                data: prodFExp
                            }]
                        },

                        options: {
                            aspectRatio: 1.5,
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
                                        suggestedMin: 0

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
                            data = parseInt(data).toLocaleString();
                            ctx.fillText(data, bar._model.x + 0 , bar._model.y + 20);
                            });
                        });
                      }
                  }
                        }
                    });
        </script>
    </body>
</html>