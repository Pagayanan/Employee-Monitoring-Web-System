<style>
	td {
		position: relative;
	}

	.add-buttonP3 {
		/* position: absolute;
		top: 0;
		right: -30px; */
		background-color: rgba(128, 128, 128, 0.5);
		color: white;
		border: none;
		padding: 5px 10px;
		border-radius: 50%;
		cursor: pointer;
		font-size: 12px;
	}

	.delete-buttonP3 {
		/* position: absolute;
		top:4;
		right: -30px; */
		background-color: red;
		color: white;
		border: none;
		padding: 5px 10px;
		border-radius: 50%;
		cursor: pointer;
		font-size: 12px;
	}

	.p3buttonCont{
		position: absolute;
		top:0;
		right: -30px;
	}
	.p3buttonCont button{
		display: block;
	}
</style>
<table class="" style="border: 0px solid #000;width:100%;">
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
		// Assuming this is defined elsewhere
		$sql2page3 = "SELECT * FROM pds_p3_voluntaryworkorinvomenttable WHERE CONCAT(surname, ', ', firstname, ' ', middlename) = '$search'";
		$result2 = $conn->query($sql2page3);

		if ($result2->num_rows > 0) {
			// Loop through the results
			while ($row = $result2->fetch_assoc()) { // Changed $result to $result2
				// Increment row counter
				$endt1++;
			}
		}

		// echo $endt1;

		$rowCount1 = 0;
		for ($j = $i; $j < $i + $rowSizet1 && $j <= $endt1; $j++) {
			$p32T1++;
			// echo $p32T1;
			// echo $p32;
			// echo 'hello';
			$sql2page3 = "SELECT  * FROM pds_p3_voluntaryworkorinvomenttable WHERE CONCAT(surname, ', ', firstname, ' ', middlename) = '$search' AND rowReference =  $p32T1";
			// echo $sql2page3;


			// Prepare the SQL statement
			$result2 = $conn->query($sql2page3);

			// Initialize row counter
			$rowCount1 = $rowCount1 + 1;

			if ($result2->num_rows > 0) {
				// Loop through the results
				while ($row = $result2->fetch_assoc()) { // Changed $result to $result2
					// Increment row counter
		?>
					<tr>
						<td colspan="6"><textarea name="nameAddofOrg[]" id="" cols="30" rows="2" class="inputToBe"><?php echo $row['nameAddofOrg'];  ?></textarea></td>
						<td colspan="1"><input type="text" name="inclusiveDatesFromP3[]" class="inputToBe" value="<?php echo  $row['inclusiveDatesFromP3']; ?>"></td>
						<td colspan="1"><input type="text" name="inclusiveDatesToP3[]" class="inputToBe" value="<?php echo $row['inclusiveDatesToP3']; ?>"></td>
						<td colspan="1"><input type="text" name="numberOfHours[]" class="inputToBe" value="<?php echo  $row['numberOfHours']; ?>"></td>
						<td colspan="3"><textarea name="positionNatureOfWork[]" id="" cols="30" rows="2" class="inputToBe"><?php echo  $row['positionNatureOfWork']; ?></textarea></td>
					</tr>
		<?php
				}
			} else {
				// Output default empty rows if no results
				// for ($i = 0; $i < 7; $i++) {
				//     echo "<tr>";
				//     echo '<td colspan="6"><textarea name="nameAddofOrg[]" cols="30" rows="2" class="inputToBe"></textarea></td>';
				//     echo '<td colspan="1"><input type="text" name="inclusiveDatesFromP3[]" class="inputToBe"></td>';
				//     echo '<td colspan="1"><input type="text" name="inclusiveDatesToP3[]" class="inputToBe"></td>';
				//     echo '<td colspan="1"><input type="text" name="numberOfHours[]" class="inputToBe"></td>';
				//     echo '<td colspan="3"><textarea name="positionNatureOfWork[]" cols="30" rows="2" class="inputToBe"></textarea></td>';
				//     echo "</tr>";
				// }
			}

			if ($rowCount1 >= $rowSizet1) break;
		}

		// $stmt->close();
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
			<td colspan="5" class="s-label border-bottom-0">
				<span class="count float-left">30.</span> TITLE OF LEARNING AND DEVELOPMENT INTERVENTIONS/TRAINING PROGRAMS<br>
				(Write in full)
			</td>
			<td colspan="2" class="s-label border-bottom-0">INCLUSIVE DATES</td>
			<td colspan="1" class="s-label border-bottom-0">NUMBER OF HOURS</td>
			<td colspan="1" class="s-label border-bottom-0">Type of LD ( Managerial/ Supervisory/Technical/etc)</td>
			<td colspan="3" class="s-label border-bottom-0">CONDUCTED/&nbsp;SPONSORED &nbsp;BY(Write in full)</td>
		</tr>
		<tr class="text-center">
			<td colspan="5" class="s-label border-top-0"></td>
			<td colspan="1" class="s-label">From</td>
			<td colspan="1" class="s-label">To</td>
			<td colspan="1" class="s-label border-top-0"></td>
			<td colspan="1" class="s-label border-top-0"></td>
			<td colspan="3" class="s-label border-top-0"></td>
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

		// $sql2page3t2 = "
		// SELECT p.*
		//                                 FROM pds_p3_titleoflearnanddevintervsn_2ndtable p
		//                                 INNER JOIN (
		// 										-- Query to identify and resolve duplicates in the employeeid table
		// 										-- You can replace this subquery with the appropriate join condition once duplicates are resolved
		// 										SELECT DISTINCT surname, firstname, middle_name, name_extension
		// 										FROM employeeid
		// 									) e ON 
		// 										p.surname = e.surname AND 
		// 										p.firstname = e.firstname AND 
		// 										p.middlename = e.middle_name AND 
		// 										p.nameextension = e.name_extension
		// 									WHERE 
		//                                     -- e.EmployeeID = '$search'
		// 									CONCAT(p.surname, ', ', p.firstname, ' ', p.middlename) = '$search'
		// 									";


		$rowCount2 = 0;
		for ($j = $i; $j < $i + $chunkSize && $j <= $end; $j++) {
			$p32++;
			// $P22++;
			$trainingDisplay = $trainingArray[$j - 1];
			// echo $p32;
			// echo 'hello';
			$sql2page3t2 = "SELECT  * FROM pds_p3_titleoflearnanddevintervsn_2ndtable WHERE CONCAT(surname, ', ', firstname, ' ', middlename) = '$search' AND rowReference = $trainingDisplay";

			// Execute SELECT statement
			$result2 = $conn->query($sql2page3t2);

			// Initialize row counter


			if ($result2->num_rows > 0) {
				// Loop through the results
				while ($row = $result2->fetch_assoc()) {
					// Increment row counter
					$rowCount2 = $rowCount2 + 1;
					// echo $rowCount2;
					// echo 'hello';

					// Output data for each row
					echo '  <tr>';
					echo '      <td colspan="5"> <textarea name="titleoflearnAndIntervsn[]" id="" cols="30" rows="4" class="inputToBe">' . $row['titleoflearnAndIntervsn'] . '</textarea> </td>';
					echo '      <td colspan="1"> <input type="text" name="inclusiveDatesFromT2[]" class="inputToBe" value="' . $row['inclusiveDatesFromT2'] . '"> </td>';
					echo '     <td colspan="1"> <input type="text" name="inclusiveDatesToT2[]" class="inputToBe" value="' . $row['inclusiveDatesToT2'] . '"> </td>';
					echo '       <td colspan="1"> <input type="text" name="numOfHours[]" class="inputToBe" value="' . $row['numOfHours'] . '"> </td>';
					echo '       <td colspan="1"> <textarea name="typeOfLD[]" id="" cols="30" rows="4" class="inputToBe">' . $row['typeOfLD'] . '</textarea> <input type="hidden" name="rowReference[]" class="inputToBe" value="' . $row['rowReference'] . '"> </td> ';
					echo '<td colspan="3">
							<textarea name="ConductedSponsoredby[]" id="" cols="30" rows="4" class="inputToBe">' . htmlspecialchars($row['ConductedSponsoredby'], ENT_QUOTES, 'UTF-8') . '</textarea> 
							<div class="p3buttonCont  hide-but"><button class="add-buttonP3 hide-but" data-id="' . htmlspecialchars($row['id'], ENT_QUOTES, 'UTF-8') . '">+</button>
							<button class="delete-buttonP3 hide-but" data-id="' . htmlspecialchars($row['id'], ENT_QUOTES, 'UTF-8') . '">-</button></div>
						</td>';

					echo '   </tr>';

					// Check if the maximum number of rows ($numRowsP3) is reached

				}
			} else {
				// Output empty row if no data found for the current reference
				// echo '<tr>';
				// echo '<td colspan="6"> <textarea name="titleoflearnAndIntervsn[]" id="" cols="30" rows="3" class="inputToBe"></textarea> </td>';
				// echo '<td colspan="1"> <input type="text" name="inclusiveDatesFromT2[]" class="inputToBe"> </td>';
				// echo '<td colspan="1"> <input type="text" name="inclusiveDatesToT2[]" class="inputToBe"> </td>';
				// echo '<td colspan="1"> <input type="text" name="numOfHours[]" class="inputToBe"> </td>';
				// echo '<td colspan="1"> <textarea name="typeOfLD[]" id="" cols="30" rows="3" class="inputToBe"></textarea> </td>';
				// echo '<td colspan="2"> <textarea name="ConductedSponsoredby[]" id="" cols="30" rows="3" class="inputToBe"></textarea> </td>';
				// echo '</tr>';
			}
			if ($rowCount2 >= $numRowsP3) break;
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
			<td colspan="12" class="text-white separator">VIII. OTHER INFORMATION</td>
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
		$sql2page3t3 = "SELECT * FROM pds_p3_otherinformation_t3 WHERE CONCAT(surname, ', ', firstname, ' ', middlename) = '$search'";
		$result2 = $conn->query($sql2page3t3);

		if ($result2->num_rows > 0) {
			// Loop through the results
			while ($row = $result2->fetch_assoc()) { // Changed $result to $result2
				// Increment row counter
				$endt3++;
			}
		}

		// echo $endt3;


		$rowCountt3 = 0;
		for ($j = $i; $j < $i + $rowSizet3 && $j <= $endt3; $j++) {
			$p32T3++;
			// echo $p32T3;

			// Assuming $conn is your database connection object
			$sql2page3t3 = "SELECT  * FROM pds_p3_otherinformation_t3 WHERE CONCAT(surname, ', ', firstname, ' ', middlename) = '$search' AND referenceRowT3 = $p32T3";


			// Execute SELECT statement
			$result = $conn->query($sql2page3t3);
			// $rowCountt3 = $rowCountt3 + 1;

			// Initialize row counter

			if ($result->num_rows > 0) {
				// Loop through the results
				while ($row = $result->fetch_assoc()) {
					// Increment row counter
					$rowCountt3++;

					// Output data for each row
					echo '   <tr>';
					echo '	<td colspan="4"> <textarea name="specialSkillsandHobbies[]" id="" cols="30" rows="2" class="inputToBe">' . $row['specialSkillsandHobbies'] . '</textarea> </td>';
					echo '	<td colspan="4"> <textarea name="recognition[]" id="" cols="30" rows="2" class="inputToBe">' . $row['recognition'] . '</textarea> </td>';
					echo '	<td colspan="4"> <textarea name="membership_Assoc[]" id="" cols="30" rows="2" class="inputToBe">' . $row['membership_Assoc'] . '</textarea> </td>';
					echo '	</tr>';
				}
			} else {
			}
			if ($rowCountt3 >= $rowSizet3) break;
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
			<td colspan="4">
				<p><?php //echo $rows['26date']; 
					?><br></p>
			</td>
		</tr>
	</tbody>



	<!-- End of Page 3 -->



	<!-- End of References -->



</table>

<script>
	document.addEventListener('DOMContentLoaded', function() {
		document.querySelectorAll('.add-buttonP3').forEach(function(button) {
			button.addEventListener('click', function(event) {
				// Prevent the form from submitting
				event.preventDefault();

				// Get the ID from the data-id attribute
				var id = this.getAttribute('data-id');

				// Redirect to updateWorkExp.php with the ID as a query parameter
				window.location.href = 'P3updateTraining.php?id=' + id;
			});
		});
	});
</script>

<script>
	document.addEventListener('DOMContentLoaded', function() {
		document.querySelectorAll('.delete-buttonP3').forEach(function(button) {
			button.addEventListener('click', function(event) {
				// Prevent the form from submitting
				event.preventDefault();

				// Get the ID from the data-id attribute
				var id = this.getAttribute('data-id');

				// Redirect to updateWorkExp.php with the ID as a query parameter
				window.location.href = 'P3deleteTraining.php?id=' + id;
			});
		});
	});
</script>