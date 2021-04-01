<?php
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Subject = $_POST['Subject'];
    $Message = $_POST['Message'];

	$conn = new mysqli('sql208.unaux.com','unaux_28218872','ch72htje4bj1zw','unaux_28218872_sample');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(Name, Email, Subject, Message) values(?, ?, ?, ?)");
		$stmt->bind_param("ssss",$Name, $Email, $Subject, $Message);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}

	// $html="<table><tr><td>Name</td><td>$Name</td></tr><tr><td>Email</td><td>$Email</td></tr><tr><td>Subject</td><td>$Subject</td></tr><tr><td>Message</td><td>$Message</td></tr></table>";

	// include('smtp/PHPMailerAutoload.php');
	// $mail= new PHPMailer(true);
	// $mail->isSMTP();
	// $mail->Host="smtp.gmail.com";
	// $mail->Port=587;
	// $mail->SMTPSecure="tls";
	// $mail->SMTPAuth=true;
	// $mail->Username="rajatgoyal.phoenix@gmail.com";
	// $mail->Password="Rajat@1662";
	// $mail->SetFrom("rajatgoyal.phoenix@gmail.com");
	// $mail->addAddress("rajatgoyal.phoenix@gmail.com");
	// $mail->IsHTML(true);
	// $mail->Subject="New Contact Us";
	// $mail->Body=$html;
	// $mail->SMTPOptions=array('ssl'=>array(
	// 	'verify_peer'=>false,
	// 	'verify_peer_name'=>false,
	// 	'allow_self_signed'=>false
	// ));
	// if($mail->send()){
	// 	//echo "Mail send";
	// }else{
	// 	//echo "Error occur";
	// }
	// echo $msg;
