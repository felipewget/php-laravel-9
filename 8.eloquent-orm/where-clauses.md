Whe can create more "complex" conditions

Company::whereEmail('angelica.fay@medhurst.com')->whereWebsite('haley.info')->dd();

or

Company::whereEmail('angelica.fay@medhurst.com')->whereWebsite('haley.info')->toSql(); 

= "select * from `companies` where `email` = ? and `website` = ?"

and I dont't do dump in Tinker

Whe can optimize to multiple wheres to

Company::where([
    'email' => 'angelica.fay@medhurst.com',
    'website' => 'haley.info'
])->toSql();

= "select * from `companies` where (`email` = ? and `website` = ?)"

If you want to custom your opertor you can set 3 args on where()

Company::where('id', '<>', 'test')->toSql()
= "select * from `companies` where `id` <> ?"

Company::where('id', '>=', 5)->where('email', 'like', '%test@test.com%')->toSql()
= "select * from `companies` where `id` >= ? and `email` like ?"

// result 10
Company::where('id', '<>', 'test')->count()

// Or

> Company::where('id', '<>', 'test')->orWhere('id', 56)->toSql()
= "select * from `companies` where `id` <> ? or `id` = ?"

Company::where('id', '<>', 'test')->orWhere([
    'email' => 'angelica.fay@medhurst.com',
    'website' => 'haley.info'
])->toSql();
= "select * from `companies` where `id` <> ? or (`email` = ? or `website` = ?)"

// be carefull with or...

We can group conditions inside where

Company::where('id', '>', 5)->where(function($query){
    $query->where('email', 'test@sadas.com')->orWhere('website', 'like', '%.com');
})->toSql();

"select * from `companies` where `id` > ? and (`email` = ? or `website` like ?)"

Company::whereNot("email", "sadsadsads")->first();

// Where In
Company::whereIn('id', [1,2,3])->get();
= null

// Where between
Company::whereBetween('id', [1,300])->first();


> Company::whereNull('address')->toSql();
= "select * from `companies` where `address` is null"


> Company::whereDate('created_at', '2023-01-05')->toSql();



> Company::whereDate('created_at', '2023-01-05')->toSql();
= "select * from `companies` where date(`created_at`) = ?"

> Company::whereDate('created_at', '>', '2023-01-05')->toSql();
= "select * from `companies` where date(`created_at`) > ?"

> Company::whereDate('created_at', '>', '2023-01-05 05:00')->toSql();
= "select * from `companies` where date(`created_at`) > ?"

<img src="./imgs/whereaditionals" />