<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
// Check if the product ID is set in the URL
if (isset($_GET['pr_id']))
	$productId = $_GET['pr_id'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Shoping Cart</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.png" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/linearicons-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--===============================================================================================-->
</head>

<body class="animsition">

	<!-- Header -->
	<header class="header-v4">
		<!-- Header desktop -->
		<div class="container-menu-desktop">
			<!-- Topbar -->


			<div class="wrap-menu-desktop how-shadow1" style="background-color:darkgoldenrod;">
				<nav class="limiter-menu-desktop container">

					<!-- Logo desktop -->
					<div>
						<h5 style="color: white;">WhismyWear</h5>
					</div>

					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu" style="padding-left: 20%;">
							<li class="active-menu">
								<a href="index.php">Home</a>

							</li>

							<li>
								<a href="shop.php">Shop</a>
							</li>

							<li class="label1" data-label1="hot">
								<a href="shoping-cart.php">Features</a>
							</li>



							<li>
								<a href="about.php">About</a>
							</li>

							<li>
								<a href="contact.php">Contact</a>
							</li>
						</ul>
					</div>

					<!-- Icon header -->
					<div class="wrap-icon-header flex-w flex-r-m">
						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
							<i class="zmdi zmdi-search"></i>
						</div>

						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify="2">
							<i class="zmdi zmdi-shopping-cart"></i>
						</div>

						<a href="#" class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti" data-notify="0">
							<i class="zmdi zmdi-favorite-outline"></i>
						</a>
					</div>
				</nav>
			</div>
		</div>

		<!-- Header Mobile -->
		<div class="wrap-header-mobile">
			<!-- Logo moblie -->
			<div class="logo-mobile">
				<a href="index.php"><img src="images/icons/logo-01.png" alt="IMG-LOGO"></a>
			</div>

			<!-- Icon header -->
			<div class="wrap-icon-header flex-w flex-r-m m-r-15">
				<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
					<i class="zmdi zmdi-search"></i>
				</div>

				<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart" data-notify="2">
					<i class="zmdi zmdi-shopping-cart"></i>
				</div>

				<a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti" data-notify="0">
					<i class="zmdi zmdi-favorite-outline"></i>
				</a>
			</div>

			<!-- Button show menu -->
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>


		<!-- Menu Mobile -->
		<div class="menu-mobile">


			<ul class="main-menu-m">
				<li>
					<a href="index.php">Home</a>
					<ul class="sub-menu-m">


					</ul>
					<span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
				</li>

				<li>
					<a href="shop.php">Shop</a>
				</li>

				<li>
					<a href="shoping-cart.php" class="label1 rs1" data-label1="hot">Features</a>
				</li>



				<li>
					<a href="about.php">About</a>
				</li>

				<li>
					<a href="contact.php">Contact</a>
				</li>
			</ul>
		</div>

		<!-- Modal Search -->
		<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
			<div class="container-search-header">
				<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
					<img src="images/icons/icon-close2.png" alt="CLOSE">
				</button>

				<form class="wrap-search-header flex-w p-l-15">
					<button class="flex-c-m trans-04">
						<i class="zmdi zmdi-search"></i>
					</button>
					<input class="plh3" type="text" name="search" placeholder="Search...">
				</form>
			</div>
		</div>
	</header>




	<!-- breadcrumb -->
	<div class="container">
		<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
			<a href="index.php" class="stext-109 cl8 hov-cl1 trans-04">
				Home
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>

			<span class="stext-109 cl4">
				Shoping Cart
			</span>
		</div>
	</div>



	<div style="display: flex; gap: 20px; padding: 3%;">
    <!-- Left side: Products table -->
    <div style="flex: 1;">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr style="background-color: darkgoldenrod; color: white;">
                        <th scope="col">Products</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                    </tr>
                </thead>
                <tbody id="product-display">
                    <!-- Populate this tbody with your products dynamically -->
                </tbody>
            </table>
        </div>
    </div>
    
    <!-- Right side: Order form -->
    <div style="flex: 1;">
        <div class="order-form">
            <div class="form">
                <h2>ADDRESS</h2>
                <input type="text" id="address" placeholder="City">
                <input type="text" id="streetNumber" placeholder="Street Name">
                <select id="paymentMethod">
				<option value="">Select Payment Method</option>
                    <option value="cash">Cash on Delivery</option>
                    <option value="card">Pay from Card</option>
                </select>
                <button onclick="validateForm()" style="background-color:darkgoldenrod;">Done</button>
            </div>
        </div>

        <div class="confirmation" id="confirmation">
            <div class="message-box">
                <p>Your order is on the way! Thank you for ordering.</p>
            </div>
        </div>
    </div>
</div>

<style>
    .order-form {
        background-color: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        width: 100%;
    }

    .confirmation {
        background-color: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        width: 100%;
        display: none;
    }

    .message-box {
        text-align: center;
    }

    /* Style for the form elements */
    input[type="text"],
    select,
    button {
        display: block;
        width: calc(100% - 20px); /* Adjusted width to accommodate padding */
        margin: 10px auto; /* Center the elements */
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }

    button {
        background-color: #007bff;
        color: white;
        border: none;
        cursor: pointer;
    }

    button:hover {
        background-color: #0056b3;
    }
</style>

<script>
    function validateForm() {
        var address = document.getElementById("address").value;
        var streetNumber = document.getElementById("streetNumber").value;
        var paymentMethod = document.getElementById("paymentMethod").value;

        if (address.trim() === '' || streetNumber.trim() === '' || paymentMethod.trim() === '') {
            alert("Please fill out all fields before submitting the form.");
            return;
        }

        // If all fields are filled, proceed with showing confirmation
        showConfirmation();
    }

    function showConfirmation() {
        var confirmationBox = document.getElementById("confirmation");
        var overlay = document.getElementById("overlay");
        confirmationBox.style.display = "block";
        overlay.style.display = "block";
    }
</script>

	

	
	




	<!-- Footer -->


	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>

	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->

	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function() {
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
	<!--===============================================================================================-->
	<script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function() {
			$(this).css('position', 'relative');
			$(this).css('overflow', 'hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function() {
				ps.update();
			})
		});
	</script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$.ajax({
				url: "ajax-cart.php",
				type: "POST",
				data: {
					pr_id: <?php echo $productId; ?>
				},
				success: function(data) {
					$("#product-display").html(data);

				},
				error: function() {
					$("#product-display").html("<p>Error fetching product details.</p>");
				}
			});
		});
	</script>


</body>

</html>