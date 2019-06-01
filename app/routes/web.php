<?php

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
    return view('welcome');
});

Route::get('/cart/user/{user_id}', function ($user_id) {
	dd(DB::table('carts')->select([
		'user_id',
		'u.name as u_name',
		'p.name as p_name',
		'price',
		'description',
		'amount',
		'p.created_at as P_created_at',
		'p.updated_at as p_updated_at'
	])->where('user_id',$user_id)->join('products as p','carts.product_id','=','p.id')->join
	('users as u','carts.user_id','=','u.id')->get()
	);
});


//Route::get('/about',function(){
//	return "About";
//})->name('about');
//Route::get('/contacts',function(){
//	return "Contacts";
//})->name('contacts');


//Route::get('/products','ProductsController')->name('index');

// передача данных контроллеру
//Route::get('/products/{any?}','ProductsController')->name('index');
//Route::group(['prefix'=>'products','as'=>'products.'],function(){
//Route::get('/','ProductsController@index')->name('index');
//Route::get('/{product}','ProductsController@show')->name('show')->where('product','[0-9]+');
//Route::get('/create','ProductsController@create')->name('create');
//Route::post('/','ProductsController@store')->name('store');
//Route::get('/{products}/edit','ProductsController@edit')->name('edit');
//Route::put('/{products}','ProductsController@update')->name('update');
//Route::delete('/{products}','ProductsController@destroy')->name('destroy');
//});

//Route::resource('/products','ProductsController');
//Route::resource('/articles','ArticlesController');

//Route::resources([
//	'/products'=>'ProductsController',
//	'/articles'=>'ArticlesController',
//]);
//Route::get('/catalog',function(){
//
//	$products_array=[
//		'Product #1',
//		'Product #2',
//		'Product #3',
//		'Product #4',
//		'Product #5',
//	];
//
//	$html='<div>';
//	$html.="<div><a href='".route('about')."'>About</a></div>";
//	$html.="<div><a href='".route('contacts')."'>Contacts</a></div>";
//	foreach($products_array as $i=>$item){
//		$html.="<div><a href='".route('products.show',['product_id'=>$i+1])."'>$item</a></div>";
//	}
//	$html.='</div>';
//	return $html;
//});
//
//Route::group(['prefix'=>'products','as'=>'products.'],function(){
//	Route::get('/',function($product_id){
//		return "Product #".$product_id;
//	})->name('index');
//
//	Route::get('/{product_id}',function($product_id){
//		return "Product #".$product_id;
//	})->name('show');
//});
//
//
//
//Route::get('/articles/{article_id?}',function($article='default'){
//	return "Article #$article";
//});
//
//Route::get('/articles/{article_id}/comments/{comment_id}',function($article_id, $comment_id){
//	return "Article #$article_id | Comment #$comment_id";
//})->where([
//	'article_id'=>'[0-9]+',
//	'comment_id'=>'[a-z]+',
//]);
//
//Route::any('/page',function(){
//	return "Was create page";
//} );
//
////Route::match(['get','post',],'/page',function(){
////	return "Was create page";
////} );
//Route::post('/product',function(){
//	return "Was create product";
//} );
//Route::fallback(function(){
//	return "404";
//});
