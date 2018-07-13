<?php session_start();

if(isset($_SESSION['username'])) {
echo '<html>
<head lang="en">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link href="assets/css/styles.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
</head>
<body>
	<div class="filemanager">
		<div class="search">
            <span class="glyphicon glyphicon-search"></span>
            <input type="search" placeholder="Find a file.." />
        </div>
        
		<div class="session_indicator pull-right">
			<a href="logout.php">
				<span class="session_name">'. $_SESSION['username'] .'</span>
				<span class="glyphicon glyphicon-off"></span>
			</a>
		</div>

		<div class="breadcrumbs"></div>

		<ul class="data"></ul>

		<div class="nothingfound">
			<div class="nofiles"></div>
			<span>No files here.</span>
		</div>
	</div>

	<footer class="page-footer">
        <div class="footer-copyright text-center">© 2018 Copyright:
            <a href="https://kjsce.somaiya.edu"> KJSCE</a>
        </div>
    </footer>

	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="assets/js/script.js"></script>
</body>
</html>';
} else {
	header('Location: ./login_form.php');
}