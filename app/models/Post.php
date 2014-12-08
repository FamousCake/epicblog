<?php


class Post extends Eloquent
{
    protected $fillable = array('user_id', 'title', 'body', 'created_at', 'updated_at');
    protected $guarded = array('id');

}