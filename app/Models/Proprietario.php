<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Endereco;

class Proprietario extends Model
{
    use HasFactory;
    protected $fillable = ['nome', 'cpf', 'telefone', 'email'];

    public function propCasas()
    {
        return $this->hasMany(Endereco::class);
    }
}
