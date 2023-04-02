<html>
<head>
<title>Employee Details</title>
</head>
<body>
	<?php
		class Person {
			public $name;
			public $age;
			public function __construct($name,$age) {
				$this->name=$name;
				$this->age=$age;
			}
			protected function display() {
				echo "Employee Name = {$this->name} <br>";
				echo "Employee Age = {$this->age} <br>";
			}
		}
		class Employee extends Person {
			public $salary;
			public $designation;
			public function __construct($name,$age,$salary,$designation) {
				$this->name=$name;
				$this->age=$age;
				$this->salary=$salary;
				$this->designation=$designation;
			}
			public function display() {
				echo "Employee Name = {$this->name} <br>";
				echo "Age = {$this->age} <br>";
				echo "Salary = {$this->salary} <br>";
				echo "Designation = {$this->designation} <br>";
			}
		}
		$emp_detail=new Employee("Sunil",40,"90000","CEO");
		$emp_detail->display();
?>
</body>
</html>