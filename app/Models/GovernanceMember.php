<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GovernanceMember extends Model
{
    protected $fillable = [
        'type',
        'name',
        'role',
        'initials',
        'photo',
        'bio',
        'sort_order',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public const TYPES = [
        'bot' => 'Board of Trustees',
        'council' => 'Governing Council',
    ];

    /** Folder (under public/) where photos live, per member type. */
    public const PHOTO_FOLDERS = [
        'bot' => 'img/board',
        'council' => 'img/council',
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeType($query, string $type)
    {
        return $query->where('type', $type);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order')->orderBy('id');
    }

    /** Resolved monogram shown when no photo is available. */
    public function getInitialsAttribute(?string $value): string
    {
        if (!empty($value)) {
            return strtoupper($value);
        }

        preg_match_all('/\b[\p{L}]/u', (string) $this->name, $matches);
        $letters = $matches[0] ?? [];

        return strtoupper(substr(($letters[0] ?? '?') . ($letters[1] ?? ''), 0, 2));
    }

    /** URL of the member photo (null when not uploaded yet). */
    public function photoUrl(): ?string
    {
        if (!$this->photo) {
            return null;
        }

        $folder = self::PHOTO_FOLDERS[$this->type] ?? 'img/board';

        return asset($folder . '/' . $this->photo);
    }

    /** Card accent: chairman = gold, secretary = emerald. */
    public function badge(): string
    {
        $role = strtolower((string) $this->role);

        if (str_contains($role, 'chairman')) {
            return 'chairman';
        }

        if (str_contains($role, 'secretary')) {
            return 'secretary';
        }

        return '';
    }
}
