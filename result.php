<?php
	$valueMonday0800 = "";
	$valueMonday0900 = "";
	$valueMonday1000 = "";
	$valueMonday1100 = "";
	$valueMonday1200 = "";
	$valueMonday1300 = "";
	$valueMonday1400 = "";
	$valueMonday1500 = "";
	$valueMonday1600 = "";
	$valueMonday1700 = "";
	$valueMonday1800 = "";
	$valueMonday1900 = "";
	$valueMonday2000 = "";
	$valueMonday2100 = "";
	
	$valueTuesday0800 = "";
	$valueTuesday0900 = "";
	$valueTuesday1000 = "";
	$valueTuesday1100 = "";
	$valueTuesday1200 = "";
	$valueTuesday1300 = "";
	$valueTuesday1400 = "";
	$valueTuesday1500 = "";
	$valueTuesday1600 = "";
	$valueTuesday1700 = "";
	$valueTuesday1800 = "";
	$valueTuesday1900 = "";
	$valueTuesday2000 = "";
	$valueTuesday2100 = "";
	
	$valueWednesday0800 = "";
	$valueWednesday0900 = "";
	$valueWednesday1000 = "";
	$valueWednesday1100 = "";
	$valueWednesday1200 = "";
	$valueWednesday1300 = "";
	$valueWednesday1400 = "";
	$valueWednesday1500 = "";
	$valueWednesday1600 = "";
	$valueWednesday1700 = "";
	$valueWednesday1800 = "";
	$valueWednesday1900 = "";
	$valueWednesday2000 = "";
	$valueWednesday2100 = "";
	
	$valueThursday0800 = "";
	$valueThursday0900 = "";
	$valueThursday1000 = "";
	$valueThursday1100 = "";
	$valueThursday1200 = "";
	$valueThursday1300 = "";
	$valueThursday1400 = "";
	$valueThursday1500 = "";
	$valueThursday1600 = "";
	$valueThursday1700 = "";
	$valueThursday1800 = "";
	$valueThursday1900 = "";
	$valueThursday2000 = "";
	$valueThursday2100 = "";
	
	$valueFriday0800 = "";
	$valueFriday0900 = "";
	$valueFriday1000 = "";
	$valueFriday1100 = "";
	$valueFriday1200 = "";
	$valueFriday1300 = "";
	$valueFriday1400 = "";
	$valueFriday1500 = "";
	$valueFriday1600 = "";
	$valueFriday1700 = "";
	$valueFriday1800 = "";
	$valueFriday1900 = "";
	$valueFriday2000 = "";
	$valueFriday2100 = "";
	
	$valueSaturday0800 = "";
	$valueSaturday0900 = "";
	$valueSaturday1000 = "";
	$valueSaturday1100 = "";
	$valueSaturday1200 = "";
	$valueSaturday1300 = "";
	$valueSaturday1400 = "";
	$valueSaturday1500 = "";
	$valueSaturday1600 = "";
	$valueSaturday1700 = "";
	$valueSaturday1800 = "";
	$valueSaturday1900 = "";
	$valueSaturday2000 = "";
	$valueSaturday2100 = "";
	
	$mondayData = array();
	$tuesdayData = array();
	$wednesdayData = array();
	$thursdayData = array();
	$fridayData = array();
	$saturdayData = array();
	
	if(isset($_POST["monday0800"]))
	{
		$valueMonday0800 = $_POST["monday0800"];
		array_push($mondayData, $valueMonday0800);
	}
	if(isset($_POST["monday0900"]))
	{
		$valueMonday0900 = $_POST["monday0900"];
		array_push($mondayData, $valueMonday0900);
	}
	if(isset($_POST["monday1000"]))
	{
		$valueMonday1000 = $_POST["monday1000"];
		array_push($mondayData, $valueMonday1000);
	}
	if(isset($_POST["monday1100"]))
	{
		$valueMonday1100 = $_POST["monday1100"];
		array_push($mondayData, $valueMonday1100);
	}
	if(isset($_POST["monday1200"]))
	{
		$valueMonday1200 = $_POST["monday1200"];
		array_push($mondayData, $valueMonday1100);
	}
	if(isset($_POST["monday1300"]))
	{
		$valueMonday1300 = $_POST["monday1300"];
		array_push($mondayData, $valueMonday1300);
	}
	if(isset($_POST["monday1400"]))
	{
		$valueMonday1400 = $_POST["monday1400"];
		array_push($mondayData, $valueMonday1400);
	}
	if(isset($_POST["monday1500"]))
	{
		$valueMonday1500 = $_POST["monday1500"];
		array_push($mondayData, $valueMonday1500);
	}
	if(isset($_POST["monday1600"]))
	{
		$valueMonday1600 = $_POST["monday1600"];
		array_push($mondayData, $valueMonday1600);
	}
	if(isset($_POST["monday1700"]))
	{
		$valueMonday1700 = $_POST["monday1700"];
		array_push($mondayData, $valueMonday1700);
	}
	if(isset($_POST["monday1800"]))
	{
		$valueMonday1800 = $_POST["monday1800"];
		array_push($mondayData, $valueMonday1800);
	}
	if(isset($_POST["monday1900"]))
	{
		$valueMonday1900 = $_POST["monday1900"];
		array_push($mondayData, $valueMonday1900);
	}
	if(isset($_POST["monday2000"]))
	{
		$valueMonday2000 = $_POST["monday2000"];
		array_push($mondayData, $valueMonday2000);
	}
	if(isset($_POST["monday2100"]))
	{
		$valueMonday2100 = $_POST["monday2100"];
		array_push($mondayData, $valueMonday2100);
	}
	
	if(isset($_POST["tuesday0800"]))
	{
		$valueTuesday0800 = $_POST["tuesday0800"];
		array_push($tuesdayData, $valueTuesday0800);
	}
	if(isset($_POST["tuesday0900"]))
	{
		$valueTuesday0900 = $_POST["tuesday0900"];
		array_push($tuesdayData, $valueTuesday0900);
	}
	if(isset($_POST["tuesday1000"]))
	{
		$valueTuesday1000 = $_POST["tuesday1000"];
		array_push($tuesdayData, $valueTuesday1000);
	}
	if(isset($_POST["tuesday1100"]))
	{
		$valueTuesday1100 = $_POST["tuesday1100"];
		array_push($tuesdayData, $valueTuesday1100);
	}
	if(isset($_POST["tuesday1200"]))
	{
		$valueTuesday1200 = $_POST["tuesday1200"];
		array_push($tuesdayData, $valueTuesday1200);
	}
	if(isset($_POST["tuesday1300"]))
	{
		$valueTuesday1300 = $_POST["tuesday1300"];
		array_push($tuesdayData, $valueTuesday1300);
	}
	if(isset($_POST["tuesday1400"]))
	{
		$valueTuesday1400 = $_POST["tuesday1400"];
		array_push($tuesdayData, $valueTuesday1400);
	}
	if(isset($_POST["tuesday1500"]))
	{
		$valueTuesday1500 = $_POST["tuesday1500"];
		array_push($tuesdayData, $valueTuesday1500);
	}
	if(isset($_POST["tuesday1600"]))
	{
		$valueTuesday1600 = $_POST["tuesday1600"];
		array_push($tuesdayData, $valueTuesday1600);
	}
	if(isset($_POST["tuesday1700"]))
	{
		$valueTuesday1700 = $_POST["tuesday1700"];
		array_push($tuesdayData, $valueTuesday1700);
	}
	if(isset($_POST["tuesday1800"]))
	{
		$valueTuesday1800 = $_POST["tuesday1800"];
		array_push($tuesdayData, $valueTuesday1800);
	}
	if(isset($_POST["tuesday1900"]))
	{
		$valueTuesday1900 = $_POST["tuesday1900"];
		array_push($tuesdayData, $valueTuesday1900);
	}
	if(isset($_POST["tuesday2000"]))
	{
		$valueTuesday2000 = $_POST["tuesday2000"];
		array_push($tuesdayData, $valueTuesday2000);
	}
	if(isset($_POST["tuesday2100"]))
	{
		$valueTuesday2100 = $_POST["tuesday2100"];
		array_push($tuesdayData, $valueTuesday2100);
	}
	
	if(isset($_POST["wednesday0800"]))
	{
		$valueWednesday0800 = $_POST["wednesday0800"];
		array_push($wednesdayData, $valueWednesday0800);
	}
	if(isset($_POST["wednesday0900"]))
	{
		$valueWednesday0900 = $_POST["wednesday0900"];
		array_push($wednesdayData, $valueWednesday0900);
	}
	if(isset($_POST["wednesday1000"]))
	{
		$valueWednesday1000 = $_POST["wednesday1000"];
		array_push($wednesdayData, $valueWednesday1000);
	}
	if(isset($_POST["wednesday1100"]))
	{
		$valueWednesday1100 = $_POST["wednesday1100"];
		array_push($wednesdayData, $valueWednesday1100);
	}
	if(isset($_POST["wednesday1200"]))
	{
		$valueWednesday1200 = $_POST["wednesday1200"];
		array_push($wednesdayData, $valueWednesday1200);
	}
	if(isset($_POST["wednesday1300"]))
	{
		$valueWednesday1300 = $_POST["wednesday1300"];
		array_push($wednesdayData, $valueWednesday1300);
	}
	if(isset($_POST["wednesday1400"]))
	{
		$valueWednesday1400 = $_POST["wednesday1400"];
		array_push($wednesdayData, $valueWednesday1400);
	}
	if(isset($_POST["wednesday1500"]))
	{
		$valueWednesday1500 = $_POST["wednesday1500"];
		array_push($wednesdayData, $valueWednesday1500);
	}
	if(isset($_POST["wednesday1600"]))
	{
		$valueWednesday1600 = $_POST["wednesday1600"];
		array_push($wednesdayData, $valueWednesday1600);
	}
	if(isset($_POST["wednesday1700"]))
	{
		$valueWednesday1700 = $_POST["wednesday1700"];
		array_push($wednesdayData, $valueWednesday1700);
	}
	if(isset($_POST["wednesday1800"]))
	{
		$valueWednesday1800 = $_POST["wednesday1800"];
		array_push($wednesdayData, $valueWednesday1800);
	}
	if(isset($_POST["wednesday1900"]))
	{
		$valueWednesday1900 = $_POST["wednesday1900"];
		array_push($wednesdayData, $valueWednesday1900);
	}
	if(isset($_POST["wednesday2000"]))
	{
		$valueWednesday2000 = $_POST["wednesday2000"];
		array_push($wednesdayData, $valueWednesday2000);
	}
	if(isset($_POST["wednesday2100"]))
	{
		$valueWednesday2100 = $_POST["wednesday2100"];
		array_push($wednesdayData, $valueWednesday2100);
	}
	
	if(isset($_POST["thursday0800"]))
	{
		$valueThursday0800 = $_POST["thursday0800"];
		array_push($thursdayData, $valueThursday0800);
	}
	if(isset($_POST["thursday0900"]))
	{
		$valueThursday0900 = $_POST["thursday0900"];
		array_push($thursdayData, $valueThursday0900);
	}
	if(isset($_POST["thursday1000"]))
	{
		$valueThursday1000 = $_POST["thursday1000"];
		array_push($thursdayData, $valueThursday1000);
	}
	if(isset($_POST["thursday1100"]))
	{
		$valueThursday1100 = $_POST["thursday1100"];
		array_push($thursdayData, $valueThursday1100);
	}
	if(isset($_POST["thursday1200"]))
	{
		$valueThursday1200 = $_POST["thursday1200"];
		array_push($thursdayData, $valueThursday1200);
	}
	if(isset($_POST["thursday1300"]))
	{
		$valueThursday1300 = $_POST["thursday1300"];
		array_push($thursdayData, $valueThursday1300);
	}
	if(isset($_POST["thursday1400"]))
	{
		$valueThursday1400 = $_POST["thursday1400"];
		array_push($thursdayData, $valueThursday1400);
	}
	if(isset($_POST["thursday1500"]))
	{
		$valueThursday1500 = $_POST["thursday1500"];
		array_push($thursdayData, $valueThursday1500);
	}
	if(isset($_POST["thursday1600"]))
	{
		$valueThursday1600 = $_POST["thursday1600"];
		array_push($thursdayData, $valueThursday1600);
	}
	if(isset($_POST["thursday1700"]))
	{
		$valueThursday1700 = $_POST["thursday1700"];
		array_push($thursdayData, $valueThursday1700);
	}
	if(isset($_POST["thursday1800"]))
	{
		$valueThursday1800 = $_POST["thursday1800"];
		array_push($thursdayData, $valueThursday1800);
	}
	if(isset($_POST["thursday1900"]))
	{
		$valueThursday1900 = $_POST["thursday1900"];
		array_push($thursdayData, $valueThursday1900);
	}
	if(isset($_POST["thursday2000"]))
	{
		$valueThursday2000 = $_POST["thursday2000"];
		array_push($thursdayData, $valueThursday2000);
	}
	if(isset($_POST["thursday2100"]))
	{
		$valueThursday2100 = $_POST["thursday2100"];
		array_push($thursdayData, $valueThursday2100);
	}
	
	if(isset($_POST["friday0800"]))
	{
		$valueFriday0800 = $_POST["friday0800"];
		array_push($fridayData, $valueFriday0800);
	}
	if(isset($_POST["friday0900"]))
	{
		$valueFriday0900 = $_POST["friday0900"];
		array_push($fridayData, $valueFriday0900);
	}
	if(isset($_POST["friday1000"]))
	{
		$valueFriday1000 = $_POST["friday1000"];
		array_push($fridayData, $valueFriday1000);
	}
	if(isset($_POST["friday1100"]))
	{
		$valueFriday1100 = $_POST["friday1100"];
		array_push($fridayData, $valueFriday1100);
	}
	if(isset($_POST["friday1200"]))
	{
		$valueFriday1200 = $_POST["friday1200"];
		array_push($fridayData, $valueFriday1200);
	}
	if(isset($_POST["friday1300"]))
	{
		$valueFriday1300 = $_POST["friday1300"];
		array_push($fridayData, $valueFriday1300);
	}
	if(isset($_POST["friday1400"]))
	{
		$valueFriday1400 = $_POST["friday1400"];
		array_push($fridayData, $valueFriday1400);
	}
	if(isset($_POST["friday1500"]))
	{
		$valueFriday1500 = $_POST["friday1500"];
		array_push($fridayData, $valueFriday1500);
	}
	if(isset($_POST["friday1600"]))
	{
		$valueFriday1600 = $_POST["friday1600"];
		array_push($fridayData, $valueFriday1600);
	}
	if(isset($_POST["friday1700"]))
	{
		$valueFriday1700 = $_POST["friday1700"];
		array_push($fridayData, $valueFriday1700);
	}
	if(isset($_POST["friday1800"]))
	{
		$valueFriday1800 = $_POST["friday1800"];
		array_push($fridayData, $valueFriday1800);
	}
	if(isset($_POST["friday1900"]))
	{
		$valueFriday1900 = $_POST["friday1900"];
		array_push($fridayData, $valueFriday1900);
	}
	if(isset($_POST["friday2000"]))
	{
		$valueFriday2000 = $_POST["friday2000"];
		array_push($fridayData, $valueFriday2000);
	}
	if(isset($_POST["friday2100"]))
	{
		$valueFriday2100 = $_POST["friday2100"];
		array_push($fridayData, $valueFriday2100);
	}
	
	if(isset($_POST["saturday0800"]))
	{
		$valueSaturday0800 = $_POST["saturday0800"];
		array_push($saturdayData, $valueSaturday0800);
	}
	if(isset($_POST["saturday0900"]))
	{
		$valueSaturday0900 = $_POST["saturday0900"];
		array_push($saturdayData, $valueSaturday0900);
	}
	if(isset($_POST["saturday1000"]))
	{
		$valueSaturday1000 = $_POST["saturday1000"];
		array_push($saturdayData, $valueSaturday1000);
	}
	if(isset($_POST["saturday1100"]))
	{
		$valueSaturday1100 = $_POST["saturday1100"];
		array_push($saturdayData, $valueSaturday1100);
	}
	if(isset($_POST["saturday1200"]))
	{
		$valueSaturday1200 = $_POST["saturday1200"];
		array_push($saturdayData, $valueSaturday1200);
	}
	if(isset($_POST["saturday1300"]))
	{
		$valueSaturday1300 = $_POST["saturday1300"];
		array_push($saturdayData, $valueSaturday1300);
	}
	if(isset($_POST["saturday400"]))
	{
		$valueSaturday1400 = $_POST["saturday1400"];
		array_push($saturdayData, $valueSaturday1400);
	}
	if(isset($_POST["saturday1500"]))
	{
		$valueSaturday1500 = $_POST["saturday1500"];
		array_push($saturdayData, $valueSaturday1500);
	}
	if(isset($_POST["saturday1600"]))
	{
		$valueSaturday1600 = $_POST["saturday1600"];
		array_push($saturdayData, $valueSaturday1600);
	}
	if(isset($_POST["saturday1700"]))
	{
		$valueSaturday1700 = $_POST["saturday1700"];
		array_push($saturdayData, $valueSaturday1700);
	}
	if(isset($_POST["saturday1800"]))
	{
		$valueSaturday1800 = $_POST["saturday1800"];
		array_push($saturdayData, $valueSaturday1800);
	}
	if(isset($_POST["saturday1900"]))
	{
		$valueSaturday1900 = $_POST["saturday1900"];
		array_push($saturdayData, $valueSaturday1900);
	}
	if(isset($_POST["saturday2000"]))
	{
		$valueSaturday2000 = $_POST["saturday2000"];
		array_push($saturdayData, $valueSaturday2000);
	}
	if(isset($_POST["saturday2100"]))
	{
		$valueSaturday2100 = $_POST["saturday2100"];
		array_push($saturdayData, $valueSaturday2100);
	}
	
	
	$numMinimumHourError = false;
	$numDailyMinHourError = false;
	
	if(!((count($mondayData)> 0) && 
	   (count($tuesdayData) > 0) &&  
	   (count($wednesdayData) > 0) && 
	   (count($thursdayData) > 0) && 
	   (count($fridayData) > 0) && 
	   (count($saturdayData)> 0)))
		$numDailyMinHourError = true;
		
	if((count($mondayData) + count($tuesdayData) + count($wednesdayData) + count($thursdayData) + count($fridayData) + count($saturdayData)) < 18)
		$numMinimumHourError = true;
	
?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>Webschool</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
		<style media="screen">
			#buttn
			{
			  border-radius: 25px;
			}
			
			h4
			{
			 color: blue;   
			}
		</style>
	</head>
	<body class="hold-transition sidebar-mini layout-fixed">
		<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-secondary" id="navbarscroll" style="color:white;">
			<div class="container-fluid">
				<a class="navbar-brand badge bg-primary text-wrap text-center fs-3" href="Intro_page.html" style="color:white;">WebSchool</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="Intro_page.html" style="color:white;">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="About.html" style="color:white;">About</a>
						</li>
					</ul>
				</div>
				<div class="d-flex justify-content-end" id="navbarSupportedContent">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<button type="button" class="btn btn-primary" id="buttn"><a class="nav-link active" aria-current="page" style="color:white;" href="#">Login</a></button>
						</li>
					</ul>
				</div>
				
			</div>
		</nav>
		<div class="container">
			<p>&nbsp;</p>
			
			<?php
				if($numDailyMinHourError)
				{
			?>
					<p class="text-danger"><b>Oh no! You need to select atleast 1 hour every day. <a href="Checkbox_time.html">Click here</a> to go back to make your selection</b></p>
			<?php
				}
			?>
			
			<?php
				if($numMinimumHourError)
				{
			?>
					<p class="text-danger"><b>Oh no! You need to select a total of 18 hours per week. <a href="Checkbox_time.html">Click here</a> to go back to make your selection</b></p>
			<?php
				}
			?>
			<?php
				if((!$numDailyMinHourError) && (!$numMinimumHourError))
				{
			?>
					<div class="row">
						<div class="col-md-3">
							<a href="Checkbox_time.html"><button type="submit" class="btn btn-block btn-danger btn-lg float-left">&larr; Back To Time Table</button></a>
						</div>
						<div class="col-md-9">
							<p><h4>All times are written in military time format</h4></p>
						</div>						
					</div>
					<br><br>
					<div class="row">
						<div class="col-md-4">
							<div class="card card-default">
								<div class="card-header bg-dark text-white">
									<h3 class="card-title">
									Monday
									</h3>
								</div>
								
								<!-- /.card-header -->
								<div class="card-body">
									<ol>
										<?php
											if(count($mondayData) <= 5)
											{
												if(count($mondayData) == 1)
												{
										?>
													<li>Mathematics (<?php echo $mondayData[0]; ?> )
													</li>
											<?php
												}
												else if(count($mondayData) == 2)
												{
											?>
													<li>Mathematics (<?php echo $mondayData[0]; ?> )</li>
													<li>English (<?php echo $mondayData[1]; ?> )</li>
											<?php
												}
												else if(count($mondayData) == 3)
												{
											?>
													<li>Mathematics (<?php echo $mondayData[0]; ?> )</li>
													<li>English (<?php echo $mondayData[1]; ?> )</li>
													<li>Science (<?php echo $mondayData[2]; ?> )</li>
											<?php
												}
												else if(count($mondayData) == 4)
												{
											?>
													<li>Mathematics (<?php echo $mondayData[0]; ?> )</li>
													<li>English (<?php echo $mondayData[1]; ?> )</li>
													<li>Science (<?php echo $mondayData[2]; ?> )</li>
													<li>French (<?php echo $mondayData[3]; ?> )</li>
											<?php
												}
												else if(count($mondayData) == 5)
												{
											?>
													<li>Mathematics (<?php echo $mondayData[0]; ?> )</li>
													<li>English (<?php echo $mondayData[1]; ?> )</li>
													<li>Science (<?php echo $mondayData[2]; ?> )</li>
													<li>French (<?php echo $mondayData[3]; ?> )</li>
													<li>History (<?php echo $mondayData[4]; ?> )</li>
											<?php
												}
											?>
										<?php
											}
											else if(count($mondayData) > 5 && count($mondayData) <= 10)
											{
												if(count($mondayData) == 1)
												{
										?>
													<li>Mathematics (<?php echo $mondayData[0]; ?> )
													</li>
											<?php
												}
												else if(count($mondayData) == 2)
												{
											?>
													<li>Mathematics (<?php echo $mondayData[0]; ?> )</li>
													<li>English (<?php echo $mondayData[1]; ?> )</li>
											<?php
												}
												else if(count($mondayData) == 3)
												{
											?>
													<li>Mathematics (<?php echo $mondayData[0]; ?> )</li>
													<li>English (<?php echo $mondayData[1]; ?> )</li>
													<li>Science (<?php echo $mondayData[2]; ?> )</li>
											<?php
												}
												else if(count($mondayData) == 4)
												{
											?>
													<li>Mathematics (<?php echo $mondayData[0]; ?> )</li>
													<li>English (<?php echo $mondayData[1]; ?> )</li>
													<li>Science (<?php echo $mondayData[2]; ?> )</li>
													<li>French (<?php echo $mondayData[3]; ?> )</li>
											<?php
												}
												else if(count($mondayData) == 5)
												{
											?>
													<li>Mathematics (<?php echo $mondayData[0]; ?> )</li>
													<li>English (<?php echo $mondayData[1]; ?> )</li>
													<li>Science (<?php echo $mondayData[2]; ?> )</li>
													<li>French (<?php echo $mondayData[3]; ?> )</li>
													<li>History (<?php echo $mondayData[4]; ?> )</li>
										<?php
												}
												else if(count($mondayData) == 6)
												{
											?>
													<li>Mathematics (<?php echo $mondayData[0]; ?> )</li>
													<li>English (<?php echo $mondayData[1]; ?> )</li>
													<li>Science (<?php echo $mondayData[2]; ?> )</li>
													<li>French (<?php echo $mondayData[3]; ?> )</li>
													<li>History (<?php echo $mondayData[4]; ?> )</li>
													<li>Mathematics (<?php echo $mondayData[5]; ?> )</li>
										<?php
												}
												else if(count($mondayData) == 7)
												{
											?>
													<li>Mathematics (<?php echo $mondayData[0]; ?> )</li>
													<li>English (<?php echo $mondayData[1]; ?> )</li>
													<li>Science (<?php echo $mondayData[2]; ?> )</li>
													<li>French (<?php echo $mondayData[3]; ?> )</li>
													<li>History (<?php echo $mondayData[4]; ?> )</li>
													<li>Mathematics (<?php echo $mondayData[5]; ?> )</li>
													<li>English (<?php echo $mondayData[6]; ?> )</li>
										<?php
												}
												else if(count($mondayData) == 8)
												{
											?>
													<li>Mathematics (<?php echo $mondayData[0]; ?> )</li>
													<li>English (<?php echo $mondayData[1]; ?> )</li>
													<li>Science (<?php echo $mondayData[2]; ?> )</li>
													<li>French (<?php echo $mondayData[3]; ?> )</li>
													<li>History (<?php echo $mondayData[4]; ?> )</li>
													<li>Mathematics (<?php echo $mondayData[5]; ?> )</li>
													<li>English (<?php echo $mondayData[6]; ?> )</li>
													<li>Science (<?php echo $mondayData[7]; ?> )</li>
										<?php
												}
												else if(count($mondayData) == 9)
												{
											?>
													<li>Mathematics (<?php echo $mondayData[0]; ?> )</li>
													<li>English (<?php echo $mondayData[1]; ?> )</li>
													<li>Science (<?php echo $mondayData[2]; ?> )</li>
													<li>French (<?php echo $mondayData[3]; ?> )</li>
													<li>History (<?php echo $mondayData[4]; ?> )</li>
													<li>Mathematics (<?php echo $mondayData[5]; ?> )</li>
													<li>English (<?php echo $mondayData[6]; ?> )</li>
													<li>Science (<?php echo $mondayData[7]; ?> )</li>
													<li>French (<?php echo $mondayData[8]; ?> )</li>
										<?php
												}
												else if(count($mondayData) == 10)
												{
											?>
													<li>Mathematics (<?php echo $mondayData[0]; ?> )</li>
													<li>English (<?php echo $mondayData[1]; ?> )</li>
													<li>Science (<?php echo $mondayData[2]; ?> )</li>
													<li>French (<?php echo $mondayData[3]; ?> )</li>
													<li>History (<?php echo $mondayData[4]; ?> )</li>
													<li>Mathematics (<?php echo $mondayData[5]; ?> )</li>
													<li>English (<?php echo $mondayData[6]; ?> )</li>
													<li>Science (<?php echo $mondayData[7]; ?> )</li>
													<li>French (<?php echo $mondayData[8]; ?> )</li>
													<li>History (<?php echo $mondayData[9]; ?> )</li>
										<?php
												}
											}
											else if(count($mondayData) > 10)
											{
												if(count($mondayData) == 1)
												{
										?>
													<li>Mathematics (<?php echo $mondayData[0]; ?> )
													</li>
											<?php
												}
												else if(count($mondayData) == 2)
												{
											?>
													<li>Mathematics (<?php echo $mondayData[0]; ?> )</li>
													<li>English (<?php echo $mondayData[1]; ?> )</li>
											<?php
												}
												else if(count($mondayData) == 3)
												{
											?>
													<li>Mathematics (<?php echo $mondayData[0]; ?> )</li>
													<li>English (<?php echo $mondayData[1]; ?> )</li>
													<li>Science (<?php echo $mondayData[2]; ?> )</li>
											<?php
												}
												else if(count($mondayData) == 4)
												{
											?>
													<li>Mathematics (<?php echo $mondayData[0]; ?> )</li>
													<li>English (<?php echo $mondayData[1]; ?> )</li>
													<li>Science (<?php echo $mondayData[2]; ?> )</li>
													<li>French (<?php echo $mondayData[3]; ?> )</li>
											<?php
												}
												else if(count($mondayData) == 5)
												{
											?>
													<li>Mathematics (<?php echo $mondayData[0]; ?> )</li>
													<li>English (<?php echo $mondayData[1]; ?> )</li>
													<li>Science (<?php echo $mondayData[2]; ?> )</li>
													<li>French (<?php echo $mondayData[3]; ?> )</li>
													<li>History (<?php echo $mondayData[4]; ?> )</li>
										<?php
												}
												else if(count($mondayData) == 6)
												{
											?>
													<li>Mathematics (<?php echo $mondayData[0]; ?> )</li>
													<li>English (<?php echo $mondayData[1]; ?> )</li>
													<li>Science (<?php echo $mondayData[2]; ?> )</li>
													<li>French (<?php echo $mondayData[3]; ?> )</li>
													<li>History (<?php echo $mondayData[4]; ?> )</li>
													<li>Mathematics (<?php echo $mondayData[5]; ?> )</li>
										<?php
												}
												else if(count($mondayData) == 7)
												{
											?>
													<li>Mathematics (<?php echo $mondayData[0]; ?> )</li>
													<li>English (<?php echo $mondayData[1]; ?> )</li>
													<li>Science (<?php echo $mondayData[2]; ?> )</li>
													<li>French (<?php echo $mondayData[3]; ?> )</li>
													<li>History (<?php echo $mondayData[4]; ?> )</li>
													<li>Mathematics (<?php echo $mondayData[5]; ?> )</li>
													<li>English (<?php echo $mondayData[6]; ?> )</li>
										<?php
												}
												else if(count($mondayData) == 8)
												{
											?>
													<li>Mathematics (<?php echo $mondayData[0]; ?> )</li>
													<li>English (<?php echo $mondayData[1]; ?> )</li>
													<li>Science (<?php echo $mondayData[2]; ?> )</li>
													<li>French (<?php echo $mondayData[3]; ?> )</li>
													<li>History (<?php echo $mondayData[4]; ?> )</li>
													<li>Mathematics (<?php echo $mondayData[5]; ?> )</li>
													<li>English (<?php echo $mondayData[6]; ?> )</li>
													<li>Science (<?php echo $mondayData[7]; ?> )</li>
										<?php
												}
												else if(count($mondayData) == 9)
												{
											?>
													<li>Mathematics (<?php echo $mondayData[0]; ?> )</li>
													<li>English (<?php echo $mondayData[1]; ?> )</li>
													<li>Science (<?php echo $mondayData[2]; ?> )</li>
													<li>French (<?php echo $mondayData[3]; ?> )</li>
													<li>History (<?php echo $mondayData[4]; ?> )</li>
													<li>Mathematics (<?php echo $mondayData[5]; ?> )</li>
													<li>English (<?php echo $mondayData[6]; ?> )</li>
													<li>Science (<?php echo $mondayData[7]; ?> )</li>
													<li>French (<?php echo $mondayData[8]; ?> )</li>
										<?php
												}
												else if(count($mondayData) == 10)
												{
											?>
													<li>Mathematics (<?php echo $mondayData[0]; ?> )</li>
													<li>English (<?php echo $mondayData[1]; ?> )</li>
													<li>Science (<?php echo $mondayData[2]; ?> )</li>
													<li>French (<?php echo $mondayData[3]; ?> )</li>
													<li>History (<?php echo $mondayData[4]; ?> )</li>
													<li>Mathematics (<?php echo $mondayData[5]; ?> )</li>
													<li>English (<?php echo $mondayData[6]; ?> )</li>
													<li>Science (<?php echo $mondayData[7]; ?> )</li>
													<li>French (<?php echo $mondayData[8]; ?> )</li>
													<li>History (<?php echo $mondayData[9]; ?> )</li>
										<?php
												}
												else if(count($mondayData) == 11)
												{
											?>
													<li>Mathematics (<?php echo $mondayData[0]; ?> )</li>
													<li>English (<?php echo $mondayData[1]; ?> )</li>
													<li>Science (<?php echo $mondayData[2]; ?> )</li>
													<li>French (<?php echo $mondayData[3]; ?> )</li>
													<li>History (<?php echo $mondayData[4]; ?> )</li>
													<li>Mathematics (<?php echo $mondayData[5]; ?> )</li>
													<li>English (<?php echo $mondayData[6]; ?> )</li>
													<li>Science (<?php echo $mondayData[7]; ?> )</li>
													<li>French (<?php echo $mondayData[8]; ?> )</li>
													<li>History (<?php echo $mondayData[9]; ?> )</li>
													<li>Mathematics (<?php echo $mondayData[10]; ?> )</li>
										<?php
												}
												else if(count($mondayData) == 12)
												{
											?>
													<li>Mathematics (<?php echo $mondayData[0]; ?> )</li>
													<li>English (<?php echo $mondayData[1]; ?> )</li>
													<li>Science (<?php echo $mondayData[2]; ?> )</li>
													<li>French (<?php echo $mondayData[3]; ?> )</li>
													<li>History (<?php echo $mondayData[4]; ?> )</li>
													<li>Mathematics (<?php echo $mondayData[5]; ?> )</li>
													<li>English (<?php echo $mondayData[6]; ?> )</li>
													<li>Science (<?php echo $mondayData[7]; ?> )</li>
													<li>French (<?php echo $mondayData[8]; ?> )</li>
													<li>History (<?php echo $mondayData[9]; ?> )</li>
													<li>Mathematics (<?php echo $mondayData[10]; ?> )</li>
													<li>English (<?php echo $mondayData[11]; ?> )</li>
										<?php
												}
												else if(count($mondayData) == 13)
												{
											?>
													<li>Mathematics (<?php echo $mondayData[0]; ?> )</li>
													<li>English (<?php echo $mondayData[1]; ?> )</li>
													<li>Science (<?php echo $mondayData[2]; ?> )</li>
													<li>French (<?php echo $mondayData[3]; ?> )</li>
													<li>History (<?php echo $mondayData[4]; ?> )</li>
													<li>Mathematics (<?php echo $mondayData[5]; ?> )</li>
													<li>English (<?php echo $mondayData[6]; ?> )</li>
													<li>Science (<?php echo $mondayData[7]; ?> )</li>
													<li>French (<?php echo $mondayData[8]; ?> )</li>
													<li>History (<?php echo $mondayData[9]; ?> )</li>
													<li>Mathematics (<?php echo $mondayData[10]; ?> )</li>
													<li>English (<?php echo $mondayData[11]; ?> )</li>
													<li>Science (<?php echo $mondayData[12]; ?> )</li>
										<?php
												}
												else if(count($mondayData) == 14)
												{
											?>
													<li>Mathematics (<?php echo $mondayData[0]; ?> )</li>
													<li>English (<?php echo $mondayData[1]; ?> )</li>
													<li>Science (<?php echo $mondayData[2]; ?> )</li>
													<li>French (<?php echo $mondayData[3]; ?> )</li>
													<li>History (<?php echo $mondayData[4]; ?> )</li>
													<li>Mathematics (<?php echo $mondayData[5]; ?> )</li>
													<li>English (<?php echo $mondayData[6]; ?> )</li>
													<li>Science (<?php echo $mondayData[7]; ?> )</li>
													<li>French (<?php echo $mondayData[8]; ?> )</li>
													<li>History (<?php echo $mondayData[9]; ?> )</li>
													<li>Mathematics (<?php echo $mondayData[10]; ?> )</li>
													<li>English (<?php echo $mondayData[11]; ?> )</li>
													<li>Science (<?php echo $mondayData[12]; ?> )</li>
													<li>French (<?php echo $mondayData[13]; ?> )</li>
										<?php
												}
											}
										?>
									</ol>
								</div>							
							</div>
						</div>
						<div class="col-md-4">
							<div class="card card-default">
								<div class="card-header bg-warning text-black">
									<h3 class="card-title">
									Tuesday
									</h3>
								</div>
								<!-- /.card-header -->
								<div class="card-body">
									<ol>
										<?php
											if(count($tuesdayData) <= 5)
											{
												if(count($tuesdayData) == 1)
												{
										?>
													<li>Mathematics (<?php echo $tuesdayData[0]; ?> )
													</li>
											<?php
												}
												else if(count($tuesdayData) == 2)
												{
											?>
													<li>Mathematics (<?php echo $tuesdayData[0]; ?> )</li>
													<li>English (<?php echo $tuesdayData[1]; ?> )</li>
											<?php
												}
												else if(count($tuesdayData) == 3)
												{
											?>
													<li>Mathematics (<?php echo $tuesdayData[0]; ?> )</li>
													<li>English (<?php echo $tuesdayData[1]; ?> )</li>
													<li>Science (<?php echo $tuesdayData[2]; ?> )</li>
											<?php
												}
												else if(count($tuesdayData) == 4)
												{
											?>
													<li>Mathematics (<?php echo $tuesdayData[0]; ?> )</li>
													<li>English (<?php echo $tuesdayData[1]; ?> )</li>
													<li>Science (<?php echo $tuesdayData[2]; ?> )</li>
													<li>French (<?php echo $tuesdayData[3]; ?> )</li>
											<?php
												}
												else if(count($tuesdayData) == 5)
												{
											?>
													<li>Mathematics (<?php echo $tuesdayData[0]; ?> )</li>
													<li>English (<?php echo $tuesdayData[1]; ?> )</li>
													<li>Science (<?php echo $tuesdayData[2]; ?> )</li>
													<li>French (<?php echo $tuesdayData[3]; ?> )</li>
													<li>History (<?php echo $tuesdayData[4]; ?> )</li>
											<?php
												}
											?>
										<?php
											}
											else if(count($tuesdayData) > 5 && count($tuesdayData) <= 10)
											{
												if(count($tuesdayData) == 1)
												{
										?>
													<li>Mathematics (<?php echo $tuesdayData[0]; ?> )
													</li>
											<?php
												}
												else if(count($tuesdayData) == 2)
												{
											?>
													<li>Mathematics (<?php echo $tuesdayData[0]; ?> )</li>
													<li>English (<?php echo $tuesdayData[1]; ?> )</li>
											<?php
												}
												else if(count($tuesdayData) == 3)
												{
											?>
													<li>Mathematics (<?php echo $tuesdayData[0]; ?> )</li>
													<li>English (<?php echo $tuesdayData[1]; ?> )</li>
													<li>Science (<?php echo $tuesdayData[2]; ?> )</li>
											<?php
												}
												else if(count($tuesdayData) == 4)
												{
											?>
													<li>Mathematics (<?php echo $tuesdayData[0]; ?> )</li>
													<li>English (<?php echo $tuesdayData[1]; ?> )</li>
													<li>Science (<?php echo $tuesdayData[2]; ?> )</li>
													<li>French (<?php echo $tuesdayData[3]; ?> )</li>
											<?php
												}
												else if(count($tuesdayData) == 5)
												{
											?>
													<li>Mathematics (<?php echo $tuesdayData[0]; ?> )</li>
													<li>English (<?php echo $tuesdayData[1]; ?> )</li>
													<li>Science (<?php echo $tuesdayData[2]; ?> )</li>
													<li>French (<?php echo $tuesdayData[3]; ?> )</li>
													<li>History (<?php echo $tuesdayData[4]; ?> )</li>
										<?php
												}
												else if(count($tuesdayData) == 6)
												{
											?>
													<li>Mathematics (<?php echo $tuesdayData[0]; ?> )</li>
													<li>English (<?php echo $tuesdayData[1]; ?> )</li>
													<li>Science (<?php echo $tuesdayData[2]; ?> )</li>
													<li>French (<?php echo $tuesdayData[3]; ?> )</li>
													<li>History (<?php echo $tuesdayData[4]; ?> )</li>
													<li>Mathematics (<?php echo $tuesdayData[5]; ?> )</li>
										<?php
												}
												else if(count($tuesdayData) == 7)
												{
											?>
													<li>Mathematics (<?php echo $tuesdayData[0]; ?> )</li>
													<li>English (<?php echo $tuesdayData[1]; ?> )</li>
													<li>Science (<?php echo $tuesdayData[2]; ?> )</li>
													<li>French (<?php echo $tuesdayData[3]; ?> )</li>
													<li>History (<?php echo $tuesdayData[4]; ?> )</li>
													<li>Mathematics (<?php echo $tuesdayData[5]; ?> )</li>
													<li>English (<?php echo $tuesdayData[6]; ?> )</li>
										<?php
												}
												else if(count($tuesdayData) == 8)
												{
											?>
													<li>Mathematics (<?php echo $tuesdayData[0]; ?> )</li>
													<li>English (<?php echo $tuesdayData[1]; ?> )</li>
													<li>Science (<?php echo $tuesdayData[2]; ?> )</li>
													<li>French (<?php echo $tuesdayData[3]; ?> )</li>
													<li>History (<?php echo $tuesdayData[4]; ?> )</li>
													<li>Mathematics (<?php echo $tuesdayData[5]; ?> )</li>
													<li>English (<?php echo $tuesdayData[6]; ?> )</li>
													<li>Science (<?php echo $tuesdayData[7]; ?> )</li>
										<?php
												}
												else if(count($tuesdayData) == 9)
												{
											?>
													<li>Mathematics (<?php echo $tuesdayData[0]; ?> )</li>
													<li>English (<?php echo $tuesdayData[1]; ?> )</li>
													<li>Science (<?php echo $tuesdayData[2]; ?> )</li>
													<li>French (<?php echo $tuesdayData[3]; ?> )</li>
													<li>History (<?php echo $tuesdayData[4]; ?> )</li>
													<li>Mathematics (<?php echo $tuesdayData[5]; ?> )</li>
													<li>English (<?php echo $tuesdayData[6]; ?> )</li>
													<li>Science (<?php echo $tuesdayData[7]; ?> )</li>
													<li>French (<?php echo $tuesdayData[8]; ?> )</li>
										<?php
												}
												else if(count($tuesdayData) == 10)
												{
											?>
													<li>Mathematics (<?php echo $tuesdayData[0]; ?> )</li>
													<li>English (<?php echo $tuesdayData[1]; ?> )</li>
													<li>Science (<?php echo $tuesdayData[2]; ?> )</li>
													<li>French (<?php echo $tuesdayData[3]; ?> )</li>
													<li>History (<?php echo $tuesdayData[4]; ?> )</li>
													<li>Mathematics (<?php echo $tuesdayData[5]; ?> )</li>
													<li>English (<?php echo $tuesdayData[6]; ?> )</li>
													<li>Science (<?php echo $tuesdayData[7]; ?> )</li>
													<li>French (<?php echo $tuesdayData[8]; ?> )</li>
													<li>History (<?php echo $tuesdayData[9]; ?> )</li>
										<?php
												}
											}
											else if(count($tuesdayData) > 10)
											{
												if(count($tuesdayData) == 1)
												{
										?>
													<li>Mathematics (<?php echo $tuesdayData[0]; ?> )
													</li>
											<?php
												}
												else if(count($tuesdayData) == 2)
												{
											?>
													<li>Mathematics (<?php echo $tuesdayData[0]; ?> )</li>
													<li>English (<?php echo $tuesdayData[1]; ?> )</li>
											<?php
												}
												else if(count($tuesdayData) == 3)
												{
											?>
													<li>Mathematics (<?php echo $tuesdayData[0]; ?> )</li>
													<li>English (<?php echo $tuesdayData[1]; ?> )</li>
													<li>Science (<?php echo $tuesdayData[2]; ?> )</li>
											<?php
												}
												else if(count($tuesdayData) == 4)
												{
											?>
													<li>Mathematics (<?php echo $tuesdayData[0]; ?> )</li>
													<li>English (<?php echo $tuesdayData[1]; ?> )</li>
													<li>Science (<?php echo $tuesdayData[2]; ?> )</li>
													<li>French (<?php echo $tuesdayData[3]; ?> )</li>
											<?php
												}
												else if(count($tuesdayData) == 5)
												{
											?>
													<li>Mathematics (<?php echo $tuesdayData[0]; ?> )</li>
													<li>English (<?php echo $tuesdayData[1]; ?> )</li>
													<li>Science (<?php echo $tuesdayData[2]; ?> )</li>
													<li>French (<?php echo $tuesdayData[3]; ?> )</li>
													<li>History (<?php echo $tuesdayData[4]; ?> )</li>
										<?php
												}
												else if(count($tuesdayData) == 6)
												{
											?>
													<li>Mathematics (<?php echo $tuesdayData[0]; ?> )</li>
													<li>English (<?php echo $tuesdayData[1]; ?> )</li>
													<li>Science (<?php echo $tuesdayData[2]; ?> )</li>
													<li>French (<?php echo $tuesdayData[3]; ?> )</li>
													<li>History (<?php echo $tuesdayData[4]; ?> )</li>
													<li>Mathematics (<?php echo $tuesdayData[5]; ?> )</li>
										<?php
												}
												else if(count($tuesdayData) == 7)
												{
											?>
													<li>Mathematics (<?php echo $tuesdayData[0]; ?> )</li>
													<li>English (<?php echo $tuesdayData[1]; ?> )</li>
													<li>Science (<?php echo $tuesdayData[2]; ?> )</li>
													<li>French (<?php echo $tuesdayData[3]; ?> )</li>
													<li>History (<?php echo $tuesdayData[4]; ?> )</li>
													<li>Mathematics (<?php echo $tuesdayData[5]; ?> )</li>
													<li>English (<?php echo $tuesdayData[6]; ?> )</li>
										<?php
												}
												else if(count($tuesdayData) == 8)
												{
											?>
													<li>Mathematics (<?php echo $tuesdayData[0]; ?> )</li>
													<li>English (<?php echo $tuesdayData[1]; ?> )</li>
													<li>Science (<?php echo $tuesdayData[2]; ?> )</li>
													<li>French (<?php echo $tuesdayData[3]; ?> )</li>
													<li>History (<?php echo $tuesdayData[4]; ?> )</li>
													<li>Mathematics (<?php echo $tuesdayData[5]; ?> )</li>
													<li>English (<?php echo $tuesdayData[6]; ?> )</li>
													<li>Science (<?php echo $tuesdayData[7]; ?> )</li>
										<?php
												}
												else if(count($tuesdayData) == 9)
												{
											?>
													<li>Mathematics (<?php echo $tuesdayData[0]; ?> )</li>
													<li>English (<?php echo $tuesdayData[1]; ?> )</li>
													<li>Science (<?php echo $tuesdayData[2]; ?> )</li>
													<li>French (<?php echo $tuesdayData[3]; ?> )</li>
													<li>History (<?php echo $tuesdayData[4]; ?> )</li>
													<li>Mathematics (<?php echo $tuesdayData[5]; ?> )</li>
													<li>English (<?php echo $tuesdayData[6]; ?> )</li>
													<li>Science (<?php echo $tuesdayData[7]; ?> )</li>
													<li>French (<?php echo $tuesdayData[8]; ?> )</li>
										<?php
												}
												else if(count($tuesdayData) == 10)
												{
											?>
													<li>Mathematics (<?php echo $tuesdayData[0]; ?> )</li>
													<li>English (<?php echo $tuesdayData[1]; ?> )</li>
													<li>Science (<?php echo $tuesdayData[2]; ?> )</li>
													<li>French (<?php echo $tuesdayData[3]; ?> )</li>
													<li>History (<?php echo $tuesdayData[4]; ?> )</li>
													<li>Mathematics (<?php echo $tuesdayData[5]; ?> )</li>
													<li>English (<?php echo $tuesdayData[6]; ?> )</li>
													<li>Science (<?php echo $tuesdayData[7]; ?> )</li>
													<li>French (<?php echo $tuesdayData[8]; ?> )</li>
													<li>History (<?php echo $tuesdayData[9]; ?> )</li>
										<?php
												}
												else if(count($tuesdayData) == 11)
												{
											?>
													<li>Mathematics (<?php echo $tuesdayData[0]; ?> )</li>
													<li>English (<?php echo $tuesdayData[1]; ?> )</li>
													<li>Science (<?php echo $tuesdayData[2]; ?> )</li>
													<li>French (<?php echo $tuesdayData[3]; ?> )</li>
													<li>History (<?php echo $tuesdayData[4]; ?> )</li>
													<li>Mathematics (<?php echo $tuesdayData[5]; ?> )</li>
													<li>English (<?php echo $tuesdayData[6]; ?> )</li>
													<li>Science (<?php echo $tuesdayData[7]; ?> )</li>
													<li>French (<?php echo $tuesdayData[8]; ?> )</li>
													<li>History (<?php echo $tuesdayData[9]; ?> )</li>
													<li>Mathematics (<?php echo $tuesdayData[10]; ?> )</li>
										<?php
												}
												else if(count($tuesdayData) == 12)
												{
											?>
													<li>Mathematics (<?php echo $tuesdayData[0]; ?> )</li>
													<li>English (<?php echo $tuesdayData[1]; ?> )</li>
													<li>Science (<?php echo $tuesdayData[2]; ?> )</li>
													<li>French (<?php echo $tuesdayData[3]; ?> )</li>
													<li>History (<?php echo $tuesdayData[4]; ?> )</li>
													<li>Mathematics (<?php echo $tuesdayData[5]; ?> )</li>
													<li>English (<?php echo $tuesdayData[6]; ?> )</li>
													<li>Science (<?php echo $tuesdayData[7]; ?> )</li>
													<li>French (<?php echo $tuesdayData[8]; ?> )</li>
													<li>History (<?php echo $tuesdayData[9]; ?> )</li>
													<li>Mathematics (<?php echo $tuesdayData[10]; ?> )</li>
													<li>English (<?php echo $tuesdayData[11]; ?> )</li>
										<?php
												}
												else if(count($tuesdayData) == 13)
												{
											?>
													<li>Mathematics (<?php echo $tuesdayData[0]; ?> )</li>
													<li>English (<?php echo $tuesdayData[1]; ?> )</li>
													<li>Science (<?php echo $tuesdayData[2]; ?> )</li>
													<li>French (<?php echo $tuesdayData[3]; ?> )</li>
													<li>History (<?php echo $tuesdayData[4]; ?> )</li>
													<li>Mathematics (<?php echo $tuesdayData[5]; ?> )</li>
													<li>English (<?php echo $tuesdayData[6]; ?> )</li>
													<li>Science (<?php echo $tuesdayData[7]; ?> )</li>
													<li>French (<?php echo $tuesdayData[8]; ?> )</li>
													<li>History (<?php echo $tuesdayData[9]; ?> )</li>
													<li>Mathematics (<?php echo $tuesdayData[10]; ?> )</li>
													<li>English (<?php echo $tuesdayData[11]; ?> )</li>
													<li>Science (<?php echo $tuesdayData[12]; ?> )</li>
										<?php
												}
												else if(count($tuesdayData) == 14)
												{
											?>
													<li>Mathematics (<?php echo $tuesdayData[0]; ?> )</li>
													<li>English (<?php echo $tuesdayData[1]; ?> )</li>
													<li>Science (<?php echo $tuesdayData[2]; ?> )</li>
													<li>French (<?php echo $tuesdayData[3]; ?> )</li>
													<li>History (<?php echo $tuesdayData[4]; ?> )</li>
													<li>Mathematics (<?php echo $tuesdayData[5]; ?> )</li>
													<li>English (<?php echo $tuesdayData[6]; ?> )</li>
													<li>Science (<?php echo $tuesdayData[7]; ?> )</li>
													<li>French (<?php echo $tuesdayData[8]; ?> )</li>
													<li>History (<?php echo $tuesdayData[9]; ?> )</li>
													<li>Mathematics (<?php echo $tuesdayData[10]; ?> )</li>
													<li>English (<?php echo $tuesdayData[11]; ?> )</li>
													<li>Science (<?php echo $tuesdayData[12]; ?> )</li>
													<li>French (<?php echo $tuesdayData[13]; ?> )</li>
										<?php
												}
											}
										?>
									</ol>
								</div>							
							</div>
						</div>
						<div class="col-md-4">
							<div class="card card-default">
								<div class="card-header bg-danger text-white">
									<h3 class="card-title">
									Wednesday
									</h3>
								</div>
								<!-- /.card-header -->
								<div class="card-body">
									<ol>
										<?php
											if(count($wednesdayData) <= 5)
											{
												if(count($wednesdayData) == 1)
												{
										?>
													<li>Mathematics (<?php echo $wednesdayData[0]; ?> )
													</li>
											<?php
												}
												else if(count($wednesdayData) == 2)
												{
											?>
													<li>Mathematics (<?php echo $wednesdayData[0]; ?> )</li>
													<li>English (<?php echo $wednesdayData[1]; ?> )</li>
											<?php
												}
												else if(count($wednesdayData) == 3)
												{
											?>
													<li>Mathematics (<?php echo $wednesdayData[0]; ?> )</li>
													<li>English (<?php echo $wednesdayData[1]; ?> )</li>
													<li>Science (<?php echo $wednesdayData[2]; ?> )</li>
											<?php
												}
												else if(count($wednesdayData) == 4)
												{
											?>
													<li>Mathematics (<?php echo $wednesdayData[0]; ?> )</li>
													<li>English (<?php echo $wednesdayData[1]; ?> )</li>
													<li>Science (<?php echo $wednesdayData[2]; ?> )</li>
													<li>French (<?php echo $wednesdayData[3]; ?> )</li>
											<?php
												}
												else if(count($wednesdayData) == 5)
												{
											?>
													<li>Mathematics (<?php echo $wednesdayData[0]; ?> )</li>
													<li>English (<?php echo $wednesdayData[1]; ?> )</li>
													<li>Science (<?php echo $wednesdayData[2]; ?> )</li>
													<li>French (<?php echo $wednesdayData[3]; ?> )</li>
													<li>History (<?php echo $wednesdayData[4]; ?> )</li>
											<?php
												}
											?>
										<?php
											}
											else if(count($wednesdayData) > 5 && count($wednesdayData) <= 10)
											{
												if(count($wednesdayData) == 1)
												{
										?>
													<li>Mathematics (<?php echo $wednesdayData[0]; ?> )
													</li>
											<?php
												}
												else if(count($wednesdayData) == 2)
												{
											?>
													<li>Mathematics (<?php echo $wednesdayData[0]; ?> )</li>
													<li>English (<?php echo $wednesdayData[1]; ?> )</li>
											<?php
												}
												else if(count($wednesdayData) == 3)
												{
											?>
													<li>Mathematics (<?php echo $wednesdayData[0]; ?> )</li>
													<li>English (<?php echo $wednesdayData[1]; ?> )</li>
													<li>Science (<?php echo $wednesdayData[2]; ?> )</li>
											<?php
												}
												else if(count($wednesdayData) == 4)
												{
											?>
													<li>Mathematics (<?php echo $wednesdayData[0]; ?> )</li>
													<li>English (<?php echo $wednesdayData[1]; ?> )</li>
													<li>Science (<?php echo $wednesdayData[2]; ?> )</li>
													<li>French (<?php echo $wednesdayData[3]; ?> )</li>
											<?php
												}
												else if(count($wednesdayData) == 5)
												{
											?>
													<li>Mathematics (<?php echo $wednesdayData[0]; ?> )</li>
													<li>English (<?php echo $wednesdayData[1]; ?> )</li>
													<li>Science (<?php echo $wednesdayData[2]; ?> )</li>
													<li>French (<?php echo $wednesdayData[3]; ?> )</li>
													<li>History (<?php echo $wednesdayData[4]; ?> )</li>
										<?php
												}
												else if(count($wednesdayData) == 6)
												{
											?>
													<li>Mathematics (<?php echo $wednesdayData[0]; ?> )</li>
													<li>English (<?php echo $wednesdayData[1]; ?> )</li>
													<li>Science (<?php echo $wednesdayData[2]; ?> )</li>
													<li>French (<?php echo $wednesdayData[3]; ?> )</li>
													<li>History (<?php echo $wednesdayData[4]; ?> )</li>
													<li>Mathematics (<?php echo $wednesdayData[5]; ?> )</li>
										<?php
												}
												else if(count($wednesdayData) == 7)
												{
											?>
													<li>Mathematics (<?php echo $wednesdayData[0]; ?> )</li>
													<li>English (<?php echo $wednesdayData[1]; ?> )</li>
													<li>Science (<?php echo $wednesdayData[2]; ?> )</li>
													<li>French (<?php echo $wednesdayData[3]; ?> )</li>
													<li>History (<?php echo $wednesdayData[4]; ?> )</li>
													<li>Mathematics (<?php echo $wednesdayData[5]; ?> )</li>
													<li>English (<?php echo $wednesdayData[6]; ?> )</li>
										<?php
												}
												else if(count($wednesdayData) == 8)
												{
											?>
													<li>Mathematics (<?php echo $wednesdayData[0]; ?> )</li>
													<li>English (<?php echo $wednesdayData[1]; ?> )</li>
													<li>Science (<?php echo $wednesdayData[2]; ?> )</li>
													<li>French (<?php echo $wednesdayData[3]; ?> )</li>
													<li>History (<?php echo $wednesdayData[4]; ?> )</li>
													<li>Mathematics (<?php echo $wednesdayData[5]; ?> )</li>
													<li>English (<?php echo $wednesdayData[6]; ?> )</li>
													<li>Science (<?php echo $wednesdayData[7]; ?> )</li>
										<?php
												}
												else if(count($wednesdayData) == 9)
												{
											?>
													<li>Mathematics (<?php echo $wednesdayData[0]; ?> )</li>
													<li>English (<?php echo $wednesdayData[1]; ?> )</li>
													<li>Science (<?php echo $wednesdayData[2]; ?> )</li>
													<li>French (<?php echo $wednesdayData[3]; ?> )</li>
													<li>History (<?php echo $wednesdayData[4]; ?> )</li>
													<li>Mathematics (<?php echo $wednesdayData[5]; ?> )</li>
													<li>English (<?php echo $wednesdayData[6]; ?> )</li>
													<li>Science (<?php echo $wednesdayData[7]; ?> )</li>
													<li>French (<?php echo $wednesdayData[8]; ?> )</li>
										<?php
												}
												else if(count($wednesdayData) == 10)
												{
											?>
													<li>Mathematics (<?php echo $wednesdayData[0]; ?> )</li>
													<li>English (<?php echo $wednesdayData[1]; ?> )</li>
													<li>Science (<?php echo $wednesdayData[2]; ?> )</li>
													<li>French (<?php echo $wednesdayData[3]; ?> )</li>
													<li>History (<?php echo $wednesdayData[4]; ?> )</li>
													<li>Mathematics (<?php echo $wednesdayData[5]; ?> )</li>
													<li>English (<?php echo $wednesdayData[6]; ?> )</li>
													<li>Science (<?php echo $wednesdayData[7]; ?> )</li>
													<li>French (<?php echo $wednesdayData[8]; ?> )</li>
													<li>History (<?php echo $wednesdayData[9]; ?> )</li>
										<?php
												}
											}
											else if(count($wednesdayData) > 10)
											{
												if(count($wednesdayData) == 1)
												{
										?>
													<li>Mathematics (<?php echo $wednesdayData[0]; ?> )
													</li>
											<?php
												}
												else if(count($wednesdayData) == 2)
												{
											?>
													<li>Mathematics (<?php echo $wednesdayData[0]; ?> )</li>
													<li>English (<?php echo $wednesdayData[1]; ?> )</li>
											<?php
												}
												else if(count($wednesdayData) == 3)
												{
											?>
													<li>Mathematics (<?php echo $wednesdayData[0]; ?> )</li>
													<li>English (<?php echo $wednesdayData[1]; ?> )</li>
													<li>Science (<?php echo $wednesdayData[2]; ?> )</li>
											<?php
												}
												else if(count($wednesdayData) == 4)
												{
											?>
													<li>Mathematics (<?php echo $wednesdayData[0]; ?> )</li>
													<li>English (<?php echo $wednesdayData[1]; ?> )</li>
													<li>Science (<?php echo $wednesdayData[2]; ?> )</li>
													<li>French (<?php echo $wednesdayData[3]; ?> )</li>
											<?php
												}
												else if(count($wednesdayData) == 5)
												{
											?>
													<li>Mathematics (<?php echo $wednesdayData[0]; ?> )</li>
													<li>English (<?php echo $wednesdayData[1]; ?> )</li>
													<li>Science (<?php echo $wednesdayData[2]; ?> )</li>
													<li>French (<?php echo $wednesdayData[3]; ?> )</li>
													<li>History (<?php echo $wednesdayData[4]; ?> )</li>
										<?php
												}
												else if(count($wednesdayData) == 6)
												{
											?>
													<li>Mathematics (<?php echo $wednesdayData[0]; ?> )</li>
													<li>English (<?php echo $wednesdayData[1]; ?> )</li>
													<li>Science (<?php echo $wednesdayData[2]; ?> )</li>
													<li>French (<?php echo $wednesdayData[3]; ?> )</li>
													<li>History (<?php echo $wednesdayData[4]; ?> )</li>
													<li>Mathematics (<?php echo $wednesdayData[5]; ?> )</li>
										<?php
												}
												else if(count($wednesdayData) == 7)
												{
											?>
													<li>Mathematics (<?php echo $wednesdayData[0]; ?> )</li>
													<li>English (<?php echo $wednesdayData[1]; ?> )</li>
													<li>Science (<?php echo $wednesdayData[2]; ?> )</li>
													<li>French (<?php echo $wednesdayData[3]; ?> )</li>
													<li>History (<?php echo $wednesdayData[4]; ?> )</li>
													<li>Mathematics (<?php echo $wednesdayData[5]; ?> )</li>
													<li>English (<?php echo $wednesdayData[6]; ?> )</li>
										<?php
												}
												else if(count($wednesdayData) == 8)
												{
											?>
													<li>Mathematics (<?php echo $wednesdayData[0]; ?> )</li>
													<li>English (<?php echo $wednesdayData[1]; ?> )</li>
													<li>Science (<?php echo $wednesdayData[2]; ?> )</li>
													<li>French (<?php echo $wednesdayData[3]; ?> )</li>
													<li>History (<?php echo $wednesdayData[4]; ?> )</li>
													<li>Mathematics (<?php echo $wednesdayData[5]; ?> )</li>
													<li>English (<?php echo $wednesdayData[6]; ?> )</li>
													<li>Science (<?php echo $wednesdayData[7]; ?> )</li>
										<?php
												}
												else if(count($wednesdayData) == 9)
												{
											?>
													<li>Mathematics (<?php echo $wednesdayData[0]; ?> )</li>
													<li>English (<?php echo $wednesdayData[1]; ?> )</li>
													<li>Science (<?php echo $wednesdayData[2]; ?> )</li>
													<li>French (<?php echo $wednesdayData[3]; ?> )</li>
													<li>History (<?php echo $wednesdayData[4]; ?> )</li>
													<li>Mathematics (<?php echo $wednesdayData[5]; ?> )</li>
													<li>English (<?php echo $wednesdayData[6]; ?> )</li>
													<li>Science (<?php echo $wednesdayData[7]; ?> )</li>
													<li>French (<?php echo $wednesdayData[8]; ?> )</li>
										<?php
												}
												else if(count($wednesdayData) == 10)
												{
											?>
													<li>Mathematics (<?php echo $wednesdayData[0]; ?> )</li>
													<li>English (<?php echo $wednesdayData[1]; ?> )</li>
													<li>Science (<?php echo $wednesdayData[2]; ?> )</li>
													<li>French (<?php echo $wednesdayData[3]; ?> )</li>
													<li>History (<?php echo $wednesdayData[4]; ?> )</li>
													<li>Mathematics (<?php echo $wednesdayData[5]; ?> )</li>
													<li>English (<?php echo $wednesdayData[6]; ?> )</li>
													<li>Science (<?php echo $wednesdayData[7]; ?> )</li>
													<li>French (<?php echo $wednesdayData[8]; ?> )</li>
													<li>History (<?php echo $wednesdayData[9]; ?> )</li>
										<?php
												}
												else if(count($wednesdayData) == 11)
												{
											?>
													<li>Mathematics (<?php echo $wednesdayData[0]; ?> )</li>
													<li>English (<?php echo $wednesdayData[1]; ?> )</li>
													<li>Science (<?php echo $wednesdayData[2]; ?> )</li>
													<li>French (<?php echo $wednesdayData[3]; ?> )</li>
													<li>History (<?php echo $wednesdayData[4]; ?> )</li>
													<li>Mathematics (<?php echo $wednesdayData[5]; ?> )</li>
													<li>English (<?php echo $wednesdayData[6]; ?> )</li>
													<li>Science (<?php echo $wednesdayData[7]; ?> )</li>
													<li>French (<?php echo $wednesdayData[8]; ?> )</li>
													<li>History (<?php echo $wednesdayData[9]; ?> )</li>
													<li>Mathematics (<?php echo $wednesdayData[10]; ?> )</li>
										<?php
												}
												else if(count($wednesdayData) == 12)
												{
											?>
													<li>Mathematics (<?php echo $wednesdayData[0]; ?> )</li>
													<li>English (<?php echo $wednesdayData[1]; ?> )</li>
													<li>Science (<?php echo $wednesdayData[2]; ?> )</li>
													<li>French (<?php echo $wednesdayData[3]; ?> )</li>
													<li>History (<?php echo $wednesdayData[4]; ?> )</li>
													<li>Mathematics (<?php echo $wednesdayData[5]; ?> )</li>
													<li>English (<?php echo $wednesdayData[6]; ?> )</li>
													<li>Science (<?php echo $wednesdayData[7]; ?> )</li>
													<li>French (<?php echo $wednesdayData[8]; ?> )</li>
													<li>History (<?php echo $wednesdayData[9]; ?> )</li>
													<li>Mathematics (<?php echo $wednesdayData[10]; ?> )</li>
													<li>English (<?php echo $wednesdayData[11]; ?> )</li>
										<?php
												}
												else if(count($wednesdayData) == 13)
												{
											?>
													<li>Mathematics (<?php echo $wednesdayData[0]; ?> )</li>
													<li>English (<?php echo $wednesdayData[1]; ?> )</li>
													<li>Science (<?php echo $wednesdayData[2]; ?> )</li>
													<li>French (<?php echo $wednesdayData[3]; ?> )</li>
													<li>History (<?php echo $wednesdayData[4]; ?> )</li>
													<li>Mathematics (<?php echo $wednesdayData[5]; ?> )</li>
													<li>English (<?php echo $wednesdayData[6]; ?> )</li>
													<li>Science (<?php echo $wednesdayData[7]; ?> )</li>
													<li>French (<?php echo $wednesdayData[8]; ?> )</li>
													<li>History (<?php echo $wednesdayData[9]; ?> )</li>
													<li>Mathematics (<?php echo $wednesdayData[10]; ?> )</li>
													<li>English (<?php echo $wednesdayData[11]; ?> )</li>
													<li>Science (<?php echo $wednesdayData[12]; ?> )</li>
										<?php
												}
												else if(count($wednesdayData) == 14)
												{
											?>
													<li>Mathematics (<?php echo $wednesdayData[0]; ?> )</li>
													<li>English (<?php echo $wednesdayData[1]; ?> )</li>
													<li>Science (<?php echo $wednesdayData[2]; ?> )</li>
													<li>French (<?php echo $wednesdayData[3]; ?> )</li>
													<li>History (<?php echo $wednesdayData[4]; ?> )</li>
													<li>Mathematics (<?php echo $wednesdayData[5]; ?> )</li>
													<li>English (<?php echo $wednesdayData[6]; ?> )</li>
													<li>Science (<?php echo $wednesdayData[7]; ?> )</li>
													<li>French (<?php echo $wednesdayData[8]; ?> )</li>
													<li>History (<?php echo $wednesdayData[9]; ?> )</li>
													<li>Mathematics (<?php echo $wednesdayData[10]; ?> )</li>
													<li>English (<?php echo $wednesdayData[11]; ?> )</li>
													<li>Science (<?php echo $wednesdayData[12]; ?> )</li>
													<li>French (<?php echo $wednesdayData[13]; ?> )</li>
										<?php
												}
											}
										?>
									</ol>
								</div>							
							</div>
						</div>
					</div>
					<p>&nbsp;</p>
					<div class="row">
						<div class="col-md-4">
							<div class="card card-default">
								<div class="card-header bg-primary text-white">
									<h3 class="card-title">
									Thursday
									</h3>
								</div>
								<!-- /.card-header -->
								<div class="card-body">
									<ol>
										<?php
											if(count($thursdayData) <= 5)
											{
												if(count($thursdayData) == 1)
												{
										?>
													<li>Mathematics (<?php echo $thursdayData[0]; ?> )
													</li>
											<?php
												}
												else if(count($thursdayData) == 2)
												{
											?>
													<li>Mathematics (<?php echo $thursdayData[0]; ?> )</li>
													<li>English (<?php echo $thursdayData[1]; ?> )</li>
											<?php
												}
												else if(count($thursdayData) == 3)
												{
											?>
													<li>Mathematics (<?php echo $thursdayData[0]; ?> )</li>
													<li>English (<?php echo $thursdayData[1]; ?> )</li>
													<li>Science (<?php echo $thursdayData[2]; ?> )</li>
											<?php
												}
												else if(count($thursdayData) == 4)
												{
											?>
													<li>Mathematics (<?php echo $thursdayData[0]; ?> )</li>
													<li>English (<?php echo $thursdayData[1]; ?> )</li>
													<li>Science (<?php echo $thursdayData[2]; ?> )</li>
													<li>French (<?php echo $thursdayData[3]; ?> )</li>
											<?php
												}
												else if(count($thursdayData) == 5)
												{
											?>
													<li>Mathematics (<?php echo $thursdayData[0]; ?> )</li>
													<li>English (<?php echo $thursdayData[1]; ?> )</li>
													<li>Science (<?php echo $thursdayData[2]; ?> )</li>
													<li>French (<?php echo $thursdayData[3]; ?> )</li>
													<li>History (<?php echo $thursdayData[4]; ?> )</li>
											<?php
												}
											?>
										<?php
											}
											else if(count($thursdayData) > 5 && count($thursdayData) <= 10)
											{
												if(count($thursdayData) == 1)
												{
										?>
													<li>Mathematics (<?php echo $thursdayData[0]; ?> )
													</li>
											<?php
												}
												else if(count($thursdayData) == 2)
												{
											?>
													<li>Mathematics (<?php echo $thursdayData[0]; ?> )</li>
													<li>English (<?php echo $thursdayData[1]; ?> )</li>
											<?php
												}
												else if(count($thursdayData) == 3)
												{
											?>
													<li>Mathematics (<?php echo $thursdayData[0]; ?> )</li>
													<li>English (<?php echo $thursdayData[1]; ?> )</li>
													<li>Science (<?php echo $thursdayData[2]; ?> )</li>
											<?php
												}
												else if(count($thursdayData) == 4)
												{
											?>
													<li>Mathematics (<?php echo $thursdayData[0]; ?> )</li>
													<li>English (<?php echo $thursdayData[1]; ?> )</li>
													<li>Science (<?php echo $thursdayData[2]; ?> )</li>
													<li>French (<?php echo $thursdayData[3]; ?> )</li>
											<?php
												}
												else if(count($thursdayData) == 5)
												{
											?>
													<li>Mathematics (<?php echo $thursdayData[0]; ?> )</li>
													<li>English (<?php echo $thursdayData[1]; ?> )</li>
													<li>Science (<?php echo $thursdayData[2]; ?> )</li>
													<li>French (<?php echo $thursdayData[3]; ?> )</li>
													<li>History (<?php echo $thursdayData[4]; ?> )</li>
										<?php
												}
												else if(count($thursdayData) == 6)
												{
											?>
													<li>Mathematics (<?php echo $thursdayData[0]; ?> )</li>
													<li>English (<?php echo $thursdayData[1]; ?> )</li>
													<li>Science (<?php echo $thursdayData[2]; ?> )</li>
													<li>French (<?php echo $thursdayData[3]; ?> )</li>
													<li>History (<?php echo $thursdayData[4]; ?> )</li>
													<li>Mathematics (<?php echo $thursdayData[5]; ?> )</li>
										<?php
												}
												else if(count($thursdayData) == 7)
												{
											?>
													<li>Mathematics (<?php echo $thursdayData[0]; ?> )</li>
													<li>English (<?php echo $thursdayData[1]; ?> )</li>
													<li>Science (<?php echo $thursdayData[2]; ?> )</li>
													<li>French (<?php echo $thursdayData[3]; ?> )</li>
													<li>History (<?php echo $thursdayData[4]; ?> )</li>
													<li>Mathematics (<?php echo $thursdayData[5]; ?> )</li>
													<li>English (<?php echo $thursdayData[6]; ?> )</li>
										<?php
												}
												else if(count($thursdayData) == 8)
												{
											?>
													<li>Mathematics (<?php echo $thursdayData[0]; ?> )</li>
													<li>English (<?php echo $thursdayData[1]; ?> )</li>
													<li>Science (<?php echo $thursdayData[2]; ?> )</li>
													<li>French (<?php echo $thursdayData[3]; ?> )</li>
													<li>History (<?php echo $thursdayData[4]; ?> )</li>
													<li>Mathematics (<?php echo $thursdayData[5]; ?> )</li>
													<li>English (<?php echo $thursdayData[6]; ?> )</li>
													<li>Science (<?php echo $thursdayData[7]; ?> )</li>
										<?php
												}
												else if(count($thursdayData) == 9)
												{
											?>
													<li>Mathematics (<?php echo $thursdayData[0]; ?> )</li>
													<li>English (<?php echo $thursdayData[1]; ?> )</li>
													<li>Science (<?php echo $thursdayData[2]; ?> )</li>
													<li>French (<?php echo $thursdayData[3]; ?> )</li>
													<li>History (<?php echo $thursdayData[4]; ?> )</li>
													<li>Mathematics (<?php echo $thursdayData[5]; ?> )</li>
													<li>English (<?php echo $thursdayData[6]; ?> )</li>
													<li>Science (<?php echo $thursdayData[7]; ?> )</li>
													<li>French (<?php echo $thursdayData[8]; ?> )</li>
										<?php
												}
												else if(count($thursdayData) == 10)
												{
											?>
													<li>Mathematics (<?php echo $thursdayData[0]; ?> )</li>
													<li>English (<?php echo $thursdayData[1]; ?> )</li>
													<li>Science (<?php echo $thursdayData[2]; ?> )</li>
													<li>French (<?php echo $thursdayData[3]; ?> )</li>
													<li>History (<?php echo $thursdayData[4]; ?> )</li>
													<li>Mathematics (<?php echo $thursdayData[5]; ?> )</li>
													<li>English (<?php echo $thursdayData[6]; ?> )</li>
													<li>Science (<?php echo $thursdayData[7]; ?> )</li>
													<li>French (<?php echo $thursdayData[8]; ?> )</li>
													<li>History (<?php echo $thursdayData[9]; ?> )</li>
										<?php
												}
											}
											else if(count($thursdayData) > 10)
											{
												if(count($thursdayData) == 1)
												{
										?>
													<li>Mathematics (<?php echo $thursdayData[0]; ?> )
													</li>
											<?php
												}
												else if(count($thursdayData) == 2)
												{
											?>
													<li>Mathematics (<?php echo $thursdayData[0]; ?> )</li>
													<li>English (<?php echo $thursdayData[1]; ?> )</li>
											<?php
												}
												else if(count($thursdayData) == 3)
												{
											?>
													<li>Mathematics (<?php echo $thursdayData[0]; ?> )</li>
													<li>English (<?php echo $thursdayData[1]; ?> )</li>
													<li>Science (<?php echo $thursdayData[2]; ?> )</li>
											<?php
												}
												else if(count($thursdayData) == 4)
												{
											?>
													<li>Mathematics (<?php echo $thursdayData[0]; ?> )</li>
													<li>English (<?php echo $thursdayData[1]; ?> )</li>
													<li>Science (<?php echo $thursdayData[2]; ?> )</li>
													<li>French (<?php echo $thursdayData[3]; ?> )</li>
											<?php
												}
												else if(count($thursdayData) == 5)
												{
											?>
													<li>Mathematics (<?php echo $thursdayData[0]; ?> )</li>
													<li>English (<?php echo $thursdayData[1]; ?> )</li>
													<li>Science (<?php echo $thursdayData[2]; ?> )</li>
													<li>French (<?php echo $thursdayData[3]; ?> )</li>
													<li>History (<?php echo $thursdayData[4]; ?> )</li>
										<?php
												}
												else if(count($thursdayData) == 6)
												{
											?>
													<li>Mathematics (<?php echo $thursdayData[0]; ?> )</li>
													<li>English (<?php echo $thursdayData[1]; ?> )</li>
													<li>Science (<?php echo $thursdayData[2]; ?> )</li>
													<li>French (<?php echo $thursdayData[3]; ?> )</li>
													<li>History (<?php echo $thursdayData[4]; ?> )</li>
													<li>Mathematics (<?php echo $thursdayData[5]; ?> )</li>
										<?php
												}
												else if(count($thursdayData) == 7)
												{
											?>
													<li>Mathematics (<?php echo $thursdayData[0]; ?> )</li>
													<li>English (<?php echo $thursdayData[1]; ?> )</li>
													<li>Science (<?php echo $thursdayData[2]; ?> )</li>
													<li>French (<?php echo $thursdayData[3]; ?> )</li>
													<li>History (<?php echo $thursdayData[4]; ?> )</li>
													<li>Mathematics (<?php echo $thursdayData[5]; ?> )</li>
													<li>English (<?php echo $thursdayData[6]; ?> )</li>
										<?php
												}
												else if(count($thursdayData) == 8)
												{
											?>
													<li>Mathematics (<?php echo $thursdayData[0]; ?> )</li>
													<li>English (<?php echo $thursdayData[1]; ?> )</li>
													<li>Science (<?php echo $thursdayData[2]; ?> )</li>
													<li>French (<?php echo $thursdayData[3]; ?> )</li>
													<li>History (<?php echo $thursdayData[4]; ?> )</li>
													<li>Mathematics (<?php echo $thursdayData[5]; ?> )</li>
													<li>English (<?php echo $thursdayData[6]; ?> )</li>
													<li>Science (<?php echo $thursdayData[7]; ?> )</li>
										<?php
												}
												else if(count($thursdayData) == 9)
												{
											?>
													<li>Mathematics (<?php echo $thursdayData[0]; ?> )</li>
													<li>English (<?php echo $thursdayData[1]; ?> )</li>
													<li>Science (<?php echo $thursdayData[2]; ?> )</li>
													<li>French (<?php echo $thursdayData[3]; ?> )</li>
													<li>History (<?php echo $thursdayData[4]; ?> )</li>
													<li>Mathematics (<?php echo $thursdayData[5]; ?> )</li>
													<li>English (<?php echo $thursdayData[6]; ?> )</li>
													<li>Science (<?php echo $thursdayData[7]; ?> )</li>
													<li>French (<?php echo $thursdayData[8]; ?> )</li>
										<?php
												}
												else if(count($thursdayData) == 10)
												{
											?>
													<li>Mathematics (<?php echo $thursdayData[0]; ?> )</li>
													<li>English (<?php echo $thursdayData[1]; ?> )</li>
													<li>Science (<?php echo $thursdayData[2]; ?> )</li>
													<li>French (<?php echo $thursdayData[3]; ?> )</li>
													<li>History (<?php echo $thursdayData[4]; ?> )</li>
													<li>Mathematics (<?php echo $thursdayData[5]; ?> )</li>
													<li>English (<?php echo $thursdayData[6]; ?> )</li>
													<li>Science (<?php echo $thursdayData[7]; ?> )</li>
													<li>French (<?php echo $thursdayData[8]; ?> )</li>
													<li>History (<?php echo $thursdayData[9]; ?> )</li>
										<?php
												}
												else if(count($thursdayData) == 11)
												{
											?>
													<li>Mathematics (<?php echo $thursdayData[0]; ?> )</li>
													<li>English (<?php echo $thursdayData[1]; ?> )</li>
													<li>Science (<?php echo $thursdayData[2]; ?> )</li>
													<li>French (<?php echo $thursdayData[3]; ?> )</li>
													<li>History (<?php echo $thursdayData[4]; ?> )</li>
													<li>Mathematics (<?php echo $thursdayData[5]; ?> )</li>
													<li>English (<?php echo $thursdayData[6]; ?> )</li>
													<li>Science (<?php echo $thursdayData[7]; ?> )</li>
													<li>French (<?php echo $thursdayData[8]; ?> )</li>
													<li>History (<?php echo $thursdayData[9]; ?> )</li>
													<li>Mathematics (<?php echo $thursdayData[10]; ?> )</li>
										<?php
												}
												else if(count($thursdayData) == 12)
												{
											?>
													<li>Mathematics (<?php echo $thursdayData[0]; ?> )</li>
													<li>English (<?php echo $thursdayData[1]; ?> )</li>
													<li>Science (<?php echo $thursdayData[2]; ?> )</li>
													<li>French (<?php echo $thursdayData[3]; ?> )</li>
													<li>History (<?php echo $thursdayData[4]; ?> )</li>
													<li>Mathematics (<?php echo $thursdayData[5]; ?> )</li>
													<li>English (<?php echo $thursdayData[6]; ?> )</li>
													<li>Science (<?php echo $thursdayData[7]; ?> )</li>
													<li>French (<?php echo $thursdayData[8]; ?> )</li>
													<li>History (<?php echo $thursdayData[9]; ?> )</li>
													<li>Mathematics (<?php echo $thursdayData[10]; ?> )</li>
													<li>English (<?php echo $thursdayData[11]; ?> )</li>
										<?php
												}
												else if(count($thursdayData) == 13)
												{
											?>
													<li>Mathematics (<?php echo $thursdayData[0]; ?> )</li>
													<li>English (<?php echo $thursdayData[1]; ?> )</li>
													<li>Science (<?php echo $thursdayData[2]; ?> )</li>
													<li>French (<?php echo $thursdayData[3]; ?> )</li>
													<li>History (<?php echo $thursdayData[4]; ?> )</li>
													<li>Mathematics (<?php echo $thursdayData[5]; ?> )</li>
													<li>English (<?php echo $thursdayData[6]; ?> )</li>
													<li>Science (<?php echo $thursdayData[7]; ?> )</li>
													<li>French (<?php echo $thursdayData[8]; ?> )</li>
													<li>History (<?php echo $thursdayData[9]; ?> )</li>
													<li>Mathematics (<?php echo $thursdayData[10]; ?> )</li>
													<li>English (<?php echo $thursdayData[11]; ?> )</li>
													<li>Science (<?php echo $thursdayData[12]; ?> )</li>
										<?php
												}
												else if(count($thursdayData) == 14)
												{
											?>
													<li>Mathematics (<?php echo $thursdayData[0]; ?> )</li>
													<li>English (<?php echo $thursdayData[1]; ?> )</li>
													<li>Science (<?php echo $thursdayData[2]; ?> )</li>
													<li>French (<?php echo $thursdayData[3]; ?> )</li>
													<li>History (<?php echo $thursdayData[4]; ?> )</li>
													<li>Mathematics (<?php echo $thursdayData[5]; ?> )</li>
													<li>English (<?php echo $thursdayData[6]; ?> )</li>
													<li>Science (<?php echo $thursdayData[7]; ?> )</li>
													<li>French (<?php echo $thursdayData[8]; ?> )</li>
													<li>History (<?php echo $thursdayData[9]; ?> )</li>
													<li>Mathematics (<?php echo $thursdayData[10]; ?> )</li>
													<li>English (<?php echo $thursdayData[11]; ?> )</li>
													<li>Science (<?php echo $thursdayData[12]; ?> )</li>
													<li>French (<?php echo $thursdayData[13]; ?> )</li>
										<?php
												}
											}
										?>
									</ol>
								</div>							
							</div>
						</div>
						<div class="col-md-4">
							<div class="card card-default">
								<div class="card-header bg-secondary text-white">
									<h3 class="card-title">
									Friday
									</h3>
								</div>
								<!-- /.card-header -->
								<div class="card-body">
									<ol>
										<?php
											if(count($fridayData) <= 5)
											{
												if(count($fridayData) == 1)
												{
										?>
													<li>Mathematics (<?php echo $fridayData[0]; ?> )
													</li>
											<?php
												}
												else if(count($fridayData) == 2)
												{
											?>
													<li>Mathematics (<?php echo $fridayData[0]; ?> )</li>
													<li>English (<?php echo $fridayData[1]; ?> )</li>
											<?php
												}
												else if(count($fridayData) == 3)
												{
											?>
													<li>Mathematics (<?php echo $fridayData[0]; ?> )</li>
													<li>English (<?php echo $fridayData[1]; ?> )</li>
													<li>Science (<?php echo $fridayData[2]; ?> )</li>
											<?php
												}
												else if(count($fridayData) == 4)
												{
											?>
													<li>Mathematics (<?php echo $fridayData[0]; ?> )</li>
													<li>English (<?php echo $fridayData[1]; ?> )</li>
													<li>Science (<?php echo $fridayData[2]; ?> )</li>
													<li>French (<?php echo $fridayData[3]; ?> )</li>
											<?php
												}
												else if(count($fridayData) == 5)
												{
											?>
													<li>Mathematics (<?php echo $fridayData[0]; ?> )</li>
													<li>English (<?php echo $fridayData[1]; ?> )</li>
													<li>Science (<?php echo $fridayData[2]; ?> )</li>
													<li>French (<?php echo $fridayData[3]; ?> )</li>
													<li>History (<?php echo $fridayData[4]; ?> )</li>
											<?php
												}
											?>
										<?php
											}
											else if(count($fridayData) > 5 && count($fridayData) <= 10)
											{
												if(count($fridayData) == 1)
												{
										?>
													<li>Mathematics (<?php echo $fridayData[0]; ?> )
													</li>
											<?php
												}
												else if(count($fridayData) == 2)
												{
											?>
													<li>Mathematics (<?php echo $fridayData[0]; ?> )</li>
													<li>English (<?php echo $fridayData[1]; ?> )</li>
											<?php
												}
												else if(count($fridayData) == 3)
												{
											?>
													<li>Mathematics (<?php echo $fridayData[0]; ?> )</li>
													<li>English (<?php echo $fridayData[1]; ?> )</li>
													<li>Science (<?php echo $fridayData[2]; ?> )</li>
											<?php
												}
												else if(count($fridayData) == 4)
												{
											?>
													<li>Mathematics (<?php echo $fridayData[0]; ?> )</li>
													<li>English (<?php echo $fridayData[1]; ?> )</li>
													<li>Science (<?php echo $fridayData[2]; ?> )</li>
													<li>French (<?php echo $fridayData[3]; ?> )</li>
											<?php
												}
												else if(count($fridayData) == 5)
												{
											?>
													<li>Mathematics (<?php echo $fridayData[0]; ?> )</li>
													<li>English (<?php echo $fridayData[1]; ?> )</li>
													<li>Science (<?php echo $fridayData[2]; ?> )</li>
													<li>French (<?php echo $fridayData[3]; ?> )</li>
													<li>History (<?php echo $fridayData[4]; ?> )</li>
										<?php
												}
												else if(count($fridayData) == 6)
												{
											?>
													<li>Mathematics (<?php echo $fridayData[0]; ?> )</li>
													<li>English (<?php echo $fridayData[1]; ?> )</li>
													<li>Science (<?php echo $fridayData[2]; ?> )</li>
													<li>French (<?php echo $fridayData[3]; ?> )</li>
													<li>History (<?php echo $fridayData[4]; ?> )</li>
													<li>Mathematics (<?php echo $fridayData[5]; ?> )</li>
										<?php
												}
												else if(count($fridayData) == 7)
												{
											?>
													<li>Mathematics (<?php echo $fridayData[0]; ?> )</li>
													<li>English (<?php echo $fridayData[1]; ?> )</li>
													<li>Science (<?php echo $fridayData[2]; ?> )</li>
													<li>French (<?php echo $fridayData[3]; ?> )</li>
													<li>History (<?php echo $fridayData[4]; ?> )</li>
													<li>Mathematics (<?php echo $fridayData[5]; ?> )</li>
													<li>English (<?php echo $fridayData[6]; ?> )</li>
										<?php
												}
												else if(count($fridayData) == 8)
												{
											?>
													<li>Mathematics (<?php echo $fridayData[0]; ?> )</li>
													<li>English (<?php echo $fridayData[1]; ?> )</li>
													<li>Science (<?php echo $fridayData[2]; ?> )</li>
													<li>French (<?php echo $fridayData[3]; ?> )</li>
													<li>History (<?php echo $fridayData[4]; ?> )</li>
													<li>Mathematics (<?php echo $fridayData[5]; ?> )</li>
													<li>English (<?php echo $fridayData[6]; ?> )</li>
													<li>Science (<?php echo $fridayData[7]; ?> )</li>
										<?php
												}
												else if(count($fridayData) == 9)
												{
											?>
													<li>Mathematics (<?php echo $fridayData[0]; ?> )</li>
													<li>English (<?php echo $fridayData[1]; ?> )</li>
													<li>Science (<?php echo $fridayData[2]; ?> )</li>
													<li>French (<?php echo $fridayData[3]; ?> )</li>
													<li>History (<?php echo $fridayData[4]; ?> )</li>
													<li>Mathematics (<?php echo $fridayData[5]; ?> )</li>
													<li>English (<?php echo $fridayData[6]; ?> )</li>
													<li>Science (<?php echo $fridayData[7]; ?> )</li>
													<li>French (<?php echo $fridayData[8]; ?> )</li>
										<?php
												}
												else if(count($fridayData) == 10)
												{
											?>
													<li>Mathematics (<?php echo $fridayData[0]; ?> )</li>
													<li>English (<?php echo $fridayData[1]; ?> )</li>
													<li>Science (<?php echo $fridayData[2]; ?> )</li>
													<li>French (<?php echo $fridayData[3]; ?> )</li>
													<li>History (<?php echo $fridayData[4]; ?> )</li>
													<li>Mathematics (<?php echo $fridayData[5]; ?> )</li>
													<li>English (<?php echo $fridayData[6]; ?> )</li>
													<li>Science (<?php echo $fridayData[7]; ?> )</li>
													<li>French (<?php echo $fridayData[8]; ?> )</li>
													<li>History (<?php echo $fridayData[9]; ?> )</li>
										<?php
												}
											}
											else if(count($fridayData) > 10)
											{
												if(count($fridayData) == 1)
												{
										?>
													<li>Mathematics (<?php echo $fridayData[0]; ?> )
													</li>
											<?php
												}
												else if(count($fridayData) == 2)
												{
											?>
													<li>Mathematics (<?php echo $fridayData[0]; ?> )</li>
													<li>English (<?php echo $fridayData[1]; ?> )</li>
											<?php
												}
												else if(count($fridayData) == 3)
												{
											?>
													<li>Mathematics (<?php echo $fridayData[0]; ?> )</li>
													<li>English (<?php echo $fridayData[1]; ?> )</li>
													<li>Science (<?php echo $fridayData[2]; ?> )</li>
											<?php
												}
												else if(count($fridayData) == 4)
												{
											?>
													<li>Mathematics (<?php echo $fridayData[0]; ?> )</li>
													<li>English (<?php echo $fridayData[1]; ?> )</li>
													<li>Science (<?php echo $fridayData[2]; ?> )</li>
													<li>French (<?php echo $fridayData[3]; ?> )</li>
											<?php
												}
												else if(count($fridayData) == 5)
												{
											?>
													<li>Mathematics (<?php echo $fridayData[0]; ?> )</li>
													<li>English (<?php echo $fridayData[1]; ?> )</li>
													<li>Science (<?php echo $fridayData[2]; ?> )</li>
													<li>French (<?php echo $fridayData[3]; ?> )</li>
													<li>History (<?php echo $fridayData[4]; ?> )</li>
										<?php
												}
												else if(count($fridayData) == 6)
												{
											?>
													<li>Mathematics (<?php echo $fridayData[0]; ?> )</li>
													<li>English (<?php echo $fridayData[1]; ?> )</li>
													<li>Science (<?php echo $fridayData[2]; ?> )</li>
													<li>French (<?php echo $fridayData[3]; ?> )</li>
													<li>History (<?php echo $fridayData[4]; ?> )</li>
													<li>Mathematics (<?php echo $fridayData[5]; ?> )</li>
										<?php
												}
												else if(count($fridayData) == 7)
												{
											?>
													<li>Mathematics (<?php echo $fridayData[0]; ?> )</li>
													<li>English (<?php echo $fridayData[1]; ?> )</li>
													<li>Science (<?php echo $fridayData[2]; ?> )</li>
													<li>French (<?php echo $fridayData[3]; ?> )</li>
													<li>History (<?php echo $fridayData[4]; ?> )</li>
													<li>Mathematics (<?php echo $fridayData[5]; ?> )</li>
													<li>English (<?php echo $fridayData[6]; ?> )</li>
										<?php
												}
												else if(count($fridayData) == 8)
												{
											?>
													<li>Mathematics (<?php echo $fridayData[0]; ?> )</li>
													<li>English (<?php echo $fridayData[1]; ?> )</li>
													<li>Science (<?php echo $fridayData[2]; ?> )</li>
													<li>French (<?php echo $fridayData[3]; ?> )</li>
													<li>History (<?php echo $fridayData[4]; ?> )</li>
													<li>Mathematics (<?php echo $fridayData[5]; ?> )</li>
													<li>English (<?php echo $fridayData[6]; ?> )</li>
													<li>Science (<?php echo $fridayData[7]; ?> )</li>
										<?php
												}
												else if(count($fridayData) == 9)
												{
											?>
													<li>Mathematics (<?php echo $fridayData[0]; ?> )</li>
													<li>English (<?php echo $fridayData[1]; ?> )</li>
													<li>Science (<?php echo $fridayData[2]; ?> )</li>
													<li>French (<?php echo $fridayData[3]; ?> )</li>
													<li>History (<?php echo $fridayData[4]; ?> )</li>
													<li>Mathematics (<?php echo $fridayData[5]; ?> )</li>
													<li>English (<?php echo $fridayData[6]; ?> )</li>
													<li>Science (<?php echo $fridayData[7]; ?> )</li>
													<li>French (<?php echo $fridayData[8]; ?> )</li>
										<?php
												}
												else if(count($fridayData) == 10)
												{
											?>
													<li>Mathematics (<?php echo $fridayData[0]; ?> )</li>
													<li>English (<?php echo $fridayData[1]; ?> )</li>
													<li>Science (<?php echo $fridayData[2]; ?> )</li>
													<li>French (<?php echo $fridayData[3]; ?> )</li>
													<li>History (<?php echo $fridayData[4]; ?> )</li>
													<li>Mathematics (<?php echo $fridayData[5]; ?> )</li>
													<li>English (<?php echo $fridayData[6]; ?> )</li>
													<li>Science (<?php echo $fridayData[7]; ?> )</li>
													<li>French (<?php echo $fridayData[8]; ?> )</li>
													<li>History (<?php echo $fridayData[9]; ?> )</li>
										<?php
												}
												else if(count($fridayData) == 11)
												{
											?>
													<li>Mathematics (<?php echo $fridayData[0]; ?> )</li>
													<li>English (<?php echo $fridayData[1]; ?> )</li>
													<li>Science (<?php echo $fridayData[2]; ?> )</li>
													<li>French (<?php echo $fridayData[3]; ?> )</li>
													<li>History (<?php echo $fridayData[4]; ?> )</li>
													<li>Mathematics (<?php echo $fridayData[5]; ?> )</li>
													<li>English (<?php echo $fridayData[6]; ?> )</li>
													<li>Science (<?php echo $fridayData[7]; ?> )</li>
													<li>French (<?php echo $fridayData[8]; ?> )</li>
													<li>History (<?php echo $fridayData[9]; ?> )</li>
													<li>Mathematics (<?php echo $fridayData[10]; ?> )</li>
										<?php
												}
												else if(count($fridayData) == 12)
												{
											?>
													<li>Mathematics (<?php echo $fridayData[0]; ?> )</li>
													<li>English (<?php echo $fridayData[1]; ?> )</li>
													<li>Science (<?php echo $fridayData[2]; ?> )</li>
													<li>French (<?php echo $fridayData[3]; ?> )</li>
													<li>History (<?php echo $fridayData[4]; ?> )</li>
													<li>Mathematics (<?php echo $fridayData[5]; ?> )</li>
													<li>English (<?php echo $fridayData[6]; ?> )</li>
													<li>Science (<?php echo $fridayData[7]; ?> )</li>
													<li>French (<?php echo $fridayData[8]; ?> )</li>
													<li>History (<?php echo $fridayData[9]; ?> )</li>
													<li>Mathematics (<?php echo $fridayData[10]; ?> )</li>
													<li>English (<?php echo $fridayData[11]; ?> )</li>
										<?php
												}
												else if(count($fridayData) == 13)
												{
											?>
													<li>Mathematics (<?php echo $fridayData[0]; ?> )</li>
													<li>English (<?php echo $fridayData[1]; ?> )</li>
													<li>Science (<?php echo $fridayData[2]; ?> )</li>
													<li>French (<?php echo $fridayData[3]; ?> )</li>
													<li>History (<?php echo $fridayData[4]; ?> )</li>
													<li>Mathematics (<?php echo $fridayData[5]; ?> )</li>
													<li>English (<?php echo $fridayData[6]; ?> )</li>
													<li>Science (<?php echo $fridayData[7]; ?> )</li>
													<li>French (<?php echo $fridayData[8]; ?> )</li>
													<li>History (<?php echo $fridayData[9]; ?> )</li>
													<li>Mathematics (<?php echo $fridayData[10]; ?> )</li>
													<li>English (<?php echo $fridayData[11]; ?> )</li>
													<li>Science (<?php echo $fridayData[12]; ?> )</li>
										<?php
												}
												else if(count($fridayData) == 14)
												{
											?>
													<li>Mathematics (<?php echo $fridayData[0]; ?> )</li>
													<li>English (<?php echo $fridayData[1]; ?> )</li>
													<li>Science (<?php echo $fridayData[2]; ?> )</li>
													<li>French (<?php echo $fridayData[3]; ?> )</li>
													<li>History (<?php echo $fridayData[4]; ?> )</li>
													<li>Mathematics (<?php echo $fridayData[5]; ?> )</li>
													<li>English (<?php echo $fridayData[6]; ?> )</li>
													<li>Science (<?php echo $fridayData[7]; ?> )</li>
													<li>French (<?php echo $fridayData[8]; ?> )</li>
													<li>History (<?php echo $fridayData[9]; ?> )</li>
													<li>Mathematics (<?php echo $fridayData[10]; ?> )</li>
													<li>English (<?php echo $fridayData[11]; ?> )</li>
													<li>Science (<?php echo $fridayData[12]; ?> )</li>
													<li>French (<?php echo $fridayData[13]; ?> )</li>
										<?php
												}
											}
										?>
									</ol>
								</div>							
							</div>
						</div>
						<div class="col-md-4">
							<div class="card card-default">
								<div class="card-header bg-success text-white">
									<h3 class="card-title">
									Saturday
									</h3>
								</div>
								<!-- /.card-header -->
								<div class="card-body">
									<ol>
										<?php
											if(count($saturdayData) <= 5)
											{
												if(count($saturdayData) == 1)
												{
										?>
													<li>Mathematics (<?php echo $saturdayData[0]; ?> )
													</li>
											<?php
												}
												else if(count($saturdayData) == 2)
												{
											?>
													<li>Mathematics (<?php echo $saturdayData[0]; ?> )</li>
													<li>English (<?php echo $saturdayData[1]; ?> )</li>
											<?php
												}
												else if(count($saturdayData) == 3)
												{
											?>
													<li>Mathematics (<?php echo $saturdayData[0]; ?> )</li>
													<li>English (<?php echo $saturdayData[1]; ?> )</li>
													<li>Science (<?php echo $saturdayData[2]; ?> )</li>
											<?php
												}
												else if(count($saturdayData) == 4)
												{
											?>
													<li>Mathematics (<?php echo $saturdayData[0]; ?> )</li>
													<li>English (<?php echo $saturdayData[1]; ?> )</li>
													<li>Science (<?php echo $saturdayData[2]; ?> )</li>
													<li>French (<?php echo $saturdayData[3]; ?> )</li>
											<?php
												}
												else if(count($saturdayData) == 5)
												{
											?>
													<li>Mathematics (<?php echo $saturdayData[0]; ?> )</li>
													<li>English (<?php echo $saturdayData[1]; ?> )</li>
													<li>Science (<?php echo $saturdayData[2]; ?> )</li>
													<li>French (<?php echo $saturdayData[3]; ?> )</li>
													<li>History (<?php echo $saturdayData[4]; ?> )</li>
											<?php
												}
											?>
										<?php
											}
											else if(count($saturdayData) > 5 && count($saturdayData) <= 10)
											{
												if(count($saturdayData) == 1)
												{
										?>
													<li>Mathematics (<?php echo $saturdayData[0]; ?> )
													</li>
											<?php
												}
												else if(count($saturdayData) == 2)
												{
											?>
													<li>Mathematics (<?php echo $saturdayData[0]; ?> )</li>
													<li>English (<?php echo $saturdayData[1]; ?> )</li>
											<?php
												}
												else if(count($saturdayData) == 3)
												{
											?>
													<li>Mathematics (<?php echo $saturdayData[0]; ?> )</li>
													<li>English (<?php echo $saturdayData[1]; ?> )</li>
													<li>Science (<?php echo $saturdayData[2]; ?> )</li>
											<?php
												}
												else if(count($saturdayData) == 4)
												{
											?>
													<li>Mathematics (<?php echo $saturdayData[0]; ?> )</li>
													<li>English (<?php echo $saturdayData[1]; ?> )</li>
													<li>Science (<?php echo $saturdayData[2]; ?> )</li>
													<li>French (<?php echo $saturdayData[3]; ?> )</li>
											<?php
												}
												else if(count($saturdayData) == 5)
												{
											?>
													<li>Mathematics (<?php echo $saturdayData[0]; ?> )</li>
													<li>English (<?php echo $saturdayData[1]; ?> )</li>
													<li>Science (<?php echo $saturdayData[2]; ?> )</li>
													<li>French (<?php echo $saturdayData[3]; ?> )</li>
													<li>History (<?php echo $saturdayData[4]; ?> )</li>
										<?php
												}
												else if(count($saturdayData) == 6)
												{
											?>
													<li>Mathematics (<?php echo $saturdayData[0]; ?> )</li>
													<li>English (<?php echo $saturdayData[1]; ?> )</li>
													<li>Science (<?php echo $saturdayData[2]; ?> )</li>
													<li>French (<?php echo $saturdayData[3]; ?> )</li>
													<li>History (<?php echo $saturdayData[4]; ?> )</li>
													<li>Mathematics (<?php echo $saturdayData[5]; ?> )</li>
										<?php
												}
												else if(count($saturdayData) == 7)
												{
											?>
													<li>Mathematics (<?php echo $saturdayData[0]; ?> )</li>
													<li>English (<?php echo $saturdayData[1]; ?> )</li>
													<li>Science (<?php echo $saturdayData[2]; ?> )</li>
													<li>French (<?php echo $saturdayData[3]; ?> )</li>
													<li>History (<?php echo $saturdayData[4]; ?> )</li>
													<li>Mathematics (<?php echo $saturdayData[5]; ?> )</li>
													<li>English (<?php echo $saturdayData[6]; ?> )</li>
										<?php
												}
												else if(count($saturdayData) == 8)
												{
											?>
													<li>Mathematics (<?php echo $saturdayData[0]; ?> )</li>
													<li>English (<?php echo $saturdayData[1]; ?> )</li>
													<li>Science (<?php echo $saturdayData[2]; ?> )</li>
													<li>French (<?php echo $saturdayData[3]; ?> )</li>
													<li>History (<?php echo $saturdayData[4]; ?> )</li>
													<li>Mathematics (<?php echo $saturdayData[5]; ?> )</li>
													<li>English (<?php echo $saturdayData[6]; ?> )</li>
													<li>Science (<?php echo $saturdayData[7]; ?> )</li>
										<?php
												}
												else if(count($saturdayData) == 9)
												{
											?>
													<li>Mathematics (<?php echo $saturdayData[0]; ?> )</li>
													<li>English (<?php echo $saturdayData[1]; ?> )</li>
													<li>Science (<?php echo $saturdayData[2]; ?> )</li>
													<li>French (<?php echo $saturdayData[3]; ?> )</li>
													<li>History (<?php echo $saturdayData[4]; ?> )</li>
													<li>Mathematics (<?php echo $saturdayData[5]; ?> )</li>
													<li>English (<?php echo $saturdayData[6]; ?> )</li>
													<li>Science (<?php echo $saturdayData[7]; ?> )</li>
													<li>French (<?php echo $saturdayData[8]; ?> )</li>
										<?php
												}
												else if(count($saturdayData) == 10)
												{
											?>
													<li>Mathematics (<?php echo $saturdayData[0]; ?> )</li>
													<li>English (<?php echo $saturdayData[1]; ?> )</li>
													<li>Science (<?php echo $saturdayData[2]; ?> )</li>
													<li>French (<?php echo $saturdayData[3]; ?> )</li>
													<li>History (<?php echo $saturdayData[4]; ?> )</li>
													<li>Mathematics (<?php echo $saturdayData[5]; ?> )</li>
													<li>English (<?php echo $saturdayData[6]; ?> )</li>
													<li>Science (<?php echo $saturdayData[7]; ?> )</li>
													<li>French (<?php echo $saturdayData[8]; ?> )</li>
													<li>History (<?php echo $saturdayData[9]; ?> )</li>
										<?php
												}
											}
											else if(count($saturdayData) > 10)
											{
												if(count($saturdayData) == 1)
												{
										?>
													<li>Mathematics (<?php echo $saturdayData[0]; ?> )
													</li>
											<?php
												}
												else if(count($saturdayData) == 2)
												{
											?>
													<li>Mathematics (<?php echo $saturdayData[0]; ?> )</li>
													<li>English (<?php echo $saturdayData[1]; ?> )</li>
											<?php
												}
												else if(count($saturdayData) == 3)
												{
											?>
													<li>Mathematics (<?php echo $saturdayData[0]; ?> )</li>
													<li>English (<?php echo $saturdayData[1]; ?> )</li>
													<li>Science (<?php echo $saturdayData[2]; ?> )</li>
											<?php
												}
												else if(count($saturdayData) == 4)
												{
											?>
													<li>Mathematics (<?php echo $saturdayData[0]; ?> )</li>
													<li>English (<?php echo $saturdayData[1]; ?> )</li>
													<li>Science (<?php echo $saturdayData[2]; ?> )</li>
													<li>French (<?php echo $saturdayData[3]; ?> )</li>
											<?php
												}
												else if(count($saturdayData) == 5)
												{
											?>
													<li>Mathematics (<?php echo $saturdayData[0]; ?> )</li>
													<li>English (<?php echo $saturdayData[1]; ?> )</li>
													<li>Science (<?php echo $saturdayData[2]; ?> )</li>
													<li>French (<?php echo $saturdayData[3]; ?> )</li>
													<li>History (<?php echo $saturdayData[4]; ?> )</li>
										<?php
												}
												else if(count($saturdayData) == 6)
												{
											?>
													<li>Mathematics (<?php echo $saturdayData[0]; ?> )</li>
													<li>English (<?php echo $saturdayData[1]; ?> )</li>
													<li>Science (<?php echo $saturdayData[2]; ?> )</li>
													<li>French (<?php echo $saturdayData[3]; ?> )</li>
													<li>History (<?php echo $saturdayData[4]; ?> )</li>
													<li>Mathematics (<?php echo $saturdayData[5]; ?> )</li>
										<?php
												}
												else if(count($saturdayData) == 7)
												{
											?>
													<li>Mathematics (<?php echo $saturdayData[0]; ?> )</li>
													<li>English (<?php echo $saturdayData[1]; ?> )</li>
													<li>Science (<?php echo $saturdayData[2]; ?> )</li>
													<li>French (<?php echo $saturdayData[3]; ?> )</li>
													<li>History (<?php echo $saturdayData[4]; ?> )</li>
													<li>Mathematics (<?php echo $saturdayData[5]; ?> )</li>
													<li>English (<?php echo $saturdayData[6]; ?> )</li>
										<?php
												}
												else if(count($saturdayData) == 8)
												{
											?>
													<li>Mathematics (<?php echo $saturdayData[0]; ?> )</li>
													<li>English (<?php echo $saturdayData[1]; ?> )</li>
													<li>Science (<?php echo $saturdayData[2]; ?> )</li>
													<li>French (<?php echo $saturdayData[3]; ?> )</li>
													<li>History (<?php echo $saturdayData[4]; ?> )</li>
													<li>Mathematics (<?php echo $saturdayData[5]; ?> )</li>
													<li>English (<?php echo $saturdayData[6]; ?> )</li>
													<li>Science (<?php echo $saturdayData[7]; ?> )</li>
										<?php
												}
												else if(count($saturdayData) == 9)
												{
											?>
													<li>Mathematics (<?php echo $saturdayData[0]; ?> )</li>
													<li>English (<?php echo $saturdayData[1]; ?> )</li>
													<li>Science (<?php echo $saturdayData[2]; ?> )</li>
													<li>French (<?php echo $saturdayData[3]; ?> )</li>
													<li>History (<?php echo $saturdayData[4]; ?> )</li>
													<li>Mathematics (<?php echo $saturdayData[5]; ?> )</li>
													<li>English (<?php echo $saturdayData[6]; ?> )</li>
													<li>Science (<?php echo $saturdayData[7]; ?> )</li>
													<li>French (<?php echo $saturdayData[8]; ?> )</li>
										<?php
												}
												else if(count($saturdayData) == 10)
												{
											?>
													<li>Mathematics (<?php echo $saturdayData[0]; ?> )</li>
													<li>English (<?php echo $saturdayData[1]; ?> )</li>
													<li>Science (<?php echo $saturdayData[2]; ?> )</li>
													<li>French (<?php echo $saturdayData[3]; ?> )</li>
													<li>History (<?php echo $saturdayData[4]; ?> )</li>
													<li>Mathematics (<?php echo $saturdayData[5]; ?> )</li>
													<li>English (<?php echo $saturdayData[6]; ?> )</li>
													<li>Science (<?php echo $saturdayData[7]; ?> )</li>
													<li>French (<?php echo $saturdayData[8]; ?> )</li>
													<li>History (<?php echo $saturdayData[9]; ?> )</li>
										<?php
												}
												else if(count($saturdayData) == 11)
												{
											?>
													<li>Mathematics (<?php echo $saturdayData[0]; ?> )</li>
													<li>English (<?php echo $saturdayData[1]; ?> )</li>
													<li>Science (<?php echo $saturdayData[2]; ?> )</li>
													<li>French (<?php echo $saturdayData[3]; ?> )</li>
													<li>History (<?php echo $saturdayData[4]; ?> )</li>
													<li>Mathematics (<?php echo $saturdayData[5]; ?> )</li>
													<li>English (<?php echo $saturdayData[6]; ?> )</li>
													<li>Science (<?php echo $saturdayData[7]; ?> )</li>
													<li>French (<?php echo $saturdayData[8]; ?> )</li>
													<li>History (<?php echo $saturdayData[9]; ?> )</li>
													<li>Mathematics (<?php echo $saturdayData[10]; ?> )</li>
										<?php
												}
												else if(count($saturdayData) == 12)
												{
											?>
													<li>Mathematics (<?php echo $saturdayData[0]; ?> )</li>
													<li>English (<?php echo $saturdayData[1]; ?> )</li>
													<li>Science (<?php echo $saturdayData[2]; ?> )</li>
													<li>French (<?php echo $saturdayData[3]; ?> )</li>
													<li>History (<?php echo $saturdayData[4]; ?> )</li>
													<li>Mathematics (<?php echo $saturdayData[5]; ?> )</li>
													<li>English (<?php echo $saturdayData[6]; ?> )</li>
													<li>Science (<?php echo $saturdayData[7]; ?> )</li>
													<li>French (<?php echo $saturdayData[8]; ?> )</li>
													<li>History (<?php echo $saturdayData[9]; ?> )</li>
													<li>Mathematics (<?php echo $saturdayData[10]; ?> )</li>
													<li>English (<?php echo $saturdayData[11]; ?> )</li>
										<?php
												}
												else if(count($saturdayData) == 13)
												{
											?>
													<li>Mathematics (<?php echo $saturdayData[0]; ?> )</li>
													<li>English (<?php echo $saturdayData[1]; ?> )</li>
													<li>Science (<?php echo $saturdayData[2]; ?> )</li>
													<li>French (<?php echo $saturdayData[3]; ?> )</li>
													<li>History (<?php echo $saturdayData[4]; ?> )</li>
													<li>Mathematics (<?php echo $saturdayData[5]; ?> )</li>
													<li>English (<?php echo $saturdayData[6]; ?> )</li>
													<li>Science (<?php echo $saturdayData[7]; ?> )</li>
													<li>French (<?php echo $saturdayData[8]; ?> )</li>
													<li>History (<?php echo $saturdayData[9]; ?> )</li>
													<li>Mathematics (<?php echo $saturdayData[10]; ?> )</li>
													<li>English (<?php echo $saturdayData[11]; ?> )</li>
													<li>Science (<?php echo $saturdayData[12]; ?> )</li>
										<?php
												}
												else if(count($saturdayData) == 14)
												{
											?>
													<li>Mathematics (<?php echo $saturdayData[0]; ?> )</li>
													<li>English (<?php echo $saturdayData[1]; ?> )</li>
													<li>Science (<?php echo $saturdayData[2]; ?> )</li>
													<li>French (<?php echo $saturdayData[3]; ?> )</li>
													<li>History (<?php echo $saturdayData[4]; ?> )</li>
													<li>Mathematics (<?php echo $saturdayData[5]; ?> )</li>
													<li>English (<?php echo $saturdayData[6]; ?> )</li>
													<li>Science (<?php echo $saturdayData[7]; ?> )</li>
													<li>French (<?php echo $saturdayData[8]; ?> )</li>
													<li>History (<?php echo $saturdayData[9]; ?> )</li>
													<li>Mathematics (<?php echo $saturdayData[10]; ?> )</li>
													<li>English (<?php echo $saturdayData[11]; ?> )</li>
													<li>Science (<?php echo $saturdayData[12]; ?> )</li>
													<li>French (<?php echo $saturdayData[13]; ?> )</li>
										<?php
												}
											}
										?>
									</ol>
								</div>							
							</div>
						</div>
					</div>
					<p>&nbsp;</p>
					<div class="row">
						<div class="col-md-12">
							<div class="card bg-info text-white">
								<div class="card-body">
									<p class="lead text-center"><b>Sunday! Yay! No need to study. Enjoy yourself!</b></p>
								</div>							
							</div>
						</div>
					</div>
			<?php
				}
			?>
		</div>
	</body>
</html>