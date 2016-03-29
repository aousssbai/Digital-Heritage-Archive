
 <html>
<div class="container">
<head>
  <script src="3.js"></script>
<style>




div.groupimg { 
    float: right;
    position: absolute;
    right: 250px;
    top:270px;
}

div.info{
max-width: 400px;
top:200px;



}



div.button{
    position: absolute;
    top: 270px;
    left:1223px;

    width: 20px;
    height: 100px;
}

<?php
       Alert::displayMessage();
        $dbFactory = new DBFactory();
        $db = $dbFactory->getMysqlConnexionWithPDO();
        $exerciceManager = new ExerciceManager($db);

        ?>
        <?php

$exercices = $exerciceManager->getListChecked3();

?>



</style>
</head>

    </br>
    <body>



<div class="head center-block">
    <img class="center block img-responsive"src="IOE-library-system/img/head.jpg" alt="1" width = "1250" height = "2000">
  </a>
</div> 

<div class = "groupimg ">
   
<div class="row">
  <div class="col-sm-60 col-md-40">
    <div class="thumbnail">
        
 <img src="IOE-library-system/img/3.jpg" alt="1" width="550" height="550" >


     
      <div class="caption">
       
        
        
      </div>
    </div>
  </div>
</div>
</div>
<div class = "button">
     <a target="_blank" href="welcome.php">
        <img src="IOE-library-system/img/home.png" alt="1" width="60" onmousedown="mousedown();">
   </a>
</div>

<div class="row">
  <div class="col-xs-6 col-md-6">
    <a class="thumbnail">
     <div class ="info">


    <form action=<?php ?>"edit/edit-exercice.php" method="post" id="loginForm">

        <div class="form-group">
            <label for="groupNumber">Group number:</label>
            <input type="text" class="form-control" placeholder="GroupNumber" name="group_number" required value="<?php echo $exercices->getGroupNumber();?>">
        </div>

        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" placeholder="Full title" name="title" required value="<?php echo $exercices->getTitle();?>">
        </div>

        <div class="form-group">
            <label for="published">Published:</label>
            <input type="text" class="form-control" placeholder="Published" name="published" required value="<?php echo $exercices->getPublished();?>">
        </div>

        <div class="form-group">
            <label for="format">Format:</label>
            <input type="text" class="form-control" placeholder="Format" name="format" required value="<?php echo $exercices->getformat();?>">
        </div>

        <div class="form-group">
            <label for="creator">Creator</label>
            <input type="text" class="form-control" placeholder="Creator" name="creator" required value ="<?php echo $exercices->getcreator();?>">
        </div>

        <div class="form-group">
            <label for="held">Held by</label>
            <input type="text" class="form-control" placeholder="Held by" name="held" required value ="<?php echo $exercices->getheld();?>">
        </div>

        <div class="form-group">
            <label for="myUsage">Usage</label>
            <input type="text" class="form-control" placeholder="Usage" name="Usage" required value ="<?php echo $exercices->getUsage();?>">
        </div>

        <div class="form-group">
            <label for="shelfmark">Shelfmark</label>
            <input type="text" class="form-control" placeholder="Shelfmark" name="Shelfmark" required value ="<?php echo $exercices->getshelfmark();?>">
        </div>

        <div class="form-group">
            <label for="Description">Description</label>
            <input type="text" class="form-control" placeholder="Description" name="Description" required value ="<?php echo $exercices->getDescription();?>">
        </div>

         

      


        <input type="hidden" name="postExercice" value="111">

        <?php if ($exercices->getId() > 0) {?>
            <input type="hidden" name="id" value="<?php echo $exercice->getId();?>">
            <?php }?>

       </form>

    </a>
  </div>

<body>
<html>
