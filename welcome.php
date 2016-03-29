<!DOCTYPE html>
<html>
<head>
<script src="3.js"></script>
<style>



div.button{
     position: absolute;
    top: 500px;
    right:1060px;
    width: 20px;
    height: 100px;
    z-index: 3;
}



.img1::before {
    position:absolute;
    
    /*left:50;
    margin: 5px;
    border: 1px solid #ccc;
    float: left;
    width: 200px;*/
}

div.img2{
    position:absolute;
   top:7px;
   right:430px;
    background: (100,100,100,0.5);
}

div.img3{
   
    position:absolute;
    right:430px;
    top: 287px;
    background: (100,100,100,0.5);
    width:600;
    height: 467;
    background-image: url('img/b3.jpg') no-repeat;
   
} 


div.img4{
    position:absolute;
    bottom: -30px;
    z-index: 1;
}

div.logo1{
    position: absolute;
    left:80px;
    top:600px;
    border: 2px;
    margin: 20px;
    z-index: 4;

}

div.logo2{
    position: absolute;
    left:150px;
    top:600px;
    border: 2px;
    margin: 20px;
    z-index: 4;

}
div.logo3{
    position: absolute;
    left:220px;
    top:600px;
    border: 2px;
    margin: 20px;
    z-index: 4;
}




</style>
</head>



<body>
<div class = "button">
     <a target="_blank" href="//page of about us">
       <img src="IOE-library-system/img/aboutus.jpg" alt="1" width="50" onmousedown="mousedown();" onmouseover="this.src='IOE-library-system/AboutUs_button/aboutuso.png';" onmouseout="this.src='IOE-library-system/img/aboutus.jpg';">
   </a>
</div>



<div class="img1">
    <img src="IOE-library-system/img/b1.jpg" alt="1" width="1000" height="747">
  </a>
</div>

<div class="img2">
    <img src="IOE-library-system/img/b2.jpg" alt="2" width="500" height = "300">
  </a>
</div>

<div class="img3">
   <a  target="_blank" href="index.php">
<img src='IOE-library-system/img/b3.jpg' width='600' height='467' onmouseover="this.src='IOE-library-system/img/b32.jpg';" onmouseout="this.src='IOE-library-system/img/b3.jpg';" onmousedown="mousedown();"/>
  </a>
</div>

<div class="img4">
    <img src="IOE-library-system/img/b4.jpg" alt="4" width="400" height="300">
  </a>
</div>


</div>


<body>
<html>