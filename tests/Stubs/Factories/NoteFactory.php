<?php

declare(strict_types=1);

namespace kemalevren\LaravelNotesTests\Stubs\Factories;

use kemalevren\LaravelNotesTests\Stubs\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * Class     NoteFactory
 *
 * @author   ARCANEDEV <arcanedev.maroc@gmail.com>
 */
class NoteFactory extends Factory
{
    /* -----------------------------------------------------------------
     |  Properties
     | -----------------------------------------------------------------
     */

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /* -----------------------------------------------------------------
     |  Main Methods
     | -----------------------------------------------------------------
     */

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'content' => $this->faker->paragraph,
        ];
    }
}
