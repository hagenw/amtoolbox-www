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
  <title>Documentation</title>
  <link rel="Bookmark" title="AMToolbox Home Page" href="index.php">
  <link rel="Contents" href="index.php">
  <!-- Styles -->
  <!--<link rel="STYLESHEET" href="include/amtoolbox.css" type="text/css">-->
  <link rel="stylesheet" href="../css/bootstrap.css" type="text/css">
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
  </style>
  <link href="../css/bootstrap-responsive.css" rel="stylesheet">

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
  <![endif]-->
</head>

<body>


  <div class="container">
    
    <!-- nav header -->
    <div class="masthead">
      <?include("../include/topmenu.php");?>
    </div>


    <div class="row-fluid">
      <div class="span2">
        <?php include("docnav.php");?>
      </div><!--</span3>-->
      <div class="span10">

      <h2>Online documentation</h2>

        <p>The online documentation is auto-generated from the documentation included in the M-files. This is the most complete, and up-to-date description of the toolbox.</p>

        <p>Please access it using the menu on the left as the starting point.</p>

        <p>The M-file documentation is also available as a  <a href="amt.pdf">pdf file.</a></p>

   <?include("../include/footer.php");?>

</div>
</body>
</html>
<!-- vim: set textwidth=120 ts=2 sw=2: -->
