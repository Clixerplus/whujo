<?php

namespace App\Http\Controllers;


use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
//use MercadoPago\SDK as MercadoPago;
use App\PaymentMethods\MercadoPago;

class CheckoutController extends Controller
{
    /*  public function __invoke(Request $request)
    {
        $token = $request->token;
        $payment_method_id = $request->payment_method_id;
        $installments = $request->installments;
        $issuer_id = $request->issuer_id;

        MercadoPago::setAccessToken(env('MERCADOPAGO_ACCESS_TOKEN'));

        $payment = new Payment();

        $payment->transaction_amount = 141;
        $payment->token = $request->token;
        $payment->description = "Ergonomic Silk Shirt";
        $payment->installments = $request->installments;
        $payment->payment_method_id = $request->payment_method_id;
        $payment->payer = array(
            "email" => "test_user_58321508@testuser.com"
        );

        $payment->save();

        dd($payment->status);
    } */

    public function __invoke(Request $request)
    {
        /* $allowedPaymentMethods = config('payment-methods.enabled');
        $request->validate([
            'payment_method' => [
                'required',
                Rule::in($allowedPaymentMethods),
            ],
            'terms' => 'accepted',
        ]); */


        //$order = $this->setUpOrder($preOrder, $request);
        //$this->notify($order);

        $url = $this->generatePaymentGateway(
            'mercadopago',
            Service::find(1)
            /* $request->get('payment_method'),
            $order */
        );

        return redirect()->to($url);
    }

    protected function generatePaymentGateway($paymentMethod, $product): string
    {
        $method = new MercadoPago;
        return $method->setupPaymentAndGetRedirectURL($product);
    }



    /*
    Mastercard	        5031 7557 3453 0604	 123   11/25
    Visa	            4509 9535 6623 3704	 123   11/25
    American Express	3711 803032 57522	 1234  11/25

    APRO: Pago aprobado.
    CONT: Pago pendiente.
    OTHE: Rechazado por error general.
    CALL: Rechazado con validación para autorizar.
    FUND: Rechazado por monto insuficiente.
    SECU: Rechazado por código de seguridad inválido.
    EXPI: Rechazado por problema con la fecha de expiración.
    FORM: Rechazado por error en formulario.
    */
}
