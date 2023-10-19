<?php

class Movie
{

    public $poster;
    public $title = null;
    public $type = [];
    public $typeList;
    public $year;
    public $vote;
    public $cast = [];
    public $castList;
    public $director;

    public function __construct($title) {
        $this->title = $title;
    }

    public function title() {
        return $this->title;
    }

    public function movieType($genre) {
        array_push($this->type, $genre);
        $this->typeList = implode(", ", $this->type);
    }

    public function movieCast($actor) {
        array_push($this->cast, $actor);
        $this->castList = implode(", ", $this->cast);
    }

}