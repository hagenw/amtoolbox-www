<?php
function topmenu($tab)
{
    echo "<h3 class=\"muted\">The Auditory Modelling Toolbox</h3>";
    echo "<div class=\"navbar\">";
    echo "  <div class=\"navbar-inner\">";
    echo "    <div class=\"container\">";
    echo "      <ul class=\"nav\">";
    if ($tab=="Home") {
        echo "        <li class=\"active\"><a href=\"/\">Home</a></li>";
    } else {
        echo "        <li><a href=\"/\">Home</a></li>";
    }
    if ($tab=="Download") {
        echo "        <li class=\"active\"><a href=\"/download.php\">Download</a></li>";
    } else {
        echo "        <li><a href=\"/download.php\">Download</a></li>";
    }
    if ($tab=="Contact") {
        echo "        <li class=\"active\"><a href=\"/contact.php\">Contact</a></li>";
    } else {
        echo "        <li><a href=\"/contact.php\">Contact</a></li>";
    }
    if ($tab=="Documentation") {
        echo "        <li class=\"active\"><a href=\"/doc\">Documentation</a></li>";
    } else {
        echo "        <li><a href=\"/doc\">Documentation</a></li>";
    }
    if ($tab=="Notes") {
        echo "        <li class=\"active\"><a href=\"/notes\">Notes</a></li>";
    } else {
        echo "        <li><a href=\"/notes\">Notes</a></li>";
    }
    if ($tab=="PITU") {
        echo "        <li class=\"active\"><a href=\"/pitu\">PITU</a></li>";
    } else {
        echo "        <li><a href=\"/pitu\">PITU</a></li>";
    }
    echo "        <li><a href=\"http://sourceforge.net/projects/amtoolbox\">Development</a></li>";
    echo "      </ul>";
    echo "    </div>";
    echo "  </div>";
    echo "</div>";
}
