<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Support;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function index(Support $support)
    {

        $supports = $support->all();

//        Laravel protege ataque XSS
//        $xss = '<script>alert("HACKEANDO");</script>';

//        dd($supports);
        return view('admin.supports.index', compact('supports'));
    }

    public function show(string|int $id)
    {
//            dd($id);
//            Support::find($id)
//            Support::where('id', $id)->first();
//            Support::where('id','!=' $id)->first();
        if (!$support = Support::find($id)) {
            return back();
        }
//        dd($support->subject);

        return view('admin.supports.show', compact('support'));
    }

    public function create()
    {
        return view('admin.supports.create');
    }

    public function store(Request $request, Support $support)
    {
//        todos os dados
//        dd($request->all());
        $data = $request->all();
        $data ['status'] = 'a';

        $support = $support->create($data);
//        dd($support);

        return redirect()->route('supports.index');

    }

    public function edit(Support $support, string|int $id)
    {
        if (!$support = $support->where('id', $id)->first()) {
            return back();
        }
        return view('admin.supports.edit', compact('support'));
    }

    public function update(Request $request, Support $support, string $id)
    {
        if (!$support = $support->find($id)) {
            return back();
        }
//Alternativa mas muito mais verbosa...
//        $support->subject = $request->subject;
//        $support->body = $request->body;
//        $support->save();

        $support->update($request->only([
            'subject',
            'body'
        ]));

        return redirect()->route('supports.index');
    }
}
