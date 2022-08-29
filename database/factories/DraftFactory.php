<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\Driver;
use App\Models\SenderReciver;
use App\Models\Vehicle;
use Illuminate\Database\Eloquent\Factories\Factory;
use Ybazli\Faker\Facades\Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Draft>
 */
class DraftFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $sender =fake()->randomElement(SenderReciver::where('status','!=',1)->get());
        $receiver =fake()->randomElement(SenderReciver::where('status','!=',0)->get());
        $cargoes = ['اثایه منزل','سوسیس و کالباس','لبنیات','کاشی','شیرآلات'];
        $first_driver = fake()->randomElement(Driver::all());
        $second_driver = fake()->randomElement(Driver::all());
        $vehicle = fake()->randomElement(Vehicle::all());
        $status_code = fake()->numberBetween(0,1);
        $status_titles = ['رد شده','تایید شده'];
        return [
            'panel_code'=>Company::find(rand(1,20))->panel_code,
            'draft_number'=>fake()->numerify('########'),
            'cargo_declaration_number'=>fake()->numerify('########'),
            'licence_number'=>fake()->numerify('########'),
            'cargo_code'=>fake()->numerify('#########'),
            'cargo_title'=>fake()->randomElement($cargoes),
            'packing_code'=>fake()->numerify('#########'),
            'packing_title'=>'تست',
            'description'=>Faker::paragraph(),
            'weight'=>fake()->numberBetween(1000,30000),
            'quantity'=>fake()->numberBetween(1000,3000),
            'value'=>fake()->numberBetween(10000000,100000000000),
            'owner'=>Faker::firstName().' '.Faker::lastName(),
            'location_loading'=>Faker::city(),
            'traffic'=>fake()->numberBetween(0,1),
            'incendiary'=>fake()->numberBetween(0,1),
            'traffic_zone'=>fake()->numberBetween(0,1),
            'remained_order'=>fake()->numberBetween(0,30),
            'remained_cortex'=>fake()->numberBetween(0,30),
            'freight_charges'=>fake()->numerify('#0000000000'),
            'hub_code'=>fake()->numerify('############'),
            'status_code'=>$status_code,
            'status_title'=>$status_titles[$status_code],
            'is_local_cancel'=>fake()->numberBetween(0,1),
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
            'second_driver_smart_number'=>$second_driver->smart_code,
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
