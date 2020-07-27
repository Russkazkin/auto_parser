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
 */
class Car extends Model
{
    protected $fillable = ['name', 'years', 'uri', 'manufacturer_id'];
}
