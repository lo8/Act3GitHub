<!DOCTYPE html>
<html>
   <head>
      <title>The Materialize Dropdowns Example</title>
	  <meta name="viewport" content="width=device-width, initial-scale=1">      
	  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>           
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script> 


  <meta name="viewport" content="width=device-width, initial-scale=1"/>

  <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>
  <link type="text/css" rel="stylesheet" href="materialize/css/style.css">



   </head>
   <body class="container"> 

<h1> Feliz viaje a Soria!!!!!!!!!!!!!!</h1>


<div class="container about">
  <h5>about me</h5>
  <h6>let me introduce my self</h6>
  <hr>
  <div class="row">
    <div class="col s12 m4 l4">
      <h6>Story</h6>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
    <div class="col s12 m4 l4">
      <h6>Profile</h6>
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <img src="http://labs.qnimate.com/portfolio-materialize/images/profile.png" width="64" height="64">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
        </div>
        <div class="card-action">
          <a href="#">Link</a>
          <a href='#'>Link</a>
        </div>
      </div>
    </div>
    <div class="col s12 m4 l4">
      <h6>current jobs</h6>
      <ul class="collapsible">
        <li class="active">
          <div class="collapsible-header"><i class="mdi-av-web"></i>Designer</div>
          <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
        </li>
        <li>
          <div class="collapsible-header"><i class="mdi-editor-format-align-justify"></i>Developer</div>
          <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
        </li>
        <li>
          <div class="collapsible-header"><i class="mdi-av-play-shopping-bag"></i>Video Editor</div>
          <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
        </li>
        <li>
          <div class="collapsible-header"><i class="mdi-editor-insert-comment"></i>Support Asst.</div>
          <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
        </li>
      </ul>
    </div>
  </div>
</div>



<div class="container contact">
  <h5>contact</h5>
  <h6>get in touch with me</h6>
  <hr>
  <div class="row">
    <div class="col s12 m6 l6">
      <div class="row">
        <form class="col s12">
          <div class="row">
            <div class="input-field col s6">
              <input id="first_name" type="text" class="validate">
              <label for="first_name">First Name</label>
            </div>
            <div class="input-field col s6">
              <input id="last_name" type="text" class="validate">
              <label for="last_name">Last Name</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="email" type="email" class="validate">
              <label for="email">E-Mail</label>
            </div>
          </div>
          <textarea class="materialize-textarea" placeholder="Your Message" required></textarea>
          <button class="btn waves-effect waves-light" type="submit" name="action">Submit
            <i class="mdi-content-send right"></i>
          </button>
        </form>
      </div>
    </div>
    <div class="col s12 m6 l6 contact-holder">
      <h6 class="mdi-action-home">Address</h6>
      <p>Nr. 6, 21 Awesome Street, London, UK</p>
      <h6 class="mdi-hardware-phone-android">Phone Number</h6>
      <p>+91 9912776151</p>
      <h6 class="mdi-action-open-in-browser">Website</h6>
      <p>qnimate.com</p>
    </div>
  </div>
</div>


  <!-- jQuery is required by Materialize to function -->
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
  <script type="text/javascript">
    //custom JS code
  </script>

   </body>
</html>
