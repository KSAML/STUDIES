<?php
session_cache_limiter(false);
session_start();
?>
<!DOCTYPE html>
<html> 
<head>
<title>Diagnosis</title>
<header>
   <h1>
Health Diagnosis       ||       Keep safe     ||   Live long
 </h1
</header>
<title>Chronic Diseases</title>



<style>
/*div.container {
    width: 100%;
    border: 1px solid gray;
}*/

header{

    padding: 1em;
    color: white;
    background-color: black;
    clear: left;
    text-align: center;
	font-family:verdana;
	border-radius: 15px 50px 30px 5px;
    background: #73AD08;
   /* padding: 20px;
    width: 200px;
    height: 150px;*/
}
footer {
	border-radius:50px 50px 5px 5px;
    padding: 6em;
    color: white;
    background-color: black;
    clear: left;
    text-align: center;
}

nav {
    float: left;
    max-width: 100px;
    margin:0px;
    padding:5em;
	background:#eee;
	height:500px;
	color: black;
	border-radius: 15px 50px;
}
	
}

nav ul {
    list-style-type: none;
    padding: 0;
	
}
   
nav ul a {
    text-decoration: none;
}

article {
	font-size:20;
    text-align:center-left;
	background-color:rgb(0,200,200);
	float:center;
	padding: 5em;
	font-family:verdana;
	border-radius: 15px 50px 30px 5px;
    /* background: #73AD30;
    padding: 20px;
    width: 200px;
    height: 150px;*/
	
}

a{
	font-size:24;
}
button{

border-radius: 25px;
    background: #73AD21;
}

#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: green;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #555;
}

#Btn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: grey;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#Btn:hover {
  background-color: #666;
}

img{
	background:none;
}

</style>
<?php
//let's start the session
session_cache_limiter(false);
session_start();

//now, let's register our session variables
session_register('fever');
session_register('cough');
session_register('flue');
session_register('GBW');
session_register('PITJ');
session_register('Neusea');
session_register('Headache');
session_register('ST');
session_register('AP');
session_register('L.O.A');

//finally, let's store our posted values in the session variables
$_SESSION['fever'] = $_POST['fever'];
$_SESSION['cough'] = $_POST['cough'];
$_SESSION['flue'] = $_POST['flue'];
$_SESSION['GBW'] = $_POST['GBW'];
$_SESSION['PITJ'] = $_POST['PITJ'];
$_SESSION['Neusea'] = $_POST['Neusea'];
$_SESSION['Headache'] = $_POST['Headache'];
$_SESSION['ST'] = $_POST['ST'];
$_SESSION['AP'] = $_POST['AP'];
$_SESSION['L.O.A'] = $_POST['L.O.A'];
?>
</head>
 <body bgcolor="blue">
<nav>
	<h2><b>Please<br><br>check<br><br> all<br><br> the<br><br> statements<br><br>that<br><br> apply<br><br> to<br><br> you.</b></h2>
	</nav>
 <article> 
 <a href="https://api.whatsapp.com/send?phone=+256702851398">
<button onclick="topFunction()" id="myBtn" title="Go to top"><img src="WHATSAPP.jpg" width="50px" height="50px"></img></button>
</a>

<script>
//Get the button
var mybutton = document.getElementById("Btn");

// When the user scrolls down 50px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
  if (document.body.scrollTop > 30 || document.documentElement.scrollTop > 30 ) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function toFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>

<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
 
 <form action="Diagnosis 2.php"  method="POST">
<!--div class="screen-text-header"><h3 ng-bind="question.text" class="ng-binding">select one answer in each row.</h3></div-->
	<h1 style ="font-size:35px"><u>PERPETUAL HABITS AND DISORDERS</u></h1>
	
	<!-- ngIf: question.required -->
	<!--span ng-if="question.required" class="validation-notice notice-info ng-scope" style=""-->
	
	<!-- end ngIf: question.required --><!-- ngRepeat: choice in questionChoices|orderBy:'position' track by choice.position -->
		<div ng-class="{'unanswered': !formFields[choice.id]}" class="question-item ng-scope unanswered" ng-repeat="choice in questionChoices|orderBy:'position' track by choice.position" style=""><p class="name ng-binding"><strong>I am over weight(obese)</p><p2></strong></p2>
	<!--div class="buttons"><input id="choice_187_1000_present" name="choice_187_1000_present" type="radio" value="present" class="radio-input ng-pristine ng-untouched ng-valid ng-empty" ng-model="formFields[choice.id]"></div-->
		
  <input type="radio" name="gender1" value="You are overweight" checked> Yes 
  <input type="radio" name="gender1" value="You are not overweight"> No<br><br>
  <!--input type="radio" name="gender" value="other"> Other</input-->	
	<!-- end ngRepeat: choice in questionChoices|orderBy:'position' track by choice.position -->	
		<div ng-class="{'unanswered': !formFields[choice.id]}" class="question-item ng-scope unanswered" ng-repeat="choice in questionChoices|orderBy:'position' track by choice.position" style=""><p class="name ng-binding"><strong>I smoke Cigarettes</p><p2></strong></p2>
	
  <input type="radio" name="gender2" value="You smoke cigarrettes" > Yes 
  <input type="radio" name="gender2" value="You dont smoke Cigarettes"> No<br><br>
  <!--input type="radio" name="gender" value="other"> Other</input-->	
	<!-- end ngRepeat: choice in questionChoices|orderBy:'position' track by choice.position -->
	
	<div ng-class="{'unanswered': !formFields[choice.id]}" class="question-item ng-scope unanswered" ng-repeat="choice in questionChoices|orderBy:'position' track by choice.position" style=""><p class="name ng-binding"><strong>I have suffered an intense injury recentry</p><p2></strong></p2>
	
  <input type="radio" name="gender3" value="You havent suffered an injury lately"> Yes 
  <input type="radio" name="gender3" value="You have suffered an injury lately">No<br><br>
  <!--input type="radio" name="gender" value="other"> Other</input-->
	
	<!-- end ngRepeat: choice in questionChoices|orderBy:'position' track by choice.position -->	
	<div ng-class="{'unanswered': !formFields[choice.id]}" class="question-item ng-scope unanswered" ng-repeat="choice in questionChoices|orderBy:'position' track by choice.position" style=""><p class="name ng-binding"><strong>My cholestral levels are High</p><p2></strong></p2>
	
  <input type="radio" name="gender4" value="Your cholestral levels are High" > Yes 
  <input type="radio" name="gender4" value="Your cholestral levels arent high"> No
  <input type="radio" name="gender4" value="Your cholestral levels are normal">Normal<br><br>
  
  
  <!--input type="radio" name="gender" value="other"> Other</input-->	
	<!-- end ngRepeat: choice in questionChoices|orderBy:'position' track by choice.position -->
	
	<div ng-class="{'unanswered': !formFields[choice.id]}" class="question-item ng-scope unanswered" ng-repeat="choice in questionChoices|orderBy:'position' track by choice.position" style=""><p class="name ng-binding"><strong>I have hypertention(basing on most recent test)</p><p2></strong></p2>
	
  <input type="radio" name="gender5" value="Your blood pressure is high" > Yes
  <input type="radio" name="gender5" value="Your blood pressure is low"> No
  <input type="radio" name="gender5" value="Your blood pressure is Normal">Normal<br><br>
  
  <!--input type="radio" name="gender" value="other"> Other</input-->  	
   <input type="submit" value="Diagnosis">
</form>   
<br><br>
<div id="container"></div>
		</article>
      <!--/button>
	  <button class="btn btn-link btn-back-footer hidden-print" ng-class="{ 'hidden' : !controls.showPrevious }" ng-disabled="controls.animationInProgress" ng-click="controls.animationInProgress || navigation.previousScreen()" style="">
      
    
  	
	
	<!--li><a href="Disease 3.html">NEXT >></a></li--> <br>
	<footer>
	<!--ul style="float:right">
    <button class="btn btn-link btn-back-footer hidden-print" ng-class="{ 'hidden' : !controls.showPrevious }" ng-disabled="controls.animationInProgress" ng-click="controls.animationInProgress || navigation.previousScreen()" style="">
      
    <b><strong><a style="font-family:verdana" href="Disease 2.html">PREVIOUS<<</a></strong></b><br>
	</button>
	
	
	 <button class="btn btn-link btn-back-footer hidden-print" ng-class="{ 'hidden' : !controls.showPrevious }" ng-disabled="controls.animationInProgress" ng-click="controls.animationInProgress || navigation.previousScreen()" style="">
	<b><strong><a style="font-family:verdana" href="Diagnosis 1.html">See Diagnosis</a></strong></b>
	</button>
	<ul-->
	
	  <button class="btn btn-link btn-back-footer hidden-print" ng-class="{ 'hidden' : !controls.showPrevious }" ng-disabled="controls.animationInProgress" ng-click="controls.animationInProgress || navigation.previousScreen()" 
	style="border-radius:25px 5px 5px 25px;">
      
    <b><strong><a style="font-family:verdana"  href="Disease 2.html">BACK<<</a></strong></b><br>
	</button><br>
	
<button onclick="myFunction()" class="btn btn-link btn-back-footer hidden-print" ng-class="{ 'hidden' : !controls.showPrevious }" ng-disabled="controls.animationInProgress" ng-click="controls.animationInProgress || navigation.previousScreen()" style="">
	<b><strong><a style="font-family:verdana" href="Diagnosis 2.html">See Diagnosis</a></strong></button><br><br>

	<a href="tel:+256702851398">
<button style="background:none;" align="left" ><img src="call 2.jfif" width="50px" height="50px" style="border-radius:30px 30px"></img></button>
</a>
	<b style="align:left";>Developed by Group 16 Recess Term 2020<b><br>
	<b style="color:green;">Copyright &copy; CSAR Technologies<b>

	</footer>
	

	
	 
	
<!--script async
  src="https://pay.google.com/gp/p/js/pay.js"
  onload="onGooglePayLoaded()"></script-->
  
  

</body>
<!--script>
  
/**
 * Define the version of the Google Pay API referenced when creating your
 * configuration
 *
 * @see {@link https://developers.google.com/pay/api/web/reference/request-objects#PaymentDataRequest|apiVersion in PaymentDataRequest}

 */
const baseRequest = {
  apiVersion: 2,
  apiVersionMinor: 0
};

/**
 * Card networks supported by your site and your gateway
 *
 * @see {@link https://developers.google.com/pay/api/web/reference/request-objects#CardParameters|CardParameters}
 * @todo confirm card networks supported by your site and gateway
 */
const allowedCardNetworks = ["AMEX", "DISCOVER", "INTERAC", "JCB", "MASTERCARD", "VISA"];

/**
 * Card authentication methods supported by your site and your gateway
 *
 * @see {@link https://developers.google.com/pay/api/web/reference/request-objects#CardParameters|CardParameters}
 * @todo confirm your processor supports Android device tokens for your
 * supported card networks
 */
const allowedCardAuthMethods = ["PAN_ONLY", "CRYPTOGRAM_3DS"];

/**
 * Identify your gateway and your site's gateway merchant identifier
 *
 * The Google Pay API response will return an encrypted payment method capable
 * of being charged by a supported gateway after payer authorization
 *
 * @todo check with your gateway on the parameters to pass
 * @see {@link https://developers.google.com/pay/api/web/reference/request-objects#gateway|PaymentMethodTokenizationSpecification}
 */
const tokenizationSpecification = {
  type: 'PAYMENT_GATEWAY',
  parameters: {
    'gateway': 'example',
    'gatewayMerchantId': 'exampleGatewayMerchantId'
  }
};

/**
 * Describe your site's support for the CARD payment method and its required
 * fields
 *
 * @see {@link https://developers.google.com/pay/api/web/reference/request-objects#CardParameters|CardParameters}
 */
const baseCardPaymentMethod = {
  type: 'CARD',
  parameters: {
    allowedAuthMethods: allowedCardAuthMethods,
    allowedCardNetworks: allowedCardNetworks
  }
};

/**
 * Describe your site's support for the CARD payment method including optional
 * fields
 *
 * @see {@link https://developers.google.com/pay/api/web/reference/request-objects#CardParameters|CardParameters}
 */
const cardPaymentMethod = Object.assign(
  {},
  baseCardPaymentMethod,
  {
    tokenizationSpecification: tokenizationSpecification
  }
);

/**
 * An initialized google.payments.api.PaymentsClient object or null if not yet set
 *
 * @see {@link getGooglePaymentsClient}
 */
let paymentsClient = null;

/**
 * Configure your site's support for payment methods supported by the Google Pay
 * API.
 *
 * Each member of allowedPaymentMethods should contain only the required fields,
 * allowing reuse of this base request when determining a viewer's ability
 * to pay and later requesting a supported payment method
 *
 * @returns {object} Google Pay API version, payment methods supported by the site
 */
function getGoogleIsReadyToPayRequest() {
  return Object.assign(
      {},
      baseRequest,
      {
        allowedPaymentMethods: [baseCardPaymentMethod]
      }
  );
}

/**
 * Configure support for the Google Pay API
 *
 * @see {@link https://developers.google.com/pay/api/web/reference/request-objects#PaymentDataRequest|PaymentDataRequest}
 * @returns {object} PaymentDataRequest fields
 */
function getGooglePaymentDataRequest() {
  const paymentDataRequest = Object.assign({}, baseRequest);
  paymentDataRequest.allowedPaymentMethods = [cardPaymentMethod];
  paymentDataRequest.transactionInfo = getGoogleTransactionInfo();
  paymentDataRequest.merchantInfo = {
    // @todo a merchant ID is available for a production environment after approval by Google
    // See {@link https://developers.google.com/pay/api/web/guides/test-and-deploy/integration-checklist|Integration checklist}
    // merchantId: '12345678901234567890',
    merchantName: 'Example Merchant'
  };
  return paymentDataRequest;
}

/**
 * Return an active PaymentsClient or initialize
 *
 * @see {@link https://developers.google.com/pay/api/web/reference/client#PaymentsClient|PaymentsClient constructor}
 * @returns {google.payments.api.PaymentsClient} Google Pay API client
 */
function getGooglePaymentsClient() {
  if ( paymentsClient === null ) {
    paymentsClient = new google.payments.api.PaymentsClient({environment: 'TEST'});
  }
  return paymentsClient;
}

/**
 * Initialize Google PaymentsClient after Google-hosted JavaScript has loaded
 *
 * Display a Google Pay payment button after confirmation of the viewer's
 * ability to pay.
 */
function onGooglePayLoaded() {
  const paymentsClient = getGooglePaymentsClient();
  paymentsClient.isReadyToPay(getGoogleIsReadyToPayRequest())
      .then(function(response) {
        if (response.result) {
          addGooglePayButton();
          // @todo prefetch payment data to improve performance after confirming site functionality
          // prefetchGooglePaymentData();
        }
      })
      .catch(function(err) {
        // show error in developer console for debugging
        console.error(err);
      });
}

/**
 * Add a Google Pay purchase button alongside an existing checkout button
 *
 * @see {@link https://developers.google.com/pay/api/web/reference/request-objects#ButtonOptions|Button options}
 * @see {@link https://developers.google.com/pay/api/web/guides/brand-guidelines|Google Pay brand guidelines}
 */
function addGooglePayButton() {
  const paymentsClient = getGooglePaymentsClient();
  const button =
      paymentsClient.createButton({onClick: onGooglePaymentButtonClicked});
  document.getElementById('container').appendChild(button);
}

/**
 * Provide Google Pay API with a payment amount, currency, and amount status
 *
 * @see {@link https://developers.google.com/pay/api/web/reference/request-objects#TransactionInfo|TransactionInfo}
 * @returns {object} transaction info, suitable for use as transactionInfo property of PaymentDataRequest
 */
function getGoogleTransactionInfo() {
  return {
    countryCode: 'US',
    currencyCode: 'USD',
    totalPriceStatus: 'FINAL',
    // set to cart total
    totalPrice: '1.00'
  };
}

/**
 * Prefetch payment data to improve performance
 *
 * @see {@link https://developers.google.com/pay/api/web/reference/client#prefetchPaymentData|prefetchPaymentData()}
 */
function prefetchGooglePaymentData() {
  const paymentDataRequest = getGooglePaymentDataRequest();
  // transactionInfo must be set but does not affect cache
  paymentDataRequest.transactionInfo = {
    totalPriceStatus: 'NOT_CURRENTLY_KNOWN',
    currencyCode: 'USD'
  };
  const paymentsClient = getGooglePaymentsClient();
  paymentsClient.prefetchPaymentData(paymentDataRequest);
}

/**
 * Show Google Pay payment sheet when Google Pay payment button is clicked
 */
function onGooglePaymentButtonClicked() {
  const paymentDataRequest = getGooglePaymentDataRequest();
  paymentDataRequest.transactionInfo = getGoogleTransactionInfo();

  const paymentsClient = getGooglePaymentsClient();
  paymentsClient.loadPaymentData(paymentDataRequest)
      .then(function(paymentData) {
        // handle the response
        processPayment(paymentData);
      })
      .catch(function(err) {
        // show error in developer console for debugging
        console.error(err);
      });
}
/**
 * Process payment data returned by the Google Pay API
 *
 * @param {object} paymentData response from Google Pay API after user approves payment
 * @see {@link https://developers.google.com/pay/api/web/reference/response-objects#PaymentData|PaymentData object reference}
 */
function processPayment(paymentData) {
  // show returned data in developer console for debugging
    console.log(paymentData);
  // @todo pass payment token to your gateway to process payment
  paymentToken = paymentData.paymentMethodData.tokenizationData.token;
}</script-->
</html>