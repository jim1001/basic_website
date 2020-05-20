<?php namespace App\Controllers;

use CodeIgniter\Controller; 

  
class Profile extends BaseController { 

	public function profile()
	{
		if ( ! is_file(APPPATH.'/Views/pages/profile.php'))
			{
			// Whoops, we don't have a page for that!
			throw new \CodeIgniter\Exceptions\PageNotFoundException('profile.php');
			}

		$data['title'] = "Profile";  //Page title

		echo view('templates/header', $data);
		echo view('pages/nav', $data);
		echo view('pages/profile', $data);
		echo view('templates/footer', $data);
	}

	public function process()  
    {  
	    if (empty($_SESSION))   
		{  
            //$data['error'] = 'You need to login';  
			return redirect()->to("/Login/login");
		}  
		else {
        $_SESSION['colour'] = $this->request->getVar('colour');  //see https://forum.codeigniter.com/thread-75138.html
        $_SESSION['fruit'] = $this->request->getVar('fruit');
		
		
		}		
    }  
	/*
    public function logout()  
    {  
        //removing session  
		unset($_SESSION['user']);  //Ref: https://codeigniter.com/user_guide/libraries/sessions.html#removing-session-data
        return redirect()->to("Login"); // Ref: https://forum.codeigniter.com/thread-69869.html 
    }  
	*/
}     
?>  