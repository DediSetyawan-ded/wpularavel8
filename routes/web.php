<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});








Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Dedi Setiawan",
        "email" => "Dedi@gmail.com",
        "image" => "mahasiswa.jpg"
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [

        [
            "title" => "Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Dedi Setiawan",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
            Ad quod, delectus facere eveniet obcaecati nobis eum animi exercitationem aperiam tempore, esse reiciendis dicta,
            iusto ipsam asperiores nihil. Dolorem quas tempora necessitatibus fugiat veritatis maiores rem esse ipsam illum perspiciatis 
            beatae natus aliquam, eligendi voluptate rerum voluptatum perferendis quis enim iusto neque error aut nulla quisquam cumque. 
            Dolorem, aliquam! Nesciunt voluptate accusamus fugiat molestiae ratione maiores quaerat 
            aperiam tenetur saepe eius nobis, minima, tempora dignissimos reprehenderit eum modi quisquam commodi est."
        ],

        [
            "title" => "Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Doddy Ferdyansyah",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
            Ad quod, delectus facere eveniet obcaecati nobis eum animi exercitationem aperiam tempore, esse reiciendis dicta,
            iusto ipsam asperiores nihil. Dolorem quas tempora necessitatibus fugiat veritatis maiores rem esse ipsam illum perspiciatis 
            beatae natus aliquam, eligendi voluptate rerum voluptatum perferendis quis enim iusto neque error aut nulla quisquam cumque. 
            Dolorem, aliquam! Nesciunt voluptate accusamus fugiat molestiae ratione maiores quaerat 
            aperiam tenetur saepe eius nobis, minima, tempora dignissimos reprehenderit eum modi quisquam commodi est."
        ],


    ];


    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});
