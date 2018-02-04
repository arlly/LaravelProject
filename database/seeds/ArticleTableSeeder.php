<?php

use Illuminate\Database\Seeder;
use App\Eloquent\Article;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 100; $i++) {
            Article::create([
                    'user_id' => 1,
                    'title' => 'テストです',
                    'content' => 'テクニカルアクションで使用するハードベイトのみならずライトウェイトのチャターやスピナベ、またベイトネコなどのスローダウンゲームにも対応できる要素も含んでいるため、ボートからオカッパリまでフィールド環境を問わず幅広く使用できる一本ですね！'
            ]);
        }
    }
}
