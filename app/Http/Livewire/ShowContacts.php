<?php

namespace App\Http\Livewire;

use App\Models\Extension;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Carbon;

class ShowContacts extends Component
{
    use WithPagination;

    public $apiURL;
    public $responseBody;
    public $statusCode;
    public $getToken;
    public $getExtension;
    public $extensionsIPBX;
    protected $extensionsInDB;
    public $allExtension;
    protected $getExtensionIPBX;
    public $getValueStatus;
    protected $paginator;


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
        $this->getExtensionIPBX = Http::withHeaders($headers)->post($this->getExtension);
        $this->allExtension = json_decode($this->getExtensionIPBX->getBody(), true);
        $this->extensionsIPBX = collect($this->allExtension['extlist']);
        // dd($this->extensionsIPBX);
        $this->extensionsInDB = Extension::paginate(10);

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

    public function render()
    {

        return view('livewire.show-contacts',
            [
                'extensionsIPBX' => $this->extensionsIPBX,
                'extensionsInDB' => Extension::paginate(10),
            ]);
    }
}
