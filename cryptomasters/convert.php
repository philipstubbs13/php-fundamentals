<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Conversion Results</h1>

    <?php
    require_once "classes.php";
    
    $browserUA = $_SERVER["HTTP_USER_AGENT"];
    // var_dump($_SERVER);

    if (isset($_POST["amount"]) && isset($_POST["crypto"])) {
        // Superglobal Variables
        $amount = $_POST["amount"];
        $crypto = $_POST["crypto"];

        $converter = new CryptoConverter($crypto);
        $result = $converter->convert($amount);

        echo "<p>You want to convert $amount $crypto.</p>";
        echo "<h2>You have USD $result</h2>";
    } else {
        ?>
        <h2>Oops! It didn't work. Try again</h2>
        <?php
    }
    ?>
</body>
</html>