<?php


class User
{
    protected $id;
    protected $userType;        // 1 is Regular User, 2 is Admin
    protected $progress;
    protected $email;
    protected $firstName;
    protected $lastName;
    protected $passWord;

    

    public function __construct($donnes)
    {
        foreach ($donnes as $key => $value){
            $method = 'set'.ucfirst($key);

            if (method_exists($this,$method)) {
                $this->$method($value);
            }
        }
    }

    public static function returnDataArrayFromData($userType, $progress, $email, $firstName, $lastName, $passWord) {
        $arrayData = array(
            'userType' => $userType,
            'progress' => $progress,
            'email' => $email,
            'firstName' => $firstName,
            'lastName' => $lastName,
            'passWord' => $passWord
        );

        return $arrayData;
    }

    //getters

    public function getId()
    {
        return $this->id;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function getPassWord()
    {
        return $this->passWord;
    }

    public function getUserType()
    {
        return $this->userType;
    }

    public function getProgress()
    {
        return $this->progress;
    }
    //Setters


    public function setId($id)
    {
        $id = (int) $id;
        if ($id>0) {
            $this->id = $id;
        }
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setProgress($progress)
    {
        $this->progress = $progress;
    }

    public function setUserType($userType)
    {
        $this->userType = $userType;
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function setPassWord($passWord)
    {
        $this->passWord = $passWord;
    }


}