<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TopicAdd extends Model
{
    use HasFactory;
    protected $table = 'topic_help'; // Ubah "nama_tabel_anda" sesuai dengan nama tabel yang Anda gunakan (opsional).

    protected $fillable = ['name']; // Tambahkan atribut yang dapat diisi saat membuat instance model.
}
