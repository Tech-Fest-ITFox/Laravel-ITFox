<?php

use Illuminate\Database\Seeder;

use App\Grade;

class GradesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $grade = new Grade();
        $grade->grade = 1;
        $grade->save();

        $grade = new Grade();
        $grade->grade = 2;
        $grade->save();

        $grade = new Grade();
        $grade->grade = 3;
        $grade->save();

        $grade = new Grade();
        $grade->grade = 4;
        $grade->save();

        $grade = new Grade();
        $grade->grade = 5;
        $grade->save();

        $grade = new Grade();
        $grade->grade = 6;
        $grade->save();

        $grade = new Grade();
        $grade->grade = 7;
        $grade->save();

        $grade = new Grade();
        $grade->grade = 8;
        $grade->save();

        $grade = new Grade();
        $grade->grade = 9;
        $grade->save();

        $grade = new Grade();
        $grade->grade = 10;
        $grade->save();

        $grade = new Grade();
        $grade->grade = 11;
        $grade->save();

        $grade = new Grade();
        $grade->grade = 12;
        $grade->save();
    }
}
