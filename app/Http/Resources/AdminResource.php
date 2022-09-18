<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AdminResource extends JsonResource
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
            "id"=> $this->id,
            "role_id"=> $this->role_id,
            "name"=> $this->name,
            "username"=> $this->username,
            "email"=> $this->email,
            "image"=> $this->image == null ? url('/assets/images/exampleContent.jpg') : url(str_replace('public', 'storage',$this->image)),
            "phone"=> $this->phone,
            "created_at" => $this->created_at,
            "updated_at" => $this->updated_at
        ];
    }
}
