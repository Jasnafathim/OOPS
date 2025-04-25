<?php
class Employee{
    public $employee_name;
    public $employee_id;
        function __construct($emp_name,$emp_id){
            $this->employee_name=$emp_name;
            $this->employee_id=$emp_id;
        }
        public function employee_details(){
            echo "employee name is $this->employee_name.<br/>";
            echo "employee id is $this->employee_id";
        }        
}
$obj=new Employee("Jasna",123);
echo $obj->employee_details();

?>