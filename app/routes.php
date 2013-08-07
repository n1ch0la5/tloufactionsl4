<?php

Route::get('/', function()
{
	return View::make('home');
});

Route::get('/loadout-builder', function()
{
	return View::make('loadout_builder');
});