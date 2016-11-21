<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: gabrieljpatti.com';
    $to = 'gjpatti2@gmail.com';
    $subject = 'Email Inquiry';

    $body = "From: $name\n E-Mail: $email\n Message:\n $message";
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Thank You for contacting Gabriel J Patti</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.PI.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/portfolio-item.PI.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/gabrieljpatti/index.html">Gabriel J. Patti Artworks</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="about.html">About</a>
                </li>
                <li>
                    <a href="gabriel-patti-artworks.html">Artworks</a>
                </li>
                <li>
                    <a href="/contact/contact.html">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<?php
if ($_POST['submit']) {
    if (mail ($to, $subject, $body, $from)) {
        echo '<br><br><br><br><br><center><h3>Thank you for your email!</h3><br><p>We will get back to you shortly.</p><br><br><a href="../index.html">Gabriel J Patti Artworks</a></center>';
    } else {
        echo '<center><h3>Oops! An error occurred. Try sending your message again.</3></center>';
    }
}
?>
<hr>

<!-- Footer -->
<footer>
    <div class="row">
        <div class="col-lg-12">
            <p>Copyright &copy; 2017</p>
        </div>
    </div>
    <!-- /.row -->
</footer>
</center>
</div>
<!-- /.container -->

<!-- jQuery -->
<script src="js/jqueryPI.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.PI.js"></script>

</body>
</html>
