<?php


require("header.php");

//If user is logged, show the logged home page
//Otherwise show the visitor home page

if(isLogged()){
    //-----------------User is already logged-------------------
    header("Location: index.php");

} elseif (isset($_POST["register"])&&$_POST["register"]=="111") {
    //----------------Receive form and check it--------------
    $postIsCorrect = true;

    //Save correct fields to reput them in the form
    $correctFields = array();

    //Create alert
    $message = new Alert("danger",true);

    // Check First Name
    if (strlen($_POST["firstName"])>=3) {
        $firstName = htmlspecialchars($_POST["firstName"]);
        $correctFields['firstName']=$firstName;
    } else {
        $postIsCorrect = false;
        $message->addText('First name is not valid.');
    }

    // Check Last Name
    if (strlen($_POST["lastName"])>=3) {
        $lastName = htmlspecialchars($_POST["lastName"]);
        $correctFields['lastName'] = $lastName;
    } else {
        $postIsCorrect = false;
        $message->addText('Last name is not valid.');
    }

    
    if (strlen($_POST["email"])>=3) {
        $email = htmlspecialchars($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $message->addText("Email is not valid.");
            $postIsCorrect = false;
        }else {
            $correctFields['email'] = $email;
        }
    } else {
        $postIsCorrect = false;
        $message->addText('Email is not valid.');
    }

    // Check Password
    if ( strlen($_POST["passWord"])>=3) {
        $passWord = htmlspecialchars($_POST["passWord"]);
    } else {
        $postIsCorrect = false;
        $message->addText('Password is not valid.');
    }

    // Check Password Confirm
    if ( strlen($_POST["passWordConfirm"])>=3) {
        $passWordConfirm = htmlspecialchars($_POST["passWordConfirm"]);
    } else {
        $postIsCorrect = false;
        $message->addText('Password is not valid.');
    }

    //Check that both are equal
    if (isset($passWord)&&isset($passWordConfirm)&&$passWord==$passWordConfirm) {
        $passWord = md5($passWord);
    } else {
        $postIsCorrect = false;
        $message->addText('Passwords are not the same.');
    }

    //-------If all fields are correct--------
    if ($postIsCorrect) {
        // Check that email doesn't exist yet
        $userManager = new UserManager($db);


        if (!($userManager->getUniqueFromEmail($email) instanceof User)) {
            //User doesn't exist yet, and data are checked
            //So we register user (userType 1,userStatus 1,..)

            $data = User::returnDataArrayFromData(1,1,$email,$firstName,$lastName,$passWord);
            $newUser = new User($data);
            $userManager->save($newUser);

            $message = new Alert('info',true);
            $message->addText('Welcome <strong>'.$firstName.'</strong>! You have successfully registered. You can now log in.');
            $message->messageToSession();

            header('Location: index.php');
            exit();

        } else {
            //User exist already ( email already used)
            $message->addText('Email address already registered.');
        }
    }

    //-------All fields are NOT correct OR user already registered --------
    // From here, there was a problem with one of the field or user already registered
    // We show the form again, prefill in with error message

    //Save message to transmit it to page
    $message->messageToSession();

    //Save correct fields to transmit to page
    $_SESSION['correctFields'] = $correctFields;

    createPage("register");

} else {
    //Visitor is on home page
    createPage("register");
}