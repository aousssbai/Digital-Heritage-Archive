<?php


require("../header.php");

//If user is logged, show the logged home page
//Otherwise show the visitor home page

if(isLogged()) {
    // ------------ Admin is already logged -------------
    if ($user->getUserType() == 2) {

        if(isset($_POST["postExercice"])&&$_POST["postExercice"]=="111") {
            $exericeType = 2;
            $title = $_POST["title"];
            $published = $_POST["published"];
            $format = $_POST["format"];
            $creator = $_POST["creator"];
            $held = $_POST["held"];
            $usage = $_POST["usage"];
            $shelfmark = $_POST["shelfmark"];
            $description = $_POST["description"];
            

            if(isset($_POST["id"])){
                $id = $_POST["id"];
                $exercice = new Exercice(array(
                    $exericeType = 2;
                    'title' => $title,
                    'published' => $published,
                    'format' => $format,
                    'creator' => $creator,
                    'held' => $held,
                    'usage' => $usage,
                    'shelfmark' => $shelfmark,
                    'id' => $id,
                    'description' => $description
                    
                ));
            } else {
                $exercice = new Exercice(array(
                    $exericeType = 2;
                    'title' => $title,
                    'published' => $published,
                    'format' => $format,
                    'creator' => $creator,
                    'held' => $held,
                    'usage' => $usage,
                    'shelfmark' => $shelfmark,
                    'description' => $description
                    
                ));
            }

            $exerciceManager = new ExerciceManager($db);
            $exerciceManager->save($exercice);

            header('Location: ../index.php');
            exit();

        }

    }
}

header('Location: ../index.php');
exit();

