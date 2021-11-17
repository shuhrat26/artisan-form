<?php

namespace Shuhrat26\ArtisanForm\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Symfony\Component\Console\Output\BufferedOutput;

class ArtisanController extends Controller
{
    public function index()
    {
        return view('shuhrat26::index');
    }

    public function perform(Request $request)
    {
        $validated = $request->validate([
            'command' => 'required',
        ]);
        $output = new BufferedOutput(BufferedOutput::VERBOSITY_NORMAL);
        try {
            Artisan::call($validated['command'], [], $output);
            $output = $output->fetch();
        } catch (\Exception $exception) {
            $request->session()->flash('artisan-error', $exception->getMessage());
            return redirect()->route('artisan.index');
        }

        $request->session()->flash('artisan-result', $output);
        return redirect()->route('artisan.index');
    }
}
