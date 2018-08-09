<?php
session_start();
?>
<!Doctype html>
<html>
<head>
	<title>The Mall</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> -->
	<script type="text/javascript"></script>
</head>
<body>
<div class="container">

	<div class="contact">
		<!--This is the top most container -->
		<img src="images/icons/e1306.png" width=0.8% height=0.8%></img>
		<i>Call Us +254795945242</i>

	</div>
	

	<div class="banner">
		<div class="name">
			<h3>The Mall Shopping Community</h3>
		</div>
		<div class="search">
			<form method="post" action="index.php">
				<input type="text" name="prd_db" placeholder="Search Items ?">
				<input type="submit" value="search">
			</form>
		</div>
	</div>

	<div class="main">
		<div class="navigation">
		
			<div class="menu">
				<b>Shop</b><b padding-left="4px"> Cart</b> 
					<form method="post" action="index.php">
						<input type="text" value="featured" name="prd_db" hidden>
						<input type="submit" value="Products">
					</form>
					<form method="post" action="index.php">
						<input type="text" value="computing2" name="prd_db" hidden>
						<input type="submit" value="Computing">
					</form>
					<form method="post" action="index.php">
						<input type="text" value="clothing" name="prd_db" hidden>
						<input type="submit" value="Clothing">
					</form>
					<form method="post" action="index.php">
						<input type="text" value="phones" name="prd_db" hidden> <!--replace computing with db phones-->
						<input type="submit" value="Phones">
					</form>
					<form method="post" action="index.php">
						<input type="text" value="electronics" name="prd_db" hidden>
						<input type="submit" value="Electronics">
					</form>
					<form method="post" action="index.php">
						<input type="text" value="household" name="prd_db" hidden>
						<input type="submit" value="Household">
					</form>
					
				
			</div>


		</div>

		<div class="featured-items">
			<div class="title">
				<h4>Featured Items</h4>
			</div>
			<div class="featured_products">
				
				<?php 
				require 'connect.php';
				?>
			
			<div class="cart">
			<div class= "title">
				<h4><img src="images/icons/e1802.png" width = 12% height=12%/>Cart</h4>
			</div>

			<div class="cart_items">
				<?php
				if(!empty($_SESSION["shopping_cart"])){
					$total = 0;
					echo "<ul>";
					foreach ($_SESSION["shopping_cart"] as $key => $value) {
						
						?>
						<li><b><?php echo $value["prd_name"];?></b><br><?php echo "Ksh.".$value["prd_price"]?><br></li>

						<?php
						$total = $total + $value["prd_price"];
					}
					echo "</li>";
					
				}else{
					echo "<b>Cart Empty</b>";
				}

				?>
				
			</div>

			<div class="total">
				<?php
				echo "<b> Total : Ksh.".$total."<br>";

				?>
			</div>
		</div>
		

		
	</div>

	

	

	<div class="footer">
		<p>&copyThe Shopping Mall Community 2018</p>
	</div>

</div>
</body>
</html>