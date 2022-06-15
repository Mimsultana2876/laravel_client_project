<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\clienType;
use App\Models\clientInfoModel;
use App\Models\DomainModel;
use App\Models\HostingModel;
use App\Models\otherProjectModel;
use Session;
Session_start();

class ProjectController extends Controller
{
    //
    function show(){
        $query_c_type = clienType::all();
        // $query_c_type = clienType::all();
        
        $query_c_info = DB::table('client_info')
                        ->join('client_type','client_info.c_type_id','=','client_type.id')
                        ->select('client_info.*','client_type.client_type_name','client_type.client_type_status')
                        ->get();

        $query_domain_info = DB::table('domain_details')
                        ->join('client_type','domain_details.c_type_id','=','client_type.id')
                        ->join('client_info','domain_details.c_info_id','=','client_info.id')
                        ->select('domain_details.*','client_type.client_type_name','client_info.c_name')
                        ->get();
        $query_hosting_info = DB::table('hosting_details')
                        ->join('client_type','hosting_details.c_type_id','=','client_type.id')
                        ->join('client_info','hosting_details.c_info_id','=','client_info.id')
                        ->select('hosting_details.*','client_type.client_type_name','client_info.c_name')
                        ->get();
        $query_other_project_info = DB::table('other_project_details')
                        ->join('client_type','other_project_details.c_type_id','=','client_type.id')
                        ->join('client_info','other_project_details.c_info_id','=','client_info.id')
                        ->select('other_project_details.*','client_type.client_type_name','client_info.c_name')
                        ->get();
        // dd($query_other_project_info);
        $all = "all";
        // dd($query_domain_info);
        return view('project',compact('query_c_type','query_c_info','query_domain_info','query_hosting_info','query_other_project_info',"all"));
    }

    function ajax($id){
        $data_join = DB::table('client_info')
                     ->join('client_type','client_info.c_type_id','=','client_type.id')
                     ->select('client_info.*','client_type.client_type_name','client_type.client_type_status')
                     ->where('client_info.c_type_id','=',$id)
                     ->get();
                    //  ->orderBy('police_stations.id','desc')
                     
                     // dd($data_p);
 
         return response()->json($data_join);
 
     }

     function insert(request $request){
        // dd($request->c_type_id);
        $insert = '';
        if($request->domain_name){
            $insert = new DomainModel;
            $insert->c_type_id= $request->c_type_id;
            $insert->c_info_id = $request->c_info_id;
            $insert->domain_name = $request->domain_name;
            $insert->domain_start_date = $request->s_domain_date;
            $insert->domain_end_date = $request->e_domain_date;
            $insert->save();
            return redirect('admin/show_domain_info')->with('message', 'inserted');
        }
        else if($request->hosting_name){
            $insert = new HostingModel;
            $insert->c_type_id= $request->c_type_id;
            $insert->c_info_id = $request->c_info_id;
            $insert->hosting_name = $request->hosting_name;
            $insert->hosting_start_date = $request->s_hosting_date;
            $insert->save();
            return redirect('admin/show_hosting_info')->with('message', 'inserted');
        }
        else{
            $insert = new otherProjectModel;
            $insert->c_type_id= $request->c_type_id;
            $insert->c_info_id = $request->c_info_id;
            $insert->project_name = $request->project_name;
            $insert->project_details = $request->project_details;
            $insert->project_start_date = $request->project_start_date;
            $insert->project_time_quote = $request->porject_time_quote;
            $insert->save();
            return redirect('admin/show_other_project_info')->with('message', 'inserted');
        }
        
        // $data_join = DB::table('client_info')
        //              ->join('client_type','client_info.c_type_id','=','client_type.id')
        //              ->select('client_info.*','client_type.client_type_name','client_type.client_type_status')
        //              ->where('client_info.c_type_id','=',$id)
        //              ->get();
        //             //  ->orderBy('police_stations.id','desc')
                     
        //              // dd($data_p);
        
        // return response()->json($data_join);
        // echo json_encode($request);
 
     }
    function show_domain(){
        $query_c_type = clienType::all();
        // $query_c_type = clienType::all();
        
        $query_c_info = DB::table('client_info')
                        ->join('client_type','client_info.c_type_id','=','client_type.id')
                        ->select('client_info.*','client_type.client_type_name','client_type.client_type_status')
                        ->get();

        $query_domain_info = DB::table('domain_details')
                        ->join('client_type','domain_details.c_type_id','=','client_type.id')
                        ->join('client_info','domain_details.c_info_id','=','client_info.id')
                        ->select('domain_details.*','client_type.client_type_name','client_info.c_name')
                        ->get();
        // dd($query_domain_info[1]->client_type_name);
        return view('project',compact('query_c_type','query_c_info','query_domain_info'));

    }

    function show_hosting(){
        $query_c_type = clienType::all();
        // $query_c_type = clienType::all();
        
        $query_c_info = DB::table('client_info')
                        ->join('client_type','client_info.c_type_id','=','client_type.id')
                        ->select('client_info.*','client_type.client_type_name','client_type.client_type_status')
                        ->get();

        $query_hosting_info = DB::table('hosting_details')
                        ->join('client_type','hosting_details.c_type_id','=','client_type.id')
                        ->join('client_info','hosting_details.c_info_id','=','client_info.id')
                        ->select('hosting_details.*','client_type.client_type_name','client_info.c_name')
                        ->get();
        // dd($query_domain_info[1]->client_type_name);
        return view('project',compact('query_c_type','query_c_info','query_hosting_info'));

    }

    function show_other_project(){
        $query_c_type = clienType::all();
        // $query_c_type = clienType::all();
        
        $query_c_info = DB::table('client_info')
                        ->join('client_type','client_info.c_type_id','=','client_type.id')
                        ->select('client_info.*','client_type.client_type_name','client_type.client_type_status')
                        ->get();

        $query_other_project_info = DB::table('other_project_details')
                        ->join('client_type','other_project_details.c_type_id','=','client_type.id')
                        ->join('client_info','other_project_details.c_info_id','=','client_info.id')
                        ->select('other_project_details.*','client_type.client_type_name','client_info.c_name')
                        ->get();
        // dd($query_domain_info[1]->client_type_name);
        return view('project',compact('query_c_type','query_c_info','query_other_project_info'));

    }

    public function update(request $request){

        // $this->validate($request,[
        //     "c_type_id" => "required",
        //     "c_email" => "required",
        //     "c_website" => "required",
        //     "c_name" => "required",
        //     ],
        //     [
        //         'c_type_id.required'=> 'Please Select Client Type',
        //         'c_email.required'=> 'Please Fill Up Email',
        //         'c_website.required'=> 'Please Fill Up Website',
        //         'c_name.required'=> 'Please Fill Up Name',
        //     ]
        // );
       
        
        // dd($id);

        // $user_id = DB::table('client_info')
        //         ->where('c_type_id','=', $request->c_type_id)
        //         ->where('id','!=', $id)
        //         ->first();

        // $user = DB::table('client_info')
        // ->where('c_type_id', $request->c_type_id)
        // ->where('c_email', $request->c_email)
        // ->where('c_website', $request->c_website)
        // ->where('id','!=', $id)
        // ->first();


        // if($user_id===null && $user==null)
        // {

        //     if($request->c_phone==null){
        //         $request->c_phone="N/A";
        //     }
        //     if($request->c_address==null){
        //         $request->c_address="N/A";
        //     }

        //     $update = clientInfoModel::find($id);
        //     $update = '';
        $id= $request->domain_id_edit;
        // dd($id);
        if($request->domain_name_edit){
            
            $update =  DomainModel::find($id);
            $update->c_type_id= $request->c_type_id_edit;
            $update->c_info_id = $request->c_info_id;
            $update->domain_name = $request->domain_name_edit;
            $update->domain_start_date = $request->s_domain_date;
            $update->domain_end_date = $request->e_domain_date;
            
            $update->save();
            return redirect('admin/show_project_info')->with('message', 'updated');
        }
        else if($request->hosting_name){
            $update = HostingModel::find($id);
            $update->c_type_id= $request->c_type_id_edit;
            $update->c_info_id = $request->c_info_id;
            $update->hosting_name = $request->hosting_name;
            $update->hosting_start_date = $request->s_hosting_date;
            $update->save();
            return redirect('admin/show_project_info')->with('message', 'updated');
        }
        else{
            $update = otherProjectModel::find($id);
            $update->c_type_id= $request->c_type_id_edit;
            $update->c_info_id = $request->c_info_id;
            $update->project_name = $request->project_name;
            $update->project_details = $request->project_details;
            $update->project_start_date = $request->project_start_date;
            $update->project_time_quote = $request->porject_time_quote;
            $update->save();
            return redirect('admin/show_project_info')->with('message', 'updated');
        }


   

            // $update->c_type_id= $request->c_type_id;
            // $update->c_name = $request->c_name;
            // $update->c_website = $request->c_website;
            // $update->c_email = $request->c_email;
            // $update->c_phone = $request->c_phone;
            // $update->c_address = $request->c_address;
            // $update->save();
            // return redirect('admin/show_client_info')->with('message', 'updated');
        // }else{
        //     return redirect('admin/show_client_info')->with('message', 'existed');
        //      }
      
    } 
}
