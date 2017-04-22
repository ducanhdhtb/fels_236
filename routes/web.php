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

Route::get('/',['as'=>'index','uses'=>'PageController@index']);
//Route for register
Route::get('register',['as'=>'get_register','uses'=>'PageController@getRegister']);
Route::post('register',['as'=>'post_register','uses'=>'PageController@postRegister']);
//Route for login
Route::get('login',['as'=>'get_login','uses'=>'PageController@getLogin']);
Route::post('login',['as'=>'post_login','uses'=>'PageController@postLogin']);
//Route for logout
Route::get('logout',['as'=>'logout','uses'=>'PageController@logout']);

// Route for admin
Route::group(['prefix'=>'admin'],function(){
    
    //-------------Route user--------------------------------------------------------
    Route::group(['prefix'=>'user'],function(){
        //List
        route::get('list',['as'=>'user.list','uses' => 'UserController@getList']);
        //Add
        route::get('add',['as'=>'user.add','uses' => 'UserController@getAdd']);
        route::post('add',['as'=>'user.add.post','uses'=>'UserController@postAdd']);
        //Update
        route::get('edit/{id}','UserController@getEdit');
        route::post('edit/{id}','UserController@postEdit');
        //Delete
        route::get('delete/{id}','UserController@getDelete');
    });


    // ----------------------Route product ------------------------------------------
    Route::group(['prefix'=>'product'],function(){
        //List
        route::get('list',['as' => 'product.list','uses' => 'ProductController@getList']);
        //Add
        route::get('add',['as' => 'product.add','uses' => 'ProductController@getAdd']);
        route::post('add','ProductController@postAdd');
        //Update
        route::get('edit/{id}','ProductController@getEdit');
        route::post('edit/{id}','ProductController@postEdit');
        //Delete
        route::get('delete/{id}','ProductController@getDelete');
        // Ajax
        route::get('ajax/{id}','ProductController@Ajax');
    });

        // ----------------------Route category ------------------------------------------
    Route::group(['prefix'=>'category'],function(){
        //List
        route::get('list',['as' => 'category.list', 'uses' => 'CategoryController@getList']);
        //Add
        route::get('add',['as' => 'category.add', 'uses' => 'CategoryController@getAdd']);
        route::post('add','CategoryController@postAdd');
        //Update
        route::get('edit/{id}',['as'=>'category.edit','uses'=>'CategoryController@getEdit']);
        route::post('edit/{id}','CategoryController@postEdit')->name('category.edit.post');
        //Delete
        route::get('delete/{id}','CategoryController@getdelete');
    });
    // ----------------------Route subCategory
    Route::group(['prefix'=>'subcategory'],function(){
        //List
        route::get('list',['as' => 'subcategory.list', 'uses' => 'SubCategoryController@getList']);
        //Add
        route::get('add',['as' => 'subcategory.add', 'uses' => 'SubCategoryController@getAdd']);
        route::post('add','SubCategoryController@postAdd');
        //Update
        route::get('edit/{id}','SubCategoryController@getEdit');
        route::post('edit/{id}','SubCategoryController@postEdit');
        //Delete
        route::get('delete/{id}','SubCategoryController@getdelete');
    });
    //------------------------ Route order -------------------------------------------

    Route::group(['prefix'=>'order'],function(){
        //List
        route::get('list',['as' =>'order.list','uses' => 'OrderController@getList']);
        //Add
        route::get('add',['as' =>'order.add','uses' => 'OrderController@getAdd']);
        route::post('add','OrderController@postAdd');
        //Update
        route::get('edit/{id}','OrderController@getEdit');
        route::post('edit/{id}','OrderController@postEdit');
        //Delete
        route::get('delete/{id}','OrderController@getdelete');
    });

    //-------------------Route for order detail

    Route::group(['prefix'=>'orderdetail'],function(){
        //List
        route::get('list',['as' =>'orderdetail.list','uses' => 'OrderdetailController@getList']);
        //Add
        route::get('add',['as' =>'orderdetail.add','uses' => 'OrderdetailController@getAdd']);
        route::post('add','OrderController@postAdd');
        //Update
        route::get('edit/{id}','OrderdetailController@getEdit');
        route::post('edit/{id}','OrderController@postEdit');
        //Delete
        route::get('delete/{id}','OrderdetailController@getdelete');
    });

    //------------------------ Route comment -------------------------------------------

    Route::group(['prefix'=>'comment'],function(){
        //List
        route::get('list',['as' =>'comment.list'  ,'uses' => 'CommentController@getList']);
        //Add
        route::get('add',['as' =>'comment.add'  ,'uses' => 'CommentController@getAdd']);
        route::post('add','OrderController@postAdd');
        //Update
        route::get('edit/{id}','OrderController@getEdit');
        route::post('edit/{id}','OrderController@postEdit');
        //Delete
        route::get('delete/{id}','OrderController@getdelete');
    });
});

Route::get('subcategory/{id}/{name}.html',['as'=>'subcategory.show','uses'=>'IndexController@getsubcategory']);
Route::get('product/{id}/{name}.html',['as'=>'product.detail','uses'=>'IndexController@productdetail']);

Route::get('cart',['as'=>'cart','uses'=>'IndexController@showcart']);
Route::get('addcart/{id}',['as'=>'add.cart','uses'=>'IndexController@addcart'] );
Route::get('deletecart/{id}',['as'=>'delete.cart','uses'=>'IndexController@deletecart']);

Route::get('checkout',['as'=>'checkout','uses'=>'IndexController@checkout']);
Route::post('checkout',['as'=>'post.checkout','uses'=>'IndexController@postcheckout']);

Route::get('complete',['as'=>'complete','uses'=>'IndexController@complete']);

