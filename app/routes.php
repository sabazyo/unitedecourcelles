<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::pattern('section', '[a-z]+');
Route::pattern('id', '[0-9]+');

Route::when('*', 'csrf', ['post', 'put', 'delete']);

Route::filter('ajax', function()
{
    if (!Request::ajax()) App::abort(403);
});

/*
 *  LOGIN
 */
Route::get('/admin/login', ['uses' => 'LoginBaseController@login', 'as' => 'admin.login']);


/*
 *  Admin
 */
Route::get('/admin', ['uses' => 'BaseAdminController@dashboard', 'as' => 'admin.index']);
Route::get('/admin/dashboard', ['uses' => 'BaseAdminController@dashboard', 'as' => 'admin.dashboard']);

// sections
Route::get('/admin/sections', ['uses' => 'AdminSectionsController@index', 'as' => 'admin.sections']);

Route::post('/admin/sections/create', ['before' => 'ajax', 'uses' => 'AdminSectionsController@create', 'as' => 'admin.sections.create']);
Route::post('/admin/sections/{id}/edit', ['before' => 'ajax', 'uses' => 'AdminSectionsController@edit', 'as' => 'admin.sections.edit']);
Route::get('/admin/sections/{id}/destroy', ['before' => 'ajax', 'uses' => 'AdminSectionsController@destroy', 'as' => 'admin.sections.destroy']);
Route::get('/admin/sections/{id}/enable', ['before' => 'ajax', 'uses' => 'AdminSectionsController@enable', 'as' => 'admin.sections.enable']);
Route::get('/admin/sections/{id}/disable', ['before' => 'ajax', 'uses' => 'AdminSectionsController@disable', 'as' => 'admin.sections.disable']);


Route::post('/admin/{section}/documents/new', ['uses' => 'AdminSectionController@new_document', 'as' => 'admin.section.documents.new_document']);

Route::get('/admin/{section}/documents', ['uses' => 'AdminSectionController@documents', 'as' => 'admin.section.documents']);

