<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
   <title>Women Hack</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
   <link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body {
      font: 400 15px/1.8 Lato, sans-serif;
      color: #777;
  }
   h2 {
    margin: 10px 0 30px 0;
      letter-spacing: 2px;      
      font-size: 15px;
      color: #111;
  }
  h3, h4 {
      margin: 10px 0 30px 0;
      letter-spacing: 10px;      
      font-size: 20px;
      color: #111;
  }
  .container {
      padding: 80px 120px;
  }
  
  
 
  .form-control {
      border-radius: 0;
  }
  textarea {
      resize: none;
  }
  .nav-tabs li a {
      color: #777;
  }
  
  .navbar {
      font-family: Montserrat, sans-serif;
      margin-bottom: 0;
      background-color: #2d2d30;
      border: 0;
      font-size: 11px !important;
      letter-spacing: 4px;
      opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand { 
      color: #d5d5d5 !important;
  }
  .navbar-nav li a:hover {
      color: #fff !important;

  }
        
  .navbar-nav li.active a {
      color: #fff !important;
       
      background-color: orange !important;;
  }

  .navbar-default .navbar-toggle {
      border-color: transparent;
  }
  .open .dropdown-toggle {
      color: #fff;
      background-color: #555 !important;
  }
  .dropdown-menu li a {
      color: #000 !important;
  }
  .dropdown-menu li a:hover {
      background-color: red !important;
  }
 
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.html">PMS</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.html">HOME</a></li>
        <li><a href="complainnew.php">COMPLAINT</a></li>
        <li><a href="counsellor.html">COUNSELLING</a></li>
        
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">MORE
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
             <li><a href="projects.html">Projects</a></li>
            <li><a href="lawsacts.html">Laws and Acts</a></li>
            <li><a href="helpline.html">Helpline</a></li> 
          </ul>
        </li>
      
      </ul>
    </div>

  </div>
  
</nav>

<br>
<br>

<form action="complaint.php" method="POST">
﻿<TABLE style="Z-INDEX: 0" id="Table10" border="0" cellSpacing="0" cellPadding="0" width="100%"><TR><TD><TABLE style="Z-INDEX: 0" id="Table3" border="0" cellSpacing="0" cellPadding="0" width="100%"><TR><TD class="PAGEHEAD" height="47"background="../Images/headerFill.jpg" width="100%"colSpan="4">शिकायतकर्ता का विवरण / Details of Complainant ::</TD></TR><TR><TD class="welcometxt" height="10" width="100%" colSpan="4"></TD></TR><TR><TD style="Z-INDEX: 0; HEIGHT: 36px" class="welcometxt" height="36" vAlign="top" width="20%"align="right">नाम&nbsp;&nbsp;/ UserName * ::&nbsp;
</TD><TD class="welcometxt" height="36" vAlign="top" width="30%" align="left"><input name="txtNameCmp" type="text" id="txtNameCmp" tabindex="1" class="ncwTextinputText" onkeyup="show_data(this.value)&quot;" autocomplete="off" style="width:250px;Z-INDEX: 0" /><span id="RequiredFieldValidator1" style="color:Red;Z-INDEX:0;visibility:hidden;">
<IMG align="absMiddle" src="..//Images/reqfield.png"></span></TD><TD style="Z-INDEX: 0; HEIGHT: 36px" class="welcometxt" height="36" vAlign="top" width="50%"
colSpan="2" align="right"></TD></TR>

<TR><TD class="welcometxt" height="10" width="100%" colSpan="4"></TD></TR><TR><TD style="Z-INDEX: 0; HEIGHT: 36px" class="welcometxt" height="36" vAlign="top" width="20%"align="right"> Password * ::&nbsp;
</TD><TD class="welcometxt" height="36" vAlign="top" width="30%" align="left"><input name="password" type="password" id="txtNameCmp" tabindex="1" class="ncwTextinputText" onkeyup="show_data(this.value)&quot;" autocomplete="off" style="width:250px;Z-INDEX: 0" /><span id="RequiredFieldValidator1" style="color:Red;Z-INDEX:0;visibility:hidden;">
<IMG align="absMiddle" src="..//Images/reqfield.png"></span></TD><TD style="Z-INDEX: 0; HEIGHT: 36px" class="welcometxt" height="36" vAlign="top" width="50%"
colSpan="2" align="right"></TD></TR>

<TR><TD style="Z-INDEX: 0" class="welcometxt" height="30" vAlign="top" width="20%" align="right">पता / Address * ::&nbsp;
</TD><TD class="welcometxt" height="30" vAlign="top" width="30%" align="left"><textarea name="txtAddressCMP" rows="2" cols="20" id="txtAddressCMP" tabindex="10" class="ncwTextinputText" style="height:100px;width:250px;Z-INDEX: 0"></textarea><span id="RequiredFieldValidator2" style="color:Red;Z-INDEX:0;visibility:hidden;"><IMG align="absMiddle" src="..//Images/reqfield.png"></span><BR></TD><TD style="Z-INDEX: 0" class="welcometxt" height="30" vAlign="top" width="50%" colSpan="2"align="center">
<TABLE id="Table4" border="0" cellSpacing="0" cellPadding="0" width="100%"><TR><TD style="Z-INDEX: 0" class="welcometxt" height="25" width="40%" align="right">राज्य/ State * ::</TD><TD class="welcometxt" height="25" width="60%"><select name="ddlStateCMP" onchange="javascript:setTimeout('__doPostBack(\'ddlStateCMP\',\'\')', 0)" id="ddlStateCMP" tabindex="20" class="NcwDropdownbox" style="width:250px;Z-INDEX: 0"><option selected="selected" value="------SELECT State------">------SELECT State------</option>
	<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
	<option value="Andhra Pradesh">Andhra Pradesh</option>
	<option value="Arunachal Pradesh">Arunachal Pradesh</option>
	<option value="Assam">Assam</option>
	<option value="Bihar">Bihar</option>
	<option value="6">Chandigarh</option>
	<option value="7">Chhattisgarh</option>
	<option value="8">Dadra and Nagar Haveli</option>
	<option value="9">Daman &amp; Diu</option>
	<option value="10">Delhi</option>
	<option value="11">Goa</option>
	<option value="12">Gujarat</option>
	<option value="13">Haryana</option>
	<option value="14">Himachal Pradesh</option>
	<option value="15">Jammu and Kashmir</option>
	<option value="16">Jharkhand</option><option value="17">Karnataka</option><option value="18">Kerala</option><option value="19">Lakshaweep</option><option value="20">Madhya Pradesh</option>
	<option value="21">Maharashtra</option>
	<option value="22">Manipur</option>
	<option value="23">Meghalaya</option>
	<option value="24">Mizoram</option>
	<option value="25">Nagaland</option>
	<option value="26">Odisha</option>
	<option value="27">Pondicherry</option>
	<option value="28">Punjab</option>
	<option value="29">Rajasthan</option>
	<option value="30">Sikkim</option>
	<option value="31">Tamil Nadu</option>
	<option value="38">Telangana</option>
	<option value="32">Tripura</option>
	<option value="33">Uttar Pradesh</option>
	<option value="34">Uttarakhand</option>
	<option value="35">West Bengal</option>

</select></TD>
																</TR>
																<TR>
																	<TD style="Z-INDEX: 0" class="welcometxt" height="25" width="40%" align="right">जनपद 
																		/ District * ::</TD>
																	<TD class="welcometxt" height="25" width="60%"><select name="ddlCityCMP" id="ddlCityCMP" tabindex="30" class="NcwDropdownbox" style="width:250px;Z-INDEX: 0">
	<option value="--------SELECT DISTRICT--------">--------SELECT DISTRICT--------</option>
	<option value="33">TIKAMGARH</option>
	
</select></TD>
																</TR>
																<TR>
																	<TD style="Z-INDEX: 0" class="welcometxt" height="25" vAlign="top" width="40%" align="right">पिनकोड 
																		/ Pin No. * ::
																	</TD>
																	<TD class="welcometxt" height="25" width="60%"><input name="txtPinNoCMP" type="text" id="txtPinNoCMP" tabindex="40" class="ncwTextinputText" style="width:250px;Z-INDEX: 0" /><span id="Requiredfieldvalidator11" style="color:Red;Z-INDEX:0;visibility:hidden;">
																			<IMG align="absMiddle" src="..//Images/reqfield.png"></span><span id="RegularExpressionValidator5" class="welcometxt" style="color:Red;Z-INDEX:0;visibility:hidden;">*</span></TD>
																</TR>
																<TR>
																	<TD style="Z-INDEX: 0" class="welcometxt" height="25" vAlign="top" width="40%" align="right">Email 
																		* ::
																	</TD>
																	<TD class="welcometxt" height="25" width="60%"><input name="txtEmailCMP" type="text" id="txtEmailCMP" tabindex="50" class="ncwTextinputText" style="width:250px;Z-INDEX: 0" /><span id="Requiredfieldvalidator8" style="color:Red;Z-INDEX:0;visibility:hidden;">
																			<IMG align="absMiddle" src="..//Images/reqfield.png"></span><span id="RegularExpressionValidator1" style="color:Red;Z-INDEX:0;visibility:hidden;">*</span></TD>
																</TR>
																<TR>
																	<TD style="Z-INDEX: 0" class="welcometxt" height="25" vAlign="top" width="40%" align="right">मोबाइल 
																		न०/ Mobile Number * ::
																	</TD>
																	<TD style="Z-INDEX: 0" class="welcometxt" height="25" width="60%"><input name="txtContactNoCMP" type="text" id="txtContactNoCMP" tabindex="60" class="ncwTextinputText" style="width:250px;Z-INDEX: 0" />
																		<span id="Requiredfieldvalidator12" style="color:Red;Z-INDEX:0;visibility:hidden;">
																			<IMG align="absMiddle" src="..//Images/reqfield.png"></span>
																		<span id="Regularexpressionvalidator8" class="welcometxt" style="color:Red;Z-INDEX:0;visibility:hidden;">*</span></TD>
																</TR>
																<TR>
																	<TD style="Z-INDEX: 0" class="welcometxt" height="25" width="40%" align="right">लिंग 
																		/ Sex * ::
																	</TD>
																	<TD style="Z-INDEX: 0" class="welcometxt" height="25" width="60%"><select name="ddlSexCMP" id="ddlSexCMP" tabindex="70" class="NcwDropdownbox" style="width:250px;Z-INDEX: 0">
	<option value="------SELECT Gender------">------SELECT Gender------</option>
	<option value="Not-Mentioned">Not-Mentioned</option>
	<option value="FEMALE">FEMALE</option>
	<option value="MALE">MALE</option>
	<option value="BOTH">BOTH</option>
	<option value="THIRD GENDER">THIRD GENDER</option>
	<option value="UNKNOWN">UNKNOWN</option>

</TR></TABLE></TD></TR></TABLE>

<hr>

<TABLE style="Z-INDEX: 0" id="Table14" border="0" cellSpacing="0" cellPadding="0" width="100%">
													<TR>
														<TD class="welcometxt" height="10" colSpan="4"></TD>
													</TR>
													<TR>
														<TD class="welcometxt" height="47" background="../Images/headerFill.jpg" width="100%"
															colSpan="4">
															<TABLE id="Table15" border="0" cellSpacing="0" cellPadding="0" width="100%" height="30">
																<TR>
																	<TD class="PAGEHEAD" vAlign="middle" width="50%">पीड़ित का विवरण : क्या शिकायतकर्ता 
																		ही पीड़ित हैं? / Details of Victim: Whether the complainant is the victim ?
																	</TD>
																	<TD vAlign="middle"><table id="rdbCmtVIC" class="ncwRadiobuttonlist" border="0">
	<!--<tr>
		<td><input id="rdbCmtVIC_0" type="radio" name="rdbCmtVIC" value="1" onclick="javascript:setTimeout('__doPostBack(\'rdbCmtVIC$0\',\'\')', 0)" tabindex="80" /><label for="rdbCmtVIC_0">Yes/हाँ</label></td><td><input id="rdbCmtVIC_1" type="radio" name="rdbCmtVIC" value="0" checked="checked" tabindex="80" /><label for="rdbCmtVIC_1">No/नहीं</label></td>
	</tr>-->
</table></TD>
																</TR>
															</TABLE>
														</TD>
													</TR>
													<TR>
														<TD class="welcometxt" height="10" width="1024" colSpan="4"></TD>
													</TR>
													<TR>
														<TD style="Z-INDEX: 0" class="welcometxt" height="30" vAlign="top" width="20%" align="right">नाम&nbsp;&nbsp;/ 
															Name * ::&nbsp;</TD>
														<TD class="welcometxt" vAlign="top" width="30%" align="left"><input name="txtNameVIC" type="text" id="txtNameVIC" tabindex="90" class="ncwTextinputText" style="width:250px;Z-INDEX: 0" /><span id="RequiredFieldValidator3" style="color:Red;Z-INDEX:0;visibility:hidden;">
																<IMG align="absMiddle" src="..//Images/reqfield.png"></span></TD>
														<TD style="Z-INDEX: 0" vAlign="top" width="50%" colSpan="2" align="right"></TD>
													</TR>
													<TR>
														<TD style="Z-INDEX: 0" class="welcometxt" height="30" vAlign="top" width="20%" align="right">पता 
															/ Address * ::&nbsp;
														</TD>
														<TD class="welcometxt" height="30" vAlign="top" width="30%" align="left"><textarea name="txtAddressVIC" rows="2" cols="20" id="txtAddressVIC" tabindex="100" class="ncwTextinputText" style="height:100px;width:250px;Z-INDEX: 0"></textarea><span id="RequiredFieldValidator4" style="color:Red;Z-INDEX:0;visibility:hidden;">
																<IMG align="absMiddle" src="..//Images/reqfield.png"></span></TD>
														<TD style="Z-INDEX: 0" vAlign="top" width="50%" colSpan="2" align="right">
															<TABLE id="Table9" border="0" cellSpacing="0" cellPadding="0" width="100%">
																<TR>
																	<TD style="Z-INDEX: 0" class="welcometxt" height="25" width="40%" align="right">राज्य 
																		/ State * ::
																	</TD>
																	<TD height="25" width="60%"><select name="ddlStateVIC" onchange="javascript:setTimeout('__doPostBack(\'ddlStateVIC\',\'\')', 0)" id="ddlStateVIC" tabindex="110" class="NcwDropdownbox" style="width:250px;
Z-INDEX: 0">
	<option selected="selected" value="------SELECT State------">------SELECT State------</option>
	<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
	<option value="Andhra Pradesh">Andhra Pradesh</option>
	<option value="Arunachal Pradesh">Arunachal Pradesh</option>
	<option value="Assam">Assam</option>
	<option value="Bihar">Bihar</option>
	<option value="6">Chandigarh</option>
	<option value="7">Chhattisgarh</option>
	<option value="8">Dadra and Nagar Haveli</option>
	<option value="9">Daman &amp; Diu</option>
	<option value="10">Delhi</option>
	<option value="11">Goa</option>
	<option value="12">Gujarat</option>
	<option value="13">Haryana</option>
	<option value="14">Himachal Pradesh</option>
	<option value="15">Jammu and Kashmir</option>
	<option value="16">Jharkhand</option>
	<option value="17">Karnataka</option>
	<option value="18">Kerala</option>
	<option value="19">Lakshadweep</option>
	<option value="20">Madhya Pradesh</option>
	<option value="21">Maharashtra</option>
	<option value="22">Manipur</option>
	<option value="23">Meghalaya</option>
	<option value="24">Mizoram</option>
	<option value="25">Nagaland</option>
	<option value="26">Odisha</option>
	<option value="27">Pondicherry</option>
	<option value="28">Punjab</option>
	<option value="29">Rajasthan</option>
	<option value="30">Sikkim</option>
	<option value="31">Tamil Nadu</option>
	<option value="38">Telangana</option>
	<option value="32">Tripura</option>
	<option value="33">Uttar Pradesh</option>
	<option value="34">Uttarakhand</option>
	<option value="35">West Bengal</option>

</select></TD>
																</TR>
																<TR>
																	<TD style="Z-INDEX: 0" class="welcometxt" height="25" width="40%" align="right">&nbsp;जनपद 
																		/ District * ::
																	</TD>
																	<TD height="25" width="60%"><select name="ddlCityVIC" id="ddlCityVIC" tabindex="120" class="NcwDropdownbox" style="width:250px;Z-INDEX: 0">
	<option value="--------SELECT DISTRICT--------">--------SELECT DISTRICT--------</option>
	<option value="TIKAMGARH">TIKAMGARH</option>
	

</select></TD>
																</TR>
																<TR>
																	<TD style="Z-INDEX: 0" class="welcometxt" height="25" vAlign="top" width="40%" align="right">पिनकोड/ 
																		Pin No. ::
																	</TD>
																	<TD height="25" width="60%"><input name="txtPinNoVIC" type="text" id="txtPinNoVIC" tabindex="130" class="ncwTextinputText" style="width:250px;Z-INDEX: 0" /><span id="Regularexpressionvalidator6" class="welcometxt" style="color:Red;Z-INDEX:0;visibility:hidden;">Insert numeric value in Victim's PIN No.</span></TD>
																</TR>
																<TR>
																	<TD style="Z-INDEX: 0" class="welcometxt" height="25" vAlign="top" width="40%" align="right">Email 
																		::</TD>
																	<TD height="25" width="60%"><input name="txtEmailVIC" type="text" id="txtEmailVIC" tabindex="140" class="ncwTextinputText" style="width:250px;Z-INDEX: 0" /><span id="Regularexpressionvalidator2" style="color:Red;Z-INDEX:0;visibility:hidden;">*</span></TD>
																</TR>
																<TR>
																	<TD style="Z-INDEX: 0" class="welcometxt" height="25" width="40%" align="right">फ़ोन-मोबाइल 
																		न०/ Phone-Mobile Number&nbsp;::
																	</TD>
																	<TD height="25" width="60%"><input name="txtContactNoVIC" type="text" id="txtContactNoVIC" tabindex="150" class="ncwTextinputText" style="width:250px;Z-INDEX: 0" /></TD>
																</TR>
																<TR>
																	<TD style="Z-INDEX: 0" class="welcometxt" height="25" vAlign="top" width="40%" align="right">लिंग 
																		/ Sex ::
																	</TD>
																	<TD height="25" width="60%"><select name="ddlSexVIC" id="ddlSexVIC" tabindex="160" class="NcwDropdownbox" style="width:250px;Z-INDEX: 0">
	<option value="------SELECT Gender------">------SELECT Gender------</option>
	<option value="Not-Mentioned">Not-Mentioned</option>
	<option value="FEMALE">FEMALE</option>
	<option value="MALE">MALE</option>
	<option value="BOTH">BOTH</option>
	<option value="THIRD GENDER">THIRD GENDER</option>
	<option value="UNKNOWN">UNKNOWN</option>

</select></TD>
	</TR>
															</TABLE>
															&nbsp;
														</TD>
													</TR>
												</TABLE>
											</TD>
										</TR>
										<TR>
											<TD>
  <TABLE style="Z-INDEX: 0" id="Table18" border="0" cellSpacing="0" cellPadding="0" width="100%">
													<TR>
														<TD class="welcometxt" height="25" vAlign="top" width="20%" align="right">जन्म 
															तिथि&nbsp;/ Date of Birth * ::
														</TD>
														<TD class="welcometxt" vAlign="top" width="30%" align="left"><input name="txtDOB" type="date" id="txtDOB" tabindex="170" title="Enter date in  dd/Mmm/yyyyy format." class="NcwTextinputText" style="height:22px;width:250px;Z-INDEX: 0" /><INPUT style="Z-INDEX: 0; WIDTH: 16px; HEIGHT: 16px" id="Button2" class="CalButton" title="Select Date from the calander."
																tabIndex="180" onclick="PopupPicker('txtDOB',210,210 );" type="button">
															<BR>
															<span id="Requiredfieldvalidator5" class="welcometxt" style="color:Red;Z-INDEX:0;visibility:hidden;">
																<IMG align="absMiddle" src="..//Images/reqfield.png"></span><span id="RegularExpressionValidator4" class="welcometxt" style="color:Red;Z-INDEX:0;visibility:hidden;">Insert 01/Dec/2010 for 01/12/2010.</span></TD>
														<TD class="welcometxt" height="25" vAlign="top" width="20%" align="right">धर्म /
Religion ::</TD>
														<TD height="25" vAlign="top" width="30%"><select name="ddlReligionVIC" id="ddlReligionVIC" tabindex="200" class="NcwDropdownbox" style="width:250px;Z-INDEX: 0">
	<option value="------SELECT Religion------">------SELECT Religion------</option>
	<option value="Not-Mentioned">Not-Mentioned</option>
	<option value="HINDU">HINDU</option>
	<option value="MUSLIMS">MUSLIMS</option>
	<option value="SIKH">SIKH</option>
	<option value="JAIN">JAIN</option>
	<option value="CHIRSTIAN">CHIRSTIAN</option>
	<option value="OTHERS">OTHERS</option>
	<option value="UNKNOWN">UNKNOWN</option>

</select></TD>
													</TR>
													<TR>
														<TD class="welcometxt" vAlign="top" width="20%" align="right">Whether&nbsp;Challenged 
															::&nbsp;&nbsp;<BR>
															person&nbsp;&nbsp;&nbsp;&nbsp;</TD>
														<TD class="welcometxt" vAlign="top" width="30%" align="left"><select name="ddlChallengeVIC" id="ddlChallengeVIC" tabindex="190" class="NcwDropdownbox" style="width:250px;Z-INDEX: 0">
	<option value="NOT APPLICABLE">NOT APPLICABLE</option>
	<option value="MENTALLY">MENTALLY</option>
	<option value="PHYSICALLY">PHYSICALLY</option>

</select></TD>
														<TD class="welcometxt" height="45" vAlign="top" width="20%" align="right">जाति / 
															Caste ::
														</TD>
														<TD height="45" vAlign="top" width="30%"><select name="ddlCastVIC" id="ddlCastVIC" tabindex="210" class="NcwDropdownbox" style="width:250px;Z-INDEX: 0">
	<option value="------SELECT Caste------">------SELECT Caste------</option>
	<option value="NOT-MENTIONED">NOT-MENTIONED</option>
	<option value="SCHEDULE CAST">SCHEDULE CAST</option>
	<option value="SCHEDULE TRIBE">SCHEDULE TRIBE</option>
	<option value="3">OTHER BACKWARD CLASSES</option>
	<option value="GENERAL">GENERAL</option>
	<option value="1">UNKNOWN</option>

</select></TD>

													</TR>
													<TR>
														<TD style="Z-INDEX: 0; HEIGHT: 15px" class="welcometxt" height="15" vAlign="middle"
															width="1024" colSpan="4" align="left"></TD>
													</TR></TABLE>
                                                    
 <hr>
 
 <table>
 
 <TR>
														<TD style="Z-INDEX: 0" class="PAGEHEAD" height="47" vAlign="middle" background="../Images/headerFill.jpg"
															width="1024" colSpan="4" align="left">प्रतिवादी का विवरण&nbsp;/ Details of 
															Respondent (Opposite party):</TD>
													</TR>
													<TR>
														<TD style="Z-INDEX: 0" class="welcometxt" height="10" vAlign="middle" width="1024" colSpan="4"
															align="left"></TD>
													</TR>
													<TR>
														<TD style="Z-INDEX: 0" class="welcometxt" height="30" vAlign="top" width="20%" align="left">नाम&nbsp;&nbsp;/ 
															Name * ::&nbsp;
														</TD>
														<TD class="welcometxt" height="30" vAlign="top" width="30%" align="left"><input name="txtNameRESP" type="text" id="txtNameRESP" tabindex="220" class="ncwTextinputText" style="width:250px;Z-INDEX: 0" /><span id="RequiredFieldValidator6" style="color:Red;Z-INDEX:0;visibility:hidden;">
																<IMG align="absMiddle" src="..//Images/reqfield.png"></span><BR>
														</TD>
														<TD style="Z-INDEX: 0" class="welcometxt" height="30" vAlign="top" width="50%" colSpan="2"
															align="left"></TD>
													</TR>
													<TR>
														<TD style="Z-INDEX: 0" class="welcometxt" height="30" vAlign="top" width="20%" align="left">पता 
															/ Address * ::&nbsp;
														</TD>
														<TD class="welcometxt" height="30" vAlign="top" width="30%" align="left"><textarea name="txtAddressRESP" rows="2" cols="20" id="txtAddressRESP" tabindex="230" class="ncwTextinputText" style="height:100px;width:250px;Z-INDEX: 0"></textarea><span id="RequiredFieldValidator7" style="color:Red;Z-INDEX:0;visibility:hidden;">
																<IMG align="absMiddle" src="..//Images/reqfield.png"></span><BR>
														</TD>
														<TD style="Z-INDEX: 0" class="welcometxt" height="30" vAlign="top" width="50%" colSpan="2"
															align="left">
															<TABLE id="Table11" border="0" cellSpacing="0" cellPadding="0" width="100%">
																<TR>
																	<TD style="Z-INDEX: 0" class="welcometxt" height="25" width="40%" align="right">राज्य 
																		/ State * ::</TD>
																	<TD height="25" width="60%"><select name="ddlStateRESP" onchange="javascript:setTimeout('__doPostBack(\'ddlStateRESP\',\'\')', 0)" id="ddlStateRESP" tabindex="240" class="NcwDropdownbox" style="width:250px;Z-INDEX: 0">
	<option selected="selected" value="------SELECT State------">------SELECT State------</option>
	<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
	<option value="Andhra Pradesh">Andhra Pradesh</option>
	<option value="Arunachal Pradesh">Arunachal Pradesh</option>
	<option value="Assam">Assam</option>
	<option value="Bihar">Bihar</option>
	<option value="6">Chandigarh</option>
	<option value="7">Chhattisgarh</option>
	<option value="8">Dadra and Nagar Haveli</option>
	<option value="9">Daman &amp; Diu</option>
	<option value="10">Delhi</option>
	<option value="11">Goa</option>
	<option value="12">Gujarat</option>
	<option value="13">Haryana</option>
	<option value="14">Himachal Pradesh</option>
	<option value="15">Jammu and Kashmir</option>
	<option value="16">Jharkhand</option>
	<option value="17">Karnataka</option>
	<option value="18">Kerala</option>
	<option value="19">Lakshadweep</option>
	<option value="20">Madhya Pradesh</option>
	<option value="21">Maharashtra</option>
	<option value="22">Manipur</option>
	<option value="23">Meghalaya</option>
	<option value="24">Mizoram</option>
	<option value="25">Nagaland</option>
	<option value="26">Odisha</option>
	<option value="27">Pondicherry</option>
	<option value="28">Punjab</option>
	<option value="29">Rajasthan</option>
	<option value="30">Sikkim</option>
	<option value="31">Tamil Nadu</option>
	<option value="38">Telangana</option>
	<option value="32">Tripura</option>
	<option value="33">Uttar Pradesh</option>
	<option value="34">Uttarakhand</option>
	<option value="35">West Bengal</option>

</select></TD>
																</TR>
																<TR>
																	<TD style="Z-INDEX: 0" class="welcometxt" height="25" vAlign="top" width="40%" align="right">जनपद 
																		/ District * ::
																	</TD>
																	<TD height="25" width="60%"><select name="ddlCityRESP" id="ddlCityRESP" tabindex="250" class="NcwDropdownbox" style="width:250px;Z-INDEX: 0">
	<option value="--------SELECT DISTRICT--------">--------SELECT DISTRICT--------</option>
	<option value="33">TIKAMGARH</option>
	
</select></TD>
																</TR>
																<TR>
<TD style="Z-INDEX: 0" class="welcometxt" height="25" vAlign="top" width="40%" align="right">पिनकोड 
																		/&nbsp; Pin No. ::
																	</TD>
																	<TD height="25" vAlign="top" width="60%"><input name="txtPinNoRESP" type="text" id="txtPinNoRESP" tabindex="260" class="ncwTextinputText" style="width:250px;Z-INDEX: 0" /><span id="Regularexpressionvalidator7" class="welcometxt" style="color:Red;Z-INDEX:0;visibility:hidden;">Insert numeric value in Respondent's PIN No.</span></TD>
																</TR>
																<TR>
																	<TD style="Z-INDEX: 0" class="welcometxt" height="25" vAlign="top" width="40%" align="right">Email 
																		::
																	</TD>
																	<TD height="25" width="60%"><input name="txtEmailRESP" type="text" id="txtEmailRESP" tabindex="270" class="ncwTextinputText" style="width:250px;Z-INDEX: 0" /><span id="Regularexpressionvalidator3" style="color:Red;Z-INDEX:0;visibility:hidden;">*</span></TD>
																</TR>
																<TR>
																	<TD style="Z-INDEX: 0" class="welcometxt" height="25" width="40%" align="right">फ़ोन/ 
																		Phone&nbsp;::
																	</TD>
																	<TD height="25" width="60%"><input name="txtContactNoRESP" type="text" id="txtContactNoRESP" tabindex="280" class="ncwTextinputText" style="width:250px;Z-INDEX: 0" /></TD>
																</TR>
																<TR>
																	<TD style="Z-INDEX: 0" class="welcometxt" height="25" width="40%" align="right">लिंग 
																		/ Sex ::
																	</TD>
																	<TD height="25" width="60%"><select name="ddlSexRESP" id="ddlSexRESP" tabindex="290" class="NcwDropdownbox" style="width:250px;Z-INDEX: 0">
	<option value="------SELECT Gender------">------SELECT Gender------</option>
	<option value="Not-Mentioned">Not-Mentioned</option>
	<option value="FEMALE">FEMALE</option>
	<option value="MALE">MALE</option>
	<option value="BOTH">BOTH</option>
	<option value="THIRD GENDER">THIRD GENDER</option>
	<option value="UNKNOWN">UNKNOWN</option>

</select></TD>
																</TR>
															</TABLE>
                                                            
   <hr>                                                         
                                                            
                                                           

                                                    <TR>
											<TD class="PAGEHEAD" height="47" background="../Images/headerFill.jpg">शिकायत का 
												विवरण&nbsp;&nbsp;/ Details of Complaint ::</TD>
										</TR>
										<TR>
											<TD class="welcometxt" height="10"></TD>
										</TR>
										<TR>
											<TD>
												<TABLE id="Table19" border="0" cellSpacing="1" cellPadding="1" width="100%">
													<TR>
														<TD colSpan="3" align="center">
															<TABLE id="Table20" border="0" cellSpacing="0" cellPadding="0" width="100%">
																<TR>
																	<TD style="Z-INDEX: 0; WIDTH: 571px" class="welcometxt" height="25" vAlign="middle"
																		width="571" colSpan="2" align="right">शिकायत की श्रेणी/
																		<BR>
																		Category of the Complaint ::&nbsp;
																	</TD>
																	<TD style="Z-INDEX: 0" class="welcometxt" height="25" vAlign="middle" width="50%" colSpan="2">&nbsp;
																		<select name="ddlCategory" onchange="javascript:setTimeout('__doPostBack(\'ddlCategory\',\'\')', 0)" id="ddlCategory" tabindex="300" class="NcwDropdownbox" style="Z-INDEX: 0">
	<option selected="selected" value="------Select Category of the Complaint------">------Select Category of the Complaint------</option>
	<option value="Bigamy / Polygamy">Bigamy / Polygamy</option>
	<option value="Cyber Crime against women">Cyber Crime against women</option>
	<option value="53">Dowry harassment / dowry death</option>
	<option value="50">Free legal aid for women</option>
	<option value="18">Gender Discrimination including equal right to education &amp; work</option>
	<option value="22">Indecent Representation of Women</option>
	<option value="28">Outraging Modesty of Women</option>
	<option value="31">Police Apathy against women</option>
	<option value="51">Privacy of women and rights thereof</option>
	<option value="52">Reproductive health rights of women</option>
	<option value="43">Right to Exercise Choice in marriage</option>
	<option value="49">Right to live with dignity</option>
	<option value="17">Sex selective abortion / female foeticide / amniocentesis</option>
	<option value="38">Sexual harassment including sexual harassment at workplace</option>
	<option value="44">Stalking / Voyeurism</option>
	<option value="10">Traditional practices derogatory to women rights i.e. sati pratha, devdasi pratha, witch hunting</option>
	<option value="21">Trafficking / Prostitution of women</option>
	<option value="48">Violence against women</option>
	<option value="26">Women's right of custody of children in the event of divorce</option>

</select></TD>
																</TR>
																<TR>
																	<!--<TD style="Z-INDEX: 0; WIDTH: 571px; HEIGHT: 28px" class="welcometxt" height="28" vAlign="middle"
																		width="571" colSpan="2" align="right">शिकायत&nbsp;की उपश्रेणी&nbsp;/
																		<BR>
																		Sub-category of the Complaint ::&nbsp;
																	</TD>
																	<TD style="Z-INDEX: 0; HEIGHT: 28px" class="welcometxt" height="27" vAlign="middle"
																		width="50%" colSpan="2">&nbsp;
																		<select name="ddlSubCategory" id="ddlSubCategory" disabled="disabled" tabindex="310" class="NcwDropdownbox" style="Z-INDEX: 0">
	<option selected="selected" value="0">-Select Sub-Category of the Complaint-</option>
	<option value="50">Free legal aid for women</option>
	<option value="18">Gender Discrimination including equal right to education &amp; work</option>-->
	
</select></TD>
																</TR>
																<TR>
																	<TD style="Z-INDEX: 0; WIDTH: 571px" class="welcometxt" height="25" vAlign="middle"
																		width="571" colSpan="2" align="right">शिकायतकर्ता&nbsp;का विभाग(यदि लागू हो)/
																		<BR>
																		Department of the Complainant (if applicable) ::&nbsp;
																	</TD>
																	<TD style="Z-INDEX: 0" class="welcometxt" height="25" vAlign="middle" width="50%" colSpan="2">&nbsp;
																		<input name="txtDeptRESP" type="text" id="txtDeptRESP" tabindex="320" class="ncwTextinputText" style="width:200px;Z-INDEX: 0" /></TD>
																</TR>
																<TR>
																	<TD style="Z-INDEX: 0; WIDTH: 571px" class="welcometxt" height="25" vAlign="middle"
																		width="571" colSpan="2" align="right">Date of Incident ::&nbsp;
																	</TD>
																	<TD style="Z-INDEX: 0" class="welcometxt" height="25" vAlign="middle" width="50%" colSpan="2">&nbsp;
																		<input name="txtDOI" type="date" value="02/Mar/2018"  id="txtDOI" tabindex="330"  class="NcwTextinputText" style="width:200px;Z-INDEX: 0" /><INPUT style="Z-INDEX: 0; WIDTH: 16px; HEIGHT: 16px" id="Button3" 
																			tabIndex="340" onclick="PopupPicker('txtDOI',210,210 );" type="button"></TD>


																</TR><table>
                                                                
                                                                
                                                                
                 <hr>
  <TR>
																	<TD style="Z-INDEX: 0" class="PAGEHEAD" height="47" vAlign="middle" background="../Images/headerFill.jpg"
																		width="100%" colSpan="4" align="left">&nbsp;घटना की पूरी जानकारी डालें / Insert 
																		complete details of the incident * ::
																	</TD>
																</TR>
																<TR>
																	<TD style="Z-INDEX: 0" class="welcometxt" vAlign="top" width="100%" colSpan="4" align="center"><textarea name="txtCmpDetail" rows="2" cols="20" id="txtCmpDetail" tabindex="350" class="NcwTextinputText" style="height:196px;width:90%;Z-INDEX: 0"></textarea><span id="Requiredfieldvalidator9" class="welcometxt" style="color:Red;Z-INDEX:0;visibility:hidden;">
																			<IMG align="absMiddle" src="..//Images/reqfield.png"></span></TD>
																</TR>
																<TR>
																	<TD style="Z-INDEX: 0; WIDTH: 571px" class="welcometxt" height="30" vAlign="middle"
																		width="571" colSpan="2" align="right">क्या आपका मामला / परिवाद किसी न्यायालय के 
																		समक्ष लंबित है /<BR>
																		Is your case&nbsp; pending before any court ::
																	</TD>
																	<TD style="Z-INDEX: 0" class="welcometxt" height="30" vAlign="middle" width="50%" colSpan="2"><table id="rdbPendingCourt" class="ncwRadiobuttonlist" border="0" style="Z-INDEX: 0">
	<tr>
		<td><input id="rdbPendingCourt_0" type="radio" name="rdbPendingCourt" value="1" tabindex="360" /><label for="rdbPendingCourt_0">Yes/हाँ</label></td><td><input id="rdbPendingCourt_1" type="radio" name="rdbPendingCourt" value="0" checked="checked" tabindex="360" /><label for="rdbPendingCourt_1">No/नहीं</label></td>
	</tr>
</table></TD>
																</TR>
																<TR>
																	<TD style="Z-INDEX: 0; WIDTH: 571px" class="welcometxt" height="30" vAlign="middle"
																		width="571" colSpan="2" align="right">यदि हाँ, तो मामला / परिवाद संख्या का 
																		उल्लेख करे 
																		/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
																		<BR>
																		if yes, then mention case number 
																		::&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</TD>
																	<TD style="Z-INDEX: 0" class="welcometxt" height="30" vAlign="middle" width="50%" colSpan="2">&nbsp;
																		<input name="txtCourtCaseNumber" type="text" id="txtCourtCaseNumber" tabindex="370" class="ncwTextinputText" style="width:200px;Z-INDEX: 0" /></TD>
																</TR>
																<TR>
																	<TD style="Z-INDEX: 0; WIDTH: 571px" class="welcometxt" height="30" vAlign="middle"
																		width="571" colSpan="2" align="right">क्या आपका मामला / परिवाद किसी राज्य महिला 
																		आयोग के समक्ष लंबित है 
																		/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
																		&nbsp;<BR>
																		Is your case pending before any State Commission for Women 
																		::&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</TD>
																	<TD style="Z-INDEX: 0" class="welcometxt" height="30" vAlign="top" width="50%" colSpan="2"><table id="rdbPendingSWC" class="ncwRadiobuttonlist" border="0" style="Z-INDEX: 0">
	<tr>
		<td><input id="rdbPendingSWC_0" type="radio" name="rdbPendingSWC" value="1" tabindex="380" /><label for="rdbPendingSWC_0">Yes/हाँ</label></td><td><input id="rdbPendingSWC_1" type="radio" name="rdbPendingSWC" value="0" checked="checked" tabindex="380" /><label for="rdbPendingSWC_1">No/नहीं</label></td>
	</tr>
</table></TD>
																</TR>
							<TR>
																	<TD style="Z-INDEX: 0; WIDTH: 571px" class="welcometxt" height="30" vAlign="middle"
																		width="571" colSpan="2" align="right">यदि हाँ, तो मामला / परिवाद संख्या का 
	उल्लेख करे 
																		/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<BR>
																		if yes, then mention case number&nbsp; ::&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<TD style="Z-INDEX: 0" class="welcometxt" height="30" vAlign="middle" width="50%" colSpan="2">&nbsp;
																		<input name="txtSWCRegNumber" type="text" id="txtSWCRegNumber" tabindex="390" class="ncwTextinputText" style="width:200px;Z-INDEX: 0" /></TD>
																</TR>
                                                                
 <TD  align="center"><input type="submit" name="btnSubmit" value="Submit"  /></TD>


</BR></TD></TR></BR></TD></TR></BR></TD></TR></BR></TD></TR></IMG></span></TD></TR></table></INPUT></TD></TR></BR></TD></TR></BR></TD></TR></TABLE></TD></TR></TABLE></TD></TR></TD></BR></IMG></span></TD></TR></BR></IMG></span></TD></TR></table></BR></TD></TR></IMG></span></BR></INPUT></TD></TR></TABLE></TD></TR></IMG></span></TD></TR></IMG></span></TD></TR></TABLE></select></TD></TR></IMG></span></TD></TR></IMG></span></TD></TR></IMG></span></TD></TR></TABLE></TD></BR></IMG></span></TD></TR></IMG></span></TD></TR></IMG></span></TD></TR></TABLE></TD></TR></TABLE></form>
<footer class="footer-distributed">

      <div class="footer-left">

        <h3>Company</h3>

        <p class="footer-links">
          <a href="index.html">Home</a>
          ·
         
          
           <a href="lawsacts.html">Laws and Acts</a>
          ·
          <a href="projects.html">Projects</a>
          ·
           <a href="helpline.html">Contact Us</a>
          ·
          <a href="helpline.html">Helpline</a>
        </p>

        <p class="footer-company-name">Company Name &copy; 2015</p>

        <div class="footer-icons">

        
         

        </div>

      </div>

      <div class="footer-right">

        <p>Login</p>

        <form action="#" method="post">

          <input type="text" name="email" placeholder="Email" />
          <textarea name="message" placeholder="Message"></textarea>
          <button>Send</button>

        </form>

      </div>

    </footer>
    </body>/
    </html>