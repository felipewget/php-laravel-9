Previously we used Faker to create fake values on database, but we can use model factories
as well

We can go in /database/factories/

We can see the default class, UserFactory.php, it's to user

Factories are integrated with Faker

we can use
$this->faker or fake()

artisan

// For convenction, the name is model name

php artisan make:factory ContactFactory

on method public function definition()
we complete with the fields


To call you can use

Contact::factory()->make()  

and you can specify the number of records
Contact::factory(15)->make()   // you an visualize or use this data to seeders or what do you want

or create and save on database
Contact::factory(15)->create()


// I can choose a specific value to some field,for example
Contact::factory(15)->create([
    "first_name" => "I choosed this string"
])

Factorie relationship
https://laravel.com/docs/9.x/eloquent-factories#has-many-relationships