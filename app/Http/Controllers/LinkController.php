<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function index()
    {
        return view('link.index');
    }

    protected function generateRandomString(int $size = 3): string
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $size; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function new(Request $request)
    {
        $request->validate(
            [
                'url' => 'required|url'
            ],
            [
                'url.required' => "The url is required.",
                'url.url' => 'The url must be a valid URL.',
            ]
        );

        $url = $request->url;


        $keyword = $this->generateRandomString(3);
        $ip = $request->getClientIp();
        $link = new Link();
        $link->keyword = $keyword;
        $link->ip = $ip;
        $link->url = $url;

        $app_domain = env('APP_DOMAIN_PROD', 'http://localhost:8000');

        $short_url = "$app_domain/$keyword";
        $link->save();

        return view('link.preview', compact('link', 'short_url'));
    }

    public function redirect($keyword)
    {
        $link = Link::where('keyword', $keyword)->first();
        if ($link) {
            return redirect($link->url);
        }
        return redirect('/');
    }

    public function preview()
    {
        return view('link.preview');
    }
}
