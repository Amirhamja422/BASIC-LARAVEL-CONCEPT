<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChartController extends Controller
{
   function LinearChart(){
    $results = DB::table('store_master')
    ->leftJoin('sales_master', 'sales_master.store_id', '=', 'store_master.id')
    ->leftJoin('expense_master', 'expense_master.store_id', '=', 'store_master.id')
    ->groupBy('store_master.id')
    ->select('store_master.name', DB::raw('SUM(sales_master.ammount) AS sales'), DB::raw('SUM(expense_master.ammount) AS expense'))
    ->get();
    $data ="";
    foreach($results as $val){
     $data .= "['".$val->name."',".$val->sales.", ".$val->expense."],";
    }
    // dd($data);
    return view('line-chart',compact('data'));

   }
}
