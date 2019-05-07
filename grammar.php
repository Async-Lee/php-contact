<?php
	// 设置常量
	define('DEFINE_VALUE', 'define_value');
	$x = 123;
	function staticTest () {
		// static 变量的值不会被删除
		static $x = 0;
		echo ++$x.'<br/>';
		echo DEFINE_VALUE.'<br/>';
	}
	for ($i=0; $i<2; $i++) {
	    staticTest();
	}
	echo strlen(DEFINE_VALUE);
	echo strpos(DEFINE_VALUE, 'value');
	echo DEFINE_VALUE[7];
	echo '<br/>';

	$arr = array('2', '3', '1', '5', '4');
	$obj = (object)array(
		'key'=>'value',
		'name'=>'lee');
	$arrObj = array(
		(object)array(
			'age'=>22
		), (object)array(
			'age'=>18
		), (object)array(
			'age'=>10
		)
	);
	rsort($arr);
	echo json_encode($arr), count($arr);
	echo json_encode($obj), '<br/>';

	echo $GLOBALS['x'], '<br/>';
	// echo $_SERVER['SCRIPT_URI']; 这个东西不给力啊。

	echo __LINE__.'<br/>';

	class Base {
		public function traitTest () {
			global $x;
			++$x;
			echo 'one';
		}
	}
	trait traitTest {
		public function traitTest () {
			parent::traitTest();
			global $x;
			++$x;
			echo 'two';
		}
	}
	class TraitTestClass extends Base {
		use traitTest;
	}
	$o = new TraitTestClass();
	$o->traitTest();
	echo $x;

	// 命名空间 namespace	。。。玛德不给我用
	// namespace MyProject {
	//     const CONNECT_OK = 1;
	//     class Connection { /* ... */ }
	//     function connect() { /* ... */  }
	// }
	// namespace AnotherProject {
	//     const CONNECT_OK = 1;
	//     class Connection { /* ... */ }
	//     function connect() { /* ... */  }
	// }

	class Site {
		var $x = 'hhh', $y = 666;
		public $pub = 'pubilc';
		protected $protect = 'protected';
		private $priva = 'private';
		function __construct ($par = '')	 {
			$this->title = $par;
		}
		function __destruct () {
			echo '调用完成'.'<br/>';
		}
		function fn () {
			echo $this->title.$this->x;
		}
		function outP () {
			echo $this->pub;
		}
	}

	$o = new Site('标题');
	$o->fn();
	class PTest extends Site {
		var $b = '123';
	}
	$p = new PTest();
	echo $p->pub;

	$sites = array(
		'google'=>array('1'),
		'baidu'=>array('2'),
		'taobao'=>array('3')
	);
	print_r($sites);
	echo '<br/>';
	
	$file = fopen('./index.php', 'r') or exit('unable to open file!');

	while (!feof($file)) {
		// echo fgets($file).'<br/>';
		echo fgetc($file);
	}

	fclose($file);

?>