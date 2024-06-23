<?php
include("vt_conn.php");

//değişkene bir değer girildi mi ?
if(!isset($_POST["username"]))
{
    // eğer değer girilmemişse hata mesajı gönder.
    echo"Geçersiz Kullanıcı Adı Girdiniz.";
    
}
else
{
    //değişkene girilen değer boş değer mi ? 
    if(!empty($_POST["username"]))
    {
        //herhangi bir sorun yoksa formdan gelen veriyi değişkene aktar.
        $username=$_POST["username"];
    }
    else
    {
        //eğer boş değer girilmişse hata mesajı gönder.
        echo"Kullanıcı Adına Boş Değer Giremezsiniz !";
    }
}
//değişkene bir değer girildi mi ?
if(!isset($_POST["email"]))
{
    // eğer değer girilmemişse hata mesajı gönder.
    echo"Geçersiz email Girdiniz.";
    
}
else
{
    //değişkene girilen değer boş değer mi ? 
    if(!empty($_POST["email"]))
    {
        //herhangi bir sorun yoksa formdan gelen veriyi değişkene aktar.
        $email=$_POST["email"];
    }
    else
    {
         //eğer boş değer girilmişse hata mesajı gönder.
        echo"email Boş Değer Olamaz !";
    }
}
//değişkene bir değer girildi mi ?
if(!isset($_POST["password"]))
{
   // eğer değer girilmemişse hata mesajı gönder.
   echo"Geçersiz şifre Denemesi"; 
}
else
{
     //değişkene girilen değer boş değer mi ? 
     if(!empty($_POST["password"]))
     {
         //herhangi bir sorun yoksa formdan gelen veriyi değişkene aktar.
         $password=$_POST["password"];
     }
     else
     {
          //eğer boş değer girilmişse hata mesajı gönder.
    echo"Şifre Boş Değer Olamaz !";
     }
}

// Veri Tabanında böyle bir kayıt var mı kontrol ediyoruz...
$sql_email_control = "SELECT email FROM users WHERE email='$email';";
//sorgudan dönen değerleri result_control değişkeninde tutulmuştur...
$result_email_control=mysqli_query($conn,$sql_email_control);
//kayıt var mı yok mu kontrol ediliyor...
if ($result_email_control->num_rows > 0 ) 
{
    // eğer email daha önce kayıtlıysa işlemi iptal et.
    echo '<div style="display:flex; justify-content:center; align-items:center; padding:300px; "><h1>';
    header(" Location:/sat_4/Front_End_Files/register_tr.html");
    die("<i> Kayıtlı Bir e-posta kullandınız , Lütfen Geçerli bir e-posta adresi kullanın veya Giriş yapın </i>");
    echo "</h1></div>";
}

// Veri Tabanında böyle bir kayıt var mı kontrol ediyoruz...
$sql_username_control = "SELECT username FROM users WHERE username='$username';";
//sorgudan dönen değerleri result_control değişkeninde tutulmuştur...
$result_username_control=mysqli_query($conn,$sql_username_control);
//kayıt var mı yok mu kontrol ediliyor...
if ($result_username_control->num_rows > 0 ) 
{
    // eğer kullanıcı adı başka bir kullanıcı tarafından kullanılıyorsa işlemi iptal et.
    echo '<div style="display:flex; justify-content:center; align-items:center; padding:300px; "><h1>';
    header(" Location:/sat_4/Front_End_Files/register_tr.html");
    die("<i> Seçtiğiniz Kullanıcı Adı Başka Bir Kullanıcı Tarafından Kullanılıyor. </i>");
    echo "</h1></div>";
}

//kullanıcı kaydını veri tabanına ekler...
$sql_kayıt="INSERT INTO users(username,password,email) VALUES ('$username','$password','$email')";
// sorgu çalıştı mı hata var mı ?
if (mysqli_query($conn,$sql_kayıt)) 
{
    //toplam kullanıcı sayısını günceller...
    $sql_total_user= "UPDATE users SET total_user= (SELECT COUNT(*) FROM users)";

    echo '<div style="display:flex; justify-content:center; align-items:center; padding:300px; "><h2><i>Kayıt Başarı ile Gerçekleşti :)</i></h2></div> ';
    header(" Location:/sat_4/Front_End_Files/register_tr.html");
    
    //mesajı bu şekilde de verebilirdik ancak giriş ekranına atmak için kullanıcının alert box a cevap vermesini bekliyor.
    //echo "<script>alert('Kayıt başarıyla tamamlandı!');</script>";
} 
else 
{   
    echo '<div style="display:flex; justify-content:center; align-items:center; padding:300px; "><h2>';
    echo "<i> Hata: " . $sql . "<br>" . $conn.mysqli_error() ."</i>";
    echo "</h2></div>";
    header("Location:/sat_4/Front_End_Files/register_tr.html");
}

// Veritabanı bağlantısını kapat
mysqli_close($conn);
?>