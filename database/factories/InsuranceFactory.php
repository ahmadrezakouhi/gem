<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;
use Ybazli\Faker\Facades\Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Insurance>
 */
class InsuranceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        return [
            'panel_code'=>Company::inRandomOrder()->first()->panel_code,
            'insurance_company_code'=>fake()->numerify('##########'),
            'insurance_company_title'=>null,
            'insurance_policy_number'=>fake()->numerify('########'),
            'start_date'=>fake()->iso8601(),
            'end_date'=>fake()->iso8601(),
            'active'=>fake()->numberBetween(0,1),
            'default'=>fake()->numberBetween(0,1),
            'type'=>fake()->randomElement(['بیمه باربری','بیمه مسئولیت مدنی']),
            'insurance_company_national_code'=>Faker::melliCode(),
            'insurance_company_phone'=>fake()->phoneNumber(),
            'insurance_company_province'=>Faker::state(),
            'insurance_company_city'=>Faker::city(),
            'insurance_company_economic_code'=>fake()->numerify('#########'),
            'insurance_company_postal_code'=>fake()->numerify('########'),
            'insurance_company_site'=>fake()->domainName(),
            'agent_name'=>Faker::firstName(),
            'agent_mobile'=>Faker::mobile(),
            'agent_phone'=>fake()->phoneNumber(),
            'agent_address'=>Faker::address(),
            'agent_fax'=>fake()->phoneNumber(),
            'agent_email'=>fake()->email(),
            'query_date'=>fake()->iso8601(),
            'issue_date'=>fake()->iso8601(),
            'description'=>Faker::paragraph()
        ];
    }
}
