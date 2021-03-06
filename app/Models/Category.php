<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Category
 *
 * @property int $id
 * @property string $name
 * @property string $slag
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category whereSlag($value)
 * @mixin \Eloquent
 * @property string $slug
 * @property string $node_name
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category whereNodeName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category whereSlug($value)
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Manufacturer[] $manufactorers
 * @property-read int|null $manufactorers_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Manufacturer[] $manufacturers
 * @property-read int|null $manufacturers_count
 */
class Category extends Model
{
    public function manufacturers()
    {
        return $this->hasMany(Manufacturer::class);
    }
}
