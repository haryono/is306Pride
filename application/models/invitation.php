<?php

class Invitation extends Eloquent 
{
	public function users()
	{
		return $this->belongs_to('User');
	}
}