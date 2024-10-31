
		
		
		
		
		
		<table class="" style="border: 4px solid #000;">

				<tbody class="table-header">
					<tr>
						<td colspan="12" class="h5"><i><b>CS Form No. 212</b></i></td>
					</tr>
					<tr>
						<td colspan="12" class="align-top" style="max-height: 12px;">
							<i><b>Revised 2017</b></i>
						</td>
					</tr>
					<tr>
						<!-- <td colspan="12" class="text-center"><h1><b>PERSONAL DATA SHEET</b></h1></td> -->
						<td colspan="12" class="text-center"><h2><b>PERSONAL DATA SHEET</b></h2></td>

					</tr>
					<tr>
						<td colspan="12"><i><b>WARNING: Any misrepresentation main in the Personal Data Sheet and the Work Experience Sheet shall cause the filing of administative/criminal case/s against the person concerned.</b></i></td>
					</tr>
					<tr>
						<td colspan="12"><i><b>READ THE ATTACHED GUIDE TO FILLING OUT THE PERSONAL DATA SHEET (PDS) BEFORE ACCOMPLISHING THE PDS FORM</b></i></td>
					</tr>
					<tr>
						<td colspan="9">Print legibly. Tick appropriate boxes ( <input type="checkbox" > ) ad use seperate sheet if necessary. Indicate N/A if not applicable. <b>DO NOT ABBREVIATE.</b></td>
						<td colspan="1" style="border:1px solid#000b;background:#757575;width:8%;"><small>1. CS ID No.</small></td>
						<td colspan="2" class="text-right" style="border:1px solid #000;width:20%;"><small>(Do not fill up. For CSC use only)</small></td>
					</tr>
				</tbody>

				<tbody class="table-body">
					<tr>
						<td colspan="12" class="text-white separator">I. PERSONAL INFORMATION</td>
					</tr>
					<tr>
						<td colspan="1" class="s-label border-bottom-0">
							<span class="count">2.</span> SURNAME
						</td>
						<td colspan="11"><input type="text" name="surname" class="inputToBe" value="<?php echo $rows['surname']; ?>"></td>

					</tr>
					<tr>
						<td colspan="1" class="s-label border-0"><span class="count"></span> FIRST NAME</td>
						<td colspan="9"><input type="text"  name="firstname" class="inputToBe" value="<?php echo $rows['firstname']; ?>"></td>
						<td colspan="2" class="align-top s-label"><small>NAME EXTENSION (JR.,SR)</small>
							<div style="width: 22%;display: inline-block;margin-left: 2%;"><input type="text" class="inputToBe" name="nameextension" style=" background: transparent;" value="<?php echo $rows['nameextension']; ?>"></div>
						</td>
					</tr>
					<tr>
						<td colspan="1" class="s-label border-0"><span class="count"></span> MIDDLE NAME</td>
						<td colspan="11"><input type="text" name="middlename" class="inputToBe" value="<?php echo $rows['middlename']; ?>"></td>
					</tr>
					<tr>
						<td colspan="1" class="s-label border-bottom-0">
							<span class="count">3.</span> DATE OF BIRTH<br>
							<span class="count"></span> (mm/dd/yyyy)
						</td>
						<td colspan="5" rowspan="2"><input type="text" name="DateofBirth" id="" class="inputToBe" value="<?php echo $rows['DateofBirth']; ?>"></td>
						<td colspan="3" class="s-label align-top border-bottom-0">
							<span class="count">16.</span> CITIZENSHIP
						</td>
						<td colspan="3" class="citizenshipRightSidePart border-bottom-0 ">
                            <div class="oneCheckBoxOnly">
                                <div class="rightPartctznRP" style="width: 30%;">
                                    <input type="checkbox" id="Filipino" name="Citizenship[]" value="Filipino" <?php if ($citizenship === 'Filipino') echo 'checked'; ?>>
                                    <label for="Filipino">Filipino</label>
                                </div>
                                <div class="rightPartctznRP">
                                    <input type="checkbox" id="DualCitizenship" name="Citizenship[]" value="dualCitizenship" <?php if ($citizenship === 'dualCitizenship') echo 'checked'; ?>> 
                                    <label for="DualCitizenship" > Dual Citizenship</label>							
                                </div>
                            </div>
                        </td>
					</tr>
					<tr>
						<td colspan="1" class="s-label border-0"></td>
						<!-- <td colspan="5">+++++++++++++++++++++++++++++++++++</td> -->
						<td colspan="3" class="s-label align-top border-0 text-center small">
							<!-- just a reminder for if holder dual citizenship -->
						</td>
						<td colspan="3" class="ifHolderOfDualCitizenship border-top-0 " style="border-bottom: none;">
							<div class="oneCheckBoxOnly">
								<input type="checkbox" id="" name="ifDualCitizenship[]" value="by birth" <?php if ($dualCitizenship === 'by birth') echo 'checked'; ?>>
								<label for="byBirth">by birth</label>
								<input type="checkbox" id="" name="ifDualCitizenship[]" value="byNaturalization" <?php if ($dualCitizenship === 'byNaturalization') echo 'checked'; ?>>
								<label for="byNaturalization">by naturalization</label>
							</div>
							
						</td>
					</tr>
					<tr>
						<td colspan="1" class="s-label"><span class="count">4.</span> PLACE OR BIRTH</td>
						<td colspan="5"><input type="text" name="PlaceofBirth" class="inputToBe" value="<?php echo $rows['PlaceofBirth']; ?>"></td>
						<td colspan="3" class="s-label align-top border-0 text-center small">
							If holder of dual citizenship,
						</td>
						<td colspan="3" class="border-bottom-0 plsIndicateCountryDiv " style="border-top: none;border-bottom: none;">
						<div><label style="width:60%;" for="pleaseIndicateCountry">Pls. indicate Country:</label>
							<input type="text"  style="width:35%;display:inline;"	name="pleaseIndicateCountry" class="inputToBe" id="" value="<?php echo $rows['pleaseIndicateCountry']; ?>">
						</div></td>
					</tr>
					<tr>
						<td colspan="1" class="s-label"><span class="count">5.</span> SEX</td>
						<td colspan="5" class="">
							<div class="sexCheckboxTd oneCheckBoxOnly">
								<div class="sexCheckboxDiv">
								<input type="checkbox" class="inputToBe" name="Sex[]" id="" class="inputToBe" value="Male" <?php if ($sex === 'Male') echo 'checked'; ?>><label>Male</label>
							</div>
							<div class="sexCheckboxDiv">
								<input type="checkbox" class="inputToBe" name="Sex[]" id="" class="inputToBe" value="Female" <?php if ($sex === 'Female') echo 'checked'; ?>><label >Female</label>
							</div>
							</div>
							

						</td>
						<td colspan="3" class="s-label align-top border-0 text-center small"> please indicate the details.</td>
						<td colspan="3" class="plsIndicateDetails " style="border-top: 1px solid gray;"><textarea name="pleaseIndicateDetails" class="pleaseIndicateDetails"  id="" cols="36" rows="1"><?php echo $rows['pleaseIndicateDetails']; ?></textarea></td>
					</tr>
					<tr>
						<td colspan="1" class="s-label border-bottom-0"><span class="count">6.</span> CIVIL STATUS</td>
						<td colspan="5" rowspan="2">
							<div class="civilStatusCheckboxDiv oneCheckBoxOnly">
								<div class="civilCheckboxDiv">
									<input type="checkbox" class="" name="civilstatus[]" id="" value="single" <?php if ($civilStatus === 'single') echo 'checked'; ?>><label for="" >Single</label>
								</div>
								<div class="civilCheckboxDiv">
									<input type="checkbox" class="" name="civilstatus[]" id="" value="married" <?php if ($civilStatus === 'married') echo 'checked'; ?>><label for="">Married</label>
								</div>
								<div class="civilCheckboxDiv">
									<input type="checkbox" class="" name="civilstatus[]" id="" value="widowed" <?php if ($civilStatus === 'widowed') echo 'checked'; ?>><label for="">Widowed</label>
								</div>
								<div class="civilCheckboxDiv">
									<input type="checkbox" class="" name="civilstatus[]" id="" value="separated" <?php if ($civilStatus === 'separated') echo 'checked'; ?>><label for="">Separated</label>
								</div>
								<div class="civilCheckboxDiv">
									<input type="checkbox" class="" name="civilstatus[]" id="" value="others" <?php if ($civilStatus === 'others') echo 'checked'; ?>><label for="">Others/s: </label>
								</div>
								<div class="civilCheckboxDiv"><input type="text" class="" name="ifOtherDetails" id="" value="<?php echo $rows['ifOtherDetails']; ?>" id="otherCivilStatus" style="border:none;border-bottom: 0.6px solid gray;width: 60%;">
								</div>
							</div>
						</td>
						<td colspan="2" class="s-label align-top border-bottom-0 small">
							<span class="count">17.</span> RESIDENTIAL ADDRESS
						</td>
						<td colspan="4">
							<div class="AddressDesignCont">
								<div class="address_UpPart">
									<div class="addressDesignTextLeftUp">
										<input type="text" name="resaddress_house_block_lotno" class="inputToBe" value="<?php echo $rows['resaddress_house_block_lotno']; ?>">
									</div>
									<div class="addressDesignTextRightUP">
										<input type="text" name="resaddress_street" class="inputToBe" value="<?php echo $rows['resaddress_street']; ?>">
									</div>
								</div>
								<div class="address_LowPart">
									<div class="addressDesignTextLeft">
										<p>House/Block/Lot No.</p>
									</div>
									<div class="addressDesignTextRight">
										<p>Street</p>
									</div>
								</div>
						</td>
						
					</tr>
					<tr>
						<td colspan="1" class="s-label border-top-0"><span class="count"></span></td>
						<td colspan="2" class="s-label align-top border-0"></td>
						<td colspan="4">
							<div class="AddressDesignCont">
								<div class="address_UpPart">
									<div class="addressDesignTextLeftUp">
										<input type="text" class="inputToBe" name="resaddress_subdivision_village" value="<?php echo $rows['resaddress_subdivision_village']; ?>">
									</div>
									<div class="addressDesignTextRightUP">
										<input type="text" class="inputToBe" name="resaddress_barangay" value="<?php echo $rows['resaddress_barangay']; ?>">
									</div>
								</div>
								<div class="address_LowPart">
									<div class="addressDesignTextLeft">
										<p>Subdivision/Village</p>
									</div>
									<div class="addressDesignTextRight">
										<p>Barangay</p>
									</div>
								</div>

						</td>
						
					</tr>
					<tr>
						<td colspan="1" class="s-label"><span class="count">7.</span> HEIGHT (m)</td>
						<td colspan="5"> <input type="text" class="inputToBe " name="height" value="<?php echo $rows['height']; ?>"></td>
						<td colspan="2" class="s-label align-top border-0"></td>
						<td colspan="4">
							<div class="AddressDesignCont">
								<div class="address_UpPart">
									<div class="addressDesignTextLeftUp">
										<input type="text" class="inputToBe" name="resaddress_city_municipality" value="<?php echo $rows['resaddress_city_municipality']; ?>">
									</div>
									<div class="addressDesignTextRightUP">
										<input type="text" class="inputToBe" name="resaddress_province" value="<?php echo $rows['resaddress_province']; ?>">
									</div>
								</div>
								<div class="address_LowPart">
									<div class="addressDesignTextLeft">
										<p>City/Municipality</p>
									</div>
									<div class="addressDesignTextRight">
										<p>Province</p>
									</div>
								</div>
						</td>
						
					</tr>
					<tr>
						<td colspan="1" class="s-label"><span class="count">8.</span> WEIGHT (kg)</td>
						<td colspan="5"><input type="text" class="inputToBe " name="weight" value="<?php echo $rows['weight']; ?>"></td>
						<td colspan="2" class="s-label border-0 text-center">
							ZIP CODE
						</td>
						<td colspan="4"><input type="text" class="inputToBe textCenter" name="resaddress_zipcode" value="<?php echo $rows['resaddress_zipcode']; ?>"></td>
					</tr>
					<tr>
						<td colspan="1" class="s-label"><span class="count">9.</span> BLOOD TYPE</td>
						<td colspan="5"><input type="text" class="inputToBe " name="bloodtype" value="<?php echo $rows['bloodtype']; ?>"></td>
						<td colspan="2" class="s-label border-bottom-0"><span class="count">18.</span> PERMANENT ADDRESS</td>
						<td colspan="4">
							<div class="AddressDesignCont">
								<div class="address_UpPart">
									<div class="addressDesignTextLeftUp">
										<input type="text" class="inputToBe" name="permaddress_house_block_lotno" value="<?php echo $rows['permaddress_house_block_lotno']; ?>">
									</div>
									<div class="addressDesignTextRightUP">
										<input type="text" class="inputToBe" name="permaddress_street" value="<?php echo $rows['permaddress_street']; ?>">
									</div>
								</div>
								<div class="address_LowPart">
									<div class="addressDesignTextLeft">
										<p>House/Block/Lot No.</p>
									</div>
									<div class="addressDesignTextRight">
										<p>Street</p>
									</div>
								</div>
						</td>
						
					</tr>
					<tr>
						<td colspan="1" class="s-label"><span class="count">10.</span> GSIS ID NO.</td>
						<td colspan="5"><input type="text" class="inputToBe " name="gsisidno" value="<?php echo $rows['gsisidno']; ?>"></td>
						<td colspan="2" class="s-label border-0"></td>
						<td colspan="4">
							<div class="AddressDesignCont">
								<div class="address_UpPart">
									<div class="addressDesignTextLeftUp">
										<input type="text" class="inputToBe" name="permaddress_subdivision_village" value="<?php echo $rows['permaddress_subdivision_village']; ?>">
									</div>
									<div class="addressDesignTextRightUP">
										<input type="text" class="inputToBe" name="permaddress_barangay" value="<?php echo $rows['permaddress_barangay']; ?>">
									</div>
								</div>
								<div class="address_LowPart">
									<div class="addressDesignTextLeft">
										<p>Subdivision/Village</p>
									</div>
									<div class="addressDesignTextRight">
										<p>Barangay</p>
									</div>
								</div>
						</td>

					</tr>
					<tr>
						<td colspan="1" class="s-label"><span class="count">11.</span> PAG-IBIG NO.</td>
						<td colspan="5"><input type="text" class="inputToBe " name="pagibigidno" value="<?php echo $rows['pagibigidno']; ?>"></td>
						<td colspan="2" class="s-label border-0"></td>
						<td colspan="4">
							<div class="AddressDesignCont">
								<div class="address_UpPart">
									<div class="addressDesignTextLeftUp">
										<input type="text" class="inputToBe" name="permaddress_city_municipality" value="<?php echo $rows['permaddress_city_municipality']; ?>">
									</div>
									<div class="addressDesignTextRightUP">
										<input type="text" class="inputToBe" name="permaddress_province" value="<?php echo $rows['permaddress_province']; ?>">
									</div>
								</div>
								<div class="address_LowPart">
									<div class="addressDesignTextLeft">
										<p>City/Municipality</p>
									</div>
									<div class="addressDesignTextRight">
										<p>Province</p>
									</div>
								</div>
						</td>
						
					</tr>
					<tr>
						<td colspan="1" class="s-label"><span class="count">12.</span> PHILHEALTH NO.</td>
						<td colspan="5"><input type="text" class="inputToBe " name="philhealth_no" value="<?php echo $rows['philhealth_no']; ?>"></td>
						<td colspan="2" class="s-label text-center border-0">ZIP CODE</td>
						<td colspan="4"><input type="text" class="inputToBe textCenter" name="permaddress_zipcode" value="<?php echo $rows['permaddress_zipcode']; ?>"></td>
					</tr>
					<tr>
						<td colspan="1" class="s-label"><span class="count">13.</span> SSS NO.</td>
						<td colspan="5"><input type="text" class="inputToBe " name="sssno" value="<?php echo $rows['sssno']; ?>"></td>
						<td colspan="2" class="s-label"><span class="count">19.</span> TELEPHONE NO.</td>
						<td colspan="4"><input type="text" class="inputToBe" name="PStelephone" value="<?php echo $rows['PStelephone']; ?>"></td>
					</tr>
					<tr>
						<td colspan="1" class="s-label"><span class="count">14.</span> TIN NO.</td>
						<td colspan="5"><input type="text" class="inputToBe " name="tinno" value="<?php echo $rows['tinno']; ?>"></td>
						<td colspan="2" class="s-label"><span class="count">20.</span> MOBILE NO.</td>
						<td colspan="4"><input type="text" class="inputToBe" name="mobile" value="<?php echo $rows['mobile']; ?>"></td>
					</tr>
					<tr>
						<td colspan="1" class="s-label"><span class="count">15.</span> AGENCY EMPLOYEE NO.</td>
						<td colspan="5"><input type="text" class="inputToBe " name="agencyemployeeno" value="<?php echo $rows['agencyemployeeno']; ?>"></td>
						<td colspan="2" class="s-label"><span class="count">21.</span> EMAIL ADDRESS (if any)</td>
						<td colspan="4"><input type="text" class="inputToBe" name="emailaddress" value="<?php echo $rows['emailaddress']; ?>"></td>
					</tr>
				</tbody>

				<tbody class="table-body">
					<tr>
						<td colspan="12" class="text-white separator">II. FAMILY BACKGROUND</td>
					</tr>
					<tr>
						<td colspan="1" class="s-label border-bottom-0">
							<span class="count">22.</span> SPOUSE SURNAME
						</td>
						<td colspan="5"><input type="text" class="inputToBe" name="SpousesName" value="<?php echo $rows['SpousesName']; ?>"></td>
						<td colspan="3" class="s-label">
							<span class="count">23.</span> NAME of CHILDREN (Write full name and list all)
						</td>
						<td colspan="3" class="s-label text-center" style="width: 18%;">DATE OF BIRTH (mm/dd/yyyy)</td>
					</tr>
					<tr>
						<td colspan="1" class="s-label border-0">
							<span class="count"></span> FIRST NAME
						</td>
						<td colspan="4"><input type="text" name="spousefirstname" class="inputToBe" value="<?php echo $rows['spousefirstname']; ?>"></td>
						<td colspan="1" class="align-top s-label">
							<div class="nameExtensionCont">
							<div class="nameExtentionBox" style="display: inline-block;width:70%;font-size:9px;">
									<small >
										NAME EXTENSION (JR., SR)
									</small>
								</div><div class="nameExtentionBox" style="display: inline-block;">
									<input type="text" class="inputToBe nameExtensionFontResize" name="spouseNameExtention" style=" background: transparent;" value="<?php echo $rows['spouseNameExtention']; ?>">
								</div>

							</div>
						</td>
						<td colspan="3"><textarea name="1stChild" id="" cols="" rows="1"  class="inputToBe "><?php echo $rows['1stChild']; ?></textarea></td>
						<td colspan="3">									
							<input type="text"  id="" class="inputToBe" name="1stChildBirthday" value="<?php echo $rows['1stChildBirthday']; ?>">
						</td>

					</tr>
					<tr>
						<td colspan="1" class="s-label border-0">
							<span class="count"></span> MIDDLE NAME
						</td>
						<td colspan="5"><input type="text" class="inputToBe" name="spousemiddlename" value="<?php echo $rows['spousemiddlename']; ?>"></td>
						<td colspan="3"><textarea name="2ndChild" id="" cols="" rows="1" class="inputToBe "><?php echo $rows['2ndChild']; ?></textarea></td>
						<td colspan="3"><input type="text" name="2ndChildBirthday" id="" class="inputToBe" value="<?php echo $rows['2ndChildBirthday']; ?>"></td>
					</tr>
					<tr>
						<td colspan="1" class="s-label">
							<span class="count"></span> OCCUPATION
						</td>
						<td colspan="5"><input type="text" class="inputToBe" name="spouseoccupation" value="<?php echo $rows['spouseoccupation']; ?>"></td>
						<td colspan="3"><textarea name="3rdChild" id="" cols="" rows="1" class="inputToBe "><?php echo $rows['3rdChild']; ?></textarea></td>
						<td colspan="3"><input type="text" name="3rdChildBirthday" id="" class="inputToBe" value="<?php echo $rows['3rdChildBirthday']; ?>"></td>
					</tr>
					<tr>
						<td colspan="1" class="s-label">
							<span class="count"></span> EMPLOYER/BUSINESS NAME
						</td>
						<td colspan="5"><input type="text" name="employee_businessname" class="inputToBe" value="<?php echo $rows['employee_businessname']; ?>"></td>
						<td colspan="3"><textarea name="4rthCHild" id="" cols="" rows="1" class="inputToBe "><?php echo $rows['4rthCHild']; ?></textarea></td>
						<td colspan="3"><input type="text" name="4rthCHildBirthday" id="" class="inputToBe" value="<?php echo $rows['4rthCHildBirthday']; ?>"></td>
					</tr>
					<tr>
						<td colspan="1" class="s-label">
							<span class="count"></span> BUSINESS ADDRESS
						</td>
						<td colspan="5"><input type="text" name="businessaddress" class="inputToBe" value="<?php echo $rows['businessaddress']; ?>"></td>
						<td colspan="3"><textarea name="5thChild" id="" cols="" rows="1" class="inputToBe "><?php echo $rows['5thChild']; ?></textarea></td>
						<td colspan="3"><input type="text" name="5thChildBirthday" id="" class="inputToBe" value="<?php echo $rows['5thChildBirthday']; ?>"></td>
					</tr>
					<tr>
						<td colspan="1" class="s-label">
							<span class="count"></span> TELEPHONE NO.
						</td>
						<td colspan="5"><input type="text" name="spousetelephone" class="inputToBe" value="<?php echo $rows['spousetelephone']; ?>"></td>
						<td colspan="3"><textarea name="6thChild" id="" cols="" rows="1" class="inputToBe "><?php echo $rows['6thChild']; ?></textarea></td>
						<td colspan="3"><input type="text" name="6thChildBirthday" id="" class="inputToBe" value="<?php echo $rows['6thChildBirthday']; ?>"></td>
					</tr>
					<tr>
						<td colspan="1" class="s-label border-bottom-0">
							<span class="count">24.</span> FATHER'S SURNAME
						</td>
						<td colspan="5"><input type="text" name="Fatherssurname" class="inputToBe" value="<?php echo $rows['Fatherssurname']; ?>"></td>
						<td colspan="3"><textarea name="7thChild" id="" cols="" rows="1" class="inputToBe "><?php echo $rows['7thChild']; ?></textarea></td>
						<td colspan="3"><input type="text" name="7thCHildBirthday" id="" class="inputToBe" value="<?php echo $rows['7thCHildBirthday']; ?>"></td>
						
					</tr>
					<tr>
						<td colspan="1" class="s-label border-0">
							<span class="count"></span> FIRST NAME
						</td>
						<td colspan="4"><input type="text" name="fatherfirstname" class="inputToBe" value="<?php echo $rows['fatherfirstname']; ?>"></td>
						<td colspan="1" class="align-top s-label">
						
							<div class="nameExtensionCont">
							<div class="nameExtentionBox" style="display: inline-block;width:70%;font-size:9px">
									<small >
										NAME EXTENSION (JR., SR)
									</small>
								</div><div class="nameExtentionBox" style="display: inline-block;">
									<input type="text" class="inputToBe nameExtensionFontResize" style=" background: transparent;" name="fatherNameExtension" value="<?php echo $rows['fatherNameExtension']; ?>">
								</div>

							</div>


						</td>
						<td colspan="3"><textarea name="8thChild" id="" cols="" rows="1" class="inputToBe "><?php echo $rows['8thChild']; ?></textarea></td>
						<td colspan="3"><input type="text" name="8thChildBirthday" id="" class="inputToBe" value="<?php echo $rows['8thChildBirthday']; ?>"></td>
					</tr>
					<tr>
						<td colspan="1" class="s-label border-0">
							<span class="count"></span> MIDDLE NAME
						</td>
						<td colspan="5"><input type="text" class="inputToBe" name="fathermiddlename" value="<?php echo $rows['fathermiddlename']; ?>"></td>
						<td colspan="3"><textarea name="9thChild" id="" cols="" rows="1" class="inputToBe "><?php echo $rows['9thChild']; ?></textarea></td>
						<td colspan="3"><input type="text" name="9thChildBirthday" id="" class="inputToBe" value="<?php echo $rows['9thChildBirthday']; ?>"></td>
					</tr>
					<tr>
						<td colspan="1" class="s-label border-bottom-0">
							<span class="count">25.</span> MOTHERS MAIDEN NAME
						</td>
						<td colspan="5"></td>
						<td colspan="3"><textarea name="10thChild" id="" cols="" rows="1" class="inputToBe "><?php echo $rows['10thChild']; ?></textarea></td>
						<td colspan="3"><input type="text" name="10thChildBirthday" id="" class="inputToBe" value="<?php echo $rows['10thChildBirthday']; ?>"></td>
					</tr>
					<tr>
						<td colspan="1" class="s-label border-0">
							<span class="count"></span> SURNAME
						</td>
						<td colspan="5"><input type="text" name="motherssurname" class="inputToBe" value="<?php echo $rows['motherssurname']; ?>"></td>
						<td colspan="3"><textarea name="11thCHild" id="" cols="" rows="1" class="inputToBe "><?php echo $rows['11thCHild']; ?></textarea></td>
						<td colspan="3"><input type="text" name="11thCHildBirthday" id="" class="inputToBe" value="<?php echo $rows['11thCHildBirthday']; ?>"></td>
					</tr>
					<tr>
						<td colspan="1" class="s-label border-0">
							<span class="count"></span> FIRST NAME
						</td>
						<td colspan="5"><input type="text" name="motherfirstname" class="inputToBe" value="<?php echo $rows['motherfirstname']; ?>"></td>
						<td colspan="3"><textarea name="12Child" id="" cols="" rows="1" class="inputToBe "><?php echo $rows['12Child']; ?></textarea></td>
						<td colspan="3"><input type="text" name="12ChildBirthday" id="" class="inputToBe" value="<?php echo $rows['12ChildBirthday']; ?>"></td>
					</tr>
					<tr>
						<td colspan="1" class="s-label border-0">
							<span class="count"></span> MIDDLE NAME
						</td>
						<td colspan="5"><input type="text" name="mothermiddlename" class="inputToBe" value="<?php echo $rows['mothermiddlename']; ?>"></td>
						<td colspan="6" class=" s-label text-danger text-center "><i class="redText"><b style="">(Continue on seperate sheet if necessary)</b></i></td>
					</tr>
				</tbody>

				<tbody class="table-body">
					<tr>
						<td colspan="12" class="text-white separator">III. EDUCATIONAL BACKGROUND</td>
					</tr>
					<tr class="text-center">
						<td colspan="1" class="s-label border-bottom-0">
							<span class="count" style="float:left;">26.</span><br>
							<span class="d-block text-center">LEVEL</span>
						</td>
						<td colspan="4" class="s-label border-bottom-0">
							NAME OF SCHOOL<br>(Write in full)
						</td>
						<td colspan="2" class="s-label border-bottom-0">
							BASIC EDUCATION/DEGREE/COURSE<br>
							(Write in full)
						</td>
						<td colspan="2" class="s-label border-bottom-0">
							PERIOD OF ATTENDANCE
						</td>
						<td colspan="1" class="s-label border-bottom-0">HIGHEST LEVEL/UNITS EARNED<br>(If not graduated)</td>
						<td colspan="1" class="s-label border-bottom-0">YEAR GRADUATED</td>
						<td colspan="1" class="s-label border-bottom-0">SCHOLARSHIP/<br>ACADEMIC<br>HONORS<br>RECEIVED</td>
					</tr>
					<tr class="text-center" style="margin-top: -20px;">
						<td colspan="1" class="s-label border-top-0"></td>
						<td colspan="4" class="s-label border-top-0"></td>
						<td colspan="2" class="s-label border-top-0"></td>
						<td colspan="1" class="s-label">From</td>
						<td colspan="1" class="s-label">To</td>
						<td colspan="1" class="s-label border-top-0"></td>
						<td colspan="1" class="s-label border-top-0"></td>
						<td colspan="1" class="s-label border-top-0"></td>
					</tr>
					<tr>
						<td colspan="1" class="s-label">
							<span class="count"></span> ELEMENTARY
						</td>
						<td colspan="4"><textarea name="elem_nameofschool" id="" cols="30" rows="2" class="inputToBe textCenter"><?php echo $rows['elem_nameofschool']; ?></textarea></td>
						<td colspan="2"><textarea name="elem_basiceducationaldegree" id="" cols="30" rows="2" class="inputToBe textCenter"><?php echo $rows['elem_basiceducationaldegree']; ?></textarea></td>
						<td colspan="1"><input type="text" name="elem_pot_from" class="inputToBe textCenter" value="<?php echo $rows['elem_pot_from']; ?>"></td>
						<td colspan="1"><input type="text" name="elem_pot_to" class="inputToBe textCenter" value="<?php echo $rows['elem_pot_to']; ?>"></td>
						<td colspan="1"><input type="text" name="elem_highestlevel" class="inputToBe textCenter" value="<?php echo $rows['elem_highestlevel']; ?>"></td>
						<td colspan="1"><input type="text" name="elem_yeargraduated" class="inputToBe textCenter" value="<?php echo $rows['elem_yeargraduated']; ?>"></td>
						<td colspan="1"> <textarea name="elem_honorreceived" id="" cols="30" rows="2" class="inputToBe textCenter"><?php echo $rows['elem_honorreceived']; ?></textarea></td>
					</tr>
					<tr>
						<td colspan="1" class="s-label">
							<span class="count"></span> SECONDARY
						</td>
						<td colspan="4"><textarea name="secondary_nameofschool" id="" cols="30" rows="2" class="inputToBe textCenter"><?php echo $rows['secondary_nameofschool']; ?></textarea></td>
						<td colspan="2"><textarea name="secondary_basiceducationaldegree" id="" cols="30" rows="2" class="inputToBe textCenter"><?php echo $rows['secondary_basiceducationaldegree']; ?></textarea></td>
						<td colspan="1"><input type="text" name="secondary_pot_from" class="inputToBe textCenter" value="<?php echo $rows['secondary_pot_from']; ?>"></td>
						<td colspan="1"><input type="text" name="secondary_pot_to" class="inputToBe textCenter" value="<?php echo $rows['secondary_pot_to']; ?>"></td>
						<td colspan="1"><input type="text" name="secondary_highestlevel" class="inputToBe textCenter" value="<?php echo $rows['secondary_highestlevel']; ?>"></td>
						<td colspan="1"><input type="text" name="secondary_yeargraduated" class="inputToBe textCenter" value="<?php echo $rows['secondary_yeargraduated']; ?>"></td>
						<td colspan="1"> <textarea name="secondary_honorreceived" id="" cols="30" rows="2" class="inputToBe textCenter"><?php echo $rows['secondary_honorreceived']; ?></textarea></td>
					</tr>
					<tr>
						<td colspan="1" class="s-label">
							<span class="count"></span> VOCATIONAL/<br>
							<span class="count"></span> TRADE COURSE
						</td>
						<td colspan="4"><textarea name="vocationaltradecourse_nameofschool" id="" cols="30" rows="2" class="inputToBe textCenter"><?php echo $rows['vocationaltradecourse_nameofschool']; ?></textarea></td>
						<td colspan="2"><textarea name="vocationaltradecourse_basiceducationaldegree" id="" cols="30" rows="2" class="inputToBe textCenter"><?php echo $rows['vocationaltradecourse_basiceducationaldegree']; ?></textarea></td>
						<td colspan="1"><input type="text" name="vocationaltradecourse_pot_from" class="inputToBe textCenter" value="<?php echo $rows['vocationaltradecourse_pot_from']; ?>"></td>
						<td colspan="1"><input type="text" name="vocationaltradecourse_pot_to" class="inputToBe textCenter" value="<?php echo $rows['vocationaltradecourse_pot_to']; ?>"></td>
						<td colspan="1"><input type="text" name="vocationaltradecourse_highestlevel" class="inputToBe textCenter" value="<?php echo $rows['vocationaltradecourse_highestlevel']; ?>"></td>
						<td colspan="1"><input type="text"  name="vocationaltradecourse_yeargraduated" class="inputToBe textCenter" value="<?php echo $rows['vocationaltradecourse_yeargraduated']; ?>"></td>
						<td colspan="1"> <textarea name="vocationaltradecourse_honorreceived" id="" cols="30" rows="2" class="inputToBe textCenter"><?php echo $rows['vocationaltradecourse_honorreceived']; ?></textarea></td>				
					</tr>
					<tr>
						<td colspan="1" class="s-label">
							<span class="count"></span> COLLEGE
						</td>
						<td colspan="4"><textarea name="college_nameofschool" id="" cols="30" rows="2" class="inputToBe textCenter"><?php echo $rows['college_nameofschool']; ?></textarea></td>
						<td colspan="2"><textarea name="college_basiceducationaldegree" id="" cols="30" rows="2" class="inputToBe textCenter"><?php echo $rows['college_basiceducationaldegree']; ?></textarea></td>
						<td colspan="1"><input type="text" name="college_pot_from" class="inputToBe textCenter" value="<?php echo $rows['college_pot_from']; ?>"></td>
						<td colspan="1"><input type="text" name="college_pot_to" class="inputToBe textCenter" value="<?php echo $rows['college_pot_to']; ?>"></td>
						<td colspan="1"><input type="text" name="college_highestlevel" class="inputToBe textCenter" value="<?php echo $rows['college_highestlevel']; ?>"></td>
						<td colspan="1"><input type="text" name="college_yeargraduated" class="inputToBe textCenter" value="<?php echo $rows['college_yeargraduated']; ?>"></td>
						<td colspan="1"> <textarea name="college_honorreceived" id="" cols="30" rows="2" class="inputToBe textCenter"><?php echo $rows['college_honorreceived']; ?></textarea></td>
					</tr>
					<tr>
						<td colspan="1" class="s-label">
							<span class="count"></span> GRADUATE STUDIES
						</td>
						<td colspan="4"><textarea name="graduatestudies_nameofschool" id="" cols="30" rows="2" class="inputToBe textCenter"><?php echo $rows['graduatestudies_nameofschool']; ?></textarea></td>
						<td colspan="2"><textarea name="graduatestudies_basiceducationaldegree" id="" cols="30" rows="2" class="inputToBe textCenter"><?php echo $rows['graduatestudies_basiceducationaldegree']; ?></textarea></td>
						<td colspan="1"><input type="text" name="graduatestudies_pot_from" class="inputToBe textCenter" value="<?php echo $rows['graduatestudies_pot_from']; ?>"></td>
						<td colspan="1"><input type="text" name="graduatestudies_pot_to" class="inputToBe textCenter" value="<?php echo $rows['graduatestudies_pot_to']; ?>"></td>
						<td colspan="1"><input type="text" name="graduatestudies_highestlevel" class="inputToBe textCenter" value="<?php echo $rows['graduatestudies_highestlevel']; ?>"></td>
						<td colspan="1"><input type="text" name="graduatestudies_yeargraduated" class="inputToBe textCenter" value="<?php echo $rows['graduatestudies_yeargraduated']; ?>"></td>
						<td colspan="1"> <textarea name="graduatestudies_honorreceived" id="" cols="30" rows="2" class="inputToBe textCenter"><?php echo $rows['graduatestudies_honorreceived']; ?></textarea></td>
						
					</tr>
				</tbody>

				<tbody class="table-body">
					<tr>
						<!-- <td colspan="12"  class="s-label text-white separator bg-transparent text-danger text-center  "> -->
						<td colspan="12"  class="s-label text-white separator text-danger text-center  ">
							<i class="redText">(Continue on seperate sheet if necessary)</i>
						</td>
					</tr>
					<tr>
						<td colspan="1" class="text-center" style="height: 40px;"><i><b>SIGNATURE</b></i></td>
						<td colspan="6"></td>
						<td colspan="2" class="text-center"><i><b>DATE</b></i></td>
						<!-- <td colspan="3"><input type="date" name="" id="" class="inputToBe" value=" <?php //echo $rows['26date']; ?>  "></td> -->
						<!-- <td colspan="3" rowspan=""><input type="date" name="" id="" class="inputToBe" value="<?php //echo $rows['26date']; ?>"> </td> -->
						<td colspan="3" rowspan=""><input type="text" name="26date" id="" class="inputToBe" value="<?php echo $rows['26date']; ?>">
</td>
					</tr>
				</tbody>
				
			
				<!-- End of Page 1 -->

			

			

			
				<!-- End of References -->


			
			</table>

