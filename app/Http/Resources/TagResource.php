<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Carbon;


class TagResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "id"=> $this->id,
            "tag_name"=>$this->tag_name,
            "status"=> $this->status,
            "created_at"=>Carbon::parse($this->created_at)->diffForHumans()
        ];
    }
}
