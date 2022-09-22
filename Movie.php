<?php
    class Movie {
        public $title;
        public $year;
        public $genre;
        public $director;
        protected $plot;

        public function __construct($titleParam, $yearParam, $genreParam = null, $directorParam = null)
        {
            $this->title = $titleParam;
            $this->year = $yearParam;
            $this->genre = $genreParam;
            $this->director = $directorParam;
        }

        public function setPlot($plotParam) {
            $this->plot = $plotParam;
        }

        public function getPlot() {
            if ($this->plot == null) {
                return "Trama non Disponibile";
            } else {
                return $this->plot;
            }
        }
    }
