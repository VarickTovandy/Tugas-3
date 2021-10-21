<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>If Else</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<header>
		<div class="container">
		   	<h1 class="logo">Tugas 3 Praktikum</h1>
		    <nav>
		    	<ul>
		        <li><a href="beranda.html" class="cta">Beranda</a></li>
		        <li><a href="#">If-else</a></li>
		        <li><a href="for.php">Perulangan</a></li>
		        <li><a href="array.php">Array</a></li>
			    </ul>
		    </nav>
		</div>
	</header>

	<div class="wrapper">
		<div class="registration_form">
			<form method="get" action="<?php $_SERVER['PHP_SELF']; ?>">
				<div class="form_wrap">
					<div class="input_wrap">
						<label for="fname">Input Tahun</label>
						<input type="text" id="tahun" name="tahun" placeholder="Tahun">
					</div>
					<?php
				        $tahun = null;
				        if (!empty($_GET['tahun'])){
				            $tahun = isset($_GET['tahun']) ? $_GET['tahun'] : '';

					        if ($tahun % 4 == 0) {
					            echo "<p> $tahun adalah tahun kabisat </p>";
					        } 
					        else {
					            echo "<p> $tahun bukan merupakan tahun kabisat </p>";
					        }
				        }
				    ?>
					<div class="input_wrap">
						<input type="submit" value="submit" name="submit" class="submit_btn">
					</div>
				</div>
			</form>
		</div>
	</div>	
</body>
</html>