<?php

namespace App\Http\Resources;

use App\Models\Manufacturer;
use Illuminate\Http\Resources\Json\JsonResource;

class ManufacturersResource extends JsonResource
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
         * @var $this Manufacturer
         */
        return [
            'id' => $this->id,
            'name' => $this->name,
            'category' => '',
        ];

    }
}
