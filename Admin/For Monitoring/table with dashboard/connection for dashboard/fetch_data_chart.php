<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "monitoring_dashboard";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to get the data for a specific city
$city = isset($_GET['id']) ? $_GET['id'] : '1';
$sql = "SELECT laspinas_jan_res_target, laspinas_jan_res_actual, laspinas_feb_res_target, laspinas_feb_res_actual, laspinas_mar_res_target, laspinas_mar_res_actual, laspinas_apr_res_target,laspinas_apr_res_actual,
laspinas_may_res_target,laspinas_may_res_actual, laspinas_jun_res_target, laspinas_jun_res_actual, laspinas_jul_res_target, laspinas_jul_res_actual, laspinas_aug_res_target, laspinas_aug_res_actual,
laspinas_sep_res_target, laspinas_sep_res_actual, laspinas_oct_res_target, laspinas_oct_res_actual, laspinas_nov_res_target,laspinas_nov_res_actual, laspinas_dec_res_target, laspinas_dec_res_actual FROM lfs_table WHERE id = '$city'";

$result = $conn->query($sql);
$data = [];                                 

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $data['target'] = [
            $row['laspinas_jan_res_target'],
            $row['laspinas_feb_res_target'],
            $row['laspinas_mar_res_target'],
            $row['laspinas_apr_res_target'],
            $row['laspinas_may_res_target'],
            $row['laspinas_jun_res_target'],
            $row['laspinas_jul_res_target'],
            $row['laspinas_aug_res_target'],
            $row['laspinas_sep_res_target'],
            $row['laspinas_oct_res_target'],
            $row['laspinas_nov_res_target'],
            $row['laspinas_dec_res_target'],
        ];
        $data['actual'] = [
            $row['laspinas_jan_res_actual'],
            $row['laspinas_feb_res_actual'],
            $row['laspinas_mar_res_actual'],
            $row['laspinas_apr_res_actual'],
            $row['laspinas_may_res_actual'],
            $row['laspinas_jun_res_actual'],
            $row['laspinas_jul_res_actual'],
            $row['laspinas_aug_res_actual'],
            $row['laspinas_sep_res_actual'],
            $row['laspinas_oct_res_actual'],
            $row['laspinas_nov_res_actual'],
            $row['laspinas_dec_res_actual'],
        ];
    }
} else {
    // If no data found, return zeros
    $data['target'] = [0, 0, 0];
    $data['actual'] = [0, 0, 0];
}

echo json_encode($data);

$conn->close();
?>
