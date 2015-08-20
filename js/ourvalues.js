$(document).ready(function() {
  $('.value_link, .value_read_more a').mouseover(function() {
    $(this).closest('.value_wrapper').find('span.circle').addClass('value_circle_highlight');
    $(this).closest('.value_wrapper').find('h4').addClass('value_title_highlight');
    $(this).closest('.value_wrapper').find('.value_read_more').find('span').addClass('value_title_highlight');
  });

  $('.value_link, .value_read_more a').mouseout(function() {
    $(this).closest('.value_wrapper').find('span.circle').removeClass('value_circle_highlight');
    $(this).closest('.value_wrapper').find('h4').removeClass('value_title_highlight');
    $(this).closest('.value_wrapper').find('.value_read_more').find('span').removeClass('value_title_highlight');
  });

  $('.value_link, .value_read_more a').click(function() {
    var wrapper = $(this).closest('.value_wrapper');

    $('.value_detail').fadeOut(function() {
      $(this).find('h1').html(wrapper.find('.value_long_title').html());
      $(this).find('.value_detail_description').html(wrapper.find('.value_description').html());
    }).fadeIn();

    var valueDetailTop = $('.value_detail').offset().top;

    if (valueDetailTop > 350)
    {
      $(document.body).animate({
        'scrollTop': valueDetailTop - 40
      }, 1000);
    }
  });
});