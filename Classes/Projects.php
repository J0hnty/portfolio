<?php


class Projects
{
    public $id;
    public $name;
    public $language;
    public $picture;
    public $description;
    public $git;

    public function __construct()
    {
        settype($this->id, 'integer');
    }
}