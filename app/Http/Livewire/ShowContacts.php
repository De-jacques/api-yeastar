<?php

namespace App\Http\Livewire;

use App\Models\Extension;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Carbon;

class ShowContacts extends Component
{
    use WithPagination;

    public $apiURL; public $responseBody; public $statusCode; public $getToken; public $getExtension; public $extensionsIPBX;  public $allExtension;
    public $getValueStatus; public $postInput; public $headers; public $addExtension; public $callAPI;
    protected $response; protected $getExtensionIPBX; protected $extensionsInDB;

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

        //Start Get All extensions
        $this->response = Http::withHeaders($this->headers)->post($this->apiURL, $this->postInput);
        $this->statusCode = $this->response->status();
        $this->responseBody = json_decode($this->response->getBody(), true);
        $this->getToken = $this->responseBody['token'];
        $this->getExtension = 'http://192.168.1.251:8088/api/v2.0.0/extension/list?token='.$this->getToken;
        $this->getExtensionIPBX = Http::withHeaders($this->headers)->post($this->getExtension);
        $this->allExtension = json_decode($this->getExtensionIPBX->getBody(), true);
        $this->extensionsIPBX = collect($this->allExtension['extlist']);
        // dd($this->extensionsIPBX);
        $this->extensionsInDB = Extension::paginate(10);
         //End Get All extensions

        foreach ($this->extensionsIPBX as $key => $extension) {

            //--- Start Store Extensions in DB

            // $data[] = [
            //     'number' => $extension['number'],
            //     'status' => $extension['status'],
            //     'type' => $extension['type'],
            //     'username' => $extension['username'],
            //     'created_at' => Carbon::now(),
            //     'updated_at' => Carbon::now()
            // ];
            foreach ($this->extensionsInDB as $i => $value) {
                    if ($extension['status'] !== $value['status']) {
                        Extension::where('number', $extension['number'])->update(['status' => $extension['status']]);
                    }
                    else {
                       Extension::where('number', $extension['number'])->update(['status' => $extension['status']]);
                    }
            }
        }
        //--- END Start Store Extensions in DB
        // $insertData = Extension::insert($data);

    }

    public function addExtension(Request $request){
        $this->addExtension = $this->callAPI.'/extension/add?token='.$this->getToken;
    }


    public function render()
    {

        return view('livewire.show-contacts',
            [
                'extensionsIPBX' => $this->extensionsIPBX,
                'extensionsInDB' => Extension::paginate(10),
            ]);
    }
}
