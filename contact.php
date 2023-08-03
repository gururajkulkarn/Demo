<?php
//print_r($_POST);
	if(isset($_POST['txt_email']))
	{
			$name				=			$_POST['txt_name'];
			$address			=			$_POST['address'];
			$contact			=			$_POST['txt_phone'];
			$emailid			=			$_POST['txt_email'];
			$Comments			=			$_POST['comments'];
            $sendto				=			$_POST['sendto'];
                        if(empty($sendto))
                        $sendto = "acadkvafsu@gmail.com";
	
		
		$msg	=	"";	
		$msg .="\n<br />Name : ".$name;
		$msg  .="\n<br />Address : ".$address;
		$msg .="\n<br />Contact No : ".$contact;
		$msg .="\n<br />Email Id : ".$emailid;
		$msg .="\n<br />Comments : ".$Comments;
                $headers  = 'MIME-Version: 1.0' . "\r\n";
                $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                $headers .= 'From:'.$emailid."\r\n";
		//mail("acadkvafsu@gmail.com", "Feedback from kvafsu Website", $msg, $headers);
             $yes = mail($sendto, "Feedback from kvafsu Website", $msg, $headers);
	}
	//exit;
	header("location:thanks.html");
	exit;

?>