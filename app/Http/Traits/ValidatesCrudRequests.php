<?php

namespace App\Http\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Foundation\Http\FormRequest;

trait ValidatesCrudRequests
{
    protected function validateRequest(Request $request, ?string $formRequestClass): array
    {
        if (!$formRequestClass) {
            return $request->all();
        }

        $formRequest = App::make($formRequestClass);
        $formRequest->setContainer(App::getFacadeRoot())->setRedirector(app('redirect'));

        $formRequest->merge($request->all());
        $formRequest->validateResolved();

        return $formRequest->validated();
    }
}
