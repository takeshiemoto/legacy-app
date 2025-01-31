<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreNewsRequest;
use App\Http\Requests\UpdateNewsRequest;
use App\Models\News;
use Illuminate\Database\Eloquent\Collection;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Collection
    {
        return News::query()
            ->with('user:id,name')  // ユーザー情報も含める（必要な項目のみ）
            ->orderBy('created_at', 'desc')  // 新しい順
            ->get([
                'id',
                'public_id',
                'title',
                'user_id',
                'created_at',
                'updated_at'
            ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNewsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNewsRequest $request, News $news)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        //
    }
}
