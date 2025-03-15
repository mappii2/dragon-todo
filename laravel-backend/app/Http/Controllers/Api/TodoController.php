<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class TodoController extends Controller
{
    /**
     * TODOを登録
     */
    public function store(Request $request)
    {
        // リクエストのバリデーション
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'details' => 'nullable|string'
        ]);

        // ログインユーザーのIDを追加
        $validated['user_id'] = Auth::id();

        // TODOを作成
        $todo = Todo::create($validated);

        // 作成したTODOを返す（ステータスコード：201 Created）
        return response()->json($todo, Response::HTTP_CREATED);
    }

    /**
     * ログインユーザーのTODO一覧を取得
     */
    public function index()
    {
        $todos = Auth::user()->todos()->latest()->get();
        return response()->json($todos);
    }
}