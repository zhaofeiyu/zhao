<?php 

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;

class MessageController extends Controller 
{
	/**
	 * [Index 表单]
	 */
	public function Index(){
		//echo 123;die;
		return view('message/index');
	}

	
	/**
	 * [Add 添加]
	 */
	public function Add(){
		$content=$_POST['content'];
		$re=DB::insert("insert into message(m_content) values('$content')");
		// var_dump($re);
		if($re){
			return redirect('/lists');
		}else{
			echo "NO";
		}
	}


	/**
	 * [Lists 列表]
	 */
	public function Lists(){
		$arr=DB::select("select * from message");
		//print_r($arr);
		return view('message/list',['arr'=>$arr]);
	}


	/**
	 * [Del 删除]
	 */
	public function Del(){
		$id=$_GET['id'];
		$arr=DB::delete("delete from message where m_id='$id'");
		if($arr){
			return redirect('/lists');
		}
	}

	public function Update(){
		$id=$_GET['id'];
		$arr=DB::select("select * from message where m_id = '$id'");
		//print_R($arr);
		return view('message/save',['arr'=>$arr]);
	}

	public function Save(){
		//echo 123;dhie;
		$id=$_GET['hid'];
		$content=$_GET['content'];
		$arr=DB::update("update message set m_content='$content' where m_id='$id'");
		//var_dump($arr);die;
		return redirect('/lists');
	}
}