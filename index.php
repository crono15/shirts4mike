<?php 
$pageTitle = "Unique T-shirts designed by a frog";
$section = "home";
include('inc/header.php'); ?>
		<div class="section banner">

			<div class="wrapper">

				<img class="hero" src="img/mike-the-frog.png" alt="Mike the Frog says:">
				<div class="button">
					<a href="#">
						<h2>Hey, I&rsquo;m Mike!</h2>
						<p>Check Out My Shirts</p>
					</a>
				</div>
			</div>

		</div>

		<div class="section shirts latest">

			<div class="wrapper">

				<h2>Mike&rsquo;s Latest Shirts</h2>
        <?php include("inc/products.php");
         $total_products = count($products);
         $count = 0;
         $get_list_view_html = "";
        ?>
				<ul class="products">
					<?php foreach($products as $product_id => $product) { 
							$count = $count + 1;
              if ($total_products - $count < 4)
              {
                $get_list_view_html = get_list_view_html($product_id, $product) . $get_list_view_html;
              }
						}
          
          echo $get_list_view_html;
					?>
				</ul>

			</div>

		</div>

<?php include('inc/footer.php') ?>
