<!DOCTYPE html>  
<html>  
<head>  
    <title>Test WIMOVA </title>  
	<script src="http://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/handlebars@latest/dist/handlebars.js"></script>
	<script type="text/javascript" >
     	//http://localhost/php/views/user.php
	    // execute the compiled template and print the output
		 $.ajax({ 
		   method: "GET", 
		   url: "../models/get_users.php",
		 }).done(function( data ) { 
		   // compile the template
		   var template = Handlebars.compile($('#template').html());
			$.each(data, function(i, context) {
				$('table.users').append(template(context));
			});
		 });
	</script>
</head>  
<body>  
 <table class="users">
    <script id="template" type="text/x-handlebars-template">
	        <tr>
				<th>ID</th>
				<th>Firstname</th>
				<th>Lastname</th>
				<th>Contact</th>
				<th>Comment</th>
			</tr>
            <tr>
                 <td>{{id}}</td>
				 <td>{{first_name}}</td>
				 <td>{{last_name}}</td>
				 <td>{{contact}}</td>
				 <td>{{comment}}</td>
            </tr>
    </script>
</table>
 </body>  
</html>  