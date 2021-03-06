<?php
namespace public_class;

class News extends Publication
{
    public $date;

    public function __construct($title, $description, $date)
    {
        $this->setTitle($title);
        $this->setDescription($description);
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

     public function show()
     {

         $divN = '';
         $divN = '<div class = "text">';
         $divN .= '<h1>' . $this->getTitle() . '</h1>';
         $divN .= '<p>' . $this->getDescription() . '</p>';
         $divN .= '<span>' . $this->getDate() . '</span>';
         $divN .= '</div>';

         return $divN;
     }

}