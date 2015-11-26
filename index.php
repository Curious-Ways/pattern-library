<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Back to Front Style Guide</title>

    <!-- jQuery -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

    <!-- Modernizer -->
    <script src="bower_components/modernizr/modernizr.js" type="text/javascript"></script> 

    <!-- FitVids -->
    <script src="bower_components/FitVids/jquery.fitvids.js" type="text/javascript"></script> 

    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/global.css">  

    <!-- Variables per project starts -->
    <!-- ============================ -->

    <!-- Fontdeck -->
    <script type="text/javascript">
    WebFontConfig = { fontdeck: { id: '51745' } };

    (function() {
      var wf = document.createElement('script');
      wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
      '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
      wf.type = 'text/javascript';
      wf.async = 'true';
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(wf, s);
    })();
    </script>    
   
    <!-- Font Awesome -->
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

    <!-- Match Height -->
    <script src="bower_components/matchHeight/jquery.matchHeight.js" type="text/javascript"></script>

    <!-- Variables per project ends -->
    <!-- ========================== -->

  </head>
  <body>

    <div class="wrapper">

      

      <div class="content-wrapper style-guide-intro">

        <div class="site-navigation-strip">
          

          <nav class="site-navigation">
            <ul>
              <li><a href="#colors">Colors</a></li>
              <li><a href="#fonts">Font</a></li>
              <li><a href="#logo">Logo</a></li>
              <li><a href="#layouts">Layouts</a></li>
              <li><a href="#lists">Lists</a></li>
              <li><a href="#tables">Tables</a></li>
              <li><a href="#text">Text</a></li>
              <li><a href="#forms">Forms</a></li>

            </ul>
          </nav>
        </div>

        <div class="content">
          <h1 class="site-title">Website Style Guide</h1>
          <img class="site-logo" src="assets/img/btf_logo.svg" alt="#">
        </div>

      </div>
      
      <?php
      $files = array();
      $handle=opendir('patterns');
      while (false !== ($file = readdir($handle))):
        if(stristr($file,'.html')):
            $files[] = $file;
        endif;
      endwhile;
      sort($files);
      foreach ($files as $file):
        echo '<div class="pattern block">';
        echo '<div class="display entry-content">';
        include('patterns/'.$file);
        echo '</div>';
        echo '<div class="source">';
        echo '<textarea rows="6" cols="30">';
        echo htmlspecialchars(file_get_contents('patterns/'.$file));
        echo '</textarea>';
        echo '<p><a href="patterns/'.$file.'">'.$file.'</a></p>';
        echo '</div>';
        echo '</div>';
      endforeach;
      ?>
    </div>

    <!-- Scripts -->

    <!-- jQuery UI -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <script>
      jQuery(function() {
        jQuery( "#tabs" ).tabs();
      });
    </script>

    <script>
      $(document).ready(function(){
        // Target your .container, .wrapper, .post, etc.
        $("#tabs, .rte").fitVids();
      });
    </script>

    <!-- Flexslider -->
    <script src="assets/plugins/flexslider/jquery.flexslider-min.js"></script>
    <script type="text/javascript" charset="utf-8">
    jQuery(window).load(function() {         
      jQuery('.flexslider').flexslider({
        controlNav: true,
        directionNav: false, 
      });
    });

    jQuery(window).load(function() {         
      jQuery('.flexslider-arrows').flexslider({
        controlNav: false,
        directionNav: true, 
        animation: "slide"
      });
    });    
    </script>   

    <!-- Match Height -->
    <script>
      jQuery(function() {
          jQuery('.match-height').matchHeight();
      });
    </script>

    <!-- Smooth Scroll -->
    <script>
    jQuery(function() {
      jQuery('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            $('html,body').animate({
              scrollTop: target.offset().top
            }, 500);
            return false;
          }
        }
      });
    });    
    </script>
  </body>
</html>