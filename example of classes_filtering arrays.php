<?php

class Post

{

public $title;

public $author;

public $published;

public $year;

public function __construct ($title, $author, $published, $year)

{

$this->title = $title;
$this->author = $author;
$this->published = $published;
$this->year = $year;
  }

}

$posts = [
new Post ('My First Post','aa', true, '1998'),
new Post ('My Second Post','bb', true, '2000'),
new Post ('My Third Post', 'cc', true, '2010'),
new Post ('My Forth Post', 'dd', false, '2015')

];

//$unpublishedPosts = array_filter ($posts, function ($post) {


  //return ! $post->published;



//});

//$posts= array_map(function ($post){

  //return (array) $post;
//}, $posts);


//$posts = array_column($posts, 'author', 'title');

var_dump($posts);