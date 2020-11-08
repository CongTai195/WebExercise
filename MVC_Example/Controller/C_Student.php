<?php
    include_once("../Model/M_Student.php");
    class Ctrl_Student{
        public function invoke(){
            if (isset($_GET['stid'])){
                $modelStudent = new Model_Student();
                $student = $modelStudent->getStudentDetails($_GET['stid']);
                include_once("../View/StudentDetail.php");
            }
            if (isset($_GET['display'])) {
                $modelStudent = new Model_Student();
                $studentList = $modelStudent->getAllStudent();
                include_once("../View/StudentList.php");
            }
            if (isset($_GET['FormAdd'])){
                include_once("../View/StudentAdd.php");
            }
            if (isset($_GET['del'])){
                $modelStudent = new Model_Student();
                $studentList = $modelStudent->getAllStudent();
                include_once("../View/StudentDelete.php");
            }
            if (isset($_GET['delid'])){
                $delid = $_GET['delid'];
                $modelStudent = new Model_Student();
                $modelStudent->DeleteStudent($delid);
                header("Location: http://localhost/CNWeb18N13/MVC_Example/Controller/C_Student.php?del");
            }
            if (isset($_POST['add'])) {
                $ID = $_POST['ID'];
                $name = $_POST['name'];
                $age = $_POST['age'];
                $university = $_POST['university'];
                $modelStudent = new Model_Student();
                $student =  new Student($ID, $name, $age, $university);
                $modelStudent->AddStudent($student);
                header("Location: http://localhost/CNWeb18N13/MVC_Example/index.php");
        }
            if (isset($_GET['FormUpdate'])){
                $modelStudent = new Model_Student();
                $studentList = $modelStudent->getAllStudent();
                include_once("../View/StudentUpdate.php");
            }
            if (isset($_GET['updateid'])){
                include_once("../View/UpdateForm.php");
            }
            if (isset($_POST['update'])) {
                $ID = $_POST['ID'];
                $name = $_POST['name'];
                $age = $_POST['age'];
                $university = $_POST['university'];
                echo $ID.$name.$age.$university;
                $modelStudent = new Model_Student();
                $student =  new Student($ID, $name, $age, $university);
                $modelStudent->UpdateStudent($student);
                header("Location: http://localhost/CNWeb18N13/MVC_Example/index.php");
        }
        }
    }
    $C_Student = new Ctrl_Student();
    $C_Student->invoke();
?>