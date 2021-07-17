<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // ←これを追加


class IconTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('icons')->truncate();

    // 初期データ用意（列名をキーとする連想配列）
    $icons = [
              ['icon_name' => 'React',
                'icon_class' => 'fa-react'
               ],
               ['icon_name' => 'PHP',
                'icon_class' => 'fa-php'
               ]
             ];

    // 登録
    foreach($icons as $icon) {
      \App\Icon::create($icon);
    }
    }
}
