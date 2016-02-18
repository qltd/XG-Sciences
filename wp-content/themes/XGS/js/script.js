$(function() {

	$('#carousel-screenshots').carousel({interval: 6000});

  $('#carousel-tables').carousel('pause');

	$(".collapse").collapse({
		toggle: false
	});

  $('#product-select').change(function(){
      var page = $(this).val();
      window.location.replace(page);
  });

  $('#ter-nav a').click(function (e) {
    $(this).tab('show');
    e.preventDefault();
  });

	$(".carousel-nav a").click(function(e){
        e.preventDefault();
        var index = parseInt($(this).attr('data-to'));
        $('#carousel-screenshots').carousel(index);
        var nav = $('.carousel-nav');
        var item = nav.find('a').get(index);
        nav.find('a.active').removeClass('active');
        $(item).addClass('active');
    });

    $("#carousel-screenshots").bind('slide', function(e) {
      var elements = $(".carousel-nav a").length; // change to the number of elements in your nav
      var nav = $('.carousel-nav');
      var index = $('#carousel-screenshots').find('.item.active').index();
      index = (index == elements - 1) ? 0 : index + 1;
      var item = nav.find('a').get(index);
      nav.find('a.active').removeClass('active');
      $(item).addClass('active');
    });

    

    $('input[type="text"]').focus(function(){
      if($(this).val() == $(this).prop('defaultValue'))
      { $(this).val(''); }
    });

    $('input[type="text"]').blur(function(){
      if($(this).val() == '')
      {$(this).val($(this).prop('defaultValue'));}
    });

});
