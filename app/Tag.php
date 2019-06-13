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
    class Tag extends Model
    {
        protected $fillable = ['tagName', 'tagId'];
    }
