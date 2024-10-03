<?php

class employee{
    private $connection= "";

    function __construct(){
        $this->connection = new mysqli('localhost', 'root', '', 'employee_data');
    }
    function insert_data($name,$address,$phone,$email,$status){
        $this->connection->query("INSERT INTO tbl_employee(name,address,phone,email,status)VALUES('$name','$address','$phone','$email','$status')");

    }

    function show_data(){
       return $this->connection->query("SELECT * FROM tbl_employee");
    }

    function delete_data($id){
        return $this->connection->query("DELETE FROM tbl_employee where id='$id'");
    }

    function find_data($id){
        return $this->connection->query("SELECT * FROM tbl_employee where id='$id'");
    }

    function update_data($alldata, $id){

        $Name= $alldata['name'];
        $Address= $alldata['address'];
        $Phone= $alldata['phone'];
        $Email= $alldata['email'];
        $Status= $alldata['status'];

        return $this->connection->query("UPDATE tbl_employee SET

            name='$Name',
            address='$Address',
            phone='$Phone',
            email='$Email',
            status= '$Status'
            where id='$id'");
    }
}