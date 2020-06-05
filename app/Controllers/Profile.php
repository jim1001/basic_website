<?php namespace App\Controllers;

use CodeIgniter\Controller; 

  
class Profile extends Controller { 

    public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);
		$this->session = \Config\Services::session();
	}

	public function display()
	{
		if ( ! is_file(APPPATH.'/Views/pages/profile_view.php'))
			{
			// Whoops, we don't have a page for that!
			throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
			}

		$data['title'] = "Profile";  //Page title
		
		if (! array_key_exists('user',$_SESSION)) {
			echo view('templates/header', $data);
			echo view('pages/nav', $data);
			echo "You need to login before you can enter profile data";
			echo view('templates/footer', $data);
			return;
		}

		
		
		if (array_key_exists('favcolour',$_SESSION)) {
			$data['favcolour']=$_SESSION['favcolour'];
		}
		else 
		{
			$data['favcolour']='';
		}
		if (array_key_exists('favfruit',$_SESSION)) {
			$data['favfruit']=$_SESSION['favfruit'];
		}
		else 
		{
			$data['favfruit']='';
		}		
			

		echo view('templates/header', $data);
		echo view('pages/nav', $data);
		echo view('pages/profile_view', $data);
		echo view('templates/footer', $data);
	}
    

	public function processForm()  
    {  
        $_SESSION['favcolour'] = $this->request->getVar('favcolour'); 
        $_SESSION['favfruit'] = $this->request->getVar('favfruit');
		$data['favcolour']=$_SESSION['favcolour'];		
		$data['favfruit']=$_SESSION['favfruit'];
		echo view('templates/header', $data);
		echo view('pages/nav', $data);
		echo view('pages/profile_view', $data);
		echo view('templates/footer', $data);		
 
    } 
}	
?>  