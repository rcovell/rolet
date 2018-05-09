// var selected_navigation = '';
$(window).on('load', function() {
  // var show_navigation = false;
  // var has_navigation = false;
  // var current_navigation = '';
  // var hover_child_navigation = '';
  // var navigation_depth = 0;
  //
  // $(".child_menu").each(function() {
  //   if (!$(this).hasClass("hide")) {
  //     has_navigation = true;
  //     current_navigation = $(this).attr('id');
  //   }
  // });
  //
  // if ($('body').hasClass('not-front')) {
  //   show_navigation = true;
  // }
  //
  // if ((show_navigation) && (has_navigation)) {
  //   $('#navigation').show();
  // }
  //
  // $('#header-navigation a').mouseenter(function(event) {
  //   if ($('#navigation:hidden')) {
  //     $('#navigation').slideDown();
  //   }
  //
  //   hover_child_navigation = 'child-' + $(this).attr('id');
  //   var visible_navigation = '';
  //   $(".child_menu").each(function() {
  //     visible_navigation = this.id;
  //
  //     if ($( this ).is(":visible") ) {
  //       if (visible_navigation != hover_child_navigation)
  //       {
  //         $('#' + visible_navigation).hide();
  //       }
  //     }
  //   });
  //
  //   $(selected_navigation).hide();
  //   $('#' + hover_child_navigation).show();
  //   selected_navigation = hover_child_navigation;
  // }).mouseleave(function(){
  // });
  //
  // $('#block-menu-block-1 .menu a').mouseenter(function(event) {
  //   if ($('#navigation:hidden')) {
  //     $('#navigation').slideDown();
  //   }
  //
  //   hover_child_navigation = 'child-' + $(this).attr('id');
  //   var visible_navigation = '';
  //
  //   $(".child_menu").each(function() {
  //     visible_navigation = this.id;
  //
  //     if ($( this ).is(":visible") ) {
  //       if (visible_navigation != hover_child_navigation) {
  //         $('#' + visible_navigation).hide();
  //       }
  //     }
  //   });
  //
  //   $(selected_navigation).hide();
  //   $('#' + hover_child_navigation).show();
  //   selected_navigation = hover_child_navigation;
  // }).mouseleave(function() {
  // });
  //
  // $('#header').mouseleave(function(event) {
  //   if (hover_child_navigation != current_navigation) {
  //     $('#' + hover_child_navigation).hide();
  //     $('#' + current_navigation).show();
  //   }
  // });

  // var $window = $(window);
  //
  // function checkSticky() {
  //   // console.log('checkSticky');
  //   if ($('.navbar').length > 0) {
  //     let $stickyEl = $('.navbar');
  //     // console.log($window.scrollTop());
  //
  //     let windowTop = $window.scrollTop();
  //     $stickyEl.toggleClass('sticky-scrolled', windowTop > 50);
  //   }
  // }
  //
  // $window.scroll(function() {
  //   checkSticky();
  // });
  //
  // checkSticky();
});
