<?php
namespace public_class;

class Announcements extends Publication
{

    public $dateEnd;

    public function __construct($title, $description, $dateEnd)
    {
        $this->setTitle($title);
        $this->setDescription($description);
        $this->dateEnd = $dateEnd;
    }

    /**
     * @return mixed
     */
    public function getDateEnd()
    {
        return $this->dateEnd;
    }

    /**
     * @param mixed $dateEnd
     */
    public function setDateEnd($dateEnd)
    {
        $this->dateEnd = $dateEnd;
    }

    public function show()
    {

        $divA = '';
        $divA = '<div class = "text">';
        $divA .= '<h1>' . $this->getTitle() . '</h1>';
        $divA .= '<p>' . $this->getDescription() . '</p>';
        $divA .= '<span>' . $this->getDateEnd() . '</span>';
        $divA .= '</div>';

        return $divA;
    }


}