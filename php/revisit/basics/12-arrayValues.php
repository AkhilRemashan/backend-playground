<form action="index.php" method="post">

        Apples: <input type="checkbox" name="fruits[]" value="apples"> <br>
        Oranges: <input type="checkbox" name="fruits[]" value="oranges"> <br>
        Grapes: <input type="checkbox" name="fruits[]" value="grapes"> <br>
        
        <input type="submit">
        
        </form>
        
        <?php

            $fruits = $_POST["fruits"];
            echo $fruits[0];

        ?> 
        