<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST") 
    {
        header("Location: index.php");
        exit;
    }

$username = htmlspecialchars($_POST["username"]);
$jobTitle = htmlspecialchars($_POST["jobTitle"]);
$favProgLang = htmlspecialchars($_POST["favProgLang"]);
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Activity: PHP Forms</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
            rel="stylesheet"
        />
    </head>
    <body class="bg-light">
        <div class="container">
            <div class="row center p-5 h-100">
                <h3>Username:</h3>
                <p><?php echo $username; ?></p>
                <h3>Job Title:</h3>
                <p><?php echo $jobTitle; ?></p>
                <h3>Favorite Programming Language:</h3>
                <p><?php echo $favProgLang; ?></p>
            </div>
        </div>
    </body>
</html>