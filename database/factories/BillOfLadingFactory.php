<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\Driver;
use App\Models\SenderReceiver;
use App\Models\Vehicle;
use Illuminate\Database\Eloquent\Factories\Factory;
use Ybazli\Faker\Facades\Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BillOfLading>
 */
class BillOfLadingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $sender =fake()->randomElement(SenderReceiver::where('status','!=',1)->get());
        $receiver =fake()->randomElement(SenderReceiver::where('status','!=',0)->get());
        $first_driver = fake()->randomElement(Driver::all());
        $second_driver = fake()->randomElement(Driver::all());
        $vehicle = fake()->randomElement(Vehicle::all());
        $warehouse_type_title = ['سرد خانه','انبار نفت','گمرک','سایر'];
        return [
            'panel_code'=>Company::find(rand(1,20))->panel_code,
            'bill_of_lading_number'=>fake()->numerify('########'),
            'bill_of_lading_serial'=>fake()->numerify('########'),
            'draft_number'=>fake()->numerify('########'),
            'draft_serial'=>fake()->numerify('########'),
            'overburden'=>fake()->numberBetween(0,1),
            'estimate_receive_date'=>fake()->iso8601(),
            'warehouse_code'=>fake()->numerify('########'),
            'warehouse_type_code'=>fake()->numerify('#########'),
            'warehouse_type_title'=>fake()->randomElement($warehouse_type_title),
            'warehouse_fee'=>getRandomCost(6),
            'loading_code'=>fake()->numerify('#########'),
            'description'=>Faker::paragraph(),
            'scale_fee'=>getRandomCost(7),
            'sleep_fee'=>getRandomCost(5),
            'insurance_tax'=>getRandomCost(4),
            'insurance_fee'=>getRandomCost(5),
            'overload_fee'=>getRandomCost(6),
            'commission'=>getRandomCost(7),
            'advance_freight'=>getRandomCost(6),
            'add_valorem_tax'=>getRandomCost(4),
            'unload_fee'=>getRandomCost(5),
            'terminal_fee'=>getRandomCost(4),
            'cost'=>getRandomCost(9),
            'driver_insurance_fee'=>getRandomCost(5),
            'freight_collect'=>getRandomCost(7),
            'freight_insurance'=>getRandomCost(5),
            'fixed_cost'=>getRandomCost(8),
            'sender_national_code'=>$sender->national_code,
            'sender_postal_code'=>$sender->postal_code,
            'sender_economic_code'=>$sender->economic_code,
            'sender_fullname'=>$sender->name .' '.$sender->last_name,
            'sender_city'=>Faker::city(),
            'sender_phones'=>$sender->mobile,
            'sender_address'=>$sender->address,
            'receiver_national_code'=>$receiver->national_code,
            'receiver_postal_code'=>$receiver->postal_code,
            'receiver_economic_code'=>$receiver->economic_code,
            'receiver_fullname'=>$receiver->name .' '. $receiver->last_name,
            'receiver_city'=>Faker::city(),
            'receiver_phones'=>$receiver->mobile,
            'receiver_address'=>$receiver->address,
            'first_driver_fullname'=>$first_driver->name.' '.$first_driver->last_name,
            'first_driver_national_code'=>$first_driver->national_code,
            'first_driver_smart_number'=>$first_driver->smart_number,
            'first_driver_health_card_expire'=>$first_driver->health_card_expire,
            'first_driver_phones'=>$first_driver->phones,
            'second_driver_fullname'=>$second_driver->name.' '. $second_driver->last_name,
            'second_driver_national_code'=>$second_driver->national_code,
            'second_driver_smart_number'=>$second_driver->smart_number,
            'second_driver_health_card_expire'=>$second_driver->health_card_expire,
            'second_driver_phones'=>$second_driver->phones,
            'vehicle_smart_number'=>$vehicle->smart_number,
            'vehicle_number_plate'=>$vehicle->number_plate,
            'vehicle_number_plate_zone'=>$vehicle->number_plate_zone,
            'vehicle_insurance_expire'=>$vehicle->insurance_expire,
            'vehicle_inspection_expire'=>$vehicle->inspection_expire,
            'vehicle_brand_title'=>$vehicle->brand_title,
            'vehicle_loading_type'=>$vehicle->loading_type,
            'vehicle_status'=>$vehicle->status,




        ];
    }



}
