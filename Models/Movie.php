<?php
class Movie{
    public $title;
    public $year;
    public $genre;
    public $nationality;
    public $lenght;

    public function __construct($__title,$__year,$__genre,$__nationality,$__lenght){
        $this->title =$__title;
        $this->year =$__year;
        $this->genre =$__genre;
        $this->nationality =$__nationality;
        $this->lenght =$__lenght;
        
    }

    public function getMovieData(){

        $result = "
        <h2>$this->title</h2>
        <ul>
            <li>$this->year</li>
            <li>$this->genre</li>
            <li>$this->nationality</li>
            <li>$this->lenght</li>
        </ul>";

        return $result;
    
    }

}
