<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Put your description here.">
    <title>PHP Motors</title>
    <link rel="stylesheet" href="/phpmotors/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;1,300&family=Roboto:wght@100&family=Ubuntu:wght@300;700&display=swap" rel="stylesheet">
</head>

<body>
    <div id="wrap">
        <header>
            <?php require $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/header.php'; ?>
        </header>
        <nav>
            <?php require $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/navigation.php'; ?>
        </nav>
        <main>
            <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin']) {
                echo "<h1 class='user'> {$_SESSION['clientData']['clientFirstname']}  {$_SESSION['clientData']['clientLastname']}</h1>";
                echo "<p class='user-p'>You are logged in</p>";
                echo "<ul>
                <li class='user-info'>Email: {$_SESSION['clientData']['clientEmail']}</li>
                <li class='user-info'>Client Level: {$_SESSION['clientData']['clientLevel']}</li>
            </ul>";
                if ($_SESSION['clientData']['clientLevel'] > 1) {
                    echo "<h1 class='user'> Inventory Management </h1>";
                    echo "<p class='user-p'> Use this link to manage the inventory</p>";
                    echo "<a class='add-options' href='/phpmotors/vehicles?action=vehicle-management'>Vehicle Management</a>";
                }
            }
            ?>
        </main>
        <footer>
            <?php require $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/footer.php'; ?>
        </footer>
    </div>
</body>

</html>