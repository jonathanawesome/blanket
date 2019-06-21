export const something = (() => {
  const body = document.body;

  const doInit = () => {
    console.log(`i fire on every page!`);
  };

  const handleClick = e => {
    alert(`you clicked on ${e.target.classList}!`);
  };

  const handleSearch = e => {
    const searchTerm = _getSearchTerm(e.target);
    alert(`searching for ${searchTerm}!`);
  };

  //private
  const _getSearchTerm = target => {
    return target.querySelector('input[type="search"]').value;
  };

  return {
    doInit,
    handleClick,
    handleSearch,
  };
})();
