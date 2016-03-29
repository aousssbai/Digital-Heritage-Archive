<?php


include("header.php");

//If user is logged, show the logged home page
//Otherwise show the visitor home page

if(isLogged()){
    // ------------ User is already logged -------------
    if ($user->getUserType()==1) {
        createPage("home.logged");
    } elseif ($user->getUserType()==2) {
        createPage("home.admin");
    }

} elseif(isset($_POST["login"])&&$_POST["login"]=="111") {
    //-------------- Login form completed --------------

    $loginCorrect = true;

    //Create alert
    $message = new Alert("danger",true);

    //test two fields
    if (strlen($_POST["email"])>=3) {
        $email = htmlspecialchars($_POST["email"]);
    } else {
        $loginCorrect = false;
        $message->addText('Email is not valid.');
    }

    if ( strlen($_POST["passWord"])>=3) {
        $passWord = htmlspecialchars($_POST["passWord"]);
    } else {
        $loginCorrect = false;
        $message->addText('Password is not valid.');
    }

    //if the field content are correct, we check the user
    if ($loginCorrect) {
        $userManager = new UserManager($db);
        if ($userManager->getUniqueFromEmail($email) instanceof User) {
            $user = $userManager->getUniqueFromEmail($email);
            if ($user->getPassWord()==md5($passWord)){

                //Email exists and password is the good o

                    $_SESSION['user'] = $user;
                    $message = new Alert('info', true);
                    $message->addText('Hello <strong>' . $user->getFirstName() . '</strong>!');
                    $message->messageToSession();

                    header('Location: index.php');
                    exit();
            } else {
                $message->addText('Incorrect password.');
            }
        } else {
            $message->addText('Email address doesn\'t correspond to any users.');
        }
    }

    $message->messageToSession();
    createPage("home.visitor");


} else {
    //--------- Visitor is on home page ---------------
    createPage("home.visitor");

}