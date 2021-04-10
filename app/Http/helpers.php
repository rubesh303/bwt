<?php
use App\Blog;
use App\Category;

if (!function_exists('count_category')) {
	function count_category($category_id){
	return  Blog::where([['category_id', $category_id]])->count();
	}
}
?>