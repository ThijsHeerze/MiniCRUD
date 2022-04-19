<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css\admin.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <div class="update-body">
            <div class="update-container">
                <form class="update-reservering" action="php/update.php" method="post" >
                    <label class="update-naam" for="text" id="update">Nieuwe naam product</label>
                    <input type="text" id="aname" name="naam" placeholder="Productnaam...">
                    <label class="update-datum" for="text" id="update">Nieuwe datum</label>
                    <input type="text" id="aname" name="naam" placeholder="Productnaam...">
                    <input class="update" type="submit" value="update" name="update">
                </form>
            </div>
        </div>
    </body>
</html>