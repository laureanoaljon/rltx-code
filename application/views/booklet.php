<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Booklet</title>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
	<script type="text/javascript" src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>
	<script type="text/javascript" src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.8.1/html2pdf.bundle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.8.1/html2pdf.bundle.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.8.1/html2pdf.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.8.1/html2pdf.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

	<script type="text/javascript">
		window.html2canvas = html2canvas;
		window.jsPDF = window.jspdf.jsPDF;
		
		function makePdf(){
			html2canvas(document.querySelector("#capture"),{
				allowtaint: true,
				useCORS: true,
				scale: 3,
			}).then(canvas => {
				var img = canvas.toDataURL("image/png")
				var doc = new jsPDF('landscape', 'pt', 'a4', 'mm');
				
				// left, top, width, height
				doc.addImage(img, 'PNG', 5,5,1000,200);
				doc.save('booklet');
			});
		};


		function htmlToPdf(){
			var element = document.getElementById('capture');
			html2pdf(element, {
				margin:       0,
				filename:     'test.pdf',
				image:        { type: 'jpeg', quality: .98 },
				html2canvas:  { scale: 5, logging: true, dpi: 192, letterRendering: true},
				jsPDF:        { unit: 'mm', format: 'a4', orientation: 'landscape' },
			});
		};

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

            @page {
                margin: 0;
                background-color: white !important;
            }

            #sidebarView, #sidebarMenu, #feedbackModal, .footer{
                display: none !important;
            }

            main.col {
                padding: 0;
                margin-left: 0;
            }

            div#rice-sector{    
                height: auto;
                width: auto;
            }

            #production{    
                height: auto;
                width: auto;
            }

            #production2{    
                height: auto;
                width: auto;
            }

            #area-harvested{    
                height: auto;
                width: auto;
            }

            #area-harvested2{    
                height: auto;
                width: auto;
            }

            
            #est-yield{    
                height: auto;
                width: auto;
            }

            #est-yield2{    
                height: auto;
                width: auto;
            }

            #supplies{    
                height: auto;
                width: auto;
            }

            #supplies2{    
                height: auto;
                width: auto;
            }

            #consumptions{    
                height: auto;
                width: auto;
            }

            #consumptions2{    
                height: auto;
                width: auto;
            }

            #valuations{    
                height: auto;
                width: auto;
            }

            #valuations2{    
                height: auto;
                width: auto;
            }

            #incomes1{    
                height: auto;
                width: auto;
            }

            #incomes2{    
                height: auto;
                width: auto;
            }

            #incomes3{    
                height: auto;
                width: auto;
            }

            #stocks1{    
                height: auto;
                width: auto;
            }

            #stocks2{    
                height: auto;
                width: auto;
            }

            #yieldcosts1{    
                height: auto;
                width: auto;
            }

            #yieldcosts2{    
                height: auto;
                width: auto;
            }

            #yieldcosts3{    
                height: auto;
                width: auto;
            }

            /* /// FOR CARET /// */

            .dashboard .primary div.caret-select,
            .dashboard .secondary div.caret-select {
                height: 100%;
                width: 25px;
                z-index: 1;
                position: absolute;
                left: calc(100% - 25px);
                margin: 0;
                padding: 0;
                opacity: 1;
                transition: 0.3s;
            }


            .dashboard .primary div.caret-select {
                background: #fe7f00;
            }

            /* /// Rice Sector CSS /// */
            
            /* Pagresize ng page for printing */
            div.dashboard{
                height: 700px;
                width: 1150px;
            }

            /* Pangresize ng banner na na may picture sa ricesector */
            div#main {
                height: 145px;
            }

            div#main h2{
                font-size: 18px;
                margin-top: 0px;
            }

            div#main h1{
                font-size: 45px;
            }

            div#main p{
                font-size: 10px;
            }

            .jumbotron div.card-note h6 {
                font-size: 9px;
            }

            .jumbotron div.card-note {
                width: fit-content;
                padding: 0 11px;
                margin-top: 6px;
            }

            /* Pang card primary sa baba ng header */
            .card.primary {
                height: 100px;
            }

            .card.primary p {
                font-family: 'Poppins' !important;
                font-weight: 300;
                text-transform: uppercase;
                font-size: 11px;
                margin-bottom: 2px;
            }

            .card.primary h2 i.bi {
                line-height: 50px;
            }

            .card.primary i {
                font-size: 30px;
            }

            .card.primary h5 {
                font-family: 'Poppins' !important;
                font-weight: normal;
                font-size: 14px;
                text-align: left;
            }

            .card h5 {
                font-family: 'Poppins' !important;
                font-weight: bold;
                font-size: 14px;
            }

            .card.primary .card-note {
                background-color: #A6CEE3;
            }

            .dashboard .card.primary i.bi {
                float: right;
                display: inline;
                vertical-align: middle;
                line-height: 60px;
                position: absolute;
                margin-left: 5px;
                color: #FE7F00;
            }

            .card.primary h1 {
                font-family: 'Poppins' !important;
                font-weight: 600;
                font-size: 30px;
            }

            .card.primary h1.smaller {
                font-size: 30px !important;
            }

            .card.primary h1.smaller i.bi {
                font-size: 12px !important;
                line-height: 50px !important;
            }

            .card.primary h2 {
                margin-left: -15px;
                font-size: 45px;
            }

            /* re size ng secondary card sa main page */
            .card.secondary {
                height: 108px;
            }

            /* Resize ng h1 sa main page */
            .secondary h1.card-text {
                font-size: 23px !important;
                padding: 3px;
            }

            .card.secondary p {
                margin-bottom: 3px;
            }

            .card h6 {
                font-family: 'Poppins' !important;
                font-weight: normal;
                font-size: 11px;
            }

            .dashboard .card.secondary i.bi {
                font-size: 9px;
                float: right;
                display: inline;
                vertical-align: middle;
                line-height: 30px;
                position: absolute;
                margin-left: 5px;
                color: #2138b7
            }

            .card.secondary h1 {
                font-family: 'Poppins' !important;
                font-weight: 500;
                font-size: 32px;
                line-height: 25px;
            }

            .card.secondary h1 i.bi {
                line-height: 30px;
            }

            .card.secondary p {
                margin-bottom: 4px;
            }

            .card.secondary h2 {
                font-family: 'Poppins' !important;
                font-weight: 500;
                font-size: 25px;
            }

            .dashboard .card.secondary .card-note {
                background-color: #2138b7;
            }

            /* ani kita image */
            img.d-block.img-fluid.mx-auto{
                width: 125px;
                height: 60px !important;
            }

            /* Rice sector prism card */
            div.card.primary#card-map{
                height: 45px;
            }

            /* rice sector prism image size */
            div.card.mb-0 img {
                width: 340px;
                height: 300px;
            }

            canvas#ctxAgriShare.chartjs-render-monitor{
                margin-top: -10px;
            }

            /* PRODUCTIONS */

            /* Pagresize lahat ng sublevel class page */
            div.sublevel{
                height: 700px;
                width: 1150px;
            }

            div#production-chart-1.card.mb-4{
                height: 550px;
            }

            div#production {
                height: 130px;
            }

            .sublevel h1.card-text {
                font-size: 33px !important;
                margin-top: -10px;
            }

            /* For production 2 */
            div#prod2.sublevel{
                height: 830px;
                width: 1150px;
            }

            div#production-chart-2.card.mb-4{
                height: 810px;
            }

            /* prod 2 bar chart*/
            div#ctxTopProvTopContainer canvas#ctxTopProvTop{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 680px !important;
                width: auto!important;
            }

            div#ctxTopProvContainer canvas#ctxTopProv{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 680px !important;
                width: auto!important;
            }

            div#ctxRegionalContainer canvas#ctxRegional{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 680px !important;
                width: auto!important;
            }

            /* Prod map chart */
            svg.datamap{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: auto !important;
                width: 100% !important;
                /* margin-top: -10px; */
                transform: scale(.85, .69);
                margin-bottom: 120px;
            }

            div#phl-reg{
                height: auto !important;
                width: 100% !important; 
                margin-top: -145px;
            }

            /* AREA HARVESTED */
            div#area {
                height: 130px;
            }

            div#area-chart-1.card.mb-4{
                height: 550px;
            }

            div#area-chart-2.card.mb-4{
                height: 810px;
            }

            div#area2.sublevel{
                height: 830px;
                width: 1150px;
            }

            /* AREA 2 */
            div#ctxRegionalContainer canvas#area_ctxRegional{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 680px !important;
                width: auto!important;
            }

            /* AREA MAP CHART */
            div#area-phl-reg{
                height: auto !important;
                width: auto !important; 
                margin-top: -145px;
            }


            /* EST YIELD */

            div#yield {
                height: 130px;
            }

            div#yield-chart-1.card.mb-4{
                height: 550px;
            }

            /* ///// EST YIELD 2 ///// */
            div#ctxRegionalContainer canvas#yield_ctxRegional{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 680px !important;
                width: auto!important;
            }

            /* Yield Map Chart */
            div#yield-phl-reg{
                height: auto !important;
                width: auto !important; 
                margin-top: -135px;
            }


            div#yield2.sublevel{
                height: 830px;
                width: 1150px;
            }

            div#yield-chart-2.card.mb-4{
                height: 810px;
            }

            /* ///// SUPPLY ///// */

            div#supply {
                height: 130px;
            }

            div#supply-chart-1.card.mb-4{
                height: 550px;
            }

            /* ///// Supply 2 ///// */

            /* Size of page */
            div#supply2.sublevel{
                height: 830px;
                width: 1150px;
            }

            /* div size supply chart 2 */
            div#supply-chart-2.card.mb-4{
                height: 385px;
            }

            /* resize of supply chart 2 */
            canvas#ctxSupplyStack{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 255px !important;
                width: 100% !important;
            }

            /* div size supply chart 2 */
            div#supply-chart-3.card.mb-4{
                height: 395px;
            }

             /* resize of supply chart 2 */
            canvas#ctxUtilStack{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 245px !important;
                width: 100% !important;
            }

            /* ////// CONSUMPTION 1 /////// */
            /* Banner size */
            div#consumption {
                height: 130px;
            }

            /* div page size */
            div#consumption1.sublevel{
                height: 700px;
                width: 1150px;
            }

            /* div size consumption chart 1 */
            div#consumption-chart-1.card.mb-4{
                height: 550px;
            }

            /* div size consumption chart 2 */
            div#consumption-chart-2.card.mb-4{
                height: 550px;
            }

            /* resize of consumption chart 1 */
            canvas#ctxKgCapita{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 350px !important;
                width: 100% !important;
            }

            /* resize of consumption chart 2 */
            canvas#ctxGramCapita{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 350px !important;
                width: 100% !important;
            }

            /* // Consumption page 2 // */
            div#consumption2.sublevel{
                height: 830px;
                width: 1150px;
            }

             /* div size consumption chart 3 */
             div#consumption-chart-3.card.mb-4{
                height: 790px;
            }

            /* resize of consumption chart 3 */
            canvas#ctxProdFood{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 550px !important;
                width: 100% !important;
            }

            /* ////// VALUATION 1 /////// */
            /* Banner size */
            div#valuation {
                height: 135px;
            }

            /* div page size */
            div#valuation1.sublevel{
                height: 690px;
                width: 1150px;
            }

            div#valuation-card-1.card.primary.mb-4{
                height: 150px;
            }

            /* div size valuation chart 2 */
            div#valuation-chart-2.card.mb-4{
                height: 500px;
            }

            div#valuation-card-2.card.primary.mb-4{
                height: 150px;
            }

            /* canvas#ctxPercentShare{
                height: 130px !important;
                width: 130px !important;
            } */

            /* div.row.d-flex.align-items-center.h-100{
                height: 300px !important;
                width: 290px !important;
            } */

            /* resize of valuation chart 2 */
            canvas#ctxAgriSector{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 350px !important;
                width: 100% !important;
                margin-top: -25px;
            }

            /* ///// VALUATION 2 ///// */
            div#valuation2.sublevel{
                height: 830px;
                width: 1150px;
            }

            div#valuation-chart-3.card.mb-4{
                height: 700px;
            }

            /* resize of valuation chart 3 */
            canvas#valuation_ctxAgriShare{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 500px !important;
                width: 100% !important;
                margin-top: 50px;
            }

            /* ////// INCOME 1  ////// */

            /* Banner size */
            div#incomes {
                height: 135px;
            }

            /* Resize card */
            div.income-card.card.primary.mb-4{
                height: 100px;
            }

            /* div page size */
            div#income1.sublevel{
                height: 690px;
                width: 1150px;
            }

            /* div size income chart 1 */
            div#income-chart-1.card.mb-4{
                height: 530px;
            }

            div.income-card.card.primary.mb-4 h2{
                font-size: 30px;
                margin-top: -10px;
            }

            /* resize of income chart 1 */
            canvas#ctxGrossReturns{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 420px !important;
                width: 100% !important;
                margin-top: 0px;
            }

            /* ////// INCOME 2 ////// */

             /* div page size */
             div#income2.sublevel{
                height: 830px;
                width: 1150px;
            }

            /* div size income chart 2 */
            div#income-chart-2.card.mb-4{
                height: 800px;
            }

            div.col-6 canvas#ctxTopRegions{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 700px !important;
                width: 100% !important;
            }

            div.col-3 canvas#ctxTopRegions2{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 700px !important;
                width: 100% !important;
            }

            div.col-3 canvas#ctxTopRegions3{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 700px !important;
                width: 100% !important;
            }

            /* ////// INCOME 3 ////// */

             /* div page size */
             div#income3.sublevel{
                height: 830px;
                width: 1150px;
            }

            /* div size income chart 3 */
            div#income-chart-3.card.mb-4{
                height: 800px;
            }

            canvas#ctxWideRegions{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 660px !important;
                width: 100% !important;
            }

            /* ///// IMPEXPORT 1 ///// */

             /* Banner size */
             div#imports {
                height: 135px;
            }

            /* div page size */
            div#impexport1.sublevel{
                height: 690px;
                width: 1150px;
            }

            /* ///// IMPEXPORT 2 ///// */

             /* div page size */
             div#impexport2.sublevel{
                height: 830px;
                width: 1150px;
            }

            canvas#ctxImportLocal{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 500px !important;
                width: 100% !important;
                margin-top: 110px;
            }

            /* ///// STOCKS 1 ///// */

            /* Banner size */
            div#stocks {
                height: 135px;
            }

            /* div page size */
            div#stock1.sublevel{
                height: 690px;
                width: 1150px;
            }

            /* div size stock chart 1 */
            div#stock-chart-1.card.mb-4{
                height: 530px;
            }

            /* /// STOCKS 2 /// */

            /* div page size */
            div#stock2.sublevel{
                height: 800px;
                width: 1150px;
            }

            /* div size stock chart 2 */
            div#stock-chart-2.card.mb-4{
                height: 630px;
            }

            canvas#ctxStocks{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 400px !important;
                width: 100% !important;
                margin-top: 0px;
            }

            /* /// PRICES 1 /// */

            /* Banner size */
            div#prices {
                height: 135px;
            }

            /* div page size */
            div#price1.sublevel{
                height: 690px;
                width: 1150px;
            }

            /* size of card */
            div.prices-card.card.primary.mb-4{
                height: 135px;
            }

            /* div size prices chart 1 */
            div#price-chart-1.card.mb-4{
                height: 500px;
            }

            div.prices-card.card.primary.mb-4 h1{ 
                font-size: 40px;
            }

            canvas#ctxFarmPrices{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 360px !important;
                width: 100% !important;
                margin-top: 0px;
            }

            /* /// PRICES 2 /// */
            
            /* div page size */
            div#price2.sublevel{
                height: 830px;
                width: 1150px;
            }

            /* /// PRICES 3 /// */
            /* div page size */
            div#price3.sublevel{
                height: 830px;
                width: 1150px;
            }

            /* /// YIELD COSTS 1 /// */

            /* Banner size */
            div#yieldcost {
                height: 135px;
            }

            /* div page size */
            div#yieldcost1.sublevel{
                height: 690px;
                width: 1150px;
            }

            /* div size yieldcost chart 1 */
            div#yieldcost-chart-1.card.mb-4{
                height: 530px;
            }

            /* resizw yieldcost chart 1 */
            canvas#ctxYieldCost{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 360px !important;
                width: 100% !important;
                margin-top: 0px;
            }

            /* /// YIELD COSTS 2 /// */
            /* div page size */
            div#yieldcost2.sublevel{
                height: 830px;
                width: 1150px;
            }

            /* div size yieldcost chart 2 */
            div#yieldcost-chart-2.card.mb-4{
                height: 800px;
            }

            canvas#ctxBreakdownPh{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 600px !important;
                width: 100% !important;
                margin-top: 30px;
            }

            /* /// YIELD COSTS 3 /// */
            /* div page size */
            div#yieldcost3.sublevel{
                height: 830px;
                width: 1150px;
            }

            /* div size yieldcost chart 3 */
            div#yieldcost-chart-3.card.mb-4{
                height: 800px;
            }

            canvas#ctxNPKUse{
                min-height: 100%;
                max-width: 100%;
                max-height: 100%;
                height: 660px !important;
                width: 100% !important;
                margin-top: 0px;
            }
        }
    </style>
</head>

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
            <!-- <button onclick="htmlToPdf()" class="btn btn-primary">
                HTML2PDF
            </button> -->
            <button onclick="Print()" class="btn btn-primary">
               Print
            </button>
            <!-- <a href="<?php echo base_url('booklet/downloadPdf') ?>" tagget="_blank" class="btn btn-success">TCPDF</a> -->
        </div>
    </nav>

    <br>
    <div id="capture">
        <!-- RICE SECTOR -->
        <div class="container-fluid" id="rice-sector">
            <div class="row">
                <main role="main" class="col">    
                    <div id="main" class="jumbotron text-center">
                        <div class="jumbotron-content">
                            <h2>State of the Rice Sector in the</h2>
                            <h1>Philippines</h1>
                            <p class="lead"><i>What is the status of the rice industry?</i> Explore and get insights about the trend of the <br />key performance indicators of rice production, consumption, and market.</p>
                            <div class="card-note mx-auto rounded-pill bg-light">
                                <h6 class="text-dark p-1">Population: <strong>110.2 MILLION</strong> (PSA, 2021)</h6>
                            </div>
                        </div>
                    </div>

                    <!-- Body -->
                    <div class="dashboard">
                        <div class="row">
                            <div class="col-4">
                                <div class="card primary mb-2 bg-primary text-center text-white">
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
                                <div class="card primary mb-2 bg-primary text-center text-white">
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
                                <div class="card primary mb-2 bg-primary text-center text-white">
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
                        <div class="row">
                            <div class="col-4">
                                <div class="card secondary text-center">
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
                                                <div class="card-note w-100 mx-auto rounded-pill">
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
                                        <h6 class="card-title text-left">Profitabality Indicator (2020)</h6>
                                        <div class="row mt-3">
                                            <div class="col border-right">
                                                <h6 class="card-title text-left ml-1"><a href="<?php echo base_url(); ?>incomes" class="text-black stretched-link text-decoration-none card-sec">Net Returns </a></h6>
                                                <h2 class="card-text mt-5">P <?php echo $net_returns['value']; ?><i class="<?php echo $net_caret; ?>"></i></h2>
                                            </div>
                                            <div class="col">
                                                <h6 class="card-title text-left"><a href="<?php echo base_url(); ?>incomes" class="text-black stretched-link text-decoration-none card-sec">Gross Returns</a></h6>
                                                <h2 class="card-text mb-2">P <?php echo $gross_returns['value']; ?><i class="<?php echo $gross_caret; ?>"></i></h2>
                                                <h6 class="card-title text-left mt-5"><a href="<?php echo base_url(); ?>incomes" class="text-black stretched-link text-decoration-none card-sec">Total Cost</a></h6>
                                                <h2 class="card-text mb-2">P <?php echo $total_costs_main; ?><i class="<?php echo $cost_caret; ?>"></i></h2>
                                            </div>
                                        </div>
                                        <div class="card-note w-100 mx-auto rounded-pill" id="perhec-note" style="margin: 1px 0;">
                                            <p class="text-white">per hectare per cropping season</p>
                                        </div>
                                    </div>
                                    <div class="caret-select"><i class="bi bi-caret-right-alt pr-2"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-4">
                                <div class="card secondary text-center">
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
                                <div class="card secondary text-center mt-2">
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
                                <div class="card primary bg-primary text-center mt-2">
                                    <div class="card-body text-white">
                                        <h6 class="card-title text-center align-middle"><a href="<?php echo base_url(); ?>yieldcost/" class="text-white stretched-link text-decoration-none card-main-alt">Productivity Indicators</a></h6>
                                        <a href="<?php echo base_url(); ?>yieldcost/" class="text-white stretched-link text-decoration-none card-main-alt"><img class="d-block img-fluid mx-auto" style="height: 96px" src="<?php echo base_url(); ?>assets/ani_at_kita_logo.png"></a>
                                    </div>
                                    <div class="caret-select"><i class="bi bi-caret-right-alt pr-2"></i></div>
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="card primary bg-primary text-center text-white" id="card-map">
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
                                <div class="card secondary text-center">
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
                                <div class="card secondary text-center mt-2">
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
                                <div class="card secondary text-center mt-2">
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
                    </div>
                </main>
            </div>
        </div>
        
        <!-- for page break from html2pdf -->
        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br>

        <!-- PRODUCTIONS -->
        <div class="container-fluid" id="production">
            <div class="row">
                <main role="main" class="col">
                    <!-- Header --->
                    <div id="production" class="jumbotron text-center">
                        <div class="jumbotron-content">
                            <h2>State of the Rice Sector in the Philippines</h2>
                            <h1>Palay Production</h1>
                            <p class="lead"><i>What is the total volume of palay produced in the country?</i> <br /> Know the latest and historical rice production information and the contribution of each province to the overall quantity.</p>
                        </div>
                    </div>

                    <!-- Body -->
                    <div class="sublevel">
                        <div class="row">
                            <div class="col">
                                <div class="card-deck mb-2 text-center">
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
                                <div class="card mb-4" id="production-chart-1">
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
                    </div>
                </main>
            </div>
        </div>


        <!-- for page break from html2pdf -->
        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br>

        <!-- PRODUCTIONS 2 -->

        <div class="container-fluid" id="production2">
            <div class="row">
                <main role="main" class="col">
                    <div class="sublevel" id="prod2">
                        <div class="row">
                            <div class="col">
                                <div class="card mb-4" id="production-chart-2">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Map</a> -->
                                        <div class="chart-toggles" data-html2canvas-ignore="true">
                                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                <label class="btn btn-secondary">
                                                    <input id="showTop" type="radio" name="toggle_list"> Top 20
                                                </label>
                                                <label class="btn btn-secondary">
                                                    <input id="showAll" type="radio" name="toggle_list"> Show All
                                                </label>
                                            </div>
                                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                <label class="btn btn-secondary">
                                                    <input type="radio" name="toggle_type" id="showreg" checked> Regional
                                                </label>
                                                <label class="btn btn-secondary">
                                                    <input type="radio" name="toggle_type" id="showprov"> Provincial
                                                </label>
                                            </div>
                                        </div>
                                        <h5 id="chart2-header" class="my-0 pt-2 pb-2">Palay Production by Region (2021)</h5>
                                        <p class="my-0 font-weight-normal text-muted">in metric tons (PSA, 2022)</p>
                                    </div>
                                    <div class="card-body chart-all">
                                        <div class="row">
                                            <div class="col-6">
                                                <!-- <div id="ctxTopProvTopContainer">
                                                    <canvas id="ctxTopProvTop"></canvas>
                                                </div>
                                                <div id="ctxTopProvContainer" class="scrollable-chart">
                                                    <canvas id="ctxTopProv"></canvas>
                                                </div>      -->
                                                <div id="ctxRegionalContainer">
                                                    <canvas id="ctxRegional"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-center mt-4">
                                                    <div class="legend-box" style="background:rgba(198,250,30,1);"></div>
                                                    <p id="series-1" class="d-inline-block text-capitalize">< 100,000</p>
                                                    <div class="legend-box" style="background:rgba(148,213,38,1);"></div>
                                                    <p id="series-2" class="d-inline-block text-capitalize">100,000-500,000</p>
                                                    <div class="legend-box" style="background:rgba(91,140,34,1);"></div>
                                                    <p id="series-3" class="d-inline-block text-capitalize">500,000-1,000,000</p>
                                                    <div class="legend-box" style="background:rgba(33,55,18,1);"></div>
                                                    <p id="series-4" class="d-inline-block text-capitalize">> 1,000,000</p>
                                                </div>
                                                <!-- <div id="phl-top" style="height: 850px;"></div>
                                                <div id="phl" style="height: 850px;"></div> -->
                                                <div id="phl-reg" style="height: 850px;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer text-muted">
                                        Data Source: <a href="https://palaystat.philrice.gov.ph/statistics/retrieve/table/1" target="_blank">Estimated production, area harvested and yield per hectare (PAY) - PalayStat System</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>    
                </main>
            </div>
        </div>

        <!-- for page break from html2pdf -->
        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br>

        <!-- AREA HARVESTED -->

        <div class="container-fluid" id="area-harvested">
            <div class="row">
                <main role="main" class="col">
                    <!-- Header --->
                    <div id="area" class="jumbotron text-center">
                        <div class="jumbotron-content">
                            <h2>State of the Rice Sector in the Philippines</h2>
                            <h1>Area Harvested</h1>
                            <p class="lead"><i>How wide was the accumulated area of the total harvested palay? </i> Explore the estimated overall <br />harvested area, the apportionment of irrigated and non-irrigated farms, and the size of extents in the provinces.</p>
                        </div>
                    </div>

                    <!-- Body -->
                    <div class="sublevel">
                        <div class="row">
                            <div class="col">
                                <div class="card-deck mb-2 text-center">
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
                                <div class="card mb-4" id="area-chart-1">
                                    <div class="card-header text-left">
                                        <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a>
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
                    </div>
                </main>
            </div>
        </div>

        <!-- for page break from html2pdf -->
        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br>

        <!-- AREA HARVESTED 2 -->

        <div class="container-fluid" id="area-harvested2">
            <div class="row">
                <main role="main" class="col">
                    <div class="sublevel" id="area2">
                        <div class="row">
                            <div class="col">
                                <div class="card mb-4" id="area-chart-2">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Map</a> -->
                                        <div class="chart-toggles" data-html2canvas-ignore="true">
                                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                <label class="btn btn-secondary">
                                                    <input id="showTop" type="radio" name="toggle_list"> Top 20
                                                </label>
                                                <label class="btn btn-secondary">
                                                    <input id="showAll" type="radio" name="toggle_list"> Show All
                                                </label>
                                            </div>
                                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                <label class="btn btn-secondary">
                                                    <input type="radio" name="toggle_type" id="showreg" checked> Regional
                                                </label>
                                                <label class="btn btn-secondary">
                                                    <input type="radio" name="toggle_type" id="showprov"> Provincial
                                                </label>
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
                                                <div id="ctxRegionalContainer">
                                                    <canvas id="area_ctxRegional">                                                       
                                                    </canvas>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-center mt-4">
                                                    <div class="legend-box" style="background:rgba(254,213,111,1);"></div>
                                                    <p id="series-1" class="d-inline-block text-capitalize">< 10,000</p>
                                                    <div class="legend-box" style="background:rgba(220,149,85,1);"></div>
                                                    <p id="series-2" class="d-inline-block text-capitalize">10,000-50,000</p>
                                                    <div class="legend-box" style="background:rgba(200,107,37,1);"></div>
                                                    <p id="series-3" class="d-inline-block text-capitalize">50,000-100,000</p>
                                                    <div class="legend-box" style="background:rgba(112,55,40,1);"></div>
                                                    <p id="series-4" class="d-inline-block text-capitalize"> > 100,000</p>
                                                </div>
                                                <div id="phl-top" style="height: 850px;"></div>
                                                <div id="phl" style="height: 850px;"></div>
                                                <div id="area-phl-reg" style="height: 850px;"></div>                            
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer text-muted">
                                        Data Source: <a href="https://palaystat.philrice.gov.ph/statistics/retrieve/table/1" target="_blank">Estimated production, area harvested and yield per hectare (PAY) - PalayStat System</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>

        <!-- for page break from html2pdf -->
        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br>

        <!-- EST YIELD -->

        <div class="container-fluid" id="est-yield">
            <div class="row">
                <main role="main" class="col">
                    <!-- Header --->
                    <div id="yield" class="jumbotron text-center">
                        <div class="jumbotron-content">
                            <h2>State of the Rice Sector in the Philippines</h2>
                            <h1>Yield per Hectare</h1>
                            <p class="lead"><i>How do our farmers perform in terms of yield per hectare?</i> Check out the average metric tons <br />of palay produced per hectare, the attainment in irrigated and non-irrigated areas, and the performance in each province.</p>
                        </div>
                    </div>

                    <!-- Body -->
                    <div class="sublevel">
                        <div class="row">
                            <div class="col">
                                <div class="card-deck mb-2 text-center">
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
                                <div class="card mb-4"  id="yield-chart-1">
                                    <div class="card-header text-left">
                                        <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a>
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
                    </div>
                </main>
            </div>
        </div>

        <!-- for page break from html2pdf -->
        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br>

        <!-- EAST YIELD 2 -->

        <div class="container-fluid" id="est-yield2">
            <div class="row">
                <main role="main" class="col">
                    <div class="sublevel" id="yield2">        
                        <div class="row">
                            <div class="col">
                                <div class="card mb-4" id="yield-chart-2">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Map</a> -->
                                        <div class="chart-toggles" data-html2canvas-ignore="true">
                                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                <label class="btn btn-secondary">
                                                    <input id="showTop" type="radio" name="toggle_list"> Top 20
                                                </label>
                                                <label class="btn btn-secondary">
                                                    <input id="showAll" type="radio" name="toggle_list"> Show All
                                                </label>
                                            </div>
                                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                <label class="btn btn-secondary">
                                                    <input type="radio" name="toggle_type" id="showreg" checked> Regional
                                                </label>
                                                <label class="btn btn-secondary">
                                                    <input type="radio" name="toggle_type" id="showprov"> Provincial
                                                </label>
                                            </div>
                                        </div>
                                        <h5 id="chart2-yield" class="my-0 pt-2 pb-2">Average Yield per Hectare per Cropping Season by Province by Region (2021)</h5>
                                        <p class="my-0 font-weight-normal text-muted">in metric tons per hectare (PSA, 2022)</p>
                                    </div>
                                    <div class="card-body chart-all">
                                        <div class="row">
                                            <div class="col-6">
                                                <!-- <div id="ctxTopProvTopContainer"><canvas id="ctxTopProvTop"></canvas></div>
                                                <div id="ctxTopProvContainer" class="scrollable-chart"><canvas id="ctxTopProv"></canvas></div>      -->
                                                <div id="ctxRegionalContainer"><canvas id="yield_ctxRegional"></canvas></div>
                                            </div>
                                            <div class="col-6">                                            
                                                <div class="text-center mt-4">
                                                    <div class="legend-box" style="background:rgba(41,107,54,1);"></div>
                                                    <p id="series-1" class="d-inline-block text-capitalize">> 4.15 Yield per Hectare</p>
                                                    <div class="legend-box" style="background:rgba(42,140,184,1);"></div>
                                                    <p id="series-2" class="d-inline-block text-capitalize">< 4.15 Yield per Hectare</p>                                        
                                                </div>
                                                <!-- <div id="phl-top" style="height: 850px;"></div>
                                                <div id="phl" style="height: 850px;"></div> -->
                                                <div id="yield-phl-reg" style="height: 850px;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer text-muted">
                                        Data Source: <a href="https://palaystat.philrice.gov.ph/statistics/retrieve/table/1" target="_blank">Estimated production, area harvested and yield per hectare (PAY) - PalayStat System</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>

        <!-- for page break from html2pdf -->
        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br>

        <!-- SUPPLIES -->

        <div class="container-fluid" id="supplies">
            <div class="row">
                <main role="main" class="col">
                    <!-- Header --->
                    <div id="supply" class="jumbotron text-center">
                        <div class="jumbotron-content">
                            <h2>State of the Rice Sector in the Philippines</h2>
                            <h1>Supply and Utilization</h1>
                            <p class="lead"><i>How much rice supply do we attain and utilize?</i> Know the total supply versus <br />utilization per year, as well as the rice supply sources and utilization accounts.</p>
                        </div>
                    </div>

                    <!-- Body -->
                    <div class="sublevel">
                        <div class="row">
                            <div class="col">
                                <div class="card-deck mb-2 text-center">
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
                                <div class="card mb-4" id="supply-chart-1">
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
                    </div>
                </main>
            </div>
        </div>

        <!-- for page break from html2pdf -->
        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br>

        <!-- SUPPLIES 2 -->
            
        <div class="container-fluid" id="supplies2">
            <div class="row">
                <main role="main" class="col">
                    <div class="sublevel" id="supply2">
                        <div class="row">
                            <div class="col">
                                <div class="card mb-4" id="supply-chart-2">
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
                                <div class="card mb-4" id="supply-chart-3">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a> -->
                                        <h5 class="my-0 pt-2 pb-2">Distribution of Total Utilization (2000-2020)</h5>
                                        <p class="my-0 font-weight-normal text-muted">in million metric tons (PSA, 2021)</p>
                                    </div>
                                    <div class="card-body">
                                        <div><canvas id="ctxUtilStack"></canvas></div>
                                    </div>
                                    <!-- <div class="card-footer text-muted"></div> -->
                                    <div class="card-footer text-muted">Note: Excluding exports in utilization accounts <br/>
	                                    Data Source: <a href="https://openstat.psa.gov.ph/PXWeb/pxweb/en/DB/DB__2B__AA__SU/0012B5FSUA0.px/?rxid=6c040b24-38b8-42c7-84a6-881d5b00f633" target="_blank">Rice and Corn: Supply Utilization Accounts  - Philippine Statistics Authority</a>
                                    </div>
                                </div>                             
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>

        <!-- for page break from html2pdf -->
        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br>

        <!-- CONSUMPTIONS -->

        <div class="container-fluid" id="consumptions">
            <div class="row">
                <main role="main" class="col">
                    <!-- Header --->
                    <div id="consumption" class="jumbotron text-center">
                        <div class="jumbotron-content">
                            <h2>State of the Rice Sector in the Philippines</h2>
                            <h1>Rice Consumption</h1>
                            <p class="lead"><i>How much rice do Filipinos consume each day and year?</i> Explore the information of per capita consumption <br />and the comparison of our local consumption and local food consumption</p>
                        </div>
                    </div>

                    <!-- Body -->

                    <div class="sublevel" id="consumption1">
                        <div class="row">
                            <div class="col">
                                <div class="card-deck mb-2 text-center">
                                    <div class="card primary mb-4 bg-primary text-white" >
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
                                <div class="card mb-4" id="consumption-chart-2">
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
                                <div class="card mb-4" id="consumption-chart-2">
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
                    </div>
                </main>
            </div>
        </div>

        <!-- for page break from html2pdf -->
        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br>

        <!-- CONSUMPTION 2 -->

        <div class="container-fluid" id="consumptions2">
            <div class="row">
                <main role="main" class="col">
                    <div class="sublevel" id="consumption2">
                        <div class="row">
                            <div class="col">
                                <div class="card mb-4" id="consumption-chart-3">
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
                    </div>
                </main>
            </div>
        </div>


        <!-- for page break from html2pdf -->
        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br>

        <!-- VALUATIONS -->

        <div class="container-fluid" id="valuations">
            <div class="row">
                <main role="main" class="col">
                    <!-- Header --->
                    <div id="valuation" class="jumbotron text-center">
                        <div class="jumbotron-content">
                            <h2>State of the Rice Sector in the Philippines</h2>
                            <h1>Value of Production</h1>
                            <p class="lead"><i>How much does the rice farming sector contribute to national agricultural account?</i> <br />Learn the value of rice production, and its share in the overall value of rice production,<br /> its share in the GVA of agriculture, forestry, and fishing, and its portion in the National Gross Domestic Product.</p>
                        </div>
                    </div>

                    <!-- Body -->
                    <div class="sublevel" id="valuation1">
                        <div class="row">
                            <div class="col-5 pl-1">
                                <div class="card primary mb-4 bg-primary text-white" id="valuation-card-1">
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
                                <div class="card primary mb-4 bg-alternate"  id="valuation-card-2">
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
                                                    <div class="col-7" id="valuation-chart-1">
                                                        <canvas id="ctxPercentShare">
                                                        </canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="card mb-4" id="valuation-chart-2">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a> -->
                                        <h5 class="my-0 pt-2 pb-2">National Value of Rice and Agricultural Production (2001-2021)</h5>
                                        <p class="my-0 font-weight-normal text-muted">In Billion Pesos, At Constant 2018 Prices (PSA, 2022)</p>
                                    </div>
                                    <div class="card-body mt-4">
                                        <div>
                                            <canvas id="ctxAgriSector">
                                            </canvas>
                                        </div>
                                    </div>
                                    <div class="card-footer text-muted">
                                        Data Source: <a href="https://openstat.psa.gov.ph/PXWeb/pxweb/en/DB/DB__2B__AA__VP__NA/0012B5FVOP1.px/?rxid=2533f456-0336-41c3-a072-945813ce4ac4" target="_blank">Palay and Agriculture and Fisheries: Value of Production in Philippine Agriculture and Fisheries, Philippines and Regions - Philippine Statistics Authority</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>

        <!-- for page break from html2pdf -->
        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br>

        <!-- VALUATIONS 2 -->

        <div class="container-fluid" id="valuations2">
            <div class="row">
                <main role="main" class="col">
                    <div class="sublevel" id="valuation2">
                        <div class="row">
                            <div class="col">
                                <div class="card mb-4" id="valuation-chart-3">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a> -->
                                        <h5 class="my-0 pt-2 pb-2">Share of Rice Production Value to Agricultural Production Value (2001-2021)</h5>
                                        <p class="my-0 font-weight-normal text-muted">In Percent (%), At Constant 2018 Prices (PSA, 2022)</p>
                                    </div>
                                    <div class="card-body">
                                        <div>
                                            <canvas id="valuation_ctxAgriShare">
                                            </canvas>
                                        </div>
                                    </div>
                                    <div class="card-footer text-muted">
                                        Data Source: <a href="https://openstat.psa.gov.ph/PXWeb/pxweb/en/DB/DB__2B__AA__VP__NA/0012B5FVOP1.px/?rxid=2533f456-0336-41c3-a072-945813ce4ac4" target="_blank">Palay and Agriculture and Fisheries: Value of Production in Philippine Agriculture and Fisheries, Philippines and Regions - Philippine Statistics Authority</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>

        <!-- for page break from html2pdf -->
        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br>

        <!-- INCOMES -->

        <div class="container-fluid" id="incomes1">
            <div class="row">
                <main role="main" class="col">

                    <!-- Header --->
                    <div id="incomes" class="jumbotron text-center">
                        <div class="jumbotron-content">
                            <h2>State of the Rice Sector in the Philippines</h2>
                            <h1>Rice Profitability Indicator</h1>
                            <p class="lead"><i>How much do our farmers earn per season?</i> Find out their net income through the years<br /> derived from the gross return minus the total cost of production. Explore the farmer earnings in the regions.</p>
                        </div>
                    </div>

                    <!-- Body -->
                    <div class="sublevel" id="income1">
                        <div class="row">
                            <div class="col">
                                <div class="card-deck mb-2 text-center">
                                    <div class="card primary mb-4 bg-alternate income-card">
                                        <div class="card-body">
                                            <h5 class="card-title pb-2">Gross Returns</h5>
                                            <h2 class="card-text font-weight-bold">P <?php echo $gross_returns['value']; ?><i class="<?php echo $gross_caret; ?>"></i></h2>
                                            <div class="card-note w-100 mx-auto rounded-pill bg-primary">
                                                <p class="text-white">per hectare per cropping season</p>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="card primary mb-4 bg-primary text-white income-card">
                                        <div class="card-body">
                                            <h5 class="card-title pb-2">Net Returns (2020)</h5>
                                            <h2 class="card-text font-weight-bold">P <?php echo $net_returns['value']; ?><i class="<?php echo $net_caret; ?>"></i></h2>
                                            <div class="card-note w-100 mx-auto rounded-pill bg-warning">
                                                <p class="text-white">per hectare per cropping season</p>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="card primary mb-4 bg-alternate income-card">
                                        <div class="card-body">
                                            <h5 class="card-title pb-2">Total Cost</h5>
                                            <h2 class="card-text font-weight-bold">P <?php echo $total_costs['value']; ?><i class="<?php echo $cost_caret; ?>"></i></h2>
                                            <div class="card-note w-100 mx-auto rounded-pill bg-primary">
                                                <p class="text-white">per hectare per cropping season</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="card mb-4" id="income-chart-1">
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
                    </div>
                </main>
            </div>
        </div>

        
        <!-- for page break from html2pdf -->
        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br>

        <!-- INCOMES 2 -->

        <div class="container-fluid" id="incomes2">
            <div class="row">
                <main role="main" class="col">
                    <div class="sublevel" id="income2">
                        <div class="row">
                            <div class="col">
                                <div class="card mb-4" id="income-chart-2">
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
                    </div>
                </main>
            </div>
        </div>

        <!-- for page break from html2pdf -->
        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br>

        <!-- INCOMES 3 -->

        <div class="container-fluid" id="incomes3">
            <div class="row">
                <main role="main" class="col">
                    <div class="sublevel" id="income3">
                        <div class="row">
                            <div class="col">
                                <div class="card mb-4" id="income-chart-3">
                                    <div class="card-header text-left">
                                        <!-- <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a> -->
                                        <div class="chart-toggles" data-html2canvas-ignore="true">
                                            <div class="btn-group btn-group-toggle btn-income" data-toggle="buttons">
                                                <label class="btn btn-secondary">
                                                    <input type="radio" name="toggle_type" id="showCost" checked> Total Cost
                                                </label>
                                                <label class="btn btn-secondary">
                                                    <input type="radio" name="toggle_type" id="showNet"> Net Returns
                                                </label>
                                                <label class="btn btn-secondary">
                                                    <input type="radio" name="toggle_type" id="showGross"> Gross Returns
                                                </label>
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
                    </div>
                </main>
            </div>
        </div>
        

        <!-- for page break from html2pdf -->
        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br>

        <!-- IMPEXPORTS -->

        <div class="container-fluid">
            <div class="row">
                <main role="main" class="col">
                    <!-- Header --->
                    <div id="imports" class="jumbotron text-center">
                        <div class="jumbotron-content">
                            <h2>State of the Rice Sector in the Philippines</h2>
                            <h1>Imports and Exports</h1>
                            <p class="lead"><i>How much rice do import and export?</i> Find out the country's yearly rice importation and exportation<br /> information, as well as the percentage share of imported and locally produced rice to the total supply.</p>
                        </div>
                    </div>

                    <!-- Body -->
                    <div class="sublevel" id="impexport1">
                        <div class="row">
                            <div class="col">
                                <div class="card-deck mb-2 text-center">
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
                                <div class="card mb-4" id="impexport-chart-1">
                                    <div class="card-header text-left">
                                        <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a>
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
                                <div class="card mb-4" id="impexport-chart-2">
                                    <div class="card-header text-left">
                                        <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a>
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
                    </div>
                </main>
            </div>
        </div>

        <!-- for page break from html2pdf -->
        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br>

        <!-- IMPEXPORTS 2 -->

        <div class="container-fluid" id="impexports2">
            <div class="row">
                <main role="main" class="col">
                    <div class="sublevel" id="impexport2">
                        <div class="row">
                            <div class="col">
                                <div class="card mb-4" id="impexport-chart-3">
                                    <div class="card-header text-left">  
                                        <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a>
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
                    </div>
                </main>
            </div>
        </div>

        <!-- for page break from html2pdf -->
        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br>

        <!-- STOCKS 1 -->

        <div class="container-fluid" id="stocks1">
            <div class="row">
                <main role="main" class="col">
                    <!-- Header --->
                    <div id="stocks" class="jumbotron text-center">
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
                    <div class="sublevel" id="stock1">
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
                                <div class="card mb-4" id="stock-chart-1">
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
                    </div>
                </main>
            </div>
        </div>


        <!-- for page break from html2pdf -->
        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br>

        <!-- STOCKS 2 -->

        <div class="container-fluid" id="stocks2">
            <div class="row">
                <main role="main" class="col">
                    <div class="sublevel" id="stock2">
                        <div class="row">
                            <div class="col">
                                <div class="card mb-4" id="stock-chart-2">
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
                    </div>
                </main>
            </div>
        </div>

        <!-- for page break from html2pdf -->
        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br>

        <!-- PRICES 1 -->

        <div class="container-fluid" id="prices1">
            <div class="row">
                <main role="main" class="col">
                    <!-- Header --->
                    <div id="prices" class="jumbotron text-center">
                        <div class="jumbotron-content">
                            <h2>State of the Rice Sector in the Philippines</h2>
                            <h1>Rice Market Prices</h1>
                            <p class="lead"><i>How does the price of un-hulled and de-hulled rice fare in the marketplace?</i><br/>Know the current and historical prices of rice. </p>
                        </div>
                    </div>
            
                    <!-- Body -->
                    <div class="sublevel" id="price1">
                        <div class="row">
                            <div class="col">
                                <div class="card-deck mb-2 text-center">
                                    <div class="card primary mb-4 bg-primary text-white prices-card">
                                        <div class="card-body">
                                            <h5 class="card-title mt-1">Dry Palay Price (2021)</h5>
                                            <h1 class="card-text mt-4 font-weight-bold smaller"><?php echo $farmgate['value']; ?><i class="<?php echo $farm_caret; ?>"></i></h1>
                                            <div class="card-note bg-warning w-50 mt-3 mx-auto rounded-pill">
                                                <p class="text-white">Pesos Per Kilogram</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card primary mb-4 bg-primary text-white prices-card">
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
                                    <div class="card primary mb-4 bg-primary text-white prices-card">
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
                                <div class="card mb-4" id="price-chart-1">
                                    <div class="card-header text-left">
                                        <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a>
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
                    </div>
                </main>
            </div>
        </div>


        <!-- for page break from html2pdf -->
        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br>

        <!-- PRICES 2 -->

        <div class="container-fluid" id="prices2">
            <div class="row">
                <main role="main" class="col">
                    <div class="sublevel" id="price2">
                        <div class="row">
                            <div class="col">
                                <div class="card mb-4" id="price-chart-2">
                                    <div class="card-header text-left">
                                        <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a>
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
                    </div>
                </main>
            </div>
        </div>

        <!-- for page break from html2pdf -->
        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br>

        <!-- PRICES 3 -->

        <div class="container-fluid" id="prices3">
            <div class="row">
                <main role="main" class="col">
                    <div class="sublevel" id="price3">
                        <div class="row">
                            <div class="col">
                                <div class="card mb-4" id="price-chart-3">
                                    <div class="card-header text-left">
                                        <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a>
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
                    </div>
                </main>
            </div>
        </div>

        <!-- for page break from html2pdf -->
        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br>

        <!-- YIELD COST 1 -->

        <div class="container-fluid" id="yieldcosts1">
            <div class="row">
                <main role="main" class="col">
                    <!-- Header --->
                    <div id="yieldcost" class="jumbotron text-center">
                        <div class="jumbotron-content">
                            <h2>State of the Rice Sector in the Philippines</h2>
                            <h1>Productivity Indicators</h1>
                            <p class="lead"><i>How productive are our farmers in terms of having high yield with less cost?</i> Explore the yield and cost analysis per province, <br /> distribution of cost items per hectare, and comparison of NPK utilization among the top yielding provinces.</p>
                        </div>
                    </div>

                    <!-- Body -->
                    <div class="sublevel container" id="yieldcost1">
                        <div class="row">
                            <div class="col">
                                <div class="card-deck mb-2 text-center">
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
                                <div class="card mb-4" id="yieldcost-chart-1">
                                    <div class="card-header text-left">
                                        <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a>
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
                    </div>
                </main>
            </div>
        </div>

        <!-- for page break from html2pdf -->
        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br>

        <!-- YIELD COST 2 -->

        <div class="container-fluid" id="yieldcosts2">
            <div class="row">
                <main role="main" class="col">
                    <div class="sublevel" id="yieldcost2">
                        <div class="row">
                            <div class="col">
                                <div class="card mb-4" id="yieldcost-chart-2">
                                    <div class="card-header text-left">
                                        <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a>
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
                    </div>
                </main>
            </div>
        </div>

        <!-- for page break from html2pdf -->
        <div class="html2pdf__page-break"></div>
        <div class="pagebreak"> </div>
        <br>

        <!-- YIELD COST 3 -->

        <div class="container-fluid" id="yieldcosts3">
            <div class="row">
                <main role="main" class="col">
                    <div class="sublevel" id="yieldcost3">
                        <div class="row">
                            <div class="col">
                                <div class="card mb-4" id="yieldcost-chart-3">
                                    <div class="card-header text-left">
                                        <a class="btn btn-white download-chart tableb text-black" role="button" data-html2canvas-ignore="true"><i class="bi bi-download-alt pr-2"></i>Download Chart</a>
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
                    </div>
                </main>
            </div>
        </div>
                
        <!-- END OF DIV CAPTURE -->
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

    <!-- RICE-SECTOR CHART -->
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

    <!-- PRODUCTIONS CHART  -->

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
            element: document.getElementById('phl-reg'),
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

        var topReg = document.getElementById('ctxRegional').getContext('2d');
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

    <!-- HARVEST AREA CHART -->

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

        var area_dbTotal = JSON.parse('<?php echo $ph_area_all; ?>');
        var area_dbIrrigated = JSON.parse('<?php echo $ph_area_irrigated; ?>');
        var area_dbRainfed = JSON.parse('<?php echo $ph_area_rainfed; ?>');

        let area_years = [];
        let area_values_total = [];
        let area_values_irrig = [];
        let area_values_rain = [];

        try {
            area_dbTotal.map((item) => {
                area_years.push(item.year);
                area_values_total.push(item.value);
            });
            area_dbIrrigated.map((item) => {
                area_values_irrig.push(item.value);
            });
            area_dbRainfed.map((item) => {
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
            element: document.getElementById('area-phl-reg'),
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

        var yield_dbTotal = JSON.parse('<?php echo $ph_yield_all; ?>');
        var yield_dbIrrigated = JSON.parse('<?php echo $ph_yield_irrigated; ?>');
        var yield_dbRainfed = JSON.parse('<?php echo $ph_yield_rainfed; ?>');

        let yield_years = [];
        let yield_values_total = [];
        let yield_values_irrig = [];
        let yield_values_rain = [];

        try {
            yield_dbTotal.map((item) => {
                yield_years.push(item.year);
                yield_values_total.push(item.value);
            });
            yield_dbIrrigated.map((item) => {
                yield_values_irrig.push(item.value);
            });
            yield_dbRainfed.map((item) => {
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
        
        var yield_dbRegsMap = JSON.parse('<?php echo $regional_yield_geocoded; ?>');

        let yield_mapDataR = [];
        
        for (i = 0; i < yield_dbRegsMap.length; i++) {
            var gc = yield_dbRegsMap[i].map_ID;
            var value = parseFloat(yield_dbRegsMap[i].value);

            var fill_color = "";
            if (value > scalesC[1].minValue) {
                fill_color = "secoQ";
            } else if (value > scalesC[0].minValue) {
                fill_color = "firsQ";
            }

            yield_mapDataR[gc] = {
                Location_name: yield_dbRegsMap[i].location_name,
                Year: yield_dbRegsMap[i].year,
                Value: parseFloat(yield_dbRegsMap[i].value).toLocaleString(),
                fillKey: fill_color
            };
        }

        var map = new Datamap({
            element: document.getElementById('yield-phl-reg'),
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
        
        var yield_dbRegs = JSON.parse('<?php echo $regional_yield_all; ?>');

        let yield_regions = [];
        let yield_valuesR = [];
        let yield_bgColorsR = [];

        try {
            yield_dbRegs.map((item) => {
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
                
        var dbTotalSupply = JSON.parse('<?php echo $total_supply; ?>');
        var dbTotalUtil = JSON.parse('<?php echo $total_utilization; ?>');
        var dbSupplySources = JSON.parse('<?php echo $supply_sources_yearly; ?>');
        var dbUseAccounts = JSON.parse('<?php echo $util_accounts_yearly; ?>');
        
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

        var consumption_dbTotalSupply = JSON.parse('<?php echo $total_supply; ?>');
        var consumption_dbTotalUtil = JSON.parse('<?php echo $total_utilization; ?>');
        var consumption_dbSupplySources = JSON.parse('<?php echo $supply_sources_yearly; ?>');
        var consumption_dbUseAccounts = JSON.parse('<?php echo $util_accounts_yearly; ?>');
        var consumption_dbPerCapitas = JSON.parse('<?php echo $per_capita_yearly; ?>');
        var consumption_dbPerCapitasFNRI = JSON.parse('<?php echo $actual_per_capita_yearly; ?>');

        var consumption_curStocks = '<?php echo $supply_sources_values['SUBeginningStocks']; ?>';
        var consumption_curProduce = '<?php echo $supply_sources_values['SUProduction']; ?>';
        var consumption_curImports = '<?php echo $supply_sources_values['SUImports']; ?>';
        var consumption_curExports = '<?php echo $util_accounts_values['UTExports']; ?>';
        var consumption_curSeeds = '<?php echo $util_accounts_values['UTSeeds']; ?>';
        var consumption_curFeedWastes = '<?php echo $util_accounts_values['UTFeedsWaste']; ?>';
        var consumption_curProcessing = '<?php echo $util_accounts_values['UTProcessing']; ?>';
        var consumption_curEndStocks = '<?php echo $util_accounts_values['UTEndingStocks']; ?>';
        var consumption_curFood = '<?php echo $util_accounts_values['uttotalnet']; ?>';

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
            consumption_dbTotalSupply.map((item) => {
                consumption_years.push(item.year);
            });
            consumption_dbSupplySources.map((item) => {
                consumption_stocks.push(item.SUBeginningStocks);
                consumption_locals.push(item.SUProduction);
                consumption_imports.push(item.SUImports);
            });
            consumption_dbUseAccounts.map((item) => {
                consumption_exports.push(item.UTExports);
                consumption_seeds.push(item.UTSeeds);
                consumption_feedswastes.push(item.UTFeedsWaste);
                consumption_processing.push(item.UTProcessing);
                consumption_endstocks.push(item.UTEndingStocks);
                consumption_food.push(item.uttotalnet);
            });
            consumption_dbPerCapitas.map((item) => {
                consumption_kgpercapita.push(item.KgPerYear);
                consumption_gmpercapita.push(item.GmPerDay);
            });
            consumption_dbPerCapitasFNRI.map((item) => {
                consumption_years_act.push(item.year);
                consumption_kgpercapita_act.push(item.KgPerYear);
                consumption_gmpercapita_act.push(item.GmPerDay);
            });
        } catch (error) {
            console.log(error);
        }

        var consumption_yearsLab = [...consumption_years];
        var consumption_yearsLabAct = [...consumption_years_act];
        var consumption_totalProduce = [...consumption_locals];
        var consumption_totalFood = [...consumption_food];
        var consumption_totalKgCapita = [...consumption_kgpercapita];
        var consumption_totalGmCapita = [...consumption_gmpercapita];
        var consumption_totalKgCapitaAct = [...consumption_kgpercapita_act];
        var consumption_totalGmCapitaAct = [...consumption_gmpercapita_act];

        var ProdFood = document.getElementById('ctxProdFood').getContext('2d');

        var ProdFoodChart = new Chart(ProdFood, {
            // The type of chart we want to create
            type: 'bar',

            // The data for our dataset
            data: {
                labels: consumption_yearsLab,
                datasets: [{
                    type: 'line',
                    label: 'Local Production',
                    backgroundColor: '#A6CEE3', // COLOR 1
                    borderColor: '#A6CEE3', // COLOR 1
                    lineTension: 0,
                    fill: false,
                    data: consumption_totalProduce,
                }, {
                    type: 'line',
                    label: 'Net Food Disposable',
                    backgroundColor: '#007FFE', // COLOR 2
                    borderColor: '#007FFE', // COLOR 2
                    lineTension: 0,
                    fill: false,
                    data: consumption_totalFood,
                }]
            },

            // Configuration options go here
            options: {
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
                labels: consumption_yearsLabAct,
                datasets: [{
                    label: 'Per Capita (kg/year)',
                    backgroundColor: '#007FFE', // COLOR 2
                    borderColor: '#007FFE', // COLOR 2
                    lineTension: 0,
                    fill: false,
                    data: consumption_totalKgCapitaAct
                }]
            },

            // Configuration options go here
            options: {
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
                labels: consumption_yearsLabAct,
                datasets: [{
                    label: 'Per Capita (g/day)',
                    backgroundColor: '#007FFE', // COLOR 2
                    borderColor: '#007FFE', // COLOR 2
                    lineTension: 0,
                    fill: false,
                    data: consumption_totalGmCapitaAct
                }]
            },

            // Configuration options go here
            options: {
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

    <!-- VALUATIONS CHARTS -->

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

        var valuation_dbPalay = JSON.parse('<?php echo $palay_valuation_yearly; ?>');
        var valuation_dbAgri = JSON.parse('<?php echo $agri_valuation_yearly; ?>');

        let valuation_years = [];
        let valuation_values_palay = [];
        let valuation_values_agri = [];

        try {
            valuation_dbPalay.map((item) => {
                valuation_years.push(item.year);
                valuation_values_palay.push(item.value);
            });
            valuation_dbAgri.map((item) => {
                valuation_values_agri.push(item.value);
            });
        } catch (error) {
            console.log(error);
        }

        var valuation_agriSector = document.getElementById('ctxAgriSector').getContext('2d');
        var valuation_tempAgriLabels = [...valuation_years];
        var valuation_agriSecData = [...valuation_values_agri];
        var valuation_riceSecData = [...valuation_values_palay];
        var valuation_agriSectorChart = new Chart(valuation_agriSector, {
            // The type of chart we want to create
            type: 'line',

            // The data for our dataset
            data: {
                labels: valuation_tempAgriLabels,
                datasets: [{
                        label: 'Rice Production',
                        backgroundColor: '#2138B7', // COLOR 1
                        borderColor: '#2138B7', // COLOR 1
                        lineTension: 0,
                        data: valuation_riceSecData
                    },
                    {
                        label: 'Agricultural Production',
                        backgroundColor: '#007FFE', // COLOR 2
                        borderColor: '#007FFE', // COLOR 2
                        lineTension: 0,
                        data: valuation_agriSecData
                    },
                ]
            },

            // Configuration options go here
            options: {
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

        var valuation_dbAgriSh = JSON.parse('<?php echo $agri_valuation_share; ?>');
        var valuation_dbTotalSh = JSON.parse('<?php echo $total_valuation_share; ?>');

        let valuation_shares_years = [];
        let valuation_shares_agri = [];
        let valuation_shares_total = [];

        try {
            valuation_dbAgriSh.map((item) => {
                valuation_shares_years.push(item.year);
                valuation_shares_agri.push(item.value);
            });
            valuation_dbTotalSh.map((item) => {
                valuation_shares_total.push(item.value);
            });
        } catch (error) {
            console.log(error);
        }

        var valuation_agriShare = document.getElementById('valuation_ctxAgriShare').getContext('2d');
        var valuation_tempShareLabels = [...valuation_shares_years];
        var valuation_agriShareData = [...valuation_shares_agri];
        var valuation_totalShareData = [...valuation_shares_total];
        var valuation_agriShareChart = new Chart(valuation_agriShare, {
            // The type of chart we want to create
            type: 'bar',

            // The data for our dataset
            data: {
                labels: valuation_tempShareLabels,
                datasets: [{
                    label: 'Agriculture Value Share',
                    backgroundColor: '#007FFE', // COLOR 2
                    borderColor: '#007FFE', // COLOR 2
                    data: valuation_agriShareData
                }]
            },

            // Configuration options go here
            options: {
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

        /// NEED PAGANAHIN
        // CHART 1 PIE CHART VALUATION
        // var ctx = document.getElementById("ctxPercentShare");
        // var Org = JSON.parse('<?php echo $latest_palay_agri_share['value']; ?>');
        // var NonOrg = JSON.parse('<?php echo $latest_nonpalay_agri_share; ?>');

        // var myChart = new Chart(ctx, {
        //     type: 'pie',
        //     data: {
        //         datasets: [{
        //             data: [Org, NonOrg],
        //             backgroundColor: [
        //                 '#2138b7', // COLOR 1
        //                 '#f8f8f8' // COLOR 2
        //             ],
        //             borderColor: [
        //                 '#2138b7', // COLOR 1
        //                 '#f8f8f8' // COLOR 2
        //             ]
        //         }]
        //     },
        //     options: {
        //         cutoutPercentage: 60,
        //         aspectRatio: 1.2,
        //         legend: {
        //             display: false
        //         },
        //         layout: {
        //             padding: {
        //                 bottom: 2
        //             }
        //         },
        //         responsive: true,
        //         maintainAspectRatio: true,
        //         plugins: {
        //             labels: false
        //         },
        //         elements: {
        //             center: {
        //                 text: Org + '%',
        //                 color: '#2138b7',
        //                 fontStyle: 'Poppins',
        //                 sidePadding: 20,
        //                 minFontSize: 12,
        //                 lineHeight: 25
        //             }
        //         },
        //         tooltips: {
        //             enabled: false
        //         }
        //     }
        // });
    </script>


    <!-- INCOMES CHARTS -->

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

    <!-- IMPEXPORTS CHART -->

    <script>
        // var sidebarjs = new SidebarJS.SidebarElement();
        Chart.defaults.global.responsive = true;
        Chart.defaults.global.tooltips.mode = 'index';
        Chart.defaults.global.tooltips.intersect = false;
        Chart.defaults.global.defaultFontFamily = 'Poppins';
        Chart.defaults.global.defaultFontSize = 13;
        Chart.defaults.global.animation.duration = 3000;
        Chart.defaults.global.defaultFontColor = "#000000";
                
        var impexp_dbSupplySources = JSON.parse('<?php echo $supply_sources_yearly; ?>');
        var impexp_dbUseAccounts = JSON.parse('<?php echo $util_accounts_yearly; ?>');
        
        var curProduce = '<?php echo $supply_sources_values['SUProduction']; ?>';
        var curImports = '<?php echo $supply_sources_values['SUImports']; ?>';
        var curExports = '<?php echo $util_accounts_values['UTExports']; ?>';

        let impexp_years = [];
        let impexp_locals = [];
        let impexp_imports = [];
        let impexp_exports = [];
        let impexp_localsp = [];
        let impexp_importsp = [];

        try {
            impexp_dbSupplySources.map((item) => {
            impexp_years.push(item.year);
            impexp_locals.push(item.SUProduction);
            impexp_imports.push(item.SUImports);
            total = parseInt(item.SUProduction) + parseInt(item.SUImports);
            localpc = ((item.SUProduction / total) * 100);
            importspc = ((item.SUImports / total) * 100);
            impexp_localsp.push(localpc.toFixed(0));
            impexp_importsp.push(importspc.toFixed(0));
            });
            impexp_dbUseAccounts.map((item) => {
            impexp_exports.push(item.UTExports);
            });
        } catch (error) {
            console.log(error);
        }
        
        var yearsLab = [...impexp_years];
        var totalProduce = [...impexp_locals];
        var totalImports = [...impexp_imports];
        var totalExports = [...impexp_exports];
        var totalProduceP = [...impexp_localsp];
        var totalImportsP = [...impexp_importsp];
        
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

    <!-- STOCKS CHARTS -->

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

        let ycost_years = [];
        let ycost_values_total = [];
        let values_pcost = [];

        try {
            dbTotal.map((item) => {
                ycost_years.push(item.year);
                ycost_values_total.push(item.value);
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

        let ycost_provinces = [];
        let nUse = [];
        let pUse = [];
        let kUse = [];

        try {
            dbNPK.map((item) => {
                ycost_provinces.push(item.location_name);
                nUse.push(item.n_value);
                pUse.push(item.p_value);
                kUse.push(item.k_value);
            });
        } catch (error) {
            console.log(error);
        }

        var npkLabels = [...ycost_provinces];
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
                aspectRatio: 0.4,
                scales: {
                    xAxes: [{
                        stacked: true,
                        display: true,
                        barPercentage: 0.7,
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
</body>

</html>
