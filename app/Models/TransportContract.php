<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Casts\Set;

class TransportContract extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $casts = [
        'contract_date'=>'datetime',
        'is_active'=>'boolean',
        'is_carriage_forward'=>'boolean',
        'is_rental'=>'boolean',
        'is_unknown'=>'boolean',
        'is_own'=>'boolean',
        'is_independent'=>'boolean',
        'is_fixed_cost_for_receiver'=>'boolean',
        'is_loading_cost_for_receiver'=>'boolean',
        'is_weighbridge_price_for_receiver'=>'boolean',
        'is_storage_cost_for_receiver'=>'boolean',
        'is_unloading_cost_for_receiver'=>'boolean',
        'is_online_cost_for_receiver'=>'boolean',
        'is_overload_cost_for_receiver'=>'boolean',
        'is_stamp_cost_for_receiver'=>'boolean',
        'is_overload_cost_for_receiver'=>'boolean',
        'is_sleep_cost_for_receiver'=>'boolean',
        'is_commission_for_receiver'=>'boolean',
        'is_excess_baggage_fee_receiver'=>'boolean',
        'is_insurance_cost_for_receiver'=>'boolean',
        'is_disintectant_cost_for_receiver'=>'boolean',
        'is_driver_insurance_cost_for_receiver'=>'boolean',
        'is_excess_baggage_fee_for_receiver'=>'boolean',
        'is_disinfectant_cost_for_receiver'=>'boolean',
        'is_tax_for_receiver'=>'boolean',
        'is_insurance_tax_for_receiver'=>'boolean',
        'fixed_cost_for_driver'=>Set::class,
        'loading_cost_for_driver'=>Set::class,
        'weighbridge_price_for_driver'=>Set::class,
        'storage_cost_for_driver'=>Set::class,
        'unloading_cost_for_driver'=>Set::class,
        'online_cost_for_driver'=>Set::class,
        'overload_cost_for_driver'=>Set::class,
        'stamp_cost_for_driver'=>Set::class,
        'sleep_cost_for_driver'=>Set::class,
        'commission_for_driver'=>Set::class,
        'excess_baggage_fee_for_driver'=>Set::class,
        'insurance_cost_for_driver'=>Set::class,
        'disinfectant_cost_for_driver'=>Set::class,
        'driver_insurance_cost_for_driver'=>Set::class,
        'tax_for_driver'=>Set::class,
        'insurance_tax_for_driver'=>Set::class,
        'is_default'=>'boolean'
    ];
}
