<div id="login"> 
    <?php echo isset($error) ? $error : ''; ?>  
	<h1>Login</h1>
    <form method="post" action="<?php echo site_url('Login/process'); ?>">
        <table cellpadding="2" cellspacing="2">  
            <tr>  
                <td><th>Username:</th></td>  
                <td><input type="text" name="user"></td>  
            </tr>  
            <tr>  
                <td><th>Password:</th></td>  
                <td><input type="password" name="pass"></td>  
            </tr>  
  
            <tr>  
                <td> </td>  
                <td><input type="submit" value="Login"></td>  
            </tr>  
        </table>  
    </form>  
 </div>  