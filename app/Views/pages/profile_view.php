<div id="profile"> 
    <?php echo isset($error) ? $error : ''; ?>  
    <form method="post" action="<?php echo site_url('Profile/process'); ?>"> <!-- Call Controller Profile's process method -->
        <table cellpadding="2" cellspacing="2">  
            <tr>  
                <td><th>Favourite colour:</th></td>  
                <td><input type="text" name="colour"></td>  
            </tr>  
            <tr>  
                <td><th>Favourite fruit:</th></td>  
                <td><input type="text" name="fruit"></td>  
            </tr>  
  
            <tr>  
                <td> </td>  
                <td><input type="submit" value="Set"></td>  
            </tr>  
        </table>  
    </form>  
 </div>  