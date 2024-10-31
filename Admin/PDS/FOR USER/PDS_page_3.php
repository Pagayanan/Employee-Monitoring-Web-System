
			
			<table class="" style="border: 0px solid #000;">
                <tbody class="table-body">
					<tr>
						<td colspan="12" class="text-white separator">VI. VOLUNTARY WORK OR INVOLVEMENT IN CIVIC / NON-GOVERNMENT / PEOPLE / VOLUNTARY ORGANIZATION/S</td>
					</tr>
					<tr class="text-center">
						<td colspan="6" class="s-label border-bottom-0">
							<span class="count float-left">29.</span> NAME & ADDRESS OF ORGANIZATION<br>
							(Write in full)
						</td>
						<td colspan="2" class="s-label border-bottom-0">INCLUSIVE DATES</td>
						<td colspan="1" class="s-label border-bottom-0">NUMBER OF HOURS</td>
						<td colspan="3" class="s-label border-bottom-0">POSITION / NATURE OF WORK</td>
					</tr>
					<tr class="text-center">
						<td colspan="6" class="s-label border-top-0"></td>
						<td colspan="1" class="s-label">From</td>
						<td colspan="1" class="s-label">To</td>
						<td colspan="1" class="s-label border-top-0"></td>
						<td colspan="3" class="s-label border-top-0"></td>
					</tr>
					<!-- <tr>
						<td colspan="6"> <textarea name="nameAddofOrg[]" id="" cols="30" rows="2" class="inputToBe"></textarea> </td>
						<td colspan="1"> <input type="text" name="inclusiveDatesFrom[]" class="inputToBe"> </td>
						<td colspan="1"> <input type="text" name="inclusiveDatesTo[]" class="inputToBe"> </td>
						<td colspan="1">  <input type="text" name="numberOfHours[]" class="inputToBe"> </td>
						<td colspan="3"> <textarea name="positionNatureOfWork" id="" cols="30" rows="2" class="inputToBe"></textarea> </td>
					</tr> -->
					
           <!-- paste table 1 here -->

           <?php
// Assuming $conn is your database connection object

$sql2page3 = "SELECT p.*
              FROM pds_p3_voluntaryworkorinvomenttable p
              INNER JOIN employeeid e ON 
                  p.surname = e.surname AND 
                  p.firstname = e.firstname AND 
                  p.middlename = e.middle_name AND 
                  p.nameextension = e.name_extension
              WHERE e.EmployeeID = ?"; // Use prepared statement to prevent SQL injection

// Prepare the SQL statement
$stmt = $conn->prepare($sql2page3);
$stmt->bind_param("s", $search); // 's' specifies the variable type => 'string'

// Execute the statement
$stmt->execute();
$result = $stmt->get_result();

// Initialize row counter
$rowCount = 0;

if ($result->num_rows > 0) {
    // Loop through the results
    while ($row = $result->fetch_assoc()) {
        // Increment row counter
      
			?>

		<tr>
						<td colspan="6"> <textarea name="nameAddofOrg[]" id="" cols="30" rows="2" class="inputToBe" ><?php echo$row['nameAddofOrg'];?></textarea> </td>
						<td colspan="1"> <input type="text" name="inclusiveDatesFromP3[]" class="inputToBe" value="<?php echo  $row['inclusiveDatesFromP3']; ?>"> </td>
						<td colspan="1"> <input type="text" name="inclusiveDatesToP3[]" class="inputToBe" value="<?php echo $row['inclusiveDatesToP3']; ?>"> </td>
						<td colspan="1">  <input type="text" name="numberOfHours[]" class="inputToBe" value="<?php echo  $row['numberOfHours']; ?>"> </td>
						<td colspan="3"> <textarea name="positionNatureOfWork[]" id="" cols="30" rows="2" class="inputToBe"><?php echo  $row['positionNatureOfWork']; ?></textarea> </td>
					</tr>
        
      
		<?php
      
    }
} else {
    // Output default empty rows if no results
    for ($i = 0; $i < 7; $i++) {
        echo "<tr>";
        echo '<td colspan="6"><textarea name="nameAddofOrg[]" cols="30" rows="2" class="inputToBe"></textarea></td>';
        echo '<td colspan="1"><input type="text" name="inclusiveDatesFromP3[]" class="inputToBe"></td>';
        echo '<td colspan="1"><input type="text" name="inclusiveDatesToP3[]" class="inputToBe"></td>';
        echo '<td colspan="1"><input type="text" name="numberOfHours[]" class="inputToBe"></td>';
        echo '<td colspan="3"><textarea name="positionNatureOfWork[]" cols="30" rows="2" class="inputToBe"></textarea></td>';
        echo "</tr>";
    }
}

$stmt->close();
?>

				

				</tbody>

				<tbody class="table-body">
					<tr>
						<td colspan="12" class="text-white separator bg-transparent text-danger text-center">
							<i>(Continue on seperate sheet if necessary)</i>
						</td>
					</tr>
				</tbody>

				<tbody class="table-body">
					<tr>
						<td colspan="12" class="text-white separator">VII. LEARNING AND DEVELOPMENT (L&D) INTERVENTIONS/TRAINING PROGRAMS ATTENDED<br>
							<small><i>(Start from the most recent L&D/training program and include only the relevant L&D/training taken for the last five (5) years for Division Chief/Executive/Managerial positions)</i></small>
						</td>
					</tr>
					<tr class="text-center">
						<td colspan="6" class="s-label border-bottom-0">
							<span class="count float-left">30.</span> TITLE OF LEARNING AND DEVELOPMENT INTERVENTIONS/TRAINING PROGRAMS<br>
							(Write in full)
						</td>
						<td colspan="2" class="s-label border-bottom-0">INCLUSIVE DATES</td>
						<td colspan="1" class="s-label border-bottom-0">NUMBER OF HOURS</td>
						<td colspan="1" class="s-label border-bottom-0">Type of LD ( Managerial/ Supervisory/Technical/etc)</td>
						<td colspan="2" class="s-label border-bottom-0">CONDUCTED/ SPONSORED BY<br>(Write in full)</td>
					</tr>
					<tr class="text-center">
						<td colspan="6" class="s-label border-top-0"></td>
						<td colspan="1" class="s-label">From</td>
						<td colspan="1" class="s-label">To</td>
						<td colspan="1" class="s-label border-top-0"></td>
						<td colspan="1" class="s-label border-top-0"></td>
						<td colspan="2" class="s-label border-top-0"></td>
					</tr>
					<!-- <tr>
						<td colspan="6"> <textarea name="titleoflearnAndIntervsn[]" id="" cols="30" rows="2" class="inputToBe"></textarea> </td>
						<td colspan="1"> <input type="text" name="inclusiveDatesFromT2[]" class="inputToBe"> </td>
						<td colspan="1"> <input type="text" name="inclusiveDatesToT2[]" class="inputToBe"> </td>
						<td colspan="1"> <input type="text" name="numOfHours[]" class="inputToBe"> </td>
						<td colspan="1"> <textarea name="typeOfLD[]" id="" cols="30" rows="2" class="inputToBe"></textarea> </td> 
						<td colspan="2"> <textarea name="ConductedSponsoredby[]" id="" cols="30" rows="2" class="inputToBe"></textarea> </td>
					</tr> -->
					



                <!-- paste here table 2 -->
                
                <?php
                // Assuming $conn is your database connection object
                
                                $sql2page3t2 = "SELECT p.*
                                        FROM pds_p3_titleoflearnanddevintervsn_2ndtable p
                                        INNER JOIN employeeid e ON 
                                            p.surname = e.surname AND 
                                            p.firstname = e.firstname AND 
                                            p.middlename = e.middle_name AND 
                                            p.nameextension = e.name_extension
                                        WHERE 
                                            e.EmployeeID = '$search'";
                
                                // Execute SELECT statement
                                $result = $conn->query($sql2page3t2);
                
                                // Initialize row counter
                                $rowCount = 0;
                
                                if ($result->num_rows > 0) {
                                    // Loop through the results
                                    while ($row = $result->fetch_assoc()) {
                                        // Increment row counter
                                        $rowCount++;
                                        
                                        // Output data for each row
                                      echo'  <tr>';
                                  echo'      <td colspan="6"> <textarea name="titleoflearnAndIntervsn[]" id="" cols="30" rows="2" class="inputToBe">'. $row['titleoflearnAndIntervsn'].'</textarea> </td>';
                                  echo'      <td colspan="1"> <input type="text" name="inclusiveDatesFromT2[]" class="inputToBe" value="'. $row['inclusiveDatesFromT2'].'"> </td>';
                                   echo'     <td colspan="1"> <input type="text" name="inclusiveDatesToT2[]" class="inputToBe" value="'. $row['inclusiveDatesToT2'].'"> </td>';
                                 echo'       <td colspan="1"> <input type="text" name="numOfHours[]" class="inputToBe" value="'. $row['numOfHours'].'"> </td>';
                                 echo'       <td colspan="1"> <textarea name="typeOfLD[]" id="" cols="30" rows="2" class="inputToBe">'. $row['typeOfLD'].'</textarea> </td> ';
                                 echo'       <td colspan="2"> <textarea name="ConductedSponsoredby[]" id="" cols="30" rows="2" class="inputToBe" >'. $row['ConductedSponsoredby'].'</textarea> </td>';
                                 echo'   </tr>';
                                        
                                        // Check if the maximum number of rows (7) is reached
                                       
                                    }
                                } else {
                                    for ($i = 0; $i <= 15; $i++) {
                                        ?>

                    <tr>
						<td colspan="6"> <textarea name="titleoflearnAndIntervsn[]" id="" cols="30" rows="2" class="inputToBe"></textarea> </td>
						<td colspan="1"> <input type="text" name="inclusiveDatesFromT2[]" class="inputToBe"> </td>
						<td colspan="1"> <input type="text" name="inclusiveDatesToT2[]" class="inputToBe"> </td>
						<td colspan="1"> <input type="text" name="numOfHours[]" class="inputToBe"> </td>
						<td colspan="1"> <textarea name="typeOfLD[]" id="" cols="30" rows="2" class="inputToBe"></textarea> </td> 
						<td colspan="2"> <textarea name="ConductedSponsoredby[]" id="" cols="30" rows="2" class="inputToBe"></textarea> </td>
					</tr>

                                      <?php


                                    }
                                }
                ?>
                
                
                





                
				</tbody>

				<tbody class="table-body">
					<tr>
						<td colspan="12" class="text-white separator bg-transparent text-danger text-center">
							<i>(Continue on seperate sheet if necessary)</i>
						</td>
					</tr>
				</tbody>
				
				<tbody class="table-body">
					<tr>
						<td colspan="12" class="text-white separator">VIII.  OTHER INFORMATION</td>
					</tr>
					<tr class="text-center">
						<td colspan="4" class="s-label">
							<span class="count float-left">31.</span> SPECIAL SKILLS and HOBBIES
						</td>
						<td colspan="4" class="s-label">
							<span class="count float-left">32.</span> NON-ACADEMIC DISTINCTIONS / RECOGNITION<br>(Write in full)
						</td>
						<td colspan="4" class="s-label">
							<span class="count float-left">33.</span> MEMBERSHIP IN ASSOCIATION/ORGANIZATION<br>(Write in full)
						</td>
					</tr>
					<!-- <tr>
						<td colspan="4"> <textarea name="specialSkillsandHobbies[]" id="" cols="30" rows="2" class="inputToBe"></textarea> </td>
						<td colspan="4"> <textarea name="recognition[]" id="" cols="30" rows="2" class="inputToBe"></textarea> </td>
						<td colspan="4"> <textarea name="membership_Assoc[]" id="" cols="30" rows="2" class="inputToBe"></textarea> </td>
					</tr> -->
				


                    <!-- paste hre table three -->

                    




                

                <?php
// Assuming $conn is your database connection object

				$sql2page3t3 = "SELECT p.*
						FROM pds_p3_otherinformation_t3 p
						INNER JOIN employeeid e ON 
							p.surname = e.surname AND 
							p.firstname = e.firstname AND 
							p.middlename = e.middle_name AND 
							p.nameextension = e.name_extension
						WHERE 
							e.EmployeeID = '$search'";

				// Execute SELECT statement
				$result = $conn->query($sql2page3t3);

				// Initialize row counter
				$rowCount = 0;

				if ($result->num_rows > 0) {
					// Loop through the results
					while ($row = $result->fetch_assoc()) {
						// Increment row counter
						$rowCount++;
						
						// Output data for each row
                     echo'   <tr>';
					echo'	<td colspan="4"> <textarea name="specialSkillsandHobbies[]" id="" cols="30" rows="2" class="inputToBe">'. $row['specialSkillsandHobbies'].'</textarea> </td>';
					echo'	<td colspan="4"> <textarea name="recognition[]" id="" cols="30" rows="2" class="inputToBe">'. $row['recognition'].'</textarea> </td>';
					echo'	<td colspan="4"> <textarea name="membership_Assoc[]" id="" cols="30" rows="2" class="inputToBe">'. $row['membership_Assoc'].'</textarea> </td>';
				echo'	</tr>';
						
					
					}
				} else {
					for ($i = 0; $i <= 5; $i++) {
                        ?>

                    <tr>
						<td colspan="4"> <textarea name="specialSkillsandHobbies[]" id="" cols="30" rows="2" class="inputToBe"></textarea> </td>
						<td colspan="4"> <textarea name="recognition[]" id="" cols="30" rows="2" class="inputToBe"></textarea> </td>
						<td colspan="4"> <textarea name="membership_Assoc[]" id="" cols="30" rows="2" class="inputToBe"></textarea> </td>
					</tr>
					
                    <?php
					}
				}
?>



				</tbody>

				<tbody class="table-body">
					<tr>
						<td colspan="12" class="text-white separator bg-transparent text-danger text-center">
							<i>(Continue on seperate sheet if necessary)</i>
						</td>
					</tr>
					<tr>
						<td colspan="4" class="text-center"><i><b>SIGNATURE</b></i></td>
						<td colspan="3"></td>
						<td colspan="1" class="text-center"><i><b>DATE</b></i></td>
						<td colspan="4">  <p><?php echo $rows['26date']; ?></p></td>
					</tr>
				</tbody>



				<!-- End of Page 3 -->

			

				<!-- End of References -->



			</table>
	