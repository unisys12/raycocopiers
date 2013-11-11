<?php

Class Post extends Eloquent {

	protected $table = 'posts';

	public static function getPosts()
	{
		//return $posts = Post::all();
		return DB::table('posts')->take(2)->orderBy('publish_date', 'desc')->get();
	}

}
