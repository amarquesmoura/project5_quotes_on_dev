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
      $('.entry-content')
        .empty()
        .append('<p>' + response[0].content.rendered + '</p>');
      $('.entry-meta')
        .empty()
        .append(
          '<h2 class="entry-title">&mdash; ' +
            response[0].title.rendered +
            '</h2>'
        );
    });
  });
})(jQuery);
