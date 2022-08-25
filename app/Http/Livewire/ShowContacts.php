<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class ShowContacts extends Component
{
    public $apiURL;
    public $responseBody;
    public $statusCode;
    public $allContacts;
    public $convertData;
    public $getToken;
    public $myRequest;
    public $deviceInfo;
    public $myData;
    public $myResponse;
    public $getDeviceInfo = [];

    public function mount(){
        $this->apiURL = 'http://192.168.1.251:8088/api/v2.0.0/login';
        $postInput = [
            'username' => 'admin',
            'password' => 'f36875828e663291991403a0f6506faa',
            'port' => '8333',
            'version' => '2.0.0'
        ];
        $headers = [
            'X-header' => 'value'
        ];

        $response = Http::withHeaders($headers)->post($this->apiURL, $postInput);

        $this->statusCode = $response->status();
        $this->responseBody = json_decode($response->getBody(), true);
        $this->getToken = $this->responseBody['token'];
        $this->deviceInfo = 'http://192.168.1.251:8088/api/v2.0.0/extension/list?token='.$this->getToken;
        $this->getDeviceInfo = Http::withHeaders($headers)->post($this->deviceInfo);
        $this->responseBody2 = json_decode($this->getDeviceInfo->getBody(), true);
        // dd(collect($this->responseBody2['extlist']['0']));
        $this->myResponse = $this->responseBody2['extlist'];
        foreach ($this->myResponse as $key ) {
            dd($key);
        }
    }


    public function render()
    {
        return view('livewire.show-contacts', [
            'myData' => $this->myResponse
        ]);
    }
}
