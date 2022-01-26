<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music</title>

    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/vue"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
</head>
<body>

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

                        <div class="diskCardContainer" v-for="movie in movieAr">

                            <div class="diskImg">

                                <img :src="movie.poster" :alt="movie.author">

                            </div>

                            <div class="diskInfo">

                                <div class="title">

                                {{ movie.title }}

                                </div>

                                <div class="subtitle">

                                    <div class="author">

                                    {{ movie.author }}

                                    </div>

                                    <div class="year">

                                    {{ movie.year }}

                                    </div>

                                </div>

                            </div>

                        </div>

                </div>

            </div>

        </main>

    </div>

    <script src="js/script.js"></script>

</body>
</html>