to create in general, is make... to, to create migration is

php artisan make:migration

in snackcase

for example:

php artisan make:migration create_companies_table

and will create a timestamp_create_companies_table in database/migrations

if you write in cammelCase, the file will be created in snackCase

// Create a table
Schema::create('companies', function (Blueprint $table) {

// With dependency injection we are using a Blueprint clss in $table
// Blueprint provide a tool to create collummns

$table->id();
$table->string('name');
$table->string('address');
$table->string('website');
$table->string('email');
$table->timestamps();

// opt

$table->string('name');
$table->string('address')->nullable();
$table->string('website')->nullable();
$table->string('email')->comment('Email of the company');

->default(1);
->first('')
->after('')

batch if create comapies_table is 2 because we added after