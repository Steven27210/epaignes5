let app = new Vue({
  el: '#app',
  data: { //
    message: 'hello Vue!', // String
    standard: 0,
    first: 0,
    vip: 0,
    commandes: []
  },
  computed: {
    total() {
      return 10 * this.standard + 30 * this.first + 70 * this.vip
    }
  },
  methods: {
    reset: function() {
      this.commandes.unshift({
        nombrestandard: this.standard,
        nombrefirst: this.first,
        nombrevip: this.vip,
        total: this.total
      })

      this.standard = 0
      this.first = 0
      this.vip = 0
    }
  }
})
