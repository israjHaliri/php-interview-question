<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', ['as' => '/', 'uses' => 'TestingController@index']);
Route::get('load', ['as' => 'load', 'uses' => 'TestingController@load']);
Route::post('insert', ['as' => 'insert', 'uses' => 'TestingController@insert']);

Route::get('/api/users/{id?}', [function($id = null) 
{
    if ($id == null) 
    {
        $users = App\User::all(array('uuid', 'nama', 'alamat'));
    } 
    else 
    {
        $users = App\User::find($id, array('uuid', 'nama', 'alamat'));
    }
    return Response::json(array(
        'error' => false,
        'users' => $users,
        'status_code' => 200
    ));
}]);