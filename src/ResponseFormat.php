<?php
namespace Zone\ResponseFormat;

class ResponseFormat
{
    public static function FailedReturnData($error, $code = 403){
//        $result['errors'] =
        return response()->make([
            'status' => false,
            'message' => $error,
            'data' => (object)[]
        ], $code);
    }

    public static function SuccessReturnData($data = [], $message = ''){
        return response()->make([
            'status' => true,
            'message' => $message,
            'data' => (object)$data
        ], 200);
    }
}
