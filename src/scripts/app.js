import { something } from './something';

(function() {
  document.addEventListener('DOMContentLoaded', () => {
    console.log('Your document is ready!');
    something.doInit();
  });

  document.addEventListener(
    'click',
    e => {
      const target = e.target;
      //console.log(`target: ${target}`);

      if (target.matches('.something')) {
        something.handleClick(e);
      }
    },
    {
      passive: true,
      capture: false,
    }
  );

  const searchSomething = document.querySelector('#search__form');
  if (searchSomething) {
    searchSomething.addEventListener('submit', e => {
      e.preventDefault();
      something.handleSearch(e);
    });
  }

  // window.addEventListener('resize', function () {
  // }, false);
})();
