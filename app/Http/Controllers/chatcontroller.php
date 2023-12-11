<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class chatcontroller extends Controller
{
    public function indexchat()
    {
        $chats = DB::table('chat')->get();

        foreach ($chats as $chat) {
            $chat->pesan = $this->replaceEmoticons($chat->pesan);
        }

        return view('indexchat', compact('chats'));
    }

    private function replaceEmoticons($text)
    {
        $emoticonMapping = [
            ':))' => '1.png',
            ':3' => '2.png',
            ':P' => '3.png',
            ':C' => '4.png',
            ';)' => '5.png',
        ];

        $words = explode(' ', $text);

        foreach ($words as &$word) {
            if (array_key_exists($word, $emoticonMapping)) {
                $imgPath = asset("img/{$emoticonMapping[$word]}");
                $imgTag = "<img src=\"$imgPath\" alt=\"$word\" />";
                $word = $imgTag;
            }
        }

        return implode(' ', $words);
    }
    public function homechat()
	{
		return view('homechat');

	}
}
