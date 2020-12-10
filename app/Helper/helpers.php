<?php

use Illuminate\Support\Facades\Http;

function getUser($user_id)
{
    $url=env('SERVICE_USER_URL').'users/'.$user_id;

    try {
        $reponse=Http::timeout(10)->get($url);
        $data=$reponse->json();
        $data['http_code']=$reponse->getStatusCode();

        return $data;
    } catch (\Throwable $th) {
        return [
            'status'=>'error',
            'http_code'=>500,
            'message'=>'service user unavailable'
        ];
    }
}

function getUserByIds($userIds = [])
{
    $url=env('SERVICE_USER_URL').'users/';
    
    try {
        if(count($userIds)===0){
            return [
                'status'=>'success',
                'http_code'=>200,
                'data'=>[]
            ];
        }

        $response=Http::timeout(10)->get($url, ['user_ids[]'=>$userIds]);
        $data=$response->json();
        $data['http_code']=$response->getStatusCode();
        return $data;
    } catch (\Throwable $th) {
        return [
            'status'=>'error',
            'http_code'=>500,
            'message'=>'service user unavailable'
        ];
    }
}

function postOrder($params)
{
    $url=env('SERVICE_ORDER_PAYMENT_URL').'api/orders';
    try {
        $reponse=Http::post($url,$params);
        $data=$reponse->json();
        $data['http_code']=$reponse->getStatusCode();
        return $data;
    } catch (\Throwable $th) {
        return [
            'status'=>'error',
            'http_code'=>500,
            'message'=>'service order payment unavailable'
        ];
    }
}