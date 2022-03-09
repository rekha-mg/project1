## Section 4 
### Creating Laravel Project using Composer 

>composer create-project laravel/laravel="8.4.*" project1


## Section 8
### Route Paramerters (v-23)

~~~
Route::get('/posts/{id}',function($id){
   return 'Blog post '.$id;
});
~~~

### Optinal Route Paramerters(v-24)
~~~
Route::get('/posts/{id}',function($id){
   return 'Blog post '.$id;
});
~~~
~~~
Route::get('/recent-posts/{days_ago?}',function($daysAgo=20){
    return 'Posts from '.$daysAgo. 'days ago';
})->name('posts.recent.index');

http://127.0.0.1:8000/recent-posts/22 
~~~

