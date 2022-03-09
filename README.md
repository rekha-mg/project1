## Section 4 
### Creating Laravel Project using Composer 

>composer create-project laravel/laravel="8.4.*" laravel
~~~
Route::get('/posts/{id}',function($id){
   return 'Blog post '.$id;
});
~~~
