<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Major Variety Planted</title>
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
                <div id="seedrate" class="jumbotron text-center">
                    <div class="jumbotron-content">
                        <h2>Rice Farming Practices in <?php echo $var['location_name'];?></h2>
                        <h1>Major Variety Planted</h1>
                    </div>
                </div>

                <!-- Body -->
                <div class="sublevel">
                    <div class="row">
                        <div class="col">
                            <div class="card mb-4">
                                <div class="card-header text-left">
                                    <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a>
                                    <div class="chart-toggles" data-html2canvas-ignore="true">
                                        <div class="btn-group btn-group-toggle btn-income" data-toggle="buttons">
                                            <label class="btn btn-secondary">
                                                <input type="radio" name="toggle_type" id="showVar" checked> Show All
                                            </label>
                                            <label class="btn btn-secondary">
                                                <input type="radio" name="toggle_type" id="showPrVar"> PhilRice-Bred
                                            </label>
                                        </div>
                                    </div>
                                    <h5 id="chart-variety" class="my-0 pt-2 pb-2">Major varieties planted (2017 DS)</h5>
                                    <p class="my-0 font-weight-normal text-muted">in percent (RBFHS, PhilRice-SED, 2019)</p>
                                </div>
                                <div class="card-body">
                                    <div><canvas id="ctxChart1-v"></canvas></div>
                                    <div><canvas id="ctxChart2-v"></canvas></div>
                                </div>
                                <div class="card-footer text-muted">
                                    Data Source: <a href="https://palaystat.philrice.gov.ph/profile/retrieve/table/19" target="_blank">Distribution of farmers (%) by ten (10) most varieties planted - PalayStat System</a>
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

        var dbpestAll = JSON.parse('<?php echo $var_all; ?>');

        let years = [];
        let var_all = [];
        let var_all_labels = [];

        try {
            dbpestAll.map((item) => {
                var_all_labels.push(item.label);
                var_all.push(item.value);
            });
        } catch (error) {
            console.log(error);
        }

        var laborChart = document.getElementById('ctxChart1-v').getContext('2d');
        var tempPLabels = [...years];
        var dvar_all = [...var_all];
        var dvar_all_labels = [...var_all_labels];

        var laborChartGroup = new Chart(laborChart, {

            type: 'horizontalBar',

            data: {
                labels: dvar_all_labels,
                datasets: [{
                    label: 'Percent',
                    backgroundColor: '#2138B7', // COLOR 1
                    borderColor: '#2138B7', // COLOR 1
                    data: dvar_all,
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
                            suggestedMax: 40
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
                        this.data.datasets.forEach(function(dataset, i) {
                            let meta = chartInstance.controller.getDatasetMeta(i);
                            meta.data.forEach(function(bar, index) {
                                let data = parseFloat(dataset.data[index]).toFixed(0) + "%";
                                ctx.fillText(data, bar._model.x + 20, bar._model.y + 8);
                            });
                        });
                    }
                }
            }
        });
        
        var dbpestPRRI = JSON.parse('<?php echo $var_prri; ?>');

        let yearsP = [];
        let var_allP = [];
        let var_all_labelsP = [];

        try {
            dbpestPRRI.map((item) => {
                var_all_labelsP.push(item.label);
                var_allP.push(item.value);
            });
        } catch (error) {
            console.log(error);
        }

        var laborChart2 = document.getElementById('ctxChart2-v').getContext('2d');
        var tempPLabelsP = [...yearsP];
        var dvar_allP = [...var_allP];
        var dvar_all_labelsP = [...var_all_labelsP];

        var laborChartGroup2 = new Chart(laborChart2, {

            type: 'horizontalBar',

            data: {
                labels: dvar_all_labelsP,
                datasets: [{
                    label: 'Percent',
                    backgroundColor: '#2138B7', // COLOR 1
                    borderColor: '#2138B7', // COLOR 1
                    data: dvar_allP,
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
                            suggestedMax: 40
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
                        this.data.datasets.forEach(function(dataset, i) {
                            let meta = chartInstance.controller.getDatasetMeta(i);
                            meta.data.forEach(function(bar, index) {
                                let data = parseFloat(dataset.data[index]).toFixed(0) + "%";
                                ctx.fillText(data, bar._model.x + 20, bar._model.y + 8);
                            });
                        });
                    }
                }
            }
        });

    </script>
</body>

</html>
