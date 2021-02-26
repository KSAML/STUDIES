<!DOCTYPE html>
<html>
<head><title>Diagnosis</title>
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
    border-radius: 25px;
    background: #73AD21;
    /*padding: 20px;
    width: 200px;
    height: 150px;*/
	
}
footer {

    padding: 5em;
    color: white;
    background-color: black;
    clear: left;
    text-align: center;
}

nav {
    float: center-right;
    max-width: 1000px;
    margin:0px;
    padding:5em;
	background:#eee;
	height:500px;
	color: black;
	border-radius: 15px 50px;
}

nav ul {
    /*list-style-type: none;*/
    padding:0;
	text-align:center-left;
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
	font-size:24px;
}

label{
	font-size:30px;

}

Button{
	border-radius: 25px;
    background: #73AD21;
	}
	table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 0px solid #dddddd;
    text-align: center;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
	
}

li {
	align:left;
}
</style>
</head>
<body bgcolor="light-blue">

<div class="container">

<header>
   <h1>
Health Diagnosis       ||       Keep safe    ||   Live long
 </h1
</header>

<!--nav>
  <ul style="font-size:22px";>
    
    <h1><b><strong>Hello There!<br><br><br>Welcome<br><br><br>We'll take your details first</strong></b></h1>
  </ul>
</nav-->

<article> <!--background-color:rgb(0,200,200)">
<title>Registration Page</title>
<h2> <strong> Please fill out the form below </strong> </h2>
 <!--div "id=reg-form"-->
 <!--form>
 <label for="first name"><b>First Name:</b></label><br>
 <input type="text" name="first name" pattern="[a-z]" placeholder="First Name" required><br><br>
 <label for="Last Name"><b>Other Names:</b></label><br>
 <input type="text" name="Last Name" pattern="[a-z]" placeholder="Other Names" required><br><br>
 
 <label for="gender-Male"><b>Male</b></label>
 <input type="radio" name="Gender-Male" value="choice 1"><br><br>
 
 <label for="gender-Female"><b>Female</b></label>
 <input type="radio" name="Gender-Male" value="choice 2"><br><br>
 


 <label for="Email"><b>Email Address:</b></label><br>
 <input type="Email" name="Email Address" Placeholder="e.g ****@gmail.com"><br><br></input>
 
 <label for="Contact"><b>Contact:<b></label><br>
 <input type="Contact" name="PhoneContact" placeholder="Enter your phone number"><br></input><br>
 
 <label for="Blood Group">Blood Group</label><br>
 <Select placeholder="Group">
 <option value="0" selected disabled>Group</option><br><br>
 <option value="A">A</option>
 <option value="B">B</option>
 <option value="AB">AB</option>
 <option value="O">O</option>
 </select>
 </form> 
 <br><br><br>
 
     <!--li><a href="Disease 3.html">HOMEPAGE</a></li--><br><br-->
</article-->
<b>Welcome: <b> <?php echo $_GET["name"]; ?><br>

<H2>Here is the information you provided</H2>
<nav>

<table>
  <tr>
    <th>Personal Details</th>
    <th align="center">Your Signs and Symptoms</th>
    <th>Personal diseases and habits</th>
  </tr>
  <tr>
    <td align="left">First Name:<?php echo $_POST["name"]; ?><br></td>
    <td><?php echo $_SESSION["fever"]; ?><br></td>
    <td><?php echo $_POST["gender1"]; ?></td>
  </tr>
  <tr>
    <td align="left">Other Names:<?php echo $_POST["name1"]; ?><br></td>
    <td><?php echo $_SESSION["cough"]; ?><br></td>
    <td><?php echo $_POST["gender2"]; ?></td>
  </tr>
  
  <tr>
    <td align="left">Gender:<?php echo $_POST["gender"]; ?><br></td>
    <td><?php echo $_POST["flue"]; ?><br></td>
    <td><?php echo $_POST["gender4"]; ?></td><br>
  </tr>
  <tr>
    <td align="left">Email Address:<?php echo $_SESSION["email"]; ?><br></td>
    <td><?php echo $_SESSION["Pain In the Joints"]; ?><br></td></td>
    <td><?php echo $_POST["gender5"]; ?></td>
  </tr>
  <tr>
    <td align="left">Contact <?php echo $_SESSION["Onlynumbers"]; ?></td>
    <td><?php echo $_POST["Neusea"]; ?><br></td></td>
	<td></td><?php echo $_POST["gender3"]; ?>
    <td></td>
  </tr>
  <tr>
    <td align="left">Blood-group: <?php echo $_SESSION["blood Group"]; ?></td>
    <td><?php echo $_POST["Headache"]; ?><br></td></td>
    <td></td>
  </tr>
  <tr>
    <td align="left"> </td>
    <td font-size="20px"><?php echo $_GET["Loss of Apetite"]; ?><br></td></td>
    <td></td>
  </tr>

</table>

<h2>Recommendations</h2>
<ol style="list-style-type:disc" align="center-left">
<li>Decrease you tobbacco?cigarette use.</li>
<li>See councilor to help you quit the habbit</li>
<li>You need to engage in more high energy activities as well as energy givving foods</li>
<li>Include more fruit and vegetable on t your menue.</li>

</ol>
</nav>
<h1><b>Basing on the information provided,<br> You are most likely suffering from:<h1> COVID-19</h1><br><b> Or else you have a bacterial infection </b></h2>
</article>

<div id="container"></div>

<footer>
<ul style="float:center">
<button class="btn btn-link btn-back-footer hidden-print" ng-class="{ 'hidden' : !controls.showPrevious }" ng-disabled="controls.animationInProgress" ng-click="controls.animationInProgress || navigation.previousScreen()" style="">
	<b><strong><a style="font-family:verdana " href="Disease 1.html">Take review again</a></strong></b>
	</button><br><br>
	</ul>

<b style="align:left";>Developed by Group 16 Recess Term 2020<b><br>
	<b style="color:green;">Copyright © CSAR Technologies<b>
</footer>

</div>

<script async  src="https://pay.google.com/gp/p/js/pay.js"
  onload="onGooglePayLoaded()">
  </script>  
</body>
<script>
  
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
  }
</script>
<!-- Mirrored from www.w3schools.com/html/tryit.asp?filename=tryhtml_layout_float by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Nov 2016 06:14:55 GMT -->
</html>