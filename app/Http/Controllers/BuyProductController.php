<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use App\Models\BuyProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class BuyProductController extends Controller
{
    public function buyproduct(Request $request,$id)
    {
        $user = User::find(Auth::user()->id);
        $adminData = User::where('role_id', 1)->first();

        $product = Product::find($id);

	$course_purchase = BuyProduct::create([
            'user_id' => $user->id,
            'product_id' => $id,
            'category_id' => $product->category_id,
        ]);
        $wallet = Wallet::create([
            'user_id' => $user->id,
            'product_id' => $product_id,
            'category_id' => $product->category_id,
            'payment_type' => 'debit',
            'amount' => $product->price,
        ]);

        $wallet = Wallet::create([
            'user_id' => $adminData->id,
            'product_id' => $product_id,
            'category_id' => $product->category_id,
            'payment_type' => 'credit',
            'amount' =>$product->price,
        ]);
        $credit_amount = $adminData->wallet + $product->price;
        $admin_update = User::where('id', $adminData->id)->update(['wallet' => $credit_amount]);

        $debit_amount = $user->wallet - $product->price;
        $user_update = User::where('id', $user->id)->update(['wallet' => $debit_amount]);









        return view('user.buyproduct');


    }
}
