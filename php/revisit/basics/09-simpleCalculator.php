<form action="index.php" method="get">
            <input type="number" name="num1" id="">
            <br>
            <input type="number" name="num2" id="">
            <br>
            <input type="submit">

        </form>
        Answer:
        <?php

            echo $_GET["num1"] + $_GET["num2"];

        ?> 