<?php

function flash($title, $message)
{
	//Grab out of the container
	$flash = app('App\Http\Flash');

	return $flash->message($title, $message);

}