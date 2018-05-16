<?php 
use RainLab\Blog\Models\Post;class Cms5afbb76c5fd47911306680_5efd4f303e63fa95002b03f12be647e1Class extends \Cms\Classes\PageCode
{

public function onStart()
{
	$this['posts'] = Post::orderBy("published_at", "desc")->limit(3)->get();
}
}
