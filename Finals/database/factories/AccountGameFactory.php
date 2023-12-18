<?php

namespace Database\Factories;

use App\Models\Account;
use App\Models\Game;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AccountGame>
 */
class AccountGameFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'account_id'=>Account::factory(),
            'game_id'=>Game::factory(),
            'name' => fake()->randomElement(['The Legend of Zelda: Breath of the Wild','Uncharted 4: A Thiefs End','The Witcher 3: Wild Hunt','Final Fantasy VII Remake','Call of Duty: Warzone','Overwatch','Fortnite','PlayerUnknowns Battlegrounds (PUBG)','Civilization VI','Total War: Warhammer II','The Sims 4','Microsoft Flight Simulator','Rust','Subnautica','Resident Evil Village','Outlast','Celeste','Hades','FIFA 22','NBA 2K22']),
            'status' =>fake()->randomElement(['active','inactive']),
            'description' =>fake()->sentence(),
            'start_date' =>fake()->dateTime()
        ];
    }
}
