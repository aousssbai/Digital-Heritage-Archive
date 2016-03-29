<?php


class UserManager
{
    protected $db;

    public function __construct($db) {
        $this->setDb($db);
    }

    protected function setDb($db) {
        $this->db=$db;
    }

    protected function create(User $user) {
        $q = $this->db->prepare('INSERT INTO users(userType, progress, email, firstName, lastName, passWord)
                                  VALUES(:userType, :progress, :email, :firstName, :lastName, :passWord)');
        $q->execute(array(
            'userType' => $user->getUserType(),
            'progress' => $user->getProgress(),
            'email' => $user->getEmail(),
            'firstName' => $user->getFirstName(),
            'lastName' => $user->getLastName(),
            'passWord' => $user->getPassWord()
        ));
    }

    protected function update(User $user) {
        $q = $this->db->prepare('UPDATE users SET userType = :userType, progress = :progress, email = :email,firstName =:firstName, lastName = :lastName, passWord = :passWord WHERE id = :id');
        $q->execute(array(
            'userType' => $user->getUserType(),
            'progress' => $user->getProgress(),
            'email' => $user->getEmail(),
            'firstName' => $user->getFirstName(),
            'lastName' => $user->getLastName(),
            'passWord' => $user->getPassWord(),
            'id' => $user->getId()
        ));
    }

    public function getUnique($id) {
        $q = $this->db->prepare('SELECT id,userType,progress,email,firstName,lastName,passWord FROM users WHERE id = :id');
        $q->execute(array(
            'id' => $id
        ));

        $donnes = $q->fetch(PDO::FETCH_ASSOC);

        return new User($donnes);
    }

    public function getUniqueFromEmail($email) {
        $q = $this->db->prepare('SELECT id,userType,progress,email,firstName,lastName,passWord FROM users WHERE email = :email');
        $q->execute(array(
            'email' => $email
        ));

        if ($q->rowCount()!=0) {
            $donnes = $q->fetch(PDO::FETCH_ASSOC);
            return new User($donnes);
        } else {
            return 0;
        }
    }

    public function delete(User $user) {
        $q = $this->db->prepare('DELETE FROM users WHERE id = :id');
        $q->execute(array(
            'id' => $user->getId()
        ));
    }

    public function save(User $user) {
        //Create or Update otherwise
        $q = $this->db->prepare('SELECT id,firstName FROM users WHERE id = :id');
        $q->execute(array(
            'id' => $user->getId()
        ));

        if ($q->rowCount()==0)
        {
            $this->create($user);
        }
        else
        {
            $this->update($user);
        }
    }
}