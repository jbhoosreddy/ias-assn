<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" manifest="<?=  base_url(); ?>cache.appcache"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />
<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="description" content="<?= $description; ?>" />
		<meta name="keywords" content="<?= $keywords; ?>" />
		<title><?= $title; ?></title>

<link rel="icon" type="image/png" href="<?= base_url(); ?>images/favicon.png">
  <!-- Included CSS Files (Uncompressed) -->
  <!--
  <link rel="stylesheet" href="stylesheets/foundation.css">
  -->
  
  <!-- Included CSS Files (Compressed) -->
  <link rel="stylesheet" href="<?= base_url(); ?>stylesheets/foundation.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>stylesheets/app.css">

  <script src="<?= base_url(); ?>javascripts/modernizr.foundation.js"></script>
</head>
<body onload="initialise()">

  <!-- Top Bar -->

  <nav class="top-bar">
    <ul>
      <!-- Title Area -->
      <li class="name">
        <h1>
          <a href="https://localhost/ias-assn/index.php/app/index">
            Home
          </a>
        </h1>
      </li>
      <li class="toggle-topbar"><a href="#"></a></li>
    </ul>

    <section>
      <!-- Right Nav Section -->
      <ul class="right">
        <li class="divider"></li>
        <li class="has-dropdown">
          <a href="#">Main Item 1</a>
          <ul class="dropdown">
            <li><label>Section Name</label></li>
            <li class="has-dropdown">
              <a href="#" class="">Has Dropdown, Level 1</a>
              <ul class="dropdown">
                <li><a href="#">Dropdown Options</a></li>
                <li><a href="#">Dropdown Options</a></li>
                <li><a href="#">Level 2</a></li>
                <li><a href="#">Subdropdown Option</a></li>
                <li><a href="#">Subdropdown Option</a></li>
                <li><a href="#">Subdropdown Option</a></li>
              </ul>
            </li>
            <li><a href="#">Dropdown Option</a></li>
            <li><a href="#">Dropdown Option</a></li>
            <li class="divider"></li>
            <li><label>Section Name</label></li>
            <li><a href="#">Dropdown Option</a></li>
            <li><a href="#">Dropdown Option</a></li>
            <li><a href="#">Dropdown Option</a></li>
            <li class="divider"></li>
            <li><a href="#">See all &rarr;</a></li>
          </ul>
        </li>
        <li class="divider"></li>
        <li><a href="#">Main Item 2</a></li>
        <li class="divider"></li>
        <li class="has-dropdown">
          <a href="#">Main Item 3</a>
          <ul class="dropdown">
            <li><a href="#">Dropdown Option</a></li>
            <li><a href="#">Dropdown Option</a></li>
            <li><a href="#">Dropdown Option</a></li>
            <li class="divider"></li>
            <li><a href="#">See all &rarr;</a></li>
          </ul>
        </li>
      </ul>
    </section>
  </nav>

  <!-- End Top Bar -->


  <!-- Main Page Content and Sidebar -->

  <div class="row">

    <!-- Contact Details -->
    <div class="nine columns">

      <h3>Get in Touch!</h3>
      <p>We'd love to hear from you. You can either reach out to us as a whole and one of our awesome team members will get back to you, or if you have a specific question reach out to one of our staff. We love getting email all day <em>all day</em>.</p>

      <dl class="contained tabs">
        <dd class="active"><a href="#contactForm">Contact Our Company</a></dd>
        <dd><a href="#contactPeople">Specific Person</a></dd>
      </dl>

      <ul class="tabs-content contained">
        <li id="contactFormTab" class="active">
          <div class="row collapse">
            <div class="two columns"><label class="inline right">...&nbsp;&nbsp;&nbsp;</label></div>
            <div class="ten columns"><input type="text" id="user" placeholder="john.doe" />
          </div>

          <label>What's up?</label>
          <textarea id="message" rows="4"></textarea>

          <button type="submit" id="contactsubmit" class="radius button">Submit</button>
          <div class="alert-box" style="margin-top: 5px;">Your message was sent sucessfully!</div>
        </li>

        <li id="contactPeopleTab">
          <ul class="block-grid five-up">
            <li><a href="mailto:mal@serenity.bc.reb"><img src="http://placehold.it/200x200&text=[person]" /><br />Mal Reynolds</a></li>
            <li><a href="mailto:zoe@serenity.bc.reb"><img src="http://placehold.it/200x200&text=[person]" /><br />Zoe Washburne</a></li>
            <li><a href="mailto:jayne@serenity.bc.reb"><img src="http://placehold.it/200x200&text=[person]" /><br />Jayne Cobb</a></li>
            <li><a href="mailto:doc@serenity.bc.reb"><img src="http://placehold.it/200x200&text=[person]" /><br />Simon Tam</a></li>
            <li><a href="mailto:killyouwithmymind@serenity.bc.reb"><img src="http://placehold.it/200x200&text=[person]" /><br />River Tam</a></li>
            <li><a href="mailto:leafonthewind@serenity.bc.reb"><img src="http://placehold.it/200x200&text=[person]" /><br />Hoban Washburne</a></li>
            <li><a href="mailto:book@serenity.bc.reb"><img src="http://placehold.it/200x200&text=[person]" /><br />Shepherd Book</a></li>
            <li><a href="mailto:klee@serenity.bc.reb"><img src="http://placehold.it/200x200&text=[person]" /><br />Kaywinnet Lee Fry</a></li>
            <li><a href="mailto:inara@guild.comp.all"><img src="http://placehold.it/200x200&text=[person]" /><br />Inarra Serra</a></li>
          </ul>
        </li>
      </ul>

    </div>

    <!-- End Contact Details -->


    <!-- Sidebar -->

    <div class="three columns">

      <h5>Map</h5>

      <!-- Clicking this placeholder fires the mapModal Reveal modal -->
      <p>
        <a href="" data-reveal-id="mapModal"><iframe width="400" height="280" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=New+Moti+Bagh,+New+Delhi,+Delhi&amp;aq=0&amp;oq=New+moti&amp;sll=20.98352,82.752628&amp;sspn=45.458666,86.572266&amp;ie=UTF8&amp;hq=&amp;hnear=New+Moti+Bagh,+New+Delhi,+Delhi&amp;t=h&amp;ll=28.578341,77.181616&amp;spn=0.021105,0.034246&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
        <a href="" data-reveal-id="mapModal">View Map</a>
      </p>

      <p>
        123 Awesome St.<br />
        Barsoom, MA 95155
      </p>

    </div>

    <!-- End Sidebar -->
  </div>

  <!-- End Main Content and Sidebar -->


  <!-- Footer -->

  <footer class="row">
  <div class="twelve columns"><hr />
      <div class="row">

        <div class="six columns">
            <p>&copy; Developed by HardcodeIT Solutions.</p>
        </div>

        <div class="six columns">
            <ul class="link-list right">
              <li><a href="<?= base_url(); ?>index.php/app/contact">Contact Us</a></li>
              <li><a href="#">Behind the Scenes</a></li>
              <li><a href="#">Map</a></li>
              <li><a href="http://www.hardcodeit.com">HardcodeIT</a></li>
            </ul>
        </div>

      </div>
  </div>
  </footer>


  <!-- End Footer -->



  <!-- Map Modal -->

  <div class="reveal-modal" id="mapModal">
    <h4>Where We Are</h4>
    <iframe style="width: 90%; margin-left: 5%;" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=New+Moti+Bagh,+New+Delhi,+Delhi&amp;aq=0&amp;oq=New+moti&amp;sll=20.98352,82.752628&amp;sspn=45.458666,86.572266&amp;ie=UTF8&amp;hq=&amp;hnear=New+Moti+Bagh,+New+Delhi,+Delhi&amp;t=h&amp;ll=28.578341,77.181616&amp;spn=0.022612,0.007725&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>

    <!-- Any anchor with this class will close the modal. This also inherits certain styles, which can be overriden. -->
    <a href="#" class="close-reveal-modal">&times;</a>
  </div>

  <!-- End Modal -->

  <!-- Included JS Files (Uncompressed) -->
  <!--
  
  <script src="javascripts/jquery.js"></script>
  
  <script src="javascripts/jquery.foundation.mediaQueryToggle.js"></script>
  
  <script src="javascripts/jquery.foundation.forms.js"></script>
  
  <script src="javascripts/jquery.foundation.reveal.js"></script>
  
  <script src="javascripts/jquery.foundation.orbit.js"></script>
  
  <script src="javascripts/jquery.foundation.navigation.js"></script>
  
  <script src="javascripts/jquery.foundation.buttons.js"></script>
  
  <script src="javascripts/jquery.foundation.tabs.js"></script>
  
  <script src="javascripts/jquery.foundation.tooltips.js"></script>
  
  <script src="javascripts/jquery.foundation.accordion.js"></script>
  
  <script src="javascripts/jquery.placeholder.js"></script>
  
  <script src="javascripts/jquery.foundation.alerts.js"></script>
  
  <script src="javascripts/jquery.foundation.topbar.js"></script>
  
  <script src="javascripts/jquery.foundation.joyride.js"></script>
  
  <script src="javascripts/jquery.foundation.clearing.js"></script>
  
  <script src="javascripts/jquery.foundation.magellan.js"></script>
  
  -->
  
  <!-- Included JS Files (Compressed) -->
  <script src="<?= base_url(); ?>javascripts/jquery.js"></script>
  <script src="<?= base_url(); ?>javascripts/foundation.min.js"></script>
  
  <!-- Initialize JS Plugins -->
  <script src="<?= base_url(); ?>javascripts/app.js"></script>
</body>
</html>
