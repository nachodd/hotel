<template>
    <carrousel-3d :controls-visible="true" :controls-color="'#ffffff;'"
                  :controls-width="30" :controls-height="60" :clickable="true" :width="600" :height="400">
        <slide :index="0">
            <figure>
                <img src="img/1.jpg">
                <figcaption>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vel sagittis dolor. Nullam a
                    massa at dolor tempor luctus in eu justo. Nulla eu venenatis nisl, eget sodales eros. Ut id massa
                    quis felis mollis eleifend at vel nunc. Integer pretium nisi nec sapien blandit condimentum. Ut
                    condimentum dictum faucibus.
                    <router-link :to="{path: '/detalle/0'}">
                        <p class="buy">COMPRAR</p>
                    </router-link>
                </figcaption>

            </figure>
        </slide>
        <slide :index="1">
            <figure>
                <img src="img/2.jpg">
                <figcaption>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vel sagittis dolor. Nullam a
                    massa at dolor tempor luctus in eu justo. Nulla eu venenatis nisl, eget sodales eros. Ut id massa
                    quis felis mollis eleifend at vel nunc. Integer pretium nisi nec sapien blandit condimentum. Ut
                    condimentum dictum faucibus.
                    <router-link :to="{path: '/detalle/1'}">
                        <p class="buy">COMPRAR</p>
                    </router-link>
                </figcaption>

            </figure>
        </slide>
        <slide :index="2">
            <figure>
                <img src="img/3.jpg">
                <figcaption>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vel sagittis dolor. Nullam a
                    massa at dolor tempor luctus in eu justo. Nulla eu venenatis nisl, eget sodales eros. Ut id massa
                    quis felis mollis eleifend at vel nunc. Integer pretium nisi nec sapien blandit condimentum. Ut
                    condimentum dictum faucibus.
                    <router-link :to="{path: '/detalle/2'}">
                        <p class="buy">COMPRAR</p>
                    </router-link>
                </figcaption>
            </figure>
        </slide>
    </carrousel-3d>
</template>


<script>
  import {Carousel3d, Slide} from 'vue-carousel-3d'

  export default {
    components: {
      'carrousel-3d': Carousel3d,
      slide: Slide
    }
  }
</script>
<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
    h1, h2 {
        font-weight: normal;
    }

    ul {
        list-style-type: none;
        padding: 0;
    }

    li {
        display: inline-block;
        margin: 0 10px;
    }

    a {
        color: white;
    }

    .carousel-3d-container figure {
        margin: 0;
    }

    .carousel-3d-slide img {
        width: 100% !important;
        height: auto !important;
    }

    .carousel-3d-container button {
        position: relative;
        left: 76%;
        bottom: 400px;
    }

    .carousel-3d-container figcaption {
        position: absolute;
        background-color: rgba(0, 0, 0, 0.5);
        color: #fff;
        bottom: 0;
        position: absolute;
        bottom: 0;
        font-size: 12px;
        min-width: 100%;
        box-sizing: border-box;
        padding: 10px;
    }

    @media only screen and (max-width: 768px) {
        /* For mobile phones: */
        .carousel-3d-container figcaption {
            font-size: 0.6em;
        }

        .carousel-3d-container button {
            position: relative;
            left: 56%;
            bottom: 15.8em;
        }
    }
    .buy {
        TEXT-ALIGN: CENTER;
        padding: 0px;
        background-color: darkgreen;
        padding-top: 3px;
        margin-bottom: 0px;
        padding-bottom: 3px;
        font-weight: bolder;
    }
</style>
