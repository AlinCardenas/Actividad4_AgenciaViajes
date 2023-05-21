let image1 = "https://i.postimg.cc/L87zhBvT/lugar1.jpg";
let image2 = "https://i.postimg.cc/3wfJ3nB8/lugar3.jpg";
let image3 = "https://i.postimg.cc/8PGDQ2Sd/lugar2.jpg";
function imageSlider() {
  return {
    currentIndex: 0,
    images: [
      image1,
      image2,
      image3,
    ],
    captions: [
        ['Texto1-1', 'Texto1-2'],
        ['Texto2-1', 'Texto2-2'],
        ['Texto3-1', 'Texto3-2'],
    ],
    init() {
      this.currentIndex = 0;
    },
    currentImage() {
      return this.images[this.currentIndex];
    },
    currentCaption() {
      return this.captions[this.currentIndex];
    },
    previous() {
      if (this.currentIndex > 0) {
        this.currentIndex--;
      }
    },
    forward() {
      if (this.currentIndex < this.images.length - 1) {
        this.currentIndex++;
      }
    },
  };
}