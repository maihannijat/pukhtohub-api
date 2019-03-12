<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TermVariation extends Model
{
    protected $table = 'term_variantions';
    public function term()
    {
        return $this->belongsTo('App\Models\Term', 'term_id');
    }
}