<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class JudgesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('judges')->truncate();
        DB::table('judges')->insert(
            [
                'judge_id' => '000123456789',
                'password' => 'phanlv010471',
                'name' => 'Lê Văn Phán',
                'date_of_birth' => Carbon::create(1975, 04, 01),
                'place_of_birth' => 'Hương Điền, Thừa Thiên - Huế',
                'address' => '1073 Đê La Thành, Ba Đình, Hà Nội',
                'phone' => '0383456789',
                'email' => 'phanlv@gmail.com',
                'gender' => 0,
                'position' => 0,
            ]
        );
        DB::table('judges')->insert(
            [
                'judge_id' => '000168542973',
                'password' => 'thamvd010582',
                'name' => 'Vũ Đình Thẩm',
                'date_of_birth' => Carbon::create(1982, 05, 01),
                'place_of_birth' => 'Thanh Trì, Hà Nội',
                'address' => '15 Tăng Bạt Hổ, Hai Bà Trưng, Hà Nội',
                'phone' => '0838765432',
                'email' => 'thamvd@gmail.com',
                'gender' => 0,
                'position' => 1,
            ]
        );
        DB::table('judges')->insert(
            [
                'judge_id' => '314159265358',
                'password' => 'trapt010582',
                'name' => 'Phan Thanh Trà',
                'date_of_birth' => Carbon::create(1993, 07, 31),
                'place_of_birth' => 'Ninh Kiều, Cần Thơ',
                'address' => '65 Kim Đồng, Hoàng Mai, Hà Nội',
                'phone' => '0919051093',
                'email' => 'trapt@gmail.com',
                'gender' => 1,
                'position' => 2,
            ]
        );
        DB::table('judges')->insert(
            [
                'judge_id' => '141592653589',
                'password' => 'tranh251290',
                'name' => 'Nguyễn Hồng Trà',
                'date_of_birth' => Carbon::create(1990, 12, 25),
                'place_of_birth' => 'Đà Lạt, Lâm Đồng',
                'address' => '5 Thái Hà, Đống Đa, Hà Nội',
                'phone' => '0986036366',
                'email' => 'tranh@gmail.com',
                'gender' => 1,
                'position' => 2,
            ]
        );
        DB::table('judges')->insert(
            [
                'judge_id' => '271828182845',
                'password' => 'tralb291288',
                'name' => 'Lâm Bạch Trà',
                'date_of_birth' => Carbon::create(1988, 29, 12),
                'place_of_birth' => 'Quận 4, Thành phố Hồ Chí Minh',
                'address' => '375 Trần Hưng Đạo, Hoàn Kiếm, Hà Nội',
                'phone' => '0909090909',
                'email' => 'tralb@gmail.com',
                'gender' => 1,
                'position' => 2,
            ]
        );
        DB::table('judges')->insert(
            [
                'judge_id' => '718281828459',
                'password' => 'canhtt280185',
                'name' => 'Trần Trí Cảnh',
                'date_of_birth' => Carbon::create(1985, 01, 28),
                'place_of_birth' => 'Quỳnh Lưu, Nghệ An',
                'address' => '128 Xuân Thuỷ, Cầu Giấy, Hà Nội',
                'phone' => '0858088998',
                'email' => 'canhtt@gmail.com',
                'gender' => 0,
                'position' => 2,
            ]
        );
    }
}
