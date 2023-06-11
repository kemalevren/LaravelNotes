<?php

declare(strict_types=1);

namespace kemalevren\LaravelNotes\Traits;

use Illuminate\Database\Eloquent\Collection;
use kemalevren\LaravelNotes\Models\Note;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Trait     AuthoredNotes
 *
 * @author   ARCANEDEV <arcanedev.maroc@gmail.com>
 *
 * @property  Collection  authoredNotes
 */
trait AuthoredNotes
{
    /* -----------------------------------------------------------------
     |  Relationships
     | -----------------------------------------------------------------
     */

    /**
     * Relation to Many notes.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function authoredNotes(): HasMany
    {
        return $this->hasMany(config('notes.notes.model', Note::class), 'author_id');
    }
}
