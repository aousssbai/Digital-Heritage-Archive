
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
    top: 200px;
    right: 30px;
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

   <h2> projects to be checked by the admin ( admin side) <h2>

</div> 
<?php
$exercices = $exerciceManager->getListUnchecked1();

if($exercices==0)
{

}
 else {$image1 = $exercices->displayTitledit1();}




?><?php
$exercices = $exerciceManager->getListUnchecked2();

if($exercices==0)
{

}
 else {$image2 = $exercices->displayTitledit2();}




?><?php
$exercices = $exerciceManager->getListUnchecked3();

if($exercices==0)
{

}
 else {$image3 = $exercices->displayTitledit3();}




?><?php
$exercices = $exerciceManager->getListUnchecked4();

if($exercices==0)
{

}
 else {$image4 = $exercices->displayTitledit4();}




?><?php
$exercices = $exerciceManager->getListUnchecked5();

if($exercices==0)
{

}
 else {$image5 = $exercices->displayTitledit5();}




?><?php
$exercices = $exerciceManager->getListUnchecked6();

if($exercices==0)
{

}
 else {$image6 = $exercices->displayTitledit6();}




?><?php
$exercices = $exerciceManager->getListUnchecked7();

if($exercices==0)
{

}
 else {$image7 = $exercices->displayTitledit7();}




?><?php
$exercices = $exerciceManager->getListUnchecked8();

if($exercices==0)
{

}
 else {$image8 = $exercices->displayTitledit8();}




?><?php
$exercices = $exerciceManager->getListUnchecked9();

if($exercices==0)
{

}
 else {$image9 = $exercices->displayTitledit9();}




?><?php
$exercices = $exerciceManager->getListUnchecked10();

if($exercices==0)
{

}
 else {$image10 = $exercices->displayTitledit10();}




?><?php
$exercices = $exerciceManager->getListUnchecked11();

if($exercices==0)
{

}
 else {$image11= $exercices->displayTitledit11();}




?>

<?php
$exercices = $exerciceManager->getListUnchecked12();

if($exercices==0)
{

}
 else {$image12 = $exercices->displayTitledit12();}




?>

<?php
$exercices = $exerciceManager->getListUnchecked13();

if($exercices==0)
{

}
 else {$image13 = $exercices->displayTitledit13();}




?>
</div>

  



</div>
</html>
