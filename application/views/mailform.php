<?
header('Refresh: 3; URL=http://www.aclor.com');
$adminaddress = "admin@aclor.com";
$cc="";
$Bcc="";
$siteaddress ="http://www.aclor.com/";
$sitename = "Aclor Inc";

//No need to change anything below ...
// Gets the date and time from your server
$date = date("m/d/Y H:i:s");

// Gets the IP Address
if ($REMOTE_ADDR == "") $ip = "no ip";
else $ip = getHostByAddr($REMOTE_ADDR);

// Gets the POST Headers - the Flash variables
$name = $_POST['name'] ;
$email = $_POST['email'] ;
$company = $_POST['company'] ;
$subject = $_POST['subject'] ;
$comments = $_POST['comments'] ;

//Process the form data!
// and send the information collected in the Flash form to Your nominated email address
if ($email != "" && $comments != "" && $subject != "") {
	//
	mail ("$adminaddress","admin@aclor.com",
	"$name has visited $sitename and has left the following information\n
	Name: $name
	Email: $email
	IP From: $ip

	The visitor $name coment:
	------------------------------
	$comments

	------------------------------" ) ;

	mail ("$Bcc","",
	"$name has visited $sitename and has left the following information\n
	Name: $name
	Email: $email
	IP From: $ip

	The visitor $name coment:
	------------------------------
	$comments

	------------------------------" ) ;

	mail ("$cc","",
	"$name has visited $sitename and has left the following information\n
	Name: $name
	Email: $email
	IP From: $ip

	The visitor $name coment:
	------------------------------
	$comments

	------------------------------" ) ;

/*	Logged Info :
	------------------------------
	Using: $HTTP_USER_AGENT
	Hostname: $ip
	IP address: $REMOTE_ADDR
	Date/Time:  $date","FROM:$adminaddress" ) ;
*/
	//This sends a confirmation to your visitor
	mail ("$email","Thanks for visiting Aclor Inc.",
	"$name,\n
	Thanks for your interest in Aclor Inc. We'll get in touch as soon as possible.
	$sitename
	$siteaddress","FROM:$adminaddress") ;

	//Confirmation is sent back to the Flash form that the process is complete
	$sendresult = "Thanks. Soon you will get an email confirmation.";
	$send_answer = "answer=";
	$send_answer .= rawurlencode($sendresult);
	echo $sendresult;
}
else {
    print "It seems that you forgot something required !! <br/>";
}


?>
