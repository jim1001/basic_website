<div id="welcome">
   Welcome <?php echo $_SESSION['user']; ?>
<br>  
    <?php echo anchor('Login/logout', 'Logout'); ?>  
</div>  	