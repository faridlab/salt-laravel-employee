<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

$version = config('app.API_VERSION', 'v1');

Route::namespace('SaltEmployee\Controllers')
    ->middleware(['api'])
    ->prefix("api/{$version}")
    ->group(function () {

    // API: RELIGIONS
    Route::get("religions", 'ApiEmployeeResourcesController@index'); // get entire collection
    Route::post("religions", 'ApiEmployeeResourcesController@store'); // create new collection

    Route::get("religions/trash", 'ApiEmployeeResourcesController@trash'); // trash of collection

    Route::post("religions/import", 'ApiEmployeeResourcesController@import'); // import collection from external
    Route::post("religions/export", 'ApiEmployeeResourcesController@export'); // export entire collection
    Route::get("religions/report", 'ApiEmployeeResourcesController@report'); // report collection

    Route::get("religions/{id}/trashed", 'ApiEmployeeResourcesController@trashed')->where('id', '[a-zA-Z0-9-]+'); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("religions/{id}/restore", 'ApiEmployeeResourcesController@restore')->where('id', '[a-zA-Z0-9-]+'); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("religions/{id}/delete", 'ApiEmployeeResourcesController@delete')->where('id', '[a-zA-Z0-9-]+'); // hard delete collection by ID

    Route::get("religions/{id}", 'ApiEmployeeResourcesController@show')->where('id', '[a-zA-Z0-9-]+'); // get collection by ID
    Route::put("religions/{id}", 'ApiEmployeeResourcesController@update')->where('id', '[a-zA-Z0-9-]+'); // update collection by ID
    Route::patch("religions/{id}", 'ApiEmployeeResourcesController@patch')->where('id', '[a-zA-Z0-9-]+'); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("religions/{id}", 'ApiEmployeeResourcesController@destroy')->where('id', '[a-zA-Z0-9-]+'); // soft delete a collection by ID


    // API: EMPLOYEES
    Route::get("employees", 'ApiEmployeeResourcesController@index'); // get entire collection
    Route::post("employees", 'ApiEmployeeResourcesController@store'); // create new collection

    Route::get("employees/trash", 'ApiEmployeeResourcesController@trash'); // trash of collection

    Route::post("employees/import", 'ApiEmployeeResourcesController@import'); // import collection from external
    Route::post("employees/export", 'ApiEmployeeResourcesController@export'); // export entire collection
    Route::get("employees/report", 'ApiEmployeeResourcesController@report'); // report collection

    Route::get("employees/{id}/trashed", 'ApiEmployeeResourcesController@trashed')->where('id', '[a-zA-Z0-9-]+'); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("employees/{id}/restore", 'ApiEmployeeResourcesController@restore')->where('id', '[a-zA-Z0-9-]+'); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("employees/{id}/delete", 'ApiEmployeeResourcesController@delete')->where('id', '[a-zA-Z0-9-]+'); // hard delete collection by ID

    Route::get("employees/{id}", 'ApiEmployeeResourcesController@show')->where('id', '[a-zA-Z0-9-]+'); // get collection by ID
    Route::put("employees/{id}", 'ApiEmployeeResourcesController@update')->where('id', '[a-zA-Z0-9-]+'); // update collection by ID
    Route::patch("employees/{id}", 'ApiEmployeeResourcesController@patch')->where('id', '[a-zA-Z0-9-]+'); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("employees/{id}", 'ApiEmployeeResourcesController@destroy')->where('id', '[a-zA-Z0-9-]+'); // soft delete a collection by ID


    // API: EMPLOYEES IDENTITIES
    Route::get("employee_identities", 'ApiEmployeeResourcesController@index'); // get entire collection
    Route::post("employee_identities", 'ApiEmployeeResourcesController@store'); // create new collection

    Route::get("employee_identities/trash", 'ApiEmployeeResourcesController@trash'); // trash of collection

    Route::post("employee_identities/import", 'ApiEmployeeResourcesController@import'); // import collection from external
    Route::post("employee_identities/export", 'ApiEmployeeResourcesController@export'); // export entire collection
    Route::get("employee_identities/report", 'ApiEmployeeResourcesController@report'); // report collection

    Route::get("employee_identities/{id}/trashed", 'ApiEmployeeResourcesController@trashed')->where('id', '[a-zA-Z0-9-]+'); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("employee_identities/{id}/restore", 'ApiEmployeeResourcesController@restore')->where('id', '[a-zA-Z0-9-]+'); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("employee_identities/{id}/delete", 'ApiEmployeeResourcesController@delete')->where('id', '[a-zA-Z0-9-]+'); // hard delete collection by ID

    Route::get("employee_identities/{id}", 'ApiEmployeeResourcesController@show')->where('id', '[a-zA-Z0-9-]+'); // get collection by ID
    Route::put("employee_identities/{id}", 'ApiEmployeeResourcesController@update')->where('id', '[a-zA-Z0-9-]+'); // update collection by ID
    Route::patch("employee_identities/{id}", 'ApiEmployeeResourcesController@patch')->where('id', '[a-zA-Z0-9-]+'); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("employee_identities/{id}", 'ApiEmployeeResourcesController@destroy')->where('id', '[a-zA-Z0-9-]+'); // soft delete a collection by ID


    // API: EMPLOYMENTS
    Route::get("employments", 'ApiEmployeeResourcesController@index'); // get entire collection
    Route::post("employments", 'ApiEmployeeResourcesController@store'); // create new collection

    Route::get("employments/trash", 'ApiEmployeeResourcesController@trash'); // trash of collection

    Route::post("employments/import", 'ApiEmployeeResourcesController@import'); // import collection from external
    Route::post("employments/export", 'ApiEmployeeResourcesController@export'); // export entire collection
    Route::get("employments/report", 'ApiEmployeeResourcesController@report'); // report collection

    Route::get("employments/{id}/trashed", 'ApiEmployeeResourcesController@trashed')->where('id', '[a-zA-Z0-9-]+'); // get collection by ID from trash

    // RESTORE data by ID (id), selected IDs (selected), and All data (all)
    Route::post("employments/{id}/restore", 'ApiEmployeeResourcesController@restore')->where('id', '[a-zA-Z0-9-]+'); // restore collection by ID

    // DELETE data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("employments/{id}/delete", 'ApiEmployeeResourcesController@delete')->where('id', '[a-zA-Z0-9-]+'); // hard delete collection by ID

    Route::get("employments/{id}", 'ApiEmployeeResourcesController@show')->where('id', '[a-zA-Z0-9-]+'); // get collection by ID
    Route::put("employments/{id}", 'ApiEmployeeResourcesController@update')->where('id', '[a-zA-Z0-9-]+'); // update collection by ID
    Route::patch("employments/{id}", 'ApiEmployeeResourcesController@patch')->where('id', '[a-zA-Z0-9-]+'); // patch collection by ID
    // DESTROY data by ID (id), selected IDs (selected), and All data (all)
    Route::delete("employments/{id}", 'ApiEmployeeResourcesController@destroy')->where('id', '[a-zA-Z0-9-]+'); // soft delete a collection by ID

});
