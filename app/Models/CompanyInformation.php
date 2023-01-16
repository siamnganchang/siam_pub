<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyInformation extends Model
{
    use HasFactory;
    protected $table = 'company_informations';
    protected $fillable = ['name', 'capital', 'juristic_person_type', 'business_type', 'target', 'registration_number', 'address', 'phone', 'email', 'url_dbd'];
}
