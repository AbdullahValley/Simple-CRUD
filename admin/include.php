<?php

	if(!isset($_GET['s'])) { $s	=	1; }
	else { $s	=	$_GET['s'];	}

	switch($s)	{

					case "":
					include_once("welcome.php");
					break;

					case 1:
					include_once("welcome.php");
					break;

// Students

					case 2:
					include_once("student-add.php");
					break;

					case 3:
					include_once("student-list.php");
					break;

					case 4:
					include_once("student-update.php");
					break;

					case 5:
					include_once("student-view.php");
					break;

// Courses

					case 6:
					include_once("course-add.php");
					break;

					case 7:
					include_once("course-list.php");
					break;

					case 8:
					include_once("course-update.php");
					break;

					case 9:
					include_once("course-view.php");
					break;

// Course Assign

					case 10:
					include_once("course-assign.php");
					break;

					case 11:
					include_once("course-assign-list.php");
					break;

					case 12:
					include_once("course-assign-view.php");
					break;

// Default

					default:
					include_once("welcome.php");
					break;
}//end of switch
?>