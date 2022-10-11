<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
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
            'order_number'=>$this->order_number,
            'order_date'=>$this->order_date,
            'transaction_number'=>$this->transaction_number,
            'transaction_date'=>$this->transaction_date,
            'request_number'=>$this->request_number,
            'request_date'=>$this->request_date,
            'buyer_agent_name'=>$this->buyer_agent_name,
            'buyer_agent_last_name'=>$this->buyer_agent_last_name,
            'seller_agent_name'=>$this->seller_agent_name,
            'seller_agent_last_name'=>$this->seller_agent_last_name,
            'sender_code'=>$this->sender_code,
            'sender_name'=>$this->sender_name,
            'sender_last_name'=>$this->sender_last_name,
            'sender_city'=>$this->sender_city,
            'sender_address'=>$this->sender_address,
            'sender_national_code'=>$this->sender_national_code,
            'sender_postal_code'=>$this->sender_postal_code,
            'sender_phones'=>$this->sender_phones,
            'receiver_code'=>$this->sender_code,
            'receiver_name'=>$this->sender_name,
            'receiver_last_name'=>$this->sender_last_name,
            'receiver_city'=>$this->sender_city,
            'receiver_address'=>$this->sender_address,
            'receiver_national_code'=>$this->sender_national_code,
            'receiver_postal_code'=>$this->sender_postal_code,
            'receiver_phones'=>$this->sender_phones,
            'description'=>$this->description,
            'cargoes'=>$this->cargoes
        ];
    }
}
