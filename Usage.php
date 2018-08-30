<?php
  require_once "WordFrequency.php";
  $string = "let's see how it count double Double cat in the cat. No more double or doubles";
  $res =  wordFrequency($string, $limit = 10, $sort_desc = true, $return_array = false);
  echo '<pre>'.print_r($res, true).'</pre>';
