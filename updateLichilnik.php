<?php

if(isset($_POST['lichilnik'])){
    if($_POST['lichilnik'] == 0){
      echo('Сьогодні нашу сторінку переглядали 235 чарівних жінок');die;
    } if($_POST['lichilnik'] == 1){
      echo('Сьогодні нашу сторінку переглядали 238 чарівних жінок');die;
    } if($_POST['lichilnik'] == 2){
      echo('Сьогодні нашу сторінку переглядали 247 чарівних жінок');die;
    } if($_POST['lichilnik'] == 2){
      echo('Сьогодні нашу сторінку переглядали 344 чарівних жінок');die;
    }
    echo('Сьогодні нашу сторінку переглядало дуже багато чарівних жінок');
    
}