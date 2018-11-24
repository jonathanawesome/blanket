document.addEventListener('click', function (e) {
  const target = e.target;
  if (target.matches('#fetch')) {
    doFetch(target);
  }
}, false);

document.addEventListener('submit', function (e) {
  e.preventDefault();
  const target = e.target;
  if (target.matches('#search')) {
    doSearch(target);
  }
}, false);