<?php namespace App\Controllers;

use CodeIgniter\Controller; 

  
class Profile extends Controller { 

	public function display()
	{
		if ( ! is_file(APPPATH.'/Views/pages/profile_view.php'))
			{
			// Whoops, we don't have a page for that!
			throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
			}

		$data['title'] = "Profile";  //Page title

		echo view('templates/header', $data);
		echo view('pages/nav', $data);
		echo view('pages/profile_view', $data);
		echo view('templates/footer', $data);
	}
}     
?>  