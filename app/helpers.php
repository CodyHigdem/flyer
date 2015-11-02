<?php

function flash($title = null, $message = null)
{
	//Grab out of the container
	$flash = app('App\Http\Flash');

	if (func_num_args() == 0){
		return $flash;
	}
	return $flash->info($title, $message);

}