<!DOCTYPE html>
<html lang="en">
  <head>
	<meta charset="UTF-8">
	<title>Toxygen shop</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
	<div class="wrapper">
	  <div class="content">
		<header class="header">
		  <nav class="primary-menu">
			<div class="container">
			  <ul class="primary-menu__list">
				<li class="primary-menu__item">
				  <a class="primary-menu__link" href="index.php">HOME</a>
				</li>
				<li class="primary-menu__item">
				  <a class="primary-menu__link" href="animals.php">PRODUCTS</a>
				</li>
                  <li class="primary-menu__item">
                      <a class="primary-menu__link" href="index.php#about">ABOUT US</a>
                  </li>
                  <li class="primary-menu__item">
                      <a class="primary-menu__link" href="index.php#contact">CONTACTS</a>
                  </li>
			  </ul>
			  <ul class="left-menu__list">
				<li onclick="openNav()" class="left-menu__item">
				  <i class="fas fa-shopping-basket"></i>
				  <span id="basket"></span>
				</li>
				<li id="dropdown" class="dropdown ddmenu left-menu__item">
				  <i class="fas fa-user"></i>
                    <?php
                    session_start();
                    if (isset($_SESSION['logged']) && $_SESSION['admin'] == true)
                        print
                            '<ul id="dropdown-list" class="hide">
                        <li><a href="profile.php">My Profile</a></li>
                        <li><a href="admin-users.php">Admin Panel</a></li>
                        <li><a href="../server/logout.php">Log Out</a></li>
                    </ul>';
                    else if (isset($_SESSION['logged']) && $_SESSION['admin'] == false) {
                        print
                            '<ul id="dropdown-list" class="hide">
                        <li><a href="profile.php">My Profile</a></li>
                        <li><a href="../server/logout.php">Log Out</a></li>
                    </ul>';
                    }
                    else
                        print
                            '<ul id="dropdown-list" class="hide">
                    <li><a href="auth.php">Sign In</a></li>
                    <li><a href="register.php">Register</a></li>
                </ul>';
                    ?>
				</li>
			  </ul>
			</div>
		  </nav>
		</header>
		<div id="basket-slide" class="basket">
		  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		  <h3>Корзина:</h3>
		  <form action="../server/pushcart.php" method="POST">
			<table id="bk-list" class="basket__list">
			  <thead id="bk-head" class="basket__head">
				<tr>
				  <th>Товар</th>
				  <th>Цена</th>
				  <th>Кол-во</th>
				  <th>Сумма</th>
				</tr>
			  </thead>
			  <tbody id="bk-body" class="basket__body">
			  </tbody>
			</table>
			<h3>ИТОГО: <span id="total">0 $</span></h3>
			<button type="submit" class="checkout-button">Оформить заказ</button>
		  </form>
		</div>
		<main class="main">
		  <div class="container">















<?php 
	include_once("../server/sql_misc.php");
	$arr = generic_read("products", "product_id");
	foreach ($arr as $data_row)
	{
		#print_r($data_row);
		#print($data_row['picture_link']);
		#print(strval($data_row['product_name']));
		#print(strval($data_row['product_id']));
	
		print
			"<div class=\"product\" data-name= ".$data_row["product_name"]." data-id= ".$data_row["product_id"]." data-cost= ".$data_row["price"]." data-amount= ".$data_row["quantity"].">
			<div class=\"make3D\">
				<div class=\"product-front\">
				  <div class=\"shadow\"></div>
				  <img src= ".$data_row["picture_link"].' height="265px" alt="" />
				  <div class="image_overlay"></div>
				  <div class="add_to_cart">Add to cart</div>
				  <div class="stats">
					<div class="stats-container">
					  <span class="product_price"> $'. $data_row["price"].'</span>
					  <span class="product_name">'.$data_row["product_name"].'</span>
					  <p>Птица</p>
					  <div class="product-options">
                          <input class="product-counter" type="number" value="1" min="0">
						<span>'.$data_row["description"].'</span>
					  </div>
					</div>
				  </div>
				</div>
			  </div>
			</div>'
		;
	}
?>















		  </div>
		</main>
	  </div>
	  <footer class="footer">
		<div class="container">
		  <div class="footer__copyright">
			© Copyright @Toxygen 2019, All right reserved
		  </div>
		  <div class="footer__socials">
			<div class="social">
			  <a target="_blank" href="https://vk.com"><i class="fab fa-vk"></i></a>
			</div>
			<div class="social">
			  <a target="_blank" href="https://facebook.com"><i class="fab fa-facebook-f"></i></a>
				 </div>
<div class="social">
  <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i>
  </a>
</div>
<div class="social">
  <a target="_blank" href="https://linkedin.com"><i class="fab fa-linkedin-in"></i>
  </a>
</div>
</div>
</div>
</footer>
</div>
<script src="js/basket.js"></script>
<script src="js/dropdown.js"></script>
</body>
</html>
