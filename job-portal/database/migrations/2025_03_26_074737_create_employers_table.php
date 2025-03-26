    <?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    return new class extends Migration
    {
        public function up()
        {
            Schema::create('employers', function (Blueprint $table) {
                $table->id();
                $table->foreignId('id_user')->constrained('accounts')->onDelete('cascade');
                $table->string('name');
                $table->string('address');
                $table->text('description')->nullable();
                $table->timestamps();
            });
        }

        public function down()
        {
            Schema::dropIfExists('employers');
        }
    };
