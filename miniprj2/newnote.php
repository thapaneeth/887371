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
	$(document).ready(function() {
		$("#btn_submit").click(function(event){
			var topic = $("#topic").val();
    	var detail = $("#detail").val();
			$.ajax({
				url: "add_note.php",
				type: "POST",
				data: {topic:topic,detail:detail},
				success: function(data){
					$("#disp").html(data);
				},
				error: function(data){
					$("#disp").html("<h3>Error!</h3>");
				}
			});
		});
		$("#todo").click(function(event){
			$(this).select();
		});
	});
</script>
</head>
<body>
<div data-role="header">
  <a href="main.php" class="ui-btn ui-btn-left ui-corner-all ui-shadow ui-icon-home ui-btn-icon-left">Home</a>
  <h1>New Note</h1>
</div>

<div data-role="main" class="ui-content">
    <form method="post" action="" id="note">
      <div class="ui-field-contain">
        <label for="text" >เรื่อง:</label>
        <input type="text" name="topic" id="topic">       
        <label for="text">รายละเอียด:</label>
        <input type="text" name="detail" id="detail">
      </div>
      <input type="submit" data-inline="true" value="Submit" id="btn_submit">
    </form>
  </div>

</body>
</html>
