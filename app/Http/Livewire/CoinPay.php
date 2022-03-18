<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Hexters\CoinPayment\CoinPayment;
use Illuminate\Support\Facades\Redirect;

class CoinPay extends Component
{
    public function Pay(){

        $transaction['order_id'] = uniqid(); // invoice number
        $transaction['amountTotal'] = (FLOAT) 37.5;
        $transaction['note'] = 'Transaction note';
        $transaction['buyer_name'] = 'Raphael Abayomi';
        $transaction['buyer_email'] = 'raphyabak@gmail.com';
        $transaction['redirect_url'] = url('/back_to_tarnsaction'); // When Transaction was comleted
        $transaction['cancel_url'] = url('/back_to_tarnsaction'); // When user click cancel link


        /*
        *   @required true
        *   @example first item
        */
        $transaction['items'][] = [
          'itemDescription' => 'Product one',
          'itemPrice' => (FLOAT) 7.5, // USD
          'itemQty' => (INT) 1,
          'itemSubtotalAmount' => (FLOAT) 7.5 // USD
        ];

        /*
        *   @example second item
        */
        $transaction['items'][] = [
          'itemDescription' => 'Product two',
          'itemPrice' => (FLOAT) 10, // USD
          'itemQty' => (INT) 1,
          'itemSubtotalAmount' => (FLOAT) 10 // USD
        ];

        /*
        *   @example third item
        */
        $transaction['items'][] = [
          'itemDescription' => 'Product Three',
          'itemPrice' => (FLOAT) 10, // USD
          'itemQty' => (INT) 2,
          'itemSubtotalAmount' => (FLOAT) 20 // USD
        ];

        $transaction['payload'] = [
          'foo' => [
              'bar' => 'baz'
          ]
        ];
        return redirect(\CoinPayment::generatelink($transaction));
        // return CoinPayment::generatelink($transaction);
        // $working = CoinPayment::generatelink($transaction);
        // dd($working);
        // return Redirect::to($working);

    }

    public function render()
    {
        return view('livewire.coin-pay');
    }
}
