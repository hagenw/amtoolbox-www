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
  <link rel="stylesheet" href="/css/bootstrap-responsive.min.css" type="text/css">

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

    <!-- main page -->
    <div class="row-fluid">
      <div class="span2">
      </div><!--</span2>-->

      <div class="span8">
          
        <br/>
        <h3>Models included in AMT</h3>

        <p>The goal of AMT is to provide a complete set of models that deal with the auditory hearing system.
        Ranging from the outer ear up to the cortex. On this way there a lot of different steps that can be considered.
        Maybe you are just interested in one part ofthe modeling chain or in the conbination of only specific parts on this
        way. To ensure this AMT is build in a modular fashion that allows to use only some parts of the whole chain and
        combine them in different parts.</p>

        <p>The following table gives you an overview of the currently available models, their position in the auditory
        processing scheme and their corresponding references.</p>

        <p>If you want to contribute your own model, feel free to
        <a href="mailto:amtoolbox-help@lists.sourceforge.net"><i class="icon-envelope"></i> contact us</a>.</p>

        <table class="table table-hover">
          <thead>
              <th>Description</th>
              <th>Functions</th>
              <th>References</th>
            </tr>
          </thead>
          <tbody>
            <tr class="info">
              <td><strong>Pre-processing</strong></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
            <tr>
              <td>
                <strong>Outer ear models</strong> <br/>
                Different HRTF data sets.
              </td>
              <td>
                ARI, TU Berlin, MIT <br/>
                download_hrtfs.m
              </td>
              <td>
                Wierstorf2011 </br>
                Gardner1994
              </td>
            </tr>
            <tr>
              <td>
                <strong>Inner hair cell models</strong> <br/>
                Models that apply half-wave rectification ...
              </td>
              <td>
                innerhaircell.m
              </td>
              <td>
                Meddis1990
              </td>
            </tr>
            <tr class="info">
              <td><strong>Monaural models</strong></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>
                <strong>Adaptation loop</strong> <br/>
                Adaptation loop to simulate ...
              </td>
              <td>
                adaptation.m
              </td>
              <td>
                Dau19xx
              </td>
            </tr>
            <tr class="info">
              <td><strong>Binaural models</strong></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>
                <strong>Lindemann model</strong> <br/>
                Binaural model using a delay line with contralateral inhibition.
              </td>
              <td>
                lindemann1986a.m <br/>
                plotlindemann1986a.m <br/>
                lindemannbincorr.m </br>
              </td>
              <td>
                Lindemann1986a <br/>
                Lindemann1986b
              </td>
            </tr>
            <tr>
              <td>
                <strong>Dietz model</strong> </br>
                Binaural model using a count-comparison model to calculate the interaural phase difference.
              </td>
              <td>dietz2011.m</td>
              <td>Dietz2011</td>
            </tr>
          </tbody>
        </table>

      </div><!--</span8>-->

    </div><!--</row-fluid>-->

    <!-- footer -->
    <?include("include/footer.php");?>
  
  </div><!--</container>-->

</body>
</html>
<!-- vim: set textwidth=120 ts=2 sw=2: -->
