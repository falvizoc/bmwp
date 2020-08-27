<?php
use Illuminate\Database\Seeder;
use App\Models\supplier;

class supplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        supplier::create([
            'name' => 'SYSCOM',
            'clientID' => 'mdFNWIEpbngep4ucEN1pqR57svWqj8XM',
            'clientSecret' => '4AnHaRxosOQVvsG4OBNVQcvwQSkTXSLs4XETOXRd',
            'grantType'=>'client_credentials',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
