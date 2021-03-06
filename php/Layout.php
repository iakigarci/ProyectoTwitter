<?php include '../php/Seguridad.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../html/Head.html' ?>
    <script src="../js/AddImage.js"></script>
    <script src="../js/SendTweetAjax.js"></script>
    <script src="../js/LoadTweets.js"></script>
    <script src="../js/LoadTrending.js"></script>
    <script src="../js/CountUsers.js"></script>
</head>

<body>
    <?php include '../html/Header.html' ?>
    <?php include 'GetUserFoto.php'; ?>
    <div class="container">
        <div class="row">
            <div class="col-md-3" id="div-usuario">
                <div class="card">
                    <?php include '../php/Navbar.php' ?>
                </div>
            </div>

            <div class="col-md-6" id="div-tweets">
                <?php include '../php/Main.php' ?>
            </div>

            <div class="col-md-3" id="div-otros">
                <div class="card" id="trending">
                    <div class="card-header" id="trending-header">
                        Trending
                    </div>
                    <ul class="list-group list-group-flush" id="trending-list">

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <?php include '../html/Footer.html' ?>
</body>

</html>