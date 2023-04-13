<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class VideoResource extends JsonResource
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
            'video_name'=>$this->video_name,
            'video_description'=>$this->video_description,
            'user_id'=>$this->user_id,
            'comment_id'=>$this->comment_id,
            'video'=>$this->video,
            'like'=>$this->like,
            'dislike'=>$this->dislike,
            'created_at'=>$this->created_at,
            'updated_at'=>$this->updated_at,
        ];
    }
}
