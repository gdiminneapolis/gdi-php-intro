<?php
  // Report all PHP errors
  error_reporting(-1);

  //page variables
  $pageTitle = 'Cat Details';
  $includeSidebar = false;

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
    <h2>More about my cat</h2>
    <p>Fun facts about this beautiful kitty</p>
    <table style="width:400px">
      <tr>
        <th>Name</th>
        <td></td>
      </tr>
      <tr>
        <th>Fur Color</th>
        <td></td>
      </tr>
      <tr>
        <th>Age</th>
        <td></td>
      </tr>
      <tr>
        <th>Personality</th>
        <td></td>
      </tr>
    </table>
  </section>
</article>

<?php
  //Include the footer
  include 'footer.php';
?>
