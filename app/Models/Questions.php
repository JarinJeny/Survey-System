<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    use HasFactory;
    protected $fillable = ['question', 'survey_id'];

    public function survey_creates()
    {
        return $this->belongsTo(SurveyCreate::class);
    }

}
