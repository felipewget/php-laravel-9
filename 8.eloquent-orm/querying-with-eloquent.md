We can test with Tinker
php artisan tinker

use App\Models\Company;

// Return all records
Company::all();

// We can limit resourls by the query
// We dont't have results, we have a instance from illuminate database eloquent builder
// Eloquent serves as a queryBuilder
Company::take(3);
so, to receive results, you an use:
Company::take(3)->get();
...

Company::take(3)->dd(); // to see the query

I can skip some rescords
Company::skip(2)->get();

And you can mix that

Company::take(3)->skip(2)->get();

order by
->lastest()->get()

If you want to select columns you can use ->select() 
for eg:
Company::select('id', 'name')->take(3)->skip(2)->latest()->get();

If you want a query with only a cingle column results you can use pluck

// Return name and index will be id
Company::pluck('name', id)
// Don't accept filters like: ->take(3)->skip(2)->latest()->get();

------------

Returning a single record

you can use first insted get();
Company::first();

I can use pluck to One record
Company::pluck('email', id)->first();

// Where, and I can use get() to return all
Company::where('email', 'turner.kyla@hotmail.com')->first()

Company::whereEmail('turner.kyla@hotmail.com')->first()
Company::whereId(56)->first()
Company::whereAddress(56)->first()
Company::whereCreatedAt(56)->first()

... I can write the name of fields, it's amazing!
where + fieldName in cammel case

Company::firstWhere('email', 'turner.kyla@hotmail.com' )

I can use ::find(1) to get ID 1

I cn use ::find([1,2,3]) and return 3 records in this IDS

// if don't found a record, return exception
Company::findOrFail(1000)

it's work to 
->firstOrFail()

// Count
count() number of methods

Max and min
Company::max('created_at')
Company::min('created_at')