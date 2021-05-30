<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Carbon;

class BlogPost extends JsonResource
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
            'id'=> $this->id,
            'post_title'=>$this->post_title,
            'post_body'=>$this->post_body,
            'featured_image'=>$this->featured_image,
            'status'=>$this->status,
            'created_at'=> Carbon::parse($this->created_at)->diffForHumans(),
            'category'=>[
                'category_id'=>$this->category['category_id'],
                'category_name'=>$this->category['category_name'],
                'created_at'=> Carbon::parse($this->category['created_at'])->diffForHumans(),

            ],
        ];
    }
}
