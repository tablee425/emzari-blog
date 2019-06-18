<?php
    
    namespace App;
    
    use Illuminate\Database\Eloquent\Model;
    
    /**
     * @property mixed id
     * @property string strip_description
     * @property string description
     * @property string image
     * @property mixed title
     */
    class Comment extends Model
    {
        protected $fillable = ['post_id', 'auth', 'name', 'email', 'comment'];
    }
