<?php

$conn = mysqli_connect("localhost", "root", "", "whismywear") or die("Connection failed");

$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Query Unsuccessful: " . mysqli_error($conn));
}

$output = "";

if (mysqli_num_rows($result) > 0) {
    $output .= '<div id="product-display" class="row isotope-grid" style="padding-right:30px; padding-left:30px">';
    $count = 0; 

    while ($row = mysqli_fetch_assoc($result)) {
        if ($count % 4 == 0) {
            
            $output .= '<div class="row g-4 justify-content-center">';
        }

        $output .= '<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women" >';
       
        $output .= '<div class="block2">
            <div class="block2-pic hov-img0">
                <img src="'. $row['pr_url'] .'" alt="">
                <a href="" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1  addToCartBtn" data-pr_id="' . $row['pr_id'] . '">
                    Quick View
                </a>
            </div>
            <div class="block2-txt flex-w flex-t p-t-14">
                <div class="block2-txt-child1 flex-col-l ">
                    <a href="product-detail.php" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                        '. $row['pr_name'] .'
                    </a>
                    <span class="stext-105 cl3">
                        '. $row['pr_price'] .' PKR
                    </span>
                    <p class="stext-106 cl5"></p>
                </div>
                <div class="block2-txt-child2 flex-r p-t-3">
                    <a href="" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                        <img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png" alt="ICON">
                        <img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png" alt="ICON">
                    </a>
                </div>
            </div>
        </div>';
        $output .= '</div>'; 

        

        if ($count % 4 == 3) {
            
            $output .= '</div>'; 
        }

        $count++; 
    }

    
    if ($count % 4 != 0) {
        $output .= '</div>'; 
    }

    $output .= '</div>'; 
    echo $output;
} else {
    echo "<h2> Record Found</h2>";
}
?>
