<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>State of the Rice Sector in the Philippines</title>
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

        function gtag() {
            dataLayer.push(arguments);
        }
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

            i.bi-caret-right-alt {
                background-image: url(../assets/caret.png);
                background-color: transparent;
                background-repeat: no-repeat;
                background-position: 1px 0px;
                border: none;
                cursor: pointer;
                padding-left: 16px;
                margin-left: 0 !important;
                height: 100%;
                top: 41%;
                left: 1px;
                transition: 0.3s;
            }

            .table-success {
                background-color: #ffb380 !important;
                -webkit-print-color-adjust: exact; 
            }

            .table-danger {
                background-color: #c45000 !important;
                -webkit-print-color-adjust: exact; 
            }

            .table-warning {
                background-color: #20979e !important;
                -webkit-print-color-adjust: exact; 
            }


            /* lahat ng h1 sa card */
            .card.primary h1{
                font-size: 35px !important;
                margin-top: -10px !important;
            }

            .card-note p{
                font-size: 10px !important;
            }

            /* lahat ng card sa main */
            .card.primary.main-dashboard{
                height: 90px;
            }

            /* lahat ng card sa RLTX */
            .card.primary{
            height: 105px;
            }

             /* lahat ng secondary card */
             .card.secondary{
                height: 104px;
            }

            .card.secondary.row1{
                height: 90px;
            }

            .card.secondary.row5{
                height: 110px;
            }

            .card.secondary.row3{
                height: 90px;
            }

            .card.secondary.row4{
                height: 108px;
            }

            .card.primary.row5{
                height: 105px;
            }

            /* Size ng lahat ng h6 sa card */
            .card h6 {
                font-family: 'Poppins' !important;
                font-weight: normal;
                font-size: 11px;
            }

            /* Size ng lahat ng h6 sa secondary card */
            .card.secondary h6 {
                font-family: 'Poppins' !important;
                font-weight: normal;
                font-size: 11px !important;
            }

            /* lahat ng h1 sa secondary card */
            .card.secondary h1{
                font-size: 22px !important;
                margin-top: -15px !important;
            }

             /* lahat ng h2 sa secondary card */
             .card.secondary h2{
                font-size: 19px !important;
            }

            /* lahat ng p sa secondary card */
            .card.secondary p{
                margin-top: -1px !important;
            }

            /* Banner h2 size */
            div#main.jumbotron h2{
                font-size: 17px !important;
                margin-top: 0px !important;
            }

            /* Banner h1 size */
            div#main.jumbotron h1{
                font-size: 43px !important;
            }

            /* Banner p size */
            div#main.jumbotron p{
                font-size: 9px !important;
            }

            /* Banner h6 size */
            div#main.jumbotron h6{
                font-size: 9px !important;
            }

            /* SVG DATA MAP */
            svg.datamap{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: auto !important;
                width: 100% !important;
                /* scale(w, h) */
                transform: scale(.8, .6);
                margin-bottom: 120px;
                background-color: #a6d8e1;
            }

            /* FOR LEGEND SIZE */
            .legend-box {
                width: 20px;
                height: 10px;
                margin: 0 10px;
                display: inline-block;
            }

            p#series-1{
                font-size: 9px;
            }

            p#series-2{
                font-size: 9px;
            }

            p#series-3{
                font-size: 9px;
            }

            p#series-4{
                font-size: 9px;
            }

            /* ///////////////////////////// RICE SECTOR //////////////////////////////////// */

            /* Pagresize ng page for printing */
            div.dashboard{
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
                height: 130px !important;
            } */

            /* Resize ng card sa rice area map - prism */
            #card-rice-area-map{
                height: 40px !important;
                text: center;
            }

            /* ani kita image */
            img.d-block.img-fluid.mx-auto{
                width: 150px;
                height: 60px !important;
            }

            /* Rice sector prism card */
            div.card.primary#card-map{
                height: 45px;
            }

            /* rice sector prism image size */
            div.card.mb-0 img {
                width: 322px;
                height: 280px;
            }

            /* p in profitability */
            #prof-p{
                margin-top: 1px !important;
            }

            /* Resize of pie chart in main */
            canvas#ctxAgriShare{
                margin-top: 0px;
                height: 140px !important;
                width: 140px !important;
            }

            /* //////////////////////////// PRODUCTION 1 //////////////////////////////////////////////////////////////////////////////////////////// */

            /* Pagresize ng page for printing */
            div.sublevel#production1{
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
                height: 130px;
            } */

            /* Resize ng chart div */
            div#production1-chart1.card.mb-4{
                height: 470px;
            }

            /* Resize production bar chart*/
            canvas#ctxProdStack{
                display: flex;
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 330px !important;
                width: 100% !important;
                filter: opacity(2) !important;
            }

            /* //////////////////////////////////////////////////// PRODUCTION 2 ///////////////////////////////// */

            /* Pagresize ng page for printing */
            div.sublevel#production2{
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
            div#production2-chartall.card.mb-4{
                height: 700px;
            }

            /* Resize production bar chart*/
            canvas#production_ctxRegional{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 560px !important;
                width: 100% !important;
            }

            /* Prod map chart */
            /* svg.datamap{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: auto !important;
                width: 100% !important;
                transform: scale(.82, .615);
                margin-bottom: 120px;
            } */

            div#phl-reg-production{
                height: auto !important;
                width: 100% !important; 
                margin-top: -180px;
            }

            /* DIV LEGEND AND MAP */
            div#series-prod{
                margin-top: -25px;
            }

            /* //// AREA 1 //// */

            /* Pagresize ng page for printing */
            div.sublevel#area1{
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
            div#area.jumbotron{
                height: 130px;
            }

            /* Resize ng chart div */
            div#area1-chart1.card.mb-4{
                height: 465px;
            }

            /* Resize area bar chart*/
            canvas#ctxAreaStack{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 320px !important;
                width: 100% !important;
            }

            /* //// AREA 2 //// */

            /* Pagresize ng page for printing */
            div.sublevel#area2{
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
            div#area2-chartall.card.mb-4{
                height: 700px;
            }

            /* Resize production bar chart*/
            canvas#area_ctxRegional{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 560px !important;
                width: 100% !important;
            }

            /* Area map chart */
            /* svg.datamap{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: auto !important;
                width: 100% !important;
                transform: scale(.82, .615);
                margin-bottom: 120px;
            } */

            div#phl-reg-area{
                height: auto !important;
                width: 100% !important; 
                margin-top: -178px;
            }

            div#series-area{
                margin-top: -25px;
            }

            /* ////////////////////////////////////// YIELD 1 ////////////////////////////////////////////// */

            /* Pagresize ng page for printing */
            div.sublevel#yield1{
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
                height: 130px;
            } */

            /* Resize ng chart div */
            div#yield1-chart1.card.mb-4{
                height: 465px;
            }

            /* Resize area bar chart*/
            canvas#ctxYieldStack{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 320px !important;
                width: 100% !important;
            }

            /* ///////////////////////////////// YIELD 2 //////////////////////////////////// */

            /* Pagresize ng page for printing */
            div.sublevel#yield2{
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
            div#yield2-chartall.card.mb-4{
                height: 700px;
            }

            /* Resize production bar chart*/
            canvas#yield_ctxRegional{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 560px !important;
                width: 100% !important;
            }

            /* Yield map chart */
            /* svg.datamap{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: auto !important;
                width: 100% !important;
                transform: scale(.82, .615);
                margin-bottom: 120px;
            } */

            div#phl-reg-yield{
                height: auto !important;
                width: 100% !important; 
                margin-top: -178px;
            }

            div#series-yield{
                margin-top: -25px;
            }

            /* //// /////////////////////////////// SUPPLY 1 ///////////////////////////////// */

            /* Pagresize ng page for printing */
            div.sublevel#supply1{
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
            /* div#supply.jumbotron{
                height: 130px;
            } */

            /* Resize ng chart div */
            div#supply1-chart1.card.mb-4{
                height: 470px;
            }

            /* Resize supply line chart*/
            canvas#ctxSupply{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 325px !important;
                width: 100% !important;
            }

            /* ////////////////////////////////// SUPPLY 2 ////////////////////////////////////// */

            /* Pagresize ng page for printing */
            div.sublevel#supply2{
                min-height: 100%;
                max-height: 100%;
                max-width: 100%;
                height: 790px !important;
                width: 100% !important;
                background-size:cover !important;
                background-repeat:no-repeat !important;
                background-position:center center !important;
            }

            /* Resize ng supply2 chart1 div */
            div#supply2-chart1.card.mb-4{
                height: 350px;
            }

            /* Resize ng supply2 chart2 div */
            div#supply2-chart2.card.mb-4{
                height: 360px;
            }

            /* Resize price2 line chart 1*/
            canvas#ctxSupplyStack{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 195px !important;
                width: 100% !important;
            }

            /* Resize price2 line chart 2*/
            canvas#ctxUtilStack{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 200px !important;
                width: 100% !important;
            }

            /* //////////////////////////// CONSUMPTION 1 //////////////////////////////// */

            /* Pagresize ng page for printing */
            div.sublevel#consumption1{
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
            /* div#consumption.jumbotron{
                height: 130px;
            } */

            /* Resize ng chart div */
            div#consumption1-chart1.card.mb-4{
                height: 425px;
            }

            /* Resize ng chart div */
            div#consumption1-chart2.card.mb-4{
                height: 425px;
            }

            /* Resize consumption 1 bar chart 1*/
            canvas#ctxKgCapita{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 230px !important;
                width: 100% !important;
            }

             /* Resize consumption 1 bar chart 2*/
             canvas#ctxGramCapita{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 230px !important;
                width: 100% !important;
            }

            /* /////////////////////////////////////////////////// CONSUMPTION 2 ////////////////////////// */

            /* Pagresize ng page for printing */
            div.sublevel#consumption2{
                min-height: 100%;
                max-height: 100%;
                max-width: 100%;
                height: 790px !important;
                width: 100% !important;
                background-size:cover !important;
                background-repeat:no-repeat !important;
                background-position:center center !important;
            }

            /* Resize ng consumption2 chart1 div */
            div#consumption2-chart1.card.mb-4{
                height: 550px;
            }

            /* Resize price2 line chart 1*/
            canvas#ctxProdFood{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 400px !important;
                width: 100% !important;
            }

            /* //////////////////////////////////// VALUATION 1 //////////////////////////////////////////////// */

            /* Pagresize ng page for printing */
            div.sublevel#valuation1{
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
            /* div#valuation.jumbotron{
                height: 140px;
            } */

            /* resize ng card sa valuation */
            .valuation-card{
                height: 140px !important;
            }

            /* Resize ng chart div */
            div#valuation1-chart2.card.mb-4{
                height: 415px;
            }

            /* Resize valuation 1 chart 1*/
            canvas#ctxAgriSector{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 240px !important;
                width: 100% !important;
                margin-top: -20px;
            }

            /* //////////////////////////////////////////// VALUATION 2 ///////////////////// */

            /* Pagresize ng page for printing */
            div.sublevel#valuation2{
                min-height: 100%;
                max-height: 100%;
                max-width: 100%;
                height: 790px !important;
                width: 100% !important;
                background-size:cover !important;
                background-repeat:no-repeat !important;
                background-position:center center !important;
            }

            /* Resize ng valuation2 chart1 div */
            div#valuation2-chart1.card.mb-4{
                height: 520px;
            }

            /* Resize valuation2 line chart 1*/
            canvas#valuation_ctxAgriShare{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 360px !important;
                width: 100% !important;
            }

            /* /////////////////////////////////////////// INCOME 1 /////////////////////////////////////// */

            /* Pagresize ng page for printing */
            div.sublevel#income1{
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
            div#incomes.jumbotron{
                height: 130px;
            }

            /* Resize ng chart div */
            div#income1-chart1.card.mb-4{
                height: 465px;
            }

            /* Resize income1 bar chart 1*/
            canvas#ctxGrossReturns{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 360px !important;
                width: 100% !important;
            }

            /* /////////////////////////////////// INCOME 2 //////////////////////////////////////////////// */

            /* Pagresize ng page for printing */
            div.sublevel#income2{
                min-height: 100%;
                max-height: 100%;
                max-width: 100%;
                height: 790px !important;
                width: 100% !important;
                background-size:cover !important;
                background-repeat:no-repeat !important;
                background-position:center center !important;
            }

            /* Resize ng income2 chart1 div */
            div#income2-chart1.card.mb-4{
                height: 695px;
            }

            /* Resize income2 bar chart 1*/
            div.col-6 canvas#ctxTopRegions{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 580px !important;
                width: 100% !important;
            }

            /* Resize income2 bar chart 3*/
            div.col-3 canvas#ctxTopRegions2{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 580px !important;
                width: 100% !important;
            }

            /* Resize income2 bar chart 3*/
            div.col-3 canvas#ctxTopRegions3{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 580px !important;
                width: 100% !important;
            }

            /* ///////////////////////////////// INCOME 3 ////////////////////////////////////////// */

            /* Pagresize ng page for printing */
            div.sublevel#income3{
                min-height: 100%;
                max-height: 100%;
                max-width: 100%;
                height: 790px !important;
                width: 100% !important;
                background-size:cover !important;
                background-repeat:no-repeat !important;
                background-position:center center !important;
            }

            /* Resize ng income3 chart1 div */
            div#income3-chart1.card.mb-4{
                height: 700px;
            }

            /* Resize income3 bar chart 1*/
            canvas#ctxWideRegions{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 520px !important;
                width: 100% !important;
            }

            /* Resize income3 bar chart 2*/
            canvas#ctxWideRegions2{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 520px !important;
                width: 100% !important;
            }

            /* Resize income2 bar chart 3*/
            canvas#ctxWideRegions3{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 520px !important;
                width: 100% !important;
            }

            /* //////////////////////////////////// IMPEXPORT 1 ////////////////////////////////////////////// */

            /* Pagresize ng page for printing */
            div.sublevel#impexport1{
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
            /* div#imports.jumbotron{
                height: 130px;
            } */

            /* Resize ng chart 1 div */
            div#impexport1-chart1.card.mb-4{
                height: 470px;
            }

            /* Resize ng chart 1 div */
            div#impexport1-chart2.card.mb-4{
                height: 470px;
            }

            /* Resize impexport1 line chart 1*/
            canvas#ctxImports{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 240px !important;
                width: 100% !important;
            }

            /* Resize impexport1 pie chart 2*/
            canvas#ctxImportSources{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 240px !important;
                width: 100% !important;
            }

            /* ///////////////////////////////////////// IMPEXPORT 2 /////////////////// */

            /* Pagresize ng page for printing */
            div.sublevel#impexport2{
                min-height: 100%;
                max-height: 100%;
                max-width: 100%;
                height: 790px !important;
                width: 100% !important;
                background-size:cover !important;
                background-repeat:no-repeat !important;
                background-position:center center !important;
            }

            /* Resize ng impexport2 chart1 div */
            div#impexport2-chart1.card.mb-4{
                height: 550px;
            }

            /* Resize impexport2 bar chart 1*/
            canvas#ctxImportLocal{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 400px !important;
                width: 100% !important;
            }

            /* /////////////////////////////////////////// STOCK 1 /////////////////////////////////////// */

            /* Pagresize ng page for printing */
            div.sublevel#stock1{
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
            /* div#stock.jumbotron{
                height: 130px;
            } */

            /* Resize ng chart 1 div */
            div#stock1-chart1.card.mb-4{
                height: 490px;
            }

            /* Resize stock1 line chart 2*/
            canvas#ctxStocks{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 350px !important;
                width: 100% !important;
            }

            /* ////////////////////////////////////////// STOCK 2 ////////////////////// */

            /* Pagresize ng page for printing */
            div.sublevel#stock2{
                min-height: 100%;
                max-height: 100%;
                max-width: 100%;
                height: 790px !important;
                width: 100% !important;
                background-size:cover !important;
                background-repeat:no-repeat !important;
                background-position:center center !important;
            }

            /* Resize ng stock2 chart1 div */
            div#stock2-chart1.card.mb-4{
                height: 550px;
            }

            /* Resize stock2 line chart 1*/
            canvas#ctxStocksYear{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 400px !important;
                width: 100% !important;
            }

            /* /////////////////////////////////////// PRICES 1 /////////////////////////////////////// */

            /* Pagresize ng page for printing */
            div.sublevel#price1{
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
            /* div#prices.jumbotron{
                height: 130px;
            } */

             /* resize ng card sa price */
             .price-card{
                height: 145px !important;
            }

            .price-card p.mb-0{
                font-size: 10px !important;
            }

            /* Resize ng chart 1 div */
            div#price1-chart1.card.mb-4{
                height: 425px;
            }

            /* Resize price1 line chart 2*/
            canvas#ctxFarmPrices{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 280px !important;
                width: 100% !important;
            }

            /* /////////////////////////////// PRICES 2 ///////////////////////////// */

            /* Pagresize ng page for printing */
            div.sublevel#price2{
                min-height: 100%;
                max-height: 100%;
                max-width: 100%;
                height: 790px !important;
                width: 100% !important;
                background-size:cover !important;
                background-repeat:no-repeat !important;
                background-position:center center !important;
            }

            /* Resize ng price2 chart1 div */
            div#price2-chart1.card.mb-4{
                height: 345px;
            }

            /* Resize ng price2 chart2 div */
            div#price2-chart2.card.mb-4{
                height: 350px;
            }

            /* Resize price2 line chart 1*/
            canvas#ctxWholesalePrices{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 195px !important;
                width: 100% !important;
            }

            /* Resize price2 line chart 2*/
            canvas#ctxRetailPrices{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 190px !important;
                width: 100% !important;
            }

            /* ///////////////////////////////// YIELDCOST 1 /////////////////////// */

            /* Pagresize ng page for printing */
            div.sublevel#yieldcost1{
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
            div#yieldcost.jumbotron{
                height: 130px;
            }

            /* Resize ng chart div */
            div#yieldcost1-chart1.card.mb-4{
                height: 460px;
            }

            /* Resize yieldcost1 chart 1*/
            canvas#ctxYieldCost{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 285px !important;
                width: 100% !important;
            }

            /* ////////////////////////////////////// YIELDCOST 2 ///////////////////// */

            /* Pagresize ng page for printing */
            div.sublevel#yieldcost2{
                min-height: 100%;
                max-height: 100%;
                max-width: 100%;
                height: 790px !important;
                width: 100% !important;
                background-size:cover !important;
                background-repeat:no-repeat !important;
                background-position:center center !important;
            }

            /* Resize ng yieldcost2 chart1 div */
            div#yieldcost2-chart1.card.mb-4{
                height: 640px;
            }

            /* Resize yieldcost2 chart 1*/
            canvas#ctxBreakdownPh{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 480px !important;
                width: 100% !important;
            }

            /* /////////////////////////////// YIELDCOST 3 ////////////////////// */

             /* Pagresize ng page for printing */
             div.sublevel#yieldcost3{
                min-height: 100%;
                max-height: 100%;
                max-width: 100%;
                height: 790px !important;
                width: 100% !important;
                background-size:cover !important;
                background-repeat:no-repeat !important;
                background-position:center center !important;
            }

            /* Resize ng yieldcost3 chart1 div */
            div#yieldcost3-chart1.card.mb-4{
                height: 700px;
            }

            /* Resize yieldcost2 chart 1*/
            canvas#ctxNPKUse{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 550px !important;
                width: 100% !important;
            }
 
            /* ///////////////////////////////////////////////// PROFILE ////////////////////////////////////////////////////////// */

            div.dashboard.farmer{
                min-height: 100%;
                max-height: 100%;
                max-width: 100%;
                height: 790px !important;
                width: 100% !important;
                background-size:cover !important;
                background-repeat:no-repeat !important;
                background-position:center center !important;
            }

            /* profile card */
            .card.primary.row-w{
                height: 130px !important;
            }

            /* //////////////////////////////////////////// MONTHLY INCOME 1 ///////////////////////////////////////// */

            /* Pagresize ng page for printing */
            div.sublevel#monthlyincome1{
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
                height: 130px;
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
                height: 190px !important;
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

            /* /////////////////////////////////////// MONTHLY INCOME 2 ///////////////////////////////////// */

            /* Pagresize ng page for printing */
            div.sublevel#monthlyincome2{
                min-height: 100%;
                max-height: 100%;
                max-width: 100%;
                height: 790px !important;
                width: 100% !important;
                background-size:cover !important;
                background-repeat:no-repeat !important;
                background-position:center center !important;
            }

            /* Resize ng monthly income 2 table div */
            div#monthlyincome2-table.card.mb-4{
                height: 700px;
            }

            /* table monthly income */
            /* cropted ung table, walang kulay */
            table.monthly-income{
                display: inline-block !important;
                max-height: 500px !important;
                max-width: 100% !important;
                overflow: hidden !important;
            }

            /* ///////////////////////////////////////// SOCIAL 1 ///////////////////////////////////////// */

            /* Pagresize ng page for printing */
            div.sublevel#social1{
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
                height: 130px;
            } */

            /* social 1 pie chart 1 */
            canvas#social_ctxSex{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 80px !important;
                width: 90% !important;
            }

            /* social 1 pie chart 2 */
            canvas#social_ctxCivil{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 80px !important;
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

            /* //////////////////////////////////////// SOCIAL 2 ///////////////////////////////////// */

            /* Pagresize ng page for printing */
            div.sublevel#social2{
                min-height: 100%;
                max-height: 100%;
                max-width: 100%;
                height: 790px !important;
                width: 100% !important;
                background-size:cover !important;
                background-repeat:no-repeat !important;
                background-position:center center !important;
            }

            /* Resize ng social 2 table div */
            div#social2-table.card.mb-4{
                height: 700px;
            }

            /* table social */
            /* cropted ung table, walang kulay */
            table.social-table{
                display: inline-block !important;
                max-height: 480px !important;
                max-width: 100% !important;
                overflow: hidden !important;
            }

            /* //////////////////////////////////////// FARM DETAILS 1 /////////////////////////////////////// */

            /* Pagresize ng page for printing */
            div.sublevel#farmdetail1{
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
                height: 130px;
            } */

            /* farmdetail 1 pie chart 1 */
            canvas#farmdetails_ctxTenStat{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 85px !important;
                width: 90% !important;
            }

            /* Resize ng chart 1 div */
            div#farmdetail1-chart1.card.mb-4{
                height: 435px;
            }

            /* Resize ng chart 2 div */
            div#farmdetail1-chart2.card.mb-4{
                height: 435px;
            }

            /* Resize farmdetail1 chart 1*/
            canvas#ctxFarmSize{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 230px !important;
                width: 100% !important;
            }

            /* Resize farmdetail1 chart 2*/
            canvas#ctxTenStatYear{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 230px !important;
                width: 100% !important;
            }

            /* ////////////////////////////////// FARM DETAILS 2 ///////////////////////////////// */

            /* Pagresize ng page for printing */
            div.sublevel#farmdetail2{
                min-height: 100%;
                max-height: 100%;
                max-width: 100%;
                height: 790px !important;
                width: 100% !important;
                background-size:cover !important;
                background-repeat:no-repeat !important;
                background-position:center center !important;
            }

            /* Resize ng farm details 2 table div */
            div#farmdetail2-table.card.mb-4{
                height: 700px;
            }

            /* table farm details */
            /* cropted ung table, walang kulay */
            table.farmdetail-table{
                display: inline-block !important;
                max-height: 480px !important;
                max-width: 100% !important;
                overflow: hidden !important;
            }

            /* //////////////////////////////////////////// HOUSEHOLD SIZE INCOME 1 /////////////////////////////// */

            /* Pagresize ng page for printing */
            div.sublevel#householdsizeincome1{
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
                height: 130px;
            } */

            /* card sa hhsize */
            .card.primary.hhsize-row{
                height: 130px;
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
                height: 430px;
            }

            /* Resize ng chart 2 div */
            div#householdsizeincome1-chart2.card.mb-4{
                height: 430px;
            }

            /* Resize householdsizeincome1 chart 1*/
            canvas#ctxHhSize{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 250px !important;
                width: 100% !important;
            }

            /* Resize householdsizeincome1 chart 2*/
            canvas#ctxSources{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 250px !important;
                width: 100% !important;
            }

            /* ////////////////////////////////////// HOUSEHOLD SIZE INCOME 2 ////////////////////////////////////////////////// */

            /* Pagresize ng page for printing */
            div.sublevel#householdsizeincome2{
                min-height: 100%;
                max-height: 100%;
                max-width: 100%;
                height: 790px !important;
                width: 100% !important;
                background-size:cover !important;
                background-repeat:no-repeat !important;
                background-position:center center !important;
            }

            /* Resize ng householdsizeincome 2 table div */
            div#householdsizeincome2-table.card.mb-4{
                height: 700px;
            }

            /* table householdsizeincome1 */
            /* cropted ung table, walang kulay */
            table.householdsizeincome-table{
                display: inline-block !important;
                max-height: 480px !important;
                max-width: 100% !important;
                overflow: hidden !important;
            }

            /* /////////////////////////////////////// EDUC FARM EXP 1 ////////////////////////////// */

            /* Pagresize ng page for printing */
            div.sublevel#educfarmexp1{
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
                height: 415px;
            }

            /* Resize ng chart 2 div */
            div#educfarmexp1-chart2.card.mb-4{
                height: 415px;
            }

            /* Resize educfarmexp1 chart 1*/
            canvas#educfarmexp_ctxChart1{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 230px !important;
                width: 100% !important;
            }

            /* Resize educfarmexp1 chart 2*/
            canvas#educfarmexp_ctxChart2{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 230px !important;
                width: 100% !important;
            }

            /* ////////////////////////////////// EDUC FARM EXP 2 /////////////////////////////////// */

            /* Pagresize ng page for printing */
            div.sublevel#educfarmexp2{
                min-height: 100%;
                max-height: 100%;
                max-width: 100%;
                height: 790px !important;
                width: 100% !important;
                background-size:cover !important;
                background-repeat:no-repeat !important;
                background-position:center center !important;
            }

            /* Resize ng educfarmexp 2 table div */
            div#educfarmexp2-table.card.mb-4{
                height: 700px;
            }

            /* table educfarmexp2 */
            /* cropted ung table, walang kulay */
            table.educfarmexp-table{
                display: inline-block !important;
                max-height: 480px !important;
                max-width: 100% !important;
                overflow: hidden !important;
            }

            /* ///////////////////////////// ORG TRAINING 1 /////////////////////////////////////////////////// */

            /* Pagresize ng page for printing */
            div.sublevel#orgtraining1{
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
                height: 130px;
            } */

            /* orgtraining1 1 pie chart 1 */
            canvas#orgtraining_ctxOrg{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 85px !important;
                width: 90% !important;
            }

             /* orgtraining1 1 pie chart 2 */
             canvas#orgtraining_ctxTrain{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 85px !important;
                width: 90% !important;
            }

            /* Resize ng chart 1 div */
            div#orgtaining1-chart1.card.mb-4{
                height: 415px;
            }

            /* Resize ng chart 2 div */
            div#orgtaining1-chart2.card.mb-4{
                height: 415px;
            }

            /* Resize orgtraining1 chart 1*/
            canvas#ctxOrgY{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 235px !important;
                width: 100% !important;
            }

            /* Resize orgtraining1 chart 2*/
            canvas#ctxTrainY{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 235px !important;
                width: 100% !important;
            }

            /* ////////////////////////////// ORG TRAINING 2 //////////////////////// */

            /* Pagresize ng page for printing */
            div.sublevel#orgtraining2{
                min-height: 100%;
                max-height: 100%;
                max-width: 100%;
                height: 790px !important;
                width: 100% !important;
                background-size:cover !important;
                background-repeat:no-repeat !important;
                background-position:center center !important;
            }

            /* Resize ng orgtraining 2 table div */
            div#orgtraining2-table.card.mb-4{
                height: 700px;
            }

            /* table orgtraining2 */
            /* cropted ung table, walang kulay */
            table.orgtraining-table{
                display: inline-block !important;
                max-height: 480px !important;
                max-width: 100% !important;
                overflow: hidden !important;
            }

            /* /////////////////////////////////// FARM PRACTICES ///////////////////////////////////// */

            /* Pagresize ng page for printing */
            div.farming.dashboard{
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
            /* div#farmpractices.jumbotron{
                height: 120px;
            } */

            div.farming.dashboard h1{
                font-size: 27px !important;
            }

            h1#header{
                font-size: 45px !important;
            }

            div.farming.dashboard h1.card-text.text-center.mt-4{
                margin-top: 10px !important;
            }

            div.farming.dashboard h1.smaller.card-text{
                font-size: 25px !important;
            }

            div.farming.dashboard p{
                font-size: 9px !important;
            }

            div.farming.dashboard h5.card-title{
                font-size: 9px !important;
                margin-top: -8px !important;
            }

            div.farming.dashboard h6.card-title{
                font-size: 10px !important;
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
                margin-top: -3px !important;
            }

            /* profarm practicesfile farm practices */
            .card.primary.card-green{
                height: 95px !important;
            }

            /* farm practices card row2 */
            .card.primary.card-row2{
                height: 75px !important;
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

            /* Resize farm practices bar chart 1*/
            canvas#ctxChart1-v{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 150px !important;
                width: 100% !important;
            }

            /* Resize farm practices bar chart 2*/
            canvas#ctxChart1{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 150px !important;
                width: 100% !important;
            }

            div.border.border-light.fp{
                height: 300px !important;
            }

            div.border.border-light.fp h6{
               font-size: 11px !important;
            }

            /* Resize farm practices bar chart 3*/
            canvas#ctxChart2{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 150px !important;
                width: 100% !important;
            }

            /* ////////////////////////////////// SEEDING RATE 1 //////////////////////////////////////////// */

            /* Pagresize ng page for printing */
            div.sublevel#seedingrate1{
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
                height: 130px;
            } */

            /* Resize ng chart 1 div */
            div#seedingrate1-chart1.card.mb-4{
                height: 460px;
            }

            /* Resize seedingrate1 chart 1*/
            canvas#seedingrate_ctxChart1{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 310px !important;
                width: 100% !important;
            }

            /* ///////////////////////////////////////////// SEEDING RATE 2 ////////////////////// */

            /* Pagresize ng page for printing */
            div.sublevel#seedingrate2{
                min-height: 100%;
                max-height: 100%;
                max-width: 100%;
                height: 790px !important;
                width: 100% !important;
                background-size:cover !important;
                background-repeat:no-repeat !important;
                background-position:center center !important;
            }

            /* Resize ng seedingrate2 2 table div */
            div#seedingrate2-table.card.mb-4{
                height: 700px;
            }

            /* table seedingrate2 */
            /* cropted ung table, walang kulay */
            table.seedingrate-table{
                display: inline-block !important;
                max-height: 490px !important;
                max-width: 100% !important;
                overflow: hidden !important;
            }

            /* //////////////////////////////////////// CROPEST 1 ////////////////////////////////// */

            /* Pagresize ng page for printing */
            div.sublevel#cropest1{
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
                height: 130px;
            } */

            /* cropest card */
            .card.primary.cropest-card{
                height: 150px !important;
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
                height: 420px;
            }

            /* Resize ng chart 2 div */
            div#cropest1-chart2.card.mb-4{
                height: 420px;
            }

            /* Resize cropest1 chart 1*/
            canvas#cropest_ctxChart1{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 225px !important;
                width: 100% !important;
            }

            /* Resize cropest1 chart 2*/
            canvas#cropest_ctxChart2{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 225px !important;
                width: 100% !important;
            }

            /* /////////////////////////////// CROPEST 2 //////////////////////////////////// */

            /* Pagresize ng page for printing */
            div.sublevel#cropest2{
                min-height: 100%;
                max-height: 100%;
                max-width: 100%;
                height: 790px !important;
                width: 100% !important;
                background-size:cover !important;
                background-repeat:no-repeat !important;
                background-position:center center !important;
            }

            /* Resize ng cropest 2 table div */
            div#cropest2-table.card.mb-4{
                height: 700px;
            }

            /* table cropest */
            /* cropted ung table, walang kulay */
            table.cropest-table{
                display: inline-block !important;
                max-height: 480px !important;
                max-width: 100% !important;
                overflow: hidden !important;
            }

            /* //// LABOR 1 //// */

            /* Pagresize ng page for printing */
            div.sublevel#labor1{
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
                height: 130px;
            } */

            /* Resize ng chart 1 div */
            div#labor1-chart1.card.mb-4{
                height: 465px;
            }

            /* Resize labor1 chart 1*/
            canvas#labor_ctxChart1{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 310px !important;
                width: 100% !important;
            }

            /* ////////////////////////////////////////// LABOR 2 ////////////////////////////// */

            /* Pagresize ng page for printing */
            div.sublevel#labor2{
                min-height: 100%;
                max-height: 100%;
                max-width: 100%;
                height: 790px !important;
                width: 100% !important;
                background-size:cover !important;
                background-repeat:no-repeat !important;
                background-position:center center !important;
            }

            /* Resize ng labor 2 table div */
            div#labor2-table.card.mb-4{
                height: 700px;
            }

            /* table labor 2 */
            /* cropted ung table, walang kulay */
            table.labor-table{
                display: inline-block !important;
                max-height: 480px !important;
                max-width: 100% !important;
                overflow: hidden !important;
            }

            /* //////////////////////////////////// SEED CLASS 1 /////////////////////////////////// */

            /* Pagresize ng page for printing */
            div.sublevel#seedclass1{
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
                height: 130px;
            } */

            h1.card-text.font-weight-bold.smaller.sc{
                font-size: 33px !important;
            }

            div.row.mt-2.sc{
                margin-top: -5px !important;
            }

            /* Resize ng chart 1 div */
            div#seedclass1-chart1.card.mb-4{
                height: 430px;
            }

            /* Resize ng chart 2 div */
            div#seedclass1-chart2.card.mb-4{
                height: 430px;
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

            /* ///////////////////////////////////////////// SEED CLASS 2 /////////////////////////////////////// */

            /* Pagresize ng page for printing */
            div.sublevel#seedclass2{
                min-height: 100%;
                max-height: 100%;
                max-width: 100%;
                height: 790px !important;
                width: 100% !important;
                background-size:cover !important;
                background-repeat:no-repeat !important;
                background-position:center center !important;
            }

            /* Resize ng seedclass 2 table div */
            div#seedclass2-table.card.mb-4{
                height: 700px;
            }

            /* table seedclass */
            /* cropted ung table, walang kulay */
            table.seedclass-table{
                display: inline-block !important;
                max-height: 500px !important;
                max-width: 100% !important;
                overflow: hidden !important;
            }

            /* ///////////////////////////////// FERT USAGE 1 ///////////////////////////////// */

            /* Pagresize ng page for printing */
            div.sublevel#fertusage1{
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
                height: 130px;
            } */

             /* fert usage card */
             .card.primary.card-fu{
                height: 145px !important;
            }

            /* Resize ng chart 1 div */
            div#fertusage1-chart1.card.mb-4{
                height: 420px;
            }

            /* Resize ng chart 2 div */
            div#fertusage1-chart2.card.mb-4{
                height: 420px;
            }

            /* Resize fertusage1 chart 1*/
            canvas#fertusage_ctxChart1{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 225px !important;
                width: 100% !important;
            }

            /* Resize fertusage1 chart 2*/
            canvas#fertusage_ctxChart2{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 225px !important;
                width: 100% !important;
            }

            /* ///////////////////////////////////////// FERT USAGE 2 //////////////////////////////////////// */

            /* Pagresize ng page for printing */
            div.sublevel#fertusage2{
                min-height: 100%;
                max-height: 100%;
                max-width: 100%;
                height: 790px !important;
                width: 100% !important;
                background-size:cover !important;
                background-repeat:no-repeat !important;
                background-position:center center !important;
            }

            /* Resize ng fertusage 2 table div */
            div#fertusage2-table.card.mb-4{
                height: 700px;
            }

            /* table fertusage */
            /* cropted ung table, walang kulay */
            table.fertusage-table{
                display: inline-block !important;
                max-height: 480px !important;
                max-width: 100% !important;
                overflow: hidden !important;
            }

            /* //////////////////////////////////// VARIETIES 1 //////////////////////////////////////// */

            /* Pagresize ng page for printing */
            div.sublevel#variety1{
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
                height: 130px;
            } */

            /* Resize ng chart 1 div */
            div#variety1-chart1.card.mb-4{
                height: 560px;
            }

            /* Resize variety1 chart 1*/
            canvas#variety_ctxChart1{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 255px !important;
                width: 100% !important;
            }

            /* ///////////////////////////////////// VARIETIES 2 ///////////////////////////////////////////// */

            /* Pagresize ng page for printing */
            div.sublevel#variety2{
                min-height: 100%;
                max-height: 100%;
                max-width: 100%;
                height: 790px !important;
                width: 100% !important;
                background-size:cover !important;
                background-repeat:no-repeat !important;
                background-position:center center !important;
            }

            /* Resize ng variety 2 table div */
            div#variety2-table.card.mb-4{
                height: 700px;
            }

            /* table variety */
            /* cropted ung table, walang kulay */
            table.variety-table{
                display: inline-block !important;
                max-height: 520px !important;
                max-width: 100% !important;
                overflow: hidden !important;
            }

            /* //////////////////////////////////////////////// ADOPTION RATE 1 ////////////////////////////////////// */

            /* Pagresize ng page for printing */
            div.sublevel#adoptionrate1{
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
                height: 130px;
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

            /* //////////////////////////////////////////// ADOPTION RATE 2 /////////////////////////////////////// */

             /* Pagresize ng page for printing */
             div.sublevel#adoptionrate2{
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
                height: 365px;
            }

            /* Resize ng chart 2 div */
            div#adoptionrate2-chart2.card.mb-4{
                height: 365px;
            }

            /* Resize ng chart 3 div */
            div#adoptionrate2-chart3.card.mb-4{
                height: 350px;
            }

            /* Resize ng chart 4 div */
            div#adoptionrate2-chart4.card.mb-4{
                height: 350px;
            }

            /* Resize adoptionrate2 chart 1*/
            canvas#adoptionrate_ctxChart4{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 165px !important;
                width: 100% !important;
            }

            /* Resize adoptionrate2 chart 1*/
            canvas#adoptionrate_ctxChart5{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 165px !important;
                width: 100% !important;
            }

            /* Resize adoptionrate2 chart 1*/
            canvas#adoptionrate_ctxChart6{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 155px !important;
                width: 100% !important;
            }

            /* Resize adoptionrate2 chart 1*/
            canvas#adoptionrate_ctxChart7{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 155px !important;
                width: 100% !important;
            }

            /* //////////////////////////////////// ADOPTION RATE 3 //////////////////////////////////////// */

             /* Pagresize ng page for printing */
             div.sublevel#adoptionrate3{
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

            /* /////////////////////////////// FERTILIZER APP 1 ////////////////////////////////////// */

            /* Pagresize ng page for printing */
            div.sublevel#fertilizerapp1{
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
                height: 130px;
            } */

            /* Resize ng chart 1 div */
            div#fertilizerapp1-chart1.card.mb-4{
                height: 500px;
            }

            /* Resize fertilizerapp1 chart 1*/
            canvas#fertilizerapp_ctxChart1{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 350px !important;
                width: 100% !important;
            }

            /* ////////////////////////////////// FERTILIZER APP 2 ////////////////////////////////////////// */

            /* Pagresize ng page for printing */
            div.sublevel#fertilizerapp2{
                min-height: 100%;
                max-height: 100%;
                max-width: 100%;
                height: 790px !important;
                width: 100% !important;
                background-size:cover !important;
                background-repeat:no-repeat !important;
                background-position:center center !important;
            }

            /* Resize ng fertilizerapp 2 table div */
            div#fertilizerapp2-table.card.mb-4{
                height: 700px;
            }

            /* table fertilizerapp */
            /* cropted ung table, walang kulay */
            table.fertilizerapp-table{
                display: inline-block !important;
                max-height: 520px !important;
                max-width: 100% !important;
                overflow: hidden !important;
            }

            /* ///////////////////////////////////// PESTICIDE 1 //////////////////////////////////////////////////////////// */

            /* Pagresize ng page for printing */
            div.sublevel#pesticide1{
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
            div#pesticide.jumbotron{
                height: 130px;
            }

            /* Resize ng chart 1 div */
            div#pesticide1-chart1.card.mb-4{
                height: 300px;
            }

            /* Resize ng chart 2 div */
            div#pesticide1-chart2.card.mb-4{
                height: 300px;
            }

            /* Resize ng chart 3 div */
            div#pesticide1-chart3.card.mb-4{
                height: 300px;
            }

            /* Resize ng chart 4 div */
            div#pesticide1-chart4.card.mb-4{
                height: 300px;
            }

            /* Resize pestcide chart 1*/
            canvas#ctxHerbicide{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 135px !important;
                width: 80% !important;
                margin-left: 50px !important;
            }

            /* Resize adoptionrate1 chart 1*/
            canvas#ctxInsecticide{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 135px !important;
                width: 80% !important;
                margin-left: 50px !important;
            }

            /* Resize adoptionrate1 chart 1*/
            canvas#ctxFungicide{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 135px !important;
                width: 80% !important;
                margin-left: 50px !important;
            }

            /* Resize adoptionrate1 chart 1*/
            canvas#ctxOtherPest{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 135px !important;
                width: 80% !important;
                margin-left: 50px !important;
            }

            /* /////////////////////////////////////////// PESTICIDE 2 //////////////////////////////////////// */

            /* Pagresize ng page for printing */
            div.sublevel#pesticide2{
                min-height: 100%;
                max-height: 100%;
                max-width: 100%;
                height: 790px !important;
                width: 100% !important;
                background-size:cover !important;
                background-repeat:no-repeat !important;
                background-position:center center !important;
            }

            /* Resize ng pesticide2 2 table div */
            div#pesticide2-table.card.mb-4{
                height: 700px;
            }

            /* table pesticide2 */
            /* cropted ung table, walang kulay */
            table.pesticide-table{
                display: inline-block !important;
                max-height: 500px !important;
                max-width: 100% !important;
                overflow: hidden !important;
            }

            /* ////////////////////////////////////// MACHINE SOURCE 1 /////////////////////////////////// */

            /* Pagresize ng page for printing */
            div.sublevel#machinesource1{
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
                height: 130px;
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

            /* ////////////////////////////// MACHINE SOURCE 2 //////////////////////////// */

            /* Pagresize ng page for printing */
            div.sublevel#machinesource2{
                min-height: 100%;
                max-height: 100%;
                max-width: 100%;
                height: 790px !important;
                width: 100% !important;
                background-size:cover !important;
                background-repeat:no-repeat !important;
                background-position:center center !important;
            }

            /* Resize ng variemachinesource 2 table div */
            div#machinesource2-table.card.mb-4{
                height: 690px;
            }

            /* table machinesource */
            /* cropted ung table, walang kulay */
            table.machinesource-table{
                display: inline-block !important;
                max-height: 520px !important;
                max-width: 100% !important;
                overflow: hidden !important;
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
    <?php
        $monthyear = "";
        switch ((int)$household[0]['month']) {
            case 1:
                $monthyear = "Jan " . $household[0]['year'];
                break;
            case 2:
                $monthyear = "Feb " . $household[0]['year'];
                break;
            case 3:
                $monthyear = "Mar " . $household[0]['year'];
                break;
            case 4:
                $monthyear = "Apr " . $household[0]['year'];
                break;
            case 5:
                $monthyear = "May " . $household[0]['year'];
                break;
            case 6:
                $monthyear = "Jun " . $household[0]['year'];
                break;
            case 7:
                $monthyear = "Jul " . $household[0]['year'];
                break;
            case 8:
                $monthyear = "Aug " . $household[0]['year'];
                break;
            case 9:
                $monthyear = "Sep " . $household[0]['year'];
                break;
            case 10:
                $monthyear = "Oct " . $household[0]['year'];
                break;
            case 11:
                $monthyear = "Nov " . $household[0]['year'];
                break;
            case 12:
                $monthyear = "Dec " . $household[0]['year'];
                break;
        }
    ?>
    <!-- Navigation --->
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="btn btn-warning text-white" href="<?php echo base_url(); ?>" role="button"><i class="bi bi-house-door-fill"></i> National</a>
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

    <!-- Start of Div -->
    <div id="capture">
        <!-- RICE SECTOR MAIN -->

        <br class="pagebreak">
        <div class="container-fluid" id="rice-sector">
            <div class="row">
                <main role="main" class="col">
                    <!-- <div id="main" class="jumbotron text-left">
                        <div class="jumbotron-content">
                            <h2>State of the Rice Sector in the</h2>
                            <h1>Philippines</h1>
                            <p class="lead"><i>What is the status of the rice industry?</i> Explore and get insights about the trend of the <br />key performance indicators of rice production, consumption, and market.</p>
                            <div class="card-note mx-auto rounded-pill bg-light">
                                <h6 class="text-dark p-1">Population: <strong>110.2 MILLION</strong> (PSA, 2021)</h6>
                            </div>
                        </div>
                    </div> -->

                    <!-- Body -->
                    <div class="dashboard" id="dashboard-main">

                        <!-- FOR VERTICAL PRINT IN BLACK EDGING RIGHT SIDE -->
                        <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; float: right; margin-right: -17px; margin-top: 35px;">DASHBOARD - PHILIPPINES</p>

                        <div style="margin-left: 45px; margin-top: 7px;">
                            <h2>State of the Rice Sector in the</h2>
                            <h1 style="font-size: 67px;">Philippines</h1>
                            <p class="lead"><i>What is the status of the rice industry?</i> Explore and get insights about the trend of the <br />key performance indicators of rice production, consumption, and market.</p>
                            <div class="card-note mx-auto rounded-pill bg-light text-left" style="margin-left: 0px !important; padding-top: 0px !important; width: fit-content;">
                                <h6 class="text-dark p-1">Population: <strong>110.2 MILLION</strong> (PSA, 2021)</h6>
                            </div>
                        </div>

                        <div class="row" style="margin-left: 35px; margin-right: 20px;">
                            <div class="col-4">
                                <div class="card primary mb-2 bg-primary text-center text-white main-dashboard">
                                    <div class="card-body">
                                        <h5 class="card-title text-left"><a href="<?php echo base_url(); ?>productions" class="text-white stretched-link text-decoration-none card-main">Palay Production (2021)</a></h5>
                                        <h1 class="card-text font-weight-bold"><?php echo $production_all['value']; ?><i class="<?php echo $prod_caret; ?>"></i></h1>
                                        <div class="card-note w-50 mx-auto rounded-pill bg-warning">
                                            <p class="text-white">million metric tons</p>
                                        </div>
                                    </div>
                                    <div class="caret-select"><i class="bi bi-caret-right-alt pr-2"></i></div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card primary mb-2 bg-primary text-center text-white main-dashboard">
                                    <div class="card-body">
                                        <h5 class="card-title text-left"><a href="<?php echo base_url(); ?>harvestareas" class="text-white stretched-link text-decoration-none card-main">Area Harvested (2021)</a></h5>
                                        <h1 class="card-text font-weight-bold"><?php echo $harvestarea_all['value']; ?> <i class="<?php echo $area_caret; ?>"></i></h1>
                                        <div class="card-note w-50 mx-auto rounded-pill bg-warning">
                                            <p class="text-white">million hectares</p>
                                        </div>
                                    </div>
                                    <div class="caret-select"><i class="bi bi-caret-right-alt pr-2"></i></div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card primary mb-2 bg-primary text-center text-white main-dashboard">
                                    <div class="card-body">
                                        <h5 class="card-title text-left"><a href="<?php echo base_url(); ?>estyields" class="text-white stretched-link text-decoration-none card-main">Yield per Hectare (2021)</a></h5>
                                        <h1 class="card-text font-weight-bold"><?php echo $estyield_all['value']; ?> <i class="<?php echo $yield_caret; ?>"></i></h1>
                                        <div class="card-note w-75 mx-auto rounded-pill bg-warning">
                                            <p class="text-white">metric tons per hectare</p>
                                        </div>
                                    </div>
                                    <div class="caret-select"><i class="bi bi-caret-right-alt pr-2"></i></div>
                                </div>
                            </div>
                        </div>



                        <!-- UNCOMMENT -->
                        <!-- <div class="row" style="margin-left: 30px; margin-right: 20px;">
                            <div class="col-4">
                                <div class="card secondary text-center row1">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col border-right">
                                                <h6 class="card-title text-left"><a href="<?php echo base_url(); ?>supplies" class="text-black stretched-link text-decoration-none card-sec">Supply (2020)</a></h6>
                                                <h1 class="card-text"><?php echo number_format($supply['value'] / 1000, 2); ?><i class="<?php echo $supply_caret; ?>"></i></h1>
                                                <div class="card-note w-100 mx-auto rounded-pill">
                                                    <p class="text-white">million metric tons</p>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <h6 class="card-title text-left"><a href="<?php echo base_url(); ?>supplies" class="text-black stretched-link text-decoration-none card-sec">Utilization (2020)</a></h6>
                                                <h1 class="card-text"><?php echo number_format($util['value'] / 1000, 2); ?><i class="<?php echo $util_caret; ?>"></i></h1>
                                                <div class="card-note w-100 mx-auto rounded-pill">
                                                    <p class="text-white">million metric tons</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="caret-select"><i class="bi bi-caret-right-alt pr-2"></i></div>
                                </div>
                                <div class="card secondary text-center mt-2">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col border-right">
                                                <h6 class="card-title text-left"><a href="<?php echo base_url(); ?>consumption" class="text-black stretched-link text-decoration-none card-sec">Annual Per Capita Consumption (2016)</a></h6>
                                                <h1 class="card-text"><?php echo $actual_per_capita_values['KgPerYear']; ?><i class="<?php echo $kg_caret; ?>"></i></h1>
                                                <div class="card-note w-75 mx-auto rounded-pill">
                                                    <p class="text-white">kilograms</p>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <h6 class="card-title text-left"><a href="<?php echo base_url(); ?>consumption" class="text-black stretched-link text-decoration-none card-sec">Daily Per Capita Consumption (2016)</a></h6>
                                                <h1 class="card-text"><?php echo $actual_per_capita_values['GmPerDay']; ?><i class="<?php echo $gram_caret; ?>"></i></h1>
                                                <div class="card-note w-75 mx-auto rounded-pill">
                                                    <p class="text-white">grams</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="caret-select"><i class="bi bi-caret-right-alt pr-2"></i></div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card secondary text-center">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col border-right">
                                                <h6 class="card-title text-left mb-5"><a href="<?php echo base_url(); ?>valuations" class="text-black stretched-link text-decoration-none card-sec">Value of Rice Production (2021)</a></h6>
                                                <h1 class="card-text"><?php echo number_format($latest_palay_valuation['value'] / 1000, 2); ?><i class="<?php echo $valuation_caret; ?>"></i></h1>
                                                <div class="card-note w-100 mx-auto rounded-pill" style="margin-top: -10px;">
                                                    <p class="text-white">Billion Pesos</p>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <p class="card-title text-center"><a href="<?php echo base_url(); ?>valuations" class="text-black stretched-link text-decoration-none card-sec text-uppercase">Percent Share to Value of Agricultural Production (2021)</a></p>
                                                <div><canvas id="ctxAgriShare"></canvas></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="caret-select"><i class="bi bi-caret-right-alt pr-2"></i></div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card secondary text-center">
                                    <div class="card-body">
                                        <h6 class="card-title text-left">Profitability Indicator (2020)</h6>
                                        <div class="row mt-3">
                                            <div class="col border-right" style="margin-top: -10px;">
                                                <h6 class="card-title text-left ml-1"><a href="<?php echo base_url(); ?>incomes" class="text-black stretched-link text-decoration-none card-sec">Net Returns </a></h6>
                                                <h2 class="card-text mt-5">P <?php echo $net_returns['value']; ?><i class="<?php echo $net_caret; ?>"></i></h2>
                                            </div>
                                            <div class="col" style="margin-top: -10px;">
                                                <h6 class="card-title text-left"><a href="<?php echo base_url(); ?>incomes" class="text-black stretched-link text-decoration-none card-sec">Gross Returns</a></h6>
                                                <h2 class="card-text mb-2">P <?php echo $gross_returns['value']; ?><i class="<?php echo $gross_caret; ?>"></i></h2>
                                                <h6 class="card-title text-left mt-5"><a href="<?php echo base_url(); ?>incomes" class="text-black stretched-link text-decoration-none card-sec">Total Cost</a></h6>
                                                <h2 class="card-text mb-2">P <?php echo $total_costs_main; ?><i class="<?php echo $cost_caret; ?>"></i></h2>
                                            </div>
                                        </div>
                                        <div class="card-note w-100 mx-auto rounded-pill" id="prof-p" style="margin: 23px 0;">
                                            <p class="text-white">per hectare per cropping season</p>
                                        </div>
                                    </div>
                                    <div class="caret-select"><i class="bi bi-caret-right-alt pr-2"></i></div>
                                </div>
                            </div>
                        </div> -->
                        <div class="row mt-2" style="margin-left: 35px; margin-right: 20px; margin-bottom: 20px;">
                            <div class="col-4">
                                <div class="card secondary text-center row3">
                                    <div class="card-body">
                                        <div class="row"  style="margin-bottom: 16px;">
                                            <div class="col border-right">
                                                <h6 class="card-title text-left"><a href="<?php echo base_url(); ?>impexports" class="text-black stretched-link text-decoration-none card-sec">Imports (2020)</a></h6>
                                                <h1 class="card-text" style="margin-top: 16px;"><?php echo number_format($supply_sources_values['SUImports'] / 1000, 2); ?><i class="<?php echo $imports_caret; ?>"></i></h1>
                                                <div class="card-note w-100 mx-auto rounded-pill">
                                                    <p class="text-white">million metric tons</p>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <h6 class="card-title text-left"><a href="<?php echo base_url(); ?>impexports" class="text-black stretched-link text-decoration-none card-sec">Exports (2020)</a></h6>
                                                <h1 class="card-text" style="margin-top: 16px;">&lt; 1<i class="bi bi-dash"></i></h1>
                                                <div class="card-note w-100 mx-auto rounded-pill">
                                                    <p class="text-white">thousand m. tons</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="caret-select"><i class="bi bi-caret-right-alt pr-2"></i></div>
                                </div>
                                <div class="card secondary text-center mt-2 row4">
                                    <div class="card-body">
                                        <h6 class="card-title text-left">Rice Stock (<?php echo $monthyear; ?>)</h6>
                                        <div class="row">
                                            <div class="col border-right text-center">
                                                <h6 class="card-title"><a href="<?php echo base_url(); ?>stocks" class="text-black stretched-link text-decoration-none card-sec">Household</a></h6>
                                                <h1 class="card-text smaller"><?php echo $household[0]['value']; ?><i class="<?php echo $h_caret; ?>"></i></h1>
                                            </div>
                                            <div class="col border-right">
                                                <h6 class="card-title" style="font-size: 13.5px;"><a href="<?php echo base_url(); ?>stocks" class="text-black stretched-link text-decoration-none card-sec">Commercial </a></h6>
                                                <h1 class="card-text smaller"><?php echo $commercial[0]['value']; ?><i class="<?php echo $c_caret; ?>"></i></h1>
                                            </div>
                                            <div class="col">
                                                <h6 class="card-title"><a href="<?php echo base_url(); ?>stocks" class="text-black stretched-link text-decoration-none card-sec">NFA</a></h6>
                                                <h1 class="card-text smaller"><?php echo $nfa[0]['value']; ?><i class="<?php echo $n_caret; ?>"></i></h1>
                                            </div>
                                        </div>
                                        <div class="card-note w-50 mx-auto rounded-pill mt-1">
                                            <p class="text-white">million metric tons</p>
                                        </div>
                                    </div>
                                    <div class="caret-select"><i class="bi bi-caret-right-alt pr-2"></i></div>
                                </div>
                                <div class="card primary bg-primary text-center mt-2 row5">
                                    <div class="card-body text-white">
                                        <h6 class="card-title text-center align-middle"><a href="<?php echo base_url(); ?>yieldcost/" class="text-white stretched-link text-decoration-none card-main-alt">Productivity Indicators</a></h6>
                                        <a href="<?php echo base_url(); ?>yieldcost/" class="text-white stretched-link text-decoration-none card-main-alt"><img class="d-block img-fluid mx-auto" style="height: 96px" src="<?php echo base_url(); ?>assets/ani_at_kita_logo.png"></a>
                                    </div>
                                    <div class="caret-select"><i class="bi bi-caret-right-alt pr-2"></i></div>
                                </div>
                            </div>
                            <div class="col-4" id="prism-area">
                                <div class="card primary bg-primary text-center text-white" id="card-rice-area-map">
                                    <div class="card-body">
                                        <h5 style="margin-top:10px;" class="card-title text-center"><a target="_blank" href="ttps://prism.philrice.gov.ph/dataproducts/" class="text-white stretched-link text-decoration-none card-main">Rice Area Map</a></h5>
                                    </div>
                                    <div class="caret-select"><i class="bi bi-caret-right-alt pr-2" style="top: 34%;"></i></div>
                                </div>
                                <a target="_blank" href="https://prism.philrice.gov.ph/dataproducts/">
                                    <div class="card mb-0">
                                        <img class="card-img-top" src="<?php echo base_url(); ?>assets/prism_smaller.jpg" alt="Card image cap">
                                    </div>
                                </a>
                            </div>
                            <div class="col-4">
                                <div class="card secondary text-center row3">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col border-right">
                                                <h6 class="card-title text-left"><a href="<?php echo base_url(); ?>prices" class="text-black stretched-link text-decoration-none card-sec">Dry Palay Price (2021)</a></h6>
                                                <h1 class="card-text">P <?php echo $farmgate['value']; ?><i class="<?php echo $fg_caret; ?>"></i></h1>
                                            </div>
                                            <div class="col">
                                                <h6 class="card-title text-left"><a href="<?php echo base_url(); ?>incomes" class="text-black stretched-link text-decoration-none card-sec">Production Cost (2020)</a></h6>
                                                <h1 class="card-text mb-2">P <?php echo $total_costs_int; ?><i class="<?php echo $unit_caret; ?>"></i></h1>
                                            </div>
                                        </div>
                                        <div class="card-note w-50 mx-auto rounded-pill">
                                            <p class="text-white">per kilogram</p>
                                        </div>
                                    </div>
                                    <div class="caret-select"><i class="bi bi-caret-right-alt pr-2"></i></div>
                                </div>
                                <div class="card secondary text-center mt-2 row4">
                                    <div class="card-body">
                                        <h6 class="card-title text-left">Rice Wholesale Prices (2021)</h6>
                                        <div class="row">
                                            <div class="col border-right">
                                                <h6 class="card-title text-left ml-1"><a href="<?php echo base_url(); ?>prices" class="text-black stretched-link text-decoration-none card-sec">Well-Milled</a></h6>
                                                <h1 class="card-text">P <?php echo $wholesale_sp['value']; ?><i class="<?php echo $ws_caret; ?>"></i></h1>
                                            </div>
                                            <div class="col">
                                                <h6 class="card-title text-left"><a href="<?php echo base_url(); ?>prices" class="text-black stretched-link text-decoration-none card-sec">Regular-Milled</a></h6>
                                                <h1 class="card-text">P <?php echo $wholesale['value']; ?><i class="<?php echo $wg_caret; ?>"></i></h1>
                                            </div>
                                        </div>
                                        <div class="card-note w-50 mx-auto rounded-pill">
                                            <p class="text-white">per kilogram</p>
                                        </div>
                                    </div>
                                    <div class="caret-select"><i class="bi bi-caret-right-alt pr-2"></i></div>
                                </div>
                                <div class="card secondary text-center mt-2 row5">
                                    <div class="card-body">
                                        <h6 class="card-title text-left">Rice Retail Prices (2021)</h6>
                                        <div class="row">
                                            <div class="col border-right">
                                                <h6 class="card-title text-left ml-1"><a href="<?php echo base_url(); ?>prices" class="text-black stretched-link text-decoration-none card-sec">Well-Milled</a></h6>
                                                <h1 class="card-text">P <?php echo $retail_sp['value']; ?><i class="<?php echo $rs_caret; ?>"></i></h1>
                                            </div>
                                            <div class="col">
                                                <h6 class="card-title text-left"><a href="<?php echo base_url(); ?>prices" class="text-black stretched-link text-decoration-none card-sec">Regular-Milled</a></h6>
                                                <h1 class="card-text">P <?php echo $retail['value']; ?><i class="<?php echo $rg_caret; ?>"></i></h1>
                                            </div>
                                        </div>
                                        <div class="card-note w-50 mx-auto rounded-pill">
                                            <p class="text-white">per kilogram</p>
                                        </div>
                                    </div>
                                    <div class="caret-select"><i class="bi bi-caret-right-alt pr-2"></i></div>
                                </div>
                            </div>
                        </div>

                        <!-- PAGE NUMBER -->
                        <div class="row" style="margin-right: 27px; margin-top: 135px;">
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important; float: right;">2 | STATE OF THE RICE SECTOR IN THE PHILIPPINES</p>
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

        <!-- PRODUCTION 1 -->

        <div class="container-fluid" id="productions1">
            <div class="row">
                <main role="main" class="col">
                    <!-- Body -->
                    <div class="sublevel" id="production1">
                        <!-- Header --->
                        <!-- <div class="jumbotron text-left" id="production">
                            <div class="jumbotron-content" style="padding: 30px;">
                                <h2>State of the Rice Sector in the Philippines</h2>
                                <h1>Palay Production</h1>
                                <p class="lead"><i>What is the total volume of palay produced in the country?</i> <br /> Know the latest and historical rice production information and the contribution of each province to the overall quantity.</p>
                            </div>
                        </div> -->

                        <!-- FOR VERTICAL PRINT IN BLACK EDGING LEFT SIDE -->
                        <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; transform:scale(-1); float: left; margin-left: -17px; margin-top: 35px;">PALAY PRODUCTION</p>
                        
                        <div style="margin-left: 35px; margin-top: 7px;">
                            <h1 style="font-size: 65px;">Palay Production</h1>
                            <br>
                            <p class="lead"><i>What is the total volume of palay produced in the country?</i> <br /> Know the latest and historical rice production information and the contribution of each province to the overall quantity.</p>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="card-deck mb-2 text-center" style="margin-left: -2px; margin-top: 10px; margin-right: 30px;">
                                    <div class="card primary mb-4 bg-primary-2 text-white">
                                        <div class="card-body">
                                            <h5 class="card-title pb-2">Irrigated Area</h5>
                                            <h1 class="card-text font-weight-bold"><?php echo $total_production_irrigated['value']; ?><i class="<?php echo $prod_caret_irrig; ?>"></i></h1>
                                            <div class="card-note w-75 mx-auto rounded-pill bg-primary">
                                                <p class="text-white">million metric tons</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card primary mb-4 bg-primary text-white">
                                        <div class="card-body">
                                            <h5 class="card-title pb-2">National (2021)</h5>
                                            <h1 class="card-text font-weight-bold"><?php echo $total_production_all['value']; ?><i class="<?php echo $prod_caret; ?>"></i></h1>
                                            <div class="card-note bg-warning w-75 mx-auto rounded-pill">
                                                <p class="text-white">million metric tons</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card primary mb-4 bg-alternate-3 text">
                                        <div class="card-body">
                                            <h5 class="card-title pb-2">Non-Irrigated Area</h5>
                                            <h1 class="card-text font-weight-bold"><?php echo $total_production_rainfed['value']; ?><i class="<?php echo $prod_caret_rain; ?>"></i></h1>
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
                                <div class="card mb-4" id="production1-chart1" style="margin-left: 35px; margin-top: -20px; margin-right: 55px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Table</a> -->
                                        <h5 class="my-0 pt-2 pb-2">Palay Production (2001-2021)</h5>
                                        <p class="my-0 font-weight-normal text-muted">in million metric tons (PSA, 2022)</p>
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
                        <div class="row" style="margin-left: 20px; margin-top: -8px;">
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important;">3 | STATE OF THE RICE SECTOR IN THE PHILIPPINES</p>
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

        <!-- PRODUCTION 2 -->

        <div class="container-fluid" id="productions2">
            <div class="row">
                <main role="main" class="col">
                    <div class="sublevel" id="production2">
                        <div class="row">
                            <div class="col">

                                <!-- FOR VERTICAL PRINT IN BLACK EDGING RIGHT SIDE -->
                                <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; float: right; margin-right: -13px; margin-top: 35px;">PALAY PRODUCTION</p>

                                <div class="card mb-4" id="production2-chartall" style="margin: 40px 35px 0px 50px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Map</a> -->
                                        <div class="chart-toggles" data-html2canvas-ignore="true">
                                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                <!-- <label class="btn btn-secondary">
                                                    <input id="showTop" type="radio" name="toggle_list"> Top 20
                                                </label>
                                                <label class="btn btn-secondary">
                                                    <input id="showAll" type="radio" name="toggle_list"> Show All
                                                </label> -->
                                            </div>
                                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                <label class="btn btn-secondary">
                                                    <input type="radio" name="toggle_type" id="showreg" checked> Regional
                                                </label>
                                                <!-- <label class="btn btn-secondary">
                                                    <input type="radio" name="toggle_type" id="showprov"> Provincial
                                                </label> -->
                                            </div>
                                        </div>
                                        <h5 id="chart2-header" class="my-0 pt-2 pb-2">Palay Production by Region (2021)</h5>
                                        <p class="my-0 font-weight-normal text-muted">in metric tons (PSA, 2022)</p>
                                    </div>
                                    <div class="card-body chart-all">
                                        <div class="row">
                                            <div class="col-6">
                                                <!-- <div id="ctxTopProvTopContainer"><canvas id="ctxTopProvTop"></canvas></div>
                                                <div id="ctxTopProvContainer" class="scrollable-chart"><canvas id="ctxTopProv"></canvas></div>      -->
                                                <div id="ctxRegionalContainer"><canvas id="production_ctxRegional"></canvas></div>
                                            </div>
                                            <div class="col-6" id="series-prod">
                                                <div class="text-center mt-4">
                                                    <div class="legend-box" style="background:rgba(198,250,30,1);"></div>
                                                    <p id="series-1" class="d-inline-block text-capitalize">< 100,000</p>
                                                    <div class="legend-box" style="background:rgba(148,213,38,1);"></div>
                                                    <p id="series-2" class="d-inline-block text-capitalize">100,000-500,000</p>
                                                    <div class="legend-box" style="background:rgba(91,140,34,1);"></div>
                                                    <p id="series-3" class="d-inline-block text-capitalize">500,000-1,000,000</p>
                                                    <div class="legend-box" style="background:rgba(33,55,18,1);"></div>
                                                    <p id="series-4" class="d-inline-block text-capitalize"> 1,000,000</p>
                                                </div>
                                                <!-- <div id="phl-top" style="height: 850px;"></div>
                                                <div id="phl" style="height: 850px;"></div> -->
                                                <div id="phl-reg-production" style="height: 850px;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer text-muted">
                                        Data Source: <a href="https://palaystat.philrice.gov.ph/statistics/retrieve/table/1" target="_blank">Estimated production, area harvested and yield per hectare (PAY) - PalayStat System</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- PAGE NUMBER -->
                        <div class="row" style="margin-right: 23px; margin-top: -10px;">
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important; float: right;">4 | STATE OF THE RICE SECTOR IN THE PHILIPPINES</p>
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

        <!-- AREA HARVESTED 1 -->

        <div class="container-fluid" id="areas1">
            <div class="row">
                <main role="main" class="col">
                    <!-- Header --->
                    <!-- <div id="area" class="jumbotron text-left">
                        <div class="jumbotron-content">
                            <h2>State of the Rice Sector in the Philippines</h2>
                            <h1>Area Harvested</h1>
                            <p class="lead"><i>How wide was the accumulated area of the total harvested palay? </i> Explore the estimated overall <br />harvested area, the apportionment of irrigated and non-irrigated farms, and the size of extents in the provinces.</p>
                        </div>
                    </div> -->

                    <!-- Body -->
                    <div class="sublevel" id="area1">

                        <!-- FOR VERTICAL PRINT IN BLACK EDGING LEFT SIDE -->
                        <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; transform:scale(-1); float: left; margin-left: -17px; margin-top: 35px;">AREA HARVESTED</p>

                        <div style="margin-left: 35px; margin-top: 7px;">
                            <h1 style="font-size: 65px;">Area Harvested</h1>
                            <br>
                            <p class="lead"><i>How wide was the accumulated area of the total harvested palay? </i> Explore the estimated overall <br />harvested area, the apportionment of irrigated and non-irrigated farms, and the size of extents in the provinces.</p>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="card-deck mb-2 text-center" style="margin-left: 0px; margin-top: 10px; margin-right: 30px;">
                                    <div class="card primary mb-4 bg-primary-2 text-white">
                                        <div class="card-body">
                                            <h5 class="card-title pb-2">Irrigated Area</h5>
                                            <h1 class="card-text font-weight-bold"><?php echo $total_area_irrigated['value']; ?><i class="<?php echo $area_caret_irrig; ?>"></i></h1>
                                            <div class="card-note w-50 mx-auto rounded-pill bg-primary">
                                                <p class="text-white">million hectares</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card primary mb-4 bg-primary text-white">
                                        <div class="card-body">
                                            <h5 class="card-title pb-2">National (2021)</h5>
                                            <h1 class="card-text font-weight-bold"><?php echo $total_area_all['value']; ?><i class="<?php echo $area_caret; ?>"></i></h1>
                                            <div class="card-note bg-warning w-50 mx-auto rounded-pill">
                                                <p class="text-white">million hectares</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card primary mb-4 bg-alternate-3">
                                        <div class="card-body">
                                            <h5 class="card-title pb-2">Non-Irrigated Area</h5>
                                            <h1 class="card-text font-weight-bold"><?php echo $total_area_rainfed['value']; ?><i class="<?php echo $area_caret_rain; ?>"></i></h1>
                                            <div class="card-note w-50 mx-auto rounded-pill bg-primary">
                                                <p class="text-white">million hectares</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="card mb-4" id="area1-chart1" style="margin-left: 35px; margin-top: -20px; margin-right: 55px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a> -->
                                        <h5 class="my-0 pt-2 pb-2">Total Rice Area Harvested (2001-2021)</h5>
                                        <p class="my-0 font-weight-normal text-muted">in million hectares (PSA, 2022)</p>

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
                        <div class="row" style="margin-left: 21px; margin-top: -3px;">
                        <div class="col">
                        <p class="text-black" style="font-size: 9px !important;">5 | STATE OF THE RICE SECTOR IN THE PHILIPPINES</p>
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

        <!-- AREA HARVESTED 2 -->

        <div class="container-fluid" id="areas2">
            <div class="row">
                <main role="main" class="col">
                    <div class="sublevel" id="area2">
                        <div class="row">
                            <div class="col">

                                <!-- FOR VERTICAL PRINT IN BLACK EDGING RIGHT SIDE -->
                                <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; float: right; margin-right: -13px; margin-top: 35px;">AREA HARVESTED</p>

                                <div class="card mb-4" id="area2-chartall" style="margin: 40px 35px 0px 50px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Map</a> -->
                                        <div class="chart-toggles" data-html2canvas-ignore="true">
                                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                <!-- <label class="btn btn-secondary">
                                                    <input id="showTop" type="radio" name="toggle_list"> Top 20
                                                </label>
                                                <label class="btn btn-secondary">
                                                    <input id="showAll" type="radio" name="toggle_list"> Show All
                                                </label> -->
                                            </div>
                                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                <label class="btn btn-secondary">
                                                    <input type="radio" name="toggle_type" id="showreg" checked> Regional
                                                </label>
                                                <!-- <label class="btn btn-secondary">
                                                    <input type="radio" name="toggle_type" id="showprov"> Provincial
                                                </label> -->
                                            </div>
                                        </div>
                                        <h5 id="chart2-harvest" class="my-0 pt-2 pb-2">Rice Area Harvested by Region (2021)</h5>
                                        <p class="my-0 font-weight-normal text-muted">in hectares (PSA, 2022)</p>
                                    </div>
                                    <div class="card-body chart-all">
                                        <div class="row">
                                            <div class="col-6">
                                                <!-- <div id="ctxTopProvTopContainer"><canvas id="ctxTopProvTop"></canvas></div>
                                                <div id="ctxTopProvContainer" class="scrollable-chart"><canvas id="ctxTopProv"></canvas></div> -->
                                                <div id="ctxRegionalContainer"><canvas id="area_ctxRegional"></canvas></div>
                                            </div>
                                            <div class="col-6" id="series-area">
                                                <div class="text-center mt-4">
                                                    <div class="legend-box" style="background:rgba(254,213,111,1);"></div>
                                                    <p id="series-1" class="d-inline-block text-capitalize">
                                                        < 10,000</p>
                                                            <div class="legend-box" style="background:rgba(220,149,85,1);"></div>
                                                            <p id="series-2" class="d-inline-block text-capitalize">10,000-50,000</p>
                                                            <div class="legend-box" style="background:rgba(200,107,37,1);"></div>
                                                            <p id="series-3" class="d-inline-block text-capitalize">50,000-100,000</p>
                                                            <div class="legend-box" style="background:rgba(112,55,40,1);"></div>
                                                            <p id="series-4" class="d-inline-block text-capitalize"> > 100,000</p>
                                                </div>
                                                <!-- <div id="phl-top" style="height: 850px;"></div>
                                                <div id="phl" style="height: 850px;"></div> -->
                                                <div id="phl-reg-area" style="height: 850px;"></div>                            
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer text-muted">
                                        Data Source: <a href="https://palaystat.philrice.gov.ph/statistics/retrieve/table/1" target="_blank">Estimated production, area harvested and yield per hectare (PAY) - PalayStat System</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- PAGE NUMBER -->
                        <div class="row" style="margin-right: 24px; margin-top: -8px;">
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important; float: right;">6 | STATE OF THE RICE SECTOR IN THE PHILIPPHINES</p>
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

        <!-- EST YIELD 1 -->

        <div class="container-fluid" id="yields1">
            <div class="row">
                <main role="main" class="col">
                    <!-- Header --->
                    <!-- <div id="yield" class="jumbotron text-left">
                        <div class="jumbotron-content">
                            <h2>State of the Rice Sector in the Philippines</h2>
                            <h1>Yield per Hectare</h1>
                            <p class="lead"><i>How do our farmers perform in terms of yield per hectare?</i> Check out the average metric tons <br />of palay produced per hectare, the attainment in irrigated and non-irrigated areas, and the performance in each province.</p>
                        </div>
                    </div> -->

                    <!-- Body -->
                    <div class="sublevel" id="yield1">

                        <!-- FOR VERTICAL PRINT IN BLACK EDGING LEFT SIDE -->
                        <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; transform:scale(-1); float: left; margin-left: -17px; margin-top: 35px;">YIELD PER HECTARE</p>

                        <div style="margin-left: 35px; margin-top: 7px;">
                            <h1 style="font-size: 65px;">Yield per Hectare</h1>
                            <br>
                            <p class="lead"><i>How do our farmers perform in terms of yield per hectare?</i> Check out the average metric tons <br />of palay produced per hectare, the attainment in irrigated and non-irrigated areas, and the performance in each province.</p>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="card-deck mb-2 text-center" style="margin-left: 0px; margin-top: 10px; margin-right: 30px;">
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
                                            <h5 class="card-title pb-2">National Average (2021)</h5>
                                            <h1 class="card-text font-weight-bold"><?php echo $yield_all_m['value']; ?><i class="<?php echo $yield_caret; ?>"></i></h1>
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
                                <div class="card mb-4" id="yield1-chart1" style="margin-left: 35px; margin-top: -20px; margin-right: 55px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a> -->
                                        <h5 class="my-0 pt-2 pb-2">Average Yield per Hectare per Cropping Season (2001-2021)</h5>
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
                        <div class="row" style="margin-left: 23px; margin-top: -5px;">
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important;">7 | STATE OF THE RICE SECTOR IN THE PHILIPPINES</p>
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

        <!-- EST YIELD 2 -->

        <div class="container-fluid" id="yields2">
            <div class="row">
                <main role="main" class="col">
                    <div class="sublevel" id="yield2">
                        <div class="row">
                            <div class="col">

                                <!-- FOR VERTICAL PRINT IN BLACK EDGING RIGHT SIDE -->
                                <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; float: right; margin-right: -13px; margin-top: 35px;">YIELD PER HECTARE</p>

                                <div class="card mb-4" id="yield2-chartall" style="margin: 40px 35px 0px 55px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Map</a> -->
                                        <div class="chart-toggles" data-html2canvas-ignore="true">
                                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                <!-- <label class="btn btn-secondary">
                                                    <input id="showTop" type="radio" name="toggle_list"> Top 20
                                                </label>
                                                <label class="btn btn-secondary">
                                                    <input id="showAll" type="radio" name="toggle_list"> Show All
                                                </label> -->
                                            </div>
                                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                <label class="btn btn-secondary">
                                                    <input type="radio" name="toggle_type" id="showreg" checked> Regional
                                                </label>
                                                <!-- <label class="btn btn-secondary">
                                                    <input type="radio" name="toggle_type" id="showprov"> Provincial
                                                </label> -->
                                            </div>
                                        </div>
                                        <h5 id="chart2-yield" class="my-0 pt-2 pb-2">Average Yield per Hectare per Cropping Season by Province by Region (2021)</h5>
                                        <p class="my-0 font-weight-normal text-muted">in metric tons per hectare (PSA, 2022)</p>
                                    </div>
                                    <div class="card-body chart-all">
                                        <div class="row">
                                            <div class="col-6" >
                                                <!-- <div id="ctxTopProvTopContainer"><canvas id="ctxTopProvTop"></canvas></div>
                                                <div id="ctxTopProvContainer" class="scrollable-chart"><canvas id="ctxTopProv"></canvas></div>      -->
                                                <div id="ctxRegionalContainer"><canvas id="yield_ctxRegional"></canvas></div>
                                            </div>
                                            <div class="col-6" id="series-area">                                            
                                                <div class="text-center mt-4">
                                                    <div class="legend-box" style="background:rgba(41,107,54,1);"></div>
                                                    <p id="series-1" class="d-inline-block text-capitalize">> 4.15 Yield per Hectare</p>
                                                    <div class="legend-box" style="background:rgba(42,140,184,1);"></div>
                                                    <p id="series-2" class="d-inline-block text-capitalize">< 4.15 Yield per Hectare</p>                                        
                                                </div>
                                                <!-- <div id="phl-top" style="height: 850px;"></div>
                                                <div id="phl" style="height: 850px;"></div> -->
                                                <div id="phl-reg-yield" style="height: 850px;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer text-muted">
                                        Data Source: <a href="https://palaystat.philrice.gov.ph/statistics/retrieve/table/1" target="_blank">Estimated production, area harvested and yield per hectare (PAY) - PalayStat System</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- PAGE NUMBER -->
                        <div class="row" style="margin-right: 23px; margin-top: -9px;">
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important; float: right;">8 | STATE OF THE RICE SECTOR IN THE PHILIPPHINES</p>
                            </div>
                        </div>

                    </div>
                </main>
            </div>
        </div>

        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br class="pagebreak">

        <!-- SUPPLIES 1 -->

        <div class="container-fluid" id="supplies1">
            <div class="row">
                <main role="main" class="col">
                    <!-- Header --->
                    <!-- <div id="supply" class="jumbotron text-left">
                        <div class="jumbotron-content">
                            <h2>State of the Rice Sector in the Philippines</h2>
                            <h1>Supply and Utilization</h1>
                            <p class="lead"><i>How much rice supply do we attain and utilize?</i> Know the total supply versus <br />utilization per year, as well as the rice supply sources and utilization accounts.</p>
                        </div>
                    </div> -->

                    <!-- Body -->
                    <div class="sublevel" id="supply1">

                        <!-- FOR VERTICAL PRINT IN BLACK EDGING LEFT SIDE -->
                        <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; transform:scale(-1); float: left; margin-left: -17px; margin-top: 35px;">SUPPLY AND ULTILIZATION</p>

                        <div style="margin-left: 35px; margin-top: 7px;">
                            <h1 style="font-size: 65px;">Supply and Utilization</h1>
                            <br>
                            <p class="lead"><i>How much rice supply do we attain and utilize?</i> Know the total supply versus <br />utilization per year, as well as the rice supply sources and utilization accounts.</p>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="card-deck mb-2 text-center" style="margin-left: 0px; margin-top: 10px; margin-right: 30px;">
                                    <div class="card primary mb-4 bg-primary text-white">
                                        <div class="card-body">
                                            <h5 class="card-title pb-2">Total Supply (2020)</h5>
                                            <h1 class="card-text font-weight-bold"><?php echo number_format($supply['value'] / 1000, 2); ?><i class="<?php echo $sup_caret; ?>"></i></h1>
                                            <div class="card-note w-50 mx-auto rounded-pill bg-warning">
                                                <p class="text-white">million metric tons</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card primary mb-4 bg-primary text-white">
                                        <div class="card-body">
                                            <h5 class="card-title pb-2">Total Utilization (2020)</h5>
                                            <h1 class="card-text font-weight-bold"><?php echo number_format($util['value'] / 1000, 2);?><i class="<?php echo $util_caret; ?>"></i></h1>
                                            <div class="card-note w-50 mx-auto rounded-pill bg-warning">
                                                <p class="text-white">million metric tons</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="card mb-4" id="supply1-chart1" style="margin-left: 35px; margin-top: -20px; margin-right: 55px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a> -->
                                        <h5 class="my-0 pt-2 pb-2">Total Supply and Utilization (2000-2020)</h5>
                                        <p class="my-0 font-weight-normal text-muted">in million metric tons (PSA, 2021)</p>
                                    </div>
                                    <div class="card-body">
                                        <div><canvas id="ctxSupply"></canvas></div>
                                    </div>
                                    <div class="card-footer text-muted">
                                        Data Source: <a href="https://openstat.psa.gov.ph/PXWeb/pxweb/en/DB/DB__2B__AA__SU/0012B5FSUA0.px/?rxid=6c040b24-38b8-42c7-84a6-881d5b00f633" target="_blank">Rice and Corn: Supply Utilization Accounts  - Philippine Statistics Authority</a>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- PAGE NUMBER -->
                        <div class="row" style="margin-left: 22px; margin-top: -8px;">
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important;">9 | STATE OF THE RICE SECTOR IN THE PHILIPPINES</p>
                            </div>
                        </div>

                    </div>
                </main>
            </div>
        </div>

        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br class="pagebreak">

        <!-- SUPPLIES 2 -->

        <div class="container-fluid" id="supplies2">
            <div class="row">
                <main role="main" class="col">
                    <div class="sublevel" id="supply2">
                        <div class="row">
                            <div class="col">

                                <!-- FOR VERTICAL PRINT IN BLACK EDGING RIGHT SIDE -->
                                <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; float: right; margin-right: -13px; margin-top: 35px;">SUPPLY AND UTILIZATION</p>

                                <div class="card mb-4" id="supply2-chart1" style="margin: 20px 35px 0px 55px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a> -->
                                        <h5 class="my-0 pt-2 pb-2">Distribution of Total Supply (2000-2020)</h5>
                                        <p class="my-0 font-weight-normal text-muted">in million metric tons (PSA, 2021)</p>
                                    </div>
                                    <div class="card-body">
                                        <div><canvas id="ctxSupplyStack"></canvas></div>
                                    </div>
                                    <div class="card-footer text-muted">
                                        Data Source: <a href="https://openstat.psa.gov.ph/PXWeb/pxweb/en/DB/DB__2B__AA__SU/0012B5FSUA0.px/?rxid=6c040b24-38b8-42c7-84a6-881d5b00f633" target="_blank">Rice and Corn: Supply Utilization Accounts  - Philippine Statistics Authority</a>
                                    </div>
                                </div>
                            </div>
			            </div>
			            <div class="row">
                            <div class="col">
                                <div class="card mb-4" id="supply2-chart2" style="margin: -15px 35px 20px 55px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a> -->
                                        <h5 class="my-0 pt-2 pb-2">Distribution of Total Utilization (2000-2020)</h5>
                                        <p class="my-0 font-weight-normal text-muted">in million metric tons (PSA, 2021)</p>
                                    </div>
                                    <div class="card-body">
                                        <div><canvas id="ctxUtilStack"></canvas></div>
                                    </div>
                                    <div class="card-footer text-muted">Note: Excluding exports in utilization accounts <br/>
                                        Data Source: <a href="https://openstat.psa.gov.ph/PXWeb/pxweb/en/DB/DB__2B__AA__SU/0012B5FSUA0.px/?rxid=6c040b24-38b8-42c7-84a6-881d5b00f633" target="_blank">Rice and Corn: Supply Utilization Accounts  - Philippine Statistics Authority</a>
                                    </div>
                                </div> 
                            </div>
                        </div>

                        <!-- PAGE NUMBER -->
                        <div class="row" style="margin-right: 24px; margin-top: -10px;">
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important; float: right;">10 | STATE OF THE RICE SECTOR IN THE PHILIPPINES</p>
                            </div>
                        </div>

                    </div>
                </main>
            </div>
        </div>

        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br class="pagebreak">

        <!-- CONSUMPTION 1 -->

        <div class="container-fluid" id="consumptions1">
            <div class="row">
                <main role="main" class="col">
                    <!-- Header --->
                    <!-- <div id="consumption" class="jumbotron text-left">
                        <div class="jumbotron-content">
                            <h2>State of the Rice Sector in the Philippines</h2>
                            <h1>Rice Consumption</h1>
                            <p class="lead"><i>How much rice do Filipinos consume each day and year?</i> Explore the information of per capita consumption <br />and the comparison of our local consumption and local food consumption</p>
                        </div>
                    </div> -->

                    <!-- Body -->

                    <div class="sublevel" id="consumption1">

                        <!-- FOR VERTICAL PRINT IN BLACK EDGING LEFT SIDE -->
                        <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; transform:scale(-1); float: left; margin-left: -17px; margin-top: 35px;">RICE CONSUMPTION</p>

                        <div style="margin-left: 35px; margin-top: 7px;">
                            <h1 style="font-size: 65px;">Rice Consumption</h1>
                            <br>
                            <p class="lead"><i>How much rice do Filipinos consume each day and year?</i> Explore the information of per capita consumption <br />and the comparison of our local consumption and local food consumption</p>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="card-deck mb-2 text-center" style="margin-left: 0px; margin-top: 10px; margin-right: 30px;">
                                    <div class="card primary mb-4 bg-primary text-white">
                                        <div class="card-body">
                                            <h5 class="card-title pb-2">Average Annual Per Capita Consumption (2016)</h5>
                                            <h1 class="card-text font-weight-bold"><?php echo $actual_per_capita_values['KgPerYear']; ?><i class="bi bi-caret-down-fill"></i></h1>
                                            <div class="card-note bg-warning w-25 mx-auto rounded-pill">
                                                <p class="text-white">kilograms</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card primary mb-4 bg-primary text-white">
                                        <div class="card-body">
                                            <h5 class="card-title pb-2">Average Daily Per Capita Consumption (2016)</h5>
                                            <h1 class="card-text font-weight-bold"><?php echo $actual_per_capita_values['GmPerDay']; ?><i class="bi bi-caret-down-fill"></i></h1>
                                            <div class="card-note bg-warning w-25 mx-auto rounded-pill">
                                                <p class="text-white">grams</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="card mb-4" id="consumption1-chart1" style="margin-left: 35px; margin-top: -20px; margin-right: 7px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a> -->
                                        <h5 class="my-0 pt-2 pb-2">Average Annual per Capita Consumption by Survey Year (2000-2016)</h5>
                                        <p class="my-0 font-weight-normal text-muted">in kilograms (kg) (FNRI and PSA, 2019)</p>
                                    </div>
                                    <div class="card-body">
                                        <div><canvas id="ctxKgCapita"></canvas></div>
                                    </div>
                                    <div class="card-footer text-muted">
                                        Data Source: Annual Per Capita Consumption of Rice, 1999-2016, Philippines - Philippine Statistics Authority
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card mb-4" id="consumption1-chart2" style="margin-right: 55px; margin-top: -20px; margin-left: -10px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a> -->
                                        <h5 class="my-0 pt-2 pb-2">Average Daily per Capita Consumption by Survey Year (2000-2016)</h5>
                                        <p class="my-0 font-weight-normal text-muted">in grams (g) (FNRI and PSA, 2019)</p>
                                    </div>
                                    <div class="card-body">
                                        <div><canvas id="ctxGramCapita"></canvas></div>
                                    </div>
                                    <div class="card-footer text-muted">
                                        Data Source: Annual Per Capita Consumption of Rice, 1999-2016, Philippines - Philippine Statistics Authority
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- PAGE NUMBER -->
                        <div class="row" style="margin-left: 24px; margin-top: 30px;">
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important;">11 | STATE OF THE RICE SECTOR IN THE PHILIPPINES</p>
                            </div>
                        </div>

                    </div>
                </main>
            </div>
        </div>

        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br class="pagebreak">
    
        <!-- CONSUMPTION 2 -->

        <div class="container-fluid" id="consumptions2">
                <div class="row">
                    <main role="main" class="col">
                        <div class="sublevel" id="consumption2">
                        <div class="row">
                            <div class="col">

                                <!-- FOR VERTICAL PRINT IN BLACK EDGING RIGHT SIDE -->
                                <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; float: right; margin-right: -13px; margin-top: 35px;">RICE CONSUMPTION</p>

                                <div class="card mb-4" id="consumption2-chart1" style="margin: 40px 35px 0px 55px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a> -->
                                        <h5 class="my-0 pt-2 pb-2">Local Production and Net Food Disposable (2000-2020)</h5>
                                        <p class="my-0 font-weight-normal text-muted">in million metric tons (PSA, 2021)</p>
                                    </div>
                                    <div class="card-body">
                                        <div><canvas id="ctxProdFood"></canvas></div>
                                    </div>
                                    <div class="card-footer text-muted">
                                        Data Source: <a href="https://openstat.psa.gov.ph/PXWeb/pxweb/en/DB/DB__2B__AA__SU/0012B5FSUA0.px/?rxid=6c040b24-38b8-42c7-84a6-881d5b00f633" target="_blank">Rice and Corn: Supply Utilization Accounts  - Philippine Statistics Authority</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- PAGE NUMBER -->
                        <div class="row" style="margin-right: 27px; margin-top: 135px;">
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important; float: right;">12 | STATE OF THE RICE SECTOR IN THE PHILIPPINES</p>
                            </div>
                        </div>

                    </div>
                </main>
            </div>
        </div>

        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br class="pagebreak">

        <!-- VALUATION 1 -->

        <div class="container-fluid" id="valuations1">
            <div class="row">
                <main role="main" class="col">
                    <!-- Header --->
                    <!-- <div id="valuation" class="jumbotron text-left">
                        <div class="jumbotron-content">
                            <h2>State of the Rice Sector in the Philippines</h2>
                            <h1>Value of Production</h1>
                            <p class="lead"><i>How much does the rice farming sector contribute to national agricultural account?</i> <br />Learn the value of rice production, and its share in the overall value of rice production,<br /> its share in the GVA of agriculture, forestry, and fishing, and its portion in the National Gross Domestic Product.</p>
                        </div>
                    </div> -->

                    <!-- Body -->
                    <div class="sublevel" id="valuation1">

                        <!-- FOR VERTICAL PRINT IN BLACK EDGING LEFT SIDE -->
                        <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; transform:scale(-1); float: left; margin-left: -17px; margin-top: 35px;">VALUE OF PRODUCTION</p>

                        <div style="margin-left: 35px; margin-top: 7px;">
                            <h1 style="font-size: 65px;">Value of Production</h1>
                            <br>
                            <p class="lead"><i>How much does the rice farming sector contribute to national agricultural account?</i> <br />Learn the value of rice production, and its share in the overall value of rice production,<br /> its share in the GVA of agriculture, forestry, and fishing, and its portion in the National Gross Domestic Product.</p>
                        </div>

                        <div class="row">
                            <div class="col-5 pl-1">
                                <div class="card primary mb-4 bg-primary text-white valuation-card" style="margin-left: 15px; margin-top: 10px;">
                                    <div class="card-body">
                                        <h5 class="card-title pb-2">National Value of Rice Production (2021)</h5>
                                        <h1 class="card-text font-weight-bold text-center">P <?php echo number_format($latest_palay_valuation['value'] / 1000, 2); ?><i class="<?php echo $pv_caret; ?>"></i></h1>
                                        <div class="card-note w-25 mx-auto rounded-pill bg-warning text-center">
                                            <p class="text-white">billion pesos</p>
                                        </div>
                                        <div class="mt-" style="margin-bottom: 10px;">
                                            <p class="text-white text-center">at 2018 constant prices</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-7 pr-1">
                                <div class="card primary mb-4 bg-alternate valuation-card" style="margin-top: 10px; margin-right: 45px;">
                                    <div class="card-body">
                                        <div class="row text-center">
                                            <div class="col-6 border-right">
                                                <h5 class="card-title pt-2">Value of Agricultural Production (2021)</h5>
                                                <h1 class="card-text font-weight-bold mt-3">P <?php echo number_format($latest_agri_valuation['value'] / 1000000, 2); ?><i class="<?php echo $agri_caret; ?>"></i></h1>
                                                <div class="card-note w-50 mx-auto rounded-pill bg-primary">
                                                    <p class="text-white">trillion</p>
                                                </div>
                                                <div>
                                                    <p class="text-white">at 2018 constant prices</p>
                                                </div>
                                            </div>
                                            <div class="col-6 pl-4">
                                                <div class="row d-flex align-items-center h-100">
                                                    <div class="col-5">
                                                        <h5 class="card-title m-0 p-0">Percent Share of Rice Production (2021)</h5>
                                                    </div>
                                                    <div class="col-7"><canvas id="ctxPercentShare"></canvas></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="card mb-4" id="valuation1-chart2" style="margin-left: 35px; margin-top: -12px; margin-right: 55px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a> -->
                                        <h5 class="my-0 pt-2 pb-2">National Value of Rice and Agricultural Production (2001-2021)</h5>
                                        <p class="my-0 font-weight-normal text-muted">In Billion Pesos, At Constant 2018 Prices (PSA, 2022)</p>
                                    </div>
                                    <div class="card-body mt-4">
                                        <div><canvas id="ctxAgriSector"></canvas></div>
                                    </div>
                                    <div class="card-footer text-muted">
                                        Data Source: <a href="https://openstat.psa.gov.ph/PXWeb/pxweb/en/DB/DB__2B__AA__VP__NA/0012B5FVOP1.px/?rxid=2533f456-0336-41c3-a072-945813ce4ac4" target="_blank">Palay and Agriculture and Fisheries: Value of Production in Philippine Agriculture and Fisheries, Philippines and Regions - Philippine Statistics Authority</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- PAGE NUMBER -->
                        <div class="row" style="margin-left: 23px; margin-top: -8px;">
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important;">13 | STATE OF THE RICE SECTOR IN THE PHILPPINES</p>
                            </div>
                        </div>

                    </div>
                </main>
            </div>
        </div>

        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br class="pagebreak">

        <!-- VALUATION 2 -->

        <div class="container-fluid" id="valuations2">
            <div class="row">
                <main role="main" class="col">
                    <div class="sublevel" id="valuation2">
                        <div class="row">
                            <div class="col">

                                <!-- FOR VERTICAL PRINT IN BLACK EDGING RIGHT SIDE -->
                                <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; float: right; margin-right: -13px; margin-top: 35px;">VALUE OF PRODUCTION</p>

                                <div class="card mb-4" id="valuation2-chart1" style="margin: 40px 35px 0px 55px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a> -->
                                        <h5 class="my-0 pt-2 pb-2">Share of Rice Production Value to Agricultural Production Value (2001-2021)</h5>
                                        <p class="my-0 font-weight-normal text-muted">In Percent (%), At Constant 2018 Prices (PSA, 2022)</p>
                                    </div>
                                    <div class="card-body">
                                        <div><canvas id="valuation_ctxAgriShare"></canvas></div>
                                    </div>
                                    <div class="card-footer text-muted">
                                        Data Source: <a href="https://openstat.psa.gov.ph/PXWeb/pxweb/en/DB/DB__2B__AA__VP__NA/0012B5FVOP1.px/?rxid=2533f456-0336-41c3-a072-945813ce4ac4" target="_blank">Palay and Agriculture and Fisheries: Value of Production in Philippine Agriculture and Fisheries, Philippines and Regions - Philippine Statistics Authority</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- PAGE NUMBER -->
                        <div class="row" style="margin-right: 25px; margin-top: 165px;">
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important; float: right;">14 | STATE OF THE RICE SECTOR IN THE PHILIPPINES</p>
                            </div>
                        </div>

                    </div>
                </main>
            </div>
        </div>

        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br class="pagebreak">

        <!-- INCOME 1 -->

        <div class="container-fluid" id="incomes1">
            <div class="row">
                <main role="main" class="col">
                    <!-- Header --->
                    <!-- <div id="incomes" class="jumbotron text-left">
                        <div class="jumbotron-content">
                            <h2>State of the Rice Sector in the Philippines</h2>
                            <h1>Rice Profitability Indicator</h1>
                            <p class="lead"><i>How much do our farmers earn per season?</i> Find out their net income through the years<br /> derived from the gross return minus the total cost of production. Explore the farmer earnings in the regions.</p>
                        </div>
                    </div> -->

                    <!-- Body -->
                    <div class="sublevel" id="income1">

                        <!-- FOR VERTICAL PRINT IN BLACK EDGING LEFT SIDE -->
                        <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; transform:scale(-1); float: left; margin-left: -17px; margin-top: 35px;">RICE PROFITABILITY INDICATOR</p>

                        <div style="margin-left: 35px; margin-top: 7px;">
                            <h1 style="font-size: 65px;">Rice Profitability Indicator</h1>
                            <br>
                            <p class="lead"><i>How much do our farmers earn per season?</i> Find out their net income through the years<br /> derived from the gross return minus the total cost of production. Explore the farmer earnings in the regions.</p>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="card-deck mb-2 text-center" style="margin-left: 0px; margin-top: 10px; margin-right: 30px;">
                                    <div class="card primary mb-4 bg-alternate">
                                        <div class="card-body">
                                            <h5 class="card-title pb-2">Gross Returns</h5>
                                            <h1 class="card-text font-weight-bold">P <?php echo $gross_returns['value']; ?><i class="<?php echo $gross_caret; ?>"></i></h2>
                                            <div class="card-note w-100 mx-auto rounded-pill bg-primary">
                                                <p class="text-white">per hectare per cropping season</p>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="card primary mb-4 bg-primary text-white">
                                        <div class="card-body">
                                            <h5 class="card-title pb-2">Net Returns (2020)</h5>
                                            <h1 class="card-text font-weight-bold">P <?php echo $net_returns['value']; ?><i class="<?php echo $net_caret; ?>"></i></h2>
                                            <div class="card-note w-100 mx-auto rounded-pill bg-warning">
                                                <p class="text-white">per hectare per cropping season</p>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="card primary mb-4 bg-alternate">
                                        <div class="card-body">
                                            <h5 class="card-title pb-2">Total Cost</h5>
                                            <h1 class="card-text font-weight-bold">P <?php echo $total_costs['value']; ?><i class="<?php echo $cost_caret; ?>"></i></h2>
                                            <div class="card-note w-100 mx-auto rounded-pill bg-primary">
                                                <p class="text-white">per hectare per cropping season</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-4" id="income1-chart1" style="margin-left: 10px; margin-top: -20px; margin-right: 40px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a> -->
                                        <h5 class="my-0 pt-2 pb-2">Net Returns, Gross Returns and Total Cost per Hectare per Cropping Season (2000-2020)</h5>
                                        <p class="my-0 font-weight-normal text-muted">in Peso (PSA, 2021)</p>
                                    </div>
                                    <div class="card-body">
                                        <div><canvas id="ctxGrossReturns"></canvas></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- PAGE NUMBER -->
                        <div class="row" style="margin-left: 25px; margin-top: -4px;">
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important;">15 | STATE OF THE RICE SECTOR IN THE PHILIPPINES</p>
                            </div>
                        </div>

                    </div>
                </main>
            </div>
        </div>

        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br class="pagebreak">

        <!-- INCOME 2 -->

        <div class="container-fluid" id="icomes2">
            <div class="row">
                <main role="main" class="col">
                    <div class="sublevel" id="income2">

                        <!-- FOR VERTICAL PRINT IN BLACK EDGING RIGHT SIDE -->
                        <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; float: right; margin-right: -17px; margin-top: 35px;">RICE PROFITABILITY INDICATOR</p>

                        <div class="row">
                            <div class="col">
                                <div class="card mb-4" id="income2-chart1" id="production2-chartall" style="margin: 40px -5px 0px 55px !important;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a> -->
                                        <h5 class="my-0 pt-2 pb-2">Gross Returns, Total Cost, and Net Returns per Hectare per Cropping Season by Region (2020)</h5>
                                        <p class="my-0 font-weight-normal text-muted">in Peso (PSA, 2021)</p>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <canvas id="ctxTopRegions"></canvas>
                                            </div>
                                            <div class="col-3">
                                                <canvas id="ctxTopRegions2"></canvas>
                                            </div>
                                            <div class="col-3">
                                                <canvas id="ctxTopRegions3"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- PAGE NUMBER -->
                        <div class="row" style="margin-right: 25px; margin-top: 15px;">
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important; float: right;">16 | STATE OF THE RICE SECTOR IN THE PHILIPPINES</p>
                            </div>
                        </div>

                    </div>
                </main>
            </div>
        </div>

        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br class="pagebreak">

        <!-- INCOME 3 -->

        <div class="container-fluid" id="incomes3">
            <div class="row">
                <main role="main" class="col">
                    <div class="sublevel" id="income3">

                        <!-- FOR VERTICAL PRINT IN BLACK EDGING LEFT SIDE -->
                        <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; transform:scale(-1); float: left; margin-left: -17px; margin-top: 35px;">RICE PROFITABILITY INDICATOR</p>

                        <div class="row">
                            <div class="col">
                                <div class="card mb-4" id="income3-chart1" id="production2-chartall" style="margin: 40px 40px 0px 10px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a> -->
                                        <div class="chart-toggles" data-html2canvas-ignore="true">
                                            <div class="btn-group btn-group-toggle btn-income" data-toggle="buttons">
                                                <label class="btn btn-secondary">
                                                    <input type="radio" name="toggle_type" id="showCost" checked> Total Cost
                                                </label>
                                                <!-- <label class="btn btn-secondary">
                                                    <input type="radio" name="toggle_type" id="showNet"> Net Returns
                                                </label>
                                                <label class="btn btn-secondary">
                                                    <input type="radio" name="toggle_type" id="showGross"> Gross Returns
                                                </label> -->
                                            </div>
                                        </div>
                                        <h5 id="chart2-income" class="my-0 pt-2 pb-2">Total Cost per Hectare of Rice Production by Region (2020)</h5>
                                        <p class="my-0 font-weight-normal text-muted">in peso (PSA, 2022)</p>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <canvas id="ctxWideRegions"></canvas>
                                            <canvas id="ctxWideRegions2"></canvas>
                                            <canvas id="ctxWideRegions3"></canvas>
                                        </div>
                                    </div>
                                    <div class="card-footer text-muted">
                                        Data Source: <a href="https://palaystat.philrice.gov.ph/statistics/retrieve/table/1" target="_blank">Estimated production, area harvested and yield per hectare (PAY) - PalayStat System</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- PAGE NUMBER -->
                        <div class="row" style="margin-left: 25px; margin-top: -10px;">
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important;">17 | STATE OF THE RICE SECTOR IN THE PHILIPPINES</p>
                            </div>
                        </div>

                    </div>
                </main>
            </div>
        </div>

        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br class="pagebreak">

        <!-- IMPEXPORT 1 -->

        <div class="container-fluid" id="impexports1">
            <div class="row">
                <main role="main" class="col">
                    <!-- Header --->
                    <!-- <div id="imports" class="jumbotron text-left">
                        <div class="jumbotron-content">
                            <h2>State of the Rice Sector in the Philippines</h2>
                            <h1>Imports and Exports</h1>
                            <p class="lead"><i>How much rice do import and export?</i> Find out the country’s yearly rice importation and exportation<br /> information, as well as the percentage share of imported and locally produced rice to the total supply.</p>
                        </div>
                    </div> -->

                    <!-- Body -->
                    <div class="sublevel" id="impexport1">

                        <!-- FOR VERTICAL PRINT IN BLACK EDGING RIGHT SIDE -->
                        <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; float: right; margin-right: -17px; margin-top: 35px;">IMPORTS AND EXPORTS</p>

                        <div style="margin-left: 45px; margin-top: 7px;">
                            <h1 style="font-size: 65px;">Imports and Exports</h1>
                            <br>
                            <p class="lead"><i>How much rice do import and export?</i> Find out the country's yearly rice importation and exportation<br /> information, as well as the percentage share of imported and locally produced rice to the total supply.</p>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="card-deck mb-2 text-center" style="margin-left: 45px; margin-top: 10px; margin-right: -18px;">
                                    <div class="card primary mb-4 bg-primary text-white">
                                        <div class="card-body">
                                            <h5 class="card-title pb-2">Total Imports (2020)</h5>
                                            <h1 class="card-text font-weight-bold"><?php echo number_format($supply_sources_values['SUImports'] / 1000, 2); ?><i class="bi bi-caret-down-fill"></i></h1>
                                            <div class="card-note bg-warning w-50 mx-auto rounded-pill">
                                                <p class="text-white">million metric tons</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card primary mb-4 bg-primary text-white">
                                        <div class="card-body">
                                            <h5 class="card-title pb-2">Total Exports (2020)</h5>
                                            <h1 class="card-text font-weight-bold">&lt; 1,000 <i class="bi bi-dash"></i></h1>
                                            <div class="card-note bg-warning w-25 mx-auto rounded-pill">
                                                <p class="text-white">metric tons</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="card mb-4" id="impexport1-chart1" style="margin-left: 55px; margin-top: -20px; margin-right: -10px; ">
                                    <div class="card-header text-left">         
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a> -->
                                        <h5 class="my-0 pt-2 pb-2">Rice Imports and Exports (2000-2020)</h5>
                                        <p class="my-0 font-weight-normal text-muted">in thousand metric tons ('000) (PSA, 2021)</p>
                                    </div>
                                    <div class="card-body mt-4 mb-4">
                                        <div><canvas id="ctxImports"></canvas></div>
                                    </div>
                                    <div class="card-footer text-muted">Note: Exports is at &lt; 1,000 metric tons except for 2008 at 1,000 tons and 2013 at 2,000 tons.<br/>
                                        Data Source: <a href="https://openstat.psa.gov.ph/PXWeb/pxweb/en/DB/DB__2B__AA__SU/0012B5FSUA0.px/?rxid=6c040b24-38b8-42c7-84a6-881d5b00f633" target="_blank">Rice and Corn: Supply Utilization Accounts  - Philippine Statistics Authority</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card mb-4" id="impexport1-chart2" style="margin-right: 35px; margin-top: -20px; margin-left: 10px">
                                    <div class="card-header text-left">         
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a> -->
                                        <h5 class="my-0 pt-2 pb-2">Sources of Rice Imports by Country of Origin (2020)</h5>
                                        <p class="my-0 font-weight-normal text-muted">in percent (PSA, 2021) </p>
                                    </div>
                                    <div class="card-body">
                                        <div><canvas id="ctxImportSources"></canvas></div>
                                    </div>
                                    <div class="card-footer text-muted">Note: Other countries include Pakistan, Korea, Taiwan, Cambodia, Japan, Italy, Bangladesh, and Spain.<br/>
                                        Data Source: <a href="https://palaystat.philrice.gov.ph/statistics/retrieve/table/16" target="_blank">Quantity and value of imports, by country of origin - PalayStat System</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- PAGE NUMBER -->
                        <div class="row" style="margin-right: 22px; margin-top: -10px;">
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important; float: right;">18 | STATE OF THE RICE SECTOR IN THE PHILIPPINES</p>
                            </div>
                        </div>

                    </div>
                </main>
            </div>
        </div>

        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br class="pagebreak">

        <!-- IMPEXPORT 2 -->

        <div class="container-fluid" id="impexports2">
            <div class="row">
                <main role="main" class="col">
                    <div class="sublevel" id="impexport2">

                        <!-- FOR VERTICAL PRINT IN BLACK EDGING LEFT SIDE -->
                        <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; transform:scale(-1); float: left; margin-left: -17px; margin-top: 35px;">IMPORTS AND EXPORTS</p>

                        <div class="row">
                            <div class="col">
                                <div class="card mb-4" id="impexport2-chart1" style="margin: 40px 40px 0px 10px;">
                                    <div class="card-header text-left">
                                        
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a> -->
                                        <h5 class="my-0 pt-2 pb-2">Percentage Share of Rice Imports and Local Production to Total Supply (2000-2020)</h5>
                                        <p class="my-0 font-weight-normal text-muted">Excluding beginning stocks (PSA, 2021)</p>
                                    </div>
                                    <div class="card-body">
                                        <div><canvas id="ctxImportLocal"></canvas></div>
                                    </div>
                                    <div class="card-footer text-muted">
                                        Data Source: <a href="https://openstat.psa.gov.ph/PXWeb/pxweb/en/DB/DB__2B__AA__SU/0012B5FSUA0.px/?rxid=6c040b24-38b8-42c7-84a6-881d5b00f633" target="_blank">Rice and Corn: Supply Utilization Accounts  - Philippine Statistics Authority</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- PAGE NUMBER -->
                        <div class="row" style="margin-left: 30px; margin-top: 135px;">
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important;">19 | STATE OF THE RICE SECTOR IN THE PHILIPPINES</p>
                            </div>
                        </div>
                    
                    </div>
                </main>
            </div>
        </div>

        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br class="pagebreak">

        <!-- STOCK 1 -->

        <div class="container-fluid" id="stocks1">
            <div class="row">
                <main role="main" class="col">
                    <!-- Header --->
                    <!-- <div id="stock" class="jumbotron text-left">
                        <div class="jumbotron-content">
                            <h2>State of the Rice Sector in the Philippines</h2>
                            <h1>Rice Stock Inventory</h1>
                            <p class="lead" </p>
                        </div>
                    </div> -->

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
                    <div class="sublevel" id="stock1">

                        <!-- FOR VERTICAL PRINT IN BLACK EDGING RIGHT SIDE -->
                        <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; float: right; margin-right: -17px; margin-top: 35px;">RICE STOCK INVENTORY</p>

                        <div style="margin-left: 45px; margin-top: 7px;">
                            <h1 style="font-size: 67px;">Rice Stock Inventory</h1>
                            <br>
                            <p class="lead"> </p>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="card-deck mb-2 text-center" style="margin-left: 45px; margin-top: 10px; margin-right: -15px;">
                                    <div class="card primary mb-4 bg-primary text-white">
                                        <div class="card-body">
                                            <h5 class="card-title pb-2" style="font-size: 13px;">Total (<?php echo $monthyear; ?>)</h5>
                                            <h1 class="card-text font-weight-bold smaller"><?php echo $total[0]['value']; ?><i class="<?php echo $total_caret; ?>"></i></h1>
                                            <div class="card-note w-75 mx-auto rounded-pill bg-warning">
                                                <p class="text-white">million metric tons</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card primary mb-4 bg-alternate">
                                        <div class="card-body">
                                            <h5 class="card-title pb-2" style="font-size: 13px;">Household Stock (<?php echo $monthyear; ?>)</h5>
                                            <h1 class="card-text font-weight-bold smaller"><?php echo $household[0]['value']; ?><i class="<?php echo $h_caret; ?>"></i></h1>
                                            <div class="card-note w-75 mx-auto rounded-pill bg-primary">
                                                <p class="text-white">million metric tons</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card primary mb-4 bg-alternate">
                                        <div class="card-body">
                                            <h5 class="card-title pb-2" style="font-size: 13px;">Commerical Stock (<?php echo $monthyear; ?>)</h5>
                                            <h1 class="card-text font-weight-bold smaller"><?php echo $commercial[0]['value']; ?><i class="<?php echo $c_caret; ?>"></i></h1>
                                            <div class="card-note w-75 mx-auto rounded-pill bg-primary">
                                                <p class="text-white">million metric tons</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card primary mb-4 bg-alternate">
                                        <div class="card-body">
                                            <h5 class="card-title pb-2" style="font-size: 13px;">NFA Stock (<?php echo $monthyear; ?>)</h5>
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
                                <div class="card mb-4" id="stock1-chart1" style="margin-left: 55px; margin-top: -20px; margin-right: 35px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a> -->
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

                        <!-- PAGE NUMBER -->
                        <div class="row" style="margin-right: 25px; margin-top: -5px;">
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important; float: right;">20 | STATE OF THE RICE SECTOR IN THE PHILIPPINES</p>
                            </div>
                        </div>

                    </div>
                </main>
            </div>
        </div>

        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br class="pagebreak">

        <!-- STOCK 2 -->

        <div class="container-fluid" id="stocks2">
            <div class="row">
                <main role="main" class="col">
                    <div class="sublevel" id="stock2">

                        <!-- FOR VERTICAL PRINT IN BLACK EDGING LEFT SIDE -->
                        <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; transform:scale(-1); float: left; margin-left: -17px; margin-top: 35px;">RICE STOCK INVENTORY</p>

                        <div class="row">
                            <div class="col">
                                <div class="card mb-4" id="stock2-chart1" style="margin: 40px 45px 0px 10px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a> -->
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

                        <!-- PAGE NUMBER -->
                        <div class="row" style="margin-left: 30px; margin-top: 135px;">
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important;">21 | STATE OF THE RICE SECTOR IN THE PHILIPPINES</p>
                            </div>
                        </div>

                    </div>
                </main>
            </div>
        </div>

        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br class="pagebreak">

        <!-- PRICES 1 -->

        <div class="container-fluid" id="prices1">
            <div class="row">
                <main role="main" class="col">
                    <!-- Header --->
                    <!-- <div id="prices" class="jumbotron text-left">
                        <div class="jumbotron-content">
                            <h2>State of the Rice Sector in the Philippines</h2>
                            <h1>Rice Market Prices</h1>
                            <p class="lead"><i>How does the price of un-hulled and de-hulled rice fare in the marketplace?</i><br/>Know the current and historical prices of rice. </p>
                        </div>
                    </div> -->
            
                    <!-- Body -->
                    <div class="sublevel" id="price1">

                        <!-- FOR VERTICAL PRINT IN BLACK EDGING RIGHT SIDE -->
                        <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; float: right; margin-right: -17px; margin-top: 35px;">RICE MARKET PRICES</p>

                        <div style="margin-left: 47px; margin-top: 7px;">
                            <h1 style="font-size: 65px;">Rice Market Prices</h1>
                            <br>
                            <p class="lead"><i>How does the price of un-hulled and de-hulled rice fare in the marketplace?</i><br/>Know the current and historical prices of rice. </p>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="card-deck mb-2 text-center" style="margin-left: 45px; margin-top: 10px; margin-right: -18px;">
                                    <div class="card primary mb-4 bg-primary text-white price-card">
                                        <div class="card-body">
                                            <h5 class="card-title mt-1">Dry Palay Price (2021)</h5>
                                            <h1 class="card-text mt-4 font-weight-bold smaller"><?php echo $farmgate['value']; ?><i class="<?php echo $farm_caret; ?>"></i></h1>
                                            <div class="card-note bg-warning w-50 mt-3 mx-auto rounded-pill">
                                                <p class="text-white mb-0">Pesos Per Kilogram</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card primary mb-4 bg-primary text-white price-card">
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
                                                    <p class="text-white text-uppercase mb-0">Pesos Per Kilogram</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card primary mb-4 bg-primary text-white price-card">
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
                                                    <p class="text-white text-uppercase mb-0">Pesos Per Kilogram</p>
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
                                        <h5 class="my-0 pt-2 pb-2">Nominal and Real Prices of Dry Palay (2001-2021)</h5>
                                        <p class="my-0 font-weight-normal text-muted">in Peso (PSA, 2021)</p>
                                    </div>
                                    <div class="card-body">
                                        <div><canvas id="ctxFarmPrices"></canvas></div>
                                    </div>
                                    <div class="card-footer text-muted">
                                        Data Source: <a href="https://palaystat.philrice.gov.ph/statistics/retrieve/table/15" target="_blank">Annual and semestral average farmgate, wholesale and retail prices, ordinary palay/rice - PalayStat System</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- PAGE NUMBER -->
                        <div class="row" style="margin-right: 22px; margin-top: -2px;">
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important; float: right;">22 | STATE OF THE RICE SECTOR IN THE PHILIPPINES</p>
                            </div>
                        </div>

                    </div>
                </main>
            </div>
        </div>

        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br class="pagebreak">

        <!-- PRICES 2 -->

        <div class="container-fluid" id="prices2">
            <div class="row">
                <main role="main" class="col">
                    <div class="sublevel" id="price2">

                        <!-- FOR VERTICAL PRINT IN BLACK EDGING LEFT SIDE -->
                        <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; transform:scale(-1); float: left; margin-left: -17px; margin-top: 35px;">RICE MARKET PRICES</p>

                        <div class="row">
                            <div class="col">
                                <div class="card mb-4" id="price2-chart1" style="margin: 40px 45px 0px 10px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a> -->
                                        <h5 class="my-0 pt-2 pb-2">Wholesale Prices of Regular and Well-milled Rice (2001-2021)</h5>
                                        <p class="my-0 font-weight-normal text-muted">in Peso (PSA, 2021)</p>
                                    </div>
                                    <div class="card-body">
                                        <div><canvas id="ctxWholesalePrices"></canvas></div>
                                    </div>
                                    <div class="card-footer text-muted">
                                        Data Source: <a href="https://palaystat.philrice.gov.ph/statistics/retrieve/table/15" target="_blank">Annual and semestral average farmgate, wholesale and retail prices, ordinary palay/rice - PalayStat System</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="card mb-4" id="price2-chart2" style="margin: -15px 60px 0px 37px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a> -->
                                        <h5 class="my-0 pt-2 pb-2">Retail Prices of Regular and Well-milled Rice (2001-2021)</h5>
                                        <p class="my-0 font-weight-normal text-muted">in Peso (PSA, 2021)</p>
                                    </div>
                                    <div class="card-body">
                                        <div><canvas id="ctxRetailPrices"></canvas></div>
                                    </div>
                                    <div class="card-footer text-muted">
                                        Data Source: <a href="https://palaystat.philrice.gov.ph/statistics/retrieve/table/15" target="_blank">Annual and semestral average farmgate, wholesale and retail prices, ordinary palay/rice - PalayStat System</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- PAGE NUMBER -->
                        <div class="row" style="margin-left: 23px; margin-top: -10px;">
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important;">23 | STATE OF THE RICE SECTOR IN THE PHILIPPINES</p>
                            </div>
                        </div>

                    </div>
                </main>
            </div>
        </div>

        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br class="pagebreak">

        <!-- YIELD COST 1 -->

        <div class="container-fluid" id="yieldcosts1">
            <div class="row">
                <main role="main" class="col">
                    <!-- Header --->
                    <!-- <div id="yieldcost" class="jumbotron text-left">
                        <div class="jumbotron-content">
                            <h2>State of the Rice Sector in the Philippines</h2>
                            <h1>Productivity Indicators</h1>
                            <p class="lead"><i>How productive are our farmers in terms of having high yield with less cost?</i> Explore the yield and cost analysis per province, <br /> distribution of cost items per hectare, and comparison of NPK utilization among the top yielding provinces.</p>
                        </div>
                    </div> -->

                    <!-- Body -->
                    <div class="sublevel container" id="yieldcost1">

                        <!-- FOR VERTICAL PRINT IN BLACK EDGING RIGHT SIDE -->
                        <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; float: right; margin-right: -17px; margin-top: 35px;">PRODUCTIVITY INDICATORS</p>

                        <div style="margin-left: 45px; margin-top: 7px;">
                            <h1 style="font-size: 65px;">Productivity Indicators</h1>
                            <br>
                            <p class="lead"><i>How productive are our farmers in terms of having high yield with less cost?</i> Explore the yield and cost analysis per province, <br /> distribution of cost items per hectare, and comparison of NPK utilization among the top yielding provinces.</p>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="card-deck mb-2 text-center" style="margin-left: 45px; margin-top: 10px; margin-right: -13px;">
                                    <div class="card primary mb-4 bg-primary text-white">
                                        <div class="card-body">
                                            <h5 class="card-title pb-2">Yield per Hectare (2020)</h5>
                                            <h1 class="card-text font-weight-bold"><?php echo $yield_all['value']; ?><i class="<?php echo $yield_caret; ?>"></i></h1>
                                            <div class="card-note bg-warning w-50 mx-auto rounded-pill">
                                                <p class="text-white">metric tons per hectare</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card primary mb-4 bg-primary text-white">
                                        <div class="card-body">
                                            <h5 class="card-title pb-2">Production Cost (2020)</h5>
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
                                <div class="card mb-4" id="yieldcost1-chart1" style="margin-left: 55px; margin-top: -20px; margin-right: 40px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a> -->
                                        <h5 class="my-0 pt-2 pb-2">Yield and Production Cost of Major Rice-producing Provinces (2017)</h5>
                                        <p class="my-0 font-weight-normal text-muted">Yield in metric tons per hectare, Cost in peso per kilogram (RBFHS, PhilRice-SED, 2019)</p>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <p class="text-center mb-0">Low Yield</p>
                                            </div>
                                            <div class="col-5">
                                                <p class="text-center mb-0">High Yield</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-11">
                                                <canvas id="ctxYieldCost"></canvas>
                                            </div>
                                            <div class="col-1 pl-0">
                                                <div class="d-flex h-50 align-items-center">
                                                    <p class="mb-0">High Cost</p>
                                                </div>
                                                <div class="d-flex h-50 align-items-center">
                                                    <p class="mb-0">Low Cost</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer text-muted">
                                        Data Source: <a href="https://palaystat.philrice.gov.ph/profile/retrieve/table/37" target="_blank">Costs and returns of rice production - PalayStat System</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- PAGE NUMBER -->
                        <div class="row" style="margin-right: 23px; margin-top: -5px;">
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important; float: right;">24 | STATE OF THE RICE SECTOR IN THE PHILIPPINES</p>
                            </div>
                        </div>

                    </div>
                </main>
            </div>
        </div>

        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br class="pagebreak">

        <!-- YIELD COST 2 -->
        
        <div class="container-fluid" id="yieldcosts2">
            <div class="row">
                <main role="main" class="col">
                    <div class="sublevel" id="yieldcost2">

                        <!-- FOR VERTICAL PRINT IN BLACK EDGING LEFT SIDE -->
                        <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; transform:scale(-1); float: left; margin-left: -17px; margin-top: 35px;">PRODUCTIVITY INDICATORS</p>

                        <div class="row">
                            <div class="col">
                                <div class="card mb-4" id="yieldcost2-chart1" style="margin: 40px 45px 0px 10px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a> -->
                                        <h5 class="my-0 pt-2 pb-2">Cost Shares in Rice Production (2000-2020)</h5>
                                        <p class="my-0 font-weight-normal text-muted">in percent (%) (PSA, 2021)</p>
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

                        <!-- PAGE NUMBER -->
                        <div class="row" style="margin-left: 30px; margin-top: 50px;">
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important;">25 | STATE OF THE RICE SECTOR IN THE PHILIPPINES</p>
                            </div>
                        </div>

                    </div>
                </main>
            </div>
        </div>


        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br class="pagebreak">

        <!-- YIELD COST 3 -->                

        <div class="container-fluid" id="yieldcosts3">
            <div class="row">
                <main role="main" class="col">
                    <div class="sublevel" id="yieldcost3">

                        <!-- FOR VERTICAL PRINT IN BLACK EDGING RIGHT SIDE -->
                        <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; float: right; margin-right: -17px; margin-top: 35px;">PRODUCTIVITY INDICATORS</p>

                        <div class="row">
                            <div class="col">
                                <div class="card mb-4" id="yieldcost3-chart1" style="margin: 40px -5px 0px 55px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a> -->
                                        <h5 class="my-0 pt-2 pb-2">Average N-P-K Rates by Province (2019)</h5>
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

                        <!-- PAGE NUMBER -->
                        <div class="row" style="margin-right: 30px; margin-top: -10px;">
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important; float: right;">26 | STATE OF THE RICE SECTOR IN THE PHILIPPINES</p>
                            </div>
                        </div>

                    </div>
                </main>
            </div>
        </div>

        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br class="pagebreak">

        <!-- PROFILE -->

        <div class="container-fluid" id="profiles1">
            <div class="row">
                <main role="main" class="col">
                    <!-- Header --->
                    <!-- <div id="main" class="jumbotron text-left">
                        <div class="jumbotron-content">
                            <h2>Profile of the </h2>
                            <h1>Filipino Rice Farmer</h1>
                            <p class="lead"><i>How do we characterize the rice farmers in the Philippines?</i> Understand the important attributes<br/>that contributes to their overall being as our producers of rice.</p>
                            <div class="card-note w-25 mx-auto rounded-pill bg-light">
                                <h6 class="text-dark p-1">Rice Farmers: <strong>2.4 MILLION</strong> (PSA, 2020)</h6>
                            </div>
                        </div>
                    </div> -->

                    <!-- Body -->
                    <div class="farmer dashboard" id="dashboard-farmer">

                        <!-- FOR VERTICAL PRINT IN BLACK EDGING LEFT SIDE -->
                        <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; transform:scale(-1); float: left; margin-left: -17px; margin-top: 35px;">FILIPINO RICE FARMER</p>

                        <div style="margin-left: 40px; margin-top: 7px;">
                            <h1 style="font-size: 65px;">Filipino Rice Farmer</h1>
                            <br>
                            <p class="lead"><i>How do we characterize the rice farmers in the Philippines?</i> Understand the important attributes<br/>that contributes to their overall being as our producers of rice.</p>
                            <div class="card-note w-25 mx-auto rounded-pill bg-light" style="margin-left: 0px !important; width: fit-content; width: 310px !important;">
                                <h6 class="text-dark p-1">Rice Farmers: <strong>2.4 MILLION</strong> (PSA, 2020)</h6>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="card-deck text-center mb-0 text-white" style="margin-left: 35px; margin-top: 10px; margin-right: 45px;">
                                    <div class="card primary mb-2 bg-warning">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col border-right">
                                                    <h5 class="card-title text-left"><a href="<?php echo base_url(); ?>monthlyincome" class="text-white stretched-link text-decoration-none card-sec">Estimated Monthly Income (2016)</a></h5>
                                                    <h1 class="card-text font-weight-bold">P <?php echo number_format($monthly_income_all['value']); ?><i class="bi bi-caret-up-fill text-primary"></i></h1>
                                                    <div class="card-note w-50 mx-auto rounded-pill bg-primary">
                                                        <p class="text-white">per household</p>
                                                    </div>
                                                </div>
                                                <div class="col border-right">
                                                    <h5 class="card-title text-left"><a href="<?php echo base_url(); ?>monthlyincome" class="text-white stretched-link text-decoration-none card-sec">Above Poverty Threshold (2016)</a></h5>
                                                    <h1 class="card-text font-weight-bold"><?php echo number_format($poverty_all['value']); ?>%<i class="bi bi-caret-up-fill text-primary"></i></h1>
                                                    <div class="card-note w-50 mx-auto rounded-pill bg-primary">
                                                        <p class="text-white">of farming households</p>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <h5 class="card-title text-left"><a href="<?php echo base_url(); ?>monthlyincome" class="text-white stretched-link text-decoration-none card-sec">Monthly Poverty Threshold (2015)</a></h5>
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
                                <div class="card-deck mt-0 text-center text-white" style="margin-left: 35px; margin-top: -10px; margin-right: 50px;">
                                    <div class="card primary mb-4 col-12 text-dark row-w">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col border-right">
                                                    <h6 class="card-title text-left"><a href="<?php echo base_url(); ?>social" class="text-dark stretched-link text-decoration-none farmer-sec">Average Age (2016)</a></h6>
                                                    <h2 class="card-text"><?php echo $mean_age_all['value']; ?><i class="bi bi-caret-up-fill text-primary"></i></h2>
                                                    <div class="card-note w-75 mx-auto rounded-pill bg-warning">
                                                        <p class="text-white">years old</p>
                                                    </div>
                                                </div>
                                                <div class="col border-right">
                                                    <h6 class="card-title text-left mb-2"><a href="<?php echo base_url(); ?>social" class="text-dark stretched-link text-decoration-none farmer-sec">Sex (2016)</a></h6>
                                                    <div><canvas id="ctxSex"></canvas></div>
                                                    <div class="card-note w-75 mx-auto rounded-pill bg-warning mt-2">
                                                        <p class="text-white">male</p>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <h6 class="card-title text-left mb-2"><a href="<?php echo base_url(); ?>social" class="text-dark stretched-link text-decoration-none farmer-sec">Civil Status (2016)</a></h6>
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
                                <div class="card-deck mt-0 text-center text-white" style="margin-left: 35px; margin-top: -15px !important; margin-right: 50px;">
                                    <div class="card primary mb-4 col-6 text-dark row-w">
                                        <div class="card-body pl-3 pr-3 pb-0">
                                            <div class="row">
                                                <div class="col border-right">
                                                    <h6 class="card-title text-left"><a href="<?php echo base_url(); ?>farmdetails" class="text-dark stretched-link text-decoration-none card-sec">Average Farm Size (2016)</a></h6>
                                                    <h2 class="card-text"><?php echo $avefarm_all['value']; ?><i class="bi bi-caret-up-fill text-primary"></i></h2>
                                                    <div class="card-note w-50 mx-auto rounded-pill bg-warning">
                                                        <p class="text-white">hectares</p>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <h6 class="card-title text-left mb-2"><a href="<?php echo base_url(); ?>farmdetails" class="text-dark stretched-link text-decoration-none card-sec">Farm Ownership (2016)</a></h6>
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
                                                    <h6 class="card-title text-left"><a href="<?php echo base_url(); ?>hhsizeincome" class="text-dark stretched-link text-decoration-none card-sec">Household Size (2016)</a></h6>
                                                    <h2 class="card-text"><?php echo $hhsize_all['value']; ?><i class="bi bi-dash text-primary"></i></h2>
                                                    <div class="card-note w-75 mx-auto rounded-pill bg-warning">
                                                        <p class="text-white">members</p>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <h6 class="card-title text-left mb-2"><a href="<?php echo base_url(); ?>hhsizeincome" class="text-dark stretched-link text-decoration-none card-sec">Rice as Major Income (2016)</a></h6>
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
                                <div class="card-deck mt-0 text-center text-white" style="margin-left: 35px; margin-top: -15px !important; margin-right: 50px;">
                                    <div class="card primary mb-4 col-6 text-dark row-w">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col border-right">
                                                    <h6 class="card-title text-left"><a href="<?php echo base_url(); ?>educfarmexp" class="text-dark stretched-link text-decoration-none card-sec">Formal Education (2016)</a></h6>
                                                    <h2 class="card-text"><?php echo number_format($educ_all['value']); ?><i class="bi bi-caret-up-fill text-primary"></i></h2>
                                                    <div class="card-note w-50 mx-auto rounded-pill bg-warning">
                                                        <p class="text-white">years</p>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <h6 class="card-title text-left mb-2"><a href="<?php echo base_url(); ?>educfarmexp" class="text-dark stretched-link text-decoration-none card-sec">Farming Experience (2016)</a></h6>
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
                                                    <h6 class="card-title text-left mb-2"><a href="<?php echo base_url(); ?>orgtraining" class="text-dark stretched-link text-decoration-none card-sec">Organization (2016)</a></h6>
                                                    <div><canvas id="ctxOrg"></canvas></div>
                                                    <div class="card-note w-75 mx-auto rounded-pill bg-warning mt-2">
                                                        <p class="text-white">Members</p>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <h6 class="card-title text-left mb-2"><a href="<?php echo base_url(); ?>orgtraining" class="text-dark stretched-link text-decoration-none card-sec">Trainings (2016)</a></h6>
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
                        <div class="row" style="margin-left: 30px; margin-top: 15px";>
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important;">27 | STATE OF THE RICE SECTOR IN THE PHILIPPINES</p>
                            </div>
                        </div>

                    </div>
                </main>
            </div>
        </div>

        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br class="pagebreak">

        <!-- MONTHLY INCOME 1 -->

        <div class="container-fluid" id="monthlyincomes1">
            <div class="row">
                <main role="main" class="col">
                    <!-- Header --->
                    <!-- <div id="netincome" class="jumbotron text-left">
                        <div class="jumbotron-content">
                            <h2>Profile of the Filipino Rice Farmer</h2>
                            <h1>Estimated Monthly Income</h1>
                        </div>
                    </div> -->
                    
                    <!-- Body -->
                    <div class="sublevel" id="monthlyincome1">

                        <!-- FOR VERTICAL PRINT IN BLACK EDGING RIGHT SIDE -->
                        <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; float: right; margin-right: -17px; margin-top: 35px;">ESTIMATED MONTHLY INCOME</p>

                        <div style="margin-left: 45px; margin-top: 7px;">
                            <br>
                            <h2>Profile of the Filipino Rice Farmer</h2>
                            <h1 style="font-size: 65px;">Estimated Monthly Income</h1>
                            <br>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="card-deck mb-2 text-center" style="margin-left: 45px; margin-top: 10px; margin-right: -18px;">
                                    <div class="card primary mb-4 bg-primary-2 text-white">
                                    <div class="card-body">
                                        <h5 class="card-title pb-2">Estimated Monthly Income (2016)</h5>
                                        <h1 class="card-text font-weight-bold">P <?php echo number_format($monthly_income_all['value']); ?><i class="bi bi-caret-up-fill"></i></h1>
                                        <div class="card-note w-50 mx-auto rounded-pill bg-primary"><p class="text-white">per household</p></div>
                                    </div>
                                    </div>
                                    <div class="card primary mb-4 bg-gold text-white">
                                    <div class="card-body">
                                        <h5 class="card-title pb-2">Above Poverty Threshold (2016)</h5>
                                        <h1 class="card-text font-weight-bold"><?php echo number_format($poverty_all['value']); ?>%<i class="bi bi-caret-up-fill"></i></h1>
                                        <div class="card-note w-75 mx-auto rounded-pill"><p class="text-white">of farming households</p></div>
                                    </div>
                                    </div>
                                    <div class="card primary mb-4 bg-gold text-white">
                                    <div class="card-body">
                                        <h5 class="card-title pb-2">Monthly Poverty Threshold (2015)</h5>
                                        <h1 class="card-text font-weight-bold">P <?php echo number_format($poverty_threshold_all['value']); ?><i class="bi bi-caret-up-fill"></i></h1>
                                        <div class="card-note w-75 mx-auto rounded-pill"><p class="text-white">Per Household of 5</p></div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="row">
                            <div class="col">
                                <div class="card mb-4" id="monthlyincome1-chart1" style="margin-left: 55px; margin-top: -20px; margin-right: -25px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart text-white" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt ml-0"></i></a> -->
                                        <h5 class="my-0 pt-2 pb-2">Estimated Monthly Income by Survey Year (1996-2016)</h5>
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
                                <div class="card mb-4" id="monthlyincome1-chart2" style="margin-top: -20px; margin-right: 5px; margin-left: 25px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart text-white" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt ml-0"></i></a> -->
                                        <h5 class="my-0 pt-2 pb-2">Above Poverty Threshold by Survey Year (1996-2016)</h5>
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
                                <div class="card mb-4" id="monthlyincome1-chart3" style="margin-top: -20px; margin-right: 35px; margin-left: -10px;">
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
                         <div class="row" style="margin-right: 26px; margin-top: 35px;">
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important; float: right;">28 | STATE OF THE RICE SECTOR IN THE PHILIPPINES</p>
                            </div>
                        </div>

                    </div>
                </main>
            </div>
        </div>

        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br class="pagebreak">

        <!-- MONTHLY INCOME 2 -->
        <!-- KULANG NG DATA YUNG TABLE, HINDI SUMAMA UNG KULAY NG CELL -->

        <div class="container-fluid" id="monthlyincomes2">
            <div class="row">
                <main role="main" class="col">
                    <div class="sublevel" id="monthlyincome2">

                        <!-- FOR VERTICAL PRINT IN BLACK EDGING LEFT SIDE -->
                        <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; transform:scale(-1); float: left; margin-left: -17px; margin-top: 35px;">ESTIMATED MONTHLY INCOME</p>

                        <div class="row">
                            <div class="col">
                                <div class="card mb-4" id="monthlyincome2-table" style="margin: 40px 45px 40px 15px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Table</a> -->
                                        <h5 class="my-0 pt-2 pb-2">Estimated Monthly Income and Above Poverty Threshold by Province (2016)</h5>
                                        <p class="my-0 font-weight-normal text-muted">(RBFHS, PhilRice-SED, 2019)</p>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex justify-content-center">
                                            <div class="legend-box bg-above-light"></div><p class="d-inline-block text-capitalize">Value Above Average</p>
                                            <div class="legend-box bg-same-light"></div><p class="d-inline-block text-capitalize">Same Value</p>
                                            <div class="legend-box bg-below-light"></div><p class="d-inline-block text-capitalize">Value Below Average</p>
                                        </div>
                                        <table class="table table-hover monthly-income">
                                            <thead>
                                                <tr>
                                                <th scope="col">Region/Province</th>
                                                <th class="text-center" scope="col">Estimated Monthly Income (P)</th>
                                                <th class="text-center" scope="col">Above Poverty Threshold (%)</th>
                                                <th class="text-center" scope="col">Monthly Poverty Threshold (P)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                        $temp_region = $temp_prov = $cell_color = "";
                                                        for ($i = 0; $i < count($monthly_income_provincial); $i++) {
                                                            
                                                            if($monthly_income_provincial[$i]['region'] != $temp_region){
                                                                echo "<tr>";
                                                                echo '<td colspan="4"><span class="font-weight-bold">'. $monthly_income_provincial[$i]['region'] . '</td>';
                                                                echo "</tr>";
                                                            }
                                                            
                                                            $temp_region = $monthly_income_provincial[$i]['region'];
                                                            
                                                            if($monthly_income_provincial[$i]['location_name'] != $temp_prov){
                                                                echo "<tr>";
                                                                echo "<td>" . $monthly_income_provincial[$i]['location_name'] . "</td>";
                                                                
                                                                if ($monthly_income_all['value'] == $monthly_income_provincial[$i]['value']){
                                                                    $cell_color = "table-warning";
                                                                } elseif ($monthly_income_provincial[$i]['value'] == 0){
                                                                    $cell_color = "table-default";
                                                                } elseif ($monthly_income_all['value'] > $monthly_income_provincial[$i]['value']){
                                                                    $cell_color = "table-danger";
                                                                } else {
                                                                    $cell_color = "table-success";
                                                                }
                                                                echo '<td class="text-center '. $cell_color .'"> P '. number_format($monthly_income_provincial[$i]['value']) .'</td>';
                                                                    
                                                                if ($poverty_all['value'] == $poverty_provincial[$i]['value']){
                                                                    $cell_color = "table-warning";
                                                                } elseif ($poverty_provincial[$i]['value'] == 0){
                                                                    $cell_color = "table-default";
                                                                } elseif ($poverty_all['value'] > $poverty_provincial[$i]['value']){
                                                                    $cell_color = "table-danger";
                                                                } else {
                                                                    $cell_color = "table-success";
                                                                }
                                                                echo '<td class="text-center '. $cell_color .'">'. number_format($poverty_provincial[$i]['value']) .'%</td>';
                                                                echo '<td class="text-center">P '. number_format($poverty_threshold_provincial[$i]['value']) .'</td>';
                                                                echo "</tr>";
                                                            }
                                                            
                                                            $temp_prov = $monthly_income_provincial[$i]['location_name'];
                                                            
                                                        }
                                                    ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="card-footer text-muted">Note: [0] = no samples in indicated ecosystem <br/>
                                        Data Source: <a href="https://palaystat.philrice.gov.ph/profile/retrieve/table/6" target="_blank">Estimated monthly per capita income and percentage distribution of income - PalayStat System</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- PAGE NUMBER -->
                        <div class="row" style="margin-left: 30px; margin-top: -10px;">
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important;">29 | STATE OF THE RICE SECTOR IN THE PHILIPPINES</p>
                            </div>
                        </div>

                    </div>
                </main>
            </div>
        </div> 

        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br class="pagebreak">

        <!-- SOCIAL 1 -->

        <div class="container-fluid" id="socials1">
            <div class="row">
                <main role="main" class="col">
                    <!-- Header --->
                    <!-- <div id="social" class="jumbotron text-left">
                        <div class="jumbotron-content">
                            <h2>Profile of the Filipino Rice Farmer</h2>
                            <h1>Age, Sex and Civil Status</h1>
                        </div>
                    </div> -->
                
                    <!-- Body -->
                    <div class="sublevel" id="social1">

                        <!-- FOR VERTICAL PRINT IN BLACK EDGING RIGHT SIDE -->
                        <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; float: right; margin-right: -17px; margin-top: 35px;">AGE, SEX AND CIVIL STATUS</p>

                        <div style="margin-left: 45px; margin-top: 7px;">
                            <br>
                            <h2>Profile of the Filipino Rice Farmer</h2>
                            <h1 style="font-size: 65px;">Age, Sex and Civil Status</h1>
                            <br>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="card-deck mb-2 text-center" style="margin-left: 45px; margin-top: 10px; margin-right: -18px;">
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
                                                <div class="col-3"><h5 class="card-title m-0 p-0">Civil Status (2016) </h5></div>
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
                                        <h5 class="my-0 pt-2 pb-2">Distribution of Age by Survey Year (1996-2016)</h5>
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
                                        <h5 class="my-0 pt-2 pb-2">Distribution of Sex by Survey Year (1996-2016)</h5>
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
                                        <h5 class="my-0 pt-2 pb-2">Distribution of Civil Status by Survey Year (1996-2016)</h5>
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
                        <div class="row" style="margin-right: 24px; margin-top: 13px;">
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important; float: right;">30 | STATE OF THE RICE SECTOR IN THE PHILIPPINES</p>
                            </div>
                        </div>

                    </div>
                </main>
            </div>
        </div>

        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br class="pagebreak">

        <!-- SOCIAL 2 -->
        <!-- KULANG NG DATA YUNG TABLE, HINDI SUMAMA UNG KULAY NG CELL -->

        <div class="container-fluid" id="socials2">
            <div class="row">
                <main role="main" class="col">
                    <div class="sublevel" id="social2">

                        <!-- FOR VERTICAL PRINT IN BLACK EDGING LEFT SIDE -->
                        <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; transform:scale(-1); float: left; margin-left: -17px; margin-top: 35px;">AGE, SEX AND CIVIL STATUS</p>

                        <div class="row">
                            <div class="col">
                                <div class="card mb-4" id="social2-table" style="margin: 40px 45px 40px 15px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Table</a> -->
                                        <h5 class="my-0 pt-2 pb-2">Average Age, Distribution of Sex, and Distribution of Civil Status by Province (2016)</h5>
                                        <p class="my-0 font-weight-normal text-muted">(RBFHS, PhilRice-SED, 2019)</p>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex justify-content-center">
                                            <div class="legend-box bg-below-light"></div><p class="d-inline-block text-capitalize">Age Above Average</p>
                                            <div class="legend-box bg-same-light"></div><p class="d-inline-block text-capitalize">Same Value</p>
                                            <div class="legend-box bg-above-light"></div><p class="d-inline-block text-capitalize">Age Below Average</p>
                                        </div>
                                        <table class="table table-hover social-table">
                                        <thead>
                                            <tr>
                                            <th class="align-middle" scope="col" rowspan="2">Region/Province</th>
                                            <th class="text-center align-middle" scope="col" rowspan="2">Average Age</th>
                                            <th class="text-center" scope="col" colspan="2">Sex</th>
                                            <th class="text-center" scope="col" colspan="4">Civil Status</th>
                                            </tr>
                                            <tr>
                                            <th scope="col">Male</th>
                                            <th scope="col">Female</th>
                                            <th scope="col">Single</th>
                                            <th scope="col">Married</th>
                                            <th scope="col">Widow</th>
                                            <th scope="col">Separated</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                    $temp_region = $temp_prov = $cell_color = "";
                                                    for ($i = 0; $i < count($mean_age_provincial); $i++) {
                                                        
                                                        if($mean_age_provincial[$i]['region'] != $temp_region){
                                                            echo "<tr>";
                                                            echo '<td colspan="8"><span class="font-weight-bold">'. $mean_age_provincial[$i]['region'] . '</td>';
                                                            echo "</tr>";
                                                        }
                                                        
                                                        $temp_region = $mean_age_provincial[$i]['region'];
                                                        
                                                        if($mean_age_provincial[$i]['location_name'] != $temp_prov){
                                                            echo "<tr>";
                                                            echo "<td>" . $mean_age_provincial[$i]['location_name'] . "</td>";
                                                            
                                                            if ($mean_age_all['value'] == $mean_age_provincial[$i]['value']){
                                                                $cell_color = "table-warning";
                                                            } elseif ($mean_age_provincial[$i]['value'] == 0){
                                                                $cell_color = "table-default";
                                                            } elseif ($mean_age_all['value'] > $mean_age_provincial[$i]['value']){
                                                                $cell_color = "table-success";
                                                            } else {
                                                                $cell_color = "table-danger";
                                                            }
                                                            echo '<td class="text-center '. $cell_color .'">'. number_format($mean_age_provincial[$i]['value']) .'</td>';
                                                            echo '<td class="text-center">'. number_format($male_provincial[$i]['value']) .'%</td>';
                                                            echo '<td class="text-center">'. number_format($female_provincial[$i]['value']) .'%</td>';
                                                            echo '<td class="text-center">'. number_format($s_provincial[$i]['value']) .'%</td>';
                                                            echo '<td class="text-center">'. number_format($m_provincial[$i]['value']) .'%</td>';
                                                            echo '<td class="text-center">'. number_format($w_provincial[$i]['value']) .'%</td>';
                                                            echo '<td class="text-center">'. number_format($se_provincial[$i]['value']) .'%</td>';
                                                            echo "</tr>";
                                                                
                                                        }
                                                        
                                                        $temp_prov = $mean_age_provincial[$i]['location_name'];
                                                        
                                                    }
                                                ?>
                                        </tbody>
                                        </table>
                                    </div>
                                    <div class="card-footer text-muted">Note: [blank] = no samples in indicated ecosystem <br/>
                                        Data Source: <a href="https://palaystat.philrice.gov.ph/profile/retrieve/table/1" target="_blank">Socioeconomic characteristics of farmer-respondents - PalayStat System</a>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        
                        <!-- PAGE NUMBER -->
                        <div class="row" style="margin-left: 29px; margin-top: -10px;">
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important;">31 | STATE OF THE RICE SECTOR IN THE PHILIPPINES</p>
                            </div>
                        </div>
                        
                    </div>
                </main>
            </div>
        </div>

        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br class="pagebreak">

        <!-- FARM DETAILS 1 -->

        <div class="container-fluid" id="farmdetails1">
            <div class="row">
                <main role="main" class="col">
                    <!-- Header --->
                    <!-- <div id="farmdetails" class="jumbotron text-left">
                        <div class="jumbotron-content">
                            <h2>Profile of the Filipino Rice Farmer</h2>
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
                    <div class="sublevel" id="farmdetail1">

                        <!-- FOR VERTICAL PRINT IN BLACK EDGING RIGHT SIDE -->
                        <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; float: right; margin-right: -17px; margin-top: 35px;">FARM SIZE AND OWNERSHIP</p>

                        <div style="margin-left: 45px; margin-top: 7px;">
                            <br>
                            <h2>Profile of the Filipino Rice Farmer</h2>
                            <h1 style="font-size: 65px;">Farm Size and Ownership</h1>
                            <br>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="card-deck mb-2 text-center" style="margin-left: 40px; margin-top: 10px; margin-right: -17px;">
                                    <div class="card primary mb-4 bg-primary-2 text-white">
                                    <div class="card-body">
                                        <h5 class="card-title pb-2">Average Farm Size (2016)</h5>
                                        <h1 class="card-text font-weight-bold"><?php echo $avefarm_all['value']; ?><i class="bi bi-caret-up-fill"></i></h1>
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
                                <div class="card mb-4" id="farmdetail1-chart1" style="margin-left: 50px; margin-top: -15px; margin-right: -5px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a> -->
                                        <h5 class="my-0 pt-2 pb-2">Distribution by Farm Size by Survey Year (1996-2016)</h5>
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
                                <div class="card mb-4" id="farmdetail1-chart2" style="margin-left: 10px; margin-top: -15px; margin-right: 35px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a> -->
                                        <h5 class="my-0 pt-2 pb-2">Farm Ownership Status by Survey Year (1996-2016)</h5>
                                        <p class="my-0 font-weight-normal text-muted">in percent (RBFHS, PhilRice-SED, 2019)</p>
                                    </div>
                                    <div class="card-body">
                                        <div><canvas id="ctxTenStatYear"></canvas></div>
                                    </div>
                                    <div class="card-footer text-muted">Note: Others include mortgage, borrowed land, among others <br/>
                                        Data Source: <a href="https://palaystat.philrice.gov.ph/profile/retrieve/table/8" target="_blank">Farm size, number of parcels and farm location - PalayStat System</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- PAGE NUMBER -->
                        <div class="row" style="margin-right: 24px; margin-top: 10px;">
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important; float: right;">32 | STATE OF THE RICE SECTOR IN THE PHILIPPINES</p>
                            </div>
                        </div>

                    </div>
                </main>
            </div>
        </div>

        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br class="pagebreak">

        <!-- FARM DETAILS 2 -->
        <!-- KULANG NG DATA YUNG TABLE, HINDI SUMAMA UNG KULAY NG CELL -->

        <div class="container-fluid" id="farmdetails2">
            <div class="row">
                <main role="main" class="col">
                    <div class="sublevel" id="farmdetail2">

                        <!-- FOR VERTICAL PRINT IN BLACK EDGING LEFT SIDE -->
                        <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; transform:scale(-1); float: left; margin-left: -17px; margin-top: 35px;">FARM SIZE AND OWNERSHIP</p>

                        <div class="row">
                            <div class="col">
                                <div class="card mb-4" id="farmdetail2-table" id="social2-table" style="margin: 40px 45px 40px 15px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Table</a> -->
                                        <h5 class="my-0 pt-2 pb-2">Average Farm Size and Farm Ownership by Province (2016)</h5>
                                        <p class="my-0 font-weight-normal text-muted">(RBFHS, PhilRice-SED, 2019)</p>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex justify-content-center">
                                            <div class="legend-box bg-above-light"></div><p class="d-inline-block text-capitalize">Value Above Average</p>
                                            <div class="legend-box bg-same-light"></div><p class="d-inline-block text-capitalize">Same Value</p>
                                            <div class="legend-box bg-below-light"></div><p class="d-inline-block text-capitalize">Value Below Average</p>
                                        </div>
                                        <table class="table table-hover farmdetail-table">
                                        <thead>
                                            <tr>
                                            <th class="align-middle" scope="col" rowspan="2">Region/Province</th>
                                            <th class="align-middle" scope="col" rowspan="2">Average Farm Size (ha)</th>
                                            <th class="text-center" scope="col" colspan="5">Farm Ownership Status</th>
                                            </tr>
                                            <tr>
                                            <th scope="col">Owner</th>
                                            <th scope="col">Amortizing</th>
                                            <th scope="col">Lessee</th>
                                            <th scope="col">Tenant</th>
                                            <th scope="col">Others</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                    $temp_region = $temp_prov = $cell_color = "";
                                                    for ($i = 0; $i < count($avefarm_provincial); $i++) {
                                                        
                                                        if($avefarm_provincial[$i]['region'] != $temp_region){
                                                            echo "<tr>";
                                                            echo '<td colspan="8"><span class="font-weight-bold">'. $avefarm_provincial[$i]['region'] . '</td>';
                                                            echo "</tr>";
                                                        }
                                                        
                                                        $temp_region = $avefarm_provincial[$i]['region'];
                                                        
                                                        if($avefarm_provincial[$i]['location_name'] != $temp_prov){
                                                            echo "<tr>";
                                                            echo "<td>" . $avefarm_provincial[$i]['location_name'] . "</td>";
                                                            
                                                            if ($avefarm_all['value'] == $avefarm_provincial[$i]['value']){
                                                                $cell_color = "table-warning";
                                                            } elseif ($avefarm_provincial[$i]['value'] == 0){
                                                                $cell_color = "table-default";
                                                            } elseif ($avefarm_all['value'] > $avefarm_provincial[$i]['value']){
                                                                $cell_color = "table-danger";
                                                            } else {
                                                                $cell_color = "table-success";
                                                            }
                                                            echo '<td class="text-center '. $cell_color .'">'. number_format($avefarm_provincial[$i]['value'], 2) .'</td>';
                                                            echo '<td class="text-center">'. number_format($owner_provincial[$i]['value']) .'%</td>';
                                                            echo '<td class="text-center">'. number_format($amort_provincial[$i]['value']) .'%</td>';
                                                            echo '<td class="text-center">'. number_format($lessee_provincial[$i]['value']) .'%</td>';
                                                            echo '<td class="text-center">'. number_format($tenant_provincial[$i]['value']) .'%</td>';
                                                            echo '<td class="text-center">'. number_format($others_provincial[$i]['value']) .'%</td>';
                                                            echo "</tr>";
                                                                
                                                        }
                                                        
                                                        $temp_prov = $avefarm_provincial[$i]['location_name'];
                                                        
                                                    }
                                                ?>
                                        </tbody>
                                        </table>
                                    </div>
                                    <div class="card-footer text-muted">Note: Others include mortgage, borrowed land, among others; [blank] = no samples in indicated ecosystem <br/>
                                        Data Source: <a href="https://palaystat.philrice.gov.ph/profile/retrieve/table/8" target="_blank">Farm size, number of parcels and farm location - PalayStat System</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- PAGE NUMBER -->
                        <div class="row" style="margin-left: 30px; margin-top: -10px;">
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important;">33 | STATE OF THE RICE SECTOR IN THE PHILIPPINES</p>
                            </div>
                        </div>

                    </div>
                </main>
            </div>
        </div>

        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br class="pagebreak">

        <!-- HOUSEHOLD SIZE INCOME 1 -->

        <div class="container-fluid" id="householdsizeincomes1">
            <div class="row">
                <main role="main" class="col"> 
                    <!-- Header --->
                    <!-- <div id="hhsize" class="jumbotron text-left">
                        <div class="jumbotron-content">
                            <h2>Profile of the Filipino Rice Farmer</h2>
                            <h1>Household Size and Source of Income</h1>
                        </div>
                    </div> -->
                    
                    <!-- Body -->
                    <div class="sublevel" id="householdsizeincome1">

                        <!-- FOR VERTICAL PRINT IN BLACK EDGING RIGHT SIDE -->
                        <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; float: right; margin-right: -17px; margin-top: 35px;">HOUSEHOLD SIZE AND SOURCE OF INCOME</p>


                        <div style="margin-left: 45px; margin-top: 7px;">
                            <br>
                            <h2>Profile of the Filipino Rice Farmer</h2>
                            <h1 style="font-size: 53px;">Household Size and Source of Income</h1>
                            <br>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="card-deck mb-2 text-center" style="margin-left: 40px; margin-top: 10px; margin-right: -18px;">
                                    <div class="card primary mb-4 bg-primary-2 text-white hhsize-row">
                                        <div class="card-body">
                                            <h5 class="card-title pb-2">Average Size of Household (2016)</h5>
                                            <h1 class="card-text font-weight-bold mt-3"><?php echo $hhsize_all['value']; ?><i class="bi bi-dash"></i></h1>
                                            <div class="card-note w-50 mx-auto rounded-pill bg-primary"><p class="text-white">Members</p></div>
                                        </div>
                                    </div>
                                    <div class="card primary mb-4 bg-primary-2 text-white hhsize-row">
                                        <div class="card-body">
                                            <div class="row d-flex align-items-center h-100">
                                                <div class="col-5"><h5 class="card-title m-0 p-0">Rice as Major Source of Income (2016)</h5></div>
                                                <div class="col-7"><canvas id="householdsizeincome_ctxSource"></canvas><div class="card-note w-100 m-0 rounded-pill bg-primary"><p class="text-white mt-2">Of Farming Households</p></div></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card primary mb-4 bg-primary-2 text-white hhsize-row">
                                        <div class="card-body">
                                            <div class="row d-flex align-items-center h-100">
                                                <div class="col-5"><h5 class="card-title m-0 p-0">Percent Share of Rice Farming (2016)</h5></div>
                                                <div class="col-7"><canvas id="ctxHSource"></canvas><div class="card-note w-100 m-0 rounded-pill bg-primary"><p class="text-white mt-2">from Household Income</p></div></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="card mb-4" id="householdsizeincome1-chart1" style="margin-left: 50px; margin-top: -15px; margin-right: -5px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a> -->
                                        <h5 class="my-0 pt-2 pb-2">Average Size of Household by Survey Year (1996-2016)</h5>
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
                                <div class="card mb-4" id="householdsizeincome1-chart2" style="margin-left: 10px; margin-top: -15px; margin-right: 35px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a> -->
                                        <h5 class="my-0 pt-2 pb-2">Distribution of Farming Household per Major Sources of Income by Survey Year (1996-2016)</h5>
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
                        <div class="row" style="margin-right: 24px; margin-top: 0px;">
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important; float: right;">34 | STATE OF THE RICE SECTOR IN THE PHILIPPINES</p>
                            </div>
                        </div>

                    </div>
                </main>
            </div>
        </div>

        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br class="pagebreak">

        <!-- HOUSEHOLD SIZE INCOME 2 -->

        <div class="container-fluid" id="householdsizeincomes2">
            <div class="row">
                <main role="main" class="col">
                    <div class="sublevel" id="householdsizeincome2">

                        <!-- FOR VERTICAL PRINT IN BLACK EDGING LEFT SIDE -->
                        <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; transform:scale(-1); float: left; margin-left: -17px; margin-top: 35px;">HOUSEHOLD SIZE AND SOURCE OF INCOME</p>
                                                    
                        <div class="row">
                            <div class="col">
                                <div class="card mb-4" id="householdsizeincome2-table" style="margin: 40px 45px 40px 15px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Table</a> -->
                                        <h5 class="my-0 pt-2 pb-2">Average Size of Household, Distribution of Farming Household per Major Sources of Income, and Percent Share of Rice Farming by Province (2016)</h5>
                                        <p class="my-0 font-weight-normal text-muted">(RBFHS, PhilRice-SED, 2019)</p>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex justify-content-center">
                                            <div class="legend-box bg-above-light"></div><p class="d-inline-block text-capitalize">Value Above Average</p>
                                            <div class="legend-box bg-same-light"></div><p class="d-inline-block text-capitalize">Same Value</p>
                                            <div class="legend-box bg-below-light"></div><p class="d-inline-block text-capitalize">Value Below Average</p>
                                        </div>
                                        <table class="table table-hover householdsizeincome-table">
                                        <thead>
                                            <tr>
                                            <th class="align-middle" scope="col" rowspan="2">Region/Province</th>
                                            <th class="align-middle" scope="col" rowspan="2">Average Household Size</th>
                                            <th class="text-center" scope="col" colspan="2">Distribution of Farming Household per Major Sources of Income</th>
                                            <th class="align-middle text-center" scope="col" rowspan="2">Percent Share of Rice Farming <br/>from Total Household Income (%)</th>
                                            </tr>
                                            <tr>
                                            <th class="align-middle text-center" scope="col">Rice</th>
                                            <th class="align-middle text-center" scope="col">Non-rice</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                    $temp_region = $temp_prov = $cell_color = "";
                                                    for ($i = 0; $i < count($hhsize_provincial); $i++) {
                                                        
                                                        if($hhsize_provincial[$i]['region'] != $temp_region){
                                                            echo "<tr>";
                                                            echo '<td colspan="8"><span class="font-weight-bold">'. $hhsize_provincial[$i]['region'] . '</td>';
                                                            echo "</tr>";
                                                        }
                                                        
                                                        $temp_region = $hhsize_provincial[$i]['region'];
                                                        
                                                        if($hhsize_provincial[$i]['location_name'] != $temp_prov){
                                                            echo "<tr>";
                                                            echo "<td>" . $hhsize_provincial[$i]['location_name'] . "</td>";
                                                            
                                                            if ($hhsize_all['value'] == $hhsize_provincial[$i]['value']){
                                                                $cell_color = "table-warning";
                                                            } elseif ($hhsize_provincial[$i]['value'] == 0){
                                                                $cell_color = "table-default";
                                                            } elseif ($hhsize_all['value'] > $hhsize_provincial[$i]['value']){
                                                                $cell_color = "table-danger";
                                                            } else {
                                                                $cell_color = "table-success";
                                                            }
                                                            echo '<td class="text-center '. $cell_color .'">'. number_format($hhsize_provincial[$i]['value']) .'</td>';
                                                            echo '<td class="text-center">'. number_format($rice_provincial[$i]['value']) .'%</td>';
                                                            echo '<td class="text-center">'. number_format($non_provincial[$i]['value']) .'%</td>';
                                                            echo '<td class="text-center">'. number_format($ricesource_provincial[$i]['value']) .'%</td>';       
                                                            echo "</tr>";
                                                                
                                                        }
                                                        
                                                        $temp_prov = $hhsize_provincial[$i]['location_name'];
                                                        
                                                    }
                                                ?>
                                        </tbody>
                                        </table>
                                    </div>
                                    <div class="card-footer text-muted">Note: [blank] = no samples in indicated ecosystem <br/>
                                        Data Source: <a href="https://palaystat.philrice.gov.ph/profile/retrieve/table/1" target="_blank">Socioeconomic characteristics of farmer-respondents - PalayStat System</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- PAGE NUMBER -->
                        <div class="row" style="margin-left: 32px; margin-top: -10px;">
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important;">35 | STATE OF THE RICE SECTOR IN THE PHILIPPINES</p>
                            </div>
                        </div>

                    </div>
                </main>
            </div>
        </div>

        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br class="pagebreak">

        <!-- EDUC FARM EXP 1 -->

        <div class="container-fluid" id="educfarmexps1">
            <div class="row">
                <main role="main" class="col">
                    <!-- Header --->
                    <!-- <div id="farmexp" class="jumbotron text-left">
                        <div class="jumbotron-content">
                            <h2>Profile of the Filipino Rice Farmer</h2>
                            <h1>Formal Education and Farming Experience</h1>
                        </div>
                    </div> -->
                    
                    <!-- Body -->
                    <div class="sublevel" id="educfarmexp1">

                        <!-- FOR VERTICAL PRINT IN BLACK EDGING RIGHT SIDE -->
                        <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; float: right; margin-right: -17px; margin-top: 35px;">HOUSEHOLD SIZE AND SOURCE OF INCOME</p>

                        <div style="margin-left: 45px; margin-top: 7px;">
                            <br>
                            <h2>Profile of the Filipino Rice Farmer</h2>
                            <h1 style="font-size: 54px;">Formal Education and Farming Experience</h1>
                            <br>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="card-deck mb-2 text-center" style="margin-left: 40px; margin-top: -10px; margin-right: -18px;">
                                    <div class="card primary mb-4 bg-primary-2 text-white">
                                    <div class="card-body">
                                        <h5 class="card-title pb-2">Formal Education (2016)</h5>
                                        <h1 class="card-text font-weight-bold"><?php echo number_format($educ_all['value']); ?><i class="bi bi-caret-up-fill"></i></h1>
                                        <div class="card-note w-25 mx-auto rounded-pill bg-primary"><p class="text-white">years</p></div>
                                    </div>
                                    </div>
                                    <div class="card primary mb-4 bg-primary-2 text-white">
                                    <div class="card-body">
                                        <h5 class="card-title pb-2">Farming Experience (2016)</h5>
                                        <h1 class="card-text font-weight-bold"><?php echo number_format($fexp_all['value']); ?><i class="bi bi-caret-up-fill"></i></h1>
                                        <div class="card-note w-25 mx-auto rounded-pill"><p class="text-white">years</p></div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="row">
                            <div class="col">
                                <div class="card mb-4" id="educfarmexp1-chart1" style="margin-left: 50px; margin-top: -20px; margin-right: -5px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a> -->
                                        <h5 class="my-0 pt-2 pb-2">Distribution of Farmers per Formal Education Level by Survey Year (1996-2016)</h5>
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
                                <div class="card mb-4" id="educfarmexp1-chart2" style="margin-left: 10px; margin-top: -20px; margin-right: 35px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a> -->
                                        <h5 class="my-0 pt-2 pb-2">Average Years of Farming Experience by Survey Year (1996-2016)</h5>
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
                        <div class="row" style="margin-right: 24px; margin-top: -5px;">
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important; float: right;">36 | STATE OF THE RICE SECTOR IN THE PHILIPPINES</p>
                            </div>
                        </div>

                    </div>
                </main>
            </div>
        </div>

        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br class="pagebreak">

        <!-- EDUC FARM EXP 2 -->

        <div class="container-fluid" id="educfarmexps2">
            <div class="row">
                <main role="main" class="col">
                    <div class="sublevel" id="educfarmexp2">

                        <!-- FOR VERTICAL PRINT IN BLACK EDGING LEFT SIDE -->
                        <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; transform:scale(-1); float: left; margin-left: -17px; margin-top: 35px;">HOUSEHOLD SIZE AND SOURCE OF INCOME</p>

                        <div class="row">
                            <div class="col">
                                <div class="card mb-4" id="educfarmexp2-table" style="margin: 40px 45px 40px 15px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Table</a> -->
                                        <h5 class="my-0 pt-2 pb-2">Average Years of Formal Education and Farming Experience by Province (2016)</h5>
                                        <p class="my-0 font-weight-normal text-muted">in years (RBFHS, PhilRice-SED, 2019)</p>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex justify-content-center">
                                            <div class="legend-box bg-above-light"></div><p class="d-inline-block text-capitalize">Value Above Average</p>
                                            <div class="legend-box bg-same-light"></div><p class="d-inline-block text-capitalize">Same Value</p>
                                            <div class="legend-box bg-below-light"></div><p class="d-inline-block text-capitalize">Value Below Average</p>
                                        </div>
                                        <table class="table table-hover educfarmexp-table">
                                        <thead>
                                            <tr>
                                            <th scope="col">Region/Province</th>
                                            <th class="text-center" scope="col">Average Formal Education</th>
                                            <th class="text-center" scope="col">Average Farm Experience</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                    $temp_region = $temp_prov = $cell_color = "";
                                                    for ($i = 0; $i < count($educ_provincial); $i++) {
                                                        
                                                        if($educ_provincial[$i]['region'] != $temp_region){
                                                            echo "<tr>";
                                                            echo '<td colspan="4"><span class="font-weight-bold">'. $educ_provincial[$i]['region'] . '</td>';
                                                            echo "</tr>";
                                                        }
                                                        
                                                        $temp_region = $educ_provincial[$i]['region'];
                                                        
                                                        if($educ_provincial[$i]['location_name'] != $temp_prov){
                                                            echo "<tr>";
                                                            echo "<td>" . $educ_provincial[$i]['location_name'] . "</td>";
                                                            
                                                            if ($educ_all['value'] == $educ_provincial[$i]['value']){
                                                                $cell_color = "table-warning";
                                                            } elseif ($educ_provincial[$i]['value'] == 0){
                                                                $cell_color = "table-default";
                                                            } elseif ($educ_all['value'] > $educ_provincial[$i]['value']){
                                                                $cell_color = "table-danger";
                                                            } else {
                                                                $cell_color = "table-success";
                                                            }
                                                            echo '<td class="text-center '. $cell_color .'">'. number_format($educ_provincial[$i]['value']) .'</td>';
                                                                
                                                            if ($fexp_all['value'] == $fexp_provincial[$i]['value']){
                                                                $cell_color = "table-warning";
                                                            } elseif ($fexp_provincial[$i]['value'] == 0){
                                                                $cell_color = "table-default";
                                                            } elseif ($fexp_all['value'] > $fexp_provincial[$i]['value']){
                                                                $cell_color = "table-danger";
                                                            } else {
                                                                $cell_color = "table-success";
                                                            }
                                                            echo '<td class="text-center '. $cell_color .'">'. number_format($fexp_provincial[$i]['value']) .'</td>';
                                                        }
                                                        
                                                        $temp_prov = $educ_provincial[$i]['location_name'];
                                                        echo "</tr>";
                                                    }
                                                ?>
                                        </tbody>
                                        </table>
                                    </div>
                                    <div class="card-footer text-muted">Note: [0] = no samples in indicated ecosystem <br/>
                                        Data Source: <a href="https://palaystat.philrice.gov.ph/profile/retrieve/table/1" target="_blank">Socioeconomic characteristics of farmer-respondents - PalayStat System</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- PAGE NUMBER -->
                        <div class="row" style="margin-left: 32px; margin-top: -10px;">
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important;">37 | STATE OF THE RICE SECTOR IN THE PHILIPPINES</p>
                            </div>
                        </div>

                    </div>
                </main>
            </div>
        </div>

        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br class="pagebreak">

        <!-- ORG TRAINING 1 -->

        <div class="container-fluid" id="orgtrainings1">
            <div class="row">
                <main role="main" class="col">
                    <!-- Header --->
                    <!-- <div id="orgtrain" class="jumbotron text-left">
                        <div class="jumbotron-content">
                            <h2>Profile of the Filipino Rice Farmer</h2>
                            <h1>Organization and Training Engagement</h1>
                        </div>
                    </div> -->
                    <!-- Body -->
                    <div class="sublevel" id="orgtraining1">

                        <!-- FOR VERTICAL PRINT IN BLACK EDGING RIGHT SIDE -->
                        <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; float: right; margin-right: -17px; margin-top: 35px;">ORGANIZATION AND TRAINING ENGAGEMENT</p>

                        <div style="margin-left: 45px; margin-top: 7px;">
                            <br>
                            <h2>Profile of the Filipino Rice Farmer</h2>
                            <h1 style="font-size: 54px;">Organization and Training Engagement</h1>
                            <br>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="card-deck mb-2 text-center" style="margin-left: 40px; margin-top: -10px;">
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
                                <div class="card mb-4" id="orgtraining1-chart1" style="margin-left: 50px; margin-top: -5px; margin-right: -5px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a> -->
                                        <h5 class="my-0 pt-2 pb-2">Percent of Farmers Who are Members of Organizations by Survey Year (1996-2016)</h5>
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
                                <div class="card mb-4" id="orgtraining1-chart1" style="margin-left: 10px; margin-top: -5px; margin-right: 35px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a> -->
                                        <h5 class="my-0 pt-2 pb-2">Percent of Farmers Who Have Attended at Least One Training by Survey Year (1996-2016)</h5>
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
                            <p class="text-black" style="font-size: 9px !important; float: right;">38 | STATE OF THE RICE SECTOR IN THE PHILIPPINES</p>
                            </div>
                        </div>

                    </div>
                </main>
            </div>
        </div>

        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br class="pagebreak">

        <!-- ORG TRAINING 2 -->

        <div class="container-fluid" id="orgtrainings2">
            <div class="row">
                <main role="main" class="col">
                    <div class="sublevel" id="orgtraining2">

                        <!-- FOR VERTICAL PRINT IN BLACK EDGING LEFT SIDE -->
                        <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; transform:scale(-1); float: left; margin-left: -17px; margin-top: 35px;">ORGANIZATION AND TRAINING ENGAGEMENT</p>

                        <div class="row">
                            <div class="col">
                                <div class="card mb-4"  id="orgtraining2-table" style="margin: 40px 45px 40px 15px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Table</a> -->
                                        <h5 class="my-0 pt-2 pb-2">Organization Membership and Training Attendance by Province (2016)</h5>
                                        <p class="my-0 font-weight-normal text-muted">in percent (RBFHS, PhilRice-SED, 2019)</p>
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-hover orgtraining-table">
                                        <thead>
                                            <tr>
                                            <th scope="col">Region/Province</th>
                                            <th class="text-center" scope="col">Organization Members</th>
                                            <th class="text-center" scope="col">Training Attendees</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                    $temp_region = $temp_prov = $cell_color = "";
                                                    for ($i = 0; $i < count($org_provincial); $i++) {
                                                        
                                                        if($org_provincial[$i]['region'] != $temp_region){
                                                            echo "<tr>";
                                                            echo '<td colspan="4"><span class="font-weight-bold">'. $org_provincial[$i]['region'] . '</td>';
                                                            echo "</tr>";
                                                        }
                                                        
                                                        $temp_region = $org_provincial[$i]['region'];
                                                        
                                                        if($org_provincial[$i]['location_name'] != $temp_prov){
                                                            echo "<tr>";
                                                            echo "<td>" . $org_provincial[$i]['location_name'] . "</td>";
                                                            
                                                            echo '<td class="text-center">'. number_format($org_provincial[$i]['value']) .'%</td>';
                                                            echo '<td class="text-center">'. number_format($tra_provincial[$i]['value']) .'%</td>';
                                                            echo "</tr>";
                                                        }
                                                        
                                                        $temp_prov = $org_provincial[$i]['location_name'];
                                                        
                                                    }
                                                ?>
                                        </tbody>
                                        </table>
                                    </div>
                                    <div class="card-footer text-muted">Note: [blank] = no samples in indicated ecosystem <br/>
                                        Data Source: <a href="https://palaystat.philrice.gov.ph/profile/retrieve/table/1" target="_blank">Socioeconomic characteristics of farmer-respondents - PalayStat System</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- PAGE NUMBER -->
                        <div class="row" style="margin-left: 32px; margin-top: -10px;">
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important;">39 | STATE OF THE RICE SECTOR IN THE PHILIPPINES</p>
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
                    <!-- <div id="farmpractices" class="jumbotron text-left">
                        <div class="jumbotron-content">
                            <h2>Rice Farming Practices in the</h2>
                            <h1>Philippines</h1>
                            <p class="lead"><i>How do our Filipino farmers cultivate rice? What practices do they usually do?</i><br /> Learn and study the different farming methods and technologies used by the Filipino rice farmers.</p>
                        </div>
                    </div> -->

                    <!-- Body -->
                    <div class="farming dashboard" id="farmpractices">

                        <!-- FOR VERTICAL PRINT IN BLACK EDGING RIGHT SIDE -->
                        <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; float: right; margin-right: -17px; margin-top: 35px;">RICE FARMING PRACTICES</p>

                        <div style="margin-left: 45px; margin-top: 7px;">
                            <br>
                            <h1 id="header">Rice Farming Practices in the Philippines</h1>
                            <p class="lead"><i>How do our Filipino farmers cultivate rice? What practices do they usually do?</i><br /> Learn and study the different farming methods and technologies used by the Filipino rice farmers.</p>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <div class="card primary mb-2 bg-warning-2 card-green" style="margin-left: 50px; margin-top: 0px;">
                                    <h6 class="card-title text-left text-white pt-3 pl-3">Seeding Rate (2016 WS-2017 DS)</h6>
                                    <div class="card-body pr-5">
                                        <div class="row text-center text-white">
                                            <div class="col-4 border-right">
                                                <p class="card-title-note"><a href="<?php echo base_url(); ?>seedingrate" class="text-white stretched-link text-decoration-none card-sec">Average</a></p>
                                                <h1 class="card-text font-weight-bold"><?php echo number_format($average_rate['value'], 0); ?><i class="bi bi-caret-up-fill text-primary"></i></h1>
                                            </div>
                                            <div class="col-4 border-right">
                                                <p class="card-title-note"><a href="<?php echo base_url(); ?>seedingrate" class="text-white stretched-link text-decoration-none card-sec">Transplanting</a></p>
                                                <h1 class="card-text font-weight-bold"><?php echo number_format($trans_rate['value'], 0); ?><i class="bi bi-caret-down-fill text-primary"></i></h1>
                                            </div>
                                            <div class="col-4">
                                                <p class="card-title-note"><a href="<?php echo base_url(); ?>seedingrate" class="text-white stretched-link text-decoration-none card-sec">Direct Seeding</a></p>
                                                <h1 class="card-text font-weight-bold"><?php echo number_format($direct_rate['value'], 0); ?><i class="bi bi-caret-up-fill text-primary"></i></h1>
                                            </div>
                                        </div>
                                        <div class="w-50 mt-3 mx-auto pb-0 rounded-pill text-center">
                                            <p class="text-black text-uppercase mb-0">Kilograms Per Hectare</p>
                                        </div>
                                    </div>
                                    <div class="caret-select"><i class="bi bi-caret-right-alt pr-2"></i></div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card primary mb-2 bg-warning-2 card-green" style="margin-right: 10px; margin-top: 0px;">
                                    <div class="card-body">
                                        <h5 class="card-title"><a href="<?php echo base_url(); ?>cropest" class="text-white stretched-link text-decoration-none card-main">Crop Establishment (2017 DS)</a></h5>
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
                                        <h6 class="card-title mb-0"><a href="<?php echo base_url(); ?>labor" class="text-white stretched-link text-decoration-none card-main">Labor (2016-2017)</a></h6>
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
                                <div class="card primary mb-2 card-row2" style="margin-left: 50px; margin-top: 0px; margin-right: 17px;">
                                    <h6 class="card-title text-left pt-3 pl-3">Seed Class Usage (2017 DS)</h6>
                                    <div class="card-body pr-5">
                                        <div class="row text-center mt-2 r2" style="margin-bottom: 20px;">
                                            <div class="col-4 border-right">
                                                <p class="card-title-note"><a href="<?php echo base_url(); ?>seedclass" class="text-black stretched-link text-decoration-none card-sec">Hybrid</a></p>
                                                <h1 class="smaller card-text"><?php echo number_format($hy_all['value']); ?>%<i class="bi bi-caret-up-fill text-primary"></i></h1>
                                            </div>
                                            <div class="col-4 border-right">
                                                <p class="card-title-note"><a href="<?php echo base_url(); ?>seedclass" class="text-black stretched-link text-decoration-none card-sec">High Quality Inbred</a></p>
                                                <h1 class="smaller card-text"><?php echo number_format($hq_all['value']); ?>%<i class="bi bi-caret-down-fill text-primary"></i></h1>
                                            </div>
                                            <div class="col-4">
                                                <p class="card-title-note"><a href="<?php echo base_url(); ?>seedclass" class="text-black stretched-link text-decoration-none card-sec">Farmer's Seeds</a></p>
                                                <h1 class="smaller card-text"><?php echo number_format($gs_all['value'] + $fs_all['value']); ?>%<i class="bi bi-caret-down-fill text-primary"></i></h1>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="caret-select"><i class="bi bi-caret-right-alt pr-2"></i></div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card primary mb-2 card-row2" style="margin-left: -17px; margin-top: 0px; margin-right: 35px;">
                                    <h6 class="card-title text-left pt-3 pl-3">Fertilizer Rate (2017 DS)</h6>
                                    <div class="card-body pr-5">
                                        <div class="row text-center text-black r2">
                                            <div class="col-4 border-right">
                                                <p class="card-title-note"><a href="<?php echo base_url(); ?>fertusage" class="text-black stretched-link text-decoration-none card-sec">Nitrogen (N)</a></p>
                                                <h1 class="card-text smaller"><?php echo number_format($n_ds['value'], 0); ?><i class="bi bi-caret-down-fill text-primary"></i></h1>
                                            </div>
                                            <div class="col-4 border-right">
                                                <p class="card-title-note"><a href="<?php echo base_url(); ?>fertusage" class="text-black stretched-link text-decoration-none card-sec">Phosphorus (P)</a></p>
                                                <h1 class="card-text smaller"><?php echo number_format($p_ds['value'], 0); ?><i class="bi bi-caret-down-fill text-primary"></i></h1>
                                            </div>
                                            <div class="col-4">
                                                <p class="card-title-note"><a href="<?php echo base_url(); ?>fertusage" class="text-black stretched-link text-decoration-none card-sec">Potassium (K)</a></p>
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
                                    <div class="card primary text-center card-row3" style="margin-left: 50px; margin-top: 0px;">
                                        <div class="card-body text-black pr-4">
                                            <h6 class="my-0"><a href="<?php echo base_url(); ?>varieties" class="card-main">Top 10 Rice Variety Planted (2017 DS)</a></h6>
                                            <p class="my-0 font-weight-normal text-lowercase text-muted">in percent of farmers (%)</p>
                                        </div>
                                        <div class="caret-select"><i class="bi bi-caret-right-alt pr-2" style="top: 34%;"></i></div>
                                    </div>
                                    <div class="p-2 border border-light" style="margin-left: 50px;"><canvas id="ctxChart1-v"></canvas></div>
                                </div>
                                <div class="mt-2">
                                    <div class="card primary text-center card-row4" style="margin-left: 50px; margin-top: 0px;">
                                        <div class="card-body text-black pr-4">
                                            <h6 class="my-0"><a href="<?php echo base_url(); ?>pesticides" class="card-main">Top Active Ingredients by Pesticide Type (2017 DS)</a></h6>
                                            <p class="my-0 font-weight-normal text-lowercase text-muted">in percent of farmers (%)</p>
                                        </div>
                                        <div class="caret-select"><i class="bi bi-caret-right-alt pr-2" style="top: 34%;"></i></div>
                                    </div>
                                    <div class="p-2 border border-light" style="margin-left: 50px;">
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
                                    <div class="card primary text-center card-row3">
                                        <div class="card-body text-black pr-4">
                                            <h6 class="my-0 text-center"><a href="<?php echo base_url(); ?>adoptionrate" class="card-main">Top Rice Farming Technologies and Practices (2016 WS-2017 DS)</a></h6>
                                            <p class="my-0 font-weight-normal text-lowercase text-muted">in percent of farmers (%)</p>
                                        </div>
                                        <div class="caret-select"><i class="bi bi-caret-right-alt pr-2" style="top: 34%;"></i></div>
                                    </div>
                                    <div class="border border-light fp" style="padding: 33px 20px;">
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
                                    <div class="card primary text-center card-row3" style="margin-right: 35px; margin-top: 0px;">
                                        <div class="card-body text-black pr-4">
                                            <h6 class="my-0"><a href="<?php echo base_url(); ?>fertilizerapp" class="card-main">Rank of Fertilizer-type by Usage (2017 DS)</a></h6>
                                            <p class="my-0 font-weight-normal text-lowercase text-muted">in percent of farmers (%)</p>
                                        </div>
                                        <div class="caret-select"><i class="bi bi-caret-right-alt pr-2" style="top: 34%;"></i></div>
                                    </div>
                                    <div class="p-2 border border-light" style="margin-right: 35px;"><canvas id="ctxChart1"></canvas></div>
                                </div>
                                <div class="mt-2">
                                    <div class="card primary text-center card-row4" style="margin-right: 35px; margin-top: 0px;">
                                        <div class="card-body text-black pr-4">
                                            <h6 class="my-0"><a href="<?php echo base_url(); ?>machinesource" class="card-main">Rank of Machines by Usage (2017 DS)</a></h6>
                                            <p class="my-0 font-weight-normal text-lowercase text-muted">in percent of farmers (%)</p>
                                        </div>
                                        <div class="caret-select"><i class="bi bi-caret-right-alt pr-2" style="top: 34%;"></i></div>
                                    </div>
                                    <div class="border border-light" style="padding: 25px 0; margin-right: 35px;"><canvas id="ctxChart2"></canvas></div>
                                </div>
                            </div>
                        </div>

                        <!-- PAGE NUMBER -->
                        <div class="row" style="margin-right: 23px; margin-top: -10px;">
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important; float: right;">40 | STATE OF THE RICE SECTOR IN THE PHILIPPINES</p>
                            </div>
                        </div>

                    </div>
                </main>
            </div>
        </div>

        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br class="pagebreak">

        <!-- SEEDING RATE 1 -->

        <div class="container-fluid" id="seedingrates1">
            <div class="row">
                <main role="main" class="col">      
                    <!-- Header --->
                    <!-- <div id="seedrate" class="jumbotron text-left">
                        <div class="jumbotron-content">
                            <h2>Rice Farming Practices in the Philippines</h2>
                            <h1>Seeding Rate</h1>
                        </div>
                    </div> -->
                    
                    <!-- Body -->
                    <div class="sublevel" id="seedingrate1">

                        <!-- FOR VERTICAL PRINT IN BLACK EDGING LEFT SIDE -->
                        <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; transform:scale(-1); float: left; margin-left: -17px; margin-top: 35px;">SEEDING RATE</p>

                        <div style="margin-left: 35px; margin-top: 7px;">
                            <br>
                            <h2>Rice Farming Practices in the Philippines</h2>
                            <h1 style="font-size: 65px;">Seeding Rate</h1>
                            <br>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="card-deck mb-2 text-center text-white" style="margin-left: 25px; margin-top: 0px; margin-right: 45px;">
                                    <div class="card primary mb-4 bg-primary-3">
                                    <div class="card-body">
                                        <h5 class="card-title pb-2">Transplanted</h5>
                                        <h1 class="card-text font-weight-bold"><?php echo number_format($trans_all_sr['value'], 0); ?><i class="bi bi-caret-down-fill"></i></h1>
                                        <div class="card-note w-75 mx-auto rounded-pill bg-alternate"><p class="text-white">kilograms per hectare</p></div>
                                    </div>
                                    </div>
                                    <div class="card primary mb-4 bg-warning-2 text-white">
                                    <div class="card-body">
                                        <h5 class="card-title pb-2">Average (2016 WS-2017 DS)</h5>
                                        <h1 class="card-text font-weight-bold"><?php echo number_format($average_all_sr['value'], 0); ?><i class="bi bi-caret-up-fill"></i></h1>
                                        <div class="card-note w-75 mx-auto rounded-pill bg-alternate"><p class="text-black">kilograms per hectare</p></div>
                                    </div>
                                    </div>
                                    <div class="card primary mb-4 bg-primary-3">
                                    <div class="card-body">
                                        <h5 class="card-title pb-2">Direct Seeded</h5>
                                        <h1 class="card-text font-weight-bold"><?php echo number_format($direct_all_sr['value'], 0); ?><i class="bi bi-caret-up-fill"></i></h1>
                                        <div class="card-note w-75 mx-auto rounded-pill bg-alternate"><p class="text-white">kilograms per hectare</p></div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="row">
                            <div class="col">
                                <div class="card mb-4" id="seedingrate1-chart1" style="margin-left: 35px; margin-top: -25px; margin-right: 55px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a> -->
                                        <h5 class="my-0 pt-2 pb-2">Seeding rate per crop establishment method (1996 WS-2017 DS)</h5>
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
                        <div class="row" style="margin-left: 23px; margin-top: -5px;">
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important;">41 | STATE OF THE RICE SECTOR IN THE PHILIPPINES</p>
                            </div>
                        </div>

                    </div>
                </main>
            </div>
        </div>

        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br class="pagebreak">

        <!-- SEEDING RATE 2 -->

        <div class="container-fluid" id="seedingrates2">
            <div class="row">
                <main role="main" class="col">
                    <div class="sublevel" id="seedingrate2">

                        <!-- FOR VERTICAL PRINT IN BLACK EDGING RIGHT SIDE -->
                        <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; float: right; margin-right: -17px; margin-top: 35px;">SEEDING RATE</p>

                        <div class="row">
                            <div class="col">
                                <div class="card mb-4" id="seedingrate2-table" style="margin: 40px -5px 40px 50px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Table</a> -->
                                        <h5 class="my-0 pt-2 pb-2">Seeding rate per crop establishment method per province (2016 WS-2017 DS)</h5>
                                        <p class="my-0 font-weight-normal text-muted">in kilograms per hectare (RBFHS, PhilRice-SED, 2019)</p>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex justify-content-center">
                                            <div class="legend-box bg-above-light"></div><p class="d-inline-block text-capitalize">Value Above Average</p>
                                            <div class="legend-box bg-same-light"></div><p class="d-inline-block text-capitalize">Same Value</p>
                                            <div class="legend-box bg-below-light"></div><p class="d-inline-block text-capitalize">Value Below Average</p>
                                        </div>
                                        <table class="table table-hover seedingrate-table">
                                        <thead>
                                            <tr>
                                            <th class="align-middle" scope="col">Region/Province</th>
                                            <th class="align-middle" scope="col">Average</th>
                                            <th class="align-middle" scope="col">Transplanting</th>
                                            <th class="align-middle" scope="col">Direct Seeding</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                    $temp_region = $temp_prov = $cell_color = "";
                                                    for ($i = 0; $i < count($average_provincial_sr); $i++) {
                                                        
                                                        if($average_provincial_sr[$i]['region'] != $temp_region){
                                                            echo "<tr>";
                                                            echo '<td colspan="5"><span class="font-weight-bold">'. $average_provincial_sr[$i]['region'] . '</td>';
                                                            echo "</tr>";
                                                        }
                                                        
                                                        $temp_region = $average_provincial_sr[$i]['region'];
                                                        
                                                        if($average_provincial_sr[$i]['location_name'] != $temp_prov){
                                                            echo "<tr>";
                                                            echo "<td>" . $average_provincial_sr[$i]['location_name'] . "</td>";
                                                            
                                                            if ($average_all_sr['value'] == $average_provincial_sr[$i]['value']){
                                                                $cell_color = "table-warning";
                                                            } elseif ($average_provincial_sr[$i]['value'] == 0){
                                                                $cell_color = "table-default";
                                                            } elseif ($average_all_sr['value'] > $average_provincial_sr[$i]['value']){
                                                                $cell_color = "table-danger";
                                                            } else {
                                                                $cell_color = "table-success";
                                                            }
                                                            echo '<td class="text-center '. $cell_color .'">'. number_format($average_provincial_sr[$i]['value'], 0) .'</td>';
                                                                
                                                            if ($trans_all_sr['value'] == $trans_provincial_sr[$i]['value']){
                                                                $cell_color = "table-warning";
                                                            } elseif ($trans_provincial_sr[$i]['value'] == 0){
                                                                $cell_color = "table-default";
                                                            } elseif ($trans_all_sr['value'] > $trans_provincial_sr[$i]['value']){
                                                                $cell_color = "table-danger";
                                                            } else {
                                                                $cell_color = "table-success";
                                                            }
                                                            echo '<td class="text-center '. $cell_color .'">'. number_format($trans_provincial_sr[$i]['value'], 0) .'</td>';
                                                            
                                                            if ($direct_all_sr['value'] == $direct_provincial_sr[$i]['value']){
                                                                $cell_color = "table-warning";
                                                            } elseif ($direct_provincial_sr[$i]['value'] == 0){
                                                                $cell_color = "table-default";
                                                            } elseif ($direct_all_sr['value'] > $direct_provincial_sr[$i]['value']){
                                                                $cell_color = "table-danger";
                                                            } else {
                                                                $cell_color = "table-success";
                                                            }
                                                            echo '<td class="text-center '. $cell_color .'">'. number_format($direct_provincial_sr[$i]['value'], 0) .'</td>';
                                                            echo "</tr>";
                                                        }
                                                        
                                                        $temp_prov = $average_provincial_sr[$i]['location_name'];
                                                        
                                                    }
                                                ?>
                                        </tbody>
                                        </table>
                                    </div>
                                    <div class="card-footer text-muted">Note: [0.00] = no samples in indicated ecosystem <br/>
                                        Data Source: <a href="https://palaystat.philrice.gov.ph/profile/retrieve/table/62" target="_blank">Seeding rate by cropping season - PalayStat System</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- PAGE NUMBER -->
                        <div class="row" style="margin-right: 26px; margin-top: -10px;">
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important; float: right;">42 | STATE OF THE RICE SECTOR IN THE PHILIPPINES</p>
                            </div>
                        </div>

                    </div>
                </main>
            </div>
        </div>

        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br class="pagebreak">

        <!-- CROPEST 1 -->

        <div class="container-fluid" id="cropests1">
            <div class="row">
                <main role="main" class="col">
                    <!-- Header --->
                    <!-- <div id="cropest" class="jumbotron text-left">
                        <div class="jumbotron-content">
                            <h2>Rice Farming Practices in the Philippines</h2>
                            <h1>Crop Establishment Method</h1>
                        </div>
                    </div> -->
                    
                    <!-- Body -->
                    <div class="sublevel" id="cropest1">

                        <!-- FOR VERTICAL PRINT IN BLACK EDGING LEFT SIDE -->
                        <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; transform:scale(-1); float: left; margin-left: -17px; margin-top: 35px;">CROP ESTABLISHMENT METHOD</p>

                        <div style="margin-left: 35px; margin-top: 7px;">
                            <br>
                            <h2>Rice Farming Practices in the Philippines</h2>
                            <h1 style="font-size: 65px;">Crop Establishment Method</h1>
                            <br>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="card-deck mb-2 text-center" style="margin-left: 0px; margin-top: 0px; margin-right: 25px;">
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
                                <div class="card mb-4" id="cropests1-chart1" style="margin-left: 35px; margin-top: -5px; margin-right: 10px;">
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
                                <div class="card mb-4" id="cropests1-chart2" style="margin-left: -5px; margin-top: -5px; margin-right: 50px;">
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
                        <div class="row" style="margin-left: 22px; margin-top: -5px;">
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important;">43 | STATE OF THE RICE SECTOR IN THE PHILIPPINES</p>
                            </div>
                        </div>
                        
                    </div>
                </main>
            </div>
        </div>

        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br class="pagebreak">

        <!-- CROPEST 2 -->

        <div class="container-fluid" id="cropests2">
            <div class="row">
                <main role="main" class="col">
                    <div class="sublevel" id="cropest2">

                        <!-- FOR VERTICAL PRINT IN BLACK EDGING RIGHT SIDE -->
                        <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; float: right; margin-right: -17px; margin-top: 35px;">CROP ESTABLISHMENT METHOD</p>

                        <div class="row">
                            <div class="col">
                                <div class="card mb-4" id="cropest2-table" style="margin: 40px -5px 40px 50px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Table</a> -->
                                        <h5 class="my-0 pt-2 pb-2">Percent of adoption per crop establishment method per province (2016 WS-2017 DS)</h5>
                                        <p class="my-0 font-weight-normal text-muted">(RBFHS, PhilRice-SED, 2019)</p>
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-hover cropest-table">
                                        <thead>
                                            <tr>
                                            <th class="align-middle" rowspan="2" scope="col">Region/Province</th>
                                            <th class="text-center" colspan="2" scope="col">2016 Wet Season</th>
                                            <th class="text-center" colspan="2" scope="col">2017 Dry Season</th>
                                            </tr>
                                            <tr>
                                            <th class="text-center" scope="col">Transplanting</th>
                                            <th class="text-center" scope="col">Direct Seeding</th>
                                            <th class="text-center" scope="col">Transplanting</th>
                                            <th class="text-center" scope="col">Direct Seeding</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                    $temp_region = $temp_prov = $cell_color = "";
                                                    for ($i = 0; $i < count($trans_provincial_cp); $i++) {
                                                        
                                                        if($trans_provincial_cp[$i]['region'] != $temp_region){
                                                            echo "<tr>";
                                                            echo '<td colspan="5"><span class="font-weight-bold">'. $trans_provincial_cp[$i]['region'] . '</td>';
                                                            echo "</tr>";
                                                        }
                                                        
                                                        $temp_region = $trans_provincial_cp[$i]['region'];
                                                        
                                                        if($trans_provincial_cp[$i]['location_name'] != $temp_prov){
                                                            echo "<tr>";
                                                            echo "<td>" . $trans_provincial_cp[$i]['location_name'] . "</td>";
                                                            echo '<td class="text-center">'. number_format($trans_provincial_cp[$i]['value']) .'</td>';
                                                            echo '<td class="text-center">'. number_format($direct_provincial_cp[$i]['value']) .'</td>';
                                                            echo '<td class="text-center">'. number_format($trans_ds_provincial[$i]['value']) .'</td>';
                                                            echo '<td class="text-center">'. number_format($direct_ds_provincial[$i]['value']) .'</td>';
                                                            echo "</tr>";
                                                        }
                                                        
                                                        $temp_prov = $trans_provincial_cp[$i]['location_name'];
                                                        
                                                    }
                                                ?>
                                        </tbody>
                                        </table>
                                    </div>
                                    <div class="card-footer text-muted">Note: [blank] = no samples in indicated ecosystem <br/>
                                        Data Source: <a href="https://palaystat.philrice.gov.ph/profile/retrieve/table/15" target="_blank">Distribution of farmers (%) by method of crop establishment - PalayStat System</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- PAGE NUMBER -->
                        <div class="row" style="margin-right: 25px; margin-top: -10px;">
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important; float: right;">44 | STATE OF THE RICE SECTOR IN THE PHILIPPINES</p>
                            </div>
                        </div>

                    </div>
                </main>
            </div>
        </div>

        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br class="pagebreak">

        <!-- LABOR 1 -->

        <div class="container-fluid" id="labors1">
            <div class="row">
                <main role="main" class="col">
                    <!-- Header --->
                    <!-- <div id="labor" class="jumbotron text-left">
                        <div class="jumbotron-content">
                            <h2>Rice Farming Practices in the Philippines</h2>
                            <h1>Labor Management</h1>
                        </div>
                    </div> -->
                    
                    <!-- Body -->
                    <div class="sublevel" id="labor1">

                        <!-- FOR VERTICAL PRINT IN BLACK EDGING LEFT SIDE -->
                        <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; transform:scale(-1); float: left; margin-left: -17px; margin-top: 35px;">CROP ESTABLISHMENT METHOD</p>

                        <div style="margin-left: 35px; margin-top: 7px;">
                            <br>
                            <h2>Rice Farming Practices in the Philippines</h2>
                            <h1 style="font-size: 65px;">Labor Management</h1>
                            <br>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="card-deck mb-2 text-center" style="margin-left: 0px; margin-top: 0px; margin-right: 30px;">
                                    <div class="card primary mb-2 bg-primary-3 text-white">
                                    <div class="card-body">
                                        <h5 class="card-title pb-2">Irrigated Area</h5>
                                        <h1 class="card-text font-weight-bold"><?php echo number_format($labor_irrigated['value']); ?><i class="bi bi-caret-up-fill"></i></h1>
                                        <div class="card-note w-75 mx-auto rounded-pill bg-alternate"><p class="text-white">person-days per hectare</p></div>
                                    </div>
                                    </div>
                                    <div class="card primary mb-2 bg-warning-2 text-white">
                                    <div class="card-body">
                                        <h5 class="card-title pb-2">Average (2016 WS-2017 DS)</h5>
                                        <h1 class="card-text font-weight-bold"><?php echo number_format($labor_all['value']); ?><i class="bi bi-caret-up-fill"></i></h1>
                                        <div class="card-note w-75 mx-auto rounded-pill bg-alternate"><p class="text-black">person-days per hectare</p></div>
                                    </div>
                                    </div>
                                    <div class="card primary mb-2 bg-primary-3 text-white">
                                    <div class="card-body">
                                        <h5 class="card-title pb-2">Non-Irrigated Area</h5>
                                        <h1 class="card-text font-weight-bold"><?php echo number_format($labor_rainfed['value']); ?><i class="bi bi-caret-up-fill"></i></h1>
                                        <div class="card-note w-75 mx-auto rounded-pill bg-alternate"><p class="text-white">person-days per hectare</p></div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="row">
                            <div class="col">
                                <div class="card mb-4" id="labor1-chart1" style="margin-left: 35px; margin-top: -5px; margin-right: 55px;">
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
                        <div class="row" style="margin-left: 23px; margin-top: -5px;">
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important;">45 | STATE OF THE RICE SECTOR IN THE PHILIPPINES</p>
                            </div>
                        </div>

                    </div>
                </main>
            </div>
        </div>

        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br class="pagebreak">

        <!-- LABOR 2 -->

        <div class="container-fluid" id="labors2">
            <div class="row">
                <main role="main" class="col">
                    <div class="sublevel" id="labor2">

                        <!-- FOR VERTICAL PRINT IN BLACK EDGING RIGHT SIDE -->
                        <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; float: right; margin-right: -17px; margin-top: 35px;">LABOR MANAGEMENT</p>

                        <div class="row">
                            <div class="col">
                                <div class="card mb-4" id="labor2-table" style="margin: 40px -5px 40px 50px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Table</a> -->
                                        <h5 class="my-0 pt-2 pb-2">Average labor requirements per province (2016 WS-2017 DS) </h5>
                                        <p class="my-0 font-weight-normal text-muted">in person-days per hectare (RBFHS, PhilRice-SED, 2019)</p>
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-hover labor-table">
                                        <thead>
                                            <tr>
                                            <th scope="col">Region/Province</th>
                                            <th class="text-center" scope="col">Pre-harvest</th>
                                            <th class="text-center" scope="col">Harvesting and threshing</th>
                                            <th class="text-center" scope="col">Post-harvest</th>
                                            <th class="text-center" scope="col">Permanent labor</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                    $temp_region = $temp_prov = $cell_color = "";
                                                    for ($i = 0; $i < count($prelabor_provincial); $i++) {
                                                        
                                                        if($prelabor_provincial[$i]['region'] != $temp_region){
                                                            echo "<tr>";
                                                            echo '<td colspan="5"><span class="font-weight-bold">'. $prelabor_provincial[$i]['region'] . '</td>';
                                                            echo "</tr>";
                                                        }
                                                        
                                                        $temp_region = $prelabor_provincial[$i]['region'];
                                                        
                                                        if($prelabor_provincial[$i]['location_name'] != $temp_prov){
                                                            echo "<tr>";
                                                            echo "<td>" . $prelabor_provincial[$i]['location_name'] . "</td>";
                                                            
                                                            echo '<td class="text-center">'. number_format($prelabor_provincial[$i]['value'], 0) .'</td>';
                                                            echo '<td class="text-center">'. number_format($htlabor_provincial[$i]['value'], 0) .'</td>';
                                                            echo '<td class="text-center">'. number_format($plabor_provincial[$i]['value'], 0) .'</td>';
                                                            echo '<td class="text-center">'. number_format($permlabor_provincial[$i]['value'], 0) .'</td>';
                                                            echo "</tr>";
                                                        }
                                                        
                                                        $temp_prov = $prelabor_provincial[$i]['location_name'];
                                                        
                                                    }
                                                ?>
                                        </tbody>
                                        </table>
                                    </div>
                                    <div class="card-footer text-muted">Note: [blank] = no samples in indicated ecosystem 
                                        <br/>
                                        Data Source: <a href="https://palaystat.philrice.gov.ph/profile/retrieve/table/67" target="_blank">Labor costs of rice production by cropping season - PalayStat System</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- PAGE NUMBER -->
                        <div class="row" style="margin-right: 25px; margin-top: -10px;">
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important; float: right;">46 | STATE OF THE RICE SECTOR IN THE PHILIPPINES</p>
                            </div>
                        </div>

                    </div>
                </main>
            </div>
        </div>

        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br class="pagebreak">

        <!-- SEED CLASS 1 -->

        <div class="container-fluid" id="seedclasss1">
            <div class="row">
                <main role="main" class="col">
                    <!-- Header --->
                    <!-- <div id="seedclass" class="jumbotron text-left">
                        <div class="jumbotron-content">
                            <h2>Rice Farming Practices in the Philippines</h2>
                            <h1>Seed Class Usage</h1>
                        </div>
                    </div> -->
                    
                    <!-- Body -->
                    <div class="sublevel" id="seedclass1">

                        <!-- FOR VERTICAL PRINT IN BLACK EDGING LEFT SIDE -->
                        <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; transform:scale(-1); float: left; margin-left: -17px; margin-top: 35px;">SEED CLASS USAGE</p>

                        <div style="margin-left: 35px; margin-top: 7px;">
                            <br>
                            <h2>Rice Farming Practices in the Philippines</h2>
                            <h1 style="font-size: 65px;">Seed Class Usage</h1>
                            <br>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="card-deck mb-2 text-center" style="margin-left: 0px; margin-top: 0px; margin-right: 25px;">
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
                                                    <h1 class="card-text font-weight-bold smaller sc"><?php echo $hy_all_ws['value']; ?>%<i class="bi bi-caret-up-fill"></i></h1>
                                                </div>
                                                <div class="col border-right">
                                                    <p class="card-title-note">High Quality Inbred</p>
                                                    <h1 class="card-text font-weight-bold smaller sc"><?php echo $hq_all_ws['value']; ?>%<i class="bi bi-caret-up-fill"></i></h1>
                                                </div>
                                                <div class="col">
                                                    <p class="card-title-note">Farmer's Seeds</p>
                                                    <h1 class="card-text font-weight-bold smaller sc"><?php echo $gs_all_ws['value'] + $fs_all_ws['value']; ?>%<i class="bi bi-caret-down-fill"></i></h1>
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
                                                    <h1 class="card-text font-weight-bold smaller sc"><?php echo $hy_all['value']; ?>%<i class="bi bi-caret-up-fill"></i></h1>
                                                </div>
                                                <div class="col border-right">
                                                    <p class="card-title-note">High Quality Inbred</p>
                                                    <h1 class="card-text font-weight-bold smaller sc"><?php echo $hq_all['value']; ?>%<i class="bi bi-caret-down-fill"></i></h1>
                                                </div>
                                                <div class="col">
                                                    <p class="card-title-note">Farmer's Seeds</p>
                                                    <h1 class="card-text font-weight-bold smaller sc"><?php echo $gs_all['value'] + $fs_all['value']; ?>%<i class="bi bi-caret-down-fill"></i></h1>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="card mb-4" id="seedclass1-chart1" style="margin-left: 35px; margin-top: -5px; margin-right: 10px;">
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
                                <div class="card mb-4" id="seedclass1-chart2" style="margin-left: -5px; margin-top: -5px; margin-right: 50px;">
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
                        <div class="row" style="margin-left: 25px; margin-top: 25px;">
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important;">47 | STATE OF THE RICE SECTOR IN THE PHILIPPINES</p>
                            </div>
                        </div>

                    </div>
                </main>
            </div>
        </div>

        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br class="pagebreak">

        <!-- SEED CLASS 2 -->

        <div class="container-fluid" id="seedclasss2">
            <div class="row">
                <main role="main" class="col">
                    <div class="sublevel" id="seedclass2">

                        <!-- FOR VERTICAL PRINT IN BLACK EDGING RIGHT SIDE -->
                        <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; float: right; margin-right: -17px; margin-top: 35px;">SEED CLASS USAGE</p>

                        <div class="row">
                            <div class="col">
                                <div class="card mb-4" id="seedclass2-table" style="margin: 40px -5px 40px 50px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Table</a> -->
                                        <h5 class="my-0 pt-2 pb-2">Percent of farmers per seed-class category per province, wet and dry season (2016-2017)</h5>
                                        <p class="my-0 font-weight-normal text-muted">in percent (RBFHS, PhilRice-SED, 2019)</p>
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-hover seedclass-table">
                                        <thead>
                                            <tr>
                                            <th class="align-middle" scope="col" rowspan="2">Region/Province</th>
                                            <th class="text-center" scope="col" colspan="3">2016 Wet Season</th>
                                            <th class="text-center" scope="col" colspan="3">2017 Dry Season</th>
                                            </tr>
                                            <tr>
                                            <th scope="col">Hybrid</th>
                                            <th scope="col">High-Quality Inbred</th>
                                            <th scope="col">Farmer's Seeds</th>
                                            <th scope="col">Hybrid</th>
                                            <th scope="col">High-Quality Inbred</th>
                                            <th scope="col">Farmer's Seeds</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                    $temp_region = $temp_prov = $cell_color = "";
                                                    for ($i = 0; $i < count($hy_provincial); $i++) {
                                                        
                                                        if($hy_provincial[$i]['region'] != $temp_region){
                                                            echo "<tr>";
                                                            echo '<td colspan="7"><span class="font-weight-bold">'. $hy_provincial[$i]['region'] . '</td>';
                                                            echo "</tr>";
                                                        }
                                                        
                                                        $temp_region = $hy_provincial[$i]['region'];
                                                        
                                                        if($hy_provincial[$i]['location_name'] != $temp_prov){
                                                            echo "<tr>";
                                                            echo "<td>" . $hy_provincial[$i]['location_name'] . "</td>";
                                                            echo '<td class="text-center">'. number_format($hy_provincial_ws[$i]['value']) .'</td>';
                                                            echo '<td class="text-center">'. number_format($hq_provincial_ws[$i]['value']) .'</td>';
                                                            echo '<td class="text-center">'. number_format($gs_provincial_ws[$i]['value'] + $fs_provincial_ws[$i]['value']) .'</td>';
                                                            echo '<td class="text-center">'. number_format($hy_provincial[$i]['value']) .'</td>';
                                                            echo '<td class="text-center">'. number_format($hq_provincial[$i]['value']) .'</td>';
                                                            echo '<td class="text-center">'. number_format($gs_provincial[$i]['value'] + $fs_provincial[$i]['value']) .'</td>';
                                                        }
                                                        
                                                        $temp_prov = $hy_provincial[$i]['location_name'];
                                                        
                                                    }
                                                ?>
                                        </tbody>
                                        </table>
                                    </div>
                                    <div class="card-footer text-muted">
                                        Data Source: <a href="https://palaystat.philrice.gov.ph/profile/retrieve/table/70" target="_blank">Seeding rate by seed classification - PalayStat System</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- PAGE NUMBER -->
                        <div class="row" style="margin-right: 25px; margin-top: -10px;">
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important; float: right;">48 | STATE OF THE RICE SECTOR IN THE PHILIPPINES</p>
                            </div>
                        </div>

                    </div>
                </main>
            </div>
        </div>

        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br class="pagebreak">

        <!-- FERT USAGE 1 -->

        <div class="container-fluid" id="fertusages1">
            <div class="row">
                <main role="main" class="col">
                    <!-- Header --->
                    <!-- <div id="fertuse" class="jumbotron text-left">
                        <div class="jumbotron-content">
                            <h2>Rice Farming Practices in the Philippines</h2>
                            <h1>Fertilizer Rate</h1>
                        </div>
                    </div> -->
                    
                    <!-- Body -->
                    <div class="sublevel" id="fertusage1">

                        <!-- FOR VERTICAL PRINT IN BLACK EDGING LEFT SIDE -->
                        <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; transform:scale(-1); float: left; margin-left: -17px; margin-top: 35px;">FERTILIZER RATE</p>

                        <div style="margin-left: 35px; margin-top: 7px;">
                            <br>
                            <h2>Rice Farming Practices in the Philippines</h2>
                            <h1 style="font-size: 65px;">Fertilizer Rate</h1>
                            <br>
                        </div>                                        
            
                        <div class="row">
                            <div class="col">
                                <div class="card-deck mb-2 text-center" style="margin-left: 27px; margin-top: 0px; margin-right: 40px;">
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
                                                    <h1 class="card-text font-weight-bold smaller"><?php echo number_format($n_all['value'], 0); ?><i class="bi bi-caret-up-fill"></i></h1>
                                                </div>
                                                <div class="col border-right">
                                                    <p class="card-title-note">Phosphorus (P)</p>
                                                    <h1 class="card-text font-weight-bold smaller"><?php echo number_format($p_all['value'], 0); ?><i class="bi bi-caret-down-fill"></i></h1>
                                                </div>
                                                <div class="col">
                                                    <p class="card-title-note">Potassium (K)</p>
                                                    <h1 class="card-text font-weight-bold smaller"><?php echo number_format($k_all['value'], 0); ?><i class="bi bi-caret-up-fill"></i></h1>
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
                                                    <h1 class="card-text font-weight-bold smaller"><?php echo number_format($n_ds['value'], 0); ?><i class="bi bi-caret-down-fill"></i></h1>
                                                </div>
                                                <div class="col border-right">
                                                    <p class="card-title-note">Phosphorus (P)</p>
                                                    <h1 class="card-text font-weight-bold smaller"><?php echo number_format($p_ds['value'], 0); ?><i class="bi bi-caret-down-fill"></i></h1>
                                                </div>
                                                <div class="col">
                                                    <p class="card-title-note">Potassium (K)</p>
                                                    <h1 class="card-text font-weight-bold smaller"><?php echo number_format($k_ds['value'], 0); ?><i class="bi bi-dash"></i></h1>
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
                                <div class="card mb-4" id="fertusage1-chart1" style="margin-left: 35px; margin-top: -5px; margin-right: 10px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a> -->
                                        <h5 class="my-0 pt-2 pb-2">Amount of NPK Applied by Hectare During Wet Season (1996 WS-2016 WS)</h5>
                                        <p class="my-0 font-weight-normal text-muted">in kilograms per hectare (RBFHS, PhilRice-SED, 2019)</p>
                                    </div>
                                    <div class="card-body">
                                        <div><canvas id="fertusage_ctxChart1"></canvas></div>
                                    </div>
                                    <div class="card-footer text-muted">
                                        Data Source: <a href="https://palaystat.philrice.gov.ph/profile/retrieve/table/65" target="_blank">Average N-P-K component per fertilizer use, by cropping season - PalayStat System</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card mb-4" id="fertusage1-chart2" style="margin-left: -5px; margin-top: -5px; margin-right: 50px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a> -->
                                        <h5 class="my-0 pt-2 pb-2">Amount of NPK Applied by Hectare During Wet Season (1997 WS-2017 DS)</h5>
                                        <p class="my-0 font-weight-normal text-muted">in kilograms per hectare (RBFHS, PhilRice-SED, 2019)</p>
                                    </div>
                                    <div class="card-body">
                                        <div><canvas id="fertusage_ctxChart2"></canvas></div>
                                    </div>
                                    <div class="card-footer text-muted">
                                        Data Source: <a href="https://palaystat.philrice.gov.ph/profile/retrieve/table/65" target="_blank">Average N-P-K component per fertilizer use, by cropping season - PalayStat System</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- PAGE NUMBER -->
                        <div class="row" style="margin-left: 22px; margin-top: -5px;">
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important;">49 | STATE OF THE RICE SECTOR IN THE PHILIPPINES</p>
                            </div>
                        </div>

                    </div>
                </main>
            </div>
        </div>

        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br class="pagebreak">

        <!-- FERT USAGE 2 -->

        <div class="container-fluid" id="fertusages2">
            <div class="row">
                <main role="main" class="col">
                    <div class="sublevel" id="fertusage2">

                        <!-- FOR VERTICAL PRINT IN BLACK EDGING RIGHT SIDE -->
                        <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; float: right; margin-right: -17px; margin-top: 35px;">FERTILIZER RATE</p>

                        <div class="row">
                            <div class="col">
                                <div class="card mb-4" id="fertusage2-table" style="margin: 40px -5px 40px 50px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Table</a> -->
                                        <h5 class="my-0 pt-2 pb-2">Average amount of NPK rate per province (2016 WS-2017 DS)</h5>
                                        <p class="my-0 font-weight-normal text-muted">in kilogram per hectare (RBFHS, PhilRice-SED, 2019)</p>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex justify-content-center">
                                            <div class="legend-box bg-above-light"></div><p class="d-inline-block text-capitalize">Value Above Average</p>
                                            <div class="legend-box bg-same-light"></div><p class="d-inline-block text-capitalize">Same Value</p>
                                            <div class="legend-box bg-below-light"></div><p class="d-inline-block text-capitalize">Value Below Average</p>
                                        </div>
                                        <table class="table table-hover fertusage-table">
                                        <thead>
                                            <tr>
                                            <th class="text-center align-middle" scope="col" rowspan="2">Region/Province</th>
                                            <th class="text-center" scope="col" colspan="3">2016 Wet Season</th>
                                            <th class="text-center" scope="col" colspan="3">2017 Dry Season</th>
                                            </tr>
                                            <tr>
                                            <th class="text-center" scope="col">N</th>
                                            <th class="text-center" scope="col">P</th>
                                            <th class="text-center" scope="col">K</th>
                                            <th class="text-center" scope="col">N</th>
                                            <th class="text-center" scope="col">P</th>
                                            <th class="text-center" scope="col">K</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                    $temp_region = $temp_prov = $cell_color = "";
                                                    for ($i = 0; $i < count($average_provincial_fu); $i++) {
                                                        
                                                        if($average_provincial_fu[$i]['region'] != $temp_region){
                                                            echo "<tr>";
                                                            echo '<td colspan="5"><span class="font-weight-bold">'. $average_provincial_fu[$i]['region'] . '</td>';
                                                            echo "</tr>";
                                                        }
                                                        
                                                        $temp_region = $average_provincial_fu[$i]['region'];
                                                        
                                                        if($average_provincial_fu[$i]['location_name'] != $temp_prov){
                                                            echo "<tr>";
                                                            echo "<td>" . $average_provincial_fu[$i]['location_name'] . "</td>";
                                                                                                                
                                                            if ($n_all['value'] == $n_provincial[$i]['value']){
                                                                $cell_color = "table-warning";
                                                            } elseif ($n_provincial[$i]['value'] == 0){
                                                                $cell_color = "table-default";
                                                            } elseif ($n_all['value'] > $n_provincial[$i]['value']){
                                                                $cell_color = "table-danger";
                                                            } else {
                                                                $cell_color = "table-success";
                                                            }
                                                            echo '<td class="text-center '. $cell_color .'">'. number_format($n_provincial[$i]['value'], 0) .'</td>';
                                                            
                                                            if ($p_all['value'] == $p_provincial[$i]['value']){
                                                                $cell_color = "table-warning";
                                                            } elseif ($p_provincial[$i]['value'] == 0){
                                                                $cell_color = "table-default";
                                                            } elseif ($p_all['value'] > $p_provincial[$i]['value']){
                                                                $cell_color = "table-danger";
                                                            } else {
                                                                $cell_color = "table-success";
                                                            }
                                                            echo '<td class="text-center '. $cell_color .'">'. number_format($p_provincial[$i]['value'], 0) .'</td>';
                                                            
                                                            if ($k_all['value'] == $k_provincial[$i]['value']){
                                                                $cell_color = "table-warning";
                                                            } elseif ($k_provincial[$i]['value'] == 0){
                                                                $cell_color = "table-default";
                                                            } elseif ($k_all['value'] > $k_provincial[$i]['value']){
                                                                $cell_color = "table-danger";
                                                            } else {
                                                                $cell_color = "table-success";
                                                            }
                                                            echo '<td class="text-center '. $cell_color .'">'. number_format($k_provincial[$i]['value'], 0) .'</td>';
                                                            
                                                            if ($n_ds['value'] == $n_ds_provincial[$i]['value']){
                                                                $cell_color = "table-warning";
                                                            } elseif ($n_ds_provincial[$i]['value'] == 0){
                                                                $cell_color = "table-default";
                                                            } elseif ($n_ds['value'] > $n_ds_provincial[$i]['value']){
                                                                $cell_color = "table-danger";
                                                            } else {
                                                                $cell_color = "table-success";
                                                            }
                                                            echo '<td class="text-center '. $cell_color .'">'. number_format($n_ds_provincial[$i]['value'], 0) .'</td>';
                                                            
                                                            if ($p_ds['value'] == $p_ds_provincial[$i]['value']){
                                                                $cell_color = "table-warning";
                                                            } elseif ($p_ds_provincial[$i]['value'] == 0){
                                                                $cell_color = "table-default";
                                                            } elseif ($p_ds['value'] > $p_ds_provincial[$i]['value']){
                                                                $cell_color = "table-danger";
                                                            } else {
                                                                $cell_color = "table-success";
                                                            }
                                                            echo '<td class="text-center '. $cell_color .'">'. number_format($p_ds_provincial[$i]['value'], 0) .'</td>';
                                                            
                                                            if ($k_ds['value'] == $k_ds_provincial[$i]['value']){
                                                                $cell_color = "table-warning";
                                                            } elseif ($k_provincial[$i]['value'] == 0){
                                                                $cell_color = "table-default";
                                                            } elseif ($k_ds['value'] > $k_ds_provincial[$i]['value']){
                                                                $cell_color = "table-danger";
                                                            } else {
                                                                $cell_color = "table-success";
                                                            }
                                                            echo '<td class="text-center '. $cell_color .'">'. number_format($k_ds_provincial[$i]['value'], 0) .'</td>';
                                                            echo "</tr>";
                                                        }
                                                        
                                                        $temp_prov = $average_provincial_fu[$i]['location_name'];
                                                        
                                                    }
                                                ?>
                                        </tbody>
                                        </table>
                                    </div>
                                    <div class="card-footer text-muted">Note: [blank] = no samples in indicated ecosystem <br/>
                                        Data Source: <a href="https://palaystat.philrice.gov.ph/profile/retrieve/table/65" target="_blank">Average N-P-K component per fertilizer use, by cropping season - PalayStat System</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- PAGE NUMBER -->
                        <div class="row" style="margin-right: 25px; margin-top: -10px;">
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important; float: right;">50 | STATE OF THE RICE SECTOR IN THE PHILIPPINES</p>
                            </div>
                        </div>

                    </div>
                </main>
            </div>
        </div>

        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br class="pagebreak">

        <!-- VARIETIES 1 -->
                    
        <div class="container-fluid" id="varieties1">
            <div class="row">
                <main role="main" class="col">
                    <!-- Header --->
                    <!-- <div id="variety" class="jumbotron text-left">
                        <div class="jumbotron-content">
                            <h2>Rice Farming Practices in the Philippines</h2>
                            <h1>Major Variety Planted</h1>
                        </div>
                    </div> -->

                    <!-- Body -->
                    <div class="sublevel" id="variety1">

                        <!-- FOR VERTICAL PRINT IN BLACK EDGING LEFT SIDE -->
                        <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; transform:scale(-1); float: left; margin-left: -17px; margin-top: 35px;">MAJOR VARIETY PLANTED</p>

                        <div style="margin-left: 35px; margin-top: 7px;">
                            <br>
                            <h2>Rice Farming Practices in the Philippines</h2>
                            <h1 style="font-size: 65px;">Major Variety Planted</h1>
                            <br>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="card mb-4" id="variety1-chart1" style="margin-left: 10px; margin-top: -5px; margin-right: 40px;">
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
                        <div class="row" style="margin-left: 25px; margin-top: 15px;">
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important;">51 | STATE OF THE RICE SECTOR IN THE PHILIPPINES</p>
                            </div>
                        </div>

                    </div>
                </main>
            </div>
        </div>

        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br class="pagebreak">

        <!-- VARIETIES 2 -->

        <div class="container-fluid" id="varieties2">
            <div class="row">
                <main role="main" class="col">
                    <div class="sublevel" id="variety2">

                        <!-- FOR VERTICAL PRINT IN BLACK EDGING RIGHT SIDE -->
                        <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; float: right; margin-right: -17px; margin-top: 35px;">MAJOR VARIETY PLANTED</p>

                        <div class="row">
                            <div class="col">
                                <div class="card mb-4" id="variety2-table" style="margin: 40px -5px 40px 50px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Table</a> -->
                                        <h5 class="my-0 pt-2 pb-2">Major varieties planted by province (2017 DS)</h5>
                                        <p class="my-0 font-weight-normal text-muted">(RBFHS, PhilRice-SED, 2019)</p>
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-hover variety-table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Region/Province</th>
                                                    <th class="text-center " scope="col" colspan="3">Major varieties planted </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                            $temp_region = $temp_prov = $cell_color = "";
                                            for ($i = 0; $i < count($var_provincial); $i++) {
                                                
                                                if($var_provincial[$i]['region'] != $temp_region){
                                                    echo "<tr>";
                                                    echo '<td colspan="5"><span class="font-weight-bold">'. $var_provincial[$i]['region'] . '</td>';
                                                    echo "</tr>";
                                                }
                                                
                                                $temp_region = $var_provincial[$i]['region'];
                                                
                                                if($var_provincial[$i]['location_name'] != $temp_prov){
                                                    echo "<tr>";
                                                    echo "<td>" . $var_provincial[$i]['location_name'] . "</td>"; 
                                                    echo '<td>'. ucwords($var_provincial[$i]['label'])   .'</td>'; $i++;
                                                    echo '<td>'. ucwords($var_provincial[$i]['label']) .'</td>'; $i++;
                                                    echo '<td>'. ucwords($var_provincial[$i]['label']) .'</td>';
                                                    echo "</tr>";
                                                }
                                                
                                                $temp_prov = $var_provincial[$i]['location_name'];
                                                
                                            }
                                        ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="card-footer text-muted">Note: [blank] = no samples in indicated ecosystem <br />
                                        Data Source: <a href="https://palaystat.philrice.gov.ph/profile/retrieve/table/19" target="_blank">Distribution of farmers (%) by ten (10) most varieties planted - PalayStat System</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- PAGE NUMBER -->
                        <div class="row" style="margin-right: 25px; margin-top: -10px;">
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important; float: right;">52 | STATE OF THE RICE SECTOR IN THE PHILIPPINES</p>
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
                    <!-- <div id="adoptionrate" class="jumbotron text-left">
                        <div class="jumbotron-content">
                            <h2>Rice Farming Practices in the Philippines</h2>
                            <h1>Top Adopted Technologies</h1>
                        </div>
                    </div> -->

                    <!-- Body -->
                    <div class="sublevel" id="adoptionrate1">

                        <!-- FOR VERTICAL PRINT IN BLACK EDGING LEFT SIDE -->
                        <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; transform:scale(-1); float: left; margin-left: -17px; margin-top: 35px;">TOP ADOPTED TECHNOLOGIES</p>

                        <div style="margin-left: 35px; margin-top: 7px;">
                            <br>
                            <h2>Rice Farming Practices in the Philippines</h2>
                            <h1 style="font-size: 65px;">Top Adopted Technologies</h1>
                            <br>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="card mb-4" id="adoptionrate1-chart1" style="margin-left: 10px; margin-top: 25px; margin-right: 15px;">
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
                                <div class="card mb-4" id="adoptionrate1-chart2" style="margin-left: -20px; margin-top: 25px; margin-right: 40px;">
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
                        <div class="row" style="margin-left: 25px; margin-top: 105px;">
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important;">53 | STATE OF THE RICE SECTOR IN THE PHILIPPINES</p>
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
                    <div class="sublevel" id="adoptionrate2">

                        <!-- FOR VERTICAL PRINT IN BLACK EDGING RIGHT SIDE -->
                        <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; float: right; margin-right: -17px; margin-top: 35px;">TOP ADOPTED TECHNOLOGIES</p>

                        <div class="row">
                            <div class="col">
                                <div class="card mb-4" id="adoptionrate2-chart1" style="margin-left: 45px; margin-top: 15px; margin-right: -10px;">
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
                                <div class="card mb-4" id="adoptionrate2-chart2" style="margin-left: 10px; margin-top: 15px; margin-right: 5px;">
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
                                <div class="card mb-4" id="adoptionrate2-chart3" style="margin-left: 45px; margin-bottom: 25px; margin-top: -10px; margin-right: 10px;">
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
                                <div class="card mb-4" id="adoptionrate2-chart4" style="margin-left: -10px; margin-bottom: 25px; margin-right: 45px; margin-top: -10px;">
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
                        <div class="row" style="margin-right: 28px; margin-top: -10px;">
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important; float: right;">54 | STATE OF THE RICE SECTOR IN THE PHILIPPINES</p>
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
                    <div class="sublevel" id="adoptionrate3">

                        <!-- FOR VERTICAL PRINT IN BLACK EDGING LEFT SIDE -->
                        <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; transform:scale(-1); float: left; margin-left: -17px; margin-top: 35px;">TOP ADOPTED TECHNOLOGIES</p>

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
                        <div class="row" style="margin-left: 25px; margin-top: 175px;">
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important;">55 | STATE OF THE RICE SECTOR IN THE PHILIPPINES</p>
                            </div>
                        </div>

                    </div>
                </main>
            </div>
        </div>

        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br class="pagebreak">

        <!-- FERTILIZER APP 1 -->

        <div class="container-fluid" id="fertilizerapps1">
            <div class="row">
                <main role="main" class="col">
                    <!-- Header --->
                    <!-- <div id="fertilizerapp" class="jumbotron text-left">
                        <div class="jumbotron-content">
                            <h2>Rice Farming Practices in the Philippines</h2>
                            <h1>Fertilizer Type</h1>
                        </div>
                    </div> -->
                    
                    <!-- Body -->
                    <div class="sublevel" id="fertilizerapp1">

                        <!-- FOR VERTICAL PRINT IN BLACK EDGING RIGHT SIDE -->
                        <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; float: right; margin-right: -17px; margin-top: 35px;">FERTILIZER TYPE</p>

                        <div style="margin-left: 45px; margin-top: 7px;">
                            <br>
                            <h2>Rice Farming Practices in the Philippines</h2>
                            <h1 style="font-size: 65px;">Fertilizer Type</h1>
                            <br>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="card mb-4" id="fertilizerapp1-chart1" style="margin-left: 50px; margin-top: -5px; margin-right: 40px;">
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
                        <div class="row" style="margin-right: 25px; margin-top: 70px;">
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important; float: right;">56 | STATE OF THE RICE SECTOR IN THE PHILIPPINES</p>
                            </div>
                        </div>

                    </div>
                </main>
            </div>
        </div>

        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br class="pagebreak">

        <!-- FERTILIZER APP 2 -->
        
        <div class="container-fluid" id="fertilizerapps2">
            <div class="row">
                <main role="main" class="col">
                    <div class="sublevel" id="fertilizerapp2">

                        <!-- FOR VERTICAL PRINT IN BLACK EDGING LEFT SIDE -->
                        <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; transform:scale(-1); float: left; margin-left: -17px; margin-top: 35px;">FERTILIZER TYPE</p>

                        <div class="row">
                            <div class="col">
                                <div class="card mb-4" id="fertilizerapp2-table" style="margin: 40px 45px 40px 10px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Table</a> -->
                                        <h5 class="my-0 pt-2 pb-2">Types of fertilizer applied by province (2017 DS)</h5>
                                        <p class="my-0 font-weight-normal text-muted">(RBFHS, PhilRice-SED, 2019)</p>
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-hover fertilizerapp-table">
                                        <thead>
                                            <tr>
                                            <th scope="col">Region/Province</th>
                                            <th class="text-center "scope="col" colspan="3">Major types of fertilizer applied</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                    $temp_region = $temp_prov = $cell_color = "";
                                                    for ($i = 0; $i < count($fert_provincial_fa); $i++) {
                                                        
                                                        if($fert_provincial_fa[$i]['region'] != $temp_region){
                                                            echo "<tr>";
                                                            echo '<td colspan="5"><span class="font-weight-bold">'. $fert_provincial_fa[$i]['region'] . '</td>';
                                                            echo "</tr>";
                                                        }
                                                        
                                                        $temp_region = $fert_provincial_fa[$i]['region'];
                                                        
                                                        if($fert_provincial_fa[$i]['location_name'] != $temp_prov){
                                                            echo "<tr>";
                                                            echo "<td>" . $fert_provincial_fa[$i]['location_name'] . "</td>"; 
                                                            $fert_sub = explode(' ', $fert_provincial_fa[$i]['label']);
                                                            echo '<td class="text-right">'. ucwords($fert_sub[0]) .'</td>'; $i++;
                                                            $fert_sub = explode(' ', $fert_provincial_fa[$i]['label']);
                                                            echo '<td class="text-right">'. ucwords($fert_sub[0]) .'</td>'; $i++;
                                                            $fert_sub = explode(' ', $fert_provincial_fa[$i]['label']);
                                                            echo '<td class="text-right">'. ucwords($fert_sub[0]) .'</td>';
                                                            echo "</tr>";
                                                        }
                                                        
                                                        $temp_prov = $fert_provincial_fa[$i]['location_name'];
                                                        
                                                    }
                                                ?>
                                        </tbody>
                                        </table>
                                    </div>
                                    <div class="card-footer text-muted">
                                        Data Source: <a href="https://palaystat.philrice.gov.ph/profile/retrieve/table/25" target="_blank">Distribution of farmers (%) by type of fertilizer - PalayStat System</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- PAGE NUMBER -->
                        <div class="row" style="margin-left: 25px; margin-top: -5px;">
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important;">57 | STATE OF THE RICE SECTOR IN THE PHILIPPINES</p>
                            </div>
                        </div>

                    </div>
                </main>
            </div>
        </div>

        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br class="pagebreak">

        <!-- PESTICIDES 1 -->

        <div class="container-fluid" id="pesticides1">
            <div class="row">
                <main role="main" class="col">
                    <!-- <div id="pesticide" class="jumbotron text-left">            
                        <div class="jumbotron-content">
                            <h2>Rice Farming Practices in the Philippines</h2>
                            <h1>Top Active Ingredients of Pesticides</h1>
                        </div>
                    </div> -->
                    
                    <!-- Body -->
                    <div class="sublevel" id="pesticide1">
                        <!-- FOR VERTICAL PRINT IN BLACK EDGING RIGHT SIDE -->
                        <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; float: right; margin-right: -17px; margin-top: 35px;">TOP ACTIVE INGREDIENTS OF PESTICIDES</p>

                        <div style="margin-left: 45px; margin-top: 7px;">
                            <br>
                            <h2>Rice Farming Practices in the Philippines</h2>
                            <h1 style="font-size: 55px;">Top Active Ingredients of Pesticides</h1>
                            <br>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="card mb-4" id="pesticide1-chart1" style="margin-left: 55px; margin-top: -15px; margin-right: -10px;">
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
                                <div class="card mb-4" id="pesticide1-chart2" style="margin-left: 10px; margin-top: -15px; margin-right: -5px;">
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
                        <div class="row" style="margin-right: 25px; margin-top: -8px;">
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important; float: right;">58 | STATE OF THE RICE SECTOR IN THE PHILIPPINES</p>
                            </div>
                        </div>

                    </div>
                </main>
            </div>
        </div>

        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br class="pagebreak">

        <!-- PESTICIDES 2 -->

        <div class="container-fluid" id="pesticides2">
            <div class="row">
                <main role="main" class="col">
                    <div class="sublevel" id="pesticide2">

                        <!-- FOR VERTICAL PRINT IN BLACK EDGING LEFT SIDE -->
                        <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; transform:scale(-1); float: left; margin-left: -17px; margin-top: 35px;">TOP ACTIVE INGREDIENTS OF PESTICIDES</p>

                        <div class="row">
                            <div class="col">
                                <div class="card mb-4" id="pesticide2-table" style="margin: 40px 45px 40px 10px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Table</a> -->
                                        <h5 class="my-0 pt-2 pb-2">Top active ingredient applied by pesticide type, by province (2017)</h5>
                                        <p class="my-0 font-weight-normal text-muted">(RBFHS, PhilRice-SED, 2019)</p>
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-hover table-fixed pesticide-table">
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

                        <!-- PAGE NUMBER -->
                        <div class="row" style="margin-left: 25px; margin-top: -5px;">
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important;">59 | STATE OF THE RICE SECTOR IN THE PHILIPPINES</p>
                            </div>
                        </div>

                    </div>
                </main>
            </div>
        </div>

        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br class="pagebreak">

        <!-- MACHINE SOURCE 1 -->

        <div class="container-fluid" id="machinesources1">
            <div class="row">
                <main role="main" class="col">          
                    <!-- Header --->
                    <!-- <div id="machinesource" class="jumbotron text-left">
                        <div class="jumbotron-content">
                            <h2>Rice Farming Practices in the Philippines</h2>
                            <h1>Top Machines Used</h1>
                        </div>
                    </div> -->
                    
                    <!-- Body -->
                    <div class="sublevel" id="machinesource1">

                        <!-- FOR VERTICAL PRINT IN BLACK EDGING RIGHT SIDE -->
                        <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; float: right; margin-right: -17px; margin-top: 35px;">TOP MACHINE USED</p>

                        <div style="margin-left: 45px; margin-top: 7px;">
                            <br>
                            <h2>Rice Farming Practices in the Philippines</h2>
                            <h1 style="font-size: 65px;">Top Machines Used</h1>
                            <br>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="card mb-4" id="machinesource1-chart1" style="margin-left: 55px; margin-top: -5px; margin-right: -5px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a> -->
                                        <h5 class="my-0 pt-2 pb-2">Top machines used (2017 WS)</h5>
                                        <p class="my-0 font-weight-normal text-muted">in percent (RBFHS, PhilRice-SED, 2019)</p>
                                    </div>
                                    <div class="card-body">
                                        <div><canvas id="machinesource_ctxChart1"></canvas></div>
                                    </div>
                                    <div class="card-footer text-muted">
                                        Data Source: Distribution of farmers by machine used and ecosystem, Philippines, RBFHS 2016-2017 Survey Results
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- PAGE NUMBER -->
                        <div class="row" style="margin-right: 28px; margin-top: 75px;">
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important; float: right;">60 | STATE OF THE RICE SECTOR IN THE PHILIPPINES</p>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>

        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br class="pagebreak">

        <!-- MACHINE SOURCE 2 -->

        <div class="container-fluid" id="machinesources2">
            <div class="row">
                <main role="main" class="col">
                    <div class="sublevel" id="machinesource2">

                        <!-- FOR VERTICAL PRINT IN BLACK EDGING LEFT SIDE -->
                        <p class="text-white" style=" font-size: 12px; writing-mode: vertical-lr; transform:scale(-1); float: left; margin-left: -17px; margin-top: 35px;">TOP MACHINE USED</p>

                        <div class="row">
                            <div class="col">
                                <div class="card mb-4" id="machinesource2-table" style="margin: 40px 45px 40px 10px;">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Table</a> -->
                                        <h5 class="my-0 pt-2 pb-2">Top machines used per province (2017 WS)</h5>
                                        <p class="my-0 font-weight-normal text-muted">(RBFHS, PhilRice-SED, 2019)</p>
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-hover machinesource-table">
                                        <thead>
                                            <tr>
                                            <th scope="col">Region/Province</th>
                                            <th class="text-center "scope="col" colspan="3">Top machines used</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                    $temp_region = $temp_prov = $cell_color = "";
                                                    for ($i = 0; $i < count($fert_provincial_ms); $i++) {
                                                        
                                                        if($fert_provincial_ms[$i]['region'] != $temp_region){
                                                            echo "<tr>";
                                                            echo '<td colspan="5"><span class="font-weight-bold">'. $fert_provincial_ms[$i]['region'] . '</td>';
                                                            echo "</tr>";
                                                        }
                                                        
                                                        $temp_region = $fert_provincial_ms[$i]['region'];
                                                        
                                                        if($fert_provincial_ms[$i]['location_name'] != $temp_prov){
                                                            echo "<tr>";
                                                            echo "<td>" . $fert_provincial_ms[$i]['location_name'] . "</td>"; 
                                                            echo '<td>'. ucwords($fert_provincial_ms[$i]['label'])   .'</td>'; $i++;
                                                            echo '<td>'. ucwords($fert_provincial_ms[$i]['label']) .'</td>'; $i++;
                                                            echo '<td>'. ucwords($fert_provincial_ms[$i]['label']) .'</td>';
                                                            echo "</tr>";
                                                        }
                                                        
                                                        $temp_prov = $fert_provincial_ms[$i]['location_name'];
                                                        
                                                    }
                                                ?>
                                        </tbody>
                                        </table>
                                    </div>
                                    <div class="card-footer text-muted">
                                        Data Source: Distribution of farmers by machine used and ecosystem, Philippines and provinces, RBFHS 2016-2017 Survey Results
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- PAGE NUMBER -->
                        <div class="row" style="margin-left: 25px; margin-top: -5px;">
                            <div class="col">
                            <p class="text-black" style="font-size: 9px !important;">61 | STATE OF THE RICE SECTOR IN THE PHILIPPINES</p>
                            </div>
                        </div>

                    </div>
                </main>
            </div>
        </div>

    <!-- End of DIV -->
    </div>

    <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/sidebarjs.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/chart.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/chartjs-plugin-labels.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/html2canvas.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/d3.v3.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/topojson.v1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/datamaps.none.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/custom.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/chartjs-plugin-annotation.min.js"></script>

    <!-- MAIN CHARTS -->
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

        var ctx = document.getElementById("ctxAgriShare");
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                datasets: [{
                    data: [20.7, 79.3],
                    backgroundColor: [
                        '#2138B7', // COLOR 1
                        '#A6CEE3' // COLOR 2
                    ],
                    borderColor: [
                        '#2138B7', // COLOR 1
                        '#A6CEE3' // COLOR 2
                    ]
                }]
            },
            options: {
                devicePixelRatio: 3,
                cutoutPercentage: 60,
                aspectRatio: 0.75,
                legend: {
                    display: false
                },
                layout: {
                    padding: 15
                },
                responsive: true,
                maintainAspectRatio: true,
                plugins: {
                    labels: false
                },
                elements: {
                    center: {
                        text: '<?php echo $latest_palay_agri_share['value']; ?>%',
                        color: '#212529', // Default is #000000
                        fontStyle: 'Poppins', // Default is Arial
                        sidePadding: 20, // Default is 20 (as a percentage)
                        minFontSize: 12, // Default is 20 (in px), set to false and text will not wrap.
                        lineHeight: 25 // Default is 25 (in px), used for when text wraps
                    }
                }
            }
        });
    </script>

    <!-- PRODUCTION CHARTS -->

    <script>
        // var sidebarjs = new SidebarJS.SidebarElement();
        Chart.defaults.global.responsive = true;
        Chart.defaults.global.tooltips.mode = 'index';
        Chart.defaults.global.tooltips.intersect = false;
        Chart.defaults.global.defaultFontFamily = 'Poppins';
        Chart.defaults.global.defaultFontSize = 12;
        Chart.defaults.global.defaultFontColor = "#000000"
        Chart.defaults.global.animation.duration = 3000;

        // CHART 1 - Palay Production Chart

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
                        label: 'National',
                        backgroundColor: '#2138B7', // COLOR 1
                        borderColor: '#2138B7', // COLOR 1
                        lineTension: 0,
                        type: 'line',
                        fill: false,
                        data: prodAllData,
                        pointStyle: 'line'
                    },
                    {
                        label: 'Irrigated Area',
                        backgroundColor: '#FE7F00', // COLOR 2
                        borderColor: '#FE7F00', // COLOR 2
                        data: prodIrrigData
                    },
                    {
                        label: 'Non-Irrigated Area',
                        backgroundColor: '#FEB043', // COLOR 3
                        borderColor: '#FEB043', // COLOR 3
                        data: prodRainData
                    }
                ]
            },

            options: {
                devicePixelRatio: 3,
                plugins: {
                    title: {
                        display: true,
                        text: 'Custom Chart Title',
                        padding: {
                            top: 10,
                            bottom: 30
                        }
                    }
                },
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
                            suggestedMax: 21,
                            stepSize: 3

                        }
                    }]
                },
                tooltips: false,
                legend: {
                    position: 'top',
                    onClick: (e) => e.stopPropagation(),
                    labels: {
                        fontSize: 12,
                    }
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
                            if (dataset.label == 'National') {
                                let meta = chartInstance.controller.getDatasetMeta(i);
                                meta.data.forEach(function(bar, index) {
                                    let data = dataset.data[index];
                                    ctx.fillText(data, bar._model.x + 0, bar._model.y + -10);
                                });
                            } else {
                                let meta = chartInstance.controller.getDatasetMeta(i);
                                meta.data.forEach(function(bar, index) {
                                    let data = dataset.data[index];
                                    ctx.fillStyle = '#ffffff';
                                    ctx.fillText(data, bar._model.x + 0, bar._model.y + 30);
                                });
                            }

                        });
                    }
                }
            }
        });
        
        // DEFAULT FOR CHART 2 AND 3
        
        var scalesC = [{
                "range": 0,
                "minValue": "0.00",
                "maxValue": "100000.00"
            },
            {
                "range": 1,
                "minValue": "100000.00",
                "maxValue": "500000.00"
            },
            {
                "range": 2,
                "minValue": "500000.00",
                "maxValue": "1000000.00"
            },
            {
                "range": 3,
                "minValue": "1000000.00",
                "maxValue": "10000000.00"
            },
        ];
        
        // // CHART 2 - CHART AND MAP TOP
        
        // var dbProvsMapTop = JSON.parse('<?php echo $provincial_production_geocoded; ?>');
        // dbProvsMapTop = dbProvsMapTop.slice(0, 20);
        
        // let mapDataTop = [];
        
        // for (i = 0; i < dbProvsMapTop.length; i++) {
        //     var gc = dbProvsMapTop[i].map_ID;
        //     var value = parseFloat(dbProvsMapTop[i].value);

        //     var fill_color = "";
        //     if (value > scalesC[3].minValue) {
        //         fill_color = "fourQ";
        //     } else if (value > scalesC[2].minValue) {
        //         fill_color = "thirQ";
        //     } else if (value > scalesC[1].minValue) {
        //         fill_color = "secoQ";
        //     } else if (value > scalesC[0].minValue) {
        //         fill_color = "firsQ";
        //     }

        //     mapDataTop[gc] = {
        //         Location_name: dbProvsMapTop[i].location_name,
        //         Year: dbProvsMapTop[i].year,
        //         Value: parseInt(dbProvsMapTop[i].value).toLocaleString(),
        //         fillKey: fill_color
        //     };
        // }

        // var map = new Datamap({
        //     element: document.getElementById('phl-top'),
        //     geographyConfig: {
        //         popupOnHover: true,
        //         highlightOnHover: true,
        //         dataUrl: '<?php echo base_url(); ?>js/phl.topo.json',
        //         borderColor: '#000000',
        //         highlightFillColor: '#92cddc',
        //         highlightBorderColor: 'rgba(37, 42, 45, 0.8)',
        //         popupTemplate: function(geography, data) {
        //             return '<div class="hoverinfo"><strong>' + geography.properties.name +
        //                 ': ' + numberWithCommas(data.Value) + ' mt (' + data.Year + ')</strong></div>';
        //         },
        //     },
        //     scope: 'phl',
        //     fills: {
        //         firsQ: 'rgba(198,250,30,0.8)',
        //         secoQ: 'rgba(148,213,38,0.8)',
        //         thirQ: 'rgba(91,140,34,0.8)',
        //         fourQ: 'rgba(33,55,18,0.8)',
        //         defaultFill: 'rgba(166,216,225,1)'
        //     },
        //     data: mapDataTop,
        //     setProjection: function(element) {
        //         var projection = d3.geo.mercator()
        //             .center([121.7740, 12.8797])
        //             .scale(2800)
        //             .translate([element.offsetWidth / 2, element.offsetHeight / 2]);

        //         var path = d3.geo.path().projection(projection);
        //         return {
        //             path: path,
        //             projection: projection
        //         };
        //     }
        // });
        
        // var dbProvsTop = JSON.parse('<?php echo $provincial_production_all; ?>');
        // dbProvsTop = dbProvsTop.slice(0, 20);

        // let provincesT = [];
        // let valuesT = [];
        // let bgColorsT = [];

        // try {
        //     dbProvsTop.map((item) => {
        //         provincesT.push(item.location_name);
        //         valuesT.push(item.value);
        //         var val = parseFloat(item.value);
        //         if (val > scalesC[3].minValue) {
        //             fill_color = "rgba(33,55,18,1)";
        //         } else if (val > scalesC[2].minValue) {
        //             fill_color = "rgba(91,140,34,1)";
        //         } else if (val > scalesC[1].minValue) {
        //             fill_color = "rgba(148,213,38,1)";
        //         } else if (val > scalesC[0].minValue) {
        //             fill_color = "rgba(198,250,30,1)";
        //         }
        //         bgColorsT.push(fill_color);
        //     });
        // } catch (error) {
        //     console.log(error);
        // }

        // var tempPrLabelsT = [...provincesT];
        // var topProvDataT = [...valuesT];
        // var topProvColorT = [...bgColorsT];

        // var topProvT = document.getElementById('ctxTopProvTop').getContext('2d');
        // var topProvChartT = new Chart(topProvT, {
        //     // The type of chart we want to create
        //     type: 'horizontalBar',

        //     data: {
        //         labels: tempPrLabelsT,
        //         datasets: [{
        //             label: 'Total palay produced',
        //             backgroundColor: topProvColorT, // COLOR 4
        //             borderColor: topProvColorT, // COLOR 4
        //             data: topProvDataT
        //         }]
        //     },

        //     options: {
        //         layout: {
        //         padding: {
        //                 right: 75
        //             }
        //         },
        //         aspectRatio: 0.55,
        //         scales: {
        //             xAxes: [{
        //                 display: true,
        //                 ticks: {
        //                     userCallback: function(value, index, values) {
        //                         value = value.toString();
        //                         value = value.split(/(?=(?:...)*$)/);
        //                         value = value.join(',');
        //                         return value;
        //                     }
        //                 }
        //             }],
        //             yAxes: [{
        //                 display: true,
        //                 ticks: {
        //                     suggestedMin: 0
        //                 },
        //                 gridLines: {
        //                     color: "rgba(0, 0, 0, 0)"
        //                 }
        //             }]
        //         },
        //         tooltips: false,
        //         legend: {
        //             display: false,
        //             labels: {
        //                 fontSize: 12
        //             }
        //         },
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
        //                         let data = dataset.data[index];
        //                         data = parseInt(data).toLocaleString();
        //                         ctx.fillText(data, bar._model.x + 40, bar._model.y + 8);
        //                     });
        //                 });
        //             }
        //         }
        //     }
        // });

        // // CHART 3 - CHART AND MAP ALL

        // var dbProvsMap = JSON.parse('<?php echo $provincial_production_geocoded; ?>');

        // let mapData = [];

        // for (i = 0; i < dbProvsMap.length; i++) {
        //     var gc = dbProvsMap[i].map_ID;
        //     var value = parseFloat(dbProvsMap[i].value);

        //     var fill_color = "";
        //     if (value > scalesC[3].minValue) {
        //         fill_color = "fourQ";
        //     } else if (value > scalesC[2].minValue) {
        //         fill_color = "thirQ";
        //     } else if (value > scalesC[1].minValue) {
        //         fill_color = "secoQ";
        //     } else if (value > scalesC[0].minValue) {
        //         fill_color = "firsQ";
        //     }

        //     mapData[gc] = {
        //         Location_name: dbProvsMap[i].location_name,
        //         Year: dbProvsMap[i].year,
        //         Value: parseInt(dbProvsMap[i].value).toLocaleString(),
        //         fillKey: fill_color
        //     };
        // }

        // var map = new Datamap({
        //     element: document.getElementById('phl'),
        //     geographyConfig: {
        //         popupOnHover: true,
        //         highlightOnHover: true,
        //         dataUrl: '<?php echo base_url(); ?>js/phl.topo.json',
        //         borderColor: '#000000',
        //         highlightFillColor: '#92cddc',
        //         highlightBorderColor: 'rgba(37, 42, 45, 0.8)',
        //         popupTemplate: function(geography, data) {
        //             return '<div class="hoverinfo"><strong>' + geography.properties.name +
        //                 ': ' + numberWithCommas(data.Value) + ' mt (' + data.Year + ')</strong></div>';
        //         },
        //     },
        //     scope: 'phl',
        //     fills: {
        //         firsQ: 'rgba(198,250,30,0.8)',
        //         secoQ: 'rgba(148,213,38,0.8)',
        //         thirQ: 'rgba(91,140,34,0.8)',
        //         fourQ: 'rgba(33,55,18,0.8)',
        //         defaultFill: 'rgba(0, 0, 0, 0.5)'
        //     },
        //     data: mapData,
        //     setProjection: function(element) {
        //         var projection = d3.geo.mercator()
        //             .center([121.7740, 12.8797])
        //             .scale(2800)
        //             .translate([element.offsetWidth / 2, element.offsetHeight / 2]);

        //         var path = d3.geo.path().projection(projection);
        //         return {
        //             path: path,
        //             projection: projection
        //         };
        //     }
        // });

        // var dbProvs = JSON.parse('<?php echo $provincial_production_all; ?>');

        // let provinces = [];
        // let values = [];
        // let bgColors = [];

        // try {
        //     dbProvs.map((item) => {
        //         provinces.push(item.location_name);
        //         values.push(item.value);
        //         var val = parseFloat(item.value);
        //         if (val > scalesC[3].minValue) {
        //             fill_color = "rgba(33,55,18,1)";
        //         } else if (val > scalesC[2].minValue) {
        //             fill_color = "rgba(91,140,34,1)";
        //         } else if (val > scalesC[1].minValue) {
        //             fill_color = "rgba(148,213,38,1)";
        //         } else if (val > scalesC[0].minValue) {
        //             fill_color = "rgba(198,250,30,1)";
        //         }
        //         bgColors.push(fill_color);
        //     });
        // } catch (error) {
        //     console.log(error);
        // }

        // var tempPrLabels = [...provinces];
        // var topProvData = [...values];
        // var topProvColor = [...bgColors];

        // var topProv = document.getElementById('ctxTopProv').getContext('2d');
        // var topProvChart = new Chart(topProv, {
        //     // The type of chart we want to create
        //     type: 'horizontalBar',

        //     data: {
        //         labels: tempPrLabels,
        //         datasets: [{
        //             label: 'Total palay produced',
        //             backgroundColor: topProvColor, // COLOR 4
        //             borderColor: topProvColor, // COLOR 4
        //             data: topProvData
        //         }]
        //     },

        //     options: {
        //         layout: {
        //         padding: {
        //                 right: 75
        //             }
        //         },
        //         aspectRatio: 0.15,
        //         scales: {
        //             xAxes: [{
        //                 display: true,
        //                 ticks: {
        //                     userCallback: function(value, index, values) {
        //                         value = value.toString();
        //                         value = value.split(/(?=(?:...)*$)/);
        //                         value = value.join(',');
        //                         return value;
        //                     }
        //                 }
        //             }],
        //             yAxes: [{
        //                 display: true,
        //                 ticks: {
        //                     suggestedMin: 0
        //                 },
        //                 gridLines: {
        //                     color: "rgba(0, 0, 0, 0)"
        //                 }
        //             }]
        //         },
        //         tooltips: false,
        //         legend: {
        //             display: false,
        //             labels: {
        //                 fontSize: 12
        //             }
        //         },
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
        //                         let data = dataset.data[index];
        //                         data = parseInt(data).toLocaleString();
        //                         ctx.fillText(data, bar._model.x + 40, bar._model.y + 8);
        //                     });
        //                 });
        //             }
        //         }
        //     }
        // });
        
        // CHART 4 REGIONAL
        
        var dbRegsMap = JSON.parse('<?php echo $regional_production_geocoded; ?>');

        let mapDataR = [];
        
        for (i = 0; i < dbRegsMap.length; i++) {
            var gc = dbRegsMap[i].map_ID;
            var value = parseFloat(dbRegsMap[i].value);

            var fill_color = "";
            if (value > scalesC[3].minValue) {
                fill_color = "fourQ";
            } else if (value > scalesC[2].minValue) {
                fill_color = "thirQ";
            } else if (value > scalesC[1].minValue) {
                fill_color = "secoQ";
            } else if (value > scalesC[0].minValue) {
                fill_color = "firsQ";
            }

            mapDataR[gc] = {
                Location_name: dbRegsMap[i].location_name,
                Year: dbRegsMap[i].year,
                Value: parseInt(dbRegsMap[i].value).toLocaleString(),
                fillKey: fill_color
            };
        }

        var map = new Datamap({
            element: document.getElementById('phl-reg-production'),
            geographyConfig: {
                popupOnHover: true,
                highlightOnHover: true,
                dataUrl: '<?php echo base_url(); ?>js/phl.topo.json',
                borderColor: '#000000',
                highlightFillColor: '#92cddc',
                highlightBorderColor: 'rgba(37, 42, 45, 0.8)',
                popupTemplate: function(geography, data) {
                    return '<div class="hoverinfo"><strong>' + data.Location_name +
                        ': ' + numberWithCommas(data.Value) + ' mt (' + data.Year + ')</strong></div>';
                },
            },
            scope: 'phl',
            fills: {
                firsQ: 'rgba(198,250,30,0.8)',
                secoQ: 'rgba(148,213,38,0.8)',
                thirQ: 'rgba(91,140,34,0.8)',
                fourQ: 'rgba(33,55,18,0.8)',
                defaultFill: 'rgba(0, 0, 0, 0.5)'
            },
            data: mapDataR,
            setProjection: function(element) {
                var projection = d3.geo.mercator()
                    .center([121.7740, 12.8797])
                    .scale(2800)
                    .translate([element.offsetWidth / 2, element.offsetHeight / 2]);

                var path = d3.geo.path().projection(projection);
                return {
                    path: path,
                    projection: projection
                };
            }
        });
        
        var dbRegs = JSON.parse('<?php echo $regional_production_all; ?>');

        let regions = [];
        let valuesR = [];
        let bgColorsR = [];

        try {
            dbRegs.map((item) => {
                regions.push(item.location_name);
                valuesR.push(item.value);
                var val = parseFloat(item.value);
                if (val > scalesC[3].minValue) {
                    fill_color = "rgba(33,55,18,1)";
                } else if (val > scalesC[2].minValue) {
                    fill_color = "rgba(91,140,34,1)";
                } else if (val > scalesC[1].minValue) {
                    fill_color = "rgba(148,213,38,1)";
                } else if (val > scalesC[0].minValue) {
                    fill_color = "rgba(198,250,30,1)";
                }
                bgColorsR.push(fill_color);
            });
        } catch (error) {
            console.log(error);
        }

        var tempPrLabelsR = [...regions];
        var topRegData = [...valuesR];
        var topRegColor = [...bgColorsR];

        var topReg = document.getElementById('production_ctxRegional').getContext('2d');
        var topRegChart = new Chart(topReg, {
            // The type of chart we want to create
            type: 'horizontalBar',

            data: {
                labels: tempPrLabelsR,
                datasets: [{
                    label: 'Total palay produced',
                    backgroundColor: topRegColor, // COLOR 4
                    borderColor: topRegColor, // COLOR 4
                    data: topRegData
                }]
            },

            options: {
                devicePixelRatio: 3,
                layout: {
                padding: {
                        right: 80
                    }
                },
                aspectRatio: 0.55,
                scales: {
                    xAxes: [{
                        display: true,
                        ticks: {
                            userCallback: function(value, index, values) {
                                value = value.toString();
                                value = value.split(/(?=(?:...)*$)/);
                                value = value.join(',');
                                return value;
                            }
                        }
                    }],
                    yAxes: [{
                        display: true,
                        ticks: {
                            suggestedMin: 0
                        },
                        gridLines: {
                            color: "rgba(0, 0, 0, 0)"
                        }
                    }]
                },
                tooltips: false,
                legend: {
                    display: false,
                    labels: {
                        fontSize: 12
                    }
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
                                data = parseInt(data).toLocaleString();
                                ctx.fillText(data, bar._model.x + 40, bar._model.y + 8);
                            });
                        });
                    }
                }
            }
        });
    </script>

    <!-- AREA CHARTS -->

    <script>
        // var sidebarjs = new SidebarJS.SidebarElement();
        Chart.defaults.global.responsive = true;
        Chart.defaults.global.tooltips.mode = 'index';
        Chart.defaults.global.tooltips.intersect = false;
        Chart.defaults.global.defaultFontFamily = 'Poppins';
        Chart.defaults.global.defaultFontSize = 12;
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
                        label: 'National',
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
                        backgroundColor: '#FEB043', // COLOR 3
                        borderColor: '#FEB043', // COLOR 3
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
                            suggestedMax: 5.5,
                            stepSize: 0.5
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
                        this.data.datasets.forEach(function(dataset, i) {
                            if (dataset.label == 'National') {
                                let meta = chartInstance.controller.getDatasetMeta(i);
                                meta.data.forEach(function(bar, index) {
                                    let data = dataset.data[index];
                                    ctx.fillText(data, bar._model.x + 0, bar._model.y + -10);
                                });
                            } else {
                                let meta = chartInstance.controller.getDatasetMeta(i);
                                meta.data.forEach(function(bar, index) {
                                    let data = dataset.data[index];
                                    ctx.fillStyle = '#ffffff';
                                    ctx.fillText(data, bar._model.x + 0, bar._model.y + 30);
                                });
                            }

                        });
                    }
                }
            }
        });

        // DEFAULT FOR CHART 2, 3 AND 4
        
        var scalesC = [{
                "range": 0,
                "minValue": "0.00",
                "maxValue": "10000.00"
            },
            {
                "range": 1,
                "minValue": "10000.00",
                "maxValue": "50000.00"
            },
            {
                "range": 2,
                "minValue": "50000.00",
                "maxValue": "100000.00"
            },
            {
                "range": 3,
                "minValue": "100000.00",
                "maxValue": "1000000.00"
            },
        ];
        
        // // CHART 2 - CHART AND MAP TOP
        
        // var dbProvsMapTop = JSON.parse('<?php echo $provincial_area_geo; ?>');
        // dbProvsMapTop = dbProvsMapTop.slice(0, 20);
        
        // let mapDataTop = [];
        
        // for (i = 0; i < dbProvsMapTop.length; i++) {
        //     var gc = dbProvsMapTop[i].map_ID;
        //     var value = parseFloat(dbProvsMapTop[i].value);

        //     var fill_color = "";
        //     if (value > scalesC[3].minValue) {
        //         fill_color = "fourQ";
        //     } else if (value > scalesC[2].minValue) {
        //         fill_color = "thirQ";
        //     } else if (value > scalesC[1].minValue) {
        //         fill_color = "secoQ";
        //     } else if (value > scalesC[0].minValue) {
        //         fill_color = "firsQ";
        //     }

        //     mapDataTop[gc] = {
        //         Location_name: dbProvsMapTop[i].location_name,
        //         Year: dbProvsMapTop[i].year,
        //         Value: parseInt(dbProvsMapTop[i].value).toLocaleString(),
        //         fillKey: fill_color
        //     };
        // }

        // var map = new Datamap({
        //     element: document.getElementById('phl-top'),
        //     geographyConfig: {
        //         popupOnHover: true,
        //         highlightOnHover: true,
        //         dataUrl: '<?php echo base_url(); ?>js/phl.topo.json',
        //         borderColor: '#000000',
        //         highlightFillColor: '#92cddc',
        //         highlightBorderColor: 'rgba(37, 42, 45, 0.8)',
        //         popupTemplate: function(geography, data) {
        //             return '<div class="hoverinfo"><strong>' + geography.properties.name +
        //                 ': ' + numberWithCommas(data.Value) + ' ha (' + data.Year + ')</strong></div>';
        //         },
        //     },
        //     scope: 'phl',
        //     fills: {
        //         firsQ: 'rgba(254,213,111,0.8)',
        //         secoQ: 'rgba(220,149,85,0.8)',
        //         thirQ: 'rgba(200,107,37,0.8)',
        //         fourQ: 'rgba(112,55,40,0.8)',
        //         defaultFill: 'rgba(166,216,225,1)'
        //     },
        //     data: mapDataTop,
        //     setProjection: function(element) {
        //         var projection = d3.geo.mercator()
        //             .center([121.7740, 12.8797])
        //             .scale(2800)
        //             .translate([element.offsetWidth / 2, element.offsetHeight / 2]);

        //         var path = d3.geo.path().projection(projection);
        //         return {
        //             path: path,
        //             projection: projection
        //         };
        //     }
        // });
        
        // var dbProvsTop = JSON.parse('<?php echo $provincial_area_all; ?>');
        // dbProvsTop = dbProvsTop.slice(0, 20);

        // let provincesT = [];
        // let valuesT = [];
        // let bgColorsT = [];

        // try {
        //     dbProvsTop.map((item) => {
        //         provincesT.push(item.location_name);
        //         valuesT.push(item.value);
        //         var val = parseFloat(item.value);
        //         if (val > scalesC[3].minValue) {
        //             fill_color = "rgba(112,55,40,1)";
        //         } else if (val > scalesC[2].minValue) {
        //             fill_color = "rgba(200,107,37,1)";
        //         } else if (val > scalesC[1].minValue) {
        //             fill_color = "rgba(220,149,85,1)";
        //         } else if (val > scalesC[0].minValue) {
        //             fill_color = "rgba(254,213,111,1)";
        //         }
        //         bgColorsT.push(fill_color);
        //     });
        // } catch (error) {
        //     console.log(error);
        // }

        // var tempPrLabelsT = [...provincesT];
        // var topProvDataT = [...valuesT];
        // var topProvColorT = [...bgColorsT];

        // var topProvT = document.getElementById('ctxTopProvTop').getContext('2d');
        // var topProvChartT = new Chart(topProvT, {
        //     // The type of chart we want to create
        //     type: 'horizontalBar',

        //     data: {
        //         labels: tempPrLabelsT,
        //         datasets: [{
        //             label: 'Total palay produced',
        //             backgroundColor: topProvColorT, // COLOR 4
        //             borderColor: topProvColorT, // COLOR 4
        //             data: topProvDataT
        //         }]
        //     },

        //     options: {
        //         layout: {
        //         padding: {
        //                 right: 75
        //             }
        //         },
        //         aspectRatio: 0.55,
        //         scales: {
        //             xAxes: [{
        //                 display: true,
        //                 ticks: {
        //                     userCallback: function(value, index, values) {
        //                         value = value.toString();
        //                         value = value.split(/(?=(?:...)*$)/);
        //                         value = value.join(',');
        //                         return value;
        //                     }
        //                 }
        //             }],
        //             yAxes: [{
        //                 display: true,
        //                 ticks: {
        //                     suggestedMin: 0
        //                 },
        //                 gridLines: {
        //                     color: "rgba(0, 0, 0, 0)"
        //                 }
        //             }]
        //         },
        //         tooltips: false,
        //         legend: {
        //             display: false,
        //             labels: {
        //                 fontSize: 12
        //             }
        //         },
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
        //                         let data = dataset.data[index];
        //                         data = parseInt(data).toLocaleString();
        //                         ctx.fillText(data, bar._model.x + 40, bar._model.y + 8);
        //                     });
        //                 });
        //             }
        //         }
        //     }
        // });
        
        // // CHART 3 - CHART AND MAP ALL

        // var dbProvsMap = JSON.parse('<?php echo $provincial_area_geo; ?>');

        // let mapData = [];

        // for (i = 0; i < dbProvsMap.length; i++) {
        //     var gc = dbProvsMap[i].map_ID;
        //     var value = parseFloat(dbProvsMap[i].value);

        //     var fill_color = "";
        //     if (value > scalesC[3].minValue) {
        //         fill_color = "fourQ";
        //     } else if (value > scalesC[2].minValue) {
        //         fill_color = "thirQ";
        //     } else if (value > scalesC[1].minValue) {
        //         fill_color = "secoQ";
        //     } else if (value > scalesC[0].minValue) {
        //         fill_color = "firsQ";
        //     }

        //     mapData[gc] = {
        //         Location_name: dbProvsMap[i].location_name,
        //         Year: dbProvsMap[i].year,
        //         Value: parseInt(dbProvsMap[i].value).toLocaleString(),
        //         fillKey: fill_color
        //     };
        // }

        // var map = new Datamap({
        //     element: document.getElementById('phl'),
        //     geographyConfig: {
        //         popupOnHover: true,
        //         highlightOnHover: true,
        //         dataUrl: '<?php echo base_url(); ?>js/phl.topo.json',
        //         borderColor: '#000000',
        //         highlightFillColor: '#92cddc',
        //         highlightBorderColor: 'rgba(37, 42, 45, 0.8)',
        //         popupTemplate: function(geography, data) {
        //             return '<div class="hoverinfo"><strong>' + geography.properties.name +
        //                 ': ' + numberWithCommas(data.Value) + ' ha (' + data.Year + ')</strong></div>';
        //         },
        //     },
        //     scope: 'phl',
        //     fills: {
        //         firsQ: 'rgba(254,213,111,0.8)',
        //         secoQ: 'rgba(220,149,85,0.8)',
        //         thirQ: 'rgba(200,107,37,0.8)',
        //         fourQ: 'rgba(112,55,40,0.8)',
        //         defaultFill: 'rgba(0, 0, 0, 0.5)'
        //     },
        //     data: mapData,
        //     setProjection: function(element) {
        //         var projection = d3.geo.mercator()
        //             .center([121.7740, 12.8797])
        //             .scale(2800)
        //             .translate([element.offsetWidth / 2, element.offsetHeight / 2]);

        //         var path = d3.geo.path().projection(projection);
        //         return {
        //             path: path,
        //             projection: projection
        //         };
        //     }
        // });

        // var dbProvs = JSON.parse('<?php echo $provincial_area_all; ?>');

        // let provinces = [];
        // let values = [];
        // let bgColors = [];

        // try {
        //     dbProvs.map((item) => {
        //         provinces.push(item.location_name);
        //         values.push(item.value);
        //         var val = parseFloat(item.value);
        //         if (val > scalesC[3].minValue) {
        //             fill_color = "rgba(112,55,40,1)";
        //         } else if (val > scalesC[2].minValue) {
        //             fill_color = "rgba(200,107,37,1)";
        //         } else if (val > scalesC[1].minValue) {
        //             fill_color = "rgba(220,149,85,1)";
        //         } else if (val > scalesC[0].minValue) {
        //             fill_color = "rgba(254,213,111,1)";
        //         }
        //         bgColors.push(fill_color);
        //     });
        // } catch (error) {
        //     console.log(error);
        // }

        // var tempPrLabels = [...provinces];
        // var topProvData = [...values];
        // var topProvColor = [...bgColors];

        // var topProv = document.getElementById('ctxTopProv').getContext('2d');
        // var topProvChart = new Chart(topProv, {
        //     // The type of chart we want to create
        //     type: 'horizontalBar',

        //     data: {
        //         labels: tempPrLabels,
        //         datasets: [{
        //             label: 'Total palay produced',
        //             backgroundColor: topProvColor, // COLOR 4
        //             borderColor: topProvColor, // COLOR 4
        //             data: topProvData
        //         }]
        //     },

        //     options: {
        //         layout: {
        //         padding: {
        //                 right: 75
        //             }
        //         },
        //         aspectRatio: 0.15,
        //         scales: {
        //             xAxes: [{
        //                 display: true,
        //                 ticks: {
        //                     userCallback: function(value, index, values) {
        //                         value = value.toString();
        //                         value = value.split(/(?=(?:...)*$)/);
        //                         value = value.join(',');
        //                         return value;
        //                     }
        //                 }
        //             }],
        //             yAxes: [{
        //                 display: true,
        //                 ticks: {
        //                     suggestedMin: 0
        //                 },
        //                 gridLines: {
        //                     color: "rgba(0, 0, 0, 0)"
        //                 }
        //             }]
        //         },
        //         tooltips: false,
        //         legend: {
        //             display: false,
        //             labels: {
        //                 fontSize: 12
        //             }
        //         },
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
        //                         let data = dataset.data[index];
        //                         data = parseInt(data).toLocaleString();
        //                         ctx.fillText(data, bar._model.x + 40, bar._model.y + 8);
        //                     });
        //                 });
        //             }
        //         }
        //     }
        // });
        
        // CHART 4 REGIONAL
        
        var dbRegsMap = JSON.parse('<?php echo $regional_area_geo; ?>');

        let area_mapDataR = [];
        
        for (i = 0; i < dbRegsMap.length; i++) {
            var gc = dbRegsMap[i].map_ID;
            var value = parseFloat(dbRegsMap[i].value);

            var fill_color = "";
            if (value > scalesC[3].minValue) {
                fill_color = "fourQ";
            } else if (value > scalesC[2].minValue) {
                fill_color = "thirQ";
            } else if (value > scalesC[1].minValue) {
                fill_color = "secoQ";
            } else if (value > scalesC[0].minValue) {
                fill_color = "firsQ";
            }

            area_mapDataR[gc] = {
                Location_name: dbRegsMap[i].location_name,
                Year: dbRegsMap[i].year,
                Value: parseInt(dbRegsMap[i].value).toLocaleString(),
                fillKey: fill_color
            };
        }

        var map = new Datamap({
            element: document.getElementById('phl-reg-area'),
            geographyConfig: {
                popupOnHover: true,
                highlightOnHover: true,
                dataUrl: '<?php echo base_url(); ?>js/phl.topo.json',
                borderColor: '#000000',
                highlightFillColor: '#92cddc',
                highlightBorderColor: 'rgba(37, 42, 45, 0.8)',
                popupTemplate: function(geography, data) {
                    return '<div class="hoverinfo"><strong>' + data.Location_name +
                        ': ' + numberWithCommas(data.Value) + ' ha (' + data.Year + ')</strong></div>';
                },
            },
            scope: 'phl',
            fills: {
                firsQ: 'rgba(254,213,111,0.8)',
                secoQ: 'rgba(220,149,85,0.8)',
                thirQ: 'rgba(200,107,37,0.8)',
                fourQ: 'rgba(112,55,40,0.8)',
                defaultFill: 'rgba(0, 0, 0, 0.5)'
            },
            data: area_mapDataR,
            setProjection: function(element) {
                var projection = d3.geo.mercator()
                    .center([121.7740, 12.8797])
                    .scale(2800)
                    .translate([element.offsetWidth / 2, element.offsetHeight / 2]);

                var path = d3.geo.path().projection(projection);
                return {
                    path: path,
                    projection: projection
                };
            }
        });
        
        var dbRegs = JSON.parse('<?php echo $regional_area_all; ?>');

        let area_regions = [];
        let area_valuesR = [];
        let area_bgColorsR = [];

        try {
            dbRegs.map((item) => {
                area_regions.push(item.location_name);
                area_valuesR.push(item.value);
                var val = parseFloat(item.value);
                if (val > scalesC[3].minValue) {
                    fill_color = "rgba(112,55,40,1)";
                } else if (val > scalesC[2].minValue) {
                    fill_color = "rgba(200,107,37,1)";
                } else if (val > scalesC[1].minValue) {
                    fill_color = "rgba(220,149,85,1)";
                } else if (val > scalesC[0].minValue) {
                    fill_color = "rgba(254,213,111,1)";
                }
                area_bgColorsR.push(fill_color);
            });
        } catch (error) {
            console.log(error);
        }

        var tempPrLabelsR = [...area_regions];
        var topRegData = [...area_valuesR];
        var topRegColor = [...area_bgColorsR];

        var topReg = document.getElementById('area_ctxRegional').getContext('2d');
        var topRegChart = new Chart(topReg, {
            // The type of chart we want to create
            type: 'horizontalBar',

            data: {
                labels: tempPrLabelsR,
                datasets: [{
                    label: 'Total palay produced',
                    backgroundColor: topRegColor, // COLOR 4
                    borderColor: topRegColor, // COLOR 4
                    data: topRegData
                }]
            },

            options: {
                devicePixelRatio: 3,
                layout: {
                padding: {
                        right: 80
                    }
                },
                aspectRatio: 0.55,
                scales: {
                    xAxes: [{
                        display: true,
                        ticks: {
                            userCallback: function(value, index, values) {
                                value = value.toString();
                                value = value.split(/(?=(?:...)*$)/);
                                value = value.join(',');
                                return value;
                            }
                        }
                    }],
                    yAxes: [{
                        display: true,
                        ticks: {
                            suggestedMin: 0
                        },
                        gridLines: {
                            color: "rgba(0, 0, 0, 0)"
                        }
                    }]
                },
                tooltips: false,
                legend: {
                    display: false,
                    labels: {
                        fontSize: 12
                    }
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
                                data = parseInt(data).toLocaleString();
                                ctx.fillText(data, bar._model.x + 40, bar._model.y + 8);
                            });
                        });
                    }
                }
            }
        });
    </script>

    <!-- YIELD CHARTS -->

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

        let yield_years = [];
        let yield_values_total = [];
        let yield_values_irrig = [];
        let yield_values_rain = [];

        try {
            dbTotal.map((item) => {
                yield_years.push(item.year);
                yield_values_total.push(item.value);
            });
            dbIrrigated.map((item) => {
                yield_values_irrig.push(item.value);
            });
            dbRainfed.map((item) => {
                yield_values_rain.push(item.value);
            });
        } catch (error) {
            console.log(error);
        }

        var yieldStack = document.getElementById('ctxYieldStack').getContext('2d');
        var tempYLabels = [...yield_years];
        var yieldAllData = [...yield_values_total];
        var yieldIrrigData = [...yield_values_irrig];
        var yieldRainData = [...yield_values_rain];
        var yieldStackChart = new Chart(yieldStack, {

            type: 'bar',

            data: {
                labels: tempYLabels,
                datasets: [{
                        label: 'National Average',
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
                        label: 'Non-Irrigated Area',
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
                            suggestedMin: 0,
                            suggestedMax: 5
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
                            let meta = chartInstance.controller.getDatasetMeta(i);
                            meta.data.forEach(function(bar, index) {
                                let data = dataset.data[index];
                                ctx.fillText(data, bar._model.x + 0, bar._model.y + -5);
                            });
                        });
                    }
                }
            }
        });
        
        // DEFAULT FOR CHART 2, 3, AND 4
        
        var scalesC = [{
                "range": 0,
                "minValue": "0.00",
                "maxValue": "4.15"
            },
            {
                "range": 1,
                "minValue": "4.15",
                "maxValue": "20.00"
            }
        ];
        
        // // CHART 2 - CHART AND MAP TOP
        
        // var dbProvsMapTop = JSON.parse('<?php echo $provincial_yield_geo; ?>');
        // dbProvsMapTop = dbProvsMapTop.slice(0, 20);
        
        // let mapDataTop = [];
        
        // for (i = 0; i < dbProvsMapTop.length; i++) {
        //     var gc = dbProvsMapTop[i].map_ID;
        //     var value = parseFloat(dbProvsMapTop[i].value);

        //     var fill_color = "";
        //     if (value > scalesC[1].minValue) {
        //         fill_color = "secoQ";
        //     } else if (value > scalesC[0].minValue) {
        //         fill_color = "firsQ";
        //     }

        //     mapDataTop[gc] = {
        //         Location_name: dbProvsMapTop[i].location_name,
        //         Year: dbProvsMapTop[i].year,
        //         Value: parseFloat(dbProvsMapTop[i].value).toLocaleString(),
        //         fillKey: fill_color
        //     };
        // }

        // var map = new Datamap({
        //     element: document.getElementById('phl-top'),
        //     geographyConfig: {
        //         popupOnHover: true,
        //         highlightOnHover: true,
        //         dataUrl: '<?php echo base_url(); ?>js/phl.topo.json',
        //         borderColor: '#000000',
        //         highlightFillColor: '#92cddc',
        //         highlightBorderColor: 'rgba(37, 42, 45, 0.8)',
        //         popupTemplate: function(geography, data) {
        //             return '<div class="hoverinfo"><strong>' + geography.properties.name +
        //                 ': ' + numberWithCommas(data.Value) + ' mt/ha (' + data.Year + ')</strong></div>';
        //         },
        //     },
        //     scope: 'phl',
        //     fills: {
        //         firsQ: 'rgba(42,140,184,0.8)',
        //         secoQ: 'rgba(41,107,54,0.8)',
        //         thirQ: 'rgba(15,40,184,0.8)',
        //         fourQ: 'rgba(24,132,184,0.8)',
        //         defaultFill: 'rgba(166,216,225,1)'
        //     },
        //     data: mapDataTop,
        //     setProjection: function(element) {
        //         var projection = d3.geo.mercator()
        //             .center([121.7740, 12.8797])
        //             .scale(2800)
        //             .translate([element.offsetWidth / 2, element.offsetHeight / 2]);

        //         var path = d3.geo.path().projection(projection);
        //         return {
        //             path: path,
        //             projection: projection
        //         };
        //     }
        // });
        
        // var dbProvsTop = JSON.parse('<?php echo $provincial_yield_all; ?>');
        // dbProvsTop = dbProvsTop.slice(0, 20);

        // let provincesT = [];
        // let valuesT = [];
        // let bgColorsT = [];

        // try {
        //     dbProvsTop.map((item) => {
        //         provincesT.push(item.location_name);
        //         valuesT.push(item.value);
        //         var val = parseFloat(item.value);
        //         if (val > scalesC[1].minValue) {
        //             fill_color = "rgba(41,107,54,1)";
        //         } else if (val > scalesC[0].minValue) {
        //             fill_color = "rgba(42,140,184,1)";
        //         }
        //         bgColorsT.push(fill_color);
        //     });
        // } catch (error) {
        //     console.log(error);
        // }

        // var tempPrLabelsT = [...provincesT];
        // var topProvDataT = [...valuesT];
        // var topProvColorT = [...bgColorsT];

        // var topProvT = document.getElementById('ctxTopProvTop').getContext('2d');
        // var topProvChartT = new Chart(topProvT, {
        //     // The type of chart we want to create
        //     type: 'horizontalBar',

        //     data: {
        //         labels: tempPrLabelsT,
        //         datasets: [{
        //             label: 'Total palay produced',
        //             backgroundColor: topProvColorT, // COLOR 4
        //             borderColor: topProvColorT, // COLOR 4
        //             data: topProvDataT
        //         }]
        //     },

        //     options: {
        //         layout: {
        //         padding: {
        //                 right: 75
        //             }
        //         },
        //         aspectRatio: 0.55,
        //         scales: {
        //             xAxes: [{
        //                 display: true,
        //                 ticks: {
        //                     userCallback: function(value, index, values) {
        //                         value = value.toString();
        //                         value = value.split(/(?=(?:...)*$)/);
        //                         value = value.join(',');
        //                         return value;
        //                     }
        //                 }
        //             }],
        //             yAxes: [{
        //                 display: true,
        //                 ticks: {
        //                     suggestedMin: 0
        //                 },
        //                 gridLines: {
        //                     color: "rgba(0, 0, 0, 0)"
        //                 }
        //             }]
        //         },
        //         tooltips: false,
        //         legend: {
        //             display: false,
        //             labels: {
        //                 fontSize: 12
        //             }
        //         },
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
        //                         let data = dataset.data[index];
        //                         data = parseFloat(data).toLocaleString();
        //                         ctx.fillText(data, bar._model.x + 20, bar._model.y + 8);
        //                     });
        //                 });
        //             }
        //         }
        //     }
        // });
        
        // // CHART 3 - CHART AND MAP ALL

        // var dbProvsMap = JSON.parse('<?php echo $provincial_yield_geo; ?>');

        // let mapData = [];

        // for (i = 0; i < dbProvsMap.length; i++) {
        //     var gc = dbProvsMap[i].map_ID;
        //     var value = parseFloat(dbProvsMap[i].value);

        //     var fill_color = "";
        //     if (value > scalesC[1].minValue) {
        //         fill_color = "secoQ";
        //     } else if (value > scalesC[0].minValue) {
        //         fill_color = "firsQ";
        //     }

        //     mapData[gc] = {
        //         Location_name: dbProvsMap[i].location_name,
        //         Year: dbProvsMap[i].year,
        //         Value: parseFloat(dbProvsMap[i].value).toLocaleString(),
        //         fillKey: fill_color
        //     };
        // }

        // var map = new Datamap({
        //     element: document.getElementById('phl'),
        //     geographyConfig: {
        //         popupOnHover: true,
        //         highlightOnHover: true,
        //         dataUrl: '<?php echo base_url(); ?>js/phl.topo.json',
        //         borderColor: '#000000',
        //         highlightFillColor: '#92cddc',
        //         highlightBorderColor: 'rgba(37, 42, 45, 0.8)',
        //         popupTemplate: function(geography, data) {
        //             return '<div class="hoverinfo"><strong>' + geography.properties.name +
        //                 ': ' + numberWithCommas(data.Value) + ' mt/ha (' + data.Year + ')</strong></div>';
        //         },
        //     },
        //     scope: 'phl',
        //     fills: {
        //         firsQ: 'rgba(42,140,184,0.8)',
        //         secoQ: 'rgba(41,107,54,0.8)',
        //         thirQ: 'rgba(15,40,184,0.8)',
        //         fourQ: 'rgba(24,132,184,0.8)',
        //         defaultFill: 'rgba(0, 0, 0, 0.5)'
        //     },
        //     data: mapData,
        //     setProjection: function(element) {
        //         var projection = d3.geo.mercator()
        //             .center([121.7740, 12.8797])
        //             .scale(2800)
        //             .translate([element.offsetWidth / 2, element.offsetHeight / 2]);

        //         var path = d3.geo.path().projection(projection);
        //         return {
        //             path: path,
        //             projection: projection
        //         };
        //     }
        // });

        // var dbProvs = JSON.parse('<?php echo $provincial_yield_all; ?>');

        // let provinces = [];
        // let values = [];
        // let bgColors = [];

        // try {
        //     dbProvs.map((item) => {
        //         provinces.push(item.location_name);
        //         values.push(item.value);
        //         var val = parseFloat(item.value);
        //         if (val > scalesC[1].minValue) {
        //             fill_color = "rgba(41,107,54,1)";
        //         } else if (val > scalesC[0].minValue) {
        //             fill_color = "rgba(42,140,184,1)";
        //         }
        //         bgColors.push(fill_color);
        //     });
        // } catch (error) {
        //     console.log(error);
        // }

        // var tempPrLabels = [...provinces];
        // var topProvData = [...values];
        // var topProvColor = [...bgColors];

        // var topProv = document.getElementById('ctxTopProv').getContext('2d');
        // var topProvChart = new Chart(topProv, {
        //     // The type of chart we want to create
        //     type: 'horizontalBar',

        //     data: {
        //         labels: tempPrLabels,
        //         datasets: [{
        //             label: 'Total palay produced',
        //             backgroundColor: topProvColor, // COLOR 4
        //             borderColor: topProvColor, // COLOR 4
        //             data: topProvData
        //         }]
        //     },

        //     options: {
        //         layout: {
        //         padding: {
        //                 right: 75
        //             }
        //         },
        //         aspectRatio: 0.15,
        //         scales: {
        //             xAxes: [{
        //                 display: true,
        //                 ticks: {
        //                     userCallback: function(value, index, values) {
        //                         value = value.toString();
        //                         value = value.split(/(?=(?:...)*$)/);
        //                         value = value.join(',');
        //                         return value;
        //                     }
        //                 }
        //             }],
        //             yAxes: [{
        //                 display: true,
        //                 ticks: {
        //                     suggestedMin: 0
        //                 },
        //                 gridLines: {
        //                     color: "rgba(0, 0, 0, 0)"
        //                 }
        //             }]
        //         },
        //         tooltips: false,
        //         legend: {
        //             display: false,
        //             labels: {
        //                 fontSize: 12
        //             }
        //         },
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
        //                         let data = dataset.data[index];
        //                         data = parseFloat(data).toLocaleString();
        //                         ctx.fillText(data, bar._model.x + 20, bar._model.y + 8);
        //                     });
        //                 });
        //             }
        //         }
        //     }
        // });
        
        // CHART 4 REGIONAL
        
        var dbRegsMap = JSON.parse('<?php echo $regional_yield_geocoded; ?>');

        let yield_mapDataR = [];
        
        for (i = 0; i < dbRegsMap.length; i++) {
            var gc = dbRegsMap[i].map_ID;
            var value = parseFloat(dbRegsMap[i].value);

            var fill_color = "";
            if (value > scalesC[1].minValue) {
                fill_color = "secoQ";
            } else if (value > scalesC[0].minValue) {
                fill_color = "firsQ";
            }

            yield_mapDataR[gc] = {
                Location_name: dbRegsMap[i].location_name,
                Year: dbRegsMap[i].year,
                Value: parseFloat(dbRegsMap[i].value).toLocaleString(),
                fillKey: fill_color
            };
        }

        var map = new Datamap({
            element: document.getElementById('phl-reg-yield'),
            geographyConfig: {
                popupOnHover: true,
                highlightOnHover: true,
                dataUrl: '<?php echo base_url(); ?>js/phl.topo.json',
                borderColor: '#000000',
                highlightFillColor: '#92cddc',
                highlightBorderColor: 'rgba(37, 42, 45, 0.8)',
                popupTemplate: function(geography, data) {
                    return '<div class="hoverinfo"><strong>' + data.Location_name +
                        ': ' + numberWithCommas(data.Value) + ' mt (' + data.Year + ')</strong></div>';
                },
            },
            scope: 'phl',
            fills: {
                firsQ: 'rgba(42,140,184,0.8)',
                secoQ: 'rgba(41,107,54,0.8)',
                thirQ: 'rgba(15,40,184,0.8)',
                fourQ: 'rgba(24,132,184,0.8)',
                defaultFill: 'rgba(0, 0, 0, 0.5)'
            },
            data: yield_mapDataR,
            setProjection: function(element) {
                var projection = d3.geo.mercator()
                    .center([121.7740, 12.8797])
                    .scale(2800)
                    .translate([element.offsetWidth / 2, element.offsetHeight / 2]);

                var path = d3.geo.path().projection(projection);
                return {
                    path: path,
                    projection: projection
                };
            }
        });
        
        var dbRegs = JSON.parse('<?php echo $regional_yield_all; ?>');

        let yield_regions = [];
        let yield_valuesR = [];
        let yield_bgColorsR = [];

        try {
            dbRegs.map((item) => {
                yield_regions.push(item.location_name);
                yield_valuesR.push(item.value);
                var val = parseFloat(item.value);
                if (val > scalesC[1].minValue) {
                    fill_color = "rgba(41,107,54,1)";
                } else if (val > scalesC[0].minValue) {
                    fill_color = "rgba(42,140,184,1)";
                }
                yield_bgColorsR.push(fill_color);
            });
        } catch (error) {
            console.log(error);
        }

        var tempPrLabelsR = [...yield_regions];
        var topRegData = [...yield_valuesR];
        var topRegColor = [...yield_bgColorsR];

        var topReg = document.getElementById('yield_ctxRegional').getContext('2d');
        var topRegChart = new Chart(topReg, {
            // The type of chart we want to create
            type: 'horizontalBar',

            data: {
                labels: tempPrLabelsR,
                datasets: [{
                    label: 'Total palay produced',
                    backgroundColor: topRegColor, // COLOR 4
                    borderColor: topRegColor, // COLOR 4
                    data: topRegData
                }]
            },

            options: {
                devicePixelRatio: 3,
                layout: {
                padding: {
                        right: 80
                    }
                },
                aspectRatio: 0.55,
                scales: {
                    xAxes: [{
                        display: true,
                        ticks: {
                            userCallback: function(value, index, values) {
                                value = value.toString();
                                value = value.split(/(?=(?:...)*$)/);
                                value = value.join(',');
                                return value;
                            }
                        }
                    }],
                    yAxes: [{
                        display: true,
                        ticks: {
                            suggestedMin: 0
                        },
                        gridLines: {
                            color: "rgba(0, 0, 0, 0)"
                        }
                    }]
                },
                tooltips: false,
                legend: {
                    display: false,
                    labels: {
                        fontSize: 12
                    }
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
                                data = parseFloat(data).toLocaleString();
                                ctx.fillText(data, bar._model.x + 20, bar._model.y + 8);
                            });
                        });
                    }
                }
            }
        });
    </script>

    <!-- SUPPLIES CHARTS -->

    <script>
        // var sidebarjs = new SidebarJS.SidebarElement();
        Chart.defaults.global.responsive = true;
        Chart.defaults.global.tooltips.mode = 'index';
        Chart.defaults.global.tooltips.intersect = false;
        Chart.defaults.global.defaultFontFamily = 'Poppins';
        Chart.defaults.global.defaultFontSize = 12;
        Chart.defaults.global.animation.duration = 3000;
        Chart.defaults.global.defaultFontColor = "#000000";
                
        var dbTotalSupply = JSON.parse('<?php echo $total_supply_s; ?>');
        var dbTotalUtil = JSON.parse('<?php echo $total_utilization_s; ?>');
        var dbSupplySources = JSON.parse('<?php echo $supply_sources_yearly_s; ?>');
        var dbUseAccounts = JSON.parse('<?php echo $util_accounts_yearly_s; ?>');
        
        var curStocks = '<?php echo $supply_sources_values['SUBeginningStocks']; ?>';
        var curProduce = '<?php echo $supply_sources_values['SUProduction']; ?>';
        var curImports = '<?php echo $supply_sources_values['SUImports']; ?>';
        var curExports = '<?php echo $util_accounts_values['UTExports']; ?>';
        var curSeeds = '<?php echo $util_accounts_values['UTSeeds']; ?>';
        var curFeedWastes = '<?php echo $util_accounts_values['UTFeedsWaste']; ?>';
        var curProcessing = '<?php echo $util_accounts_values['UTProcessing']; ?>';
        var curEndStocks = '<?php echo $util_accounts_values['UTEndingStocks']; ?>';
        var curFood = '<?php echo $util_accounts_values['uttotalnet']; ?>';

        let supply_years = [];
        let years_act = [];
        let supplies = [];
        let utils = [];
        let stocks = [];
        let locals = [];
        let imports = [];
        let exports = [];
        let seeds = [];
        let feedswastes = [];
        let processing = [];
        let endstocks = [];
        let food = [];

        try {
            dbTotalSupply.map((item) => {
            supply_years.push(item.year);
            supplies.push(item.value);
            });
            dbTotalUtil.map((item) => {
            utils.push(item.value);
            });
            dbSupplySources.map((item) => {
            stocks.push(item.SUBeginningStocks);
            locals.push(item.SUProduction);
            imports.push(item.SUImports);
            });
            dbUseAccounts.map((item) => {
            exports.push(item.UTExports);
            seeds.push(item.UTSeeds);
            feedswastes.push(item.UTFeedsWaste);
            processing.push(item.UTProcessing);
            endstocks.push(item.UTEndingStocks);
            food.push(item.uttotalnet);
            });
        } catch (error) {
            console.log(error);
        }
        
        var yearsLab = [...supply_years];
        var yearsLabAct = [...years_act];
        var totalSupply = [...supplies];
        var totalUse = [...utils];
        var totalStocks = [...stocks];
        var totalProduce = [...locals];
        var totalImports = [...imports];
        var totalExports = [...exports];
        var totalSeeds = [...seeds];
        var totalFeedsWastes = [...feedswastes];
        var totalProcessing = [...processing];
        var totalEndStocks = [...endstocks];
        var totalFood = [...food];          

        /**
        ctxSupply
        ctxUtil 
        */
        
        var SupplyUse = document.getElementById('ctxSupply').getContext('2d');
                
        var SupplyUseChart = new Chart(SupplyUse, {
        // The type of chart we want to create
        type: 'line',

        // The data for our dataset
        data: {
            labels: yearsLab,
            datasets: [{
                label: 'Total Supply',
                backgroundColor: '#A6CEE3',   // COLOR 1
                borderColor: '#A6CEE3',       // COLOR 1
                lineTension: 0,
                fill: false,
                data: totalSupply
            },{
                label: 'Total Utilization',
                backgroundColor: '#007FFE',    // COLOR 2
                borderColor: '#007FFE',        // COLOR 2
                lineTension: 0,
                fill: false,
                data: totalUse
            }]
        },

        // Configuration options go here
        options: {
                devicePixelRatio: 3,
                aspectRatio: 2.5,
                elements: {
                    point:{
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
                        ctx.fillStyle = '#1e1e1e';

                        this.data.datasets.forEach(function(dataset, i)
                                                    {
                        let meta = chartInstance.controller.getDatasetMeta(i);
                        meta.data.forEach(function(bar, index) {
                            let data = dataset.data[index];
                            ctx.fillText(data, bar._model.x + 0 , bar._model.y + -5);
                        });
                        });
                    }
                }   
            }
        });
            
        var SupplyStack = document.getElementById('ctxSupplyStack').getContext('2d');

        var SupplyStackChart = new Chart(SupplyStack, {

            type: 'bar',

            data: {
                labels: yearsLab,
                datasets: [                        
                {
                    label: 'Local Production',   
                    backgroundColor: '#2037B4',      // COLOR 2
                    borderColor: '#2037B4',          // COLOR 2
                    data: totalProduce
                },
                {
                    label: 'Beginning Stocks',
                    backgroundColor: '#FE8100',    // COLOR 1
                    borderColor: '#FE8100',        // COLOR 1
                    data: totalStocks
                },
                {
                    label: 'Imports',
                    backgroundColor: '#A2C5AC',   // COLOR 3
                    borderColor: '#A2C5AC',       // COLOR 3
                    data: totalImports
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
                        display: true
                    }]
                },
                legend: {
                    position: 'top'
                },
                datalabels: {
                    display: false
                },
                plugins: {
                    labels: false
                }
            }
        });
                
        var UtilStack = document.getElementById('ctxUtilStack').getContext('2d');

        var ctxUtilStackChart = new Chart(UtilStack, {

            type: 'bar',

            data: {
                labels: yearsLab,
                datasets: [                        
                {
                    label: 'Seeds',   
                    backgroundColor: '#00FE7F',      // COLOR 2
                    borderColor: '#00FE7F',          // COLOR 2
                    data: totalSeeds
                },
                {
                    label: 'Feeds/Wastes',   
                    backgroundColor: '#FE0000',      // COLOR 2
                    borderColor: '#FE0000',          // COLOR 2
                    data: totalFeedsWastes
                },
                {
                    label: 'Processing',   
                    backgroundColor: '#04C5AC',      // COLOR 2
                    borderColor: '#04C5AC',          // COLOR 2
                    data: totalProcessing
                },
                {
                    label: 'Net Food Disposable',
                    backgroundColor: '#2037B4',   // COLOR 3
                    borderColor: '#2037B4',       // COLOR 3
                    data: totalFood
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
                        display: true
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
    </script>

    <!-- CONSUMPTION CHARTS -->

    <script>
        // var sidebarjs = new SidebarJS.SidebarElement();
        Chart.defaults.global.responsive = true;
        Chart.defaults.global.tooltips.mode = 'index';
        Chart.defaults.global.tooltips.intersect = false;
        Chart.defaults.global.defaultFontFamily = 'Poppins';
        Chart.defaults.global.defaultFontSize = 13;
        Chart.defaults.global.animation.duration = 3000;
        Chart.defaults.global.defaultFontColor = "#000000";

        var dbTotalSupply = JSON.parse('<?php echo $total_supply; ?>');
        var dbTotalUtil = JSON.parse('<?php echo $total_utilization; ?>');
        var dbSupplySources = JSON.parse('<?php echo $supply_sources_yearly; ?>');
        var dbUseAccounts = JSON.parse('<?php echo $util_accounts_yearly; ?>');
        var dbPerCapitas = JSON.parse('<?php echo $per_capita_yearly; ?>');
        var dbPerCapitasFNRI = JSON.parse('<?php echo $actual_per_capita_yearly; ?>');

        var curStocks = '<?php echo $supply_sources_values['SUBeginningStocks']; ?>';
        var curProduce = '<?php echo $supply_sources_values['SUProduction']; ?>';
        var curImports = '<?php echo $supply_sources_values['SUImports']; ?>';
        var curExports = '<?php echo $util_accounts_values['UTExports']; ?>';
        var curSeeds = '<?php echo $util_accounts_values['UTSeeds']; ?>';
        var curFeedWastes = '<?php echo $util_accounts_values['UTFeedsWaste']; ?>';
        var curProcessing = '<?php echo $util_accounts_values['UTProcessing']; ?>';
        var curEndStocks = '<?php echo $util_accounts_values['UTEndingStocks']; ?>';
        var curFood = '<?php echo $util_accounts_values['uttotalnet']; ?>';

        let consumption_years = [];
        let consumption_years_act = [];
        let consumption_supplies = [];
        let consumption_utils = [];
        let consumption_stocks = [];
        let consumption_locals = [];
        let consumption_imports = [];
        let consumption_exports = [];
        let consumption_seeds = [];
        let consumption_feedswastes = [];
        let consumption_processing = [];
        let consumption_endstocks = [];
        let consumption_food = [];
        let consumption_kgpercapita = [];
        let consumption_gmpercapita = [];
        let consumption_kgpercapita_act = [];
        let consumption_gmpercapita_act = [];
        let consumption_population = [];

        try {
            dbTotalSupply.map((item) => {
                consumption_years.push(item.year);
            });
            dbSupplySources.map((item) => {
                consumption_stocks.push(item.SUBeginningStocks);
                consumption_locals.push(item.SUProduction);
                consumption_imports.push(item.SUImports);
            });
            dbUseAccounts.map((item) => {
                consumption_exports.push(item.UTExports);
                consumption_seeds.push(item.UTSeeds);
                consumption_feedswastes.push(item.UTFeedsWaste);
                consumption_processing.push(item.UTProcessing);
                consumption_endstocks.push(item.UTEndingStocks);
                consumption_food.push(item.uttotalnet);
            });
            dbPerCapitas.map((item) => {
                consumption_kgpercapita.push(item.KgPerYear);
                consumption_gmpercapita.push(item.GmPerDay);
            });
            dbPerCapitasFNRI.map((item) => {
                consumption_years_act.push(item.year);
                consumption_kgpercapita_act.push(item.KgPerYear);
                consumption_gmpercapita_act.push(item.GmPerDay);
            });
        } catch (error) {
            console.log(error);
        }

        var yearsLab = [...consumption_years];
        var yearsLabAct = [...consumption_years_act];
        var totalProduce = [...consumption_locals];
        var totalFood = [...consumption_food];
        var totalKgCapita = [...consumption_kgpercapita];
        var totalGmCapita = [...consumption_gmpercapita];
        var totalKgCapitaAct = [...consumption_kgpercapita_act];
        var totalGmCapitaAct = [...consumption_gmpercapita_act];

        var ProdFood = document.getElementById('ctxProdFood').getContext('2d');

        var ProdFoodChart = new Chart(ProdFood, {
            // The type of chart we want to create
            type: 'bar',

            // The data for our dataset
            data: {
                labels: yearsLab,
                datasets: [{
                    type: 'line',
                    label: 'Local Production',
                    backgroundColor: '#A6CEE3', // COLOR 1
                    borderColor: '#A6CEE3', // COLOR 1
                    lineTension: 0,
                    fill: false,
                    data: totalProduce,
                }, {
                    type: 'line',
                    label: 'Net Food Disposable',
                    backgroundColor: '#007FFE', // COLOR 2
                    borderColor: '#007FFE', // COLOR 2
                    lineTension: 0,
                    fill: false,
                    data: totalFood,
                }]
            },

            // Configuration options go here
            options: {
                devicePixelRatio: 3,
                aspectRatio: 2.5,
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
                        type: 'linear',
                        position: 'left',
                    }]
                },
                legend: {
                    display: 'false'
                },
                plugins: {
                    labels: false
                }
            }
        });

        var KgCapita = document.getElementById('ctxKgCapita').getContext('2d');

        var KgCapitaChart = new Chart(KgCapita, {
            // The type of chart we want to create
            type: 'bar',

            // The data for our dataset
            data: {
                labels: yearsLabAct,
                datasets: [{
                    label: 'Per Capita (kg/year)',
                    backgroundColor: '#007FFE', // COLOR 2
                    borderColor: '#007FFE', // COLOR 2
                    lineTension: 0,
                    fill: false,
                    data: totalKgCapitaAct
                }]
            },

            // Configuration options go here
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
                            min: 95,
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

        var GramCapita = document.getElementById('ctxGramCapita').getContext('2d');

        var GramCapitaChart = new Chart(GramCapita, {
            // The type of chart we want to create
            type: 'bar',

            // The data for our dataset
            data: {
                labels: yearsLabAct,
                datasets: [{
                    label: 'Per Capita (g/day)',
                    backgroundColor: '#007FFE', // COLOR 2
                    borderColor: '#007FFE', // COLOR 2
                    lineTension: 0,
                    fill: false,
                    data: totalGmCapitaAct
                }]
            },

            // Configuration options go here
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
                            min: 200,
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

    <!-- VALUATION CHARTS -->

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

        // CHART 1

        var dbPalay = JSON.parse('<?php echo $palay_valuation_yearly; ?>');
        var dbAgri = JSON.parse('<?php echo $agri_valuation_yearly; ?>');

        let valuation_years = [];
        let values_palay = [];
        let values_agri = [];

        try {
            dbPalay.map((item) => {
                valuation_years.push(item.year);
                values_palay.push(item.value);
            });
            dbAgri.map((item) => {
                values_agri.push(item.value);
            });
        } catch (error) {
            console.log(error);
        }

        var agriSector = document.getElementById('ctxAgriSector').getContext('2d');
        var tempAgriLabels = [...valuation_years];
        var agriSecData = [...values_agri];
        var riceSecData = [...values_palay];
        var agriSectorChart = new Chart(agriSector, {
            // The type of chart we want to create
            type: 'line',

            // The data for our dataset
            data: {
                labels: tempAgriLabels,
                datasets: [{
                        label: 'Rice Production',
                        backgroundColor: '#2138B7', // COLOR 1
                        borderColor: '#2138B7', // COLOR 1
                        lineTension: 0,
                        data: riceSecData
                    },
                    {
                        label: 'Agricultural Production',
                        backgroundColor: '#007FFE', // COLOR 2
                        borderColor: '#007FFE', // COLOR 2
                        lineTension: 0,
                        data: agriSecData
                    },
                ]
            },

            // Configuration options go here
            options: {
                devicePixelRatio: 3,
                aspectRatio: 2.5,
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
                            callback: function(value) {
                                return value.toLocaleString();
                            }
                        }
                    }]
                },
                legend: {
                    position: 'top'
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

        // CHART 2

        var dbAgriSh = JSON.parse('<?php echo $agri_valuation_share; ?>');
        var dbTotalSh = JSON.parse('<?php echo $total_valuation_share; ?>');

        let shares_years = [];
        let shares_agri = [];
        let shares_total = [];

        try {
            dbAgriSh.map((item) => {
                shares_years.push(item.year);
                shares_agri.push(item.value);
            });
            dbTotalSh.map((item) => {
                shares_total.push(item.value);
            });
        } catch (error) {
            console.log(error);
        }

        var agriShare = document.getElementById('valuation_ctxAgriShare').getContext('2d');
        var tempShareLabels = [...shares_years];
        var agriShareData = [...shares_agri];
        var totalShareData = [...shares_total];
        var agriShareChart = new Chart(agriShare, {
            // The type of chart we want to create
            type: 'bar',

            // The data for our dataset
            data: {
                labels: tempShareLabels,
                datasets: [{
                    label: 'Agriculture Value Share',
                    backgroundColor: '#007FFE', // COLOR 2
                    borderColor: '#007FFE', // COLOR 2
                    data: agriShareData
                }]
            },

            // Configuration options go here
            options: {
                devicePixelRatio: 3,
                aspectRatio: 2.5,
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
                            suggestedMax: 40
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
                        this.data.datasets.forEach(function(dataset, i) {
                            let meta = chartInstance.controller.getDatasetMeta(i);
                            meta.data.forEach(function(bar, index) {
                                let data = dataset.data[index];
                                ctx.fillStyle = '#ffffff';
                                data = parseInt(data).toLocaleString() + '%';
                                ctx.fillText(data, bar._model.x + 0, bar._model.y + 20);
                            });
                        });
                    }
                }
            }
        });

        var Org = JSON.parse('<?php echo $latest_palay_agri_share['value']; ?>');
        var NonOrg = JSON.parse('<?php echo $latest_nonpalay_agri_share; ?>');

        // CHART 1

        var ctx = document.getElementById("ctxPercentShare");
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                datasets: [{
                    data: [Org, NonOrg],
                    backgroundColor: [
                        '#2138b7', // COLOR 1
                        '#f8f8f8' // COLOR 2
                    ],
                    borderColor: [
                        '#2138b7', // COLOR 1
                        '#f8f8f8' // COLOR 2
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
                        color: '#2138b7',
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

    <!-- INCOME CHARTS -->

    <script>
        // var sidebarjs = new SidebarJS.SidebarElement();
        Chart.defaults.global.responsive = true;
        Chart.defaults.global.tooltips.mode = 'index';
        Chart.defaults.global.tooltips.intersect = false;
        Chart.defaults.global.defaultFontFamily = 'Poppins';
        Chart.defaults.global.defaultFontSize = 12;
        Chart.defaults.global.animation.duration = 3000;
        Chart.defaults.global.defaultFontColor = "#000000";

        var dbNetReturns = JSON.parse('<?php echo $yearly_net_returns; ?>');

        let years_net = [];
        let values_net = [];

        try {
            dbNetReturns.map((item) => {
                years_net.push(item.year);
                values_net.push(item.value);
            });
        } catch (error) {
            console.log(error);
        }

        var dbGrossReturns = JSON.parse('<?php echo $yearly_gross_returns; ?>');

        let years_gross = [];
        let values_gross = [];

        try {
            dbGrossReturns.map((item) => {
                years_gross.push(item.year);
                values_gross.push(item.value);
            });
        } catch (error) {
            console.log(error);
        }

        var dbCosts = JSON.parse('<?php echo $yearly_total_costs; ?>');

        let years_costs = [];
        let values_costs = [];

        try {
            dbCosts.map((item) => {
                years_costs.push(item.year);
                values_costs.push(item.value);
            });
        } catch (error) {
            console.log(error);
        }

        var grossReturns = document.getElementById('ctxGrossReturns').getContext('2d');
        var tempGrossReturns = [...years_gross];
        var grossNetData = [...values_net];
        var grossReturnsData = [...values_gross];
        var costsData = [...values_costs];
        var grossReturnsChart = new Chart(grossReturns, {
            // The type of chart we want to create
            type: 'bar',

            // The data for our dataset
            data: {
                labels: tempGrossReturns,
                datasets: [{
                    label: 'Net Returns',
                    backgroundColor: '#2138B7', // COLOR 2
                    borderColor: '#2138B7', // COLOR 2
                    type: 'line',
                    lineTension: 0,
                    fill: false,
                    data: grossNetData
                }, {
                    label: 'Gross Returns',
                    backgroundColor: '#FE7F00', // COLOR 1
                    borderColor: '#FE7F00', // COLOR 1                    
                    fill: false,
                    data: grossReturnsData
                }, {
                    label: 'Total Cost',
                    backgroundColor: '#A6CEE3', // COLOR 2
                    borderColor: '#A6CEE3', // COLOR 2
                    fill: false,
                    data: costsData
                }]
            },

            // Configuration options go here
            options: {
                devicePixelRatio: 3,
                aspectRatio: 2,
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
                            suggestedMax: 90000,
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
                },
                plugins: {
                    labels: false
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


        // CHART 2

        var dbRegs = JSON.parse('<?php echo $regional_costs_all; ?>');

        let income_regions = [];
        let costs = [];
        let netr = [];
        let totc = [];

        try {
            dbRegs.map((item) => {
                income_regions.push(item.location_name);
                costs.push(item.costs);
                netr.push(item.net);
                totc.push(parseInt(item.costs) + parseInt(item.net));
            });
        } catch (error) {
            console.log(error);
        }

        var tempRgLabels = [...income_regions];
        var topCostsData = [...costs];
        var topNetData = [...netr];
        var topTotal = [...totc];

        var topReg = document.getElementById('ctxTopRegions').getContext('2d');
        var topRegChart = new Chart(topReg, {
            // The type of chart we want to create
            type: 'horizontalBar',

            data: {
                labels: tempRgLabels,
                datasets: [{
                    label: 'Gross Returns',
                    backgroundColor: '#FE7F00', // COLOR 1
                    borderColor: '#FE7F00', // COLOR 1
                    data: topTotal,
                }]
            },

            options: {
                devicePixelRatio: 3,
                aspectRatio: .582,
                scales: {
                    xAxes: [{
                        // stacked: true,
                        display: false,
                        ticks: {
                            suggestedMin: 0,
                            suggestedMax: 90000,
                            beginAtZero: true,
                            userCallback: function(value, index, values) {
                                value = value.toString();
                                value = value.split(/(?=(?:...)*$)/);
                                value = value.join(',');
                                return value;
                            }
                        }
                    }],
                    yAxes: [{
                        // stacked: true,
                        display: true,
                        ticks: {
                            suggestedMin: 0
                        },
                        gridLines: {
                            color: "rgba(0, 0, 0, 0)"
                        }
                    }]
                },
                legend: {
                    position: 'top',
                    onClick: (e) => e.stopPropagation(),
                    labels: {
                        fontSize: 12,
                    }
                },
                tooltips: false,
                hover: {
                    animationDuration: 0
                },
                animation: {
                    duration: 1,
                    onComplete: function() {
                        let chartInstance = this.chart,
                            ctx = chartInstance.ctx;

                        ctx.textAlign = 'center';
                        ctx.textBaseline = 'bottom';
                        ctx.fillStyle = '#000000';
                        ctx.font = ctx.font.replace(/\d+px/, "10px");

                        this.data.datasets.forEach(function(dataset, i) {
                            let meta = chartInstance.controller.getDatasetMeta(i);
                            meta.data.forEach(function(bar, index) {
                                let data = dataset.data[index];
                                data = parseInt(data).toLocaleString();
                                ctx.fillText(data, bar._model.x + 18.5, bar._model.y + 7);
                            });
                        });
                    }
                }
            }
        });
        
        var topRegWide = document.getElementById('ctxWideRegions').getContext('2d');
        var topRegChartWide = new Chart(topRegWide, {
            // The type of chart we want to create
            type: 'horizontalBar',

            data: {
                labels: tempRgLabels,
                datasets: [{
                    label: 'Gross Returns',
                    backgroundColor: '#FE7F00', // COLOR 1
                    borderColor: '#FE7F00', // COLOR 1
                    data: topTotal,
                }]
            },

            options: {
                devicePixelRatio: 3,
                aspectRatio: 1.5,
                scales: {
                    xAxes: [{
                        // stacked: true,
                        display: true,
                        ticks: {
                            suggestedMin: 0,
                            suggestedMax: 90000,
                            beginAtZero: true,
                            userCallback: function(value, index, values) {
                                value = value.toString();
                                value = value.split(/(?=(?:...)*$)/);
                                value = value.join(',');
                                return value;
                            }
                        }
                    }],
                    yAxes: [{
                        // stacked: true,
                        display: true,
                        ticks: {
                            suggestedMin: 0
                        },
                        gridLines: {
                            color: "rgba(0, 0, 0, 0)"
                        }
                    }]
                },
                legend: {
                    display: false
                },
                tooltips: false,
                hover: {
                    animationDuration: 0
                },
                animation: {
                    duration: 1,
                    onComplete: function() {
                        let chartInstance = this.chart,
                            ctx = chartInstance.ctx;

                        ctx.textAlign = 'center';
                        ctx.textBaseline = 'bottom';
                        ctx.fillStyle = '#000000';
                        ctx.font = ctx.font.replace(/\d+px/, "10px");

                        this.data.datasets.forEach(function(dataset, i) {
                            let meta = chartInstance.controller.getDatasetMeta(i);
                            meta.data.forEach(function(bar, index) {
                                let data = dataset.data[index];
                                data = parseInt(data).toLocaleString();
                                ctx.fillText(data, bar._model.x + 18.5, bar._model.y + 7);
                            });
                        });
                    }
                }
            }
        });

        // CHART 3

        var topReg2 = document.getElementById('ctxTopRegions2').getContext('2d');
        var topRegChart2 = new Chart(topReg2, {
            // The type of chart we want to create
            type: 'horizontalBar',

            data: {
                labels: tempRgLabels,
                datasets: [{
                    label: 'Total Costs',
                    backgroundColor: '#A6CEE3', // COLOR 4
                    borderColor: '#A6CEE3', // COLOR 4
                    fill: false,
                    data: topCostsData
                }]
            },
            options: {
                devicePixelRatio: 3,
                aspectRatio: .2835,
                scales: {
                    xAxes: [{
                        display: false,
                        ticks: {
                            suggestedMin: 0,
                            suggestedMax: 90000,
                            beginAtZero: true,
                            userCallback: function(value, index, values) {
                                value = value.toString();
                                value = value.split(/(?=(?:...)*$)/);
                                value = value.join(',');
                                return value;
                            }
                        }
                    }],
                    yAxes: [{
                        display: false,
                        gridLines: {
                            color: "rgba(0, 0, 0, 0)"
                        }
                    }]
                },
                legend: {
                    position: 'top',
                    onClick: (e) => e.stopPropagation(),
                    labels: {
                        fontSize: 12,
                    }
                },
                tooltips: false,
                hover: {
                    animationDuration: 0
                },
                animation: {
                    duration: 1,
                    onComplete: function() {
                        let chartInstance = this.chart,
                            ctx = chartInstance.ctx;

                        ctx.textAlign = 'center';
                        ctx.textBaseline = 'bottom';
                        ctx.fillStyle = '#000000';
                        ctx.font = ctx.font.replace(/\d+px/, "10px");

                        this.data.datasets.forEach(function(dataset, i) {
                            let meta = chartInstance.controller.getDatasetMeta(i);
                            meta.data.forEach(function(bar, index) {
                                let data = dataset.data[index];
                                data = parseInt(data).toLocaleString();
                                ctx.fillText(data, bar._model.x + 18.5, bar._model.y + 7);
                            });
                        });
                    }
                }
            }
        });
        
        var topRegWide2 = document.getElementById('ctxWideRegions2').getContext('2d');
        var topRegChartWide2 = new Chart(topRegWide2, {
            // The type of chart we want to create
            type: 'horizontalBar',

            data: {
                labels: tempRgLabels,
                datasets: [{
                    label: 'Total Costs',
                    backgroundColor: '#A6CEE3', // COLOR 4
                    borderColor: '#A6CEE3', // COLOR 4
                    fill: false,
                    data: topCostsData
                }]
            },
            options: {
                devicePixelRatio: 3,
                aspectRatio: 1.5,
                scales: {
                    xAxes: [{
                        display: true,
                        ticks: {
                            suggestedMin: 0,
                            suggestedMax: 90000,
                            beginAtZero: true,
                            userCallback: function(value, index, values) {
                                value = value.toString();
                                value = value.split(/(?=(?:...)*$)/);
                                value = value.join(',');
                                return value;
                            }
                        }
                    }],
                    yAxes: [{
                        // stacked: true,
                        display: true,
                        ticks: {
                            suggestedMin: 0
                        },
                        gridLines: {
                            color: "rgba(0, 0, 0, 0)"
                        }
                    }]
                },
                legend: {
                    display: false
                },
                tooltips: false,
                hover: {
                    animationDuration: 0
                },
                animation: {
                    duration: 1,
                    onComplete: function() {
                        let chartInstance = this.chart,
                            ctx = chartInstance.ctx;

                        ctx.textAlign = 'center';
                        ctx.textBaseline = 'bottom';
                        ctx.fillStyle = '#000000';
                        ctx.font = ctx.font.replace(/\d+px/, "10px");

                        this.data.datasets.forEach(function(dataset, i) {
                            let meta = chartInstance.controller.getDatasetMeta(i);
                            meta.data.forEach(function(bar, index) {
                                let data = dataset.data[index];
                                data = parseInt(data).toLocaleString();
                                ctx.fillText(data, bar._model.x + 18.5, bar._model.y + 7);
                            });
                        });
                    }
                }
            }
        });

        // CHART 4

        var topReg3 = document.getElementById('ctxTopRegions3').getContext('2d');
        var topRegChart = new Chart(topReg3, {
            // The type of chart we want to create
            type: 'horizontalBar',

            data: {
                labels: tempRgLabels,
                datasets: [{
                    label: 'Net Returns',
                    backgroundColor: '#2138B7', // COLOR 2
                    borderColor: '#2138B7', // COLOR 2
                    data: topNetData
                }]
            },

            options: {
                devicePixelRatio: 3,
                aspectRatio: .2835,
                scales: {
                    xAxes: [{
                        // stacked: true,
                        display: false,
                        ticks: {
                            suggestedMin: 0,
                            suggestedMax: 90000,
                            beginAtZero: true,
                            userCallback: function(value, index, values) {
                                value = value.toString();
                                value = value.split(/(?=(?:...)*$)/);
                                value = value.join(',');
                                return value;
                            }
                        }
                    }],
                    yAxes: [{
                        // stacked: true,
                        display: false,
                        ticks: {
                            suggestedMin: 0
                        },
                        gridLines: {
                            color: "rgba(0, 0, 0, 0)"
                        }
                    }]
                },
                legend: {
                    position: 'top',
                    onClick: (e) => e.stopPropagation(),
                    labels: {
                        fontSize: 12,
                    }
                },
                tooltips: false,
                hover: {
                    animationDuration: 0
                },
                animation: {
                    duration: 1,
                    onComplete: function() {
                        let chartInstance = this.chart,
                            ctx = chartInstance.ctx;

                        ctx.textAlign = 'center';
                        ctx.textBaseline = 'bottom';
                        ctx.fillStyle = '#000000';
                        ctx.font = ctx.font.replace(/\d+px/, "10px");

                        this.data.datasets.forEach(function(dataset, i) {
                            let meta = chartInstance.controller.getDatasetMeta(i);
                            meta.data.forEach(function(bar, index) {
                                let data = dataset.data[index];
                                data = parseInt(data).toLocaleString();
                                ctx.fillText(data, bar._model.x + 18.5, bar._model.y + 7);
                            });
                        });
                    }
                }
            }
        });
        
        // CHART 4

        var topWideReg3 = document.getElementById('ctxWideRegions3').getContext('2d');
        var topWideRegChart = new Chart(topWideReg3, {
            // The type of chart we want to create
            type: 'horizontalBar',

            data: {
                labels: tempRgLabels,
                datasets: [{
                    label: 'Net Returns',
                    backgroundColor: '#2138B7', // COLOR 2
                    borderColor: '#2138B7', // COLOR 2
                    data: topNetData
                }]
            },

            options: {
                devicePixelRatio: 3,
                aspectRatio: 1.5,
                scales: {
                    xAxes: [{
                        // stacked: true,
                        display: true,
                        ticks: {
                            suggestedMin: 0,
                            suggestedMax: 90000,
                            beginAtZero: true,
                            userCallback: function(value, index, values) {
                                value = value.toString();
                                value = value.split(/(?=(?:...)*$)/);
                                value = value.join(',');
                                return value;
                            }
                        }
                    }],
                    yAxes: [{
                        // stacked: true,
                        display: true,
                        ticks: {
                            suggestedMin: 0
                        },
                        gridLines: {
                            color: "rgba(0, 0, 0, 0)"
                        }
                    }]
                },
                legend: {
                    display: false
                },
                tooltips: false,
                hover: {
                    animationDuration: 0
                },
                animation: {
                    duration: 1,
                    onComplete: function() {
                        let chartInstance = this.chart,
                            ctx = chartInstance.ctx;

                        ctx.textAlign = 'center';
                        ctx.textBaseline = 'bottom';
                        ctx.fillStyle = '#000000';
                        ctx.font = ctx.font.replace(/\d+px/, "10px");

                        this.data.datasets.forEach(function(dataset, i) {
                            let meta = chartInstance.controller.getDatasetMeta(i);
                            meta.data.forEach(function(bar, index) {
                                let data = dataset.data[index];
                                data = parseInt(data).toLocaleString();
                                ctx.fillText(data, bar._model.x + 18.5, bar._model.y + 7);
                            });
                        });
                    }
                }
            }
        });
    </script>

    <!-- IMPEXPORT CHARTS -->

    <script>
        // var sidebarjs = new SidebarJS.SidebarElement();
        Chart.defaults.global.responsive = true;
        Chart.defaults.global.tooltips.mode = 'index';
        Chart.defaults.global.tooltips.intersect = false;
        Chart.defaults.global.defaultFontFamily = 'Poppins';
        Chart.defaults.global.defaultFontSize = 13;
        Chart.defaults.global.animation.duration = 3000;
        Chart.defaults.global.defaultFontColor = "#000000";
                
        var dbSupplySources = JSON.parse('<?php echo $supply_sources_yearly; ?>');
        var dbUseAccounts = JSON.parse('<?php echo $util_accounts_yearly; ?>');
        
        var curProduce = '<?php echo $supply_sources_values['SUProduction']; ?>';
        var curImports = '<?php echo $supply_sources_values['SUImports']; ?>';
        var curExports = '<?php echo $util_accounts_values['UTExports']; ?>';

        let impexport_years = [];
        let impexport_locals = [];
        let impexport_imports = [];
        let impexport_exports = [];
        let localsp = [];
        let importsp = [];

        try {
            dbSupplySources.map((item) => {
            impexport_years.push(item.year);
            impexport_locals.push(item.SUProduction);
            impexport_imports.push(item.SUImports);
            total = parseInt(item.SUProduction) + parseInt(item.SUImports);
            localpc = ((item.SUProduction / total) * 100);
            importspc = ((item.SUImports / total) * 100);
            localsp.push(localpc.toFixed(0));
            importsp.push(importspc.toFixed(0));
            });
            dbUseAccounts.map((item) => {
            exports.push(item.UTExports);
            });
        } catch (error) {
            console.log(error);
        }
        
        var yearsLab = [...impexport_years];
        var totalProduce = [...impexport_locals];
        var totalImports = [...impexport_imports];
        var totalExports = [...impexport_exports];
        var totalProduceP = [...localsp];
        var totalImportsP = [...importsp];
        
        var importsC = document.getElementById('ctxImports').getContext('2d');
        
        var importsChart = new Chart(importsC, {
        // The type of chart we want to create
        type: 'line',

        // The data for our dataset
        data: {
            labels: yearsLab,
            datasets: [{
                    label: 'Rice Imports',
                    backgroundColor: '#007FFE',    // COLOR 1
                    borderColor: '#007FFE',        // COLOR 1
                    lineTension: 0,
                    fill: false,
                    data: totalImports
                },{
                    label: 'Rice Exports',
                    backgroundColor: '#A6CEE3',    // COLOR 2
                    borderColor: '#A6CEE3',        // COLOR 2
                    lineTension: 0,
                    fill: false,
                    data: totalExports
                }
            ]
        },

        // Configuration options go here
        options: {
                devicePixelRatio: 3,
                aspectRatio: 2.02,
                elements: {
                    point:{
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
        
        // CHART 2

        var tsVietnam = 85;
        var tsMyanmar = 7;
        var tsThailand = 4;
        var tsChina = 2;
        var tsIndia = 1;
        var tsOthers = 1;

        var ctx = document.getElementById("ctxImportSources");
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['Vietnam', 'Myanmar', 'Thailand', 'China', 'India', 'Other Countries'],
                datasets: [{
                    data: [tsVietnam, tsMyanmar, tsThailand, tsChina, tsIndia, tsOthers],
                    backgroundColor: [
                        '#d3241c', // COLOR 1
                        '#34b233', // COLOR 2
                        '#2d2a4a', // COLOR 3
                        '#f7f700', // COLOR 4
                        '#ff9933', // COLOR 4
                        '#007ffe' // COLOR 4
                    ],
                    borderColor: [
                        '#d3241c', // COLOR 1
                        '#34b233', // COLOR 2
                        '#2d2a4a', // COLOR 3
                        '#f7f700', // COLOR 4
                        '#ff9933', // COLOR 4
                        '#007ffe' // COLOR 4
                    ]
                }]
            },
            options: {
                devicePixelRatio: 3,
                aspectRatio: 1.7,
                legend: {
                    position: 'right',
                        onClick: (e) => e.stopPropagation(),
                },
                layout: {
                    padding: 10
                },
                tooltips: {
                    callbacks: {
                    label: function(tooltipItem, data) {
                        return data['labels'][tooltipItem['index']] + ': ' + data['datasets'][0]['data'][tooltipItem['index']] + '%';
                    }
                    }
                }
            }
        })
        
        var ImportLocal = document.getElementById('ctxImportLocal').getContext('2d');
        
        var ImportLocalChart = new Chart(ImportLocal, {
        // The type of chart we want to create
        type: 'bar',

        // The data for our dataset
        data: {
            labels: yearsLab,
            datasets: [{
                label: 'Locally Produced Rice',
                backgroundColor: '#007FFE',   // COLOR 1
                borderColor: '#007FFE',       // COLOR 1
                lineTension: 0,
                fill: true,
                data: totalProduceP
            },{
                label: 'Imported Rice',
                backgroundColor: '#A6CEE3',    // COLOR 2
                borderColor: '#A6CEE3',        // COLOR 2
                lineTension: 0,
                fill: true,
                data: totalImportsP
            }]
        },

        // Configuration options go here
        options: {
                devicePixelRatio: 3,
                aspectRatio: 2.5,
                elements: {
                    point:{
                        radius: 2
                    }
                },
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
                        display: false,
                        ticks: {
                            suggestedMin: 0,
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
                        if(dataset.label == 'Imported Rice' ){
                            let meta = chartInstance.controller.getDatasetMeta(i);
                            meta.data.forEach(function(bar, index) {
                            let data = dataset.data[index];
                            ctx.fillStyle = '#000000';
                            data = parseInt(data).toLocaleString() + "%";
                            ctx.fillText(data, bar._model.x + 0 , bar._model.y + 16);
                            });
                        }
                        else {
                            let meta = chartInstance.controller.getDatasetMeta(i);
                            meta.data.forEach(function(bar, index) {
                            let data = dataset.data[index];
                            ctx.fillStyle = '#ffffff';
                            data = parseInt(data).toLocaleString() + "%";
                            ctx.fillText(data, bar._model.x + 0 , bar._model.y + 16);
                            });
                        }
                        
                    });
                    }
                }   
            }
        });

    </script>

    <!-- STOCK CHARTS -->

    <script>
        // var sidebarjs = new SidebarJS.SidebarElement();

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
                devicePixelRatio: 3,
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
                devicePixelRatio: 3,
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
        var farmPriceReal = [...values_r_prices];
        var farmPricesChart = new Chart(farmPrices, {
        // The type of chart we want to create
        type: 'line',

        // The data for our dataset
        data: {
            labels: tempFarmLabels,
            datasets: [{
                label: 'Nominal Price',
                backgroundColor: '#A6CEE3',   // COLOR 1
                borderColor: '#A6CEE3',       // COLOR 1
                lineTension: 0,
                fill: false,
                data: farmPriceData
            },{
                label: 'Real Price (2012=100)',
                backgroundColor: '#68b3fe',   // COLOR 2
                borderColor: '#68b3fe',       // COLOR 2
                lineTension: 0,
                fill: false,
                data: farmPriceReal
            }]
        },

        // Configuration options go here
        options: {
                devicePixelRatio: 3,
                aspectRatio: 2.2,
                elements: {
                    point:{
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
                    this.data.datasets.forEach(function(dataset, i){
                        let meta = chartInstance.controller.getDatasetMeta(i);
                        meta.data.forEach(function(bar, index) {
                        let data = dataset.data[index];
                        ctx.fillStyle = '#000000';
                        data = parseInt(data).toLocaleString();
                        ctx.fillText(data, bar._model.x + 0 , bar._model.y + 1);
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
                backgroundColor: '#007FFE',   // COLOR 1
                borderColor: '#007FFE',       // COLOR 1
                lineTension: 0,
                fill: false,
                data: wPriceData
            },{
                label: 'Well-milled',
                backgroundColor: '#A6CEE3',    // COLOR 2
                borderColor: '#A6CEE3',        // COLOR 2
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
                    point:{
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
                    this.data.datasets.forEach(function(dataset, i){
                        let meta = chartInstance.controller.getDatasetMeta(i);
                        meta.data.forEach(function(bar, index) {
                        let data = dataset.data[index];
                        ctx.fillStyle = '#000000';
                        data = parseInt(data).toLocaleString();
                        ctx.fillText(data, bar._model.x + 0 , bar._model.y + 1);
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
                backgroundColor: '#007FFE',   // COLOR 1
                borderColor: '#007FFE',       // COLOR 1
                lineTension: 0,
                fill: false,
                data: rPriceData
            },{
                label: 'Well-milled',
                backgroundColor: '#A6CEE3',    // COLOR 2
                borderColor: '#A6CEE3',        // COLOR 2
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
                    point:{
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
                    this.data.datasets.forEach(function(dataset, i){
                        let meta = chartInstance.controller.getDatasetMeta(i);
                        meta.data.forEach(function(bar, index) {
                        let data = dataset.data[index];
                        ctx.fillStyle = '#000000';
                        data = parseInt(data).toLocaleString();
                        ctx.fillText(data, bar._model.x + 0 , bar._model.y + 1);
                        });
                    });
                    }
                }    
            }
        });
    </script>
    
    <!-- YIELDCOST CHARTS -->

    <script>
        // var sidebarjs = new SidebarJS.SidebarElement();
        Chart.defaults.global.responsive = true;
        Chart.defaults.global.tooltips.mode = 'index';
        Chart.defaults.global.tooltips.intersect = false;
        Chart.defaults.global.defaultFontFamily = 'Poppins';
        Chart.defaults.global.defaultFontSize = 13;
        Chart.defaults.global.animation.duration = 3000;

        // CHART 1

        var dbTotal = JSON.parse('<?php echo $ph_yield_all; ?>');
        var dbProdCost = JSON.parse('<?php echo $yearly_total_costs_int; ?>');

        let yieldcost_years = [];
        let yieldcost_values_total = [];
        let values_pcost = [];

        try {
            dbTotal.map((item) => {
                yieldcost_years.push(item.year);
                yieldcost_values_total.push(item.value);
            });
            dbProdCost.map((item) => {
                values_pcost.push(item.value);
            });
        } catch (error) {
            console.log(error);
        }

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
                devicePixelRatio: 3,
                aspectRatio: 2,
                tooltips: {
                    callbacks: {
                        label: function(tooltipItem, data) {
                            var label = data.labels[tooltipItem.index];
                            return label + ': (Yield: ' + tooltipItem.xLabel + ' mt/ha, Cost/kg: P ' + tooltipItem.yLabel + ')';
                        }
                    }
                },
                legend: {
                    display: false
                },
                scales: {
                    yAxes: [{
                        ticks: {
                            min: 0
                        }
                    }],
                    xAxes: [{
                        ticks: {
                            min: 0,
                            max: 8
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
                            content: 'P 13.04/kg',
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

        // Chart 3

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

            type: 'horizontalBar',

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
                devicePixelRatio: 3,
                aspectRatio: 0.4,
                scales: {
                    xAxes: [{
                        stacked: true,
                        display: true,
                        barPercentage: 0.7,
                        gridLines: {
                            color: "rgba(0, 0, 0, 0)"
                        },
                    }],
                    yAxes: [{
                        stacked: true,
                        display: true
                    }]
                },
                legend: {
                    display: true,
                    position: 'top'
                },
                hover: {
                    animationDuration: 0
                }
            }
        });

        // Chart 2

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
                devicePixelRatio: 3,
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
    </script>

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
        
        var dbIncome = JSON.parse('<?php echo $monthly_income_yearly; ?>');
        var dbPoverty = JSON.parse('<?php echo $poverty_yearly; ?>');
        var dbPovertyTh = JSON.parse('<?php echo $poverty_threshold_yearly; ?>');
                    
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
                    var color = centerConfig.color || '#ffffff';
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
        
        var dbAgeOne = JSON.parse('<?php echo $aon_yearly; ?>');
        var dbAgeTwo = JSON.parse('<?php echo $atw_yearly; ?>');
        var dbAgeThree = JSON.parse('<?php echo $ath_yearly; ?>');
        var dbAgeFour = JSON.parse('<?php echo $afo_yearly; ?>');
                    
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
                                stepSize: 20,
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
        
        // CHART 5
        
        var dbMale = JSON.parse('<?php echo $male_yearly; ?>');
        var dbFemale = JSON.parse('<?php echo $female_yearly; ?>');
                    
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
                                stepSize: 20,
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
        
        // CHART 6
        
        var dbSingle = JSON.parse('<?php echo $s_yearly; ?>');
        var dbMarried = JSON.parse('<?php echo $m_yearly; ?>');
        var dbWidow = JSON.parse('<?php echo $w_yearly; ?>');
        var dbSeparated = JSON.parse('<?php echo $se_yearly; ?>');
                    
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
                                stepSize: 20,
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
        
        var dbFarmOne = JSON.parse('<?php echo $one_all_yearly; ?>');
        var dbFarmTwo = JSON.parse('<?php echo $two_all_yearly; ?>');
        var dbFarmThree = JSON.parse('<?php echo $three_all_yearly; ?>');
        var dbFarmFour = JSON.parse('<?php echo $four_all_yearly; ?>');
                    
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
        
        var dbOwner = JSON.parse('<?php echo $owner_yearly; ?>');
        var dbAmort = JSON.parse('<?php echo $amort_yearly; ?>');
        var dbLessee = JSON.parse('<?php echo $lessee_yearly; ?>');
        var dbTenant = JSON.parse('<?php echo $tenant_yearly; ?>');
        var dbOthers = JSON.parse('<?php echo $others_yearly; ?>');
                    
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

    <!-- HOUSEHOLD SIZE INCOME CHARTS -->

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
        
        var dbHhsize = JSON.parse('<?php echo $hhsize_yearly; ?>');
                    
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
        
        var dbRice = JSON.parse('<?php echo $rice_yearly; ?>');
        var dbNonRice = JSON.parse('<?php echo $non_yearly; ?>');
                    
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
        var tempPcLabels = [...householdsizeincome_years];
        var prodRice = [...householdsizeincome_values_rice];
        var prodNonRice = [...householdsizeincome_values_nonrice];
        var sourcesChart = new Chart(sources, {

                type: 'bar',

                data: {
                    labels: tempPcLabels,
                    datasets: [{
                        label: 'Rice',
                        backgroundColor: '#2138B7',    // COLOR 1
                        borderColor: '#2138B7',        // COLOR 1
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

    <!-- EDUC FARM EXP CHARTS -->

    <script>
        // var sidebarjs = new SidebarJS.SidebarElement();
        Chart.defaults.global.responsive = true;
        Chart.defaults.global.tooltips.mode = 'index';
        Chart.defaults.global.tooltips.intersect = false;
        Chart.defaults.global.defaultFontFamily = 'Poppins';
        Chart.defaults.global.defaultFontSize = 13;
        Chart.defaults.global.animation.duration = 3000;
        
        // CHART 1
        
        var dbOne = JSON.parse('<?php echo $educ_noed; ?>');
        var dbTwo = JSON.parse('<?php echo $educ_elem; ?>');
        var dbThree = JSON.parse('<?php echo $educ_hs; ?>');
        var dbFour = JSON.parse('<?php echo $educ_col; ?>');
                    
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

            var dbFarmExp = JSON.parse('<?php echo $fexp_yearly; ?>');

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
        
        var dbOrg = JSON.parse('<?php echo $org_yearly; ?>');
        var dbTrain = JSON.parse('<?php echo $tra_yearly; ?>');
                    
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
        
        var dbpestAll2 = JSON.parse('<?php echo $fert_all_m; ?>');

        let fert_all = [];
        let fert_all_labels = [];

        try {
            dbpestAll2.map((item) => {
                fert_all_labels.push(item.label);
                fert_all.push(item.value);
            });
        } catch (error) {
            console.log(error);
        }

        var laborChart2 = document.getElementById('ctxChart1').getContext('2d');
        var tempPLabels = [...farmpractices_years];
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
        var tempMLabels = [...farmpractices_years];
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
        
        var dbTrans = JSON.parse('<?php echo $trans_yearly_sr; ?>');
        var dbDirect = JSON.parse('<?php echo $direct_yearly_sr; ?>');
                    
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
            dbBoth.map((item) => {
            seedingrate_values_both.push(item.value);
            });
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
            
            // CHART 1
            
            var dbTrans = JSON.parse('<?php echo $trans_yearly_cp; ?>');
            var dbDirect = JSON.parse('<?php echo $direct_yearly_cp; ?>');
                        
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
        
        var directWS = JSON.parse('<?php echo $direct_all_cp['value']; ?>');
        var transWS = JSON.parse('<?php echo $trans_all_cp['value']; ?>');
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
        var tempPLabels = [...labor_years];
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

    <!-- FETILIZER APP CHARTS -->

    <script>
        // var sidebarjs = new SidebarJS.SidebarElement();
        Chart.defaults.global.responsive = true;
        Chart.defaults.global.tooltips.mode = 'index';
        Chart.defaults.global.tooltips.intersect = false;
        Chart.defaults.global.defaultFontFamily = 'Poppins';
        Chart.defaults.global.defaultFontSize = 13;
        Chart.defaults.global.animation.duration = 3000;
        Chart.defaults.global.defaultFontColor = "#000000";
                
        var dbpestAll = JSON.parse('<?php echo $fert_all_fa; ?>');
        
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

        var dbPest = JSON.parse('<?php echo $pest_all_mp; ?>');
        
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
                
        var dbpestAll = JSON.parse('<?php echo $fert_all_ms; ?>');
        
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