DOCTYPE html
<html>
<head>
  <title>
  Month assignment
  </title>
</head>
<body>
  <?php
   $month = array ('January', 'February', 'March', 'April',
                   'May', 'June', 'July', 'August',
                   'September', 'October', 'November', 'December');



//Place the months in alphabetical order with the statement

//php
   sort($month);
   foreach ($month as $item) {
      echo $item ;
      echo "<This is a month!>";
   }

   $monthDays = array ('January'   => 31, 'February' => 28,
                       'March'     => 31, 'April'    => 30,
                       'May'       => 31, 'June'     => 30,
                       'July'      => 31, 'August'   => 31,
                       'September' => 30, 'October'  => 31,
                       'November'  => 30, 'December' => 31);

   foreach ($monthDays as $item => $days) {
      echo $item . ":" . $days;
      echo "<br>";
   }
?>
</body>
</html>
