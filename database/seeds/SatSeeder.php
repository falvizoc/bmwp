<?php
use App\Models\supplierAccessToken;
use Illuminate\Database\Seeder;

class SatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        supplierAccessToken::create([
                'token_type' => 'Bearer',
                'expires_in' => '31536000',
                'access_token' => 'VALOR_DEL_TOKEN',
                'supplier_id' => '1',
                'created_at' => now(),
                'updated_at' => now(),
                'expiring_date' => now()->addYear(),
                'is_valid' => True
            ]);
    }
}
