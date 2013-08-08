<?php

Route::get('/', function()
{
	return View::make('home');
});

Route::get('loadout-builder', function()
{
	//$weapons = DB::select('select * from weapons w, weapon_info wi  where w.id = wi.weapon_id');

	$weapons = Cache::remember('weapons', 60, function()
	{
	    return DB::select('select * from weapons w, weapon_info wi  where w.id = wi.weapon_id');
	});

	return View::make('loadout_builder')->with('weapons', $weapons);
});