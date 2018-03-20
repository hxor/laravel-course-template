<?php 

	$datas = [
		['id' => 1, 'name' => 'Alex'],
		['id' => 2, 'name' => 'Beni'],
		['id' => 3, 'name' => 'Cintia'],
	];
	$index = 1;
	foreach ($datas as $data) {
		echo $index++  . '<br>';
		if ($index % 2 == 0) {
			echo 'genap' . '<br>';
			echo $data['name'] . '<br>';
		} else {
			echo 'ganjil' . '<br>';
			echo $data['name'] . '<br>';
		}
	}

 ?>
