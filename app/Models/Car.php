<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Car
 *
 * @property int $id
 * @property string $name
 * @property string $years
 * @property string $uri
 * @property int $manufacturer_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Car newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Car newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Car query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Car whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Car whereManufacturerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Car whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Car whereUri($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Car whereYears($value)
 * @mixin \Eloquent
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Car whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Car whereUpdatedAt($value)
 * @property-read \App\Models\Manufacturer $manufacturer
 */
class Car extends Model
{
    protected $fillable = ['name', 'years', 'uri', 'manufacturer_id'];

    public function manufacturer()
    {
        return $this->belongsTo(Manufacturer::class);
    }
}
