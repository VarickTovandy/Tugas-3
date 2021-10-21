<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>If Else</title>
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>
	<header>
		<div class="container">
		   	<h1 class="logo">Tugas 3 Praktikum</h1>
		    <nav>
		    	<ul>
		        <li><a href="beranda.html" class="cta">Beranda</a></li>
		        <li><a href="ifelse.php">If-else</a></li>
		        <li><a href="for.php">Perulangan</a></li>
		        <li><a href="#">Array</a></li>
			    </ul>
		    </nav>
		</div>
	</header>

	<div class="wrapper">
		<?php
			$a = array("Budi", "Andi", "Diah");
			$b = array("3", "3,3", "3,9");
			$c = array("budi@oke.com", "andi@oke.com", "diah@haha.com");
		?>
		<table class="styled-table">
		    <thead>
		        <tr>
		            <th>Name</th>
		            <th>IPK</th>
		            <th>Email</th>
		        </tr>
		    </thead>
		    <tbody>	
		    	<?php
					for($i=0; $i<3; $i++){
						if($i%2==0)
						{
							echo "<tr>";
							echo "<td>$a[$i]</td>";
							echo "<td>$b[$i]</td>";
							echo "<td>$c[$i]</td>";									
							echo "</tr>";
						}
						else
						{
							echo "<tr class='active-row'>";
							echo "<td>$a[$i]</td>";
							echo "<td>$b[$i]</td>";
							echo "<td>$c[$i]</td>";
							echo "</tr>";
						}
					}
				?>
		    </tbody>
		</table>
	</div>	
</body>
</html>