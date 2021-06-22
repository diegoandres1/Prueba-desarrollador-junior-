<?php

$n = 5;
if($n == 0){
    echo "ERROR";
}

for($row = 1;$row <=$n; $row++ )
{
    for($column = 1; $column <= $n; $column++)
    {
      if((($column == $n or $column == 1) and ($row == 1 or $row==6)) or
      ($n==2 ) or ($n==3 and $column == 1 and $row == 3  ) or
       (($column == 2 or $column == 5 ) and ($row == 2 or $row == 5)) or
        ($column == 3 and $row == 4 ) or ($column == 4 and $row == 4)  or
         ($column == 4 and $row == 3 ) or ($column == 3 and $row == 3))
       {
            echo "X";
        }
        else{
            echo "_";
        }

    }
    echo "<br>";


}
?>
