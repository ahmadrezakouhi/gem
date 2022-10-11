<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\Driver;
use App\Models\Insurance;
use App\Models\SenderReceiver;
use App\Models\TransportContract;
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
        $insurance = Insurance::inRandomOrder()->first();
        $transport_contract = TransportContract::inRandomOrder()->first();
        return [
            'panel_code'=>Company::inRandomOrder()->first()->panel_code,
            'bill_of_lading_number'=>fake()->numerify('########'),
            'bill_of_lading_serial'=>fake()->numerify('####/##'),
            'draft_number'=>fake()->numerify('########'),
            'draft_serial'=>fake()->numerify('########'),
            'overburden'=>fake()->boolean(),
            'estimate_receive_date'=>fake()->iso8601(),
            'storage_code'=>fake()->numerify('########'),
            'storage_type_code'=>fake()->numerify('#########'),
            'storage_type_title'=>faker::word(),
            'storage_cost'=>getRandomCost(6),
            'loading_code'=>fake()->numerify('#########'),
            'loading_cost'=>getRandomCost(6),
            'description'=>Faker::paragraph(),
            'sc_cargo_title'=>Faker::word(),
            'sc_cargo_weight'=>fake()->randomDigitNotZero()*pow(10,3),
            'sc_cargo_quantity'=>fake()->randomNumber(1,100),
            'sc_cargo_value'=>getRandomCost(9),
            'scale_cost'=>getRandomCost(7),
            'sleep_cost'=>getRandomCost(5),
            'insurance_tax'=>getRandomCost(4),
            'insurance_cost'=>getRandomCost(5),
            'overload_cost'=>getRandomCost(6),
            'commission'=>getRandomCost(7),
            'advance_rent'=>getRandomCost(6),
            'unload_cost'=>getRandomCost(5),
            'terminal_cost'=>getRandomCost(4),
            'cost'=>getRandomCost(9),
            'stamp_cost'=>getRandomCost(5),
            'driver_insurance_cost'=>getRandomCost(5),
            'freight_collect'=>getRandomCost(7),
            'freight_insurance'=>getRandomCost(5),
            'fixed_cost'=>getRandomCost(8),
            'online_cost'=>getRandomCost(5),
            'tax'=>getRandomCost(5),
            'disinfectant_cost'=>getRandomCost(6),
            'register_date'=>fake()->iso8601(),
            'receipt'=>fake()->boolean(),
            'hub_code'=>fake()->numerify('#######'),
            'document_number'=>fake()->numerify('######'),
            'document_date'=>fake()->iso8601(),
            'cottage_number'=>fake()->numerify('######'),
            'cottage_date'=>fake()->iso8601(),
            'order_number'=>fake()->numerify('######'),
            'item'=>null,
            'status_code'=>fake()->numerify('######'),
            'status_title'=>Faker::word(),
            'sender_id'=>$sender->id,
            'sender_national_code'=>$sender->national_code,
            'sender_postal_code'=>$sender->postal_code,
            'sender_economic_code'=>$sender->economic_code,
            'sender_name'=>$sender->name,
            'sender_last_name'=>$sender->last_name,
            'sender_province_code'=>$sender->province_code,
            'sender_province_title'=>$sender->province_title,
            'sender_city_code'=>$sender->city_code,
            'sender_city_title'=>Faker::city(),
            'sender_phones'=>$sender->mobile,
            'sender_address'=>$sender->address,
            'receiver_id'=>$receiver->id,
            'receiver_national_code'=>$receiver->national_code,
            'receiver_postal_code'=>$receiver->postal_code,
            'receiver_economic_code'=>$receiver->economic_code,
            'receiver_name'=>$sender->name,
            'receiver_last_name'=>$sender->last_name,
            'receiver_province_code'=>$sender->province_code,
            'receiver_province_title'=>$sender->province_title,
            'receiver_city_code'=>$sender->city_code,
            'receiver_city_title'=>Faker::city(),
            'receiver_phones'=>$receiver->mobile,
            'receiver_address'=>$receiver->address,
            'first_driver_name'=>$first_driver->name,
            'first_driver_last_name'=>$first_driver->last_name,
            'first_driver_personal_code'=>$first_driver->personal_code,
            'first_driver_national_code'=>$first_driver->national_code,
            'first_driver_smart_number'=>$first_driver->smart_number,
            'first_driver_health_card_expire'=>$first_driver->health_card_expire,
            'first_driver_phones'=>$first_driver->phones,
            'first_driver_address'=>$first_driver->address,
            'first_driver_one_time_password'=>fake()->numerify('##############'),
            'second_driver_name'=>$second_driver->name,
            'second_driver_last_name'=>$second_driver->last_name,
            'second_driver_personal_code'=>$second_driver->personal_code,
            'second_driver_national_code'=>$second_driver->national_code,
            'second_driver_smart_number'=>$second_driver->smart_number,
            'second_driver_health_card_expire'=>$second_driver->health_card_expire,
            'second_driver_phones'=>$second_driver->phones,
            'second_driver_address'=>$second_driver->address,
            'vehicle_smart_number'=>$vehicle->smart_number,
            'vehicle_number_plate'=>$vehicle->number_plate,
            'vehicle_number_plate_zone'=>$vehicle->number_plate_zone,
            'vehicle_insurance_expire'=>$vehicle->insurance_expire,
            'vehicle_inspection_expire'=>$vehicle->inspection_expire,
            'vehicle_brand_title'=>$vehicle->brand_title,
            'vehicle_loading_type_code'=>$vehicle->loading_type_code,
            'vehicle_loading_type_title'=>$vehicle->loading_type_title,
            'vehicle_status'=>$vehicle->status,
            'vehicle_one_time_password'=>fake()->numerify('############'),
            'insurance_id'=>$insurance->id,
            'insurance_title'=>$insurance->insurance_company_title,
            'transport_contract_id'=>$transport_contract->id,
            'transport_contract_title'=>$transport_contract->contract_title,




        ];
    }



}
