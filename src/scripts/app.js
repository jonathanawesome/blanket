import { cookies } from './cookies';


(function () {

  document.addEventListener('DOMContentLoaded', () => {
    console.log('Your document is ready!');
    cookies.showCookieConsent();

  });

  document.addEventListener('click', function (e) {
    const target = e.target;
    //console.log(`target: ${target}`);
    if (target.matches('.cookieConsenter')) {
      cookies.setCookieConsent();
    }
  }, { passive: true, capture: false });

  // document.addEventListener('submit', function (e) {
  //   e.preventDefault();
  // }, false);

  // window.addEventListener('resize', function () {
  // }, false);

})();
