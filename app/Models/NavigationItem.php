<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Auditable;

class NavigationItem extends Model
{
    use Auditable;
    protected $fillable = [
        'label', 'url', 'route_name', 'icon', 'parent_id',
        'sort_order', 'is_active', 'is_external', 'target',
    ];

    protected $casts = [
        'is_active'   => 'boolean',
        'is_external' => 'boolean',
    ];

    public function parent()
    {
        return $this->belongsTo(NavigationItem::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(NavigationItem::class, 'parent_id')
            ->orderBy('sort_order')
            ->orderBy('label');
    }

    public function activeChildren()
    {
        return $this->children()->where('is_active', true);
    }

    /**
     * Get the URL — use route_name if set, otherwise the url field
     */
    public function getUrlAttribute(): ?string
    {
        if ($this->route_name && route()->has($this->route_name)) {
            return route($this->route_name);
        }
        return $this->attributes['url'] ?? '#';
    }

    /**
     * Scope: top-level items only
     */
    public function scopeTopLevel($query)
    {
        return $query->whereNull('parent_id')->where('is_active', true)->orderBy('sort_order');
    }
}
