<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class ShowContacts extends Component
{
    public $apiURL;
    public $responseBody;
    public $statusCode;
    public $getToken;
    public $getExtension;
    public $contacts;
    public $allContact;
    protected $getContact;
    public $getValueStatus;


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
        $this->getExtension = 'http://192.168.1.251:8088/api/v2.0.0/extension/list?token='.$this->getToken;
        $this->getContact = Http::withHeaders($headers)->post($this->getExtension);
        $this->allContact = json_decode($this->getContact->getBody(), true);
        $this->contacts = collect($this->allContact['extlist']);
        // dd($this->contacts);
    }


    public function render()
    {
        return view('livewire.show-contacts',
            [
                'contacts' => $this->contacts,
                // 'statusCall' =>
            ]);
    }
}
