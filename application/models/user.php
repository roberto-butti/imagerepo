<?php

class User extends Eloquent {
  public function photos()
  {
    return $this->has_many('Photo');
  }

}