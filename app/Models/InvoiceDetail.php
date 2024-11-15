<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InvoiceDetail extends Model
{
    protected $fillable = [
        'lineNo',
        'productName',
        'unitNo',
        'price'
    ];
}
