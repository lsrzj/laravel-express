<?php

namespace App\Entities;

use Doctrine\Common\Collections\ArrayCollection;

class Tag {

    private $id;
    private $name;
    private $posts;

    public function __construct() {
        $this->posts = new ArrayCollection;
    }

    function getId() {
        return $this->id;
    }

    function getName() {
        return $this->name;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setName($name) {
        $this->name = $name;
    }

}
