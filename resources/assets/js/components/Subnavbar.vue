<template>
  <div>

    <b-jumbotron fluid style="padding-top: 1.5rem">
      <div class="text-center">
        <div>
          <h4>{{ $t('inicio.contrata_msg') }}</h4>
        </div>
        <br>
        <b-container>
          <b-row class="text-center fa-4x">
            <b-col cols="12" sm="4">
              <div>
                <b-badge pill variant="primary" class="badge-custom">1</b-badge>
              </div>
              <div class="mt-sm-1">
                rbwrber erbrb e ejrbe rb iuewb riub
              </div>
            </b-col>
            <b-col cols="12" sm="4">
              <div>
                <b-badge pill variant="primary" class="badge-custom">2</b-badge>
              </div>
              <div class="mt-sm-1">
                rbwrber erbrb e ejrbe rb iuewb riub
              </div>
            </b-col>
            <b-col cols="12" sm="4">
              <div>
                <b-badge pill variant="primary" class="badge-custom">3</b-badge>
              </div>
              <div class="mt-sm-1">
                rbwrber erbrb e ejrbe rb iuewb riub
              </div>
            </b-col>
          </b-row>
        </b-container>

        <!-- <div class="stepwizard">
          <div class="stepwizard-row setup-panel">
            <div class="stepwizard-step">
              <b-button variant="primary">1</b-button>
              <p>Step 1</p>
            </div>
            <div class="stepwizard-step">
              <b-button variant="primary">2</b-button>
              <p>Step 2</p>
            </div>
            <div class="stepwizard-step">
              <b-button variant="primary">3</b-button>
              <p>Step 3</p>
            </div>
          </div>
        </div>-->
      </div>

      <!--<p>For more information visit website</p>
      <b-btn variant="primary" href="#">More Info</b-btn>-->
    </b-jumbotron>
  </div>
</template>
<script>
export default {
}
</script>
<style scoped>
  .badge-custom {
    font-family: 'Raleway', sans-serif;
    font-weight: normal;
    font-size: 2.5em;
    padding-left: 0.5em;
    padding-right: 0.5em;
  }
  /* .stepwizard-step p {
    margin-top: 10px;
  }
  .stepwizard-row {
    display: table-row;
  }
  .stepwizard {
    display: table;
    width: 50%;
    position: relative;
  }
  .stepwizard-step button[disabled] {
    opacity: 1 !important;
    filter: alpha(opacity=100) !important;
  }
  .stepwizard-row:before {
    top: 14px;
    bottom: 0;
    position: absolute;
    content: " ";
    width: 100%;
    height: 1px;
    background-color: #ccc;
    z-order: 0;
  }
  .stepwizard-step {
    display: table-cell;
    text-align: center;
    position: relative;
  }
  .btn-circle {
    width: 30px;
    height: 30px;
    text-align: center;
    padding: 6px 0;
    font-size: 12px;
    line-height: 1.428571429;
    border-radius: 15px;
  } */
</style>
