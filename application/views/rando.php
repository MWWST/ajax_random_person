<html>
<head>
	<title>Random Ajax Example</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
 	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
 	<script>
 		$(document).ready(function(){
 			$("#get").click(function(){
 				$.ajax({
 					type:"post",
 					url: "/users/random/",
 					dataType: "json",
 					success: function(getit){
 						console.log(getit);
 						$("#nameage").append("<tr><td>Name:</td><td> " + getit.name + "</td>" +"<td>Age:</td><td>" + getit.age + "</td></tr>");
 					}
 				});

 			});

 		});
		</script>
		<style type="text/css">
		#nameage {
			margin-top: 20px;
		}

		.press {
			margin-top: 50px;
		}
		</style>
</head>
<body>
	<div class="container">
		<div class="row">
			 <div class="col-sm-5 col-sm-offset-5 col-md-6 col-md-offset-2 press"><button class ="btn btn-success" id="get">Via Ajax get a random name and age from the wall</button>
			 </div>
		</div>
		<div class="row">
			 <div class="col-sm-5 col-sm-offset-5 col-md-6 col-md-offset-2">
			 	<table id="nameage" class="table">
			 		
			 	</table>


			 </div>

</body>
</html>