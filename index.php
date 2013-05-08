<!doctype html public "-//W3C//DTD html 4.0//EN">
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description"
    content="The Auditory Modelling Toolbox">
  <meta name="keywords"
    content="auditory, modelling, toolbox, matlab">
  <meta name="alias" content="http://amtoolbox.sourceforge.net/">
  <title>Auditory Modelling Toolbox</title>
  <link rel="Bookmark" title="AMToolbox Home Page" href="index.php">
  <link rel="Contents" href="index.php">
  <!-- Styles -->
  <!--<link rel="STYLESHEET" href="include/amtoolbox.css" type="text/css">-->
  <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
  <style>
    body {
      padding-top: 20px;
      padding-bottom: 60px;
    }
    /* Custom container */
    .container {
      margin: 0 auto;
      max-width: 1000px;
    }
    .container > hr {
      margin: 60px 0;
    }
    /* Customize the navbar links to be fill the entire space of the .navbar */
    .navbar .navbar-inner {
      padding: 0;

    }
    .navbar .nav {
      margin: 0;
      display: table;
      width: 100%;
    }
    .navbar .nav li {
      display: table-cell;
      width: 1%;
      float: none;
    }
    .navbar .nav li a {
      font-weight: bold;
      text-align: center;
      border-left: 1px solid rgba(255,255,255,.75);
      border-right: 1px solid rgba(0,0,0,.1);
    }
    .navbar .nav li:first-child a {
      border-left: 0;
      border-radius: 3px 0 0 3px;
    }
    .navbar .nav li:last-child a {
      border-right: 0;
      border-radius: 0 3px 3px 0;
    }
    /* Main marketing message and sign up button */
    .jumbotron {
      margin: 80px 0;
      text-align: center;
    }
    .jumbotron h1 {
      font-size: 100px;
      line-height: 1;
    }
    .jumbotron .lead {
      font-size: 24px;
      line-height: 1.25;
    }
    .jumbotron .btn {
      font-size: 21px;
      padding: 14px 24px;
    }
  </style>
  <link href="css/bootstrap-responsive.css" rel="stylesheet">

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
  <![endif]-->
</head>

<body>


  <div class="container">
    
    <!-- nav header -->
    <div class="masthead">
      <?include("include/topmenu.php");?>
    </div>


    <div class="jumbotron">
      <p><img src="img/jumbotron/roenne.png"></p>
      <!--<h1>Sketch with the models</h1>-->
      <p class="lead">
      The Auditory Modelling Toolbox (AMT) is a new Matlab toolbox intended to
      serve as a common ground for all auditory modelling in Matlab/Octave.
      </p>
      <p>AMT is developed by several auditory research groups,
      mainly situated in Europe.</p>

      <p>The toolbox is <a title="definitions of free and non-free software"
      href="http://www.gnu.org/philosophy/categories.html">Free</a>
    software, released under the GNU General Public License (GPLv3).</p>

      <a class="btn btn-large btn-success" href="https://sourceforge.net/projects/amtoolbox/files/latest/download?source=files">Download AMT</a>
    </div>

    <hr>

    <div class="row-fluid">
      
      <div class="span4">
        <H2>Features</H2>
        <p>AMT provide a complete model chain for the auditory hearing system, ranging from HRTFs to model the outer ear, different filter banks and inner hair cell models, 
        adaptation loops, binaural processing, up to speech intelligibility. In addition to the models presented with references, human data from experiments and scripts
        to reproduce figures from papers are included.</p>
        <p><button class="btn">List of all included models</button></p>
      </div><!--</span4>-->

      <div class="span4">
        <h2>Documentation</h2>
        <p>The models and functions all come with a help messages and references in the M-files.
        You can read the <a href="doc/">documentation included in the M-files online</a>.
        We further provide a tutorial how to start with the toolbox.</p>
        <p><button class="btn">Howto start with the Toolbox</button></p>
      </div><!--</span4>-->
      
      <div class="span4">
        <H2>Development</h2>
        <p>The toolbox is always in development. The current state of the models and model stages in the toolbox is always described
        <a href="notes/amtnote006.pdf">here</a>.</p>
        <p>If you wish to contribute, please check out:<br>
        <ul>
          <li><a href="notes/amtnote003.pdf">The design guide</a></li>
          <li><a href="notes/amtnote001.pdf">Using Git for the project</a></li>
        </ul>
        and in general, have a look at the AMToolbox <a href="notes/">notes</a>.</p>
        <p><a href="http://sourceforge.net/projects/amtoolbox"><button class="btn">Go to Developement page</button></a></p>
      </div><!--</span4>-->

    </div><!--</row-fluid>-->

    <hr>

    <?include("footer.php");?>
  </div><!--</container>-->
</body>
</html>
<!-- vim: set textwidth=120 ts=2 sw=2: -->
