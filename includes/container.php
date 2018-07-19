<?php 
	$msg="";
	if(isset($_POST['submit'])){
		$msg="Succesfully Entered Data";
	}
?>

 <img src="airline1.jpg">
 <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
   		<table>
   			<tr> 
         				<td>Form City</td>
         		       <td>
                           <select>
                                 <option>Select city</option>
                                 <option>Kathmandu</option>
                                 <option>Biratnagar</option>
                                 <option>Vairawa</option>
                           </select>
                      </td>
   			</tr>

   			<tr>
   				     <td>To City</td>
         				<td>
            				<select>
                           <option>Please Select</option>
                           <option>Dharan</option>
                           <option>Nawalparasi</option>
                        </select>
         				</td>
   			</tr>

   			<tr>
   				<td>Date</td>
   				<td><input type="date" name="date"></td>
   			</tr>

   			<tr>
   				<td>Passenger</td>
   				<td><input type="text" name="passenger" ></td>
   			</tr>
   			
   			<tr>
   				<td>Class</td>
   				<td>
                  <input type="radio" name="ticket" value="economy">Economy
                  <input type="radio" name="ticket" value="business">Business
               </td>

   			</tr>

   			<tr>
   				<td><input type="submit" name="submit" value="Submit"></td>
   				<td><input type="submit" name="reset" value="Reset"></td>
   			<?php echo $msg;?>
			</tr>
   		</table>
</form>
	
