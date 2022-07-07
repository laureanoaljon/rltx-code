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
                    <a class="btn btn-warning mr-2 text-white" href="<?php echo base_url(); ?>farmpractices" role="button"><i class="bi bi-caret-left"></i> Back to Main</a>
                </nav>

                <!-- Header --->

                <div id="farmexp" class="jumbotron text-center">
                    <div class="jumbotron-content">
                        <h2>Rice Farming Practices in the Philippines</h2>
                        <h1>Top Adopted Technologies</h1>
                    </div>
                </div>

                <!-- Body -->
                <div class="sublevel">
                    <div class="row">
                        <div class="col">
                            <div class="card mb-4">
                                <div class="card-header text-left">
                                    <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a>
                                    <h5 class="my-0 pt-2 pb-2">Adoption rate of selected technologies under Land Preparation category (2016 WS-2017 DS)</h5>
                                    <p class="my-0 font-weight-normal text-muted">in percent, within the last 5 years (RBFHS, PhilRice-SED, 2019)</p>
                                </div>
                                <div class="card-body">
                                    <div><canvas id="ctxChart2"></canvas></div>
                                </div>
                                <div class="card-footer text-muted">
                                    Data Source: Rice farming technology awareness and adoption, Philippines and selected provinces, RBFHS 2016-2017 Survey Results
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card mb-4">
                                <div class="card-header text-left">
                                    <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a>
                                    <h5 class="my-0 pt-2 pb-2">Adoption rate of selected technologies under Crop Establishment category (2016 WS-2017 DS)</h5>
                                    <p class="my-0 font-weight-normal text-muted">in percent, within the last 5 years (RBFHS, PhilRice-SED, 2019)</p>
                                </div>
                                <div class="card-body">
                                    <div><canvas id="ctxChart3"></canvas></div>
                                </div>
                                <div class="card-footer text-muted">
                                    Data Source: Rice farming technology awareness and adoption, Philippines and selected provinces, RBFHS 2016-2017 Survey Results
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col">
                            <div class="card mb-4">
                                <div class="card-header text-left">
                                    <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a>
                                    <h5 class="my-0 pt-2 pb-2">Adoption rate of selected technologies under Nutrient Management category (2016 WS-2017 DS)</h5>
                                    <p class="my-0 font-weight-normal text-muted">in percent, within the last 5 years (RBFHS, PhilRice-SED, 2019)</p>
                                </div>
                                <div class="card-body">
                                    <div><canvas id="ctxChart4"></canvas></div>
                                </div>
                                <div class="card-footer text-muted">
                                    Data Source: Rice farming technology awareness and adoption, Philippines and selected provinces, RBFHS 2016-2017 Survey Results
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card mb-4">
                                <div class="card-header text-left">
                                    <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a>
                                    <h5 class="my-0 pt-2 pb-2">Adoption rate of selected technologies under Water Management category (2016 WS-2017 DS)</h5>
                                    <p class="my-0 font-weight-normal text-muted">in percent, within the last 5 years (RBFHS, PhilRice-SED, 2019)</p>
                                </div>
                                <div class="card-body">
                                    <div><canvas id="ctxChart5"></canvas></div>
                                </div>
                                <div class="card-footer text-muted">
                                    Data Source: Rice farming technology awareness and adoption, Philippines and selected provinces, RBFHS 2016-2017 Survey Results
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col">
                            <div class="card mb-4">
                                <div class="card-header text-left">
                                    <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a>
                                    <h5 class="my-0 pt-2 pb-2">Adoption rate of selected technologies under Pest Management category (2016 WS-2017 DS)</h5>
                                    <p class="my-0 font-weight-normal text-muted">in percent, within the last 5 years (RBFHS, PhilRice-SED, 2019)</p>
                                </div>
                                <div class="card-body">
                                    <div><canvas id="ctxChart6"></canvas></div>
                                </div>
                                <div class="card-footer text-muted">
                                    Data Source: Rice farming technology awareness and adoption, Philippines and selected provinces, RBFHS 2016-2017 Survey Results
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card mb-4">
                                <div class="card-header text-left">
                                    <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a>
                                    <h5 class="my-0 pt-2 pb-2">Adoption rate of selected technologies under Harvest Management category (2016 WS-2017 DS)</h5>
                                    <p class="my-0 font-weight-normal text-muted">in percent, within the last 5 years (RBFHS, PhilRice-SED, 2019)</p>
                                </div>
                                <div class="card-body">
                                    <div><canvas id="ctxChart7"></canvas></div>
                                </div>
                                <div class="card-footer text-muted">
                                    Data Source: Rice farming technology awareness and adoption, Philippines and selected provinces, RBFHS 2016-2017 Survey Results
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-8 mx-auto">
                            <div class="card mb-4">
                                <div class="card-header text-left">
                                    <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a>
                                    <h5 class="my-0 pt-2 pb-2">Adoption rate of selected technologies under Other Practices/Technologies category (2016 WS-2017 DS)</h5>
                                    <p class="my-0 font-weight-normal text-muted">in percent, within the last 5 years (RBFHS, PhilRice-SED, 2019)</p>
                                </div>
                                <div class="card-body">
                                    <div><canvas id="ctxChart8"></canvas></div>
                                </div>
                                <div class="card-footer text-muted">
                                    Data Source: Rice farming technology awareness and adoption, Philippines and selected provinces, RBFHS 2016-2017 Survey Results
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
        var tempLPLabels = [...lyears];
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
                        this.data.datasets.forEach(function(dataset, i) {
                            let meta = chartInstance.controller.getDatasetMeta(i);
                            meta.data.forEach(function(bar, index) {
                                let data = parseFloat(dataset.data[index]).toFixed(0) + "%";
                                ctx.fillText(data, bar._model.x + 20, bar._model.y + 8);
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
        var tempCELabels = [...cyears];
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
                        this.data.datasets.forEach(function(dataset, i) {
                            let meta = chartInstance.controller.getDatasetMeta(i);
                            meta.data.forEach(function(bar, index) {
                                let data = parseFloat(dataset.data[index]).toFixed(0) + "%";
                                ctx.fillText(data, bar._model.x + 20, bar._model.y + 8);
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

        var dbHAll = JSON.parse('<?php echo $adopt_nutrient; ?>');

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
        var tempHLabels = [...hyears];
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
                        this.data.datasets.forEach(function(dataset, i) {
                            let meta = chartInstance.controller.getDatasetMeta(i);
                            meta.data.forEach(function(bar, index) {
                                let data = parseFloat(dataset.data[index]).toFixed(0) + "%";
                                ctx.fillText(data, bar._model.x + 20, bar._model.y + 8);
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

        var dbWAll = JSON.parse('<?php echo $adopt_water; ?>');

        let wyears = [];
        let w_all = [];
        let w_all_labels = [];

        try {
            dbWAll.map((item) => {
                w_all_labels.push(item.tech);
                w_all.push(item.value);
            });
        } catch (error) {
            console.log(error);
        }

        var wChart = document.getElementById('ctxChart5').getContext('2d');
        var tempWLabels = [...wyears];
        var wpest_all = [...w_all];
        var wpest_all_labels = [...w_all_labels];

        var wChartGroup = new Chart(wChart, {

            type: 'horizontalBar',

            data: {
                labels: wpest_all_labels,
                datasets: [{
                    label: 'Percent',
                    backgroundColor: "#2138b7",
                    borderColor: "#2138b7",
                    data: wpest_all,
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
                        this.data.datasets.forEach(function(dataset, i) {
                            let meta = chartInstance.controller.getDatasetMeta(i);
                            meta.data.forEach(function(bar, index) {
                                let data = parseFloat(dataset.data[index]).toFixed(0) + "%";
                                ctx.fillText(data, bar._model.x + 20, bar._model.y + 8);
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

        var dbPAll = JSON.parse('<?php echo $adopt_pest; ?>');

        let pyears = [];
        let p_all = [];
        let p_all_labels = [];

        try {
            dbPAll.map((item) => {
                p_all_labels.push(item.tech);
                p_all.push(item.value);
            });
        } catch (error) {
            console.log(error);
        }

        var pChart = document.getElementById('ctxChart6').getContext('2d');
        var tempPLabels = [...pyears];
        var ppest_all = [...p_all];
        var ppest_all_labels = [...p_all_labels];

        var pChartGroup = new Chart(pChart, {

            type: 'horizontalBar',

            data: {
                labels: ppest_all_labels,
                datasets: [{
                    label: 'Percent',
                    backgroundColor: "#2138b7",
                    borderColor: "#2138b7",
                    data: ppest_all,
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
                        this.data.datasets.forEach(function(dataset, i) {
                            let meta = chartInstance.controller.getDatasetMeta(i);
                            meta.data.forEach(function(bar, index) {
                                let data = parseFloat(dataset.data[index]).toFixed(0) + "%";
                                ctx.fillText(data, bar._model.x + 20, bar._model.y + 8);
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

        var dbHHAll = JSON.parse('<?php echo $adopt_harvest; ?>');

        let hhyears = [];
        let hh_all = [];
        let hh_all_labels = [];

        try {
            dbHHAll.map((item) => {
                hh_all_labels.push(item.tech);
                hh_all.push(item.value);
            });
        } catch (error) {
            console.log(error);
        }

        var hhChart = document.getElementById('ctxChart7').getContext('2d');
        var tempHHLabels = [...hhyears];
        var hhpest_all = [...hh_all];
        var hhpest_all_labels = [...hh_all_labels];

        var hhChartGroup = new Chart(hhChart, {

            type: 'horizontalBar',

            data: {
                labels: hhpest_all_labels,
                datasets: [{
                    label: 'Percent',
                    backgroundColor: "#2138b7",
                    borderColor: "#2138b7",
                    data: hhpest_all,
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
                        this.data.datasets.forEach(function(dataset, i) {
                            let meta = chartInstance.controller.getDatasetMeta(i);
                            meta.data.forEach(function(bar, index) {
                                let data = parseFloat(dataset.data[index]).toFixed(0) + "%";
                                ctx.fillText(data, bar._model.x + 20, bar._model.y + 8);
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

        var dbOAll = JSON.parse('<?php echo $adopt_others; ?>');

        let oyears = [];
        let o_all = [];
        let o_all_labels = [];

        try {
            dbOAll.map((item) => {
                o_all_labels.push(item.tech);
                o_all.push(item.value);
            });
        } catch (error) {
            console.log(error);
        }

        var oChart = document.getElementById('ctxChart8').getContext('2d');
        var tempOLabels = [...oyears];
        var opest_all = [...o_all];
        var opest_all_labels = [...o_all_labels];

        var oChartGroup = new Chart(oChart, {

            type: 'horizontalBar',

            data: {
                labels: opest_all_labels,
                datasets: [{
                    label: 'Percent',
                    backgroundColor: "#2138b7",
                    borderColor: "#2138b7",
                    data: opest_all,
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
                        this.data.datasets.forEach(function(dataset, i) {
                            let meta = chartInstance.controller.getDatasetMeta(i);
                            meta.data.forEach(function(bar, index) {
                                let data = parseFloat(dataset.data[index]).toFixed(0) + "%";
                                ctx.fillText(data, bar._model.x + 20, bar._model.y + 8);
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
