<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AgendaResource extends JsonResource
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
            "title"=> $this->title,
            "author"=> $this->author,
            "category"=> $this->category,
            "thumbnail"=> $this->thumbnail == null ? url('/assets/images/exampleContent.jpg') : url(str_replace('public', 'storage',$this->thumbnail)),
            "body"=> $this->body,
            "created_at" => $this->created_at,
            "updated_at" => $this->updated_at
        ];
    }
}
