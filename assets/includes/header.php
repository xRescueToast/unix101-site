
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./assets/style.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Cormorant' >
    <title><?php echo $page; ?></title>
</head>
<body>
    <div class = "nav"> 
        <a href="whatisunix.php"><img src="assets/images/light_version.png" alt="logo" class="logo"></a>
        <ul>
            <li><a href="whatisunix.php">What is Unix?</a></li>
            <li><a href="accessingunix.php">Accessing Unix</a></li>
            <li><a href="fileanddirectory.php">File and Directory</a></li>
            <li><a href="remoteaccess.php">Remote Access</a></li>
            <li><a href="texteditors.php">Text Editors</a></li>
            <li><a href="quiz.php">Quiz</a></li>
        </ul>

        <div id="toggle">
            <img src="assets/images/burgerIcon.svg" alt="burgerIcon" class="burger">
            <img src="assets/images/close.svg" alt="closeIcon" class="close">
            <nav class="burgermenu">
            <ul>
                <li>
                <a class="burgerItem" href="whatisunix.php">What is Unix?</a>
                </li>
                <li>
                <a class="burgerItem" href="accessingunix.php">Accessing Unix</a>
                </li>
                <li>
                <a class="burgerItem" href="fileanddirectory.php">File and Directory</a>
                </li>
                <li>
                <a class="burgerItem" href="remoteaccess.php">Remote Access</a>
                </li>
                <li>
                <a class="burgerItem" href="texteditors.php">Text Editors</a>
                </li>
                <li class="defaultburger">
                <a class="burgerItem" href="quiz.php">Quiz</a>
                </li>
            </ul>
            </nav>
        </div>
    </div>
    <script>
        const menuToggle = document.getElementById("toggle");

        menuToggle.addEventListener('click', () =>{
            menuToggle.classList.toggle('active')
        });
    </script>

    