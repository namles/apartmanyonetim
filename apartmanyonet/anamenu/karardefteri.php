<!DOCTYPE html>

<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><title>Apartman Yönetim</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<script>


</script>
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
      <img src="../css/avatar2.png" class="w3-circle w3-margin-right" style="width:46px">
    </div>
    <div class="w3-col s8 w3-bar">
      <span>Hoşgeldin, <strong>Yunus</strong></span><br>
      <a title="mesajlar" href="#" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i></a>
      <a title="yöneticiye ulaş" href="#" class="w3-bar-item w3-button"><i class="fa fa-user"></i></a>
      <a title="ayarlar" href="#" class="w3-bar-item w3-button"><i class="fa fa-cog"></i></a>
    </div>
<!--       <div class="w3-left" >
           
           <hr>
           <div><i class="fa fa-address-card"></i>
           <p> Şahintepe Mahallesi 386 nolu cadde no : 10 b-c </p>
           <hr>
         
        
            <h5>Aboneliklerim</h5>
  <table  style="margin:0px ;height: 150px"> site sakinlerinin profilinde bulunacaktır.

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
  </div>-->
  <hr>
  <!--site yöneticilerinin profilinde bulunacaktır.-->
  <div class="w3-bar-block">
    <div class="w3-container"> 
    <h5>Menü</h5>
  </div>
      <a href="../index.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>&nbsp; Yönetim Paneli</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-flag fa-fw"></i>&nbsp; Sorun Bildir</a>
    <a href="#" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-eye fa-fw"></i>&nbsp; Karar Defteri</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-handshake-o fa-fw"></i>&nbsp; Esnaf Talep</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-exchange fa-fw"></i>&nbsp; Ödemeler</a>
   <!-- <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-diamond fa-fw"></i>&nbsp; Değerlendirmeler</a>
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
<!--  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> Panelim</b></h5>
  </header>-->

  <div class="w3-row-padding w3-margin-bottom">
      
      
      

        <div class="w3-panel">
                  <div class="w3-container w3-center">
      <button class="w3-button  w3-green" ><i class="fa fa-plus" ></i> Yeni</button>
      <button class="w3-button  w3-grey" ><i class="fa fa-search" ></i> Git</button>
      <button class="w3-button  w3-red" ><i class="fa fa-minus" ></i>  Sil</button>
          </div>
    <div class="w3-container">
     <A NAME="table0"><H1> <EM>Karar Defteri</EM></H1></A>
     
<TABLE FRAME=VOID CELLSPACING=0 COLS=5 RULES=NONE BORDER=0>
	<COLGROUP><COL WIDTH=94><COL WIDTH=74><COL WIDTH=11><COL WIDTH=10><COL WIDTH=458></COLGROUP>
	<TBODY>
		<TR>
			<TD COLSPAN=5 WIDTH=646 HEIGHT=17 ALIGN=LEFT VALIGN=MIDDLE><FONT FACE="Times New Roman">EK-1</FONT></TD>
			</TR>
		<TR>
			<TD COLSPAN=5 HEIGHT=17 ALIGN=RIGHT VALIGN=MIDDLE><FONT FACE="Times New Roman">Sayfa No: &hellip;</FONT></TD>
			</TR>
		<TR>
			<TD COLSPAN=5 HEIGHT=17 ALIGN=CENTER VALIGN=MIDDLE><FONT FACE="Times New Roman">KARAR DEFTERİ</FONT></TD>
			</TR>
		<TR>
			<TD HEIGHT=17 ALIGN=CENTER VALIGN=MIDDLE><BR></TD>
			<TD ALIGN=CENTER VALIGN=MIDDLE><BR></TD>
			<TD ALIGN=CENTER VALIGN=MIDDLE><BR></TD>
			<TD ALIGN=CENTER VALIGN=MIDDLE><BR></TD>
			<TD ALIGN=CENTER VALIGN=MIDDLE><BR></TD>
		</TR>
		<TR>
			<TD class="w3-border w3-border-black" COLSPAN=5 HEIGHT=29 ALIGN=CENTER VALIGN=MIDDLE>Kararın</TD>
			</TR>
		<TR>
			<TD class="w3-border w3-border-black" HEIGHT=34 ALIGN=CENTER VALIGN=MIDDLE>No'su</TD>
			<TD class="w3-border w3-border-black" COLSPAN=3 ALIGN=CENTER VALIGN=MIDDLE>Tarihi</TD>
			<TD class="w3-border-top w3-border-bottom w3-border-right w3-border-black" ALIGN=CENTER VALIGN=MIDDLE>Konusu</TD>
		</TR>
		<TR>
			<TD class="w3-border w3-border-black"  ALIGN=CENTER ><input style="border-bottom:none" class="w3-input" type="number" name="quantity" min="1" max="55"></TD>
			<TD class="w3-border w3-border-black" COLSPAN=3 ALIGN=CENTER >
      <button class="w3-button" onclick='getElementById("tarih").innerHTML=Date(); getElementById("tarih1").style.display=none'>Bugün</button>
      <p id="tarih"/>
      <input id="tarih1" style="border-bottom:none" class="w3-input" type="date" value=""/>
      </TD>
                        <TD class="w3-border-top w3-border-bottom w3-border-right w3-border-black" ALIGN=LEFT ><textarea style="border-bottom:none"  class="w3-input" rows="4" cols="50"></textarea></TD>
		</TR>
		<TR>
			<TD class="w3-border-top w3-border-bottom w3-border-black" COLSPAN=5 HEIGHT=17 ALIGN=CENTER VALIGN=MIDDLE><BR></TD>
			</TR>
		<TR>
			<TD class="w3-border w3-border-black" COLSPAN=5 HEIGHT=29 ALIGN=CENTER VALIGN=MIDDLE>Toplantıya Katılan Üyelerin Adı ve Soyadı</TD>
			</TR>
		<TR>
			<TD STYLE="border-left: 1px solid #000000" COLSPAN=3 HEIGHT=23 ALIGN=LEFT VALIGN=MIDDLE>Başkan</TD>
			<TD ALIGN=CENTER VALIGN=MIDDLE>:</TD>
                        <TD class="w3-border-bottom w3-border-black" VALIGN=MIDDLE><input class="w3-input" type="text"/><BR></TD>
		</TR>
		<TR>
			<TD class="w3-border-bottom w3-border-left w3-border-black"  COLSPAN=3 ROWSPAN=5 HEIGHT=115 ALIGN=LEFT VALIGN=TOP>Üyeler</TD>
			<TD ALIGN=CENTER VALIGN=MIDDLE>:</TD>
			<TD class="w3-border-top w3-border-bottom w3-border-right w3-border-black" ALIGN=CENTER VALIGN=MIDDLE><textarea style="border-bottom:none"  class="w3-input" rows="10" cols="50"></textarea></TD>
		</TR>
		<TR>
			<TD ALIGN=CENTER VALIGN=MIDDLE><BR></TD>
			<TD class="w3-border-top w3-border-bottom w3-border-right w3-border-black" ALIGN=CENTER VALIGN=MIDDLE><BR></TD>
		</TR>
		<TR>
			<TD ALIGN=CENTER VALIGN=MIDDLE><BR></TD>
			<TD STYLE="border-right: 1px solid #000000" ALIGN=CENTER VALIGN=MIDDLE><BR></TD>
		</TR>
		<TR>
			<TD ALIGN=CENTER VALIGN=MIDDLE><BR></TD>
			<TD STYLE="border-top: 1px solid #000000; border-right: 1px solid #000000" ALIGN=CENTER VALIGN=MIDDLE><BR></TD>
		</TR>
		<TR>
			<TD STYLE="border-bottom: 1px solid #000000" ALIGN=CENTER VALIGN=MIDDLE><BR></TD>
			<TD class="w3-border-top w3-border-bottom w3-border-right w3-border-black" ALIGN=CENTER VALIGN=MIDDLE><BR></TD>
		</TR>
		<TR>
			<TD STYLE="border-top: 1px solid #000000" COLSPAN=5 HEIGHT=23 ALIGN=CENTER VALIGN=TOP><BR></TD>
			</TR>
		<TR>
			<TD class="w3-border w3-border-black" COLSPAN=5 HEIGHT=29 ALIGN=CENTER VALIGN=MIDDLE>Kararın Metni</TD>
			</TR>
		<TR>
			<TD class="w3-border w3-border-black" COLSPAN=5 ROWSPAN=14 HEIGHT=510 ALIGN=CENTER VALIGN=MIDDLE>
                        
                            <textarea style="border-bottom:none"  class="w3-input" rows="20" cols="50"></textarea>
                         <button  class="w3-button w3-right w3-centered" ><i class="fa fa-print"></i> yazdır</button>
                        </TD>
			
	</TBODY>
</TABLE>

    
    </div>
          
  <br>
  <div class="w3-container w3-dark-grey w3-padding-32">
    <div class="w3-row">
      <div class="w3-container w3-third">
        <h5 class="w3-bottombar w3-border-green">Yönetim</h5>
        <p>Karar defteri</p>
        <p>Yasal mevzuat</p>
        <p>City</p>
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
    <h4>FOOTER</h4>
    <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
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

function openCity(cityName) {
    var i;
    var x = document.getElementsByClassName("sorun");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none"; 
    }
    document.getElementById(cityName).style.display = "block"; 
}

</script>
<script src="../js/script.js" type="text/javascript"></script>

</body></html>