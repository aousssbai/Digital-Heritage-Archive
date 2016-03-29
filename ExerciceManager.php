 <?php


class ExerciceManager
{
    protected $db;

    public function __construct($db) {
        $this->setDb($db);
    }

    protected function setDb($db) {
        $this->db=$db;
    }
    

     function createStudent($exercice) {
        $type=1;
        $q = $this->db->prepare('INSERT INTO exercices (groupNumber, exerciceType, title, published ,format ,creator ,held ,shelfmark, description,  myUsage)
                                  VALUES (:groupNumber, :exerciceType , :title, :published, :format, :creator, :held, :shelfmark, :description,  :myUsage)');
        $q->execute(array(

            'groupNumber' => $exercice->getGroupNumber(),
            'exerciceType' => $type,
            'title' => $exercice->getTitle(),
            'published' => $exercice->getPublished(),
            'format' => $exercice->getFormat(),
            'creator' => $exercice->getCreator(),
            'held' => $exercice->getHeld(),
            'myUsage' => $exercice->getUsage(),
            'shelfmark' => $exercice->getShelfmark(),
            'description' => $exercice->getDescription()
            
        ));
    }

    function createAdmin($exercice) {
         $type=2;
        $q = $this->db->prepare('INSERT INTO exercices (groupNumber, exerciceType, title, published ,format ,creator ,held ,shelfmark, description,  myUsage)
                                  VALUES (:groupNumber, :exerciceType , :title, :published, :format, :creator, :held, :shelfmark, :description,  :myUsage)');
        $q->execute(array(

            'groupNumber' => $exercice->getGroupNumber(),
            'exerciceType' => $type,
            'title' => $exercice->getTitle(),
            'published' => $exercice->getPublished(),
            'format' => $exercice->getFormat(),
            'creator' => $exercice->getCreator(),
            'held' => $exercice->getHeld(),
            'myUsage' => $exercice->getUsage(),
            'shelfmark' => $exercice->getShelfmark(),
            'description' => $exercice->getDescription()
            
        ));
    }


    protected function update(Exercice $exercice) {
        $q = $this->db->prepare('UPDATE exercices SET title = :title, published = :published, format = :format,creator =:creator, held =:held, myUsage=:myUsage, shelfmark=:shelfmark,description=:description WHERE id = :id');
        $q->execute(array(
            'title' => $exercice->getTitle(),
            'published' => $exercice->getPublished(),
            'format' => $exercice->getFormat(),
            'creator' => $exercice->getCreator(),
            'held' => $exercice->getHeld(),
            'myUsage' => $exercice->getUsage(),
            'shelfmark' => $exercice->getShelfmark(),
            'description' => $exercice->getDescription(),
            
            'id' => $exercice->getId()
        ));
    }

    public function getUnique($id) {
       
        $q = $this->db->prepare('SELECT  groupNumber, title, published, format, creator,held,myUsage,shelfmark, description FROM exercices WHERE id = :id');
        $q->execute(array(
            'id' => $id
        ));

        if ($q->rowCount()!=0) {
            $donnes = $q->fetch(PDO::FETCH_ASSOC);
            return new Exercice($donnes);
        } else {
            return 0;
        }
    }

   public function getListChecked1() {

        
        $exercices = [];
        
        $q = $this->db->query('SELECT groupNumber, title, published, format, creator,held,myUsage,shelfmark, description FROM exercices WHERE exerciceType = 2 AND groupNumber = 1  ');
       
       if ($q->rowCount()!=0) {
            $donnes = $q->fetch(PDO::FETCH_ASSOC);
            return new Exercice($donnes);
        } else {
            return 0;
        }

       
    }

    public function getListChecked2() {

        
        $exercices = [];
        
        $q = $this->db->query('SELECT groupNumber, title, published, format, creator,held,myUsage,shelfmark, description FROM exercices WHERE exerciceType = 2 AND groupNumber = 2  ');
       
       if ($q->rowCount()!=0) {
            $donnes = $q->fetch(PDO::FETCH_ASSOC);
            return new Exercice($donnes);
        } else {
            return 0;
        }

       
    }


public function getListChecked3() {

        
        $exercices = [];
        
        $q = $this->db->query('SELECT groupNumber, title, published, format, creator,held,myUsage,shelfmark, description FROM exercices WHERE exerciceType = 2 AND groupNumber = 3  ');
       
       if ($q->rowCount()!=0) {
            $donnes = $q->fetch(PDO::FETCH_ASSOC);
            return new Exercice($donnes);
        } else {
            return 0;
        }

       
    }


public function getListChecked4() {

        
        $exercices = [];
        
        $q = $this->db->query('SELECT groupNumber, title, published, format, creator,held,myUsage,shelfmark, description FROM exercices WHERE exerciceType = 2 AND groupNumber = 4  ');
       
       if ($q->rowCount()!=0) {
            $donnes = $q->fetch(PDO::FETCH_ASSOC);
            return new Exercice($donnes);
        } else {
            return 0;
        }

       
    }


public function getListChecked5() {

        
        $exercices = [];
        
        $q = $this->db->query('SELECT groupNumber, title, published, format, creator,held,myUsage,shelfmark, description FROM exercices WHERE exerciceType = 2 AND groupNumber = 5  ');
       
       if ($q->rowCount()!=0) {
            $donnes = $q->fetch(PDO::FETCH_ASSOC);
            return new Exercice($donnes);
        } else {
            return 0;
        }

       
    }


public function getListChecked6() {

        
        $exercices = [];
        
        $q = $this->db->query('SELECT groupNumber, title, published, format, creator,held,myUsage,shelfmark, description FROM exercices WHERE exerciceType = 2 AND groupNumber = 6  ');
       
       if ($q->rowCount()!=0) {
            $donnes = $q->fetch(PDO::FETCH_ASSOC);
            return new Exercice($donnes);
        } else {
            return 0;
        }

       
    }


public function getListChecked7() {

        
        $exercices = [];
        
        $q = $this->db->query('SELECT groupNumber, title, published, format, creator,held,myUsage,shelfmark, description FROM exercices WHERE exerciceType = 2 AND groupNumber = 7  ');
       
       if ($q->rowCount()!=0) {
            $donnes = $q->fetch(PDO::FETCH_ASSOC);
            return new Exercice($donnes);
        } else {
            return 0;
        }

       
    }


public function getListChecked8() {

        
        $exercices = [];
        
        $q = $this->db->query('SELECT groupNumber, title, published, format, creator,held,myUsage,shelfmark, description FROM exercices WHERE exerciceType = 2 AND groupNumber = 8  ');
       
       if ($q->rowCount()!=0) {
            $donnes = $q->fetch(PDO::FETCH_ASSOC);
            return new Exercice($donnes);
        } else {
            return 0;
        }

       
    }


public function getListChecked9() {

        
        $exercices = [];
        
        $q = $this->db->query('SELECT groupNumber, title, published, format, creator,held,myUsage,shelfmark, description FROM exercices WHERE exerciceType = 2 AND groupNumber = 9  ');
       
       if ($q->rowCount()!=0) {
            $donnes = $q->fetch(PDO::FETCH_ASSOC);
            return new Exercice($donnes);
        } else {
            return 0;
        }

       
    }


public function getListChecked10() {

        
        $exercices = [];
        
        $q = $this->db->query('SELECT groupNumber, title, published, format, creator,held,myUsage,shelfmark, description FROM exercices WHERE exerciceType = 2 AND groupNumber = 10  ');
       
       if ($q->rowCount()!=0) {
            $donnes = $q->fetch(PDO::FETCH_ASSOC);
            return new Exercice($donnes);
        } else {
            return 0;
        }

       
    }


public function getListChecked11() {

        
        $exercices = [];
        
        $q = $this->db->query('SELECT groupNumber, title, published, format, creator,held,myUsage,shelfmark, description FROM exercices WHERE exerciceType = 2 AND groupNumber = 11  ');
       
       if ($q->rowCount()!=0) {
            $donnes = $q->fetch(PDO::FETCH_ASSOC);
            return new Exercice($donnes);
        } else {
            return 0;
        }

       
    }


public function getListChecked12() {

        
        $exercices = [];
        
        $q = $this->db->query('SELECT groupNumber, title, published, format, creator,held,myUsage,shelfmark, description FROM exercices WHERE exerciceType = 2 AND groupNumber = 12  ');
       
       if ($q->rowCount()!=0) {
            $donnes = $q->fetch(PDO::FETCH_ASSOC);
            return new Exercice($donnes);
        } else {
            return 0;
        }

       
    }


public function getListChecked13() {

        
        $exercices = [];
        
        $q = $this->db->query('SELECT groupNumber, title, published, format, creator,held,myUsage,shelfmark, description FROM exercices WHERE exerciceType = 2 AND groupNumber = 13  ');
       
       if ($q->rowCount()!=0) {
            $donnes = $q->fetch(PDO::FETCH_ASSOC);
            return new Exercice($donnes);
        } else {
            return 0;
        }

       
    }


    public function getListUnchecked1() {


      
        $exercices = [];
         $q = $this->db->query('SELECT groupNumber, title, published, format, creator,held,myUsage,shelfmark, description FROM exercices WHERE  exerciceType=1 AND groupNumber = 1');
       
        if ($q->rowCount()!=0) {
            $donnes = $q->fetch(PDO::FETCH_ASSOC);
            return new Exercice($donnes);
        } else {
            return 0;
        }
    }

    public function getListUnchecked2() {


      
        $exercices = [];
         $q = $this->db->query('SELECT groupNumber, title, published, format, creator,held,myUsage,shelfmark, description FROM exercices WHERE  exerciceType=1 AND groupNumber = 2');
       
        if ($q->rowCount()!=0) {
            $donnes = $q->fetch(PDO::FETCH_ASSOC);
            return new Exercice($donnes);
        } else {
            return 0;
        }
    }

    public function getListUnchecked3() {


      
        $exercices = [];
         $q = $this->db->query('SELECT groupNumber, title, published, format, creator,held,myUsage,shelfmark, description FROM exercices WHERE  exerciceType=1 AND groupNumber = 3');
       
        if ($q->rowCount()!=0) {
            $donnes = $q->fetch(PDO::FETCH_ASSOC);
            return new Exercice($donnes);
        } else {
            return 0;
        }
    }

    public function getListUnchecked4() {


      
        $exercices = [];
         $q = $this->db->query('SELECT groupNumber, title, published, format, creator,held,myUsage,shelfmark, description FROM exercices WHERE  exerciceType=1 AND groupNumber = 4');
       
        if ($q->rowCount()!=0) {
            $donnes = $q->fetch(PDO::FETCH_ASSOC);
            return new Exercice($donnes);
        } else {
            return 0;
        }
    }

    public function getListUnchecked5() {


      
        $exercices = [];
         $q = $this->db->query('SELECT groupNumber, title, published, format, creator,held,myUsage,shelfmark, description FROM exercices WHERE  exerciceType=1 AND groupNumber = 5');
       
        if ($q->rowCount()!=0) {
            $donnes = $q->fetch(PDO::FETCH_ASSOC);
            return new Exercice($donnes);
        } else {
            return 0;
        }
    }

    public function getListUnchecked6() {


      
        $exercices = [];
         $q = $this->db->query('SELECT groupNumber, title, published, format, creator,held,myUsage,shelfmark, description FROM exercices WHERE  exerciceType=1 AND groupNumber = 6');
       
        if ($q->rowCount()!=0) {
            $donnes = $q->fetch(PDO::FETCH_ASSOC);
            return new Exercice($donnes);
        } else {
            return 0;
        }
    }

    public function getListUnchecked7() {


      
        $exercices = [];
         $q = $this->db->query('SELECT groupNumber, title, published, format, creator,held,myUsage,shelfmark, description FROM exercices WHERE  exerciceType=1 AND groupNumber = 7');
       
        if ($q->rowCount()!=0) {
            $donnes = $q->fetch(PDO::FETCH_ASSOC);
            return new Exercice($donnes);
        } else {
            return 0;
        }
    }

    public function getListUnchecked8() {


      
        $exercices = [];
         $q = $this->db->query('SELECT groupNumber, title, published, format, creator,held,myUsage,shelfmark, description FROM exercices WHERE  exerciceType=1 AND groupNumber = 8');
       
        if ($q->rowCount()!=0) {
            $donnes = $q->fetch(PDO::FETCH_ASSOC);
            return new Exercice($donnes);
        } else {
            return 0;
        }
    }

    public function getListUnchecked9() {


      
        $exercices = [];
         $q = $this->db->query('SELECT groupNumber, title, published, format, creator,held,myUsage,shelfmark, description FROM exercices WHERE  exerciceType=1 AND groupNumber = 9');
       
        if ($q->rowCount()!=0) {
            $donnes = $q->fetch(PDO::FETCH_ASSOC);
            return new Exercice($donnes);
        } else {
            return 0;
        }
    }

    public function getListUnchecked10() {


      
        $exercices = [];
         $q = $this->db->query('SELECT groupNumber, title, published, format, creator,held,myUsage,shelfmark, description FROM exercices WHERE  exerciceType=1 AND groupNumber = 10');
       
        if ($q->rowCount()!=0) {
            $donnes = $q->fetch(PDO::FETCH_ASSOC);
            return new Exercice($donnes);
        } else {
            return 0;
        }
    }

    public function getListUnchecked11() {


      
        $exercices = [];
         $q = $this->db->query('SELECT groupNumber, title, published, format, creator,held,myUsage,shelfmark, description FROM exercices WHERE  exerciceType=1 AND groupNumber = 11');
       
        if ($q->rowCount()!=0) {
            $donnes = $q->fetch(PDO::FETCH_ASSOC);
            return new Exercice($donnes);
        } else {
            return 0;
        }
    }

    public function getListUnchecked12() {


      
        $exercices = [];
         $q = $this->db->query('SELECT groupNumber, title, published, format, creator,held,myUsage,shelfmark, description FROM exercices WHERE  exerciceType=1 AND groupNumber = 12');
       
        if ($q->rowCount()!=0) {
            $donnes = $q->fetch(PDO::FETCH_ASSOC);
            return new Exercice($donnes);
        } else {
            return 0;
        }
    }

    public function getListUnchecked13() {


      
        $exercices = [];
         $q = $this->db->query('SELECT groupNumber, title, published, format, creator,held,myUsage,shelfmark, description FROM exercices WHERE  exerciceType=1 AND groupNumber = 13');
       
        if ($q->rowCount()!=0) {
            $donnes = $q->fetch(PDO::FETCH_ASSOC);
            return new Exercice($donnes);
        } else {
            return 0;
        }
    }


    


    public function delete(Exercice $exercice) {
        $q = $this->db->prepare('DELETE FROM exercices WHERE id = :id');
        $q->execute(array(
            'id' => $exercice->getId()
        ));
    }

    public function save(Exercice $exercice) {
       
        $q = $this->db->prepare('SELECT id,title FROM exercices WHERE id = :id');
        $q->execute(array(
            'id' => $exercice->getId()
        ));

        if ($q->rowCount()==0)
        {
            $this->create($exercice);
        }
        else
        {
            $this->update($exercice);
        }
    }
}


