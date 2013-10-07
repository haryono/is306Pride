<?php

class Team extends Eloquent 
{
	public function course()
     {
          return $this->belongs_to('Course');
     }

}