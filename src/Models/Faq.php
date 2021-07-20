<?php

namespace Rapidez\MagePrinceFaq\Models;

use Rapidez\Core\Models\Model;
use Rapidez\Core\Models\Scopes\IsActiveScope;

class Faq extends Model
{
    protected $table = 'prince_faq';

    protected $primaryKey = 'faq_id';

    protected static function booted()
    {
        static::addGlobalScope(new IsActiveScope('status'));
    }
}
