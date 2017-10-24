<!DOCTYPE html>
<html lang="en">
<head>
  <title>Alan Grey</title>
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
		</a>
    </div>
  </div>
</nav>


<h3 style="height:100px; text-align: center; font-size:70px;">Tweeter feed</h3>
<?php
if(isset($_FILES['documents'])) {
    $num_of_files = count($_FILES['documents']['name']);
    for($i = 0; $i < $num_of_files; $i++) {
		
        $tmp = $_FILES['documents']['tmp_name'][$i];
		$uploaddir = 'uploads/';
		$uploadfile = $uploaddir . basename($_FILES['documents']['name'][$i]);

		//uploads files to local directory named uploads
		if (move_uploaded_file($_FILES['documents']['tmp_name'][$i], $uploadfile)) {
			
			
		} else {
			echo "Possible file upload attack!\n";
		}
		
    }
	//Opens the Users file and split unwanted characters
	$filename = fopen("uploads/user.txt","r") or die ("Unable to open file");
	$names = preg_split('/" "| follows |, |\n/',fread($filename,filesize("uploads/user.txt")));
	
	//filter spaces in array
	$names = array_filter(array_map('trim',$names));
	
	//uniquely identifies each name
	$names = array_unique($names);
	
	//sort array in an alphabetical order
	sort($names);
	
	//Prints individual user vertical in an alphabetical order
	$nameLength = 0;
	$nameLength = count($names);
	for ($x = 0; $x < $nameLength; $x++){
		echo '<font color="red" style="margin-left:1cm; font-size:25px; ">'.$names[$x]."<br><br>".'</font>';
		//Opens the tweets file and split unwanted characters
		$tweets = fopen("uploads/tweet.txt","r") or die ("Unable to open file");
	
		while(!feof($tweets)){
			
			/*Tracks the followers on the user file, 
			with the assumption that every recently use followed is in the left most side of the followed list*/
			$follows = false;
			$filename = fopen("uploads/user.txt","r") or die ("Unable to open file");
			$track_followers = preg_split('/, |\n/',fread($filename,filesize("uploads/user.txt")));
			$line = fgets($tweets);
			
			$user_tweet = preg_split('/>/', $line)[0];
			if($user_tweet == $names[$x]){
				//replaces the ">" with ":"
				$line = str_replace('>',':', $line);
				
				//limits tweet to 120 characters
				$line = wordwrap($line, 120);
				echo '<font color="white" style="margin-left:2cm;">'."@".$line."<br>".'</font>';
			}
			for($i=0; $i < sizeof($track_followers); $i++){
				 //Disply the tweets for users that the user follows
				if(trim($names[$x]." follows ".$user_tweet) ==  trim($track_followers[$i])){
					
					//replaces the ">" with ":"
					$line = str_replace('>',':', $line);
					
					//limits tweet to 120 characters
					$line = wordwrap($line, 120);
					echo '<font color="white" style="margin-left:2cm;">'."@".$line."<br>".'</font>';
				}
			}
		}
		echo "<br>";	
	}	
	fclose($filename);		
}
?>
<footer >Created With Love by Themba shozi</footer>
</body>
</html>