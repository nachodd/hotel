<template>
    <div>
        <b-container class="bv-example-row">
            <b-row class="text-center">
                <b-col><h1>Paseo en bicicleta</h1></b-col>
                <b-col></b-col>
            </b-row>
            <br>
            <b-row>
                <b-col>
                    <b-carousel id="carousel1"
                                style="text-shadow: 1px 1px 2px #333;"
                                controls
                                indicators
                                background="#ababab"
                                :interval="4000"
                                img-width="1024"
                                img-height="800"
                                v-model="slide"
                    >

                        <!-- Text slides with image -->
                        <b-carousel-slide caption="First slide"
                                          text="Nulla vitae elit libero, a pharetra augue mollis interdum."
                                          img-src="https://picsum.photos/1024/480/?image=52"
                        ></b-carousel-slide>

                        <!-- Slides with custom text -->
                        <b-carousel-slide img-src="https://picsum.photos/1024/480/?image=54">
                            <h1>Hello world!</h1>
                        </b-carousel-slide>

                        <!-- Slides with image only -->
                        <b-carousel-slide img-src="https://picsum.photos/1024/480/?image=58">
                        </b-carousel-slide>

                        <!-- Slides with img slot -->
                        <!-- Note the classes .d-block and .img-fluid to prevent browser default image alignment -->
                        <b-carousel-slide>
                            <img slot="img" class="d-block img-fluid w-100" width="1024" height="480"
                                 src="https://picsum.photos/1024/480/?image=55" alt="image slot">
                        </b-carousel-slide>

                        <!-- Slide with blank fluid image to maintain slide aspect ratio -->
                        <b-carousel-slide caption="Blank Image" img-blank img-alt="Blank image">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse
                                eros felis, tincidunt a tincidunt eget, convallis vel est. Ut pellentesque
                                ut lacus vel interdum.
                            </p>
                        </b-carousel-slide>

                    </b-carousel>
                    <br>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque malesuada sem libero, ut
                        facilisis purus sollicitudin quis. Nullam fermentum tempus auctor. Sed pellentesque bibendum
                        elementum. Fusce nec felis mattis, malesuada ligula in, feugiat diam. Donec eleifend tortor quis
                        odio congue rutrum. Integer luctus aliquet ipsum, nec porta nibh viverra sit amet. Donec
                        tincidunt ut odio eget laoreet.</p>

                </b-col>
                <b-col>
                    <h3 class="text-center">Lorem ipsum dolor</h3>
                    <br>
                    <b-row>
                        <b-col>
                            <label>Precio: </label> <b>$60</b>
                        </b-col>
                        <b-col>
                            <b-col>
                                <label>Cantidad:</label>
                            </b-col>
                            <b-col>
                                <b-form-input type="number"></b-form-input>
                            </b-col>
                        </b-col>

                    </b-row>
                    <br>
                    <b-row>
                        <b-col>
                            <datepicker :inline="true"></datepicker>
                        </b-col>
                        <b-col>
                            <b-list-group class="text-center">
                                <b-list-group-item href=#>8:00</b-list-group-item>
                                <b-list-group-item href=#>10:00</b-list-group-item>
                                <b-list-group-item href=#>13:00</b-list-group-item>
                                <b-list-group-item href=#>16:00</b-list-group-item>
                                <b-list-group-item href=#>17:00</b-list-group-item>
                            </b-list-group>
                        </b-col>
                    </b-row>
                    <br>
                    <b-alert show variant="dark">Detalle de Compra</b-alert>
                    <br><br>
                    <b-btn :block="true" class="bottom-btn">Comprar</b-btn>
                </b-col>
            </b-row>
            <b-row>
                <b-col></b-col>
            </b-row>
        </b-container>
    </div>
</template>


<script>
  import Datepicker from 'vuejs-datepicker';

  export default {
    components: {
      Datepicker
    }
    // mounted: function () {
    //   alert(this.$route.params.id)
    // }
  }
</script>
<!-- Add "scoped" attribute to limit CSS to this component only -->
<style>
    .bottom-btn {
        position: absolute;
        bottom: 0;
        right: 0;
    }
</style>
