<?php

namespace Rapidez\MagePrinceFaq\Models;

use Rapidez\Core\Models\Model;
use Rapidez\Core\Models\Scopes\IsActiveScope;

class Group extends Model
{
    protected $table = 'prince_faqgroup';

    protected $primaryKey = 'faqgroup_id';

    protected static function booted()
    {
        static::addGlobalScope(new IsActiveScope('status'));
    }

    public function faqs()
    {
        return $this->hasMany(Faq::class, 'group');
    }
}
