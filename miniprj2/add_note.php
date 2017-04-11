<?php
$link = mysql_connect('localhost','it58160167','it58160167');
mysql_query("SET NAMES UTF8");
mysql_select_db('it58160167',$link);

//insert new todo
$note_d = date('Y-m-d H:i:s');
$topic = addslashes($_POST['topic']);
$detail =  addslashes($_POST['detail']);
$sql = "INSERT INTO note (note_d, topic, detail) VALUES ('$note_d', '$topic', '$detail');";
mysql_query($sql);

//get data back
$sql = "SELECT * FROM todo ORDER BY id desc";
$result = mysql_query($sql, $link);
$html = "<ol>";
while($obj = mysql_fetch_object($result)){
	$html.="<li>".$obj->topic." ";
    $html.="<li>".$obj->detail." ";
	$html.="<font color='#009900' size='1'>[".$obj->note_d."]</font>";
}
$html.="</ol>";
echo $html;