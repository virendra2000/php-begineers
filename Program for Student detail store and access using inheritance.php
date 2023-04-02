<html>
<head>
<title>Student Details</title>
</head>
<body>
	<?php
		class Student {
			public $name;
			public $roll_no;
			public function __construct() {
				$this->name="Amar Akbar Anthony";
				$this->roll_no=334;
			}
			public function display() {
				echo "Student Name = {$this->name} <br>";
				echo "Student Roll No = {$this->roll_no} <br>";
			}
		}
		
		$s1=new Student();
		$s1->display();
?>
</body>
</html>