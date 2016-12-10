<?php
  // Report all PHP errors
  error_reporting(-1);

  //page variables
  $pageTitle = 'The Best Page Ever!';
  $includeSidebar = true;

  //Include the header
  include 'header.php';

  //Include the left sidebar, if using
  if ($includeSidebar == true) {
    include 'sidebar.php';
  }

  //Main page content. The if statement changes the width of the main container if not using the sidebar.
?>
<article id="main-content" tabindex="-1" <?php if ($includeSidebar == true) {echo 'class="span9"';} else {echo 'class="span12"';}?>>
  <section>
    <h2>An Introduction</h2>
    <p>Welcome! This is some awesome sample content. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin in purus mauris. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Quisque eu enim elit. Phasellus elementum libero vitae lacinia sollicitudin. Pellentesque sit amet sagittis mauris, eu auctor quam. Cras nec ante vitae enim condimentum lacinia. Phasellus semper metus vel consequat convallis.</p>
  </section>
  <section>
    <h2>Some PHP</h2>
    <p>Here is some PHP I am testing:</p>
<pre><?php
echo 'Hello World';
?>
</pre>
  </section>
</article>

<?php
  //Include the footer
  include 'footer.php';
?>
