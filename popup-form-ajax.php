<?php
// проверка на спам - просто прерываем выполнение кода, при желании можно и сообщение спамерам вывести
// if( isset( $_POST['comment'] ) || isset( $_POST['message'] ) )
// 	exit;
 
// подключаем WP, можно конечно обойтись без этого, но зачем?
require( dirname(__FILE__) . '/wp-load.php');
 


 //следующий шаг - проверка на обязательные поля, у нас это емайл, имя и сообщение
 // if( isset( $_POST['name'] ) ) {
 
	$headers = array(
		"Content-type: text/html; charset=utf-8",
		
	);


$message;


if ($_POST['name']) {
	$message = '<p><strong>Имя: </strong>'.$_POST['name'].'</p>' ; 
}

if ($_POST['tel']) {
	$message .= '<p><strong>Телефон: </strong>'.$_POST['tel'].'</p>' ; 
}
if ($_POST['email']) {
	$message .= '<p><strong>E-mail: </strong>'.$_POST['email'].'</p>' ; 
}
if ($_POST['mes']) {
	$message .= '<p><strong>Сообщение: </strong>'.$_POST['mes'].'</p>' ; 
}



 $true_mail = wp_mail('pavel470245@gmail.com', 'Письмо с сайта autokosmos.com.ua', $message , $headers);
	if(  $true_mail) {
		header('Location:' . site_url('/?msg=success') );
		exit;
	}
 
 
// }
 
// header('Location:' . site_url('/contact?msg=error') );
// exit;