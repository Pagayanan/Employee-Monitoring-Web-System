<table class="" style="border: 4px solid #000;width:100%;">
<?php

$sqlP4 = "SELECT p.*
              FROM pds_p4 p
              INNER JOIN (
                    -- Query to identify and resolve duplicates in the employeeid table
                    -- You can replace this subquery with the appropriate join condition once duplicates are resolved
                    SELECT DISTINCT surname, firstname, middle_name, name_extension
                    FROM employeeid
                ) e ON 
                    p.surname = e.surname AND 
                    p.firstname = e.firstname AND 
                    p.middlename = e.middle_name AND 
                    p.nameextension = e.name_extension
                WHERE 
            --   e.EmployeeID = ?
            CONCAT(p.surname, ', ', p.firstname, ' ', p.middlename) = ?
              "; // Use prepared statement to prevent SQL injection


// Prepare the SQL statement
$stmt = $conn->prepare($sqlP4);
$stmt->bind_param("s", $search); // 's' specifies the variable type => 'string'

// Execute the statement
$stmt->execute();
$result = $stmt->get_result();

// Initialize row counter

if ($result->num_rows > 0) {
    // Loop through the results
    while ($row = $result->fetch_assoc()) {

        $a_Within3rdDegreenum34 =  $row['a_Within3rdDegreenum34'];
        $b_Within4thDegreenum34 =  $row['b_Within4thDegreenum34'];
        $a_p4_num35 =  $row['a_p4_num35'];
        $b_p4_num35 = $row['b_p4_num35'];
        $num36_p4 = $row['num36_p4'];
        $num37_p4 = $row['num37_p4'];
        $a_p4_num38 = $row['a_p4_num38'];
        $b_p4_num38 = $row['b_p4_num38'];
        $num39_p4 = $row['num39_p4'];
        $a_num40 = $row['a_num40'];
        $b_num40 = $row['b_num40'];
        $c_num40 = $row['c_num40'];
        // Increment row counter

        ?>



				<!-- End of Page 1 -->
	<!-- Q1 -->
    <tbody class="table-body question-block" id="pdsPage4">
        <!-- <tr>
            <td colspan="12" class="separator"></td>
        </tr> -->
        <tr>
            <td colspan="7" class="s-label border-bottom-0">
                <div class="p4NeedResize"> <span class="count">34.</span> Are you related by consanguinity or affinity to the appointing or <br>
                <span class="count"></span>recommending authority, or to the chief of bureau or office or to the<br>
                <span class="count"></span>person who has immediate supervision over you in the Office, Bureau <br> 
                <span class="count"></span>or Department where you will beapppointed,<br></div>
            </td>
            <td colspan="2">
                
            </td>
            <td colspan="3"></td>
        </tr>
        <tr>
            <td colspan="7" class="s-label">
                <span class="count"></span><div class="p4NeedResize">a. within the third degree?</div><br>
            </td>
            <td colspan="2">
                  <div class="p4checkboxContainer oneCheckBoxOnly">
                        <div class="">
                            <input type="checkbox" id="" name="a_Within3rdDegreenum34[]" value="Yes" <?php if ($a_Within3rdDegreenum34 === 'Yes') echo 'checked'; ?>>
                            <div class="p4NeedResize">YES</div> 
                        </div>
                        <div class="">
                            <input type="checkbox" id="" name="a_Within3rdDegreenum34[]" value="No" <?php if ($a_Within3rdDegreenum34 === 'No') echo 'checked'; ?>>
                            <div class="p4NeedResize">NO</div> 
                        </div>
                     </div>
            </td>
            <td colspan="3"></td>
        </tr>
        <tr>
            <td colspan="7" class="s-label">
                <span class="count"></span><div class="p4NeedResize"> b. within the fourth degree (for Local Government Unit - Career Employees)?</div>
            </td>
            <td colspan="2">
                 <div class="p4checkboxContainer oneCheckBoxOnly">
                        <div class="">
                            <input type="checkbox" id="" name="b_Within4thDegreenum34[]" value="Yes" <?php if ($b_Within4thDegreenum34 === 'Yes') echo 'checked'; ?>>
                            <div class="p4NeedResize">YES</div>
                        </div>
                        <div class="">
                            <input type="checkbox" id="" name="b_Within4thDegreenum34[]" value="No" <?php if ($b_Within4thDegreenum34 === 'No') echo 'checked'; ?> >
                            <div class="p4NeedResize">NO</div>
                        </div>
                     </div>
            </td>
            <td colspan="3"></td>
        </tr>
        <tr>
            <td colspan="7" class="s-label">
            </td>
            <td colspan="2"><div class="p4NeedResize">If YES, give details:</div></td>
            <td colspan="3"></td>
        </tr>
        <tr>
            <td colspan="7" class="s-label"></td>
            <td colspan="5"><input type="text" class="inputToBe bawasLeftUsogRight" name="ifYesDetails_num34" value="<?php echo $row['ifYesDetails_num34']; ?>"></td>
        </tr>
    </tbody>

    <!-- Q2 -->
    <tbody class="table-body question-block">
        <tr>
            <td colspan="7" class="s-label border-bottom-0">
            <div class="p4NeedResize">  <span class="count">35.</span> a. Have you ever been found guilty of any administrative offense?</div>
            </td>
            <td colspan="2">
                  <div class="p4checkboxContainer oneCheckBoxOnly">
                        <div class="">
                            <input type="checkbox" id="" name="a_p4_num35[]" value="Yes" <?php if ($a_p4_num35 === 'Yes') echo 'checked'; ?>>
                            <div class="p4NeedResize">YES</div>
                        </div>
                        <div class="">
                            <input type="checkbox" id="" name="a_p4_num35[]" value="No" <?php if ($a_p4_num35 === 'No') echo 'checked'; ?> >
                            <div class="p4NeedResize">NO</div>
                        </div>
                     </div>
                
            </td>
            <td colspan="3"></td>
        </tr>
        <tr>
            <td colspan="7" class="s-label"></td>
            <td colspan="5"><div class="p4NeedResize">If YES, give details:</div></td>
        </tr>
        <tr>
            <td colspan="7" class="s-label"></td>
            <td colspan="5"><input type="text" class="inputToBe bawasLeftUsogRight" name="ifYesDetail_num35" value="<?php echo $row['ifYesDetail_num35']; ?>"></td>
        </tr>
        <tr>
            <td colspan="7" class="s-label">
                <span class="count"></span> <div class="p4NeedResize">b. within the fourth degree (for Local Government Unit - Career Employees)?</div>
            </td>
            <td colspan="2" style="border-top-width: 1px !important;">  
                    <div class="p4checkboxContainer oneCheckBoxOnly">
                        <div class="">
                            <input type="checkbox" id="" name="b_p4_num35[]" value="Yes" <?php if ($b_p4_num35 === 'Yes') echo 'checked'; ?>>
                            <div class="p4NeedResize"> YES</div> 
                        </div>
                        <div class="">
                            <input type="checkbox" id="" name="b_p4_num35[]" value="No" <?php if ($b_p4_num35 === 'No') echo 'checked'; ?>>
                            <div class="p4NeedResize"> NO</div> 
                        </div>
                     </div>
            </td>
            <td colspan="3" style="border-top-width: 1px !important;"></td>
        </tr>
        <tr>
            <td colspan="7" class="s-label"></td>
            <td colspan="5"><div class="p4NeedResize">If YES, give details:</div> <textarea name="b_ifYesDetails_num35" id="" cols="30" rows="1" class="inputToBe bawasLeftUsogRight"><?php echo $row['b_ifYesDetails_num35']; ?></textarea></td>
        </tr>
        <tr>
            <td colspan="7" class="s-label"></td>
            <td colspan="2"><div class="p4NeedResize">Date Filed:</div> <input type="text" class="inputToBe bawasLeftUsogRight" name="dateFilednum35" value="<?php echo $row['dateFilednum35']; ?>"></td>
            <td colspan="3"></td>
        </tr>
        <tr>
            <td colspan="7" class="s-label"></td>
            <td colspan="2"><div class="p4NeedResize">Status of Case/s:</div> <input type="text" class="inputToBe bawasLeftUsogRight" name="statusOfCasenum35" value="<?php echo $row['statusOfCasenum35']; ?>"></td>
            <td colspan="3"></td>
        </tr>
    </tbody>

    <!-- Q3 -->
    <tbody class="table-body question-block">
        <tr>
            <td colspan="7" class="s-label border-bottom-0">
            <div class="p4NeedResize"><span class="count">36.</span> Have you ever been convicted of any crime or violation of any law, decree, ordinance or regulation by any court or tribunal?</div>
            </td>
            <td colspan="2">
                   <div class="p4checkboxContainer oneCheckBoxOnly">
                        <div class="">
                            <input type="checkbox" id="" name="num36_p4[]" value="Yes" <?php if ($num36_p4 === 'Yes') echo 'checked'; ?>>
                            <div class="p4NeedResize"> YES</div> 
                        </div>
                        <div class="">
                            <input type="checkbox" id="" name="num36_p4[]" value="No" <?php if ($num36_p4 === 'No') echo 'checked'; ?>>
                            <div class="p4NeedResize"> NO</div> 
                        </div>
                     </div>
            </td>
            <td colspan="3"></td>
        </tr>
        <tr>
            <td colspan="7" class="s-label"></td>
            <td colspan="5"> <div class="p4NeedResize">If YES, give details:</div></td>
        </tr>
        <tr>
            <td colspan="7" class="s-label"></td>
            <td colspan="5"><input type="text" class="inputToBe bawasLeftUsogRight" name="ifYesDetails_num36" value="<?php echo $row['ifYesDetails_num36']; ?>"></td>
        </tr>
    </tbody>

    <!-- Q4 -->
    <tbody class="table-body question-block">
        <tr>
            <td colspan="7" class="s-label border-bottom-0">
            <div class="p4NeedResize"><span class="count">37.</span> Have you ever been separated from the service in any of the following <br></div>
                
                
            </td>
            <td colspan="2">
                    <div class="p4checkboxContainer oneCheckBoxOnly">
                        <div class="">
                            <input type="checkbox" id="" name="num37_p4[]" value="Yes" <?php if ($num37_p4 === 'Yes') echo 'checked'; ?> >
                            <div class="p4NeedResize"> YES</div> 
                        </div>
                        <div class="">
                            <input type="checkbox" id="" name="num37_p4[]" value="No" <?php if ($num37_p4 === 'No') echo 'checked'; ?>>
                            <div class="p4NeedResize"> NO</div> 
                        </div>
                     </div>
            </td>
            <td colspan="3"></td>
        </tr>
        <tr>
            <td colspan="7" class="s-label">
                <span class="count"></span>   <div class="p4NeedResize">modes: resignation, retirement, dropped from the rolls, dismissal, termination, </div><br>
            </td>
            <td colspan="5"> <div class="p4NeedResize">If YES, give details:</div></td>
        </tr>
        <tr>
            <td colspan="7" class="s-label">
                <span class="count"></span>  <div class="p4NeedResize">end of term, finished contract or phased out (abolition) in the public or private sector?</div>
            </td>
            <td colspan="5"><input type="text" class="inputToBe bawasLeftUsogRight" name="ifYesDetails_num37" value="<?php echo $row['ifYesDetails_num37']; ?>"></td>
            <!-- <td colspan="3"></td> -->
        </tr>
    </tbody>

    <!-- Q5 -->
    <tbody class="table-body question-block">
        <tr>
            <td colspan="7" class="s-label border-bottom-0">
            <div class="p4NeedResize"><span class="count">38.</span> a. Have you ever been a candidate in a national or local election held within the last year (except Barangay election)?</div>
            </td>
            <td colspan="2">
                  <div class="p4checkboxContainer oneCheckBoxOnly">
                        <div class="">
                            <input type="checkbox" id="" name="a_p4_num38[]" value="Yes" <?php if ($a_p4_num38 === 'Yes') echo 'checked'; ?>>
                            <div class="p4NeedResize"> YES</div> 
                        </div>
                        <div class="">
                            <input type="checkbox" id="" name="a_p4_num38[]" value="No" <?php if ($a_p4_num38 === 'No') echo 'checked'; ?> >
                            <div class="p4NeedResize"> NO</div> 
                        </div>
                     </div>
            </td>
            <td colspan="3"></td>
        </tr>
        <tr>
            <td colspan="7" class="s-label">
                <span class="count"></span><br>
            </td>
            <td colspan="2"> <div class="p4NeedResize">If YES, give details:</div> <input type="text" class="inputToBe bawasLeftUsogRight" name="a_ifYesDetails_num38" value="<?php echo $row['a_ifYesDetails_num38']; ?>"></td>
            <td colspan="3"></td>
        </tr>
        <tr>
            <td colspan="7" class="s-label">
                <span class="count"></span>  <div class="p4NeedResize">b. Have you resigned from the government service during the three (3)-month period before the last</div>
            </td>
            <td colspan="2">
                     <div class="p4checkboxContainer oneCheckBoxOnly">
                        <div class="">
                            <input type="checkbox" id="" name="b_p4_num38[]" value="Yes" <?php if ($b_p4_num38 === 'Yes') echo 'checked'; ?>>
                            <div class="p4NeedResize"> YES</div> 
                        </div>
                        <div class="">
                            <input type="checkbox" id="" name="b_p4_num38[]" value="No" <?php if ($b_p4_num38 === 'No') echo 'checked'; ?> >
                            <div class="p4NeedResize"> NO</div> 
                        </div>
                     </div>
            </td>
            <td colspan="3"></td>
        </tr>
        <tr>
            <td colspan="7" class="s-label">
                <span class="count"></span>  <div class="p4NeedResize">election to promote/actively campaign for a national or local candidate?</div>
            </td>
            <td colspan="2"> <div class="p4NeedResize">If YES, give details:</div> <input type="text" class="inputToBe bawasLeftUsogRight" name="b_ifYesDetails_num38" value="<?php echo $row['b_ifYesDetails_num38']; ?>"></td>
            <td colspan="3"></td>
        </tr>
        <tr>
            <td colspan="7" class="s-label"></td>
            <td colspan="2"></td>
            <td colspan="3"></td>
        </tr>
    </tbody>

    <!-- Q6 -->
    <tbody class="table-body question-block">
        <tr>
            <td colspan="7" class="s-label border-bottom-0">
            <div class="p4NeedResize"><span class="count">39.</span> Have you acquired the status of an immigrant or permanent resident of another country?</div>
            </td>
            <td colspan="2">
                    <div class="p4checkboxContainer oneCheckBoxOnly">
                        <div class="">
                            <input type="checkbox" id="" name="num39_p4[]" value="Yes" <?php if ($num39_p4 === 'Yes') echo 'checked'; ?>>
                            <div class="p4NeedResize"> YES</div> 
                        </div>
                        <div class="">
                            <input type="checkbox" id="" name="num39_p4[]" value="No" <?php if ($num39_p4 === 'No') echo 'checked'; ?>>
                            <div class="p4NeedResize"> NO</div> 
                        </div>
                     </div>
            </td>
            <td colspan="3"></td>
        </tr>
        <tr>
            <td colspan="7" class="s-label">
            </td>
            <td colspan="2"> <div class="p4NeedResize">if YES, give details (country):</div> <input type="text" class="inputToBe " name="num39_ifYesDetail" value="<?php echo $row['num39_ifYesDetail']; ?>" style="width: 70%;border-bottom:1px solid black;float:right;"></td>
            <td colspan="3"></td>
        </tr>
        <tr>
            <td colspan="7" class="s-label">
            </td>
            <td colspan="2"></td>
            <td colspan="3"></td>
        </tr>
    </tbody>

    <!-- Q7 -->
    <tbody class="table-body question-block">
        <tr>
            <td colspan="7" class="s-label border-bottom-0">
            <div class="p4NeedResize"><span class="count">40.</span> Pursuant to: (a) Indigenous People's Act (RA 8371); (b) Magna Carta for Disabled Persons (RA<br>
                <span class="count"></span> 7277); and (c) Solo Parents Welfare Act of 2000 (RA 8972), please answer the following items:</div>
            </td>
            <td colspan="2">
                    
            </td>
            <td colspan="3"></td>
        </tr>
        <tr>
            <td colspan="7" class="s-label">
                <span class="count"></span> <div class="p4NeedResize">a. Are you a member of any indigenous group?</div><br>
            </td>
            <td colspan="2">
                   <div class="p4checkboxContainer oneCheckBoxOnly">
                        <div class="">
                            <input type="checkbox" id="" name="a_num40[]" value="Yes" <?php if ($a_num40 === 'Yes') echo 'checked'; ?>>
                            <div class="p4NeedResize">YES</div> 
                        </div>
                        <div class="">
                            <input type="checkbox" id="" name="a_num40[]" value="No" <?php if ($a_num40 === 'No') echo 'checked'; ?>>
                            <div class="p4NeedResize">NO</div> 
                        </div>
                     </div>
            </td>
            <td colspan="3"></td>
        </tr>
        <tr>
            <td colspan="7" class="s-label">
                <span class="count"></span><br>
            </td>
            <td colspan="5"> <div class="p4NeedResize">If YES, please specify:</div> <input type="text" class="inputToBe bawasLeftUsogRight" name="a_ifYesDetail_num40" value="<?php echo $row['a_ifYesDetail_num40']; ?>"></td>
            <!-- <td colspan="3"></td> -->
        </tr>
        <tr>
            <td colspan="7" class="s-label">
                <span class="count"></span> <div class="p4NeedResize">b. Are you a person with disability?</div>
            </td>
            <td colspan="2">
                     <div class="p4checkboxContainer oneCheckBoxOnly">
                        <div class="">
                            <input type="checkbox" id="" name="b_num40[]" value="Yes"  <?php if ($b_num40 === 'Yes') echo 'checked'; ?>>
                            <div class="p4NeedResize"> YES</div> 
                        </div>
                        <div class="">
                            <input type="checkbox" id="" name="b_num40[]" value="No"  <?php if ($b_num40 === 'No') echo 'checked'; ?>>
                            <div class="p4NeedResize"> NO</div> 
                        </div>
                     </div>
            </td>
            <td colspan="3"></td>
        </tr>
        <tr>
            <td colspan="7" class="s-label">
            </td>
            <td colspan="2"> <div class="p4NeedResize">If YES, please specify:</div> <input type="text" class="inputToBe bawasLeftUsogRight" name="b_ifYesDetail_num40" value="<?php echo $row['b_ifYesDetail_num40']; ?>"></td>
            <td colspan="3"></td>
        </tr>
        <tr>
            <td colspan="7" class="s-label">
                <span class="count"></span> <div class="p4NeedResize">c. Are you a solo parent?</div>
            </td>
            <td colspan="2">
                    <div class="p4checkboxContainer oneCheckBoxOnly">
                        <div class="">
                            <input type="checkbox" id="" name="c_num40[]" value="Yes" <?php if ($c_num40 === 'Yes') echo 'checked'; ?>>
                            <div class="p4NeedResize"> YES</div> 
                        </div>
                        <div class="">
                            <input type="checkbox" id="" name="c_num40[]" value="No" <?php if ($c_num40 === 'No') echo 'checked'; ?>>
                            <div class="p4NeedResize"> NO</div> 
                        </div>
                     </div>
            </td>
            <td colspan="3"></td>
        </tr>
        <tr>
            <td colspan="7" class="s-label"></td>
            <td colspan="2"> <div class="p4NeedResize">If YES, please specify:</div> <input type="text" class="inputToBe bawasLeftUsogRight" name="c_ifYesDetails_num40" value="<?php echo $row['c_ifYesDetails_num40']; ?>"></td>
            <td colspan="3"></td>
        </tr>
    </tbody>

    <!-- End of Page 4 -->

    <tbody class="table-body">
        <tr>
            <td colspan="8" class="s-label">
                <span class="count">41.</span> REFERENCES <span class="text-danger">(Person not related by consanguinity or affinity to applicant /appointee)</span>
            </td>
            <td colspan="4" rowspan="5" class="p-5" style="width: 400px;">
                <table class="w border-0" id="pdsp4idtable" style="width: 3.5cm; height: 4.5cm; margin: auto; border: 0;" >
                    <tbody class="border-0"  >
                        <tr>
                            <td class="text-center p-3" style="text-align: center; vertical-align: middle; border: 1px solid #000;"> <span style=" display: block;font-size:8px;">ID picture taken within the last  6 months3.5 cm. X 4.5 cm(passport size)With full and handwrittenname tag and signature overprinted nameComputer generated or photocopied picture is not acceptable</span></td>
                        </tr>
                        <tr>
                            <td class="border-0 text-muted lead text-center">PHOTO</td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr class="text-center">
            <td colspan="4" class="s-label">NAME</td>
            <td colspan="2" class="s-label">ADDRESS</td>
            <td colspan="2" class="s-label">TEL. NO.</td>
        </tr>
        <tr>
            <td colspan="4"><input type="text" class="inputToBe" name="references_name_r1" value="<?php echo $row['references_name_r1']; ?>"></td>
            <td colspan="2"><input type="text" class="inputToBe" name="references_address_r1" value="<?php echo $row['references_address_r1']; ?>"></td>
            <td colspan="2"><input type="text" class="inputToBe" name="references_telno_r1" value="<?php echo $row['references_telno_r1']; ?>"></td>
        </tr>
        <tr>
            <td colspan="4"><input type="text" class="inputToBe" name="references_name_r2" value="<?php echo $row['references_name_r2']; ?>"></td>
            <td colspan="2"><input type="text" class="inputToBe" name="references_address_r2" value="<?php echo $row['references_address_r2']; ?>"></td>
            <td colspan="2"><input type="text" class="inputToBe" name="references_telno_r2" value="<?php echo $row['references_telno_r2']; ?>"></td>
        </tr>
        <tr>
            <td colspan="8">
                <span class="count">42.</span> I declare under oath that I have personally accomplished this Personal Data Sheet which is a true correct and<br><span class="count"></span> complete statement pursuant to the provisions of pertinent laws, rules and regulations of the Republic of the<br><span class="count"></span> Philippines. I authorize the agency head / authorized representative t verify validate the contents stated herein.<br><span class="count"></span> I agree that any misrepresentation made in this document and its attachments shall cause the filing of<br><span class="count"></span> administrative/criminal case/s against me.
            </td>
        </tr>
        <tr>
            <td colspan="12" class="border-0 p-0">
                <table class="border-0 w-100">
                    <tbody class="border-0">
                        <tr>
                            <td colspan="4" class="border-0 p-3" style="width: 38.5%;">
                                <table class="border-0 w-100">
                                    <tbody>
                                        <tr>
                                            <td class="s-label py-2">Government Issued ID(i.e.Passport, GSIS, SSS, PRC, Driver's License, etc.)<br>                               PLEASE INDICATE ID Number and Date of Issuance</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 30%;">Government Issued ID: <input type="text" class="inputToBe" name="governmentIssueID" value="<?php echo $row['governmentIssueID']; ?>" style="width: 50%;"></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 30%;">ID/License/Passport No.: <input type="text" class="inputToBe"  name="ID_licence_Pass" value="<?php echo $row['ID_licence_Pass']; ?>" style="width: 50%;"></td>
                                        </tr>
                                        <tr>
                                            <td style="width: 30%;">Date/Place of Issuance: <input type="text" class="inputToBe"  name="Day_PlaceofIssuance"  style="width: 50%;" value="<?php echo $row['Day_PlaceofIssuance']; ?>"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                            <td colspan="4" class="border-0 p-3" style="width: 38.5%;">
                                <table class="border-0 w-100">
                                    <tbody class="border-0 text-center">
                                        <tr>
                                            <td class="py-4"></td>
                                        </tr>
                                        <tr>
                                            <td class="s-label"><small>Signature (Sign inside the box)</small></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td class="s-label"><small>Date Accomplished</small></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                            <td colspan="4" class="border-0 p-3">
                                <table class="border-0 w-100">
                                    <tbody class="border-0" >
                                        <tr>
                                            <td class="py-5"></td>
                                        </tr>
                                        <tr>
                                            <td class="s-label text-center">Right Thumbmark</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>

                    <tbody class="table-body">
                        <tr>
                            <td colspan="12" class="text-center py-2">
                                SUBSCRIBED AND SWORN to before me this <input type="text" class="border-top-0 border-left-0 border-right-0" name="subscribe_and_sworn" style="width: 25%;" value="<?php echo $row['subscribe_and_sworn']; ?>"> , affiant exhibiting his/her validly issued government ID as indicated above.
                            </td>
                        </tr>
                        <tr>
                            <td colspan="12" class="py-2">
                                <table class="w-25 mx-auto">
                                    <tbody>
                                        <tr>
                                            <td class="py-4"></td>
                                        </tr>
                                        <tr>
                                            <td class="s-label text-center">Person Administering Oath</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
              
              

                <?php
    }
}

$stmt->close();
?>


</table>
