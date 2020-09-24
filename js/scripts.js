// Running jQuery in noConflict mode
// For more information: https://api.jquery.com/jquery.noconflict/

jQuery.noConflict();

(function( $ ) {
  $(function() {
    // Functions
    function refreshCodeBlocks() {
      $('.CodeMirror').each(function(i, el) {
        if (!el.CodeMirror) {
          return;
        }
    
        el.CodeMirror.refresh();
      });
    }

    function attachBootstrapHandlers() {
      $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        refreshCodeBlocks();
      })
    }

    function addResponsiveWrapperToIframes() {
      $('iframe').each(function () {
        var hasSource = $(this).attr('src');

        if ($(this).parent('.embed-responsive').length || !hasSource) {
          return;
        }

        $(this).wrap('<div class="embed-responsive embed-responsive-16by9"></div>');
      });
    }

    function checkisUserLoggedIn() {
      var isUserLoggedIn = Cookies.get('studio-user-logged-in');

      if (typeof isUserLoggedIn !== 'undefined') {
        if (isUserLoggedIn === 'no') {
          $('.fliplet-promotion').removeClass('d-none');
        }

        if (isUserLoggedIn === 'yes') {
          $('.fliplet-promotion').addClass('d-none');
        }

        return;
      }

      $.ajax({
        method: 'GET',
        url: 'https://api.fliplet.test/v1/user',
        xhrFields: {
          withCredentials: true
        },
        success: function (response) {
          if (!response || !response.user) {
            Cookies.set('studio-user-logged-in', 'no', { expires: 1 });

            $('.fliplet-promotion').removeClass('d-none');

            return;
          }

          Cookies.set('studio-user-logged-in', 'yes', { expires: 1 });

          $('.fliplet-promotion').addClass('d-none');
        },
        error: function () {
          Cookies.set('studio-user-logged-in', 'no', { expires: 1 });

          $('.fliplet-promotion').removeClass('d-none');
        }
      });
    }

    attachBootstrapHandlers();
    addResponsiveWrapperToIframes();
    checkisUserLoggedIn();
  });
})(jQuery);