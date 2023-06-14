<?php

namespace App\Http\Controllers;

use App\Models\Cursoscap;
use Illuminate\Http\Request;

/**
 * Class CursoscapController
 * @package App\Http\Controllers
 */
class CursoscapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cursoscaps = Cursoscap::paginate();

        return view('cursoscap.index', compact('cursoscaps'))
            ->with('i', (request()->input('page', 1) - 1) * $cursoscaps->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cursoscap = new Cursoscap();
        return view('cursoscap.create', compact('cursoscap'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Cursoscap::$rules);

        $cursoscap = Cursoscap::create($request->all());

        return redirect()->route('cursoscaps.index')
            ->with('success', 'Cursoscap created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cursoscap = Cursoscap::find($id);

        return view('cursoscap.show', compact('cursoscap'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cursoscap = Cursoscap::find($id);

        return view('cursoscap.edit', compact('cursoscap'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Cursoscap $cursoscap
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cursoscap $cursoscap)
    {
        request()->validate(Cursoscap::$rules);

        $cursoscap->update($request->all());

        return redirect()->route('cursoscaps.index')
            ->with('success', 'Cursoscap updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $cursoscap = Cursoscap::find($id)->delete();

        return redirect()->route('cursoscaps.index')
            ->with('success', 'Cursoscap deleted successfully');
    }
}
