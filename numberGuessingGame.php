<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number Guessing Game</title>
     <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #74b9ff, #a29bfe);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .box {
            background: #fff;
            padding: 30px;
            width: 320px;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        }

        h2 {
            margin-bottom: 20px;
            color: #0652dd      ;
        }

        input[type="number"] {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #0984e3;
            color: #fff;
            border: none;
            padding: 10px;
            width: 100%;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
        }

        input[type="submit"]:hover {
            background-color: #0652dd;
        }

        p {
            margin-top: 15px;
            font-size: 18px;
            font-weight: bold;
        }

        .success {
            color: green;
        }

        .error {
            color: red;
        }
    </style>
</head>
<body>
    <div class="box">
        <h2>Number Guessing Game</h2>

        <form action="" method="POST">
            <input type="number" name="guess" id="" placeholder="Enter number (1-10)" required>
            <input type="submit" name="check" value="Check">
        </form>

            <?php
  
                if(isset($_POST['check'])){

                    $guess=$_POST['guess'];
                    

                    if ($guess < 1 || $guess > 10) {
                     echo "<p class='error'>⚠️ Please enter a number between 1 and 10.</p>";
                    }else {
                      $random = rand(1, 10);

                    if ($guess == $random) {
                      echo "<p class='success'>🎉 Correct! You guessed it right.</p>";
                    } else {
                      echo "<p class='error'>❌ Wrong! The correct number was $random.</p>";
                    }
                 }
            }

            ?>
    </div>
</body>
</html>