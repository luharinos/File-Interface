<?php
session_start();

require 'database/config.php';

if(isset($_POST['submit'])) {
    $username = $_POST['user'];
    $password = $_POST['pwd'];

    $sql = "SELECT password from user_login WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if($row['password'] == $password) {
            $_SESSION['username'] = $username;
            header('Location: ./browser.php');
        } else {
            echo "Invalid Password";
        }
    } else {
        echo "Invalid Username";
    }
}

?>

<html>
    <head lang="en">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <link rel="stylesheet" href="assets/css/styles.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    </head>
    <body>
        <div class="form_container">
            <center><h3>STUDENT LOGIN</h3></center>
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
                <div class="form-group">
                    <label for="user">Username:</label>
                    <input type="text" class="form-control" name="user" id="user">
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" name="pwd" id="pwd">
                </div>
                <div class="checkbox pull-right">
                    <label><input type="checkbox"> Remember me</label>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

        <footer class="page-footer">
            <div class="footer-copyright text-center">© 2018 Copyright:
                <a href="https://kjsce.somaiya.edu"> KJSCE</a>
            </div>
        </footer>
    </body>
</html>