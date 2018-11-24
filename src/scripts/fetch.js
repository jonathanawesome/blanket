function doFetch(target) {
  let offset = target.attr('data-offset');
  $.post(localized.ajaxURL, {
    action: "BLANKET_fetch",
    offset: offset
  }, function () { })
    .done(function (data) {
      console.log("fetchdata", data);
    })
    .fail(function () {
      // alert( "error | fail" );
    })
    .always(function () {
      // alert( "finished | always" );
    });
}//doFetch