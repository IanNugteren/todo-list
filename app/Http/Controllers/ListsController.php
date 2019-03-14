<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ListModel;
use App\Http\Requests\ListRequest;

class ListsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lists = ListModel::all();

        return view ('lists.index', compact('lists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('lists.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ListRequest $listRequest)
    {
        $list = new ListModel;
        $list->title = $listRequest->title;
        $list->save();

        return redirect('/lists');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ListModel $listModel)
    {
        return view ('lists.show', compact('listModel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ListModel $listModel)
    {
        return view ('lists.edit', compact('listModel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ListModel $listModel, ListRequest $listRequest)
    {
        dd($listModel->title);
        // $listModel->title = $listRequest->title;
        // $listModel->update();

        // return redirect('/lists');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ListModel $listModel)
    {
        $listModel->delete();

        return redirect('/lists');
    }
}
