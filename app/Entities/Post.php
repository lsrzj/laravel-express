<?php

namespace App\Entities;

use Doctrine\Common\Collections\ArrayCollection;

class Post {

    private $id;
    private $title;
    private $content;
    private $image;
    private $created_at;
    private $updated_at;
    private $comments;
    private $tags;
    private $user;

    public function __construct() {
        $this->comments = new ArrayCollection;
        $this->tags = new ArrayCollection;
    }

    function getId() {
        return $this->id;
    }

    function getTitle() {
        return $this->title;
    }

    function getContent() {
        return $this->content;
    }

    function getImage() {
        return $this->image;
    }

    function getCreated_at() {
        return $this->created_at;
    }

    function getUpdated_at() {
        return $this->updated_at;
    }

    function getComments() {
        return $this->comments;
    }

    function getTags() {
        return $this->tags;
    }

    function getUser() {
        return $this->user;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setTitle($title) {
        $this->title = $title;
    }

    function setContent($content) {
        $this->content = $content;
    }

    function setImage($image) {
        $this->image = $image;
    }

    function setCreated_at($created_at) {
        $this->created_at = $created_at;
    }

    function setUpdated_at($updated_at) {
        $this->updated_at = $updated_at;
    }

    function setComments($comments) {
        $this->comments = $comments;
    }

    function setTags($tags) {
        $this->tags = $tags;
    }

    function setUser($user) {
        $this->user = $user;
    }

}
