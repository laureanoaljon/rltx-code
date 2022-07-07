<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Productivity Indicators</title>
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
                    <a class="btn btn-warning mr-2 text-white" href="<?php echo base_url(); ?>main/region/<?php echo $id; ?>" role="button"><i class="bi bi-caret-left"></i> Back to Main</a>
                </nav>

                <!-- Header --->

                <div id="yieldcost" class="jumbotron text-center">
                    <div class="jumbotron-content">
                        <h2>State of the Rice Sector in <?php echo $yield_all['location_name'];?></h2>
                        <h1>Productivity Indicators</h1>
                        <p class="lead"><i>How competitive are our farmers in terms of having high yield with less cost?</i> Explore the comparison of NPK utilization, <br />distribution of cost items per hectare, and yield and cost analysis of the provinces in the region.</p>
                    </div>
                </div>

                <!-- Body -->
                <div class="sublevel">
                    <div class="row">
                        <div class="col">
                            <div class="card-deck mb-2 text-center">
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
                            <div class="card mb-4">
                                <div class="card-header text-left">
                                    <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a>
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
                    <div class="row">
                        <div class="col">
                            <div class="card mb-4">
                                <div class="card-header text-left">
                                    <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a>
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
    <script type="text/javascript" src="<?php echo base_url(); ?>js/chartjs-plugin-annotation.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/html2canvas.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/custom.js"></script>
    <script>
        var sidebarjs = new SidebarJS.SidebarElement();
        Chart.defaults.global.responsive = true;
        Chart.defaults.global.tooltips.mode = 'index';
        Chart.defaults.global.tooltips.intersect = false;
        Chart.defaults.global.defaultFontFamily = 'Poppins';
        Chart.defaults.global.defaultFontSize = 12;
        Chart.defaults.global.animation.duration = 3000;
        Chart.defaults.global.defaultFontColor = "#000000";

        // Chart 1

        var dbNPK = JSON.parse('<?php echo $npk_provinces_all; ?>');

        let provinces = [];
        let nUse = [];
        let pUse = [];
        let kUse = [];

        try {
            dbNPK.map((item) => {
                provinces.push(item.location_name);
                nUse.push(item.n_value);
                pUse.push(item.p_value);
                kUse.push(item.k_value);
            });
        } catch (error) {
            console.log(error);
        }

        var npkLabels = [...provinces];
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


        // CHART 2

        var yieldCost = document.getElementById('ctxYieldCost').getContext('2d');

        var dbYCostNames = JSON.parse('<?php echo $yieldcost_names; ?>');

        let yieldcost_names = [];

        try {
            dbYCostNames.map((item) => {
                yieldcost_names.push(item.location_name);
            });
        } catch (error) {
            console.log(error);
        }

        var tempCategLabels = [...yieldcost_names];

        var yieldCostData = <?php print_r($yieldcost); ?>;

        var yieldCostScat = new Chart(yieldCost, {
            // The type of chart we want to create
            type: 'scatter',

            // The data for our dataset
            data: {
                labels: tempCategLabels,
                datasets: [{
                    data: yieldCostData,
                    backgroundColor: '#2037B2',
                    borderColor: '#2037B2',
                    pointRadius: 3,
                    pointHoverRadius: 3
                }]
            },
            // Configuration options go here
            options: {
                aspectRatio: 2,
                tooltips: {
                    callbacks: {
                        label: function(tooltipItem, data) {
                            var label = data.labels[tooltipItem.index];
                            return label + ': (Yield: ' + tooltipItem.xLabel + ' mt/ha, Cost/kg: PhP ' + tooltipItem.yLabel + ')';
                        }
                    }
                },
                legend: {
                    display: false
                },
                scales: {
                    yAxes: [{
                        ticks: {
                            min: 10
                        }
                    }],
                    xAxes: [{
                        ticks: {
                            min: 1,
                            max: 7
                        }
                    }]
                },
                annotation: {
                    annotations: [{
                        id: 'hline',
                        type: 'line',
                        mode: 'horizontal',
                        scaleID: 'y-axis-1',
                        value: 13.04,
                        borderColor: 'tomato',
                        borderWidth: 1,
                        fontName: 'Poppins',
                        label: {
                            content: 'PhP 13.04/kg',
                            position: 'right',
                            enabled: true
                        }
                    }, {
                        id: 'vline',
                        type: 'line',
                        mode: 'vertical',
                        scaleID: 'x-axis-1',
                        value: 4.12,
                        borderColor: 'tomato',
                        borderWidth: 1,
                        fontName: 'Poppins',
                        label: {
                            content: '4.12 mt/ha',
                            position: 'bottom',
                            enabled: true
                        }
                    }],
                    drawTime: "afterDraw" // (default)
                }
            }
        });

    </script>
</body>

</html>
