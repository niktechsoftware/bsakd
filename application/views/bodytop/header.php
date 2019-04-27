<body>
<!===================================================Audio Play===================================================================>
<audio controls>
  <source src="https://basiceducationup.com/assets/audio/horse.ogg" type="audio/ogg">
  <source src="https://basiceducationup.com/assets/audio/mix_1m02s (audio-joiner.com).mp3" type="audio/mpeg">
</audio>
<!===================================================Audio Play end ===============================================================>
<p class="screen"><a href="screenread.html">Screen Reader Access</a></p>
<!===================================================Social Icon & time , date=====================================================>
<div class="container" >
<a href="https://www.facebook.com/UP-Basic-Education-1895607067351685/" target="_blank"><img src="<?php echo base_url()?>assets/images/facebook.png" class="social_icon"></a>
<a href="#"><img src="<?php echo base_url()?>assets/images/in.png" class="social_icon"></a>
<a href="#"><img src="<?php echo base_url()?>assets/images/pint.png" class="social_icon"></a>
<a href="https://twitter.com/basic_up" target="_blank"><img src="<?php echo base_url()?>assets/images/twitter.png" class="social_icon"></a>
  <div class="row text-right" style="color:#fff; padding:5px 16px;">
  Today Date : <script>
var now = new Date();
document.write(now.toDateString());
</script>,
 Time : <script>
var now = new Date();
document.write(now.toLocaleTimeString());
</script>
  </div>
  </div>
<!===================================================Social Icon & time , date End =====================================================>
<!===================================================Navbar and Header started =====================================================>

<div class="container" style="background:#fff; border-top-left-radius:20px;">
  <div class="row">
    <div class="col-sm-2" style="padding:10px;" align="center"><a href="http://basiceducationup.com/"><img src="<?php echo base_url()?>assets/images/logo.png" width="100"></a></div>
    <div class="col-sm-5" >
      <h1 style="font-weight: 600;">बेसिक शिक्षा विभाग  उo प्रo</h1>
    </div>
    <div class="col-sm-3 text-right"><img src="<?php echo base_url()?>assets/images/serv.png" width="300"></div>
    <div class="col-sm-2 text-center"><img src="<?php echo base_url()?>assets/images/indianembelem.png" width="100"></div>
  </div>
</div>
<div class="container">
  <div class="row">
    <nav class="navbar bg">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
    </div>
    <div>
      <div class="collapse navbar-collapse uk2" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="<?php echo base_url();?>">होम पेज</a></li>
          <li><a href="<?php echo base_url();?>index.php/welcome/about">हमारे  बारे में </a></li>
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">संगठनात्मक ढांचा <span class="caret"></span></a>
          <ul class="dropdown-menu">
              <li><a href="https://basiceducationup.com/assets/pdf/structure.pdf">संगठनात्मक प्रारूप</a></li>
              <li><a href="<?php echo base_url();?>index.php/welcome/structure">संगठनात्मक सदस्य </a></li>
              <li><a href="<?php echo base_url();?>index.php/welcome/member">सदस्य सूची </a></li>
			</ul>
         </li>
          <li><a href="<?php echo base_url();?>index.php/welcome/shasna">शासनादेश</a></li>
          <li><a href="<?php echo base_url();?>index.php/welcome/rtipage" >विद्यालय सूची </a></li>
          <ul class="dropdown-menu">
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">विद्यालय सूची <span class="caret"></span></a>
          <li><a href="<?php echo base_url();?>index.php/welcome/rtipage"> </a></li>
          </ul>
         <li><a href="<?php echo base_url();?>index.php/welcome/rtepage">आर टी ई </a></li>
          <li><a href="<?php echo base_url();?>index.php/welcome/report">रिपोर्ट </a></a>
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">मल्टीमीडिया <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">प्रकाशन  </a></li>
              <li><a href="<?php echo base_url();?>index.php/welcome/gallery">फोटो गैलरी </a></li>
              <li><a href="<?php echo base_url();?>index.php/welcome/video">वीडियो गैलरी </a></li>
			</ul>
          </li>
          <li><a href="<?php echo base_url();?>index.php/welcome/etender">ई-निविदाएं </a></li>
          <li><a href="<?php echo base_url();?>index.php/welcome/suggestion">सुझाव / समस्या </a></li>
          <li><a href="<?php echo base_url();?>index.php/welcome/contact">संपर्क करें </a></li>
        </ul>
      </div>
    </div>
  </div>
  </nav>
</div>
</div>