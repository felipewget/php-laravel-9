database/seeders

we have /database/seeders/DatabaseSeeder.php that will controll the seed orders

php artisan make:seeder CompanySeeder

In the seeders we use Laravel QueryBuilder

php artisan db:seed --class=CompanySeeder

Inside method
public function run()

use queryBuilder
DB::table('companies')->delete(); // don't forget delete() because we need to remove and add the same data
DB::table('companies')->insert($companies);

to use php artisan db:seed we need to register our seeder class on DatabaseSeeder

public function run()
{
    $this->call(company_seeder::class);
}

// So now will work
php artisan db:seed

// We can merge two commands in only one command... migrations and seeders
php artisan migrate:fresh --seed