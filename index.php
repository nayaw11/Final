<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Dnaya Wilson">
	<meta name="description" content="Calculator UI">
	<meta name="keywords" content="Dnaya Wilson IT5236 Final">
	<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
	
	<title>Slope Calculator</title>
	
	<link href="calculator.html">
	<link rel="stylesheet" href="final.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=East+Sea+Dokdo&display=swap" rel="stylesheet">
</head>

<body>
	<nav> 
	  <div class="dropdown">
	    <button class="dropbtn">&#9776;</button>
		<div class="dropdown-content">
		<a href="calculator.html">Standard</a>
		<a href="index.php">Slope</a>
	  </div>
	</div>
	</nav>
	
	<header>
		<h1>Slope Calculator</h1>
	</header>
	
	<main>
		<section>
		
		<script>
		//THIS CODE WAS CONTRIBUTED BY Michael Finnegan FROM HTMLGOODIES.COM 
		var x1=prompt("What would you like coordinate x1 to be?")
		var y1=prompt("What would you like coordinate y1 to be?")
		var x2=prompt("What would you like coordinate x2 to be?")
		var y2=prompt("What would you like coordinate y2 to be?")
		var y3 = y1-y2
		var x3 = x1-x2
		var slope = y3/x3
		var z1 = slope*x1
		var z2 = -1*y1
		var z3 = z1+z2
		var z4 = -1*z3
		</script>
		
		<h2>Your Results:</h2>
		<script>
		document.write("The slope of the line formed by points " + x1+"," + y1+ " and " + x2+ "," + y2+ " is " + slope)

		document.write("The y intercept of this line is "+ z4+".  The equation of the line is:  y="+ slope+"x+"+ z4)
		</script>
		
		<h2>What Is A Slope?</h2>
		<p>The slope is also known as the gradient in mathematics. A slope is defined as a number that measures the steepness and direction of a line, or a section of a line connecting two points. The slope of a line is calculated as "rise over run" and is usually denoted by m.  </p>
		
		<h2>Why Is A Slope Important?</h2>
		<p>The reason a slope is important is because of economics. A slope of a line shows both steepness and direction. In economics a slope is used to measure the rate at which changes are taking place. </p>
		
		<h2>Equation For Finding The Slope Of A Line</h2>
		<img src="images/slope.png" alt="Slope Equation">
		
		<h2>Equation For Finding The Y-Intercept</h2>
		<img src="images/y.png" alt="Y-Intercept Equation">
		
		<h2>How The Slope and Y-Intercept Come Together</h2>
		<img src="images/y.png" alt="Y-Intercept Equation">
		
		</section>
	</main>
</body>
</html>