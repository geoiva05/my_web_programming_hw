<?php
$header1 = '<h1> Test on quadratic equations </h1/';
echo $header1;
 $number_1 = '<form method="post">
        <h4>  1) What are the roots of the equation (x ^ 2- 2 * x - 3 = 0) ? <h4/>
        <div>
            a) 3 and -1  <input type="radio" name="number1"> <br/>
            b) 0 and 15  <input type="radio" name="number1"> <br/>
            c) 1 and -3  <input type="radio" name="number1" > <br/>
        </div>
         </form>';
echo $number_1;
$number_2 = '<form method="post">
        <h4>  2) What are the roots of the equation (x ^ 2 + 6 * x + 9 = 0) ? <h4/>
        <div>
            a) has no equations  <input type="radio" name="number2"> <br/>
            b) -3 <input type="radio" name="number2"> <br/>
            c) 5 and 6  <input type="radio" name="number2"> <br/>
        </div>
         </form>';
echo $number_2;
$number_3 = '<form method="post">
        <h4>  3) What are the roots of the equation (x ^ 2 + 2 * x + 17 = 0) ? <h4/>
        <div>
            a) 5 and 6  <input type="radio" <input type="radio" name="number3"> <br/>
            b) 7  <input type="radio"  <input type="radio" name="number3"> <br/>
            c) has no equations  <input type="radio" <input type="radio" name="number3"> <br/>
        </div>
         </form>';
echo $number_3;
$answer = '<form name = "quadratic equations" action="quadratic equations.php" method = "post">
            <input type = "submit" value= "Test on quadratic equations"/>';
echo $answer;
?>