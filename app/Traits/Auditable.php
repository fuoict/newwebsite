<?php

namespace App\Traits;

use App\Models\AuditLog;
use Illuminate\Support\Facades\Auth;

trait Auditable
{
    protected static function bootAuditable(): void
    {
        static::created(function ($model) {
            self::log('created', $model, null, $model->toArray());
        });

        static::updated(function ($model) {
            $dirty = $model->getDirty();
            $original = array_intersect_key($model->getOriginal(), $dirty);
            self::log('updated', $model, $original, $dirty);
        });

        static::deleted(function ($model) {
            self::log('deleted', $model, $model->toArray(), null);
        });
    }

    private static function log(string $event, $model, ?array $old, ?array $new): void
    {
        AuditLog::create([
            'user_id'        => Auth::id(),
            'event'          => $event,
            'auditable_type' => get_class($model),
            'auditable_id'   => $model->getKey(),
            'description'    => class_basename($model) . " was {$event}",
            'old_values'     => $old,
            'new_values'     => $new,
            'ip_address'     => request()->ip(),
            'user_agent'     => request()->userAgent(),
        ]);
    }
}
