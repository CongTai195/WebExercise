<?php
    include_once("E_Student.php");
    class Model_Student{
        public function __construct()
        {
            
        }
        public function getAllStudent(){
            include_once("Connect.php");
            $query = "select * from sinhvien";
            $result = mysqli_query($link, $query);
            $studentlist = array();
            while ($row = mysqli_fetch_array($result)){
                array_push($studentlist, new Student($row['id'], $row['name'], $row['age'], $row['university']));
            }
            return $studentlist;
        }
        public function getStudentDetails($stid){
            include_once("Connect.php");
            $query = "select * from sinhvien where ID = '$stid'";
            $result = mysqli_query($link, $query);
            $student = array();
            while ($row = mysqli_fetch_array($result)){
                array_push($student, new Student($row['id'], $row['name'], $row['age'], $row['university']));
            }
            return $student[0];
        }
        public function AddStudent($student){
            include_once("Connect.php");
            $query = "insert into sinhvien values ('$student->id', '$student->name', '$student->age', '$student->university')";
            mysqli_query($link, $query);
        }
        public function DeleteStudent($delid){
            include_once("Connect.php");
            $query = "delete from sinhvien where ID = '$delid'";
            mysqli_query($link, $query);
        }
        public function UpdateStudent($student) 
        {
            include_once("Connect.php");
            $query = "update sinhvien set name = '$student->name', age = '$student->age', university = '$student->university' where ID = '$student->id'";
            mysqli_query($link, $query);
        }
    }
?>