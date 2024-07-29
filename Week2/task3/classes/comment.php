<?php 
namespace wad;


/// a comment is has a username and an associated comment attached to a post
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