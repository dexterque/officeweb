<?php 
use RainLab\Blog\Models\Post;class Cms5afbfac69e72b507326558_18c8f098ffb78958001e37335f19ea9aClass extends \Cms\Classes\PageCode
{

public function onStart()
{
	$this['posts'] = Post::orderBy("published_at", "desc")->limit(3)->get();
}
}
