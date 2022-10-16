<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    // protected $fillable = [
    //     'name',
    //     'email',
    //     'password',
    // ];


    protected $guarded = ['id'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'is_active' => 'boolean'
    ];


    protected function getPermissionsAttribute($value)
    {

        try {
            $decrypted = Crypt::decryptString($value);
            $keys = [
                'create_order', 'edit_order', 'delete_order', 'create_draft', 'edit_draft', 'delete_draft',
                'create_bill_of_lading', 'edit_bill_of_lading', 'delete_bill_of_lading', 'cancle_bill_of_lading',
                'cancle_local_bill_of_lading', 'delete_bill_of_lading', 'edit_bill_of_lading_form', 'print_bill_of_lading',
                'access_report_form', 'create_sender_receiver', 'edit_sender_receiver', 'delete_sender_receiver',
                'access_admin_panel', 'organization_report', 'user_management', 'user_permission', 'create_draft_bill_of_lading',
                'edit_draft_bill_of_lading', 'delete_draft_bill_of_lading', 'create_owner', 'edit_owner', 'delete_owner',
                'create_financialـtransaction', 'edit_financialـtransaction', 'delete_financialـtransaction', 'send_messsage',
                'rent_management', 'insurance_management', 'financial_coefficients_management', 'receipt_management',
                'default_bill_of_lading_management', 'print_form_management', 'company_management', 'company_management', 'design_reports',
                'backup', 'recovery', 'create_bill_of_lading_file', 'upload_bill_of_lading_file', 'acountant_file', 'report', 'report_tax',
                'chart', 'edit_owner_vehicle', 'create_report', 'edit_report', 'delete_report'

            ];
            return array_combine($keys, str_split($decrypted));
        } catch (DecryptException $e) {

            
        }
    }


    protected function setPermissionsAttribute($value)
    {
        $this->attributes['permissions'] = Crypt::encryptString($value);
    }
}
