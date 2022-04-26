<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function redirects()
   {

      $usertype= Auth::user()->usertype;

      if($usertype=='1')
      {
          return view('admin.adminhome');
      }

      else
      {
        $data = product::paginate(6);

        $user=auth()->user();

        $count=cart::where('phone',$user->phone)->count();

        return view('user.home',compact('data','count'));
      }
   }

   public function index()
   {

        $data = product::paginate(6);

        return view('user.home',compact('data')); 
    }
      
       public function search(Request $request)
       {
         $search=$request->search;

         if($search=='')
         {
          $data = product::paginate(6);
          return view('user.home',compact('data'));
         }
         $data=product::where('title','Like','%'.$search.'%')->get();

         return view('user.home',compact('data'));
       }

       public function addcart(Request $request ,$id)
       {
         if(Auth::id())
         {

          $user=auth()->user();

          $product=product::find($id);
          $cart=new cart;

          $cart->name=$user->name;
          $cart->phone=$user->phone;
          $cart->address=$user->address;
          $cart->product_title=$product->title;
          $cart->price=$product->price;
          $cart->quantity=$request->quantity;

          $cart->save();


           return redirect()->back()->with('message','product added sucessfully');
         }

         else{
           return redirect('login');
         }




       }

       public function showcart()
       {

        $user=auth()->user();
        $cart=cart::where('phone',$user->phone)->get();

        $count=cart::where('phone',$user->phone)->count();

         return view('user.showcart',compact('count','cart'));
       }

       public function deletecart($id)
       {
         $data=cart::find($id);

         $data->delete();
         return redirect()->back()->with('message','product deleted');;
       }



       public function info(){
         return view('user.info');
       }

       public function confirmorder(Request $request)
       {
         $user=auth()->user();

         $name=$user->name;
         $phone=$user->phone;
         $address=$user->address;

         foreach($request->productname as $key=>$productname)
         {
           $order=new order;

           $order->product_name=$request->productname[$key];
           $order->price=$request->price[$key];
           $order->quantity=$request->quantity[$key];

           $order->name=$name;

           $order->phone=$phone;
           $order->address=$address;

           $order->status='not delivered';

           $order->save();

           

         }
    DB::table('carts')->where('phone',$phone)->delete();
         return redirect()->back()->with('message','your order confirm sucessfully');

       }
   }

