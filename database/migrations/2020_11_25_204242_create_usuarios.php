<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('idUsuarios');
            $table->string('user',200);
            $table->string('password',255);
            $table->string('key',255);
            $table->timestamps();
        });
        /*
        use Illuminate\Support\Facades\DB; en linea 6
            DB::statement("CREATE TABLE cualquiera(
                idNose int(11) NOT NULL  AUTO_INCREMENT,
                xno varchar(50) DEFAULT NULL,
                PRIMARY KEY(idNose)
            )");*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('usuarios', function (Blueprint $table) {
            Schema::dropIfExists('usuarios');
        });
    }
}
