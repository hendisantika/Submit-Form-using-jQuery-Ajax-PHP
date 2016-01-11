<?php

if($_POST)
{
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$phno = $_POST['phno'];

	?>
    
    <table border="0">
    
    <tr>
    <td colspan="2">Succedd !!!</td>
    </tr>
    
    <tr>
    <td colspan="2"><hr /></td>
    </tr>
    
    <tr>
    <td>First Name</td>
    <td><?php echo $fname ?></td>
    </tr>
    
    <tr>
    <td>Last Name</td>
    <td><?php echo $lname ?></td>
    </tr>
    
    <tr>
    <td>Your eMail</td>
    <td><?php echo $email; ?></td>
    </tr>
    
    <tr>
    <td>Contact No</td>
    <td><?php echo $phno; ?></td>
    </tr>
    
    </table>
    <?php
	
}

?>