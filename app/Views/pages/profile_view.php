<div id="profile"> 
   
    <form method="post" action="<?php echo site_url('Profile/processForm'); ?>"> <!-- Call Controller Profile's process method -->
        <table cellpadding="2" cellspacing="2">  
            <tr>  
                <td><th>Favourite colour:</th></td>  
                <td><input type="text" name="favcolour" value="<?php echo $favcolour;?>"></td>  
            </tr>  
            <tr>  
                <td><th>Favourite fruit:</th></td>  
                <td><input type="text" name="favfruit" value="<?php echo $favfruit;?>"></td>  
            </tr>  
  
            <tr>  
                <td> </td>  
                <td><input type="submit" value="Set"></td>  
            </tr>  
        </table>  
    </form>  
 </div>  