<?php

use App\Models\Currency;
use Illuminate\Database\Seeder;

class CurrenciesTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		//
		$currencies = [
			'usd',
			'eur',
			'gbp',
			'jpy'
		];

		foreach ($currencies as $value) {
			Currency::create([
				'iso' => $value,
			]);
		}
	}
}
