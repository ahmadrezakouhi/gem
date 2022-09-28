<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id'=>$this->id,
            'panel_code'=>$this->panel_code,
            'name'=>$this->name,
            'last_name'=>$this->last_name,
            'username'=>$this->username,
            'username_maha'=>$this->username_maha,
            'national_code'=>$this->national_code,
            'personal_code'=>$this->personal_code,
            'address'=>$this->address,
            'description'=>$this->description,
            'phone'=>$this->phone,
            'mobile'=>$this->mobile,
            'role_code'=>$this->role_code,
            'role_title'=>$this->role_title,
            'permissions'=>$this->permissions,
            'is_active'=> $this->is_active
        ];
    }
}
