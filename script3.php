<meta charset="utf-8"/>
<?php 
function tell_me_your_age($age){
	echo $age;
	if($age < 20){
		echo "Всё впереди, Kate!";
	}
	elseif($age < 30){
		echo "Нормальный возраст";
	}
	else{
		echo 'Да ты крут!';
	}
}  

for ($age = 15; $age <= 35; $age++)
{
	tell_me_your_age($age);
}