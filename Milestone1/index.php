<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music</title>

    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/vue"></script>
</head>
<body>

    <?php include 'database.php'; ?>

    <div id="root">
    
        <header>

            <div class="logo">

                <img src="https://storage.googleapis.com/pr-newsroom-wp/1/2018/11/Spotify_Logo_RGB_Green.png" alt="">

            </div>

        </header>

        <main>

            <div class="containerTotal">

                <!-- <div class="choiceM">

                    <TypeOfMusic @choiceMusic="choiceTypeOfMusic" />

                </div> -->

                <div class="diskContainer">

                    <?php foreach($database as $movie){ ?>

                        <div class="diskCardContainer">

                            <div class="diskImg">

                                <img src="<?php echo $movie["poster"] ?>" alt="<?php echo $movie["author"] ?>">

                            </div>

                            <div class="diskInfo">

                                <div class="title">

                                <?php echo $movie["title"] ?>

                                </div>

                                <div class="subtitle">

                                    <div class="author">

                                    <?php echo $movie["author"] ?>

                                    </div>

                                    <div class="year">

                                    <?php echo $movie["year"] ?>

                                    </div>

                                </div>

                            </div>

                        </div>
                        
                    <?php } ?>

                </div>

            </div>

        </main>

    </div>

    <script src="js/script.js"></script>

</body>
</html>