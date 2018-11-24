function doSearch(target) {
  let term = $('input', target).val();
  if (term) {
    $.post(localized.ajaxURL, {
      action: "BLANKET_search",
      term: term
    }, function () { })
      .done(function (data) {
        console.log("searchdata", data);
      })
      .fail(function () {
        // alert( "error | fail" );
      })
      .always(function () {
        // alert( "finished | always" );
      });
  }
}//doSearch
