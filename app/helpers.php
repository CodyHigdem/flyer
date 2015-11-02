<?php

function flash($message)
{
	//Grab out of the container
	$flash = app('App\Http\Flash');

	return $flash->message($message);

}