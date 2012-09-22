<?php	

class Mapper extends CI_Controller {
	
	public function index()
	{
		
	}

	public function ex1()
	{
		$user = new User();
		$u = $user->where('id', 1)->get();
		
		$blogs = $u->blog->get();
		
		foreach ($blogs as $blog)
		{
			echo '<p>'.$blog->title.'</p>';
		}
	}
	
	public function ex2()
	{
		$blog = new Blog();
		$blog->where('id', 9)->get();
		
		$user =  $blog->user->get();
		
		echo $user->username;
	}
	
	public function ex3()
	{
		$blog = new Blog();
		$blog->where('id', 10)->get();
		$blog->user_id = 100;
		$blog->save();
	}
	
	public function ex4()
	{
		$user = new User();
		$user->get_paged(1, 1);
		
		alert( $user->paged->total_rows );
		
	}
	
	public function ex5()
	{
		$user = new User();
		$user->where('id',  5)->get();
		
		$blogs = $user->blog->get();
		
		foreach ($blogs as $entry)
		{
			echo '<p>'.$entry->title.'</p>';
		}
	}
	
}	