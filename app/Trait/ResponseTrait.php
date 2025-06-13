<?php

namespace App\Trait;

trait ResponseTrait
{
    protected $success = 200;
    protected $error = 500;

    public $response = ['status' => false, 'response' => [], 'success_msg' => ''];

    public function success($redirect = NULL, $message = NULL)
    {
        $this->response['status'] = true;
        $this->response['redirect'] = $redirect;
        $this->response['message'] = !is_null($message) ? $message : 'Success';
        return redirect($redirect)->with(['success' => $message]);
    }

    public function error($redirect = NULL, $message = NULL)
    {
        $this->response['status'] = false;
        $this->response['redirect'] = $redirect;
        $this->response['error_msg'] = !is_null($message) ? $message : 'Something went wrong';
        return redirect($redirect)->with(['error' => $message]);
    }

    public function ajaxSuccess($response = [], $message = NULL)
    {
        $this->response['status'] = true;
        $this->response['response'] = $response;
        $this->response['success_msg'] = !is_null($message) ? $message : 'Success';
        return response()->json( $this->response, $this->success);
    }

    public function ajaxError($response = [], $message = NULL)
    {
        $this->response['status'] = false;
        $this->response['res$response'] = $response;
        $this->response['message'] = !is_null($message) ? $message : 'Something went wrong';
        return response()->json( $this->response, $this->error );
    }
}
