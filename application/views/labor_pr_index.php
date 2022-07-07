<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Labor Management</title>
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
         <div id="labor" class="jumbotron text-center">
            <div class="jumbotron-content">
                <h2>Rice Farming Practices in <?php echo $labor_all['location_name']?></h2>
                <h1>Labor Management</h1>
            </div>
        </div>
        
        <!-- Body -->
        <div class="sublevel">
            <div class="row">
                <div class="col">
                    <div class="card-deck mb-2 text-center">
                        <div class="card primary mb-2 bg-primary-3 text-white">
                          <div class="card-body">
                            <h5 class="card-title pb-2">Irrigated Area</h5>
                            <h1 class="card-text font-weight-bold"><?php echo number_format($labor_irrigated['value']); ?><i class="<?php echo $labor_irrig_caret; ?>"></i></h1>
                            <div class="card-note w-75 mx-auto rounded-pill bg-alternate"><p class="text-white">person-days per hectare</p></div>
                          </div>
                        </div>
                        <div class="card primary mb-2 bg-warning-2 text-white">
                          <div class="card-body">
                            <h5 class="card-title pb-2">Average (2016 WS-2017 DS)</h5>
                            <h1 class="card-text font-weight-bold"><?php echo number_format($labor_all['value']); ?><i class="<?php echo $labor_caret; ?>"></i></h1>
                            <div class="card-note w-75 mx-auto rounded-pill bg-alternate"><p class="text-black">person-days per hectare</p></div>
                          </div>
                        </div>
                        <div class="card primary mb-2 bg-primary-3 text-white">
                          <div class="card-body">
                            <h5 class="card-title pb-2">Non-Irrigated Area</h5>
                            <h1 class="card-text font-weight-bold"><?php echo number_format($labor_rainfed['value']); ?><i class="<?php echo $labor_rain_caret; ?>"></i></h1>
                            <div class="card-note w-75 mx-auto rounded-pill bg-alternate"><p class="text-white">person-days per hectare</p></div>
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
                            <h5 class="my-0 pt-2 pb-2">Average labor requirements per ecosystem (2006 WS-2017 DS)</h5>
                            <p class="my-0 font-weight-normal text-muted">in person-days per hectare (RBFHS, PhilRice-SED, 2019)</p>
                          </div>
                          <div class="card-body">
                               <div><canvas id="ctxChart1"></canvas></div>
                          </div>
<div class="card-footer text-muted">
	Data Source: <a href="https://palaystat.philrice.gov.ph/profile/retrieve/table/67" target="_blank">Labor costs of rice production by cropping season - PalayStat System</a>
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
                    
            var dbpreLaborAll = JSON.parse('<?php echo $prelabor_all_yearly; ?>');
            var dbpreLaborIrr = JSON.parse('<?php echo $prelabor_irrigated_yearly; ?>');
            var dbpreLaborNon = JSON.parse('<?php echo $prelabor_rainfed_yearly; ?>');
            
            var dbhtLaborAll = JSON.parse('<?php echo $htlabor_all_yearly; ?>');
            var dbhtLaborIrr = JSON.parse('<?php echo $htlabor_irrigated_yearly; ?>');
            var dbhtLaborNon = JSON.parse('<?php echo $htlabor_rainfed_yearly; ?>');
            
            var dbpLaborAll = JSON.parse('<?php echo $plabor_all_yearly; ?>');
            var dbpLaborIrr = JSON.parse('<?php echo $plabor_irrigated_yearly; ?>');
            var dbpLaborNon = JSON.parse('<?php echo $plabor_rainfed_yearly; ?>');
            
            var dbpermLaborAll = JSON.parse('<?php echo $permlabor_all_yearly; ?>');
            var dbpermLaborIrr = JSON.parse('<?php echo $permlabor_irrigated_yearly; ?>');
            var dbpermLaborNon = JSON.parse('<?php echo $permlabor_rainfed_yearly; ?>');
                        
            let years = [];
            let prelabor_2006 = [];
            let htlabor_2006 = [];
            let plabor_2006 = [];
            let permlabor_2006 = [];
            let prelabor_2011 = [];
            let htlabor_2011 = [];
            let plabor_2011 = [];
            let permlabor_2011 = [];
            let prelabor_2016 = [];
            let htlabor_2016 = [];
            let plabor_2016 = [];
            let permlabor_2016 = [];

            try {
              dbpreLaborIrr.map((item) => {
                switch(item.year){
                    case '2006': prelabor_2006.push(item.value); break;
                    case '2011': prelabor_2011.push(item.value); break;
                    case '2016': prelabor_2016.push(item.value); break;
                }
              });
              dbpreLaborAll.map((item) => {                
                switch(item.year){
                    case '2006': prelabor_2006.push(item.value); break;
                    case '2011': prelabor_2011.push(item.value); break;
                    case '2016': prelabor_2016.push(item.value); break;
                }
              });
              dbpreLaborNon.map((item) => {
                switch(item.year){
                    case '2006': prelabor_2006.push(item.value); break;
                    case '2011': prelabor_2011.push(item.value); break;
                    case '2016': prelabor_2016.push(item.value); break;
                }
              });
              dbhtLaborIrr.map((item) => {
                switch(item.year){
                    case '2006': htlabor_2006.push(item.value); break;
                    case '2011': htlabor_2011.push(item.value); break;
                    case '2016': htlabor_2016.push(item.value); break;
                }
              });
              dbhtLaborAll.map((item) => {
                switch(item.year){
                    case '2006': htlabor_2006.push(item.value); break;
                    case '2011': htlabor_2011.push(item.value); break;
                    case '2016': htlabor_2016.push(item.value); break;
                }
              });
              dbhtLaborNon.map((item) => {
                switch(item.year){
                    case '2006': htlabor_2006.push(item.value); break;
                    case '2011': htlabor_2011.push(item.value); break;
                    case '2016': htlabor_2016.push(item.value); break;
                }
              });
              dbpLaborIrr.map((item) => {
                switch(item.year){
                    case '2006': plabor_2006.push(item.value); break;
                    case '2011': plabor_2011.push(item.value); break;
                    case '2016': plabor_2016.push(item.value); break;
                }
              });
              dbpLaborAll.map((item) => {
                switch(item.year){
                    case '2006': plabor_2006.push(item.value); break;
                    case '2011': plabor_2011.push(item.value); break;
                    case '2016': plabor_2016.push(item.value); break;
                }
              });
              dbpLaborNon.map((item) => {
                switch(item.year){
                    case '2006': plabor_2006.push(item.value); break;
                    case '2011': plabor_2011.push(item.value); break;
                    case '2016': plabor_2016.push(item.value); break;
                }
              });
              dbpermLaborIrr.map((item) => {
                switch(item.year){
                    case '2006': permlabor_2006.push(item.value); break;
                    case '2011': permlabor_2011.push(item.value); break;
                    case '2016': permlabor_2016.push(item.value); break;
                }
              });
              dbpermLaborAll.map((item) => {
                switch(item.year){
                    case '2006': permlabor_2006.push(item.value); break;
                    case '2011': permlabor_2011.push(item.value); break;
                    case '2016': permlabor_2016.push(item.value); break;
                }
              });
              dbpermLaborNon.map((item) => {
                switch(item.year){
                    case '2006': permlabor_2006.push(item.value); break;
                    case '2011': permlabor_2011.push(item.value); break;
                    case '2016': permlabor_2016.push(item.value); break;
                }
              });
            } catch (error) {
              console.log(error);
            }
                        
            var laborChart = document.getElementById('ctxChart1').getContext('2d');
            var tempPLabels = [...years];
            var cprelabor_2006 = [...prelabor_2006];
            var chtlabor_2006 = [...htlabor_2006];
            var cplabor_2006 = [...plabor_2006];
            var cpermlabor_2006 = [...permlabor_2006];
            var cprelabor_2011 = [...prelabor_2011];
            var chtlabor_2011 = [...htlabor_2011];
            var cplabor_2011 = [...plabor_2011];
            var cpermlabor_2011 = [...permlabor_2011];
            var cprelabor_2016 = [...prelabor_2016];
            var chtlabor_2016 = [...htlabor_2016];
            var cplabor_2016 = [...plabor_2016];
            var cpermlabor_2016 = [...permlabor_2016];
            
            var laborChartGroup = new Chart(laborChart, {

                    type: 'bar',

                    data: {
                        labels: ["Irrigated Area", "Average", "Non-Irrigated Area"],
                        datasets: [{
                            label: 'Pre-harvest - 2006 WS-2007 DS',
                            backgroundColor: '#2138B7',    // COLOR 1
                            borderColor: '#2138B7',        // COLOR 1
                            data: cprelabor_2006,
                            stack: '2006 WS-2007 DS'
                        },{
                            label: 'Harvest and threshing - 2006 WS-2007 DS',
                            backgroundColor: '#FEB043',    // COLOR 1
                            borderColor: '#FEB043',        // COLOR 1
                            data: chtlabor_2006,
                            stack: '2006 WS-2007 DS'
                        },{
                            label: 'Post-harvest labor - 2006 WS-2007 DS',
                            backgroundColor: '#7FFE00',    // COLOR 1
                            borderColor: '#7FFE00',        // COLOR 1
                            data: cplabor_2006,
                            stack: '2006 WS-2007 DS'
                        },{
                            label: 'Permanent labor - 2006 WS-2007 DS',
                            backgroundColor: '#F07427',    // COLOR 1
                            borderColor: '#F07427',        // COLOR 1
                            data: cpermlabor_2006,
                            stack: '2006 WS-2007 DS'
                        },{
                            label: 'Pre-harvest - 2011 WS-2012 DS',
                            backgroundColor: '#2138B7',    // COLOR 1
                            borderColor: '#2138B7',        // COLOR 1
                            data: cprelabor_2011,
                            stack: '2011 WS-2012 DS'
                        },{
                            label: 'Harvest and threshing - 2011 WS-2012 DS',
                            backgroundColor: '#FEB043',    // COLOR 1
                            borderColor: '#FEB043',        // COLOR 1
                            data: chtlabor_2011,
                            stack: '2011 WS-2012 DS'
                        },{
                            label: 'Post-harvest labor - 2011 WS-2012 DS',
                            backgroundColor: '#7FFE00',    // COLOR 1
                            borderColor: '#7FFE00',        // COLOR 1
                            data: cplabor_2011,
                            stack: '2011 WS-2012 DS'
                        },{
                            label: 'Permanent labor - 2011 WS-2012 DS',
                            backgroundColor: '#F07427',    // COLOR 1
                            borderColor: '#F07427',        // COLOR 1
                            data: cpermlabor_2011,
                            stack: '2011 WS-2012 DS'
                        },{
                            label: 'Pre-harvest - 2016 WS-2017 DS',
                            backgroundColor: '#2138B7',    // COLOR 1
                            borderColor: '#2138B7',        // COLOR 1
                            data: cprelabor_2016,
                            stack: '2016 WS-2017 DS'
                        },{
                            label: 'Harvest and threshing - 2016 WS-2017 DS',
                            backgroundColor: '#FEB043',    // COLOR 1
                            borderColor: '#FEB043',        // COLOR 1
                            data: chtlabor_2016,
                            stack: '2016 WS-2017 DS'
                        },{
                            label: 'Post-harvest labor - 2016 WS-2017 DS',
                            backgroundColor: '#7FFE00',    // COLOR 1
                            borderColor: '#7FFE00',        // COLOR 1
                            data: cplabor_2016,
                            stack: '2016 WS-2017 DS'
                        },{
                            label: 'Permanent labor - 2016 WS-2017 DS',
                            backgroundColor: '#F07427',    // COLOR 1
                            borderColor: '#F07427',        // COLOR 1
                            data: cpermlabor_2016,
                            stack: '2016 WS-2017 DS'
                        }]
                    },

                    options: {
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
                                    stepSize: 20
                                }
                            }]
                        },
                        legend: {
                            display: false
                        },
                        tooltips: {
                            mode: 'x'
                        }
                    }
                });
        </script>
    </body>
</html>