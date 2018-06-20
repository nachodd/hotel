<template>
  <div>
    <!--<div class="top-right links">
      <template v-if="authenticated">
        <router-link :to="{ name: 'home' }">
          {{ $t('home') }}
        </router-link>
      </template>
      <template v-else>
        <router-link :to="{ name: 'login' }">
          {{ $t('login') }}
        </router-link>
        <router-link :to="{ name: 'register' }">
          {{ $t('register') }}
        </router-link>
      </template>
    </div>-->
    <subnavbar />
    <div class="container">
      <div class="text-center">
        <div class="title mb-4">
          <carrousel />
        </div>
      </div>

    </div>
  </div>
</template>

<script>
import Subnavbar from '~/components/Subnavbar'
import { mapGetters } from 'vuex'
import Carrousel from '~/pages/carrousel'

export default {
  // layout: 'basic',
  components: {
    Subnavbar,
    Carrousel,
  },
  metaInfo () {
    return { title: this.$t('home') }
  },

  data: () => ({
    title: window.config.appName
  }),

  computed: mapGetters({
    authenticated: 'auth/check'
  })
}
</script>

<style scoped>
.top-right {
  position: absolute;
  right: 10px;
  top: 18px;
}


</style>
