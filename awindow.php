<!DOCTYPE html>
<html>
<head>
	<title>Admin panel</title>
	<script>
		function reRoute(src)
		{
			window.location=src;
		}
	</script>
</head>
<body>
	<br>
	<br>
	<form action="alogout.php" method="POST">
<marquee behavior=alternate direction="right" bgcolor="green"><font color="yellow">Enjoy the services provided my Mr.Sam_Stark's health care services pvt.,Ltd</font></marquee>
<br>
<br>
<button>
	Logout
</button>
</form>
<center>
	<p1>To view the  details of doctors for each branch select below options :</p1>
	<br>
	<br>
	Branch      :
	<select name="branch" onchange="reRoute(this.value)">
<option disabled selected></option>
<option value="sampletable1.php" name="Allergy and Immunology" id="a&i">Allergy & Immunology</option>
<option value="sampletable3.php" name="Dermatology" id="dermatology">Dermatology</option>
<option value="sampletable4.php" name="Neurology" id="neurology">Neurology</option>
<option value="sampletable5.php" name="obsetritics and gynecology" id="obsetritics&gynecology">obsetritics and gynecology</option>
<option value="sampletable.php" name="ophthalmology" id="ophthalmology">ophthalmology</option>
<option value="sampletable2.php" name="pediatrics" id="pediatrics">pediatrics</option>
<option value="sampletable6.php" name="Physiatry" id="physiatry">Physiatry</option>
</select>
<br>
<br>
<br>
<br>
<p2>Click here to view the patient history :</p2>
<br>
<br>
<form action="patienthis.php" method="POST">
<button>
	Click here
	</button>
</form>
<br>
<br>
<br>
As an Administrator you are having the access for deletion of records select the below options to perform deletion:
<br>
<br>
Select option :
<select name="admm" onchange="reRoute(this.value)">
	<option disabled selected></option>
	<option value="deldoc.php" name="Delete Doctor records" id="Delete Doctor records">Delete Doctor records</option>
	<option value="delpat.php" name="Delete Patient records" id="Delete Patient records">Delete Patient records</option>
</select>
<br>
<br>
<br>
<br>
<p3 style="font-family:cursive; font-size:15px;"><strong>[ Note:</strong>On clicking the next button you will be redirected to the medical orders of our consumers ]</p3>
<br>
<br>
</center>
<br>
<br>
<form action="patienttab.php" method="post">
<button>
	next
</button>
</form>
<br>
<br>
<hr>
</body>
</html>