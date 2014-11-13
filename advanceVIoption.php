<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Sorting Algorithms - Bubble Sort</title>

    <script>
<?php
      function microtime_float() {
          list($usec, $sec) = explode(" ", microtime());
          return ((float)$usec + (float)$sec);
      }

      // Random Array Generator for 100 values
      for($x=0; $x<100; $x++){
        $phpOrigOzz[$x] = rand(0,10000);
      }
      echo "var jsOriginalOzz=[".implode($phpOrigOzz, ", ")."];";
 
      // Random Array Generator for 1,000 values
      for($y=0; $y<1000; $y++){
        $phpOrigOk[$y] = rand(0,10000);
      }
      echo "var jsOrigOk=[".implode($phpOrigOk, ", ")."];";
      
      
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
      // JAVASCRIPT FUNCTION BUBBLE SORT //     
      function BubbleSort(jsArrayIn) {
        for(i=0,j=jsArrayIn.length; i<j; i++) {
          for(k=0; k<j-1; k++) {
            if(jsArrayIn[k]>jsArrayIn[k+1]) {
              var temp = jsArrayIn[k];
              jsArrayIn[k] = jsArrayIn[k+1];
              jsArrayIn[k+1] = temp;
            }
          }
        }
        return jsArrayIn;
      }
    </script>
  </head>
  <body>
 

<!-- BUBBLE SORT HTML STARTS HERE -->
      <h1> Bubble Sort </h1>
      <p> Result done in PHP for 100 values</p>
<?php
      $time_start_Ozz = microtime();
      $phpBubbleOzz = phpBubbleSort($phpOrigOzz);
      $time_end_Ozz = microtime();
      $time_Ozz = $time_end_Ozz - $time_start_Ozz;
      
      echo "<p>".$time_Ozz."</p>";
      foreach($phpBubbleOzz AS $value) {
        echo $value." ";
      }
?> 
 
    <p> Result done in PHP for 1,000 values</p>
<?php
      $time_start_Ok = microtime();
      $php_1000 = phpBubbleSort($phpOrigOk);
      $time_end_Ok = microtime();
      $time_Ok = $time_end_Ok - $time_start_Ok;
      
      echo "<p>".$time_Ok."</p>";
      foreach($php_1000 AS $value) {
        echo $value." ";
      }
?>  

<!-- BUBBLE SORT HTML STARTS HERE -->
      <p> Result done in Javascript for 100 values</p>
    <script> 
      //Rebuild the array for 100 values
      var jsOzz = [], OzzLength=jsOriginalOzz.length, resultJsOzz=[];
      for(m=0; m<OzzLength; m++) {
        jsOzz.push(jsOriginalOzz[m]);
      }
      
      resultJsOzz = BubbleSort(jsOzz);
      document.write(resultJsOzz.join(" "));
    </script>

      <p> Result done in Javascript for 1,000 values</p>
    <script> 
      //Rebuild the array for 1000 values
      var jsOk = [], OkLength = jsOrigOk.length, resultJsOk=[];
      for(n=0; n<OkLength; n++) {
        jsOk.push(jsOrigOk[n]);
      }
      
      resultJsOk = BubbleSort(jsOk);
      document.write(resultJsOk.join(" "));
    </script>
  </body>
</html>