$(function() {

  //FILTER BY SEARCH
  var rows = $('.card__inner_wrapper article');
  $('.no-result').hide();

  $('#search').keyup(function() {
      $('.filter li').removeClass('active');

      var val = '^(?=.*\\b' + $.trim($(this).val()).split(/\s+/).join('\\b)(?=.*\\b') + ').*$',
      reg = RegExp(val, 'i'),
      text;

      rows.show().filter(function() {
        text = $(this).text().replace(/\s+/g, ' ');
        return !reg.test(text);
      }).hide();

      var visible = $('.workshop_item:visible').length;

      if(visible == 0) {
        $('.no-result').show();
      } else {
        $('.no-result').hide();
      }

  });

  // SLDES
  $(".accordion-heading").click(function(){
    $(this).toggleClass('toggle_active');
    $(this).next(".accordion-body").toggle();
  });
  $("button.js-button-toggle").click(function(){
    $(this).parent().next(".workshop_content_container").toggleClass('toggle_hide');
  });

});