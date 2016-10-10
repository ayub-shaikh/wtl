<!DOCTYPE html>
<html>
    <head>
        <title>Your Registration Info</title>
        <style>
            table{
                border: 2px solid black;
            }
            table td {
                padding: 2px;
            }
            
        </style>
        </head>
        
        <body>
            
    
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'functions.php';
if($_POST){
    $rollno=$_POST['rollno'];
    $name=$_POST['sname'];
    $gender=$_POST['gender'];
    $address=$_POST['address'];
    $dob=$_POST['dob'];
    $sem=$_POST['sem'];
    $semail=$_POST['semail'];
    $dept=$_POST['dept'];
    $batch=$_POST['batch'];
    if(!empty($rollno)&&!empty($name)&&!empty($gender)&&!empty($address)&&!empty($dob)&&!empty($sem)
            &&!empty($semail)&&!empty($dept)&&!empty($batch))
    {
    
        $link=mysqli_connect('localhost', 'root', 'root', 'AIKTC');
        $query="Insert into students values ('$rollno', '$name', '$gender', '$address', '$dob', '$sem', '$semail', '$dept', '$batch')";
        $result=mysqli_query($link, $query);
        if(!$result){
            echo "<br>".mysqli_error($link);
        }
        else{
            echo '<br><h4>Your data is successfully Inserted.</h4>';
            
        }
     ?>
    
    <table>
        
        <tr>
            <td>Roll No</td>
        <td><?php echo fix_rollno($rollno);?></td>
        </tr>
        <tr>
            <td>Name</td>
        <td><?php echo fix_name($name);?></td>
        </tr>
        
        <tr>
            <td>Gender</td>
        <td><?php echo $gender;?></td>
        </tr>
        
        
        <tr>
            <td>Adresss</td>
        <td><?php echo fix_address($address);?></td>
        
        </tr>
        
        <tr>
            <td>Date of Birth</td>
        <td><?php echo $dob;?></td>
        
        </tr>
        
        <tr>
            <td>Semester</td>
        <td><?php echo $sem;?></td>
        
        </tr>
        <tr>
            <td>Email</td>
        <td><?php echo fix_email($email);?></td>
        
        </tr>
        <tr>
            <td>Department</td>
        <td><?php echo $dept;?></td>
        
        </tr>
        <tr>
            <td>Batch</td>
        <td><?php echo $batch;?></td>
        
        </tr>
        </table>
        <?php
    }
    else{
        echo "<span>Something is Missing!</span>";
       // header ('Refresh:2, url=registration.html');
    }
    
   }
    else{
        header('Refresh:0, url=registration.html');
    }
    ?>
        </body>
        </html>
        