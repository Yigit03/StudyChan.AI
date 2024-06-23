<?php
include('vt_conn.php');
// oturumdan kullanıcı İD sini aldım.
session_start();
$oturum_id=$_SESSION['user_ıd'];
// id ile eşleşen güncel isim bilgisini çektim
$sql_profil="SELECT * FROM users WHERE user_ıd='$oturum_id'";
$result_profil=mysqli_query($conn,$sql_profil);
//sorgudan gelen cevabı değişkene aktardım
$profilkayit=mysqli_fetch_assoc($result_profil);
$name=$profilkayit['username'];

?>
<!DOCTYPE html>
<html lang="tr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <title> Studychan.AI | Library</title>
    <link rel="stylesheet" type="text/css" href="/sat_4/Style_Files/cakcuk.css">
  </head>
    <body>

      <section class="_58ce83d8">
        <div class="_5859e61e">
          <div class="_157dc3d3">
            <nav id="kqqdzrxru9" class="_e45b5504 um-nav-wrapper um-classic">
              <div class="um-nav-children">
                <div class="_32caed59" style="--gap:1.5;font-size:32px">
                  <a href="tr_home.php">
                    <div class="_8c82ce03" style="--scale:1">
                      <img src="./studychanaiv2_files/uhu1umh8ee65gu25.png" class="_b9923f60" alt="Untitled design.png">
                    </div>
                    <span class="_11650ac9"> Studychan . AI</span>
                  </a>
                </div>
              </div>
              <ul class="um-nav-links"> </ul>
              <div class="um-nav-buttons">
                <a href="tr_home.php" id="qopultom2t" class="_e72e75b2 btn">
                  <svg xmlns="http://www.w3.org/2000/svg" class="um-icon _488bdcb8" fill="currentColor" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"> </path>
                  </svg>
                  <span> Anasayfa</span>
                </a>
                <a href="tr_library.php" id="p5usdyhrr8n" class="btn primary">
                  <svg xmlns="http://www.w3.org/2000/svg" class="um-icon _488bdcb8" fill="currentColor" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M18 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zM6 4h5v8l-2.5-1.5L6 12V4z"></path>
                  </svg>
                  <span>Kütüphane</span>
                </a>
                <a href="tr_aboutus.php" id="ssqeillje58" class="_5e4c9c98 btn">
                  <svg xmlns="http://www.w3.org/2000/svg" class="um-icon _488bdcb8" fill="currentColor" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"></path>
                  </svg>
                  <span>Hakkımızda</span>
                </a>
                <a href="tr_profile.php" id="f2t9ofnrkyg" class="_efb43553 btn">
                  <img class="um-icon _488bdcb8" src="./studychanaiv2_files/et6nkzsq7uf3q8zc.svg" alt="users.svg" style="position:relative;width:24px;height:24px;display:block;object-fit:contain">
                  <span><?php echo  $name;?></span>
                  <svg width="1em" viewBox="0 0 15 12" xmlns="http://www.w3.org/2000/svg" class="um-arrow">
                    <path d="M9.6 7H1a1 1 0 1 1 0-2h8.6L7 2.4A1 1 0 0 1 8.4 1l4.3 4.2c.2.3.3.5.3.8 0 .3-.1.5-.3.7L8.4 11A1 1 0 1 1 7 9.5L9.6 7z" fill="currentColor"></path>
                  </svg>
                </a>
                <a href="#" id="wf60s9bfd9r" class="_c11a70a3 btn btn--icon">
                  <img class="um-icon _488bdcb8" src="./studychanaiv2_files/mezfi021uumxumzs.svg" alt="globe.svg" style="position:relative;width:24px;height:24px;display:block;object-fit:contain">
                </a>
              </div>
            </nav>
            <button id="kqqdzrxru9-drawerTrigger" class="um-nav-drawerTrigger um-hidden" title="Open Mobile Menu"> </button>
            <div id="kqqdzrxru9-drawer" class="_e45b5504 um-nav-drawer um-hidden">
              <header>
                <button class="um-nav-drawerClose">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="18" y1="6" x2="6" y2="18"> </line>
                    <line x1="6" y1="6" x2="18" y2="18"> </line>
                  </svg>
                </button>
              </header>
              <div class="um-drawer-links"> </div>
              <div class="um-drawer-buttons">
                <a href="tr_home.php" id="d_qopultom2t" class="_e72e75b2 btn">
                  <svg xmlns="http://www.w3.org/2000/svg" class="um-icon _488bdcb8" fill="currentColor" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"> </path>
                  </svg>
                  <span>Anasayfa</span>
                </a>
                <a href="#" id="d_p5usdyhrr8n" class="btn primary">
                  <svg xmlns="http://www.w3.org/2000/svg" class="um-icon _488bdcb8" fill="currentColor" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M18 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zM6 4h5v8l-2.5-1.5L6 12V4z"> </path>
                  </svg>
                  <span>Kütüphane</span>
                </a>
                <a href="tr_aboutus.php" id="d_ssqeillje58" class="_5e4c9c98 btn">
                  <svg xmlns="http://www.w3.org/2000/svg" class="um-icon _488bdcb8" fill="currentColor" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"></path>
                  </svg>
                  <span>Hakkımızda</span>
                </a>
                <a href="tr_profile.php" id="d_f2t9ofnrkyg" class="_efb43553 btn">
                  <img class="um-icon _488bdcb8" src="./studychanaiv2_files/et6nkzsq7uf3q8zc.svg" alt="users.svg" style="position:relative;width:24px;height:24px;display:block;object-fit:contain">
                  <span>Profil</span>
                  <svg width="1em" viewBox="0 0 15 12" xmlns="http://www.w3.org/2000/svg" class="um-arrow">
                    <path d="M9.6 7H1a1 1 0 1 1 0-2h8.6L7 2.4A1 1 0 0 1 8.4 1l4.3 4.2c.2.3.3.5.3.8 0 .3-.1.5-.3.7L8.4 11A1 1 0 1 1 7 9.5L9.6 7z" fill="currentColor"></path>
                  </svg>
                </a>
                <a href="#" id="d_wf60s9bfd9r" class="_c11a70a3 btn btn--icon">
                  <img class="um-icon _488bdcb8" src="./studychanaiv2_files/mezfi021uumxumzs.svg" alt="globe.svg" style="position:relative;width:24px;height:24px;display:block;object-fit:contain">
                </a>
              </div>
            </div>
            <script>
                !function() {
                const e = document.getElementById('kqqdzrxru9');
                if (!e) return;

                const t = document.getElementById('kqqdzrxru9-drawerTrigger'),
                      n = document.getElementById('kqqdzrxru9-drawer');

                document.addEventListener('click', function(event) {
                  if (!n.contains(event.target) && event.target !== t) {
                    n.classList.add('um-hidden');
                  }
                });

                const d = n.querySelector('.um-nav-drawerClose'),
                      s = n.querySelectorAll('.um-drawer-links > li > button'),
                      i = e.querySelector('.um-nav-children'),
                      r = e.querySelector('.um-nav-links'),
                      c = e.querySelector('.um-nav-buttons');

                t.addEventListener('click', function() {
                  n.classList.remove('um-hidden');
                });

                d.addEventListener('click', function() {
                  n.classList.add('um-hidden');
                });

                s.forEach(function(button) {
                  button.addEventListener('click', function() {
                    this.parentNode.classList.toggle('um-open');
                  });
                });

                let o = 0,
                    u = true;

                function a() {
                  if (!u) {
                    o = (i?.offsetWidth || 0) + (r?.offsetWidth || 0) + (c?.offsetWidth || 0);
                  }
                  l();
                }

                function l() {
                  if (e.offsetWidth - 10 < o) {
                    u = true;
                    e.classList.add('um-hidden');
                    t.classList.remove('um-hidden');
                  } else {
                    u = false;
                    e.classList.remove('um-hidden');
                    t.classList.add('um-hidden');
                    n.classList.add('um-hidden');
                  }
                }

                new ResizeObserver(l).observe(document.body);
                if (i) new ResizeObserver(a).observe(i);
                if (c) new ResizeObserver(a).observe(c);
                if (r) new ResizeObserver(a).observe(r);

                a();
                l();
              }();
            </script>
          </div>
        </div>
      </section>

      <section class="EgeYazisi">
        <div class="wr">
          <div class="_4d01d81a">
            <div class="_515a6cb2">
              <a href="tr_home.php" class="_f2f2ae5f">
                <span> 2024 Ege Üniversitesi Bilgisayar Programcılığı</span>—<span>Yeni Nesil PDF Okuyucu</span>
              </a>
                <header class="_2abb7848">
                  <h1 class="_061c53c9">
                    <strong> <span class="um-gradient-text" style="--from:#3a6186;--to:#89253e;--angle:45deg"> Yüzlerce Konu ,</span></strong>
                            <span class="um-gradient-text" style="--from:#3a6186;--to:#89253e;--angle:45deg"> Tek Kütüphane !</span>           
                  </h1><br><br>
                  <p class="_6685fd13">
                    <span class="um-gradient-text" style="--from:#3a6186;--to:#89253e;--angle:45deg"> Sizin için özel olarak hazırlanmış Kütüphanemize hoşgeldiniz.</span><br><br>
                    <span class="um-gradient-text" style="--from:#3a6186;--to:#89253e;--angle:45deg"> Burada kullanıcılarımızın daha önce yapay zekamıza okuttuğu PDF dosyalarını moderatörlerimiz inceleyip kütüphanemize eklemiştir. Buradaki dökümanlar ile çalışmanızı kuvvetlendirebilirsiniz.</span>
                  </p>
                  <p class="_6685fd13">
                    <span class="um-gradient-text" style="--from:#3a6186;--to:#89253e;--angle:45deg"> Detaylı olarak filtreleme yapmak isterseniz :</span><br><br>
                  </p>
                    <div class="select-container">

                      <form action="/sat_4/Front_End_Files/tr_library_filtre.php" method="post" enctype="multipart/form-data">
                        <select name="kategori">
                            <option selected value="" >PDF Kategorisi</option>
                            <option value="Fizik">Fizik</option>
                            <option value="Kimya">Kimya</option>
                            <option value="bilgisayar">bilgisayar</option>
                        </select>
                        <select name="tarih" >
                            <option selected value="">PDF Tarihi</option>
                            <option value="Son 1 Hafta">Son 1 Hafta</option>
                            <option value="Son 3 Ay">Son 3 Ay</option>
                            <option value="Son 1 Yıl">Son 1 Yıl</option>
                        </select>
                        <select name="puan">
                            <option selected value="">PDF Ortalama Puan</option>
                            <option selected value="">PDF Ortalama Puan</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                        <button id="pm8n7evrdum" class="Sorgula">Kütüphanede Ara</button>
                        </form>
                    </div>             
                </header>
            </div>
          </div>
        </div>
      </section>

      <section class="_ab6a7701">
        <div class="wr">
          <header class="_dc7e24f4">
            <h2 class="_05a02d8e">
              <span class="um-gradient-text" style="--from:#3a6186;--to:#89253e;--angle:45deg">Genel Kütüphanemiz :</span>
            </h2>
          </header>
          <br><br>
          <div class="_daa84547">
<?php
//formdan gelen verileri aldım.
//<!-------------Kategori Bilgisi-------------->
$kategori=$_POST['kategori'];
//<!--------------tarih Bilgisi---------------->
  if ($_POST['tarih'] == 'Son 1 Hafta')
  {
    $bugün = date('Y-m-d');
    $backdate = date('Y-m-d', strtotime('-1 week'));
  }
  else if($_POST['tarih'] == 'Son 3 Ay')
  {
    $bugün = date('Y-m-d');
    $backdate = date('Y-m-d', strtotime('-3 months'));
  }
  else
  {
    $bugün = date('Y-m-d');
    $backdate = date('Y-m-d', strtotime('-1 years'));
  }

  //<!----------------------------------------------->
  strtotime($bugün);
  strtotime($backdate);

//<!---------------puan Bilgisi------------------->
$puan=$_POST['puan'];
 //if($_POST['puan'] == '')
  // {//   $min_puan = 0;
  //  ax_puan = 1;
  // }// else if($_POST['puan'] = '1-2')
  // {//   $min_puan = 1;
  //  ax_puan = 2;
  // }// else if($_POST['puan'] = '2-3')
  // {//   $min_puan = 2;
  //  ax_puan = 3;
  // // else if($_POST['puan'] = '3-4')
  // {
  //   $min_puan = 3;
  //   $max_puan = 4;
  // }
  // else if($_POST['puan'] = '4-5')
  // {
  //   $min_puan = 4;
  //   $max_puan = 5;
  // }
  // else if($_POST['puan'] = '5-6')
  // {
  //   $min_puan = 5;
  //   $max_puan = 6;
  // }
  // else if($_POST['puan'] = '6-7')
  // {
  //   $min_puan = 6;
  //   $max_puan = 7;
  // }
  // else if($_POST['puan'] == '7-8')
  // {
  //   $min_puan = 7;
  //   $max_puan = 8;
  // }
  // else if($_POST['puan'] = '8-9')
  // {
  //   $min_puan = 8;
  //   $max_puan = 9;
  // }
  // else if($_POST['puan'] = '9-10')
  // {
  //   $min_puan = 9;
  //   $max_puan = 10;
  // }
  // else 
  // {
  //   $min_puan = 1;
  //   $max_puan = 10;
  // }

  if(!isset($_POST['puan']))
  {
    if(!isset($_POST['tarih']))
    {

    }
  }

// filtrelenen verileri çekecek olan SQL sorgusunu yazıyorum
  $sql_filtre = "SELECT *
                FROM library
                WHERE documan_category = '$kategori'
                AND documan_point='$puan'

                ";

$result_filtre = mysqli_query($conn,$sql_filtre);

  if ($_SERVER["REQUEST_METHOD"] == "POST") 
  {
    if ($result_filtre->num_rows > 0) 
    {
      while($row = $result_filtre->fetch_assoc()) 
      {
        echo '<div class="_924d9844">';
        echo '<svg xmlns="http://www.w3.org/2000/svg" class="um-icon _60213da4" fill="currentColor" width="24" height="24" viewBox="0 0 24 24">';  
        echo '<path d="M4 6H2v14c0 1.1.9 2 2 2h14v-2H4V6zm16-4H8c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-1 9H9V9h10v2zm-4 4H9v-2h6v2zm4-8H9V5h10v2z"></path>';    
        echo '</svg>';  
        echo "<h3 class='_58b23f43'><span style='color:rgb(0, 0, 0)'>".$row['documan_name']."</span></h3>";  
        echo '<span class="_34b9f5ea">';  
        echo '<span style="color:rgb(255, 255, 255)">';    
        echo ' &lt;p&gt;<br>';       
        echo "-&gt;".$row['documan_category']."<br>";      
        echo "-&gt;".$row['documan_point']."<br>";      
        echo "-&gt;".$row['username']."<br>";      
        echo '</span>';    
        echo '</span>';  
        echo '<button id="pm8n7evrdum" class="_f8f654da btn"><span>Gözat</span></button>';  
        echo '</div>';
      }
    }
  }
?>
            <!-- <div class="_924d9844">
              <svg xmlns="http://www.w3.org/2000/svg" class="um-icon _60213da4" fill="currentColor" width="24" height="24" viewBox="0 0 24 24">
                <path d="M4 6H2v14c0 1.1.9 2 2 2h14v-2H4V6zm16-4H8c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-1 9H9V9h10v2zm-4 4H9v-2h6v2zm4-8H9V5h10v2z"></path>
              </svg>
              <h3 class="_58b23f43"><span style="color:rgb(0, 0, 0)">Veri Tabanı Veri 2</span></h3>
              <span class="_34b9f5ea">
                <span style="color:rgb(255, 255, 255)">
                    &lt;p&gt;<br>
                  -&gt; 1. Madde Konu<br>
                  -&gt; 2. Madde Konu<br>
                  -&gt; 3. Madde Konu<br>
                </span>
              </span>
              <button id="pm8n7evrdum" class="_f8f654da btn"><span>Gözat</span></button>
            </div>
            <div class="_924d9844">
              <svg xmlns="http://www.w3.org/2000/svg" class="um-icon _60213da4" fill="currentColor" width="24" height="24" viewBox="0 0 24 24">
                <path d="M4 6H2v14c0 1.1.9 2 2 2h14v-2H4V6zm16-4H8c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-1 9H9V9h10v2zm-4 4H9v-2h6v2zm4-8H9V5h10v2z"></path>
              </svg>
              <h3 class="_58b23f43"><span style="color:rgb(0, 0, 0)">Veri Tabanı Veri 3</span></h3>
              <span class="_34b9f5ea">
                <span style="color:rgb(255, 255, 255)">
                    &lt;p&gt;<br>
                  -&gt; 1. Madde Konu<br>
                  -&gt; 2. Madde Konu<br>
                  -&gt; 3. Madde Konu<br>
                </span>
              </span>
              <button id="pm8n7evrdum" class="_f8f654da btn"><span>Gözat</span></button>
            </div>
            <div class="_924d9844">
              <svg xmlns="http://www.w3.org/2000/svg" class="um-icon _60213da4" fill="currentColor" width="24" height="24" viewBox="0 0 24 24">
                <path d="M4 6H2v14c0 1.1.9 2 2 2h14v-2H4V6zm16-4H8c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-1 9H9V9h10v2zm-4 4H9v-2h6v2zm4-8H9V5h10v2z"></path>
              </svg>
              <h3 class="_58b23f43"><span style="color:rgb(0, 0, 0)">Veri Tabanı Veri 1</span></h3>
              <span class="_34b9f5ea">
                <span style="color:rgb(255, 255, 255)">
                    &lt;p&gt;<br>
                  -&gt; 1. Madde Konu<br>
                  -&gt; 2. Madde Konu<br>
                  -&gt; 3. Madde Konu<br>
                </span>
              </span>
              <button id="pm8n7evrdum" class="_f8f654da btn"><span>Gözat</span></button>
            </div>
            <div class="_924d9844">
              <svg xmlns="http://www.w3.org/2000/svg" class="um-icon _60213da4" fill="currentColor" width="24" height="24" viewBox="0 0 24 24">
                <path d="M4 6H2v14c0 1.1.9 2 2 2h14v-2H4V6zm16-4H8c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-1 9H9V9h10v2zm-4 4H9v-2h6v2zm4-8H9V5h10v2z"></path>
              </svg>
              <h3 class="_58b23f43"><span style="color:rgb(0, 0, 0)">Veri Tabanı Veri 2</span></h3>
              <span class="_34b9f5ea">
                <span style="color:rgb(255, 255, 255)">
                    &lt;p&gt;<br>
                  -&gt; 1. Madde Konu<br>
                  -&gt; 2. Madde Konu<br>
                  -&gt; 3. Madde Konu<br>
                </span>
              </span>
              <button id="pm8n7evrdum" class="_f8f654da btn"><span>Gözat</span></button>
            </div>
            <div class="_924d9844">
              <svg xmlns="http://www.w3.org/2000/svg" class="um-icon _60213da4" fill="currentColor" width="24" height="24" viewBox="0 0 24 24">
                <path d="M4 6H2v14c0 1.1.9 2 2 2h14v-2H4V6zm16-4H8c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-1 9H9V9h10v2zm-4 4H9v-2h6v2zm4-8H9V5h10v2z"></path>
              </svg>
              <h3 class="_58b23f43"><span style="color:rgb(0, 0, 0)">Veri Tabanı Veri 3</span></h3>
              <span class="_34b9f5ea">
                <span style="color:rgb(255, 255, 255)">
                    &lt;p&gt;<br>
                  -&gt; 1. Madde Konu<br>
                  -&gt; 2. Madde Konu<br>
                  -&gt; 3. Madde Konu<br>
                </span>
              </span>
              <button id="pm8n7evrdum" class="_f8f654da btn"><span>Gözat</span></button>
            </div> -->
            
          </div>
        </div>
      </section>
<?php
      $sql = "SELECT * FROM total";
// mysqli_query fonksiyonuyla SQL sorgusunu çalıştırıyorum ve sonucu $result değişkenine atıyorum.
$result = mysqli_query($conn, $sql);
// Eğer sorgu sonucu satır sayısı 0'dan büyükse, yani tablo boş değilse, aşağıdaki işlemleri yap.
if($result->num_rows > 0)
{
  // Sorgudan gelen her satırı fetch_assoc fonksiyonuyla dizi olarak al ve $row değişkenine ata.
  while($row = $result->fetch_assoc()){
    // 'total_users' sütunundaki değeri $_users değişkenine ata.
    $_users = $row['total_users'];
    // 'total_documents' sütunundaki değeri $_document değişkenine ata.
    $_document = $row['total_documents'];
  }
  // Şu anki tarihi 'd-m-Y' formatında al ve $_date değişkenine ata.
  $_date = date('d-m-Y');
}  
  ?>
      <section class="_97865ae8">
        <div class="wr">
          <div class="_621e8364">
            <header class="_00a46be6">
              <h2 class="_95ba41af">
                <span class="um-gradient-text" style="--from:#3a6186;--to:#89253e;--angle:45deg"><?php echo "Bugün : ".$_date?></span><br><br>
              </h2>
              <p class="_ed6b8b81">
                <span class="um-gradient-text" style="--from:#5C258D;--to:#4389A2;--angle:45deg">Kütüphanemizde anlık olarak ne kadar PDF bulunuyor ?</span>
              </p>
            </header>
            <div class="_764d0fac">
              <div class="_facf5882">
                <div class="_cfada5cc">
                  -<span data-value="<?php echo $_document?>" class="countup"></span>
                -</div>
                <span class="_56302183"><br> 
                  <strong> <span style="color:rgb(0, 0, 0)"> PDF</span> </strong><br>
                  <strong><em><span class="um-gradient-text" style="--from:#3a6186;--to:#89253e;--angle:45deg">Sizler için özenle hazırlandı.</span></em></strong>
                </span>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="_85ba83be">
        <div class="wr">
          <header class="_2c9d2cd5">
            <h2 class="_b1c530f1"><span class="um-gradient-text" style="--from:#5C258D;--to:#4389A2;--angle:45deg">S.S.S (Sık Sorulan Sorular / Kütüphane)</span></h2>
            <p class="_0fe2bd15">
              <span class="um-gradient-text" style="--from:#3B4371;--to:#F3904F;--angle:45deg">
              Yardıma ihtiyacım var? İster yanıtlar arıyor olun ister ekstra yardıma ihtiyacınız olsun, destek ekibimiz sizin için burada. Herhangi bir sorunuz varsa veya herhangi bir konuda yardıma ihtiyacınız varsa bizimle iletişime geçmekten çekinmeyin. Elimizden gelen her şekilde yardımcı olmaktan her zaman mutluluk duyarız.
              </span>
            </p>
          </header>
          <div class="_a467cf14">
            <div class="umso-accordion _c133ec94">
              <div class="_ad24ed1f accordion-item">
                <h4 class="_bb921fb4 accordion-trigger">Kütüphanedeki PDF dosyalarını indirebilir miyim?</h4>
                <div class="_5d78a69c accordion-content">Tüm dosyalarımız halka açık bir şekilde paylaşıldığından ötürü indirip kullanabilirsiniz.</div>
              </div>
              <div class="_ad24ed1f accordion-item">
                <h4 class="_bb921fb4 accordion-trigger">Kütüphanenize PDF dosyamı nasıl eklerim ?</h4>
                <div class="_5d78a69c accordion-content">Yapay zekamıza gönderdiğiniz PDF dosyası aynı zamanda veri tabanımıza kayıt edilmektedir. Kayıt edilen PDF moderatörler tarafından uygun bulunursa kütüphaneye eklenecektir. Fakat bu süreç uzayabileceği için eğer ekstra başvuru yapmak isterseniz "Hakkımzda" sekmesinden bizlere mail atabilirsiniz !</div>
              </div>
              <div class="_ad24ed1f accordion-item">
                <h4 class="_bb921fb4 accordion-trigger">PDF Puanlama Nasıl Yapılır ?</h4>
                <div class="_5d78a69c accordion-content">PDF Puanlaması site moderatörlerimiz ve yapay zekamız tarafından yapılmaktadır. Yapay zeka PDF üzerinden sorular üretir ve bu soruları siz kullanıcılar cevaplarsınız. Başarı oranınız ve PDF dökümanı karşılaştırılır. Buna göre yapay zeka bir puan belirler. Moderatörlerimizden gelecek Ek Puan ile birlikte de ortalama puan bulunur ve onluk sistemde derecelendirilir.</div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <footer class="_c4b89fde">
        <div class="wr">
          <div class="_bea1daea">
            <div class="_240f2910">
              <span class="_c0e4633f">© 2023 Atsayi Company</span>
              <div class="_a6d0f97b" style="--scale:1">
                <img src="./studychanaiv2_files/drmy95hvvscik6am.png" class="_9fc8f72f" alt="sTUDYCHAN.AI.png">
              </div>
              <div class="_379aefea">
                <a href="https://www.facebook.com/" class="_77e6fd5c">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="24" height="24" class="um-icon _2cd4f8c5">
                    <path d="M448 56.7v398.5a24.7 24.7 0 0 1-24.7 24.7H309.1V306.5h58.2l8.7-67.6h-67v-43.2c0-19.6 5.4-32.9 33.5-32.9h35.8v-60.5c-6.2-.8-27.4-2.7-52.2-2.7-51.6 0-87 31.5-87 89.4v49.9h-58.4v67.6h58.4V480H24.7A24.8 24.8 0 0 1 0 455.3V56.7A24.8 24.8 0 0 1 24.7 32h398.5A24.8 24.8 0 0 1 448 56.7z" fill="currentColor"></path>
                  </svg>
                </a>
                <a href="https://www.instagram.com/" class="_77e6fd5c">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="24" height="24" class="um-icon _2cd4f8c5">
                    <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6a74.8 74.8 0 1 1 .1-149.3 74.8 74.8 0 0 1-.1 149.3zm146.4-194.3a26.7 26.7 0 1 1-53.6 0 26.8 26.8 0 0 1 53.6 0zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388a75.6 75.6 0 0 1-42.6 42.6c-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9A75.6 75.6 0 0 1 49.4 388c-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1A75.6 75.6 0 0 1 92 81.2c29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9a75.6 75.6 0 0 1 42.6 42.6c11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" fill="currentColor"></path>
                  </svg>
                </a>
                <a href="https://twitter.com/" class="_77e6fd5c">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="24" height="24" class="um-icon _2cd4f8c5">
                    <path d="M459.4 151.7c.3 4.6.3 9.1.3 13.7 0 138.7-105.6 298.5-298.6 298.5A296.5 296.5 0 0 1 0 417a217 217 0 0 0 25.3 1.2c49 0 94.3-16.6 130.3-44.8-46.1-1-84.8-31.2-98.1-72.8a111 111 0 0 0 47.4-2 105 105 0 0 1-84.1-103v-1.2c14 7.8 30.2 12.6 47.4 13.3A104.9 104.9 0 0 1 35.7 67.2a298.3 298.3 0 0 0 216.4 109.9 104.9 104.9 0 0 1 179-95.8 206.6 206.6 0 0 0 66.6-25.4 104.7 104.7 0 0 1-46.1 57.8c21-2.3 41.6-8.1 60.4-16.2a225.6 225.6 0 0 1-52.6 54.2z" fill="currentColor"></path>
                  </svg>
                </a>
                <a href="https://www.youtube.com/" class="_77e6fd5c">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" width="24" height="24" class="um-icon _2cd4f8c5">
                    <path d="M549.7 124a68.6 68.6 0 0 0-48.3-48.5C458.8 64 288 64 288 64S117.2 64 74.6 75.5c-23.5 6.3-42 25-48.3 48.6C15 167 15 256.4 15 256.4s0 89.4 11.4 132.3a67.6 67.6 0 0 0 48.3 47.8C117.2 448 288 448 288 448s170.8 0 213.4-11.5a67.6 67.6 0 0 0 48.3-47.8C561 345.8 561 256.4 561 256.4s0-89.5-11.4-132.3zM232 337.7V175.2l143 81.2-143 81.2z" fill="currentColor"></path>
                  </svg>
                </a>
              </div>
              <div class="_370825cf umsoPluginTarget"></div>
            </div>
            <ul class="_d1a0a8ea">
              <li class="_0fc50e27">
                  <h4 class="_31f6b92b">Başkan Olursam</h4>
                  <ul class="_91687afc">
                    <li class="_e0485177"><a href="#" class="_c288f4a7">Something Great</a></li>
                    <li class="_e0485177"><a href="#" class="_c288f4a7">Another Thing</a></li>
                    <li class="_e0485177"><a href="#" class="_c288f4a7">So many Features</a></li>
                    <li class="_e0485177"><a href="#" class="_c288f4a7">It's Amazing</a></li>
                  </ul>
              </li>
              <li class="_0fc50e27">
                  <h4 class="_31f6b92b">Başkan Olursam Yiğit</h4>
                  <ul class="_91687afc">
                    <li class="_e0485177"><a href="#" class="_c288f4a7">Something Great</a></li>
                    <li class="_e0485177"><a href="#" class="_c288f4a7">Another Thing</a></li>
                    <li class="_e0485177"><a href="#" class="_c288f4a7">So many Features</a></li>
                    <li class="_e0485177"><a href="#" class="_c288f4a7">It's Amazing</a></li>
                  </ul>
              </li>
              <li class="_0fc50e27">
                  <h4 class="_31f6b92b">Başkan Olursam Samet</h4>
                  <ul class="_91687afc">
                    <li class="_e0485177"><a href="#" class="_c288f4a7">Something Great</a></li>
                    <li class="_e0485177"><a href="#" class="_c288f4a7">Another Thing</a></li>
                    <li class="_e0485177"><a href="#" class="_c288f4a7">So many Features</a></li>
                    <li class="_e0485177"><a href="#" class="_c288f4a7">It's Amazing</a></li>
                  </ul>
              </li>
            </ul>
          </div>
        </div>
      </footer>

      <script>
        window.OpenModal = function(o) {
          const e = document.querySelector('#' + o + '.umsoModalWrapper');
          if (!e) {
            console.error('Modal not found', o);
            return;
          }
          const n = e.querySelector('.umsoModalOverlay');
          if (n) {
            e.style.display = 'block';
            n.addEventListener('click', () => {
              window.CloseModal(o);
            }, { once: true });
          } else {
            console.error('Overlay not found in modal', o);
          }
        };

        window.CloseModal = function(o) {
          const e = document.querySelector('#' + o + '.umsoModalWrapper');
          if (e) {
            e.style.display = 'none';
          } else {
            console.error('Modal not found', o);
          }
        };
      </script>

      <script>
        !function() {
          const t = (t) => {
            const e = t.getAttribute('data-value');
            return -1 === e?.toString().indexOf('.') ? 0 : e?.toString().split('.')[1].length || 0;
          };

          const e = function(e) {
            new CountUp(e, e.getAttribute('data-value'), (e => {
              const n = document.getElementsByTagName('html')[0].getAttribute('lang');
              return {
                separator: (1e3).toLocaleString(n)[1],
                decimal: (1.1).toLocaleString(n)[1],
                decimalPlaces: t(e)
              };
            })(e)).start();
            e.classList.remove('countup');
          };

          const n = function() {
            document.querySelectorAll('.countup').forEach((t) => {
              (function(t, e) {
                const n = t.getBoundingClientRect(),
                      o = window.innerHeight || document.documentElement.clientHeight;
                return !(Math.floor(100 - (n.top > 0 ? 0 : n.top) / -n.height * 100) < e || Math.floor(100 - (n.bottom - o) / n.height * 100) < e);
              })(t, 50) && e(t);
            });
          };

          let o = !1;
          document.addEventListener('scroll', function() {
            if (!o) {
              window.requestAnimationFrame(function() {
                n();
                o = !1;
              });
              o = !0;
            }
          });

          window.addEventListener('load', function() {
            n();
          });
        }();
      </script>

      <script>
        var __assign = this && this.__assign || function() {
          return (__assign = Object.assign || function(t) {
            for (var i, a = 1, n = arguments.length; a < n; a++) {
              for (var s in i = arguments[a]) {
                if (Object.prototype.hasOwnProperty.call(i, s)) {
                  t[s] = i[s];
                }
              }
            }
            return t;
          }).apply(this, arguments);
        };

        var CountUp = function() {
          function t(t, i, a) {
            var h = this;
            this.endVal = i;
            this.options = a;
            this.version = "2.1.0";
            this.defaults = {
              startVal: 0,
              decimalPlaces: 0,
              duration: 2,
              useEasing: true,
              useGrouping: true,
              smartEasingThreshold: 999,
              smartEasingAmount: 333,
              separator: ",",
              decimal: ".",
              prefix: "",
              suffix: "",
              enableScrollSpy: false,
              scrollSpyDelay: 200
            };
            this.finalEndVal = null;
            this.useEasing = true;
            this.countDown = false;
            this.error = "";
            this.startVal = 0;
            this.paused = true;

            this.count = function(t) {
              h.startTime || (h.startTime = t);
              var i = t - h.startTime;
              h.remaining = h.duration - i;

              if (h.useEasing) {
                h.countDown ? h.frameVal = h.startVal - h.easingFn(i, 0, h.startVal - h.endVal, h.duration) :
                  h.frameVal = h.easingFn(i, h.startVal, h.endVal - h.startVal, h.duration);
              } else {
                h.countDown ? h.frameVal = h.startVal - (h.startVal - h.endVal) * (i / h.duration) :
                  h.frameVal = h.startVal + (h.endVal - h.startVal) * (i / h.duration);
              }

              h.countDown ? h.frameVal = h.frameVal < h.endVal ? h.endVal : h.frameVal :
                h.frameVal = h.frameVal > h.endVal ? h.endVal : h.frameVal;

              h.frameVal = Number(h.frameVal.toFixed(h.options.decimalPlaces));
              h.printValue(h.frameVal);
              i < h.duration ? h.rAF = requestAnimationFrame(h.count) :
                h.finalEndVal !== null ? h.update(h.finalEndVal) :
                  h.callback && h.callback();
            };

            this.formatNumber = function(t) {
              var i, a = t < 0 ? "-" : "", n = Math.abs(t).toFixed(h.options.decimalPlaces), s = (n += "").split("."), e = s[0], r = s.length > 1 ? h.options.decimal + s[1] : "";
              if (h.options.useGrouping) {
                i = "";
                for (var o = 0, l = e.length; o < l; ++o) {
                  o !== 0 && o % 3 === 0 && (i = h.options.separator + i);
                  i = e[l - o - 1] + i;
                }
                e = i;
              }
              if (h.options.numerals && h.options.numerals.length) {
                e = e.replace(/[0-9]/g, function(t) {
                  return h.options.numerals[+t];
                });
                r = r.replace(/[0-9]/g, function(t) {
                  return h.options.numerals[+t];
                });
              }
              return a + h.options.prefix + e + r + h.options.suffix;
            };

            this.easeOutExpo = function(t, i, a, n) {
              return a * (1 - Math.pow(2, -10 * t / n)) * 1024 / 1023 + i;
            };

            this.options = __assign(__assign({}, this.defaults), a);
            this.formattingFn = this.options.formattingFn ? this.options.formattingFn : this.formatNumber;
            this.easingFn = this.options.easingFn ? this.options.easingFn : this.easeOutExpo;
            this.startVal = this.validateValue(this.options.startVal);
            this.frameVal = this.startVal;
            this.endVal = this.validateValue(i);
            this.options.decimalPlaces = Math.max(this.options.decimalPlaces);
            this.resetDuration();
            this.options.separator = String(this.options.separator);
            this.useEasing = this.options.useEasing;
            this.el = typeof t === "string" ? document.getElementById(t) : t;

            if (this.el) {
              this.printValue(this.startVal);
            } else {
              this.error = "[CountUp] target is null or undefined";
            }

            if (typeof window !== "undefined" && this.options.enableScrollSpy) {
              if (this.error) {
                console.error(this.error, t);
              } else {
                window.onScrollFns = window.onScrollFns || [];
                window.onScrollFns.push(function() {
                  return h.handleScroll(h);
                });
                window.onscroll = function() {
                  window.onScrollFns.forEach(function(t) {
                    return t();
                  });
                };
                this.handleScroll(this);
              }
            }
          }

          t.prototype.handleScroll = function(t) {
            var i, a;
            if (t && window) {
              i = window.innerHeight + window.scrollY;
              a = t.el.offsetTop + t.el.offsetHeight;
              if (a < i && a > window.scrollY && t.paused) {
                t.paused = false;
                setTimeout(function() {
                  return t.start();
                }, t.options.scrollSpyDelay);
              } else if (window.scrollY > a && !t.paused) {
                t.reset();
              }
            }
          };

          t.prototype.determineDirectionAndSmartEasing = function() {
            var t = this.finalEndVal ? this.finalEndVal : this.endVal;
            this.countDown = this.startVal > t;
            var i, a = t - this.startVal;
            if (Math.abs(a) > this.options.smartEasingThreshold) {
              this.finalEndVal = t;
              i = this.countDown ? 1 : -1;
              this.endVal = t + i * this.options.smartEasingAmount;
              this.duration = this.duration / 2;
            } else {
              this.endVal = t;
              this.finalEndVal = null;
            }
            this.finalEndVal ? this.useEasing = false : this.useEasing = this.options.useEasing;
          };

          t.prototype.start = function(t) {
            if (!this.error) {
              this.callback = t;
              if (this.duration > 0) {
                this.determineDirectionAndSmartEasing();
                this.paused = false;
                this.rAF = requestAnimationFrame(this.count);
              } else {
                this.printValue(this.endVal);
              }
            }
          };

          t.prototype.pauseResume = function() {
            if (this.paused) {
              this.startTime = null;
              this.duration = this.remaining;
              this.startVal = this.frameVal;
              this.determineDirectionAndSmartEasing();
              this.rAF = requestAnimationFrame(this.count);
            } else {
              cancelAnimationFrame(this.rAF);
            }
            this.paused = !this.paused;
          };

          t.prototype.reset = function() {
            cancelAnimationFrame(this.rAF);
            this.paused = true;
            this.resetDuration();
            this.startVal = this.validateValue(this.options.startVal);
            this.frameVal = this.startVal;
            this.printValue(this.startVal);
          };

          t.prototype.update = function(t) {
            cancelAnimationFrame(this.rAF);
            this.startTime = null;
            this.endVal = this.validateValue(t);
            if (this.endVal !== this.frameVal) {
              this.startVal = this.frameVal;
              if (!this.finalEndVal) {
                this.resetDuration();
              }
              this.finalEndVal = null;
              this.determineDirectionAndSmartEasing();
              this.rAF = requestAnimationFrame(this.count);
            }
          };

          t.prototype.printValue = function(t) {
            var i = this.formattingFn(t);
            if (this.el.tagName === "INPUT") {
              this.el.value = i;
            } else if (this.el.tagName === "text" || this.el.tagName === "tspan") {
              this.el.textContent = i;
            } else {
              this.el.innerHTML = i;
            }
          };

          t.prototype.ensureNumber = function(t) {
            return typeof t === "number" && !isNaN(t);
          };

          t.prototype.validateValue = function(t) {
            var i = Number(t);
            return this.ensureNumber(i) ? i : (this.error = "[CountUp] invalid start or end value: " + t, null);
          };

          t.prototype.resetDuration = function() {
            this.startTime = null;
            this.duration = 1000 * Number(this.options.duration);
            this.remaining = this.duration;
          };

          return t;
        }();
      </script>

      <script>
        !function() {
          function t(t) {
            if (!t.target.classList.contains('accordion-trigger')) return;
            const n = t.target.parentElement;
            if (!n) return;
            n.classList.contains('open') ? n.classList.remove('open') : n.classList.add('open');
          }
          document.querySelectorAll('.umso-accordion').forEach((n) => {
            n.addEventListener('click', t);
          });
        }();
      </script>

      <script>
        !function() {
          const e = false;
          window.SendEvent = function(n) {
            if (!n) return void console.error('error when sending event');
            const t = JSON.stringify({ siteId: n.siteId, category: n.category, name: n.name, data: n.data, isPriorBlockingEnabled: e });
            if (n.asBeacon && navigator.sendBeacon) return void navigator.sendBeacon('/api/event', t);
            let o = new XMLHttpRequest();
            o.open('POST', '/api/event', true);
            o.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
            o.send(t);
          }
        }();
        
        !function() {
          const e = false, n = new URLSearchParams(window.location.search), t = ['utm_source', 'utm_medium', 'utm_campaign', 'utm_term', 'utm_content'];
          window.PageView = function() {
            const o = { referrer: document.referrer, path: window.location.pathname, isPriorBlockingEnabled: e };
            t.forEach(function(e) {
              const t = n.get(e);
              t && (o[e] = t);
            });
            let i = new XMLHttpRequest();
            i.open('POST', '/api/view', true);
            i.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
            i.send(JSON.stringify(o));
          };
          window.PageView();
        }();
        
        !function() {
          const t = document.querySelectorAll('a'), n = new URLSearchParams(window.location.search), e = ['utm_source', 'utm_medium', 'utm_campaign', 'utm_term', 'utm_content'];
          Array.prototype.forEach.call(t, function(t) {
            t.addEventListener('click', function() {
              const c = { url: t.href, btn_id: t.id };
              e.forEach(function(e) {
                const o = n.get(e);
                o && (c[e] = o);
              });
              window.SendEvent({ siteId: 'e785nqyvjzbwbkmb', category: 'button', name: t.innerText, data: c, asBeacon: true });
            });
          });
        }();
      </script>

      <script>
            !function(e, t) {
              "function" == typeof define && define.amd ? define([], function() {
                  return t(e)
                }) :
                "object" == typeof exports ? module.exports = t(e) : e.SmoothScroll = t(e)
            }("undefined" != typeof global ? global : "undefined" != typeof window ? window : this, function(b) {
              "use strict";

              function O() {
                for (var n = {}, e = 0; e < arguments.length; e++) ! function(e) {
                  for (var t in e) e.hasOwnProperty(t) && (n[t] = e[t])
                }(arguments[e]);
                return n
              }

              function c(t) {
                var n;
                try {
                  n = decodeURIComponent(t)
                } catch (e) {
                  n = t
                }
                return n
              }

              function s(e) {
                "#" === e.charAt(0) && (e = e.substr(1));
                for (var t, n, o = String(e), r = o.length, a = -1, i = "", c = o.charCodeAt(0); ++a < r;) {
                  if (0 === (t = o.charCodeAt(a))) throw new InvalidCharacterError("Invalid character: the input contains U+0000.");
                  i += 1 <= t && t <= 31 || 127 == t || 0 === a && 48 <= t && t <= 57 || 1 === a && 48 <= t && t <= 57 && 45 ===
                    c ? "\\" + t.toString(16) + " " : 128 <= t || 45 === t || 95 === t || 48 <= t && t <= 57 || 65 <= t && t <=
                    90 || 97 <= t && t <= 122 ? o.charAt(a) : "\\" + o.charAt(a)
                }
                try {
                  n = decodeURIComponent("#" + i)
                } catch (e) {
                  n = "#" + i
                }
                return n
              }

              function I() {
                return Math.max(document.body.scrollHeight, document.documentElement.scrollHeight, document.body.offsetHeight,
                  document.documentElement.offsetHeight, document.body.clientHeight, document.documentElement.clientHeight)
              }

              function w(e) {
                return e ? (t = e, parseInt(b.getComputedStyle(t).height, 10) + e.offsetTop) : 0;
                var t
              }

              function C(e, t, n, o) {
                var r;
                t.emitEvents && "function" == typeof b.CustomEvent && (r = new CustomEvent(e, {
                    bubbles: !0,
                    detail: {
                      anchor: n,
                      toggle: o
                    }
                  }), document.dispatchEvent(r))
              }
              var L = {
                ignore: "[data-scroll-ignore]",
                header: null,
                topOnEmptyHash: !0,
                speed: 500,
                clip: !0,
                offset: 0,
                easing: "easeInOutCubic",
                customEasing: null,
                updateURL: !0,
                popstate: !0,
                emitEvents: !0
              };
          return function (o, e) {
                  var g, r, y, v, t, S, E = {
                      cancelScroll: function (e) {
                          cancelAnimationFrame(S), S = null, e || C("scrollCancel", g)
                      }
                  };

                  E.animateScroll = function (i, c, e) {
                      var s, u, o, r, a, l, d, m, f, t, h = O(g || L, e || {});
                      t = "[object Number]" === Object.prototype.toString.call(i), p || !i.tagName ? n = null : n = i;

                      (p || n) && (s = b.pageYOffset, h.header && !y && (y = document.querySelector(h.header)), v = v || w(y),
                          a = t ? i : function (e, t, n, o) {
                              for (var r = 0; e.offsetParent;) r += e.offsetTop, e = e.offsetParent;
                              return r = Math.max(r - t - n, 0), o && (r = Math.min(r, I() - b.innerHeight)), r
                          }(n, v, parseInt("function" == typeof h.offset ? h.offset(i, c) : h.offset, 10), h.clip),
                          l = a - s, d = I(), f = function (e) {
                              var t, n;
                              o = (m += e - (u = u || e)) / parseInt(h.speed, 10), r = s + l * (t = o = 1 < o ? 1 : o, 
                              "easeInQuad" === h.easing && (n = t * t), "easeOutQuad" === h.easing && (n = t * (2 - t)), 
                              "easeInOutQuad" === h.easing && (n = t < .5 ? 2 * t * t : (4 - 2 * t) * t - 1), 
                              "easeInCubic" === h.easing && (n = t * t * t), "easeOutCubic" === h.easing && (n = --t * t * t + 1), 
                              "easeInOutCubic" === h.easing && (n = t < .5 ? 4 * t * t * t : (t - 1) * (2 * t - 2) * (2 * t - 2) + 1), 
                              "easeInQuart" === h.easing && (n = t * t * t * t), "easeOutQuart" === h.easing && (n = 1 - --t * t * t * t), 
                              "easeInOutQuart" === h.easing && (n = t < .5 ? 8 * t * t * t * t : 1 - 8 * --t * t * t * t), 
                              "easeInQuint" === h.easing && (n = t * t * t * t * t), "easeOutQuint" === h.easing && (n = 1 + --t * t * t * t * t), 
                              "easeInOutQuint" === h.easing && (n = t < .5 ? 16 * t * t * t * t * t : 1 + 16 * --t * t * t * t * t), 
                              h.customEasing && (n = h.customEasing(t)), n || t), b.scrollTo(0, Math.floor(r)), 
                              function (e, t) {
                                  var n, o, r, a = b.pageYOffset;
                                  if (e == t || a == t || (s < t && b.innerHeight + a) >= d) return E.cancelScroll(!0), o = t, r = p, 
                                  0 === (n = i) && document.body.focus(), r || (n.focus(), document.activeElement !== n && (n.setAttribute("tabindex", "-1"), 
                                  n.focus(), n.style.outline = "none"), b.scrollTo(0, o)), C("scrollStop", h, i, c), !(S = u = null)
                              }(r, a) || (S = b.requestAnimationFrame(f), u = e)
                          }, (m = 0) === b.pageYOffset && b.scrollTo(0, 0), t = i, p || history.pushState && h.updateURL && 
                          history.pushState({smoothScroll: JSON.stringify(h), anchor: t.id}, document.title, t === document.documentElement ? "#top" : "#" + t.id), 
                          C("scrollStart", h, i, c), E.cancelScroll(!0), b.requestAnimationFrame(f))
                  };

                  function n(e) {
                      var t, n;
                      !("matchMedia" in b && b.matchMedia("(prefers-reduced-motion)").matches || 0 !== e.button || e.metaKey || e.ctrlKey) && 
                      "closest" in e.target && (r = e.target.closest(o)) && "a" === r.tagName.toLowerCase() && !e.target.closest(g.ignore) && 
                      r.hostname === b.location.hostname && r.pathname === b.location.pathname && /#/.test(r.href) && 
                      (t = s(c(r.hash)), (n = (n = g.topOnEmptyHash && "#" === t ? document.documentElement : document.querySelector(t)) || "#top" !== t ? n : 
                      document.documentElement) && (e.preventDefault(), E.animateScroll(n, r)))
                  }

                  function a(e) {
                      var t;
                      null !== history.state && history.state.smoothScroll && history.state.smoothScroll === JSON.stringify(g) && 
                      history.state.anchor && ((t = document.querySelector(s(c(history.state.anchor)))) && E.animateScroll(t, null, {
                          updateURL: !1
                      }))
                  }

                  function i(e) {
                      t = t || setTimeout(function () {
                          t = null, v = w(y)
                      }, 66)
                  }

                  return E.destroy = function () {
                      g && (document.removeEventListener("click", n, !1), b.removeEventListener("resize", i, !1), 
                      b.removeEventListener("popstate", a, !1), E.cancelScroll(), S = t = v = y = r = g = null)
                  }, E.init = function (e) {
                      if (!("querySelector" in document && "addEventListener" in b && "requestAnimationFrame" in b && 
                          "closest" in b.Element.prototype)) throw "Smooth Scroll: This browser does not support the required JavaScript methods and browser APIs.";
                      E.destroy(), g = O(L, e || {}), y = g.header ? document.querySelector(g.header) : null, 
                      v = w(y), document.addEventListener("click", n, !1), y && b.addEventListener("resize", i, !1), 
                      g.updateURL && g.popstate && b.addEventListener("popstate", a, !1)
                  }, E.init(e), E
              }
          }),
          new window.SmoothScroll('a[href*="#"]', {
              offset: 0
          })
      </script>

    </body>
</html>