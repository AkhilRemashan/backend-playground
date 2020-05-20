<form action="index.php" method="get">
            
                Color: <input type="text" name="color" id="">
                <br>
                Plural Noun: <input type="text" name="pluralNoun" id="">
                <br>
                Celebrity: <input type="text" name="celebrity" id="">

                <input type="submit" value="Submit">

        </form>
        Answer:
        <?php

            $color = $_GET["color"];
            $pluralNoun = $_GET["pluralNoun"];
            $celebrity = $_GET["celebrity"];

            echo "Roses are $color";
            echo "$pluralNoun are blue";
            echo "I love $celebrity"

        ?> 