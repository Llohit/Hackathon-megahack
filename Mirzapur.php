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
            background: url(https://images-na.ssl-images-amazon.com/images/S/pv-target-images/71fb9fa71c1f9d437b0189ca3a2f2ea7383136d4269e9e7db127c15e8548e990._RI_V_TTW_.jpg) no-repeat center center fixed; 
             -webkit-background-size: cover;
             -moz-background-size: cover;
             -o-background-size: cover;
             background-size: cover;">
    <h1>Mirzapur</h1><br><br><br><br><br>
       <pre> 
            The iron-fisted Akhandanand Tripathi is a millionaire carpet exporter
            and the mafia don of Mirzapur. His son, Munna, is an unworthy, power
            hungry heir who will stop at nothing to inherit his father’s legacy.
            An incident at a wedding procession forces him to cross paths with
            Ramakant Pandit, an upstanding lawyer, and his sons, Guddu and Bablu.
            Starring	        Ali Fazal, Vikrant Massey, Pankaj Tripathi
            Genres	        Action and Adventure, Drama
            Audio languages	Hindi
       </pre><br><br><br><br><br><br><br><br><br><br><br><br>
    <h2>IMDb 8.5</h2><br>
	<br><br>
	<?php
  echo "<h2 style='display:inline;'>User Rating  </h2><h2 style='display:inline;'>".round($_SESSION['AvgRating1'],2)."</h2>" ;
  ?>
	<br><br><br>
    <label for="Trailer">Click here for the  </label>
    <input type="button" id="Trailer" name="Trailer" value="Trailer" onclick="iframe()">
    <div id="demo"></div>
    <script type="text/javascript">
        function iframe(){
              document.getElementById("demo").innerHTML = "<iframe width=\"700\" height=\"394\" src=\"https://www.youtube.com/embed/4iao_ZoPuXk\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>";
              document.body.style.background='black';
        }
    </script><br>
        <label for="Season">Seasons Available : </label>
    <select id="Season" name="Season">
        <option value="Season 1">Season 1</option>
        <option value="Season 2">Season 2</option>
    </select>
	<br><br><br>
	<form name="form" id="myForm" method="POST" action="Rate69.php">
			<h2>Your Ratings</h2><br></br>
			<h2>Ratings: <input type="range" id="myRange" name="ratings" min="0" max="5"  step="0.1"></h2>
			<h2><p>Value: <span id="demo1" ></span></p></h2>
			<input type="submit" style="font-size: 1.5em;
    background-color: #0f171e;
    color: azure;
    font-family: "Times New Roman";
    height="500px"; width="500px";
    padding: 14px 28px;
    border-radius: 20px;" class="button1" value="Submit" name="action_button1"><br></br>
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