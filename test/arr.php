<?php
	$arr1 = array(1, 2, 3 ,4);
	$obj1 = array(
		'NAME'=>'lee',
		'sex'=>'man',
		'age'=>18
	);
	// CASE_LOWER/CASE_UPPER
	$obj1 = array_change_key_case($obj1, CASE_UPPER);
	print_r($obj1);
	echo '<br/>';
	$arr2 = array_chunk($obj1, 2, true);
	print_r($arr2);
	echo '<br/>';
	$list1 = array(
		array('title'=>'标题1', 'auth'=>'作者1', 'id'=>1),
		array('title'=>'标题2', 'auth'=>'作者2', 'id'=>2),
		array('title'=>'标题3', 'auth'=>'作者3', 'id'=>3)
	);
	$auth = array_column($list1, 'auth', 'id');
	print_r($auth);
	echo '<br/>';
	$arr2 = array('one', 'two', 'three', 'four');
	// 关联两个数组为对象
	$combine = array_combine($arr1, $arr2);
	print_r($combine);
	echo '<br/>';
	$arr3 = array(1, 2, 3, 2, 3, 4, 1);
	$count = array_count_values($arr3);
	print_r($count);
	echo '<br/>';
	$arr4 = array(3, 4, 5);
	$diff1 = array_diff($arr3, $arr4);
	$intersect1 = array_intersect($arr3, $arr4);
	print_r($diff1);
	echo '<br/>--------------';
	print_r($intersect1);
	echo '<br/>';
	$obj2 = array(
		'name'=>'zhangsan',
		'sex'=>'man',
		'age'=>20,
		'email'=>'2321321@qq.com'
	);
	$obj3 = array(
		'name'=>'lisi',
		'sex'=>'man',
		'age'=>20,
		'phone'=>'1333333333'
	);
	$diff2 = array_diff($obj2, $obj3);
	print_r($diff2);
	echo '<br/>';
	$diffAssoc1 = array_diff_assoc($obj2, $obj3);
	print_r($diffAssoc1);
	echo '<br/>';
	$diffKey = array_diff_key($obj2, $obj3);
	print_r($diffKey);
	echo '<br/>';
	$diffUassoc = array_diff_uassoc($obj2, $obj3, function ($a, $b) {
		if ($a === $b) {
	  		return 0;
	  	}
	  	// echo $a, '>'.$b, ($a > $b).'<br/>';
	  	return ($a > $b) ? 1 : -1;
	});	
	print_r($diffUassoc);
	echo '<br/>';
	$diffUkey = array_diff_ukey($obj2, $obj3, function ($a, $b) {
		if ($a === $b) {
			return 0;
		}
		return ($a > $b) ? 1 : -1;
	});
	print_r($diffUkey);
	echo '<br/>';
	$arrFill = array_fill(0, 2, 'hhh');
	print_r($arrFill);
	echo '<br/>';
	$arrFillKeys = array_fill_keys(array('name', 'age'), '1');
	print_r($arrFillKeys);
	echo '<br/>';
	$arr5 = array(1, 2, 3, 4, 'a', 'b', 'c');
	$arrFilter = array_filter($arr5, function ($value) {
		return gettype($value) == 'integer';
	});
	print_r($arrFilter);
	echo '<br/>';
	$arr6 = array('a'=>'1', 'b'=>'2', 'c'=>'3');
	$arrFlip = array_flip($arr6);
	print_r($arrFlip);
	echo '<br/>';
	$arrayKeyExists = array_key_exists('a', $arr6);
	print_r($arrayKeyExists);
	echo '<br/>';
	$arrKeys = array_keys($arr6);
	print_r($arrKeys);
	echo '<br/>';
	array_map(function ($item) {
		print_r($item);
		echo '<br/>';
	}, $arr5);
	// array_merge_recursive() 相同键 递归成一个数组
	$arrMerge = array_merge($arr5, $arr6);
	print_r($arrMerge);
	echo '<br/>';
	

?>