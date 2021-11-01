<?php
$firstname=$_POST['firstname'];
$surname=$_POST['surname'];
$id=$_POST['id'];
$phonenumber=$_POST['phonenumber'];
$flyfrom=$_POST['flyfrom'];
$flyto=$_POST['flyto'];
$flyday=$_POST['flyday'];
$flightsession=$_POST['flightsession'];
$bookingdate=$_POST['bookingdate'];


//connectings
$conn=new mysqli('localhost','root','','bookings');

if($conn->connect_error){
	die('connection failed;'.$conn->connect_error);
}else{
	$stmt=$conn->prepare("Insert into clients(firstname,surname,id,phonenumber,flyfrom,flyto,flyday,flightsession,bookingdate)values(?,?,?,?,?,?,?,?,?)");
	$stmt->bind_param("sssisssss",$firstname,$surname,$id,$phonenumber,$flyfrom,$flyto,$flyday,$flightsession,$bookingdate);
	$stmt->execute();
	echo "Booked :FLYTERRY WILL CONTACT YOU....";
	
	$stmt->close();
	$conn->close();
}

	# code...

?>

