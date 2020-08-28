<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class supplierAccessToken extends Model
{
    protected $this = 'supplierAccessTokens';
    protected $fillable = ['supplier_id', 'token_type', 'expires_in', 'access_token', 'expiring_date', 'is_valid' ];

}
