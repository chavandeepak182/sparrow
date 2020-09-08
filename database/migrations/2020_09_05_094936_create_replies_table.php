
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('replies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id'); 
            $table->unsignedBigInteger('post_id');
            $table->unsignedBigInteger('comment_id');
            $table->string('reply');
            $table->string('replylikecount');
            $table->string('replydislikecount');
            $table->foreign('comment_id')
                ->references('id')
                ->on('comments')->onDelete('cascade');
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
        Schema::dropIfExists('replies');
    }
}
