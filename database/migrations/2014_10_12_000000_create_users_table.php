<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doc_user_accounts', function (Blueprint $table) {

            $table->increments('user_id', 100);
            $table->string('first_name', 200);
            $table->string('last_name', 200);
            $table->string('email', 100)->unique();
            $table->string('passwd', 100);
            $table->integer('is_confirmed')->default(0);
            $table->string('confirmation_code', 5)->nullable();
            $table->integer('is_admin')->default(0);
            $table->integer('is_active')->default(1);
            $table->datetime('creation_date')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->rememberToken();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doc_user_accounts');
    }
}
