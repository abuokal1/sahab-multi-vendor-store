<?php

class test{
     public $num1 =5 ;
     public $num2=10;
      function plus (){
         return $this->num1 + $this->num2;
      }


}
 $ttest = new test;
 echo $ttest->plus();
?>