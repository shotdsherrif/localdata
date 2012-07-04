<?php
ob_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge" >

<script type="text/javascript" src="./js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="./js/localdata.js"></script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>localdata.js</title>
<style type="text/css">
<!--
.clearAll {
	font-size:9px;
	height:1px;
	overflow:hidden;
	position:relative;
	display:block;
	clear:both;
	float:none;
}
.notSelectable {
	-webkit-touch-callout: none;
	-webkit-user-select: none;
	-khtml-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
}
input:focus, textarea:focus, td:focus {
	outline: none;
}
html, body {
	font-family: "Century Gothic", CenturyGothic, "AppleGothic", "Avant Garde", Avantgarde, sans-serif;
	font-size:16px;
	margin:0;
	padding:0;
	overflow-y:scroll;
}
body.hl {
	background-color:#ffffff;
}
pre.hl {
	color:#000000;
	background-color:#ffffff;
	font-size:10pt;
	font-family:'Courier New';
}
.hl.num {
	color:#0000ff;
	font-weight:bold;
}
.hl.esc {
	color:#a31515;
}
.hl.str {
	color:#a31515;
}
.hl.pps {
	color:#0000ff;
}
.hl.slc {
	color:#606060;
}
.hl.com {
	color:#606060;
}
.hl.ppc {
	color:#0000ff;
}
.hl.opt {
	color:#000000;
}
.hl.lin {
	color:#b0b0b0;
}
.hl.kwa {
	color:#0000ff;
}
.hl.kwb {
	color:#0000ff;
}
.hl.kwc {
	color:#2b91af;
}
.hl.kwd {
	color:#2b91af;
}
.hl.kwe {
	color:#000000;
}
span.required {
	color:#C00;
	font-size: 16px;
}
.text_description {
	overflow: auto;
	width:400px;
	height:80px;
}
.medium_size {
	width: 400px;
}
textarea.medium_size {
	overflow: auto;
	height: 80px;
}
select.medium_size {
	width: 407px;
}
select, textarea, input {
	padding: 5px 3px;
	display:inline-block;
	font-size: 14px;
	border: 1px solid #999;
	color:#003F5A;
	font-family: Verdana, Geneva, Arial, Helvetica, sans-serif;
	-moz-border-radius-topleft: 4px;
	-webkit-border-top-left-radius: 4px;
	-khtml-border-top-left-radius: 4px;
	border-top-left-radius: 4px;
	-moz-border-radius-topright: 4px;
	-webkit-border-top-right-radius: 4px;
	-khtml-border-top-right-radius: 4px;
	border-top-right-radius: 4px;
	-moz-border-radius-bottomleft: 4px;
	-webkit-border-bottom-left-radius: 4px;
	-khtml-border-bottom-left-radius: 4px;
	border-bottom-left-radius: 4px;
	-moz-border-radius-bottomright: 4px;
	-webkit-border-bottom-right-radius: 4px;
	-khtml-border-bottom-right-radius: 4px;
	border-bottom-right-radius: 4px;
	margin:5px;
}
select:focus, textarea:focus, input:focus {
	-webkit-box-shadow: 0 0 8px rgba(251, 184, 41, 1) !important;
	-moz-box-shadow: 0 0 8px rgba(251, 184, 41, 1) !important;
	-o-box-shadow: 0 0 8px rgba(251, 184, 41, 1) !important;
	-ms-box-shadow: 0 0 8px rgba(251, 184, 41, 1) !important;
	box-shadow: 0 0 8px rgba(251, 184, 41, 1) !important;
	border: 1px solid #FBB829 !important;
	color:#000 !important;
}
select:hover, textarea:hover, input:hover {
	-webkit-box-shadow: 0 0 4px rgba(153, 153, 153, 1);
	-moz-box-shadow: 0 0 4px rgba(153, 153, 153, 1);
	-o-box-shadow: 0 0 4px rgba(153, 153, 153, 1);
	-ms-box-shadow: 0 0 4px rgba(153, 153, 153, 1);
	box-shadow: 0 0 4px rgba(153, 153, 153, 1);
	border: 1px outset #999;
	color:#000080;
}
input.datepicker {
	background-image:url("/admin/css/images/calendar.png");
	background-repeat:no-repeat;
	background-position:98% center;
}
.zebra_light {
	background-color:#FFFFFF;
}
.zebra_dark {
	background-color:#F9F9F9;
}
.date_size {
	width: 150px;
}
.normal_size {
	width: 300px;
}
.small_size {
	width: 150px;
}
select.small_size {
	width:157px;
}
.new_line {
	clear: both;
	float: none;
	display: block;
}
.small_link {
	font-size:10px;
	text-decoration: none;
	color:#F38630;
}
.small_alert {
	font-size: 11px;
	color:#C00;
	padding: 3px;
	margin:3px;
	clear:both;
	display:block;
}
.form-table {
	width:100%;
}
.form-table td {
	text-align: left;
	vertical-align: top;
	border-bottom: 1px dotted #CCC;
	padding:5px;
	margin:2px;
}
.form-table tr:last-child td {
	padding-bottom:15px !important;
	border-bottom:none !important;
}
.grid_ctrl {
	display: inline-block;
	cursor: pointer;
	background-image: url("/css/default/images/pencil.png");
	background-repeat: no-repeat;
	background-position: 5px center;
	font-size:11px;
	color:#777;
	padding: 4px 6px 4px 26px;
	background-color:#DCDCDC;
}
.grid_ctrl:hover {
	background-color:#FFF;
	background-position: 4px center;
	padding: 3px 5px 3px 25px;
	border-bottom:1px solid #555;
	border-right:1px solid #555;
	border-top:1px solid #FFFFBE;
	border-left:1px solid #FFFFBE;
}
.kendo-list-with-icon {
	padding-left: 26px;
	background-position: 2px center;
	background-repeat: no-repeat;
	display: block;
	margin:2px;
	background-color:none !important;
}
label.error {
	-webkit-box-shadow: 0 0 8px rgba(251, 184, 41, 1);
	-moz-box-shadow: 0 0 8px rgba(251, 184, 41, 1);
	-o-box-shadow: 0 0 8px rgba(251, 184, 41, 1);
	-ms-box-shadow: 0 0 8px rgba(251, 184, 41, 1);
	box-shadow: 0 0 8px rgba(251, 184, 41, 1);
	border: 1px solid #FBB829;
	color:#CD0A0A;
	padding:2px 5px;
	margin:-2px 9px 3px 9px;
	-moz-border-radius-topleft: 4px;
	-webkit-border-top-left-radius: 4px;
	-khtml-border-top-left-radius: 4px;
	border-top-left-radius: 4px;
	-moz-border-radius-topright: 4px;
	-webkit-border-top-right-radius: 4px;
	-khtml-border-top-right-radius: 4px;
	border-top-right-radius: 4px;
	-moz-border-radius-bottomleft: 4px;
	-webkit-border-bottom-left-radius: 4px;
	-khtml-border-bottom-left-radius: 4px;
	border-bottom-left-radius: 4px;
	-moz-border-radius-bottomright: 4px;
	-webkit-border-bottom-right-radius: 4px;
	-khtml-border-bottom-right-radius: 4px;
	border-bottom-right-radius: 4px;
}
.go_button {
	background-color: #F3F3F3;
 filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#FFFFFF', endColorstr='#F3F3F3');
	background: -webkit-gradient(linear, left top, left bottom, from(#FFFFFF), to(#F3F3F3));
	background: -moz-linear-gradient(top, #FFFFFF, #F3F3F3);
	background: -o-linear-gradient(top, #FFFFFF, #F3F3F3);
	background: -ms-linear-gradient(top, #FFFFFF, #F3F3F3);
	background-image: linear-gradient(to bottom, #FFFFFF, #F3F3F3);
	padding: 3px 10px 5px 10px;
	margin:0 5px;
	text-align:center;
	color:#555;
	cursor: pointer;
	-moz-border-radius-topleft: 0px;
	-webkit-border-top-left-radius: 0px;
	-khtml-border-top-left-radius: 0px;
	border-top-left-radius: 0px;
	-moz-border-radius-topright: 0px;
	-webkit-border-top-right-radius: 0px;
	-khtml-border-top-right-radius: 0px;
	border-top-right-radius: 0px;
	-moz-border-radius-bottomleft: 0px;
	-webkit-border-bottom-left-radius: 0px;
	-khtml-border-bottom-left-radius: 0px;
	border-bottom-left-radius: 0px;
	-moz-border-radius-bottomright: 0px;
	-webkit-border-bottom-right-radius: 0px;
	-khtml-border-bottom-right-radius: 0px;
	border-bottom-right-radius: 0px;
}
.go_button:hover {
	background-color: #999;
 filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#999999', endColorstr='#333333');
	background: -webkit-gradient(linear, left top, left bottom, from(#999999), to(#333333));
	background: -moz-linear-gradient(top, #999999, #333333);
	background: -o-linear-gradient(top, #999999, #333333);
	background: -ms-linear-gradient(top, #999999, #333333);
	background-image: linear-gradient(to bottom, #999999, #333333);
	color:#FFF;
}
#z1 {
	position:absolute;
	width:100%;
	height:40px;
	top:0;
	left:0;
	z-index:1;
	background-color:#1D5B7A;
}
#z2 {
	position:absolute;
	width:100%;
	height:auto;
	top:0;
	left:0;
	z-index:2;
}
.hmenu {
	text-decoration:none;
	color:#DBF2DF;
	float:left;
	margin:4px 15px 0 0;
}
.hmenu:hover {
	text-decoration:underline;
}
.hmenu.activ {
	color:#FFF;
	text-decoration:underline;
}
#msg {
	width:500px;
	height:160px;
	overflow:auto;
}
.mbox
{
	width:600px;
	height:auto;
	overflow:auto;
	border:1px dashed #CCC;
	padding:10px;
	float:right;
	margin:10px;
	background-color:#F4F7F2;
	z-index:1;
	white-space: pre; /* CSS 2.0 */
 white-space: pre-wrap; /* CSS 2.1 */
 white-space: pre-line; /* CSS 3.0 */
 white-space: -pre-wrap; /* Opera 4-6 */
 white-space: -o-pre-wrap; /* Opera 7 */
 white-space: -moz-pre-wrap; /* Mozilla */
 white-space: -hp-pre-wrap; /* HP Printers */
 word-wrap: break-word; /* IE 5+ */
}
.mbox:hover
{
	border:1px solid #FC0;
}
.comment_holder
{
	height:auto;
	clear:both;
	margin:10px;
	display:block;
	position:relative;
}
pre
{
	display:block;
}
.rate_box
{
	position:relative;
	float:left;
	width:70px;
	margin:10px 0 0 10px;
}
.rate_up, .rate_down
{
	clear:both;
	height:22px;
	background-image:url(/images/arrows.png);
	background-repeat:no-repeat;
	cursor:pointer;
}
.rate_up
{
		background-position:top left;
}
.rate_down
{
		background-position:top right;
}
.rate_up:hover
{
		background-position:bottom left;
}
.rate_down:hover
{
		background-position:bottom right;
}
.rating
{
	clear:both;
	font-size:24px;
	color:#2C3754;
	text-align:center;
}
.comment_from
{
	width:610px;
	float:right;
	clear:both;
	margin:10px 0 0 0;
}
.mark
{
color:#1D5B7A;
font-style:italic;
font-size:14px;
font-weight:bold;
font-family: Verdana, Geneva, Arial, Helvetica, sans-serif;
}
-->
</style>
</head>
<body>
<div id="z1"></div>
<div id="z2">
  <table id="main_tbl" width="750" cellpadding="5" cellspacing="0" border="0" align="center">
    <tr>
      <td><a class="hmenu" href="./">LOCALDATA.JS</a></td>
    </tr>
    <tr>
      <td>
      <h2>Sample usage for localdata.js</h2>
 
      <p><strong>Store</strong> - <span class="mark">$.localdata("name", "value");</span> <br />
      value can be integer, string, object, array <br />
      $.localdata("name", [1,2,3,4,5]); <br />
      $.localdata("name", {name: "John Dow", email: "john@company.com"}); </p>
         
      <p><strong>Read</strong> - <span class="mark">$.localdata("name");</span> </p>
      <p><strong>Delete One Item By Key</strong> - <span class="mark">$.localdata.remove("name");</span> or $.localdata("name",null,{expires:-1}); </p>
      <p><strong>Delete entire cookie</strong> - <span class="mark">$.localdata.clear();</span> </p>
      <p><strong>Count Stored Items</strong> - <span class="mark">$.localdata.count();</span> </p>
      <p><strong>Force Reload</strong> - <span class="mark">$.localdata.reload();</span> </p>
      <p><strong>Get/Set cookie configuration</strong> - <span class="mark">$.localdata.config()</span> and <span class="mark">$.localdata.config({expires: 'in days', path: 'your new path', domain: 'domain', 'secure': true or false})</span> defaults are expires: 365, path: '/', domain: '', 'secure': ''</p>
      <p><strong>Get/Set cookie prefix</strong> - <span class="mark">$.localdata.prefix()</span> and <span class="mark">$.localdata.prefix("new_prefix_")</span> default is "localdata_cookie_" </p>
      
      
	
  
      
      <h2>PHP: Sample usage for localdata.php</h2>
      <p><strong>Include</strong> - <span class="mark">include('localdata.php');</span> <br />
      <p><strong>Create Object</strong> - <span class="mark">$localdata = localdata::get();</span> <br />
      <p><strong>Store</strong> - <span class="mark">$localdata("name", "value");</span> or  <span class="mark">$localdata->name = "value";</span><br />
      value can be integer, string, object, array <br />
      $localdata("name", array(1,2,3,4,5)); <br />
      $localdata("name", array("name" => "John Dow", "email" => "john@company.com")); </p><br />
      <p><strong>Read</strong> - <span class="mark">$localdata("name");</span> or <span class="mark">$localdata->name</span></p>
      <p><strong>Delete One Item By Key</strong> - <span class="mark">$localdata->remove("name");</span> </p>
      <p><strong>Delete entire cookie</strong> - <span class="mark">$localdata->clear();</span> </p>
      <p><strong>Count Stored Items</strong> - <span class="mark">$localdata->count();</span> </p>
      <p><strong>Get/Set cookie configuration</strong> - <span class="mark">$localdata->config()</span> and <span class="mark">$localdata->config(Array('expires' => 'in days', 'path' => 'your new path', 'domain' => 'domain', 'secure' => true or false})</span> defaults are 'expires' => 365, 'path' => '/', 'domain' => NULL, 'secure' => NULL</p>
      <p><strong>Get/Set cookie prefix</strong> - <span class="mark">$localdata->prefix()</span> and <span class="mark">$localdata->prefix("new_prefix_")</span> default is "localdata_cookie_" </p>
      <input type="text" id="userInput" style="width:160px;" /><input id="write_to_local" type="button" value="write this to localdata" style="cursor:pointer; margin-left:10px;" /><h4>Local Data Object</h4><pre id="before_result"></pre>
      <h4>Local Data Object After Modification from Javascript</h4><pre id="result"></pre><h4>Local Data Object After Modification from PHP</h4><pre id="php_result">
  <?php
  include('localdata.php');
  $localdata = localdata::get();
  $master_object = $localdata("master_object");
  $master_object['php_data'] = array("name" => "John Dow", "email" => "john@company.com", "PHP-rand" => rand(1,1000000));
  $localdata("master_object", $master_object);
  print_r( $localdata("master_object") );
  ?>
      </pre>
      </td>
    </tr>
</table>
</div>
<script type="text/javascript">
/**
 * Function : dump()
 * Arguments: The data - array,hash(associative array),object
 *    The level - OPTIONAL
 * Returns  : The textual representation of the array.
 * This function was inspired by the print_r function of PHP.
 * This will accept some data as the argument and return a
 * text that will be a more readable version of the
 * array/hash/object that is given.
 * Docs: http://www.openjs.com/scripts/others/dump_function_php_print_r.php
 */
 
function dump(arr,level) {
	var dumped_text = "";
	if(!level) level = 0;
	
	//The padding given at the beginning of the line.
	var level_padding = "";
	for(var j=0;j<level+1;j++) level_padding += "    ";
	
	if(typeof(arr) == 'object') { //Array/Hashes/Objects 
		for(var item in arr) {
			var value = arr[item];
			
			if(typeof(value) == 'object') { //If it is an array,
				dumped_text += level_padding + "'" + item + "' ...\n";
				dumped_text += dump(value,level+1);
			} else {
				dumped_text += level_padding + "'" + item + "' => \"" + value + "\"\n";
			}
		}
	} else { //Stings/Chars/Numbers etc.
		dumped_text = "===>"+arr+"<===("+typeof(arr)+")";
	}
	
	return dumped_text;
}

function makeIsoDate(date_obj)
{
	var month = new Array();
	
	var Y = date_obj.getFullYear();
	var m = date_obj.getMonth()+1; 
	var d = date_obj.getDate();
	
	var H = date_obj.getHours();
	var i = date_obj.getMinutes();
	var s = date_obj.getSeconds();
	
	if(m < 10){ m = '0'+m; }
	if(d < 10){ d = '0'+d; }
	if(H < 10){ H = '0'+H; }
	if(i < 10){ i = '0'+i; }
	if(s < 10){ s = '0'+s; }
	
	return Y+'-'+m+'-'+d+' '+H+':'+i+':'+s;
}

$(function()
{
	var before_str = dump($.localdata('master_object'));
	
	$("#before_result").html("Localdata Config: \n"+(dump($.localdata.config()))+"\n $.localdata('master_object') = :\n"+before_str);
	
	var array_1 = [];
	var array_2 = [];
	var array_3 = [];
	
	var createDateTime = makeIsoDate( new Date() );
	
	var UserInput = $.localdata('userinput');
	if(UserInput && UserInput != "undefined")
	{
		$("#userInput").attr("value", UserInput);
	}
	
	for(i=0, loops=Math.round(Math.random()*10)+1; i<loops; i++)
	{
		array_1.push( Math.round(Math.random()*100) );
	}
	
	for(i=0, loops=Math.round(Math.random()*10)+1;i<loops;i++)
	{
		array_2.push( Math.round(Math.random()*100) );
	}
	
	for(i=0, loops=Math.round(Math.random()*10)+1;i<loops;i++)
	{
		array_3.push( Math.round(Math.random()*100) );
	}
	
	var master_object = {'createDateTime':createDateTime, 'UserInput':UserInput, 'array_1':array_1,'array_2':array_2,'array_3':array_1};
	
	$.localdata('master_object', master_object);
	
	var read_str = dump($.localdata('master_object'));
	
	$.localdata.config({expires:182});
	
	$("#result").html("Localdata Config: \n"+(dump($.localdata.config()))+"\n $.localdata('master_object') = :\n"+read_str);
	
	$("#write_to_local").click(function(){
		$.localdata('userinput', $("#userInput").attr("value"));
		document.location = document.location;
	});
});
</script>
</body>
</html>
<?php
ob_end_flush();
?>