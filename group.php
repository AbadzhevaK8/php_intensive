<?php
$group=[
     [
     'name'=>'Roma',
     'age'=>'27',
     'hair'=>'short'
     ],
     [
     'name'=>'Sasha',
     'age'=>'20',
     'hair'=>'middle'
     ],
     [
     'name'=>'Kate',
     'age'=>'25',
     'hair'=>'long'
     ]
    ];
foreach ($group as $key => $value) {
    	echo $value['name'];
    }    

    var_dump($group);