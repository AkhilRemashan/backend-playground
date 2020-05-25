 <form action="index.php" method="POST">
        
        Enter your grade: <input type="text" name="grade"><br>
        <input type="submit">
        
    </form>
    
        <?php

            $grade = $_POST["grade"];
            
            switch ($grade){
                case "A":
                    echo 'You did amazing!';
                    break;
                case "B":
                    echo 'You did pretty good';
                    break;
                case "C":
                    echo 'You did poorly';
                    break;
                case "D":
                    echo 'You did very bad';
                    break;
                case "F":
                    echo 'You FAILED!';
                    break;
                default:
                    echo 'Invalid grade';
            }
          ?>