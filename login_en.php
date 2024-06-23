<?php
include("vt_conn.php");

// Formdan gelen verileri al
$email2 = $_POST['email'];
$password2 = $_POST['password'];

// Veritabanında kullanıcıyı bulma sorgusu
$sql = "SELECT * FROM users WHERE email='$email2' AND password='$password2'";
$result=mysqli_query($conn,$sql);

// Eğer sorgu sonucu varsa, kullanıcı bulunmuştur
if ($result->num_rows > 0) {

    $ilgilikayit=mysqli_fetch_assoc($result);

    session_start();

    $_SESSION['email']=$ilgilikayit["email"];
    $_SESSION['user_ıd']=$ilgilikayit["user_ıd"];
    $_SESSION['username']=$ilgilikayit["username"];
    
    //echo "<meta http-equiv='refresh' content=';url=/sat_4/Front_End_Files/tr_guest_homescreen.php'>";

    echo '<div style="display:flex; justify-content:center; align-items:center; padding:300px; "><h2><i>Giriş Başarılı, Anasayfaya Yönlendiriliyorsunuz :) </i></h2></div> ';  
     
    // Giriş başarılı olduğunda yönlendirme yap
    header('  Location: /sat_4/Front_End_Files/tr_home.php');
    exit(); // header'dan sonra kodun devam etmemesi için exit() kullanılmalıdır
} else {
    header(' location:/sat_4/Front_End_Files/login.php');
    // Giriş başarısız olduğunda mesaj göster ve bir süre sonra ana sayfaya yönlendir
    echo '<div style="display:flex; justify-content:center; align-items:center; padding:300px; "><h2><i>Giriş Başarısız, Lütfen Tekrar deneyiniz ! </i></h2></div> ';     
}

// Veritabanı bağlantısını kapat
mysqli_close($conn);
?>