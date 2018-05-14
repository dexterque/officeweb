<?php 
use RainLab\Blog\Models\Post;class Cms5af907bb6ab08308877841_3261ee40700ddd86f968d8a9d8e8b50dClass extends \Cms\Classes\PageCode
{

public function onStart()
{
	$this['posts'] = Post::orderBy("published_at", "desc")->limit(3)->get();
}
}
