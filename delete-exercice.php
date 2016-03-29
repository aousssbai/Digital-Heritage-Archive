<?php

require("../header.php");

//If user is logged, show the logged home page
//Otherwise show the visitor home page

if(isLogged()) {
    // ------------ Admin is already logged -------------
    if ($user->getUserType() == 2) {

        if(isset($_GET['exercice'])) {
            $exerciceId = htmlspecialchars($_GET['exercice']);

            $exerciceManager = new ExerciceManager($db);
            $exercice = $exerciceManager->getUnique($exerciceId);

            if ($exercice instanceof Exercice) {
                $exerciceManager->delete($exercice);

                $message = new Alert("success", true);
                $message->addText('Exercice deleted.');
                $message->messageToSession();

            } else {
                $message = new Alert("danger", true);
                $message->addText('Exercice doesn\'t exist');
                $message->messageToSession();

            }

            header("Location: ../index.php");
            exit();
        }

    }

}

header("Location: ../index.php");
exit();