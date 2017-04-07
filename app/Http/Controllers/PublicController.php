<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Page;

class PublicController extends Controller
{
    /**
     * Initialize public controller.
     *
     * @return null
     */
    public function __construct()
    {
        $this->setupTheme(config('theme.themes.public.theme'), config('theme.themes.public.layout'));
        parent::__construct();
    }

    /**
     * Display homepage.
     *
     * @return response
     */
    public function home(Request $request)
    {
        $this->theme->layout('home');
        $this->theme->prependTitle('Home');
        return $this->theme->of('public::home', compact('page'))->render();
    }    
    /**
     * Display homepage.
     *
     * @return response
     */
    public function picture(Request $request)
    {   
        $item = $request->all();
        $file = $item['cropping'];
        if(!empty($file)) {
          
            $file       = str_replace('data:image/png;base64,', '', $file);
            $img        = str_replace(' ', '+', $file);
            $data       = base64_decode($img);
            $path       = public_path() . "/uploads/profile/test.png";
            $success    = file_put_contents($path, $data);
            if ($success) {
                echo "success";
            }
        }    

       

    }
}
