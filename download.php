<?php include("header.php"); ?>

<body>

  <div class="container">
    
    <!-- nav header -->
    <div class="masthead">
      <?php topmenu("Download"); ?>
    </div>

    <!-- main page -->
    <div class="row-fluid">
      <div class="span2">
      </div><!--</span2>-->

      <div class="span8">
        <br/>
        <h3>Downloading</h3>
        <p class="pull-right">
          <a href="https://sourceforge.net/projects/amtoolbox/files/latest/download?source=files"><button class="btn btn-large btn-success">Get the latest version</button></a>
        </p>
        <p>You can have a look at the Sourceforge <a href="http://sourceforge.net/projects/amtoolbox/files/">download page</a> to see all available versions,
        or just download the latest one by clicking on the button.</p>

        <br/>
        <h3>Installation</h3>
        <p>To install, simply unpack the package. The models are contained in the 'amtoolbox' directory.</p>
        <p>AMT depends on the <a href="">Large Time-Frequency Analysis Toolbox</a>, which you have to install first. Here again, just download the
        <a href="https://sourceforge.net/projects/ltfat/files/latest/download?source=files">latest version</a>
        and unpack the package. After this add both folders 'amtoolbox' and 'ltfat' to your Matlab/Octave path. Before you can start using the models you have to run
        <pre>ltfatstart;
amtstart;</pre>
        which will add all needed subdirectories to your path.</p>
        <p>After the installation you want to have a look at the <a href="<?php baseurl(); ?>/doc/tutorial.php">beginners tutorial</a>.</p>

        <br/>
        <h3>Development source</h3>
        <p>You can get the development source by accessing the GIT repository.</p>

        <p>Access is possible by the <a href="http://amtoolbox.git.sourceforge.net/git/gitweb.cgi?p=amtoolbox/amtoolbox;a=summary">Web interface</a> or by
        using an GIT client to access the repository at
        <pre>git://amtoolbox.git.sourceforge.net/gitroot/amtoolbox/amtoolbox</pre></p>
      </div><!--</span8>-->
    </div>

    <!-- footer -->
    <?php include("footer.php"); ?>

  </div>

</body>
</html>
<!-- vim: set textwidth=120 ts=2 sw=2: -->
