<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MUserDetail extends Model
{
    use HasFactory;

    protected $table        = 'users_details';
    protected $primaryKey   = 'id';
    protected $fillable     = ['nomor_telfon'];

    public function getCreateAttribute(){
        return Carbon::parse($this->attributes['tanggal_lahir'])
            ->translatedFormat('l, d F Y');
    }
}
