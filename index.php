<!doctype html public "-//W3C//DTD html 4.0//EN">
<html><head>
<meta name="description"
      content="The Auditory Modelling Toolbox">

<meta name="keywords"
      content="auditory, modelling, toolbox, matlab">
<meta name="alias" content="http://amtoolbox.sourceforge.net/">
<title>Auditory Modelling Toolbox</title>
<link rel="Bookmark" title="AMTOOLBOX Home Page" href="index.php">
<link rel="Contents" href="index.php">
<link rel="STYLESHEET" href="amtoolbox.css" type="text/css">
</head>
<body TEXT="#000000" BGCOLOR="#FFFFFF">

   <?require("topnav.php");?>

<table><tr valign=top><td>
<div class="sidebar">
   <?php require("/home/groups/a/am/amtoolbox/htdocs/doc/docnav.php");?>
</div></td><td>

<H2>Introduction</H2>

The Auditory Modelling Toolbox (AMT) is a new Matlab toolbox intended to serve as a common ground for all auditory modelling in Matlab.<p>

AMT is developed by a several auditory research groups, mainly situtated in Europe.<p>

The toolbox is <a title="definitions of free and non-free software"
href="http://www.gnu.org/philosophy/categories.html">Free</a>
software, released under the GNU General Public License (GPLv3).<br>

<H2><A NAME="features">Features and models</A></H2>

<ul>

<li>Several types of gammatone IIR filters (pole-zero and all-pole)</li>
<li>RMS to dB conversion</li>
<li>Inner hair cell envelope extraction models (Meddis, Dau, Bernstein etc.)</li>
<li>Adaptation loops by Puschel used by Dau and Breebart</li>
<li>Modulation filterbank from Dau et al. 1997a</li>
<li>DRNL Dual Resonance Non-Linear filterbank</li>
<li>Lindemann model complete with experiment and human data</li>
<li>Dau1996, Dau1997 and Jepsen2008 monaural masking models</li>
<li>Breebaart 2001 binaural detection model</li>
<li>Jelfs 2011 binaural speech intelligibility advantage model</li>
<li>Langendijk & Bronkhorst 2002 localization in the median plane</li>
<li>Human data from selected papers</li>
<li>Experiments from selected papers</li>

</ul>


<H2><A NAME="documentation">Documentation</A></H2>

You can read the <a href="doc/">documentation included in the M-files online</a><p>

<H2><a name="development">Development</a></h2>

     The toolbox is in a early stage of development. If you wish to contribute, please check out:<br>
<ul>
<li><a href="http://sourceforge.net/projects/amtoolbox">The development page</a></li>
<li><a href="notes/amtnote003.pdf">The design guide</a></li>
<li><a href="notes/amtnote001.pdf">Using Git for the project</a></li>
</ul>
   and in general, have a look a the AMToolbox <a href="notes/">notes</a>.

</td></tr></table>

   <?require("footer.php");?>

</body>
</html>
