<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ApartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('apartments')->truncate();
        \Illuminate\Support\Facades\DB::table('apartments')->insert([
            [
                'id' => 1,
                'name' => 'CC Florita Q7 68m² 2Pn View Q1 bao hết thuế phí',
                'address' => 'Lô A1, Lô A1 Khu đô thị Him Lam, Phường Tân Hưng, Quận 7, Tp Hồ Chí Minh',
                'price' => 320000,
                'description' => 'des',
                'detail' => 'detail',
                'thumbnail' => 'https://cdn.chotot.com/PuysvQTrfZ93D7S12HTvjWwo0GRwd-G1Td126YHRxZE/preset:view/plain/99ef1c0ed3a22e8037b259e5d18cb2d7-2740908407585463787.jpg',
                'status' => 1
            ],
            [
                'id' => 2,
                'name' => 'Chung cư Florita 68m² 2 PN Cần bán gấp tìm chủ moi',
                'address' => 'Lô A1, Lô A1 Khu đô thị Him Lam, Phường Tân Hưng, Quận 7, Tp Hồ Chí Minh',
                'price' => 320000,
                'description' => 'des',
                'detail' => 'detail',
                'thumbnail' => 'https://cdn.chotot.com/HmBe_tqytrURDNeAc6BKxZb79eG4iU6j0GHJejMbJeQ/preset:view/plain/65c349e4d2bd91606d5bd1db55c526ac-2740541136875910985.jpg',
                'status' => 2
            ],[
                'id' => 3,
                'name' => 'Căn hộ Vinhomes - Trả trc 0đ hoặc 15% ~ 268Tr',
                'address' => 'Lô A1, Lô A1 Khu đô thị Him Lam, Phường Tân Hưng, Quận 7, Tp Hồ Chí Minh',
                'price' => 320000,
                'description' => 'des',
                'detail' => 'detail',
                'thumbnail' => 'https://cdn.chotot.com/R0IRg8KaPN66DuVJ8goIZjHZsQysevwAa2c5tOEV_o0/preset:view/plain/566def2a7ee3874b75d9fde013bbe31f-2741998355644792450.jpg',
                'status' => 1
            ], [
                'id' => 4,
                'name' => 'home4 SomeWhere in Neverland',
                'address' => 'HN',
                'price' => 1,
                'description' => 'Nhà ở Hà Nội',
                'thumbnail' => 'https://noithattrevietnam.com/uploaded/Kien-thuc-nha-dep/hinh-anh-nha-2-tang-mai-thai/1-hinh-anh-nha-2-tang-mai-thai.jpg',
                'detail' => 'Nhà ở Hà Nội, Văn Miếu',
                'status' => 1,
            ],
            [
                'id' => 5,
                'name' => 'home5 SomeWhere in Neverland',
                'address' => 'HN',
                'price' => 1.5,
                'description' => 'Nhà ở Hà Nội',
                'thumbnail' => 'https://noithattrevietnam.com/uploaded/Kien-thuc-nha-dep/hinh-anh-nha-2-tang-mai-thai/1-hinh-anh-nha-2-tang-mai-thai.jpg',
                'detail' => 'Nhà ở Hà Nội, Văn Miếu',
                'status' => 2,
            ],
            [
                'id' => 6,
                'name' => 'home6 SomeWhere in Neverland',
                'address' => 'HN',
                'price' => 2,
                'description' => 'Nhà ở Hà Nội',
                'thumbnail' => 'https://noithattrevietnam.com/uploaded/Kien-thuc-nha-dep/hinh-anh-nha-2-tang-mai-thai/1-hinh-anh-nha-2-tang-mai-thai.jpg',
                'detail' => 'Nhà ở Hà Nội, Văn Miếu',
                'status' => 1,
            ],
            [
                'id' => 7,
                'name' => 'home7 SomeWhere in Neverland',
                'address' => 'HN',
                'price' => 3,
                'description' => 'Nhà ở Hà Nội',
                'thumbnail' => 'https://noithattrevietnam.com/uploaded/Kien-thuc-nha-dep/hinh-anh-nha-2-tang-mai-thai/1-hinh-anh-nha-2-tang-mai-thai.jpg',
                'detail' => 'Nhà ở Hà Nội, Văn Miếu',
                'status' => 1,
            ],
            [
                'id' => 8,
                'name' => 'home8 SomeWhere in Neverland',
                'address' => 'HN',
                'price' => 3,
                'description' => 'Nhà ở Hà Nội',
                'thumbnail' => 'https://noithattrevietnam.com/uploaded/Kien-thuc-nha-dep/hinh-anh-nha-2-tang-mai-thai/1-hinh-anh-nha-2-tang-mai-thai.jpg',
                'detail' => 'Nhà ở Hà Nội, Văn Miếu',
                'status' => 1,
            ],
            [
                'id' => 9,
                'name' => 'home9 SomeWhere in Neverland',
                'address' => 'HN',
                'price' => 6,
                'description' => 'Nhà ở Hà Nội',
                'thumbnail' => 'https://noithattrevietnam.com/uploaded/Kien-thuc-nha-dep/hinh-anh-nha-2-tang-mai-thai/1-hinh-anh-nha-2-tang-mai-thai.jpg',
                'detail' => 'Nhà ở Hà Nội, Văn Miếu',
                'status' => 2,
            ],
            [
                'id' => 10,
                'name' => 'home10 SomeWhere in Neverland',
                'address' => 'HN',
                'price' => 9,
                'description' => 'Nhà ở Hà Nội',
                'thumbnail' => 'https://noithattrevietnam.com/uploaded/Kien-thuc-nha-dep/hinh-anh-nha-2-tang-mai-thai/1-hinh-anh-nha-2-tang-mai-thai.jpg',
                'detail' => 'Nhà ở Hà Nội, Văn Miếu',
                'status' => 3,
            ],
            [
                'id' => 11,
                'name' => 'home11 SomeWhere in Neverland',
                'address' => 'HN',
                'price' => 22,
                'description' => 'Nhà ở Hà Nội',
                'thumbnail' => 'https://noithattrevietnam.com/uploaded/Kien-thuc-nha-dep/hinh-anh-nha-2-tang-mai-thai/1-hinh-anh-nha-2-tang-mai-thai.jpg',
                'detail' => 'Nhà ở Hà Nội, Văn Miếu',
                'status' => 3,
            ],
            [
                'id' => 12,
                'name' => 'home12 SomeWhere in Neverland',
                'address' => 'HN',
                'price' => 54,
                'description' => 'Nhà ở Hà Nội',
                'thumbnail' => 'https://noithattrevietnam.com/uploaded/Kien-thuc-nha-dep/hinh-anh-nha-2-tang-mai-thai/1-hinh-anh-nha-2-tang-mai-thai.jpg',
                'detail' => 'Nhà ở Hà Nội, Văn Miếu',
                'status' => 1,
            ],
            [
                'id' => 13,
                'name' => 'home13 SomeWhere in Neverland',
                'address' => 'HN',
                'price' => 44,
                'description' => 'Nhà ở Hà Nội',
                'thumbnail' => 'https://noithattrevietnam.com/uploaded/Kien-thuc-nha-dep/hinh-anh-nha-2-tang-mai-thai/1-hinh-anh-nha-2-tang-mai-thai.jpg',
                'detail' => 'Nhà ở Hà Nội, Văn Miếu',
                'status' => 3,
            ],
            [
                'id' => 14,
                'name' => 'home7 SomeWhere in Neverland',
                'address' => 'HN',
                'price' => 14,
                'description' => 'Nhà ở Hà Nội',
                'thumbnail' => 'https://noithattrevietnam.com/uploaded/Kien-thuc-nha-dep/hinh-anh-nha-2-tang-mai-thai/1-hinh-anh-nha-2-tang-mai-thai.jpg',
                'detail' => 'Nhà ở Hà Nội, Văn Miếu',
                'status' => 1,
            ],
            [
                'id' => 15,
                'name' => 'home15 SomeWhere in Neverland',
                'address' => 'HN',
                'price' => 77,
                'description' => 'Nhà ở Hà Nội',
                'thumbnail' => 'https://noithattrevietnam.com/uploaded/Kien-thuc-nha-dep/hinh-anh-nha-2-tang-mai-thai/1-hinh-anh-nha-2-tang-mai-thai.jpg',
                'detail' => 'Nhà ở Hà Nội, Văn Miếu',
                'status' => 2,
            ],
            [
                'id' => 16,
                'name' => 'home16 SomeWhere in Neverland',
                'address' => 'HN',
                'price' => 88,
                'description' => 'Nhà ở Hà Nội',
                'thumbnail' => 'https://noithattrevietnam.com/uploaded/Kien-thuc-nha-dep/hinh-anh-nha-2-tang-mai-thai/1-hinh-anh-nha-2-tang-mai-thai.jpg',
                'detail' => 'Nhà ở Hà Nội, Văn Miếu',
                'status' => 2,
            ],
            [
                'id' => 17,
                'name' => 'home17 SomeWhere in Neverland',
                'address' => 'HN',
                'price' => 99,
                'description' => 'Nhà ở Hà Nội',
                'thumbnail' => 'https://noithattrevietnam.com/uploaded/Kien-thuc-nha-dep/hinh-anh-nha-2-tang-mai-thai/1-hinh-anh-nha-2-tang-mai-thai.jpg',
                'detail' => 'Nhà ở Hà Nội, Văn Miếu',
                'status' => 3,
            ],
            [
                'id' => 18,
                'name' => 'home18 SomeWhere in Neverland',
                'address' => 'HN',
                'price' => 100,
                'description' => 'Nhà ở Hà Nội',
                'thumbnail' => 'https://noithattrevietnam.com/uploaded/Kien-thuc-nha-dep/hinh-anh-nha-2-tang-mai-thai/1-hinh-anh-nha-2-tang-mai-thai.jpg',
                'detail' => 'Nhà ở Hà Nội, Văn Miếu',
                'status' => 3,
            ],
            [
                'id' => 19,
                'name' => 'home19 SomeWhere in Neverland',
                'address' => 'HN',
                'price' => 44,
                'description' => 'Nhà ở Hà Nội',
                'thumbnail' => 'https://noithattrevietnam.com/uploaded/Kien-thuc-nha-dep/hinh-anh-nha-2-tang-mai-thai/1-hinh-anh-nha-2-tang-mai-thai.jpg',
                'detail' => 'Nhà ở Hà Nội, Văn Miếu',
                'status' => 1,
            ],
            [
                'id' => 20,
                'name' => 'home20 SomeWhere in Neverland',
                'address' => 'HN',
                'price' => 22,
                'description' => 'Nhà ở Hà Nội',
                'thumbnail' => 'https://noithattrevietnam.com/uploaded/Kien-thuc-nha-dep/hinh-anh-nha-2-tang-mai-thai/1-hinh-anh-nha-2-tang-mai-thai.jpg',
                'detail' => 'Nhà ở Hà Nội, Văn Miếu',
                'status' => 2,
            ]
        ]);
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
