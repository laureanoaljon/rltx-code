<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Top Active Ingredients of Pesticides</title>
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
          <a class="btn btn-warning mr-2 text-white" href="<?php echo base_url(); ?>farmpractices" role="button"><i class="bi bi-caret-left"></i> Back to Main</a>
        </nav>
        
        <div id="default" class="jumbotron text-center">            
            <div class="jumbotron-content">
                <h2>Rice Farming Practices in the Philippines</h2>
                <h1>Top Active Ingredients of Pesticides</h1>
            </div>
        </div>
        
        <!-- Body -->
        <div class="sublevel">
            <div class="row">
                <div class="col">
                    <div class="card mb-4">
                          <div class="card-header text-left">
<a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a>
                            <h5 class="my-0 pt-2 pb-2">Top 5 Herbicides Used (2017)</h5>
                            <p class="my-0 font-weight-normal text-muted">in percent (RBFHS, PhilRice-SED, 2019)</p>
                          </div>
                          <div class="card-body text-center">
                            <div><canvas id="ctxHerbicide"></canvas></div>
                          </div>
                        <div class="card-footer text-muted">
	Data Source: <a href="https://palaystat.philrice.gov.ph/profile/retrieve/table/64" target="_blank">Average active ingredients (kg/ha) of pesticides used per chemical type, by cropping season - PalayStat System</a>
</div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-4">
                          <div class="card-header text-left">
<a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a>
                            <h5 class="my-0 pt-2 pb-2">Top 5 Insecticide Used (2017)</h5>
                            <p class="my-0 font-weight-normal text-muted">in percent (RBFHS, PhilRice-SED, 2019)</p>
                          </div>
                          <div class="card-body text-center">
                            <div><canvas id="ctxInsecticide"></canvas></div>
                          </div>
                        <div class="card-footer text-muted">
	Data Source: <a href="https://palaystat.philrice.gov.ph/profile/retrieve/table/64" target="_blank">Average active ingredients (kg/ha) of pesticides used per chemical type, by cropping season - PalayStat System</a>
</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card mb-4">
                          <div class="card-header text-left">
<a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a>
                            <h5 class="my-0 pt-2 pb-2">Top 5 Fungicides Used (2017)</h5>
                            <p class="my-0 font-weight-normal text-muted">in percent (RBFHS, PhilRice-SED, 2019)</p>
                          </div>
                          <div class="card-body text-center">
                            <div><canvas id="ctxFungicide"></canvas></div>
                          </div>
                        <div class="card-footer text-muted">
	Data Source: <a href="https://palaystat.philrice.gov.ph/profile/retrieve/table/64" target="_blank">Average active ingredients (kg/ha) of pesticides used per chemical type, by cropping season - PalayStat System</a>
</div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-4">
                          <div class="card-header text-left">
<a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a>
                            <h5 class="my-0 pt-2 pb-2">Top 5 Other Pesticides Used (2017)</h5>
                            <p class="my-0 font-weight-normal text-muted">in percent (RBFHS, PhilRice-SED, 2019)</p>
                          </div>
                          <div class="card-body text-center">
                            <div><canvas id="ctxOtherPest"></canvas></div>
                          </div>
                        <div class="card-footer text-muted">
	Data Source: <a href="https://palaystat.philrice.gov.ph/profile/retrieve/table/64" target="_blank">Average active ingredients (kg/ha) of pesticides used per chemical type, by cropping season - PalayStat System</a>
</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card mb-4">
                        <div class="card-header text-left">
<a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Table</a>
                            <h5 class="my-0 pt-2 pb-2">Top active ingredient applied by pesticide type, by province (2017)</h5>
                            <p class="my-0 font-weight-normal text-muted">(RBFHS, PhilRice-SED, 2019)</p>
                        </div>
                        <div class="card-body">
                            <table class="table table-hover table-fixed">
                              <thead>
                                <tr>
                                  <th class="align-middle" scope="col" rowspan="2">Region/Province</th>
                                  <th class="text-center "scope="col" colspan="4">Top active ingredient</th>
                                </tr>
                                <tr>
                                  <th scope="col">Herbicide</th>
                                  <th scope="col">Insecticide</th>
                                  <th scope="col">Fungicide</th>
                                  <th scope="col">Other Pesticide</th>
                                </tr>
                              </thead>
                              <tbody>
                                  <?php
                                        $temp_region = $temp_prov = $cell_color = "";
                                        for ($i = 0; $i < count($pest_provincial); $i++) {
                                            
                                            if($pest_provincial[$i]['region'] != $temp_region){
                                                echo "<tr>";
                                                echo '<td colspan="5"><span class="font-weight-bold">'. $pest_provincial[$i]['region'] . '</td>';
                                                echo "</tr>";
                                            }
                                            
                                            $temp_region = $pest_provincial[$i]['region'];
                                            
                                            if($pest_provincial[$i]['location_name'] != $temp_prov){
                                                echo "<tr>";
                                                echo '<td class="align-middle">' . $pest_provincial[$i]['location_name'] . "</td>"; 
                                                echo '<td class="align-middle">'. ucwords($pest_provincial[$i]['label'])   .'</td>'; $i++;
                                                echo '<td class="align-middle">'. ucwords($pest_provincial[$i]['label']) .'</td>'; $i++;
                                                echo '<td class="align-middle">'. ucwords($pest_provincial[$i]['label']) .'</td>'; $i++;
                                                echo '<td class="align-middle">'. ucwords($pest_provincial[$i]['label']) .'</td>';
                                                echo "</tr>";
                                            }
                                            
                                            $temp_prov = $pest_provincial[$i]['location_name'];
                                            
                                        }
                                    ?>
                              </tbody>
                            </table>
                        </div>
                        <div class="card-footer text-muted">
	Data Source: <a href="https://palaystat.philrice.gov.ph/profile/retrieve/table/64" target="_blank">Average active ingredients (kg/ha) of pesticides used per chemical type, by cropping season - PalayStat System</a>
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

        // CHART 1

        var dbPest = JSON.parse('<?php echo $pest_all; ?>');
        
        let years = [];
        let values_h = [];
        let values_h_labels = [];
        let values_i = [];
        let values_i_labels = [];
        let values_f = [];
        let values_f_labels = [];
        let values_o = [];
        let values_o_labels = [];

        
        try {
              for (let i = 0; i < dbPest.length; i++){
                  years.push(dbPest[i].year);
                  switch(dbPest[i].type) {
                      case 'H': {
                          values_h_labels.push(dbPest[i].label);
                          values_h.push(parseInt(dbPest[i].value));
                          break;
                      }
                      case 'I': {
                          values_i_labels.push(dbPest[i].label);
                          values_i.push(parseInt(dbPest[i].value));
                          break;
                      }
                      case 'F': {
                          values_f_labels.push(dbPest[i].label);
                          values_f.push(parseInt(dbPest[i].value));
                          break;
                      }
                      case 'O': {
                          values_o_labels.push(dbPest[i].label);
                          values_o.push(parseInt(dbPest[i].value));
                          break;
                      }
                  }
              }
            } catch (error) {
              console.log(error);
        }
        
        var tempPLabels = [...years];
        var herbsL = [...values_h_labels];
        var herbs = [...values_h];
        var herbs_oth = 100 - (herbs.reduce((a, b) => a + b, 0));
        if(herbs_oth > 0){
            herbsL.push("OTHER HERBICIDES");
            herbs.push(herbs_oth);
        }
        
        var insectL = [...values_i_labels];
        var insect = [...values_i];
        var insect_oth = 100 - (insect.reduce((a, b) => a + b, 0));
        if(insect_oth > 0){
           insectL.push("OTHER INSECTICIDES");
           insect.push(herbs_oth);
        }
                          
        var fungiL = [...values_f_labels];
        var fungi = [...values_f];
        var fungi_oth = 100 - (fungi.reduce((a, b) => a + b, 0));
        if(fungi_oth > 0){
           fungiL.push("OTHER FUNGICIDES");
           fungi.push(fungi_oth);
        }
        
        var othL = [...values_o_labels];
        var oth = [...values_o];
        var oth_oth = 100 - (oth.reduce((a, b) => a + b, 0));
        if(oth_oth > 0){
           othL.push("OTHER PESTICIDES");
            oth.push(oth_oth);
        }
        
        var ctx = document.getElementById("ctxHerbicide");
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: herbsL,
                datasets: [{
                    data: herbs,
                    backgroundColor: [
                        '#285225', // COLOR 1
                        '#3c6639', // COLOR 2
                        '#507a4d', // COLOR 3
                        '#648e61', // COLOR 4
                        '#78a275', // COLOR 5
                        '#8cb689' // COLOR 6
                    ],
                    borderColor: [
                        '#285225', // COLOR 1
                        '#3c6639', // COLOR 2
                        '#507a4d', // COLOR 3
                        '#648e61', // COLOR 4
                        '#78a275', // COLOR 5
                        '#8cb689' // COLOR 6
                    ]
                }]
            },
            options: {
                aspectRatio: 1.5,
                legend: {
                    display: true,
                    position: 'bottom'
                },
                responsive: true,
                maintainAspectRatio: true,
                plugins: {
                    labels: false
                },
                tooltips: {
                  callbacks: {
                    label: function(tooltipItem, data) {
                      return data['labels'][tooltipItem['index']] + ': ' + data['datasets'][0]['data'][tooltipItem['index']] + '%';
                    }
                  }
                }
            }
        }); 
        
        var ctx1 = document.getElementById("ctxInsecticide");
        var myChart1 = new Chart(ctx1, {
            type: 'pie',
            data: {
                labels: insectL,
                datasets: [{
                    data: insect,
                    backgroundColor: [
                        '#ebbe2f', // COLOR 1
                        '#ffd243', // COLOR 2
                        '#ffe657', // COLOR 3
                        '#fffa6b', // COLOR 4
                        '#ffff7f', // COLOR 5
                        '#ffff93' // COLOR 6
                    ],
                    borderColor: [
                        '#ebbe2f', // COLOR 1
                        '#ffd243', // COLOR 2
                        '#ffe657', // COLOR 3
                        '#fffa6b', // COLOR 4
                        '#ffff7f', // COLOR 5
                        '#ffff93' // COLOR 6
                    ]
                }]
            },
            options: {
                aspectRatio: 1.5,
                legend: {
                    display: true,
                    position: 'bottom'
                },
                responsive: true,
                maintainAspectRatio: true,
                plugins: {
                    labels: false
                },
                tooltips: {
                  callbacks: {
                    label: function(tooltipItem, data) {
                      return data['labels'][tooltipItem['index']] + ': ' + data['datasets'][0]['data'][tooltipItem['index']] + '%';
                    }
                  }
                }
            }
        }); 
        
        var ctx2 = document.getElementById("ctxFungicide");
        var myChart2 = new Chart(ctx2, {
            type: 'pie',
            data: {
                labels: fungiL,
                datasets: [{
                    data: fungi,
                    backgroundColor: [
                        '#913425', // COLOR 1
                        '#a54839', // COLOR 2
                        '#c36657', // COLOR 3
                        '#cd7061', // COLOR 4
                        '#e18475', // COLOR 5
                        '#f59889' // COLOR 6
                    ],
                    borderColor: [
                        '#913425', // COLOR 1
                        '#a54839', // COLOR 2
                        '#c36657', // COLOR 3
                        '#cd7061', // COLOR 4
                        '#e18475', // COLOR 5
                        '#f59889' // COLOR 6
                    ]
                }]
            },
            options: {
                aspectRatio: 1.5,
                legend: {
                    display: true,
                    position: 'bottom'
                },
                responsive: true,
                maintainAspectRatio: true,
                plugins: {
                    labels: false
                },
                tooltips: {
                  callbacks: {
                    label: function(tooltipItem, data) {
                      return data['labels'][tooltipItem['index']] + ': ' + data['datasets'][0]['data'][tooltipItem['index']] + '%';
                    }
                  }
                }
            }
        }); 
        
        var ctx3 = document.getElementById("ctxOtherPest");
        var myChart3 = new Chart(ctx3, {
            type: 'pie',
            data: {
                labels: othL,
                datasets: [{
                    data: oth,
                    backgroundColor: [
                        '#252566', // COLOR 1
                        '#39397a', // COLOR 2
                        '#4d4d8e', // COLOR 3
                        '#6161a2', // COLOR 4
                        '#7575b6', // COLOR 5
                        '#8989ca' // COLOR 6
                    ],
                    borderColor: [
                        '#252566', // COLOR 1
                        '#39397a', // COLOR 2
                        '#4d4d8e', // COLOR 3
                        '#6161a2', // COLOR 4
                        '#7575b6', // COLOR 5
                        '#8989ca' // COLOR 6
                    ]
                }]
            },
            options: {
                aspectRatio: 1.5,
                legend: {
                    display: true,
                    position: 'bottom'
                },
                responsive: true,
                maintainAspectRatio: true,
                plugins: {
                    labels: false
                },
                tooltips: {
                  callbacks: {
                    label: function(tooltipItem, data) {
                      return data['labels'][tooltipItem['index']] + ': ' + data['datasets'][0]['data'][tooltipItem['index']] + '%';
                    }
                  }
                }
            }
        }); 
        </script>
    </body>
</html>