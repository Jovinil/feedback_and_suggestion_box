<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('feedbacks_and_suggestions_id');
            $table->unsignedBigInteger('comment_id')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->integer('likes');
            $table->string('content');
            $table->softDeletes();
            $table->timestamps();
            $table->foreign('feedbacks_and_suggestions_id')->references('id')->on('feedbacks_and_suggestions');
            $table->foreign('user_id')->references('id')->on('users');

        });

        Schema::table('comments', function (Blueprint $table) {
            $table->foreign('comment_id')->references('id')->on('comments')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
