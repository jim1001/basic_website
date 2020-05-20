<div id="welcome">

   <h1>Welcome <?php $session->get('user'); ?></h1>
<br>  
    <?php echo anchor('Login/logout', 'Logout'); ?>  
</div>  	