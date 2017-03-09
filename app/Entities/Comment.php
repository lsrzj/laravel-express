<?php

namespace App\Entities;

class Comment {

    private $id;
    private $name;
    private $email;
    private $comment;
    private $created_at;
    private $updated_at;
    private $post;

    function getId() {
        return $this->id;
    }

    function getName() {
        return $this->name;
    }

    function getEmail() {
        return $this->email;
    }

    function getComment() {
        return $this->comment;
    }

    function getCreated_at() {
        return $this->created_at;
    }

    function getUpdated_at() {
        return $this->updated_at;
    }

    function getPost() {
        return $this->post;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setComment($comment) {
        $this->comment = $comment;
    }

    function setCreated_at($created_at) {
        $this->created_at = $created_at;
    }

    function setUpdated_at($updated_at) {
        $this->updated_at = $updated_at;
    }

    function setPost($post) {
        $this->post = $post;
    }
}
