<?php
namespace wad;
use wad\Comment;
require 'comment.php';


/** A class that defines a user posts */
class Post{

    // Member variables
    protected string $name;     // the username
    protected string $image;    // the user's profile image
    protected string $message;  // the message the user has posted
    protected string $date;     // the date of posting
    protected array $comments;  // an array containing the comments of the post

    //constructor for a post with a default empty array for comments
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

        // appends a new comment to the comments array

    function addComment(Comment $comment) {
        $this->comments[] = $comment;
    }

}
?>