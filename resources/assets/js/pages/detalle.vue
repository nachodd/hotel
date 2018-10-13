<template>
  <b-container class="bv-example-row">
    <br>
    <b-row class="text-center">
      <b-col><h2>Compra de Paseo</h2></b-col>
    </b-row>
    <br>
    <b-row>
      <b-col sm="12" xs="12" md="6" lg="6">
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
              Lo5em ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse
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
      <b-col sm="12" xs="12" md="6" lg="6">
        <b-row>
          <b-col>
            <b-row>
              <b-col md="7" lg="7" sm="7" xs="7" class="text-left">
                <span>Paseo en bicicleta</span>
              </b-col>
              <b-col md="5" lg="5" sm="5" xs="5" class="text-right">
                <label>Precio: </label> <b>$60</b>
              </b-col>
            </b-row>
          </b-col>
          <b-col>
            <b-row>
              <b-col class="text-right">
                <label>Cantidad:</label>
              </b-col>
              <b-col>
                <b-form-input placeholder="1" min="1" type="number"></b-form-input>
              </b-col>
            </b-row>
          </b-col>

        </b-row>
        <br>
        <b-row>
          <b-col class="text-left">
            <datepicker :inline="true" v-model="selectedDate"></datepicker>
          </b-col>
          <b-col>
            <b-list-group class="text-center" v-model="hourSelected">
              <b-list-group-item v-for="option in options"
                                 href="#"
                                 :key="option"
                                 :value="option"
                                 v-bind:class="{ active: hourSelected == option }"
                                 @click="hourSelected = option">
                {{option}}
              </b-list-group-item>

            </b-list-group>
          </b-col>
        </b-row>
        <br>
        <b-alert show variant="dark">Detalle de Compra: <b>{{ selectedDate.toLocaleDateString('es') + ' a las ' +
          hourSelected }} </b></b-alert>
        <b-row>
          <b-col class="text-center">
            <b-btn @click="isModalVisible = true" class="bottom-btn">Comprar</b-btn>
          </b-col>
        </b-row>
      </b-col>
    </b-row>
    <b-row>
      <b-col></b-col>
    </b-row>
    <buy :show="isModalVisible" @close="isModalVisible = false"/>
  </b-container>
</template>


<script>
  import Buy from '~/pages/buy';
  import Datepicker from 'vuejs-datepicker';

  const hours = ["8:00", "10:00", "13:00", "16:00", "17:00"];

  export default {
    components: {
      Datepicker,
      Buy
    },
    data: () => ({
      selectedDate: new Date(),
      hourSelected: hours[0],
      slide: null,
      options: hours,
      isModalVisible: false
    }),
    methods: {
      showModal() {
        debugger
        this.isModalVisible = true;
      },
      closeModal() {
        this.isModalVisible = false;
      }
    }
  }
</script>
<!-- Add "scoped" attribute to limit CSS to this component only -->
<style>
  .bottom-btn {
    width: 100%;
    bottom: 0;
    right: 0;
  }
  .active {
    background: #4bd !important;
  }
</style>
