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
		        <li><a href="ifelse.php">If-else</a></li>
		        <li><a href="#">Perulangan</a></li>
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
						<label for="fname">Masukkan Jumlah Anak Ayam</label>
						<input type="text" id="ayam" name="ayam" placeholder="Jumlah Anak Ayam">
					</div>

					<?php
				        $ayam = null;
				        if (!empty($_GET['ayam'])){
				            $ayam = isset($_GET['ayam']) ? $_GET['ayam'] : '';

					        for ($x = $ayam; $x>0; --$x){
					        	$ayam2 = $x - 1;
					        	if($x>1){
					        		echo "<p> Anak ayam turun $x mati satu tinggal $ayam2</p>";					        		
					        	}
					        	else{
					        		echo "<p> Anak ayam turun 1 mati satu tinggal induknya</p>";					        		
					        	}
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