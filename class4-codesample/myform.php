<?php
  // Report all PHP errors
  error_reporting(-1);

  //page variables
  $pageTitle = 'Sample Form';
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
    <h2>How much will my bill be?</h2>
    <p>Finished eating? Let us help you calculate your final bill.</p>
    <form action="myform.php" method="post">
      <label for="billPreTip">What was your bill, pre-tip?</label>
      $<input type="text" name="billPreTip" maxlength="50">
      <fieldset>
        <legend>How much do you want to tip?</legend>
        <label><input type="radio" name="tippercent" value="0.05">5%</label>
        <label><input type="radio" name="tippercent" value="0.10">10%</label>
        <label><input type="radio" name="tippercent" value="0.15">15%</label>
        <label><input type="radio" name="tippercent" value="0.20">20%</label>
      </fieldset>
      <br />
      <input type="submit" id="formSubmit" value="Submit">
    </form>
  </section>
</article>

<?php
  //Include the footer
  include 'footer.php';
?>
