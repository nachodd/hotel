<template>
  <div>
    <b-modal id="modalForm" size="lg" title="Finalice su Compra" v-model="showModal"  @hide="hide">
      <b-form @submit="onSubmit" @reset="onReset">
        <b-row>
          <b-col>
            <b-form-group id="documentInputGroup"
                          label="Numero de documento:"
                          label-for="documentInput">
              <b-input-group>
                <b-form-input id="documentInput"
                              type="number"
                              v-model="form.document"
                              required
                              placeholder="Ingrese Documento">
                </b-form-input>
                <b-input-group-append>
                  <b-btn variant="secondary">Buscar</b-btn>
                </b-input-group-append>
              </b-input-group>
            </b-form-group>
          </b-col>
          <b-col>
            <b-form-group id="emailInputGroup"
                          label="Email:"
                          label-for="emailInput">
              <b-form-input id="emailInput"
                            type="email"
                            v-model="form.email"
                            required
                            placeholder="Ingrese Email">
              </b-form-input>
            </b-form-group>
          </b-col>
        </b-row>
        <b-row>
          <b-col>
            <b-row>
              <b-col>
                <b-form-group id="nameInputGroup"
                              label="Nombre: "
                              label-for="nameInput">
                  <b-form-input id="nameInput"
                                type="text"
                                v-model="form.name"
                                required
                                placeholder="Nombre">
                  </b-form-input>
                </b-form-group>
              </b-col>
              <b-col>
                <b-form-group id="lastNameInputGroup"
                              label="Apellido:"
                              label-for="lastNameInput">
                  <b-form-input id="lastNameInput2"
                                type="text"
                                v-model="form.lastName"
                                required
                                placeholder="Apellido:">
                  </b-form-input>
                </b-form-group>
              </b-col>
            </b-row>
          </b-col>
        </b-row>
        <b-row>
        </b-row>
        <b-row>
          <b-col>
            <b-form-group id="phoneInputGroup"
                          label="Telefono:"
                          label-for="phoneInput">
              <b-form-input id="phoneInput"
                            type="text"
                            v-model="form.phone"
                            required
                            placeholder="Ingrese Telefono">
              </b-form-input>
            </b-form-group>
          </b-col>
        </b-row>

      </b-form>
      <div slot="modal-footer" class="w-100">
        <b-button block type="submit" variant="info">Comprar por MercadoPago</b-button>
      </div>
    </b-modal>
  </div>
</template>


<script>

  export default {
    props: ['show'],
    data() {
      return {
        form: {
          document: '',
          age: '',
          gender: null,
          cityID: '',
          lastName: '',
          email: '',
          name: '',
          phone: ''
        },
        genders: [
          {text: 'Seleccione Sexo', value: null},
          'Femenino', 'Masculino'
        ],
        showModal: false
      }
    },
    watch: {
      show: function() {
        this.showModal = this.show
      }
    },
    methods: {
      onSubmit(evt) {
        evt.preventDefault();
        alert(JSON.stringify(this.form));
      },
      onReset(evt) {
        evt.preventDefault();
        /* Reset our form values */
        this.form.email = '';
        this.form.name = '';
        this.form.food = null;
        this.form.checked = [];
        /* Trick to reset/clear native browser form validation state */
        this.showModal = false;
      },
      hide() {
        this.$emit('close')
      }
    }
  }
</script>

<style scoped>

</style>
