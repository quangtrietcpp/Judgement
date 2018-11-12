<?php

use Illuminate\Database\Seeder;

class ParticipantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('participants')->truncate();
        DB::table('participants')->insert(
            [
                'judgement_id' => '289/2018/HS-ST',
                'name' => 'Vi Văn Lg',
                'details' => 'sinh năm1987(vắngmặt), HKTT: xóm LD,xã ML, huyện ĐH, tỉnh Thái Nguyên',
                'role' => 12,
            ]
        );
        DB::table('participants')->insert(
            [
                'judgement_id' => '289/2018/HS-ST',
                'name' => 'Bùi Duy L',
                'details' => 'sinh năm1970 (vắng mặt), HKTT: xóm CTh, xã CL, huyện PL, tỉnh Thái Nguyên',
                'role' => 12,
            ]
        );
        DB::table('participants')->insert(
            [
                'judgement_id' => '289/2018/HS-ST',
                'name' => 'Ngô Tú A',
                'details' => 'sinh năm: 1997(vắng mặt), HKTT: xóm LD, xã ML, huyện ĐH, tỉnh TháiNguyên',
                'role' => 12,
            ]
        );
        DB::table('participants')->insert(
            [
                'judgement_id' => '289/2018/HS-ST',
                'name' => 'Nguyễn Khánh Tn',
                'details' => 'sinh năm 1975(vắngmặt), HKTT: xóm LPh, xã CL, huyện PL, tỉnh Thái Nguyên, Chỗ ở: Tập thể Z, Trại Y, Bộ X',
                'role' => 11,
            ]
        );   
        DB::table('participants')->insert(
            [
                'judgement_id' => '289/2018/HS-ST',
                'name' => 'Hứa Văn Thg',
                'details' => 'sinh năm 1992(vắng mặt), Trú tại: xóm LD, xã ML, huyện ĐH, tỉnh Thái Nguyên',
                'role' => 11,
            ]
        );
        DB::table('participants')->insert(
            [
                'judgement_id' => '289/2018/HS-ST',
                'name' => 'Lương ThịThu H',
                'details' => 'sinh năm 1991(vắng mặt), HKTT: Bản NTr, xã ThL, huyện QPh, tỉnh NghệAn',
                'role' => 11,
            ]
        );
        DB::table('participants')->insert(
            [
                'judgement_id' => '289/2018/HS-ST',
                'name' => 'Hà ThịTh',
                'details' => 'sinh năm1980(vắng mặt), HKTT: T X, phường SC, TPBK, tỉnh Bắc Kạn',
                'role' => 11,
            ]
        );
        DB::table('participants')->insert(
            [
                'judgement_id' => '289/2018/HS-ST',
                'name' => 'Quách ThịX',
                'details' => 'sinh ngày 13/12/1998(vắng mặt), HKTT: xóm Ng, xã CLg, huyện CTh, tỉnh Thanh Hóa',
                'role' => 11,
            ]
        );
        DB::table('participants')->insert(
            [
                'judgement_id' => '289/2018/HS-ST',
                'name' => 'Đinh ThịHồng U',
                'details' => 'sinh năm 1993, HKTT: xóm Đ, xã YLg, huyện ThS, tỉnh Phú Thọ',
                'role' => 11,
            ]
        );
        DB::table('participants')->insert(
            [
                'judgement_id' => '52/2018/HSST',
                'name' => 'Nguyễn Thu T1',
                'details' => 'sinh ngày 09/9/2011, Trú tại: thôn P, xã V, huyện N, tỉnh Ninh Bình',
                'role' => 2,
            ]
        );
        DB::table('participants')->insert(
            [
                'judgement_id' => '52/2018/HSST',
                'name' => 'Nguyễn Thị Hồng N1',
                'details' => 'sinh năm 1992 (Mẹ đẻ cháu T1); Trú tại: thôn P, xã V, huyện N, tỉnh Ninh Bình, (Có mặt)',
                'role' => 3,
            ]
        ); 
        DB::table('participants')->insert(
            [
                'judgement_id' => '52/2018/HSST',
                'name' => 'Nguyễn Bảo N',
                'details' => 'sinh ngày 02/9/2010, Trú tại: thôn P, xã V, huyện N, tỉnh Ninh Bình',
                'role' => 2,
            ]
        ); 
        DB::table('participants')->insert(
            [
                'judgement_id' => '52/2018/HSST',
                'name' => 'Bùi Thị L',
                'details' => 'sinh năm 1982 (Mẹ đẻ cháu N); Trú tại: thôn P, xã V, huyện N, tỉnh Ninh Bình, (Có mặt)',
                'role' => 3,
            ]
        );
        DB::table('participants')->insert(
            [
                'judgement_id' => '52/2018/HSST',
                'name' => 'Phạm Văn Sỹ',
                'details' => 'Trợ giúp viên pháp lý của Trung tâm trợ giúp pháp lý Nhà nước tỉnh Ninh Bình (Vắng mặt), bảo vệ quyền và lợi ích hợp pháp của cháu Nguyễn Thu T1',
                'role' => 4,
            ]
        );
        DB::table('participants')->insert(
            [
                'judgement_id' => '52/2018/HSST',
                'name' => 'Lê Thị Thu Hà',
                'details' => 'Trợ giúp viên pháp lý của Trung tâm trợ giúp pháp lý Nhà nước tỉnh Ninh Bình (Có mặt), bảo vệ quyền và lợi ích hợp pháp của cháu Nguyễn Bảo N',
                'role' => 4,
            ]
        );
        DB::table('participants')->insert(
            [
                'judgement_id' => '52/2018/HSST',
                'name' => 'Nguyễn Thị C',
                'details' => 'sinh năm 1948, (Có mặt)',
                'role' => 11,
            ]
        );
        DB::table('participants')->insert(
            [
                'judgement_id' => '36/2018/HSPT',
                'name' => 'Trần Thị T',
                'details' => 'Văn phòng luật sư Nguyễn Thị T-Đoàn Luật sư tỉnh Cao Bằng bào chữa cho bị cáo theo Quyết định cử luật sư cộng tác viên tham gia tố tụng của Trung tâm Trợ giúp pháp lý Nhà nước tỉnh Cao Bằng; có mặt.',
                'role' => 4,
            ]
        );
        DB::table('participants')->insert(
            [
                'judgement_id' => '36/2018/HSPT',
                'name' => 'Phạm Thị Hồng V',
                'details' => 'Văn phòng luật sư C-Đoàn Luật sư Thành phố Hà Nội; có mặt',
                'role' => 4,
            ]
        );
        DB::table('participants')->insert(
            [
                'judgement_id' => '36/2018/HSPT',
                'name' => 'Châu  Thành  N',
                'details' => 'Công ty luật TNHH  V-Đoàn Luậtsư Thành phố Hà Nội; có mặt.',
                'role' => 4,
            ]
        );
        DB::table('participants')->insert(
            [
                'judgement_id' => '36/2018/HSPT',
                'name' => 'Nông Thị V',
                'details' => 'sinh năm 1968, nơi cư trú: Xóm Đ, xã B, huyện N, tỉnh Cao Bằng; có mặt.',
                'role' => 12,
            ]
        );
        DB::table('participants')->insert(
            [
                'judgement_id' => '36/2018/HSPT',
                'name' => 'Nông Thị M',
                'details' => 'sinh năm 1970, nơi cư trú: Xóm B1, xã B, huyện N, tỉnh Cao Bằng; có mặt.',
                'role' => 12,
            ]
        );
        DB::table('participants')->insert(
            [
                'judgement_id' => '36/2018/HSPT',
                'name' => 'Nông Thị N',
                'details' => 'sinh năm 1964, nơi cư trú: Xóm TS, xã B, huyện N, tỉnh Cao Bằng; có mặt.',
                'role' => 12,
            ]
        );
        DB::table('participants')->insert(
            [
                'judgement_id' => '36/2018/HSPT',
                'name' => 'Ngô Đức A',
                'details' => 'sinh năm 1982, nơi cư trú: Tổ 2, phường HC, thành phố Cao Bằng, tỉnh Cao Bằng; có mặt.',
                'role' => 12,
            ]
        );
        DB::table('participants')->insert(
            [
                'judgement_id' => '36/2018/HSPT',
                'name' => 'Lãnh Thị B',
                'details' => 'sinh năm 1960, nơi cư trú: Xóm BN, xã  B,huyện N, tỉnh Cao Bằng; có mặt.',
                'role' => 12,
            ]
        );
        DB::table('participants')->insert(
            [
                'judgement_id' => '36/2018/HSPT',
                'name' => 'Nông Văn C',
                'details' => 'sinh năm 1964, nơi cư trú: Xóm BC, xã B ,huyện N, tỉnh Cao Bằng; có mặt.',
                'role' => 12,
            ]
        );
        DB::table('participants')->insert(
            [
                'judgement_id' => '36/2018/HSPT',
                'name' => 'Hoàng Thị L',
                'details' => 'sinh năm 1968, nơi cư trú: Xóm TS, xã  B,huyện N, tỉnh Cao Bằng; có mặt.',
                'role' => 12,
            ]
        );
        DB::table('participants')->insert(
            [
                'judgement_id' => '36/2018/HSPT',
                'name' => 'Hoàng Thị T',
                'details' => 'sinh năm 1976, nơi cư trú: Xóm Đ, xã  B,huyện N, tỉnh Cao Bằng; có mặt.',
                'role' => 12,
            ]
        );
        DB::table('participants')->insert(
            [
                'judgement_id' => '36/2018/HSPT',
                'name' => 'Triệu Văn B',
                'details' => 'sinh năm 1982, nơi cư trú: Xóm PL, xã  B,huyện N, tỉnh Cao Bằng; có mặt.',
                'role' => 12,
            ]
        );
        DB::table('participants')->insert(
            [
                'judgement_id' => '36/2018/HSPT',
                'name' => 'Hoàng Văn K',
                'details' => 'sinh năm 1959, nơi cư trú: Xóm B1, xã  B,huyện N, tỉnh Cao Bằng; có mặt.',
                'role' => 12,
            ]
        );
        DB::table('participants')->insert(
            [
                'judgement_id' => '03/2018/HSST',
                'name' => 'Viettel K',
                'details' => 'Chi nhánh Tập đoàn Công nghiệp -Viễn thông Quân đội, ông Phạm Văn T, sinh năm: 1982; nghề nghiệp: Trưởng phòng Kỹ thuật Hạ tầng Viettel K,được Giám đốc Viettel Kủy quyền tham gia phiên tòa, tại giấy ủy quyền số 58/GUQ-KGG-CTr ngày 02 tháng 7 năm 2018;có mặt',
                'role' => 2,
            ]
        );
        DB::table('participants')->insert(
            [
                'judgement_id' => '03/2018/HSST',
                'name' => 'Nguyễn Thị N',
                'details' => 'vắng mặt.',
                'role' => 11,
            ]
        );
        DB::table('participants')->insert(
            [
                'judgement_id' => '03/2018/HSST',
                'name' => 'Phạm Quốc T',
                'details' => 'vắng mặt.',
                'role' => 11,
            ]
        );
        DB::table('participants')->insert(
            [
                'judgement_id' => '77/2018/HSST',
                'name' => 'Trương Văn Đ',
                'details' => 'sinh năm 1936, trú tại Tổ21, phường T, quận T, thành phốĐà Nẵng (đã chết)',
                'role' => 2,
            ]
        );
        DB::table('participants')->insert(
            [
                'judgement_id' => '77/2018/HSST',
                'name' => 'Trương Thị Tố L',
                'details' => 'sinh năm 1972, trú tại số560 đường Đ,phườngK, quậnL, thành phốĐà Nẵng, có mặt.',
                'role' => 3,
            ]
        );
        DB::table('participants')->insert(
            [
                'judgement_id' => '77/2018/HSST',
                'name' => 'Trương Thị Tố H',
                'details' => 'sinh năm 1974, trú tại số 37/13 M, phường 13, quận T, thành phố Hồ Chí Minh, vắng mặt.',
                'role' => 3,
            ]
        );
        DB::table('participants')->insert(
            [
                'judgement_id' => '77/2018/HSST',
                'name' => 'Công ty Cổphần V',
                'details' => 'Địa chỉ: Số10 đường R, phường T, quận X, thành phốHồChí Minh',
                'role' => 8,
            ]
        );
        DB::table('participants')->insert(
            [
                'judgement_id' => '77/2018/HSST',
                'name' => 'Mai Kiều L',
                'details' => 'sinh năm 1953 -Chức vụ: Tổng Giám đốc',
                'role' => 9,
            ]
        );
        DB::table('participants')->insert(
            [
                'judgement_id' => '77/2018/HSST',
                'name' => 'Phan Văn Tuấn M',
                'details' => 'sinh năm 1973 -Chức  vụ: Trưởng Ban hành chính nhân sựcủa  Chi nhánh Công ty V-Nhà máy sữa Đà Nẵng; Địa  chỉ: Số112 đường B, quận T, thành phốĐà Nẵng, được uỷ quyền làm đại diện của bị đơn dân sự',
                'role' => 9,
            ]
        );
        DB::table('participants')->insert(
            [
                'judgement_id' => '77/2018/HSST',
                'name' => 'Chi nhánh Công ty Cổphần V - Nhà máy sữa Đà Nẵng',
                'details' => 'Địa chỉ: Lô Q, khu công nghiệp H, phường B, quận L, thành  phốĐà Nẵng. Người đứng đầu Chi nhánh Công ty Cổphần V -Nhà máy sữa Đà Nẵng: Ông Nguyễn Văn T-Chức vụ: Quyền Giám đốc.',
                'role' => 12,
            ]
        );
    }
}
