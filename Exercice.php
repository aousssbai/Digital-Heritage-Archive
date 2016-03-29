<?php


class Exercice
{
    protected $id;
    protected $groupNumber;
    protected $title;
    protected $published;
    protected $format;
    protected $creator;
    protected $held;
    protected $myUsage;
    protected $shelfmark;
    protected $description;
    
    protected $exerciceType;

    public function __construct($donnes) {
        foreach ($donnes as $key => $value){
            $method = 'set'.ucfirst($key);

            if (method_exists($this,$method)) {
                $this->$method($value);
            }
        }
    }

    public function displayPage() {
        $page = '<div class="container"> <div class="col-md-6 col-md-offset-3 col-sm-12">';
        $page = $page.Alert::getMessageCode();
        $page = $page.'<h2 class="text-center">'.$this->getTitle().'</h2>';
        $page = $page.'<div> Group Number : '.$this->getGroupNumber().'</div>';
        $page = $page.'<div>Date of Publication : '.$this->getPublished().'</div>';
        $page = $page.'<div>Formats : '.$this->getFormat().'</div>';
        $page = $page.'<div>Creator : '.$this->getCreator().'</div>';
        $page = $page.'<div>Held by : '.$this->getHeld().'</div>';
        $page = $page.'<div>Usage : '.$this->getUsage().'</div>';
        $page = $page.'<div>Shelfmark : '.$this->getShelfmark().'</div>';
        $page = $page.'<div> Description : '.$this->getDescription().'</div>';
        
        

        echo $page;
    }

     public function displayTitle1() {
        $page = '<div class="container"> <div class="col-md-6 col-md-offset-3 col-sm-12">';
       //$page = $page.Alert::getMessageCode();
        //$page = $page.'<h2 class="text-center">'.$this->getTitle().'</h2>';
        $page = $page.'<div class="img1">
  <a target="_blank" href="display1.php">
    <img src="IOE-library-system/img/g1.jpg" alt="3" width="300" height="200">
  </a>
</div>';
        echo $page;
    }

     public function displayTitle2() {
        $page = '<div class="container"> <div class="col-md-6 col-md-offset-3 col-sm-12">';
        $page = $page.Alert::getMessageCode();
        //$page = $page.'<h2 class="text-center">'.$this->getTitle().'</h2>';
        $page = $page.'<div class="img1">
  <a target="_blank" href="display2.php">
    <img src="IOE-library-system/img/g2.jpg" alt="3" width="300" height="200">
  </a>
</div>';
        echo $page;
    }

     public function displayTitle3() {
        $page = '<div class="container"> <div class="col-md-6 col-md-offset-3 col-sm-12">';
        $page = $page.Alert::getMessageCode();
        //$page = $page.'<h2 class="text-center">'.$this->getTitle().'</h2>';
        $page = $page.'<div class="img1">
  <a target="_blank" href="display3.php">
    <img src="IOE-library-system/img/g3.jpg" alt="3" width="300" height="200">
  </a>
</div>';
        echo $page;
    }

     public function displayTitle4() {
        $page = '<div class="container"> <div class="col-md-6 col-md-offset-3 col-sm-12">';
        $page = $page.Alert::getMessageCode();
        //$page = $page.'<h2 class="text-center">'.$this->getTitle().'</h2>';
        $page = $page.'<div class="img1">
  <a target="_blank" href="display4.php">
    <img src="IOE-library-system/img/g4.jpg" alt="3" width="300" height="200">
  </a>
</div>';
        echo $page;
    }

     public function displayTitle5() {
        $page = '<div class="container"> <div class="col-md-6 col-md-offset-3 col-sm-12">';
        $page = $page.Alert::getMessageCode();
        //$page = $page.'<h2 class="text-center">'.$this->getTitle().'</h2>';
        $page = $page.'<div class="img1">
  <a target="_blank" href="display5.php">
    <img src="IOE-library-system/img/g5.jpg" alt="3" width="300" height="200">
  </a>
</div>';
        echo $page;
    }

     public function displayTitle6() {
        $page = '<div class="container"> <div class="col-md-6 col-md-offset-3 col-sm-12">';
        $page = $page.Alert::getMessageCode();
        //$page = $page.'<h2 class="text-center">'.$this->getTitle().'</h2>';
        $page = $page.'<div class="img1">
  <a target="_blank" href="display6.php">
    <img src="IOE-library-system/img/g6.jpg" alt="3" width="300" height="200">
  </a>
</div>';
        echo $page;
    }

     public function displayTitle7() {
        $page = '<div class="container"> <div class="col-md-6 col-md-offset-3 col-sm-12">';
        $page = $page.Alert::getMessageCode();
        //$page = $page.'<h2 class="text-center">'.$this->getTitle().'</h2>';
        $page = $page.'<div class="img1">
  <a target="_blank" href="display7.php">
    <img src="IOE-library-system/img/g7.jpg" alt="3" width="300" height="200">
  </a>
</div>';
        echo $page;
    }

     public function displayTitle8() {
        $page = '<div class="container"> <div class="col-md-6 col-md-offset-3 col-sm-12">';
        $page = $page.Alert::getMessageCode();
        //$page = $page.'<h2 class="text-center">'.$this->getTitle().'</h2>';
        $page = $page.'<div class="img1">
  <a target="_blank" href="display8.php">
    <img src="IOE-library-system/img/g8.jpg" alt="3" width="300" height="200">
  </a>
</div>';
        echo $page;
    }

     public function displayTitle9() {
        $page = '<div class="container"> <div class="col-md-6 col-md-offset-3 col-sm-12">';
        $page = $page.Alert::getMessageCode();
        //$page = $page.'<h2 class="text-center">'.$this->getTitle().'</h2>';
        $page = $page.'<div class="img1">
  <a target="_blank" href="display9.php">
    <img src="IOE-library-system/img/g9.jpg" alt="3" width="300" height="200">
  </a>
</div>';
        echo $page;
    }

     public function displayTitle10() {
        $page = '<div class="container"> <div class="col-md-6 col-md-offset-3 col-sm-12">';
        $page = $page.Alert::getMessageCode();
        //$page = $page.'<h2 class="text-center">'.$this->getTitle().'</h2>';
        $page = $page.'<div class="img1">
  <a target="_blank" href="display10.php">
    <img src="IOE-library-system/img/g10.jpg" alt="3" width="300" height="200">
  </a>
</div>';
        echo $page;
    }

     public function displayTitle11() {
        $page = '<div class="container"> <div class="col-md-6 col-md-offset-3 col-sm-12">';
        $page = $page.Alert::getMessageCode();
        //$page = $page.'<h2 class="text-center">'.$this->getTitle().'</h2>';
        $page = $page.'<div class="img1">
  <a target="_blank" href="display11.php">
    <img src="IOE-library-system/img/g11.jpg" alt="3" width="300" height="200">
  </a>
</div>';
        echo $page;
    }

     public function displayTitle12() {
        $page = '<div class="container"> <div class="col-md-6 col-md-offset-3 col-sm-12">';
        $page = $page.Alert::getMessageCode();
        //$page = $page.'<h2 class="text-center">'.$this->getTitle().'</h2>';
        $page = $page.'<div class="img1">
  <a target="_blank" href="display12.php">
    <img src="IOE-library-system/img/g12.jpg" alt="3" width="300" height="200">
  </a>
</div>';
        echo $page;
    }

     public function displayTitle13() {
        $page = '<div class="container"> <div class="col-md-6 col-md-offset-3 col-sm-12">';
        $page = $page.Alert::getMessageCode();
        //$page = $page.'<h2 class="text-center">'.$this->getTitle().'</h2>';
        $page = $page.'<div class="img1">
  <a target="_blank" href="display13.php">
    <img src="IOE-library-system/img/g13.jpg" alt="3" width="300" height="200">
  </a>
</div>';
        echo $page;
    }

    //======================================================================================================================

     public function displayTitledit1() {
        $page = '<div class="container"> <div class="col-md-6 col-md-offset-3 col-sm-12">';
       //$page = $page.Alert::getMessageCode();
        //$page = $page.'<h2 class="text-center">'.$this->getTitle().'</h2>';
        $page = $page.'<div class="img1">
  <a target="_blank" href="edit.admin1.php">
    <img src="IOE-library-system/img/g1.jpg" alt="3" width="300" height="200">
  </a>
</div>';
        echo $page;
    }

     public function displayTitledit2() {
        $page = '<div class="container"> <div class="col-md-6 col-md-offset-3 col-sm-12">';
        $page = $page.Alert::getMessageCode();
        //$page = $page.'<h2 class="text-center">'.$this->getTitle().'</h2>';
        $page = $page.'<div class="img1">
  <a target="_blank" href="edit.admin2.php">
    <img src="IOE-library-system/img/g2.jpg" alt="3" width="300" height="200">
  </a>
</div>';
        echo $page;
    }

     public function displayTitledit3() {
        $page = '<div class="container"> <div class="col-md-6 col-md-offset-3 col-sm-12">';
        $page = $page.Alert::getMessageCode();
        //$page = $page.'<h2 class="text-center">'.$this->getTitle().'</h2>';
        $page = $page.'<div class="img1">
  <a target="_blank" href="edit.admin3.php">
    <img src="IOE-library-system/img/g3.jpg" alt="3" width="300" height="200">
  </a>
</div>';
        echo $page;
    }

     public function displayTitledit4() {
        $page = '<div class="container"> <div class="col-md-6 col-md-offset-3 col-sm-12">';
        $page = $page.Alert::getMessageCode();
        //$page = $page.'<h2 class="text-center">'.$this->getTitle().'</h2>';
        $page = $page.'<div class="img1">
  <a target="_blank" href="edit.admin4.php">
    <img src="IOE-library-system/img/g4.jpg" alt="3" width="300" height="200">
  </a>
</div>';
        echo $page;
    }

     public function displayTitledit5() {
        $page = '<div class="container"> <div class="col-md-6 col-md-offset-3 col-sm-12">';
        $page = $page.Alert::getMessageCode();
        //$page = $page.'<h2 class="text-center">'.$this->getTitle().'</h2>';
        $page = $page.'<div class="img1">
  <a target="_blank" href="edit.admin5.php">
    <img src="IOE-library-system/img/g5.jpg" alt="3" width="300" height="200">
  </a>
</div>';
        echo $page;
    }

     public function displayTitledit6() {
        $page = '<div class="container"> <div class="col-md-6 col-md-offset-3 col-sm-12">';
        $page = $page.Alert::getMessageCode();
        //$page = $page.'<h2 class="text-center">'.$this->getTitle().'</h2>';
        $page = $page.'<div class="img1">
  <a target="_blank" href="edit.admin6.php">
    <img src="IOE-library-system/img/g6.jpg" alt="3" width="300" height="200">
  </a>
</div>';
        echo $page;
    }

     public function displayTitledit7() {
        $page = '<div class="container"> <div class="col-md-6 col-md-offset-3 col-sm-12">';
        $page = $page.Alert::getMessageCode();
        //$page = $page.'<h2 class="text-center">'.$this->getTitle().'</h2>';
        $page = $page.'<div class="img1">
  <a target="_blank" href="edit.admin7.php">
    <img src="IOE-library-system/img/g7.jpg" alt="3" width="300" height="200">
  </a>
</div>';
        echo $page;
    }

     public function displayTitledit8() {
        $page = '<div class="container"> <div class="col-md-6 col-md-offset-3 col-sm-12">';
        $page = $page.Alert::getMessageCode();
        //$page = $page.'<h2 class="text-center">'.$this->getTitle().'</h2>';
        $page = $page.'<div class="img1">
  <a target="_blank" href="edit.admin8.php">
    <img src="IOE-library-system/img/g8.jpg" alt="3" width="300" height="200">
  </a>
</div>';
        echo $page;
    }

     public function displayTitledit9() {
        $page = '<div class="container"> <div class="col-md-6 col-md-offset-3 col-sm-12">';
        $page = $page.Alert::getMessageCode();
        //$page = $page.'<h2 class="text-center">'.$this->getTitle().'</h2>';
        $page = $page.'<div class="img1">
  <a target="_blank" href="edit.admin9.php">
    <img src="IOE-library-system/img/g9.jpg" alt="3" width="300" height="200">
  </a>
</div>';
        echo $page;
    }

     public function displayTitledit10() {
        $page = '<div class="container"> <div class="col-md-6 col-md-offset-3 col-sm-12">';
        $page = $page.Alert::getMessageCode();
        //$page = $page.'<h2 class="text-center">'.$this->getTitle().'</h2>';
        $page = $page.'<div class="img1">
  <a target="_blank" href="edit.admin10.php">
    <img src="IOE-library-system/img/g10.jpg" alt="3" width="300" height="200">
  </a>
</div>';
        echo $page;
    }

     public function displayTitledit11() {
        $page = '<div class="container"> <div class="col-md-6 col-md-offset-3 col-sm-12">';
        $page = $page.Alert::getMessageCode();
        //$page = $page.'<h2 class="text-center">'.$this->getTitle().'</h2>';
        $page = $page.'<div class="img1">
  <a target="_blank" href="edit.admin11.php">
    <img src="IOE-library-system/img/g11.jpg" alt="3" width="300" height="200">
  </a>
</div>';
        echo $page;
    }

     public function displayTitledit12() {
        $page = '<div class="container"> <div class="col-md-6 col-md-offset-3 col-sm-12">';
        $page = $page.Alert::getMessageCode();
        //$page = $page.'<h2 class="text-center">'.$this->getTitle().'</h2>';
        $page = $page.'<div class="img1">
  <a target="_blank" href="edit.admin12.php">
    <img src="IOE-library-system/img/g12.jpg" alt="3" width="300" height="200">
  </a>
</div>';
        echo $page;
    }

     public function displayTitledit13() {
        $page = '<div class="container"> <div class="col-md-6 col-md-offset-3 col-sm-12">';
        $page = $page.Alert::getMessageCode();
        //$page = $page.'<h2 class="text-center">'.$this->getTitle().'</h2>';
        $page = $page.'<div class="img1">
  <a target="_blank" href="edit.admin13.php">
    <img src="IOE-library-system/img/g13.jpg" alt="3" width="300" height="200">
  </a>
</div>';
        echo $page;
    }
    //=====================================================================================================================


    public static function returnDataArrayFromData($groupNumber, $type, $title, $published, $format, $creator,$held, $myUsage, $shelfmark, $Description) {
        $arrayData = array(
            'groupNumber' => $groupNumber,
            'exerciceType' => $type,
            'title' => $title,
            'published' => $published,
            'format' => $format,
            'creator' => $creator,
            'held' => $held,
            'myUsage' => $myUsage,
            'shelfmark' => $shelfmark,
            'description' => $Description
            
        );

        return $arrayData;
    }



    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getGroupNumber()
    {
        return $this->groupNumber;
    }

    /**
     * @param mixed $groupNumber
     */
    public function setGroupNumber($groupNumber)
    {
        $this->groupNumber = $groupNumber;
    }

     /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

     

 /**
     * @return mixed
     */

    public function getExerciceType()
    {
        return $this->exerciceType;
    }

    public function setExerciceType($type)
    {
        $this->exerciceType = $type;
    }

    /**
     * @return mixed
     */
    public function getPublished()
    {
        return $this->published;
    }

    /**
     * @param mixed $published
     */
    public function setPublished($published)
    {
        $this->published = $published;
    }

    /**
     * @return mixed
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * @param mixed $textformat
     */
    public function setFormat($format)
    {
        $this->format = $format;
    }

    /**
     * @return mixed
     */
    public function getCreator()
    {
        return $this->creator;
    }

/**
     * @param mixed $creator
     */
    public function setCreator($creator)
    {
        $this->creator = $creator;
    }

/**
     * @return mixed
     */
    public function getHeld()
    {
        return $this->held;
    }

/**
     * @param mixed $held
     */
    public function setHeld($held)
    {
        $this->held = $held;
    }

    /**
     * @return mixed
     */
    public function getUsage()
    {
        return $this->myUsage;
    }

/**
     * @param mixed $usage
     */
    public function setUsage($myUsage)
    {
        $this->myUsage = $myUsage;
    }

    /**
     * @return mixed
     */
    public function getShelfmark()
    {
        return $this->shelfmark;
    }

/**
     * @param mixed $shelfmark
     */
    public function setShelfmark($shelfmark)
    {
        $this->shelfmark = $shelfmark;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }



}