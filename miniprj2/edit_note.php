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
      <?php
         if(isset($_POST['update'])) {
           $link = mysql_connect('localhost','it58160167','it58160167');
            mysql_query("SET NAMES UTF8");
            mysql_select_db('it58160167',$link);
            if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }
            
            $emp_id = $_POST['emp_id'];
            $emp_salary = $_POST['emp_salary'];
            
            $sql = "UPDATE employee ". "SET emp_salary = $emp_salary ". 
               "WHERE emp_id = $emp_id" ;
            mysql_select_db('test_db');
            $retval = mysql_query( $sql, $conn );
            
            if(! $retval ) {
               die('Could not update data: ' . mysql_error());
            }
            echo "Updated data successfully\n";
            
            mysql_close($conn);
         }else {
            ?>
               <form method = "post" action = "<?php $_PHP_SELF ?>">
                  <table width = "400" border =" 0" cellspacing = "1" 
                     cellpadding = "2">
                  
                     <tr>
                        <td width = "100">Employee ID</td>
                        <td><input name = "emp_id" type = "text" 
                           id = "emp_id"></td>
                     </tr>
                  
                     <tr>
                        <td width = "100">Employee Salary</td>
                        <td><input name = "emp_salary" type = "text" 
                           id = "emp_salary"></td>
                     </tr>
                  
                     <tr>
                        <td width = "100"> </td>
                        <td> </td>
                     </tr>
                  
                     <tr>
                        <td width = "100"> </td>
                        <td>
                           <input name = "update" type = "submit" 
                              id = "update" value = "Update">
                        </td>
                     </tr>
                  
                  </table>
               </form>
            <?php
         }
      ?>
      
   </body>
</html>
