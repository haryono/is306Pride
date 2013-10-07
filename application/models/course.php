<?php

class Course extends Eloquent 
{
	public function teams()
	{
		return $this->has_many('Team');
	}

	public function courseprofs()
	{
		return $this->has_many('Courseprof');
	}
}