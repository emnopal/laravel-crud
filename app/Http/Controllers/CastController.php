<?php

namespace App\Http\Controllers;

use App\Cast;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CastController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(): Factory|View|Application
    {
        $data = Cast::get();
        return view('cast.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create(): Factory|View|Application
    {
        return view('cast.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'nama' => 'required|string|max:45',
            'umur' => 'integer',
            'bio' => 'string|max:1000',
        ]);

        Cast::create($request->all());

        return redirect()->route('cast.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param mixed $id
     * @return Application|Factory|View
     */
    public function show(mixed $id): Factory|View|Application
    {
        $data = Cast::findOrFail($id);
        return view('cast.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param mixed $id
     * @return Application|Factory|View
     */
    public function edit(mixed $id): Factory|View|Application
    {
        $data = Cast::findOrFail($id);
        return view('cast.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param mixed $id
     * @return RedirectResponse
     */
    public function update(Request $request, mixed $id): RedirectResponse
    {
        Cast::findOrFail($id)->update($request->all());
        return redirect()->route('cast.index')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param mixed $id
     * @return RedirectResponse
     */
    public function destroy(mixed $id): RedirectResponse
    {
        Cast::findOrFail($id)->delete();
        return redirect()->route('cast.index')->with('success', 'Data berhasil dihapus');
    }
}
