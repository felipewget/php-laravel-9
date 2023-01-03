php artisan make:migration add_user_id_to_tasks

Local table, references of column id of user table
$table->foreign('user_id')->references('id')->on('users');



// It's happens because the 2 fields need to be the same type
SQLSTATE[HY000]: General error: 1005 Can't create table `contact_app`.`#sql-1_17b` 
(errno: 150 "Foreign key constraint is incorrectly formed") (SQL: alter table `tasks` add constraint `tasks_user_id_foreign` 
foreign key (`user_id`) references `users` (`id`))

in this case, id is bigInt() and user_id is int()

so, to fix that we can put unsignedBigInteger


but and to remove foreign keys?

if we run rollback we will receive a error because we have a foreign key now pointing to another table

Illuminate\Database\QueryException

SQLSTATE[HY000]: General error: 1553 Cannot drop index 'tasks_user_id_foreign': needed in a foreign key constraint (SQL: alter table `tasks` drop `user_id`)

so, before to do dropColumn, we need drop ForeignKey()

$table->dropForeign('NAME_OF_FOREIGN_KEY')

$table->foreign('user_id')->references('id')->on('users'); will create a table_localfield_foreignid_foreigncollunman

or... we can pass only the field with field with foreign key

$table->dropForeign(['user_id'])
