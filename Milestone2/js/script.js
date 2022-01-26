Vue.config.devtools = true;

const app = new Vue(

    {

        el: "#root",
        data: {

            movieAr: [],

        },
        methods: {
            movie: function() {
                axios
                .get(
                    'http://localhost:8888/php-ajax-dischi/Milestone2/server.php',
                    
                ).then((response) => { 
                    this.movieAr = response.data;
                    console.log(this.movieAr);
                });
            },

        },
        created: function() {
            this.movie();
        }
    },


);