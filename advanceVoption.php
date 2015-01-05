<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Sorting Algorithms - Insertion Sort</title>

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
      
      
      // PHP FUNCTION INSERTION SORT //  
      function phpinsertionSort($phpArrayIn) {
        // $phpArrayLength = count($phpArrayIn);
        // $min;
        // if($phpArrayIn[1]<$phpArrayIn[0]) {
        //   $min = $phpArrayIn[1];
        //   $phpArrayIn[1] = $phpArrayIn[0];
        //   $phpArrayIn[0] = $min;
        // }

        // for($m=2; $m<$phpArrayLength; $m++) {
        //   $min = $phpArrayIn[$m];
        //   for($n=$m; $n>=1; $n--) {
        //     if($phpArrayIn[$n-1]<$min) {
        //       break;
        //     } else if ($phpArrayIn[$n-1]>$min) {
        //       $phpArrayIn[$n]=$phpArrayIn[$n-1];
        //       $phpArrayIn[$n-1] = $min;
        //     }
        //   }
        // } 
        
        //modified version of insertion sort
        $position = -1;
        for($i=1, $c=count($phpArrayIn); $i<$c; $i++) {
          $temp = $phpArrayIn[$i];

          for($j=$i-1; $j>=0 && $phpArrayIn[$j]>$temp; $j--) {
           
              $phpArrayIn[$j+1]=$phpArrayIn[$j];
              $position = $j;
          }
          
          $phpArrayIn[$position] = $temp;
          $position = -1;
        }
        return $phpArrayIn;
      }
?>  
      // JAVASCRIPT FUNCTION INSERTION SORT //     
      function insertionSort(jsArrayIn) {
    
        // var arrayLength = jsArrayIn.length, min;
        // //compare the first two values in the array
        // if(jsArrayIn[1]<jsArrayIn[0]) {
        //   min = jsArrayIn[1]
        //   jsArrayIn[1] = jsArrayIn[0];
        //   jsArrayIn[0] = min;
        // } 

        // for(i=2; i<arrayLength; i++) {
        //   min = jsArrayIn[i];
        //   for(j=i; j>=1; j--) {
        //     if (jsArrayIn[j-1]<min) {
        //       break;
        //     } else if (jsArrayIn[j-1]>min) {
        //       jsArrayIn[j]=jsArrayIn[j-1]; 
        //       jsArrayIn[j-1] = min;
        //     } 
        //   }  
        // }
        // 
      
        // The modified version of insertion sort
        
        var position = -1;
        
        for(var i=1, c=jsArrayIn.length; i<c; i++) {
          var temp = jsArrayIn[i];

          for(var j=i-1; j>=0 && jsArrayIn[j]>temp; j--) {
    
            jsArrayIn[j+1]=jsArrayIn[j];
            position = j;
          
          }          
          
          jsArrayIn[position] = temp;
          position = -1;
        }

        return jsArrayIn;
      }
    </script>
  </head>
  <body>
 

<!-- INSERTION SORT HTML STARTS HERE -->
      <h1> Insertion Sort </h1>
      <p> Result done in PHP for 100 values</p>
<?php
      $time_start_Ozz = microtime();
      $php_100 = phpInsertionSort($phpOrigOzz);
      $time_end_Ozz = microtime();
      $time_Ozz = $time_end_Ozz - $time_start_Ozz;
      
      echo "<p>".$time_Ozz."</p>";
      foreach($php_100 AS $value) {
        echo $value." ";
      }
?> 
 
      <p> Result done in PHP for 1,000 values</p>
<?php
      $time_start_Ok = microtime();
      $php_1000 = phpInsertionSort($phpOrigOk);
      $time_end_Ok = microtime();
      $time_Ok = $time_end_Ok - $time_start_Ok;
      
      echo "<p>".$time_Ok."</p>";
      foreach($php_1000 AS $value) {
        echo $value." ";
      }
?>  
<!-- INSERTION SORT HTML STARTS HERE -->
      <p> Result done in Javascript for 100 values</p>
    <script> 
      //Rebuild the array for 100 values
      var jsOzz = [], OzzLength=jsOriginalOzz.length, resultJsOzz=[];
      for(m=0; m<OzzLength; m++) {
        jsOzz.push(jsOriginalOzz[m]);
      }
      
      resultJsOzz = insertionSort(jsOzz);
      document.write(resultJsOzz.join(" "));
    </script>

      <p> Result done in Javascript for 1,000 values</p>
    <script> 
      //Rebuild the array for 1000 values
      var jsOk = [], OkLength = jsOrigOk.length, resultJsOk=[];
      for(n=0; n<OkLength; n++) {
        jsOk.push(jsOrigOk[n]);
      }
      
      resultJsOk = insertionSort(jsOk);
      document.write(resultJsOk.join(" "));
    </script>
  </body>
</html>