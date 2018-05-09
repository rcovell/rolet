$(window).on('load', function() {
  if (!$('body').hasClass('mobile-view')) {
    $(".equalize").each(function () {
      if (!$(this).hasClass('clearfix')) {
        $(this).equalize('');
      }
    });
  }
});

$(window).on('resize', function() {
  if (!$('body').hasClass('mobile-view')) {
    $(".equalize").each(function () {
      if (!$(this).hasClass('clearfix')) {
        $(this).equalize();
      }
    });
  }
});
