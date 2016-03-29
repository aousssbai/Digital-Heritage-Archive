<?php


require("../header.php");



if(isLogged()) {
    
    if ($user->getUserType() == 2) {

         if(isset($_POST["postExercice"]))

        {
                
        $type = 2;
        $groupNumber = $_POST['group_number'];
        $title = $_POST['title'];
        $published = $_POST['published'];
        $format = $_POST['format'];
        $creator = $_POST['creator'];
        $held = $_POST['held'];
        $usage = $_POST['Usage'];
        $shelfmark = $_POST['Shelfmark'];
        $description = $_POST['Description'];
        

        $newExerciceArray = Exercice::returnDataArrayFromData($groupNumber, $type, $title, $published, $format, $creator,$held, $usage, $shelfmark, $description);
        $newExercice = new Exercice($newExerciceArray);

        

        $exerciceManager = new ExerciceManager($db);
        $exerciceManager->createAdmin($newExercice);

        
                 $message = new Alert("success", true);
                 $message->addText('project successfuly published on the homepage');
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

