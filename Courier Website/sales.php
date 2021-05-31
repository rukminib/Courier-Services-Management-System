<?php include('config.php');

    // fetch the record to be updated
    if (isset($_GET['edit'] )) {
        $id = $_GET['edit']; 
        $edit_state = true;
        $rec = mysqli_query($db, "SELECT * FROM orders WHERE id=$id;");
        $record = mysqli_fetch_array($rec); 
        $name = $record['name'];
        $address = $record['address'];
        $phone = $record['phone'];
        $toname = $record['toname'];
        $toaddress = $record['toaddress'];
        $tophone = $record['tophone'];
        $weight = $record['weight'];
        $id = $record['id'];
    }
?> 
<!DOCTYPE html>
<html>
<head>
	<title>Total Sales Page</title>
	<link rel="stylesheet" type="text/css" href="CSS/sales.css">
</head>
<body>
    <?php if (isset($_SESSION['msg'])):  ?>     
      <div class="msg">
      	<?php
             echo $_SESSION['msg'];
             unset($_SESSION['msg']);
      	?>
      </div>
    <?php endif ?>
    <h1 style="text-align: center; color: white; padding: 30px; background-color: maroon;" >WELCOME ADMINISTRATOR !</h1>
      <table>
      	    <caption style="font-size: 19px;"><b>ORDERED COURIERS</b></caption>
	        <thead>                                 
		       <tr>                              
			      <th>Your Name</th>                        
			      <th>Your Address</th>
			      <th>Your Contact</th>   
			      <th>To Name</th>                        
			      <th>To Address</th>
			      <th>To Number</th>
			      <th>Pack Weight</th>                          
		       </tr>                                  
	        </thead>                                  
	        <tbody>                                       
	        <?php while($row= mysqli_fetch_array($results))  { ?>
	           <tr>
	             <td><?php echo $row['name']; ?></td>
	             <td><?php echo $row['address']; ?></td>
	             <td><?php echo $row['phone']; ?></td>
	             <td><?php echo $row['toname']; ?></td>
	             <td><?php echo $row['toaddress']; ?></td>
	             <td><?php echo $row['tophone']; ?></td>
	             <td><?php echo $row['weight']; ?></td>
              </tr>
            <?php  } ?>
            </tbody>
     </table>
		

       
	</div>   
</form>
</body>
</html>