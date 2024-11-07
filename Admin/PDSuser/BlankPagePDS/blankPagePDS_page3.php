<style>
	tbody {
		position: relative;
	}

	.addvoluntaryWorkButton {
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
	.addVolunWorkIntervenButton{
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
                <tbody class="table-body" id="voluntaryWorkorInvolment">
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
						<td colspan="1"> <input type="text" name="inclusiveDatesFromP3[]" class="inputToBe"> </td>
						<td colspan="1"> <input type="text" name="inclusiveDatesToP3[]" class="inputToBe"> </td>
						<td colspan="1">  <input type="text" name="numberOfHours[]" class="inputToBe"> </td>
						<td colspan="3"> <textarea name="positionNatureOfWork" id="" cols="30" rows="2" class="inputToBe"></textarea> </td>
					</tr> -->
						<?php

							for ($i = 0; $i <= 7; $i++) {
								?>

								<tr>
									<td colspan="6"> <textarea name="nameAddofOrg[]" id="" cols="30" rows="2" class="inputToBe"></textarea> </td>
									<td colspan="1"> <input type="text" name="inclusiveDatesFromP3[]" class="inputToBe"> </td>
									<td colspan="1"> <input type="text" name="inclusiveDatesToP3[]" class="inputToBe"> </td>
									<td colspan="1">  <input type="text" name="numberOfHours[]" class="inputToBe"> </td>
									<td colspan="3"> <textarea name="positionNatureOfWork" id="" cols="30" rows="2" class="inputToBe"></textarea> </td>
								</tr>

							<?php


							}
							
						?>

				</tbody>

				<tbody class="table-body" id="">
					<tr>
						<td colspan="12" class="text-white separator bg-transparent text-danger text-center">
							<i>(Continue on seperate sheet if necessary)</i>
						</td>
					</tr>
				</tbody>

				<tbody class="table-body" id="L_and_D_InterventionTable">
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
					<?php

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
					<?php

							for ($i = 0; $i <= 5; $i++) {
								?>

									<tr>
										<td colspan="4"> <textarea name="specialSkillsandHobbies[]" id="" cols="30" rows="2" class="inputToBe"></textarea> </td>
										<td colspan="4"> <textarea name="recognition[]" id="" cols="30" rows="2" class="inputToBe"></textarea> </td>
										<td colspan="4"> <textarea name="membership_Assoc[]" id="" cols="30" rows="2" class="inputToBe"></textarea> </td>
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
						<td colspan="4" class="text-center"><i><b>SIGNATURE</b></i></td>
						<td colspan="3"></td>
						<td colspan="1" class="text-center"><i><b>DATE</b></i></td>
						<td colspan="4"></td>
					</tr>
				</tbody>



				<!-- End of Page 3 -->

			

				<!-- End of References -->



			</table>

			<script>
			document.addEventListener("DOMContentLoaded", function() {
    // Creating the addvoluntaryWorkButton for the first table
    var addvoluntaryWorkButton1 = document.createElement("button");
    addvoluntaryWorkButton1.textContent = "+";
    addvoluntaryWorkButton1.classList.add("addvoluntaryWorkButton");

    addvoluntaryWorkButton1.addEventListener("click", function(event) {
        event.preventDefault();

        var tableBody = document.getElementById("voluntaryWorkorInvolment");
        var newRow = document.createElement("tr");

        newRow.innerHTML = `
									<td colspan="6"> <textarea name="nameAddofOrg[]" id="" cols="30" rows="2" class="inputToBe"></textarea> </td>
									<td colspan="1"> <input type="text" name="inclusiveDatesFromP3[]" class="inputToBe"> </td>
									<td colspan="1"> <input type="text" name="inclusiveDatesToP3[]" class="inputToBe"> </td>
									<td colspan="1">  <input type="text" name="numberOfHours[]" class="inputToBe"> </td>
									<td colspan="3"> <textarea name="positionNatureOfWork" id="" cols="30" rows="2" class="inputToBe"></textarea> </td>
        `;

        tableBody.appendChild(newRow);
    });

    // Append the button directly to the table body
    document.getElementById("voluntaryWorkorInvolment").appendChild(addvoluntaryWorkButton1); // Initially placing the addvoluntaryWorkButton
});

//=======================================================================

document.addEventListener("DOMContentLoaded", function() {
    // Creating the L&D_InterventionTable for the first table
    var addVolunWorkIntervenButton1 = document.createElement("button");
    addVolunWorkIntervenButton1.textContent = "+";
    addVolunWorkIntervenButton1.classList.add("addVolunWorkIntervenButton");

    addVolunWorkIntervenButton1.addEventListener("click", function(event) {
        event.preventDefault();

        var tableBody = document.getElementById("L_and_D_InterventionTable");
        var newRow = document.createElement("tr");

        newRow.innerHTML = `
										<td colspan="6"> <textarea name="titleoflearnAndIntervsn[]" id="" cols="30" rows="2" class="inputToBe"></textarea> </td>
										<td colspan="1"> <input type="text" name="inclusiveDatesFromT2[]" class="inputToBe"> </td>
										<td colspan="1"> <input type="text" name="inclusiveDatesToT2[]" class="inputToBe"> </td>
										<td colspan="1"> <input type="text" name="numOfHours[]" class="inputToBe"> </td>
										<td colspan="1"> <textarea name="typeOfLD[]" id="" cols="30" rows="2" class="inputToBe"></textarea> </td> 
										<td colspan="2"> <textarea name="ConductedSponsoredby[]" id="" cols="30" rows="2" class="inputToBe"></textarea> </td>
        `;

        tableBody.appendChild(newRow);
    });

    // Append the button directly to the table body
    document.getElementById("L_and_D_InterventionTable").appendChild(addVolunWorkIntervenButton1); // Initially placing the addVolunWorkIntervenButton
});

			</script>
	
