<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peralatan extends Model
{
    use HasFactory;

    // Jika nama table bukan ejaan plural
    // atau nama yang tak sama dengan model
    // define nama table yang model ini perlu berhubung
    protected $table = 'peralatan';

    protected $fillable = [
        'nama_peralatan',
        'nama_pembekal',
        'nama_jenama',
        'status',
        'user_id',
        'submission_id',
        'tarikh_pendaftaran'
    ];

    // Contoh relation diantara table peralatan dengan table users
    public function rekodPendaftar()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
