            </div>
            <div id="toTop"></div>
        </div>
    </div>

<script type="text/javascript">
$(function() {
  $(window).scroll(function() {
    if($(this).scrollTop() != 0) {
      $('#toTop').fadeIn(); 
    } else {
      $('#toTop').fadeOut();
    }
  });
 
  $('#toTop').click(function() {
    $('body,html').animate({scrollTop:0},800);
  }); 
});
</script>
</body>
</html>