<?php
  // Check the answers
  function check() {
    $que1 = $_POST["que1"];
    $que2 = $_POST["que2"];
    $que3 = $_POST["que3"];
    $que4 = $_POST["que4"];
    $que5 = $_POST["que5"];

    // Print the questions and answers
    echo "Questions:<br><br>";
    echo "<b>1: How long is an Olympic swimming pool (in meters)?</b>";
    echo "<br> Your answer=>" . $que1 . "<br>" . "Correct answer => 50 meters<br><br>";

    echo "<b>2: Which animal can be seen on the Porsche logo?</b>";
    echo "<br> You answered=>" . $que2 . "<br>" . "Correct answer => Horse<br><br>";

    echo "<b>3: What is the rarest M&M color?</b>";
    echo "<br> Your answer=>" . $que3 . "<br>" . "Correct answer => Brown<br><br>";

    echo '<b>4: What sport is dubbed the "king of sports"?</b>';
    echo "<br> Your answer=>" . $que4 . "<br>" . "Correct answer => Soccer<br><br>";

    echo "<b>5: Which country consumes the most chocolate per capita?</b>";
    echo "<br> Your answer=>" . $que5 . "<br>" . "Correct answer => Switzerland<br><br>";

    $points = 0;

    // Add points if it's right
    if ($que1 == "50")
    {
      $points++;
    }
    if ($que2 == "Horse")
    {
      $points++;
    }
    if ($que3 == "Brown")
    {
      $points++;
    }
    if ($que4 == "Soccer")
    {
      $points++;
    }
    if ($que5 == "Switzerland")
    {
      $points++;
    }

    // Show the total score out of 5 and in percentage
    echo  "<br><br> <b>Total: " . $points . "/5</b>";
    echo  "<br><br> <b>Score: " . ($points/5)*100 . "%</b>";
  }
  echo check();
?>