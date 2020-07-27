<?php

namespace App\Http\Resources;

use App\Models\Car;
use Illuminate\Http\Resources\Json\JsonResource;

class CarsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        /**
         * @var $this Car
         */
        return [
            'id' => $this->id,
            'name' => $this->name,
            'years' => $this->years,
            'manufacturer' => $this->manufacturer->name,
        ];
    }
}
