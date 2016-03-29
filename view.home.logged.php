<html>
<div class="container">

    <?php

        Alert::displayMessage();
        $dbFactory = new DBFactory();
        $db = $dbFactory->getMysqlConnexionWithPDO();
        $exerciceManager = new ExerciceManager($db);  

 ?>

    
<head>
  <script src="IOE-library-system/3.js"></script>
<style>


div.button
{
    position: fixed;
    top: 230px;
    right: 180px;
    width: 20px;
    height: 100px;

}

div.img1 {
    position:relative;
    left:30px;
    margin: 5px;
    border: 1px solid #ccc;
    float: left;
    width: 200px;
}


div.img1:hover {
    border: 1px solid #777;
}

div.img1 img {
    width: 100%;

 /*   height: 100%;*/
}

div.desc {
    padding: 15px;
    text-align: center;
}


</style>
</head>
<body>

<div class = "button">
     <a target="_blank" href="welcome.php" >
       <img src="IOE-library-system/img/home.png" alt="1" width="50" onmousedown="mousedown();">
   </a>
</div>

<div class="head center-block">
   <img class="center-block img-responsive" src="IOE-library-system/img/head.jpg" alt="1" width = "1400" height = "200">

   <h2> Projects published on the homepage (user side)</h2>

</div> 
<?php
$exercices = $exerciceManager->getListChecked1();

if($exercices==0)
{

}
 else {$image1 = $exercices->displayTitle1();}




?><?php
$exercices = $exerciceManager->getListChecked2();

if($exercices==0)
{

}
 else {$image2 = $exercices->displayTitle2();}




?><?php
$exercices = $exerciceManager->getListChecked3();

if($exercices==0)
{

}
 else {$image3 = $exercices->displayTitle3();}




?><?php
$exercices = $exerciceManager->getListChecked4();

if($exercices==0)
{

}
 else {$image4 = $exercices->displayTitle4();}




?><?php
$exercices = $exerciceManager->getListChecked5();

if($exercices==0)
{

}
 else {$image5 = $exercices->displayTitle5();}




?><?php
$exercices = $exerciceManager->getListChecked6();

if($exercices==0)
{

}
 else {$image6 = $exercices->displayTitle6();}




?><?php
$exercices = $exerciceManager->getListChecked7();

if($exercices==0)
{

}
 else {$image7 = $exercices->displayTitle7();}




?><?php
$exercices = $exerciceManager->getListChecked8();

if($exercices==0)
{

}
 else {$image8 = $exercices->displayTitle8();}




?><?php
$exercices = $exerciceManager->getListChecked9();

if($exercices==0)
{

}
 else {$image9 = $exercices->displayTitle9();}




?><?php
$exercices = $exerciceManager->getListChecked10();

if($exercices==0)
{

}
 else {$image10 = $exercices->displayTitle10();}




?><?php
$exercices = $exerciceManager->getListChecked11();

if($exercices==0)
{

}
 else {$image11= $exercices->displayTitle11();}




?>

<?php
$exercices = $exerciceManager->getListChecked12();

if($exercices==0)
{

}
 else {$image12 = $exercices->displayTitle12();}




?>

<?php
$exercices = $exerciceManager->getListChecked13();

if($exercices==0)
{

}
 else {$image13 = $exercices->displayTitle13();}




?>
</div>

  



</div>
</html>
