<?php include("../header.php"); ?>

<body>

  <div class="container">
    
    <!-- nav header -->
    <div class="masthead">
      <?php topmenu("Documentation"); ?>
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
          <li><span class="linkrole"><a href="<?php baseurl(); ?>/doc/amtstart.php">amtstart</a></span> - Start the toolbox</li>
          <li><span class="linkrole"><a href="<?php baseurl(); ?>/doc/amthelp.php">amthelp</a></span> - Help</li>
          <li><span class="linkrole"><a href="<?php baseurl(); ?>/doc/amtbasepath.php">amtbasepath</a></span> - Return the base path</li>
          <li><span class="linkrole"><a href="<?php baseurl(); ?>/doc/amtmex.php">amtmex</a></span> - Compile Mex/Oct interfaces</li>
          <li><span class="linkrole"><a href="<?php baseurl(); ?>/doc/amtredofile.php">amtredofile</a></span> - Utility to work with cached files</li>
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
    <?php include("../footer.php"); ?>

  </div><!--</container>-->

</div>
</body>
</html>
<!-- vim: set textwidth=120 ts=2 sw=2: -->
