<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Models\clienType;
use App\Models\clientInfoModel;
use App\Models\words;
use App\Models\u_model;
use App\Models\designation;
use App\Models\mpDetail;
use App\Models\policeStationResponsibleParson;
use App\Models\word_rp;
use App\Models\unitRP;





class delete extends Controller
{

    function deletes($model,$id)
    {
       

            if($model=="clienType")
            {
                $delete_row=clienType::find($id);
                $delete_row->delete();
                return redirect('admin/show_client_type')->with('message', 'deleted');
            }
            elseif($model=="clientInfoModel"){
                $delete_row=clientInfoModel::find($id);
                $delete_row->delete();
                return redirect('admin/show_client_info')->with('message', 'deleted');
            }
            elseif($model=="words"){
                $delete_row=words::find($id);
                $delete_row->delete();
                return redirect('/add_word_info')->with('message', 'deleted');
            }
            elseif($model=="u_model"){
                $delete_row=u_model::find($id);
                $delete_row->delete();
                return redirect('/add_unit_info')->with('message', 'deleted');
            }
            elseif($model=="designation"){
                $delete_row=designation::find($id);
                $delete_row->delete();
                return redirect('/show_designation_info')->with('message', 'deleted');
            }
            elseif($model=="mpDetail"){
                $delete_row=mpDetail::find($id);
                $delete_row->delete();
                return redirect('/show_mp_info')->with('message', 'deleted');
            }
            elseif($model=="policeStationResponsibleParson"){
                $delete_row=policeStationResponsibleParson::find($id);
                $delete_row->delete();
                return redirect('/show_thana_rs_info')->with('message', 'deleted');
            }
            elseif($model=="word_rp"){
                $delete_row=word_rp::find($id);
                $delete_row->delete();
                return redirect('/show_word_rp_info')->with('message', 'deleted');
            }
            elseif($model=="unitRP"){
                $delete_row=unitRP::find($id);
                $delete_row->delete();
                return redirect('/show_unit_rp_info')->with('message', 'deleted');
            }

               
     
        
    }
}