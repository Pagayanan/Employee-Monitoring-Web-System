<style>
	tbody {
		position: relative;
	}

	.addButton {
		position: absolute;
		bottom: 0;
		right: -30px;
		/* Adjust negative margin to extend beyond the table boundary */
		/* background-color: green; */
		background-color: rgba(128, 128, 128, 0.5);
		color: white;
		border: none;
		padding: 5px 10px;
		border-radius: 50%;
		cursor: pointer;
		font-size: 12px;
	}
	.addWorkExpButton{
		position: absolute;
		bottom: 0;
		right: -30px;
		/* Adjust negative margin to extend beyond the table boundary */
		/* background-color: green; */
		background-color: rgba(128, 128, 128, 0.5);
		color: white;
		border: none;
		padding: 5px 10px;
		border-radius: 50%;
		cursor: pointer;
		font-size: 12px;		
	}
</style>

<table class="" style="border: 4px solid #000;">

	<tbody class="table-body" id="myTableBody">
		<tr>
			<td colspan="12" class="text-white separator">IV. CIVIL SERVICE ELIGIBILITY</td>
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
		<!-- <tr>
						<td colspan="5"> <input type="text" name="CSEnum27[]" class="inputToBe" value=""> </td>
						<td colspan="1"> <input type="text" name="rating[]" class="inputToBe" value=""> </td>
						<td colspan="2"> <input type="text" name="dateOfExamination[]" class="inputToBe" value=""> </td>
						<td colspan="2"> <input type="text" name="placeOfExamination[]" class="inputToBe" value=""> </td>
						<td colspan="1"> <input type="text" name="License_Number[]" class="inputToBe" value=""> </td>
						<td colspan="1"> <input type="text" name="License_DateOfValidity[]" class="inputToBe" value=""> </td>
					</tr> -->
		<?php

		for ($i = 0; $i <= 6; $i++) { // this would produce 7 rows remember
		?>
			<tr>
				<td colspan="5"> <input type="text" name="CSEnum27[]" class="inputToBe" value=""> </td>
				<td colspan="1"> <input type="text" name="rating[]" class="inputToBe" value=""> </td>
				<td colspan="2"> <input type="text" name="dateOfExamination[]" class="inputToBe" value=""> </td>
				<td colspan="2"> <input type="text" name="placeOfExamination[]" class="inputToBe" value=""> </td>
				<td colspan="1"> <input type="text" name="License_Number[]" class="inputToBe" value=""> </td>
				<td colspan="1"> <input type="text" name="License_DateOfValidity[]" class="inputToBe" value=""> </td>
			</tr>

		<?php

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

	<tbody class="table-body" id="tableWorkExperience">
		<tr>
			<td colspan="12" class="text-white separator">
				V. WORK EXPERIENCE<br>
				<small><i>(Include private employment. Start from your recent work) Description of duties should be indicated in the attached Work Experience sheet.</i></small>
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
			<td colspan="1" class="s-label border-bottom-0"><small>SALARY/ JOB/ PAY<br>GRADE (if applicable)& STEP (Format "00-0")/ INCREMENT</small></td>
			<td colspan="1" class="s-label border-bottom-0">STATUS OF<br>APPOINTMENT</td>
			<td colspan="1" class="s-label border-bottom-0">GOV'T SERVICE<br>
				<small>(Y/ N)</small>
			</td>
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
		<!-- <tr>
						<td colspan="1" class="p-0">
						<table class="w-100 border-0" style="height: 100%;">
							<tbody class="border-0">
								<tr>
									<td class="border-0 border-bottom-0" style="width: 50%;"> <input name="inclusiveDatesFrom[]" type="text" class="inputToBe"> </td>
									<td class="border-top-0 border-right-0 border-bottom-0" style="width: 50%;"> <input name="inclusiveDatesTo[]" type="text" class="inputToBe"> </td>
								</tr>
							</tbody>
						</table>
						</td>
						<td colspan="5"> <textarea name="positionTitle[]" id="" cols="30" rows="1" class="inputToBe"></textarea> </td>
						<td colspan="2"> <textarea name="departmentAgencyOffice[]" id="" cols="30" rows="1" class="inputToBe"></textarea> </td>
						<td colspan="1"> <input name="monthlySalary[]" type="text" class="inputToBe"> </td>
						<td colspan="1"> <input name="salaryJobPay[]" type="text" class="inputToBe"> </td>
						<td colspan="1"> <input name="statusOfAppointment[]" type="text" class="inputToBe"> </td>
						<td colspan="1"> <input name="govService[]" type="text" class="inputToBe"> </td>
					</tr> -->
		<?php

		for ($i = 0; $i <= 27; $i++) { // this would produce 28 rows remember
		?>
			<tr>
				<td colspan="1" class="p-0">
					<table class="w-100 border-0" style="height: 100%;">
						<tbody class="border-0">
							<tr>
								<td class="border-0 border-bottom-0" style="width: 50%;"> <input name="inclusiveDatesFrom[]" type="text" class="inputToBe"> </td>
								<td class="border-top-0 border-right-0 border-bottom-0" style="width: 50%;"> <input name="inclusiveDatesTo[]" type="text" class="inputToBe"> </td>
							</tr>
						</tbody>
					</table>
				</td>
				<td colspan="5"> <textarea name="positionTitle[]" id="" cols="30" rows="1" class="inputToBe"></textarea> </td>
				<td colspan="2"> <textarea name="departmentAgencyOffice[]" id="" cols="30" rows="1" class="inputToBe"></textarea> </td>
				<td colspan="1"> <input name="monthlySalary[]" type="text" class="inputToBe"> </td>
				<td colspan="1"> <input name="salaryJobPay[]" type="text" class="inputToBe"> </td>
				<td colspan="1"> <input name="statusOfAppointment[]" type="text" class="inputToBe"> </td>
				<td colspan="1"> <input name="govService[]" type="text" class="inputToBe"> </td>
			</tr>

		<?php

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
			<td colspan="1" class="text-center"><i><b>SIGNATURE</b></i></td>
			<td colspan="6"></td>
			<td colspan="2" class="text-center"><i><b>DATE</b></i></td>
			<td colspan="3"> <input type="text" class="inputToBe" name="page2Date"> </td>
		</tr>
	</tbody>

</table>

<div style="float: right;">
	<p class="theFooterParagraphinbelow"><i> CS FORM 212 (Revised 2017), Page 2 of 4</i></p>
</div>

<script>
	document.addEventListener("DOMContentLoaded", function() {
    // Creating the addButton for the first table
    var addButton1 = document.createElement("button");
    addButton1.textContent = "+";
    addButton1.classList.add("addButton");

    addButton1.addEventListener("click", function(event) {
        event.preventDefault();

        var tableBody = document.getElementById("myTableBody");
        var newRow = document.createElement("tr");

        newRow.innerHTML = `
            <td colspan="5"><input type="text" name="CSEnum27[]" class="inputToBe" value=""></td>
            <td><input type="text" name="rating[]" class="inputToBe" value=""></td>
            <td colspan="2"><input type="text" name="dateOfExamination[]" class="inputToBe" value=""></td>
            <td colspan="2"><input type="text" name="placeOfExamination[]" class="inputToBe" value=""></td>
            <td><input type="text" name="License_Number[]" class="inputToBe" value=""></td>
            <td><input type="text" name="License_DateOfValidity[]" class="inputToBe" value=""></td>
        `;

        tableBody.appendChild(newRow);
    });

    document.getElementById("myTableBody").appendChild(addButton1); // Initially placing the addButton

    // Creating the addButton for the second table
    var addButton2 = document.createElement("button");
    addButton2.textContent = "+";
    addButton2.classList.add("addWorkExpButton");

    addButton2.addEventListener("click", function(event) {
        event.preventDefault();

        var tableBody = document.getElementById("tableWorkExperience");
        var newRow = document.createElement("tr");

        newRow.innerHTML = `
            <td colspan="1" class="p-0">
                <table class="w-100 border-0" style="height: 100%;">
                    <tbody class="border-0">
                        <tr>
                            <td class="border-0 border-bottom-0" style="width: 50%;"> <input name="inclusiveDatesFrom[]" type="text" class="inputToBe"> </td>
                            <td class="border-top-0 border-right-0 border-bottom-0" style="width: 50%;"> <input name="inclusiveDatesTo[]" type="text" class="inputToBe"> </td>
                        </tr>
                    </tbody>
                </table>
            </td>
            <td colspan="5"> <textarea name="positionTitle[]" id="" cols="30" rows="1" class="inputToBe"></textarea> </td>
            <td colspan="2"> <textarea name="departmentAgencyOffice[]" id="" cols="30" rows="1" class="inputToBe"></textarea> </td>
            <td colspan="1"> <input name="monthlySalary[]" type="text" class="inputToBe"> </td>
            <td colspan="1"> <input name="salaryJobPay[]" type="text" class="inputToBe"> </td>
            <td colspan="1"> <input name="statusOfAppointment[]" type="text" class="inputToBe"> </td>
            <td colspan="1"> <input name="govService[]" type="text" class="inputToBe"> </td>
        `;

        tableBody.appendChild(newRow);
    });

    document.getElementById("tableWorkExperience").appendChild(addButton2); // Initially placing the addButton for the second table
});

</script>