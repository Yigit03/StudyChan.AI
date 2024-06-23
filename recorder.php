<?php
include('vt_conn.php');
// Oturumu başlatıyorum
session_start();
$username = $_SESSION['username'];
$userid = $_SESSION['user_ıd'];

// Yükleme tarihini alıyorum
date_default_timezone_set('Europe/Istanbul');
$date = date('Y-m-d');

if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    if (isset($_FILES['file']) && $_FILES['file']['error'] == UPLOAD_ERR_OK) 
    {
        $uploadDir = 'vt_store/';
        $uploadFile = $uploadDir . basename($_FILES['file']['name']);
        $filename = $_FILES['file']['name'];
        
        if (!file_exists($uploadDir)) 
        {
            mkdir($uploadDir, 0777, true);
        }

        if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadFile)) 
        {

            echo "Dosya başarılı bir şekilde yüklendi: " . htmlspecialchars($uploadFile);
            $sql_pdf_ekle = "INSERT INTO library (username, documan_name, documan_date) VALUES ('$username','$filename', '$date')";

            if (mysqli_query($conn, $sql_pdf_ekle)) 
            {   
                $sql_total_document= "UPDATE total SET total_document= (SELECT COUNT(*) FROM library)";
                
                echo "<meta http-equiv='refresh' content='url=/sat_4/Front_End_Files/tr_chatdialog.php'>";
                echo '<div style="display:flex; justify-content:center; align-items:center; padding:300px;"><h2><i>İşlem Başarılı. </i></h2></div>';   
                move_uploaded_file($filename , $uploadDir);
            } 
            else 
            {
                
                echo '<div style="display:flex; justify-content:center; align-items:center; padding:300px;"><h2><i>Hatalı İşlem yapıldı!';
                echo " Hata: " . $sql_pdf_ekle . "<br>" . mysqli_error($conn);
                echo '</i></h2></div>';    
                echo "<meta http-equiv='refresh' content='url=/sat_4/Front_End_Files/login.html'>";
            }
        } 
        else 
        {
            echo "Dosya yüklenirken bir hata oluştu.";
        }
    } 
    else 
    {
        echo "Yüklenen dosya bulunamadı veya yükleme sırasında bir hata oluştu.";
    }
} 
else {
   echo "Geçersiz istek.";
}

 
