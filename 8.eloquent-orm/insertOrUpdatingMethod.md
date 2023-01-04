// return the first or create one record
$company = Company::firstOrNew(
    ['email' => 'company@adsad.com'],
    ['name' => "company 1"]
);
$company->save();

$company = Company::firstOrCreate(
    ['email' => 'cossmpany@adsad.com'],
    ['name' => "company 1"]
);

//////////////////////////

Company::updateOrCreate(
    ["email" => "company@adaas.com"],
    ["name" => "asdsada.com"]
);

////////////

Update multiple values on single query you should use upsert()

full records, fields to compare, what I will change if has match
User::upsert([
    ["name" => "user1", "email" => "adad@sadsa.com", "password" => "12312"],
    ["name" => "user1", "email" => "adad@sadsa.com", "password" => "12312"],
    ["name" => "user1", "email" => "adad@sadsa.com", "password" => "12312"],
], ['email'], ['name', 'password']);