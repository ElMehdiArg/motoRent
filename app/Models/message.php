<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

/**
 * @property integer $id_message
 * @property string $email
 * @property string $message_txt
 */
class message extends Model
{
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_message';
    public $timestamps = false;

    /**
     * @var array
     */
    protected $fillable = ['fullName','email', 'message_txt'];

    // public static function boot() {
  
    //     parent::boot();
  
    //     static::created(function ($item) {
                
    //         $adminEmail = "mehdi.argab@gmail.com";
    //         Mail::to($adminEmail)->send(new ContactMail($item));
    //     });
    // }
}
