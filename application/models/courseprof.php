<?php

class Courseprof extends Eloquent 
{
	public function course()
     {
          return $this->belongs_to('Course');
     }

 	public function prof()
	{
		return $this->belong_to('Courseprof');
	}   

}