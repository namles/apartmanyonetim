<!DOCTYPE html>

<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><title>Apartman Yönetim</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="./css/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
</head><body class="w3-light-grey">

<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i> &nbsp;Menu</button>
  <span class="w3-bar-item w3-right">Apartman Yönetimi</span>
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
     <a href="#" class="w3-bar-item w3-button w3-padding-4 w3-right w3-margin-0 w3-hide-large w3-hover-black"  onclick="w3_close()" title="close menu"><i class="fa fa-remove "></i></a>
  <div class="w3-container w3-row">
     
    <div class="w3-col s4">
      <img src="./css/avatar2.png" class="w3-circle w3-margin-right" style="width:46px">
    </div>
    <div class="w3-col s8 w3-bar">
      <span>Hoşgeldin, <strong>Yunus</strong></span><br>
      
      
          <button
                  
                  class="w3-bar-item w3-button">
          <i class="fa fa-envelope"></i>
          </button>
          <div id="id01" class="w3-modal">
                <div class="w3-modal-content">
                  <header class="w3-container w3-teal"> 
                    <span onclick="document.getElementById('id01').style.display='none';
                          pause('ses1')" 
                    class="w3-button w3-display-topright fa fa-times"></span>
                    <h2>Mesajlar</h2>
                  </header>
                  <div class="w3-container">
                    <audio id="ses1" controls ">
                      <source src="ses.mp3" type="audio/mpeg">
                      sizin tarayıcınız desteklemiyor 
                    </audio>

                  </div>
                  <footer class="w3-container w3-teal">
                    <p>sesli mesajınız var.</p>
                  </footer>
                </div>
          </div>
      <a title="yöneticiye ulaş" href="#" class="w3-bar-item w3-button"><i class="fa fa-user"></i></a>
      <a title="ayarlar" href="#" class="w3-bar-item w3-button"><i class="fa fa-cog"></i></a>
    </div>
      
      
       <div class="w3-left" >
           
           <hr>
           <div><i class="fa fa-address-card"></i>
           <p> Şahintepe Mahallesi 386 nolu cadde no : 10 b-c </p>
           <hr>
         
        
            <h5>Aboneliklerim</h5>
  <table  style="margin:0px ;height: 150px"> <!--site sakinlerinin profilinde bulunacaktır.-->

      <tr>
        <td>Elektrik</td>
        <td> <input class="w3-right" id="elkabone"  type="text" value="23324245"/></td>
      </tr>
      <tr>
          <td>Su</td>
        <td><input class="w3-right" id="suabone"  type="text" value="23324245"/></td>
      </tr>
      <tr>
        <td>Doğalgaz</td>
        <td><input class="w3-right" id="dogalabone"  type="text" value="23324245"/></td>
      </tr>
      <tr>
        <td>ADSL</td>
        <td> <input class="w3-right" id="adslabone"  type="text" value="23324245"/></td>
      </tr>
  
</table>
            
       
        </div>
  </div>
  <hr>
  <!--site yöneticilerinin profilinde bulunacaktır.-->
<!--  <div class="w3-bar-block">
    <div class="w3-container"> 
    <h5>Menü</h5>
  </div>
    <a href="#" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-users fa-fw"></i>&nbsp; Yönetim Paneli</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-eye fa-fw"></i>&nbsp; Karar Defteri</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>&nbsp; Üyeler</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bullseye fa-fw"></i>&nbsp; Esnaf Talep</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-diamond fa-fw"></i>&nbsp; Değerlendirmeler</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bell fa-fw"></i>&nbsp; Anket</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bank fa-fw"></i>&nbsp; Kapıcı</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-history fa-fw"></i>&nbsp; Gelir-Gider</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cog fa-fw"></i>&nbsp; Ayarlar</a><br><br>
  </div>-->
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> Panelim</b></h5>
  </header>

  <div class="w3-row-padding w3-margin-bottom">
    <div class="w3-quarter">
      <div class="w3-container w3-red w3-padding-16">
          <a style="text-decoration: none"  href="anamenu/sorunbildir.php" title="Apartmanda yapılmasını istediğiniz sorunları buradan paylaşabilirsiniz ">
                <div class="w3-left"><i class="fa fa-flag w3-xxxlarge"></i></div>
                <div class="w3-right">
                  <h3>52</h3>
                </div>
                <div class="w3-clear"></div>
                <h4>Sorun Bildir</h4>
          </a>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-blue w3-padding-16">
          <a style="text-decoration: none"  href="anamenu/karardefteri.php" title="Apartmanda yapılmasını istediğiniz sorunları buradan paylaşabilirsiniz ">
                <div class="w3-left"><i class="fa fa-book w3-xxxlarge"></i></div>
                <div class="w3-right">
                  <h3>99</h3>
                </div>
                <div class="w3-clear"></div>
                <h4>Karar Defteri</h4>
          </a>
      </div>
    </div>
    <div class="w3-quarter">
        
      <div class="w3-container w3-teal w3-padding-16">
          <a style="text-decoration: none"  href="anamenu/esnafkapici.php" title="Esnaf ve Kapıcı çağırma değerlendirme işlemleri ">
            <div class="w3-left"><i class="fa fa-handshake-o w3-xxxlarge"></i></div>
            <div class="w3-right">
              <h3>23</h3>
            </div>
            <div class="w3-clear"></div>
            <h4>Esnaf Ve Kapıcı</h4>
        </a>
      </div>
    </div>
      
    <div class="w3-quarter">
      <div class="w3-container w3-orange w3-text-white w3-padding-16">
          <a style="text-decoration: none"  href="anamenu/odemeler.php" title="Apartmanda yapılmasını istediğiniz sorunları buradan paylaşabilirsiniz ">
            <div class="w3-left"><i class="fa fa-exchange w3-xxxlarge"></i></div>
            <div class="w3-right">
              <h3>50</h3>
            </div>
            <div class="w3-clear"></div>
            <h4>Ödemeler</h4>
          </a>
      </div>
    </div>
  </div>

  <div class="w3-panel">
    <div class="w3-row-padding" style="margin:0 -16px">
     <div class="w3-third">
        <h5>Son işlemler</h5>
        
        <img class="mySlides w3-animate-fading" style="width:100%" src="./css/avatar1.png">
        <img class="mySlides w3-animate-fading" style="width:100%" src="./css/avatar2.png">
        <img class="mySlides w3-animate-fading" style="width:100%" src="./css/avatar3.png">
        <img class="mySlides w3-animate-fading" style="width:100%" src="./css/avatar4.png">
      </div>
        
      <div class="w3-twothird">
        <h5>Son Bildirimler</h5>
        <table class="w3-table w3-striped w3-white">
          <tbody><tr>
            <td><i class="fa fa-tree w3-text-blue w3-large"></i></td>
            <td>Bahçe kısmının ağaçları dikildi.</td>
            <td><i>10 dakika</i></td>
          </tr>
          <tr>
            <td><i class="fa fa-bell w3-text-red w3-large"></i></td>
            <td>"Apartman girişine kamera takılması" anket yayınlandı. lütfen doldurunuz. 
               <button class="w3-button w3-white w3-border w3-round-large" id="myBtn">Anketi doldur</button>

                <!-- The Modal -->
                <div id="myModal" class="w3-threethird modal" >

                  <!-- Modal content anket modal ı için yapılmıştır.  -->
                  <div  class="w3-threethird modal-content">
                    <span class="close">&times;</span>
                    <h4>Kamera takılması</h4>
                            <p>Gelişen teknoloji ile beraber apartmanımıza kamera takılması hem suçluları caydırıcı olacak ve daha hızlı yakalanmalarını sağlayacaktır</p>
                            <a href="#" title="proje detayını inceleyin."> proje bütçe detayı için bakınız.</a><br>
                        <form style="margin-top:20px">
                            <input class="w3-radio" type="radio" name="gender" value="takilmasin"><label>Takılmasın</label> <br>
                            <input class="w3-radio" type="radio" name="gender" value="takilsin" checked><label>Takılsın</label>
                            
                          <input class="w3-btn w3-right " type="submit" name="gonder" value="Oyla"> 
                          
                        </form>
                            <div class="w3-clear"></div>
                  </div>

                </div>
           
            </td>
            <td><i>15 dakika</i></td>
          </tr>
          <tr>
            <td><i class="fa fa-users w3-text-yellow w3-large"></i></td>
            <td>Pazartesi toplantı var katılımınız bekleniyor.</td>
            <td><i>17 dakika</i></td>
          </tr>
          <tr>
            <td><i class="fa fa-comment w3-text-red w3-large"></i></td>
            <td> "Kapıcı" konulu sorun bildirinize yeni yorumlar var.</td>
            <td><i>25 dakika</i></td>
          </tr>
          <tr>
            <td><i class="fa fa-cogs w3-text-blue w3-large"></i></td>
            <td>Kapı Otomatiği değişti. Fatura Kontrollerini menüden yapabilirsiniz. </td>
            <td><i>28 dakika</i></td>
          </tr>
          <tr>
            <td><i class="fa fa-exchange w3-text-red w3-large"></i></td>
            <td>Aylık gelir gider hesabı yapılmıştır. Gelir gider menüsünden bakabilirsiniz. </td>
            <td><i>35 dakika</i></td>
          </tr>
          <tr>
            <td><i class="fa fa-share-alt w3-text-green w3-large"></i></td>
            <td>Yapılan iş-işlemler hakkında yeni resimler paylaşıldı. Altına yorum yapabilirsiniz. </td>
            <td><i>39 dakika</i></td>
          </tr>
        </tbody></table>
      </div>
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Gelir-Gider İstastikleri </h5>
    <p>Gelir</p>
    <div class="w3-grey">
      <div class="w3-container w3-center w3-padding w3-green" style="width:25%">+25%</div>
    </div>

    <p>Gider</p>
    <div class="w3-grey">
      <div class="w3-container w3-center w3-padding w3-orange" style="width:50%">50%</div>
    </div>

    <p>Kalan</p>
    <div class="w3-grey">
      <div class="w3-container w3-center w3-padding w3-red" style="width:75%">75%</div>
    </div>
  </div>
  <hr>

  <div class="w3-container">
    <h5>Yapılan Harcamalar</h5>
    <table class="w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white">
      <tbody><tr>
        <td><a href="#" title="incele">Kapıcı Maaşı</a></td>
        <td>1300 tl</td>
      </tr>
      <tr>
        <td><a href="#" title="incele">Kapı Otomatiği değişim</a></td>
        <td>100 tl</td>
      </tr>
      <tr>
        <td><a href="#" title="incele">Çitlerin Onarımı</a></td>
        <td>2000 tl</td>
      </tr>
      <tr>
        <td><a href="#" title="incele">Kamera takılması</a></td>
        <td>2000 tl</td>
      </tr>
      <tr>
          <td><a href="#" title="incele">Elektrik Faturası</a></td>
        <td>300</td>
      </tr>
      <tr>
          <td><a href="#" title="incele">Asansör Bakımı</a></td>
        <td>250</td>
      </tr>
    </tbody></table><br>
    <button class="w3-button w3-dark-grey">Devamı... &nbsp;<i class="fa fa-arrow-right"></i></button>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Yeni Katılanlar</h5>
    <ul class="w3-ul w3-card-4 w3-white">
      <li class="w3-padding-16">
        <img src="./css/avatar2.png" class="w3-left w3-circle w3-margin-right" style="width:35px">
        <span class="w3-xlarge">Ali</span><br>
      </li>
      <li class="w3-padding-16">
        <img src="./css/avatar5.png" class="w3-left w3-circle w3-margin-right" style="width:35px">
        <span class="w3-xlarge">Faruk</span><br>
      </li>
      <li class="w3-padding-16">
        <img src="./css/avatar6.png" class="w3-left w3-circle w3-margin-right" style="width:35px">
        <span class="w3-xlarge">Yunus</span><br>
      </li>
    </ul>
  </div>
  <hr>

  <div class="w3-container">
    <h5>Son Yorumlar</h5>
    <div class="w3-row">
      <div class="w3-col m2 text-center">
        <img class="w3-circle" src="./css/avatar3.png" style="width:96px;height:96px">
      </div>
      <div class="w3-col m10 w3-container">
        <h4>Ahmet <span class="w3-opacity w3-medium">Sep 29, 2014, 9:12 PM</span></h4>
        <p> Yeni bir esnaf buldum. işini iyi yapıyor güzel temiz iş çıkarıyor size de öneririm. </p><br>
      </div>
    </div>

    <div class="w3-row">
      <div class="w3-col m2 text-center">
        <img class="w3-circle" src="./css/avatar1.png" style="width:96px;height:96px">
      </div>
      <div class="w3-col m10 w3-container">
        <h4>Faruk <span class="w3-opacity w3-medium">Sep 28, 2014, 10:15 PM</span></h4>
        <p>Çimleri biçme vakti gelmedi. çok uzamışlar. </p><br>
      </div>
    </div>
    
     <div class="w3-row">
      <div class="w3-col m2 text-center">
        <img class="w3-circle" src="./css/avatar1.png" style="width:96px;height:96px">
      </div>
      <div class="w3-col m10 w3-container">
        <h4>Yönetim <span class="w3-opacity w3-medium">Sep 28, 2014, 10:15 PM</span></h4>
        <p>Binamız sakinlerinden Ali Ağaoğlunun kızının düğünü var herkesi davet ediyor. </p><br>
      </div>
    </div>
  </div>
  <br>
  <div class="w3-container w3-dark-grey w3-padding-32">
    <div class="w3-row">
      <div class="w3-container w3-third">
        <h5 class="w3-bottombar w3-border-green">Yönetim</h5>
        <p>Karar Defteri</p>
        <p>Yasal Mevzuat</p>
        <p>Demirbaş</p>
         <p>Gelen-Giden Evrak</p>
        <p>Gelir-Gider</p>
      </div>
      <div class="w3-container w3-third">
        <h5 class="w3-bottombar w3-border-red">Gelir-Gider</h5>
        <p>İş-işlemler</p>
        <p>Faturalar</p>
        <p>Sorun takip</p>
      </div>
      <div class="w3-container w3-third">
        <h5 class="w3-bottombar w3-border-orange">Rutin işler</h5>
        <p>Kapıcı</p>
        <p>Asansör</p>
        <p>Elektrik</p>
        <p>Su</p>
        <p>Bahçe-Otopark</p>
        <p>Kamera</p>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="w3-container w3-padding-16 w3-light-grey">
    <h4>Bize Ulaşın</h4>
    <p>Teşekkürler  <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
  </footer>

  <!-- End page content -->
</div>

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
        overlayBg.style.display = "none";
    } else {
        mySidebar.style.display = 'block';
        overlayBg.style.display = "block";
    }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
    overlayBg.style.display = "none";
}

var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 9000);    
}
</script>
<script src="js/script.js" type="text/javascript"></script>

</body></html>