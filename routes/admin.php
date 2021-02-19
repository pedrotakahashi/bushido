<?php
use Illuminate\Support\Facades\Route;

    Route::group(['middleware'=>'auth','namespace' => 'Admin', 'prefix' => 'admin'], function() {
        // ### AdminController ### 
        Route::get('/','AdminController@index');

        // // ### AnalyticsController ### 
        // Route::resource('analytics','AnalyticsController');

        ###SenseisController ###
        Route::resource('senseis', 'SenseisController');
        
        //  // ### BlogController ###
        //  Route::get('blog-category', 'BlogController@indexBlogCategory')->name('blogcategory.index');
        //  Route::get('blog-category/create', 'BlogController@createBlogCategory')->name('blogcategory.create');
        //  Route::get('blog-category/destroy', 'BlogController@destroyBlogCategory')->name('blogcategory.destroy');
        //  Route::get('blog-category/update', 'BlogController@updateBlogCategory')->name('blogcategory.update');
        //  Route::get('blog-category/edit', 'BlogController@editBlogCategory')->name('blogcategory.edit');
        //  Route::get('blog-category/store', 'BlogController@storeBlogCategory')->name('blogcategory.store');
         


         
        //  Route::resource('blog', 'BlogController');
         
        // // ### CallendarController ###
        // Route::resource('callendar', 'CallendarController');
         
        // // ### CommentController ###
        // Route::resource('comment', 'CommentController');

        // // ### ConfigurationController ###
        // Route::resource('configuration', 'ConfigurationController');

        // // ### CustomersController ###
        // Route::get('customer/history', 'CustomerController@history');
        // Route::get('customer/include-order', 'CustomerController@includeOrder');
        // Route::get('customer/notes', 'CustomerController@notes');
        // Route::get('customer/payments', 'CustomerController@payments');
        // Route::get('customer/scheduling','CustomerController@scheduling');

        // Route::resource('customer', 'CustomerController');
        
        
        // // Route::resource('customer', 'CustomerController');
        

        // // ### Financial Controller ### 
        // Route::resource('financial', 'FinancialController');

        // // ### MessageController ###
        // Route::resource('message', 'MessageController');

        // // ### PageController ###
        // Route::resource('page', 'PageController');

        

        // // ### PostController ###
        // Route::resource('post', 'PostController');
        
        // // ### ProductController ###
        // Route::resource('product', 'ProductController');
        // Route::get('productCategory','ProductController@CategoryIndex')->name('product.category.index');
        // Route::post('productCategory','ProductController@CategoryStore')->name('product.category.store');
        // Route::get('productCategory/create','ProductController@CategoryCreate')->name('product.category.create');
        // Route::get('productCategory/{category}/edit','ProductController@CategoryEdit')->name('product.category.edit');
        // Route::patch('productCategory/{category}','ProductController@CategoryUpdate')->name('product.category.update');
        // Route::delete('productCategory/{category}','ProductController@CategoryDestroy')->name('product.category.destroy');

        

        // // ### RoleController ###
        // Route::resource('role', 'RoleController');
        
        // // ### TrainerController ###
        // Route::resource('trainer', 'TrainerController');

        // // ### TestimonyController ###
        // Route::resource('testimony', 'TestimonyController');  

        // // ### UserController ###
        // Route::resource('/user', 'UserController');
        // Route::get('/notes', 'UserController@notes');

        
        

       
 
});













