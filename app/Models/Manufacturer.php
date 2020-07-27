<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Manufacturer
 *
 * @property int $id
 * @property string $name
 * @property string $uri
 * @property int $category_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Manufacturer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Manufacturer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Manufacturer query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Manufacturer whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Manufacturer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Manufacturer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Manufacturer whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Manufacturer whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Manufacturer whereUri($value)
 * @mixin \Eloquent
 * @property-read \App\Models\Category $category
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Car[] $cars
 * @property-read int|null $cars_count
 */
class Manufacturer extends Model
{
    protected $fillable = ['name', 'uri', 'category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function cars()
    {
        return $this->hasMany(Car::class);
    }
}
