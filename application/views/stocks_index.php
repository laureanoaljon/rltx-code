<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Rice Stock Inventory</title>
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
                    <a class="btn btn-warning mr-2 text-white" href="<?php echo base_url(); ?>" role="button"><i class="bi bi-caret-left"></i> Back to Main</a>
                </nav>

                <!-- Header --->
                <div id="supply" class="jumbotron text-center">
                    <div class="jumbotron-content">
                        <h2>State of the Rice Sector in the Philippines</h2>
                        <h1>Rice Stock Inventory</h1>
                        <p class="lead" </p>
                    </div>
                </div>

                <!-- Body -->
                <?php
                    $monthyear = "";
                    switch ((int)$total[0]['month']) {
                        case 1:
                            $monthyear = "Jan " . $total[0]['year'];
                            break;
                        case 2:
                            $monthyear = "Feb " . $total[0]['year'];
                            break;
                        case 3:
                            $monthyear = "Mar " . $total[0]['year'];
                            break;
                        case 4:
                            $monthyear = "Apr " . $total[0]['year'];
                            break;
                        case 5:
                            $monthyear = "May " . $total[0]['year'];
                            break;
                        case 6:
                            $monthyear = "Jun " . $total[0]['year'];
                            break;
                        case 7:
                            $monthyear = "Jul " . $total[0]['year'];
                            break;
                        case 8:
                            $monthyear = "Aug " . $total[0]['year'];
                            break;
                        case 9:
                            $monthyear = "Sep " . $total[0]['year'];
                            break;
                        case 10:
                            $monthyear = "Oct " . $total[0]['year'];
                            break;
                        case 11:
                            $monthyear = "Nov " . $total[0]['year'];
                            break;
                        case 12:
                            $monthyear = "Dec " . $total[0]['year'];
                            break;
                    }
                ?>
                <div class="sublevel">
                    <div class="row">
                        <div class="col">
                            <div class="card-deck mb-2 text-center">
                                <div class="card primary mb-4 bg-primary text-white">
                                    <div class="card-body">
                                        <h5 class="card-title pb-2">Total (<?php echo $monthyear; ?>)</h5>
                                        <h1 class="card-text font-weight-bold smaller"><?php echo $total[0]['value']; ?><i class="<?php echo $total_caret; ?>"></i></h1>
                                        <div class="card-note w-75 mx-auto rounded-pill bg-warning">
                                            <p class="text-white">million metric tons</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card primary mb-4 bg-alternate">
                                    <div class="card-body">
                                        <h5 class="card-title pb-2">Household Stock (<?php echo $monthyear; ?>)</h5>
                                        <h1 class="card-text font-weight-bold smaller"><?php echo $household[0]['value']; ?><i class="<?php echo $h_caret; ?>"></i></h1>
                                        <div class="card-note w-75 mx-auto rounded-pill bg-primary">
                                            <p class="text-white">million metric tons</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card primary mb-4 bg-alternate">
                                    <div class="card-body">
                                        <h5 class="card-title pb-2">Commerical Stock (<?php echo $monthyear; ?>)</h5>
                                        <h1 class="card-text font-weight-bold smaller"><?php echo $commercial[0]['value']; ?><i class="<?php echo $c_caret; ?>"></i></h1>
                                        <div class="card-note w-75 mx-auto rounded-pill bg-primary">
                                            <p class="text-white">million metric tons</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card primary mb-4 bg-alternate">
                                    <div class="card-body">
                                        <h5 class="card-title pb-2">NFA Stock (<?php echo $monthyear; ?>)</h5>
                                        <h1 class="card-text font-weight-bold smaller"><?php echo $nfa[0]['value']; ?><i class="<?php echo $n_caret; ?>"></i></h1>
                                        <div class="card-note w-75 mx-auto rounded-pill bg-primary">
                                            <p class="text-white">million metric tons</p>
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
                                    <h5 class="my-0 pt-2 pb-2">Monthly Rice Stock Inventory (2018-2022)</h5>
                                    <p class="my-0 font-weight-normal text-muted">in metric tons (PSA, 2022)</p>
                                </div>
                                <div class="card-body">
                                    <div><canvas id="ctxStocks"></canvas></div>
                                </div>
                                <div class="card-footer text-muted">
                                    Data Source: <a href="https://openstat.psa.gov.ph/PXWeb/pxweb/en/DB/DB__2E__CS/0032E4ECNV0.px/?rxid=27c2021b-8ad5-4917-a9a3-db598f2a8e19" target="_blank"> Rice Stocks: Household, Commerical and NFA - Philippine Statistics Authority</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="card mb-4">
                                <div class="card-header text-left">
                                    <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a>
                                    <h5 class="my-0 pt-2 pb-2">Yearly Rice Stock Inventory Per Month (2018-2022)</h5>
                                    <p class="my-0 font-weight-normal text-muted">in metric tons (PSA, 2022)</p>
                                </div>
                                <div class="card-body">
                                    <div><canvas id="ctxStocksYear"></canvas></div>
                                </div>
                                <div class="card-footer text-muted">
                                    Data Source: <a href="https://openstat.psa.gov.ph/PXWeb/pxweb/en/DB/DB__2E__CS/0032E4ECNV0.px/?rxid=27c2021b-8ad5-4917-a9a3-db598f2a8e19" target="_blank"> Rice Stocks: Household, Commerical and NFA - Philippine Statistics Authority</a>
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
        Chart.defaults.global.defaultFontSize = 12;
        Chart.defaults.global.animation.duration = 3000;
        Chart.defaults.global.defaultFontColor = "#000000";

        var dbTotalStocksMon = JSON.parse('<?php echo $total_all; ?>');

        let monthly = [];
        let values_nmon_prices = [];

        try {
            dbTotalStocksMon.map((item) => {

                switch (parseInt(item.month)) {
                    case 1:
                        monthly.push("Jan " + item.year);
                        break;
                    case 2:
                        monthly.push("Feb " + item.year);
                        break;
                    case 3:
                        monthly.push("Mar " + item.year);
                        break;
                    case 4:
                        monthly.push("Apr " + item.year);
                        break;
                    case 5:
                        monthly.push("May " + item.year);
                        break;
                    case 6:
                        monthly.push("Jun " + item.year);
                        break;
                    case 7:
                        monthly.push("Jul " + item.year);
                        break;
                    case 8:
                        monthly.push("Aug " + item.year);
                        break;
                    case 9:
                        monthly.push("Sep " + item.year);
                        break;
                    case 10:
                        monthly.push("Oct " + item.year);
                        break;
                    case 11:
                        monthly.push("Nov " + item.year);
                        break;
                    case 12:
                        monthly.push("Dec " + item.year);
                        break;
                }
                values_nmon_prices.push(item.value);
            });
        } catch (error) {
            console.log(error);
        }

        var farmPricesMon = document.getElementById('ctxStocks').getContext('2d');
        var tempFarmMon = [...monthly];
        var farmPriceDataMon = [...values_nmon_prices];
        var farmPricesMonChart = new Chart(farmPricesMon, {
            // The type of chart we want to create
            type: 'line',

            // The data for our dataset
            data: {
                labels: tempFarmMon,
                datasets: [{
                    label: 'Total rice stocks',
                    backgroundColor: '#2138b7', // COLOR 1
                    borderColor: '#2138b7', // COLOR 1
                    data: farmPriceDataMon,
                    borderWidth: 2
                }]
            },

            // Configuration options go here
            options: {
                aspectRatio: 2.2,
                elements: {
                    point: {
                        radius: 0
                    },
                    line: {
                        fill: false
                    }
                },
                scales: {
                    xAxes: [{
                        display: true,
                        gridLines: {
                            color: "rgba(0, 0, 0, 0)"
                        },
                        ticks: {
                            autoSkip: true,
                            maxTicksLimit: 20
                        }
                    }],
                    yAxes: [{
                        display: true,
                        ticks: {
                            suggestedMin: 0,
                            userCallback: function(value, index, values) {
                                value = value.toString();
                                value = value.split(/(?=(?:...)*$)/);
                                value = value.join(',');
                                return value;
                            }
                        }
                    }]
                },
                legend: {
                    display: false,
                    labels: {
                        fontSize: 12
                    }
                },
                tooltips: {
                    callbacks: {
                        label: function(tooltipItem, data) {
                            var tooltipValue = data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index];
                            return data.datasets[tooltipItem.datasetIndex].label + ": " + parseInt(tooltipValue).toLocaleString();
                        }
                    }
                }
            }
        });

        let yearly = [];
        let values_prices = [];
        let year = -1;
        let prevYear = -1;

        try {
            dbTotalStocksMon.map((item, i) => {
                if (prevYear < parseInt(item.year)) {
                    prevYear = item.year;
                    year = year + 1;
                    yearly[year] = [];
                    values_prices[year] = [];
                }

                switch (parseInt(item.month)) {
                    case 1:
                        yearly[year].push("Jan " + item.year);
                        break;
                    case 2:
                        yearly[year].push("Feb " + item.year);
                        break;
                    case 3:
                        yearly[year].push("Mar " + item.year);
                        break;
                    case 4:
                        yearly[year].push("Apr " + item.year);
                        break;
                    case 5:
                        yearly[year].push("May " + item.year);
                        break;
                    case 6:
                        yearly[year].push("Jun " + item.year);
                        break;
                    case 7:
                        yearly[year].push("Jul " + item.year);
                        break;
                    case 8:
                        yearly[year].push("Aug " + item.year);
                        break;
                    case 9:
                        yearly[year].push("Sep " + item.year);
                        break;
                    case 10:
                        yearly[year].push("Oct " + item.year);
                        break;
                    case 11:
                        yearly[year].push("Nov " + item.year);
                        break;
                    case 12:
                        yearly[year].push("Dec " + item.year);
                        break;
                }
                values_prices[year].push(item.value);
            });
        } catch (error) {
            console.log(error);
        }
        
        var farmPriceDataYr = [];
        
        $.each(yearly, function(index) {
            var temp = [...values_prices[index]];
            farmPriceDataYr[index] = temp;
        });
        
        let allData = [];
        var yearStart = 2018;
                
        for (let i = 0; i < 5; i++) {
            allData[i] = [];
            allData[i]['label'] = yearStart;
            var color = "#000000";
            switch (i) {
                case 0: color = "#081664"; break;     
                case 1: color = "#1884b8"; break;     
                case 2: color = "#b8b10f"; break;     
                case 3: color = "#b87c33"; break;     
                case 4: color = "#0f28b8"; break;            
            }
            
            allData[i]['backgroundColor'] = color; // COLOR 1
            allData[i]['borderColor'] = color; // COLOR 1
            allData[i]['data'] = farmPriceDataYr[i];
            allData[i]['borderWidth'] = 2;
            yearStart = yearStart + 1;
        }
        
        var farmPricesYear = document.getElementById('ctxStocksYear').getContext('2d');
        var farmPricesYrChart = new Chart(farmPricesYear, {
            // The type of chart we want to create
            type: 'line',

            // The data for our dataset
            data: {
                labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
                datasets: allData
            },

            // Configuration options go here
            options: {
                aspectRatio: 2.2,
                elements: {
                    point: {
                        radius: 0
                    },
                    line: {
                        fill: false
                    }
                },
                scales: {
                    xAxes: [{
                        display: true,
                        gridLines: {
                            color: "rgba(0, 0, 0, 0)"
                        }
                    }],
                    yAxes: [{
                        display: true,
                        ticks: {
                            suggestedMin: 0,
                            userCallback: function(value, index, values) {
                                value = value.toString();
                                value = value.split(/(?=(?:...)*$)/);
                                value = value.join(',');
                                return value;
                            },
                        }
                    }]
                },
                legend: {
                    display: true,
                    position: 'bottom',
                    onClick: (e) => e.stopPropagation(),
                    labels: {
                        fontSize: 12,
                    }
                },
                tooltips: {
                    mode: 'nearest',
                  intersect: false,
                    callbacks: {
                        label: function(tooltipItem, data) {
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
