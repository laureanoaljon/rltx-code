<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>State of the Rice Sector in <?php echo $production_all['location_name'];?></title>
    <meta name="description" content="Main Page">
    <?php 
            echo link_tag('css/bootstrap-reboot.min.css');
            echo link_tag('css/bootstrap.min.css');
            echo link_tag('css/bootstrap-grid.min.css');
            echo link_tag('css/bootstrap-icons.css');
            echo link_tag('css/sidebarjs.min.css');
            echo link_tag('css/booklet-style.css');    
    ?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-E2XBB2166Q"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-E2XBB2166Q');
</script>

<script type="text/javascript">
    function Print(){
        var css = '@page { size: A4 landscape; }',
        head = document.head || document.getElementsByTagName('head')[0],
        style = document.createElement('style');

        style.type = 'text/css';
        style.media = 'print';

        if (style.styleSheet){
        style.styleSheet.cssText = css;
        } else {
        style.appendChild(document.createTextNode(css));
        }

        head.appendChild(style);
        window.print()
    };
</script>

<style>
    @media print and (max-height: 1100px) {
        .pagebreak { page-break-before: always; } /* page-break-after works, as well */

        body {
            background-color: white !important;
            -webkit-print-color-adjust: exact !important;
        }

        @page {
            margin: 0 0 0 0 !important;
        }

        #sidebarView, #sidebarMenu, #feedbackModal, .footer, br.pagebreak{
            display: none !important;
        }

        main.col {
            padding: 0;
            margin-left: 0;
        }

        /* lahat ng card */
        .card.primary{
            height: 120px;
        }

        /* ///////////////////////////////////////// MAIN /////////////////////////////////////// */

        /* Pagresize ng page for printing */
        div.dashboard{
            height: 625px;
            width: 1150px;
        }

        #dashboard-main-prov{
            min-height: 100%;
            max-height: 100%;
            max-width: 100%;
            height: 790px !important;
            width: 100% !important;
            background-size:cover !important;
            background-repeat:no-repeat !important;
            background-position:center center !important;
        }

        /* Resize ng banner */
        /* div#main.jumbotron{
            height: 150px;
        } */

        /* lahat ng h1 sa card */
        .card.primary h1{
            font-size: 40px;
            margin-top: -10px;
        }

        #h1-dry-palay h1{
            font-size: 40px !important;
        }

        /* ////////////////////////////////////// PRODUCTION ////////////////////////////// */

        /* Pagresize ng page for printing */
        div.sublevel#production1-prov{
            min-height: 100%;
            max-height: 100%;
            max-width: 100%;
            height: 790px !important;
            width: 100% !important;
            background-size:cover !important;
            background-repeat:no-repeat !important;
            background-position:center center !important;
        }

        /* Resize ng banner */
        /* div#production.jumbotron{
            height: 150px;
        } */

        /* Resize ng chart div */
        div#production1-chart1.card.mb-4{
            height: 450px;
        }

        /* Resize production bar chart*/
        canvas#ctxProdStack{
            min-height: 100%;
            max-width: 100%;
            max-height: 100%;
            height: 310px !important;
            width: 100% !important;
        }

        /* //////////////////////////////////// HARVEST AREA //////////////////////////////// */
        /* Pagresize ng page for printing */
        div.sublevel#area1-prov{
            min-height: 100%;
            max-height: 100%;
            max-width: 100%;
            height: 790px !important;
            width: 100% !important;
            background-size:cover !important;
            background-repeat:no-repeat !important;
            background-position:center center !important;
        }

        /* Resize ng banner */
        /* div#area.jumbotron{
            height: 150px;
        } */

        /* Resize ng chart div */
        div#area1-chart1.card.mb-4{
            height: 450px;
        }

        /* Resize harvest area chart*/
        canvas#ctxAreaStack{
            min-height: 100%;
            max-width: 100%;
            max-height: 100%;
            height: 310px !important;
            width: 100% !important;
        }

        /* ///////////////////////////////////// EST YIELD //////////////////////////////////////////// */
        /* Pagresize ng page for printing */
        div.sublevel#yield1-prov{
            min-height: 100%;
            max-height: 100%;
            max-width: 100%;
            height: 790px !important;
            width: 100% !important;
            background-size:cover !important;
            background-repeat:no-repeat !important;
            background-position:center center !important;
        }

        /* Resize ng banner */
        /* div#yield.jumbotron{
            height: 150px;
        } */

        /* Resize ng chart div */
        div#yield-chart.card.mb-4{
            height: 450px;
        }

        /* Resize est yield chart*/
        canvas#ctxYieldStack{
            min-height: 100%;
            max-width: 100%;
            max-height: 100%;
            height: 310px !important;
            width: 100% !important;
        }

        /* ///////////////////////////////////// PRICES 1 ////////////////////////////////////////////////// */
        /* Pagresize ng page for printing */
        div.sublevel#price1-prov{
            min-height: 100%;
            max-height: 100%;
            max-width: 100%;
            height: 790px !important;
            width: 100% !important;
            background-size:cover !important;
            background-repeat:no-repeat !important;
            background-position:center center !important;
        }

        /* Resize ng banner */
        /* div#price1.jumbotron{
            height: 150px;
        } */

       /* prices card */
       .card.primary.prices{
            height: 170px;
        }     

        /* Resize ng chart div */
        div#price1-chart1.card.mb-4{
            height: 390px;
        }

        /* Resize prices 1 chart 1 */
        canvas#ctxFarmPrices{
            min-height: 100%;
            max-width: 100%;
            max-height: 100%;
            height: 245px !important;
            width: 100% !important;
        }

        /* //////////////////////////// PRICES 2 ////////////////////////////////////// */
        /* Pagresize ng page for printing */
        div.sublevel#price2-prov{
            min-height: 100%;
            max-height: 100%;
            max-width: 100%;
            height: 790px !important;
            width: 100% !important;
            background-size:cover !important;
            background-repeat:no-repeat !important;
            background-position:center center !important;
        }
   
        /* Resize ng chart div */
        div#price2-chart1.card.mb-4{
            height: 357px;
        }

        /* Resize ng chart div */
        div#price2-chart2.card.mb-4{
            height: 357px;
        }

         /* Resize prices 2 chart 1 */
        canvas#ctxWholesalePrices{
            min-height: 100%;
            max-width: 100%;
            max-height: 100%;
            height: 212px !important;
            width: 100% !important;
        }

        /* Resize prices 2 chart 2 */
        canvas#ctxRetailPrices{
            min-height: 100%;
            max-width: 100%;
            max-height: 100%;
            height: 212px !important;
            width: 100% !important;
        }

        /* ///////////////////////////////////// PROFILE ///////////////////////////////////////////////*/

        /* profile card */
       .card.primary.row-w{
            height: 140px !important;
        }

        #profile1-prov{
            min-height: 100%;
            max-height: 100%;
            max-width: 100%;
            height: 790px !important;
            width: 100% !important;
            background-size:cover !important;
            background-repeat:no-repeat !important;
            background-position:center center !important; 
        }

        /* //////////////////////////////////// MONTHLY INCOME 1 ////////////////////////////////////// */

        /* Pagresize ng page for printing */
        div.sublevel#monthlyincome1-prov{
            min-height: 100%;
            max-height: 100%;
            max-width: 100%;
            height: 790px !important;
            width: 100% !important;
            background-size:cover !important;
            background-repeat:no-repeat !important;
            background-position:center center !important; 
        }

        /* Resize ng banner */
        /* div#netincome.jumbotron{
            height: 150px;
        } */

        /* Resize ng chart 1 div */
        div#monthlyincome1-chart1.card.mb-4{
            height: 410px;
        }

        /* Resize ng chart 2 div */
        div#monthlyincome1-chart2.card.mb-4{
            height: 410px;
        }

        /* Resize ng chart 3 div */
        div#monthlyincome1-chart3.card.mb-4{
            height: 410px;
        }

        /* Resize monthlyincome1 chart 1*/
        canvas#monthlyincome_ctxChart1{
            min-height: 100%;
            max-width: 100%;
            max-height: 100%;
            height: 200px !important;
            width: 100% !important;
        }

        /* Resize monthlyincome1 chart 2*/
        canvas#monthlyincome_ctxChart2{
            min-height: 100%;
            max-width: 100%;
            max-height: 100%;
            height: 210px !important;
            width: 100% !important;
        }

        /* Resize monthlyincome1 chart 3*/
        canvas#monthlyincome_ctxChart3{
            min-height: 100%;
            max-width: 100%;
            max-height: 100%;
            height: 210px !important;
            width: 100% !important;
        }

        /* /////////////////////////////////////////// SOCIAL 1 ///////////////////////////////////////////////// */

        /* Pagresize ng page for printing */
        div.sublevel#social1-prov{
            min-height: 100%;
            max-height: 100%;
            max-width: 100%;
            height: 790px !important;
            width: 100% !important;
            background-size:cover !important;
            background-repeat:no-repeat !important;
            background-position:center center !important; 
        }

        /* Resize ng banner */
        /* div#social.jumbotron{
            height: 150px;
        } */

        /* social 1 pie chart 1 */
        canvas#social_ctxSex{
            min-height: 100%;
            max-width: 100%;
            max-height: 100%;
            height: 90px !important;
            width: 90% !important;
        }

        /* social 1 pie chart 2 */
        canvas#social_ctxCivil{
            min-height: 100%;
            max-width: 100%;
            max-height: 100%;
            height: 90px !important;
            width: 90% !important;
        }

        /* Resize ng chart 1 div */
        div#social1-chart1.card.mb-4{
            height: 430px;
        }

        /* Resize ng chart 2 div */
        div#social1-chart2.card.mb-4{
            height: 430px;
        }

        /* Resize ng chart 3 div */
        div#social1-chart3.card.mb-4{
            height: 430px;
        }

        /* Resize social1 chart 1*/
        canvas#ctxAgeGroup{
            min-height: 100%;
            max-width: 100%;
            max-height: 100%;
            height: 230px !important;
            width: 100% !important;
        }

        /* Resize social1 chart 2*/
        canvas#ctxCivilGroup{
            min-height: 100%;
            max-width: 100%;
            max-height: 100%;
            height: 230px !important;
            width: 100% !important;
        }

        /* Resize social1 chart 3*/
        canvas#ctxSexGroup{
            min-height: 100%;
            max-width: 100%;
            max-height: 100%;
            height: 230px !important;
            width: 100% !important;
        }

        /* //////////////////////////////// FARM DETAILS 1 //////////////////////////////// */

        /* Pagresize ng page for printing */
        div.sublevel#farmdetail1-prov{
            min-height: 100%;
            max-height: 100%;
            max-width: 100%;
            height: 790px !important;
            width: 100% !important;
            background-size:cover !important;
            background-repeat:no-repeat !important;
            background-position:center center !important; 
        }

        /* Resize ng banner */
        /* div#farmdetails.jumbotron{
            height: 150px;
        } */

        /* farmdetail 1 pie chart 1 */
        canvas#farmdetails_ctxTenStat{
            min-height: 100%;
            max-width: 100%;
            max-height: 100%;
            height: 95px !important;
            width: 100% !important;
        }

        /* Resize ng chart 1 div */
        div#farmdetail1-chart1.card.mb-4{
            height: 450px;
        }

        /* Resize ng chart 2 div */
        div#farmdetail1-chart2.card.mb-4{
            height: 450px;
        }

        /* Resize farmdetail1 chart 1*/
        canvas#ctxFarmSize{
            min-height: 100%;
            max-width: 100%;
            max-height: 100%;
            height: 250px !important;
            width: 100% !important;
        }

        /* Resize farmdetail1 chart 2*/
        canvas#ctxTenStatYear{
            min-height: 100%;
            max-width: 100%;
            max-height: 100%;
            height: 250px !important;
            width: 100% !important;
        }

        /* /////////////////////////////////// HOUSEHOLD SIZE INCOME 1 ////////////////////////////// */

        /* Pagresize ng page for printing */
        div.sublevel#householdsizeincome1-prov{
            min-height: 100%;
            max-height: 100%;
            max-width: 100%;
            height: 790px !important;
            width: 100% !important;
            background-size:cover !important;
            background-repeat:no-repeat !important;
            background-position:center center !important; 
        }

        /* Resize ng banner */
        /* div#hhsize.jumbotron{
            height: 150px;
        } */

        /* card sa hhsize */
        .card.primary.hhsize-row{
            height: 135px;
        }

        /* householdsizeincome1 1 pie chart 1 */
        canvas#householdsizeincome_ctxSource{
            min-height: 100%;
            max-width: 100%;
            max-height: 100%;
            height: 85px !important;
            width: 90% !important;
        }

        /* householdsizeincome1 1 pie chart 2 */
        canvas#ctxHSource{
            min-height: 100%;
            max-width: 100%;
            max-height: 100%;
            height: 85px !important;
            width: 90% !important;
        }

        /* Resize ng chart 1 div */
        div#householdsizeincome1-chart1.card.mb-4{
            height: 415px;
        }

        /* Resize ng chart 2 div */
        div#householdsizeincome1-chart2.card.mb-4{
            height: 415px;
        }

        /* Resize householdsizeincome1 chart 1*/
        canvas#ctxHhSize{
            min-height: 100%;
            max-width: 100%;
            max-height: 100%;
            height: 235px !important;
            width: 100% !important;
        }

        /* Resize householdsizeincome1 chart 2*/
        canvas#ctxSources{
            min-height: 100%;
            max-width: 100%;
            max-height: 100%;
            height: 235px !important;
            width: 100% !important;
        }

        /* ////////////////////////////////////// EDUC FARM EXP 1 ///////////////////////////////////// */

        /* Pagresize ng page for printing */
        div.sublevel#educfarmexp1-prov{
            min-height: 100%;
            max-height: 100%;
            max-width: 100%;
            height: 790px !important;
            width: 100% !important;
            background-size:cover !important;
            background-repeat:no-repeat !important;
            background-position:center center !important; 
        }

        /* Resize ng banner */
        /* div#farmexp.jumbotron{
            height: 150px;
        } */

        /* Resize ng chart 1 div */
        div#educfarmexp1-chart1.card.mb-4{
            height: 425px;
        }

        /* Resize ng chart 2 div */
        div#educfarmexp1-chart2.card.mb-4{
            height: 425px;
        }

        /* Resize educfarmexp1 chart 1*/
        canvas#educfarmexp_ctxChart1{
            min-height: 100%;
            max-width: 100%;
            max-height: 100%;
            height: 245px !important;
            width: 100% !important;
        }

        /* Resize educfarmexp1 chart 2*/
        canvas#educfarmexp_ctxChart2{
            min-height: 100%;
            max-width: 100%;
            max-height: 100%;
            height: 245px !important;
            width: 100% !important;
        }

        /* /////////////////////////////////////// ORG TRAINING 1 ////////////////////////////////// */

        /* Pagresize ng page for printing */
        div.sublevel#orgtraining1-prov{
            min-height: 100%;
            max-height: 100%;
            max-width: 100%;
            height: 790px !important;
            width: 100% !important;
            background-size:cover !important;
            background-repeat:no-repeat !important;
            background-position:center center !important;
        }

        /* Resize ng banner */
        /* div#orgtrain.jumbotron{
            height: 150px;
        } */

        /* orgtraining1 1 pie chart 1 */
        canvas#orgtraining_ctxOrg{
            min-height: 100%;
            max-width: 100%;
            max-height: 100%;
            height: 95px !important;
            width: 95% !important;
        }

        /* orgtraining1 1 pie chart 2 */
        canvas#orgtraining_ctxTrain{
            min-height: 100%;
            max-width: 100%;
            max-height: 100%;
            height: 95px !important;
            width: 95% !important;
        }

        /* Resize ng chart 1 div */
        div#orgtraining1-chart1.card.mb-4{
            height: 430px;
        }

        /* Resize ng chart 2 div */
        div#orgtraining1-chart2.card.mb-4{
            height: 430px;
        }

        /* Resize orgtraining1 chart 1*/
        canvas#ctxOrgY{
            min-height: 100%;
            max-width: 100%;
            max-height: 100%;
            height: 250px !important;
            width: 100% !important;
        }

        /* Resize orgtraining1 chart 2*/
        canvas#ctxTrainY{
            min-height: 100%;
            max-width: 100%;
            max-height: 100%;
            height: 250px !important;
            width: 100% !important;
        }

        /* ///////////////////////////////////// FARM PRACTICES ////////////////////////////////// */

        /* Pagresize ng page for printing */
        div.farming.dashboard{
            height: 655px;
            width: 1150px;
        }

        #farmpractices-prov{
            min-height: 100%;
            max-height: 100%;
            max-width: 100%;
            height: 790px !important;
            width: 100% !important;
            background-size:cover !important;
            background-repeat:no-repeat !important;
            background-position:center center !important;
        }

        h1#header{
                font-size: 45px !important;
            }

        /* Resize ng banner */
        /* div#farmpractices.jumbotron{
            height: 120px;
        } */

        div.farming.dashboard h1{
            font-size: 29px !important;
        }

        div.farming.dashboard h1.card-text.text-center.mt-4{
            margin-top: 10px !important;
        }

        div.farming.dashboard h1.smaller.card-text{
            font-size: 27px !important;
        }

        div.farming.dashboard p{
            font-size: 9px !important;
        }

        div.farming.dashboard h5.card-title{
            font-size: 9px !important;
            margin-top: -8px !important;
        }

        div.farming.dashboard h6.card-title{
            font-size: 9px !important;
            margin-top: -8px !important;
        }

        div.card-body.pr-5{
            margin-top: -8px !important;
        }

        div.farming.dashboard i.bi.bi-caret-down-fill.text-primary{
            margin-top: -15px !important;
        }

        div.farming.dashboard i.bi.bi-caret-up-fill.text-primary{
            margin-top: -15px !important;
        }

        div.farming.dashboard p.text-black.text-uppercase.mb-0{
            margin-top: -7px !important;
        }

        div.row.text-center.mt-2.r2{
            margin-top: -5px !important;
        }

        div.row.text-center.text-black.r2{
            margin-top: -5px !important;
        }

        div.w-50.mt.mx-auto.mt-2.pb-0.rounded-pill.bg-warning-2.fr{
            margin-top: 0px !important;
        }

        div.w-50.mt-3.mx-auto.pb-0.rounded-pill.text-center.fs-sr{
            margin-top: 13px !important;
        }

        /* profarm practicesfile farm practices */
        .card.primary.card-green{
            height: 95px !important;
        }

        /* farm practices card row2 */
        .card.primary.card-row2{
            height: 80px !important;
        }

        /* farm practices card row3 */
        .card.primary.card-row3{
            height: 50px !important;
        }

        /* farm practices card row4 */
        .card.primary.card-row4{
            height: 40px !important;
        }

        /* Resize farm practices pie chart 1*/
        canvas#ctxTransDS{
            min-height: 100%;
            max-width: 100%;
            max-height: 100%;
            height: 53px !important;
            width: 80% !important;
            margin-left: 15px !important;
        }

        /* Resize farm practices pie chart 1*/
        canvas#ctxDirectDS{
            min-height: 100%;
            max-width: 100%;
            max-height: 100%;
            height: 53px !important;
            width: 80% !important;
            margin-left: 15px !important;
        }

        #farmpractices-prov a.card-main{
            font-size: 10px !important;
        }

        .fp-top-rice-farming p{
            font-size: 11px !important;
        }

        .fp-top-rice-farming h6{
            font-size: 11px !important;
        }

        div.border.border-light.fp-top-rice-farming{
            height: 390px !important;
        }

        div.border.border-light.fp-top-active-ingridients{
            height: 175px !important;
        }

        div.border.border-light.fp-rank-of-machine{
            height: 175px !important;
        }

        div.border.border-light.fp h6{
            font-size: 11px !important;
        }

        /* Resize farm practices bar chart 1*/
        canvas#ctxChart1-v{
            min-height: 100%;
            max-width: 100%;
            max-height: 100%;
            height: 163px !important;
            width: 100% !important;
        }

        /* Resize farm practices bar chart 2*/
        canvas#ctxChart1{
            min-height: 100%;
            max-width: 100%;
            max-height: 100%;
            height: 163px !important;
            width: 100% !important;
        }

        /* Resize farm practices bar chart 3*/
        canvas#ctxChart2{
            min-height: 100%;
            max-width: 100%;
            max-height: 100%;
            height: 152px !important;
            width: 100% !important;
        }

        /* //////////////////////////////////////////// SEEDING RATE 1 ////////////////////////////// */

        /* Pagresize ng page for printing */
        div.sublevel#seedingrate1-prov{
            min-height: 100%;
            max-height: 100%;
            max-width: 100%;
            height: 790px !important;
            width: 100% !important;
            background-size:cover !important;
            background-repeat:no-repeat !important;
            background-position:center center !important;
        }

        /* Resize ng banner */
        /* div#seedrate.jumbotron{
            height: 150px;
        } */

        /* Resize ng chart 1 div */
        div#seedingrate1-chart1.card.mb-4{
            height: 455px;
        }

        /* Resize seedingrate1 chart 1*/
        canvas#seedingrate_ctxChart1{
            min-height: 100%;
            max-width: 100%;
            max-height: 100%;
            height: 300px !important;
            width: 100% !important;
        }

        /* //////////////////////////////////////////// CROPEST 1 ///////////////////////////////////////////////////// */

        /* Pagresize ng page for printing */
        div.sublevel#cropest1-prov{
            min-height: 100%;
            max-height: 100%;
            max-width: 100%;
            height: 790px !important;
            width: 100% !important;
            background-size:cover !important;
            background-repeat:no-repeat !important;
            background-position:center center !important;
        }

        /* Resize ng banner */
        /* div#cropest.jumbotron{
            height: 150px;
        } */

        /* cropest card */
        .card.primary.cropest-card{
            height: 160px !important;
        }

        /* cropest1 1 pie chart 1 */
        canvas#cropest_ctxTransWS{
            min-height: 100%;
            max-width: 100%;
            max-height: 100%;
            height: 85px !important;
            width: 100% !important;
            margin-top: -5px !important;
        }

        /* cropest1 1 pie chart 2 */
        canvas#cropest_ctxDirectWS{
            min-height: 100%;
            max-width: 100%;
            max-height: 100%;
            height: 85px !important;
            width: 100% !important;
            margin-top: -5px !important;
        }

        /* cropest1 1 pie chart 3 */
        canvas#cropest_ctxTransDS{
            min-height: 100%;
            max-width: 100%;
            max-height: 100%;
            height: 85px !important;
            width: 100% !important;
            margin-top: -5px !important;
        }

        /* cropest1 1 pie chart 4 */
        canvas#cropest_ctxDirectDS{
            min-height: 100%;
            max-width: 100%;
            max-height: 100%;
            height: 85px !important;
            width: 100% !important;
            margin-top: -5px !important;
        }

        div.row.mt-2.cp{
            margin-top: -15px !important;
        }

        /* Resize ng chart 1 div */
        div#cropest1-chart1.card.mb-4{
            height: 415px;
        }

        /* Resize ng chart 2 div */
        div#cropest1-chart2.card.mb-4{
            height: 415px;
        }

        /* Resize cropest1 chart 1*/
        canvas#cropest_ctxChart1{
            min-height: 100%;
            max-width: 100%;
            max-height: 100%;
            height: 230px !important;
            width: 100% !important;
        }

        /* Resize cropest1 chart 2*/
        canvas#cropest_ctxChart2{
            min-height: 100%;
            max-width: 100%;
            max-height: 100%;
            height: 230px !important;
            width: 100% !important;
        }

         /* /////////////////////////////////////// LABOR 1 //////////////////////////////////////////////////// */

        /* Pagresize ng page for printing */
        div.sublevel#labor1-prov{
            min-height: 100%;
            max-height: 100%;
            max-width: 100%;
            height: 790px !important;
            width: 100% !important;
            background-size:cover !important;
            background-repeat:no-repeat !important;
            background-position:center center !important;
        }

        /* Resize ng banner */
        /* div#labor.jumbotron{
            height: 150px;
        } */

        /* Resize ng chart 1 div */
        div#labor1-chart1.card.mb-4{
            height: 460px;
        }

        /* Resize labor1 chart 1*/
        canvas#labor_ctxChart1{
            min-height: 100%;
            max-width: 100%;
            max-height: 100%;
            height: 320px !important;
            width: 100% !important;
        }

        /* ////////////////////////////////////////// SEED CLASS 1 //////////////////////////////////// */

        /* Pagresize ng page for printing */
        div.sublevel#seedclass1-prov{
            min-height: 100%;
            max-height: 100%;
            max-width: 100%;
            height: 790px !important;
            width: 100% !important;
            background-size:cover !important;
            background-repeat:no-repeat !important;
            background-position:center center !important;
        }

        /* Resize ng banner */
        /* div#seedclass.jumbotron{
            height: 150px;
        } */

        h1.card-text.font-weight-bold.smaller.sc{
            font-size: 33px !important;
        }

        div.row.mt-2.sc{
            margin-top: -5px !important;
        }

        /* Resize ng chart 1 div */
        div#seedclass1-chart1.card.mb-4{
            height: 450px;
        }

        /* Resize ng chart 2 div */
        div#seedclass1-chart2.card.mb-4{
            height: 450px;
        }

        /* Resize seedclass1 chart 1*/
        canvas#seedclass_ctxChart1{
            min-height: 100%;
            max-width: 100%;
            max-height: 100%;
            height: 250px !important;
            width: 100% !important;
        }

        /* Resize seedclass1 chart 2*/
        canvas#seedclass_ctxChart2{
            min-height: 100%;
            max-width: 100%;
            max-height: 100%;
            height: 250px !important;
            width: 100% !important;
        }

        /* /////////////////////////////////////// FERT USAGE 1 //////////////////////////////////////////// */

        /* Pagresize ng page for printing */
        div.sublevel#fertusage1-prov{
            min-height: 100%;
            max-height: 100%;
            max-width: 100%;
            height: 790px !important;
            width: 100% !important;
            background-size:cover !important;
            background-repeat:no-repeat !important;
            background-position:center center !important;
        }

        /* Resize ng banner */
        /* div#fertuse.jumbotron{
            height: 150px;
        } */

        /* fert usage card */
        .card.primary.card-fu{
            height: 150px !important;
        }

        /* Resize ng chart 1 div */
        div#fertusage1-chart1.card.mb-4{
            height: 390px;
        }

        /* Resize ng chart 2 div */
        div#fertusage1-chart2.card.mb-4{
            height: 390px;
        }

        /* Resize fertusage1 chart 1*/
        canvas#fertusage_ctxChart1{
            min-height: 100%;
            max-width: 100%;
            max-height: 100%;
            height: 250px !important;
            width: 100% !important;
        }

        /* Resize fertusage1 chart 2*/
        canvas#fertusage_ctxChart2{
            min-height: 100%;
            max-width: 100%;
            max-height: 100%;
            height: 250px !important;
            width: 100% !important;
        }

        /* //////////////////////////////// VARIETIES 1 ///////////////////////////////////// */

        /* Pagresize ng page for printing */
        div.sublevel#variety1-prov{
            min-height: 100%;
            max-height: 100%;
            max-width: 100%;
            height: 790px !important;
            width: 100% !important;
            background-size:cover !important;
            background-repeat:no-repeat !important;
            background-position:center center !important;
        }

        /* Resize ng banner */
        /* div#variety.jumbotron{
            height: 150px;
        } */

        /* Resize ng chart 1 div */
        div#variety1-chart1.card.mb-4{
            height: 510px;
        }

        /* Resize variety1 chart 1*/
        canvas#variety_ctxChart1{
            min-height: 100%;
            max-width: 100%;
            max-height: 100%;
            height: 255px !important;
            width: 100% !important;
        }

        /* //////////////////////////////////////// ADOPTION RATE 1 /////////////////////////////////////// */

        /* Pagresize ng page for printing */
        div.sublevel#adoptionrate1-prov{
            min-height: 100%;
            max-height: 100%;
            max-width: 100%;
            height: 790px !important;
            width: 100% !important;
            background-size:cover !important;
            background-repeat:no-repeat !important;
            background-position:center center !important;
        }

        /* Resize ng banner */
        /* div#adoptionrate.jumbotron{
            height: 150px;
        } */

        /* Resize ng chart 1 div */
        div#adoptionrate1-chart1.card.mb-4{
            height: 440px;
        }

        /* Resize ng chart 2 div */
        div#adoptionrate1-chart2.card.mb-4{
            height: 440px;
        }

        /* Resize adoptionrate1 chart 1*/
        canvas#adoptionrate_ctxChart2{
            min-height: 100%;
            max-width: 100%;
            max-height: 100%;
            height: 230px !important;
            width: 100% !important;
        }

        /* Resize adoptionrate1 chart 1*/
        canvas#adoptionrate_ctxChart3{
            min-height: 100%;
            max-width: 100%;
            max-height: 100%;
            height: 230px !important;
            width: 100% !important;
        }

        /* /////////////////////////////////// ADOPTION RATE 2 //////////////////////////////////////// */

        /* Pagresize ng page for printing */
        div.sublevel#adoptionrate2-prov{
            min-height: 100%;
            max-height: 100%;
            max-width: 100%;
            height: 790px !important;
            width: 100% !important;
            background-size:cover !important;
            background-repeat:no-repeat !important;
            background-position:center center !important;
        }

        /* Resize ng chart 1 div */
        div#adoptionrate2-chart1.card.mb-4{
            height: 360px;
        }

        /* Resize ng chart 2 div */
        div#adoptionrate2-chart2.card.mb-4{
            height: 360px;
        }

        /* Resize ng chart 3 div */
        div#adoptionrate2-chart3.card.mb-4{
            height: 355px;
        }

        /* Resize ng chart 4 div */
        div#adoptionrate2-chart4.card.mb-4{
            height: 355px;
        }

        /* Resize adoptionrate2 chart 1*/
        canvas#adoptionrate_ctxChart4{
            min-height: 100%;
            max-width: 100%;
            max-height: 100%;
            height: 170px !important;
            width: 100% !important;
            margin-top: -10px;
        }

        /* Resize adoptionrate2 chart 1*/
        canvas#adoptionrate_ctxChart5{
            min-height: 100%;
            max-width: 100%;
            max-height: 100%;
            height: 170px !important;
            width: 100% !important;
            margin-top: -10px;
        }

        /* Resize adoptionrate2 chart 1*/
        canvas#adoptionrate_ctxChart6{
            min-height: 100%;
            max-width: 100%;
            max-height: 100%;
            height: 170px !important;
            width: 100% !important;
            margin-top: -10px;
        }

        /* Resize adoptionrate2 chart 1*/
        canvas#adoptionrate_ctxChart7{
            min-height: 100%;
            max-width: 100%;
            max-height: 100%;
            height: 170px !important;
            width: 100% !important;
            margin-top: -10px;
        }

        /* /////////////////////////////////// ADOPTION RATE 3 /////////////////////////////////////// */

        /* Pagresize ng page for printing */
        div.sublevel#adoptionrate3-prov{
            min-height: 100%;
            max-height: 100%;
            max-width: 100%;
            height: 790px !important;
            width: 100% !important;
            background-size:cover !important;
            background-repeat:no-repeat !important;
            background-position:center center !important;
        }

        /* Resize ng chart 1 div */
        div#adoptionrate3-chart1.card.mb-4{
            height: 510px;
        }

        /* Resize adoptionrate3 chart 1*/
        canvas#adoptionrate_ctxChart8{
            min-height: 100%;
            max-width: 100%;
            max-height: 100%;
            height: 330px !important;
            width: 100% !important;
        }

        /* /////////////////////////////////////////// FERTILIZER APP 1 ////////////////////////////////// */

        /* Pagresize ng page for printing */
        div.sublevel#fertilizerapp1-prov{
            min-height: 100%;
            max-height: 100%;
            max-width: 100%;
            height: 790px !important;
            width: 100% !important;
            background-size:cover !important;
            background-repeat:no-repeat !important;
            background-position:center center !important;
        }

        /* Resize ng banner */
        /* div#fertilizerapp.jumbotron{
            height: 150px;
        } */

        /* Resize ng chart 1 div */
        div#fertilizerapp1-chart1.card.mb-4{
            height: 510px;
        }

        /* Resize fertilizerapp1 chart 1*/
        canvas#fertilizerapp_ctxChart1{
            min-height: 100%;
            max-width: 100%;
            max-height: 100%;
            height: 370px !important;
            width: 100% !important;
        }

        /* ////////////////////////////////////// PESTICIDE 1 //////////////////////////////// */

        /* Pagresize ng page for printing */
        div.sublevel#pesticide1-prov{
            min-height: 100%;
            max-height: 100%;
            max-width: 100%;
            height: 790px !important;
            width: 100% !important;
            background-size:cover !important;
            background-repeat:no-repeat !important;
            background-position:center center !important;
        }

        /* Resize ng banner */
        /* div#pesticide.jumbotron{
            height: 150px;
        } */

        /* Resize ng chart 1 div */
        div#pesticide1-chart1.card.mb-4{
            height: 293px;
        }

        /* Resize ng chart 2 div */
        div#pesticide1-chart2.card.mb-4{
            height: 293px;
        }

        /* Resize ng chart 3 div */
        div#pesticide1-chart3.card.mb-4{
            height: 293px;
        }

        /* Resize ng chart 4 div */
        div#pesticide1-chart4.card.mb-4{
            height: 293px;
        }

        /* Resize pesticide1 chart 1*/
        canvas#ctxHerbicide{
            min-height: 100%;
            max-width: 100%;
            max-height: 100%;
            height: 132px !important;
            width: 70% !important;
            margin-left: 70px !important;
        }

        /* Resize pesticide1 chart 1*/
        canvas#ctxInsecticide{
            min-height: 100%;
            max-width: 100%;
            max-height: 100%;
            height: 132px !important;
            width: 70% !important;
            margin-left: 70px !important;
        }

        /* Resize adoptionrate1 chart 1*/
        canvas#ctxFungicide{
            min-height: 100%;
            max-width: 100%;
            max-height: 100%;
            height: 132px !important;
            width: 70% !important;
            margin-left: 70px !important;
        }

        /* Resize adoptionrate1 chart 1*/
        canvas#ctxOtherPest{
            min-height: 100%;
            max-width: 100%;
            max-height: 100%;
            height: 132px !important;
            width: 70% !important;
            margin-left: 70px !important;
        }

        /* //////////////////////////////////// MACHINE SOURCE 1 /////////////////////////////////////// */

        /* Pagresize ng page for printing */
        div.sublevel#machinesource1-prov{
            min-height: 100%;
            max-height: 100%;
            max-width: 100%;
            height: 790px !important;
            width: 100% !important;
            background-size:cover !important;
            background-repeat:no-repeat !important;
            background-position:center center !important;
        }

        /* Resize ng banner */
        /* div#machinesource.jumbotron{
            height: 150px;
        } */

        /* Resize ng chart 1 div */
        div#machinesource1-chart1.card.mb-4{
            height: 500px;
        }

        /* Resize machinesource1 chart 1*/
        canvas#machinesource_ctxChart1{
            min-height: 100%;
            max-width: 100%;
            max-height: 100%;
            height: 350px !important;
            width: 100% !important;
        }
    }
</style>


</head>

<?php
    $tsHighest = max($owner_all['value'], $amort_all['value'], $lessee_all['value'], $tenant_all['value'], $others_all['value']);
    $tsHighestLabel = "";
    if($owner_all['value'] == $tsHighest) {
        $tsHighestLabel = "Land Owners";
    }
    if($amort_all['value'] == $tsHighest) {
        $tsHighestLabel = "Amortizing";
    }
    if($lessee_all['value'] == $tsHighest) {
        $tsHighestLabel = "Lessee";
    }
    if($tenant_all['value'] == $tsHighest) {
        $tsHighestLabel = "Tenants";
    }
    if($others_all['value'] == $tsHighest) {
        $tsHighestLabel = "Other Ownership";
    } 
?>

<body>
    <!-- Navigation --->
    <nav class="navbar navbar-expand-lg navbar-light">
        <!-- <a class="btn btn-warning text-white" href="<?php echo base_url(); ?>" role="button"><i class="bi bi-house-door-fill"></i> National</a> -->
        <a class="btn btn-warning mr-2 text-white" href="<?php echo base_url(); ?>booklet/" role="button"><i class="bi bi-caret-left"></i> Back to Main Booklet</a>
        <div class="dropdown">
            <button class="btn btn-light border dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Select Region
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <?php for ($i = 0; $i < count($regions); $i++) {
                        echo '<a class="dropdown-item" href="'.base_url().'booklet/region/'.$regions[$i]["id"].'">'.$regions[$i]["location_name"].'</a>';
                    } ?>
            </div>
        </div>
        <div class="dropdown">
            <button class="btn btn-light border dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Select Province
            </button>
            <div class="provinces-dropdown dropdown-menu" aria-labelledby="dropdownMenu2">
                <?php
                $temp_region = "";
                for ($i = 0; $i < count($provinces); $i++) {                            
                    if($provinces[$i]['region_name'] != $temp_region){
                        echo '<a class="dropdown-item disabled font-weight-bold">'. $provinces[$i]['region_name'] . '</a>';
                    }
                    echo '<a class="pl-5 dropdown-item" href="'.base_url().'booklet/province/'.$provinces[$i]["province_id"].'">'.$provinces[$i]["province"].'</a>';
                    $temp_region = $provinces[$i]['region_name'];
                }
                ?>
            </div>
        </div>
        <div>
            <button onclick="Print()" class="btn btn-primary">
               Print
            </button>
        </div>
    </nav>

    <br class="pagebreak">
    <!-- Start of DIV -->
    <div id="capture">

        <!-- MAIN -->
        <div class="container-fluid" id="rice-sector">
            <div class="row">    
                <main role="main" class="col">  
                    <!-- Header --->
                    <!-- <div id="main" class="jumbotron text-center">
                        <div class="jumbotron-content">
                            <h2>State of the Rice Sector in the</h2>
                            <h1><?php echo $production_all['location_name'];?></h1>
                            <p class="lead"><i>What is the status of the rice industry in the province?</i><br/>Explore and get insights about the trend of the key performance indicators of rice production and economics.</p>
                        </div>
                    </div> -->

                    <!-- Body -->
                    <div class="dashboard" id="dashboard-main-prov">

                        <!-- FOR VERTICAL PRINT IN BLACK EDGING RIGHT SIDE -->
                        <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; float: right; margin-right: -17px; margin-top: 35px;">DASHBOARD - <?php echo strtoupper($production_all['location_name']);?></p>

                        <div style="margin-left: 45px; margin-top: 7px;">
                            <h2>State of the Rice Sector in the</h2>
                            <h1 style="font-size: 67px;"><?php echo $production_all['location_name'];?></h1>
                            <p class="lead"><i>What is the status of the rice industry in the province?</i><br/>Explore and get insights about the trend of the key performance indicators of rice production and economics.</p>
                            <br>
                        </div>

                        <div class="row" style="margin-left: 35px; margin-right: 20px; margin-top: -10px;">
                            <div class="col-4">
                                <div class="card primary mb-2 bg-primary text-center text-white">
                                    <div class="card-body">
                                        <h5 class="card-title text-left"><a href="<?php echo base_url(); ?>productions/province/<?php echo $id; ?>" class="text-white stretched-link text-decoration-none card-main">Palay Production (2021)</a></h5>
                                        <h1 class="card-text font-weight-bold"><?php echo $production_all['value']; ?><i class="<?php echo $prod_caret; ?>"></i></h1>
                                        <div class="card-note w-50 mx-auto rounded-pill bg-warning">
                                            <p class="text-white">metric tons</p>
                                        </div>
                                    </div>
                                    <div class="caret-select"><i class="bi bi-caret-right-alt pr-2"></i></div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card primary mb-2 bg-primary text-center text-white">
                                    <div class="card-body">
                                        <h5 class="card-title text-left"><a href="<?php echo base_url(); ?>harvestareas/province/<?php echo $id; ?>" class="text-white stretched-link text-decoration-none card-main">Area Harvested (2021)</a></h5>
                                        <h1 class="card-text font-weight-bold"><?php echo $harvestarea_all['value']; ?> <i class="<?php echo $area_caret; ?>"></i></h1>
                                        <div class="card-note w-50 mx-auto rounded-pill bg-warning">
                                            <p class="text-white">hectares</p>
                                        </div>
                                    </div>
                                    <div class="caret-select"><i class="bi bi-caret-right-alt pr-2"></i></div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card primary mb-2 bg-primary text-center text-white">
                                    <div class="card-body">
                                        <h5 class="card-title text-left"><a href="<?php echo base_url(); ?>estyields/province/<?php echo $id; ?>" class="text-white stretched-link text-decoration-none card-main">Yield per Hectare (2021)</a></h5>
                                        <h1 class="card-text font-weight-bold"><?php echo $estyield_all['value']; ?> <i class="<?php echo $yield_caret; ?>"></i></h1>
                                        <div class="card-note w-75 mx-auto rounded-pill bg-warning">
                                            <p class="text-white">metric tons per hectare</p>
                                        </div>
                                    </div>
                                    <div class="caret-select"><i class="bi bi-caret-right-alt pr-2"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-left: 40px; margin-right: 25px; margin-top: -5px;">
                            <div class="col">
                                <div class="card-deck text-center mt-1">
                                    <div class="card secondary text-center">
                                        <div class="row pl-3 pr-3 pt-2 pb-2">
                                            <div class="col border-right">
                                                <div class="card-body p-2">
                                                    <h6 class="card-title text-left mb-5"><a href="<?php echo base_url(); ?>prices/province/<?php echo $id; ?>" class="text-black stretched-link text-decoration-none card-sec">Dry Palay Price (2021)</a></h6>
                                                    <h1 style="font-size: 60px !important" id="h1-dry-palay" class="card-text">P <?php echo (!intval($farmgate['value']) == 0) ? $farmgate['value'] : "-"; ?><i class="<?php echo $fg_caret; ?>"></i></h1>
                                                </div>
                                            </div>
                                            <div class="col border-right">
                                                <div class="card-body p-2">
                                                    <h6 class="card-title text-left"><a href="<?php echo base_url(); ?>prices/province/<?php echo $id; ?>" class="text-black stretched-link text-decoration-none card-sec">Rice Wholesale Prices (2021)</a></h6>
                                                    <p>Regular-milled</p>
                                                    <h1 class="card-text mb-2">P <?php echo (!intval($wholesale['value']) == 0) ? $wholesale['value'] : "-"; ?><i class="<?php echo $wg_caret; ?>"></i></h1>
                                                    <p>Well-milled</p>
                                                    <h1 class="card-text mb-2">P <?php echo (!intval($wholesale_sp['value']) == 0) ? $wholesale_sp['value'] : "-"; ?><i class="<?php echo $ws_caret; ?>"></i></h1>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="card-body p-2">
                                                    <h6 class="card-title text-left"><a href="<?php echo base_url(); ?>prices/province/<?php echo $id; ?>" class="text-black stretched-link text-decoration-none card-sec">Rice Retail Prices (2021)</a></h6>
                                                    <p>Regular-milled</p>
                                                    <h1 class="card-text mb-2">P <?php echo (!intval($retail['value']) == 0) ? $retail['value'] : "-"; ?><i class="<?php echo $rg_caret; ?>"></i></h1>
                                                    <p>Well-milled</p>
                                                    <h1 class="card-text mb-2">P <?php echo (!intval($retail_sp['value']) == 0) ? $retail_sp['value'] : "-"; ?><i class="<?php echo $rs_caret; ?>"></i></h1>
                                                </div>
                                            </div>
                                        </div>
                                        <p>per kilogram</p>
                                        <div class="caret-select"><i class="bi bi-caret-right-alt pr-2"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- PAGE NUMBER -->
                        <div class="row" style="margin-right: 24px; margin-top: 225px;">
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important; float: right;">2 | STATE OF THE RICE SECTOR IN <?php echo strtoupper($production_all['location_name']);?></p>
                            </div>
                        </div>

                    </div>
                </main>
            </div>
        </div>

        <!-- for page break from html2pdf -->
        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br class="pagebreak">

        <!-- PRODUCTIONS -->

        <div class="container-fluid" id="productions1">
            <div class="row">
                <main role="main" class="col">
                    <!-- Header --->
                    <!-- <div id="production" class="jumbotron text-center">
                        <div class="jumbotron-content">
                            <h2>State of the Rice Sector in <?php echo $total_production_all['location_name'];?></h2>
                            <h1>Palay Production</h1>
                            <p class="lead"><i>What is the total volume of palay produced in the province? </i><br/> Know the latest and historical rice production information.</p>
                        </div>
                    </div> -->
                
                    <!-- Body -->
                    <div class="sublevel" id="production1-prov">

                        <!-- FOR VERTICAL PRINT IN BLACK EDGING LEFT SIDE -->
                        <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; transform:scale(-1); float: left; margin-left: -17px; margin-top: 35px;">PALAY PRODUCTION</p>

                        <div style="margin-left: 35px; margin-top: 7px;">
                            <h1 style="font-size: 67px;">Palay Production</h1>
                            <br>
                            <p class="lead"><i>What is the total volume of palay produced in the province? </i><br/> Know the latest and historical rice production information.</p>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="card-deck mb-2 text-center" style="margin-left: -3px; margin-top: 10px; margin-right: 30px;">
                                    <div class="card primary mb-4 bg-primary-2 text-white">
                                        <div class="card-body">
                                            <h5 class="card-title pb-2">Irrigated Area</h5>
                                            <h1 class="card-text font-weight-bold"><?php echo $total_production_irrigated['value']; ?><i class="<?php echo $prod_caret_irrig; ?>"></i></h1>
                                            <div class="card-note w-50 mx-auto rounded-pill bg-primary"><p class="text-white">metric tons</p></div>
                                        </div>
                                        </div>
                                        <div class="card primary mb-4 bg-primary text-white">
                                        <div class="card-body">
                                            <h5 class="card-title pb-2">Provincial (2021)</h5>
                                            <h1 class="card-text font-weight-bold"><?php echo $total_production_all['value']; ?><i class="<?php echo $prod_caret; ?>"></i></h1>
                                            <div class="card-note w-50 mx-auto rounded-pill"><p class="text-dark">metric tons</p></div>
                                        </div>
                                    </div>
                                    <div class="card primary mb-4 bg-alternate-3">
                                        <div class="card-body">
                                            <h5 class="card-title pb-2">Non-Irrigated Area</h5>
                                            <h1 class="card-text font-weight-bold"><?php echo $total_production_rainfed['value']; ?><i class="<?php echo $prod_caret_rain; ?>"></i></h1>
                                            <div class="card-note w-50 mx-auto rounded-pill bg-primary"><p class="text-white">metric tons</p></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="row">
                            <div class="col">
                                <div class="card mb-4" id="production1-chart1" style="margin-left: 35px; margin-top: -20px; margin-right: 55px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a> -->
                                        <h5 class="my-0 pt-2 pb-2">Palay Production in <?php echo $total_production_all['location_name'];?> (2001-2021)</h5>
                                        <p class="my-0 font-weight-normal text-muted">in metric tons (PSA, 2022)</p>
                                        
                                    </div>
                                    <div class="card-body">
                                        <div><canvas id="ctxProdStack"></canvas></div>
                                    </div>
                                    <div class="card-footer text-muted">
                                        Data Source: <a href="https://palaystat.philrice.gov.ph/statistics/retrieve/table/1" target="_blank">Estimated production, area harvested and yield per hectare (PAY) - PalayStat System</a>
                                    </div>
                                </div>
                            </div>
                        </div>  

                        <!-- PAGE NUMBER -->
                        <div class="row" style="margin-left: 33px; margin-top: -10px;>
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important;">3 | STATE OF THE RICE SECTOR IN <?php echo strtoupper($production_all['location_name']);?></p>
                            </div>
                        </div>

                    </div>
                </main>
            </div>
        </div>

        <!-- for page break from html2pdf -->
        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br class="pagebreak">

        <!-- HARVEST AREA -->

        <div class="container-fluid" id="areas1">
            <div class="row">
                <main role="main" class="col">
                    <!-- Header --->
                    <!-- <div id="area" class="jumbotron text-center">
                        <div class="jumbotron-content">
                            <h2>State of the Rice Sector in <?php echo $total_area_all['location_name'];?></h2>
                            <h1>Area Harvested</h1>
                            <p class="lead"><i>How wide was the accumulated area of the total harvested palay?</i>Explore the estimated overall <br />harvested area and the apportionment of irrigated and non-irrigated areas.</p>
                        </div>
                    </div> -->

                    <!-- Body -->
                    <div class="sublevel" id="area1-prov">

                        <!-- FOR VERTICAL PRINT IN BLACK EDGING RIGHT SIDE -->
                        <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; float: right; margin-right: -20px; margin-top: 35px;">AREA HARVESTED</p>

                        <div style="margin-left: 50px; margin-top: 7px;">
                            <h1 style="font-size: 67px;">Area Harvested</h1>
                            <br>
                            <p class="lead"><i>How wide was the accumulated area of the total harvested palay?</i>Explore the estimated overall <br />harvested area and the apportionment of irrigated and non-irrigated areas.</p>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="card-deck mb-2 text-center" style="margin-left: 45px; margin-top: 10px; margin-right: -15px;">
                                    <div class="card primary mb-4 bg-primary-2 text-white">
                                        <div class="card-body">
                                            <h5 class="card-title pb-2">Irrigated Area</h5>
                                            <h1 class="card-text font-weight-bold"><?php echo $total_area_irrigated['value']; ?><i class="<?php echo $area_caret_irrig; ?>"></i></h1>
                                            <div class="card-note w-50 mx-auto rounded-pill bg-primary">
                                                <p class="text-white">hectares</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card primary mb-4 bg-primary text-white">
                                        <div class="card-body">
                                            <h5 class="card-title pb-2">Provincial (2021)</h5>
                                            <h1 class="card-text font-weight-bold"><?php echo $total_area_all['value']; ?><i class="<?php echo $area_caret; ?>"></i></h1>
                                            <div class="card-note bg-warning w-50 mx-auto rounded-pill">
                                                <p class="text-white">hectares</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card primary mb-4 bg-alternate-3">
                                        <div class="card-body">
                                            <h5 class="card-title pb-2">Non-Irrigated Area</h5>
                                            <h1 class="card-text font-weight-bold"><?php echo $total_area_rainfed['value']; ?><i class="<?php echo $area_caret_rain; ?>"></i></h1>
                                            <div class="card-note w-50 mx-auto rounded-pill bg-primary">
                                                <p class="text-white">hectares</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="card mb-4" id="area1-chart1" style="margin-left: 55px; margin-top: -20px; margin-right: 35px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a> -->
                                        <h5 class="my-0 pt-2 pb-2">Total Rice Area Harvested in <?php echo $total_area_all['location_name'];?> (2001-2021)</h5>
                                        <p class="my-0 font-weight-normal text-muted">in hectares (PSA, 2022)</p>
                                    </div>
                                    <div class="card-body">
                                        <div><canvas id="ctxAreaStack"></canvas></div>
                                    </div>
                                    <div class="card-footer text-muted">
                                        Data Source: <a href="https://palaystat.philrice.gov.ph/statistics/retrieve/table/1" target="_blank">Estimated production, area harvested and yield per hectare (PAY) - PalayStat System</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- PAGE NUMBER -->
                        <div class="row" style="margin-right: 22px; margin-top: -10px;">
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important; float: right;">4 | STATE OF THE RICE SECTOR IN <?php echo strtoupper($production_all['location_name']);?></p>
                            </div>
                        </div>

                    </div>
                </main>
            </div>
        </div>

        <!-- for page break from html2pdf -->
        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br class="pagebreak">

        <!-- EST YIELD -->

        <div class="container-fluid" id="yields">
            <div class="row">
                <main role="main" class="col">
                    <!-- Header --->
                    <!-- <div id="yield" class="jumbotron text-center">
                        <div class="jumbotron-content">
                            <h2>State of the Rice Sector in <?php echo $yield_all['location_name'];?></h2>
                            <h1>Yield per Hectare</h1>
                            <p class="lead"><i>How do our farmers perform in terms of yield per hectare?</i> Check out the average metric tons<br /> of palay produced per hectare, and the attainment in irrigated and non-irrigated areas.</p>
                        </div>
                    </div> -->

                    <!-- Body -->
                    <div class="sublevel" id="yield1-prov">

                        <!-- FOR VERTICAL PRINT IN BLACK EDGING LEFT SIDE -->
                        <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; transform:scale(-1); float: left; margin-left: -17px; margin-top: 35px;">YIELD PER HECTARE</p>

                        <div style="margin-left: 35px; margin-top: 7px;">
                            <h1 style="font-size: 67px;">Yield per Hectare</h1>
                            <br>
                            <p class="lead"><i>How do our farmers perform in terms of yield per hectare?</i> Check out the average metric tons<br /> of palay produced per hectare, and the attainment in irrigated and non-irrigated areas.</p>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="card-deck mb-2 text-center" style="margin-left: -3px; margin-top: 10px; margin-right: 30px;">
                                    <div class="card primary mb-4 bg-primary-2 text-white">
                                        <div class="card-body">
                                            <h5 class="card-title pb-2">Irrigated Area</h5>
                                            <h1 class="card-text font-weight-bold"><?php echo $yield_irrigated['value']; ?><i class="<?php echo $yield_caret_irrig; ?>"></i></h1>
                                            <div class="card-note w-75 mx-auto rounded-pill bg-primary">
                                                <p class="text-white">metric tons per hectare</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card primary mb-4 bg-primary text-white">
                                        <div class="card-body">
                                            <h5 class="card-title pb-2">Provincial Average (2021)</h5>
                                            <h1 class="card-text font-weight-bold"><?php echo $yield_all['value']; ?><i class="<?php echo $yield_caret; ?>"></i></h1>
                                            <div class="card-note bg-warning w-75 mx-auto rounded-pill">
                                                <p class="text-white">metric tons per hectare</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card primary mb-4 bg-alternate-3">
                                        <div class="card-body">
                                            <h5 class="card-title pb-2">Non-Irrigated Area</h5>
                                            <h1 class="card-text font-weight-bold"><?php echo $yield_rainfed['value']; ?><i class="<?php echo $yield_caret_rain; ?>"></i></h1>
                                            <div class="card-note w-75 mx-auto rounded-pill bg-primary">
                                                <p class="text-white">metric tons per hectare</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="card mb-4" id="yield-chart" style="margin-left: 35px; margin-top: -20px; margin-right: 55px;">
                                    <div class="card-header text-left">
                                        <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Table</a>
                                        <h5 class="my-0 pt-2 pb-2">Average Yield per Hectare per Cropping Season in <?php echo $yield_all['location_name'];?> (2001-2021)</h5>
                                        <p class="my-0 font-weight-normal text-muted">in metric tons per hectare (PSA, 2022)</p>
                                    </div>
                                    <div class="card-body">
                                        <div><canvas id="ctxYieldStack"></canvas></div>
                                    </div>
                                    <div class="card-footer text-muted">
                                        Data Source: <a href="https://palaystat.philrice.gov.ph/statistics/retrieve/table/1" target="_blank">Estimated production, area harvested and yield per hectare (PAY) - PalayStat System</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- PAGE NUMBER -->
                        <div class="row" style="margin-left: 33px; margin-top: -10px;>
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important;">5 | STATE OF THE RICE SECTOR IN <?php echo strtoupper($production_all['location_name']);?></p>
                            </div>
                        </div>

                    </div>
                </main>
            </div>
        </div>

        <!-- for page break from html2pdf -->
        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br class="pagebreak">

        <!-- PRICES 1 -->

        <div class="container-fluid" id="prices1">
            <div class="row">
                <main role="main" class="col">
                    <!-- Header --->
                    <!-- <div id="prices" class="jumbotron text-center">
                        <div class="jumbotron-content">
                            <h2>State of the Rice Sector in <?php echo $farmgate['location_name'];?></h2>
                            <h1>Rice Market Prices</h1>
                            <p class="lead"><i>How does the price of un-hulled and de-hulled rice fare in the marketplace?</i> <br /> Know the current and historical prices of rice in the region. </p>
                        </div>
                    </div> -->

                    <!-- Body -->
                    <div class="sublevel" id="price1-prov">

                        <!-- FOR VERTICAL PRINT IN BLACK EDGING RIGHT SIDE -->
                        <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; float: right; margin-right: -20px; margin-top: 35px;">RICE MARKET PRICES</p>

                        <div style="margin-left: 50px; margin-top: 7px;">
                            <h1 style="font-size: 67px;">Rice Market Prices</h1>
                            <br>
                            <p class="lead"><i>How does the price of un-hulled and de-hulled rice fare in the marketplace?</i> <br /> Know the current and historical prices of rice in the region. </p>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="card-deck mb-2 text-center" style="margin-left: 45px; margin-top: 10px; margin-right: -15px;">
                                    <div class="card primary mb-4 bg-primary text-white  prices">
                                        <div class="card-body">
                                            <h5 class="card-title mt-1">Dry Palay Price (2021)</h5>
                                            <h1 class="card-text mt-4 font-weight-bold smaller"><?php echo $farmgate['value']; ?><i class="<?php echo $farm_caret; ?>"></i></h1>
                                            <div class="card-note bg-warning w-50 mt-3 mx-auto rounded-pill">
                                                <p class="text-white" id="p-price">Pesos Per Kilogram</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card primary mb-4 bg-primary text-white prices">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col">
                                                    <h5 class="card-title">Wholesale Prices (2021)</h5>
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col-6 border-right">
                                                    <p class="card-title-note">Regular-Milled</p>
                                                    <h1 class="card-text font-weight-bold smaller"><?php echo $wholesale['value']; ?><i class="<?php echo $whr_caret; ?>"></i></h1>
                                                </div>
                                                <div class="col-6">
                                                    <p class="card-title-note">Well-Milled</p>
                                                    <h1 class="card-text font-weight-bold smaller"><?php echo $wholesale_sp['value']; ?><i class="<?php echo $whw_caret; ?>"></i></h1>
                                                </div>
                                                <div class="bg-warning w-50 mt-3  mx-auto pb-0 rounded-pill">
                                                    <p class="text-white text-uppercase mb-0" id="p-price">Pesos Per Kilogram</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card primary mb-4 bg-primary text-white  prices">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col">
                                                    <h5 class="card-title">Retail Prices (2021)</h5>
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col-6 border-right">
                                                    <p class="card-title-note">Regular-Milled</p>
                                                    <h1 class="card-text font-weight-bold smaller"><?php echo $retail['value']; ?><i class="<?php echo $rhw_caret; ?>"></i></h1>
                                                </div>
                                                <div class="col-6">
                                                    <p class="card-title-note">Well-Milled</p>
                                                    <h1 class="card-text font-weight-bold smaller"><?php echo $retail_sp['value']; ?><i class="<?php echo $rhr_caret; ?>"></i></h1>
                                                </div>
                                                <div class="bg-warning w-50 mt-3  mx-auto pb-0 rounded-pill">
                                                    <p class="text-white text-uppercase mb-0" id="p-price">Pesos Per Kilogram</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="card mb-4" id="price1-chart1" style="margin-left: 55px; margin-top: -20px; margin-right: 35px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a> -->
                                        <h5 class="my-0 pt-2 pb-2">Nominal Prices of Dry Palay in <?php echo $farmgate['location_name'];?> (2001-2021)</h5>
                                        <p class="my-0 font-weight-normal text-muted">in Peso (PSA, 2022)</p>
                                    </div>
                                    <div class="card-body">
                                        <div><canvas id="ctxFarmPrices"></canvas></div>
                                    </div>
                                    <div class="card-footer text-muted">
                                        Data Source: <a href="https://palaystat.philrice.gov.ph/statistics/retrieve/table/15" target="_blank">Annual and semestral average farmgate, wholesale and retail prices, ordinary palay/rice</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- PAGE NUMBER -->
                        <div class="row" style="margin-right: 22px; margin-top: -3px;">
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important; float: right;">6 | STATE OF THE RICE SECTOR IN <?php echo strtoupper($production_all['location_name']);?></p>
                            </div>
                        </div>

                    </div>
                </main>
            </div>
        </div>

        <!-- for page break from html2pdf -->
        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br class="pagebreak">

        <!-- PRICES 2-->

        <div class="container-fluid" id="prices2">
            <div class="row">
                <main role="main" class="col">
                    <div class="sublevel" id="price2-prov">

                        <!-- FOR VERTICAL PRINT IN BLACK EDGING LEFT SIDE -->
                        <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; transform:scale(-1); float: left; margin-left: -17px; margin-top: 35px;">RICE MARKET PRICES</p>

                        <div class="row">
                            <div class="col">
                                <div class="card mb-4" id="price2-chart1" style="margin-left: 8px; margin-top: 20px; margin-right: 40px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a> -->
                                        <h5 class="my-0 pt-2 pb-2">Wholesale Prices of Regular and Well-milled Rice in <?php echo $farmgate['location_name'];?> (2001-2021)</h5>
                                        <p class="my-0 font-weight-normal text-muted">in Peso (PSA, 2022)</p>
                                    </div>
                                    <div class="card-body">
                                        <div><canvas id="ctxWholesalePrices"></canvas></div>
                                    </div>
                                    <div class="card-footer text-muted">
                                        Data Source: <a href="https://palaystat.philrice.gov.ph/statistics/retrieve/table/15" target="_blank">Annual and semestral average farmgate, wholesale and retail prices, ordinary palay/rice</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="card mb-4" id="price2-chart2" style="margin-left: 37px; margin-top: -15px; margin-right: 55px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a> -->
                                        <h5 class="my-0 pt-2 pb-2">Retail Prices of Regular and Well-milled Rice in <?php echo $farmgate['location_name'];?> (2001-2021)</h5>
                                        <p class="my-0 font-weight-normal text-muted">in Peso (PSA, 2021)</p>
                                    </div>
                                    <div class="card-body">
                                        <div><canvas id="ctxRetailPrices"></canvas></div>
                                    </div>
                                    <div class="card-footer text-muted">
                                        Data Source: <a href="https://palaystat.philrice.gov.ph/statistics/retrieve/table/15" target="_blank">Annual and semestral average farmgate, wholesale and retail prices, ordinary palay/rice</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- PAGE NUMBER -->
                        <div class="row" style="margin-left: 33px; margin-top: -9px;>
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important;">7 | STATE OF THE RICE SECTOR IN <?php echo strtoupper($production_all['location_name']);?></p>
                            </div>
                        </div>

                    </div>
                </main>
            </div>
        </div>

        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br class="pagebreak">

        <!-- //////////////// CHECK KUNG ANDUN YUNG LOCATION //////////////////////// -->
        <?php 
            $location_ids = array('2', '3', '5', '6', '81', '77', '12', '13', '14', '15', '17', '19', '23', '24', '25', '28', '30', '31', '32', '34', '36', '37', '38', '45', '47', '48', '49', '50', '51', '52', '53', '54', '55', '56', '63', '65', '69', '60', '72', '73', '83');
            if (in_array($this->uri->segment('3'), $location_ids)) :
        ?>

        <!-- PROFILE -->

        <div class="container-fluid" id="profiles1">
            <div class="row">
                <main role="main" class="col">
                    <!-- Header --->
                    <!-- <div id="main" class="jumbotron text-center">
                        <div class="jumbotron-content">
                            <h2>Profile of the Rice Farmers in</h2>
                            <h1><?php echo $monthly_income_all['location_name']; ?></h1>
                            <p class="lead"><i>What is the status of the rice industry in the province?</i> Explore and get insights <br/> about the trend of the key performance indicators of rice production and economics. </p>
                        </div>
                    </div> -->

                    <!-- Body -->
                    <div class="farmer dashboard" id="profile1-prov">

                        <!-- FOR VERTICAL PRINT IN BLACK EDGING RIGHT SIDE -->
                        <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; float: right; margin-right: -17px; margin-top: 35px;">DASHBOARD - <?php echo strtoupper($production_all['location_name']);?></p>

                        <div style="margin-left: 45px; margin-top: 7px;">
                            <h2>Profile of the Rice Farmers in</h2>
                            <h1 style="font-size: 67px;"><?php echo $monthly_income_all['location_name']; ?></h1>
                            <p class="lead"><i>What is the status of the rice industry in the province?</i> Explore and get insights <br/> about the trend of the key performance indicators of rice production and economics. </p>
                            <br>
                        </div>

                        <div class="row" style="margin-left: 40px; margin-right: 28px; margin-top: -10px;">
                            <div class="col">
                                <div class="card-deck text-center mb-0 text-white">
                                    <div class="card primary mb-2 bg-warning">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col border-right">
                                                    <h5 class="card-title text-left"><a href="<?php echo base_url(); ?>monthlyincome/province/<?php echo $id; ?>" class="text-white stretched-link text-decoration-none card-sec">Estimated Monthly Income (2016)</a></h5>
                                                    <h1 class="card-text font-weight-bold">P <?php echo number_format($monthly_income_all['value']); ?><i class="bi bi-caret-up-fill text-primary"></i></h1>
                                                    <div class="card-note w-50 mx-auto rounded-pill bg-primary">
                                                        <p class="text-white">per household</p>
                                                    </div>
                                                </div>
                                                <div class="col border-right">
                                                    <h5 class="card-title text-left"><a href="<?php echo base_url(); ?>monthlyincome/province/<?php echo $id; ?>" class="text-white stretched-link text-decoration-none card-sec">Above Poverty Threshold (2016)</a></h5>
                                                    <h1 class="card-text font-weight-bold"><?php echo number_format($poverty_all['value']); ?>%<i class="bi bi-caret-up-fill text-primary"></i></h1>
                                                    <div class="card-note w-50 mx-auto rounded-pill bg-primary" style="width: 180px !important;">
                                                        <p class="text-white">of farming households</p>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <h5 class="card-title text-left"><a href="<?php echo base_url(); ?>monthlyincome/province/<?php echo $id; ?>" class="text-white stretched-link text-decoration-none card-sec">Monthly Poverty Threshold (2015)</a></h5>
                                                    <h1 class="card-text font-weight-bold">P <?php echo number_format($poverty_threshold_all['value']); ?><i class="bi bi-caret-up-fill text-primary"></i></h1>
                                                    <div class="card-note w-50 mx-auto rounded-pill bg-primary">
                                                        <p class="text-white">per household of 5</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="caret-select"><i class="bi bi-caret-right-alt pr-2"></i></div>
                                    </div>
                                </div>
                                <div class="card-deck mt-0 text-center text-white">
                                    <div class="card primary mb-4 col-12 text-dark row-w">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col border-right">
                                                    <h6 class="card-title text-left"><a href="<?php echo base_url(); ?>social/province/<?php echo $id; ?>" class="text-dark stretched-link text-decoration-none farmer-sec">Average Age (2016)</a></h6>
                                                    <h2 class="card-text"><?php echo $mean_age_all['value']; ?><i class="bi bi-caret-up-fill text-primary"></i></h2>
                                                    <div class="card-note w-75 mx-auto rounded-pill bg-warning">
                                                        <p class="text-white">years old</p>
                                                    </div>
                                                </div>
                                                <div class="col border-right">
                                                    <h6 class="card-title text-left mb-2"><a href="<?php echo base_url(); ?>social/province/<?php echo $id; ?>" class="text-dark stretched-link text-decoration-none farmer-sec">Sex (2016)</a></h6>
                                                    <div><canvas id="ctxSex"></canvas></div>
                                                    <div class="card-note w-75 mx-auto rounded-pill bg-warning mt-2">
                                                        <p class="text-white">male</p>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <h6 class="card-title text-left mb-2"><a href="<?php echo base_url(); ?>social/province/<?php echo $id; ?>" class="text-dark stretched-link text-decoration-none farmer-sec">Civil Status (2016)</a></h6>
                                                    <div><canvas id="ctxCivil"></canvas></div>
                                                    <div class="card-note w-75 mx-auto rounded-pill bg-warning mt-2">
                                                        <p class="text-white">Married</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="caret-select"><i class="bi bi-caret-right-alt pr-2"></i></div>
                                    </div>
                                </div>
                                <div class="card-deck mt-0 text-center text-white" style="margin-top: -15px !important;">
                                    <div class="card primary mb-4 col-6 text-dark row-w">
                                        <div class="card-body pl-3 pr-3 pb-0">
                                            <div class="row">
                                                <div class="col border-right">
                                                    <h6 class="card-title text-left"><a href="<?php echo base_url(); ?>farmdetails/province/<?php echo $id; ?>" class="text-dark stretched-link text-decoration-none card-sec">Average Farm Size (2016)</a></h6>
                                                    <h2 class="card-text"><?php echo $avefarm_all['value']; ?><i class="bi bi-caret-up-fill text-primary"></i></h2>
                                                    <div class="card-note w-50 mx-auto rounded-pill bg-warning">
                                                        <p class="text-white">hectares</p>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <h6 class="card-title text-left mb-2"><a href="<?php echo base_url(); ?>farmdetails/province/<?php echo $id; ?>" class="text-dark stretched-link text-decoration-none card-sec">Farm Ownership (2016)</a></h6>
                                                    <div><canvas id="ctxTenStat"></canvas></div>
                                                    <div class="card-note w-75 mx-auto rounded-pill bg-warning mt-2">
                                                        <p class="text-white"><?php echo $tsHighestLabel; ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="caret-select"><i class="bi bi-caret-right-alt pr-2"></i></div>
                                    </div>
                                    <div class="card primary mb-4 col-6 text-dark row-w">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col border-right">
                                                    <h6 class="card-title text-left"><a href="<?php echo base_url(); ?>hhsizeincome/province/<?php echo $id; ?>" class="text-dark stretched-link text-decoration-none card-sec">Household Size (2016)</a></h6>
                                                    <h2 class="card-text"><?php echo $hhsize_all['value']; ?><i class="bi bi-dash text-primary"></i></h2>
                                                    <div class="card-note w-75 mx-auto rounded-pill bg-warning">
                                                        <p class="text-white">members</p>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <h6 class="card-title text-left mb-2"><a href="<?php echo base_url(); ?>hhsizeincome/province/<?php echo $id; ?>" class="text-dark stretched-link text-decoration-none card-sec">Rice as Major Income (2016)</a></h6>
                                                    <div><canvas id="ctxSource"></canvas></div>
                                                    <div class="card-note w-75 mx-auto rounded-pill bg-warning mt-2">
                                                        <p class="text-white">Of Farming Households</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="caret-select"><i class="bi bi-caret-right-alt pr-2"></i></div>
                                    </div>
                                </div>
                                <div class="card-deck mt-0 text-center text-white" style="margin-top: -15px !important;">
                                    <div class="card primary mb-4 col-6 text-dark row-w">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col border-right">
                                                    <h6 class="card-title text-left"><a href="<?php echo base_url(); ?>educfarmexp/province/<?php echo $id; ?>" class="text-dark stretched-link text-decoration-none card-sec">Formal Education (2016)</a></h6>
                                                    <h2 class="card-text"><?php echo number_format($educ_all['value']); ?><i class="bi bi-caret-up-fill text-primary"></i></h2>
                                                    <div class="card-note w-50 mx-auto rounded-pill bg-warning">
                                                        <p class="text-white">years</p>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <h6 class="card-title text-left mb-2"><a href="<?php echo base_url(); ?>educfarmexp/province/<?php echo $id; ?>" class="text-dark stretched-link text-decoration-none card-sec">Farming Experience (2016)</a></h6>
                                                    <h2 class="card-text"><?php echo number_format($fexp_all['value']); ?><i class="bi bi-caret-up-fill text-primary"></i></h2>
                                                    <div class="card-note w-50 mx-auto rounded-pill bg-warning mt-1">
                                                        <p class="text-white">years</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="caret-select"><i class="bi bi-caret-right-alt pr-2"></i></div>
                                    </div>
                                    <div class="card primary mb-4 col-6 text-dark row-w">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col border-right">
                                                    <h6 class="card-title text-left mb-2"><a href="<?php echo base_url(); ?>orgtraining/province/<?php echo $id; ?>" class="text-dark stretched-link text-decoration-none card-sec">Organization (2016)</a></h6>
                                                    <div><canvas id="ctxOrg"></canvas></div>
                                                    <div class="card-note w-75 mx-auto rounded-pill bg-warning mt-2">
                                                        <p class="text-white">Members</p>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <h6 class="card-title text-left mb-2"><a href="<?php echo base_url(); ?>orgtraining/province/<?php echo $id; ?>" class="text-dark stretched-link text-decoration-none card-sec">Trainings (2016)</a></h6>
                                                    <div><canvas id="ctxTrain"></canvas></div>
                                                    <div class="card-note w-100 mx-auto rounded-pill bg-warning mt-2">
                                                        <p class="text-white">Attendees</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="caret-select"><i class="bi bi-caret-right-alt pr-2"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- PAGE NUMBER -->
                        <div class="row" style="margin-right: 24px; margin-top: 2px;">
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important; float: right;">8 | STATE OF THE RICE SECTOR IN <?php echo strtoupper($production_all['location_name']);?></p>
                            </div>
                        </div>

                    </div>
                </main>
            </div>
        </div>

        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br class="pagebreak">

        <!-- MONTHLY INCOME -->

        <div class="container-fluid" id="monthlyincomes1">
            <div class="row">
                <main role="main" class="col">  
                    <!-- Header --->
                    <!-- <div id="netincome" class="jumbotron text-center">
                        <div class="jumbotron-content">
                            <h2>Profile of the Filipino Rice Farmer in <?php echo $monthly_income_all['location_name']?></h2>
                            <h1>Estimated Monthly Income</h1>
                        </div>
                    </div> -->
                    
                    <!-- Body -->
                    <div class="sublevel" id="monthlyincome1-prov">

                        <!-- FOR VERTICAL PRINT IN BLACK EDGING LEFT SIDE -->
                        <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; transform:scale(-1); float: left; margin-left: -17px; margin-top: 35px;">ESTIMATED MONTHLY INCOME</p>

                        <div style="margin-left: 35px; margin-top: 7px;">
                            <h2>Profile of the Filipino Rice Farmer in <?php echo $monthly_income_all['location_name']?></h2>
                            <h1 style="font-size: 67px;">Estimated Monthly Income</h1>
                            <br>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="card-deck mb-2 text-center" style="margin-left: -3px; margin-top: 10px; margin-right: 30px;">
                                    <div class="card primary mb-4 bg-primary-2 text-white">
                                    <div class="card-body">
                                        <h5 class="card-title pb-2">Estimated Monthly Income (2016)</h5>
                                        <h1 class="card-text font-weight-bold">P <?php echo number_format($monthly_income_all['value']); ?><i class="<?php echo $mincome_caret; ?>"></i></h1>
                                        <div class="card-note w-50 mx-auto rounded-pill bg-primary"><p class="text-white">per household</p></div>
                                    </div>
                                    </div>
                                    <div class="card primary mb-4 bg-gold text-white">
                                    <div class="card-body">
                                        <h5 class="card-title pb-2">Above Poverty Threshold (2016)</h5>
                                        <h1 class="card-text font-weight-bold"><?php echo number_format($poverty_all['value']); ?>%<i class="<?php echo $ppercent_caret; ?>"></i></h1>
                                        <div class="card-note w-75 mx-auto rounded-pill"><p class="text-white">of farming households</p></div>
                                    </div>
                                    </div>
                                    <div class="card primary mb-4 bg-gold text-white">
                                    <div class="card-body">
                                        <h5 class="card-title pb-2">Monthly Poverty Threshold (2015)</h5>
                                        <h1 class="card-text font-weight-bold">P <?php echo number_format($poverty_threshold_all['value']); ?><i class="<?php echo $pthreshold_caret; ?>"></i></h1>
                                        <div class="card-note w-75 mx-auto rounded-pill"><p class="text-white">Per Household of 5</p></div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="row">
                            <div class="col">
                                <div class="card mb-4" id="monthlyincome1-chart1" style="margin-left: 35px; margin-top: -20px; margin-right: -5px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart text-white" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt ml-0"></i></a> -->
                                        <h5 class="my-0 pt-2 pb-2">Estimated Monthly Income by Survey Year (<span class='case'>2016</span>)</h5>
                                        <p class="my-0 font-weight-normal text-muted">per household, in pesos (RBFHS, PhilRice-SED, 2019)</p>
                                    </div>
                                    <div class="card-body">
                                        <div><canvas id="monthlyincome_ctxChart1"></canvas></div>
                                    </div>
                                    <div class="card-footer text-muted">
                                        Data Source: <a href="https://palaystat.philrice.gov.ph/profile/retrieve/table/6" target="_blank">Estimated monthly per capita income and percentage distribution of income - PalayStat System</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card mb-4" id="monthlyincome1-chart2" style="margin-top: -20px; margin-right: 20px; margin-left: 5px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart text-white" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt ml-0"></i></a> -->
                                        <h5 class="my-0 pt-2 pb-2">Above Poverty Threshold by Survey Year (<span class='case'>2016</span>)</h5>
                                        <p class="my-0 font-weight-normal text-muted">in percent (RBFHS, PhilRice-SED, 2019)</p>
                                    </div>
                                    <div class="card-body">
                                        <div><canvas id="monthlyincome_ctxChart2"></canvas></div>
                                    </div>
                                    <div class="card-footer text-muted">
                                        Data Source: <a href="https://palaystat.philrice.gov.ph/profile/retrieve/table/6" target="_blank">Estimated monthly per capita income and percentage distribution of income - PalayStat System</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card mb-4" id="monthlyincome1-chart3" style="margin-top: -20px; margin-right: 55px; margin-left: -25px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart text-white" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt ml-0"></i></a> -->
                                        <h5 class="my-0 pt-2 pb-2">Monthly Poverty Threshold by Survey Year (1997-2015)</h5>
                                        <p class="my-0 font-weight-normal text-muted">in pesos (PSA, 2015)</p>
                                    </div>
                                    <div class="card-body">
                                        <div><canvas id="monthlyincome_ctxChart3"></canvas></div>
                                    </div>
                                    <div class="card-footer text-muted">
                                        Data Source: <a href="https://palaystat.philrice.gov.ph/profile/retrieve/table/6" target="_blank">Estimated monthly per capita income and percentage distribution of income - PalayStat System</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- PAGE NUMBER -->
                        <div class="row" style="margin-left: 33px; margin-top: 42px;>
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important;">9 | STATE OF THE RICE SECTOR IN <?php echo strtoupper($production_all['location_name']);?></p>
                            </div>
                        </div>

                    </div>
                </main>
            </div>
        </div>

        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br class="pagebreak">

        <!-- SOCIAL -->

        <div class="container-fluid" id="socials1">
            <div class="row">
                <main role="main" class="col">        
                    <!-- Header --->
                    <!-- <div id="social" class="jumbotron text-center">
                        <div class="jumbotron-content">
                            <h2>Profile of the Filipino Rice Farmer in <?php echo $mean_age_all['location_name']?></h2>
                            <h1>Age, Sex and Civil Status</h1>
                        </div>
                    </div> -->
                    
                    <!-- Body -->
                    <div class="sublevel" id="social1-prov">

                        <!-- FOR VERTICAL PRINT IN BLACK EDGING RIGHT SIDE -->
                        <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; float: right; margin-right: -17px; margin-top: 35px;">AGE, SEX AND CIVIL STATUS</p>

                        <div style="margin-left: 45px; margin-top: 7px;">
                            <h2>Profile of the Filipino Rice Farmer in <?php echo $mean_age_all['location_name']?></h2>
                            <h1 style="font-size: 67px;">Age, Sex and Civil Status</h1>
                            <br>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="card-deck mb-2 text-center" style="margin-left: 45px; margin-right: -15px; margin-top: 10px;">
                                    <div class="card primary mb-4 bg-primary-2 text-white">
                                    <div class="card-body">
                                        <h5 class="card-title pb-2">Average Age (2016)</h5>
                                        <h1 class="card-text font-weight-bold"><?php echo $mean_age_all['value']; ?><i class="<?php echo $age_caret; ?>"></i></h1>
                                        <div class="card-note w-50 mx-auto rounded-pill bg-primary"><p class="text-white">years old</p></div>
                                    </div>
                                    </div>
                                    <div class="card primary mb-4 bg-primary-2 text-white">
                                    <div class="card-body">
                                        <div class="row d-flex align-items-center h-100">
                                            <div class="col-3"><h5 class="card-title m-0 p-0">Sex (2016)</h5></div>
                                            <div class="col-5"><canvas id="social_ctxSex"></canvas></div>
                                            <div class="col-4"><div class="card-note w-100 m-0 rounded-pill bg-primary"><p class="text-white">Male</p></div></div>
                                        </div>    
                                    </div>
                                    </div>
                                    <div class="card primary mb-4 bg-primary-2 text-white">
                                    <div class="card-body">
                                        <div class="row d-flex align-items-center h-100">
                                            <div class="col-3"><h5 class="card-title m-0 p-0">Civil Status (2016)</h5></div>
                                            <div class="col-5"><canvas id="social_ctxCivil"></canvas></div>
                                            <div class="col-4"><div class="card-note w-100 m-0 rounded-pill bg-primary"><p class="text-white">Married</p></div></div>
                                        </div>    
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="row">
                            <div class="col">
                                <div class="card mb-4" id="social1-chart1" style="margin-left: 55px; margin-top: -20px; margin-right: -25px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart text-white" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt ml-0"></i></a> -->
                                        <h5 class="my-0 pt-2 pb-2">Distribution of Age by Survey Year (<span class='case'>2016</span>)</h5>
                                        <p class="my-0 font-weight-normal text-muted">in percent (RBFHS, PhilRice-SED, 2019)</p>
                                    </div>
                                    <div class="card-body">
                                        <div><canvas id="ctxAgeGroup"></canvas></div>
                                    </div>
                                    <div class="card-footer text-muted">
                                        Data Source: <a href="https://palaystat.philrice.gov.ph/profile/retrieve/table/1" target="_blank">Socioeconomic characteristics of farmer-respondents - PalayStat System</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card mb-4" id="social1-chart2" style="margin-top: -20px; margin-right: 5px; margin-left: 25px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart text-white" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt ml-0"></i></a> -->
                                        <h5 class="my-0 pt-2 pb-2">Distribution of Sex by Survey Year (<span class='case'>2016</span>)</h5>
                                        <p class="my-0 font-weight-normal text-muted">in percent (RBFHS, PhilRice-SED, 2019)</p>
                                    </div>
                                    <div class="card-body">
                                        <div><canvas id="ctxSexGroup"></canvas></div>
                                    </div>
                                    <div class="card-footer text-muted">
                                        Data Source: <a href="https://palaystat.philrice.gov.ph/profile/retrieve/table/1" target="_blank">Socioeconomic characteristics of farmer-respondents - PalayStat System</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card mb-4" id="social1-chart3" style="margin-top: -20px; margin-right: 35px; margin-left: -10px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart text-white" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt ml-0"></i></a> -->
                                        <h5 class="my-0 pt-2 pb-2">Distribution of Civil Status by Survey Year (<span class='case'>2016</span>)</h5>
                                        <p class="my-0 font-weight-normal text-muted">in percent (RBFHS, PhilRice-SED, 2019)</p>
                                    </div>
                                    <div class="card-body">
                                        <div><canvas id="ctxCivilGroup"></canvas></div>
                                    </div>
                                    <div class="card-footer text-muted">
                                        Data Source: <a href="https://palaystat.philrice.gov.ph/profile/retrieve/table/1" target="_blank">Socioeconomic characteristics of farmer-respondents - PalayStat System</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- PAGE NUMBER -->
                        <div class="row" style="margin-right: 24px; margin-top: 20px;">
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important; float: right;">10 | STATE OF THE RICE SECTOR IN <?php echo strtoupper($production_all['location_name']);?></p>
                            </div>
                        </div>

                    </div>
                </main>
            </div>
        </div>

        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br class="pagebreak">

        <!-- FARM DETAILS -->

        <div class="container-fluid" id="farmdetails1">
            <div class="row">
                <main role="main" class="col">
                    <!-- Header --->
                    <!-- <div id="farmdetails" class="jumbotron text-center">
                        <div class="jumbotron-content">
                            <h2>Profile of the Filipino Rice Farmer in <?php echo $avefarm_all['location_name']?></h2>
                            <h1>Farm Size and Ownership</h1>
                        </div>
                    </div> -->
                    <?php
                        $tsHighest = max($owner_all['value'], $amort_all['value'], $lessee_all['value'], $tenant_all['value'], $others_all['value']);
                        $tsHighestLabel = "";
                        if($owner_all['value'] == $tsHighest) {
                            $tsHighestLabel = "Land Owners";
                        }
                        if($amort_all['value'] == $tsHighest) {
                            $tsHighestLabel = "Amortizing";
                        }
                        if($lessee_all['value'] == $tsHighest) {
                            $tsHighestLabel = "Lessee";
                        }
                        if($tenant_all['value'] == $tsHighest) {
                            $tsHighestLabel = "Tenants";
                        }
                        if($others_all['value'] == $tsHighest) {
                            $tsHighestLabel = "Other Ownership";
                        } 
                    ?>
                    <!-- Body -->
                    <div class="sublevel" id="farmdetail1-prov">

                        <!-- FOR VERTICAL PRINT IN BLACK EDGING LEFT SIDE -->
                        <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; transform:scale(-1); float: left; margin-left: -17px; margin-top: 35px;">FARM SIZE AND OWNERSHIP</p>

                        <div style="margin-left: 35px; margin-top: 7px;">
                            <h2>Profile of the Filipino Rice Farmer in <?php echo $avefarm_all['location_name']?></h2>
                            <h1 style="font-size: 67px;">Farm Size and Ownership</h1>
                            <br>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="card-deck mb-2 text-center" style="margin-left: -5px; margin-top: 10px; margin-right: 30px;">
                                    <div class="card primary mb-4 bg-primary-2 text-white">
                                    <div class="card-body">
                                        <h5 class="card-title pb-2">Average Farm Size (2016)</h5>
                                        <h1 class="card-text font-weight-bold"><?php echo $avefarm_all['value']; ?><i class="<?php echo $fsize_caret; ?>"></i></h1>
                                        <div class="card-note w-25 mx-auto rounded-pill bg-primary"><p class="text-white">Hectares</p></div>
                                    </div>
                                    </div>
                                    <div class="card primary mb-4 bg-primary-2 text-white">
                                    <div class="card-body">
                                        <div class="row d-flex align-items-center h-100">
                                            <div class="col-4"><h5 class="card-title m-0 p-0">Farm Ownership (2016)</h5></div>
                                            <div class="col-4"><canvas id="farmdetails_ctxTenStat"></canvas></div>
                                            <div class="col-4"><div class="card-note w-100 m-0 rounded-pill bg-primary"><p class="text-white"><?php echo $tsHighestLabel; ?></p></div></div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="card mb-4" id="farmdetail1-chart1" style="margin-left: 30px; margin-top: -20px; margin-right: 8px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a> -->
                                        <h5 class="my-0 pt-2 pb-2">Distribution by Farm Size by Survey Year (<span class='case'>2016</span>)</h5>
                                        <p class="my-0 font-weight-normal text-muted">in percent (RBFHS, PhilRice-SED, 2019)</p>
                                    </div>
                                    <div class="card-body">
                                        <div><canvas id="ctxFarmSize"></canvas></div>
                                    </div>
                                    <div class="card-footer text-muted">
                                        Data Source: <a href="https://palaystat.philrice.gov.ph/profile/retrieve/table/8" target="_blank">Farm size, number of parcels and farm location - PalayStat System</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card mb-4" id="farmdetail1-chart1" style="margin-left: -10px; margin-top: -20px; margin-right: 50px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a> -->
                                        <h5 class="my-0 pt-2 pb-2">Farm Ownership Status by Survey Year (<span id="case-1" class='case'>2016</span>)</h5>
                                        <p class="my-0 font-weight-normal text-muted">in percent (RBFHS, PhilRice-SED, 2019)</p>
                                    </div>
                                    <div class="card-body">
                                        <div><canvas id="ctxTenStatYear"></canvas></div>
                                    </div>
                                    <div class="card-footer text-muted">Note: Others include mortgage, borrowed land, among others<br/>
                                        Data Source: <a href="https://palaystat.philrice.gov.ph/profile/retrieve/table/8" target="_blank">Farm size, number of parcels and farm location - PalayStat System</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- PAGE NUMBER -->
                        <div class="row" style="margin-left: 30px; margin-top: 0px;>
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important;">11 | STATE OF THE RICE SECTOR IN <?php echo strtoupper($production_all['location_name']);?></p>
                            </div>
                        </div>

                    </div>
                </main>
            </div>
        </div>

        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br class="pagebreak">

        <!-- HOUSEHOLD SIZE INCOME -->

        <div class="container-fluid" id="householdsizeincomes1">
            <div class="row">
                <main role="main" class="col">
                    <!-- Header --->
                    <!-- <div id="hhsize" class="jumbotron text-center">
                        <div class="jumbotron-content">
                            <h2>Profile of the Filipino Rice Farmer in <?php echo $hhsize_all['location_name']?></h2>
                            <h1>Household Size and Source of Income</h1>
                        </div>
                    </div> -->
                    
                    <!-- Body -->
                    <div class="sublevel" id="householdsizeincome1-prov">

                        <!-- FOR VERTICAL PRINT IN BLACK EDGING RIGHT SIDE -->
                        <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; float: right; margin-right: -17px; margin-top: 35px;">HOUSEHOLD SIZE AND SOURCE OF INCOME</p>

                        <div style="margin-left: 45px; margin-top: 7px;">
                            <h2>Profile of the Filipino Rice Farmer in <?php echo $mean_age_all['location_name']?></h2>
                            <h1 style="font-size: 60px;">Household Size and Source of Income</h1>
                            <br>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="card-deck mb-2 text-center" style="margin-left: 45px; margin-right: -15px; margin-top: -20px;">
                                    <div class="card primary mb-4 bg-primary-2 text-white hhsize-row">
                                    <div class="card-body">
                                        <h5 class="card-title pb-2">Average Size of Household (2016)</h5>
                                        <h1 class="card-text font-weight-bold mt-3"><?php echo $hhsize_all['value']; ?><i class="<?php echo $hhsize_caret; ?>"></i></h1>
                                        <div class="card-note w-50 mx-auto rounded-pill bg-primary"><p class="text-white">Members</p></div>
                                    </div>
                                    </div>
                                    <div class="card primary mb-4 bg-primary-2 text-white hhsize-row">
                                    <div class="card-body">
                                        <div class="row d-flex align-items-center h-100">
                                            <div class="col-5"><h5 class="card-title m-0 p-0">Rice as Major Source of Income (2016)</h5></div>
                                            <div class="col-7"><canvas id="householdsizeincome_ctxSource"></canvas><div class="card-note w-100 m-0 rounded-pill bg-primary" style="width: 190px !important; margin-left: -80px !important;"><p class="text-white mt-2">Of Farming Households</p></div></div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="card primary mb-4 bg-primary-2 text-white hhsize-row">
                                    <div class="card-body">
                                        <div class="row d-flex align-items-center h-100">
                                            <div class="col-5"><h5 class="card-title m-0 p-0">Percent Share of Rice Farming (2016)</h5></div>
                                            <div class="col-7"><canvas id="ctxHSource"></canvas><div class="card-note w-100 m-0 rounded-pill bg-primary" style="width: 190px !important; margin-left: -80px !important;"><p class="text-white mt-2">from Household Income</p></div></div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="card mb-4" id="householdsizeincome1-chart1" style="margin-left: 55px; margin-top: -20px; margin-right: 8px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a> -->
                                        <h5 class="my-0 pt-2 pb-2">Average Size of Household by Survey Year (<span class='case'>2016</span>)</h5>
                                        <p class="my-0 font-weight-normal text-muted">(RBFHS, PhilRice-SED, 2019)</p>
                                    </div>
                                    <div class="card-body">
                                        <div><canvas id="ctxHhSize"></canvas></div>
                                    </div>
                                    <div class="card-footer text-muted">
                                        Data Source: <a href="https://palaystat.philrice.gov.ph/profile/retrieve/table/1" target="_blank">Socioeconomic characteristics of farmer-respondents - PalayStat System</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card mb-4" id="householdsizeincome1-chart2" style="margin-left: -10px; margin-top: -20px; margin-right: 35px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a> -->
                                        <h5 class="my-0 pt-2 pb-2">Distribution of Farming Household per Major Sources of Income by Survey Year (<span class='case'>2016</span>)</h5>
                                        <p class="my-0 font-weight-normal text-muted">in percent (RBFHS, PhilRice-SED, 2019)</p>
                                    </div>
                                    <div class="card-body">
                                        <div><canvas id="ctxSources"></canvas></div>
                                    </div>
                                    <div class="card-footer text-muted">
                                        Data Source: <a href="https://palaystat.philrice.gov.ph/profile/retrieve/table/1" target="_blank">Socioeconomic characteristics of farmer-respondents - PalayStat System</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- PAGE NUMBER -->
                        <div class="row" style="margin-right: 24px; margin-top: -10px;">
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important; float: right;">12 | STATE OF THE RICE SECTOR IN <?php echo strtoupper($production_all['location_name']);?></p>
                            </div>
                        </div>

                    </div>
                </main>
            </div>
        </div>

        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br class="pagebreak">

        <!-- EDUC FARM EXP -->

        <div class="container-fluid" id="educfarmexps1">
            <div class="row">
                <main role="main" class="col"> 
                    <!-- Header --->
                    <!-- <div id="farmexp" class="jumbotron text-center">
                        <div class="jumbotron-content">
                            <h2>Profile of the Filipino Rice Farmer in <?php echo $educ_all['location_name']?></h2>
                            <h1>Formal Education and Farming Experience</h1>
                        </div>
                    </div> -->
                    
                    <!-- Body -->
                    <div class="sublevel" id="educfarmexp1-prov">

                        <!-- FOR VERTICAL PRINT IN BLACK EDGING LEFT SIDE -->
                        <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; transform:scale(-1); float: left; margin-left: -17px; margin-top: 35px;">FORMAL EDUCATION AND FARMING EXPERIENCE</p>

                        <div style="margin-left: 35px; margin-top: 7px;">
                            <h2>Profile of the Filipino Rice Farmer in <?php echo $avefarm_all['location_name']?></h2>
                            <h1 style="font-size: 60px;">Formal Education and Farming Experience</h1>
                            <br>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="card-deck mb-2 text-center" style="margin-left: 0px; margin-top: -10px; margin-right: 30px;">
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
                                <div class="card mb-4" id="educfarmexp1-chart1" style="margin-left: 35px; margin-top: -20px; margin-right: 8px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a> -->
                                        <h5 class="my-0 pt-2 pb-2">Distribution of Farmers per Formal Education Level by Survey Year (<span class='case'>2016</span>)</h5>
                                        <p class="my-0 font-weight-normal text-muted">in percent (RBFHS, PhilRice-SED, 2019)</p>
                                    </div>
                                    <div class="card-body">
                                        <div><canvas id="educfarmexp_ctxChart1"></canvas></div>
                                    </div>
                                    <div class="card-footer text-muted">
                                        Data Source: <a href="https://palaystat.philrice.gov.ph/profile/retrieve/table/1" target="_blank">Socioeconomic characteristics of farmer-respondents - PalayStat System</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card mb-4" id="educfarmexp1-chart2" style="margin-left: -10px; margin-top: -20px; margin-right: 55px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a> -->
                                        <h5 class="my-0 pt-2 pb-2">Average Years of Farming Experience Per Survey Year (<span class='case'>2016</span>)</h5>
                                        <p class="my-0 font-weight-normal text-muted">(RBFHS, PhilRice-SED, 2019)</p>
                                    </div>
                                    <div class="card-body">
                                        <div><canvas id="educfarmexp_ctxChart2"></canvas></div>
                                    </div>
                                    <div class="card-footer text-muted">
                                        Data Source: <a href="https://palaystat.philrice.gov.ph/profile/retrieve/table/1" target="_blank">Socioeconomic characteristics of farmer-respondents - PalayStat System</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- PAGE NUMBER -->
                        <div class="row" style="margin-left: 33px; margin-top: -15px;>
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important;">13 | STATE OF THE RICE SECTOR IN <?php echo strtoupper($production_all['location_name']);?></p>
                            </div>
                        </div>

                    </div>
                </main>
            </div>
        </div>

        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br class="pagebreak">

        <!-- ORG TRAINING -->

        <div class="container-fluid" id="orgtrainings1">
            <div class="row">
                <main role="main" class="col">
                    <!-- Header --->
                    <!-- <div id="orgtrain" class="jumbotron text-center">
                        <div class="jumbotron-content">
                            <h2>Profile of the Filipino Rice Farmer in <?php echo $org_all['location_name']?></h2>
                            <h1>Organization and Training Engagement</h1>
                        </div>
                    </div> -->
                    
                    <!-- Body -->
                    <div class="sublevel" id="orgtraining1-prov">

                        <!-- FOR VERTICAL PRINT IN BLACK EDGING RIGHT SIDE -->
                        <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; float: right; margin-right: -17px; margin-top: 35px;">ORGANIZATION AND TRAINING ENGAGEMENT</p>

                        <div style="margin-left: 45px; margin-top: 7px;">
                            <h2>Profile of the Filipino Rice Farmer in <?php echo $mean_age_all['location_name']?></h2>
                            <h1 style="font-size: 60px;">Organization and Training Engagement</h1>
                            <br>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="card-deck mb-2 text-center" style="margin-left: 45px; margin-right: -15px; margin-top: -20px;">
                                    <div class="card primary mb-2 bg-primary-2 text-white">
                                    <div class="card-body">
                                        <div class="row d-flex align-items-center h-100">
                                            <div class="col-4"><h5 class="card-title m-0 p-0">Organization Membership (2016)</h5></div>
                                            <div class="col-4"><canvas id="orgtraining_ctxOrg"></canvas></div>
                                            <div class="col-4"><div class="card-note w-100 m-0 rounded-pill bg-primary"><p class="text-white">Members</p></div></div>
                                        </div>    
                                    </div>
                                    </div>
                                    <div class="card primary mb-2 bg-primary-2 text-white">
                                    <div class="card-body">
                                        <div class="row d-flex align-items-center h-100">
                                            <div class="col-3"><h5 class="card-title m-0 p-0">Training Attendance (2016)</h5></div>
                                            <div class="col-4"><canvas id="orgtraining_ctxTrain"></canvas></div>
                                            <div class="col-5"><div class="card-note w-100 m-0 rounded-pill bg-primary"><p class="text-white">Attended Training</p></div></div>
                                        </div>    
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="row">
                            <div class="col">
                                <div class="card mb-4" id="orgtraining1-chart1" style="margin-left: 55px; margin-top: -5px; margin-right: -10px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a> -->
                                        <h5 class="my-0 pt-2 pb-2">Percent of Farmers Who are Members of Organizations by Survey Year (<span class='case'>2016</span>)</h5>
                                        <p class="my-0 font-weight-normal text-muted">(RBFHS, PhilRice-SED, 2019)</p>
                                    </div>
                                    <div class="card-body">
                                        <div><canvas id="ctxOrgY"></canvas></div>
                                    </div>
                                    <div class="card-footer text-muted">
                                        Data Source: <a href="https://palaystat.philrice.gov.ph/profile/retrieve/table/1" target="_blank">Socioeconomic characteristics of farmer-respondents - PalayStat System</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card mb-4" id="orgtraining1-chart2" style="margin-left: 10px; margin-top: -5px; margin-right: 35px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a> -->
                                        <h5 class="my-0 pt-2 pb-2">Percent of Farmers Who Have Attended at Least One Training by Survey Year (<span class='case'>2016</span>)</h5>
                                        <p class="my-0 font-weight-normal text-muted">(RBFHS, PhilRice-SED, 2019)</p>
                                    </div>
                                    <div class="card-body">
                                        <div><canvas id="ctxTrainY"></canvas></div>
                                    </div>
                                    <div class="card-footer text-muted">
                                        Data Source: <a href="https://palaystat.philrice.gov.ph/profile/retrieve/table/1" target="_blank">Socioeconomic characteristics of farmer-respondents - PalayStat System</a>
                                    </div>
                                </div>
                            </div>
                        </div> 

                         <!-- PAGE NUMBER -->
                         <div class="row" style="margin-right: 24px; margin-top: -10px;">
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important; float: right;">14 | STATE OF THE RICE SECTOR IN <?php echo strtoupper($production_all['location_name']);?></p>
                            </div>
                        </div>

                    </div>
                </main>
            </div>
        </div>

        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br class="pagebreak">

        <!-- FARM PRACTICES -->

        <div class="container-fluid" id="farmpractices1">
            <div class="row">
                <main role="main" class="col">

                    <!-- Header --->
                    <!-- <div id="farmpractices" class="jumbotron text-center">
                        <div class="jumbotron-content">
                            <h2>Rice Farming Practices in</h2>
                            <h1><?php echo $trans_all_pr_fp['location_name']?></h1>
                            <p class="lead"><i>How do our Filipino farmers cultivate rice in <?php echo $trans_all_pr_cp['location_name']?>? What practices do they usually use?</i> <br/> Learn and study the different farming methods of the Filipino rice farmers.</p>
                        </div>
                    </div> -->

                    <!-- Body -->
                    <div class="farming dashboard" id="farmpractices-prov">

                        <!-- FOR VERTICAL PRINT IN BLACK EDGING LEFT SIDE -->
                        <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; transform:scale(-1); float: left; margin-left: -17px; margin-top: 35px;">RICE FARMING PRACTICES</p>

                        <div style="margin-left: 30px; margin-top: -15px;">
                            <br>
                            <h1 id="header">Rice Farming Practices in the Philippines</h1>
                            <p class="lead"><i>How do our Filipino farmers cultivate rice in <?php echo $trans_all_pr_cp['location_name']?>? What practices do they usually use?</i> <br/> Learn and study the different farming methods of the Filipino rice farmers.</p>
                        </div>

                        <div class="row" style="margin-left: 20px; margin-top: 10px; margin-right: 37px;">
                            <div class="col-6">
                                <div class="card primary mb-2 bg-warning-2 card-green">
                                    <h6 class="card-title text-left text-white pt-3 pl-3">Seeding Rate (2016 WS-2017 DS)</h6>
                                    <div class="card-body pr-5">
                                        <div class="row text-center text-white">
                                            <div class="col-4 border-right">
                                                <p class="card-title-note"><a href="<?php echo base_url(); ?>seedingrate/province/<?php echo $id; ?>" class="text-white stretched-link text-decoration-none card-sec">Average</a></p>
                                                <h1 class="card-text font-weight-bold"><?php echo number_format($average_rate['value'], 0); ?><i class="bi bi-caret-up-fill text-primary"></i></h1>
                                            </div>
                                            <div class="col-4 border-right">
                                                <p class="card-title-note"><a href="<?php echo base_url(); ?>seedingrate/province/<?php echo $id; ?>" class="text-white stretched-link text-decoration-none card-sec">Transplanting</a></p>
                                                <h1 class="card-text font-weight-bold"><?php echo number_format($trans_rate['value'], 0); ?><i class="bi bi-caret-down-fill text-primary"></i></h1>
                                            </div>
                                            <div class="col-4">
                                                <p class="card-title-note"><a href="<?php echo base_url(); ?>seedingrate/province/<?php echo $id; ?>" class="text-white stretched-link text-decoration-none card-sec">Direct Seeding</a></p>
                                                <h1 class="card-text font-weight-bold"><?php echo number_format($direct_rate['value'], 0); ?><i class="bi bi-caret-up-fill text-primary"></i></h1>
                                            </div>
                                        </div>
                                        <div class="w-50 mt-3 mx-auto pb-0 rounded-pill text-center fs-sr">
                                            <p class="text-black text-uppercase mb-0">Kilograms Per Hectare</p>
                                        </div>
                                    </div>
                                    <div class="caret-select"><i class="bi bi-caret-right-alt pr-2"></i></div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card primary mb-2 bg-warning-2 card-green">
                                    <div class="card-body">
                                        <h5 class="card-title"><a href="<?php echo base_url(); ?>cropest/province/<?php echo $id; ?>" class="text-white stretched-link text-decoration-none card-main">Crop Establishment (2017 DS)</a></h5>
                                        <div class="row text-center">
                                            <div class="col">
                                                <div class="w-75 mx-auto mb-2 rounded-pill text-center">
                                                    <p class="text-black text-uppercase mb-0">Transplanting</p>
                                                </div>
                                                <div><canvas id="ctxTransDS"></canvas></div>
                                            </div>
                                            <div class="col">
                                                <div class="w-75 mx-auto mb-2 rounded-pill text-center">
                                                    <p class="text-black text-uppercase mb-0">Direct Seeding</p>
                                                </div>
                                                <div><canvas id="ctxDirectDS"></canvas></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="caret-select"><i class="bi bi-caret-right-alt pr-2"></i></div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="card primary mb-2 bg-warning-2 text-white card-green">
                                    <div class="card-body pr-2">
                                        <h6 class="card-title mb-0"><a href="<?php echo base_url(); ?>labor/province/<?php echo $id; ?>" class="text-white stretched-link text-decoration-none card-main">Labor (2016-2017)</a></h6>
                                        <h1 class="card-text text-center mt-4"><?php echo number_format($labor_all['value']); ?><i class="bi bi-caret-up-fill text-primary"></i></h1>
                                        <div class="w-100 mx-auto mt-4 rounded-pill text-center" style="margin-bottom: 11px;">
                                            <p class="text-black text-uppercase mb-0">Person-Days/Ha</p>
                                        </div>
                                    </div>
                                    <div class="caret-select"><i class="bi bi-caret-right-alt pr-2"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="card primary mb-2 card-row2" style="margin-left: 35px; margin-top: 0px; margin-right: 13px;">
                                    <h6 class="card-title text-left pt-3 pl-3">Seed Class Usage (2017 DS)</h6>
                                    <div class="card-body pr-5">
                                        <div class="row text-center mt-2 r2" style="margin-bottom: 20px;">
                                            <div class="col-4 border-right">
                                                <p class="card-title-note"><a href="<?php echo base_url(); ?>seedclass/province/<?php echo $id; ?>" class="text-black stretched-link text-decoration-none card-sec">Hybrid</a></p>
                                                <h1 class="smaller card-text"><?php echo number_format($hy_all['value']); ?>%<i class="bi bi-caret-up-fill text-primary"></i></h1>
                                            </div>
                                            <div class="col-4 border-right">
                                                <p class="card-title-note"><a href="<?php echo base_url(); ?>seedclass/province/<?php echo $id; ?>" class="text-black stretched-link text-decoration-none card-sec">High Quality Inbred</a></p>
                                                <h1 class="smaller card-text"><?php echo number_format($hq_all['value']); ?>%<i class="bi bi-caret-down-fill text-primary"></i></h1>
                                            </div>
                                            <div class="col-4">
                                                <p class="card-title-note"><a href="<?php echo base_url(); ?>seedclass/province/<?php echo $id; ?>" class="text-black stretched-link text-decoration-none card-sec">Farmer's Seeds</a></p>
                                                <h1 class="smaller card-text"><?php echo number_format($gs_all['value'] + $fs_all['value']); ?>%<i class="bi bi-caret-down-fill text-primary"></i></h1>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="caret-select"><i class="bi bi-caret-right-alt pr-2"></i></div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card primary mb-2 card-row2" style="margin-left: -12px; margin-top: 0px; margin-right: 50px;">
                                    <h6 class="card-title text-left pt-3 pl-3">Fertilizer Rate (2017 DS)</h6>
                                    <div class="card-body pr-5">
                                        <div class="row text-center text-black r2">
                                            <div class="col-4 border-right">
                                                <p class="card-title-note"><a href="<?php echo base_url(); ?>fertusage/province/<?php echo $id; ?>" class="text-black stretched-link text-decoration-none card-sec">Nitrogen (N)</a></p>
                                                <h1 class="card-text smaller"><?php echo number_format($n_ds['value'], 0); ?><i class="bi bi-caret-down-fill text-primary"></i></h1>
                                            </div>
                                            <div class="col-4 border-right">
                                                <p class="card-title-note"><a href="<?php echo base_url(); ?>fertusage/province/<?php echo $id; ?>" class="text-black stretched-link text-decoration-none card-sec">Phosphorus (P)</a></p>
                                                <h1 class="card-text smaller"><?php echo number_format($p_ds['value'], 0); ?><i class="bi bi-caret-down-fill text-primary"></i></h1>
                                            </div>
                                            <div class="col-4">
                                                <p class="card-title-note"><a href="<?php echo base_url(); ?>fertusage/province/<?php echo $id; ?>" class="text-black stretched-link text-decoration-none card-sec">Potassium (K)</a></p>
                                                <h1 class="card-text smaller"><?php echo number_format($k_ds['value'], 0); ?><i class="bi bi-dash text-primary"></i></h1>
                                            </div>
                                        </div>
                                        <div class="row text-center">
                                            <div class="w-50 mt mx-auto mt-2 pb-0 rounded-pill bg-warning-2 fr">
                                                <p class="text-white text-uppercase mb-0">Kilogram Per Hectare</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="caret-select"><i class="bi bi-caret-right-alt pr-2"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <div>
                                    <div class="card primary text-center card-row3" style="margin-left: 35px; margin-top: 0px;">
                                        <div class="card-body text-black pr-4">
                                            <h6 class="my-0"><a href="<?php echo base_url(); ?>varieties/province/<?php echo $id; ?>" class="card-main">Top 10 Rice Variety Planted (2017 DS)</a></h6>
                                            <p class="my-0 font-weight-normal text-lowercase text-muted">in percent of farmers (%)</p>
                                        </div>
                                        <div class="caret-select"><i class="bi bi-caret-right-alt pr-2" style="top: 34%;"></i></div>
                                    </div>
                                    <div class="p-2 border border-light" style="margin-left: 35px;"><canvas id="ctxChart1-v"></canvas></div>
                                </div>
                                <div class="mt-2">
                                    <div class="card primary text-center card-row4" style="margin-left: 35px; margin-top: 0px;">
                                        <div class="card-body text-black pr-4">
                                            <h6 class="my-0"><a href="<?php echo base_url(); ?>pesticides/province/<?php echo $id; ?>" class="card-main">Top Active Ingredients by Pesticide Type (2017 DS)</a></h6>
                                            <p class="my-0 font-weight-normal text-lowercase text-muted">in percent of farmers (%)</p>
                                        </div>
                                        <div class="caret-select"><i class="bi bi-caret-right-alt pr-2" style="top: 34%;"></i></div>
                                    </div>
                                    <div class="p-2 border border-light fp-top-active-ingridients" style="margin-left: 35px;">
                                        <div class="card-body pt-2">
                                            <?php 
                                                for ($i = 0; $i < count($pest_all); $i++) { 
                                                    $header = "Herbicide";
                                                    switch ($i) {
                                                        case 1: $header = "Insectide"; break;
                                                        case 2: $header = "Fungicide"; break;
                                                        case 3: $header = "Other Pesticide"; break;
                                                    }
                                                    echo '
                                                    <div class="text-center w-50 mt mx-auto mb-2 pb-0 rounded-pill bg-warning-2">
                                                    <p class="text-white text-uppercase mb-0">'.$header.'</p>
                                                    </div>';
                                                    echo '<p class="h6 text-black text-center">' .$pest_all[$i]['label'].'</p>';
                                                }
                                                ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div>
                                    <div class="card primary text-center card-row3" style="margin-right: 0px; margin-top: 0px; margin-bottom: 10px;">
                                        <div class="card-body text-black pr-4">
                                            <h6 class="my-0 text-center"><a href="<?php echo base_url(); ?>adoptionrate/province/<?php echo $id; ?>" class="card-main">Top Rice Farming Technologies and Practices (2016 WS-2017 DS)</a></h6>
                                            <p class="my-0 font-weight-normal text-lowercase text-muted">in percent of farmers (%)</p>
                                        </div>
                                        <div class="caret-select"><i class="bi bi-caret-right-alt pr-2" style="top: 34%;"></i></div>
                                    </div>
                                    <div class="border border-light fp-top-rice-farming" style="padding: 33px 20px;">
                                        <?php for ($i = 0; $i < count($adopt_all); $i++) {
                                            $tech = preg_replace("/\\\\n/", "<br />", $adopt_all[$i]['tech']);
                                            echo '<div class="text-center w-100 mt mx-auto mb-2 pb-0 rounded-pill bg-warning-2">
                                                    <p class="text-white text-uppercase mb-0">'.$adopt_all[$i]['category'].'</p>
                                                </div>';
                                            echo '<div class="row pl-3 pr-3 mb-2 d-flex justify-content-between">';
                                            echo '    <h6>'.$tech.'</h6>';
                                            echo '    <h6 class="font-weight-bold">'.number_format($adopt_all[$i]['value'], 0).'%</h6>';
                                            echo '</div>';
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div>
                                    <div class="card primary text-center card-row3" style="margin-right: 50px; margin-top: 0px;">
                                        <div class="card-body text-black pr-4">
                                            <h6 class="my-0"><a href="<?php echo base_url(); ?>fertilizerapp/province/<?php echo $id; ?>" class="card-main">Rank of Fertilizer-type by Usage (2017 DS)</a></h6>
                                            <p class="my-0 font-weight-normal text-lowercase text-muted">in percent of farmers (%)</p>
                                        </div>
                                        <div class="caret-select"><i class="bi bi-caret-right-alt pr-2" style="top: 34%;"></i></div>
                                    </div>
                                    <div class="p-2 border border-light" style="margin-right: 50px;"><canvas id="ctxChart1"></canvas></div>
                                </div>
                                <div class="mt-2">
                                    <div class="card primary text-center card-row4" style="margin-right: 50px; margin-top: 0px;">
                                        <div class="card-body text-black pr-4">
                                            <h6 class="my-0"><a href="<?php echo base_url(); ?>machinesource/province/<?php echo $id; ?>" class="card-main">Rank of Machines by Usage (2017 DS)</a></h6>
                                            <p class="my-0 font-weight-normal text-lowercase text-muted">in percent of farmers (%)</p>
                                        </div>
                                        <div class="caret-select"><i class="bi bi-caret-right-alt pr-2" style="top: 34%;"></i></div>
                                    </div>
                                    <div class="border border-light fp-rank-of-machine" style="padding: 25px 0; margin-right: 50px;"><canvas id="ctxChart2"></canvas></div>
                                </div>
                            </div>
                        </div>

                        <!-- PAGE NUMBER -->
                        <div class="row" style="margin-left: 33px; margin-top: 9px;>
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important;">15 | STATE OF THE RICE SECTOR IN <?php echo strtoupper($production_all['location_name']);?></p>
                            </div>
                        </div>

                    </div>
                </main>
            </div>
        </div>

        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br class="pagebreak">

        <!-- SEEDING RATE -->

        <div class="container-fluid" id="seedingrates1">
            <div class="row">
                <main role="main" class="col">
                    <!-- Header --->
                    <!-- <div id="seedrate" class="jumbotron text-center">
                        <div class="jumbotron-content">
                            <h2>Rice Farming Practices in <?php echo $trans_all_pr_sr['location_name']?></h2>
                            <h1>Seeding Rate</h1>
                        </div>
                    </div> -->
                    
                    <!-- Body -->
                    <div class="sublevel" id="seedingrate1-prov">

                        <!-- FOR VERTICAL PRINT IN BLACK EDGING RIGHT SIDE -->
                        <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; float: right; margin-right: -20px; margin-top: 35px;">SEEDING RATE</p>

                        <div style="margin-left: 50px; margin-top: 7px;">
                            <h2>Rice Farming Practices in <?php echo $trans_all_pr_sr['location_name']?></h2>
                            <h1 style="font-size: 67px;">Seeding Rate</h1>
                            <br>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="card-deck mb-2 text-center text-white" style="margin-left: 45px; margin-top: 10px; margin-right: 24px;">
                                    <div class="card primary mb-4 bg-primary-3">
                                    <div class="card-body">
                                        <h5 class="card-title pb-2">Transplanting</h5>                        
                                        <h1 class="card-text font-weight-bold"><?php echo (!intval($trans_all_pr_sr['value']) == 0) ? number_format($trans_all_pr_sr['value']) : "-"; ?><i class="<?php echo $transr_caret; ?>"></i></h1>
                                        <div class="card-note w-75 mx-auto rounded-pill bg-alternate"><p class="text-white">kilograms per hectare</p></div>
                                    </div>
                                    </div>
                                    <div class="card primary mb-4 bg-warning-2 text-white">
                                    <div class="card-body">
                                        <h5 class="card-title pb-2">Average (2016 WS-2017 DS)</h5>
                                        <h1 class="card-text font-weight-bold"><?php echo (!intval($average_all_pr_sr['value']) == 0) ? number_format($average_all_pr_sr['value']) : "-"; ?><i class="<?php echo $aver_caret; ?>"></i></h1>
                                        <div class="card-note w-75 mx-auto rounded-pill bg-alternate"><p class="text-black">kilograms per hectare</p></div>
                                    </div>
                                    </div>
                                    <div class="card primary mb-4 bg-primary-3">
                                    <div class="card-body">
                                        <h5 class="card-title pb-2">Direct Seeding</h5>
                                        <h1 class="card-text font-weight-bold"><?php echo (!intval($direct_all_pr_sr['value']) == 0) ? number_format($direct_all_pr_sr['value']) : "-"; ?><i class="<?php echo $directr_caret; ?>"></i></h1>
                                        <div class="card-note w-75 mx-auto rounded-pill bg-alternate"><p class="text-white">kilograms per hectare</p></div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="row">
                            <div class="col">
                                <div class="card mb-4" id="seedingrate1-chart1" style="margin-left: 55px; margin-top: -20px; margin-right: 35px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a> -->
                                        <h5 class="my-0 pt-2 pb-2">Seeding rate per crop establishment method in <?php echo $trans_all['location_name']?> (1996 WS-2017 DS)</h5>
                                        <p class="my-0 font-weight-normal text-muted">in kilograms per hectare (RBFHS, PhilRice-SED, 2019)</p>
                                    </div>
                                    <div class="card-body">
                                        <div><canvas id="seedingrate_ctxChart1"></canvas></div>
                                    </div>
                                    <div class="card-footer text-muted">
                                        Data Source: <a href="https://palaystat.philrice.gov.ph/profile/retrieve/table/62" target="_blank">Seeding rate by cropping season - PalayStat System</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- PAGE NUMBER -->
                        <div class="row" style="margin-right: 22px; margin-top: -10px;">
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important; float: right;">16 | STATE OF THE RICE SECTOR IN <?php echo strtoupper($production_all['location_name']);?></p>
                            </div>
                        </div>

                    </div>
                </main>
            </div>
        </div>

        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br class="pagebreak">

        <!-- CROPEST -->

        <div class="container-fluid" id="cropests1">
            <div class="row">
                <main role="main" class="col">
                    <!-- Header --->
                    <!-- <div id="cropest" class="jumbotron text-center">
                        <div class="jumbotron-content">
                            <h2>Rice Farming Practices in <?php echo $trans_all_pr_cp['location_name']?></h2>
                            <h1>Crop Establishment Method</h1>
                        </div>
                    </div> -->
                    
                    <!-- Body -->
                    <div class="sublevel" id="cropest1-prov">

                        <!-- FOR VERTICAL PRINT IN BLACK EDGING LEFT SIDE -->
                        <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; transform:scale(-1); float: left; margin-left: -17px; margin-top: 35px;">CROP ESTABLISMENT METHOD</p>

                        <div style="margin-left: 35px; margin-top: 7px;">
                            <h2>Rice Farming Practices in <?php echo $trans_all_pr_cp['location_name']?></h2>
                            <h1 style="font-size: 67px;">Crop Establishment Method</h1>
                            <br>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="card-deck mb-2 text-center" style="margin-left: 0px; margin-top: 10px; margin-right: 20px;">
                                    <div class="card primary mb-2 bg-primary-3 text-white cropest-card">
                                    <div class="card-body">
                                            <div class="row">
                                                <div class="col">
                                                    <h5 class="card-title pb-2 text-center">Wet Season (2016)</h5>
                                                </div>
                                            </div>
                                            <div class="row mt-2 cp">
                                                <div class="col-6 border-right">
                                                    <div class="card-note w-50 mx-auto rounded-pill bg-alternate mb-3"><p class="text-white">Transplanting</p></div>
                                                    <div><canvas id="cropest_ctxTransWS"></canvas></div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="card-note w-50 mx-auto rounded-pill bg-alternate mb-3"><p class="text-white">Direct Seeding</p></div>
                                                    <div><canvas id="cropest_ctxDirectWS"></canvas></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card primary mb-2 bg-warning-2 text-white cropest-card">
                                    <div class="card-body">
                                            <div class="row">
                                                <div class="col">
                                                    <h5 class="card-title pb-2 text-center">Dry Season (2017)</h5>
                                                </div>
                                            </div>
                                            <div class="row mt-2 cp">
                                                <div class="col-6 border-right">
                                                    <div class="card-note w-50 mx-auto rounded-pill bg-alternate mb-3"><p class="text-white">Transplanting</p></div>
                                                    <div><canvas id="cropest_ctxTransDS"></canvas></div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="card-note w-50 mx-auto rounded-pill bg-alternate mb-3"><p class="text-white">Direct Seeding</p></div>
                                                    <div><canvas id="cropest_ctxDirectDS"></canvas></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="row">
                            <div class="col">
                                <div class="card mb-4" id="cropest1-chart1" style="margin-left: 37px; margin-top: -5px; margin-right: 10px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a> -->
                                        <h5 class="my-0 pt-2 pb-2">Crop Establishment Method During Wet Season (1996 WS-2016 WS)</h5>
                                        <p class="my-0 font-weight-normal text-muted">in percent of farmers (RBFHS, PhilRice-SED, 2019)</p>
                                    </div>
                                    <div class="card-body">
                                        <div><canvas id="cropest_ctxChart1"></canvas></div>
                                    </div>
                                    <div class="card-footer text-muted">
                                        Data Source: <a href="https://palaystat.philrice.gov.ph/profile/retrieve/table/15" target="_blank">Distribution of farmers (%) by method of crop establishment - PalayStat System</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card mb-4" id="cropest1-chart2" style="margin-left: -10px; margin-top: -5px; margin-right: 45px;">
                                    <div class="card-header text-left">
                                    <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a> -->
                                    <h5 class="my-0 pt-2 pb-2">Crop Establishment Method During Dry Season (1997 DS-2017 DS)</h5>
                                        <p class="my-0 font-weight-normal text-muted">in percent of farmers (RBFHS, PhilRice-SED, 2019)</p>
                                    </div>
                                    <div class="card-body">
                                        <div><canvas id="cropest_ctxChart2"></canvas></div>
                                    </div>
                                    <div class="card-footer text-muted">
                                        Data Source: <a href="https://palaystat.philrice.gov.ph/profile/retrieve/table/15" target="_blank">Distribution of farmers (%) by method of crop establishment - PalayStat System</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- PAGE NUMBER -->
                        <div class="row" style="margin-left: 33px; margin-top: 0px;>
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important;">17 | STATE OF THE RICE SECTOR IN <?php echo strtoupper($production_all['location_name']);?></p>
                            </div>
                        </div>

                    </div>
                </main>
            </div>
        </div>

        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br class="pagebreak">

        <!-- LABOR -->

        <div class="container-fluid" id="labors1">
            <div class="row">
                <main role="main" class="col">
                    <!-- Header --->
                    <!-- <div id="labor" class="jumbotron text-center">
                        <div class="jumbotron-content">
                            <h2>Rice Farming Practices in <?php echo $labor_all['location_name']?></h2>
                            <h1>Labor Management</h1>
                        </div>
                    </div> -->
                    
                    <!-- Body -->
                    <div class="sublevel" id="labor1-prov">

                        <!-- FOR VERTICAL PRINT IN BLACK EDGING RIGHT SIDE -->
                        <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; float: right; margin-right: -20px; margin-top: 35px;">LABOR MANAGEMENT</p>

                        <div style="margin-left: 50px; margin-top: 7px;">
                            <h2>Rice Farming Practices in <?php echo $labor_all['location_name']?></h2>
                            <h1 style="font-size: 67px;">Labor Management</h1>
                            <br>
                        </div>
                                        
                        <div class="row">
                            <div class="col">
                                <div class="card-deck mb-2 text-center" style="margin-left: 45px; margin-top: 10px; margin-right: -13px;">
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
                                <div class="card mb-4" id="labor1-chart1" style="margin-left: 55px; margin-top: -5px; margin-right: 35px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a> -->
                                        <h5 class="my-0 pt-2 pb-2">Average labor requirements per ecosystem (2006 WS-2017 DS)</h5>
                                        <p class="my-0 font-weight-normal text-muted">in person-days per hectare (RBFHS, PhilRice-SED, 2019)</p>
                                    </div>
                                    <div class="card-body">
                                        <div><canvas id="labor_ctxChart1"></canvas></div>
                                    </div>
                                    <div class="card-footer text-muted">
                                        Data Source: <a href="https://palaystat.philrice.gov.ph/profile/retrieve/table/67" target="_blank">Labor costs of rice production by cropping season - PalayStat System</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- PAGE NUMBER -->
                        <div class="row" style="margin-right: 22px; margin-top: -5px;">
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important; float: right;">18 | STATE OF THE RICE SECTOR IN <?php echo strtoupper($production_all['location_name']);?></p>
                            </div>
                        </div>
                        
                    </div>
                </main>
            </div>
        </div>

        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br class="pagebreak">

        <!-- SEED CLASS -->

        <div class="container-fluid" id="seedclasss1">
            <div class="row">
                <main role="main" class="col">
                    <!-- Header --->
                    <!-- <div id="seedclass" class="jumbotron text-center">
                        <div class="jumbotron-content">
                            <h2>Rice Farming Practices in <?php echo $hy_all['location_name']?></h2>
                            <h1>Seed Class Usage</h1>
                        </div>
                    </div> -->
                    
                    <!-- Body -->
                    <div class="sublevel" id="seedclass1-prov">

                        <!-- FOR VERTICAL PRINT IN BLACK EDGING LEFT SIDE -->
                        <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; transform:scale(-1); float: left; margin-left: -17px; margin-top: 35px;">SEED CLASS USAGE</p>

                        <div style="margin-left: 35px; margin-top: 7px;">
                            <h2>Rice Farming Practices in <?php echo $hy_all['location_name']?></h2>
                            <h1 style="font-size: 67px;">Seed Class Usage</h1>
                            <br>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="card-deck mb-2 text-center" style="margin-left: 0px; margin-top: 10px; margin-right: 30px;">
                                    <div class="card primary mb-2 bg-primary-3 text-white">
                                    <div class="card-body">
                                            <div class="row">
                                                <div class="col">
                                                    <h5 class="card-title pb-2 text-center">Wet Season (2016)</h5>
                                                </div>
                                            </div>
                                            <div class="row mt-2 sc">
                                                <div class="col border-right">
                                                    <p class="card-title-note">Hybrid</p>
                                                    <h1 class="card-text font-weight-bold smaller sc"><?php echo $hy_all_ws['value']; ?>%<i class="<?php echo $hy_caret; ?>"></i></h1>
                                                </div>
                                                <div class="col border-right">
                                                    <p class="card-title-note">High Quality Inbred</p>
                                                    <h1 class="card-text font-weight-bold smaller sc"><?php echo $hq_all_ws['value']; ?>%<i class="<?php echo $hq_caret; ?>"></i></h1>
                                                </div>
                                                <div class="col">
                                                    <p class="card-title-note">Farmer's Seeds</p>
                                                    <h1 class="card-text font-weight-bold smaller sc"><?php echo $gs_all_ws['value'] + $fs_all_ws['value']; ?>%<i class="<?php echo $ls_caret; ?>"></i></h1>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card primary mb-2 bg-warning-2 text-white">
                                    <div class="card-body">
                                            <div class="row">
                                                <div class="col">
                                                    <h5 class="card-title pb-2 text-center">Dry Season (2017)</h5>
                                                </div>
                                            </div>
                                            <div class="row mt-2 sc">
                                                <div class="col border-right">
                                                    <p class="card-title-note">Hybrid</p>
                                                    <h1 class="card-text font-weight-bold smaller sc"><?php echo $hy_all['value']; ?>%<i class="<?php echo $hy_ds_caret; ?>"></i></h1>
                                                </div>
                                                <div class="col border-right">
                                                    <p class="card-title-note">High Quality Inbred</p>
                                                    <h1 class="card-text font-weight-bold smaller sc"><?php echo $hq_all['value']; ?>%<i class="<?php echo $hq_ds_caret; ?>"></i></h1>
                                                </div>
                                                <div class="col">
                                                    <p class="card-title-note">Farmer's Seeds</p>
                                                    <h1 class="card-text font-weight-bold smaller sc"><?php echo $gs_all['value'] + $fs_all['value']; ?>%<i class="<?php echo $ls_ds_caret; ?>"></i></h1>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="card mb-4" id="seedclass1-chart1" style="margin-left: 37px; margin-top: -5px; margin-right: 10px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a> -->
                                        <h5 class="my-0 pt-2 pb-2">Distribution of Farmers per Seed Class During Dry Season (1996 WS-2016 WS)</h5>
                                        <p class="my-0 font-weight-normal text-muted">in percent (RBFHS, PhilRice-SED, 2019)</p>
                                    </div>
                                    <div class="card-body">
                                        <div><canvas id="seedclass_ctxChart1"></canvas></div>
                                    </div>
                                    <div class="card-footer text-muted">
                                        Data Source: <a href="https://palaystat.philrice.gov.ph/profile/retrieve/table/70" target="_blank">Seeding rate by seed classification - PalayStat System</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card mb-4" id="seedclass1-chart2" style="margin-left: -6px; margin-top: -5px; margin-right: 55px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a> -->
                                        <h5 class="my-0 pt-2 pb-2">Distribution of Farmers per Seed Class During Dry Season (1997 DS-2017 DS)</h5>
                                        <p class="my-0 font-weight-normal text-muted">in percent (RBFHS, PhilRice-SED, 2019)</p>
                                    </div>
                                    <div class="card-body">
                                        <div><canvas id="seedclass_ctxChart2"></canvas></div>
                                    </div>
                                    <div class="card-footer text-muted">
                                        Data Source: <a href="https://palaystat.philrice.gov.ph/profile/retrieve/table/70" target="_blank">Seeding rate by seed classification - PalayStat System</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- PAGE NUMBER -->
                        <div class="row" style="margin-left: 33px; margin-top: 0px;>
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important;">19 | STATE OF THE RICE SECTOR IN <?php echo strtoupper($production_all['location_name']);?></p>
                            </div>
                        </div>

                    </div>
                </main>
            </div>
        </div>

        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br class="pagebreak">

        <!-- FERT USAGE -->

        <div class="container-fluid" id="fertusages1">
            <div class="row">
                <main role="main" class="col">
                    <!-- Header --->
                    <!-- <div id="fertuse" class="jumbotron text-center">
                        <div class="jumbotron-content">
                            <h2>Rice Farming Practices in <?php echo $average_all_pr_fu['location_name']?></h2>
                            <h1>Fertilizer Rate</h1>
                        </div>
                    </div> -->
                    
                    <!-- Body -->
                    <div class="sublevel" id="fertusage1-prov">

                        <!-- FOR VERTICAL PRINT IN BLACK EDGING RIGHT SIDE -->
                        <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; float: right; margin-right: -17px; margin-top: 35px;">FERTILIZER RATE</p>

                        <div style="margin-left: 45px; margin-top: 7px;">
                            <h2>Rice Farming Practices in <?php echo $average_all_pr_fu['location_name']?></h2>
                            <h1 style="font-size: 67px;">Fertilizer Rate</h1>
                            <br>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="card-deck mb-2 text-center"  style="margin-left: 45px; margin-right: -17px; margin-top: 10px;">
                                    <div class="card primary mb-2 bg-primary-3 text-white card-fu">
                                    <div class="card-body">
                                        <div class="row">
                                                <div class="col">
                                                    <h5 class="card-title pb-2 text-center">Wet Season (2016)</h5>
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col border-right">
                                                    <p class="card-title-note">Nitrogen (N)</p>
                                                    <h1 class="card-text font-weight-bold smaller"><?php echo number_format($n_all['value'], 0); ?><i class="<?php echo $n_caret; ?>"></i></h1>
                                                </div>
                                                <div class="col border-right">
                                                    <p class="card-title-note">Phosphorus (P)</p>
                                                    <h1 class="card-text font-weight-bold smaller"><?php echo number_format($p_all['value'], 0); ?><i class="<?php echo $p_caret; ?>"></i></h1>
                                                </div>
                                                <div class="col">
                                                    <p class="card-title-note">Potassium (K)</p>
                                                    <h1 class="card-text font-weight-bold smaller"><?php echo number_format($k_all['value'], 0); ?><i class="<?php echo $k_caret; ?>"></i></h1>
                                                </div>
                                            </div>
                                            <div class="card-note w-50 mx-auto mt-2 rounded-pill bg-alternate"><p class="text-white">kilograms per hectare</p></div>
                                        </div>
                                    </div>
                                    <div class="card primary mb-2 bg-warning-2 text-white card-fu">
                                    <div class="card-body">
                                        <div class="row">
                                                <div class="col">
                                                    <h5 class="card-title pb-2 text-center">Dry Season (2017)</h5>
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col border-right">
                                                    <p class="card-title-note">Nitrogen (N)</p>
                                                    <h1 class="card-text font-weight-bold smaller"><?php echo number_format($n_ds['value'], 0); ?><i class="<?php echo $n_ds_caret; ?>"></i></h1>
                                                </div>
                                                <div class="col border-right">
                                                    <p class="card-title-note">Phosphorus (P)</p>
                                                    <h1 class="card-text font-weight-bold smaller"><?php echo number_format($p_ds['value'], 0); ?><i class="<?php echo $p_ds_caret; ?>"></i></h1>
                                                </div>
                                                <div class="col">
                                                    <p class="card-title-note">Potassium (K)</p>
                                                    <h1 class="card-text font-weight-bold smaller"><?php echo number_format($k_ds['value'], 0); ?><i class="<?php echo $k_ds_caret; ?>"></i></h1>
                                                </div>
                                            </div>
                                            <div class="card-note w-50 mx-auto mt-2 rounded-pill bg-alternate"><p class="text-white">kilograms per hectare</p></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="row">
                            <div class="col">
                                <div class="card mb-4" id="fertusage1-chart1" style="margin-left: 55px; margin-top: -5px; margin-right: -10px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a> -->
                                        <h5 class="my-0 pt-2 pb-2">Amount of NPK Applied by Hectare During Wet Season (1996 WS-2016 WS)</h5>
                                        <p class="my-0 font-weight-normal text-muted">in kilograms per hectare (RBFHS, PhilRice-SED, 2019)</p>
                                    </div>
                                    <div class="card-body">
                                        <div><canvas id="fertusage_ctxChart1"></canvas></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card mb-4" id="fertusage1-chart2" style="margin-left: 10px; margin-top: -5px; margin-right: 35px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a> -->
                                        <h5 class="my-0 pt-2 pb-2">Amount of NPK Applied by Hectare During Wet Season (1997 WS-2017 DS)</h5>
                                        <p class="my-0 font-weight-normal text-muted">in kilograms per hectare (RBFHS, PhilRice-SED, 2019)</p>
                                    </div>
                                    <div class="card-body">
                                        <div><canvas id="fertusage_ctxChart2"></canvas></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- PAGE NUMBER -->
                        <div class="row" style="margin-right: 24px; margin-top: 35px;">
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important; float: right;">20 | STATE OF THE RICE SECTOR IN <?php echo strtoupper($production_all['location_name']);?></p>
                            </div>
                        </div>

                    </div>
                </main>
            </div>
        </div>

        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br class="pagebreak">

        <!-- VARIETIES -->

        <div class="container-fluid" id="varieties1">
            <div class="row">
                <main role="main" class="col">
                    <!-- Header --->
                    <!-- <div id="variety" class="jumbotron text-center">
                        <div class="jumbotron-content">
                            <h2>Rice Farming Practices in <?php echo $var['location_name'];?></h2>
                            <h1>Major Variety Planted</h1>
                        </div>
                    </div> -->

                    <!-- Body -->
                    <div class="sublevel" id="variety1-prov">

                        <!-- FOR VERTICAL PRINT IN BLACK EDGING LEFT SIDE -->
                        <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; transform:scale(-1); float: left; margin-left: -17px; margin-top: 35px;">MAJOR VARIETY PLANTED</p>

                        <div style="margin-left: 35px; margin-top: 7px;">
                            <h2>Rice Farming Practices in <?php echo $var['location_name'];?></h2>
                            <h1 style="font-size: 67px;">Major Variety Planted</h1>
                            <br>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="card mb-4" id="variety1-chart1" style="margin-left: 10px; margin-top: 25px; margin-right: 45px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a> -->
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
                                        <div><canvas id="variety_ctxChart1-v"></canvas></div>
                                        <!-- <div><canvas id="variety_ctxChart2-v"></canvas></div> -->
                                    </div>
                                    <div class="card-footer text-muted">
                                        Data Source: <a href="https://palaystat.philrice.gov.ph/profile/retrieve/table/19" target="_blank">Distribution of farmers (%) by ten (10) most varieties planted - PalayStat System</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- PAGE NUMBER -->
                        <div class="row" style="margin-left: 33px; margin-top: 60px;>
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important;">21 | STATE OF THE RICE SECTOR IN <?php echo strtoupper($production_all['location_name']);?></p>
                            </div>
                        </div>

                    </div>
                </main>
            </div>
        </div>

        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br class="pagebreak">

        <!-- ADOPTION RATE 1 -->

        <div class="container-fluid" id="adoptionrates1">
            <div class="row">
                <main role="main" class="col">
                    <!-- Header --->
                    <!-- <div id="adoptionrate" class="jumbotron text-center">
                        <div class="jumbotron-content">
                            <h2>Rice Farming Practices in <?php echo $adopt_landprep_ar[0]['location_name'];?></h2>
                            <h1>Top Adopted Technologies</h1>
                        </div>
                    </div> -->

                    <!-- Body -->
                    <div class="sublevel" id="adoptionrate1-prov">

                        <!-- FOR VERTICAL PRINT IN BLACK EDGING RIGHT SIDE -->
                        <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; float: right; margin-right: -17px; margin-top: 35px;">TOP ADOPTED TECHNOLOGIES</p>

                        <div style="margin-left: 45px; margin-top: 7px;">
                            <h2>Rice Farming Practices in <?php echo $adopt_landprep_ar[0]['location_name'];?></h2>
                            <h1 style="font-size: 67px;">Top Adopted Technologies</h1>
                            <br>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="card mb-4" id="adoptionrate1-chart1" style="margin-left: 55px; margin-top: 25px; margin-right: -10px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a> -->
                                        <h5 class="my-0 pt-2 pb-2">Adoption rate of selected technologies under Land Preparation category (2016 WS-2017 DS)</h5>
                                        <p class="my-0 font-weight-normal text-muted">in percent, within the last 5 years (RBFHS, PhilRice-SED, 2019)</p>
                                    </div>
                                    <div class="card-body">
                                        <div><canvas id="adoptionrate_ctxChart2"></canvas></div>
                                    </div>
                                    <div class="card-footer text-muted">
                                        Data Source: Rice farming technology awareness and adoption, Philippines and selected provinces, RBFHS 2016-2017 Survey Results
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card mb-4" id="adoptionrate1-chart2" style="margin-left: 10px; margin-top: 25px; margin-right: -5px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a> -->
                                        <h5 class="my-0 pt-2 pb-2">Adoption rate of selected technologies under Crop Establishment category (2016 WS-2017 DS)</h5>
                                        <p class="my-0 font-weight-normal text-muted">in percent, within the last 5 years (RBFHS, PhilRice-SED, 2019)</p>
                                    </div>
                                    <div class="card-body">
                                        <div><canvas id="adoptionrate_ctxChart3"></canvas></div>
                                    </div>
                                    <div class="card-footer text-muted">
                                        Data Source: Rice farming technology awareness and adoption, Philippines and selected provinces, RBFHS 2016-2017 Survey Results
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- PAGE NUMBER -->
                        <div class="row" style="margin-right: 24px; margin-top: 125px;">
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important; float: right;">22 | STATE OF THE RICE SECTOR IN <?php echo strtoupper($production_all['location_name']);?></p>
                            </div>
                        </div>

                    </div>
                </main>
            </div>
        </div>

        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br class="pagebreak">

        <!-- ADOPTION RATE 2 -->

        <div class="container-fluid" id="adoptionrates2">
            <div class="row">
                <main role="main" class="col">
                    <div class="sublevel" id="adoptionrate2-prov">

                        <!-- FOR VERTICAL PRINT IN BLACK EDGING LEFT SIDE -->
                        <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; transform:scale(-1); float: left; margin-left: -17px; margin-top: 35px;">TOP ADOPTED TECHNOLOGIES</p>

                        <div class="row">
                            <div class="col">
                                <div class="card mb-4" id="adoptionrate2-chart1" style="margin-left: 10px; margin-top: 20px; margin-right: 17px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a> -->
                                        <h5 class="my-0 pt-2 pb-2">Adoption rate of selected technologies under Nutrient Management category (2016 WS-2017 DS)</h5>
                                        <p class="my-0 font-weight-normal text-muted">in percent, within the last 5 years (RBFHS, PhilRice-SED, 2019)</p>
                                    </div>
                                    <div class="card-body">
                                        <div><canvas id="adoptionrate_ctxChart4"></canvas></div>
                                    </div>
                                    <div class="card-footer text-muted">
                                        Data Source: Rice farming technology awareness and adoption, Philippines and selected provinces, RBFHS 2016-2017 Survey Results
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card mb-4" id="adoptionrate2-chart2" style="margin-left: -20px; margin-top: 20px; margin-right: 40px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a> -->
                                        <h5 class="my-0 pt-2 pb-2">Adoption rate of selected technologies under Water Management category (2016 WS-2017 DS)</h5>
                                        <p class="my-0 font-weight-normal text-muted">in percent, within the last 5 years (RBFHS, PhilRice-SED, 2019)</p>
                                    </div>
                                    <div class="card-body">
                                        <div><canvas id="adoptionrate_ctxChart5"></canvas></div>
                                    </div>
                                    <div class="card-footer text-muted">
                                        Data Source: Rice farming technology awareness and adoption, Philippines and selected provinces, RBFHS 2016-2017 Survey Results
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="card mb-4" id="adoptionrate2-chart3" style="margin-left: 37px; margin-bottom: 25px; margin-top: -10px; margin-right: 10px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a> -->
                                        <h5 class="my-0 pt-2 pb-2">Adoption rate of selected technologies under Pest Management category (2016 WS-2017 DS)</h5>
                                        <p class="my-0 font-weight-normal text-muted">in percent, within the last 5 years (RBFHS, PhilRice-SED, 2019)</p>
                                    </div>
                                    <div class="card-body">
                                        <div><canvas id="adoptionrate_ctxChart6"></canvas></div>
                                    </div>
                                    <div class="card-footer text-muted">
                                        Data Source: Rice farming technology awareness and adoption, Philippines and selected provinces, RBFHS 2016-2017 Survey Results
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card mb-4" id="adoptionrate2-chart4" style="margin-left: -10px; margin-bottom: 25px; margin-right: 53px; margin-top: -10px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a> -->
                                        <h5 class="my-0 pt-2 pb-2">Adoption rate of selected technologies under Harvest Management category (2016 WS-2017 DS)</h5>
                                        <p class="my-0 font-weight-normal text-muted">in percent, within the last 5 years (RBFHS, PhilRice-SED, 2019)</p>
                                    </div>
                                    <div class="card-body">
                                        <div><canvas id="adoptionrate_ctxChart7"></canvas></div>
                                    </div>
                                    <div class="card-footer text-muted">
                                        Data Source: Rice farming technology awareness and adoption, Philippines and selected provinces, RBFHS 2016-2017 Survey Results
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- PAGE NUMBER -->
                        <div class="row" style="margin-left: 33px; margin-top: -15px;>
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important;">23 | STATE OF THE RICE SECTOR IN <?php echo strtoupper($production_all['location_name']);?></p>
                            </div>
                        </div>

                    </div>
                </main>
            </div>
        </div>

        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br class="pagebreak">

        <!-- ADOPTION RATE 3 -->

        <div class="container-fluid" id="adoptionrates3">
            <div class="row">
                <main role="main" class="col">
                    <div class="sublevel" id="adoptionrate3-prov">

                        <!-- FOR VERTICAL PRINT IN BLACK EDGING RIGHT SIDE -->
                        <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; float: right; margin-right: -17px; margin-top: 35px;">TOP ADOPTED TECHNOLOGIES</p>

                        <div class="row">
                            <div class="col-8 mx-auto">
                                <div class="card mb-4" id="adoptionrate3-chart1" style="margin-top: 45px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a> -->
                                        <h5 class="my-0 pt-2 pb-2">Adoption rate of selected technologies under Other Practices/Technologies category (2016 WS-2017 DS)</h5>
                                        <p class="my-0 font-weight-normal text-muted">in percent, within the last 5 years (RBFHS, PhilRice-SED, 2019)</p>
                                    </div>
                                    <div class="card-body">
                                        <div><canvas id="adoptionrate_ctxChart8"></canvas></div>
                                    </div>
                                    <div class="card-footer text-muted">
                                        Data Source: Rice farming technology awareness and adoption, Philippines and selected provinces, RBFHS 2016-2017 Survey Results
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- PAGE NUMBER -->
                        <div class="row" style="margin-right: 24px; margin-top: 175px;">
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important; float: right;">24 | STATE OF THE RICE SECTOR IN <?php echo strtoupper($production_all['location_name']);?></p>
                            </div>
                        </div>

                    </div>
                </main>
            </div>
        </div>

        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br class="pagebreak">

        <!-- FERTILIZER APP -->

        <div class="container-fluid" id="fertilizerapps1">
            <div class="row">
                <main role="main" class="col">
                    <!-- Header --->
                    <!-- <div id="fertuse" class="jumbotron text-center">
                        <div class="jumbotron-content">
                            <h2>Rice Farming Practices in <?php echo $fert['location_name'];?></h2>
                            <h1>Fertilizer Type</h1>
                        </div>
                    </div> -->
                    
                    <!-- Body -->
                    <div class="sublevel" id="fertilizerapp1-prov">

                        <!-- FOR VERTICAL PRINT IN BLACK EDGING LEFT SIDE -->
                        <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; transform:scale(-1); float: left; margin-left: -17px; margin-top: 35px;">FERTILIZER TYPE</p>

                        <div style="margin-left: 35px; margin-top: 7px;">
                            <h2>Rice Farming Practices in <?php echo $fert['location_name'];?></h2>
                            <h1 style="font-size: 67px;">Fertilizer Type</h1>
                            <br>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="card mb-4" id="fertilizerapp1-chart1" style="margin-left: 10px; margin-top: 25px; margin-right: 45px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a> -->
                                        <h5 class="my-0 pt-2 pb-2">Types of fertilizer applied (2017 DS)</h5>
                                        <p class="my-0 font-weight-normal text-muted">in percent (RBFHS, PhilRice-SED, 2019)</p>
                                    </div>
                                    <div class="card-body">
                                        <div><canvas id="fertilizerapp_ctxChart1"></canvas></div>
                                    </div>
                                    <div class="card-footer text-muted">
                                        Data Source: <a href="https://palaystat.philrice.gov.ph/profile/retrieve/table/25" target="_blank">Distribution of farmers (%) by type of fertilizer - PalayStat System</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- PAGE NUMBER -->
                        <div class="row" style="margin-left: 33px; margin-top: 60px;>
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important;">25 | STATE OF THE RICE SECTOR IN <?php echo strtoupper($production_all['location_name']);?></p>
                            </div>
                        </div>

                    </div>
                </main>
            </div>
        </div>

        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br class="pagebreak">

        <!-- PESTICIDES -->

        <div class="container-fluid" id="pesticides1">
            <div class="row">
                <main role="main" class="col">
                    <!-- <div id="pesticide" class="jumbotron text-center">
                        <div class="jumbotron-content">
                            <h2>Rice Farming Practices in <?php echo $pest['location_name'];?></h2>
                            <h1>Top Active Ingredients of Pesticides</h1>
                        </div>
                    </div> -->
                    
                    <!-- Body -->
                    <div class="sublevel" id="pesticide1-prov">
                            
                        <!-- FOR VERTICAL PRINT IN BLACK EDGING RIGHT SIDE -->
                        <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; float: right; margin-right: -17px; margin-top: 35px;">TOP ACTIVE INGREDIENTS OF PESTICIDES</p>

                        <div style="margin-left: 45px; margin-top: 7px;">
                            <h2>Rice Farming Practices in <?php echo $pest['location_name'];?></h2>
                            <h1 style="font-size: 55px;">Top Active Ingredients of Pesticides</h1>
                            <br>
                            <br>
                        </div>
                                        
                        <div class="row">
                            <div class="col">
                                <div class="card mb-4" id="pesticide1-chart1" style="margin-left: 55px; margin-top: -5px; margin-right: -10px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a> -->
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
                                <div class="card mb-4" id="pesticide1-chart2" style="margin-left: 10px; margin-top: -5px; margin-right: -5px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a> -->
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
                                <div class="card mb-4" id="pesticide1-chart3" style="margin-left: 55px; margin-bottom: 25px; margin-top: -15px; margin-right: 10px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a> -->
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
                                <div class="card mb-4" id="pesticide1-chart4" style="margin-left: -10px; margin-bottom: 25px; margin-right: 38px; margin-top: -15px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a> -->
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
                        
                        <!-- PAGE NUMBER -->
                        <div class="row" style="margin-right: 25px; margin-top: -3px;">
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important; float: right;">26 | STATE OF THE RICE SECTOR IN <?php echo strtoupper($production_all['location_name']);?></p>
                            </div>
                        </div>

                    </div>
                </main>
            </div>
        </div>

        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br class="pagebreak">

        <!-- MACHINE SOURCE -->

        <div class="container-fluid" id="machinesources1">
            <div class="row">
                <main role="main" class="col">
                    <!-- Header --->
                    <!-- <div id="machinesource" class="jumbotron text-center">
                        <div class="jumbotron-content">
                            <h2>Rice Farming Practices in <?php echo $fert['location_name'];?></h2>
                            <h1>Top Machines Used</h1>
                        </div>
                    </div> -->
                    
                    <!-- Body -->
                    <div class="sublevel" id="machinesource1-prov">

                        <!-- FOR VERTICAL PRINT IN BLACK EDGING LEFT SIDE -->
                        <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; transform:scale(-1); float: left; margin-left: -17px; margin-top: 35px;">TOP MACHINES USED</p>

                        <div style="margin-left: 35px; margin-top: 7px;">
                            <h2>Rice Farming Practices in <?php echo $fert['location_name'];?></h2>
                            <h1 style="font-size: 67px;">Top Machines Used</h1>
                            <br>
                        </div>
                        
                        <div class="row">
                            <div class="col">
                                <div class="card mb-4" id="machinesource1-chart1" style="margin-left: 10px; margin-top: 25px; margin-right: 45px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a> -->
                                        <h5 class="my-0 pt-2 pb-2">Top machines used (2017 DS)</h5>
                                        <p class="my-0 font-weight-normal text-muted">in percent (RBFHS, PhilRice-SED, 2019)</p>
                                    </div>
                                    <div class="card-body">
                                        <div><canvas id="machinesource_ctxChart1"></canvas></div>
                                    </div>
                                    <div class="card-footer text-muted">
                                        Data Source: Distribution of farmers by machine used and ecosystem, Philippines and selected provinces, RBFHS 2016-2017 Survey Results
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- PAGE NUMBER -->
                        <div class="row" style="margin-left: 33px; margin-top: 65px;>
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important;">27 | STATE OF THE RICE SECTOR IN <?php echo strtoupper($production_all['location_name']);?></p>
                            </div>
                        </div>

                    </div>
                </main>
            </div>
        </div>
    
        <!-- END IF -->
        <?php endif; ?>

    <!-- END OF DIV CAPTURE -->
    </div>

    <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/sidebarjs.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/chart.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/chartjs-plugin-labels.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/html2canvas.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/custom.js"></script>
    
    <!-- MAIN NO CHARTS -->

    <!-- PRODUCTIONS CHARTS -->
    <script>
        Chart.defaults.global.responsive = true;
        Chart.defaults.global.tooltips.mode = 'index';
        Chart.defaults.global.tooltips.intersect = false;
        Chart.defaults.global.defaultFontFamily = 'Poppins';
        Chart.defaults.global.defaultFontSize = 12;
        Chart.defaults.global.animation.duration = 3000;
        Chart.defaults.global.defaultFontColor = "#000000"
        
        // CHART 1
        
        var dbTotal = JSON.parse('<?php echo $ph_production_all; ?>');
        var dbIrrigated = JSON.parse('<?php echo $ph_production_irrigated; ?>');
        var dbRainfed = JSON.parse('<?php echo $ph_production_rainfed; ?>');
                    
        let years = [];
        let values_total = [];
        let values_irrig = [];
        let values_rain = [];

        try {
            dbTotal.map((item) => {
            years.push(item.year);
            values_total.push(item.value);
            });
            dbIrrigated.map((item) => {
            values_irrig.push(item.value);
            });
            dbRainfed.map((item) => {
            values_rain.push(item.value);
            });
        } catch (error) {
            console.log(error);
        }
        
        var prodStack = document.getElementById('ctxProdStack').getContext('2d');
        var tempPLabels = [...years];
        var prodAllData = [...values_total];
        var prodIrrigData = [...values_irrig];
        var prodRainData = [...values_rain];
        var prodStackChart = new Chart(prodStack, {

            type: 'bar',

            data: {
                labels: tempPLabels,
                datasets: [{
                    label: 'Provincial',
                    backgroundColor: '#2138B7',    // COLOR 1
                    borderColor: '#2138B7',        // COLOR 1
                    lineTension: 0,
                    type: 'line',
                    fill: false,
                    data: prodAllData,
                    pointStyle: 'line'
                },                        
                {
                    label: 'Irrigated Area',   
                    backgroundColor: '#FE7F00',      // COLOR 2
                    borderColor: '#FE7F00',          // COLOR 2
                    data: prodIrrigData
                },
                {
                    label: 'Non-Irrigated Area',
                    backgroundColor: '#FFB043',   // COLOR 3
                    borderColor: '#FFB043',       // COLOR 3
                    data: prodRainData
                }]
            },

            options: {
                devicePixelRatio: 3,
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
                    position: 'top',
                    onClick: (e) => e.stopPropagation(),
                    labels: {
                    fontSize:12,
                    }
                }
            }
        }); 
    </script>

    <!-- HARVEST AREA CHARTS -->

    <script>
        Chart.defaults.global.responsive = true;
        Chart.defaults.global.tooltips.mode = 'index';
        Chart.defaults.global.tooltips.intersect = false;
        Chart.defaults.global.defaultFontFamily = 'Poppins';
        Chart.defaults.global.defaultFontSize = 13;
        Chart.defaults.global.animation.duration = 3000;
        Chart.defaults.global.defaultFontColor = "#000000"

        // CHART 1

        var dbTotal = JSON.parse('<?php echo $ph_area_all; ?>');
        var dbIrrigated = JSON.parse('<?php echo $ph_area_irrigated; ?>');
        var dbRainfed = JSON.parse('<?php echo $ph_area_rainfed; ?>');

        let area_years = [];
        let area_values_total = [];
        let area_values_irrig = [];
        let area_values_rain = [];

        try {
            dbTotal.map((item) => {
                area_years.push(item.year);
                area_values_total.push(item.value);
            });
            dbIrrigated.map((item) => {
                area_values_irrig.push(item.value);
            });
            dbRainfed.map((item) => {
                area_values_rain.push(item.value);
            });
        } catch (error) {
            console.log(error);
        }

        var areaStack = document.getElementById('ctxAreaStack').getContext('2d');
        var tempALabels = [...area_years];
        var areaAllData = [...area_values_total];
        var areaIrrigData = [...area_values_irrig];
        var areaRainData = [...area_values_rain];
        var areaStackChart = new Chart(areaStack, {

            type: 'bar',

            data: {
                labels: tempALabels,
                datasets: [{
                        label: 'Provincial',
                        backgroundColor: '#2138B7', // COLOR 1
                        borderColor: '#2138B7', // COLOR 1
                        lineTension: 0,
                        type: 'line',
                        fill: false,
                        data: areaAllData,
                        pointStyle: 'line'
                    },
                    {
                        label: 'Irrigated Area',
                        backgroundColor: '#FE7F00', // COLOR 2
                        borderColor: '#FE7F00', // COLOR 2
                        data: areaIrrigData
                    },
                    {
                        label: 'Non-Irrigated Area',
                        backgroundColor: '#FFB043', // COLOR 3
                        borderColor: '#FFB043', // COLOR 3
                        data: areaRainData
                    }
                ]
            },

            options: {
                devicePixelRatio: 3,
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
                    position: 'top'
                }
            }
        });
    </script>

    <!-- EST YIELD CHARTS -->

    <script>
        // var sidebarjs = new SidebarJS.SidebarElement();
        Chart.defaults.global.responsive = true;
        Chart.defaults.global.tooltips.mode = 'index';
        Chart.defaults.global.tooltips.intersect = false;
        Chart.defaults.global.defaultFontFamily = 'Poppins';
        Chart.defaults.global.defaultFontSize = 12;
        Chart.defaults.global.animation.duration = 3000;
        Chart.defaults.global.defaultFontColor = "#000000";

        // CHART 1

        var dbTotal = JSON.parse('<?php echo $ph_yield_all; ?>');
        var dbIrrigated = JSON.parse('<?php echo $ph_yield_irrigated; ?>');
        var dbRainfed = JSON.parse('<?php echo $ph_yield_rainfed; ?>');

        let estyield_years = [];
        let estyield_values_total = [];
        let estyield_values_irrig = [];
        let estyield_values_rain = [];

        try {
            dbTotal.map((item) => {
                estyield_years.push(item.year);
                estyield_values_total.push(item.value);
            });
            dbIrrigated.map((item) => {
                estyield_values_irrig.push(item.value);
            });
            dbRainfed.map((item) => {
                estyield_values_rain.push(item.value);
            });
        } catch (error) {
            console.log(error);
        }

        var yieldStack = document.getElementById('ctxYieldStack').getContext('2d');
        var tempYLabels = [...estyield_years];
        var yieldAllData = [...estyield_values_total];
        var yieldIrrigData = [...estyield_values_irrig];
        var yieldRainData = [...estyield_values_rain];
        var yieldStackChart = new Chart(yieldStack, {

            type: 'bar',

            data: {
                labels: tempYLabels,
                datasets: [{
                        label: 'Provincial Average',
                        backgroundColor: '#2138B7', // COLOR 1
                        borderColor: '#2138B7', // COLOR 1
                        lineTension: 0,
                        type: 'line',
                        fill: false,
                        data: yieldAllData,
                    },
                    {
                        label: 'Irrigated Area',
                        backgroundColor: '#FE7F00', // COLOR 2
                        borderColor: '#FE7F00', // COLOR 2
                        lineTension: 0,
                        type: 'line',
                        fill: false,
                        data: yieldIrrigData
                    },
                    {
                        label: 'Non-irrigated Area',
                        backgroundColor: '#FFB043', // COLOR 3
                        borderColor: '#FFB043', // COLOR 3
                        lineTension: 0,
                        type: 'line',
                        fill: false,
                        data: yieldRainData
                    }
                ]
            },

            options: {
                devicePixelRatio: 3,
                aspectRatio: 2.5,
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
                            suggestedMin: 0
                        }
                    }]
                },
                legend: {
                    position: 'top',
                    onClick: (e) => e.stopPropagation(),
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
                        ctx.fillStyle = '#000000';

                        this.data.datasets.forEach(function(dataset, i) {
                            if (dataset.label == 'Irrigated Area') {
                                let meta = chartInstance.controller.getDatasetMeta(i);
                                meta.data.forEach(function(bar, index) {
                                    let data = dataset.data[index];
                                    ctx.fillText(data, bar._model.x + 0, bar._model.y + -5);
                                });
                            } else {
                                let meta = chartInstance.controller.getDatasetMeta(i);
                                meta.data.forEach(function(bar, index) {
                                    let data = dataset.data[index];
                                    ctx.fillText(data, bar._model.x + 0, bar._model.y + 17);
                                });
                            }
                        });
                    }
                }
            }
        });
    </script>

    <!-- PRICES CHARTS -->

    <script>
        // var sidebarjs = new SidebarJS.SidebarElement();
        Chart.defaults.global.responsive = true;
        Chart.defaults.global.tooltips.mode = 'index';
        Chart.defaults.global.tooltips.intersect = false;
        Chart.defaults.global.defaultFontFamily = 'Poppins';
        Chart.defaults.global.defaultFontSize = 12;
        Chart.defaults.global.animation.duration = 3000;
        Chart.defaults.global.defaultFontColor = "#000000";

        // CHART 1

        var dbFarmPrices = JSON.parse('<?php echo $farmgate_prices; ?>');
        var dbFarmPricesR = JSON.parse('<?php echo $farmgate_prices_real; ?>');

        let prices_years = [];
        let values_n_prices = [];
        let values_r_prices = [];

        try {
            dbFarmPrices.map((item) => {
                prices_years.push(item.year);
                values_n_prices.push(item.value);
            });
            dbFarmPricesR.map((item) => {
                values_r_prices.push(item.value);
            });
        } catch (error) {
            console.log(error);
        }

        var farmPrices = document.getElementById('ctxFarmPrices').getContext('2d');
        var tempFarmLabels = [...prices_years];
        var farmPriceData = [...values_n_prices];
        var farmPricesChart = new Chart(farmPrices, {
            // The type of chart we want to create
            type: 'line',

            // The data for our dataset
            data: {
                labels: tempFarmLabels,
                datasets: [{
                    label: 'Nominal price',
                    backgroundColor: '#A6CEE3', // COLOR 1
                    borderColor: '#A6CEE3', // COLOR 1
                    lineTension: 0,
                    fill: false,
                    data: farmPriceData
                }]
            },

            // Configuration options go here
            options: {
                devicePixelRatio: 3,
                aspectRatio: 2.2,
                elements: {
                    point: {
                        radius: 2
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
                        }
                    }]
                },
                tooltips: false,
                legend: {
                    display: false
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
                                ctx.fillStyle = '#000000';
                                data = parseInt(data).toLocaleString();
                                ctx.fillText(data, bar._model.x + 0, bar._model.y + -10);
                            });
                        });
                    }
                }
            }
        });

        // CHART 2

        var dbWPrice = JSON.parse('<?php echo $wholesale_prices; ?>');
        var dbWPricesS = JSON.parse('<?php echo $wholesale_sp_prices; ?>');

        let years_w = [];
        let values_rm_prices = [];
        let values_w_prices = [];

        try {
            dbWPrice.map((item) => {
                years_w.push(item.year);
                values_rm_prices.push(item.value);
            });
            dbWPricesS.map((item) => {
                values_w_prices.push(item.value);
            });
        } catch (error) {
            console.log(error);
        }

        var wholesalePrices = document.getElementById('ctxWholesalePrices').getContext('2d');
        var tempWLabels = [...years_w];
        var wPriceData = [...values_rm_prices];
        var wPriceSp = [...values_w_prices];
        var wholesalePricesChart = new Chart(wholesalePrices, {
            // The type of chart we want to create
            type: 'line',

            // The data for our dataset
            data: {
                labels: tempWLabels,
                datasets: [{
                    label: 'Regular-milled',
                    backgroundColor: '#007FFE', // COLOR 1
                    borderColor: '#007FFE', // COLOR 1
                    lineTension: 0,
                    fill: false,
                    data: wPriceData
                }, {
                    label: 'Well-milled',
                    backgroundColor: '#A6CEE3', // COLOR 2
                    borderColor: '#A6CEE3', // COLOR 2
                    lineTension: 0,
                    fill: false,
                    data: wPriceSp
                }]
            },

            // Configuration options go here
            options: {
                devicePixelRatio: 3,
                aspectRatio: 2.2,
                elements: {
                    point: {
                        radius: 2
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
                        }
                    }]
                },
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
                                ctx.fillStyle = '#000000';
                                data = parseInt(data).toLocaleString();
                                ctx.fillText(data, bar._model.x + 0, bar._model.y + 0);
                            });
                        });
                    }
                }
            }
        });

        // CHART 3

        var dbRTPrice = JSON.parse('<?php echo $retail_prices; ?>');
        var dbRTPricesS = JSON.parse('<?php echo $retail_sp_prices; ?>');

        let years_r = [];
        let values_rr_prices = [];
        let values_wr_prices = [];

        try {
            dbRTPrice.map((item) => {
                years_r.push(item.year);
                values_rr_prices.push(item.value);
            });
            dbRTPricesS.map((item) => {
                values_wr_prices.push(item.value);
            });
        } catch (error) {
            console.log(error);
        }

        var retailPrices = document.getElementById('ctxRetailPrices').getContext('2d');
        var tempRLabels = [...years_r];
        var rPriceData = [...values_rr_prices];
        var rPriceSp = [...values_wr_prices];
        var retailPricesChart = new Chart(retailPrices, {
            // The type of chart we want to create
            type: 'line',

            // The data for our dataset
            data: {
                labels: tempWLabels,
                datasets: [{
                    label: 'Regular-milled',
                    backgroundColor: '#007FFE', // COLOR 1
                    borderColor: '#007FFE', // COLOR 1
                    lineTension: 0,
                    fill: false,
                    data: rPriceData
                }, {
                    label: 'Well-milled',
                    backgroundColor: '#A6CEE3', // COLOR 2
                    borderColor: '#A6CEE3', // COLOR 2
                    lineTension: 0,
                    fill: false,
                    data: rPriceSp
                }]
            },

            // Configuration options go here
            options: {
                devicePixelRatio: 3,
                aspectRatio: 2.2,
                elements: {
                    point: {
                        radius: 2
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
                        }
                    }]
                },
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
                                ctx.fillStyle = '#000000';
                                data = parseInt(data).toLocaleString();
                                ctx.fillText(data, bar._model.x + 0, bar._model.y + 0);
                            });
                        });
                    }
                }
            }
        });
    </script>

    <!-- //////////////// CHECK KUNG ANDUN YUNG LOCATION //////////////////////// -->
    <?php 
        $location_ids = array('2', '3', '5', '6', '81', '77', '12', '13', '14', '15', '17', '19', '23', '24', '25', '28', '30', '31', '32', '34', '36', '37', '38', '45', '47', '48', '49', '50', '51', '52', '53', '54', '55', '56', '63', '65', '69', '60', '72', '73', '83');
        if (in_array($this->uri->segment('3'), $location_ids)) :
    ?>

    <!-- PROFILE CHARTS -->

    <script>
        // var sidebarjs = new SidebarJS.SidebarElement();
        Chart.pluginService.register({
            beforeDraw: function(chart) {
                if (chart.config.options.elements.center) {
                    // Get ctx from string
                    var ctx = chart.chart.ctx;

                    // Get options from the center object in options
                    var centerConfig = chart.config.options.elements.center;
                    var fontStyle = centerConfig.fontStyle || 'Arial';
                    var txt = centerConfig.text;
                    var color = centerConfig.color || '#000';
                    var maxFontSize = centerConfig.maxFontSize || 75;
                    var sidePadding = centerConfig.sidePadding || 20;
                    var sidePaddingCalculated = (sidePadding / 100) * (chart.innerRadius * 2)
                    // Start with a base font of 30px
                    ctx.font = "30px " + fontStyle;

                    // Get the width of the string and also the width of the element minus 10 to give it 5px side padding
                    var stringWidth = ctx.measureText(txt).width;
                    var elementWidth = (chart.innerRadius * 2) - sidePaddingCalculated;

                    // Find out how much the font can grow in width.
                    var widthRatio = elementWidth / stringWidth;
                    var newFontSize = Math.floor(30 * widthRatio);
                    var elementHeight = (chart.innerRadius * 2);

                    // Pick a new font size so it will not be larger than the height of label.
                    var fontSizeToUse = Math.min(newFontSize, elementHeight, maxFontSize);
                    var minFontSize = centerConfig.minFontSize;
                    var lineHeight = centerConfig.lineHeight || 25;
                    var wrapText = false;

                    if (minFontSize === undefined) {
                        minFontSize = 20;
                    }

                    if (minFontSize && fontSizeToUse < minFontSize) {
                        fontSizeToUse = minFontSize;
                        wrapText = true;
                    }

                    // Set font settings to draw it correctly.
                    ctx.textAlign = 'center';
                    ctx.textBaseline = 'middle';
                    var centerX = ((chart.chartArea.left + chart.chartArea.right) / 2);
                    var centerY = ((chart.chartArea.top + chart.chartArea.bottom) / 2);
                    ctx.font = fontSizeToUse + "px " + fontStyle;
                    ctx.fillStyle = color;

                    if (!wrapText) {
                        ctx.fillText(txt, centerX, centerY);
                        return;
                    }

                    var words = txt.split(' ');
                    var line = '';
                    var lines = [];

                    // Break words up into multiple lines if necessary
                    for (var n = 0; n < words.length; n++) {
                        var testLine = line + words[n] + ' ';
                        var metrics = ctx.measureText(testLine);
                        var testWidth = metrics.width;
                        if (testWidth > elementWidth && n > 0) {
                            lines.push(line);
                            line = words[n] + ' ';
                        } else {
                            line = testLine;
                        }
                    }

                    // Move the center up depending on line height and number of lines
                    centerY -= (lines.length / 2) * lineHeight;

                    for (var n = 0; n < lines.length; n++) {
                        ctx.fillText(lines[n], centerX, centerY);
                        centerY += lineHeight;
                    }
                    //Draw text in center
                    ctx.fillText(line, centerX, centerY);
                }
            }
        });
        
        Chart.defaults.global.responsive = true;
        Chart.defaults.global.tooltips.mode = 'index';
        Chart.defaults.global.tooltips.intersect = false;
        Chart.defaults.global.defaultFontFamily = 'Poppins';
        Chart.defaults.global.defaultFontSize = 12;
        Chart.defaults.global.animation.duration = 3000;

            // CHART 1
        
            var sexMale = JSON.parse('<?php echo $male_all['value']; ?>');
            var sexFemale = JSON.parse('<?php echo $female_all['value']; ?>');

            var ctx = document.getElementById("ctxSex");
            var myChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    datasets: [{
                        data: [sexMale, sexFemale],
                        backgroundColor: [
                            '#b85533', // COLOR 1
                            '#FEB043' // COLOR 2
                        ],
                        borderColor: [
                            '#b85533', // COLOR 1
                            '#FEB043' // COLOR 2
                        ]
                    }]
                },
                options: {
                    devicePixelRatio: 3,
                    cutoutPercentage: 60,
                    aspectRatio: 5.5,
                    legend: {
                        display: false
                    },
                    layout: {
                        padding: {
                          bottom: 2
                        }
                    },
                    responsive: true,
                    maintainAspectRatio: true,
                    plugins: {
                        labels: false
                    },
                    elements: {
                        center: {
                            text: sexMale + '%',
                            color: '#212529',
                            fontStyle: 'Poppins',
                            sidePadding: 20,
                            minFontSize: 12,
                            lineHeight: 25
                        }
                    },
                    tooltips: {
                         enabled: false
                    }
                }
            }); 
        
            // CHART 2
            
            var csSingle = JSON.parse('<?php echo $s_all['value']; ?>');
            var csMarried = JSON.parse('<?php echo $m_all['value']; ?>');
            var csWidow = JSON.parse('<?php echo $w_all['value']; ?>');
            var csSeparated = JSON.parse('<?php echo $se_all['value']; ?>');

            var ctx2 = document.getElementById("ctxCivil");
            var myChart2 = new Chart(ctx2, {
                type: 'pie',
                data: {
                    datasets: [{
                        data: [csSingle, csMarried, csWidow, csSeparated],
                        backgroundColor: [
                            '#006CD7', // COLOR 1
                            '#b85533', // COLOR 2
                            '#FEB043', // COLOR 3
                            '#7FFE00' // COLOR 4
                        ],
                        borderColor: [
                            '#006CD7', // COLOR 1
                            '#b85533', // COLOR 2
                            '#FEB043', // COLOR 3
                            '#7FFE00' // COLOR 4
                        ]
                    }]
                },
                options: {
                    devicePixelRatio: 3,
                    cutoutPercentage: 60,
                    aspectRatio: 5.5,
                    legend: {
                        display: false
                    },
                    layout: {
                        padding: {
                          bottom: 2
                        }
                    },
                    responsive: true,
                    maintainAspectRatio: true,
                    plugins: {
                        labels: false
                    },
                    elements: {
                        center: {
                            text: csMarried + '%',
                            color: '#212529',
                            fontStyle: 'Poppins',
                            sidePadding: 20,
                            minFontSize: 12,
                            lineHeight: 25
                        }
                    },
                    tooltips: {
                         enabled: false
                    }
                }
            });
        
            // CHART 3
        
            var tsOwners = JSON.parse('<?php echo $owner_all['value']; ?>');
            var tsAmort = JSON.parse('<?php echo $amort_all['value']; ?>');
            var tsLessee = JSON.parse('<?php echo $lessee_all['value']; ?>');
            var tsTenant = JSON.parse('<?php echo $tenant_all['value']; ?>');
            var tsOthers = JSON.parse('<?php echo $others_all['value']; ?>');
            var tsHigh = JSON.parse('<?php echo $tsHighest; ?>');

            var ctx = document.getElementById("ctxTenStat");
            var myChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    datasets: [{
                        data: [tsOwners, tsAmort, tsLessee, tsTenant, tsOthers],
                        backgroundColor: [
                            '#b85533', // COLOR 1
                            '#006CD7', // COLOR 2
                            '#FEB043', // COLOR 3
                            '#7FFE00', // COLOR 4
                            '#FE7E00' // COLOR 4
                        ],
                        borderColor: [
                            '#b85533', // COLOR 1
                            '#006CD7', // COLOR 2
                            '#FEB043', // COLOR 3
                            '#7FFE00', // COLOR 4
                            '#FE7E00' // COLOR 4
                        ]
                    }]
                },
                options: {
                    devicePixelRatio: 3,
                    cutoutPercentage: 60,
                    aspectRatio: 4,
                    legend: {
                        display: false
                    },
                    layout: {
                        padding: {
                          bottom: 2
                        }
                    },
                    responsive: true,
                    maintainAspectRatio: true,
                    plugins: {
                        labels: false
                    },
                    elements: {
                        center: {
                            text: tsHigh + '%',
                            color: '#212529',
                            fontStyle: 'Poppins',
                            sidePadding: 20,
                            minFontSize: 12,
                            lineHeight: 25
                        }
                    },
                    tooltips: {
                         enabled: false
                    }
                }
            });
        
            var sRice = JSON.parse('<?php echo $rice_inc_all['value']; ?>');
            var sNonRice = JSON.parse('<?php echo $non_inc_all['value']; ?>');
            
            // CHART 4

            var ctx = document.getElementById("ctxSource");
            var myChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    datasets: [{
                        data: [sRice, sNonRice],
                        backgroundColor: [
                            '#b85533', // COLOR 1
                            '#FEB043' // COLOR 2
                        ],
                        borderColor: [
                            '#b85533', // COLOR 1
                            '#FEB043' // COLOR 2
                        ]
                    }]
                },
                options: {
                    devicePixelRatio: 3,
                    cutoutPercentage: 60,
                    aspectRatio: 4,
                    legend: {
                        display: false
                    },
                    layout: {
                        padding: {
                          bottom: 2
                        }
                    },
                    responsive: true,
                    maintainAspectRatio: true,
                    plugins: {
                        labels: false
                    },
                    elements: {
                        center: {
                            text: sRice + '%',
                            color: '#212529',
                            fontStyle: 'Poppins',
                            sidePadding: 20,
                            minFontSize: 12,
                            lineHeight: 25
                        }
                    },
                    tooltips: {
                         enabled: false
                    }
                }
            });
        
            var Org = JSON.parse('<?php echo $org_all['value']; ?>');
            var NonOrg = JSON.parse('<?php echo $non_all['value']; ?>');
            
            // CHART 5

            var ctx = document.getElementById("ctxOrg");
            var myChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    datasets: [{
                        data: [Org, NonOrg],
                        backgroundColor: [
                            '#b85533', // COLOR 1
                            '#FEB043' // COLOR 2
                        ],
                        borderColor: [
                            '#b85533', // COLOR 1
                            '#FEB043' // COLOR 2
                        ]
                    }]
                },
                options: {
                    devicePixelRatio: 3,
                    cutoutPercentage: 60,
                    aspectRatio: 4,
                    legend: {
                        display: false
                    },
                    layout: {
                        padding: {
                          bottom: 2
                        }
                    },
                    responsive: true,
                    maintainAspectRatio: true,
                    plugins: {
                        labels: false
                    },
                    elements: {
                        center: {
                            text: Org + '%',
                            color: '#212529',
                            fontStyle: 'Poppins',
                            sidePadding: 20,
                            minFontSize: 12,
                            lineHeight: 25
                        }
                    },
                    tooltips: {
                         enabled: false
                    }
                }
            });   
        
            // CHART 6
            
            var Tra = JSON.parse('<?php echo $tra_all['value']; ?>');
            var NonTra = JSON.parse('<?php echo $trn_all['value']; ?>');

            var ctx2 = document.getElementById("ctxTrain");
            var myChart2 = new Chart(ctx2, {
                type: 'pie',
                data: {
                    datasets: [{
                        data: [Tra, NonTra],
                        backgroundColor: [
                            '#b85533', // COLOR 1
                            '#FEB043' // COLOR 2
                        ],
                        borderColor: [
                            '#b85533', // COLOR 1
                            '#FEB043' // COLOR 2
                        ]
                    }]
                },
                options: {
                    devicePixelRatio: 3,
                    cutoutPercentage: 60,
                    aspectRatio: 4,
                    legend: {
                        display: false
                    },
                    layout: {
                        padding: {
                          bottom: 2
                        }
                    },
                    responsive: true,
                    maintainAspectRatio: true,
                    plugins: {
                        labels: false
                    },
                    elements: {
                        center: {
                            text: Tra + '%',
                            color: '#212529',
                            fontStyle: 'Poppins',
                            sidePadding: 20,
                            minFontSize: 12,
                            lineHeight: 25
                        }
                    },
                    tooltips: {
                         enabled: false
                    }
                }
            });

    </script>

    <!-- MONTHLY INCOME CHARTS -->

    <script>
        // var sidebarjs = new SidebarJS.SidebarElement();
        Chart.defaults.global.responsive = true;
        Chart.defaults.global.tooltips.mode = 'index';
        Chart.defaults.global.tooltips.intersect = false;
        Chart.defaults.global.defaultFontFamily = 'Poppins';
        Chart.defaults.global.defaultFontSize = 13;
        Chart.defaults.global.animation.duration = 3000;
        Chart.defaults.global.defaultFontColor = "#000000";
        
        // CHART 1
        
        var dbIncome = clean(JSON.parse('<?php echo $monthly_income_yearly; ?>'));
        var dbPoverty = clean(JSON.parse('<?php echo $poverty_yearly; ?>'));
        var dbPovertyTh = clean(JSON.parse('<?php echo $poverty_threshold_yearly; ?>'));
        if (dbIncome[0]["year"] !=  dbIncome[dbIncome.length-1]["year"]){
            $("span.case").text(dbIncome[0]["year"] + "-" + dbIncome[dbIncome.length-1]["year"]); 
        }
                    
        let monthlyincome_years = [];
        let monthlyincome_years_pt = [];
        let monthlyincome_values_income = [];
        let monthlyincome_values_poverty = [];
        let monthlyincome_values_povertyth = [];

        try {
            dbIncome.map((item) => {
            monthlyincome_years.push(item.year);
            monthlyincome_values_income.push(item.value);
            });
            dbPoverty.map((item) => {
            monthlyincome_values_poverty.push(item.value);
            });
            dbPovertyTh.map((item) => {
            monthlyincome_years_pt.push(item.year);
            monthlyincome_values_povertyth.push(item.value);
            });
        } catch (error) {
            console.log(error);
        }
        
        var meanAge = document.getElementById('monthlyincome_ctxChart1').getContext('2d');
        var tempPLabels = [...monthlyincome_years];
        var tempPTLabels = [...monthlyincome_years_pt];
        var prodMonthly = [...monthlyincome_values_income];
        var prodPoverty = [...monthlyincome_values_poverty];
        var prodPovertyTh = [...monthlyincome_values_povertyth];
        var meanAgeChart = new Chart(meanAge, {

                type: 'bar',

                data: {
                    labels: tempPLabels,
                    datasets: [{
                        label: 'Estimated Monthly Income',
                        backgroundColor: '#007FFE',    // COLOR 1
                        borderColor: '#007FFE',        // COLOR 1
                        data: prodMonthly
                    }]
                },

                options: {
                    devicePixelRatio: 3,
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
                        display: false
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
        
            var Chart2 = document.getElementById('monthlyincome_ctxChart2').getContext('2d');
            var Chart2Chart = new Chart(Chart2, {

                    type: 'bar',

                    data: {
                        labels: tempPLabels,
                        datasets: [{
                            label: 'Above Poverty Threshold',
                            backgroundColor: '#007FFE',    // COLOR 1
                            borderColor: '#007FFE',        // COLOR 1
                            data: prodPoverty
                        }]
                    },

                    options: {
                        devicePixelRatio: 3,
                        aspectRatio: 1.38,
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
                            display: false
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
    
            var Chart3 = document.getElementById('monthlyincome_ctxChart3').getContext('2d');
            var Chart3Chart = new Chart(Chart3, {

            type: 'bar',

            data: {
                labels: tempPTLabels,
                datasets: [{
                    label: 'Monthly Poverty Threshold',
                    backgroundColor: '#007FFE',    // COLOR 1
                    borderColor: '#007FFE',        // COLOR 1
                    data: prodPovertyTh
                }]
            },

            options: {
                devicePixelRatio: 3,
                aspectRatio: 1.38,
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
                    display: false
                },
                tooltips: {
                    callbacks: {
                        label: function (tooltipItem, data) {
                        var tooltipValue = data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index];
                        return data.datasets[tooltipItem.datasetIndex].label + ": " + parseInt(Math.round(tooltipValue)).toLocaleString();
                        }
                    }
                }
            }
        });
    </script>

    <!-- SOCIAL CHARTS -->

    <script>
        // var sidebarjs = new SidebarJS.SidebarElement();
        Chart.pluginService.register({
            beforeDraw: function(chart) {
                if (chart.config.options.elements.center) {
                    // Get ctx from string
                    var ctx = chart.chart.ctx;

                    // Get options from the center object in options
                    var centerConfig = chart.config.options.elements.center;
                    var fontStyle = centerConfig.fontStyle || 'Arial';
                    var txt = centerConfig.text;
                    var color = centerConfig.color || '#000';
                    var maxFontSize = centerConfig.maxFontSize || 75;
                    var sidePadding = centerConfig.sidePadding || 20;
                    var sidePaddingCalculated = (sidePadding / 100) * (chart.innerRadius * 2)
                    // Start with a base font of 30px
                    ctx.font = "30px " + fontStyle;

                    // Get the width of the string and also the width of the element minus 10 to give it 5px side padding
                    var stringWidth = ctx.measureText(txt).width;
                    var elementWidth = (chart.innerRadius * 2) - sidePaddingCalculated;

                    // Find out how much the font can grow in width.
                    var widthRatio = elementWidth / stringWidth;
                    var newFontSize = Math.floor(30 * widthRatio);
                    var elementHeight = (chart.innerRadius * 2);

                    // Pick a new font size so it will not be larger than the height of label.
                    var fontSizeToUse = Math.min(newFontSize, elementHeight, maxFontSize);
                    var minFontSize = centerConfig.minFontSize;
                    var lineHeight = centerConfig.lineHeight || 25;
                    var wrapText = false;

                    if (minFontSize === undefined) {
                        minFontSize = 20;
                    }

                    if (minFontSize && fontSizeToUse < minFontSize) {
                        fontSizeToUse = minFontSize;
                        wrapText = true;
                    }

                    // Set font settings to draw it correctly.
                    ctx.textAlign = 'center';
                    ctx.textBaseline = 'middle';
                    var centerX = ((chart.chartArea.left + chart.chartArea.right) / 2);
                    var centerY = ((chart.chartArea.top + chart.chartArea.bottom) / 2);
                    ctx.font = fontSizeToUse + "px " + fontStyle;
                    ctx.fillStyle = color;

                    if (!wrapText) {
                        ctx.fillText(txt, centerX, centerY);
                        return;
                    }

                    var words = txt.split(' ');
                    var line = '';
                    var lines = [];

                    // Break words up into multiple lines if necessary
                    for (var n = 0; n < words.length; n++) {
                        var testLine = line + words[n] + ' ';
                        var metrics = ctx.measureText(testLine);
                        var testWidth = metrics.width;
                        if (testWidth > elementWidth && n > 0) {
                            lines.push(line);
                            line = words[n] + ' ';
                        } else {
                            line = testLine;
                        }
                    }

                    // Move the center up depending on line height and number of lines
                    centerY -= (lines.length / 2) * lineHeight;

                    for (var n = 0; n < lines.length; n++) {
                        ctx.fillText(lines[n], centerX, centerY);
                        centerY += lineHeight;
                    }
                    //Draw text in center
                    ctx.fillText(line, centerX, centerY);
                }
            }
        });
        
        Chart.defaults.global.responsive = true;
        Chart.defaults.global.tooltips.mode = 'index';
        Chart.defaults.global.tooltips.intersect = false;
        Chart.defaults.global.defaultFontFamily = 'Poppins';
        Chart.defaults.global.defaultFontSize = 13;
        Chart.defaults.global.animation.duration = 3000;
        Chart.defaults.global.defaultFontColor = "#000000";
        
        var sexMale = JSON.parse('<?php echo $male_all['value']; ?>');
        var sexFemale = JSON.parse('<?php echo $female_all['value']; ?>');
        
        // CHART 1

        var ctx = document.getElementById("social_ctxSex");
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                datasets: [{
                    data: [sexMale, sexFemale],
                    backgroundColor: [
                        '#17256b', // COLOR 1
                        '#FEB043' // COLOR 2
                    ],
                    borderColor: [
                        '#17256b', // COLOR 1
                        '#FEB043' // COLOR 2
                    ]
                }]
            },
            options: {
                devicePixelRatio: 3,
                cutoutPercentage: 60,
                aspectRatio: 1,
                legend: {
                    display: false
                },
                layout: {
                    padding: {
                        bottom: 2
                    }
                },
                responsive: true,
                maintainAspectRatio: true,
                plugins: {
                    labels: false
                },
                elements: {
                    center: {
                        text: sexMale + '%',
                        color: '#ffffff',
                        fontStyle: 'Poppins',
                        sidePadding: 20,
                        minFontSize: 12,
                        lineHeight: 25
                    }
                },
                tooltips: {
                        enabled: false
                }
            }
        });
        
        // CHART 2
        
        var csSingle = JSON.parse('<?php echo $s_all['value']; ?>');
        var csMarried = JSON.parse('<?php echo $m_all['value']; ?>');
        var csWidow = JSON.parse('<?php echo $w_all['value']; ?>');
        var csSeparated = JSON.parse('<?php echo $se_all['value']; ?>');

        var ctx2 = document.getElementById("social_ctxCivil");
        var myChart2 = new Chart(ctx2, {
            type: 'pie',
            data: {
                datasets: [{
                    data: [csSingle, csMarried, csWidow, csSeparated],
                    backgroundColor: [
                        '#006CD7', // COLOR 1
                        '#17256b', // COLOR 2
                        '#FEB043', // COLOR 3
                        '#7FFE00' // COLOR 4
                    ],
                    borderColor: [
                        '#006CD7', // COLOR 1
                        '#17256b', // COLOR 2
                        '#FEB043', // COLOR 3
                        '#7FFE00' // COLOR 4
                    ]
                }]
            },
            options: {
                devicePixelRatio: 3,
                cutoutPercentage: 60,
                aspectRatio: 1,
                legend: {
                    display: false
                },
                layout: {
                    padding: {
                        bottom: 2
                    }
                },
                responsive: true,
                maintainAspectRatio: true,
                plugins: {
                    labels: false
                },
                elements: {
                    center: {
                        text: csMarried + '%',
                        color: '#ffffff',
                        fontStyle: 'Poppins',
                        sidePadding: 20,
                        minFontSize: 12,
                        lineHeight: 25
                    }
                },
                tooltips: {
                        enabled: false
                }
            }
        });
        
        // CHART 3
        
        var dbAgeOne = clean(JSON.parse('<?php echo $aon_yearly; ?>'));
        var dbAgeTwo = clean(JSON.parse('<?php echo $atw_yearly; ?>'));
        var dbAgeThree = clean(JSON.parse('<?php echo $ath_yearly; ?>'));
        var dbAgeFour = clean(JSON.parse('<?php echo $afo_yearly; ?>'));
        if (dbAgeOne[0]["year"] !=  dbAgeOne[dbAgeOne.length-1]["year"]){
            $("span.case").text(dbAgeOne[0]["year"] + "-" + dbAgeOne[dbAgeOne.length-1]["year"]); 
        }
                    
        let social_years = [];
        let social_values_one = [];
        let social_values_two = [];
        let social_values_three = [];
        let social_values_four = [];

        try {
            dbAgeOne.map((item) => {
            social_years.push(item.year);
            social_values_one.push(item.value);
            });
            dbAgeTwo.map((item) => {
            social_values_two.push(item.value);
            });
            dbAgeThree.map((item) => {
            social_values_three.push(item.value);
            });
            dbAgeFour.map((item) => {
            social_values_four.push(item.value);
            });
        } catch (error) {
            console.log(error);
        }
        
        var ageGroup = document.getElementById('ctxAgeGroup').getContext('2d');
        var tempPLabels = [...social_years];
        var prodOne = [...social_values_one];
        var prodTwo = [...social_values_two];
        var prodThree = [...social_values_three];
        var prodFour = [...social_values_four];
        var ageGroupChart = new Chart(ageGroup, {

                type: 'bar',

                data: {
                    labels: tempPLabels,
                    datasets: [{
                        label: '15-24',
                        backgroundColor: '#FEB043',    // COLOR 1
                        borderColor: '#FEB043',        // COLOR 1
                        data: prodOne
                    },{
                        label: '25-54',
                        backgroundColor: '#2138B7',    // COLOR 1
                        borderColor: '#2138B7',        // COLOR 1
                        data: prodTwo
                    },{
                        label: '55-64',
                        backgroundColor: '#7FFE00',    // COLOR 1
                        borderColor: '#7FFE00',        // COLOR 1
                        data: prodThree
                    },{
                        label: '> 65',
                        backgroundColor: '#006CD7',    // COLOR 1
                        borderColor: '#006CD7',        // COLOR 1
                        data: prodFour
                    }]
                },

                options: {
                    devicePixelRatio: 3,
                    aspectRatio: 1,
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
        
        // CHART 5
        
        var dbMale = clean(JSON.parse('<?php echo $male_yearly; ?>'));
        var dbFemale = clean(JSON.parse('<?php echo $female_yearly; ?>'));
                    
        let years_s = [];
        let values_male = [];
        let values_female = [];

        try {
            dbMale.map((item) => {
            years_s.push(item.year);
            values_male.push(item.value);
            });
            dbFemale.map((item) => {
            values_female.push(item.value);
            });
        } catch (error) {
            console.log(error);
        }
        
        var sexGroup = document.getElementById('ctxSexGroup').getContext('2d');
        var tempPsLabels = [...years_s];
        var vMale = [...values_male];
        var vFemale = [...values_female];
        var sexGroupChart = new Chart(sexGroup, {

                type: 'bar',

                data: {
                    labels: tempPsLabels,
                    datasets: [{
                        label: 'Male',
                        backgroundColor: '#17256b',    // COLOR 1
                        borderColor: '#17256b',        // COLOR 1
                        data: vMale
                    },{
                        label: 'Female',
                        backgroundColor: '#FEB043',    // COLOR 1
                        borderColor: '#FEB043',        // COLOR 1
                        data: vFemale
                    }]
                },

                options: {
                    devicePixelRatio: 3,
                    aspectRatio: 1,
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
        
        // CHART 6
        
        var dbSingle = clean(JSON.parse('<?php echo $s_yearly; ?>'));
        var dbMarried = clean(JSON.parse('<?php echo $m_yearly; ?>'));
        var dbWidow = clean(JSON.parse('<?php echo $w_yearly; ?>'));
        var dbSeparated = clean(JSON.parse('<?php echo $se_yearly; ?>'));
                    
        let years_c = [];
        let values_single = [];
        let values_married = [];
        let values_widow = [];
        let values_separated = [];

        try {
            dbSingle.map((item) => {
            years_c.push(item.year);
            values_single.push(item.value);
            });
            dbMarried.map((item) => {
            values_married.push(item.value);
            });
            dbWidow.map((item) => {
            values_widow.push(item.value);
            });
            dbSeparated.map((item) => {
            values_separated.push(item.value);
            });
        } catch (error) {
            console.log(error);
        }
        
        var civilGroup = document.getElementById('ctxCivilGroup').getContext('2d');
        var tempPcLabels = [...years_c];
        var prodSingle = [...values_single];
        var prodMarried = [...values_married];
        var prodWidow = [...values_widow];
        var prodSeparated = [...values_separated];
        var civilGroupChart = new Chart(civilGroup, {

                type: 'bar',

                data: {
                    labels: tempPcLabels,
                    datasets: [{
                        label: 'Single',
                        backgroundColor: '#006CD7',    // COLOR 1
                        borderColor: '#006CD7',        // COLOR 1
                        data: prodSingle
                    },{
                        label: 'Married',
                        backgroundColor: '#17256b',    // COLOR 1
                        borderColor: '#17256b',        // COLOR 1
                        data: prodMarried
                    },{
                        label: 'Widow',
                        backgroundColor: '#FEB043',    // COLOR 1
                        borderColor: '#FEB043',        // COLOR 1
                        data: prodWidow
                    },{
                        label: 'Separated',
                        backgroundColor: '#7FFE00',    // COLOR 1
                        borderColor: '#7FFE00',        // COLOR 1
                        data: prodSeparated
                    }]
                },

                options: {
                    devicePixelRatio: 3,
                    aspectRatio: 1,
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
        
    </script>

    <!-- FARM DETAILS CHARTS -->

    <script>
        // var sidebarjs = new SidebarJS.SidebarElement();
        Chart.pluginService.register({
            beforeDraw: function(chart) {
                if (chart.config.options.elements.center) {
                    // Get ctx from string
                    var ctx = chart.chart.ctx;

                    // Get options from the center object in options
                    var centerConfig = chart.config.options.elements.center;
                    var fontStyle = centerConfig.fontStyle || 'Arial';
                    var txt = centerConfig.text;
                    var color = centerConfig.color || '#000';
                    var maxFontSize = centerConfig.maxFontSize || 75;
                    var sidePadding = centerConfig.sidePadding || 20;
                    var sidePaddingCalculated = (sidePadding / 100) * (chart.innerRadius * 2)
                    // Start with a base font of 30px
                    ctx.font = "30px " + fontStyle;

                    // Get the width of the string and also the width of the element minus 10 to give it 5px side padding
                    var stringWidth = ctx.measureText(txt).width;
                    var elementWidth = (chart.innerRadius * 2) - sidePaddingCalculated;

                    // Find out how much the font can grow in width.
                    var widthRatio = elementWidth / stringWidth;
                    var newFontSize = Math.floor(30 * widthRatio);
                    var elementHeight = (chart.innerRadius * 2);

                    // Pick a new font size so it will not be larger than the height of label.
                    var fontSizeToUse = Math.min(newFontSize, elementHeight, maxFontSize);
                    var minFontSize = centerConfig.minFontSize;
                    var lineHeight = centerConfig.lineHeight || 25;
                    var wrapText = false;

                    if (minFontSize === undefined) {
                        minFontSize = 20;
                    }

                    if (minFontSize && fontSizeToUse < minFontSize) {
                        fontSizeToUse = minFontSize;
                        wrapText = true;
                    }

                    // Set font settings to draw it correctly.
                    ctx.textAlign = 'center';
                    ctx.textBaseline = 'middle';
                    var centerX = ((chart.chartArea.left + chart.chartArea.right) / 2);
                    var centerY = ((chart.chartArea.top + chart.chartArea.bottom) / 2);
                    ctx.font = fontSizeToUse + "px " + fontStyle;
                    ctx.fillStyle = color;

                    if (!wrapText) {
                        ctx.fillText(txt, centerX, centerY);
                        return;
                    }

                    var words = txt.split(' ');
                    var line = '';
                    var lines = [];

                    // Break words up into multiple lines if necessary
                    for (var n = 0; n < words.length; n++) {
                        var testLine = line + words[n] + ' ';
                        var metrics = ctx.measureText(testLine);
                        var testWidth = metrics.width;
                        if (testWidth > elementWidth && n > 0) {
                            lines.push(line);
                            line = words[n] + ' ';
                        } else {
                            line = testLine;
                        }
                    }

                    // Move the center up depending on line height and number of lines
                    centerY -= (lines.length / 2) * lineHeight;

                    for (var n = 0; n < lines.length; n++) {
                        ctx.fillText(lines[n], centerX, centerY);
                        centerY += lineHeight;
                    }
                    //Draw text in center
                    ctx.fillText(line, centerX, centerY);
                }
            }
        });
        
        Chart.defaults.global.responsive = true;
        Chart.defaults.global.tooltips.mode = 'index';
        Chart.defaults.global.tooltips.intersect = false;
        Chart.defaults.global.defaultFontFamily = 'Poppins';
        Chart.defaults.global.defaultFontSize = 13;
        Chart.defaults.global.animation.duration = 3000;
        
        var tsOwners = JSON.parse('<?php echo $owner_all['value']; ?>');
        var tsAmort = JSON.parse('<?php echo $amort_all['value']; ?>');
        var tsLessee = JSON.parse('<?php echo $lessee_all['value']; ?>');
        var tsTenant = JSON.parse('<?php echo $tenant_all['value']; ?>');
        var tsOthers = JSON.parse('<?php echo $others_all['value']; ?>');
        var tsHigh = JSON.parse('<?php echo $tsHighest; ?>');
        
        // CHART 1

        var ctx = document.getElementById("farmdetails_ctxTenStat");
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                datasets: [{
                    data: [tsOwners, tsAmort, tsLessee, tsTenant, tsOthers],
                    backgroundColor: [
                        '#17256b', // COLOR 1
                        '#2138B7', // COLOR 2
                        '#FEB043', // COLOR 3
                        '#7FFE00', // COLOR 4
                        '#FE7E00' // COLOR 4
                    ],
                    borderColor: [
                        '#17256b', // COLOR 1
                        '#2138B7', // COLOR 2
                        '#FEB043', // COLOR 3
                        '#7FFE00', // COLOR 4
                        '#FE7E00' // COLOR 4
                    ]
                }]
            },
            options: {
                devicePixelRatio: 3,
                cutoutPercentage: 60,
                aspectRatio: 1.5,
                legend: {
                    display: false
                },
                layout: {
                    padding: {
                        bottom: 2
                    }
                },
                responsive: true,
                maintainAspectRatio: true,
                plugins: {
                    labels: false
                },
                elements: {
                    center: {
                        text: tsHigh + '%',
                        color: '#ffffff',
                        fontStyle: 'Poppins',
                        sidePadding: 20,
                        minFontSize: 12,
                        lineHeight: 25
                    }
                },
                tooltips: {
                        enabled: false
                }
            }
        });
        
        // CHART 2
        
        var dbFarmOne = clean(JSON.parse('<?php echo $one_all_yearly; ?>'));
        var dbFarmTwo = clean(JSON.parse('<?php echo $two_all_yearly; ?>'));
        var dbFarmThree = clean(JSON.parse('<?php echo $three_all_yearly; ?>'));
        var dbFarmFour = clean(JSON.parse('<?php echo $four_all_yearly; ?>'));
        if (dbFarmOne[0]["year"] !=  dbFarmOne[dbFarmOne.length-1]["year"]){
            $("span.case").text(dbFarmOne[0]["year"] + "-" + dbFarmOne[dbFarmOne.length-1]["year"]); 
        }
                    
        let farmdetails_years = [];
        let farmdetails_values_one = [];
        let farmdetails_values_two = [];
        let farmdetails_values_three = [];
        let farmdetails_values_four = [];

        try {
            dbFarmOne.map((item) => {
            farmdetails_years.push(item.year);
            farmdetails_values_one.push(item.value);
            });
            dbFarmTwo.map((item) => {
            farmdetails_values_two.push(item.value);
            });
            dbFarmThree.map((item) => {
            farmdetails_values_three.push(item.value);
            });
            dbFarmFour.map((item) => {
            farmdetails_values_four.push(item.value);
            });
        } catch (error) {
            console.log(error);
        }
        
        var farmSize = document.getElementById('ctxFarmSize').getContext('2d');
        var tempPLabels = [...farmdetails_years];
        var prodOne = [...farmdetails_values_one];
        var prodTwo = [...farmdetails_values_two];
        var prodThree = [...farmdetails_values_three];
        var prodFour = [...farmdetails_values_four];
        var farmSizeChart = new Chart(farmSize, {

                type: 'bar',

                data: {
                    labels: tempPLabels,
                    datasets: [{
                        label: '1.00 ha or less',
                        backgroundColor: '#2138B7',    // COLOR 1
                        borderColor: '#2138B7',        // COLOR 1
                        data: prodOne
                    },{
                        label: '1.01 - 2.00 ha',
                        backgroundColor: '#FEB043',    // COLOR 1
                        borderColor: '#FEB043',        // COLOR 1
                        data: prodTwo
                    },{
                        label: '2.01 - 3.00 ha',
                        backgroundColor: '#7FFE00',    // COLOR 1
                        borderColor: '#7FFE00',        // COLOR 1
                        data: prodThree
                    },{
                        label: '3.01 ha or more',
                        backgroundColor: '#006CD7',    // COLOR 1
                        borderColor: '#006CD7',        // COLOR 1
                        data: prodFour
                    }]
                },

                options: {
                    devicePixelRatio: 3,
                    aspectRatio: 1.23,
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
                        position: 'top',
                        labels: {
                            fontSize: 9 //change the size of the labels
                        }
                    }
                }
            });
        
        // CHART 6
        
        var dbOwner = clean(JSON.parse('<?php echo $owner_yearly; ?>'));
        var dbAmort = clean(JSON.parse('<?php echo $amort_yearly; ?>'));
        var dbLessee = clean(JSON.parse('<?php echo $lessee_yearly; ?>'));
        var dbTenant = clean(JSON.parse('<?php echo $tenant_yearly; ?>'));
        var dbOthers = clean(JSON.parse('<?php echo $others_yearly; ?>'));
            if (dbOwner[0]["year"] !=  dbOwner[dbOwner.length-1]["year"]){
            $("span#case-1").text(dbOwner[0]["year"] + "-" + dbOwner[dbOwner.length-1]["year"]); 
        }
                    
        let farmdetails_years_c = [];
        let farmdetails_values_owner = [];
        let farmdetails_values_amort = [];
        let farmdetails_values_lessee = [];
        let farmdetails_values_tenant = [];
        let farmdetails_values_others = [];

        try {
            dbOwner.map((item) => {
            farmdetails_years_c.push(item.year);
            farmdetails_values_owner.push(item.value);
            });
            dbAmort.map((item) => {
            farmdetails_values_amort.push(item.value);
            });
            dbLessee.map((item) => {
            farmdetails_values_lessee.push(item.value);
            });
            dbTenant.map((item) => {
            farmdetails_values_tenant.push(item.value);
            });
            dbOthers.map((item) => {
            farmdetails_values_others.push(item.value);
            });
        } catch (error) {
            console.log(error);
        }
        
        var tenStatYear = document.getElementById('ctxTenStatYear').getContext('2d');
        var tempPcLabels = [...farmdetails_years_c];
        var prodOwner = [...farmdetails_values_owner];
        var prodAmort = [...farmdetails_values_amort];
        var prodLessee = [...farmdetails_values_lessee];
        var prodTenant = [...farmdetails_values_tenant];
        var prodOthers = [...farmdetails_values_others];
        var tenStatYearChart = new Chart(tenStatYear, {

            type: 'bar',

            data: {
                labels: tempPcLabels,
                datasets: [{
                    label: 'Owner',
                    backgroundColor: '#17256b',    // COLOR 1
                    borderColor: '#17256b',        // COLOR 1
                    data: prodOwner
                },{
                    label: 'Amortizing',
                    backgroundColor: '#2138B7',    // COLOR 1
                    borderColor: '#2138B7',        // COLOR 1
                    data: prodAmort
                },{
                    label: 'Lessee',
                    backgroundColor: '#FEB043',    // COLOR 1
                    borderColor: '#FEB043',        // COLOR 1
                    data: prodLessee
                },{
                    label: 'Tenant',
                    backgroundColor: '#7FFE00',    // COLOR 1
                    borderColor: '#7FFE00',        // COLOR 1
                    data: prodTenant
                },{
                    label: 'Others',
                    backgroundColor: '#FE7E00',    // COLOR 1
                    borderColor: '#FE7E00',        // COLOR 1
                    data: prodOthers
                }]
            },

            options: {
                devicePixelRatio: 3,
                aspectRatio: 1.3,
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
                    position: 'top',
                    labels: {
                        fontSize: 9 //change the size of the labels
                    }
                }
            }
        });
    </script>

    <!-- HOUSEHOLD SIZE INCOME -->

    <script>
        // var sidebarjs = new SidebarJS.SidebarElement();
        Chart.pluginService.register({
            beforeDraw: function(chart) {
                if (chart.config.options.elements.center) {
                    // Get ctx from string
                    var ctx = chart.chart.ctx;

                    // Get options from the center object in options
                    var centerConfig = chart.config.options.elements.center;
                    var fontStyle = centerConfig.fontStyle || 'Arial';
                    var txt = centerConfig.text;
                    var color = centerConfig.color || '#000';
                    var maxFontSize = centerConfig.maxFontSize || 75;
                    var sidePadding = centerConfig.sidePadding || 20;
                    var sidePaddingCalculated = (sidePadding / 100) * (chart.innerRadius * 2)
                    // Start with a base font of 30px
                    ctx.font = "30px " + fontStyle;

                    // Get the width of the string and also the width of the element minus 10 to give it 5px side padding
                    var stringWidth = ctx.measureText(txt).width;
                    var elementWidth = (chart.innerRadius * 2) - sidePaddingCalculated;

                    // Find out how much the font can grow in width.
                    var widthRatio = elementWidth / stringWidth;
                    var newFontSize = Math.floor(30 * widthRatio);
                    var elementHeight = (chart.innerRadius * 2);

                    // Pick a new font size so it will not be larger than the height of label.
                    var fontSizeToUse = Math.min(newFontSize, elementHeight, maxFontSize);
                    var minFontSize = centerConfig.minFontSize;
                    var lineHeight = centerConfig.lineHeight || 25;
                    var wrapText = false;

                    if (minFontSize === undefined) {
                        minFontSize = 20;
                    }

                    if (minFontSize && fontSizeToUse < minFontSize) {
                        fontSizeToUse = minFontSize;
                        wrapText = true;
                    }

                    // Set font settings to draw it correctly.
                    ctx.textAlign = 'center';
                    ctx.textBaseline = 'middle';
                    var centerX = ((chart.chartArea.left + chart.chartArea.right) / 2);
                    var centerY = ((chart.chartArea.top + chart.chartArea.bottom) / 2);
                    ctx.font = fontSizeToUse + "px " + fontStyle;
                    ctx.fillStyle = color;

                    if (!wrapText) {
                        ctx.fillText(txt, centerX, centerY);
                        return;
                    }

                    var words = txt.split(' ');
                    var line = '';
                    var lines = [];

                    // Break words up into multiple lines if necessary
                    for (var n = 0; n < words.length; n++) {
                        var testLine = line + words[n] + ' ';
                        var metrics = ctx.measureText(testLine);
                        var testWidth = metrics.width;
                        if (testWidth > elementWidth && n > 0) {
                            lines.push(line);
                            line = words[n] + ' ';
                        } else {
                            line = testLine;
                        }
                    }

                    // Move the center up depending on line height and number of lines
                    centerY -= (lines.length / 2) * lineHeight;

                    for (var n = 0; n < lines.length; n++) {
                        ctx.fillText(lines[n], centerX, centerY);
                        centerY += lineHeight;
                    }
                    //Draw text in center
                    ctx.fillText(line, centerX, centerY);
                }
            }
        });
        
        Chart.defaults.global.responsive = true;
        Chart.defaults.global.tooltips.mode = 'index';
        Chart.defaults.global.tooltips.intersect = false;
        Chart.defaults.global.defaultFontFamily = 'Poppins';
        Chart.defaults.global.defaultFontSize = 13;
        Chart.defaults.global.animation.duration = 3000;
        
        var sRice = JSON.parse('<?php echo $rice_inc_all['value']; ?>');
        var sRiceS = JSON.parse('<?php echo $rice_incs_all['value']; ?>');
        var sNonRice = JSON.parse('<?php echo $non_inc_all['value']; ?>');
        var sNonRiceS = JSON.parse('<?php echo 100 - $rice_incs_all['value']; ?>');
        
        // CHART 1

        var ctx = document.getElementById("householdsizeincome_ctxSource");
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                datasets: [{
                    data: [sRice, sNonRice],
                    backgroundColor: [
                        '#17256b', // COLOR 1
                        '#eb9228' // COLOR 2
                    ],
                    borderColor: [
                        '#17256b', // COLOR 1
                        '#eb9228' // COLOR 2
                    ]
                }]
            },
            options: {
                devicePixelRatio: 3,
                cutoutPercentage: 60,
                aspectRatio: 1.5,
                legend: {
                    display: false
                },
                layout: {
                    padding: {
                        bottom: 2
                    }
                },
                responsive: true,
                maintainAspectRatio: true,
                plugins: {
                    labels: false
                },
                elements: {
                    center: {
                        text: sRice + '%',
                        color: '#ffffff',
                        fontStyle: 'Poppins',
                        sidePadding: 20,
                        minFontSize: 12,
                        lineHeight: 25
                    }
                },
                tooltips: {
                        enabled: false
                }
            }
        });
    
        // CHART 2.1

        var ctxH = document.getElementById("ctxHSource");
        var myChartH = new Chart(ctxH, {
            type: 'pie',
            data: {
                datasets: [{
                    data: [sRiceS, sNonRiceS],
                    backgroundColor: [
                        '#17256b', // COLOR 1
                        '#eb9228' // COLOR 2
                    ],
                    borderColor: [
                        '#17256b', // COLOR 1
                        '#eb9228' // COLOR 2
                    ]
                }]
            },
            options: {
                devicePixelRatio: 3,
                cutoutPercentage: 60,
                aspectRatio: 1.5,
                legend: {
                    display: false
                },
                layout: {
                    padding: {
                        bottom: 2
                    }
                },
                responsive: true,
                maintainAspectRatio: true,
                plugins: {
                    labels: false
                },
                elements: {
                    center: {
                        text: sRiceS + '%',
                        color: '#ffffff',
                        fontStyle: 'Poppins',
                        sidePadding: 20,
                        minFontSize: 12,
                        lineHeight: 25
                    }
                },
                tooltips: {
                        enabled: false
                }
            }
        });
        
        // CHART 2
        
        var dbHhsize = clean(JSON.parse('<?php echo $hhsize_yearly; ?>'));
                    
        let householdsizeincome_years = [];
        let values_hhsize = [];

        try {
            dbHhsize.map((item) => {
            householdsizeincome_years.push(item.year);
            values_hhsize.push(item.value);
            });
        } catch (error) {
            console.log(error);
        }
        
        var hhSize = document.getElementById('ctxHhSize').getContext('2d');
        var tempPLabels = [...householdsizeincome_years];
        var prodHhsize = [...values_hhsize];
        var hhSizeChart = new Chart(hhSize, {

                type: 'bar',

                data: {
                    labels: tempPLabels,
                    datasets: [{
                        label: 'Average Size of Household Members',
                        backgroundColor: '#17256b',    // COLOR 1
                        borderColor: '#17256b',        // COLOR 1
                        data: prodHhsize
                    }]
                },

                options: {
                    devicePixelRatio: 3,
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
        
        // CHART 6
        
        var dbRice = clean(JSON.parse('<?php echo $rice_yearly; ?>'));
        var dbNonRice = clean(JSON.parse('<?php echo $non_yearly; ?>'));
        if (dbRice[0]["year"] !=  dbRice[dbRice.length-1]["year"]){
            $("span.case").text(dbRice[0]["year"] + "-" + dbRice[dbRice.length-1]["year"]); 
        }
                    
        let householdsizeincome_years_c = [];
        let householdsizeincome_values_rice = [];
        let householdsizeincome_values_nonrice = [];

        try {
            dbRice.map((item) => {
            householdsizeincome_years_c.push(item.year);
            householdsizeincome_values_rice.push(item.value);
            });
            dbNonRice.map((item) => {
            householdsizeincome_values_nonrice.push(item.value);
            });
        } catch (error) {
            console.log(error);
        }
        
        var sources = document.getElementById('ctxSources').getContext('2d');
        var tempPcLabels = [...householdsizeincome_years_c];
        var prodRice = [...householdsizeincome_values_rice];
        var prodNonRice = [...householdsizeincome_values_nonrice];
        var sourcesChart = new Chart(sources, {

                type: 'bar',

                data: {
                    labels: tempPcLabels,
                    datasets: [{
                        label: 'Rice',
                        backgroundColor: '#17256b',    // COLOR 1
                        borderColor: '#17256b',        // COLOR 1
                        data: prodRice
                    },{
                        label: 'Non-rice',
                        backgroundColor: '#FE7E00',    // COLOR 1
                        borderColor: '#FE7E00',        // COLOR 1
                        data: prodNonRice
                    }]
                },

                options: {
                    devicePixelRatio: 3,
                    aspectRatio: 1.6,
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
            tooltips: false,
            legend: {
                position: "top",
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

    <!-- EDUC FARM EXP -->

    <script>
        // var sidebarjs = new SidebarJS.SidebarElement();
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
                    
        let educfarmexp_years = [];
        let educfarmexp_values_one = [];
        let educfarmexp_values_two = [];
        let educfarmexp_values_three = [];
        let educfarmexp_values_four = [];

        try {
            dbOne.map((item) => {
            educfarmexp_years.push(item.year);
            educfarmexp_values_one.push(item.value);
            });
            dbTwo.map((item) => {
            educfarmexp_values_two.push(item.value);
            });
            dbThree.map((item) => {
            educfarmexp_values_three.push(item.value);
            });
            dbFour.map((item) => {
            educfarmexp_values_four.push(item.value);
            });
        } catch (error) {
            console.log(error);
        }
        
        var chart1 = document.getElementById('educfarmexp_ctxChart1').getContext('2d');
        var tempPLabels = [...educfarmexp_years];
        var prodOne = [...educfarmexp_values_one];
        var prodTwo = [...educfarmexp_values_two];
        var prodThree = [...educfarmexp_values_three];
        var prodFour = [...educfarmexp_values_four];
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
                    devicePixelRatio: 3,
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

            let educfarmexp_years_f = [];
            let educfarmexp_values_fexp = [];
            
            try {
                dbFarmExp.map((item) => {
                educfarmexp_years_f.push(item.year);
                educfarmexp_values_fexp.push(item.value);
                });
            } catch (error) {
                console.log(error);
            }

            var tempFLabels = [...educfarmexp_years];
            var prodFExp = [...educfarmexp_values_fexp];
        
            var Chart2 = document.getElementById('educfarmexp_ctxChart2').getContext('2d');
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
                devicePixelRatio: 3,
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

    <!-- ORG TRAINING CHARTS -->

    <script>
        // var sidebarjs = new SidebarJS.SidebarElement();
        Chart.pluginService.register({
            beforeDraw: function(chart) {
                if (chart.config.options.elements.center) {
                    // Get ctx from string
                    var ctx = chart.chart.ctx;

                    // Get options from the center object in options
                    var centerConfig = chart.config.options.elements.center;
                    var fontStyle = centerConfig.fontStyle || 'Arial';
                    var txt = centerConfig.text;
                    var color = centerConfig.color || '#000';
                    var maxFontSize = centerConfig.maxFontSize || 75;
                    var sidePadding = centerConfig.sidePadding || 20;
                    var sidePaddingCalculated = (sidePadding / 100) * (chart.innerRadius * 2)
                    // Start with a base font of 30px
                    ctx.font = "30px " + fontStyle;

                    // Get the width of the string and also the width of the element minus 10 to give it 5px side padding
                    var stringWidth = ctx.measureText(txt).width;
                    var elementWidth = (chart.innerRadius * 2) - sidePaddingCalculated;

                    // Find out how much the font can grow in width.
                    var widthRatio = elementWidth / stringWidth;
                    var newFontSize = Math.floor(30 * widthRatio);
                    var elementHeight = (chart.innerRadius * 2);

                    // Pick a new font size so it will not be larger than the height of label.
                    var fontSizeToUse = Math.min(newFontSize, elementHeight, maxFontSize);
                    var minFontSize = centerConfig.minFontSize;
                    var lineHeight = centerConfig.lineHeight || 25;
                    var wrapText = false;

                    if (minFontSize === undefined) {
                        minFontSize = 20;
                    }

                    if (minFontSize && fontSizeToUse < minFontSize) {
                        fontSizeToUse = minFontSize;
                        wrapText = true;
                    }

                    // Set font settings to draw it correctly.
                    ctx.textAlign = 'center';
                    ctx.textBaseline = 'middle';
                    var centerX = ((chart.chartArea.left + chart.chartArea.right) / 2);
                    var centerY = ((chart.chartArea.top + chart.chartArea.bottom) / 2);
                    ctx.font = fontSizeToUse + "px " + fontStyle;
                    ctx.fillStyle = color;

                    if (!wrapText) {
                        ctx.fillText(txt, centerX, centerY);
                        return;
                    }

                    var words = txt.split(' ');
                    var line = '';
                    var lines = [];

                    // Break words up into multiple lines if necessary
                    for (var n = 0; n < words.length; n++) {
                        var testLine = line + words[n] + ' ';
                        var metrics = ctx.measureText(testLine);
                        var testWidth = metrics.width;
                        if (testWidth > elementWidth && n > 0) {
                            lines.push(line);
                            line = words[n] + ' ';
                        } else {
                            line = testLine;
                        }
                    }

                    // Move the center up depending on line height and number of lines
                    centerY -= (lines.length / 2) * lineHeight;

                    for (var n = 0; n < lines.length; n++) {
                        ctx.fillText(lines[n], centerX, centerY);
                        centerY += lineHeight;
                    }
                    //Draw text in center
                    ctx.fillText(line, centerX, centerY);
                }
            }
        });
        
        Chart.defaults.global.responsive = true;
        Chart.defaults.global.tooltips.mode = 'index';
        Chart.defaults.global.tooltips.intersect = false;
        Chart.defaults.global.defaultFontFamily = 'Poppins';
        Chart.defaults.global.defaultFontSize = 13;
        Chart.defaults.global.animation.duration = 3000;
        
        var Org = JSON.parse('<?php echo $org_all['value']; ?>');
        var NonOrg = JSON.parse('<?php echo $non_all['value']; ?>');
        
        // CHART 1

        var ctx = document.getElementById("orgtraining_ctxOrg");
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                datasets: [{
                    data: [Org, NonOrg],
                    backgroundColor: [
                        '#17256b', // COLOR 1
                        '#eb9228' // COLOR 2
                    ],
                    borderColor: [
                        '#17256b', // COLOR 1
                        '#eb9228' // COLOR 2
                    ]
                }]
            },
            options: {
                devicePixelRatio: 3,
                cutoutPercentage: 60,
                aspectRatio: 1.2,
                legend: {
                    display: false
                },
                layout: {
                    padding: {
                        bottom: 2
                    }
                },
                responsive: true,
                maintainAspectRatio: true,
                plugins: {
                    labels: false
                },
                elements: {
                    center: {
                        text: Org + '%',
                        color: '#ffffff',
                        fontStyle: 'Poppins',
                        sidePadding: 20,
                        minFontSize: 12,
                        lineHeight: 25
                    }
                },
                tooltips: {
                        enabled: false
                }
            }
        });
                
        // CHART 2
        
        var Tra = JSON.parse('<?php echo $tra_all['value']; ?>');
        var NonTra = JSON.parse('<?php echo $trn_all['value']; ?>');

        var ctx2 = document.getElementById("orgtraining_ctxTrain");
        var myChart2 = new Chart(ctx2, {
            type: 'pie',
            data: {
                datasets: [{
                    data: [Tra, NonTra],
                    backgroundColor: [
                        '#17256b', // COLOR 1
                        '#eb9228' // COLOR 2
                    ],
                    borderColor: [
                        '#17256b', // COLOR 1
                        '#eb9228' // COLOR 2
                    ]
                }]
            },
            options: {
                devicePixelRatio: 3,
                cutoutPercentage: 60,
                aspectRatio: 1.2,
                legend: {
                    display: false
                },
                layout: {
                    padding: {
                        bottom: 2
                    }
                },
                responsive: true,
                maintainAspectRatio: true,
                plugins: {
                    labels: false
                },
                elements: {
                    center: {
                        text: Tra + '%',
                        color: '#ffffff',
                        fontStyle: 'Poppins',
                        sidePadding: 20,
                        minFontSize: 12,
                        lineHeight: 25
                    }
                },
                tooltips: {
                        enabled: false
                }
            }
        });
        
        // CHART 1
        
        var dbOrg = clean(JSON.parse('<?php echo $org_yearly; ?>'));
        var dbTrain = clean(JSON.parse('<?php echo $tra_yearly; ?>'));
        if (dbOrg[0]["year"] !=  dbOrg[dbOrg.length-1]["year"]){
            $("span.case").text(dbOrg[0]["year"] + "-" + dbOrg[dbOrg.length-1]["year"]); 
        }
                    
        let orgtraining_years = [];
        let orgtraining_values_org = [];
        let orgtraining_values_trn = [];

        try {
            dbOrg.map((item) => {
            orgtraining_years.push(item.year);
            orgtraining_values_org.push(item.value);
            });
            dbTrain.map((item) => {
            orgtraining_values_trn.push(item.value);
            });
        } catch (error) {
            console.log(error);
        }
        
        var orgY = document.getElementById('ctxOrgY').getContext('2d');
        var tempPLabels = [...orgtraining_years];
        var orgMem = [...orgtraining_values_org];
        var trnOrg = [...orgtraining_values_trn];
        var orgYChart = new Chart(orgY, {

                type: 'bar',

                data: {
                    labels: tempPLabels,
                    datasets: [{
                        label: 'Organization Members',
                        backgroundColor: '#17256b',    // COLOR 1
                        borderColor: '#17256b',        // COLOR 1
                        data: orgMem
                    }]
                },

                options: {
                    devicePixelRatio: 3,
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
        
            var trainY = document.getElementById('ctxTrainY').getContext('2d');
            var trainYChart = new Chart(trainY, {

                    type: 'bar',

                    data: {
                        labels: tempPLabels,
                        datasets: [{
                            label: 'Attended Training',
                            backgroundColor: '#17256b',    // COLOR 1
                            borderColor: '#17256b',        // COLOR 1
                            data: orgtraining_values_trn
                        }]
                    },

                    options: {
                        devicePixelRatio: 3,
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

    <!-- FARM PRACTICES CHARTS -->

    <script>
        // var sidebarjs = new SidebarJS.SidebarElement();
        Chart.pluginService.register({
            beforeDraw: function(chart) {
                if (chart.config.options.elements.center) {
                    // Get ctx from string
                    var ctx = chart.chart.ctx;

                    // Get options from the center object in options
                    var centerConfig = chart.config.options.elements.center;
                    var fontStyle = centerConfig.fontStyle || 'Arial';
                    var txt = centerConfig.text;
                    var color = centerConfig.color || '#000';
                    var maxFontSize = centerConfig.maxFontSize || 75;
                    var sidePadding = centerConfig.sidePadding || 20;
                    var sidePaddingCalculated = (sidePadding / 100) * (chart.innerRadius * 2)
                    // Start with a base font of 30px
                    ctx.font = "30px " + fontStyle;

                    // Get the width of the string and also the width of the element minus 10 to give it 5px side padding
                    var stringWidth = ctx.measureText(txt).width;
                    var elementWidth = (chart.innerRadius * 2) - sidePaddingCalculated;

                    // Find out how much the font can grow in width.
                    var widthRatio = elementWidth / stringWidth;
                    var newFontSize = Math.floor(30 * widthRatio);
                    var elementHeight = (chart.innerRadius * 2);

                    // Pick a new font size so it will not be larger than the height of label.
                    var fontSizeToUse = Math.min(newFontSize, elementHeight, maxFontSize);
                    var minFontSize = centerConfig.minFontSize;
                    var lineHeight = centerConfig.lineHeight || 25;
                    var wrapText = false;

                    if (minFontSize === undefined) {
                        minFontSize = 20;
                    }

                    if (minFontSize && fontSizeToUse < minFontSize) {
                        fontSizeToUse = minFontSize;
                        wrapText = true;
                    }

                    // Set font settings to draw it correctly.
                    ctx.textAlign = 'center';
                    ctx.textBaseline = 'middle';
                    var centerX = ((chart.chartArea.left + chart.chartArea.right) / 2);
                    var centerY = ((chart.chartArea.top + chart.chartArea.bottom) / 2);
                    ctx.font = fontSizeToUse + "px " + fontStyle;
                    ctx.fillStyle = color;

                    if (!wrapText) {
                        ctx.fillText(txt, centerX, centerY);
                        return;
                    }

                    var words = txt.split(' ');
                    var line = '';
                    var lines = [];

                    // Break words up into multiple lines if necessary
                    for (var n = 0; n < words.length; n++) {
                        var testLine = line + words[n] + ' ';
                        var metrics = ctx.measureText(testLine);
                        var testWidth = metrics.width;
                        if (testWidth > elementWidth && n > 0) {
                            lines.push(line);
                            line = words[n] + ' ';
                        } else {
                            line = testLine;
                        }
                    }

                    // Move the center up depending on line height and number of lines
                    centerY -= (lines.length / 2) * lineHeight;

                    for (var n = 0; n < lines.length; n++) {
                        ctx.fillText(lines[n], centerX, centerY);
                        centerY += lineHeight;
                    }
                    //Draw text in center
                    ctx.fillText(line, centerX, centerY);
                }
            }
        });

        Chart.defaults.global.responsive = true;
        Chart.defaults.global.tooltips.mode = 'index';
        Chart.defaults.global.tooltips.intersect = false;
        Chart.defaults.global.defaultFontFamily = 'Poppins';
        Chart.defaults.global.defaultFontSize = 12;
        Chart.defaults.global.animation.duration = 3000;

        // CHART 1

        var directDS = JSON.parse('<?php echo $direct_ds['value']; ?>');
        var transDS = JSON.parse('<?php echo $trans_ds['value']; ?>');

        var ctx2 = document.getElementById("ctxDirectDS");
        var myChart2 = new Chart(ctx2, {
            type: 'pie',
            data: {
                datasets: [{
                    data: [directDS, transDS],
                    backgroundColor: [
                        '#2138B7', // COLOR 1
                        '#bcf7ca' // COLOR 2
                    ],
                    borderColor: [
                        '#2138B7', // COLOR 1
                        '#bcf7ca' // COLOR 2
                    ]
                }]
            },
            options: {
                devicePixelRatio: 3,
                cutoutPercentage: 60,
                aspectRatio: 1.5,
                legend: {
                    display: false
                },
                layout: {
                    padding: {
                        bottom: 2
                    }
                },
                responsive: true,
                maintainAspectRatio: true,
                plugins: {
                    labels: false
                },
                elements: {
                    center: {
                        text: directDS + '%',
                        color: '#fff',
                        fontStyle: 'Poppins',
                        sidePadding: 20,
                        minFontSize: 12,
                        lineHeight: 25
                    }
                },
                tooltips: {
                    enabled: false
                }
            }
        });

        var ctx3 = document.getElementById("ctxTransDS");
        var myChart3 = new Chart(ctx3, {
            type: 'pie',
            data: {
                datasets: [{
                    data: [transDS, directDS],
                    backgroundColor: [
                        '#2138B7', // COLOR 1
                        '#bcf7ca' // COLOR 2
                    ],
                    borderColor: [
                        '#2138B7', // COLOR 1
                        '#bcf7ca' // COLOR 2
                    ]
                }]
            },
            options: {
                devicePixelRatio: 3,
                cutoutPercentage: 60,
                aspectRatio: 1.5,
                legend: {
                    display: false
                },
                layout: {
                    padding: {
                        bottom: 2
                    }
                },
                responsive: true,
                maintainAspectRatio: true,
                plugins: {
                    labels: false
                },
                elements: {
                    center: {
                        text: transDS + '%',
                        color: '#fff',
                        fontStyle: 'Poppins',
                        sidePadding: 20,
                        minFontSize: 12,
                        lineHeight: 25
                    }
                },
                tooltips: {
                    enabled: false
                }
            }
        });

        // Top Varieties

        var dbpestAll = JSON.parse('<?php echo $var_all; ?>');

        let farmpractices_years = [];
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
        var tempPLabels = [...farmpractices_years];
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
                devicePixelRatio: 3,
                aspectRatio: 1.5,
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
        
        // Top Fertilizer
        
        var dbpestAll = JSON.parse('<?php echo $fert_all_pr; ?>');

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

        var laborChart2 = document.getElementById('ctxChart1').getContext('2d');
        var tempPLabels = [...years];
        var dfert_all = [...fert_all];
        var dfert_all_labels = [...fert_all_labels];

        var laborChartGroup2 = new Chart(laborChart2, {

            type: 'horizontalBar',

            data: {
                labels: dfert_all_labels,
                datasets: [{
                    label: 'Percent',
                    backgroundColor: '#2138B7', // COLOR 1
                    borderColor: '#2138B7', // COLOR 1
                    data: dfert_all,
                    stack: 'All'
                }]
            },

            options: {
                devicePixelRatio: 3,
                layout: {
                    padding: {
                        left: 28,
                        right: 25
                    }
                },
                aspectRatio: 1.5,
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
            }
        });
        
        // Top Machine
        var dbmachAll = JSON.parse('<?php echo $machine_all; ?>');
    
        let mach_all = [];
        let mach_all_labels = [];

        try {
            dbmachAll.map((item) => {
            mach_all_labels.push(item.label);
            mach_all.push(item.value);
            });
        } catch (error) {
            console.log(error);
        }
                    
        var laborChart3 = document.getElementById('ctxChart2').getContext('2d');
        var tempMLabels = [...years];
        var mfert_all = [...mach_all];
        var mfert_all_labels = [...mach_all_labels];
        
        var laborChartGroup3 = new Chart(laborChart3, {

                type: 'horizontalBar',

                data: {
                    labels: mfert_all_labels,
                    datasets: [{
                        label: 'Percent',
                        backgroundColor: '#2138B7',    // COLOR 1
                        borderColor: '#2138B7',        // COLOR 1
                        data: mfert_all,
                        stack: 'All'
                    }]
                },

                options: {
                    devicePixelRatio: 3,
                    aspectRatio: 1.5,
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

    <!-- SEEDING RATE CHARTS -->
    <script>
        // var sidebarjs = new SidebarJS.SidebarElement();
        Chart.defaults.global.responsive = true;
        Chart.defaults.global.tooltips.mode = 'index';
        Chart.defaults.global.tooltips.intersect = false;
        Chart.defaults.global.defaultFontFamily = 'Poppins';
        Chart.defaults.global.defaultFontSize = 13;
        Chart.defaults.global.animation.duration = 3000;
        Chart.defaults.global.defaultFontColor = "#000000";
        
        // CHART 1
        
        var dbTrans = JSON.parse('<?php echo $trans_yearly_pr_sr; ?>');
        var dbDirect = JSON.parse('<?php echo $direct_yearly_pr_sr; ?>');
                    
        let seedingrate_years = [];
        let seedingrate_values_trans = [];
        let seedingrate_values_direct = [];
        let seedingrate_values_both = [];

        try {
            dbTrans.map((item) => {
            seedingrate_years.push(item.year);
            seedingrate_values_trans.push(item.value);
            });
            dbDirect.map((item) => {
            seedingrate_values_direct.push(item.value);
            });
            // dbBoth.map((item) => {
            // seedingrate_values_both.push(item.value);
            // });
        } catch (error) {
            console.log(error);
        }
        
        var cropestGroup = document.getElementById('seedingrate_ctxChart1').getContext('2d');
        var tempPLabels = [...seedingrate_years];
        var prodOne = [...seedingrate_values_trans];
        var prodTwo = [...seedingrate_values_direct];
        var cropestGroupChart = new Chart(cropestGroup, {

                type: 'line',

                data: {
                    labels: ["1996 WS-1997 DS", "2001 WS-2002 DS", "2006 WS-2007 DS", "2011 WS-2012 DS","2016 WS-2017 DS"],
                    datasets: [{
                        label: 'Transplanting',
                        backgroundColor: '#2138B7',    // COLOR 1
                        borderColor: '#2138B7',        // COLOR 1
                        data: prodOne,
                        fill: false
                    },{
                        label: 'Direct Seeding',
                        backgroundColor: '#FEB043',    // COLOR 1
                        borderColor: '#FEB043',        // COLOR 1
                        data: prodTwo,
                        fill: false
                    }]
                },

                options: {
                    devicePixelRatio: 3,
                    aspectRatio: 2.5,
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
                                suggestedMin: 0,
                                stepSize: 20
                            }
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
                    this.data.datasets.forEach(function(dataset, i){
                        let meta = chartInstance.controller.getDatasetMeta(i);
                        meta.data.forEach(function(bar, index) {
                        let data = dataset.data[index];
                        ctx.fillStyle = '#000000';
                        data = parseInt(data).toLocaleString();
                        ctx.fillText(data, bar._model.x + 0 , bar._model.y + -10);
                        });
                    });
                    }
                } 
                }
            });
    </script>

    <!-- CROPEST CHARTS -->

    <script>
        //  var sidebarjs = new SidebarJS.SidebarElement();
        Chart.pluginService.register({
            beforeDraw: function(chart) {
                if (chart.config.options.elements.center) {
                    // Get ctx from string
                    var ctx = chart.chart.ctx;

                    // Get options from the center object in options
                    var centerConfig = chart.config.options.elements.center;
                    var fontStyle = centerConfig.fontStyle || 'Arial';
                    var txt = centerConfig.text;
                    var color = centerConfig.color || '#000';
                    var maxFontSize = centerConfig.maxFontSize || 75;
                    var sidePadding = centerConfig.sidePadding || 20;
                    var sidePaddingCalculated = (sidePadding / 100) * (chart.innerRadius * 2)
                    // Start with a base font of 30px
                    ctx.font = "30px " + fontStyle;

                    // Get the width of the string and also the width of the element minus 10 to give it 5px side padding
                    var stringWidth = ctx.measureText(txt).width;
                    var elementWidth = (chart.innerRadius * 2) - sidePaddingCalculated;

                    // Find out how much the font can grow in width.
                    var widthRatio = elementWidth / stringWidth;
                    var newFontSize = Math.floor(30 * widthRatio);
                    var elementHeight = (chart.innerRadius * 2);

                    // Pick a new font size so it will not be larger than the height of label.
                    var fontSizeToUse = Math.min(newFontSize, elementHeight, maxFontSize);
                    var minFontSize = centerConfig.minFontSize;
                    var lineHeight = centerConfig.lineHeight || 25;
                    var wrapText = false;

                    if (minFontSize === undefined) {
                        minFontSize = 20;
                    }

                    if (minFontSize && fontSizeToUse < minFontSize) {
                        fontSizeToUse = minFontSize;
                        wrapText = true;
                    }

                    // Set font settings to draw it correctly.
                    ctx.textAlign = 'center';
                    ctx.textBaseline = 'middle';
                    var centerX = ((chart.chartArea.left + chart.chartArea.right) / 2);
                    var centerY = ((chart.chartArea.top + chart.chartArea.bottom) / 2);
                    ctx.font = fontSizeToUse + "px " + fontStyle;
                    ctx.fillStyle = color;

                    if (!wrapText) {
                        ctx.fillText(txt, centerX, centerY);
                        return;
                    }

                    var words = txt.split(' ');
                    var line = '';
                    var lines = [];

                    // Break words up into multiple lines if necessary
                    for (var n = 0; n < words.length; n++) {
                        var testLine = line + words[n] + ' ';
                        var metrics = ctx.measureText(testLine);
                        var testWidth = metrics.width;
                        if (testWidth > elementWidth && n > 0) {
                            lines.push(line);
                            line = words[n] + ' ';
                        } else {
                            line = testLine;
                        }
                    }

                    // Move the center up depending on line height and number of lines
                    centerY -= (lines.length / 2) * lineHeight;

                    for (var n = 0; n < lines.length; n++) {
                        ctx.fillText(lines[n], centerX, centerY);
                        centerY += lineHeight;
                    }
                    //Draw text in center
                    ctx.fillText(line, centerX, centerY);
                }
            }
        });
            Chart.defaults.global.responsive = true;
            Chart.defaults.global.tooltips.mode = 'index';
            Chart.defaults.global.tooltips.intersect = false;
            Chart.defaults.global.defaultFontFamily = 'Poppins';
            Chart.defaults.global.defaultFontSize = 13;
            Chart.defaults.global.animation.duration = 3000;
            Chart.defaults.global.defaultFontColor = "#000000";
            
            // CHART 1
            
            var dbTrans = JSON.parse('<?php echo $trans_yearly_pr_cp; ?>');
            var dbDirect = JSON.parse('<?php echo $direct_yearly_pr_cp; ?>');
                        
            let cropest_years = [];
            let cropest_values_trans = [];
            let cropest_values_trans_ds = [];
            let cropest_values_direct = [];
            let cropest_values_direct_ds = [];
            let cropest_values_both = [];

            try {
              for (let i = 0; i < dbTrans.length; i++){
                cropest_years.push(dbTrans[i].year);
                  if(i % 2 == 0) {
                    cropest_values_trans.push(dbTrans[i].value);
                  }
                  else{
                    cropest_values_trans_ds.push(dbTrans[i].value);
                  }
              }
              for (let i = 0; i < dbDirect.length; i++){
                cropest_years.push(dbDirect[i].year);
                  if(i % 2 == 0) {
                    cropest_values_direct.push(dbDirect[i].value);
                  }
                  else{
                    cropest_values_direct_ds.push(dbDirect[i].value);
                  }
              }
            } catch (error) {
              console.log(error);
            }
            
    
            var cropestGroup = document.getElementById('cropest_ctxChart1').getContext('2d');
            var tempPLabels = [...cropest_years];
            var prodOne = [...cropest_values_trans];
            var prodOne_DS = [...cropest_values_trans_ds];
            var prodTwo = [...cropest_values_direct];
            var prodTwo_DS = [...cropest_values_direct_ds];
            var prodThree = [...cropest_values_both];
            
            var cropestGroupChart = new Chart(cropestGroup, {

                    type: 'bar',

                    data: {
                        labels: ["1996 WS", "2001 WS", "2006 WS", "2011 WS", "2016 WS"],
                        datasets: [{
                            label: 'Transplanting',
                            backgroundColor: '#2138B7',    // COLOR 1
                            borderColor: '#2138B7',        // COLOR 1
                            data: prodOne
                        },{
                            label: 'Direct Seeding',
                            backgroundColor: '#FEB043',    // COLOR 1
                            borderColor: '#FEB043',        // COLOR 1
                            data: prodTwo
                        }]
                    },

                    options: {
                        devicePixelRatio: 3,
                        aspectRatio: 1.75,
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
            
            var cropestGroup1 = document.getElementById('cropest_ctxChart2').getContext('2d');
            var cropestGroupChart1 = new Chart(cropestGroup1, {

                    type: 'bar',

                    data: {
                        labels: ["1997 DS", "2002 DS", "2007 DS", "2012 DS", "2017 DS"],
                        datasets: [{
                            label: 'Transplanting',
                            backgroundColor: '#2138B7',    // COLOR 1
                            borderColor: '#2138B7',        // COLOR 1
                            data: prodOne_DS
                        },{
                            label: 'Direct Seeding',
                            backgroundColor: '#FEB043',    // COLOR 1
                            borderColor: '#FEB043',        // COLOR 1
                            data: prodTwo_DS
                        }]
                    },

                    options: {
                        devicePixelRatio: 3,
                        aspectRatio: 1.75,
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
       
        // CHART 1
        
        var directWS = JSON.parse('<?php echo $direct_all_pr_cp['value']; ?>');
        var transWS = JSON.parse('<?php echo $trans_all_pr_cp['value']; ?>');
        var directDS = JSON.parse('<?php echo $direct_ds['value']; ?>');
        var transDS = JSON.parse('<?php echo $trans_ds['value']; ?>');

        var ctx = document.getElementById("cropest_ctxDirectWS");
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                datasets: [{
                    data: [directWS, transWS],
                    backgroundColor: [
                        '#33521d', // COLOR 1
                        '#bcf7ca' // COLOR 2
                    ],
                    borderColor: [
                        '#33521d', // COLOR 1
                        '#bcf7ca' // COLOR 2
                    ]
                }]
            },
            options: {
                devicePixelRatio: 3,
                cutoutPercentage: 60,
                aspectRatio: 2,
                legend: {
                    display: false
                },
                layout: {
                    padding: {
                      bottom: 2
                    }
                },
                responsive: true,
                maintainAspectRatio: true,
                plugins: {
                    labels: false
                },
                elements: {
                    center: {
                        text: directWS + '%',
                        color: '#fff',
                        fontStyle: 'Poppins',
                        sidePadding: 20,
                        minFontSize: 12,
                        lineHeight: 25
                    }
                },
                tooltips: {
                     enabled: false
                }
            }
        }); 
        
         var ctx1 = document.getElementById("cropest_ctxTransWS");
         var myChart1 = new Chart(ctx1, {
            type: 'pie',
            data: {
                datasets: [{
                    data: [transWS, directWS],
                    backgroundColor: [
                        '#33521d', // COLOR 1
                        '#bcf7ca' // COLOR 2
                    ],
                    borderColor: [
                        '#33521d', // COLOR 1
                        '#bcf7ca' // COLOR 2
                    ]
                }]
            },
            options: {
                devicePixelRatio: 3,
                cutoutPercentage: 60,
                aspectRatio: 2,
                legend: {
                    display: false
                },
                layout: {
                    padding: {
                      bottom: 2
                    }
                },
                responsive: true,
                maintainAspectRatio: true,
                plugins: {
                    labels: false
                },
                elements: {
                    center: {
                        text: transWS + '%',
                        color: '#fff',
                        fontStyle: 'Poppins',
                        sidePadding: 20,
                        minFontSize: 12,
                        lineHeight: 25
                    }
                },
                tooltips: {
                     enabled: false
                }
            }
        }); 
        
        var ctx2 = document.getElementById("cropest_ctxDirectDS");
        var myChart2 = new Chart(ctx2, {
            type: 'pie',
            data: {
                datasets: [{
                    data: [directDS, transDS],
                    backgroundColor: [
                        '#33521d', // COLOR 1
                        '#bcf7ca' // COLOR 2
                    ],
                    borderColor: [
                        '#33521d', // COLOR 1
                        '#bcf7ca' // COLOR 2
                    ]
                }]
            },
            options: {
                devicePixelRatio: 3,
                cutoutPercentage: 60,
                aspectRatio: 2,
                legend: {
                    display: false
                },
                layout: {
                    padding: {
                      bottom: 2
                    }
                },
                responsive: true,
                maintainAspectRatio: true,
                plugins: {
                    labels: false
                },
                elements: {
                    center: {
                        text: directDS + '%',
                        color: '#fff',
                        fontStyle: 'Poppins',
                        sidePadding: 20,
                        minFontSize: 12,
                        lineHeight: 25
                    }
                },
                tooltips: {
                     enabled: false
                }
            }
        }); 
        
        var ctx3 = document.getElementById("cropest_ctxTransDS");
         var myChart3 = new Chart(ctx3, {
            type: 'pie',
            data: {
                datasets: [{
                    data: [transDS, directDS],
                    backgroundColor: [
                        '#33521d', // COLOR 1
                        '#bcf7ca' // COLOR 2
                    ],
                    borderColor: [
                        '#33521d', // COLOR 1
                        '#bcf7ca' // COLOR 2
                    ]
                }]
            },
            options: {
                devicePixelRatio: 3,
                cutoutPercentage: 60,
                aspectRatio: 2,
                legend: {
                    display: false
                },
                layout: {
                    padding: {
                      bottom: 2
                    }
                },
                responsive: true,
                maintainAspectRatio: true,
                plugins: {
                    labels: false
                },
                elements: {
                    center: {
                        text: transDS + '%',
                        color: '#fff',
                        fontStyle: 'Poppins',
                        sidePadding: 20,
                        minFontSize: 12,
                        lineHeight: 25
                    }
                },
                tooltips: {
                     enabled: false
                }
            }
        });
    </script>

    <!-- LABOR CHARTS -->

    <script>
        // var sidebarjs = new SidebarJS.SidebarElement();
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
                    
        let labor_years = [];
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
                    
        var laborChart = document.getElementById('labor_ctxChart1').getContext('2d');
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
                    devicePixelRatio: 3,
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

    <!-- SEED CLASS CHARTS -->

    <script>
        // var sidebarjs = new SidebarJS.SidebarElement();
        Chart.defaults.global.responsive = true;
        Chart.defaults.global.tooltips.mode = 'index';
        Chart.defaults.global.tooltips.intersect = false;
        Chart.defaults.global.defaultFontFamily = 'Poppins';
        Chart.defaults.global.defaultFontSize = 13;
        Chart.defaults.global.animation.duration = 3000;
        Chart.defaults.global.defaultFontColor = "#000000";
        
        // CHART 1
        
        var dbHy = JSON.parse('<?php echo $hy_yearly; ?>');
        var dbHq = JSON.parse('<?php echo $hq_yearly; ?>');
        var dbGs = JSON.parse('<?php echo $gs_yearly; ?>');
        var dbFs = JSON.parse('<?php echo $gf_yearly; ?>');
                    
        let seedclass_years = [];
        let seedclass_values_hy = [];
        let seedclass_values_hy_ds = [];
        let seedclass_values_hq = [];
        let seedclass_values_hq_ds = [];
        let seedclass_values_gs = [];
        let seedclass_values_fs_ds = [];
        let seedclass_values_fs = [];

        
        try {
            for (let i = 0; i < dbHy.length; i++){
                seedclass_years.push(dbHy[i].year);
                if(i % 2 == 0) {
                seedclass_values_hy.push(dbHy[i].value);
                }
                else{
                seedclass_values_hy_ds.push(dbHy[i].value);
                }
            }
            for (let i = 0; i < dbHq.length; i++){
                if(i % 2 == 0) {
                seedclass_values_hq.push(dbHq[i].value);
                }
                else{
                seedclass_values_hq_ds.push(dbHq[i].value);
                }
            }
            for (let i = 0; i < dbFs.length; i++){
                if(i % 2 == 0) {
                seedclass_values_fs.push(dbFs[i].value);
                }
                else{
                seedclass_values_fs_ds.push(dbFs[i].value);
                }
            };
        } catch (error) {
            console.log(error);
        }
        
        var sclassGroup = document.getElementById('seedclass_ctxChart1').getContext('2d');
        var tempPLabels = [...seedclass_years];
        var prodOne = [...seedclass_values_hy];
        var prodOne_DS = [...seedclass_values_hy_ds];
        var prodTwo = [...seedclass_values_hq];
        var prodTwo_DS = [...seedclass_values_hq_ds];
        var prodFour = [...seedclass_values_fs];
        var prodFour_DS = [...seedclass_values_fs_ds];
        var sclassChart = new Chart(sclassGroup, {

                type: 'bar',

                data: {
                    labels: ["1996 WS", "2001 WS", "2006 WS", "2011 WS", "2016 WS"],
                    datasets: [{
                        label: 'Hybrid',
                        backgroundColor: '#2138B7',    // COLOR 1
                        borderColor: '#2138B7',        // COLOR 1
                        data: prodOne
                    },{
                        label: 'High Quality Inbred',
                        backgroundColor: '#FEB043',    // COLOR 1
                        borderColor: '#FEB043',        // COLOR 1
                        data: prodTwo
                    },{
                        label: 'Farmers Seeds',
                        backgroundColor: '#7FFE00',    // COLOR 1
                        borderColor: '#7FFE00',        // COLOR 1
                        data: prodFour
                    }]
                },

                options: {
                    devicePixelRatio: 3,
                    aspectRatio: 1.75,
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
                    },
                    tooltips: {
                        callbacks: {
                            label: function(tooltipItem, data) {
                                var label = data.datasets[tooltipItem.datasetIndex].label || '';

                                if (label) {
                                    label += ': ';
                                }
                                label += isNaN(tooltipItem.yLabel) ? '0' : tooltipItem.yLabel;
                                return label;
                            }
                        }
                    }
                }
            });

            var sclassGroup1 = document.getElementById('seedclass_ctxChart2').getContext('2d');
            var sclassChart1 = new Chart(sclassGroup1, {

            type: 'bar',

            data: {
                labels: ["1997 DS", "2002 DS", "2007 DS", "2012 DS", "2017 DS"],
                datasets: [{
                    label: 'Hybrid',
                    backgroundColor: '#2138B7',    // COLOR 1
                    borderColor: '#2138B7',        // COLOR 1
                    data: prodOne_DS
                },{
                    label: 'High Quality Inbred',
                    backgroundColor: '#FEB043',    // COLOR 1
                    borderColor: '#FEB043',        // COLOR 1
                    data: prodTwo_DS
                },{
                    label: 'Farmers Seeds',
                    backgroundColor: '#7FFE00',    // COLOR 1
                    borderColor: '#7FFE00',        // COLOR 1
                    data: prodFour_DS
                }]
            },

            options: {
                devicePixelRatio: 3,
                aspectRatio: 1.75,
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
                },
                tooltips: {
                    callbacks: {
                        label: function(tooltipItem, data) {
                            var label = data.datasets[tooltipItem.datasetIndex].label || '';

                            if (label) {
                                label += ': ';
                            }
                            label += isNaN(tooltipItem.yLabel) ? '0' : tooltipItem.yLabel;
                            return label;
                        }
                    }
                }
            }
        });
    </script>

    <!-- FERT USAGE CHARTS -->

    <script>
        // var sidebarjs = new SidebarJS.SidebarElement();
        Chart.defaults.global.responsive = true;
        Chart.defaults.global.tooltips.mode = 'index';
        Chart.defaults.global.tooltips.intersect = false;
        Chart.defaults.global.defaultFontFamily = 'Poppins';
        Chart.defaults.global.defaultFontSize = 13;
        Chart.defaults.global.animation.duration = 3000;
        Chart.defaults.global.defaultFontColor = "#000000";
        
        // CHART 1
        
        var dbN = JSON.parse('<?php echo $n_yearly; ?>');
        var dbP = JSON.parse('<?php echo $p_yearly; ?>');
        var dbK = JSON.parse('<?php echo $k_yearly; ?>');
                    
        let fertusage_years = [];
        let fertusage_values_n = [];
        let fertusage_values_n_ds = [];
        let fertusage_values_p = [];
        let fertusage_values_p_ds = [];
        let fertusage_values_k = [];
        let fertusage_values_k_ds = [];
    
        try {
            for (let i = 0; i < dbN.length; i++){
                fertusage_years.push(dbN[i].year);
                if(i % 2 == 0) {
                fertusage_values_n.push(dbN[i].value);
                }
                else{
                fertusage_values_n_ds.push(dbN[i].value);
                }
            }
            for (let i = 0; i < dbP.length; i++){
                fertusage_years.push(dbP[i].year);
                if(i % 2 == 0) {
                fertusage_values_p.push(dbP[i].value);
                }
                else{
                fertusage_values_p_ds.push(dbP[i].value);
                }
            }
            for (let i = 0; i < dbK.length; i++){
                fertusage_years.push(dbK[i].year);
                if(i % 2 == 0) {
                fertusage_values_k.push(dbK[i].value);
                }
                else{
                fertusage_values_k_ds.push(dbK[i].value);
                }
            }
        } catch (error) {
            console.log(error);
        }

        var fertGroup = document.getElementById('fertusage_ctxChart1').getContext('2d');
        var tempPLabels = [...fertusage_years];
        var prodOne = [...fertusage_values_n];
        var prodOne_DS = [...fertusage_values_n_ds];
        var prodTwo = [...fertusage_values_p];
        var prodTwo_DS = [...fertusage_values_p_ds];
        var prodThree = [...fertusage_values_k];
        var prodThree_DS = [...fertusage_values_k_ds];
        var fertGroupChart = new Chart(fertGroup, {

                type: 'bar',

                data: {
                    labels: ["1996 WS", "2001 WS", "2006 WS", "2011 WS", "2016 WS"],
                    datasets: [{
                        label: 'Nitrogen',
                        backgroundColor: '#2138B7',    // COLOR 1
                        borderColor: '#2138B7',        // COLOR 1
                        data: prodOne
                    },{
                        label: 'Phosphorus',
                        backgroundColor: '#FEB043',    // COLOR 1
                        borderColor: '#FEB043',        // COLOR 1
                        data: prodTwo
                    },{
                        label: 'Potassium',
                        backgroundColor: '#7FFE00',    // COLOR 1
                        borderColor: '#7FFE00',        // COLOR 1
                        data: prodThree
                    }]
                },

                options: {
                    devicePixelRatio: 3,
                    aspectRatio: 1.75,
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
                                suggestedMin: 0,
                                stepSize: 20
                            }
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
                    this.data.datasets.forEach(function(dataset, i){
                        let meta = chartInstance.controller.getDatasetMeta(i);
                        meta.data.forEach(function(bar, index) {
                        let data = dataset.data[index];
                        ctx.fillStyle = '#000000';
                        data = parseFloat(data).toFixed(0).toLocaleString();
                        ctx.fillText(data, bar._model.x + 0 , bar._model.y + -5);
                        });
                    });
                    }
                } 
                }
            });
    
        var fertGroup1 = document.getElementById('fertusage_ctxChart2').getContext('2d');
        var fertGroupChart1 = new Chart(fertGroup1, {

                type: 'bar',

                data: {
                    labels: ["1997 DS", "2002 DS", "2007 DS", "2012 DS", "2017 DS"],
                    datasets: [{
                        label: 'Nitrogen',
                        backgroundColor: '#2138B7',    // COLOR 1
                        borderColor: '#2138B7',        // COLOR 1
                        data: prodOne_DS
                    },{
                        label: 'Phosphorus',
                        backgroundColor: '#FEB043',    // COLOR 1
                        borderColor: '#FEB043',        // COLOR 1
                        data: prodTwo_DS
                    },{
                        label: 'Potassium',
                        backgroundColor: '#7FFE00',    // COLOR 1
                        borderColor: '#7FFE00',        // COLOR 1
                        data: prodThree_DS
                    }]
                },

                options: {
                    devicePixelRatio: 3,
                    aspectRatio: 1.75,
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
                                suggestedMin: 0,
                                stepSize: 20
                            }
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
                    this.data.datasets.forEach(function(dataset, i){
                        let meta = chartInstance.controller.getDatasetMeta(i);
                        meta.data.forEach(function(bar, index) {
                        let data = dataset.data[index];
                        ctx.fillStyle = '#000000';
                        data = parseFloat(data).toFixed(0).toLocaleString();
                        ctx.fillText(data, bar._model.x + 0 , bar._model.y + -5);
                        });
                    });
                    }
                } 
                }
            });
    </script>

    <!-- VARIETIES CHARTS -->

    <script>
        // var sidebarjs = new SidebarJS.SidebarElement();
        Chart.defaults.global.responsive = true;
        Chart.defaults.global.tooltips.mode = 'index';
        Chart.defaults.global.tooltips.intersect = false;
        Chart.defaults.global.defaultFontFamily = 'Poppins';
        Chart.defaults.global.defaultFontSize = 13;
        Chart.defaults.global.animation.duration = 3000;
        Chart.defaults.global.defaultFontColor = "#000000";

        var dbpestAll = JSON.parse('<?php echo $var_all; ?>');

        let variety_years = [];
        let variety_var_all = [];
        let variety_var_all_labels = [];

        try {
            dbpestAll.map((item) => {
                variety_var_all_labels.push(item.label);
                variety_var_all.push(item.value);
            });
        } catch (error) {
            console.log(error);
        }

        var laborChart = document.getElementById('variety_ctxChart1-v').getContext('2d');
        var tempPLabels = [...variety_years];
        var dvar_all = [...variety_var_all];
        var dvar_all_labels = [...variety_var_all_labels];

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
                devicePixelRatio: 3,
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
        
        // var dbpestPRRI = JSON.parse('<?php echo $var_prri; ?>');

        // let variety_yearsP = [];
        // let variety_var_allP = [];
        // let variety_var_all_labelsP = [];

        // try {
        //     dbpestPRRI.map((item) => {
        //         variety_var_all_labelsP.push(item.label);
        //         variety_var_allP.push(item.value);
        //     });
        // } catch (error) {
        //     console.log(error);
        // }

        // var laborChart2 = document.getElementById('variety_ctxChart2-v').getContext('2d');
        // var tempPLabelsP = [...variety_yearsP];
        // var dvar_allP = [...variety_var_allP];
        // var dvar_all_labelsP = [...variety_var_all_labelsP];

        // var laborChartGroup2 = new Chart(laborChart2, {

        //     type: 'horizontalBar',

        //     data: {
        //         labels: dvar_all_labelsP,
        //         datasets: [{
        //             label: 'Percent',
        //             backgroundColor: '#2138B7', // COLOR 1
        //             borderColor: '#2138B7', // COLOR 1
        //             data: dvar_allP,
        //             stack: 'All'
        //         }]
        //     },

        //     options: {
        //         aspectRatio: 2.5,
        //         scales: {
        //             xAxes: [{
        //                 display: false,
        //                 ticks: {
        //                     suggestedMin: 0,
        //                     suggestedMax: 40
        //                 }
        //             }],
        //             yAxes: [{
        //                 display: true,
        //                 gridLines: {
        //                     color: "rgba(0, 0, 0, 0)"
        //                 },
        //                 position: 'left'
        //             }]
        //         },
        //         legend: {
        //             display: false,
        //         },
        //         tooltips: false,
        //         hover: {
        //             animationDuration: 0
        //         },
        //         animation: {
        //             duration: 0,
        //             onComplete: function() {
        //                 let chartInstance = this.chart,
        //                     ctx = chartInstance.ctx;

        //                 ctx.textAlign = 'center';
        //                 ctx.textBaseline = 'bottom';
        //                 // ctx.font = ctx.font.replace(/\d+px/, "7px");
        //                 this.data.datasets.forEach(function(dataset, i) {
        //                     let meta = chartInstance.controller.getDatasetMeta(i);
        //                     meta.data.forEach(function(bar, index) {
        //                         let data = parseFloat(dataset.data[index]).toFixed(0) + "%";
        //                         ctx.fillText(data, bar._model.x + 20, bar._model.y + 8);
        //                     });
        //                 });
        //             }
        //         }
        //     }
        // });
    </script>

    <!-- ADOPTION RATE CHARTS -->

    <script>
        // var sidebarjs = new SidebarJS.SidebarElement();
        Chart.defaults.global.responsive = true;
        Chart.defaults.global.tooltips.mode = 'index';
        Chart.defaults.global.tooltips.intersect = false;
        Chart.defaults.global.defaultFontFamily = 'Poppins';
        Chart.defaults.global.defaultFontSize = 13;
        Chart.defaults.global.animation.duration = 3000;
        Chart.defaults.global.defaultFontColor = "#000000";

        // let adoptionrate_years = [];
        // let adoptionrate_pest_all = [];
        // let adoptionrate_pest_all_labels = [];

        // try {
        //     dbpestAll.map((item) => {
        //         adoptionrate_pest_all_labels.push(item.tech);
        //         adoptionrate_pest_all.push(item.value);
        //     });
        // } catch (error) {
        //     console.log(error);
        // }

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

        var lChart = document.getElementById('adoptionrate_ctxChart2').getContext('2d');
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
                devicePixelRatio: 3,
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

        var cChart = document.getElementById('adoptionrate_ctxChart3').getContext('2d');
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
                devicePixelRatio: 3,
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

        var hChart = document.getElementById('adoptionrate_ctxChart4').getContext('2d');
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
                devicePixelRatio: 3,
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

        var wChart = document.getElementById('adoptionrate_ctxChart5').getContext('2d');
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
                devicePixelRatio: 3,
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

        var pChart = document.getElementById('adoptionrate_ctxChart6').getContext('2d');
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
                devicePixelRatio: 3,
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

        var hhChart = document.getElementById('adoptionrate_ctxChart7').getContext('2d');
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
                devicePixelRatio: 3,
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

        var oChart = document.getElementById('adoptionrate_ctxChart8').getContext('2d');
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
                devicePixelRatio: 3,
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

    <!-- FERTILIZER APP CHARTS -->

    <script>
        // var sidebarjs = new SidebarJS.SidebarElement();
        Chart.defaults.global.responsive = true;
        Chart.defaults.global.tooltips.mode = 'index';
        Chart.defaults.global.tooltips.intersect = false;
        Chart.defaults.global.defaultFontFamily = 'Poppins';
        Chart.defaults.global.defaultFontSize = 13;
        Chart.defaults.global.animation.duration = 3000;
        Chart.defaults.global.defaultFontColor = "#000000";
                
        var dbpestAll = JSON.parse('<?php echo $fert_all_pr_fa; ?>');
        
        let fertilizerapp_years = [];
        let fertilizerapp_fert_all = [];
        let fertilizerapp_fert_all_labels = [];

        try {
            dbpestAll.map((item) => {
            fertilizerapp_fert_all_labels.push(item.label);
            fertilizerapp_fert_all.push(item.value);
            });
        } catch (error) {
            console.log(error);
        }
                    
        var laborChart = document.getElementById('fertilizerapp_ctxChart1').getContext('2d');
        var tempPLabels = [...fertilizerapp_years];
        var dfert_all = [...fertilizerapp_fert_all];
        var dfert_all_labels = [...fertilizerapp_fert_all_labels];
        
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
                    devicePixelRatio: 3,
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

    <!-- PESTICIDES CHARTS -->

    <script>
        // var sidebarjs = new SidebarJS.SidebarElement();
        Chart.defaults.global.responsive = true;
        Chart.defaults.global.tooltips.mode = 'index';
        Chart.defaults.global.tooltips.intersect = false;
        Chart.defaults.global.defaultFontFamily = 'Poppins';
        Chart.defaults.global.defaultFontSize = 13;
        Chart.defaults.global.animation.duration = 3000;
        Chart.defaults.global.defaultFontColor = "#000000";

        // CHART 1

        var dbPest = JSON.parse('<?php echo $pest_all_pp; ?>');
        
        let pesticide_years = [];
        let pesticide_values_h = [];
        let pesticide_values_h_labels = [];
        let pesticide_values_i = [];
        let pesticide_values_i_labels = [];
        let pesticide_values_f = [];
        let pesticide_values_f_labels = [];
        let pesticide_values_o = [];
        let pesticide_values_o_labels = [];

        
        try {
              for (let i = 0; i < dbPest.length; i++){
                  pesticide_years.push(dbPest[i].year);
                  switch(dbPest[i].type) {
                      case 'H': {
                          pesticide_values_h_labels.push(dbPest[i].label);
                          pesticide_values_h.push(parseInt(dbPest[i].value));
                          break;
                      }
                      case 'I': {
                          pesticide_values_i_labels.push(dbPest[i].label);
                          pesticide_values_i.push(parseInt(dbPest[i].value));
                          break;
                      }
                      case 'F': {
                          pesticide_values_f_labels.push(dbPest[i].label);
                          pesticide_values_f.push(parseInt(dbPest[i].value));
                          break;
                      }
                      case 'O': {
                          pesticide_values_o_labels.push(dbPest[i].label);
                          pesticide_values_o.push(parseInt(dbPest[i].value));
                          break;
                      }
                  }
              }
            } catch (error) {
              console.log(error);
        }
        
        var tempPLabels = [...pesticide_years];
        var herbsL = [...pesticide_values_h_labels];
        var herbs = [...pesticide_values_h];
        var herbs_oth = 100 - (herbs.reduce((a, b) => a + b, 0));
        if(herbs_oth > 0){
            herbsL.push("OTHER HERBICIDES");
            herbs.push(herbs_oth);
        }
        
        var insectL = [...pesticide_values_i_labels];
        var insect = [...pesticide_values_i];
        var insect_oth = 100 - (insect.reduce((a, b) => a + b, 0));
        if(insect_oth > 0){
           insectL.push("OTHER INSECTICIDES");
           insect.push(herbs_oth);
        }
                          
        var fungiL = [...pesticide_values_f_labels];
        var fungi = [...pesticide_values_f];
        var fungi_oth = 100 - (fungi.reduce((a, b) => a + b, 0));
        if(fungi_oth > 0){
           fungiL.push("OTHER FUNGICIDES");
           fungi.push(fungi_oth);
        }
        
        var othL = [...pesticide_values_o_labels];
        var oth = [...pesticide_values_o];
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
                devicePixelRatio: 3,
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
                devicePixelRatio: 3,
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
                devicePixelRatio: 3,
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
                devicePixelRatio: 3,
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

    <!-- MACHINE SOURCE CHARTS -->

    <script>
        // var sidebarjs = new SidebarJS.SidebarElement();
        Chart.defaults.global.responsive = true;
        Chart.defaults.global.tooltips.mode = 'index';
        Chart.defaults.global.tooltips.intersect = false;
        Chart.defaults.global.defaultFontFamily = 'Poppins';
        Chart.defaults.global.defaultFontSize = 13;
        Chart.defaults.global.animation.duration = 3000;
        Chart.defaults.global.defaultFontColor = "#000000";
                
        var dbpestAll = JSON.parse('<?php echo $fert_all_pr_ms; ?>');
        
        let machinesource_years = [];
        let machinesource_fert_all = [];
        let machinesource_fert_all_labels = [];

        try {
            dbpestAll.map((item) => {
            machinesource_fert_all_labels.push(item.label);
            machinesource_fert_all.push(item.value);
            });
        } catch (error) {
            console.log(error);
        }
                    
        var laborChart = document.getElementById('machinesource_ctxChart1').getContext('2d');
        var tempPLabels = [...machinesource_years];
        var dfert_all = [...machinesource_fert_all];
        var dfert_all_labels = [...machinesource_fert_all_labels];
        
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
                    devicePixelRatio: 3,
                    devicePixelRatio: 3,
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

    <!-- END IF -->
    <?php endif; ?>
</body>

</html>
