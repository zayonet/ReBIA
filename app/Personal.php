<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
     protected $fillable = [
                'name', 
                'surname', 
                'identity', 
                'birthday', 
                'country',
                'province',  
                'county', 
                'telemovel', 
                'address', 
                'facebook', 
                'tweet', 
                'linkedin',
            ];
    
    protected $table = 'informations';
    
    public function user()
    {
        return $this->belongsTO(User::class); // caso vc tiver um outro id na tabela entao vc pode marcar desse jeito $this->belongsTO(User::class, 'user_id); tanto faz tambem la no modal User
    }
}
