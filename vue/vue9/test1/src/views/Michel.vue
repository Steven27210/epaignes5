<template>
  <div class="michel">
    <p v-if="needLove">Good michel</p>
    <button type="button" @click="changeLove">click ici</button>
  </div>
</template>

<script>

export default {
  name: 'Michel',
  data: function() {
    return {
      needLove: true
    }
  },
  methods: {
    changeLove: function(){
      this.needLove = !this.needLove
    }
  }

}
</script>
