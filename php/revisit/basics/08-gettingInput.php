<form action="index.php" method="get">
        
            Name: <input type="text" name="fullname">
            <br><br>
            Age: <input type="text" name="age">
            <br><br>
            <input type="submit">
        
        </form>

        <br><br>
        Your Name is <?php  echo $_GET["fullname"]; ?>
        <br><br>
        You are <?php  echo $_GET["age"]; ?>