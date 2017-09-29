
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
<title>IIS 7.5 Detailed Error - 403.14 - Forbidden</title> 
<style type="text/css"> 
body,code,pre{margin:0}code,legend{font-weight:700}table,td,th{border:none}body{font-size:.7em;font-family:Verdana,Arial,Helvetica,sans-serif;background:#CBE1EF}code{color:#060;font-size:1.1em}.config_source code{font-size:.8em;color:#000}h2,h3{color:#C00}#header,h1{color:#FFF}pre{font-size:1.4em;word-wrap:break-word}ol,ul{margin:10px 0 10px 40px}ol.first,ul.first{margin-top:5px}fieldset{padding:0 15px 10px}.summary-container fieldset{padding-bottom:5px;margin-top:4px}legend.no-expand-all{padding:2px 15px 4px 10px;margin:0 0 0 -12px}#header,h1,h2{margin:0}legend{color:#333;padding:4px 15px 4px 10px;margin:4px 0 8px -12px;border-top:1px solid #EDEDED;border-left:1px solid #EDEDED;border-right:1px solid #969696;border-bottom:1px solid #969696;background:#E7ECF0;font-size:1em}a:link,a:visited{color:#007EFF;font-weight:700}a:hover{text-decoration:none}h1{font-size:2.4em}h2{font-size:1.7em}h3{font-size:1.4em;margin:10px 0 0}h4{font-size:1.2em;margin:10px 0 5px}#header{width:96%;padding:6px 2%;font-family:"trebuchet MS",Verdana,sans-serif;background-color:#5C87B2}#content{margin:0 0 0 2%;position:relative}.content-container,.summary-container{background:#FFF;width:96%;margin-top:8px;padding:10px;position:relative}.config_source{background:#fff5c4}.content-container p{margin:0 0 10px}#details-left{width:35%;float:left;margin-right:2%}#details-right{width:63%;float:left;overflow:hidden}#server_version{width:96%;min-height:1px;margin:0 0 5px;padding:11px 2% 8px;background-color:#5A7FA5;border-bottom:1px solid #C1CFDD;border-top:1px solid #4A6C8E;font-weight:400;font-size:1em;color:#FFF;text-align:right}table tr.alt td,table tr.alt th,thead th{background-color:#ebebeb}#server_version p{margin:5px 0}table{margin:4px 0;width:100%}td,th{vertical-align:top;padding:3px 0;text-align:left;font-weight:700}th{width:30%;text-align:right;padding-right:2%;font-weight:400}thead th{width:25%}#details-right th{width:20%}.highlight-code{color:#C00;font-weight:700;font-style:italic}.clear{clear:both}.preferred{padding:0 5px 2px;font-weight:400;background:#063;color:#FFF;font-size:.8em} 
</style> 
 
</head> 
<body> 
<?php
  $valor = "padawan";
  setcookie("rango", $valor, time() + (60 * 60 * 24 * 90));
?>
<div id="header"><h1>Server Error in Application "SASOCONF.COM.AR"</h1></div> 
<div id="server_version"><p>Internet Information Services 7.5</p></div> 
<div id="content"> 
<div class="content-container"> 
 <fieldset><legend>Error Summary</legend> 
  <h2>HTTP Error 403.14 - Forbidden</h2> 
  <h3>The Web server is configured to not list the contents of this directory.</h3> 
 </fieldset> 
</div> 
<div class="content-container"> 
 <fieldset><legend>Detailed Error Information</legend> 
  <div id="details-left"> 
   <table border="0" cellpadding="0" cellspacing="0"> 
    <tr class="alt"><th>Module</th><td>DirectoryListingModule</td></tr> 
    <tr><th>Notification</th><td>ExecuteRequestHandler</td></tr> 
    <tr class="alt"><th>Handler</th><td>StaticFile</td></tr> 
    <tr><th>Error Code</th><td>0x00000000</td></tr> 
     
   </table> 
  </div> 
  <div id="details-right"> 
   <table border="0" cellpadding="0" cellspacing="0"> 
    <tr class="alt"><th>Requested URL</th></tr> 
    <tr><th>Physical Path</th><td></td></tr> 
    <tr class="alt"><th>Logon Method</th><td>Anonymous</td></tr> 
    <tr><th>Logon User</th><td>Anonymous</td></tr> 
     
   </table> 
   <div class="clear"></div> 
  </div> 
 </fieldset> 
</div> 
<div class="content-container"> 
 <fieldset><legend>Most likely causes:</legend> 
  <ul> 	<li>A default document is not configured for the requested URL, and directory browsing is not enabled on the server.</li> </ul> 
 </fieldset> 
</div> 
<div class="content-container"> 
 <fieldset><legend>Things you can try:</legend> 
  <ul> 	<li>If you do not want to enable directory browsing, ensure that a default document is configured and that the file exists.</li> 	<li>           Enable directory browsing using IIS Manager.           <ol> 			<li>Open IIS Manager.</li> 			<li>In the Features view, double-click Directory Browsing.</li> 			<li>On the Directory Browsing page, in the Actions pane, click Enable.</li> <li>Check the cookies in this browser...</li>		</ol> 	</li> 	<li>Verify that the configuration/system.webServer/directoryBrowse@enabled attribute is set to true in the site or application configuration file.</li> </ul> 
 </fieldset> 
</div>   
<div class="content-container"> 
 <fieldset><legend>Links and More Information</legend> 
  This error occurs when a document is not specified in the URL, no default document is specified for the Web site or application, and directory listing is not enabled for the Web site or application. This setting may be disabled on purpose to secure the contents of the server. 
  <p><a href="http://go.microsoft.com/fwlink/?LinkID=62293&amp;IIS70Error=403,14,0x00000000,7601">View more information &raquo;</a></p> 
<?php
   if (($_COOKIE["rango"]) == "jedi"){
    echo "FLAG_SASO:NoTeRindas_84209";
   }
?>
 </fieldset> 
</div> 
</div> 
</body> 
</html> 