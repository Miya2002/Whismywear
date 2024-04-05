<?php
if (isset($_GET["pr_id"]))
	$productId = $_GET['pr_id']
?>
<!DOCTYPE html>
<html>

<body>
	<div id="product-details" class="col-md-6 col-lg-5 p-b-30">

	</div>
	<!--===============================================================================================-->
	<!-- <script src="js/main.js"></script> -->
	<script type="text/JavaScript" src="js/jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$.ajax({
				url: "ajax-description.php",
				type: "POST",
				data: {
					id: "17"
				},
				success: function(data) {
					$("#product-details").html(data);
				},
				error: function() {
					$("#product-details").html("<p>Error fetching product details.</p>");
				}
			});
		});
	</script>

</body>

</html>