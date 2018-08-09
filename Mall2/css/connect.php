<body>
<?php
	$connect = mysqli_connect("localhost", "root", "","themall");
				$query = "SELECT * FROM computing;";
				$result = mysqli_query($connect,$query);
				$results = mysqli_num_rows($result);

				

				if ($results > 0){
		
						while ($row = mysqli_fetch_assoc($result)) {

				?>
				<div class="product">
					<h4><?php echo $row['product_name'] ?></h4>
					<img src=<?php echo "../".$row['product_image'] ?> width=100></img><br>
					<b><?php echo $row['product_category'] ?></b><br>
					<strike>Ksh.<?php echo $row['product_price1'] ?></strike><br>
					<b>Ksh.<?php echo $row['product_price2'] ?></b><br>
					
					<form action="product.php" method="post">
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
					?>

			</div>
		</div>

</body>



