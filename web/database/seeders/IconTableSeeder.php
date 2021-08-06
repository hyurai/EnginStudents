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

    // 初期データ用意（列名をキーとする連想配列）
    $icons = [
              ['icon_name' => 'React',
                'icon_class' => 'fa-react'
               ],
               ['icon_name' => 'Vue.js',
               'icon_class' => 'fa-vuejs'
               ],
               [
                 'icon_name' => 'Angular',
                 'icon_class' => 'fa-angular'
               ],
               [
                 'icon_name' => 'Ruby',
                 'icon_class' => 'fa-gem'
               ],
               [
                 'icon_name' => 'Swift',
                 'icon_class' => 'fa-swift'
               ],
               [
                 'icon_name' => 'Kotolin',
                 'icon_class' => 'fa-android'
               ],
               [
                 'icon_name' => 'Javascript',
                 'icon_class' => 'fa-js'
               ],
               [
                 'icon_name' => 'Node.js',
                 'icon_class' => 'fa-node-js'
               ],
               [
                 'icon_name' => 'Java',
                 'icon_class' => 'fa-java'
               ],
               ['icon_name' => 'PHP',
                'icon_class' => 'fa-php'
               ]
             ];

    // 登録
    foreach($icons as $icon) {
      \App\Models\Icon::create($icon);
    }
    }
}
