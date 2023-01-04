Company::insert([
    'name' => 'addasdsa',
    'email' => 'addasdsa',
])

or

$company = new Company;
$company->name = "adadas";
$company->email = "adadas";
$company->save();

Update

Company::where('email', 'mycompany@test.com')->update([
    'website' => 'dsadsadsa',
    'address' => 'sadsadas',
])

or 

$company = Company::whereEmail('mycompany@test.com')->findOrFail();
$company->address = "sadsadsa";

$company->update();

// delete

$company = Company::whereEmail('mycompany@test.com')->findOrFail();
$company->delete();

or 

// ID
Company::destroy(1);
Company::destroy([1,2,3,4,9]);

