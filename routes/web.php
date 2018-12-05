<?php



Route::get('/', 'PagesController@home')->name('home');
Route::get('blog/{post}', 'PostsController@show')->name('posts.show');
Route::get('categories/{category}', 'CategoriesController@show')->name('categories.show');
Route::get('tags/{tag}', 'TagsController@show')->name('tags.show');

Route::post('statuses', 'StatusesController@store')->name('statuses.store');

Route::get('login/{socialNetwork}', 'SocialLoginController@redirectToSocialNetwork')
	->name('login.social')->middleware('guest');
Route::get('login/{socialNetwork}/callback', 'SocialLoginController@handleSocialNetworkCallback')
	->middleware('guest');

Route::get('activate/{token}', 'ActivationTokenController@activate')->name('activation');

Auth::routes();


//Routes
Route::middleware(['auth'])->group(function(){
	//Roles
	Route::resource('roles', 'RoleController');
																				

	//Empresas
	Route::post('empresas/store', 'EmpresaController@store')->name('empresas.store')
			->middleware('permission:empresas.create');

	Route::get('empresas', 'EmpresaController@index')->name('empresas.index')
			->middleware('permission:empresas.index');

	Route::get('empresas/create', 'EmpresaController@create')->name('empresas.create')
			->middleware('permission:empresas.create');

	Route::put('empresas/{empresa}', 'EmpresaController@update')->name('empresas.update')
			->middleware('permission:empresas.edit');

	Route::get('empresas/{empresa}', 'EmpresaController@show')->name('empresas.show')
			->middleware('permission:empresas.show');

	Route::delete('empresas/{empresa}', 'EmpresaController@destroy')->name('empresas.destroy')
			->middleware('permission:empresas.destroy');

	Route::get('empresas/{empresa}/edit', 'EmpresaController@edit')->name('empresas.edit')
			->middleware('permission:empresas.edit');	

	//Usuarios
	Route::get('users', 'UserController@index')->name('users.index')
			->middleware('permission:users.index');

	Route::put('users/{user}', 'UserController@update')->name('users.update')
			->middleware('permission:users.edit');

	Route::get('users/{user}', 'UserController@show')->name('users.show')
			->middleware('permission:users.show');

	Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy')
			->middleware('permission:users.destroy');

	Route::get('users/{user}/edit', 'UserController@edit')->name('users.edit')
			->middleware('permission:users.edit');	
			
	Route::get('admin', function(){
		return view('admin.dashboard');

	});

	Route::group([
		'prefix' => 'admin', 
		'namespace' => 'Admin'], 
	function(){
		Route::get('/', 'AdminController@index')->name('admin');
		Route::get('posts', 'PostsController@index')->name('admin.posts.index');
		//Route::get('posts/create', 'PostsController@create')->name('admin.posts.create');
		Route::post('posts', 'PostsController@store')->name('admin.posts.store');
		Route::get('posts/{post}', 'PostsController@edit')->name('admin.posts.edit');
		Route::put('posts/{post}', 'PostsController@update')->name('admin.posts.update');
		Route::delete('posts/{post}', 'PostsController@destroy')->name('admin.posts.destroy');
		Route::post('posts/{post}/photos', 'PhotosController@store')->name('admin.photos.store');		
		Route::delete('photos/{photo}', 'PhotosController@destroy')->name('admin.photos.destroy');		

	});

});
