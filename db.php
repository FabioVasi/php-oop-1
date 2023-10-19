<?php

class Movie
{
    public $title = null;
    public $type = [];
    public $year;
    public $vote;
    public $cast = [];
    public $director;

    public function __construct($title) {
        $this->title = $title;
    }

    public function title() {
        return $this->title;
    }

    public function movieType($genre) {
        array_push($this->type, $genre);
    }

    public function movieCast($actor) {
        array_push($this->cast, $actor);
    }

}