<?php
 class student {
    public $name;
    public $id;
    public function __construct ($name, $id)
    {
        $this->name =$name;
        $this->id =$id;
    }
 }
?>
<?php
    class deparment{
        public $departmentName;
        public $students=[];
        function AddStudent($name,$id)
        {
            $tmp_student=new student($name,$id);
            $this -> students[] =$tmp_student;
            echo $student;
        }
        function DeleteStudent($id){
            for ($i= 0 ; $i<count($this->students);$i++)
            {
                if($this->students[$i]->id==$id){
                    unset($this ->students[$i]);
                    break;
                }
            }
        }
        function ShowStudents(){
            for($i=0;$i<count($this->students);$i++){
                if (!isset($this ->students[$i]))
                continue;
                echo $this-> students[$i]-> name. " " . $this -> students[$i] ->id;
                echo "<br>";

            }

        }
    }
    $newDepartment = new Deparment();
    $newDepartment->AddStudent("mobarak",1);
    $newDepartment->AddStudent("sabbir",2);
    $newDepartment->AddStudent("asif",3);
    $newDepartment->ShowStudents();
?>