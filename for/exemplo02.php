<?php

echo "<select>";


for ($i=date("Y"); $i >= date("Y")-100  ; $i--) { 
	 //$tt = date("Y")-100 ;
	 //echo "|".$tt."|"."<br>";
	echo  '<option value="'.$i.'">'.$i.'</option>';
}
echo "</select";
?>