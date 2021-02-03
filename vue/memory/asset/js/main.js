let app = new Vue({
  el: '#app',
  data : {
    countcard: 10,
    images: [],
    cardplay: [],
    imageplay: [],
    score: 0,
    nbcoup: 0,
    success: false,
    starter: false
  },
  methods: {
    getRandomIntRecursive: function()
    {
      let newint = getRandomInt(304, 330);
      if(this.images.includes(newint)) {
        this.getRandomIntRecursive()
      } else {
        return newint
      }
    },
    start: function() {
      this.success = false
      this.starter = true
      this.remisezero()
      this.images = []
      this.score = 0
      this.nbcoup = 0
      for (var i = 0; i < this.countcard; i++) {
        // let int = getRandomInt(304, 330)
        let int = this.getRandomIntRecursive()
        this.images.push({img:int,open: false})
        this.images.push({img:int,open: false})
      }
      this.images = randomize(this.images)
      console.log(this.images)
    },
    verifcard: function(index,image) {
      if(this.cardplay.length < 2){

        this.images[index].open = true
        this.cardplay.push(index)
        this.imageplay.push(image)
        if(this.cardplay.length == 2) {
          this.nbcoup++
          if(this.imageplay[0] == this.imageplay[1]) {
            this.score++
            this.remisezero()

            // fin de partie ici
              // si score == countcard

              if(this.score == this.countcard) {
                this.success = true
                this.starter = false
              }
          } else {
            setTimeout(this.trymore,2000)
          }
        }
      }
    },
    trymore: function() {
      for (var i = 0; i < 2; i++) {
        this.images[this.cardplay[i]].open = false
      }
      this.remisezero()
    },
    remisezero: function(){
      this.cardplay = []
      this.imageplay = []
    }
  },
})

function getRandomInt(min, max) {
  min = Math.ceil(min);
  max = Math.floor(max);
  return Math.floor(Math.random() * (max - min + 1)) + min;
}

function randomize(tab) {
  var i, j, tmp;
  for (i = tab.length - 1; i > 0; i--) {
    j = Math.floor(Math.random() * (i + 1));
    tmp = tab[i];
    tab[i] = tab[j];
    tab[j] = tmp;
  }
  return tab;
}
