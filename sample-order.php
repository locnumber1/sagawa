<?php
require_once __DIR__ . '/vendor/autoload.php';

use oro\Sagawa\Sagawa;

$RequestData = array(
    'TEN_NGUOI_NHAN'    =>  '120  hoàng quốc việt',
    'SDT_NHAN'          =>  '0123456',
    'MA_TINH_NHAN'      =>  '10',
    'MA_TINH_LH'        =>  '10',
    'MA_HUYEN_NHAN'     =>  '10028',
    'DIA_CHI'           =>  '120  hoàng quốc việt',
    'TEN_NGUOI_GUI'     =>  'vuong',
    'SDT_NGUOI_GUI'     =>  '12',
    'DIA_CHI_NGUOI_GUI' =>  '60 hoàng quốc việt',
    'LOAI_BPBK'         =>  'SPX',
    'TT_BO_SUNG'        =>  '12',
    'TRONG_LUONG'       =>  135.0,
    'SDT_NGUOI_GUI'     =>  '12',
    'DICH_VU'           =>  'CPN',
    'NOI_DUNG'          =>  'cơm và canh',
    'SO_THAM_CHIEU'     =>  '0123654',
    'SO_COD'            =>  1234565.0,
    'TL_QUY_DOI'        =>  123.0,
    'MA_XA_GUI'         =>  "1012109",
    'MA_QUAN_HUYEN_GUI' => "10028",
    'TG_LAY_HANG_DU_KIEN' => '20201111121212',
    'ITEMS'             => null
); // truyen vao thong tin gui 

$sagawa = new Sagawa('0191NB','phanmemso1',$RequestData);
$sagawainfo = $sagawa->receive_order();

print_r($sagawainfo);
