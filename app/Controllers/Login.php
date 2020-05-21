<?php namespace App\Controllers;

use CodeIgniter\Controller; 

  
class Login extends Controller { 

	/* Function: initController
	** Sole purpose for inclusion is to initialize a session
	** Ref: https://forum.codeigniter.com/thread-76492.html
	*/
    public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);
		$this->session = \Config\Services::session();
	}

	public function login()
	{
		if ( ! is_file(APPPATH.'/Views/pages/login_view.php'))
			{
			// Whoops, we don't have a page for that!
			throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
			}

		$data['title'] = "Login";  //Page title

		echo view('templates/header', $data);
		echo view('pages/nav', $data);
		echo view('pages/login_view', $data);
		echo view('templates/footer', $data);
	}
	public function process()  
    {  
        $user = $this->request->getVar('user');  //see https://forum.codeigniter.com/thread-75138.html
        $pass = $this->request->getVar('pass');  
        if ($user=='jim' && $pass=='123')   
        {  
            $_SESSION['user']=$user;
			$this->view('welcome_view');
        }  
        else{  
            $data['error'] = 'Your Account is Invalid';  
			echo view('pages/login_view', $data);
        }  
    }  
    public function logout()  
    {  
        //removing session  
		unset($_SESSION['user']);  //Ref: https://codeigniter.com/user_guide/libraries/sessions.html#removing-session-data
        return redirect()->to("Login"); // Ref: https://forum.codeigniter.com/thread-69869.html 
    } 
	public function view($page)
	/* Same as Pages
		Couldn't call view method of Pages without losong session data so create
		identical method here
	*/ 
	{
		if ( ! is_file(APPPATH.'/Views/pages/'.$page.'.php'))
			{
			// Whoops, we don't have a page for that!
			throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
			}

		$data['title'] = ucfirst($page); // Capitalize the first letter

		echo view('templates/header', $data);
		echo view('pages/nav', $data);
		echo view('pages/'.$page, $data);
		echo view('templates/footer', $data);
	}	
}     
?>  