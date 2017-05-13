<?php

class PostsController extends Controller
{
	public function index()
	{		

		$posts = Post::index();
		$data['posts'] = $posts;
        $data['title'] = 'Post Page ';
        $this->_view->render('posts/index',$data);
	
	}


	public function view($vars)
	{
		extract($vars);
		$post = Post::view($id);
		$data['post'] = $post;
        $data['title'] = 'Post Page ';
       
        $this->_view->render('posts/show',$data);
	}
}