<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Response;

class ResponseMacroServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Response::macro('true', function (
            $data = null,
            $total = null,
            $message = null
        ) {
            $form = ['status' => true];
            if (isset($data)) {
                $form['data'] = $data;
            }
            if (isset($total)) {
                $form['total'] = $total;
            }
            if (isset($message)) {

                $form['messages'] = [$message];
            }
            return response()->json($form);
        });


        Response::macro('false', function ($error) {
            $white_list = ['App\Exceptions\DataNotFoundException','Exception'];
            $message['status'] = false;
            $exc = get_class($error);

            $errorMessage = ['500 error'];

            if(in_array($exc,$white_list))
            {
                $message['messages'] = ["".$error->getMessage().""];
            }
            else
            {
                $message['messages'] = $errorMessage;
            }

            if($error->getCode()==403)
            {
                return response($message,403);
            }
            return response()->json($message);

        });
    }

}
