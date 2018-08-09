<?php
				session_start();
				$prd_image = $_POST['prd_image'];
				$prd_name = $_POST['prd_name'];
				$prd_category = $_POST['prd_category'];
				$prd_price = $_POST['prd_price'];
				$prd_description = $_POST['prd_description'];


			?>
<!Doctype html>
<html>
<head>
	<title>The Mall</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	
	<script type="text/javascript"></script>
</head>
<body>
<div class="container">

	<div class="contact">
		<!--This is the top most container -->
		<img src="../images/icons/e1306.png" width=0.8% height=0.8%></img>
		<i>Call Us +254795945242</i>


	</div>
	

	<div class="banner">
		<div class="name">
			<h3>The Mall Shopping Community</h3>
		</div>
		<div class="search">
			<form>
				<input type="text" placeholder="Search Items ?">
				<input type="button" value="search">
			</form>
		</div>
	</div>

	<div class="main">
		<div class="navigation">
		
			<div class="menu">
				<b>Shop</b><b padding-left="4px"> Cart</b> 
				
					<form method="post" action="../index.php">
						<input type="text" value="featured" name="prd_db" hidden>
						<input type="submit" value="Products">
					</form>
					<form method="post" action="../index.php">
						<input type="text" value="computing2" name="prd_db" hidden>
						<input type="submit" value="Computing">
					</form>
					<form method="post" action="../index.php">
						<input type="text" value="clothing" name="prd_db" hidden>
						<input type="submit" value="Clothing">
					</form>
					<form method="post" action="../index.php">
						<input type="text" value="phones" name="prd_db" hidden> <!--replace computing with db phones-->
						<input type="submit" value="Phones">
					</form>
					<form method="post" action="../index.php">
						<input type="text" value="electronics" name="prd_db" hidden>
						<input type="submit" value="Electronics">
					</form>
					<form method="post" action="../index.php">
						<input type="text" value="household" name="prd_db" hidden>
						<input type="submit" value="Household">
					</form>
					
				
			</div>


		</div>

		<div class="product-description">

			

			

			<div class="image">
				<h3><?php echo $prd_name ?></h3>
				<img src=<?php echo "../".$prd_image ?> class="prd-img" width=60% ></img><br>
				<b>Category : <?php echo $prd_category ?> <br>Price : Ksh.<?php echo $prd_price ?></b><br>
				<form action="../index.php" method="post">	
					<input type="hidden" value="cart" name="prd_db">
					<input type="hidden" value=<?php echo $_POST['prd_name'];?> name="prd_name">
					<input type="hidden" value=<?php echo $_POST['prd_price'];?> name="prd_price">


					
					<input type="submit" value="cart">
				</form>
				

			</div>

			<div class="prd-description">
				
				<table>
					<td><?php echo $prd_description ?></td>
				</table> 
			</div>
			

		</div>
		<div class="cart">
					<div class= "title">
						<h4>My Items</h4>
					</div>

					<div class="cart_items">
						<?php
				if(!empty($_SESSION["shopping_cart"])){
					$total = 0;
					echo "<ul>";
					foreach ($_SESSION["shopping_cart"] as $key => $value) {
						
						?>
						<li><?php echo $value["prd_name"];?><br><?php echo "Ksh.".$value["prd_price"]?><br></li>

						<?php
						$total = $total + $value["prd_price"];
					}
					echo "</li>";
					echo "<b> Total : Ksh.".$total."<br>";
					
				}

				?>
				
			</div>

			<div class="total">
				<?php
				// echo "<b> Total : Ksh.".$total."<br>";

				?>
			</div>
		</div>
</div>
</body>
</html>