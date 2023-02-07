<?php
    //array to store ingredients.
    $ingredients = array("1 lb fettuccine pasta", "4 tbsp unsalted butter", "2 cups heavy cream", "1 cup freshly grated Parmesan cheese", "Salt and pepper to taste");
    //array to store steps of the recipe.
    $steps = array("Cook your choice of pasta (preferably fettuccine) according to the instructions directed on the package.", "In a medium saucepan, melt butter over medium heat, making sure not to burn it", "Add heavy cream to the saucepan and bring to a simmer", "Add in the Parmesan cheese while stiring to avoid mixutre sticking to the pan, and continue until the sauce consistancy thickens", "Season with salt and pepper to your liking", "Toss the cooked pasta with the sauce and enjoy!");
    //title variable.
    $title = "My Favourite Alfredo Pasta Recipe";
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $title; ?></title>
</head>
<body>
    
    <!-- outputting the value within the title tag. -->
    <h1><?php echo $title; ?></h1>
    
    <!-- ingredients header -->
    <h2>Ingredients</h2>
    
    <!-- using a foreach loop to display the unordered list of the ingredients. -->
    <ul>
        <?php foreach($ingredients as $ingredient) {
            echo "<li>$ingredient</li>";
        } ?>
    </ul>
    
    <!-- steps header -->
    <h2>Steps</h2>
    
    <!-- using another foreach loop to display the ordered list of the steps. -->
    <ol>
        <?php foreach($steps as $step) {
            echo "<li>$step</li>";
        } ?>
    </ol>

    <!-- styles below -->
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            background-color: #f2f2f2;
        }

        h1 {
            font-size: 36px;
            text-align: center;
            margin-top: 50px;
            color: #4c4c4c;
        }
        
        h2 {
            font-size: 24px;
            text-align: left;
            margin-top: 50px;
            color: #4c4c4c;
        }

        ul {
            list-style-type: none;
            margin-left: 20px;
        }

        ol {
            list-style-type: decimal;
            margin-left: 20px;
        }

        li {
            font-size: 18px;
            margin-bottom: 10px;
        }
    </style>
</body>
</html>
