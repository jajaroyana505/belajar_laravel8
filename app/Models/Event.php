<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Alfa6661\AutoNumber\AutoNumberTrait;
use Illuminate\Support\Facades\DB;

class Event extends Model
{
    use HasFactory;
    use AutoNumberTrait;

    protected $guarded = ['id'];
    protected $with = ['category'];

    // protected $with = ['category'];


    public function category()
    {
        return $this->belongsTo(Event_Category::class, 'id_event_category');
    }

    public function getAutoNumberOptions()
    {
        $kode = [
            'code' => [
                'format' => function () {
                    return 'EV-' . date('Y') . '-' .
                        DB::table('event__categories')
                        ->where('id', $this->id_event_category)
                        ->select('code')
                        ->first()->code
                        . '-?';
                },
                'length' => 2,
            ]
        ];
        return $kode;
    }

    public function getRouteKeyName(): string
    {
        return 'code';
    }
}
