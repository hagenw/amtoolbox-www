<!DOCTYPE html PUBLIC "-//W3C//DTD html 4.0//EN">
<html>
<head>
<title>Test</title>
<link rel="stylesheet" href="/amtoolbox.css" type="text/css">


<!-- This script and many more are available free online at -->
<!-- The JavaScript Source!! http://javascript.internet.com -->

</script>
<style type="text/css"><!--
#containerul, #containerul ul{
  text-align:left;
  margin:0; /* Removes browser default margins applied to the lists. */
  padding:0; /* Removes browser default padding applied to the lists. */
}

#containerul li{
  margin:0 0 0 30px; /* A left margin to indent the list items and give the menu a sense of structure. */
  padding:0; /* Removes browser default padding applied to the list items. */
  list-style-type:none; /* Removes the bullet point that usually goes next to each item in a list. */
}

#containerul .symbols{ /* Various styles to position the symbols next to the items in the menu. */
  float:left;
  width:12px;
  height:1em;
  background-position:0 50%;
  background-repeat:no-repeat;
}
--></style>

<script type="text/javascript">
<!--
var temp, temp2, cookieArray, cookieArray2, cookieCount;
function initiate(){
  cookieCount=0;
  if(document.cookie){
    cookieArray=document.cookie.split(";");
    cookieArray2=new Array();
    for(i in cookieArray){
      cookieArray2[cookieArray[i].split("=")[0].replace(/ /g,"")]=cookieArray[i].split("=")[1].replace(/ /g,"");
    }
  }
  cookieArray=(document.cookie.indexOf("state=")>=0)?cookieArray2["state"].split(","):new Array();
  temp=document.getElementById("containerul");
  for(var o=0;o<temp.getElementsByTagName("li").length;o++){
    if(temp.getElementsByTagName("li")[o].getElementsByTagName("ul").length>0){
      temp2 = document.createElement("span");
      temp2.className = "symbols";
      temp2.style.backgroundImage = (cookieArray.length>0)?((cookieArray[cookieCount]=="true")?"url(minus.png)":"url(plus.png)"):"url(plus.png)";
      temp2.onclick=function(){
        showhide(this.parentNode);
        writeCookie();
      }
      temp.getElementsByTagName("li")[o].insertBefore(temp2,temp.getElementsByTagName("li")[o].firstChild)
      temp.getElementsByTagName("li")[o].getElementsByTagName("ul")[0].style.display = "none";
      if(cookieArray[cookieCount]=="true"){
        showhide(temp.getElementsByTagName("li")[o]);
      }
      cookieCount++;
    }
    else{
      temp2 = document.createElement("span");
      temp2.className = "symbols";
      temp2.style.backgroundImage = "url(page.png)";
      temp.getElementsByTagName("li")[o].insertBefore(temp2,temp.getElementsByTagName("li")[o].firstChild);
    }
  }
}

function showhide(el){
  el.getElementsByTagName("ul")[0].style.display=(el.getElementsByTagName("ul")[0].style.display=="block")?"none":"block";
  el.getElementsByTagName("span")[0].style.backgroundImage=(el.getElementsByTagName("ul")[0].style.display=="block")?"url(minus.png)":"url(plus.png)";
}

function writeCookie(){ // Runs through the menu and puts the "states" of each nested list into an array, the array is then joined together and assigned to a cookie.
  cookieArray=new Array()
  for(var q=0;q<temp.getElementsByTagName("li").length;q++){
    if(temp.getElementsByTagName("li")[q].childNodes.length>0){
      if(temp.getElementsByTagName("li")[q].childNodes[0].nodeName=="SPAN" && temp.getElementsByTagName("li")[q].getElementsByTagName("ul").length>0){
        cookieArray[cookieArray.length]=(temp.getElementsByTagName("li")[q].getElementsByTagName("ul")[0].style.display=="block");
      }
    }
  }
  document.cookie="state="+cookieArray.join(",")+";expires="+new Date(new Date().getTime() + 365*24*60*60*1000).toGMTString();
}
//-->
</script>



</head>
<body>
   <?php ini_set("include_path",".:/home/groups/c/ca/amtoolbox/htdocs/"); ?>
   <?php require("../topnav.php");?>



<ul id="containerul">
  <li>
    Blog Sites
    <ul>
      <li>
        <a href="http://www.autisticcuckoo.net">Tommy Olsen</a>
      </li>
      <li>
        <a href="http://www.zeldman.com">Jeffrey Zeldman</a>
      </li>
      <li>
        <a href="http://www.meyerweb.com">Eric Meyer</a>
      </li>
    </ul>
  </li>
  <li>
    Other Sites
    <ul>
      <li>
        <a href="http://www.accessify.com/">Accessify</a>
      </li>
      <li>
        <a href="http://www.w3.org/">World Wide Web Consortium</a>
        <ul>
          <li>
            <a href="http://validator.w3.org/">The W3C Markup Validator</a>
          </li>
          <li>
            <a href="http://jigsaw.w3.org/css-validator/">The W3C CSS Validator</a>
          </li>
          <li>
            <a href="http://www.w3.org/TR/WAI-WEBCONTENT/">The Web Content Accessibility Guidelines</a>
          </li>
        </ul>
      </li>
    </ul>
  </li>
</ul>

<script type="text/javascript">
initiate();		// This must be placed immediately after the menu in order to format it properly.
</script>

<p><center>
<font face="arial, helvetica" size"-2">Free JavaScripts provided<br>
by <a href="http://javascriptsource.com">The JavaScript Source</a></font>
</center><p>


<h2>Test</h2>



   <?require("../footer.php");?>

</body>
</html>
