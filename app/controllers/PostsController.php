<?php

class PostsController
{
	public function index()
	{		

		$title = 'BLOG PAGE';	
		require MODELS.'/Post.php';

		$posts = Post::index();
		
		include_once VIEWS.'/posts/index.php';
	
	}


	public function view($vars)
	{
		extract($vars);
		$title = 'BLOG POST '.$id;
		include_once VIEWS.'/posts/show.php';
	}
}