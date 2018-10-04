document.addEventListener('click', function (e) {
  const target = e.target;
  // if (target.matches('.puppies')) {
  //   // do stuff
  // }
}, false);


document.addEventListener('submit', function (e) {
  e.preventDefault();
  const target = e.target;
  // if (target.matches('#puppies')) {
  //   //do stuff
  // }
}, false);