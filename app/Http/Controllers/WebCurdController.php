<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;

class WebCurdController extends Controller
{
    /*
     * Store response datas
     */
    protected $response;

    /**
     *Store modal repositiry.
     */
    protected $repository;

    /**
     * Create a new admin controller instance.
     */
    public function __construct()
    {
        $this->middleware('web');
    }

    /**
     * Return json response.
     *
     * @return Response
     */
    public function respond(Request $request)
    {
        if ($request->wantsJson()) {
            return $this->respondJson();
        }

        if ($request->ajax()) {
            return $this->respondAjax();
        }

        if (empty($this->responseRedirect) && !is_null($this->responseView)) {
            return $this->respondTheme();
        }

        return $this->respondRedirect();
    }

    /**
     * Return json response.
     *
     * @return Response
     */
    public function respondJson()
    {
        return Response::json(
                [
                    'data'     => $this->responseData,
                    'message'  => $this->responseMessage,
                    'code'     => $this->responseCode,
                    'meta'     => $this->responseMeta,
                    'redirect' => $this->responseRedirect,
                ]
            );
    }

    /**
     * Return ajax response.
     *
     * @return Response
     */
    public function respondAjax()
    {
        return  $this->responseView;
    }

    /**
     * Return ajax response.
     *
     * @return Response
     */
    public function respondRedirect()
    {
        return  redirect($this->responseRedirect)->withInput()
                                                    ->with('message', $this->responseMessage)
                                                    ->with('code', $this->responseCode);
    }

    /**
     * Return ajax response.
     *
     * @return Response
     */
    public function respondTheme()
    {
        return  $this->responseView;
    }

    /**
     * Set vari.
     *
     * @param type $name
     * @param type $value
     *
     * @return type
     */
    public function __set($name, $value)
    {
        $this->response[$name] = $value;
    }

    public function __get($name)
    {
        if (array_key_exists($name, $this->response)) {
            return $this->response[$name];
        }
    }
}
