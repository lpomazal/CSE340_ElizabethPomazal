
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/phpmotors/css/style.css" type="text/css" rel="stylesheet" media="screen">
    <title>Content Title | PHP Motors</title>
</head>

<body>
    <div class="flexC">
        <div id="wrapper">
            <header>
                <?php require $_SERVER['DOCUMENT_ROOT'].'/phpmotors/snippets/header.php'; ?>
            </header>
            <nav>
            <?php echo $navList; ?>
           </nav>
        <main>
            <form action="/phpmotors/index.php?action=login" method="post">

                <h1>LOGIN</h1>

                <label>User Name

                <input type="text" name="uname" placeholder="User Name" title="Can not be empty" required></label><br>

                <label>Password

                <input type="password" name="password" placeholder="Password" title="Can not be empty" required></label><br>

                <button type="submit">Login</button>

                <p>No Account?</p><a href="/phpmotors/index.php?action=register">Sign UP!</a>

            </form>

       

        </main>
            <hr>
            <footer>
                <?php require $_SERVER['DOCUMENT_ROOT'].'/phpmotors/snippets/footer.php'; ?>
            </footer>
        </div>
        <!--Wrapper ends-->
    </div>
</body>

</html>
