<?php 
namespace wad;


/// a comment has a username and an associated comment and is a member variable of a post class
class Comment {

    // member variables
    private string $username;
    private string $comment; 

    //constructor
    function __construct (string $username, string $comment) {
        $this->username = $username;
        $this->comment = $comment;
    }

    //getter and setter methods
    function getUser(): string{
        return $this->username;
    }

    function getComment(): string{
        return $this->comment;
    }
}


?>