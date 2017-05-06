<?php

class PostsController
{
	public function index()
	{		

		$title = 'BLOG PAGE';	
		require MODELS.'/Post.php';

		$posts = Post::index();

		view('posts/index', ['title'=>'BLOG PAGE', 'posts'=>$posts]);
	
	}


	public function view($vars)
	{
		require MODELS.'/Post.php';

		extract($vars);

		$post = Post::view($id);
		
		$title = 'BLOG POST '.$id;
		
		view('posts/show', ['title'=>$title, 'post'=>$post]);
	}
}