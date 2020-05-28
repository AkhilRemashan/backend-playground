 <?php
        
            class Students{
                var $name;
                var $major;
                var $gpa;
                
                function __construct($name, $major, $gpa){
                    $this->name = $name;
                    $this->major = $major;
                    $this->gpa = $gpa;
                }
                
                function hasHonours(){
                    if($this->gpa >= 3){
                        return "Yes";
                    }
                    return "No";
                }
                
            }
            
            $student1 = new Students("Arsene", "Chemistry", 4);
            
            $student2 = new Students("Bella", "Physics", 2.9);

            echo $student1->hasHonours();
        ?>