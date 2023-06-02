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
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone_number', 20)->nullable();
            $table->string('mobile_number', 20)->nullable();
            $table->bigInteger('assigned_user_id')->unsigned()->nullable();
            $table->bigInteger('role_id')->unsigned()->nullable();
            $table->string('source')->nullable();
            $table->dateTime('next_follow_up')->nullable();
            $table->string('comment', 500)->nullable();
            $table->decimal('budget', 8, 2)->nullable();
            $table->string('address')->nullable();
            $table->foreign('assigned_user_id')->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('role_id')->references('id')->on('roles')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('lead', function(Blueprint $table) {
           $table->dropForeign('leads_role_id_foreign');
           $table->dropForeign('leads_assigned_user_id_foreign');
        });
        Schema::dropIfExists('leads');
    }
};
