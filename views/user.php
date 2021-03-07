<!DOCTYPE html>  
<html>  
<head>  
    <title>Test</title>  
	<link href="./css/user.css" rel="stylesheet" type="text/css">
	<script src="http://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/handlebars@latest/dist/handlebars.js"></script>
	<script type="text/javascript" >
	    // execute the compiled template and print the output
		 $.ajax({ 
		   method: "GET", 
		   url: "../models/get_users.php",
		 }).done(function( data ) { 
		   // compile the template
 		    var template = Handlebars.compile($('#template').html());
			$.each(data, function(i, context) {
				//change bit to boolean value to display correct profile photo
				if(context.gender==1){
					context.gender=true;}
			    else{
					context.gender=false;}
				$('div.users').append(template(context));
			});
		 });
	</script>
</head>  
<body>  
	<div class="users">
		<script id="template" type="text/x-handlebars-template">
			<div class="card">
			      <img src="./images/{{#if gender}}girl.png{{else}}boy.png{{/if}}" alt="{{id}}" width="100%"/>
				  <h1>{{first_name}} {{last_name}}</h1>
				  <p class="title">{{job}}</p>
				  <p>{{comment}}</p>
				  <p><button>{{contact}}</button></p>
				  
			</div>
		</script>	
	</div>
 </body>  
</html>  