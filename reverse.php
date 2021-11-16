<?php
class reverse
  {
    public $str;

    public function rev($str, $symbols = ['!', '?', '.', ','])
    {
      $copy = $str;
      $length = strlen($str) - 1;
      for($i = 0, $j = $length; $i < $length/2; $i++, $j--) {
  if(in_array($str[$i],$symbols)) {
    ++$i;
    $tmp = $str[$j];
    $str[$j] = $str[$i];
    $str[$i] = $tmp;
    } elseif(in_array($str[$j], $symbols)) {
      --$j;
      $tmp = $str[$j];
      $str[$j] = $str[$i];
      $str[$i] = $tmp;
      } else {
        $tmp = $str[$j];
        $str[$j] = $str[$i];
        $str[$i] = $tmp;
        }
      }
      for($i = 0; $i <= $length; $i++) {
        if($copy[$i] === strtoupper($copy[$i])) {
          $str[$i] = strtoupper($str[$i]);
          } else {
            $str[$i] = strtolower($str[$i]);
            }
            } return $str;
      } 

      function revertCharacters($str) {
        $new = [];
        $s = explode(' ', $str);
        foreach ($s as $val) {
          $new[] = reverse::rev($val);
        } return implode(' ', $new);
      }
    }
    $test = 'Privet! Davno ne videlis.';
    $r = new reverse;
    print_r($r->revertCharacters($test));
