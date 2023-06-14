<?php

namespace App\Http\Controllers;

use App\Models\Redsocial;
use Illuminate\Http\Request;

/**
 * Class RedsocialController
 * @package App\Http\Controllers
 */
class RedsocialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $redsocials = Redsocial::paginate();

        return view('redsocial.index', compact('redsocials'))
            ->with('i', (request()->input('page', 1) - 1) * $redsocials->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $redsocial = new Redsocial();
        return view('redsocial.create', compact('redsocial'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Redsocial::$rules);

        $redsocial = Redsocial::create($request->all());

        return redirect()->route('redsocials.index')
            ->with('success', 'Redsocial created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $redsocial = Redsocial::find($id);

        return view('redsocial.show', compact('redsocial'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $redsocial = Redsocial::find($id);

        return view('redsocial.edit', compact('redsocial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Redsocial $redsocial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Redsocial $redsocial)
    {
        request()->validate(Redsocial::$rules);

        $redsocial->update($request->all());

        return redirect()->route('redsocials.index')
            ->with('success', 'Redsocial updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $redsocial = Redsocial::find($id)->delete();

        return redirect()->route('redsocials.index')
            ->with('success', 'Redsocial deleted successfully');
    }
}
