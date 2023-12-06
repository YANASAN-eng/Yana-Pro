<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'name' => '現代微分幾何入門 (基礎数学選書 25) 単行本 – 1981/5/30',
            'img_path' => 'img/differential_geometry.jpg',
            'degree' => '京都大学名誉教授　理博',
            'author' => '松本　誠',
            'bibliographic_information' => 'Ａ５判／242頁／定価3960円（本体3600円＋税10％）
            1975年5月発行，復刊 2003年8月発行
            ISBN 978-4-7853-1116-2 （旧ISBN 4-7853-1116-9）　 C3041',
            'description' => '数学と理論物理学に関心のある読者のための現代微分幾何への入門書である.最近はローレンツ微分幾何も深く研究され,接続の理論がゲージ場の理論に用いられ,数学と理論物理との関係が深くなっている.本書では,リーマン幾何の重要な話題をほとんどとり上げ,他書にはあまりないローレンツ幾何をも解説している.',
            'content' => 'この本はフィンスラー計量に基づくフィンスラー幾何学を中心として書かれているが，それさえ十分に知れば，さらに一般的な計量に基づく幾何学を知るのにそれほど苦労は要しないと考えられる．
            　最初の三つの章はそれぞれのテーマを簡略に述べたものであり，後のための準備として述べたものである．第４章は，フィンスラー幾何学ともっと一般な計量に基づく幾何学の歴史的な概観であり，とくにCartan，Berwald，河口の仕事の紹介につとめ，第５章は共変微分法に基づいてフィンスラー接続を述べ，系統的にフィンスラー幾何学への入門を行い，重要な特殊フィンスラー空間のいくつかを紹介するよう努力している．',
        ]);
    }
}
