<?php

namespace Database\Factories;

use App\Models\Admin\User;
use Illuminate\Database\Eloquent\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;
    /**
     * @var string
     */
    public static $password;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'password' => self::$password ?: self::$password = bcrypt('secret'),
            'remember_token' => \Illuminate\Support\Str::random(10),
        ];
    }

}
