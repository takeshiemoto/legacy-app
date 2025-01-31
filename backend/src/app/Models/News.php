<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

/**
 *
 *
 * @property int $id
 * @property string $public_id
 * @property string $title
 * @property int $user_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon|null $deleted_at
 * @property-read \App\Models\TFactory|null $use_factory
 * @property-read \App\Models\User $user
 * @method static \Database\Factories\NewsFactory factory($count = null, $state = [])
 * @method static Builder<static>|News newModelQuery()
 * @method static Builder<static>|News newQuery()
 * @method static Builder<static>|News onlyTrashed()
 * @method static Builder<static>|News query()
 * @method static Builder<static>|News whereCreatedAt($value)
 * @method static Builder<static>|News whereDeletedAt($value)
 * @method static Builder<static>|News whereId($value)
 * @method static Builder<static>|News wherePublicId($value)
 * @method static Builder<static>|News whereTitle($value)
 * @method static Builder<static>|News whereUpdatedAt($value)
 * @method static Builder<static>|News whereUserId($value)
 * @method static Builder<static>|News withTrashed()
 * @method static Builder<static>|News withoutTrashed()
 * @mixin Eloquent
 */
class News extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'title',
        'user_id',
    ];

    protected static function boot(): void
    {
        parent::boot();
        static::creating(function ($model) {
            $model->public_id = Str::uuid();
        });
    }

    public function getRouteKeyName(): string
    {
        return 'public_id';
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
