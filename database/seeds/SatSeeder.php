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
                'tokenType' => 'Bearer',
                'expiresIn' => '31536000',
                'accessToken' => 'VALOR_DEL_TOKEN',
                'supplierId' => '1',
                'created_at' => now(),
                'updated_at' => now()
            ]);
    }
}
