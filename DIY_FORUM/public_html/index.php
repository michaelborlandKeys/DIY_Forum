<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>DIY Forum Index</title>
<!-- This says our CSS is compatible with phones, and phones
         don't need to scale it strangely. -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Main CSS styles for Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Optional theme add-on -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

	<link rel="stylesheet" type="text/css" href="css/custom.css">
    
</head>

<body>
    <!-- Navigation Bar -->  
  <?php include("../resources/nav_bar.php");?>


    <!-- Main Content -->
    <div class="container">
    
        <!-- Container found below menu bar -->
        <div class="below_menu_container">
    <h1>Site Index</h1>
<div class="articles_posting">
	<table class="table table-hover">
	    <tbody>
	        <tr>
	            <td><a href="home.html">Home</a></td>
	            <td>Home page of DIY Forum</td>
	        </tr>
	        <tr>
	            <td><a href="aboutDIYForum.php">About</a></td>
	            <td>All About DIY Forum</td>
	        </tr>
	        <tr>
	            <td><a href="DIY_News.php">News</a></td>
	            <td>Latest news from DIY Forum</td>
	        </tr>
	        <tr>
	            <td><a href="DIY_Videos.php">Videos</a></td>
	            <td>DIY videos from around the web</td>
	        </tr>
	        <tr>
	            <td><a href="DIY_interests.php">Interests</a></td>
	            <td>Discussion page for DIY Forum</td>
	        </tr>
	        <tr>
	            <td><a href="terms_And_Conditions.php">Terms and Conditions</a></td>
	            <td>Terms and conditions</td>
	        </tr>
	      
	         <tr>
	            <td><a href="FAQ.php">FAQ</a></td>
	            <td>FAQ</td>
	        </tr>
	        <tr>
	        	<td><a href="siteRegistrationForm.php">Register</a></td>
	        	<td>Register</td>
	        </tr>
	        <tr>
	        	<td><a href="sign_in_Form.php"> Sign In</a></td>
	        	<td> Sign In</td>
	        	
	        </tr>  
	        <tr>
	            <td><a href="DIY_Forum_Support.php">Support</a></td>
	            <td>Support</td>
	        </tr>
	    </tbody>
	</table>
</div>
	<hr>
		<?php include("../resources/footer.php");?>

</div>
</div>
    <!-- Scripts required to make Bootstrap work better. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>