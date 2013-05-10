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

      <div class="span10">
          
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
                <strong>Outer ear</strong> <br/>
                Different head-related transfer function (HRTF) data sets.
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
                <strong>Middle ear</strong> <br/>
                FIR filter approximating the effect of the middle ear
              </td>
              <td>middleearfilter.m</td>
              <td>
                goode1994nkf <br/>
                lopezpoveda2001hnc
              </td>
            <tr>
              <td>
                <strong>Gammatone filters</strong> <br/>
                Gammatone filter bank <br/>
                Rectangular filters <br/>
              </td>
              <td>
                auditoryfilterbank.m <br/>
                gammatone.m <br/>
                may2011gammatone.m
              </td>
              <td>
                aertsen1980strI <br/>
                patterson1988efficient <br/>
                lyon1997all <br/>
                may2011
              </td>
            </tr>
            <tr>
              <td>
                <strong>Gammatone filters with synthesis option</strong> <br/>
                These Gammatone filters allow a reconstruction of the filtered signal.
              </td>
              <td>
                gfb_analyzer_new.m <br/>
                gfb_analyzer_process.m <br/>
                gfb_synthesizer_new.m <br/>
                gfb_synthesizer_process.m <br/>
                demo_hohmannfilterbank.m
              </td>
              <td>
                hohmann2002
              </td>
            </tr>
            <tr>
              <td>
                <strong>Dual Resonance Non-Linear (DRNL) filterbank</strong> <br/>
                DRNL models the basilar membrane non-linearity
              </td>
              <td>
                drnl.m <br/>
                demo_drnl.m
              </td>
              <td>
                meddis2001computational <br/>
                lopezpoveda2001hnc
              </td>
            </tr>
            <tr>
              <td>
                <strong>Verhulst model</strong> <br/>
                Non-linear cochlea model
              </td>
              <td>
                verhulst2012.m
              </td>
              <td>
                verhulst2012
              </td>
            </tr>
            <tr>
              <td>
                <strong>FFT based filter bank</strong> <br/>
                Constant-Q filter bank by averaging the magnitude bins
              </td>
              <td>
                cqdft.m
              </td>
              <td>
                langendijk2002contribution
              </td>
            </tr>
            <tr>
              <td>
                <strong>Third octave filter bank</strong> <br/>
                ??? <br/>
                Is this a filter bank at all?
              </td>
              <td>
                thirdoctrmsanalysis24.m
              </td>
              <td>
                ???
              </td>
            </tr>
            <tr>
              <td>
                <strong>Inner hair cells</strong> <br/>
                Inner hair cells are modelled by an half-wave rectification followed by low pass
                filtering
              </td>
              <td>
                ihcenvelope.m
              </td>
              <td>
                bernstein1999normalized <br/>
                breebaart2001a <br/>
                gabor1946 <br/>
                lindemann1986a <br/>
                dau1996qmeI
              </td>
            </tr>
            <tr class="info">
              <td><strong>Monaural models</strong></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>
                <strong>Adaptation</strong> <br/>
                Models non-linear adaptation to the level of an input sound
              </td>
              <td>
                adaptloop.m <br/>
                demo_adaptloop.m
              </td>
              <td>
                puschel1988pza <br/>
                dau1996qmeI <br/>
                breebaart2001a
              </td>
            </tr>
            <tr>
              <td>
                <strong>Dau model</strong> <br/>
                Modulation filterbank and adaptation loop
              </td>
              <td>
                dau1996preproc.m <br/>
                dau1997preproc.m
              </td>
              <td>
                dau1996qmeI <br/>
                dau1996qmeII <br/>
                dau1997mapI <br/>
                dau1997mapII
              </td>
            </tr>
            <tr>
              <td>
                <strong>Jepsen model</strong> <br/>
                Computes non-linear internal representation of a signal
              </td>
              <td>
                jepsen2008preproc.m
              </td>
              <td>
                jepsen2008cmh
              </td>
            </tr>
            <tr>
              <td>
                <strong>Viemeister model</strong> <br/>
                Leaky-integrator model
              </td>
              <td>
                viemeister79.m
              </td>
              <td>
                ???
              </td>
            </tr>
            <tr>
              <td>
                <strong>Langendijk model</strong> <br/>
                Localization model in the saggital plane
              </td>
              <td>
                langendijk.m <br/>
                likelilangendijk.m <br/>
                plotlangendijk.m <br/>
                plotlikelilangendijk.m <br/>
                exp_langendijk2002.m
              </td>
              <td>
                langendijk2002contribution
              </td>
            </tr>
            <tr>
              <td>
                <strong>Baumgartner model</strong> <br/>
                Model for localization in saggital planes
              </td>
              <td>
                baumgartner2013.m <br/>
                plotbaumgartner2013.m <br/>
                demo_baumgartner2013.m <br/>
                exp_baumgartner2013.m <br/>
                data_baumgartner2013.m
              </td>
              <td>
                baumgartner2013assessment <br/>
                baumgartner2012modelling <br/>
                langendijk2002contribution <br/>
                patterson1988efficient <br/>
                dau1996qmeI
              </td>
            </tr>
            <tr>
              <td>
                <strong>Roenne model</strong> <br/>
                Simulates ABR wave V latency and amplitude
              </td>
              <td>
                roenne2012.m <br/>
                roenne2012chirp.m <br/>
                roenne2012click.m <br/>
                roenne2012tonebursts.m <br/>
                plotroenne2012.m <br/>
                plotroenne2012chirp.m <br/>
                plotroenne2012tonebursts.m <br/>
                exp_roenne2012.m <br/>
                data_roenne2012.m <br/>
                data_elberling2010.m <br/>
                roenne2012_elberling2010stim.mat <br/>
                roenne2012_harte2009stim.mat
              </td>
              <td>
                roenne2012modeling <br/>
                elberling2010evaluating <br/>
                zilany2007representation
              </td>
            </tr>
            <tr>
              <td>
                <strong>Zilany model</strong>
                Humanized auditory nerve model
              </td>
              <td>
                zilany2007humanized.m
              </td>
              <td>
                roenne2012modeling <br/>
                zilany2007representation
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
                Binaural localization model using a delay line with contralateral inhibition.
              </td>
              <td>
                lindemann1986a.m <br/>
                plotlindemann1986a.m <br/>
                lindemannbincorr.m <br/>
                lindcentroid.m <br/>
                demo_lindemann1986a.m <br/>
                exp_lindemann1986.m
              </td>
              <td>
                lindemann1986a <br/>
                lindemann1986b <br/>
                gaik1993combined <br/>
                jeffress1948place <br/>
                hess2007phd
              </td>
            </tr>
            <tr>
              <td>
                <strong>Dietz model</strong> </br>
                Binaural localization model using a count-comparison model to calculate the interaural phase difference.
              </td>
              <td>
                dietz2011.m <br/>
                dietz2011interauralfunctions.m <br/>
                demo_dietz.m <br/>
                exp_dietz2011.m <br/>
                data_dietz2011.m
              </td>
              <td>
                dietz2011auditory
              </td>
            </tr>
            <tr>
              <td>
                <strong>Taakanen model</strong> <br/>
                Physiological motivated localization model using the count-comparison mechanism
              </td>
              <td>
                takanen2013.m (missing)
                takanen2013contracomparison.m <br/>
                takanen2013cueconsistency.m <br/>
                takanen2013directionmapping.m <br/>
                takanen2013formbinauralactivitymap.m <br/>
                takanen2013lso.m <br/>
                takanen2013mso.m <br/>
                takanen2013onsetenhancement.m <br/>
                takanen2013periphery.m <br/>
                takanen2013wbmso.m <br/>
                demo_takanen2013.m <br/>
                exp_takanen2013.m
            <tr>
              <td>
                <strong>Breebart model</strong> <br/>
                Computes the EI-cell representation of an input signal
              </td>
              <td>
                breebart2001preproc.m <br/>
                eicell.m
              </td>
              <td>
                breebaart2001binaural
              </td>
            </tr>
            <tr>
              <td>
                <strong>May model</strong> <br/>
                GMM-based localization model
              </td>
              <td>
                may2011.m <br/>
                may2011neuraltransduction.m <br/>
                demo_may2011.m
              </td>
              <td>
                may2011
              </td>
            </tr>
            <tr>
              <td>
                <strong>Ziegelwanger model</strong> <br/>
                Time of arrival estimation for binaural impulse responses
              </td>
              <td>
                ziegelwanger2013.m <br/>
                ziegelwanger2013onaxis.m <br/>
                ziegelwanger2013offaxis.m <br/>
                plotziegelwanger2013.m <br/>
                exp_ziegelwanger2013.m
              </td>
              <td>
                ziegelwanger2013
              </td>
            </tr>
          </tbody>
        </table>

      </div><!--</span10>-->

    </div><!--</row-fluid>-->

    <!-- footer -->
    <?include("include/footer.php");?>
  
  </div><!--</container>-->

</body>
</html>
<!-- vim: set textwidth=120 ts=2 sw=2: -->