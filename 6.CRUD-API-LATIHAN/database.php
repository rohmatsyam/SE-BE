<?php

class database
{

    var $host = "localhost";
    var $uname = "root";
    var $pass = "";
    var $db = "db_sekolah";
    var $conn;

    function __construct()
    {
        $this->conn = new mysqli($this->host, $this->uname, $this->pass, $this->db);
    }

    function getAll()
    {
        $data = mysqli_query(
            $this->conn,
            "select student.*, class.classname as classname from student
			join class on class.id_class = student.class_id
			"
        );
        while ($d = mysqli_fetch_assoc($data)) {
            $result[] = $d;
        }
        return $result;
    }
    function getAllClass()
    {
        $data = mysqli_query(
            $this->conn,
            "select * FROM class"
        );
        while ($d = mysqli_fetch_assoc($data)) {
            $result[] = $d;
        }
        return $result;
    }

    function getSelectedStudent($id)
    {
        $result = [];
        $data = mysqli_query(
            $this->conn,
            "select student.*, class.classname as classname from student
			join class on class.id_class = student.class_id WHERE student.id_student = $id
			"
        );
        while ($d = mysqli_fetch_assoc($data)) {
            $result[] = $d;
        }
        return $result;
    }
    function getSelectedClass($id)
    {
        $result = [];
        $data = mysqli_query(
            $this->conn,
            "select * FROM class where class.id_class=$id"
        );
        while ($d = mysqli_fetch_assoc($data)) {
            $result[] = $d;
        }
        return $result;
    }

    function store($name, $gender, $classId)
    {
        $data = mysqli_query(
            $this->conn,
            "insert into student(name,gender,class_id) values('$name', '$gender', '$classId')"
        );

        return $data;
    }
    function storeClass($classname)
    {
        $data = mysqli_query(
            $this->conn,
            "insert into class (classname) values('$classname')"
        );
        return $data;
    }

    function update($id, $name, $gender, $classId)
    {
        $data = mysqli_query(
            $this->conn,
            "update student set name='$name', gender='$gender', class_id='$classId' WHERE id_student='$id'"
        );

        return $data;
    }
    function updateClass($id, $classname)
    {
        $data = mysqli_query(
            $this->conn,
            "update class set classname='$classname' WHERE id_class='$id'"
        );

        return $data;
    }

    function delete($id)
    {
        $data = mysqli_query($this->conn, "DELETE FROM student WHERE id_student='$id'");

        return $data;
    }
    function deleteClass($id)
    {
        $data = mysqli_query($this->conn, "DELETE FROM class WHERE id_class='$id'");

        return $data;
    }
    function getStudentWithClass($idClass)
    {
        $result = [];
        $data = mysqli_query(
            $this->conn,
            "select * FROM student where student.class_id=$idClass"
        );
        while ($d = mysqli_fetch_assoc($data)) {
            $result[] = $d;
        }
        return $result;
    }
}
