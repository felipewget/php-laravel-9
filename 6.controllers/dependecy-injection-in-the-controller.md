
We created a folder called repositories

https://www.twilio.com/blog/repository-pattern-in-laravel-application

Repositories

class CompanyRepository
{
    public function pluck()
    {
        return [
            1 => 'Company one',
            2 => 'Company two',
        ];
    }
}

Controller

protected $company;

public function __construct()
{
    $this->company = new CompanyRepository();
}

Repositories is a abstraction of data map layers... Ah! it's a service... or repositories

Ok, coming back to dependency injection

public function __construct()
{}

public function index(CompanyRepository $company)

when I do (CompanyRepository $company) I doing $company = new CompanyRepository();

dd(); <- I can use to dump and die


---

Request

Request $request or $request = new Request();

$request->sort_by;