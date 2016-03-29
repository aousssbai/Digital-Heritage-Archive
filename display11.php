<?php


include("header.php");



if(isLogged())

{
    
    if ($user->getUserType()==2 ||  $user->getUserType()==1) 
    {
        createPage("exercice-display11");
    } 
    else 
    	{

    		$message = new Alert("danger", true);
                $message->addText("you do not have the right to view the project");
                $message->messageToSession();
                header("Location: ../index.php");
            exit();
    	}

}

?>