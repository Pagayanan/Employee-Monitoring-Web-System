<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fieldId = $_POST['fieldId'];
    $value = $_POST['value'];

    // Save the data to a file or database
    $file = 'data.json';
    $data = json_decode(file_get_contents($file), true);
    if (!$data) {
        $data = [];
    }
    $data[$fieldId] = $value;
    file_put_contents($file, json_encode($data));
}
?>
