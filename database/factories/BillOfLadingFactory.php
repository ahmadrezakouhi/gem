<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\Driver;
use App\Models\Insurance;
use App\Models\SenderReceiver;
use App\Models\TransportContract;
use App\Models\User;
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
        $sender = fake()->randomElement(SenderReceiver::where('status', '!=', 1)->get());
        $receiver = fake()->randomElement(SenderReceiver::where('status', '!=', 0)->get());
        $first_driver = fake()->randomElement(Driver::all());
        $second_driver = fake()->randomElement(Driver::all());
        $vehicle = fake()->randomElement(Vehicle::all());
        $insurance = Insurance::inRandomOrder()->first();
        $transport_contract = TransportContract::inRandomOrder()->first();
        $user = User::inRandomOrder()->first();
        return [
            'panel_code' => Company::inRandomOrder()->first()->panel_code,
            'Bill_TC' => fake()->numerify('#######'),
            'Bill_Number' => fake()->numerify('######'),
            'Bill_Series' => fake()->numerify('######'),
            'Bill_ApplyTime' => fake()->iso8601(),
            'Bill_Description' => Faker::sentence(),
            'Bill_Status' => fake()->numberBetween(1, 4),
            'Bill_IsAfterDelivered' => fake()->boolean(),
            'Bill_UserId' => $user->id,
            'Bill_UserName' => $user->username,
            'Bill_OriginCode' => fake()->numerify('####'),
            'Bill_DestinationCode' => fake()->numerify('####'),
            'Bill_CheckListSerial' => fake()->numerify('######'),
            'Bill_BranchCode' => fake()->numberBetween(1,9),
            'Bill_ContractNumber' => $transport_contract->contract_number,
            'Bill_ContractTitle' => $transport_contract->contract_title,
            'Bill_SendToServer' => fake()->numberBetween(1, 20),
            'Bill_IsRobari' => fake()->boolean(),
            'Bill_CvInsuranceContractNumber' => fake()->numerify('#####'),
            'Bill_CvInsuranceCompanyCode' => fake()->numerify('####'),
            'Bill_CvInsuranceContractId' => fake()->numerify('####'),
            'Bill_CgInsuranceContractNumber' => fake()->numerify('#####'),
            'Bill_CgInsuranceCompanyCode' => fake()->numerify('####'),
            'Bill_CgInsuranceContractId' => fake()->numerify('####'),
            'Bill_MasterBillOfLadingTraceCode' => fake()->numerify('#####'),
            'Haab_AnbTypeCode' => fake()->numberBetween(1,9),
            'Haab_AnbTypeTitle' => Faker::word(),
            'Haab_BargirPlateNo' => fake()->numerify('#####'),
            'Haab_BargirPlateSerial' => fake()->numerify('#####'),
            'Haab_ShomareSanad' => fake()->numerify('######'),
            'Haab_TarikheSanad' => fake()->iso8601(),
            'Haab_TC' => fake()->numerify('######'),
            'Haab_AnbCode' => fake()->numerify('#######'),
            'Haab_TechnicalManager' => Faker::word(),
            'Bill_IsReturned' => fake()->boolean(),
            'Bill_SignatureUser' => null,
            'Bill_ArrivalDate' => fake()->iso8601(),
            'Bill_Type' => fake()->numberBetween(1,9),
            'S_Id' => $sender->id,
            'S_TitleName' => $sender->title,
            'S_Name' => $sender->name,
            'S_LastName' => $sender->last_name,
            'S_NationalCode' => $sender->national_code,
            'S_PostCode' => $sender->postal_code,
            'S_OriginCity' => $sender->city,
            'S_Address' => $sender->address,
            'S_EconomicNumber' => $sender->economic_code,
            'S_Tel' => $sender->tel,
            'R_Id' => $receiver->id,
            'R_TitleName' => $receiver->title,
            'R_Name' => $receiver->name,
            'R_LastName' => $receiver->last_name,
            'R_NationalCode' => $receiver->national_code,
            'R_PostCode' => $receiver->postal_code,
            'R_DestinationCity' => $receiver->city,
            'R_Address' => $receiver->address,
            'R_EconomicNumber' => $receiver->economic_code,
            'R_Tel' => $receiver->tel,
            'D1_Inttcard' => $first_driver->smart_number,
            'D1_Name' => $first_driver->name,
            'D1_LastName' => $first_driver->last_name,
            'D1_NationalCode' => $first_driver->national_code,
            'D1_Tel' => $first_driver->phones,
            'D1_Address' => $first_driver->address,
            'D1_City' => $first_driver->city,
            'D1_SalamatExpDate' => $first_driver->health_card_expire,
            'D1_CertificateNumber' => $first_driver->driver_licence_number,
            'D1_PersonalCode' => $first_driver->personal_code,
            'D2_Inttcard' => $second_driver->smart_number,
            'D2_Name' => $second_driver->name,
            'D2_LastName' => $second_driver->last_name,
            'D2_NationalCode' => $second_driver->national_code,
            'D2_Tel' => $second_driver->phonese,
            'D2_Address' => $second_driver->address,
            'D2_City' => $second_driver->city,
            'D2_SalamatExpDate' => $second_driver->health_card_expire,
            'D2_CertificateNumber' => $second_driver->driver_licence_number,
            'D2_PersonalCode' => $second_driver->personal_code,
            'N_InttCard' => $vehicle->smart_number,
            'N_Pelak' => $vehicle->number_plate,
            'N_NumberLocation' => $vehicle->numbering_location,
            'N_NumberLocationCode' => $vehicle->numbering_location_code,
            'N_VehicleTypes' => $vehicle->vehicle_type,
            'N_Model' => $vehicle->brand_title,
            'N_Color' => $vehicle->color,
            'N_VIN' => $vehicle->VIN,
            'N_BuildYear' => $vehicle->production,
            'N_MoayenehExpDate' => $vehicle->inspection_expire,
            'N_InsuranceExpDate' => $vehicle->insurance_expire,
            'N_InsuranceNumber' => $vehicle->insurance_number,
            'N_OwnerStatus' => $vehicle->owner_status,
            'N_ModelCode' => $vehicle->brand_code,
            'N_VehicleTypeCode' => $vehicle->vehicle_type_code,
            'Fee_BaseFreight' => getRandomCost(10),
            'Fee_PreFreight' => getRandomCost(10),
            'Fee_RemFreight' => getRandomCost(10),
            'Fee_Sleep' => getRandomCost(10),
            'Fee_Commission' => getRandomCost(10),
            'Fee_Storage' => getRandomCost(10),
            'Fee_Terminal' => getRandomCost(10),
            'Fee_Scale' => getRandomCost(10),
            'Fee_Insurance' => getRandomCost(10),
            'Fee_Tonnage' => getRandomCost(10),
            'Fee_Loading' => getRandomCost(10),
            'Fee_Tax' => getRandomCost(10),
            'Fee_InsuranceTax' => getRandomCost(10),
            'Fee_TakeFromDriver' => getRandomCost(10),
            'Fee_Stamp' => getRandomCost(10),
            'Fee_TraceCode' => getRandomCost(10),
            'Fee_Deductions' => getRandomCost(10),
            'Fee_Antiseptic' => getRandomCost(5),
            'Fee_Elambar' => getRandomCost(6),
            'Fee_Unload' => getRandomCost(7),
            'Fee_Complementary' => getRandomCost(6),
            'Bill_D1OneTimePassword' => fake()->password(),
            'Bill_NOneTimePassword' => fake()->password() ,
            'Bill_ElambarPermission' => fake()->numerify('########'),


        ];
    }
}
