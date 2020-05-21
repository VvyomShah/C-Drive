<?php include 'includes/connection.php';?>
<?php include 'includes/header.php';?>
<style>
 
    #particles-js{
      background-color: black;
    }
      
    .btn-secondary,
    .btn-secondary:hover,
    .btn-secondary:focus {
      color: black;
      text-shadow: none; /* Prevent inheritance from `body` */
      background-color: #fff;
      border: .05rem solid #fff;
    }

    .site-wrapper {
      display: table;
      width: 100%;
      height: 100%;
      min-height: 100%;    
    }

    .site-wrapper-inner {
      display: table-cell;
      vertical-align: middle;
    }

    .cover-container {
      margin-right: auto;
      margin-left: auto;
    }

    .inner {
      padding: 2rem;
    }

    /*
     * Header
     */

    .masthead {
      margin-bottom: 2rem;
    }

    .masthead-brand {
      margin-bottom: 0;
    }

  /*
   * Affix and center
   */

  @media (min-width: 40em) {
    /* Pull out the header and footer */
    .masthead {
      position: fixed;
      top: 0;
    }
    .mastfoot {
      position: fixed;
      bottom: 0;
    }
    /* Start the vertical centering */
    .site-wrapper-inner {
      vertical-align: middle;
    }
    /* Handle the widths */
    .masthead,
    .mastfoot,
    .cover-container {
      width: 100%; /* Must be percentage or pixels for horizontal alignment */
    }
  }

  @media (min-width: 62em) {
    .masthead,
    .mastfoot,
    .cover-container {
      width: 60rem;
    }
  }

  /* to show the canvas bounds and remove scrollbars caused by it, if applicable */
  canvas {
      display:block;
      background: black;
      position: fixed;
      z-index: -1;
  }

  .site-wrapper {
      position: absolute;
  }

  h1{
    font-size: 60px;
     font-family: 'Sofia';
  }

  p.lead{
    padding-left: 350px;
    padding-top: 20px;
  }

  .btn,
  input[type="submit"]{
    cursor: pointer;
      border-radius: 0px;
      text-decoration: none;
      padding: 12px 18px;
      font-size: 12px;
      line-height: 19px;
      text-transform: uppercase;
      font-family: 'Montserrat', sans-serif; font-weight:400;
      letter-spacing: 3px;
      -webkit-transition: all .4s ease-in-out;
         -moz-transition: all .4s ease-in-out;
          -ms-transition: all .4s ease-in-out;
           -o-transition: all .4s ease-in-out;
              transition: all .4s ease-in-out;
  }

  .btn-mid {
      border-radius: 0px;
      text-decoration: none;
      padding: 14px 21px;
      font-size: 13px;
      line-height: 25px;
      text-transform: uppercase;
      font-family: 'Montserrat', sans-serif; font-weight:400;
      letter-spacing: 3px;
      -webkit-transition: all .4s ease-in-out;
         -moz-transition: all .4s ease-in-out;
          -ms-transition: all .4s ease-in-out;
           -o-transition: all .4s ease-in-out;
              transition: all .4s ease-in-out;
  }


  .btn:hover,
  input[type="submit"]:hover{
      -webkit-transition: all .4s ease-in-out;
         -moz-transition: all .4s ease-in-out;
          -ms-transition: all .4s ease-in-out;
           -o-transition: all .4s ease-in-out;
              transition: all .4s ease-in-out;
  }
  .btn-white{
      border:solid 2px #fff;
      background: transparent;
      color: #fff !important;
  }
  .btn-white:hover{
      border:solid 2px #fff;
      background: #fff;
      color: #1f1f1f !important;
  }

  .btn-dark,
  input[type="submit"]{
      border:solid 2px #1f1f1f;
      background: transparent;
      color: #1f1f1f;
  }
  .btn-dark:hover,
  input[type="submit"]:hover,
  .btn-dark.active{
      border:solid 2px #1f1f1f;
      background: #1f1f1f;
      color: #fff;
  }

  .btn-color{
      background: transparent;
  }
  .btn-color:hover{
      color: #fff;
  }

  #btntest{
    position: fixed;
    padding-left: 1400px;
    padding-top: 10px;
    border-radius: 10;
  }

  #btntest1{
    position: absolute;
    padding-left: 1250px;
    border-radius: 10px;
    padding-top: 10px;
  }

  .navbar-inner {
      background-color:transparent;
  }

</style>



<div id="particles-js">

  <nav class="navbar fixed-top navbar-expand-lg navbar-dark  fixed-top navbar-inner">
      
    <a class="navbar-brand" href="index.php" style="color: white; font-size: 30px;">Blackboard 2.0</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a id="buttontest" class="btn btn-white btn-mid" href="aboutus.php">About Us</a>
        </li>
        &nbsp&nbsp
        <li class="nav-item">
          <a id="buttontest" class="btn btn-white btn-mid" href="signup.php">Register</a>
        </li>
        &nbsp&nbsp
        <li class="nav-item">
          <a id="buttontest" class="btn btn-white btn-mid" href="login.php">Login</a>
        </li>
      </ul>
    </div>
  </nav>
  
  <div class="site-wrapper" id="test">
    <div class="site-wrapper-inner" >
      <div class="cover-container" >
        <div class="inner cover" >
          <h1 class="cover-heading" style="color: white; padding-left: 200px;">Connecting students</h1>
        </div>
      </div>
    </div>

  </div>
</div>

<script type="text/javascript" src="js/particles.min.js"></script>
<script type="text/javascript" src="js/app.js"></script>