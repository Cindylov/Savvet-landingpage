document.addEventListener('DOMContentLoaded', function () {
    new Glider(document.querySelector('.glider'), {
    //   slidesToShow: 1,
    //   slidesToScroll: 1,
      draggable: true,
      scrollLock: true,
      autoplay: true, // Requires custom implementation for looping
      duration: 0.5,
      rewind: true,
    });
  });