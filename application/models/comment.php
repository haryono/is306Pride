<?php

class Comment extends Eloquent 
{
	public function users()
	{
		return $this->belongs_to('User');
	}

	public function courses()
	{
		return $this->belongs_to('Course');
	}
}