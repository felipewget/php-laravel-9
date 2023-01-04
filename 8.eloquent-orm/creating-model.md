ORM = oriental relational mapping

Manipulate data from database using object, in this cenario we have the mothel that represents
our database table

Directory: /APP/Models/

We can use php artisan to create a model

<img src="./imgs/name-convenction" />

To good practicies we use the model on singular and the name in database in plural, ex:
model name: Activity
table: activities

php artisan make:model Company

If you want you can use QueryBuildr but please, use Eloquent here

class Company extends Model
{
    use HasFactory;
}

In the model you can specify the database table name using 

protected $table = "table name";

You can specify the primary key proprierty as well:

protected $primaryKey = "_id";

but in general we dont need it because id id and ORm treat name of model and get correct table(plural),
if you are using good patterns

<hr />

you can create a a model and create a migration to import this table on database

php artisan make:model NAMEINSINGULAR -m

and if you want a seeder , you can reate with

-m == migration
-s == seeder

php artisan make:model NAMEINSINGULAR -ms
