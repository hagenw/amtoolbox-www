<?php

/* setting the base url of the web site */
function baseurl()
{
    return "http://localhost";
}

/* getting the top navigation menu */
function topmenu($tab)
{
    $url=baseurl();
    echo "<h3 class=\"muted\">The Auditory Modelling Toolbox</h3>";
    echo "<div class=\"navbar\">";
    echo "  <div class=\"navbar-inner\">";
    echo "    <div class=\"container\">";
    echo "      <ul class=\"nav\">";
    if ($tab=="Home") {
        echo "        <li class=\"active\"><a href=\"".$url."\">Home</a></li>";
    } else {
        echo "        <li><a href=\"".$url."\">Home</a></li>";
    }
    if ($tab=="Download") {
        echo "        <li class=\"active\"><a href=\"".$url."/download.php\">Download</a></li>";
    } else {
        echo "        <li><a href=\"".$url."/download.php\">Download</a></li>";
    }
    if ($tab=="Contact") {
        echo "        <li class=\"active\"><a href=\"".$url."/contact.php\">Contact</a></li>";
    } else {
        echo "        <li><a href=\"".$url."/contact.php\">Contact</a></li>";
    }
    if ($tab=="Documentation") {
        echo "        <li class=\"active\"><a href=\"".$url."/doc\">Documentation</a></li>";
    } else {
        echo "        <li><a href=\"".$url."/doc\">Documentation</a></li>";
    }
    if ($tab=="Notes") {
        echo "        <li class=\"active\"><a href=\"".$url."/notes\">Notes</a></li>";
    } else {
        echo "        <li><a href=\"".$url."/notes\">Notes</a></li>";
    }
    if ($tab=="PITU") {
        echo "        <li class=\"active\"><a href=\"".$url."/pitu\">PITU</a></li>";
    } else {
        echo "        <li><a href=\"".$url."/pitu\">PITU</a></li>";
    }
    echo "        <li><a href=\"http://sourceforge.net/projects/amtoolbox\">Development</a></li>";
    echo "      </ul>";
    echo "    </div>";
    echo "  </div>";
    echo "</div>";
}
