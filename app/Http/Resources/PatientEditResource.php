<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PatientEditResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'nik' => $this->nik,
            'name' => $this->name,
            'gender' => $this->gender,
            'born_place' => $this->born_place,
            'born_date' => $this->born_date,
            'address' => $this->address,
            'occupation' => $this->occupation,
        ];
    }

}