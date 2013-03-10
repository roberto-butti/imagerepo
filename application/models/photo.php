<?php

class Photo extends Eloquent
{
    public function author()
    {
        return $this->belongs_to('User', 'author_id');
    }
    
}