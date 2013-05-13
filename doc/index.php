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
        <h3>Online documentation</h3>
        <p>On this site you will find an auto-generated documentation of all functions and models included in the Toolbox
        from the help included in the M-files.</p>
        <p>The online documentation is auto-generated from the documentation included in the M-files.
        This is the most complete, and up-to-date description of the toolbox.</p>
        <p>Please access it using the menu on the left as the starting point.</p>
        <p>The M-file documentation is also available as a  <a href="amt.pdf">pdf file.</a></p>
        <p>Further you may have a look at these additional documentation:
        <ul class="inline">
          <li><a href="<?php baseurl(); ?>/doc/tutorial.php"><button class="btn btn-large">Beginners Tutorial</button></a></li>
          <li><a href="<?php baseurl(); ?>/models.php"><button class="btn btn-large">List of included models</button></a></li>
        </ul>
        </p>
        <p>Or you may have a look in to the <a href="<?php baseurl(); ?>/notes">Notes</a> section where you will find different PDF documents like publications
        or other additional information regarding single models.</p>
      </div><!--</span8>-->

      <div class="span2">
      </div><!--</span2>-->

    </div><!--</row-fluid>-->

    <!-- footer -->
    <?php include("../footer.php"); ?>

  </div><!--</container>-->

</div>
</body>
</html>
<!-- vim: set textwidth=120 ts=2 sw=2: -->
