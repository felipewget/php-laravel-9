Laravel provides to us 2 tools to do querys

QueryBuilder and EloquentORM

php artisan tinker

...\Facades\DB

// Will return a query builder intance about this table and will allow todo changes
// by query
DB::table('users')

Insert -> inset and return true
DB::table('users')->insert([
    'name' => 'User1',
    'email' => 'asdsads@sadsa.com'
    ...
]);


// Insert -> insert and return the id
DB::table('users')->insertGetId([
    'name' => 'User1',
    'email' => 'asdsads@sadsa.com'
    ...
]);

// Insert multiples
DB::table('users')->insert([
    [
        'name' => 'User1',
        'email' => 'asdsads@sadsa.com'
    ],
    [
        'name' => 'User1',
        'email' => 'asdsads@sadsa.com'
    ]
])




// Update return 1
DB::table('users')->where('id', 1)->update([
    'email' => 'asdsads@sadsa.com'
]);

DB::table('users')->where('id', 1)->updateOrInsert([
    [
    'name' => 'User1',
    'email' => 'asdsads@sadsa.com'
    ],
    [condition] 
]);

DB::table('users')->where('id', 1)->increment('priority');
DB::table('users')->where('id', 1)->increment('priority', 3); // numver to increment
DB::table('users')->where('id', 1)->decrement('priority');


// Delete
DB::table('users')->where('id', 1)->delete();
DB::table('users')->delete();
DB::table('users')->truncate();