<?php

use Illuminate\Database\Seeder;

class DefendantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('defendants')->truncate();
        DB::table('defendants')->insert(
            [
                'judgement_id' => '59/2018/HSST',
                'crime' => 'Mua bán trái phép chất ma tuý',
                'name' => 'Lò Văn H.',
                'date_of_birth' => '1981-11-26',
                'place_of_birth' => 'Ch H, M L, Sơn La',
                'address' => 'Bản T L, xã Ch H, huyện M L, tỉnh Sơn La',
                'occupation' => 'Không',
                'study_level' => '09/12',
                'ethnics' => 'Thái',
                'religion' => 'Không',
                'gender' => 0,
                'previous_conviction' => 'Không',
                'antecedent' => 'Con ông Lò Văn S( đã chết) và con bà Lò Thị L, ( đã chết). Vợ là Lò Thị H, sinh năm 1986 và có 01 con sinh năm 2003, hiệnnay đềucưtrútạibản TL, xã ChH, huyện ML, tỉnh Sơn La',
                'captured_on' => '2018-03-14',
                'present' => 1,
            ]
        );
        DB::table('defendants')->insert(
            [
                'judgement_id' => '59/2018/HSST',
                'crime' => 'Tàng trữ trái phép chất ma tuý',
                'name' => 'Lò Văn Th.',
                'date_of_birth' => '1968-01-01',
                'place_of_birth' => 'T B, M L, Sơn La',
                'address' => 'Bản B, xã T B, huyện M L, tỉnh Sơn La',
                'occupation' => 'Không',
                'study_level' => '07/12',
                'ethnics' => 'Thái',
                'religion' => 'Không',
                'gender' => 0,
                'previous_conviction' => 'Không',
                'antecedent' => 'Con ông Lò Văn A( đã chết) và con bà Lò Thị C,sinh năm 1933. Vợ là Lò Thị N, sinh năm 1968 và có 03 con, con lớn nhất sinh năm 1986, con nhỏ nhất sinh năm 1994, hiệnnay đềucưtrútạibản B, xã TB, huyện ML,  tỉnh Sơn La',
                'captured_on' => '2018-03-13',
                'present' => 1,
            ]
        );
        DB::table('defendants')->insert(
            [
                'judgement_id' => '289/2018/HSST',
                'crime' => 'Chứa mại dâm',
                'name' => 'Vũ Dương Đ.',
                'date_of_birth' => '1995-07-07',
                'place_of_birth' => 'S B, TPTN, Thái Nguyên',
                'address' => 'Xóm X, xã S C, TPTN, tỉnh Thái Nguyên',
                'occupation' => 'Lao động tự do',
                'study_level' => '10/12',
                'ethnics' => 'Kinh',
                'religion' => 'Không',
                'gender' => 0,
                'previous_conviction' => 'Tiền án: Không, tiền sự: 01-Tạiquyếtđịnhsố7114/QĐ-XPHC ngày12/7/2017, Công an huyệnPhúLương, tỉnhTháiNguyên xửphạt750.000đvềhànhvi đánhnhau, đã nộp phạt ngày 20/07/2017',
                'antecedent' => 'Con ông: Vũ Văn T , sinh năm 1974 và bà: Dương ThịO, sinh năm 1974 (Đãchết);Gia đình bịcáo có 02anhem, bịcáo là con thứnhất;  Vợ: LêThịMỹH,  sinh  năm:  1996;  bịcáo có 02 con, con lớnsinh năm 2016, nhỏsinh năm 2018',
                'captured_on' => '2018-03-28',
                'present' => 1,
            ]
        );
        DB::table('defendants')->insert(
            [
                'judgement_id' => '52/2018/HSST',
                'crime' => 'Dâm ô với trẻ em',
                'name' => 'Nguyễn Văn T.',
                'date_of_birth' => '1953-01-01',
                'place_of_birth' => 'N Q, Ninh Bình',
                'address' => 'thôn P, xã V, huyện N Q, tỉnh Ninh Bình',
                'occupation' => 'Nông dân',
                'study_level' => '07/10',
                'ethnics' => 'Kinh',
                'religion' => 'Đạo Thiên Chúa',
                'gender' => 0,
                'previous_conviction' => 'Không',
                'antecedent' => 'Con ông Nguyễn Lạc Lvà bà Nguyễn Thị K; Vợ: Nguyễn Thị H; Con: có 04conđều đã trưởng thành',
                'captured_on' => '2018-04-06',
                'present' => 1,
            ]
        );
        DB::table('defendants')->insert(
            [
                'judgement_id' => '36/2018/HSPT',
                'crime' => 'Tham ô tài sản',
                'name' => 'Đàm Thị L.',
                'date_of_birth' => '1981-07-22',
                'place_of_birth' => 'xã B, huyện N, tỉnh Cao Bằng',
                'address' => 'Xóm Đ, xã B, huyện N, tỉnh Cao Bằng',
                'occupation' => 'Công chức',
                'study_level' => 'cử nhân',
                'ethnics' => 'Tày',
                'religion' => 'Không',
                'gender' => 1,
                'previous_conviction' => 'Không',
                'antecedent' => 'Con ông Đàm Tạ S(đã chết) và Hoàng Thị L1; chồng Lê Đăng T (đã ly hôn)và 01 con sinh năm 2006',
                'captured_on' => null,
                'present' => 1,
            ]
        );
        DB::table('defendants')->insert(
            [
                'judgement_id' => '03/2018/HSST',
                'crime' => 'Trộm cắp tài sản',
                'name' => 'Trần Thanh P.',
                'date_of_birth' => '1993-06-10',
                'place_of_birth' => 'thành phố R G, tỉnh Kiên Giang',
                'address' => 'số 497/12, đường N C T, Khu phố 6, phường R S, thành phố R G, tỉnh Kiên Giang',
                'occupation' => 'Lao động tự do',
                'study_level' => '09/12',
                'ethnics' => 'Kinh',
                'religion' => 'Không',
                'gender' => 0,
                'previous_conviction' => 'Không',
                'antecedent' => 'con ông Trần Thanh Tvà  bà Nguyễn Thị Kim  L; có vợ là Nguyễn Thị N, có 02 con (con lớn sinh năm 2016, con nhỏ sinh năm 2018), ngày 27 tháng 9 năm 2012bị Tòa án nhân dân thành phố Rạch Giá, tỉnh Kiên Giangxử phạt 03 nămtù về tội: “Vi phạm quy định về điều khiển phương tiện giao thông đường bộ”(Bản án số: 165/2012/HS-ST, đã được xóaán tích),không bị xử phạt vi phạm hành chính và xử lý kỷ luật;',
                'captured_on' => '2018-03-07',
                'present' => 1,
            ]
        );
        DB::table('defendants')->insert(
            [
                'judgement_id' => '77/2018/HSST',
                'crime' => 'Vi phạm quy định vềđiều khiển phương tiện giao thông đường bộ',
                'name' => 'Nguyễn Hùng H.',
                'date_of_birth' => '1989-01-15',
                'place_of_birth' => 'thành phố Đà Nẵng',
                'address' => 'K428 H34 đường T,  tổ39, phường H,  quận C, thành phốĐà Nẵng',
                'occupation' => 'Công nhân',
                'study_level' => '12/12',
                'ethnics' => 'Kinh',
                'religion' => 'Không',
                'gender' => 0,
                'previous_conviction' => 'Không',
                'antecedent' => 'Con ông Nguyễn Hùng V (đã chết) và bà Nguyễn ThịThu H (sinh năm 1968). Bị cáo bị áp dụng biện pháp ngăn chặn cấm đi khỏi nơi cư trú từ ngày 22 tháng 6 năm 2018 đến khi kết thúc phiên tòa sơ thẩm theo Lệnh cấm đi khỏi nơi cư trú số 16/2018/LCĐKNCT ngày 22 tháng 6 năm 2018 của Chánh án Tòa án nhân dân quận Liên Chiểu.',
                'captured_on' => null,
                'present' => 1,
            ]
        );
    }
}
