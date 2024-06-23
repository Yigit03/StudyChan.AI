<?php
include("vt_conn.php"); // Veritabanı bağlantı dosyasını dahil ediyoruz
//oturumdan gelen veriler
session_start(); // Kullanıcı oturumunu başlatıyoruz
$user_id=$_SESSION['user_ıd']; // Oturumdan kullanıcı kimliğini alıyoruz
$user_password=$_SESSION['password'];
//FORM dan gelen veriler
$update_name = $_POST['username']; // Yeni kullanıcı adı değerini post ile alıyoruz
$update_email = $_POST['new_email']; // Yeni cinsiyet değerini post ile alıyoruz; // Yeni telefon değerini post ile alıyoruz
$update_last_pass = $_POST['last_pass']; // Yeni şifre değerini post ile alıyoruz
$update_new_pass = $_POST['new_pass']; // Yeni şifre doğrulama değerini post ile alıyoruz
//right profil den gelen 
$update_hakkinda = $_POST['new_hakkinda'];

/*******************************************************/
if(!empty($update_name))
{
    // Kullanıcı adı güncelleme sorgusu
    $sql_update_name="UPDATE users SET username='$update_name' WHERE user_ıd='$user_id'";

    if(mysqli_query($conn, $sql_update_name)) 
    {
        // Başarılı güncelleme mesajı
        echo '<div style="display:flex; justify-content:center; align-items:center; padding:300px; "><h2><i>Kullanıcı adı Güncellendi ! </i></h2></div> ';
        header('Location: /sat_4/Front_End_Files/tr_profile.php');
    } 
    else 
    {
        // Güncelleme hatası
        echo "Kullanıcı Adı Güncellenemedi ! " . mysqli_error($conn);
    }
}
else if(!empty($update_new_pass))
{
    if($user_password != $update_last_pass)
{
    // Şifreler eşleşmiyorsa hata mesajı verip sayfayı yenile
    echo '<div style="display:flex; justify-content:center; align-items:center; padding:300px; "><h1>';
    header('Location: /sat_4/Front_End_Files/tr_profile.php');
    die("<i> Şifreler Eşleşmiyor , Lütfen Tekrar Deneyiniz ! </i>");
    echo "</h1></div>";
}
    // Şifre güncelleme sorgusu
    $sql_update_pass="UPDATE users SET password='$update_new_pass' WHERE user_ıd='$user_id'";

    if(mysqli_query($conn, $sql_update_pass)) 
    {
        // Başarılı güncelleme mesajı
        echo '<div style="display:flex; justify-content:center; align-items:center; padding:300px; "><h2><i>Şifre Güncellendi ! </i></h2></div> ';
        header('Location: /sat_4/Front_End_Files/tr_profile.php');
    } 
    else 
    {
        // Güncelleme hatası
        //echo "Şifre Güncellenemedi ! " . mysqli_error($conn);
    }
}
else if(!empty($update_email))
{
    // Şifre güncelleme sorgusu
    $sql_update_email="UPDATE users SET telefon='$update_email' WHERE user_ıd='$user_id'";

    if(mysqli_query($conn, $sql_update_email)) {
        // Başarılı güncelleme mesajı
        echo '<div style="display:flex; justify-content:center; align-items:center; padding:300px; "><h2><i>email Güncellendi ! </i></h2></div> ';
        header('Location: /sat_4/Front_End_Files/tr_profile.php');
    } else {
        // Güncelleme hatası
       // echo "Şifre Güncellenemedi ! " . mysqli_error($conn);
    }
}
else if(!empty($update_hakkinda))
{
    // Şifre güncelleme sorgusu
    $sql_update_hakkinda="UPDATE users SET hakkinda='$update_hakkinda' WHERE user_ıd='$user_id'";

    if(mysqli_query($conn, $sql_update_hakkinda)) 
    {
        // Başarılı güncelleme mesajı
        echo '<div style="display:flex; justify-content:center; align-items:center; padding:300px; "><h2><i>hakkinda Güncellendi ! </i></h2></div> ';
        header('Location: /sat_4/Front_End_Files/tr_profile.php');
    } 
    else 
    {
        // Güncelleme hatası
        //echo "Şifre Güncellenemedi ! " . mysqli_error($conn);
    }
}
else
{
    // Güncelleme bilgisi eksik hatası
    echo '<div style="display:flex; justify-content:center; align-items:center; padding:300px; "><h1>';
    header('Location: /sat_4/Front_End_Files/tr_profile.php');
    echo "İşlem Başarısız" . mysqli_error($conn);
    die("<i> Güncelleme İşlemi Başarısız ! </i>");
    echo "</h1></div>";
}

mysqli_close($conn);
?>