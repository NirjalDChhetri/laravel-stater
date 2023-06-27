<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Tests\Integration\Http\Models\Post;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        "address",
        "class"
    ];

    public function post() {
        return $this->hasOne(Student::class);
    }
}
