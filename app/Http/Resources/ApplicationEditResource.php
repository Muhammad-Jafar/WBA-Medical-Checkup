<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ApplicationEditResource extends JsonResource
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
            'user_id' => $this->user_id,
            'patient_id' => $this->patient_id,
            'doctor_id' => $this->doctor_id,
            'checkuptype_id' => $this->checkuptype_id,
            'purposes' => $this->purposes,
            'height_body' => $this->height_body,
            'mass_body' => $this->mass_body,
            'blod_type' => $this->blod_type,
            'blod_pressure' => $this->blod_pressure,
            'colesterol' => $this->colesterol,
            'blod_sugar' => $this->blod_sugar,
            'amphe' => $this->amphe,
            'metham' => $this->metham,
            'benzo' => $this->benzo,
            'thc' => $this->thc,
            'cocain' => $this->cocain,
            'opiate' => $this->opiate,
            'requested_at' => $this->requested_at,
            'status' => $this->status,
            'approved_at' => $this->approved_at,
            'users' => [
                'id' => $this->users->id,
                'name' => $this->users->name
            ],
            'patients' => [
                'id' => $this->patients->id,
                'name' => $this->patients->name
            ],
            'checkup_types' => [
                'id' => $this->checkup_type->id,
                'abbreviated_word' => $this->checkup_type->abbreviated_word
            ]
        ];
    }
}
