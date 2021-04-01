<?php 
/*
$str = "10+10+20-56/56";


$j=0;
for ($i=0; $i < strlen($str); $i++) { 
	if ($str[$i]=='+' || $str[$i]=='-' || $str[$i]=='*' || $str[$i]=='/') {
		
			switch ($str[$i]) {
				case '+':
					$symbl[$j]='+';
					break;
				case '-':
					$symbl[$j]='-';
					break;
					case '*':
					$symbl[$j]='*';
					break;
					case '/':
					$symbl[$j]='/';
					break;

				default:
					$symbl=null;
					break;
			}

		$j++;
	}

}






$l=strlen($str);
for ($i=0; $i < $l; $i++) { 
	if ($str[$i]>='0' && $str[$i]<='9') {
 	$s_new[$i]=$str[$i];
 }
 else{$s_new[$i]=",";}
}
 $sa=implode('', $s_new);
$number= explode(',', $sa);




echo ord($symbl[0]);
*/




 ?>



 <?php
$string = "(11+10+45*45-45)*3";
$math_string ="print (".$string.");";
$result = eval($math_string);
echo $result;
?>