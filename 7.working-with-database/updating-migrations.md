In some situations you will net modify a migration but you are in production env. so
how can you do that?

we create other file, we not change the existed migration

for example:

## add_collumn_to_tablename_table

Schema::table('tasks', function (Blueprint $table) {
    $table->tinyInteger('priority')->default(1);

public function down()
    $table->dropColumn('priority');

## remove_collumn_to_tablename_table



## modify_collumn_to_tablename_table

public function up()
    $table->renameColumn('due_at', 'due_date');

public function down()
    $table->renameColumn('due_date', 'due_at');

Class 'Doctrine\DBAL\Driver\AbstractMySQLDriver' not found
composer require doctrine/dbal