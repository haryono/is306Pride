<?php

class Plan extends Eloquent 
{
	public function courses()
	{
		return $this->has_many('Course');
	}
	public function users(){
		return $this->belongs_to('User');
	}
	public function team(){
		return $this->has_one('Team');
	}
}