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
  <link rel="Bookmark" title="AMToolbox Home Page" href="/index.php">
  <link rel="Contents" href="/index.php">
  <!-- Styles -->
  <!--<link rel="STYLESHEET" href="include/amtoolbox.css" type="text/css">-->
  <link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="/css/style.css" type="text/css">
  <link rel="stylesheet" href="/css/bootstrap-responsive.css" type="text/css">

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
  <![endif]-->
</head>

<body>


  <div class="container">
    
    <!-- nav header -->
    <div class="masthead">
      <?php
        include("../functions.php");
        topmenu("Documentation");
      ?>
    </div>


    <div class="row-fluid">

      <div class="span2">
        <?php include("docnav.php");?>
      </div><!--</span2>-->

      <div class="span8">

        <br/>
        <h3>AMT - Base routines</h3>
        <p>The AMT team, 2012 - 2013.</p>
        <h4>Basic routines</h4>
        <blockquote>
        <ul class="simple">
          <li><span class="linkrole"><a href="/doc/amtstart.php">amtstart</a></span> - Start the toolbox</li>
          <li><span class="linkrole"><a href="/doc/amthelp.php">amthelp</a></span> - Help</li>
          <li><span class="linkrole"><a href="/doc/amtbasepath.php">amtbasepath</a></span> - Return the base path</li>
          <li><span class="linkrole"><a href="/doc/amtmex.php">amtmex</a></span> - Compile Mex/Oct interfaces</li>
          <li><span class="linkrole"><a href="/doc/amtredofile.php">amtredofile</a></span> - Utility to work with cached files</li>
        </ul>
        </blockquote>
        <p>For help, bug reports, suggestions etc. please send email to
        <a class="reference external" href="mailto:amtoolbox-help&#64;lists.sourceforge.net">amtoolbox-help&#64;lists.sourceforge.net</a></p>
      
      </div><!--</span8>-->
      
      <div class="span2">

        <ul class="nav nav-list doc-sidenav affix-top">
          <li><a href=""><b><u>Subtopics:</u></b></a></li>
          <li><a href=""><b>Basic routines</b></a></li>
          <li><a href="amtstart.php"><i class="icon-chevron-left"></i>amtstart</a></li>
          <li><a href="amthelp.php"><i class="icon-chevron-left"></i>amthelp</a></li>
          <li><a href="amtbasepath.php"><i class="icon-chevron-left"></i>amtbasepath</a></li>
          <li><a href="amtmex.php"><i class="icon-chevron-left"></i>amtmex</a></li>
          <li><a href="amtredofile.php"><i class="icon-chevron-left"></i>amtredofile</a></li>
        </ul>
      </div><!--</span2>-->

    </div><!--</row-fluid>-->

    <!-- footer -->
    <?include("../include/footer.php");?>

  </div><!--</container>-->

</div>
</body>
</html>
<!-- vim: set textwidth=120 ts=2 sw=2: -->
