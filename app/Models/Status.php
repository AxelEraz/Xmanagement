<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    public function shipments()
    {
        return $this->hasMany(Shipment::class);
    }

    public static function getCount()
    {
        return Shipment::query()
            ->selectRaw("count(*) as all_statuses")
            ->selectRaw("count(case when status_id = 1 then 1 end) as colectar")
            ->selectRaw("count(case when status_id = 2 then 1 end) as en_planta")
            ->selectRaw("count(case when status_id = 3 then 1 end) as en_reparto")
            ->selectRaw("count(case when status_id = 4 then 1 end) as no_entregado")
            ->selectRaw("count(case when status_id = 5 then 1 end) as entregado")
            ->first()
            ->toArray();
    }
}
