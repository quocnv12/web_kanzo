<?php
namespace App\Http\Controllers\frontend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\{product,news};
use App\models\popup;
use App\models\intro_general;
use App\models\question;
use App\models\video;
use App\models\news;
class HomeController extends Controller
{
	public function index(){
		$data['popup'] = popup::first();
		$data['question'] = question::orderBy('updated_at','DESC')->limit(2)->get();
		$data['news'] = news::orderBy('updated_at','DESC')->limit(2)->get();
		$data['product'] = product::orderBy('id','DESC')->where('active',1)->limit(5)->get();
		$data['product1'] = product::find(6);
		$data['product2'] = product::find(4);
		$data['product3'] = product::find(5);
		$data['product4'] = product::find(10);
		$data['product5'] = product::find(11);
		$data['intro_general'] = intro_general::first();
		$data['video'] = video::orderBy('title','DESC')->limit(4)->get();
		return view('pages.home',$data);
	}
	
	function Getsearch(request $request)
	{
		//$data['news']=news::where('name','like','%'.$request->tk.'%')->paginate(20);
		$data['product']=product::where('name','like','%'.$request->tk.'%')->paginate(20);
		//dd($data);
		return view('pages.timkiem',$data);
	}


}