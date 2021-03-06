<?php

use Illuminate\Support\Facades\Route;

// Аутентификация
Route::post('login', 'Auth\LoginController@login');
Route::post('register', 'Auth\UserController@register');
//Route::post('register', 'Auth\RegisterController@create');

Route::group([ 'middleware' => 'auth:api' ], function() {

    Route::get('logout', 'LoginController@logout');
    Route::get('user', 'UserController@getUser');

    /**
     * Модули
     */
    Route::get('modules', 'ModuleController@getModules');
    Route::get('all_modules', 'ModuleController@getAllModules');

    /**
     * Редактор контрагентов
     */
    Route::prefix('/manager/contractor')->namespace('Manager')->group(function () {
        Route::get('/', 'ContractorController@getAll');
        Route::get('/{id}', 'ContractorController@getById');
        Route::put('/{id}', 'ContractorController@update');
        Route::post('/', 'ContractorController@create');
        Route::delete('/{id}', 'ContractorController@delete');
        Route::get('/{id}/attach/module/{module_id}', 'ContractorController@attachModule');
        Route::get('/{id}/detach/module/{module_id}', 'ContractorController@detachModule');
    });

    /**
     * Редактор пользователей контрагента
     */
    Route::prefix('/manager/user')->group(function () {
        Route::get('/{contractor_id}', 'UserController@getAllByContractor');
        Route::put('/', 'UserController@update');
        Route::post('/', 'UserController@create');
        Route::delete('/{id}', 'UserController@delete');
    });

    /**
     * Редактор модулей
     */
    Route::prefix('/manager/module')->namespace('Manager')->group(function () {
        Route::get('/', 'ModuleController@getAll');
        Route::put('/{id}', 'ModuleController@update');
        Route::post('/', 'ModuleController@create');
        Route::delete('/{id}', 'ModuleController@delete');
    });
    /**
     * Редактор слоев
     */
    Route::prefix('/manager/layer')->namespace('Manager')->group(function () {
        Route::get('/', 'LayerController@getAll');
        Route::get('/{id}', 'LayerController@getById');
        Route::put('/{id}', 'LayerController@update');
        Route::post('/', 'LayerController@create');
        Route::delete('/{id}', 'LayerController@delete');
    });

    /**
     * Редактор состава слоя
     */
    Route::prefix('/manager/composition')->namespace('Manager')->group(function () {
        Route::get('/{layerId}', 'LayerCompositionController@getAll');
        Route::put('/{id}', 'LayerCompositionController@update');
        Route::post('/', 'LayerCompositionController@create');
        Route::delete('/{id}', 'LayerCompositionController@delete');
        Route::post('/upload', 'LayerCompositionController@uploadIcon');
    });

    /**
     * Редактор элементов слоя
     */
    Route::prefix('/manager/element')->namespace('Manager')->group(function () {
        Route::get('/layer/{layerId}', 'ElementController@getAll');
        Route::get('/{id}', 'ElementController@getById');
        Route::put('/{id}', 'ElementController@update');
        Route::post('/', 'ElementController@create');
        Route::delete('/{id}', 'ElementController@delete');
    });

    /**
     * Редактор геометрии элемента
     */
    Route::prefix('/manager/geometry')->namespace('Manager')->group(function () {
        Route::get('/{elementId}', 'GeometryController@getAll');
        Route::put('/{type}/{id}', 'GeometryController@update');
        Route::post('/{type}/', 'GeometryController@create');
        Route::delete('/{type}/{id}', 'GeometryController@delete');
    });

    /**
     * GIS-редактор
     */
    Route::prefix('/gis')->namespace('Gis')->group(function () {
        Route::get('/layer/contractor', 'LayerController@getAllToContractor');
        Route::get('/compositions/contractor', 'LayerCompositionController@getAllToContractor');
        Route::post('/element', 'ElementController@create');
        Route::put('/element/{id}', 'ElementController@update');
        Route::delete('/element/{id}', 'ElementController@delete');
        Route::post('/geometry/{type}', 'GeometryController@create');
        Route::put('/geometry/{type}/{id}', 'GeometryController@update');
        Route::delete('/geometry/{type}/{id}', 'GeometryController@delete');
    });

});

/**
 * GIS
 */
Route::prefix('/gis')->namespace('Gis')->group(function () {
    Route::get('/layer', 'LayerController@getAll');
    Route::get('/compositions', 'LayerCompositionController@getAll');
    Route::get('/element/geometries/{id}', 'GeometryController@getByElementId');
    Route::get('/layer/geometries/{id}', 'GeometryController@getByLayerId');
});



Route::post('/constructor/constructor_create', 'Constructor\ConstructorController@createTable');
Route::post('/constructor/constructor_update', 'Constructor\ConstructorController@updateTable');
Route::post('/constructor/constructor_drop', 'Constructor\ConstructorController@dropTable');
Route::post('/constructor/drop_column', 'Constructor\ConstructorController@dropColumn');
Route::get('/constructor/get_specific_type/{type}', 'Constructor\ConstructorController@getSpecificType');
Route::get('/constructor/get_table_info/{identifier}', 'Constructor\ConstructorController@getTableInfo');
Route::get('/constructor/is_table_exists/{identifier}', 'Constructor\ConstructorController@isTableExists');

Route::get('/additional_data/get_additional_data/{element_id}/{layer_id}', 'Constructor\AdditionalInfoController@getData');
