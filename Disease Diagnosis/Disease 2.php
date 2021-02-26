 <!--?php
session_start();
?-->

 <!DOCTYPE html>
 
 <!--?php
 session_cache_limiter(false);
session_start();
 
//now, let's register our session variables
session_register('name');
session_register('name1');
session_register('gender');
session_register('email');
session_register('Onlynumbers');
session_register('Blood Group');

//finally, let's store our posted values in the session variables
$_SESSION['name'] = $_POST['name'];
$_SESSION['name1'] = $_POST['name1'];
$_SESSION['gender'] = $_POST['gender'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['Onlynumbers'] = $_POST['Onlynumbers'];
$_SESSION['blood Group'] = $_POST['blood Group'];

?-->
 <head>
 
  <header>
   <h1>
Health Diagnosis       ||       Keep safe     ||   Live long
 </h1
</header>
<title>Signs AND Symptoms</title>
<nav>
<h1 align="left" style="font-size:50px";><b><strong>Signs<br><br> AND<br><br> Symptoms<br><br></strong></b></h1>
</nav>

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
    background: #73AD30;
   /* padding: 20px;
    width: 200px;
    height: 150px;*/
}
footer {

    padding: 7em;
    color: white;
    background-color: black;
    clear: left;
    text-align: center;
}

nav {
    float: left;
    max-width:200px;
    margin:0px;
    padding:9em;
	background:#eee;
	height: 600px;
	 color: black;
	 border-radius: 15px 50px;
	w3-hover-red;
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
	font-size:24px;
}
h1 {
	font-size:30px;
	text-align:center-left;
}

button  {
`	border-radius: 25px;
    background: #73AD21;
}
label{
	font-size:30px;

}

</style>


 </head>
 <body bgcolor="silver">
 
 <!--p class="tab">Example of a tab</p-->
 <article>
	<h2 style="font-size:40x" style ="color:black"><u><strong>Please select from the list below the symptoms.</strong></u></h2>	
	
	<form action="Disease 3.php"  method="POST">
 <!--input type="radio" name="gender" value="Female">Female
 
 <b>Gender:</b>
<input type="radio" name="gender" value="Female">Female
<input type="radio" name="gender" value="Male">Male
<br><br>-->
	<label><b>Fever</b></label>
	<input type="radio" name="fever" value="Fever"><br><br>
	
	<label><b>Cough</b></label><input type="radio" name="cough" value="Cough"><br><br>
	
	<label><b>Flue</b></label><input type="radio" name="flue" value="Flue"><br><br>
	
	<label><b>General Body Weakness</b></label><input type="radio" name="GBW" value="GeneralBody Weakness"><br><br>
	
	<label><b>Pain In the Joints</b></label><input type="radio" name="PITJ" value="Pain In the Joints"><br><br>
	
	<label><b>Neusea</b></label><input type="radio" name="Neusea" value="Neusea"><br><br>
	
	<label><b>Headache</b></label><input type="radio" name="Headache" value="Headache"><br><br>
	
	<label><b>Sore Throat</b></label><input type="radio" name="ST" value="Sore Throat"><br>
	
	<label><b>Abdomenal pain</b></label><input type="radio" name="A.P" value="Abdomenal Pain"><br><br>
	
	<label><b>Loss of Apetite</b></label><input type="radio" name="L.O.A" value="Loss of Apetite"><br><br>
	
	<input type="submit" value"NEXT">
	</form>
	
	<!--label class="radio-label" for="choice_187_1000_present" ng-click="exportAnswerSelection()"> /*Yes/</label--><input id="choice_187_1000_absent" name="choice_187_1000_absent" type="radio" value="absent" class="radio-input ng-pristine ng-untouched ng-valid ng-empty" ng-model="formFields[choice.id]">
	<!--label class="radio-label" for="choice_187_1000_absent" ng-click="exportAnswerSelection()">/* No*/ </label-->
		<!--input id="choice_187_1000_unknown" name="choice_187_1000_unknown" type="radio" value="unknown" class="radio-input ng-pristine ng-untouched ng-valid ng-empty" ng-model="formFields[choice.id]"></input-->
	<label class="radio-label" for="choice_187_1000_unknown" ng-click="exportAnswerSelection()">I Don't know </label></div></div>
	
	</h2>
	</article>
	
	
	
<!--div class="screen-text-header"><h3 ng-bind="question.text" class="ng-binding">Please check all the statements below that apply to you.</h3></div-->
	
	
	
	
	<!--button class="btn btn-link btn-back-footer hidden-print" ng-class="{ 'hidden' : !controls.showPrevious }" ng-disabled="controls.animationInProgress" ng-click="controls.animationInProgress || navigation.previousScreen()" style="">
      
      <!--/button>
	  <button class="btn btn-link btn-back-footer hidden-print" ng-class="{ 'hidden' : !controls.showPrevious }" ng-disabled="controls.animationInProgress" ng-click="controls.animationInProgress || navigation.previousScreen()" style="">
      
      </button-->
	
	
	<footer>
	<ul style="float:left">
    <button  style="float:left" class="btn btn-link btn-back-footer hidden-print" ng-class="{ 'hidden' : !controls.showPrevious }" ng-disabled="controls.animationInProgress" ng-click="controls.animationInProgress || navigation.previousScreen()" 
	style="border-radius:25px 5px 5px 25px;">
      
    <b><strong><a style="font-family:verdana"  href="Disease 1.html">BACK<<</a></strong></b><br>
	</button>
	
	 <ul style="float:right">
<button type="submit" class="btn btn-link btn-back-footer hidden-print" ng-class="{ 'hidden' : !controls.showPrevious }" ng-disabled="controls.animationInProgress" ng-click="controls.animationInProgress || navigation.previousScreen()" style="">
	<b><strong><a style="font-family:verdana " href="Disease 3.html">NEXT</a></strong></b>
	</button>
	</ul>
 </ul>
  
	<b style="font-size:30px;">Developed by Group 16 Recess Term 2020</b><br>
	<b style="color:green; font-size:15px;"><strong>Copyright &copy; CSAR Technologies</strong></b><br>
	</footer>
 </body>
 
 </html>
 
 
 