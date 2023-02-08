<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;


    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'updated_date';
    
    protected $name = 'name';
    protected $surname = 'surname';
    protected $email = 'email';
    protected $phone = 'phone_num';

    /**
     * Table associated with the model.
     * 
     * @var string
     */
    protected $table = 'clients';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = ['name', 'surname', 'email', 'phone_num'];
}
