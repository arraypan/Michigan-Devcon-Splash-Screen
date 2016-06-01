<?php


$user = 'root';
$password = 'root';
$db = 'inventory';
$host = 'localhost';
$port = 8889;

$link = mysql_connect(
   "$host:$port",
   $user,
   $password
);
$db_selected = mysql_select_db(
   $db,
   $link
);



?>




<!DOCTYPE html>
<html lang="en">


<script src="https://www.gstatic.com/firebasejs/live/3.0/firebase.js"></script>
<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyBlgOC-prxWOsLmSHAXPuu6sj9v9PrEmvY",
    authDomain: "midevcon.firebaseapp.com",
    databaseURL: "https://midevcon.firebaseio.com",
    storageBucket: "midevcon.appspot.com",
  };
  firebase.initializeApp(config);
</script>



  <head>
		<title>MiDevCon</title>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="main.css" />

  </head>



  <body class="jumbotron jumbotron-fluid bg-info ">

    <!-- navbar -->
    		<nav class="navbar navbar-dark navbar-fixed-top ">
    			<div class="container2 ">

    				<a class="navbar-brand pull-sm-right m-r-0 hidden-xs-down btn-primary-spacing " href="http://www.midevcon.org"> Coming Soon </a>
    			</div>


    		</nav><!-- /navbar -->
		<div class="container text-lg-center text-xs-center text-sm-center">

    <h1>  <img src="devcon.png" height="40%" width="40%" class="img-fluid center-block m-b-1 lg-t-8 top-buffer" alt="MDC logo"> </h1>


      <h1 class=" display-9 m-b-4">Michigan Developer Conference <span class="year">2016</span></h1>
			<p class="lead m-b-3">Coming Soon, a One-day Conference at Oakland University!</p>

			<div class="col-lg-6 col-lg-offset-3">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Email Me When Tickets Are Available">
					<span class="input-group-btn">

<button class="btn btn-primary" type="button">  >  </button>

					</span>


				</div>
        <br>
        <br>

        <h5 class=" display-9 m-b-4">Contact Us at info@midevcon.org</h5>
			</div>



      <div class="col-lg-6 col-lg-offset-3 m-t-3">
        <p>
          <button type="button" class="btn btn-primary btn-lg round m-b-1 " data-toggle="modal" data-target="#sponser">Become a Sponser</button>

          <button type="button" class="btn btn-primary btn-lg round m-b-1"  data-toggle="modal" data-target="#speaker">Become a Speaker</button>
        </p>

      </div>


		</div>

    <!--===================================
     Sponser MODAL
   ====================================-->

   <div id="sponser" class="modal fade">
     <div class="modal-dialog" role="document">
       <div class="modal-content">
         <div class="modal-header bg-info">
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
           <h4 class="modal-title">Michigan Devcon 2016 Sponser</h4>
         </div>
         <div class="modal-body">
           <!-- registration form -->


           <form>
             <h5 class="m-b-2 form-text">Basic Info</h5>
             <fieldset class="form-group">
               <label for="name" class="colorfield form-text" class="form-text">Name:</label>
               <input type="text" class="form-control" id="name">
             </fieldset>
             <fieldset class="form-group">
               <label for="company_name" class="form-text">Company Name:</label>
               <input type="text" class="form-control" id="company_name">
             </fieldset>
             <fieldset class="form-group">
               <label for="mail" class="form-control-label p-l-0 form-text">Email:</label>
               <input type="email" class="form-control form-control-danger" id="mail">

             </fieldset>


             <fieldset class="form-group">
               <label for="comment" class="form-control-label p-l-0 form-text">Additional Info:</label>
               <input type="text" class="form-control" id="company_name">

             </fieldset>


             <hr class="m-b-2">
             <button type="submit" class="btn btn-primary btn-lg">Submit</button>

           </form><!-- /registration form -->
         </div>
       </div><!-- /.modal-content -->
     </div><!-- /.modal-dialog -->
   </div><!-- /.modal -->





   <!--===================================
    Sponser MODAL
  ====================================-->

  <div id="speaker" class="modal fade">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header bg-info">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h4 class="modal-title">Midevcon Speaker</h4>
        </div>
        <div class="modal-body">
          <!-- registration form -->


          <form>
            <h5 class="m-b-2 form-text">Info</h5>
            <fieldset class="form-group">
              <label for="speaker_name" class="colorfield form-text" class="form-text">Speaker Name:</label>
              <input type="text" class="form-control" id="name">
            </fieldset>
            <fieldset class="form-group">
              <label for="Speaker_title" class="form-text">speaker qualifications:</label>
              <input type="text" class="form-control" id="company_name">
            </fieldset>
            <fieldset class="form-group">
              <label for="mail" class="form-control-label p-l-0 form-text">Email:</label>
              <input type="email" class="form-control form-control-danger" id="mail">

            </fieldset>

            <hr class="m-b-2">
            <button type="submit" class="btn btn-primary btn-lg">Submit</button>

          </form><!-- /registration form -->
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->


    <!-- jQuery Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
  </body>
</html>
