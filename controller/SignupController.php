<?php
include "../view/head.inc.php";
include "dbConnection.php";
include "../model/User.class.php";
include "../model/UserManager.class.php";



$userMgr = new UserManager();


if(isset($_POST['SignUp_Submit'])){					#when register button is clicked

	$name 	  			= $_POST['name'];
	$email   			= $_POST['email'];
	$password 			= md5(md5($_POST['password']));
	$verification_code	= random_int(10000, 99999);
	$status				= "0";
	$id 				= "";
	$user_type			= "Admin";		//User Type Can be Facility Manager , Property Manager , Operation Manager , Admin


	$query_check = $db2->query( "SELECT `User_ID` FROM `user` WHERE `Email` = '$email' " ); #check if email already exists
   	$user_id_check  = $query_check->fetch( PDO::FETCH_ASSOC );

   	
	if($user_id_check == null){

		$user = new User($id,$name,$password,$user_type,$email,$verification_code,$status);		#calling user class

		if ( $userMgr->addUser( $user ) ) {				#adding User in DB


			// $to = $email;
			// $subject = "Test Email";
			// $message = "Verification Code : " . $verification_code;
			// $headers = "From: alsahhim9787@gmail.com";

			
			// $mailSuccess = mail($to, $subject, $message, $headers);

			// if ($mailSuccess) {

			// 	#Redirect to Verification code Page

			//     // header( "location: ../view/index.php" );
			// }

			header( "location: ../view/verification.php" );
		} 

	}else{

		#Print Error User Exists
		header( "location: ../view/log_in_EN.php" );
	}

}else if(isset($_POST['Verification_Submit'])){
                                       
	$name 	  			= "";
	$email   			= $_POST['email'];
	$password 			= "";
	$verification_code	= $_POST['verification_code'];
	$status				= "1";
	$id 				= "";
	$user_type			= "";

	
	$query_check = $db2->query( "SELECT `Verification_Code` FROM `user` WHERE `Email` = '$email' " ); #get Verification Code
   	$verification_check  = $query_check->fetch( PDO::FETCH_ASSOC );

   	$v_c = implode(', ', $verification_check); 


	if($v_c == $verification_code){

		$user = new User($id,$name,$password,$user_type,$email,$verification_code,$status);		#calling user class

		if ( $userMgr->editUserStatus( $user ) ) {				#adding User in DB
				#Success Msg 
		
				

			    header( "location: ../view/log_in_EN.php" );
		
		} 
	}else{
		#Wrong Email or Verification Code Error
	
		#Redirect to Verification code Page
				

			    header( "location: ../view/verification.php" );
	}
}
//else if(isset($_POST['New_Password_Verification_Submit'])){
                                       
// 	$name 	  			= "";
// 	$email   			= $_POST['email'];
// 	$password 			= md5(md5($_POST['password']
// 	$verification_code	= $_POST['verification_code'];
// 	$status				= "1";
// 	$id 				= "";
// 	$user_type			= "";

// 	//Check Verification , Email  and create new Password
// 	$query_check = $db2->query( "SELECT `Verification_Code` FROM `user` WHERE `Email` = '$email' " ); #get Verification Code
//    	$verification_check  = $query_check->fetch( PDO::FETCH_ASSOC );

   	
// 	if($verification_check == $verification_code){

// 		$user = new User($id,$name,$password,$user_type,$email,$verification_code,$status);		#calling user class

// 		if ( $userMgr->editUserStatus( $user ) ) {				#adding User in DB
// 				#Success Msg 
// 				#Redirect to Login Page

// 			    // header( "location: ../login.php" );
		
// 		} 
// 	}else{
// 		#Wrong Email or Verification Code Error
// 		#Redirect to Verification code Page

// 			    // header( "location: ../VerificationPage.php" );
// 	}
// }
else if(isset($_POST['Signin_Submit'])){

	$email = $_POST['email'];
    $password = md5(md5($_POST['password']));

    $query    = $db2->query( "SELECT User_ID , Name, User_Type, Password, Email, Status FROM user WHERE Email = '$email' AND  Password = '$password' AND Status = '1'");
    $user 	  = $query->fetchAll( PDO::FETCH_ASSOC );

    $query2    = $db2->query( "SELECT User_ID , Name, User_Type, Password, Email, Status FROM user WHERE Email = '$email' AND  Password = '$password' AND Status = '0'");
    $user2 	  = $query->fetchAll( PDO::FETCH_ASSOC );

    #if matches Logs in

    if (!empty($user)) {

      // echo "Logged in";

      foreach ( $user as $users ){
      	
	      	$_SESSION['user_name'] = $users['Name'];
	        $_SESSION['user_id'] = $users['User_ID'];
	        $_SESSION['user_password'] = $users['Password'];
	        $_SESSION['user_type'] = $users['User_Type'];
	        $_SESSION['user_email'] = $users['Email'];
	        $_SESSION['user_status'] = $users['Status'];
	        $_SESSION['valid'] = true;
    	}

    	if($_SESSION['user_type'] == "Admin"){
    		header( "location: ../view/admin_portal.php" );
    	}else{
    		header( "location: ../view/index.php" );
    	}

    } #else err for wrong password or username
    elseif (!empty($user2)) {
    	
    	#Account not Verrified Yet

    	header( "location: ../view/verification.php" );
    }
    else{


  		$_SESSION['wrong_password'] = true;

  		#Back to Login Page Print Wrong Password or Email or Not Verified
  		header( "location: ../view/log_in_EN.php" );
      
    } 
}


else{
	die("Error !");
}

?>