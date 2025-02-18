<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PatientShowResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param Request $request
     * @return array
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'nik' => $this->nik,
            'name' => $this->name,
            'gender' => $this->getGenderName(),
            'born_place' => $this->born_place,
            'born_date' => monthToFullBulan($this->born_date),
            'address' => $this->address,
            'occupation' => $this->occupation,
            'phone' => $this->phone,
        ];
    }
}
