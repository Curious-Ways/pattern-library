<footer class="site-footer" role="contentinfo">

  <div class="content-wrapper">

    <div class="content">

      <div class="l1-l3 m2-m4">

        <img class="logo-footer" src="assets/img/welland-logo-white.png" alt="Welland">

      </div>

      <div class="l4-l7 m5-m16">

        <div class="footer-address" itemscope itemtype="http://schema.org/ContactPoint"> 
          <div class="main-address" itemscope itemtype="schema.org/PostalAddress"> 
            <span itemprop="streetAddress">Hydehurst Lane,</span> <br>
            <span itemprop="addressLocality">Crawley, West Sussex</span> <br>
            <span itemprop="postalCode">RH10 9AS</span> <br>
            <span itemprop="addressCountry">United Kingdom</span> <br><br>
          </div> 
          <span itemprop="telephone">Tel: +44 (0) 1293 615455</span><br>
          <span itemprop="faxNumber">Fax: +44 (0) 1293 615411</span>
          <br><br>
          <p>A CliniMed® Group Company</p>  
        </div> 

      </div>

      <div class="l9-l10 m2-m5">

        <ul>
          <li><h3>Products</h3></li>
          <li><a href="#">Colostomy</a></li>
          <li><a href="#">Illestomy</a></li>
          <li><a href="#">Urostomy</a></li>
          <li><a href="#">Accessories</a></li>
        </ul>

      </div>

      <div class="l11-l13 m6-m9">

        <ul>
          <li><h3>Support</h3></li>
          <li><a href="#">What is a stoma?</a></li>
          
          <li><a href="#">Useful links</a></li>
          <li><a href="#">Glossary of terms</a></li>
        </ul>

      </div>

      <div class="l14-l16 m11-m16">

        <ul>
          <li><h3>Other</h3></li>
          <li><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Careers</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="#">Legal / Privacy</a></li>        
        </ul>

        <nav>
          <ul class="list-inline menu-social">
            <li><a href="#"><i class="fa fa-youtube-square"></i></a></li>
            <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
          </ul>
        </nav>          

      </div>

    </div>

  </div>

</footer>

<div class="content-wrapper">

  <div class="content align-c">

    <p class="note">Copyright &copy; Welland Medical Limited, 2015 All Rights Reserved. A CliniMed Group Company</p>
    
    <img style="display: block; width: 300px; text-align:center; margin: 20px auto;" src="assets/img/footer-icons.png" alt="">

  </div>

</div>  

  </body>
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
    $(function() {
      $('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            $('html,body').animate({
              scrollTop: target.offset().top
            }, 1000);
            return false;
          }
        }
      });
    });    
    </script>
  </body>
</html>