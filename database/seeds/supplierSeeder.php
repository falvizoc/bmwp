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
            'client_id' => 'mdFNWIEpbngep4ucEN1pqR57svWqj8XM',
            'client_secret' => '4AnHaRxosOQVvsG4OBNVQcvwQSkTXSLs4XETOXRd',
            'grant_type'=>'client_credentials',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
