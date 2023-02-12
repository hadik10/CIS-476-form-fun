<!DOCTYPE html>
<html>
    <head>
        <title>hgupta.php</title>
        <style>
            body {
                background-color: lightpink;
            }
            form {
                margin: 50px auto;
                width: 500px;
                text-align: center;
            }
            h1 {
                text-align: center;
            }
        </style>

    </head>
    <body>
        <h1>Gupta PHP FoRm FUn</h1>
            <form action="" method="post">
            Name: <input type="text" name="name"><br><br>
            Display Times: <input type="number" name="times"><br><br>
            Sentence: <input type="text" name="sentence"><br><br>
            Display Type:
            <input type="radio" name="display_type" value="All Letters" checked>All Letters
            <input type="radio" name="display_type" value="Vowels Only">Vowels Only<br><br>
            <input type="submit" name="submit" value="Submit">
        </form>
    </body>
</html>

    <center>  
 <?php
        if (isset($_POST["submit"])) {
            $name = $_POST["name"];
            $times = $_POST["times"];
            $sentence = $_POST["sentence"];
            $display_type = $_POST["display_type"];

            for ($i = 0; $i < $times; $i++) {
                echo $name . "<br>";
            }

            echo "<br>" . $sentence . "<br>";
            echo "Display Type: " . $display_type . "<br>";

            if ($display_type == "All Letters") {
                echo "Number of Letters: " . strlen($sentence) . "<br>";
            } else {
                $vowels = ['a', 'e', 'i', 'o', 'u'];
                $count = 0;
                for ($i = 0; $i < strlen($sentence); $i++) {
                    if (in_array($sentence[$i], $vowels)) {
                        $count++;
                    }
                }
                echo "Number of Vowels: " . $count . "<br>";
            }
        }
        ?>
</center>
    

