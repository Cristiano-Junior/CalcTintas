<?php

/** Arquivo responsável por chamar a Service e de acordo com o resultado, retornar para o front-end
 * 
 * Caso algum erro aconteça irá retornar 'status': false para o front-end.
 * 
 * author Cristiano Junior
*/

namespace App\Http\Controllers;

use App\Services\CalculatorService;
use App\Http\Requests\CalculatorRequest;

class CalculatorController extends Controller
{
    public function calculate(CalculatorRequest $request, CalculatorService $service) {
        
        $data = $service->calculate($request->all());

        if(isset($data['status']))
        {
            return response()->json([
                "status" => $data['status'],
                "message" => $data['message']
            ]);
        }

        return response()->json([
            "status" => true,
            "message" => "Cálculo realizado com sucesso!",
            "data" => $data
        ]);
    }
}
