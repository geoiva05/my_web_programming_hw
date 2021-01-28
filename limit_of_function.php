<?php
 $header1 = '<h1> Test on limits calculation </h1/';
 echo $header1;
 $number_1 = '<form method="post">
        <h4>  1) What is the limit of (sin ^ 2 + cos n ^ 3 + 12 ) / n ? <h4/>
        <div>
            a) 1  <input type="radio" name="number1"> <br/>
            b) 0  <input type="radio" name="number1"> <br/>
            c) has no limit  <input type="radio" name="number1" > <br/>
        </div>
         </form>';
echo $number_1;
$number_2 = '<form method="post">
        <h4>  2) What is the limit of sin x if x--> 0 <h4/>
        <div>
            a) 0  <input type="radio" name="number2"> <br/>
            b) 1  <input type="radio" name="number2"> <br/>
            c) has no limit  <input type="radio" name="number2" > <br/>
        </div>
         </form>';
echo $number_2;
$number_3 = '<form method="post">
        <h4>  3) What is the limit of cos x if x--> 0 <h4/>
        <div>
            a) 0  <input type="radio" <input type="radio" name="number3"> <br/>
            b) 1  <input type="radio"  <input type="radio" name="number3"> <br/>
            c) has no limit  <input type="radio" <input type="radio" name="number3"> <br/>
        </div>
         </form>';
echo $number_3;
$main_menu = '<form name = "quadrati action="main_page.php" method = "post">
            <input type = "submit" value= "Go to main menu"/>';
echo $main_menu;
$answer = '<form name = "quadratic equations" action="quadratic equations.php" method = "post">
            <input type = "submit" value= "Test on quadratic equations"/>';
echo $answer;
?>