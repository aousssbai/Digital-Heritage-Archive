

    <div class="container">

    <?php
   
        Alert::displayMessage();
        $dbFactory = new DBFactory();
        $db = $dbFactory->getMysqlConnexionWithPDO();
        $exerciceManager = new ExerciceManager($db);

    ?>

    <?php

$exercices = $exerciceManager->getListUnchecked6();

?>

    </br>
    <h1 class="text-center">Edit Project</h1>


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

        <button type="submit" class="btn btn-primary center-block">Publish</button>
    </form>
