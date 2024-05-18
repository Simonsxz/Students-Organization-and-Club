<?php
use myPHPnotes\Microsoft\Auth;
use myPHPnotes\Microsoft\Handlers\Session;
use myPHPnotes\Microsoft\Models\User;

session_start();

require "vendor/autoload.php";
$auth = new Auth(Session::get("tenant_id"), Session::get("client_id"), Session::get("client_secret"), Session::get("redirect_uri"), Session::get("scopes"));
$tokens = $auth->getToken($_REQUEST['code']);
$accessToken = $tokens->access_token;
$auth->setAccessToken($accessToken);
$user = new User;
//echo "Name: "  . $user->data->getDisplayName() . "<br>";
//echo "Email: " . $user->data->getUserPrincipalName() . "<br>";
$emailString = $user->data->getUserPrincipalName();
$conn = new mysqli('localhost', 'root', '', 'db_soc');
if($conn->connect_error){
    die('Connection Failed: ' .$conn->connect_error);
}else{
    $result = "SELECT * FROM tbl_students WHERE email = '$emailString' ";
    $get_rows = mysqli_query($conn, $result);
    $num_rows = mysqli_num_rows($get_rows);
    //$num_rows = mysqli_num_rows($result);

    if($num_rows > 0){
        $sql = "SELECT access_level FROM tbl_students WHERE email = '$emailString'";
		$access_check = mysqli_query($conn, $sql);

		if (mysqli_num_rows($access_check) > 0) {
			// If the student is found, get the access level
			$row = mysqli_fetch_assoc($access_check);
			$access_level = $row['access_level'];
	
			// Redirect to the appropriate user interface
			if ($access_level == 'ADMIN') {
				header('Location: dashboard.html');
			} else if ($access_level == 'ORGANIZATION') {
				header('Location: OrgsUIAnnouncements.html');
			} else if ($access_level == 'STUDENT') {
				$id_retrieve = "SELECT stud_id FROM tbl_students WHERE email = '$emailString'";
				$set_id = mysqli_query($conn, $id_retrieve);
				$user_id = mysqli_fetch_assoc($set_id);
				$current_id = $user_id['stud_id'];

				$orgQuery = "SELECT organization FROM tbl_students WHERE email = '$emailString'";
				$orgResult = mysqli_query($conn, $orgQuery);
				$orgRow = mysqli_fetch_assoc($orgResult);
				$orgStatus = $orgRow['organization'];

				if($orgStatus == 'NONE'){
					$_SESSION['id'] = $current_id;
					header("Location: studentFirstLog.php?id=$current_id");
				}
				else{
					$_SESSION['id'] = $current_id;
					header("Location: index.php?id=$current_id");
				}	
			} 
		} else {
			echo 'Invalid email';
		}
    }
    else{
        include 'RegisterAccount.php';
        include 'new_user.php';
    }
}
?>