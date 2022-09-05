<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use App\Models\Extension;
use Illuminate\Support\Carbon;
use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Livewire\WithPagination;

class ShowContacts extends Component
{
    use WithPagination;

    public $apiURL; public $callAPI; public $postInput; public $headers; public $getContact;
    public $statusCode; public $responseBody; public $getToken; public $allContact; public $contactsIPBX;
    protected $getContactsIPBX; protected $response; protected $contactsInDB;


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
        $this->contactsInDB = Contact::paginate(10);

        //Start Store Contacts in DB
        foreach ($this->contactsIPBX as $key => $contact) {
            //  $data[] = [
            //     'firstname' => $contact['firstname'],
            //     'lastname' => $contact['lastname'],
            //     'email' => $contact['email'],
            //     'company' => $contact['company'],
            //     'businessnum' => $contact['businessnum'],
            //     'businessnum2' => $contact['businessnum2'],
            //     'businessfax' => $contact['businessfax'],
            //     'mobile' => $contact['mobile'],
            //     'mobile2' => $contact['mobile2'],
            //     'homenum' => $contact['homenum'],
            //     'homenum2' => $contact['homenum2'],
            //     'homefax' => $contact['homefax'],
            //     'othernum' => $contact['othernum'],
            //     'zipcode' => $contact['zipcode'],
            //     'street' => $contact['street'],
            //     'city' => $contact['city'],
            //     'state' => $contact['state'],
            //     'country' => $contact['country'],
            //     'created_at' => Carbon::now(),
            //     'updated_at' => Carbon::now()
            // ];

            foreach ($this->contactsInDB as $index => $value) {
                $checkContactIPBX = $this->contactsIPBX;
                $convertContactInArray = $checkContactIPBX->toArray();
                $lastData = end($convertContactInArray);
                // dd($lastData);

                foreach ($lastData as $k) {
                   $requestContact = Contact::where('company', $lastData['company'])->first();
                   if ($requestContact === null) {
                    Contact::create([
                        'firstname' => $lastData['firstname'],
                        'lastname' => $lastData['lastname'],
                        'email' => $lastData['email'],
                        'company' => $lastData['company'],
                        'businessnum' => $lastData['businessnum'],
                        'businessnum2' => $lastData['businessnum2'],
                        'businessfax' => $lastData['businessfax'],
                        'mobile' => $lastData['mobile'],
                        'mobile2' => $lastData['mobile2'],
                        'homenum' => $lastData['homenum'],
                        'homefax' => $lastData['homefax'],
                        'othernum' => $lastData['othernum'],
                        'zipcode' => $lastData['zipcode'],
                        'street' => $lastData['street'],
                        'city' => $lastData['city'],
                        'state' => $lastData['state'],
                        'country' => $lastData['country'],
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now()
                    ]);
                   }
                }
            }
        }
        // $insertContacts = Contact::insert($data);
        //End Store Contacts in DB

    }


    public function render()
    {
        return view('livewire.show-contacts', [
            'contactsIPBX' => Extension::paginate(10)
        ]);
    }
}
