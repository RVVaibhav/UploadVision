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
    return redirect('login');
});

Auth::routes();


Route::middleware('auth')->group(function() {

    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/', 'HomeController@index');

    Route::resource('algorithms', 'AlgorithmController');
    Route::get('algorithms/users/{level_id}', 'AlgorithmController@getAlgorithmUser');
    Route::post('addrole', 'AlgorithmController@addRole');
    Route::post('addrole/{id}/edit', 'AlgorithmController@editRole');
    Route::post('level/slideuser', 'AlgorithmController@addSlideuser');
    Route::resource('test', 'TestController');
    Route::resource('headers', 'HeadersController');
    Route::resource('vedio', 'VedioAddController');
    Route::resource('quiz', 'QuizController');
    Route::resource('testQuiz', 'TestQuestionController');
    Route::resource('category', 'CategoriesController');
    Route::resource('reading', 'ReadingStuffController');
    Route::resource('study', 'StudyTipsController');
    Route::resource('datauploads', 'DataUploadsController');
    Route::resource('users', 'UserController');
    Route::post('/stores', 'UserController@stores')->name('stores');
    Route::put('edit/{id}', 'UserController@updateStudent');
    Route::delete('users/{id}', 'UserController@destroy');




    Route::get('import-export-csv-excel',array('as'=>'excel.import','uses'=>'DataUploadsController@importExportExcelORCSV'));
    Route::post('import-csv-excel',array('as'=>'import-csv-excel','uses'=>'DataUploadsController@importFileIntoDB'));
    Route::get('download-excel-file/{type}', array('as'=>'excel-file','uses'=>'DataUploadsController@downloadExcelFile'));
    Route::put('testQues/{id}', 'TestQuestionController@update');
    Route::post('file-upload', 'DataUploadsController@fileUploadPost')->name('file.upload.post');
    Route::post('test-upload', 'DataUploadsController@testUploadPost')->name('test.upload.post');
    Route::get('show', 'DataUploadsController@show');

    Route::get('word-export', 'DataUploadsController@wordExport');



    Route::resource('subscribe', 'SubscribeController');
    Route::resource('result', 'ResultController');
    Route::delete('headers/{id}', 'HeadersController@destroy');
    Route::put('headers/{id}', 'HeadersController@update');
    Route::get('myform/ajax_state/{id}',array('as'=>'myform.ajax','uses'=>'UserController@myformAjax'));
    Route::get('myform/ajax/{id}',array('as'=>'myform.ajax','uses'=>'TestController@myformAjax'));
    Route::get('myform/ajaxs/{id}',array('as'=>'myform.ajax','uses'=>'TestController@myformAjaxs'));
    Route::get('/myform/ajax_test/{id}',array('as'=>'myform.ajax','uses'=>'TestQuestionController@myformAjax_test'));
    Route::resource('userposts', 'PostController');
    Route::resource('chat', 'ChatController');
    Route::resource('products', 'ProductsController', ['only' => ['index']]);

    Route::get('products/gift', 'ProductsController@gift');
    Route::post('products/gift', 'ProductsController@addGift');
    Route::post('products/gift/{id}', 'ProductsController@editGift');
    Route::delete('products/gift/{id}', 'ProductsController@deleteGift');

    Route::get('products/coin-center', 'ProductsController@coinCenter');
    Route::post('products/coin-center/{id}', 'ProductsController@editcoinCenter');

    Route::get('products/secret-chat', 'ProductsController@secretChat');
    Route::post('products/secret-chat/{id}', 'ProductsController@editSecretChat');

    Route::get('products/convert-coin', 'ProductsController@convertConin');
    Route::post('products/convert-coin/{id}', 'ProductsController@editConvertCoin');

    Route::get('products/call-rate', 'ProductsController@callRate');
    Route::post('products/call-rate/{id}', 'ProductsController@editCallRate');


});
