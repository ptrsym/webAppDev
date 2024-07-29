<?php
namespace wad;

use wad\Comment;
require 'comment.php';


/** A class that defines a user posts */
class Post{

    // Member variables
    private string $name;     // the username
    private string $image;    // the user's profile image
    private string $message;  // the message the user has posted
    private string $date;     // the date of posting
    private array $comments;  // and array containing the comments of the post

    //constructor for a post
    function __construct(string $name, string $message, string $image,string $date, array $comments = []){
        $this->name = $name;
        $this->message = $message;
        $this->image = $image;
        $this->date = $date;
        $this->comments = $comments;
    }

        // Getter and setter methods
        public function getName(){
            return $this->name;
        }
    
        public function getImage() {
            return $this->image;
        }
    
        public function getMessage() {
            return $this->message;
        }
    
        public function getDate() {
            return $this->date;
        }
    
        public function getComments() {
            return $this->comments;
        }
    
        public function setName($name) {
            $this->name = $name;
        }
    
        public function setImage($image) {
            $this->image = $image;
        }
    
        public function setMessage($message) {
            $this->message = $message;
        }
    
        public function setDate($date) {
            $this->date = $date;
        }
    
        public function setComments(array $comments) {
            $this->comments = $comments;
        }

        // appends a new comment to the comments array

    function addComment(Comment $comment) {
        $this->comments[] = $comment;
    }

}
?>