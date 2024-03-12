<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Header</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
        }

        .container {
            width: 80%;
            margin: 0 auto;
        }

        header {
            background-color: #191970;
            color: #fff;
            padding: 20px 0;
        }

        header h1 {
            font-size: 24px;
        }

        nav ul {
            list-style-type: none;
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
        }

        nav ul li a:hover {
            color: #ffd700;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1>SUMBER BERKAH</h1>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="history.php">history</a></li>
                    <li><a href="transaksi.php">Services</a></li>
                </ul>
            </nav>
        </div>
    </header>
</body>
</html>
