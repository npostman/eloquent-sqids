<?php

namespace ErikSulymosi\EloquentSqids\Tests\Models;

use ErikSulymosi\EloquentSqids\Eloquent\Traits\HasSqid;
use ErikSulymosi\EloquentSqids\Eloquent\Traits\SqidRouting;
use Illuminate\Database\Eloquent\Model;

class ItemWithCustomSqidsConnection extends Model
{
    use HasSqid;
    use SqidRouting;

    protected $guarded = [];

    protected $table = 'items';

    public function getSqidsConnection()
    {
        return 'custom';
    }

    protected static function newFactory()
    {
        return new ItemWithCustomSqidsConnectionFactory();
    }
}
