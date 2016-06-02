<!DOCTYPE html>
<html lang="en">


  <head>
		<title>MiDevCon</title>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">


    <!-- facebook graph api -->

    <meta property="og:url"                content="https://www.midevcon.org" />
    <meta property="site_name"               content="Michigan Devcon" />
    <meta property="og:title"              content="Michigan Developer Conference" />
    <meta property="og:description"        content="Coming Soon, a One-day Conference at Oakland University!" />
    <meta property="og:image"              content="http://www.grizzhacks.com/res/og.png" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="main.css" />


<!--google-analytics -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-78675915-1', 'auto');
      ga('send', 'pageview');

    </script>



  </head>



  <body class="jumbotron jumbotron-fluid bg-info ">

    <!-- navbar -->
    <nav class="navbar navbar-dark navbar-fixed-top ">
      <div class="container2 ">
    				<a class="navbar-brand pull-sm-right m-r-0 hidden-xs-down btn-primary-spacing " href="http://www.midevcon.org"> Coming Soon </a>
    	</div>
    </nav><!-- /navbar -->
		<div class="container text-lg-center text-xs-center text-sm-center">

    <h1>  <img src="devcon.png" height="30%" width="30%" class="img-fluid center-block m-b-1 lg-t-8 top-buffer" alt="MDC logo"> </h1>
      <h1 class=" display-9 m-b-4">Michigan Developer Conference <span class="year">2016</span></h1>

			<p class="lead m-b-3">Coming Soon, a One-day Conference at Oakland University!</p>

			<div class="col-lg-6 col-lg-offset-3">

        <form action="https://formspree.io/michigandevcon@gmail.com" method="post">

				<div class="input-group">
					<input type="text" name="email_tickets"class="form-control email-wait" placeholder="Email Me When Tickets Are Available">
          <input type="hidden" name="_next" value="#sponser"  data-toggle="modal" data-target="#sponser" />
          <input type="hidden" name="_subject" value="Email Tickets" />
          <input type="text" name="_gotcha" style="display:none" />
					<span class="input-group-btn">
            <button class="btn btn-primary button_signup" value="send" type="submit">  >  </button>
					</span>
				</div>

      </form>

        <br><br>

        <h5 class=" display-9 m-b-4">Contact Us at <a class="email_link" href="mailto:info@midevcon.org" target="_top">info@midevcon.org</a></h5>
			</div>

      <div class="col-lg-6 col-lg-offset-3 m-t-3 delay">
        <p>
          <button type="button" class="btn btn-primary btn-lg round m-b-1" data-toggle="modal" data-target="#sponser">Become a Sponser</button>
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


           <form action="https://formspree.io/michigandevcon@gmail.com" method="post">
             <input type="hidden" name="_subject" value="Sponser" />
             <input type="hidden" name="_next" value="midevcon.com/" />
             <h5 class="m-b-2 form-text">Basic Info</h5>
             <fieldset class="form-group">
               <label for="name" class="colorfield form-text" class="form-text">Name:</label>
               <input type="text" class="form-control" name="name" id="name">
             </fieldset>
             <fieldset class="form-group">
               <label for="company_name" class="form-text">Company Name:</label>
               <input type="text" class="form-control" name="company_name"id="company_name">
             </fieldset>
             <fieldset class="form-group">
               <label for="mail" class="form-control-label p-l-0 form-text">Email:</label>
               <input type="email" class="form-control form-control-danger" name="email" id="mail">

             </fieldset>


             <fieldset class="form-group">
               <label for="comment" class="form-control-label p-l-0 form-text">Additional Info:</label>
               <input type="text" class="form-control" name="comment" id="comment">

             </fieldset>


             <hr class="m-b-2">

             <input type="text" name="_gotcha" style="display:none" />
             <button type="submit" class="btn btn-primary btn-lg" value="send">Submit</button>

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
          <h4 class="modal-title">Michigan Devcon Speaker</h4>
        </div>
        <div class="modal-body">
          <!-- registration form -->

          <form  action="https://formspree.io/michigandevcon@gmail.com" method="post">
            <input type="hidden" name="_subject" value="Speaker" />
            <input type="hidden" name="_next" value="www.midevcon.com/" />
            <h5 class="m-b-2 form-text">Basic Info</h5>
            <fieldset class="form-group">
              <label for="speaker_name" class="colorfield form-text"class="form-text">Speaker Name:</label>
              <input type="text" class="form-control" name="speaker_name"id="name">
            </fieldset>
            <fieldset class="form-group">
              <label for="Speaker_title" class="form-text">Speaker Qualifications:</label>
              <input type="text" class="form-control" name="qualifications" id="qualify">
            </fieldset>
            <fieldset class="form-group">
              <label for="mail" class="form-control-label p-l-0 form-text">Email:</label>
              <input type="email" class="form-control form-control-danger" name="email" id="mail">

            </fieldset>

            <hr class="m-b-2">
            <input type="text" name="_gotcha" style="display:none" />
            <button type="submit" class="btn btn-primary btn-lg" value="send">Submit</button>

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
