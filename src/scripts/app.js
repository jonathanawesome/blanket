import { something } from './something';

(function () {

  document.addEventListener('DOMContentLoaded', () => {
    console.log('Your document is ready!');
    something.init();

  });

  document.addEventListener('click', function (e) {
    const target = e.target;
    //console.log(`target: ${target}`);
    if (target.matches('.something')) {
      //run something
    }
  }, { passive: true, capture: false });

  // document.addEventListener('submit', function (e) {
  //   e.preventDefault();
  // }, false);

  // window.addEventListener('resize', function () {
  // }, false);

})();
