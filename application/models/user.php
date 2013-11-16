<?php

class User extends Eloquent 
{
	public function photos()
	{
		return $this->has_many('Photo');
	}
	
	public function plans(){
		return $this->has_many('Plan');
	}

}