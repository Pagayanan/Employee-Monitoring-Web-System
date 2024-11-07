<?php
require_once "../../Config/config.php";

$search = "0";
// Create a connection
$database = "experimentdb";
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, $database);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


if (isset($_POST["searchBox"])){
    $search = isset($_POST["search"]) ? $_POST["search"] : "";
}
// Insert data if the form is submitted
if (isset($_POST["multiple_checkbox"])) {
    $ch = isset($_POST["ch"]) ? $_POST["ch"] : array();
    $cl = isset($_POST["cl"]) ? $_POST["cl"] : array();
    $nm = isset($_POST["pangalan"]) ? $_POST["pangalan"] : "";
    $meme = isset($_POST["meme"]) ? $_POST["meme"] : "";
    $preid = isset($_POST["preid"]) ? $_POST["preid"] : "";

    // Prepare the checkbox values
    $ti = !empty($ch) ? implode(", ", $ch) : "Meowa";
    $it = !empty($cl) ? implode(", ", $cl) : "Meowa";

    // Echo the selected values
    echo "The $ti of the $it. $meme";

    // // Escape user inputs to prevent SQL injection
    $ti = mysqli_real_escape_string($conn, $ti);
    echo "\n $ti \n";
    $it = mysqli_real_escape_string($conn, $it);
    $nm = mysqli_real_escape_string($conn, $nm);
    $meme = mysqli_real_escape_string($conn, $meme);

    // SQL query to insert data
    $sql = "INSERT INTO firstexp (Planet, Animal, input, texarea,preID) VALUES ('$ti', '$it', '$nm', '$meme','$preid')";

    echo" $sql";
    
    // Execute the query
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }


}


 echo "$search hellow to the world";
// SQL query to select data from database

$sql2 = "SELECT * 
FROM 
    (SELECT * FROM firstexp WHERE preID = '$search'
     UNION ALL
     SELECT * FROM firstexp WHERE preID = '0' AND NOT EXISTS (SELECT 1 FROM firstexp WHERE preID = '$search')) AS combined_result
";

$result = $conn->query($sql2);

// Loop through the fetched data
while ($rows = $result->fetch_assoc()) {
    $anim = $rows['Animal'];
    $plnt = $rows['Planet'];
    $inp = $rows['Input'];
    $txt = $rows['texarea'];
    $date = $rows['date'];
    $formatted_date = date('n/j/Y', strtotime($date));

?>
<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Experiment Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js"></script>
    
</head>
<body>
<button id="saveAsPdfButton">Save as PDF</button>
    <div class="" id="contentToSave">
    <h2>Experiment Form</h2>
    <form action="exp.php" method="POST" id="searchForm">
        <input type="text" name="search" placeholder="Enter ID to search">
        <input type="submit" value="Search" name="searchBox">
       
    </form>
    <!-- Form to submit data -->
    <form action="exp.php" method="POST" id="checkboxForm">
        <div class="onlyOnceCheckboxthisDIv" id="div1">
            <input type="checkbox" name="ch[]" id="ch3" value="world" <?php if ($plnt === 'world') echo 'checked'; ?>>world <br>
            <input type="checkbox" name="ch[]" id="ch4" value="planet" <?php if ($plnt === 'planet') echo 'checked'; ?>> planet <br>
            <input type="text" name="pangalan" value="<?php echo $inp; ?>">
            <input type="text" name="preid" id="">
        </div>
        <div class="onlyOnceCheckboxthisDIv" id="div2">
            <input type="checkbox" name="cl[]" id="ch1" value="hayop">hayop <br>
            <input type="checkbox" name="cl[]" id="ch2" value="animal"> animal <br>
        </div>
        <textarea name="meme" id="" cols="30" rows="10"><?php echo $txt; ?></textarea>
        <input type="text" id="dateInput" placeholder="<?php echo $formatted_date;?>" onfocus="this.type='date'" value="">

        <input type="submit" value="click" name="multiple_checkbox">
    </form>

    <!-- Form for searching data -->
    
    </div>
    <script>
        // Get checkboxes within the specific divs
        var checkboxesInDiv1 = document.querySelectorAll('#div1 input[type="checkbox"]');
        var checkboxesInDiv2 = document.querySelectorAll('#div2 input[type="checkbox"]');

        // Function to handle checkbox behavior within a specific div
        function handleCheckboxBehavior(checkboxes) {
            checkboxes.forEach(function(checkbox) {
                checkbox.addEventListener('click', function() {
                    checkboxes.forEach(function(cb) {
                        if (cb !== checkbox) {
                            cb.checked = false;
                        }
                    });
                });
            });
        }

        // Apply checkbox behavior function to each div's checkboxes
        handleCheckboxBehavior(checkboxesInDiv1);
        handleCheckboxBehavior(checkboxesInDiv2);



    //     document.getElementById('saveAsPdfButton').addEventListener('click', function () {
    //     const element = document.getElementById('contentToSave');
    //     html2pdf(element);
    // });


    document.getElementById('saveAsPdfButton').addEventListener('click', function () {
    const element = document.getElementById('contentToSave');
    
    // Adjust width and height of the element to fit on one page
    element.style.width = '100%'; // Set the width to 100% or any desired value
    element.style.height = '50%'; // Set the height to auto to fit content
    
    const opt = {
        margin:       5,
        filename:     'experiment_form.pdf',
        html2canvas:  { scale: 2 }, // Adjust scale as needed
        jsPDF:        { unit: 'mm', format: 'legal', orientation: 'portrait' }
    };
    
    html2pdf().from(element).set(opt).save();
});


    </script>
</body>
</html>
<?php
}
?>

<?php
// Close the connection
mysqli_close($conn);
?>
