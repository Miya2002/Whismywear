<?php
$conn = mysqli_connect("localhost", "root", "", "whismywear") or die("Connection failed");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if (isset($_POST['pr_id'])) {
    $productId = $_POST['pr_id'];

    $sql = "SELECT 
    products.pr_url, 
    products.pr_name, 
    products.pr_price, 
    products.pr_quantity,
    pr_decription.ds1,
    pr_decription.ds2
FROM 
    products
    INNER JOIN pr_decription ON products.pr_id = pr_decription.pr_id
WHERE 
    products.pr_id = $productId";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $output = '';

        while ($row = mysqli_fetch_assoc($result)) {
            $output .= '<section class="sec-product-detail bg0 p-t-65 p-b-60">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6 col-lg-6 p-b-30">
                                        <div class="p-lr-25 p-r-30 p-lr-0-lg">
                                            <div class="wrap-pic-w pos-relative">
                                                <img src="' . $row['pr_url'] . '" height="400px" width="300px" alt="IMG-PRODUCT">
                                                <i class="fa fa-expand"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-6 p-b-30">
                                        <div class="p-r-50 p-t-5 p-lr-0-lg">
                                            <h4 class="mtext-105 cl2 js-name-detail p-b-14">' . $row['pr_name'] . '</h4>
                                            <span class="mtext-106 cl2">' . $row['pr_price'] . '</span>
                                            <p class="stext-102 cl3 p-t-23">' . $row['ds1'] . '</p>
                                            <a href="" class="btn border border-secondary rounded-pill px-4 py-2 mb-4 text-danger addToCartBtn" data-pr_id="' . $productId . '" ><i class="fa fa-shopping-bag me-2 text-danger "></i> Add to cart</a>
                       
                                           
                                        </div>
                                    </div>
                                </div>

                                <div class="bor10 m-t-50 p-t-43 p-b-40">
                                    <div class="tab01">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li class="nav-item p-b-10">
                                                <a class="nav-link active justify-center text-primary" data-toggle="tab" href="#description" role="tab">Description</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content p-t-43">
                                            <div class="tab-pane fade show active" id="description" role="tabpanel">
                                                <div class="how-pos2 p-lr-15-md">
                                                    <p class="stext-102 cl6 text-dark">' . $row['ds2'] . '</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>';
        }
    }
    echo $output;
} else {
    echo "<h2>No Record Found</h2>";
}
mysqli_close($conn);
?>
<script type="text/JavaScript" src="js/jquery.js"></script>
<script type="text/javascript">

    $(document).ready(function () {
        function loadProduct(page) {
            $.ajax({
                url: "ajax-product.php",
                type: "POST",
                data: { page_no: page },
                success: function (data) {
                    $("#product-display").html(data);

                    $('.addToCartBtn').click(function (e) {
                        e.preventDefault();
                        var productId = $(this).data('pr_id');
                        window.location.href = "shoping-cart.php?pr_id=" + productId;

                    });
                }

            });
        }
        loadProduct();
    });

</script>