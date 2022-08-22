<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>BingeFlix</title>
    <link rel="icon" href="https://img.icons8.com/wired/64/000000/tv-show.png"/>
    <link rel="stylesheet" href="CSS/CategoryOnClick.css">
</head>
<body style="
             background: url(https://images-na.ssl-images-amazon.com/images/S/pv-target-images/05c7f3035a549703a341a6d4152b574edba78b87cd76d7d9adac48a74bba92f2._RI_.jpg) no-repeat center center fixed; 
             -webkit-background-size: cover;
             -moz-background-size: cover;
             -o-background-size: cover;
             background-size: cover;">
    <h1>The Family Man</h1><br><br><br><br><br><br>
       <pre>
            The Family Man is an edgy action-drama series, which tells the story of a
            middle-class man who works for a special cell of the National Investigation Agency.
            While he tries to protect the nation from terrorists, he also has to protect his
            family from the impact of his secretive, high-pressure, and low paying job.
            Starring            Manoj Bajpayee, Priyamani, Sharib Hashmi
            Genres	        Action and Adventure, Drama
            Audio languages	Hindi
       </pre><br><br><br><br><br><br><br><br><br>
    <h2>IMDb 8.6</h2><br>
	<br><br>
	<?php
  echo "<h2 style='display:inline;'>User Ratings</h2><h2 style='display:inline;'>".round($_SESSION['AvgRating'],2)."</h2>" ;
  ?>
	<br><br><br>
    <label for="Trailer">Click here for the  </label>
    <input type="button" id="Trailer" name="Trailer" value="Trailer" onclick="iframe()">
    <div id="demo"></div>
    <script type="text/javascript">
        function iframe(){
              document.getElementById("demo").innerHTML = "<iframe width=\"700\" height=\"394\" src=\"https://www.youtube.com/embed/XatRGut65VI\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>";
              document.body.style.background='black';
        }
    </script><br>
        <label for="Season">Seasons Available : </label>
    <select id="Season" name="Season">
        <option value="Season 1">Season 1</option>
    </select>
	<br><br><br>
	<form name="form" id="myForm" method="POST" action="Rate69.php">
			<h2>Your Ratings</h2><br></br>
			<h2>Ratings: <input type="range" id="myRange" name="ratings" min="0" max="5"  step="0.1"></h2>
			<h2><p>Value: <span id="demo1" ></span></p><br></br></h2>
			<input type="submit" class="button1" value="Submit" name="action_button"><br></br>
			</form>
<script>
	var slider = document.getElementById("myRange");
	var output = document.getElementById("demo1");
	output.innerHTML = slider.value;

	slider.oninput = function() {
	output.innerHTML = this.value;
}

</script>
</body>
</html>