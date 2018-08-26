<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $this->call('PostSeeder');
        $this->call('SeriveSeeder');
        $this->call('AboultSeeder');
        $this->call('ContactSeeder');
        $this->call('AddressSeeder');
        $this->call('MarketSeeder');
        $this->call('ProductSeeder');
        $this->call('StandSeeder');
        $this->call('PosterSeeder');
        $this->call('SaleSeeder');
        $this->call('ImageSeeder');
        $this->call('CouponSeeder');
        $this->call('UserUserSeeder');
        $this->call('SalePosterSeeder');
    }
}

class PostSeeder extends Seeder{
	public function run()
    {
        DB::insert('',[]);
    }
}
class SeriveSeeder extends Seeder{
	public function run()
    {
        DB::insert('',[]);
    }
}
class AboultSeeder extends Seeder{
	public function run()
    {
        DB::insert('',[]);
    }
}
class ContactSeeder extends Seeder{
	public function run()
    {
        DB::insert('',[]);
    }
}

class AddressSeeder extends Seeder{
	public function run()
    {
        DB::insert('',[]);
    }
}

class MarketSeeder extends Seeder{
	public function run()
    {
        DB::insert('',[]);
    }
}
class ProductSeeder extends Seeder{
	public function run()
    {
        DB::insert('',[]);
    }
}
class StandSeeder extends Seeder{
	public function run()
    {
        DB::insert('',[]);
    }
}
class PosterSeeder extends Seeder{
	public function run()
    {
        DB::insert('',[]);
    }
}
class SaleSeeder extends Seeder{
	public function run()
    {
        DB::insert('',[]);
    }
}
class ImageSeeder extends Seeder{
	public function run()
    {
        DB::insert('',[]);
    }
}
class CouponSeeder extends Seeder{
	public function run()
    {
        DB::insert('',[]);
    }
}
class UserUserSeeder extends Seeder{
	public function run()
    {
        DB::insert('',[]);
    }
}
class SalePosterSeeder extends Seeder{
	public function run()
    {
        DB::insert('',[]);
    }
}