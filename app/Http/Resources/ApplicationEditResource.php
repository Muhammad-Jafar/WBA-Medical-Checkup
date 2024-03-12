<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ApplicationEditResource extends JsonResource
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
            'user_id' => $this->user_id,
            'patient_id' => $this->patient_id,
            'doctor_id' => $this->doctor_id,
            'purposes' => $this->purposes,
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
            'doctors' => [
                'id' => $this->doctors->id,
                'name' => $this->doctors->name
            ]
        ];
    }
}
