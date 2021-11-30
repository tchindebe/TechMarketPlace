<?php

namespace Database\Factories;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProfileFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Profile::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $country = array(
            'Cameroun',
            'Tchad',
            'Cote d\'ivoire',
            'Nigeria',
            'Guinee',
            'Gabon',
        );

        $cities = array(
            'Douala', 'Yaounde', 'Garoua', 'Ngaoundere', '',
        );

        return [
            // 'phone' => $this->faker->numberBetween(690000000,690050000),
            // 'country' => $this->faker->randomElement($country),
            // 'city' => $this->faker->randomElement($cities),
            // 'bp' => $this->faker->numberBetween(1000,10000),
            // 'description' => $this->faker->text(200),
            // 'slogan' => $this->faker->paragraph(),
            // 'user_id' => rand(1, User::count()),
        ];
    }
}
