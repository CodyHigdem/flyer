<?php

namespace App\Http;

class Flash {

	public function message($title, $message)
	{
		return session()->flash('flash_message', [
			'title'		=>$title,
			'message' 	=> $message
		]);
	}
}

//$flash->message('hello there')

//$flash->error('')
//$flash->aside
//$flash->overlay()
//$flash->success