<?php

use App\Models\Address;
use App\Models\AdvertGeneralInformation;
use App\Models\AdvertHullInformation;
use App\Models\AdvertLegalInformation;
use App\Models\AdvertTechincalInformation;
use App\Models\User;
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
        Schema::create('adverts', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class); //пользователь
            $table->float('price'); //цена
            $table->foreignIdFor(Address::class); //адрес
            $table->foreignIdFor(AdvertLegalInformation::class); //юридическая информация
            $table->foreignIdFor(AdvertTechincalInformation::class); //техническая информация
            $table->foreignIdFor(AdvertHullInformation::class); //информация о корпусе
            $table->string('header'); //заголовок
            $table->text('description'); //описание
            $table->foreignIdFor(AdvertGeneralInformation::class); //общие сведения
            $table->timestamps(); //дата создания объявления
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adverts');
    }
};
