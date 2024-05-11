<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PreferenceEditResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param Request $request
     * @return array
     */
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'id_preferences' => $this->id_preferences,
            'name' => $this->name,
            'desc' => $this->desc,
            'status' => $this->status,
            'input' => $this->input,
        ];
    }
}
