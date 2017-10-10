<?php 
// start
session_start ();
// hent database
require("db/db.php");

header('Content-type: application/json');
//$input = json_decode(file_get_contents("php://input"));

if($_GET["action"] == "getcourse")
{
	$co_id = $_GET["id"];
	$course_db = mysqli_query($db, "select g.group_title, DATE_FORMAT(co.date,'%Y-%m-%d') as date, TIME_FORMAT(co.start, '%H.%i') as start, TIME_FORMAT(co.end, '%H.%i') as end from course as co inner join `group` as g on co.group_id = g.group_id WHERE co.course_id=$co_id");
	$course = mysqli_fetch_assoc($course_db );

	$title = $course["group_title"];
	$start = $course["start"];
	$end = $course["end"];
	$date = date_create($course["date"]);

	$weekday=date_format($date, 'N'); /*N = ISO-8601 numeric representation of the day of the week 1 (for Monday) through 7 (for Sunday)*/
	$dayName = '';
	switch ($weekday) {
		case '1':
			$dayName = 'Mandag';
			break;
		case '2':
			$dayName = 'Trisdag';
			break;
		case '3':
			$dayName = 'Ondsdag';
			break;
		case '4':
			$dayName = 'Trosdag';
			break;
		case '5':
			$dayName = 'Fridag';
			break;
		case '6':
			$dayName = 'Lørdag';
			break;
		case '7':
			$dayName = 'Søndag';
			break;
		
	 }
	 $day = date_format($date, 'j');    /*Day of the month 1 to 31*/

	 $month = date_format($date, 'n'); /*Numeric representation of a month 1 to 12*/
	 $monthName ='';
	 switch ($month) {
		case '1':
			$monthName = 'januar';
			break;
		case '2':
			$monthName = 'februar';
			break;
		case '3':
			$monthName = 'marts';
			break;
		case '4':
			$monthName = 'april';
			break;
		case '5':
			$monthName = 'maj';
			break;
		case '6':
			$monthName = 'juni';
			break;
		case '7':
			$monthName = 'juli';
			break;
		case '8':
			$monthName = 'august';
			break;
		case '9':
			$monthName = 'september';
			break;
		case '10':
			$monthName = 'oktober';
			break;
		case '11':
			$monthName = 'november';
			break;
		case '12':
			$monthName = 'december';
			break;
		}

	$array = array(
		"id" => $_GET["id"],
		"title" => $title,
		"description" => "$dayName den $day. $monthName 2015<br>$start til $end"
	);
} else if($_GET["action"] == "save") {

	$id = $_GET["id"];
	$name = $_GET["name"];
	$email = $_GET["email"];
	$amount = $_GET["amount"];
	
//insert data to Admin tabeller
	mysqli_query ($db,"INSERT INTO `customer` (`course_id`, `customer_name`, `customer_email`, `customer_amount`) VALUES ('$id', '$name', '$email', '$amount');");

	$array = array('done' => true );


} else if($_GET["action"] == "admin") {
	$co_id = $_GET["id"];
	$customer_db = mysqli_query($db, "SELECT `customer_id`, `customer_name`, `customer_email`, `customer_amount` FROM customer WHERE course_id = " . $co_id);
	$total = 0;
	$array = array();
	while($customer = mysqli_fetch_assoc($customer_db )) {
		$total = $total + $customer["customer_amount"];
		$array[] = $customer;
	}
	$array[] = array('customer_name' => 'Total', 'customer_email' => '', 'customer_amount' => $total);
}

echo json_encode($array);
?>

