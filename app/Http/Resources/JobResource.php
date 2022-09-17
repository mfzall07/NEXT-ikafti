<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class JobResource extends JsonResource
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
            "company_name"=> $this->company_name,
            "phone"=> $this->phone,
            "job_type"=> $this->job_type,
            "placement"=> $this->placement,
            "salary"=> $this->salary,
            "title"=> $this->title,
            "description"=> $this->description,
            "image"=> $this->image == null ? url('/assets/images/exampleContent.jpg') : url(str_replace('public', 'storage',$this->image)),
        ];
    }
}
