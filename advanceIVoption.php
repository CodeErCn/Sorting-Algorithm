<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Sorting Algorithms - Selection Sort</title>

    <script>
<?php
    //PHP SELECTION SORT //  
    function microtime_float() {
        list($usec, $sec) = explode(" ", microtime());
        return ((float)$usec + (float)$sec);
    }
    
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
     
    //PHP MAX AND MIX SELECTION SORT  //
    function phpMinMaxSelectionSort($php2ArrayIn) {
      $y=count($php2ArrayIn); 
      $posMax; 
      $posMin; 
      $valMax; 
      $valMin;

      for($l=0; $l<$y/2; $l++) {
        $posMin = $l;
        $posMax = $y-($l+1);
        $valMin = $php2ArrayIn[$posMin];
        $valMax = $php2ArrayIn[$posMax];
        for($k=$l; $k<$y-($l+1); $k++) {

          if($valMax < $php2ArrayIn[$k]) {
            $valMax = $php2ArrayIn[$k];
            $posMax = $k;
          } 
          if($valMin > $php2ArrayIn[$k]) {
            $valMin = $php2ArrayIn[$k];
            $posMin = $k;
          }
        }
        $php2ArrayIn[$posMax] = $php2ArrayIn[$y-($l+1)];
        $php2ArrayIn[$y-($l+1)] = $valMax;  
        $php2ArrayIn[$posMin] = $php2ArrayIn[$l];
        $php2ArrayIn[$l] = $valMin;
      }
      return $php2ArrayIn;
    }


    // Random Array Generator for 100 values
    for($x=0; $x<100; $x++){
      $phpOrigOzz[$x] = rand(0,10000);
    }
    echo "var jsOrigOzz=[".implode($phpOrigOzz, ", ")."];";

    // Random Array Generator for 1,000 values
    for($y=0; $y<1000; $y++){
      $phpOrigOk[$y] = rand(0,10000);
    }
    echo "var jsOrigOk=[".implode($phpOrigOk, ", ")."];";

    // // Random Array Generator for 10,000 values
    // for($z=0; $z<10000; $z++){
    //   $phpOriginalOzK[$z] = rand(0,10000);
    // }

    // echo "var jsOriginalOzK=[".implode($phpOriginalOzK, ", ")."];";

?>  
      // JAVASCRIPT FUNCTION SELECTION SORT  //     
      function selectionSort(jsArrayIn) {
        var x=jsArrayIn.length;
        var posj;
        var min;

        for(i=0; i<x; i++) {
          min = jsArrayIn[i];
          posj = i;
          for(j=i; j<x; j++) {
            if(min>jsArrayIn[j]) {
              posj = j;
              min = jsArrayIn[j];
            }
          }
          jsArrayIn[posj]=jsArrayIn[i];
          jsArrayIn[i]=min;
        }
        return jsArrayIn;
      }


      //JAVASCRIPT MIN and MAX SELECTION SORT//
      function MinMaxSelectionSort(jsTwoArrayIn) {
        var y=jsTwoArrayIn.length, posMax, posMin, valMax, valMin;

        for(l=0; l<y/2; l++) {
          posMin = l;
          posMax = y-(l+1);
          valMin = jsTwoArrayIn[posMin];
          valMax = jsTwoArrayIn[posMax];
          for(k=l; k<y-(l+1); k++) {
            if(valMax < jsTwoArrayIn[k]) {
              valMax = jsTwoArrayIn[k];
              posMax = k;
            } else if(valMin > jsTwoArrayIn[k]) {
              valMin = jsTwoArrayIn[k];
              posMin = k;
            }
          }
          jsTwoArrayIn[posMax] = jsTwoArrayIn[y-(l+1)];
          jsTwoArrayIn[y-(l+1)] = valMax;  
          jsTwoArrayIn[posMin] = jsTwoArrayIn[l];
          jsTwoArrayIn[l] = valMin;
        } 

        return jsTwoArrayIn;
      }
    </script>
  </head>
  <body>
 

<!-- Selection Sort -->
    <h1> Selection Sort </h1>
    <p> Result done in PHP for 100 values</p>
<?php
    $time_start_Ozz = microtime();
    $php_100 = phpSelectionSort($phpOrigOzz);
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
    $php_1000 = phpSelectionSort($phpOrigOk);
    $time_end_Ok = microtime();
    $time_Ok = $time_end_Ok - $time_start_Ok;
    
    echo "<p>".$time_Ok."</p>";
    foreach($php_1000 AS $value) {
      echo $value." ";
    }
?> 

    <!-- <p> Result done in PHP for 10,000 values</p> -->
<?php
    // $time_start_Ozk = microtime();
    // $php_10000 = phpSelectionSort($phpOrigOzk);
    // $time_end_Ozk = microtime();
    // $time_Ozk = $time_end_Ozk - $time_start_Ozk;
    
    // echo "<p>".$time_Ozz."</p>";
    // foreach($php_10000 AS $value) {
    //   echo $value." ";
    // }
?> 

    <p> Result done in Javascript for 100 values</p>
  <script> 
    //Rebuild the array for 100 values
  
    var jsOzz = [], OzzLength = jsOrigOzz.length, resultJsOzz=[];
    for(m=0; m<OzzLength; m++) {
      jsOzz.push(jsOrigOzz[m]);
    }
    
    resultJsOzz = selectionSort(jsOzz);
    document.write(resultJsOzz.join(" "));
  </script>

    <p> Result done in Javascript for 1,000 values</p>
  <script> 
    //Rebuild the array for 1000 values
    var jsOk = [], OkLength = jsOrigOk.length, resultJsOk=[];
    for(n=0; n<OkLength; n++) {
      jsOk.push(jsOrigOk[n]);
    }
    
    resultJsOk = selectionSort(jsOk);
    document.write(resultJsOk.join(" "));
  </script>

<!--     <p> Result done in Javascript for 10,000 values</p>
  <script> 
    //Rebuild the array for 10000 values
    var jsOzK = [], OzKLength = jsOriginalOzK.length, resultJsOzK=[];
    for(o=0; o<OzKLength; o++) {
      jsOzK.push(jsOriginalOzK[o]);
    }
    
    resultJsOzK = selectionSort(jsOzK);
    document.write(resultJsOzK.join(" "));
  </script>
 -->

<!-- Min & Max section sort -->
    <h1>Min and Max Selection Sort</h1>
    <p> Result done in PHP for 100 values</p>
<?php
    $time_start2_Ozz = microtime();
    $php2_100 = phpMinMaxSelectionSort($phpOrigOzz);
    $time_end2_Ozz = microtime();
    $time2_Ozz = $time_end2_Ozz - $time_start2_Ozz;
    
    echo "<p>".$time2_Ozz."</p>";
    foreach($php2_100 AS $value2) {
      echo $value2." ";
    }
?> 

    <p> Result done in PHP for 1,000 values</p>
<?php
    $time_start2_Ok = microtime();
    $php2_1000 = phpMinMaxSelectionSort($phpOrigOk);
    $time_end2_Ok= microtime();
    $time2_Ok = $time_end2_Ok - $time_start2_Ok;
    
    echo "<p>".$time2_Ok."</p>";
    foreach($php2_1000 AS $value2) {
      echo $value2." ";
    }
?> 

    <!-- <p> Result done in PHP for 10,000 values</p> -->
<?php
    // $time_start2_OzK = microtime();
    // $php2_10k = phpMinMaxSelectionSort($phpOriginalOzK);
    // $time_end2_OzK = microtime();
    // $time2_OzK = $time_end2_OzK - $time_start2_OzK;
    
    // echo "<p>".$time2_OzK."</p>";
    // foreach($php2_10k AS $value2) {
    //   echo $value2." ";
    // }
?> 
  <p> Result done in Javascript for 100 values</p>
  <script> 
    //Rebuild the array for 100 values
    var jsTwoOzz = [], TwoOzzLength = jsOrigOzz.length, resultJsTwoOzz=[];
    for(j=0; j<TwoOzzLength; j++) {
      jsTwoOzz.push(jsOrigOzz[j]);
    }
    resultJsTwoOzz = MinMaxSelectionSort(jsTwoOzz);
    document.write(resultJsTwoOzz.join(" "));
  </script>

    <p> Result done in Javascript for 1,000 values</p>
  <script> 
    //Rebuild the array for 1,000 values
    var jsTwoOk = [], TwoOkLength = jsOrigOk.length, resultJsTwoOk=[];
    for(j=0; j<TwoOkLength; j++) {
      jsTwoOk.push(jsOrigOk[j]);
    }
    resultJsTwoOk = MinMaxSelectionSort(jsTwoOk);
    document.write(resultJsTwoOk.join(" "));
  </script>

    <!-- <p> Result done in Javascript for 10,000 values</p> -->
  <script> 
    // //Rebuild the array for 10,000 values
    // var jsTwoOzK = [], TwoOzKLength = jsOriginalOzK.length, resultJsTwoOzK=[];
    // for(j=0; j<TwoOzKLength; j++) {
    //   jsTwoOzK.push(jsOriginalOzK[j]);
    // }
    // resultJsTwoOzK = MinMaxSelectionSort(jsTwoOzK);
    // document.write(resultJsTwoOzK.join(" "));
  </script>
  </body>
</html>