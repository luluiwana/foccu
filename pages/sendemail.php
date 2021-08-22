<?php
if($_POST['sendemail']){
	$myEmail = 'foccuid@gmail.com'; 
	
	$name	= htmlentities($_POST['name']);
	$email	= htmlentities($_POST['email']);
	$message	= htmlentities($_POST['message']);
	
	$pengirim	= 'Dari: '.$name.' <'.$email.'>';
	
	if(mail($myEmail, $message, $pengirim)){
		echo 'SUCCESS: message anda berhasil di kirim. <a href="index.php">Kembali</a>';
	}else{
		echo 'ERROR: message anda gagal di kirim silahkan coba lagi. <a href="index.php">Kembali</a>';
	}
}else{
	header("Location: index.php");
}
?>