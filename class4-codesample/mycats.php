<?php
  // Report all PHP errors
  error_reporting(-1);

  //page variables
  $pageTitle = 'Cat Listing';
  $includeSidebar = false;

  //Include the header
  include 'header.php';

  //Include the left sidebar, if using
  if ($includeSidebar == true) {
    include 'sidebar.php';
  }

  //Pull in the data about our cats
  include 'catdata.php';

  //Main page content. The if statement changes the width of the main container if not using the sidebar.
?>
<article id="main-content" tabindex="-1" <?php if ($includeSidebar == true) {echo 'class="span9"';} else {echo 'class="span12"';}?>>
  <section>
    <h2>My Cats</h2>
    <p>Learn more about all my cats.</p>
    <ul>
      <li><a href="catdetails.php?name=<?php echo $cat1->name?>&amp;furcolor=<?php echo $cat1->furColor?>&amp;age=<?php echo $cat1->age?>&amp;personality=<?php echo $cat1->personality?>"><?php echo $cat1->name?></a></li>
      <li><a href="catdetails.php?name=<?php echo $cat2->name?>&amp;furcolor=<?php echo $cat2->furColor?>&amp;age=<?php echo $cat2->age?>&amp;personality=<?php echo $cat2->personality?>"><?php echo $cat2->name?></a></li>
      <li><a href="catdetails.php?name=<?php echo $cat3->name?>&amp;furcolor=<?php echo $cat3->furColor?>&amp;age=<?php echo $cat3->age?>&amp;personality=<?php echo $cat3->personality?>"><?php echo $cat3->name?></a></li>
      <li><a href="catdetails.php?name=<?php echo $cat4->name?>&amp;furcolor=<?php echo $cat4->furColor?>&amp;age=<?php echo $cat4->age?>&amp;personality=<?php echo $cat4->personality?>"><?php echo $cat4->name?></a></li>
    </ul>
  </section>
</article>

<?php
  //Include the footer
  include 'footer.php';
?>
