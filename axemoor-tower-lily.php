<!-- begin header - do not modify -->

<?php include("/templates/header.php");
?>

<!-- end header - do not place anything above this line -->

<!-- page content begins here -->

<div class="blog-header">
        <h1 class="blog-title">Axemoor's Awards</h1>

      </div>

      <div class="row">

        <div class="col-sm-8 blog-main">

          <div class="blog-post">
            <h2 class="blog-post-title">Order of the Tower and Lily</h2>
            <p>Award Citation: "Like a beacon in the night from a mighty tower that guides the lost and
weary traveler, there are those within our society who through their love of the game, their never ending pursuit of the ideals of
The Dream, their honor, courtesy, grace, compassion, dignity, and chivalry provide a beacon for the rest of us to follow when we
lose our way. And as the calla lily symbolizes magnificent beauty, it is the magnificent beauty of spirit and deed of these
individuals that provide inspiration for each and every one of us and make us strive to be better than we are. You, (name)
are a true inspiration to Their Excellencies of Axemoor, and as such are hereby by the hand of Charles and Martha made
companion to the order of the Tower and the Lily."</p>

            <p>  <?php  // open our php code

/* No records found at the Hall of Records
      // Initialize the cURL session and set the source URL.
      // Substitute in the individual's ID where "245" is
      $ch = curl_init("http://dev.records.gleannabhann.net/api/award_recip.php?id=236");

      // we don't want the headers, so we include this and set it to 0 ("False")
      curl_setopt($ch, CURLOPT_HEADER, 0);

      // we want the output to go to a variable instead of STDOUT, so set this to 1 ("True")
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

      // Execute the request and store the result in $result
      $result = curl_exec($ch);

      // close the cURL session
      curl_close($ch);

      // Convert the received information from JSON to php so we can use it
        	$awards = json_decode($result, TRUE);

      // Set up a basic HTML table for displaying the data
      echo '<table><tr><td>Name</td><td>Date</td></tr>';

      // Loop through each award in the awards portion of the data and display it in a table
      foreach ($awards["persons"] as $person)
      {
      	echo '<tr><td>' . $person["name_person"] . '</td><td>' . $person["date_award"] . '</td></tr>';
      }

      // End the table
      echo '</table>';

*/

      //close our php code
      ?></p>
      <p>No records were found at the Hall of Records. This is most likely because the
      local Baronial records for this award were not provided to the Kingdom Heralds.</p>
      <p>The above list comes directly from the Kingdom of Gleann Abhann
        <a href="http://records.gleannabhann.net">Hall of Records</a>.
        Any errors or omissions may be reported by submitting a correction
        request - form available at the bottom of each individual's Hall
        of Records page. </p>
          </div><!-- /.blog-post -->

        </div><!-- /.blog-main -->




      </div><!-- /.row -->

    </div><!-- /.container -->



<!-- page content ends here -->

<!-- Begin Footer - do not modify or insert anything after this -->

<?php include("/templates/footer.php");
?>
<!-- end of footer -->
