<!DOCTYPE html>

<html lang="en">
	<head>
	<style>
		.btn{
			background-color:green;
			width:165px;
			cursor:pointer;
			margin-left:100px;
		}
	</style>
		<meta charset="utf-8">
		<meta content="width=device-width, initial-scale=1.0" name="viewport">
		
		<title>Employee</title>
		
		<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="assets/css/theme.css?v=0.2"/>
	</head>
	<body>
		<h1 style="font-size:50px;font-weight:500;margin-left:200px!important;">Employe Management System</h1>
		<div class="container">    
			<div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
				<div class="panel panel-primary" >
					  <div class="panel-heading">
							<div class="panel-title" style="text-align:center;">Sign In</div>    

						<div style="padding-top:30px" class="panel-body">
								
							<form id="loginform" class="form-horizontal" role="form">
										
								<div style="margin-bottom: 25px" class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
											<input id="username" type="text" class="form-control" placeholder="username">                                        
								</div>
									
								<div style="margin-bottom: 25px" class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
											<input id="password" type="password" class="form-control"  placeholder="password">
								 </div>
						   
								<div style="margin-top:10px" class="form-group">
										<!-- Button -->

										<div class="col-sm-12 controls">
										  <button type="button" class="btn" onclick="login();">Login</button>
										</div>
										<div class="col-sm-12" id="messageBox"></div>
								</div>
							</form>     
						</div>                     
					</div> 
				</div>   
			</div>
		</div>
	</body>
	<script src="assets/js/jquery.min.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	<script>
	
"use strict";

		function login()
		{
			var username  	=	document.getElementById("username").value;
			var password	=	document.getElementById("password").value;
			
			if(username == "" || password == "")
			{
				alert("Enter the both filed!");
				return;
			}

			$.ajax({
				type: "POST",
				url: "controller/common.php?action=checkAuthentication",
				data:{username: username, password: password },
				success: function(response)
				{
					if(response == "1")
					{
						location.href = "dashboard.php";
					}
					else
					{
						document.getElementById("messageBox").innerHTML = "<span class='text-danger'>Login Failed!</span>";
					}
				}
			});
		}
	</script>
</html>
	
	 
 





   
        