<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Litepie\Http\Controllers\PublicController as BaseController;
use Pages;
use Illuminate\Support\Facades\Http;

class PublicController extends BaseController
{
    use AuthorizesRequests;
    use DispatchesJobs;
    use ValidatesRequests;

    /**
     * Show dashboard for each user.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        $data = Pages::getPage('home');
        return $this->response
            ->setMetaKeyword(strip_tags($data['meta_keyword']))
            ->setMetaDescription(strip_tags($data['meta_description']))
            ->setMetaTitle(strip_tags($data['meta_title']))
            ->layout('home')
            ->view('home')
            ->data(compact('data'))
            ->output();
    }


    public function test(){
        $content = $this->getContents('https://www.propertyfinder.ae/en/rent/apartment-for-rent-dubai-dubai-sports-city-hera-tower-8805176.html');
        return $content;
    }

    private function getContents($url) {
        try{
            $response = Http::withHeaders([
                "User-Agent" => "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36",
                "Accept" => "text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",
                "Accept-Encoding" => "gzip, deflate, sdch",
                "Accept-Language" => "en-GB,en-US;q=0.8,en;q=0.6"
            ])->get($url);

            return $response->body();
        } catch (Exception $e) {
            return null;
        }
    }
}
