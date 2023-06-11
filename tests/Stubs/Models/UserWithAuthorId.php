<?php

declare(strict_types=1);

namespace kemalevren\LaravelNotesTests\Stubs\Models;

/**
 * Class     UserWithAuthorId
 *
 * @author   ARCANEDEV <arcanedev.maroc@gmail.com>
 */
class UserWithAuthorId extends User
{
    /**
     * Get the current author's id.
     *
     * @return mixed
     */
    protected function getCurrentAuthorId()
    {
        return $this->getKey();
    }
}
