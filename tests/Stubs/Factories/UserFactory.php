<?php

declare(strict_types=1);

namespace kemalevren\LaravelNotesTests\Stubs\Factories;

use kemalevren\LaravelNotesTests\Stubs\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * Class     UserFactory
 *
 * @author   ARCANEDEV <arcanedev.maroc@gmail.com>
 */
class UserFactory extends Factory
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
            'name'  => $this->faker->name,
            'email' => $this->faker->safeEmail,
        ];
    }
}
