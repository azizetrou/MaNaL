<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<script type="text/javascript">
function menu() {
  var x = document.getElementById("menu1");
      x.style.position = "absolute";
      x.style.width = "100%";
      if (x.style.display === "block") {
          x.style.display = "none";
      } else {
          x.style.display = "block";
      }
}
</script>
<body>
    <a class="menu" onclick="menu()"><i class="fas fa-bars"></i></a>
    <div class="menu-bar" id="menu1">
        <a href="" style="color: #ff4757;">الرئيسية <i class="fas fa-home"></i></a>
        <a href="">أخبار <i class="fas fa-newspaper"></i></a>
        <a href="">مقالات <i class="far fa-newspaper"></i></a>
        <a href="">تقارير <i class="far fa-clipboard"></i></a>
        <a href="">بيانات صحفية <i class="fas fa-camera"></i></a>
        <a href="">تواصل معنا <i class="fas fa-address-book"></i></a>
    </div>


    </body>
    </html>
