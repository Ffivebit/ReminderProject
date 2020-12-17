$('.holder').on('click', function() {
    $this = $(this);
    if($this.hasClass('active')) {
      $this.fadeOut(500);
      setTimeout(function() {
        $this.removeClass('active')
      }, 500);
      setTimeout(function() {
        $this.fadeIn(500);
      }, 1000);
    } else {
      $(this).addClass('active');
    }
  });
  
  $(document).on('click', function(e) {
    container = $('.holder');
    if ($('.holder').hasClass('active') && !container.is(e.target)  && container.has(e.target).length === 0) {
      $this.fadeOut(500);
      setTimeout(function() {
        $this.removeClass('active')
      }, 500);
      setTimeout(function() {
        $this.fadeIn(500);
      }, 1000);
    }
  });