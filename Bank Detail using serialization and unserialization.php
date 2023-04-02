<html>
<head>
<title>Bank Account Details</title>
</head>
<body>
	<?php
		class Customer {
			private $name;
			private $credit_card_no;
			public function __construct($name,$credit_card_no) {
				$this->name=$name;
				$this->credit_card_no=$credit_card_no;
			}
			public function __sleep() {
				echo "Sleep Calling<br>";
				return array('name','credit_card_no');
			}
			public function __wakeup() {
				echo "Wakeup Calling<br>";
			}
		}
		$c=new Customer("Amar",1234567890);
		$data=serialize($c);
		echo $data . "<br>";
		print_r(unserialize($data));
?>
</body>
</html>