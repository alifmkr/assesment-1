<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Login</title>
    <style>
        
        form {
            max-width: 400px;
            margin: 0 auto;
        }
        
        h2 {
            font-weight: bold;
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: #333;
        }
        
        label {
            font-weight: bold;
        }
        
        input[type="email"],
        input[type="password"] {
            border: 2px solid #3498db;
            border-radius: 5px;
            padding: 0.5rem;
            width: 100%;
            margin-bottom: 1rem;
            font-size: 1rem;
        }
        
        .submit {
            background-color: #191970;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 0.75rem 1rem;
            cursor: pointer;
            font-size: 1rem;
        }
        
        .submit:hover {
            background-color: #2980b9;
        }
        
        .reset {
            background-color: #191970;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 0.75rem 1rem;
            cursor: pointer;
            font-size: 1rem;
        }
        
        .reset:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
<?php include "./header.php"; ?>
    <form action="transaksi.php" method="post">
        <h2>Login</h2>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" id="password" name="password">
        </div>
        <div>
            <input type="submit" value="Save" name="submit" class="submit">
            <input type="reset" value="Reset" class="reset">
        </div>
    </form>
    <?php include "./footer.php"; ?>
</body>
</html>
