<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrefsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    //都道府県のテーブル設計
    public function up()
    {
        Schema::create('prefs', function (Blueprint $table) {
            $table->integer('id')->unsigned()->autoIncrement()->comment('ID');
            $table->string('name',128)->comment('都道府県名');
            $table->timestamp('created_at')->useCurrent()->comment('作成日時');
            $table->timestamp('updated_at')->useCurrent()->comment('更新日時');
            //プライマリーキー設定
            //$table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prefs');
    }
}
