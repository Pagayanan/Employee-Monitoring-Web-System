

		
			<table class="" style="border: 4px solid #000;">
			
			<tbody class="table-body">
				<tr>
					<td colspan="12" class="text-white separator">IV.  CIVIL SERVICE ELIGIBILITY</td>
				</tr>
				<tr class="text-center">
					<td colspan="5" class="s-label border-bottom-0" style="width:30%">
						<span class="count float-left">27.</span>
						CAREER SERVICE/ RA 1080 (BOARD/ BAR) UNDER SPECIAL LAWS/ CES/ CSEE
						BARANGAY ELIGIBILITY / DRIVER'S LICENSE
					</td>
					<td colspan="1" class="s-label border-bottom-0">RATING<br>(If Applicable)</td>
					<td colspan="2" class="s-label border-bottom-0">DATE OF EXAMINATION / CONFERMENT</td>
					<td colspan="2" class="s-label border-bottom-0">PLACE OF EXAMINATION / CONFERMENT</td>
					<td colspan="2" class="s-label border-bottom-0">LICENSE<br>(if applicable)</td>
				</tr>
				<tr class="text-center">
					<td colspan="5" class="s-label border-top-0"></td>
					<td colspan="1" class="s-label border-top-0"></td>
					<td colspan="2" class="s-label border-top-0"></td>
					<td colspan="2" class="s-label border-top-0"></td>
					<td colspan="1" class="s-label">NUMBER</td>
					<td colspan="1" class="s-label">Date of Validity</td>
				</tr>
				
				<?php
// Assuming $conn is your database connection object

				$sql2page2 = "SELECT p.*
						FROM pds_2ndpage p
						INNER JOIN employeeid e ON 
							p.surname = e.surname AND 
							p.firstname = e.firstname AND 
							p.middlename = e.middle_name AND 
							p.nameextension = e.name_extension
						WHERE 
							e.EmployeeID = '$search'";

				// Execute SELECT statement
				$result = $conn->query($sql2page2);

				// Initialize row counter
				$rowCount = 0;

				if ($result->num_rows > 0) {
					// Loop through the results
					while ($row = $result->fetch_assoc()) {
						// Increment row counter
						$rowCount++;
						
						// Output data for each row
						echo "<tr>";
						echo "<td colspan='5'><input type='text' name='CSEnum27[]' class='inputToBe' value='" . $row["CSEnum27"] . "'></td>";
						echo "<td colspan='1'><input type='text' name='rating[]' class='inputToBe' value='" . $row["rating"] . "'></td>";
						echo "<td colspan='2'><input type='text' name='dateOfExamination[]' class='inputToBe' value='" . $row["dateOfExamination"] . "'></td>";
						echo "<td colspan='2'><input type='text' name='placeOfExamination[]' class='inputToBe' value='" . $row["placeOfExamination"] . "'></td>";
						echo "<td colspan='1'><input type='text' name='License_Number[]' class='inputToBe' value='" . $row["License_Number"] . "'></td>";
						echo "<td colspan='1'><input type='text' name='License_DateOfValidity[]' class='inputToBe' value='" . $row["License_DateOfValidity"] . "'></td>";
						echo "</tr>";
						
						// Check if the maximum number of rows (7) is reached
						if ($rowCount >= 7) {
							break; // Exit the loop
						}
					}
				} else {
					for ($i = 0; $i <= 7; $i++) {
						echo "<tr>";
						echo "<td colspan='5'><input type='text' name='CSEnum27[]' class='inputToBe' value=''></td>";
						echo "<td colspan='1'><input type='text' name='rating[]' class='inputToBe' value=''></td>";
						echo "<td colspan='2'><input type='text' name='dateOfExamination[]' class='inputToBe' value=''></td>";
						echo "<td colspan='2'><input type='text' name='placeOfExamination[]' class='inputToBe' value=''></td>";
						echo "<td colspan='1'><input type='text' name='License_Number[]' class='inputToBe' value=''></td>";
						echo "<td colspan='1'><input type='text' name='License_DateOfValidity[]' class='inputToBe' value=''></td>";
						echo "</tr>";
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
					<td colspan="12" class="text-white separator">
						V.  WORK EXPERIENCE<br>
						<small><i>(Include private employment.  Start from your recent work) Description of duties should be indicated in the attached Work Experience sheet.</i></small>
					</td>
				</tr>
				<tr class="text-center">
					<td colspan="1" class="s-label border-bottom-0" style="width: 20%;">
						<span class="count float-left">28.</span>
						INCLUSIVE DATES<br>(mm/dd/yyyy)
						
					</td>
					<td colspan="5" class="s-label border-bottom-0">
						POSITION TITLE<br>
						Write in full/Do not abbreviate)
					</td>
					<td colspan="2" class="s-label border-bottom-0">
						DEPARTMENT/AGENCY/OFFICE/COMPANY<br>
						(Write in full/Do not abbreviate)
					</td>
					<td colspan="1" class="s-label border-bottom-0">MONTHLY<br>SALARY</td>
					<td colspan="1" class="s-label border-bottom-0"><small>SALARY/ JOB/ PAY<br>GRADE (if applicable)& STEP  (Format "00-0")/ INCREMENT</small></td>
					<td colspan="1" class="s-label border-bottom-0">STATUS OF<br>APPOINTMENT</td>
					<td colspan="1" class="s-label border-bottom-0">GOV'T SERVICE<br>
						<small>(Y/ N)</small></td>
				</tr>
				<tr>
					<td colspan="1" class="p-0">
					<table class="w-100 border-0">
						<tbody class="border-0">
							<tr class="text-center">
								<td class="s-label border-0 border-bottom-0" style="width: 50%;">From</td>
								<td class="s-label border-top-0 border-right-0 border-bottom-0" style="width: 50%;">To</td>
							</tr>
						</tbody>
					</table>
					</td>
					<td colspan="5" class="s-label border-top-0"></td>
					<td colspan="2" class="s-label border-top-0"></td>
					<td colspan="1" class="s-label border-top-0"></td>
					<td colspan="1" class="s-label border-top-0"></td>
					<td colspan="1" class="s-label border-top-0"></td>
					<td colspan="1" class="s-label border-top-0"></td>
				</tr>
				
				<?php
// Assuming $conn is your database connection object

// Prepare SQL query with placeholders for security
$sql3page2 = "SELECT p.*
        FROM pdspage2_workexperience p
        INNER JOIN employeeid e ON 
            p.surname = e.surname AND 
            p.firstname = e.firstname AND 
            p.middlename = e.middle_name AND 
            p.nameextension = e.name_extension
        WHERE 
            e.EmployeeID = '$search'";

// Execute SELECT statement
$result = $conn->query($sql3page2);

// Initialize row counter
$rowCount = 0;

if ($result->num_rows > 0) {
    // Loop through the results
    while ($row = $result->fetch_assoc()) {
        // Increment row counter
      

        // Output data for each row
        echo "<tr>";

        echo "<td colspan='1' class='p-0'>";
        echo "<table class='w-100 border-0' style='height: 100%;'>";
        echo "<tbody class='border-0'>";
        echo "<tr>";
        echo "<td class='border-0 border-bottom-0' style='width: 50%;'><input name='inclusiveDatesFrom[]' type='text' class='inputToBe' value='" . $row["inclusiveDatesFrom"] . "'></td>";
        echo "<td class='border-top-0 border-right-0 border-bottom-0' style='width: 50%;'><input name='inclusiveDatesTo[]' type='text' class='inputToBe' value='" . $row["inclusiveDatesTo"] . "'></td>";
        echo "</tr>";
        echo "</tbody>";
        echo "</table>";
        echo "</td>";

        echo "<td colspan='5'><textarea name='positionTitle[]' cols='30' rows='1' class='inputToBe'>" . $row["positionTitle"] . "</textarea></td>";
        echo "<td colspan='2'><textarea name='departmentAgencyOffice[]' cols='30' rows='1' class='inputToBe'>" . $row["departmentAgencyOffice"] . "</textarea></td>";
        echo "<td colspan='1'><input name='monthlySalary[]' type='text' class='inputToBe' value='" . $row["monthlySalary"] . "'></td>";
        echo "<td colspan='1'><input name='salaryJobPay[]' type='text' class='inputToBe' value='" . $row["salaryJobPay"] . "'></td>";
        echo "<td colspan='1'><input name='statusOfAppointment[]' type='text' class='inputToBe' value='" . $row["statusOfAppointment"] . "'></td>";
        echo "<td colspan='1'><input name='govService[]' type='text' class='inputToBe' value='" . $row["govService"] . "'></td>";

        echo "</tr>";
    }
} else {
	

	for ($i = 0; $i <= 28; $i++) {
		echo "<tr>";
		echo "<td colspan='1' class='p-0'>";
        echo "<table class='w-100 border-0' style='height: 100%;'>";
        echo "<tbody class='border-0'>";
        echo "<tr>";
        echo "<td class='border-0 border-bottom-0' style='width: 50%;'><input name='inclusiveDatesFrom[]' type='text' class='inputToBe' value=''></td>";
        echo "<td class='border-top-0 border-right-0 border-bottom-0' style='width: 50%;'><input name='inclusiveDatesTo[]' type='text' class='inputToBe' value=''></td>";
        echo "</tr>";
        echo "</tbody>";
        echo "</table>";
        echo "</td>";
		echo "<td colspan='5'><textarea name='positionTitle[]' cols='30' rows='1' class='inputToBe'></textarea></td>";
		echo "<td colspan='2'><textarea name='departmentAgencyOffice[]' cols='30' rows='1' class='inputToBe'></textarea></td>";
		echo "<td colspan='1'><input name='monthlySalary[]' type='text' class='inputToBe' value=''></td>";
		echo "<td colspan='1'><input name='salaryJobPay[]' type='text' class='inputToBe' value=''></td>";
		echo "<td colspan='1'><input name='statusOfAppointment[]' type='text' class='inputToBe' value=''></td>";
		echo "<td colspan='1'><input name='govService[]' type='text' class='inputToBe' value=''></td>";
		echo "</tr>";
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
				<tr style="height: 30px;">
					<td colspan="1" class="text-center"><i><b>SIGNATURE</b></i></td>
					<td colspan="6"></td>
					<td colspan="2" class="text-center"><i><b>DATE</b></i></td>
					<td colspan="3"> <input type="text" class="inputToBe" name="page2Date" value="<?php echo "$datePage2"?>"> </td>
					<!-- <td colspan="3"></td> -->
				</tr>
			</tbody>

		</table>
