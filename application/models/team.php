<?php

class Team extends Eloquent 
{
	public function course()
     {
          return $this->belongs_to('Course');
     }
     public function plan()
     {
          return $this->has_one('Plan');
     }

}