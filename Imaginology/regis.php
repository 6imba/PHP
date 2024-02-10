<html>

<head>
	<title>pro</title>
	<style>
		body {
			background-color: #123abc;
			margin: 0;
			padding: 0;
		}

		#wrapper {
			width: 70%;
			height: auto;
			margin-left: auto;
			margin-right: auto;
			background-color: white;
		}


		.header {
			width: 100%;
			height: 60px;
			background-color: #666;
		}


		.content {
			width: 100%;
			height: auto;

		}

		.footer {
			width: 100%;
			height: 200px;
			background-color: black
		}
	</style>
</head>

<body>
	<div id="wrapper">

		<div class="header">

			<?php
			include('nav.php');
			?>
		</div>
		<div class="content" style="text-align:center; margin-left: auto;">
			<h4> MEMBER REGISTRATION</H4>
			<hr />
			<form action="">
				<table border="3"  style="text-align:center;  margin-left: auto; margin-right: auto;  margin-top: 0px;">
					<tr>
						<td>Name</td>
						<td><b>:</b></td>
						<td><input type="text" name="name" placeholder="Enter your firstname" required></td><br>
					</tr>
					<tr>
						<td>Blood Group</td>
						<td><b>:</b></td>
						<td> <input type="text" name="group" required> </td><br>
					</tr>
					<tr>
						<td>Age</td>
						<td><b>:</b></td>
						<td> <input type="number" name="age" required></td><br>
					</tr>
					<tr>
						<td>Gender</td>
						<td><b>:</b></td>
						<td> <input type="text" name="gender" required></td><br>
					</tr>
					<tr>
						<td>District</td>
						<td><b>:</b></td>
						<td> <input type="text" name="district" required></td><br>
					</tr>
					<tr>
						<td>Location</td>
						<td><b>:</b></td>
						<td> <input type="text" name="location" required></td><br>
					</tr>
					<tr>
						<td>Contact</td>
						<td><b>:</b></td>
						<td> <input type="text" name="contact" required></td><br>
					</tr>
					<tr>
						<td>Detial</td>
						<td><b>:</b></td>
						<td> <textarea name="about" rows="10" cols="40" >  </textarea> </td> <br>
					</tr>
				</table>
				<br>
				<button type="submit">Submit</button>
			</form>
		</div>
		<div class="footer">

		</div>
	</div>
</body>

</html>