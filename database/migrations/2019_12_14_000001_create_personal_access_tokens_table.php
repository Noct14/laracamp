<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

<<<<<<< HEAD
class CreatePersonalAccessTokensTable extends Migration
=======
return new class extends Migration
>>>>>>> 9782f5b35f6fd799d5a31674d9bba28fe7a6238b
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_access_tokens', function (Blueprint $table) {
            $table->id();
            $table->morphs('tokenable');
            $table->string('name');
            $table->string('token', 64)->unique();
            $table->text('abilities')->nullable();
            $table->timestamp('last_used_at')->nullable();
<<<<<<< HEAD
=======
            $table->timestamp('expires_at')->nullable();
>>>>>>> 9782f5b35f6fd799d5a31674d9bba28fe7a6238b
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
        Schema::dropIfExists('personal_access_tokens');
    }
<<<<<<< HEAD
}
=======
};
>>>>>>> 9782f5b35f6fd799d5a31674d9bba28fe7a6238b
