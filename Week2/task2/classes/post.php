<?php
namespace wad;

/** A class that defines a user posts */
class Post{

    // Member variables
    private $name;     // the username
    private $image;    // the user's profile image
    private $message;  // the message the user has posted
    private $date;     // the date of posting
    private $comments;  // the comments of the post

    //constructor for a post
    function __construct($name,$message,$image,$date,$comments = []){
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

    function addComment($username, $comment) {
        $this->comments[] = ['username' => $username, 'comment' => $comment];
    }

}
?>