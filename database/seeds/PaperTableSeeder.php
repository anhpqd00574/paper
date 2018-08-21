<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaperTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('paper_models')->truncate();
        DB::table('paper_models')->insert([
            [
                'id' => 1,
                'name' => 'KangNam',
                'address' => 'My Dinh',
                'price' => '1254635',
                'descripsion' => 'Nha dep',
                'information' => 'Nha sach',
                'image' => 'https://znews-photo-td.zadn.vn/w660/Uploaded/kbunac2/2018_04_03/Carina.jpg',
            ],
            [
                'id' => 2,
                'name' => 'Hasdess',
                'address' => 'Hoang Quoc Viet',
                'price' => '1254635',
                'descripsion' => 'nha moi',
                'information' => 'nha dep',
                'image' => 'https://lh4.googleusercontent.com/-BxMiRuJ8CRo/V6P2oIOw9tI/AAAAAAAAFXM/t4S-sy8lFb47LIjRPK3FuCf7yfyL0urcwCLcB/s320/chung-cu-vay-30000-ty.jpg'

            ],
            [
            'id' => 3,
            'name' => 'Hasdess',
            'address' => 'Hoang Quoc Viet',
            'price' => '1254635',
            'descripsion' => 'nha moi',
            'information' => 'nha dep',
            'image' => 'https://lh4.googleusercontent.com/-BxMiRuJ8CRo/V6P2oIOw9tI/AAAAAAAAFXM/t4S-sy8lFb47LIjRPK3FuCf7yfyL0urcwCLcB/s320/chung-cu-vay-30000-ty.jpg'

        ],
            [
                'id' => 4,
                'name' => 'Hasdess',
                'address' => 'Hoang Quoc Viet',
                'price' => '1254635',
                'descripsion' => 'nha moi',
                'information' => 'nha dep',
                'image' => 'https://lh4.googleusercontent.com/-BxMiRuJ8CRo/V6P2oIOw9tI/AAAAAAAAFXM/t4S-sy8lFb47LIjRPK3FuCf7yfyL0urcwCLcB/s320/chung-cu-vay-30000-ty.jpg'

            ],
            [
                'id' => 5,
                'name' => 'Hasdess',
                'address' => 'Hoang Quoc Viet',
                'price' => '1254635',
                'descripsion' => 'nha moi',
                'information' => 'nha dep',
                'image' => 'https://lh4.googleusercontent.com/-BxMiRuJ8CRo/V6P2oIOw9tI/AAAAAAAAFXM/t4S-sy8lFb47LIjRPK3FuCf7yfyL0urcwCLcB/s320/chung-cu-vay-30000-ty.jpg'

            ],
            [
                'id' => 6,
                'name' => 'Hasdess',
                'address' => 'Hoang Quoc Viet',
                'price' => '1254635',
                'descripsion' => 'nha moi',
                'information' => 'nha dep',
                'image' => 'https://lh4.googleusercontent.com/-BxMiRuJ8CRo/V6P2oIOw9tI/AAAAAAAAFXM/t4S-sy8lFb47LIjRPK3FuCf7yfyL0urcwCLcB/s320/chung-cu-vay-30000-ty.jpg'

            ],
            [
                'id' => 7,
                'name' => 'Hasdess',
                'address' => 'Hoang Quoc Viet',
                'price' => '1254635',
                'descripsion' => 'nha moi',
                'information' => 'nha dep',
                'image' => 'https://lh4.googleusercontent.com/-BxMiRuJ8CRo/V6P2oIOw9tI/AAAAAAAAFXM/t4S-sy8lFb47LIjRPK3FuCf7yfyL0urcwCLcB/s320/chung-cu-vay-30000-ty.jpg'

            ],
            [
                'id' => 8,
                'name' => 'Hasdess',
                'address' => 'Hoang Quoc Viet',
                'price' => '1254635',
                'descripsion' => 'nha moi',
                'information' => 'nha dep',
                'image' => 'https://lh4.googleusercontent.com/-BxMiRuJ8CRo/V6P2oIOw9tI/AAAAAAAAFXM/t4S-sy8lFb47LIjRPK3FuCf7yfyL0urcwCLcB/s320/chung-cu-vay-30000-ty.jpg'

            ],
            [
                'id' => 9,
                'name' => 'Hasdess',
                'address' => 'Hoang Quoc Viet',
                'price' => '1254635',
                'descripsion' => 'nha moi',
                'information' => 'nha dep',
                'image' => 'https://lh4.googleusercontent.com/-BxMiRuJ8CRo/V6P2oIOw9tI/AAAAAAAAFXM/t4S-sy8lFb47LIjRPK3FuCf7yfyL0urcwCLcB/s320/chung-cu-vay-30000-ty.jpg'

            ],
            [
                'id' => 10,
                'name' => 'Hasdess',
                'address' => 'Hoang Quoc Viet',
                'price' => '1254635',
                'descripsion' => 'nha moi',
                'information' => 'nha dep',
                'image' => 'https://lh4.googleusercontent.com/-BxMiRuJ8CRo/V6P2oIOw9tI/AAAAAAAAFXM/t4S-sy8lFb47LIjRPK3FuCf7yfyL0urcwCLcB/s320/chung-cu-vay-30000-ty.jpg'

            ],
            [
                'id' => 11,
                'name' => 'Hasdess',
                'address' => 'Hoang Quoc Viet',
                'price' => '1254635',
                'descripsion' => 'nha moi',
                'information' => 'nha dep',
                'image' => 'https://lh4.googleusercontent.com/-BxMiRuJ8CRo/V6P2oIOw9tI/AAAAAAAAFXM/t4S-sy8lFb47LIjRPK3FuCf7yfyL0urcwCLcB/s320/chung-cu-vay-30000-ty.jpg'

            ],
            [
                'id' => 12,
                'name' => 'Hasdess',
                'address' => 'Hoang Quoc Viet',
                'price' => '1254635',
                'descripsion' => 'nha moi',
                'information' => 'nha dep',
                'image' => 'https://lh4.googleusercontent.com/-BxMiRuJ8CRo/V6P2oIOw9tI/AAAAAAAAFXM/t4S-sy8lFb47LIjRPK3FuCf7yfyL0urcwCLcB/s320/chung-cu-vay-30000-ty.jpg'

            ],
            [
                'id' => 13,
                'name' => 'Hasdess',
                'address' => 'Hoang Quoc Viet',
                'price' => '1254635',
                'descripsion' => 'nha moi',
                'information' => 'nha dep',
                'image' => 'https://lh4.googleusercontent.com/-BxMiRuJ8CRo/V6P2oIOw9tI/AAAAAAAAFXM/t4S-sy8lFb47LIjRPK3FuCf7yfyL0urcwCLcB/s320/chung-cu-vay-30000-ty.jpg'

            ],
            [
                'id' => 14,
                'name' => 'Hasdess',
                'address' => 'Hoang Quoc Viet',
                'price' => '1254635',
                'descripsion' => 'nha moi',
                'information' => 'nha dep',
                'image' => 'https://lh4.googleusercontent.com/-BxMiRuJ8CRo/V6P2oIOw9tI/AAAAAAAAFXM/t4S-sy8lFb47LIjRPK3FuCf7yfyL0urcwCLcB/s320/chung-cu-vay-30000-ty.jpg'

            ],
            [
                'id' => 15,
                'name' => 'Hasdess',
                'address' => 'Hoang Quoc Viet',
                'price' => '1254635',
                'descripsion' => 'nha moi',
                'information' => 'nha dep',
                'image' => 'https://lh4.googleusercontent.com/-BxMiRuJ8CRo/V6P2oIOw9tI/AAAAAAAAFXM/t4S-sy8lFb47LIjRPK3FuCf7yfyL0urcwCLcB/s320/chung-cu-vay-30000-ty.jpg'

            ],
            [
                'id' => 16,
                'name' => 'Hasdess',
                'address' => 'Hoang Quoc Viet',
                'price' => '1254635',
                'descripsion' => 'nha moi',
                'information' => 'nha dep',
                'image' => 'https://lh4.googleusercontent.com/-BxMiRuJ8CRo/V6P2oIOw9tI/AAAAAAAAFXM/t4S-sy8lFb47LIjRPK3FuCf7yfyL0urcwCLcB/s320/chung-cu-vay-30000-ty.jpg'

            ],
            [
                'id' => 17,
                'name' => 'Hasdess',
                'address' => 'Hoang Quoc Viet',
                'price' => '1254635',
                'descripsion' => 'nha moi',
                'information' => 'nha dep',
                'image' => 'https://lh4.googleusercontent.com/-BxMiRuJ8CRo/V6P2oIOw9tI/AAAAAAAAFXM/t4S-sy8lFb47LIjRPK3FuCf7yfyL0urcwCLcB/s320/chung-cu-vay-30000-ty.jpg'

            ],
            [
                'id' => 18,
                'name' => 'Hasdess',
                'address' => 'Hoang Quoc Viet',
                'price' => '1254635',
                'descripsion' => 'nha moi',
                'information' => 'nha dep',
                'image' => 'https://lh4.googleusercontent.com/-BxMiRuJ8CRo/V6P2oIOw9tI/AAAAAAAAFXM/t4S-sy8lFb47LIjRPK3FuCf7yfyL0urcwCLcB/s320/chung-cu-vay-30000-ty.jpg'

            ],
            [
                'id' => 19,
                'name' => 'Hasdess',
                'address' => 'Hoang Quoc Viet',
                'price' => '1254635',
                'descripsion' => 'nha moi',
                'information' => 'nha dep',
                'image' => 'https://lh4.googleusercontent.com/-BxMiRuJ8CRo/V6P2oIOw9tI/AAAAAAAAFXM/t4S-sy8lFb47LIjRPK3FuCf7yfyL0urcwCLcB/s320/chung-cu-vay-30000-ty.jpg'

            ],
            [
                'id' => 20,
                'name' => 'Hasdess',
                'address' => 'Hoang Quoc Viet',
                'price' => '1254635',
                'descripsion' => 'nha moi',
                'information' => 'nha dep',
                'image' => 'https://lh4.googleusercontent.com/-BxMiRuJ8CRo/V6P2oIOw9tI/AAAAAAAAFXM/t4S-sy8lFb47LIjRPK3FuCf7yfyL0urcwCLcB/s320/chung-cu-vay-30000-ty.jpg'

            ],

        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
