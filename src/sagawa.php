<?php 
namespace Oro\Sagawa;

class Sagawa{
    private $UserName;
    private $Password;
    protected $RequestData = array();
    protected $RequestApi = 'http://118.70.180.205:9049/H2Service/APIThongTinTuDoiTac';

    function __construct($UserName,$Password,$RequestData,$Sagawarequest Sagawarequest){
        $this->UserName = $UserName;
        $this->Password = $Password;
        $this->RequestData = $array_data;
    }

    protected function fetchapi($RequestType){
        $curl = curl_init();

        $POSTFIELDS = array(
            'RequestType' => $RequestType,
            'RequestData' => json_encode($this->RequestData),
            'UserName'    => $this->UserName,
            'Password'    => $this->Password
        );

        curl_setopt_array($curl, array(
          CURLOPT_URL => $this->RequestApi,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS => json_encode($POSTFIELDS),
          CURLOPT_HTTPHEADER => array("Content-Type: application/json"),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        return $response;
    }

    public function fee(){
        if(!empty($this->UserName) && !empty($this->Password)){
            return $this->fetchapi('DU_KIEN_TINH_GIA');
        }else{
            echo 'Error connect!';
            die();
        }
    }

    public function receive_order(){
        if(!empty($this->UserName) && !empty($this->Password)){
            return $this->fetchapi('API_NHAN_DON_HANG');
        }else{
            echo 'Error connect!';
            die();
        }
    }

    public function tracking_order(){
        if(!empty($this->UserName) && !empty($this->Password)){
            return $this->fetchapi('DOI_TAC_SEARCH_LIST_TRACK_AND_TRACE');
        }else{
            echo 'Error connect!';
            die();
        }
    }
}