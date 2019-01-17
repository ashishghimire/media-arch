<?php
Route::group([

	'namespace' => 'CMS',
], function () {

	Route::get('portfolio', 'PortfolioController@index')->name('index');
	Route::get('portfolio/create', 'PortfolioController@create')->name('portfolio.create');
	Route::post('portfolio/store', 'PortfolioController@store')->name('portfolio.store');
	Route::get('portfolio/{id}/edit', 'PortfolioController@edit')->name('portfolio.edit');
	Route::delete('portfolio/{id}/delete', 'PortfolioController@delete')->name('portfolio.delete');
	Route::patch('portfolio/{id}', 'PortfolioController@update')->name('portfolio.update');
	Route::get('portfolio/{id}', 'PortfolioController@show');

});