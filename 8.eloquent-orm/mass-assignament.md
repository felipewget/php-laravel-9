https://laravel.com/docs/9.x/eloquent#mass-assignment

the last lessons we changes few data but if you want modify a lot of records
it's good to use mass assignament

$data = [
    "name" => "Company 3",
    "address" => "address aoidsaoi 3",
    "email" => "comapny@sadada.com",
    "website" => "https://asddsa.com",
]

Company::create($data);

and.... we will receive this:   
Illuminate\Database\Eloquent\MassAssignmentException  Add [name] to fillable property to allow mass assignment on [App\Models\Company].
so, we need to do changes on model to accept mass assignament

protected $guarded = [];

// We can specify what is fillable in our model
protected $fillable = [
    'email',
    'address',
    'website'
];

now, this only this fields wil be filled