
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.bg-img {
 
  background-image: url("audiaudi.jpg");

  min-height: 1300px;

  
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}


.container {
  position: absolute;
  right:0;
  margin: 20px;
  max-width: 900px;
  padding: 16px;
  background-color: white;
  justify-content:center;
}


input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}


.btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
</style>
</head>
<body>


<div class="bg-img">
 <form action="process.php" method="POST" class="container" >
			<p>
				<label><b>Email Id</b></label>
				<input type="text" id="user" name="user">
			</p>
			<p>
				<label><b>Password</b></label>
				<input type="password" id="pass" name="pass">
			</p>
			<p>
				<input type="submit" id="btn" name="Login" class="btn">
			</p>
			
		</form>
</div>


</body>
</html>



		
