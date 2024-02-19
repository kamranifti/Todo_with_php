<?php 
function make_connetion(){
    $con = new mysqli("localhost","root","","todo");
    return $con;
}

function add_item($value){
    $con = make_connetion();
    $query = "INSERT INTO todo(id,item,status) VALUES(NULL,'$value', '0')";
    $con->query($query);
}

function get_items(){
    $con = make_connetion();
    $query = "SELECT id,item from todo WHERE status='0'";
    $result = $con->query($query);
    return $result;
}

function get_items_checked(){
    $con = make_connetion();
    $query = "SELECT id,item from todo WHERE status='1'";
    $result = $con->query($query);
    return $result;
}

function update_items($id){
    $con = make_connetion();
    $query = "UPDATE todo set status='1' WHERE id='$id'";
    $result = $con->query($query);
}
function delete_items($id){
    $con = make_connetion();
    $query = "DELETE from todo WHERE id='$id'";
    $result = $con->query($query);
}
?>