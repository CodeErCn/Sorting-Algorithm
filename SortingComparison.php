<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Sorting Comparison</title>

<?php
    function microtime_float() {
        list($usec, $sec) = explode(" ", microtime());
        return ((float)$usec + (float)$sec);
    }

    // Random Array Generator for 1,000 values
    for($z=0; $z<1000; $z++){
      $phpOrig[$z] = rand(0,10000);
    }
     
    // PHP FUNCTION SELECTION SORT //  
    function phpSelectionSort($phpArrayIn) {
      $position;
      $min;
      for($i=0, $x=count($phpArrayIn); $i<$x; $i++) {
        $min = $phpArrayIn[$i];
        $position = $i;
        for($j=$i; $j<$x; $j++) {
          if($min>$phpArrayIn[$j]) {
            $position = $j;
            $min = $phpArrayIn[$j];
          }
        }
        $phpArrayIn[$position] = $phpArrayIn[$i];
        $phpArrayIn[$i] = $min;
      }
      return $phpArrayIn;
    }

    // PHP FUNCTION INSERTION SORT //  
    function phpinsertionSort($phpArrayIn) {
      $phpArrayLength = count($phpArrayIn);
      $min;
      if($phpArrayIn[1]<$phpArrayIn[0]) {
        $min = $phpArrayIn[1];
        $phpArrayIn[1] = $phpArrayIn[0];
        $phpArrayIn[0] = $min;
      }

      for($m=2; $m<$phpArrayLength; $m++) {
        $min = $phpArrayIn[$m];
        for($n=$m; $n>=1; $n--) {
          if($phpArrayIn[$n-1]<$min) {
            break;
          } else if ($phpArrayIn[$n-1]>$min) {
            $phpArrayIn[$n]=$phpArrayIn[$n-1];
            $phpArrayIn[$n-1] = $min;
          }
        }
      } 
      return $phpArrayIn;
    }

    // PHP FUNCTION BUBBLE SORT //  
    function phpBubbleSort($phpArrayIn) {
     for($i=0, $j=count($phpArrayIn); $i<$j; $i++) {
      for($k=0, $j=count($phpArrayIn); $k<$j-1; $k++) {
        if($phpArrayIn[$k]>$phpArrayIn[$k+1]) {
          $temp = $phpArrayIn[$k];
          $phpArrayIn[$k] = $phpArrayIn[$k+1];
          $phpArrayIn[$k+1] = $temp;
        }
      }
     }
     return $phpArrayIn;
    }
?>  

  </head>
  <body>
 
<!-- SELECTION SORT HTML STARTS HERE -->
    <h1> Selection Sort </h1>
    <p> Result done in PHP for 1,000 values</p>
<?php
    $time_start_select = microtime();
    $phpSelect = phpSelectionSort($phpOrig);
    $time_end_select = microtime();
    $time_select = $time_end_select - $time_start_select;
    
    echo "<p>".$time_select."</p>";
    foreach($phpSelect AS $value) {
      echo $value." ";
    }
?>  

<!-- INSERTION SORT HTML STARTS HERE -->
    <h1> Insertion Sort </h1>
    <p> Result done in PHP for 1,000 values</p>
<?php
    $time_start_Insert = microtime();
    $phpInsertion = phpInsertionSort($phpOrig);
    $time_end_Insert = microtime();
    $time_Insert = $time_end_Insert - $time_start_Insert;
    
    echo "<p>".$time_Insert."</p>";
    foreach($phpInsertion AS $value) {
      echo $value." ";
    }
?>  

<!-- BUBBLE SORT HTML STARTS HERE -->
      <h1> Bubble Sort </h1>
      <p> Result done in PHP for 1,000 values</p>
<?php
      $time_start_Bubble = microtime();
      $phpBubble = phpBubbleSort($phpOrig);
      $time_end_Bubble = microtime();
      $time_Bubble = $time_end_Bubble - $time_start_Bubble;
      
      echo "<p>".$time_Bubble."</p>";
      foreach($phpBubble AS $value) {
        echo $value." ";
      }
?> 
  </body>
</html>