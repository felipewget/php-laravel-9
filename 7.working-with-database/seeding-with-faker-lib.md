Fake libs help us with real names, emails and whatever we want

use Faker\Factory as Faker;

public function run(Faker $faker)

$faker->address();
$faker->domainName();
$faker->name();
$faker->url();
$faker->slug();
$faker->ipv4();
$faker->text();
$faker->word();

more in: https://fakerphp.github.io

