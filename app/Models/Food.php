<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Food extends Model
{
    /** @use HasFactory<\Database\Factories\FoodFactory> */
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];


    public function foodType(): BelongsTo{
        return $this->belongsTo(FoodType::class, 'food_type_name', 'name');
    }

    public function foodTags(): BelongsToMany{
        return $this->belongsToMany(FoodTag::class)->withTimestamps();
    }
    public function getTotalCalories(): float
    {
        return ($this->protein * 4) + ($this->carbs * 4) + ($this->fat * 9);
    }

}
