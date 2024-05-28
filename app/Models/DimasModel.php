<?php 
namespace App\Models;

use CodeIgniter\Model;

class DimasModel extends Model
{
    protected $table = 'isi';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'ttl', 'alamat', 'email', 'hp'];
}