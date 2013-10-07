<?php

class Plan extends Eloquent 
{
	public function courses()
	{
		return $this->has_many('Course');
	}
}