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

                <?php
                if (isset($message)) {
                echo $message;
                }
                ?>

                <form action="/phpmotors/index.php" method="post">

                    <h1>Create Account</h1>

                    <label>First Name

                        <input type="text" name="clientFirstname" placeholder="First Name" title="Can not be empty"
                            required></label><br>

                    <label>Last Name

                        <input type="text" name="clientLasttname" placeholder="Last Name" title="Can not be empty"
                            required></label><br>

                    <label>Email Address

                        <input type="text" name="clientEmail" placeholder="Email Address" title="Can not be empty"
                            required></label><br>

                    <label>Password

                        <input type="password" name="clientPassword" placeholder="Password" title="Can not be empty"
                            required></label><br>

                    <button type="submit">Registration</button>

                    <!-- Add the action name - value pair -->
                    <input type="hidden" name="action" value="register">

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