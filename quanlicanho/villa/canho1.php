<?php session_start() ?>
<!DOCTYPE html>
<html>
<title>Căn Hộ Mẫu 1</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}
.mySlides {display: none}
</style>
<body class="w3-content w3-border-left w3-border-right">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-light-grey w3-collapse w3-top" style="z-index:3;width:260px" id="mySidebar">
  <div class="w3-container w3-display-container w3-padding-16">
    <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-transparent w3-display-topright"></i>
    <h3>Căn Hộ A1</h3>
    <h3>Chỉ từ 4.000.000d</h3>
    <h6>Mỗi tháng</h6>
    <hr>
    <form action="/action_page.php" target="_blank">
      <p><label><i class="fa fa-calendar-check-o"></i> Check In</label></p>
      <input class="w3-input w3-border" type="text" placeholder="DD MM YYYY" name="CheckIn" required>          
      <p><label><i class="fa fa-calendar-o"></i> Check Out</label></p>
      <input class="w3-input w3-border" type="text" placeholder="DD MM YYYY" name="CheckOut" required>         
      <p><label><i class="fa fa-male"></i> Người Lớn</label></p>
      <input class="w3-input w3-border" type="number" value="1" name="Adults" min="1" max="6">              
      <p><label><i class="fa fa-child"></i> Trẻ Nhỏ</label></p>
      <input class="w3-input w3-border" type="number" value="0" name="Kids" min="0" max="6">
      <p><button class="w3-button w3-block w3-green w3-left-align" type="submit"><i class="fa fa-search w3-margin-right"></i> Kiểm Tra Căn Hộ Trống</button></p>
    </form>
  </div>
  <div class="w3-bar-block">
    <a href="#apartment" class="w3-bar-item w3-button w3-padding-16"><i class="fa fa-building"></i> Căn Hộ của chúng tôi</a>
   
    <a href="#contact" class="w3-bar-item w3-button w3-padding-16"><i class="fa fa-envelope"></i> Liên Hệ</a>
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-bar w3-top w3-hide-large w3-black w3-xlarge">
  
  <a href="javascript:void(0)" class="w3-right w3-bar-item w3-button" onclick="w3_open()"><i class="fa fa-bars"></i></a>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main w3-white" style="margin-left:260px">

  <!-- Push down content on small screens -->
  <div class="w3-hide-large" style="margin-top:80px"></div>

  <!-- Slideshow Header -->
  
<style>
body {
  font-family: Arial;
  margin: 0;
}

* {
  box-sizing: border-box;
}

img {
  vertical-align: middle;
}

/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}
</style>
<body>

<h2 style="text-align:center">Thư Viện Ảnh</h2>

<div class="container">
  <div class="mySlides">
    <div class="numbertext">1 / 6</div>
    <img src="images\lv1.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
    <img src="images\img_2.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
    <img src="images\img_2.jpg" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
    <img src="images\img_3.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
    <img src="images\img_4.jpg" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">6 / 6</div>
    <img src="images\img_5.jpg" style="width:100%">
  </div>
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <div class="row">
    <div class="column">
      <img class="demo cursor" src="images\img_2.jpg" style="width:100%" onclick="currentSlide(1)" alt="Living Rooms">
    </div>
    <div class="column">
      <img class="demo cursor" src="images\img_5.jpg" style="width:100%" onclick="currentSlide(2)" alt="Living Rooms">
    </div>
    <div class="column">
      <img class="demo cursor" src="images\img_2.jpg" style="width:100%" onclick="currentSlide(3)" alt="Living Rooms">
    </div>
    <div class="column">
      <img class="demo cursor" src="images\img_3.jpg" style="width:100%" onclick="currentSlide(4)" alt="Living Rooms">
    </div>
    <div class="column">
      <img class="demo cursor" src="images\img_2.jpg" style="width:100%" onclick="currentSlide(5)" alt="Living Rooms">
    </div>    
    <div class="column">
      <img class="demo cursor" src="images\img_4.jpg" style="width:100%" onclick="currentSlide(6)" alt="Living Rooms">
    </div>
  </div>
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
  <div class="w3-container">
    <h4><strong>Không Gian Sống</strong></h4>
    <div class="w3-row w3-large">
      <div class="w3-col s6">
        <p><i class="fa fa-fw fa-male"></i> Số Người Ở:  5</p>
        <p><i class="fa fa-fw fa-bath"></i> Nhà Tắm: 2</p>
        <p><i class="fa fa-fw fa-bed"></i> căn hộ Ngủ: 2</p>
      </div>
      <div class="w3-col s6">
        <p><i class="fa fa-fw fa-bed"></i> Nhà Khách: 1</p>
        <p><i class="fa fa-fw fa-bed"></i> Nhà Bếp: 1</p>
      </div>
    </div>
    <hr>
    
    <h4><strong>Tiện Ích Đi Kèm</strong></h4>
    <div class="w3-row w3-large">
      <div class="w3-col s6">
        <p><i class="fa fa-fw fa-shower"></i> Shower</p>
        <p><i class="fa fa-fw fa-wifi"></i> WiFi</p>
        <p><i class="fa fa-fw fa-tv"></i> TV</p>
      </div>
      <div class="w3-col s6">
        <p><i class="fa fa-fw fa-cutlery"></i> Nội Thất</p>
        <p><i class="fa fa-fw fa-thermometer"></i> Có chỗ phơi đồ</p>
        <p><i class="fa fa-fw fa-car"></i> Miễn phí Giữ Xe</p>
      </div>
    </div>
    <hr>
    
    <h4><strong>Thông Tin Bổ Sung</strong></h4>
    <p>Di chuyển
Khoảng cách từ trung tâm thành phố: 3.00 Km</p>
<p>
Thời gian đến sân bay (phút): 45 phút.</p>
    <p>We accept: <i class="fa fa-credit-card w3-large"></i> <i class="fa fa-cc-mastercard w3-large"></i> <i class="fa fa-cc-amex w3-large"></i> <i class="fa fa-cc-cc-visa w3-large"></i><i class="fa fa-cc-paypal w3-large"></i></p>
    <hr>
    
    <h4><strong>Rules</strong></h4>
    <p>
      1. 
Bảng giá chỉ áp dụng cho duy nhất căn hộ mà khách đang ở và không bao gồm bất kỳ giá nào khác của nhà nước. Các bữa ăn và dịch vụ khác sẽ được tính thêm phí. Du khách muốn biết về mức giá của căn hộ mình đang ở, vui lòng liên hệ với trưởng quản lý ca trực . Những giấy tờ thủ tục về giá căn hộ bắt buộc phải ký khi khách đến chung cư.</p>  

<p>2. Thanh toán mọi hóa đơn
Mọi hóa đơn yêu cầu được thanh toán khi xuất trình. chung cư không chấp nhận thanh toán bằng séc cá nhân.</p>

<p>3. Lưu trữ về hành lý và đồ vật tư của khách    
Trong trường hợp du khách không thể thanh toán các hóa đơn, ban quản lý có quyền hạn với hành lý và đồ vật tư của du khách, cũng như có quyền lưu giữ những đồ vật đó hoặc bán đấu giá không cần ý kiến của du khách. Số tiền bán được sẽ tương xứng với số tiền du khách thiếu, tuân thủ những thủ thục thu hồi vốn do chính sách quản lý yêu cầu, mà không ảnh hưởng đến quyền lợi của ban quản lý.</p>

<p>4. Thủ tục nhận căn hộ
Du khách vui lòng xuất trình các giấy tờ tùy thân như sau: Giấy chứng minh nhân dân, hộ chiếu và giấy tờ tạm thú khi nhận căn hộ. Theo luật, du khách trước khi nhận căn hộ bắt buộc phải xuất trình những giấy tờ tùy thân để chung cư làm hồ sơ. Các giấy tờ này sẽ được trả trước khi du khách khởi hành.</p>



<p>5. Thủ thục khởi hành
Thời gian làm thủ tục khởi hành vui lòng thông báo cho lễ tân nếu bạn chưa có mong muốn trả căn hộ đúng thời gian quy định của chung cư. Việc gia hạn thêm sẽ còn tùy thuộc vào tình trạng khả thi của căn hộ đó. Nếu căn hộ đang ở tình trạng trống, chưa có ai đặt căn hộ, thì du khách sẽ trả theo mức phí bình thường. Trong trường hợp, du khách không rời khỏi căn hộ khi hết thời hạn quy định thì ban quản lý có quyền di chuyển người và đồ vật tư ra khỏi căn hộ.
</p>


<p>6. Đồ vật tư của du khách
Du khách đặc biệt yêu cầu cẩn trọng khóa căn hộ trước khi đi ra khỏi căn hộ. Để thuận tiện cho du khách, trong mỗi căn hộ đều được cung cấp két an toàn để du khách cất giữ đồ vật giá trị. Ban quản lý sẽ không chịu bất kỳ trách nhiệm nào đối với đồ vật tư và tài sản của du khách như mất mát hay hư hại trong căn hộ chung cư, tủ khóa, cũng như những bộ phận khác của chung cư hoặc bất kỳ nguyên nhân nào bao gồm trộm cắp.</p>



<p>7. Hàng nguy hiểm
Tuyệt đối cấm mang và lưu trữ trong chung cư những hàng hóa sống chưa chế biến, phim ảnh đồi trụy, những đồ vật dễ gây ra cháy nổ hoặc nguy hiểm, hàng cấm hoặc hàng có chất độc hại. Du khách là người duy nhất chịu trách nhiệm, với những vật phẩm mà du khách mang tới hay sự cẩu thả không tuân thủ hướng dẫn của chung cư. Sẽ chịu trách nhiệm pháp lý cũng như trách nhiệm đền bù thiệt hại tài sản đối với ban quản lý, du khách khác, khách đến tham quan, đại lý và nhân viên và những thiệt hại khác

Nghiêm cấm cờ bạc, buôn lậu, mại dâm, vũ khí, vật liệu cháy nổ, thuốc độc, ma túy, động vật và thực phẩm có vị cay trong địa phận chung cư.</p>




  <h2> Nhanh Tay Giữ  Chỗ Khách Sạn </h2>
    <p>
      <a href="login.php"> 


<button type="submit" class="w3-button w3-green w3-third">Giữ Chỗ Ngay</button>
      </a>


    </p>
  </div>
  <hr>
  
  <!-- Contact -->
  <div class="w3-container" id="contact">
    <h2>Liên Hệ Với Chúng Tôi</h2>
    <i class="fa fa-map-marker" style="width:30px"></i> Thủ Dầu Một, Bình Dương<br>
    <i class="fa fa-phone" style="width:30px"></i> Phone: +84362733555<br>
    <i class="fa fa-envelope" style="width:30px"> </i> Email:trongthanh20161998@mail.com<br>
    <p>Mời bạn đặt câu hỏi:</p>
    <form action="/action_page.php" target="_blank">
      <p><input class="w3-input w3-border" type="text" placeholder="Name" required name="Name"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Email" required name="Email"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Message" required name="Message"></p>
    <button type="submit" class="w3-button w3-green w3-third">Gửi câu hỏi</button>
    </form>
  </div>
  
  <footer class="w3-container w3-padding-16" style="margin-top:32px">Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.school</a></footer>

<!-- End page content -->
</div>

<!-- Subscribe Modal -->


<script>
// Script to open and close sidebar when on tablets and phones
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

// Slideshow Apartment Images
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
  }
  x[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " w3-opacity-off";
}
</script>

</body>
</html>
