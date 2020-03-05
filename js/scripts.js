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

    attachBootstrapHandlers();
  });
})(jQuery);