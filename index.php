<!DOCTYPE html>
<html lang="en">
<head>
  <title>Alan Grey's Twitter-Like Feed</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
</head>

<style>
h1, h3 {
    background-color: #9d1212;
    font-family: "Times New Roman", Georgia, Serif;
	color: white;
    padding: 5px;
    letter-spacing: 1px;
}
footer {
	background-color: #9d1212;
    font-family: "Times New Roman", Georgia, Serif;
	color: white;
    padding: 5px;
    letter-spacing: 1px;
	text-align: center;
	
}
body {
	background-color: #2a2a2a;
	height:50px;
}
footer {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color: #9d1212;
    color: white;
    text-align: center;
	

</style>
<body >
<nav class="navbar" style="background-color:black;">
  <div class="container-fluid">
    <div class="navbar-header">
		<a class="navbar-brand" href="#"><span style="color:white;">Alan</span>
		<span style="color:#e11a1a;">Grey</span> 
		<span style="color:white; font-style: italic; ">Tweeter Feed</span></a>
    </div>
  </div>
</nav>


<h3 style="height:100px; text-align: center; font-size:70px;">Upload text documents:</h3>
<form action="output.php" method="post" style="width:800px; margin-left: 7cm;"   class="btn btn-danger" enctype="multipart/form-data">
    <input type="file" name="documents[]" size="50" multiple="multiple" />
    <br>
    <input type="submit" class="btn btn-default" value="Upload File" />
</form>
<br><br>
<footer>Created With Love by Themba shozi</footer>
</body>
</html>