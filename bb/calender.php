<?php
include_once 'layout-templates/header.html';
?>
					<!-- title of content -->
					<h1><b>Event Calender</b></h1>
					<h2>Containing all the important dates.</h2>
				</hgroup>
			</header>
						<!-- content -->

<script type="text/javascript">
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.open("GET","xml-feeds/events.xml",false);
xmlhttp.send();
xmlDoc=xmlhttp.responseXML; 

document.write("<table border='1'><tr><td>Event</td><td>Date</td><td>Time</td><td>Information</td></tr>");
var x=xmlDoc.getElementsByTagName("event");
for (i=0;i<x.length;i++)
  { 
  
  document.write("<tr><td><div id='");
  document.write(x[i].getElementsByTagName("name")[0].childNodes[0].nodeValue);
  document.write("'>");
  document.write(x[i].getElementsByTagName("name")[0].childNodes[0].nodeValue);
  document.write("</td><td>");
  document.write(x[i].getElementsByTagName("date")[0].childNodes[0].nodeValue);
  document.write("</td><td>");
  document.write(x[i].getElementsByTagName("time")[0].childNodes[0].nodeValue);
  document.write("</td><td>");
  document.write(x[i].getElementsByTagName("info")[0].childNodes[0].nodeValue);
  document.write("</td></tr></div>");
  }
document.write("</table>");
</script>
</article>
			<?php 
include_once 'layout-templates/aside.html';
include_once 'layout-templates/footer.html';			
			
			?>