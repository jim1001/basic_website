<div id="profile"> 
    <?php echo isset($error) ? $error : ''; 
	if (empty($_SESSION)) {
		$colour = "";
		$fruit = "";
	}
	else {
		$colour = $_SESSION['colour'];
		$fruit = $_SESSION['fruit'];
	}
	
	?>  
	<h1>User profile (requires login)</h1>
    <form method="post" action="<?php echo site_url('Profile/process'); ?>"> <!-- Call Controller Profile's process method -->
        <table cellpadding="2" cellspacing="2">  
            <tr>  
                <td><th>Favourite colour:</th></td>  
                <td><input type="text" name="colour" value="<?php echo $colour;?>"></td>  
            </tr>  
            <tr>  
                <td><th>Favourite fruit:</th></td>  
                <td><input type="text" name="fruit" value="<?php echo $fruit;?>"></td>  
            </tr>  
  
            <tr>  
                <td> </td>  
                <td><input type="submit" value="Submit"></td>  
            </tr>  
        </table>  
    </form>  
 </div>  