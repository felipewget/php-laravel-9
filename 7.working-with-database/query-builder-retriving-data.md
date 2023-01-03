// Return all
DB::table('user)->get();

//show query and die
DB::table('user)->dd();

// This method willshow your query but will keep on execution
DB::table('user)->dump();

// Order
DB::table('user)->orderBy('name')->get();
DB::table('user)->orderBy('name', 'desc')->get();
DB::table('user)->sortByDesc('name')->get();


// Oldest -> where created_at desc
DB::table('user)->lastest()->get();
DB::table('user)->lastest('email_verified_at')->get();


DB::table('user)->oldest('email_verified_at')->take(2)->get();
DB::table('user)->oldest('email_verified_at')->skip(1)->dd();


// Returning only single records

DB::table('user)->pluck('name'); // will return only the names
['user 1', 'user 2']

DB::table('user)->pluck('name', 'id'); // will return only the names in id indx

DB::table('user)->find(3) // id 3

DB::table('user)->where('email', 'aoidjaoias@sada')->first()

// I can return only one value field and I don't need return all fields and use the field on variable

DB::table('user)->where('email', 'aoidjaoias@sada')->value('name');
