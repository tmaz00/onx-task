<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

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
