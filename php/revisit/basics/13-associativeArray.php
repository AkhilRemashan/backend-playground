<form action="index.php" method="post">

            <input type="text" name="student">
            <input type="submit">
        
        </form>
        
        <?php

            $grades = array("Aaron" => "A", "Bonnie" => "B-", "Clyde" => "A+");
            // echo $grades["Bonnie"];
            echo $grades[$_POST["student"]];


        ?> 