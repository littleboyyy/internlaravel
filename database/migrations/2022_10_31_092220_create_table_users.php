<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            
            $table->bigInteger('id')->primary();
            $table->string('name',50);
            $table->string('email',32)->unique();
            $table->string('username',50)->nullable();
            $table->string('password',200)->nullable();
            $table->string('phone',100)->nullable();
            $table->string('address')->address()->nullable();
            $table->bigInteger('school_id')->nullable()->references('id')->on('schools');
            $table->tinyInteger('type')->nullable();
            $table->integer('parent_id')->nullable();
            $table->date('verified_at')->nullable();
            $table->boolean('closed')->default(false)->nullable();
            $table->string('code')->nullable();
            $table->tinyInteger('social_type')->nullable();
            $table->string('social_id')->unique()->nullable();
            $table->string('social_name')->nullable();
            $table->string('social_nickname')->nullable();
            $table->string('social_avatar')->nullable();
            $table->text('description')->nullable();

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_users');
    }
}
