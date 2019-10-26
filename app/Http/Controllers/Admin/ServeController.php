<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class ServeController extends Controller
{
    public function create(){
        return view('serve.create');
    }
    public function create_do(){
        $post=request()->except('_token');
        //dd($post);
        //执行添加
        $res=DB::table('serve')->insert($post);
        if($res){
        	return redirect('serve/index');
        }
    }
    //服务列表查询
    public function index(){
        //接收数据
        $data=request()->except('_token');
        //dd($data);
        $where=[];
        if(!empty($data['serve_type'])){
            $where[]=['serve_type','=',$data['serve_type']];
        }
        //dd($where);
        if(!empty($data['client_name'])){
            $where[]=['client_name','like',"%".$data['client_name']."%"];
        }
        if(!empty($data['serve_desc'])){
            $where[]=['serve_desc','like',"%".$data['serve_desc']."%"];
        }
        if(!empty($data['serve_contact'])){
            $where[]=['serve_contact','like',"%".$data['serve_contact']."%"];
        }
        if(!empty($data['serve_date'])){
            $where[]=['serve_date','like',"%".$data['serve_date']."%"];
        }
        $Info=DB::table('serve')->where($where)->paginate(2);
        return view('serve.index',['Info'=>$Info,'data'=>$data]);	
    }
    public function del($id){
        if(!empty($id)){
            $res=DB::table('serve')->where('serve_id','=',$id)->delete();
            echo '删除失败';
            return redirect('serve/index');
        }
    }
    //修改页面
    public function edit($id){
        //根据id查询对应的单条数据
        $Info=DB::table('serve')->where(['serve_id'=>$id])->first();;
        return view('serve/edit',['Info'=>$Info]);
    }
    //修改执行页面
    public function update($id){
        $post=request()->except('_token');
        //dd($post);
        if(!empty($id)){
            
            $res=DB::table('serve')->where('serve_id',$id)->update($post);
            echo '编辑成功';
            return redirect('serve/index');
            

        }   
    }
}
