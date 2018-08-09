<body>
<?php
				
				
				$prd_db = $_POST['prd_db'];
				if ($prd_db == "cart"){
					
					$prd_name = $_POST['prd_name'];
					$prd_price =  $_POST['prd_price'];
					
					if(isset($_SESSION["shopping_cart"])){
						
						$check = array_column($_SESSION['shopping_cart'],'prd_name');
						if(!in_array($_POST["prd_name"], $check)){
							$count = count($_SESSION["shopping_cart"]);
							$item_array = array(
							'prd_name' => $_POST['prd_name'],
							'prd_price' => $_POST['prd_price']

						 ); 
							$_SESSION["shopping_cart"] [$count] = $item_array;



						}
						else{
							echo "<script>alert('Item already in cart')</script>";
							// echo "<script>window.location='templates/product.php'</script>";
						}

					}
					
					else{
						//To do while session not set
						
						$item_array = array(
							'prd_name' => $_POST['prd_name'],
							'prd_price' => $_POST['prd_price']

						 );
						$_SESSION["shopping_cart"][0] = $item_array;
					}
				}
				else{
					$connect = mysqli_connect("localhost", "root", "","themall");
					$query = "SELECT * FROM $prd_db;";
					$result = mysqli_query($connect,$query);
					$results = mysqli_num_rows($result);

					

					if ($results > 0){
			
							while ($row = mysqli_fetch_assoc($result)) {

				?>
				<div class="product">
					<b><?php echo $row['product_name'] ?></b><br>
					<img src=<?php echo $row['product_image'] ?> width=70% height=70% align="center"></img><br>
					
					<strike align="center">Ksh.<?php echo $row['product_price1'] ?></strike>
					<b align="center">Ksh.<?php echo $row['product_price2'] ?></b>
					
					<form action="templates/product.php" method="post">
						<input type="text" value="<?php echo $row['product_name'] ?>" name="prd_name" hidden>
						<input type="text" value="<?php echo $row['product_image'] ?>" name="prd_image" hidden>
						<input type="text" value="<?php echo $row['product_category'] ?>" name="prd_category" hidden>
						<input type="text" value="<?php echo $row['product_price2'] ?>" name="prd_price" hidden>
						<input type="text" value="<?php echo $row['product_description'] ?>" name="prd_description" hidden>
						<input type="submit" value="Details">
					</form>

				</div>
				<?php } 
					}
				}
				 ?>
				

			</div>
		</div>
</body>




