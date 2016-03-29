<?php


include("header.php");



if(isLogged())

{
    
    if ($user->getUserType()==1) 
    {
        createPage("home.visitor.submit.project");
    } 
    else 
    	{

    		$message = new Alert("danger", true);
                $message->addText("you do not have the right to submit a project");
                $message->messageToSession();
                header("Location: ../index.php");
            exit();
    	}

}

?>