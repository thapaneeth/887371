<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <title>Untitled Document</title>

   <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
<script>
$(document).on("pagecreate","#pageone",function(){
  $(document).on("scrollstop",function(){
    alert("Stopped scrolling!");
  });                       
});
</script>
</head>
<body> 
    <div data-role="page" id="pageone" id="pageone" data-theme="a" id="view">
     <div data-role="header">
      <h1>My Note</h1>
      <a href="newnote.php" class="ui-btn ui-btn-right ui-corner-all ui-shadow ui-icon-plus ui-btn-icon-notext ">Insert</a>
    </div> 

    <div data-role="main" class="ui-content">
			<?php
				$link = mysql_connect('localhost','it58160167','it58160167');
				mysql_query("SET NAMES UTF8");
				mysql_select_db('it58160167',$link);
				$sql = "SELECT * FROM note ORDER BY id desc";
				$result = mysql_query($sql, $link);
			 $html.="<div data-demo-html='true'>";
		$html.="<ul data-role='listview' data-inset='true'>";
			$time=$obj->note_d;
				while($obj = mysql_fetch_object($result)){
					if($obj->note_d!=$time){
						$html.="<li data-role='list-divider'>".$obj->note_d."</li>";
					}
					$html.="<li><a href='index.html'>";
					$html.="<h2>".$obj->topic."</h2>";
					$html.=	"<p>".$obj->detail."</p>";
					$html.=	"</a></li>";
					$time=$obj->note_d;
				}
						$html.=	"</ul>";
						$html.=	"</div>";
			echo $html;
		
   



	
			php?>
  </div>
  
    <div data-role="footer">
    <h1>Thapanee Thanomwong</h1>
  </div>

</body>
</html>
 