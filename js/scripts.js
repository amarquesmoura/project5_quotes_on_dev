(function($) {
  $('#show-me-another').on('click', function(event) {
    event.preventDefault();
    $.ajax({
      method: 'get',
      url:
        qod_vars.rest_url +
        'wp/v2/posts?filter[orderby]=rand&filter[posts_per_page]=1',

      beforeSend: function(xhr) {
        xhr.setRequestHeader('X-WP-Nonce', qod_vars.wpapi_nonce);
      }
    }).done(function(response) {
      console.log(response);
      $('.entry-content')
        .empty()
        .append('<p>' + response[0].content.rendered + '</p>');
      $('.entry-title').html('&mdash; ' + response[0].title.rendered);
      if (response[0]._qod_quote_source_url.length > 0) {
        $('.source').html(
          `, <a href="${response[0]._qod_quote_source_url}">${
            response[0]._qod_quote_source
          }</a>`
        );
      } else if (response[0]._qod_quote_source.length > 0) {
        $('.source').html(', ' + response[0]._qod_quote_source);
      }
    });
  });
})(jQuery);
