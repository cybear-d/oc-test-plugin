<?php namespace Cybeard\Testplugin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateCommentsTable extends Migration
{

    public function up()
    {
        Schema::create('cybeard_testplugin_comments', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('post_id')->nullable()->unsigned()->index();
            $table->text('comment')->nullable();
            $table->boolean('bad_comment');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cybeard_testplugin_comments');
    }

}
