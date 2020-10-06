<?php

namespace App\Models;

use A17\Twill\Models\Model;
use Illuminate\Support\Str;
use App\Models\TreatmentType;
use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasFiles;
use A17\Twill\Models\Behaviors\HasBlocks;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasRevisions;

class Page extends Model 
{
    use HasBlocks, HasSlug, HasMedias, HasFiles, HasRevisions;

    protected $fillable = [
        'published',
        'title',
        'description',
        'template',
        'slug'
    ];
    
    public $slugAttributes = [
        'title',
    ];
    
    public $mediasParams = [
        'cover' => [
            'desktop' => [
                [
                    'name' => 'desktop',
                    'ratio' => 16 / 9,
                ],
            ],
            'mobile' => [
                [
                    'name' => 'mobile',
                    'ratio' => 1,
                ],
            ],
            'flexible' => [
                [
                    'name' => 'free',
                    'ratio' => 0,
                ],
                [
                    'name' => 'landscape',
                    'ratio' => 16 / 9,
                ],
                [
                    'name' => 'portrait',
                    'ratio' => 3 / 5,
                ],
            ],
        ],
    ];

    public function sliders() 
    {
        return $this->morphMany(Slider::class, 'slideable');
    }

    public function treatments()
    {
        return $this->hasMany(Treatment::class);
    }

    public function treatmentsAesthetic()
    {
        return $this->hasMany(Treatment::class)->whereType(TreatmentType::AESTHETIC);
    }

    public function treatmentsSpecialized()
    {
        return $this->hasMany(Treatment::class)->where(TreatmentType::SPECIALIZED);
    }

    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::slug($value);
    }
}
