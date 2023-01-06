<?php



use Illuminate\Database\Migrations\Migration;

use Illuminate\Database\Schema\Blueprint;

use Illuminate\Support\Facades\Schema;



return new class extends Migration

{

    /**

     * Run the migrations.

     *

     * @return void

     */

    public function up()

    {

        Schema::create('users', function (Blueprint $table) {

            $table->id();

            $table->string('name');

            $table->string('email')->unique();

            $table->timestamp('email_verified_at')->nullable();

            $table->string('password')->nullable();

            $table->string('google_id')->unique()->nullable();;

            $table->rememberToken();

            $table->timestamps();

            $table->string('widget1')->nullable();;

            $table->string('params1')->nullable();;

            $table->string('timer1')->nullable();;

            $table->string('widget2')->nullable();;

            $table->string('params2')->nullable();;

            $table->string('timer2')->nullable();;

            $table->string('widget3')->nullable();;

            $table->string('params3')->nullable();;

            $table->string('timer3')->nullable();;

            $table->string('widget4')->nullable();;

            $table->string('params4')->nullable();;

            $table->string('timer4')->nullable();;

            $table->string('widget5')->nullable();;

            $table->string('params5')->nullable();;

            $table->string('timer5')->nullable();;

            $table->string('widget6')->nullable();;

            $table->string('params6')->nullable();;

            $table->string('timer6')->nullable();;



        });

    }



    /**

     * Reverse the migrations.

     *

     * @return void

     */

    public function down()

    {

        Schema::dropIfExists('users');

    }

};
