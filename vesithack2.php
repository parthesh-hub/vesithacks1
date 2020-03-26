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
  <form method="post" action="data - Copy.php" class="container"><br><br>
<h3>&#127801--WELCOME--&#127801<br><br>
AUDITORIUM BOOKING<br><br></h3>
<h6>
<p style="color:red;">*  Required<br><br></p>
*username:<input type="text" placeholder="please enter" name="username"><br><br>
Auditorium:<br>Main Auditorium<br>B31<br>B41<br>B51<br><br>
*audiname:<input type="text" placeholder="please enter" name="audiname"><br><br>
*date:<input type="text" placeholder="yyyy-mm-dd" name="date"><br><br>
*starttime:<input type="text" placeholder="Start Time" name="starttime"><br><br>
*endtime:<input type="text" placeholder="End Time" name="endtime"><br><br>
*purpose:<br><input type="text" placeholder="please enter" name="purpose"><br><br>
<input type="submit" value="Submit">
<input type="reset"value="reset"><br><br>
</h6>
<h3>&#127801--THANKS--&#127801<br><br></h3>
</form>
</div>


</body>
</html>

