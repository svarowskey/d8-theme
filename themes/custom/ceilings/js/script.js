window.onload = function(){
  new WOW().init();
  window.onscroll = function () {
    let nav = document.getElementById('main-menu');
    let header = document.getElementsByClassName('main-header')[0];
    let adminToolBar = document.getElementById('toolbar-administration');
    let pos = 86;
    if( (window.innerWidth <= 1199) || (window.innerWidth >= 768) ) {
      pos = 150;
    }
    if( (window.innerWidth <= 767) || (window.innerWidth >= 576) ) {
      pos = 150;
    }
    if(window.innerWidth <= 575) {
      pos = 290;
    }
    if (window.scrollY >= pos) {
      nav.classList.add('stickytop');
      header.classList.add('paddingBottomMenu');
      adminToolBar != null ? nav.classList.add('stickytopAdmin') : nav.classList.remove('stickytopAdmin');
    } else {
      nav.classList.remove('stickytop');
      header.classList.remove('paddingBottomMenu');
      nav.classList.remove('stickytopAdmin');
    }
  };
  function scrollToTop(scrollDuration) {
    const   scrollHeight = window.scrollY,
        scrollStep = Math.PI / ( scrollDuration / 15 ),
        cosParameter = scrollHeight / 2;
    let     scrollCount = 0,
        scrollMargin,
        scrollInterval = setInterval( function() {
          if ( window.scrollY != 0 ) {
            scrollCount = scrollCount + 1;
            scrollMargin = cosParameter - cosParameter * Math.cos( scrollCount * scrollStep );
            window.scrollTo( 0, ( scrollHeight - scrollMargin ) );
          }
          else clearInterval(scrollInterval);
        }, 15 );
  }
  document.getElementById('up').addEventListener('click', function (e) {
    e.preventDefault();
    scrollToTop(1000);
  });
};