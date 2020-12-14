<?php
namespace public_class;

class Articles extends Publication
{
    public $author;

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param mixed $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    public function __construct($title, $description, $author)
    {
        $this->setTitle($title);
        $this->setDescription($description);
        $this->author = $author;
    }

    public function show()
    {

        $divArt = '';
        $divArt = '<div class = "text">';
        $divArt .= '<h1>' . $this->getTitle() . '</h1>';
        $divArt .= '<p>' . $this->getDescription() . '</p>';
        $divArt .= '<span>' . $this->getAuthor() . '</span>';
        $divArt .= '</div>';

        return $divArt;
    }
}