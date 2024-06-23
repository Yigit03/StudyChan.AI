<?php
// Veritabanı bağlantısı
include("vt_conn.php");

// Formdan gelen verileri al
session_start();
$user_id=$_SESSION['user_ıd'];
$name = $_SESSION['username'];

$email = $_POST['mail'];
$number = $_POST['telephone'];
$message = $_POST['message'];

// Girilen e-postanın veri tabanında kayıtlı olup olmadığını kontrol et
$sql_check_email = "SELECT * FROM users WHERE email = '$email'";
$result_check_email=mysqli_query($conn,$sql_check_email);

// Eğer e-posta kayıtlı değilse, formdan alınan verileri contact tablosuna ekle
if ($result_check_email -> num_rows < 1) {
    echo "";
    echo '<div style="display:flex; justify-content:center; align-items:center; padding:300px; "><h2><i>Kayıtlı olmayan e-posta kullandınız. Lütfen Kayıt İşleminizi Gerçekleştiriniz.</i></h2></div> ';
    header('Location: /sat_4/Front_End_Files/register.html');
} 
else 
{
    $sql_insert_contact = "INSERT INTO contact (user_ıd, username, mail, telephone, message) VALUES ('$user_id','$name', '$email', '$number', '$message')";

    if (mysqli_query($conn,$sql_insert_contact)) 
    {
        echo '<div style="display:flex; justify-content:center; align-items:center; padding:300px; "><h2><i>Mesajınız Başarı İle Teslim Edilmiştir :) </i></h2></div> ';

    } 
    else 
    {
        echo "Hata: " . $sql_insert_contact . "<br>" . $conn->error;
    }
    header('Location: /sat_4/Front_End_Files/tr_home.php');
}

// Veritabanı bağlantısını kapat
mysqli_close($conn);
?>





