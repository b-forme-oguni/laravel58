<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CtrlController extends Controller
{
    // レスポンスをplainでページに表示
    public function plain()
    {
        return response('こんにちは、世界！', 200)
            ->header('Content-Type', 'text/plain');
    }

    // xml形式でページを表示
    public function header()
    {
        return response()
            ->view('ctrl.header', ['msg' => 'こんにちは、世界！', 200])
            ->header('Content-Type', 'text/xml');
    }

    // json形式で内容を表示
    public function outJson()
    {
        return response()
            ->json([
                'name' => 'Yoshihiro,Yamada',
                'sex' => 'male',
                'age' => 18,
            ])
            ->withCallback('callback');
    }

    // 指定のフォルダ内のファイルをダウンロード
    public function outFile()
    {
        return response()
            ->download(
                'C:/Data/data_log.csv',
                'download.csv',
                ['content-type' => 'text/csv']
            );
    }

    // csvファイルでダウンロード
    public function outCsv()
    {
        return response()
            ->streamDownload(function () {
                print(
                    "1,2019/10/1,123\n" .
                    "2,2019/10/2,116\n" .
                    "3,2019/10/3,98\n" .
                    "4,2019/10/4,102\n" .
                    "5,2019/10/5,134\n"
                );
            }, 'download.csv', ['content-type' => 'text/csv']);
    }

    // 指定されたフォルダ内のpng画像をページに出力
    public function outImage() {
        return response()
        ->file('C:/Data/wings.png',['content-type'=>'image/png']);
    }
}
