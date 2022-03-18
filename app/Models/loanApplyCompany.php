<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loanApplyCompany extends Model
{
    use HasFactory;

    public function loan()
    {
        return $this->belongsTo(loan::class);
    }
    public function comment()
    {
        return $this->hasMany(loanCompanyComment::class,'loan_apply_id');
    }

    public function document()
    {
        return $this->hasMany(loanCompanyDocument::class,'loan_apply_id');
    }
}
