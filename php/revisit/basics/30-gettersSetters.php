<?php
        
            class  Movie{
                
                public $name;
                private $rating;
                
                function __construct($name, $rating){
                    $this->name = $name;
                    $this->setRating($rating);
                }
                
                function getRating(){
                    return $this->rating;
                }
                
                function setRating($rating){
                    if($this->rating == "G" || $this->rating == "PG-13" || $this->rating == "R"){
                        $this->rating = $rating;
                    } else{
                        $this->rating = "Not Rated";
                    }
                }
            
            }
            
            $movie1 = new Movie("Avengers", "R");
            //  'NR', 'PG_13', 'R', 'G' 
            echo $movie1->getRating();
        ?>