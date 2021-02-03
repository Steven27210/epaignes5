new Vue({
  el: '#app',
  data: {
    countcard: 3,
    starter: false,
    score: 0,
    nbcoup: 0,
    images: [],
    cardplay: [],
    indexplay: [],
    success: false
  },
  methods: {
    start: function(){
      this.starter = true
      this.score = 0;
      this.nbcoup = 0;
      this.success = false
      this.images = []

      for (var i = 0; i < this.countcard; i++) {
        let number = randomInteger(304, 330)
        this.images.push({img: number,open: false})
        this.images.push({img: number,open: false})
      }
      // melanger
      this.images = shuffle(this.images)
    },
    verifcard: function(index,idimg) {
      if(this.cardplay.length < 2) {
        // retourne la carte
        this.images[index].open = true
        this.cardplay.push(idimg)
        this.indexplay.push(index)
        console.log(this.cardplay)
        if(this.cardplay.length == 2) {
          this.nbcoup++
          if(this.cardplay[0] == this.cardplay[1]) {
            // success
            this.score++
            this.remiseazero()
            // score == coundcard
            if(this.score == this.countcard) {
              // i'am a winner
              this.starter = false
              this.success = true
            }
          } else {
            setTimeout(this.tryAgain,2000)
          }
        }
      }
    },
    tryAgain: function()
    {
      for (var i = 0; i < 2; i++) {
        this.images[this.indexplay[i]].open = false
      }
      this.remiseazero()
    },
    remiseazero: function()
    {
      this.indexplay = []
      this.cardplay = []
    }
  }

});

function randomInteger(min, max) {
  return Math.floor(Math.random() * (max - min + 1)) + min;
}

function shuffle(tab) {
  var i, j, tmp;
  for (i = tab.length - 1; i > 0; i--) {
    j = Math.floor(Math.random() * (i + 1));
    tmp = tab[i];
    tab[i] = tab[j];
    tab[j] = tmp;
  }
  return tab;
}
