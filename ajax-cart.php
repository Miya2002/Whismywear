<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



$conn = mysqli_connect("localhost", "root", "", "whismywear") or die("Connection failed");

if (isset($_POST['pr_id'])) {
    $productId = $_POST['pr_id'];

$sql = "SELECT 
            products.pr_url, 
            products.pr_name, 
            products.pr_price, 
            products.pr_quantity
        FROM 
            products
        WHERE 
            products.pr_id = $productId";

    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

    if (mysqli_num_rows($result) > 0) {
        $output = '';

        while ($row = mysqli_fetch_assoc($result)) {
            $output .= '<tr>
                            <th scope="row">
                                <div class="d-flex align-items-center">
                                    <img src="' . $row['pr_url'] . '" class="img-fluid me-5 rounded-circle" style="width: 80px; height: 80px;" alt="">
                                </div>
                            </th>
                            <td>
                                <p class="mb-0 mt-4">' . $row['pr_name'] . '</p>
                            </td>
                            <td>
                                <p class="mb-0 mt-4">' . $row['pr_price'] . 'Rs</p>
                            </td>
                            <td>
                                <div class="input-group quantity mt-4" style="width: 100px;">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-minus rounded-circle bg-light border">
                                            <i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                    <input type="text" class="form-control form-control-sm text-center border-0" value="1">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-plus rounded-circle bg-light border">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </td>
                        </tr>';
        }

        echo $output;
    } else {
        echo "<h2>No Record Found</h2>";
    }

    mysqli_close($conn);
} else {
    echo "<h2>No ID Provided</h2>";
}
?>