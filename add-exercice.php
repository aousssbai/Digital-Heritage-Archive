<?php


require("../header.php");


        if(isLogged()) {
   
    if ($user->getUserType() == 1)
     {

         if(isset($_POST["postExercice"])&& $_POST["postExercice"] == "111")

        {
                
        $type = 1;
        $groupNumber = $_POST['group_number'];
        $title = $_POST['title'];
        $published = $_POST['published'];
        $format = $_POST['format'];
        $creator = $_POST['creator'];
        $held = $_POST['held'];
        $myUsage = $_POST['myUsage'];
        $shelfmark = $_POST['shelfmark'];
        $description = $_POST['Description'];
        

        $newExerciceArray = Exercice::returnDataArrayFromData($groupNumber, $type, $title, $published, $format, $creator,$held, $myUsage, $shelfmark, $description);
        $newExercice = new Exercice($newExerciceArray);
        print_r($newExercice);

        

        $exerciceManager = new ExerciceManager($db);
        $exerciceManager->createStudent($newExercice);

        
                 $message = new Alert("success", true);
                 $message->addText('project successfuly sent to Admin. Waiting for verification. ');
                 $message->messageToSession();
                 header('Location: ../index.php');
        }
     
        else 
        {
             $message = new Alert("danger", true);
                $message->addText('oops, we encountered a problem while reading your project. Please try again');
                $message->messageToSession();
                header("Location: ../index.php");
            exit();
        }
    }
}


        
       

