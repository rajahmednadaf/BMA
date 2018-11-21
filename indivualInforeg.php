<?php
			include("connect.php");
		//error_reporting(0);
				session_start();
				$empid=$_SESSION["emp_id"];
			if(isset($_POST['register']))
			{
					echo "hello";
					//$empid=$_SESSION["emp_id"];
				//$empid=$_SESSION["emp_id"];
				//echo "taz : ".$taz=$_POST["taz"]."<br>";
				
			/*------exam paper----------- */
			$exam_paper=$_FILES['exam_paper']['name'];
			$exam_papertempfile=$_FILES['exam_paper']['tmp_name'];
			$exam_paperfolder="PersonalFiles/Exam Papers/".$exam_paper;
			move_uploaded_file($exam_papertempfile,$exam_paperfolder);
			/*-----------exam paper------*/
				
			
			/*------interview paper----------- */
			$interview_paper=$_FILES['interview_paper']['name'];
			$interview_papertempfile=$_FILES['interview_paper']['tmp_name'];
			$interview_paperfolder="PersonalFiles/Interview Papers/".$interview_paper;
			move_uploaded_file($interview_papertempfile,$interview_paperfolder);
			/*-----------hscc paper------*/
			
				/*-------Takera paper----------- 
			$tazkera=$_FILES['exam_paper']['name'];
			$tazkera_tempfile=$_FILES['exam_paper']['tmp_name'];
			$tazkera_folder="PersonalFiles/Tazkers/".$exam_paper;
			move_uploaded_file($takera_tempfile,$tazkera_folder);
			-----------Tazkera------*/
						
			/*------hscc paper----------- */
			$HSSC=$_FILES['HSSC']['name'];
			$HSSCtempfile=$_FILES['HSSC']['tmp_name'];
			$HSSCfolder="PersonalFiles/School/".$HSSC;
			move_uploaded_file($HSSCtempfile,$HSSCfolder);
			/*-----------interview paper------*/
			
			
						
			/*------graduation----------- */
			$graduation=$_FILES['graduation']['name'];
			$graduationtempfile=$_FILES['graduation']['tmp_name'];
			$graduationfolder="PersonalFiles/Graduate Diploma/".$graduation;
			move_uploaded_file($graduationtempfile,$graduationfolder);
			/*-----------graduation------*/
			
			
			/*------Work Permission letter  ----------- */
			$work_permission=$_FILES['exam_paper']['name'];
			$work_permissiontempfile=$_FILES['exam_paper']['tmp_name'];
			$work_permissionfolder="PersonalFiles/Work Permission letters/".$exam_paper;
			move_uploaded_file($work_permissiontempfile,$work_permissionfolder);
			/*-----------Work permission letter ------*/
			
			/*------post g----------- */
			$Post_Graduation=$_FILES['Post_Graduation']['name'];
			$Post_Graduationtempfile=$_FILES['Post_Graduation']['tmp_name'];
			$Post_Graduationfolder="PersonalFiles/Post Graduate Diploma/".$Post_Graduation;
			move_uploaded_file($Post_Graduationtempfile,$Post_Graduationfolder);
			/*-----------post g------*/

						
			/*------h e confir----------- */
			$HECC=$_FILES['HECC']['name'];
			$HECCtempfile=$_FILES['HECC']['tmp_name'];
			$HECCfolder="PersonalFiles/Higher Education Confermation/".$HECC;
			move_uploaded_file($HECCtempfile,$HECCfolder);
			/*-----------------*/
			
						
			/*------phd----------- */
			$PHD=$_FILES['PHD']['name'];
			$PHDtempfile=$_FILES['PHD']['tmp_name'];
			$PHDfolder="PersonalFiles/PHD Diploma/".$PHD;
			move_uploaded_file($PHDtempfile,$PHDfolder);
			/*-----------hscc paper------*/
			
			
						
			/*------experience----------- */
			$experience=$_FILES['experience']['name'];
			$experiencetempfile=$_FILES['experience']['tmp_name'];
			$experiencefolder="PersonalFiles/Work Experience Cetrifcates/".$experience;
			move_uploaded_file($experiencetempfile,$experiencefolder);
			/*-----------hscc paper------*/
			
						
			/*------hiring----------- */
			$hiring=$_FILES['hiring']['name'];
			$hiringtempfile=$_FILES['hiring']['tmp_name'];
			$hiringfolder="PersonalFiles/Hiring Letter/".$hiring;
			move_uploaded_file($hiringtempfile,$hiringfolder);
			/*-----------hscc paper------*/
				
						
			/*------ medical----------- */
			$medical=$_FILES['medical']['name'];
			$medicaltempfile=$_FILES['medical']['tmp_name'];
			$medicalfolder="PersonalFiles/Health Certificates/".$medical;
			move_uploaded_file($medicaltempfile,$medicalfolder);
			/*-----------hscc paper------*/	
				
						
			/*------police veri----------- */
			$police_verification=$_FILES['police_verification']['name'];
			$police_verificationtempfile=$_FILES['police_verification']['tmp_name'];
			$police_verificationfolder="PersonalFiles/Police Clearanc Cetificats/".$police_verification;
			move_uploaded_file($police_verificationtempfile,$police_verificationfolder);
			/*-----------hscc paper------*/	
			
						
			/*------contract----------- */
			$contract_letter=$_FILES['contract_letter']['name'];
			$contract_lettertempfile=$_FILES['contract_letter']['tmp_name'];
			$contract_letterfolder="PersonalFiles/Contract Documents/".$contract_letter;
			move_uploaded_file($contract_lettertempfile,$contract_letterfolder);
			/*-----------hscc paper------*/
			
						
			/*------grant1----------- */
			$grant1=$_FILES['grant1']['name'];
			$grant1tempfile=$_FILES['grant1']['tmp_name'];
			$grant1folder="PersonalFiles/Grauntee letteers/".$grant1;
			move_uploaded_file($grant1tempfile,$grant1folder);
			/*-----------hscc paper------*/
			
			/*------grant2----------- */
			$grant2=$_FILES['grant2']['name'];
			$grant2tempfile=$_FILES['grant2']['tmp_name'];
			$grant2folder="PersonalFiles/Grauntee letteers/".$grant2;
			move_uploaded_file($grant2tempfile,$grant2folder);
			/*-----------hscc paper------*/
			
			
			$query="INSERT INTO idiv_detail VALUES ('$empid', '$exam_paperfolder', '$interview_paperfolder', 'abcdef', '$HSSCfolder', '$Post_Graduationfolder', '$work_permissionfolder', '$HECCfolder', '$Post_Graduationfolder','$PHDfolder', 'experiencefolder', '$hiringfolder', '$medicalfolder', '$police_verificationfolder', '$grant1folder', '$grant2folder', '$contract_letterfolder')";
			if(mysqli_query($connect, $query))
			{
			
				
				header('location:index.php');
				
			}
			else
			{
				echo"error";
			}
			
	}		
			
			
?>