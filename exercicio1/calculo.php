<?php

    $INI = 1;

    $TOT = 100;
	
    for($i = $INI; $i <= $TOT; $i++):
	
        if(($i % 3) == 0 && ($i % 5) == 0)
            echo '<div class="class-linha" style="color:#770000; width:80px; border: solid 1px #777777; text-align:center;"><strong>FizzBuzz</strong></div>';
        elseif($i % 3 == 0)
            echo '<div class="class-linha" style="color:#007700"><strong>Fizz</strong></div>';
        elseif($i % 5 == 0)
            echo '<div class="class-linha" style="color:#000077"><strong>Buzz</strong></div>';	
        else
            echo '<div class="class-linha" style="color:#555555">'.$i.'</div>';	
		
    endfor;

?>
