<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
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
    <ul data-role="listview" data-filter="true" data-input="#myFilter" data-autodividers="true" data-inset="true">
      <li><a href="#">Adele</a></li>
      <li><a href="#">ydele</a></li>
      <li><a href="#">Agnes</a></li>
      <li><a href="#">Albert</a></li>
      <li><a href="#">Billy</a></li>
      <li><a href="#">Bob</a></li>
      <li><a href="#">Calvin</a></li>
      <li><a href="#">Cameron</a></li>
      <li><a href="#">Chloe</a></li>
      <li><a href="#">Christina</a></li>
      <li><a href="#">Diana</a></li>
      <li><a href="#">Gabriel</a></li>
      <li><a href="#">Glen</a></li>
      <li><a href="#">Ralph</a></li>
      <li><a href="#">Valarie</a></li>
    </ul>
  </div>

    <div data-role="footer">
    <h1>Thapanee Thanomwong</h1>
  </div>

</body>
</html>
 