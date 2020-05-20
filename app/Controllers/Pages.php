<?php namespace App\Controllers;

use CodeIgniter\Controller;  
//defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Pages extends Controller {  
  
	public function view($page = 'home')
	{
		if ( ! is_file(APPPATH.'/Views/pages/'.$page.'.php'))
			{
			// Whoops, we don't have a page for that!
			throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
			}

		$data['title'] = ucfirst($page); // Capitalize the first letter

		echo view('templates/header', $data); //this is displaying a view within the class's view() function
		echo view('pages/nav', $data);
		echo view('pages/'.$page, $data);
		echo view('templates/footer', $data);
	}
}     
?>  