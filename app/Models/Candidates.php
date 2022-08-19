<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidates extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = ['candidate_id','candidate_name', 'address', 'city', 'state','zip_code','country','mobile_no','candidate_email','tax_file_number','abn_number','own_vehicle','visa_status','fin_name','fin_mobile','relationship_name','fin_address','account_name','institution','account_number','account_bsb','fund_details'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'candidate_name'    => 'string',
        'address'           => 'string',
        'city'              => 'string',
        'state'             => 'string',
        'zip_code'          => 'string',
        'country'           => 'string',
        'mobile_no'         => 'string',
        'candidate_email'   => 'string',
        'tax_file_number'   => 'string',
        'abn_number'        => 'string',
        'own_vehicle'       => 'string',
        'visa_status'       => 'string',
        'fin_name'          => 'string',
        'fin_mobile'        => 'string',
        'relationship_name' => 'string',
        'fin_address'       => 'string',
        'account_name'      => 'string',
        'institution'       => 'string',
        'account_number'    => 'string',
        'account_bsb'       => 'string',
        'fund_details'      => 'string'
    ];
}
