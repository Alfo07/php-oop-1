<?php
    Class Movie{
        protected $title;
        protected $genre;
        protected $lenght;
        protected $protagonists;

        function __construct($_title, $_genre, $_lenght){
            $this->title = $_title;
            $this->genre = $_genre;
            $this->lenght = $_lenght;
        }

        public function setProtagonists($_protagonist){
            return $this->protagonists = $_protagonist;
        }

        public function getMovie(){
            return "<h3>Title: {$this->title} </h3> Genre: {$this->genre} <br> Lenght: {$this->lenght} <br> Protagonists:{$this->protagonists}";
        }
    };
?>