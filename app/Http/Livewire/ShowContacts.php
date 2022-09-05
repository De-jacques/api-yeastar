<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Livewire\WithPagination;

class ShowContacts extends Component
{
    use WithPagination;

    public $apiURL; public $callAPI; public $postInput; public $headers; public $getContact;
    public $statusCode; public $responseBody; public $getToken; public $allContact; public $contactsIPBX;
    protected $getContactsIPBX; protected $response;


    public function mount(){
        $this->callAPI = 'http://192.168.1.251:8088/api/v2.0.0';
        $this->apiURL = 'http://192.168.1.251:8088/api/v2.0.0/login';
        $this->postInput = [
            'username' => 'admin',
            'password' => 'f36875828e663291991403a0f6506faa',
            'port' => '8333',
            'version' => '2.0.0'
        ];
        $this->headers = [
            'X-header' => 'value'
        ];

        // Start Get All contacts
        $this->response = Http::withHeaders($this->headers)->post($this->apiURL, $this->postInput);
        $this->statusCode = $this->response->status();
        $this->responseBody = json_decode($this->response->getBody(), true);
        $this->getToken = $this->responseBody['token'];
        $this->getContact = 'http://192.168.1.251:8088/api/v2.0.0/companycontacts/query?token='.$this->getToken;
        $this->getContactsIPBX = Http::post($this->getContact, ['id' => 'all']);
        $this->allContact = json_decode($this->getContactsIPBX->getBody(), true);
        $this->contactsIPBX = collect($this->allContact['companycontacts']);
        // dd($this->contactsIPBX);
    }


    public function render()
    {
        return view('livewire.show-contacts');
    }
}
