<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $role1 = Role::create(['name' => 'admin']);
        $role2 = Role::create(['name' => 'presidente_zona']);
        $role3 = Role::create(['name' => 'lecturador_zona']);
        $role4 = Role::create(['name' => 'duenio_casa']);
        $user = User::find(1);
        $user->assignRole($role1);
        $user->assignRole($role3);
        $user = User::find(2);
        $user->assignRole($role2);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
