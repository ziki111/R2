
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
<link rel="stylesheet"
href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-
beta.2/css/bootstrap.min.css" integrity="sha384-
PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb"
crossorigin="anonymous">
</head>
<style>
	h2{
	margin:30px 0 0 0;
	text-align:center;
	}
	#type, #type_2,#type_3{
		margin:9px 0px 0px -17px;
	}

	form{
		width:500px;
		margin-left:auto;
		margin-right:auto;
	}
</style>
<body>
	 <div class="container mt-4">
 		<h2>ФОРМА КОММЕНТАРИЕВ</h2><br>
 		<form action = "php3.php"  method="post">
 			<h6>Имя:</h6><input type="text" class= "form-control" name="name" id ="name" placeholder="введите имя"><h6 id ="n1"></h6><br>
 			<h6>email:</h6><input type="text" class= "form-control" name="email" id ="email" placeholder="введите email"><h6></h6><br>
 			<h6>site:</h6><input type="text" class= "form-control" name="site" id ="site" placeholder="введите site"><br><h6></h6>
 			<h6>комментарий:</h6><textarea id="comm" name = "comm"maxlength="255" class="form-control"
				placeholder="комментарий"></textarea><br><h6></h6>
 			<button class = "btn btn-success" type = "submit" onclick="check()" >отправить</button>
 		</form>
 	</div>
</body>
</html>


