<?php

require_once "../../Config/config.php";


$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


if (isset($_POST["updatePDS"])) {


    $surname = isset($_POST["surname"]) ? $_POST["surname"] : "N/A";
    $firstname = isset($_POST["firstname"]) ? $_POST["firstname"] : "N/A";
    $middlename = isset($_POST["middlename"]) ? $_POST["middlename"] : "N/A";
    $nameextension = isset($_POST["nameextension"]) ? $_POST["nameextension"] : "N/A";
    $DateofBirth = isset($_POST["DateofBirth"]) ? $_POST["DateofBirth"] : "N/A";
    $PlaceofBirth = isset($_POST["PlaceofBirth"]) ? $_POST["PlaceofBirth"] : "N/A";
    
    $Sex = isset($_POST["Sex"]) ? $_POST["Sex"] : array();
    $Loop_Sex = !empty($Sex) ? implode(", ", $Sex) : "N/A";
    
    $civilstatus = isset($_POST["civilstatus"]) ? $_POST["civilstatus"] : array();
    $Loop_civilstatus = !empty($civilstatus) ? implode(", ", $civilstatus) : "N/A";
    
    $ifOtherDetails = isset($_POST["ifOtherDetails"]) ? $_POST["ifOtherDetails"] : "N/A";
    
    $Citizenship = isset($_POST["Citizenship"]) ? $_POST["Citizenship"] : array();
    $Loop_Citizenship = !empty($Citizenship) ? implode(", ", $Citizenship) : "N/A";
    
    $ifDualCitizenship = isset($_POST["ifDualCitizenship"]) ? $_POST["ifDualCitizenship"] : array();
    $Loop_ifDualCitizenship = !empty($ifDualCitizenship) ? implode(", ", $ifDualCitizenship) : "N/A";
    
    $pleaseIndicateCountry = isset($_POST["pleaseIndicateCountry"]) ? $_POST["pleaseIndicateCountry"] : "N/A";
    $pleaseIndicateDetails = isset($_POST["pleaseIndicateDetails"]) ? $_POST["pleaseIndicateDetails"] : "Haluha";
    $Religion = isset($_POST["Religion"]) ? $_POST["Religion"] : "N/A";
    $height = isset($_POST["height"]) ? $_POST["height"] : "N/A";
    $weight = isset($_POST["weight"]) ? $_POST["weight"] : "N/A";
    $bloodtype = isset($_POST["bloodtype"]) ? $_POST["bloodtype"] : "N/A";
    $gsisidno = isset($_POST["gsisidno"]) ? $_POST["gsisidno"] : "N/A";
    $pagibigidno = isset($_POST["pagibigidno"]) ? $_POST["pagibigidno"] : "N/A";
    $philhealth_no = isset($_POST["philhealth_no"]) ? $_POST["philhealth_no"] : "N/A";
    
    // Remaining variables follow the same pattern
    
    // Continue similarly for other variables
    $sssno = isset($_POST["sssno"]) ? $_POST["sssno"] : "N/A";
    $tinno = isset($_POST["tinno"]) ? $_POST["tinno"] : "N/A";
    $agencyemployeeno = isset($_POST["agencyemployeeno"]) ? $_POST["agencyemployeeno"] : "N/A";
    $resaddress_house_block_lotno = isset($_POST["resaddress_house_block_lotno"]) ? $_POST["resaddress_house_block_lotno"] : "N/A";
    $resaddress_subdivision_village = isset($_POST["resaddress_subdivision_village"]) ? $_POST["resaddress_subdivision_village"] : "N/A";
    $resaddress_city_municipality = isset($_POST["resaddress_city_municipality"]) ? $_POST["resaddress_city_municipality"] : "N/A";
    $resaddress_street = isset($_POST["resaddress_street"]) ? $_POST["resaddress_street"] : "N/A";
    $resaddress_barangay = isset($_POST["resaddress_barangay"]) ? $_POST["resaddress_barangay"] : "N/A";
    $resaddress_province = isset($_POST["resaddress_province"]) ? $_POST["resaddress_province"] : "N/A";
    $resaddress_zipcode = isset($_POST["resaddress_zipcode"]) ? $_POST["resaddress_zipcode"] : "N/A";
    $permaddress_house_block_lotno = isset($_POST["permaddress_house_block_lotno"]) ? $_POST["permaddress_house_block_lotno"] : "N/A";
    $permaddress_subdivision_village = isset($_POST["permaddress_subdivision_village"]) ? $_POST["permaddress_subdivision_village"] : "N/A";
    $permaddress_city_municipality = isset($_POST["permaddress_city_municipality"]) ? $_POST["permaddress_city_municipality"] : "N/A";
    $permaddress_street = isset($_POST["permaddress_street"]) ? $_POST["permaddress_street"] : "N/A";
    $permaddress_barangay = isset($_POST["permaddress_barangay"]) ? $_POST["permaddress_barangay"] : "N/A";
    $permaddress_province = isset($_POST["permaddress_province"]) ? $_POST["permaddress_province"] : "N/A";
    $permaddress_zipcode = isset($_POST["permaddress_zipcode"]) ? $_POST["permaddress_zipcode"] : "N/A";
    $PStelephone = isset($_POST["PStelephone"]) ? $_POST["PStelephone"] : "N/A";
    $mobile = isset($_POST["mobile"]) ? $_POST["mobile"] : "N/A";
    $emailaddress = isset($_POST["emailaddress"]) ? $_POST["emailaddress"] : "N/A";
    $FamBackTelephoneNumber = isset($_POST["FamBackTelephoneNumber"]) ? $_POST["FamBackTelephoneNumber"] : "N/A";
    $SpousesName = isset($_POST["SpousesName"]) ? $_POST["SpousesName"] : "N/A";
    $spouseNameExtention = isset($_POST["spouseNameExtention"]) ? $_POST["spouseNameExtention"] : "N/A";
    $spousefirstname = isset($_POST["spousefirstname"]) ? $_POST["spousefirstname"] : "N/A";
    $spousemiddlename = isset($_POST["spousemiddlename"]) ? $_POST["spousemiddlename"] : "N/A";
    $spouseChildrensNames = isset($_POST["spouseChildrensNames"]) ? $_POST["spouseChildrensNames"] : "N/A";
    $spouseoccupation = isset($_POST["spouseoccupation"]) ? $_POST["spouseoccupation"] : "N/A";
    $employee_businessname = isset($_POST["employee_businessname"]) ? $_POST["employee_businessname"] : "N/A";
    $businessaddress = isset($_POST["businessaddress"]) ? $_POST["businessaddress"] : "N/A";
    $spousetelephone = isset($_POST["spousetelephone"]) ? $_POST["spousetelephone"] : "N/A";
    
    // Remaining variables follow the same pattern
    
    // Continue similarly for other variables
    
    $firstChild = isset($_POST["1stChild"]) ? $_POST["1stChild"] : "N/A";
    $secondChild = isset($_POST["2ndChild"]) ? $_POST["2ndChild"] : "N/A";
    $thirdChild = isset($_POST["3rdChild"]) ? $_POST["3rdChild"] : "N/A";
    $fourthChild = isset($_POST["4rthCHild"]) ? $_POST["4rthCHild"] : "N/A";
    $fifthChild = isset($_POST["5thChild"]) ? $_POST["5thChild"] : "N/A";
    $sixthChild = isset($_POST["6thChild"]) ? $_POST["6thChild"] : "N/A";
    $seventhChild = isset($_POST["7thChild"]) ? $_POST["7thChild"] : "N/A";
    $eighthChild = isset($_POST["8thChild"]) ? $_POST["8thChild"] : "N/A";
    $ninthChild = isset($_POST["9thChild"]) ? $_POST["9thChild"] : "N/A";
    $tenthChild = isset($_POST["10thChild"]) ? $_POST["10thChild"] : "N/A";
    $eleventhChild = isset($_POST["11thCHild"]) ? $_POST["11thCHild"] : "N/A";
    $twelfthChild = isset($_POST["12Child"]) ? $_POST["12Child"] : "N/A";
    $firstChildBirthday = isset($_POST["1stChildBirthday"]) ? $_POST["1stChildBirthday"] : "N/A";
    $secondChildBirthday = isset($_POST["2ndChildBirthday"]) ? $_POST["2ndChildBirthday"] : "N/A";
    $thirdChildBirthday = isset($_POST["3rdChildBirthday"]) ? $_POST["3rdChildBirthday"] : "N/A";
    $fourthChildBirthday = isset($_POST["4rthCHildBirthday"]) ? $_POST["4rthCHildBirthday"] : "N/A";
    $fifthChildBirthday = isset($_POST["5thChildBirthday"]) ? $_POST["5thChildBirthday"] : "N/A";
    $sixthChildBirthday = isset($_POST["6thChildBirthday"]) ? $_POST["6thChildBirthday"] : "N/A";
    $seventhChildBirthday = isset($_POST["7thCHildBirthday"]) ? $_POST["7thCHildBirthday"] : "N/A";
    $eighthChildBirthday = isset($_POST["8thChildBirthday"]) ? $_POST["8thChildBirthday"] : "N/A";
    $ninthChildBirthday = isset($_POST["9thChildBirthday"]) ? $_POST["9thChildBirthday"] : "N/A";
    $tenthChildBirthday = isset($_POST["10thChildBirthday"]) ? $_POST["10thChildBirthday"] : "N/A";
    $eleventhChildBirthday = isset($_POST["11thCHildBirthday"]) ? $_POST["11thCHildBirthday"] : "N/A";
    $twelfthChildBirthday = isset($_POST["12ChildBirthday"]) ? $_POST["12ChildBirthday"] : "N/A";
    $Fatherssurname = isset($_POST["Fatherssurname"]) ? $_POST["Fatherssurname"] : "N/A";
    $fatherNameExtension = isset($_POST["fatherNameExtension"]) ? $_POST["fatherNameExtension"] : "N/A";
    $fatherfirstname = isset($_POST["fatherfirstname"]) ? $_POST["fatherfirstname"] : "N/A";
    $fathermiddlename = isset($_POST["fathermiddlename"]) ? $_POST["fathermiddlename"] : "N/A";
    $mothersmaidenname = isset($_POST["mothersmaidenname"]) ? $_POST["mothersmaidenname"] : "N/A";
    
    $motherssurname = isset($_POST["motherssurname"]) ? $_POST["motherssurname"] : "N/A";
    $motherfirstname = isset($_POST["motherfirstname"]) ? $_POST["motherfirstname"] : "N/A";
    $mothermiddlename = isset($_POST["mothermiddlename"]) ? $_POST["mothermiddlename"] : "N/A";
    $elem_nameofschool = isset($_POST["elem_nameofschool"]) ? $_POST["elem_nameofschool"] : "N/A";
    $elem_basiceducationaldegree = isset($_POST["elem_basiceducationaldegree"]) ? $_POST["elem_basiceducationaldegree"] : "N/A";
    $elem_pot_from = isset($_POST["elem_pot_from"]) ? $_POST["elem_pot_from"] : "N/A";
    $elem_pot_to = isset($_POST["elem_pot_to"]) ? $_POST["elem_pot_to"] : "N/A";
    $elem_highestlevel = isset($_POST["elem_highestlevel"]) ? $_POST["elem_highestlevel"] : "N/A";
    $elem_yeargraduated = isset($_POST["elem_yeargraduated"]) ? $_POST["elem_yeargraduated"] : "N/A";
    $elem_honorreceived = isset($_POST["elem_honorreceived"]) ? $_POST["elem_honorreceived"] : "N/A";
    $secondary_nameofschool = isset($_POST["secondary_nameofschool"]) ? $_POST["secondary_nameofschool"] : "N/A";
    $secondary_basiceducationaldegree = isset($_POST["secondary_basiceducationaldegree"]) ? $_POST["secondary_basiceducationaldegree"] : "N/A";
    $secondary_pot_from = isset($_POST["secondary_pot_from"]) ? $_POST["secondary_pot_from"] : "N/A";
    $secondary_pot_to = isset($_POST["secondary_pot_to"]) ? $_POST["secondary_pot_to"] : "N/A";
    $secondary_highestlevel = isset($_POST["secondary_highestlevel"]) ? $_POST["secondary_highestlevel"] : "N/A";
    $secondary_yeargraduated = isset($_POST["secondary_yeargraduated"]) ? $_POST["secondary_yeargraduated"] : "N/A";
    $secondary_honorreceived = isset($_POST["secondary_honorreceived"]) ? $_POST["secondary_honorreceived"] : "N/A";
    $vocationaltradecourse_nameofschool = isset($_POST["vocationaltradecourse_nameofschool"]) ? $_POST["vocationaltradecourse_nameofschool"] : "N/A";
    $vocationaltradecourse_basiceducationaldegree = isset($_POST["vocationaltradecourse_basiceducationaldegree"]) ? $_POST["vocationaltradecourse_basiceducationaldegree"] : "N/A";
    $vocationaltradecourse_pot_from = isset($_POST["vocationaltradecourse_pot_from"]) ? $_POST["vocationaltradecourse_pot_from"] : "N/A";
    $vocationaltradecourse_pot_to = isset($_POST["vocationaltradecourse_pot_to"]) ? $_POST["vocationaltradecourse_pot_to"] : "N/A";
    $vocationaltradecourse_highestlevel = isset($_POST["vocationaltradecourse_highestlevel"]) ? $_POST["vocationaltradecourse_highestlevel"] : "N/A";
    $vocationaltradecourse_yeargraduated = isset($_POST["vocationaltradecourse_yeargraduated"]) ? $_POST["vocationaltradecourse_yeargraduated"] : "N/A";
    $vocationaltradecourse_honorreceived = isset($_POST["vocationaltradecourse_honorreceived"]) ? $_POST["vocationaltradecourse_honorreceived"] : "N/A";
    
    
$college_nameofschool = isset($_POST["college_nameofschool"]) ? mysqli_real_escape_string($conn, $_POST["college_nameofschool"]) : "N/A";
$college_basiceducationaldegree = isset($_POST["college_basiceducationaldegree"]) ? mysqli_real_escape_string($conn, $_POST["college_basiceducationaldegree"]) : "N/A";
$college_pot_from = isset($_POST["college_pot_from"]) ? mysqli_real_escape_string($conn, $_POST["college_pot_from"]) : "N/A";
$college_pot_to = isset($_POST["college_pot_to"]) ? mysqli_real_escape_string($conn, $_POST["college_pot_to"]) : "N/A";
$college_highestlevel = isset($_POST["college_highestlevel"]) ? mysqli_real_escape_string($conn, $_POST["college_highestlevel"]) : "N/A";
$college_yeargraduated = isset($_POST["college_yeargraduated"]) ? mysqli_real_escape_string($conn, $_POST["college_yeargraduated"]) : "N/A";
$college_honorreceived = isset($_POST["college_honorreceived"]) ? mysqli_real_escape_string($conn, $_POST["college_honorreceived"]) : "N/A";
$graduatestudies_nameofschool = isset($_POST["graduatestudies_nameofschool"]) ? mysqli_real_escape_string($conn, $_POST["graduatestudies_nameofschool"]) : "N/A";
$graduatestudies_basiceducationaldegree = isset($_POST["graduatestudies_basiceducationaldegree"]) ? mysqli_real_escape_string($conn, $_POST["graduatestudies_basiceducationaldegree"]) : "N/A";
$graduatestudies_pot_from = isset($_POST["graduatestudies_pot_from"]) ? mysqli_real_escape_string($conn, $_POST["graduatestudies_pot_from"]) : "N/A";
$graduatestudies_pot_to = isset($_POST["graduatestudies_pot_to"]) ? mysqli_real_escape_string($conn, $_POST["graduatestudies_pot_to"]) : "N/A";
$graduatestudies_highestlevel = isset($_POST["graduatestudies_highestlevel"]) ? mysqli_real_escape_string($conn, $_POST["graduatestudies_highestlevel"]) : "N/A";
$graduatestudies_yeargraduated = isset($_POST["graduatestudies_yeargraduated"]) ? mysqli_real_escape_string($conn, $_POST["graduatestudies_yeargraduated"]) : "N/A";
$graduatestudies_honorreceived = isset($_POST["graduatestudies_honorreceived"]) ? mysqli_real_escape_string($conn, $_POST["graduatestudies_honorreceived"]) : "N/A";
$date26 = isset($_POST["26date"]) ? mysqli_real_escape_string($conn, $_POST["26date"]) : "N/A";
$page2Date = isset($_POST["page2Date"]) ? mysqli_real_escape_string($conn, $_POST["page2Date"]) : "N/A";
    // Continue similarly for other variables
            





















//*******************************************************************************************************start of uncomment here */



    
   
//=====================================first block===============================================================
    // SQL query to insert data
    $sql = "UPDATE `pds` SET
    `DateofBirth` = '$DateofBirth',
    `PlaceofBirth` = '$PlaceofBirth',
    `Sex` = '$Loop_Sex',
    `civilstatus` = '$Loop_civilstatus',
    `ifOtherDetails` = '$ifOtherDetails',
    `Citizenship` = '$Loop_Citizenship',
    `ifDualCitizenship` = '$Loop_ifDualCitizenship',
    `pleaseIndicateCountry` = '$pleaseIndicateCountry',
    `pleaseIndicateDetails` = '$pleaseIndicateDetails',
    `Religion` = '$Religion',
    `height` = '$height',
    `weight` = '$weight',
    `bloodtype` = '$bloodtype',
    `gsisidno` = '$gsisidno',
    `pagibigidno` = '$pagibigidno',
    `philhealth_no` = '$philhealth_no',
    `sssno` = '$sssno',
    `tinno` = '$tinno',
    `agencyemployeeno` = '$agencyemployeeno',
    `resaddress_house_block_lotno` = '$resaddress_house_block_lotno',
    `resaddress_subdivision_village` = '$resaddress_subdivision_village',
    `resaddress_city_municipality` = '$resaddress_city_municipality',
    `resaddress_street` = '$resaddress_street',
    `resaddress_barangay` = '$resaddress_barangay',
    `resaddress_province` = '$resaddress_province',
    `resaddress_zipcode` = '$resaddress_zipcode',
    `permaddress_house_block_lotno` = '$permaddress_house_block_lotno',
    `permaddress_subdivision_village` = '$permaddress_subdivision_village',
    `permaddress_city_municipality` = '$permaddress_city_municipality',
    `permaddress_street` = '$permaddress_street',
    `permaddress_barangay` = '$permaddress_barangay',
    `permaddress_province` = '$permaddress_province',
    `permaddress_zipcode` = '$permaddress_zipcode',
    `PStelephone` = '$PStelephone',
    `mobile` = '$mobile',
    `emailaddress` = '$emailaddress',
    `FamBackTelephoneNumber` = '$FamBackTelephoneNumber',
    `SpousesName` = '$SpousesName',
    `spouseNameExtention` = '$spouseNameExtention',
    `spousefirstname` = '$spousefirstname',
    `spousemiddlename` = '$spousemiddlename',
    `spouseChildrensNames` = '$spouseChildrensNames',
    `spouseoccupation` = '$spouseoccupation',
    `employee_businessname` = '$employee_businessname',
    `businessaddress` = '$businessaddress',
    `spousetelephone` = '$spousetelephone',
    `1stChild` = '$firstChild',
    `2ndChild` = '$secondChild',
    `3rdChild` = '$thirdChild',
    `4rthCHild` = '$fourthChild',
    `5thChild` = '$fifthChild',
    `6thChild` = '$sixthChild',
    `7thChild` = '$seventhChild',
    `8thChild` = '$eighthChild',
    `9thChild` = '$ninthChild',
    `10thChild` = '$tenthChild',
    `11thCHild` = '$eleventhChild',
    `12Child` = '$twelfthChild',
    `1stChildBirthday` = '$firstChildBirthday',
    `2ndChildBirthday` = '$secondChildBirthday',
    `3rdChildBirthday` = '$thirdChildBirthday',
    `4rthCHildBirthday` = '$fourthChildBirthday',
    `5thChildBirthday` = '$fifthChildBirthday',
    `6thChildBirthday` = '$sixthChildBirthday',
    `7thCHildBirthday` = '$seventhChildBirthday',
    `8thChildBirthday` = '$eighthChildBirthday',
    `9thChildBirthday` = '$ninthChildBirthday',
    `10thChildBirthday` = '$tenthChildBirthday',
    `11thCHildBirthday` = '$eleventhChildBirthday',
    `12ChildBirthday` = '$twelfthChildBirthday',
    `Fatherssurname` = '$Fatherssurname',
    `fatherNameExtension` = '$fatherNameExtension',
    `fatherfirstname` = '$fatherfirstname',
    `fathermiddlename` = '$fathermiddlename',
    `mothersmaidenname` = '$mothersmaidenname',
    `motherssurname` = '$motherssurname',
    `motherfirstname` = '$motherfirstname',
    `mothermiddlename` = '$mothermiddlename',
    `elem_nameofschool` = '$elem_nameofschool',
    `elem_basiceducationaldegree` = '$elem_basiceducationaldegree',
    `elem_pot_from` = '$elem_pot_from',
    `elem_pot_to` = '$elem_pot_to',
    `elem_highestlevel` = '$elem_highestlevel',
    `elem_yeargraduated` = '$elem_yeargraduated',
    `elem_honorreceived` = '$elem_honorreceived',
    `secondary_nameofschool` = '$secondary_nameofschool',
    `secondary_basiceducationaldegree` = '$secondary_basiceducationaldegree',
    `secondary_pot_from` = '$secondary_pot_from',
    `secondary_pot_to` = '$secondary_pot_to',
    `secondary_highestlevel` = '$secondary_highestlevel',
    `secondary_yeargraduated` = '$secondary_yeargraduated',
    `secondary_honorreceived` = '$secondary_honorreceived',
    `vocationaltradecourse_nameofschool` = '$vocationaltradecourse_nameofschool',
    `vocationaltradecourse_basiceducationaldegree` = '$vocationaltradecourse_basiceducationaldegree',
    `vocationaltradecourse_pot_from` = '$vocationaltradecourse_pot_from',
    `vocationaltradecourse_pot_to` = '$vocationaltradecourse_pot_to',
    `vocationaltradecourse_highestlevel` = '$vocationaltradecourse_highestlevel',
    `vocationaltradecourse_yeargraduated` = '$vocationaltradecourse_yeargraduated',
    `vocationaltradecourse_honorreceived` = '$vocationaltradecourse_honorreceived',
    `college_nameofschool` = '$college_nameofschool',
    `college_basiceducationaldegree` = '$college_basiceducationaldegree',
    `college_pot_from` = '$college_pot_from',
    `college_pot_to` = '$college_pot_to',
    `college_highestlevel` = '$college_highestlevel',
    `college_yeargraduated` = '$college_yeargraduated',
    `college_honorreceived` = '$college_honorreceived',
    `graduatestudies_nameofschool` = '$graduatestudies_nameofschool',
    `graduatestudies_basiceducationaldegree` = '$graduatestudies_basiceducationaldegree',
    `graduatestudies_pot_from` = '$graduatestudies_pot_from',
    `graduatestudies_pot_to` = '$graduatestudies_pot_to',
    `graduatestudies_highestlevel` = '$graduatestudies_highestlevel',
    `graduatestudies_yeargraduated` = '$graduatestudies_yeargraduated',
    `graduatestudies_honorreceived` = '$graduatestudies_honorreceived',
    `26date` = '$date26',
    `page2Date` = '$page2Date'
WHERE
    `surname` = '$surname' AND
    `firstname` = '$firstname' AND
    `middlename` = '$middlename' AND
    `nameextension` = '$nameextension'";


if (mysqli_query($conn, $sql)) {
    echo "<script>
            alert('Data updated successfully');
            window.location.href = 'Main_PDS.php';
          </script>";
    // echo 'hello';
} else {
    echo "<script>
    alert('An error occurred while updating your request. Please try again later.');
    window.location.href = 'Main_PDS.php';
  </script>";
    error_log("MySQL Error: " . mysqli_error($conn) . ", Query: " . $sql);
}


//===========================================================================================================
// Second code block



// Construct the SQL query for update
$sqlSecondPpds = "UPDATE pds_2ndpage SET
    CSEnum27 = ?,
    rating = ?,
    dateOfExamination = ?,
    placeOfExamination = ?,
    License_Number = ?,
    License_DateOfValidity = ?
WHERE
    referenceRowID = ? AND surname = ? AND firstname = ? AND middlename = ? AND nameextension = ?";

// Prepare the SQL statement
$stmt_pdsP2Table = $conn->prepare($sqlSecondPpds);

// Bind parameters to the prepared statement
$stmt_pdsP2Table->bind_param("ssssssissss", $CSEnum27, $rating, $dateOfExamination, $placeOfExamination, $License_Number, $License_DateOfValidity, $referenceRowID, $surname,$firstname,$middlename,$nameextension);

// Iterate through the POST data
foreach ($_POST['CSEnum27'] as $key => $value) {
    // Extract data from each cell
    $CSEnum27 = $_POST['CSEnum27'][$key];
    $rating = $_POST['rating'][$key];
    $dateOfExamination = $_POST['dateOfExamination'][$key];
    $placeOfExamination = $_POST['placeOfExamination'][$key];
    $License_Number = $_POST['License_Number'][$key];
    $License_DateOfValidity = $_POST['License_DateOfValidity'][$key];
    $referenceRowID = $key + 1; // Assuming referenceRowID starts from 1
    
    // Execute the prepared statement for the current row of data
    $stmt_pdsP2Table->execute();
}

// Close the prepared statement
$stmt_pdsP2Table->close();






//===================================================


$sqlp3LoopArrayWrkExp = "SELECT p.referenceWrkexprID
FROM pdspage2_workexperience p
INNER JOIN employeeid e ON 
    p.surname = e.surname AND 
    p.firstname = e.firstname AND 
    p.middlename = e.middle_name AND 
    p.nameextension = e.name_extension
WHERE 
    (e.EmployeeID = ?) ORDER BY STR_TO_DATE(inclusiveDatesFrom, '%m/%d/%Y') DESC;
     ";
// echo $sqlp3LoopArrayWrkExp;
$workExpArray = [];
// Prepare the SQL statement
$stmt = $conn->prepare($sqlp3LoopArrayWrkExp);
$stmt->bind_param("s", $search); // 's' specifies the variable type => 'string'

// Execute the statement
$stmt->execute();
$result = $stmt->get_result();

// Initialize row counter
$countArray = 0;

if ($result->num_rows > 0) {
  // Loop through the results
  while ($row = $result->fetch_assoc()) {
    $workExpArray[] = $row["referenceWrkexprID"];
    $countArray++;
    // Display the data here, or do something with it
  }
}

// Construct the SQL query for update
$sql_pdsPage2_workExperience = "UPDATE pdspage2_workexperience SET
    inclusiveDatesFrom = ?,
    inclusiveDatesTo = ?,
    monthlySalary = ?,
    positionTitle = ?,
    departmentAgencyOffice = ?,
    salaryJobPay = ?,
    statusOfAppointment = ?,
    govService = ?
WHERE
    referenceWrkexprID = ? AND surname = ? AND firstname = ? AND middlename = ? AND nameextension = ?";

// Prepare the SQL statement
$stmt_pdsPage2_workExperience = $conn->prepare($sql_pdsPage2_workExperience);

if ($stmt_pdsPage2_workExperience === false) {
    die('Prepare failed: ' . $conn->error);
}

// Bind parameters to the prepared statement
// "ssssssssissss" - s for string, i for integer
$stmt_pdsPage2_workExperience->bind_param("ssssssssissss", 
    $inclusiveDatesFrom, 
    $inclusiveDatesTo, 
    $monthlySalary, 
    $positionTitle, 
    $departmentAgencyOffice, 
    $salaryJobPay, 
    $statusOfAppointment, 
    $govService, 
    $referenceWrkexprID,
    $surname, 
    $firstname, 
    $middlename, 
    $nameextension
);

// Iterate through the POST data
foreach ($_POST['inclusiveDatesFrom'] as $key => $value) {
    // Extract data from each cell
    $inclusiveDatesFrom = $_POST['inclusiveDatesFrom'][$key];
    $inclusiveDatesTo = $_POST['inclusiveDatesTo'][$key];
    $monthlySalary = $_POST['monthlySalary'][$key];
    $positionTitle = $_POST['positionTitle'][$key];
    $departmentAgencyOffice = $_POST['departmentAgencyOffice'][$key];
    $salaryJobPay = $_POST['salaryJobPay'][$key];
    $statusOfAppointment = $_POST['statusOfAppointment'][$key];
    $govService = $_POST['govService'][$key];
    $referenceWrkexprID = $_POST['referenceWrkexprID'][$key];

    // Additional data for WHERE clause
    $surname = $_POST['surname'];
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $nameextension = $_POST['nameextension'];

    // Execute the prepared statement for the current row of data
    if (!$stmt_pdsPage2_workExperience->execute()) {
        echo "Execute failed: " . $stmt_pdsPage2_workExperience->error;
    } else {
        // echo $referenceWrkexprID. '|';
    }
}

// Close the prepared statement
$stmt_pdsPage2_workExperience->close();


//========================================pds p3 t1


// Prepare the SQL UPDATE statement
$sql_pds_p3_otherinformation_t3 = "UPDATE pds_p3_otherinformation_t3 SET specialSkillsandHobbies = ?, recognition = ?, membership_Assoc = ? WHERE referenceRowT3 = ? AND surname = ? AND firstname = ? AND middlename = ? AND nameextension = ?";
$stmt_pds_p3_otherinformation_t3 = $conn->prepare($sql_pds_p3_otherinformation_t3);
$refereIDp3t3 =0;
foreach ($_POST['specialSkillsandHobbies'] as $key => $value) {
    // Extract data from each cell
    $specialSkillsandHobbies = $_POST['specialSkillsandHobbies'][$key];
    $recognition = $_POST['recognition'][$key];
    $membership_Assoc = $_POST['membership_Assoc'][$key];
    $refereIDp3t3 = $key + 1;
    // Assume 'id' values are being sent for each row to update
    

    // Re-bind the parameters, including the ID for the WHERE clause
    $stmt_pds_p3_otherinformation_t3->bind_param("sssissss", $specialSkillsandHobbies, $recognition, $membership_Assoc, $refereIDp3t3,$surname, $firstname, $middlename, $nameextension);

    // Execute the prepared statement for the current row of data
    $stmt_pds_p3_otherinformation_t3->execute();
}

// Close the prepared statement
$stmt_pds_p3_otherinformation_t3->close();




// Construct the SQL query for update
$sql_pds_p3_voluntaryworkorinvomenttable = "UPDATE pds_p3_voluntaryworkorinvomenttable SET
    nameAddofOrg = ?,
    inclusiveDatesFromP3 = ?,
    inclusiveDatesToP3 = ?,
    numberOfHours = ?,
    positionNatureOfWork = ?
   
WHERE
rowReference = ? AND surname = ? AND firstname = ? AND middlename = ? AND nameextension = ?";

// Prepare the SQL statement
$stmt_pds_p3_voluntaryworkorinvomenttable  = $conn->prepare($sql_pds_p3_voluntaryworkorinvomenttable);

// Bind parameters to the prepared statement
$stmt_pds_p3_voluntaryworkorinvomenttable->bind_param("sssssissss", $nameAddofOrg, $inclusiveDatesFromP3, $inclusiveDatesToP3, $numberOfHours, $positionNatureOfWork, $refereID, $surname, $firstname, $middlename, $nameextension);

$refereID = 0;
// Iterate through the POST data
foreach ($_POST['nameAddofOrg'] as $key => $value) {
    // Extract data from each cell
    $nameAddofOrg = $_POST['nameAddofOrg'][$key];
    $inclusiveDatesFromP3 = $_POST['inclusiveDatesFromP3'][$key];
    // echo $inclusiveDatesFromP3." ";
    $inclusiveDatesToP3 = $_POST['inclusiveDatesToP3'][$key];
    $numberOfHours = $_POST['numberOfHours'][$key];
    $positionNatureOfWork = $_POST['positionNatureOfWork'][$key];
    $refereID = $key + 1; // Assuming referenceRowID starts from 1
    
    // Execute the prepared statement for the current row of data
    $stmt_pds_p3_voluntaryworkorinvomenttable ->execute();
}

// Close the prepared statement
$stmt_pds_p3_voluntaryworkorinvomenttable ->close();




//=========================================================

//==============================================pds p3 t2

// Prepare the SQL UPDATE statement

$sql_pds_p3_titleoflearnanddevintervsn_2ndtable = "UPDATE pds_p3_titleoflearnanddevintervsn_2ndtable SET  titleoflearnAndIntervsn = ?, inclusiveDatesFromT2 = ?, inclusiveDatesToT2 = ?, numOfHours = ?, typeOfLD = ?, ConductedSponsoredby = ? 
                                            WHERE rowReference = ? AND surname = ? AND firstname = ? AND middlename = ? AND nameextension = ?";

$stmt_pds_p3_titleoflearnanddevintervsn_2ndtable = $conn->prepare($sql_pds_p3_titleoflearnanddevintervsn_2ndtable);
$refereIDp3t2 = 0;
// Assume each row's unique identifier ('id') is provided
foreach ($_POST['titleoflearnAndIntervsn'] as $key => $value) {
    // Extract and assign all necessary variables from $_POST
    $titleoflearnAndIntervsn = $_POST['titleoflearnAndIntervsn'][$key];
    $inclusiveDatesFromT2 = $_POST['inclusiveDatesFromT2'][$key];
 
    $inclusiveDatesToT2 = $_POST['inclusiveDatesToT2'][$key];
    $numOfHours = $_POST['numOfHours'][$key];
    $typeOfLD = $_POST['typeOfLD'][$key];
    $ConductedSponsoredby = $_POST['ConductedSponsoredby'][$key];
    // Assume a corresponding 'id' field is submitted with the form for identifying the row to update
    $refereIDp3t2 = $_POST['rowReference'][$key];
    // Re-bind the parameters including the ID for the WHERE clause
    $stmt_pds_p3_titleoflearnanddevintervsn_2ndtable->bind_param("ssssssissss",  $titleoflearnAndIntervsn, $inclusiveDatesFromT2, $inclusiveDatesToT2, $numOfHours, $typeOfLD, $ConductedSponsoredby, $refereIDp3t2, $surname, $firstname, $middlename, $nameextension);

    // Execute the prepared statement for the current row of data
    $stmt_pds_p3_titleoflearnanddevintervsn_2ndtable->execute();
}

// Close the prepared statement
$stmt_pds_p3_titleoflearnanddevintervsn_2ndtable->close();



//=======================================

//==================================================pds p3 t3




//======================================================



//=============================p4

$a_Within3rdDegreenum34 = isset($_POST["a_Within3rdDegreenum34"]) ? $_POST["a_Within3rdDegreenum34"] : array();//num34
$Loop_a_Within3rdDegreenum34 = !empty($a_Within3rdDegreenum34) ? implode(", ", $a_Within3rdDegreenum34) : "N/A";

$b_Within4thDegreenum34 = isset($_POST["b_Within4thDegreenum34"]) ? $_POST["b_Within4thDegreenum34"] : array();
$Loop_b_Within4thDegreenum34 = !empty($b_Within4thDegreenum34) ? implode(", ", $b_Within4thDegreenum34) : "N/A";

$ifYesDetails_num34 = isset($_POST["ifYesDetails_num34"]) ? $_POST["ifYesDetails_num34"] : "N/A";

$a_p4_num35 = isset($_POST["a_p4_num35"]) ? $_POST["a_p4_num35"] : array();//num35
$Loop_a_p4_num35 = !empty($a_p4_num35) ? implode(", ", $a_p4_num35) : "N/A";

$ifYesDetail_num35 = isset($_POST["ifYesDetail_num35"]) ? $_POST["ifYesDetail_num35"] : "N/A";


$b_p4_num35 = isset($_POST["b_p4_num35"]) ? $_POST["b_p4_num35"] : array();
$Loop_b_p4_num35 = !empty($b_p4_num35) ? implode(", ", $b_p4_num35) : "N/A";

$b_ifYesDetails_num35 = isset($_POST["b_ifYesDetails_num35"]) ? $_POST["b_ifYesDetails_num35"] : "N/A";

$dateFilednum35 = isset($_POST["dateFilednum35"]) ? $_POST["dateFilednum35"] : "N/A";//-----

$statusOfCasenum35 = isset($_POST["statusOfCasenum35"]) ? $_POST["statusOfCasenum35"] : "N/A";//-----

$num36_p4 = isset($_POST["num36_p4"]) ? $_POST["num36_p4"] : array();//num36
$Loop_num36_p4 = !empty($num36_p4) ? implode(", ", $num36_p4) : "N/A";

$ifYesDetails_num36 = isset($_POST["ifYesDetails_num36"]) ? $_POST["ifYesDetails_num36"] : "N/A";

$num37_p4 = isset($_POST["num37_p4"]) ? $_POST["num37_p4"] : array();//num37
$Loop_num37_p4 = !empty($num37_p4) ? implode(", ", $num37_p4) : "N/A";

$ifYesDetails_num37 = isset($_POST["ifYesDetails_num37"]) ? $_POST["ifYesDetails_num37"] : "N/A";

$a_p4_num38 = isset($_POST["a_p4_num38"]) ? $_POST["a_p4_num38"] : array();//num38
$Loop_a_p4_num38 = !empty($a_p4_num38) ? implode(", ", $a_p4_num38) : "N/A";

$a_ifYesDetails_num38 = isset($_POST["a_ifYesDetails_num38"]) ? $_POST["a_ifYesDetails_num38"] : "N/A";

$b_p4_num38 = isset($_POST["b_p4_num38"]) ? $_POST["b_p4_num38"] : array(); 
$Loop_b_p4_num38 = !empty($b_p4_num38) ? implode(", ", $b_p4_num38) : "N/A";

$b_ifYesDetails_num38 = isset($_POST["b_ifYesDetails_num38"]) ? $_POST["b_ifYesDetails_num38"] : "N/A";

$num39_p4 = isset($_POST["num39_p4"]) ? $_POST["num39_p4"] : array();//num39
$Loop_num39_p4 = !empty($num39_p4) ? implode(", ", $num39_p4) : "N/A";

$num39_ifYesDetail = isset($_POST["num39_ifYesDetail"]) ? $_POST["num39_ifYesDetail"] : "N/A";


$a_num40 = isset($_POST["a_num40"]) ? $_POST["a_num40"] : array();//num40
$Loop_a_num40 = !empty($a_num40) ? implode(", ", $a_num40) : "N/A";

$a_ifYesDetail_num40 = isset($_POST["a_ifYesDetail_num40"]) ? $_POST["a_ifYesDetail_num40"] : "N/A";

$b_num40 = isset($_POST["b_num40"]) ? $_POST["b_num40"] : array();
$Loop_b_num40 = !empty($b_num40) ? implode(", ", $b_num40) : "N/A";

$b_ifYesDetail_num40 = isset($_POST["b_ifYesDetail_num40"]) ? $_POST["b_ifYesDetail_num40"] : "N/A";

$c_num40 = isset($_POST["c_num40"]) ? $_POST["c_num40"] : array();
$Loop_c_num40 = !empty($c_num40) ? implode(", ", $c_num40) : "N/A";

$c_ifYesDetails_num40 = isset($_POST["c_ifYesDetails_num40"]) ? $_POST["c_ifYesDetails_num40"] : "N/A";


$references_name_r1 = isset($_POST["references_name_r1"]) ? $_POST["references_name_r1"] : "N/A";//--

$references_address_r1 = isset($_POST["references_address_r1"]) ? $_POST["references_address_r1"] : "N/A";//--

$references_telno_r1 = isset($_POST["references_telno_r1"]) ? $_POST["references_telno_r1"] : "N/A";//--


$references_name_r2 = isset($_POST["references_name_r2"]) ? $_POST["references_name_r2"] : "N/A";//--

$references_address_r2 = isset($_POST["references_address_r2"]) ? $_POST["references_address_r2"] : "N/A";//--

$references_telno_r2 = isset($_POST["references_telno_r2"]) ? $_POST["references_telno_r2"] : "N/A";//--


$governmentIssueID = isset($_POST["governmentIssueID"]) ? $_POST["governmentIssueID"] : "N/A";//--

$ID_licence_Pass = isset($_POST["ID_licence_Pass"]) ? $_POST["ID_licence_Pass"] : "N/A";//--

$Day_PlaceofIssuance = isset($_POST["Day_PlaceofIssuance"]) ? $_POST["Day_PlaceofIssuance"] : "N/A";//--

$subscribe_and_sworn = isset($_POST["subscribe_and_sworn"]) ? $_POST["subscribe_and_sworn"] : "N/A";//--



// Your $conn connection code should be here

$sql = "UPDATE pds_p4 SET
    a_Within3rdDegreenum34 = ?, b_Within4thDegreenum34 = ?, ifYesDetails_num34 = ?, 
    a_p4_num35 = ?, ifYesDetail_num35 = ?, b_p4_num35 = ?, b_ifYesDetails_num35 = ?, dateFilednum35 = ?, 
    statusOfCasenum35 = ?, num36_p4 = ?, ifYesDetails_num36 = ?, num37_p4 = ?, ifYesDetails_num37 = ?, 
    a_p4_num38 = ?, a_ifYesDetails_num38 = ?, b_p4_num38 = ?, b_ifYesDetails_num38 = ?, num39_p4 = ?, 
    num39_ifYesDetail = ?, a_num40 = ?, a_ifYesDetail_num40 = ?, b_num40 = ?, b_ifYesDetail_num40 = ?, 
    c_num40 = ?, c_ifYesDetails_num40 = ?, references_name_r1 = ?, references_address_r1 = ?, 
    references_telno_r1 = ?, references_name_r2 = ?, references_address_r2 = ?, 
    references_telno_r2 = ?, governmentIssueID = ?, ID_licence_Pass = ?, Day_PlaceofIssuance = ?, 
    subscribe_and_sworn = ?
WHERE surname = ? AND firstname = ?  AND middlename = ? AND nameextension = ?";

$stmt = mysqli_prepare($conn, $sql);

mysqli_stmt_bind_param($stmt, 'sssssssssssssssssssssssssssssssssssssss',
    $Loop_a_Within3rdDegreenum34, $Loop_b_Within4thDegreenum34, $ifYesDetails_num34, 
    $Loop_a_p4_num35, $ifYesDetail_num35, $Loop_b_p4_num35, $b_ifYesDetails_num35, $dateFilednum35, 
    $statusOfCasenum35, $Loop_num36_p4, $ifYesDetails_num36, $Loop_num37_p4, $ifYesDetails_num37, 
    $Loop_a_p4_num38, $a_ifYesDetails_num38, $Loop_b_p4_num38, $b_ifYesDetails_num38, $Loop_num39_p4, 
    $num39_ifYesDetail, $Loop_a_num40, $a_ifYesDetail_num40, $Loop_b_num40, $b_ifYesDetail_num40, 
    $Loop_c_num40, $c_ifYesDetails_num40, $references_name_r1, $references_address_r1, 
    $references_telno_r1, $references_name_r2, $references_address_r2, 
    $references_telno_r2, $governmentIssueID, $ID_licence_Pass, $Day_PlaceofIssuance, 
    $subscribe_and_sworn,
    // Reference identifiers
    $surname, $firstname, $middlename, $nameextension
);


if (mysqli_stmt_execute($stmt)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_stmt_close($stmt);




//===================================



}
// Close the connection
mysqli_close($conn);

?>






<!-- 


================================================================================================================


// echo"$sql";

// try {
//     // Execute the query
//     if (mysqli_query($conn, $sql)) {
//         echo "<script>
//                 alert('New data is created');
//                 window.location.href = 'PDS_page_1.php';
//               </script>";
//     } else {
//         throw new Exception("An error occurred while processing your request.");
//     }
// } catch (Exception $e) {
//     // Handle the exception
//     echo "<script>
//         alert('Error: " . $e->getMessage() . "');
//         window.location.href = 'PDS_page_1.php'; // Redirect to a relevant page
//     </script>";
//     // Log the error for debugging purposes
//     error_log("MySQL Error: " . mysqli_error($conn) . ", Query: " . $sql);
// }

=======================================================================================================================
$surname = isset($_POST["surname"]) ? $_POST["surname"] : "N/A";
    $firstname = isset($_POST["firstname"]) ? $_POST["firstname"] : "N/A";
    $middlename = isset($_POST["middlename"]) ? $_POST["middlename"] : "N/A";
    $nameextension = isset($_POST["nameextension"]) ? $_POST["nameextension"] : "N/A";
    $DateofBirth = isset($_POST["DateofBirth"]) ? $_POST["DateofBirth"] : "N/A";
    $PlaceofBirth = isset($_POST["PlaceofBirth"]) ? $_POST["PlaceofBirth"] : "N/A";
    
    $Sex = isset($_POST["Sex"]) ? $_POST["Sex"] : array();
    $Loop_Sex = !empty($Sex) ? implode(", ", $Sex) : "N/A";
    
    $civilstatus = isset($_POST["civilstatus"]) ? $_POST["civilstatus"] : array();
    $Loop_civilstatus = !empty($civilstatus) ? implode(", ", $civilstatus) : "N/A";
    
    $ifOtherDetails = isset($_POST["ifOtherDetails"]) ? $_POST["ifOtherDetails"] : "N/A";
    
    $Citizenship = isset($_POST["Citizenship"]) ? $_POST["Citizenship"] : array();
    $Loop_Citizenship = !empty($Citizenship) ? implode(", ", $Citizenship) : "N/A";
    
    $ifDualCitizenship = isset($_POST["ifDualCitizenship"]) ? $_POST["ifDualCitizenship"] : array();
    $Loop_ifDualCitizenship = !empty($ifDualCitizenship) ? implode(", ", $ifDualCitizenship) : "N/A";
    
    $pleaseIndicateCountry = isset($_POST["pleaseIndicateCountry"]) ? $_POST["pleaseIndicateCountry"] : "N/A";
    $pleaseIndicateDetails = isset($_POST["pleaseIndicateDetails"]) ? $_POST["pleaseIndicateDetails"] : "Haluha";
    $Religion = isset($_POST["Religion"]) ? $_POST["Religion"] : "N/A";
    $height = isset($_POST["height"]) ? $_POST["height"] : "N/A";
    $weight = isset($_POST["weight"]) ? $_POST["weight"] : "N/A";
    $bloodtype = isset($_POST["bloodtype"]) ? $_POST["bloodtype"] : "N/A";
    $gsisidno = isset($_POST["gsisidno"]) ? $_POST["gsisidno"] : "N/A";
    $pagibigidno = isset($_POST["pagibigidno"]) ? $_POST["pagibigidno"] : "N/A";
    $philhealth_no = isset($_POST["philhealth_no"]) ? $_POST["philhealth_no"] : "N/A";
    
    // Remaining variables follow the same pattern
    
    // Continue similarly for other variables
    $sssno = isset($_POST["sssno"]) ? $_POST["sssno"] : "N/A";
    $tinno = isset($_POST["tinno"]) ? $_POST["tinno"] : "N/A";
    $agencyemployeeno = isset($_POST["agencyemployeeno"]) ? $_POST["agencyemployeeno"] : "N/A";
    $resaddress_house_block_lotno = isset($_POST["resaddress_house_block_lotno"]) ? $_POST["resaddress_house_block_lotno"] : "N/A";
    $resaddress_subdivision_village = isset($_POST["resaddress_subdivision_village"]) ? $_POST["resaddress_subdivision_village"] : "N/A";
    $resaddress_city_municipality = isset($_POST["resaddress_city_municipality"]) ? $_POST["resaddress_city_municipality"] : "N/A";
    $resaddress_street = isset($_POST["resaddress_street"]) ? $_POST["resaddress_street"] : "N/A";
    $resaddress_barangay = isset($_POST["resaddress_barangay"]) ? $_POST["resaddress_barangay"] : "N/A";
    $resaddress_province = isset($_POST["resaddress_province"]) ? $_POST["resaddress_province"] : "N/A";
    $resaddress_zipcode = isset($_POST["resaddress_zipcode"]) ? $_POST["resaddress_zipcode"] : "N/A";
    $permaddress_house_block_lotno = isset($_POST["permaddress_house_block_lotno"]) ? $_POST["permaddress_house_block_lotno"] : "N/A";
    $permaddress_subdivision_village = isset($_POST["permaddress_subdivision_village"]) ? $_POST["permaddress_subdivision_village"] : "N/A";
    $permaddress_city_municipality = isset($_POST["permaddress_city_municipality"]) ? $_POST["permaddress_city_municipality"] : "N/A";
    $permaddress_street = isset($_POST["permaddress_street"]) ? $_POST["permaddress_street"] : "N/A";
    $permaddress_barangay = isset($_POST["permaddress_barangay"]) ? $_POST["permaddress_barangay"] : "N/A";
    $permaddress_province = isset($_POST["permaddress_province"]) ? $_POST["permaddress_province"] : "N/A";
    $permaddress_zipcode = isset($_POST["permaddress_zipcode"]) ? $_POST["permaddress_zipcode"] : "N/A";
    $PStelephone = isset($_POST["PStelephone"]) ? $_POST["PStelephone"] : "N/A";
    $mobile = isset($_POST["mobile"]) ? $_POST["mobile"] : "N/A";
    $emailaddress = isset($_POST["emailaddress"]) ? $_POST["emailaddress"] : "N/A";
    $FamBackTelephoneNumber = isset($_POST["FamBackTelephoneNumber"]) ? $_POST["FamBackTelephoneNumber"] : "N/A";
    $SpousesName = isset($_POST["SpousesName"]) ? $_POST["SpousesName"] : "N/A";
    $spouseNameExtention = isset($_POST["spouseNameExtention"]) ? $_POST["spouseNameExtention"] : "N/A";
    $spousefirstname = isset($_POST["spousefirstname"]) ? $_POST["spousefirstname"] : "N/A";
    $spousemiddlename = isset($_POST["spousemiddlename"]) ? $_POST["spousemiddlename"] : "N/A";
    $spouseChildrensNames = isset($_POST["spouseChildrensNames"]) ? $_POST["spouseChildrensNames"] : "N/A";
    $spouseoccupation = isset($_POST["spouseoccupation"]) ? $_POST["spouseoccupation"] : "N/A";
    $employee_businessname = isset($_POST["employee_businessname"]) ? $_POST["employee_businessname"] : "N/A";
    $businessaddress = isset($_POST["businessaddress"]) ? $_POST["businessaddress"] : "N/A";
    $spousetelephone = isset($_POST["spousetelephone"]) ? $_POST["spousetelephone"] : "N/A";
    
    // Remaining variables follow the same pattern
    
    // Continue similarly for other variables
    
    $firstChild = isset($_POST["1stChild"]) ? $_POST["1stChild"] : "N/A";
    $secondChild = isset($_POST["2ndChild"]) ? $_POST["2ndChild"] : "N/A";
    $thirdChild = isset($_POST["3rdChild"]) ? $_POST["3rdChild"] : "N/A";
    $fourthChild = isset($_POST["4rthCHild"]) ? $_POST["4rthCHild"] : "N/A";
    $fifthChild = isset($_POST["5thChild"]) ? $_POST["5thChild"] : "N/A";
    $sixthChild = isset($_POST["6thChild"]) ? $_POST["6thChild"] : "N/A";
    $seventhChild = isset($_POST["7thChild"]) ? $_POST["7thChild"] : "N/A";
    $eighthChild = isset($_POST["8thChild"]) ? $_POST["8thChild"] : "N/A";
    $ninthChild = isset($_POST["9thChild"]) ? $_POST["9thChild"] : "N/A";
    $tenthChild = isset($_POST["10thChild"]) ? $_POST["10thChild"] : "N/A";
    $eleventhChild = isset($_POST["11thCHild"]) ? $_POST["11thCHild"] : "N/A";
    $twelfthChild = isset($_POST["12Child"]) ? $_POST["12Child"] : "N/A";
    $firstChildBirthday = isset($_POST["1stChildBirthday"]) ? $_POST["1stChildBirthday"] : "N/A";
    $secondChildBirthday = isset($_POST["2ndChildBirthday"]) ? $_POST["2ndChildBirthday"] : "N/A";
    $thirdChildBirthday = isset($_POST["3rdChildBirthday"]) ? $_POST["3rdChildBirthday"] : "N/A";
    $fourthChildBirthday = isset($_POST["4rthCHildBirthday"]) ? $_POST["4rthCHildBirthday"] : "N/A";
    $fifthChildBirthday = isset($_POST["5thChildBirthday"]) ? $_POST["5thChildBirthday"] : "N/A";
    $sixthChildBirthday = isset($_POST["6thChildBirthday"]) ? $_POST["6thChildBirthday"] : "N/A";
    $seventhChildBirthday = isset($_POST["7thCHildBirthday"]) ? $_POST["7thCHildBirthday"] : "N/A";
    $eighthChildBirthday = isset($_POST["8thChildBirthday"]) ? $_POST["8thChildBirthday"] : "N/A";
    $ninthChildBirthday = isset($_POST["9thChildBirthday"]) ? $_POST["9thChildBirthday"] : "N/A";
    $tenthChildBirthday = isset($_POST["10thChildBirthday"]) ? $_POST["10thChildBirthday"] : "N/A";
    $eleventhChildBirthday = isset($_POST["11thCHildBirthday"]) ? $_POST["11thCHildBirthday"] : "N/A";
    $twelfthChildBirthday = isset($_POST["12ChildBirthday"]) ? $_POST["12ChildBirthday"] : "N/A";
    $Fatherssurname = isset($_POST["Fatherssurname"]) ? $_POST["Fatherssurname"] : "N/A";
    $fatherNameExtension = isset($_POST["fatherNameExtension"]) ? $_POST["fatherNameExtension"] : "N/A";
    $fatherfirstname = isset($_POST["fatherfirstname"]) ? $_POST["fatherfirstname"] : "N/A";
    $fathermiddlename = isset($_POST["fathermiddlename"]) ? $_POST["fathermiddlename"] : "N/A";
    $mothersmaidenname = isset($_POST["mothersmaidenname"]) ? $_POST["mothersmaidenname"] : "N/A";
    
    $motherssurname = isset($_POST["motherssurname"]) ? $_POST["motherssurname"] : "N/A";
    $motherfirstname = isset($_POST["motherfirstname"]) ? $_POST["motherfirstname"] : "N/A";
    $mothermiddlename = isset($_POST["mothermiddlename"]) ? $_POST["mothermiddlename"] : "N/A";
    $elem_nameofschool = isset($_POST["elem_nameofschool"]) ? $_POST["elem_nameofschool"] : "N/A";
    $elem_basiceducationaldegree = isset($_POST["elem_basiceducationaldegree"]) ? $_POST["elem_basiceducationaldegree"] : "N/A";
    $elem_pot_from = isset($_POST["elem_pot_from"]) ? $_POST["elem_pot_from"] : "N/A";
    $elem_pot_to = isset($_POST["elem_pot_to"]) ? $_POST["elem_pot_to"] : "N/A";
    $elem_highestlevel = isset($_POST["elem_highestlevel"]) ? $_POST["elem_highestlevel"] : "N/A";
    $elem_yeargraduated = isset($_POST["elem_yeargraduated"]) ? $_POST["elem_yeargraduated"] : "N/A";
    $elem_honorreceived = isset($_POST["elem_honorreceived"]) ? $_POST["elem_honorreceived"] : "N/A";
    $secondary_nameofschool = isset($_POST["secondary_nameofschool"]) ? $_POST["secondary_nameofschool"] : "N/A";
    $secondary_basiceducationaldegree = isset($_POST["secondary_basiceducationaldegree"]) ? $_POST["secondary_basiceducationaldegree"] : "N/A";
    $secondary_pot_from = isset($_POST["secondary_pot_from"]) ? $_POST["secondary_pot_from"] : "N/A";
    $secondary_pot_to = isset($_POST["secondary_pot_to"]) ? $_POST["secondary_pot_to"] : "N/A";
    $secondary_highestlevel = isset($_POST["secondary_highestlevel"]) ? $_POST["secondary_highestlevel"] : "N/A";
    $secondary_yeargraduated = isset($_POST["secondary_yeargraduated"]) ? $_POST["secondary_yeargraduated"] : "N/A";
    $secondary_honorreceived = isset($_POST["secondary_honorreceived"]) ? $_POST["secondary_honorreceived"] : "N/A";
    $vocationaltradecourse_nameofschool = isset($_POST["vocationaltradecourse_nameofschool"]) ? $_POST["vocationaltradecourse_nameofschool"] : "N/A";
    $vocationaltradecourse_basiceducationaldegree = isset($_POST["vocationaltradecourse_basiceducationaldegree"]) ? $_POST["vocationaltradecourse_basiceducationaldegree"] : "N/A";
    $vocationaltradecourse_pot_from = isset($_POST["vocationaltradecourse_pot_from"]) ? $_POST["vocationaltradecourse_pot_from"] : "N/A";
    $vocationaltradecourse_pot_to = isset($_POST["vocationaltradecourse_pot_to"]) ? $_POST["vocationaltradecourse_pot_to"] : "N/A";
    $vocationaltradecourse_highestlevel = isset($_POST["vocationaltradecourse_highestlevel"]) ? $_POST["vocationaltradecourse_highestlevel"] : "N/A";
    $vocationaltradecourse_yeargraduated = isset($_POST["vocationaltradecourse_yeargraduated"]) ? $_POST["vocationaltradecourse_yeargraduated"] : "N/A";
    $vocationaltradecourse_honorreceived = isset($_POST["vocationaltradecourse_honorreceived"]) ? $_POST["vocationaltradecourse_honorreceived"] : "N/A";
    
    $college_nameofschool = isset($_POST["college_nameofschool"]) ? $_POST["college_nameofschool"] : "N/A";
    $college_basiceducationaldegree = isset($_POST["college_basiceducationaldegree"]) ? $_POST["college_basiceducationaldegree"] : "N/A";
    $college_pot_from = isset($_POST["college_pot_from"]) ? $_POST["college_pot_from"] : "N/A";
    $college_pot_to = isset($_POST["college_pot_to"]) ? $_POST["college_pot_to"] : "N/A";
    $college_highestlevel = isset($_POST["college_highestlevel"]) ? $_POST["college_highestlevel"] : "N/A";
    $college_yeargraduated = isset($_POST["college_yeargraduated"]) ? $_POST["college_yeargraduated"] : "N/A";
    $college_honorreceived = isset($_POST["college_honorreceived"]) ? $_POST["college_honorreceived"] : "N/A";
    $graduatestudies_nameofschool = isset($_POST["graduatestudies_nameofschool"]) ? $_POST["graduatestudies_nameofschool"] : "N/A";
    $graduatestudies_basiceducationaldegree = isset($_POST["graduatestudies_basiceducationaldegree"]) ? $_POST["graduatestudies_basiceducationaldegree"] : "N/A";
    $graduatestudies_pot_from = isset($_POST["graduatestudies_pot_from"]) ? $_POST["graduatestudies_pot_from"] : "N/A";
    $graduatestudies_pot_to = isset($_POST["graduatestudies_pot_to"]) ? $_POST["graduatestudies_pot_to"] : "N/A";
    $graduatestudies_highestlevel = isset($_POST["graduatestudies_highestlevel"]) ? $_POST["graduatestudies_highestlevel"] : "N/A";
    $graduatestudies_yeargraduated = isset($_POST["graduatestudies_yeargraduated"]) ? $_POST["graduatestudies_yeargraduated"] : "N/A";
    $graduatestudies_honorreceived = isset($_POST["graduatestudies_honorreceived"]) ? $_POST["graduatestudies_honorreceived"] : "N/A";
    $date26 = isset($_POST["26date"]) ? $_POST["26date"] : "N/A";
    // Continue similarly for other variables
            
    
   

    // SQL query to insert data

    $sql = "INSERT INTO `pds` (`surname`, `firstname`, `middlename`, `nameextension`, `DateofBirth`, `PlaceofBirth`, `Sex`, `civilstatus`, `ifOtherDetails`, `Citizenship`,
    `ifDualCitizenship`, `pleaseIndicateCountry`, `pleaseIndicateDetails`, `Religion`, `height`, `weight`, `bloodtype`, `gsisidno`, `pagibigidno`, `philhealth_no`,     

     `sssno`, `tinno`, `agencyemployeeno`, `resaddress_house_block_lotno`, `resaddress_subdivision_village`, `resaddress_city_municipality`, `resaddress_street`,
     `resaddress_barangay`, `resaddress_province`, `resaddress_zipcode`, `permaddress_house_block_lotno`, `permaddress_subdivision_village`, `permaddress_city_municipality`,
      `permaddress_street`, `permaddress_barangay`, `permaddress_province`, `permaddress_zipcode`, `PStelephone`, `mobile`, `emailaddress`, `FamBackTelephoneNumber`,
       `SpousesName`, `spouseNameExtention`, `spousefirstname`, `spousemiddlename`, `spouseChildrensNames`, `spouseoccupation`, `employee_businessname`, `businessaddress`, 
       `spousetelephone`, `1stChild`, `2ndChild`, `3rdChild`, `4rthCHild`, `5thChild`, `6thChild`, `7thChild`, `8thChild`, `9thChild`, `10thChild`, `11thCHild`,
        `12Child`, `1stChildBirthday`, `2ndChildBirthday`, `3rdChildBirthday`, `4rthCHildBirthday`, `5thChildBirthday`, `6thChildBirthday`, `7thCHildBirthday`,
         `8thChildBirthday`, `9thChildBirthday`, `10thChildBirthday`, `11thCHildBirthday`, `12ChildBirthday`, `Fatherssurname`, `fatherNameExtension`, `fatherfirstname`, 
         `fathermiddlename`, `mothersmaidenname`, `motherssurname`, `motherfirstname`, `mothermiddlename`, `elem_nameofschool`, `elem_basiceducationaldegree`, `elem_pot_from`, 
         `elem_pot_to`,`elem_highestlevel`, `elem_yeargraduated`, `elem_honorreceived`, `secondary_nameofschool`, `secondary_basiceducationaldegree`, `secondary_pot_from`, 
         `secondary_pot_to`, `secondary_highestlevel`, `secondary_yeargraduated`, `secondary_honorreceived`, `vocationaltradecourse_nameofschool`, 
         `vocationaltradecourse_basiceducationaldegree`, `vocationaltradecourse_pot_from`, `vocationaltradecourse_pot_to`, `vocationaltradecourse_highestlevel`,
          `vocationaltradecourse_yeargraduated`, `vocationaltradecourse_honorreceived`, `college_nameofschool`, `college_basiceducationaldegree`, `college_pot_from`,
           `college_pot_to`, `college_highestlevel`, `college_yeargraduated`, `college_honorreceived`, `graduatestudies_nameofschool`, `graduatestudies_basiceducationaldegree`, 
           `graduatestudies_pot_from`, `graduatestudies_pot_to`, `graduatestudies_highestlevel`, `graduatestudies_yeargraduated`, `graduatestudies_honorreceived`, `26date`
           ) 
    VALUES (
        '$surname', '$firstname', '$middlename', '$nameextension', '$DateofBirth', '$PlaceofBirth', '$Loop_Sex', '$Loop_civilstatus', '$ifOtherDetails', '$Loop_Citizenship', 
        '$Loop_ifDualCitizenship', '$pleaseIndicateCountry', '$pleaseIndicateDetails', '$Religion', '$height', '$weight', '$bloodtype', '$gsisidno', '$pagibigidno', '$philhealth_no', 
        '$sssno', '$tinno', '$agencyemployeeno', '$resaddress_house_block_lotno', '$resaddress_subdivision_village', '$resaddress_city_municipality', '$resaddress_street', 
        '$resaddress_barangay', '$resaddress_province', '$resaddress_zipcode', '$permaddress_house_block_lotno', '$permaddress_subdivision_village', '$permaddress_city_municipality', 
        '$permaddress_street', '$permaddress_barangay', '$permaddress_province', '$permaddress_zipcode', '$PStelephone', '$mobile', '$emailaddress', '$FamBackTelephoneNumber', 
        '$SpousesName', '$spouseNameExtention', '$spousefirstname', '$spousemiddlename', '$spouseChildrensNames', '$spouseoccupation', '$employee_businessname', '$businessaddress', 
        '$spousetelephone', '$firstChild', '$secondChild', '$thirdChild', '$fourthChild', '$fifthChild', '$sixthChild', '$seventhChild', '$eighthChild', '$ninthChild', '$tenthChild', 
        '$eleventhChild', '$twelfthChild', '$firstChildBirthday', '$secondChildBirthday', '$thirdChildBirthday', '$fourthChildBirthday', '$fifthChildBirthday', '$sixthChildBirthday', 
        '$seventhChildBirthday', '$eighthChildBirthday', '$ninthChildBirthday', '$tenthChildBirthday', '$eleventhChildBirthday', '$twelfthChildBirthday', '$Fatherssurname', 
        '$fatherNameExtension', '$fatherfirstname', '$fathermiddlename', '$mothersmaidenname', '$motherssurname', '$motherfirstname', '$mothermiddlename', '$elem_nameofschool', 
        '$elem_basiceducationaldegree', '$elem_pot_from', '$elem_pot_to', '$elem_highestlevel', '$elem_yeargraduated', '$elem_honorreceived', '$secondary_nameofschool', 
        '$secondary_basiceducationaldegree', '$secondary_pot_from', '$secondary_pot_to', '$secondary_highestlevel', '$secondary_yeargraduated', '$secondary_honorreceived', 
        '$vocationaltradecourse_nameofschool', '$vocationaltradecourse_basiceducationaldegree', '$vocationaltradecourse_pot_from', '$vocationaltradecourse_pot_to', 
        '$vocationaltradecourse_highestlevel', '$vocationaltradecourse_yeargraduated', '$vocationaltradecourse_honorreceived', '$college_nameofschool
        ', '$college_basiceducationaldegree', '$college_pot_from', '$college_pot_to', '$college_highestlevel', '$college_yeargraduated', '$college_honorreceived', 
    '$graduatestudies_nameofschool', '$graduatestudies_basiceducationaldegree', '$graduatestudies_pot_from', '$graduatestudies_pot_to', '$graduatestudies_highestlevel', 
    '$graduatestudies_yeargraduated', '$graduatestudies_honorreceived', '$date26'
)"; -->





<!-- this is for the save april 1 is the time it is being paste here.
    
    $surname = isset($_POST["surname"]) ? $_POST["surname"] : "N/A";
    $firstname = isset($_POST["firstname"]) ? $_POST["firstname"] : "N/A";
    $middlename = isset($_POST["middlename"]) ? $_POST["middlename"] : "N/A";
    $nameextension = isset($_POST["nameextension"]) ? $_POST["nameextension"] : "N/A";
    $DateofBirth = isset($_POST["DateofBirth"]) ? $_POST["DateofBirth"] : "N/A";
    $PlaceofBirth = isset($_POST["PlaceofBirth"]) ? $_POST["PlaceofBirth"] : "N/A";
    
    $Sex = isset($_POST["Sex"]) ? $_POST["Sex"] : array();
    $Loop_Sex = !empty($Sex) ? implode(", ", $Sex) : "N/A";
    
    $civilstatus = isset($_POST["civilstatus"]) ? $_POST["civilstatus"] : array();
    $Loop_civilstatus = !empty($civilstatus) ? implode(", ", $civilstatus) : "N/A";
    
    $ifOtherDetails = isset($_POST["ifOtherDetails"]) ? $_POST["ifOtherDetails"] : "N/A";
    
    $Citizenship = isset($_POST["Citizenship"]) ? $_POST["Citizenship"] : array();
    $Loop_Citizenship = !empty($Citizenship) ? implode(", ", $Citizenship) : "N/A";
    
    $ifDualCitizenship = isset($_POST["ifDualCitizenship"]) ? $_POST["ifDualCitizenship"] : array();
    $Loop_ifDualCitizenship = !empty($ifDualCitizenship) ? implode(", ", $ifDualCitizenship) : "N/A";
    
    $pleaseIndicateCountry = isset($_POST["pleaseIndicateCountry"]) ? $_POST["pleaseIndicateCountry"] : "N/A";
    $pleaseIndicateDetails = isset($_POST["pleaseIndicateDetails"]) ? $_POST["pleaseIndicateDetails"] : "Haluha";
    $Religion = isset($_POST["Religion"]) ? $_POST["Religion"] : "N/A";
    $height = isset($_POST["height"]) ? $_POST["height"] : "N/A";
    $weight = isset($_POST["weight"]) ? $_POST["weight"] : "N/A";
    $bloodtype = isset($_POST["bloodtype"]) ? $_POST["bloodtype"] : "N/A";
    $gsisidno = isset($_POST["gsisidno"]) ? $_POST["gsisidno"] : "N/A";
    $pagibigidno = isset($_POST["pagibigidno"]) ? $_POST["pagibigidno"] : "N/A";
    $philhealth_no = isset($_POST["philhealth_no"]) ? $_POST["philhealth_no"] : "N/A";
    
    // Remaining variables follow the same pattern
    
    // Continue similarly for other variables
    $sssno = isset($_POST["sssno"]) ? $_POST["sssno"] : "N/A";
    $tinno = isset($_POST["tinno"]) ? $_POST["tinno"] : "N/A";
    $agencyemployeeno = isset($_POST["agencyemployeeno"]) ? $_POST["agencyemployeeno"] : "N/A";
    $resaddress_house_block_lotno = isset($_POST["resaddress_house_block_lotno"]) ? $_POST["resaddress_house_block_lotno"] : "N/A";
    $resaddress_subdivision_village = isset($_POST["resaddress_subdivision_village"]) ? $_POST["resaddress_subdivision_village"] : "N/A";
    $resaddress_city_municipality = isset($_POST["resaddress_city_municipality"]) ? $_POST["resaddress_city_municipality"] : "N/A";
    $resaddress_street = isset($_POST["resaddress_street"]) ? $_POST["resaddress_street"] : "N/A";
    $resaddress_barangay = isset($_POST["resaddress_barangay"]) ? $_POST["resaddress_barangay"] : "N/A";
    $resaddress_province = isset($_POST["resaddress_province"]) ? $_POST["resaddress_province"] : "N/A";
    $resaddress_zipcode = isset($_POST["resaddress_zipcode"]) ? $_POST["resaddress_zipcode"] : "N/A";
    $permaddress_house_block_lotno = isset($_POST["permaddress_house_block_lotno"]) ? $_POST["permaddress_house_block_lotno"] : "N/A";
    $permaddress_subdivision_village = isset($_POST["permaddress_subdivision_village"]) ? $_POST["permaddress_subdivision_village"] : "N/A";
    $permaddress_city_municipality = isset($_POST["permaddress_city_municipality"]) ? $_POST["permaddress_city_municipality"] : "N/A";
    $permaddress_street = isset($_POST["permaddress_street"]) ? $_POST["permaddress_street"] : "N/A";
    $permaddress_barangay = isset($_POST["permaddress_barangay"]) ? $_POST["permaddress_barangay"] : "N/A";
    $permaddress_province = isset($_POST["permaddress_province"]) ? $_POST["permaddress_province"] : "N/A";
    $permaddress_zipcode = isset($_POST["permaddress_zipcode"]) ? $_POST["permaddress_zipcode"] : "N/A";
    $PStelephone = isset($_POST["PStelephone"]) ? $_POST["PStelephone"] : "N/A";
    $mobile = isset($_POST["mobile"]) ? $_POST["mobile"] : "N/A";
    $emailaddress = isset($_POST["emailaddress"]) ? $_POST["emailaddress"] : "N/A";
    $FamBackTelephoneNumber = isset($_POST["FamBackTelephoneNumber"]) ? $_POST["FamBackTelephoneNumber"] : "N/A";
    $SpousesName = isset($_POST["SpousesName"]) ? $_POST["SpousesName"] : "N/A";
    $spouseNameExtention = isset($_POST["spouseNameExtention"]) ? $_POST["spouseNameExtention"] : "N/A";
    $spousefirstname = isset($_POST["spousefirstname"]) ? $_POST["spousefirstname"] : "N/A";
    $spousemiddlename = isset($_POST["spousemiddlename"]) ? $_POST["spousemiddlename"] : "N/A";
    $spouseChildrensNames = isset($_POST["spouseChildrensNames"]) ? $_POST["spouseChildrensNames"] : "N/A";
    $spouseoccupation = isset($_POST["spouseoccupation"]) ? $_POST["spouseoccupation"] : "N/A";
    $employee_businessname = isset($_POST["employee_businessname"]) ? $_POST["employee_businessname"] : "N/A";
    $businessaddress = isset($_POST["businessaddress"]) ? $_POST["businessaddress"] : "N/A";
    $spousetelephone = isset($_POST["spousetelephone"]) ? $_POST["spousetelephone"] : "N/A";
    
    // Remaining variables follow the same pattern
    
    // Continue similarly for other variables
    
    $firstChild = isset($_POST["1stChild"]) ? $_POST["1stChild"] : "N/A";
    $secondChild = isset($_POST["2ndChild"]) ? $_POST["2ndChild"] : "N/A";
    $thirdChild = isset($_POST["3rdChild"]) ? $_POST["3rdChild"] : "N/A";
    $fourthChild = isset($_POST["4rthCHild"]) ? $_POST["4rthCHild"] : "N/A";
    $fifthChild = isset($_POST["5thChild"]) ? $_POST["5thChild"] : "N/A";
    $sixthChild = isset($_POST["6thChild"]) ? $_POST["6thChild"] : "N/A";
    $seventhChild = isset($_POST["7thChild"]) ? $_POST["7thChild"] : "N/A";
    $eighthChild = isset($_POST["8thChild"]) ? $_POST["8thChild"] : "N/A";
    $ninthChild = isset($_POST["9thChild"]) ? $_POST["9thChild"] : "N/A";
    $tenthChild = isset($_POST["10thChild"]) ? $_POST["10thChild"] : "N/A";
    $eleventhChild = isset($_POST["11thCHild"]) ? $_POST["11thCHild"] : "N/A";
    $twelfthChild = isset($_POST["12Child"]) ? $_POST["12Child"] : "N/A";
    $firstChildBirthday = isset($_POST["1stChildBirthday"]) ? $_POST["1stChildBirthday"] : "N/A";
    $secondChildBirthday = isset($_POST["2ndChildBirthday"]) ? $_POST["2ndChildBirthday"] : "N/A";
    $thirdChildBirthday = isset($_POST["3rdChildBirthday"]) ? $_POST["3rdChildBirthday"] : "N/A";
    $fourthChildBirthday = isset($_POST["4rthCHildBirthday"]) ? $_POST["4rthCHildBirthday"] : "N/A";
    $fifthChildBirthday = isset($_POST["5thChildBirthday"]) ? $_POST["5thChildBirthday"] : "N/A";
    $sixthChildBirthday = isset($_POST["6thChildBirthday"]) ? $_POST["6thChildBirthday"] : "N/A";
    $seventhChildBirthday = isset($_POST["7thCHildBirthday"]) ? $_POST["7thCHildBirthday"] : "N/A";
    $eighthChildBirthday = isset($_POST["8thChildBirthday"]) ? $_POST["8thChildBirthday"] : "N/A";
    $ninthChildBirthday = isset($_POST["9thChildBirthday"]) ? $_POST["9thChildBirthday"] : "N/A";
    $tenthChildBirthday = isset($_POST["10thChildBirthday"]) ? $_POST["10thChildBirthday"] : "N/A";
    $eleventhChildBirthday = isset($_POST["11thCHildBirthday"]) ? $_POST["11thCHildBirthday"] : "N/A";
    $twelfthChildBirthday = isset($_POST["12ChildBirthday"]) ? $_POST["12ChildBirthday"] : "N/A";
    $Fatherssurname = isset($_POST["Fatherssurname"]) ? $_POST["Fatherssurname"] : "N/A";
    $fatherNameExtension = isset($_POST["fatherNameExtension"]) ? $_POST["fatherNameExtension"] : "N/A";
    $fatherfirstname = isset($_POST["fatherfirstname"]) ? $_POST["fatherfirstname"] : "N/A";
    $fathermiddlename = isset($_POST["fathermiddlename"]) ? $_POST["fathermiddlename"] : "N/A";
    $mothersmaidenname = isset($_POST["mothersmaidenname"]) ? $_POST["mothersmaidenname"] : "N/A";
    
    $motherssurname = isset($_POST["motherssurname"]) ? $_POST["motherssurname"] : "N/A";
    $motherfirstname = isset($_POST["motherfirstname"]) ? $_POST["motherfirstname"] : "N/A";
    $mothermiddlename = isset($_POST["mothermiddlename"]) ? $_POST["mothermiddlename"] : "N/A";
    $elem_nameofschool = isset($_POST["elem_nameofschool"]) ? $_POST["elem_nameofschool"] : "N/A";
    $elem_basiceducationaldegree = isset($_POST["elem_basiceducationaldegree"]) ? $_POST["elem_basiceducationaldegree"] : "N/A";
    $elem_pot_from = isset($_POST["elem_pot_from"]) ? $_POST["elem_pot_from"] : "N/A";
    $elem_pot_to = isset($_POST["elem_pot_to"]) ? $_POST["elem_pot_to"] : "N/A";
    $elem_highestlevel = isset($_POST["elem_highestlevel"]) ? $_POST["elem_highestlevel"] : "N/A";
    $elem_yeargraduated = isset($_POST["elem_yeargraduated"]) ? $_POST["elem_yeargraduated"] : "N/A";
    $elem_honorreceived = isset($_POST["elem_honorreceived"]) ? $_POST["elem_honorreceived"] : "N/A";
    $secondary_nameofschool = isset($_POST["secondary_nameofschool"]) ? $_POST["secondary_nameofschool"] : "N/A";
    $secondary_basiceducationaldegree = isset($_POST["secondary_basiceducationaldegree"]) ? $_POST["secondary_basiceducationaldegree"] : "N/A";
    $secondary_pot_from = isset($_POST["secondary_pot_from"]) ? $_POST["secondary_pot_from"] : "N/A";
    $secondary_pot_to = isset($_POST["secondary_pot_to"]) ? $_POST["secondary_pot_to"] : "N/A";
    $secondary_highestlevel = isset($_POST["secondary_highestlevel"]) ? $_POST["secondary_highestlevel"] : "N/A";
    $secondary_yeargraduated = isset($_POST["secondary_yeargraduated"]) ? $_POST["secondary_yeargraduated"] : "N/A";
    $secondary_honorreceived = isset($_POST["secondary_honorreceived"]) ? $_POST["secondary_honorreceived"] : "N/A";
    $vocationaltradecourse_nameofschool = isset($_POST["vocationaltradecourse_nameofschool"]) ? $_POST["vocationaltradecourse_nameofschool"] : "N/A";
    $vocationaltradecourse_basiceducationaldegree = isset($_POST["vocationaltradecourse_basiceducationaldegree"]) ? $_POST["vocationaltradecourse_basiceducationaldegree"] : "N/A";
    $vocationaltradecourse_pot_from = isset($_POST["vocationaltradecourse_pot_from"]) ? $_POST["vocationaltradecourse_pot_from"] : "N/A";
    $vocationaltradecourse_pot_to = isset($_POST["vocationaltradecourse_pot_to"]) ? $_POST["vocationaltradecourse_pot_to"] : "N/A";
    $vocationaltradecourse_highestlevel = isset($_POST["vocationaltradecourse_highestlevel"]) ? $_POST["vocationaltradecourse_highestlevel"] : "N/A";
    $vocationaltradecourse_yeargraduated = isset($_POST["vocationaltradecourse_yeargraduated"]) ? $_POST["vocationaltradecourse_yeargraduated"] : "N/A";
    $vocationaltradecourse_honorreceived = isset($_POST["vocationaltradecourse_honorreceived"]) ? $_POST["vocationaltradecourse_honorreceived"] : "N/A";
    
    $college_nameofschool = isset($_POST["college_nameofschool"]) ? $_POST["college_nameofschool"] : "N/A";
    $college_basiceducationaldegree = isset($_POST["college_basiceducationaldegree"]) ? $_POST["college_basiceducationaldegree"] : "N/A";
    $college_pot_from = isset($_POST["college_pot_from"]) ? $_POST["college_pot_from"] : "N/A";
    $college_pot_to = isset($_POST["college_pot_to"]) ? $_POST["college_pot_to"] : "N/A";
    $college_highestlevel = isset($_POST["college_highestlevel"]) ? $_POST["college_highestlevel"] : "N/A";
    $college_yeargraduated = isset($_POST["college_yeargraduated"]) ? $_POST["college_yeargraduated"] : "N/A";
    $college_honorreceived = isset($_POST["college_honorreceived"]) ? $_POST["college_honorreceived"] : "N/A";
    $graduatestudies_nameofschool = isset($_POST["graduatestudies_nameofschool"]) ? $_POST["graduatestudies_nameofschool"] : "N/A";
    $graduatestudies_basiceducationaldegree = isset($_POST["graduatestudies_basiceducationaldegree"]) ? $_POST["graduatestudies_basiceducationaldegree"] : "N/A";
    $graduatestudies_pot_from = isset($_POST["graduatestudies_pot_from"]) ? $_POST["graduatestudies_pot_from"] : "N/A";
    $graduatestudies_pot_to = isset($_POST["graduatestudies_pot_to"]) ? $_POST["graduatestudies_pot_to"] : "N/A";
    $graduatestudies_highestlevel = isset($_POST["graduatestudies_highestlevel"]) ? $_POST["graduatestudies_highestlevel"] : "N/A";
    $graduatestudies_yeargraduated = isset($_POST["graduatestudies_yeargraduated"]) ? $_POST["graduatestudies_yeargraduated"] : "N/A";
    $graduatestudies_honorreceived = isset($_POST["graduatestudies_honorreceived"]) ? $_POST["graduatestudies_honorreceived"] : "N/A";
    $date26 = isset($_POST["26date"]) ? $_POST["26date"] : "N/A";
    // Continue similarly for other variables
            
 -->