<?php
namespace App\Models;

class Dvd extends Model
{
    protected $id;

    protected $author;

    protected $title;

    protected $year;


    public function __construct()
    {
        $this->table = 'dvds';
    }

    public function getId():int
    {
        return $this->id;
    }

    public function setId(int $id):self
    {
        $this->id = $id;

        return $this;
    }

    public function getAuthor():string
    {
        return $this->author;
    }

    public function setAuthor(string $author):self
    {
        $this->author = $author;

        return $this;
    }

    public function getTitle():string
    {
        return $this->title;
    }

    public function setTitle(string $title):self
    {
        $this->title = $title;

        return $this;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function setYear($year):self
    {
        $this->year = $year;

        return $this;
    }
}
