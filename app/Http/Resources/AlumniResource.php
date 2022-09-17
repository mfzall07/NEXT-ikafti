<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AlumniResource extends JsonResource
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
            "name"=> $this->name,
            "company"=> $this->company,
            "address"=> $this->address,
            "domicile"=> $this->domicile,
            "email"=> $this->email,
            "phone"=> $this->phone,
            "birth_place"=> $this->birth_place,
            "birth_date"=> $this->birth_date,
            "generation"=> $this->generation,
            "program_studi"=> $this->program_studi,
            "image"=> $this->image == null ? url('/assets/images/exampleContent.jpg') : url(str_replace('public', 'storage',$this->image)),
            "proof"=> $this->proof == null ? url('/assets/images/exampleContent.jpg') : url(str_replace('public', 'storage',$this->proof)),
        ];
    }
}
