<?php
//session_start();
require_once('pdo-conn.php');

// we can use $pdo
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Connecting to MySQL with PDO</title>
    <meta name="viewport" content="width=device-width">
    <style>
        *{ 
            padding: 0; 
            margin: 0; 
        }
        html {
            box-sizing: border-box;
            font-family: BlinkMacSystemFont, -apple-system, "Segoe UI", "Roboto", "Helvetica Neue", "Arial", sans-serif; 
            font-size: calc(1.5vh + 1vw + 1%); 
            line-height: 1.5; 
            -moz-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
            text-size-adjust: 100%;
        }
        *, *::before, *::after {
            box-sizing: inherit;
        }
        body{ 
            overflow: auto; 
            min-height: 100vh; 
            width: 100%; 
        }
        main,
        header{
            padding: 0.5rem 2rem;
        }
        h1{
            padding: 0.5rem 1rem;
        }
        p{
            padding: 0.5rem 1rem;
        }
    </style>
</head>
<body>
    <header>
        <h1>Connecting to MySQL with PDO</h1>
    </header>
    <main>
        <p></p>
        
    </main>
</body>
</html>
<?php
    //always remember to clear your connection
    $pdo = null;
?>