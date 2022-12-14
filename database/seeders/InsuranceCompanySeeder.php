<?php

namespace Database\Seeders;

use App\Models\InsuranceCompany;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InsuranceCompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $insuranceCompanies = [
            "بيمه مرکزي ايران",
            "بيمه ايران",
            "پايگاه اطلاع رساني بيمه مرکزي",
            "بيمه آسيا",
            "بيمه دانا",
            "بيمه معلم",
            "بيمه البرز",
            "بيمه کارآفرين",
            "بيمه پارسيان",
            "بيمه توسعه",
            "بيمه سينا",
            "بيمه سامان",
            "بيمه رازي",
            "بيمه نوين",
            "بيمه دي",
            "بيمه ميهن",
            "بيمه ملت",
            "بيمه حافظ",
            "بيمه امين",
            "بيمه معين",
            "بيمه اميد",
            "بيمه پیشگامان دانا",
            "بيمه پاسارگاد",
            "بيمه کشاورزي",
            "بيمه ايرانيان",
            "بيمه کوثر",
            "بيمه رایان سايپا",
            "سرمايه گذاري صنعت بيمه",
            "بيمه بهمن",
            "آموزش عالي بيمه اکو",
            "پژوهشکده بيمه",
            "بيمه تعاون",
            "بيمه ما",
            "بيمه آسماري",
            "بيمه سرمد",
            "بيمه آرمان",
            "بيمه دماوند",
            "فاقد بیمه",
            "تجارت نو",
            "حکمت",
        ];

        foreach ($insuranceCompanies as $insuranceCompany) {
            InsuranceCompany::create(
                [
                    'name'=>$insuranceCompany
                ]
                );
        }
    }
}
